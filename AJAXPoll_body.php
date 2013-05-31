<?php
/**
 * AJAX Poll class
 * Created by Dariusz Siedlecki, based on the work by Eric David.
 * Licensed under the GFDL.
 *
 * @file
 * @ingroup Extensions
 * @author Dariusz Siedlecki <datrio@gmail.com>
 * @author Jack Phoenix <jack@countervandalism.net>
 * @author Thomas Gries
 * @maintainer Thomas Gries
 * @link http://www.mediawiki.org/wiki/Extension:AJAX_Poll Documentation
 */

class AJAXPoll {

	/**
	* Register <poll> tag with the parser
	*
	* @param $parser Object: instance of Parser (not necessarily $wgParser)
	* @return Boolean: true
	*/
	static function onParserInit( $parser ) {
		global $wgOut;
		$parser->setHook( 'poll', array( __CLASS__, 'AJAXPollRender' ) );
		$wgOut->addModules( 'ext.ajaxpoll' );
		return true;
	}

	# The callback function for converting the input text to HTML output
	static function AJAXPollRender( $input, $args = array(), Parser $parser ) {
		global $wgUser, $wgOut, $wgTitle, $wgScriptPath, $wgUseAjax;

		$parser->disableCache();
		$parser->addTrackingCategory( 'ajaxpoll-tracking-category' );

		if ( $wgUser->getName() == '' ) {
			$userName = wfGetIP();
		} else {
			$userName = $wgUser->getName();
		}

		// ID of the poll
		$id = strtoupper( md5( $input ) );

		$par = new Parser();
		$input = $par->parse( $input, $wgTitle, $wgOut->parserOptions() );
		$input = trim( strip_tags( $input->getText() ) );
		$lines = explode( "\n", trim( $input ) );

		// compatibility for non-ajax requests - just in case
		if ( !$wgUseAjax ) {
			$responseId = "ajaxpoll-post-id";
			$responseAnswer = "ajaxpoll-post-answer-$id";
			$responseToken = "ajaxPollToken";

			if ( isset( $_POST[$responseId] )
				&& isset( $_POST[$responseAnswer] ) 
				&& ( $_POST[$responseId] == $id )
				&& isset( $_POST[$responseToken] ) ) {
				self::submitVote( $id, intval( $_POST[$responseAnswer] ), $_POST[$responseToken] );
			}
		}
		
		$dbw = wfGetDB( DB_MASTER );
		$dbw->begin( __METHOD__ );

		/**
		* Register poll in the database
		*/

		$row = $dbw->selectRow(
			array( 'ajaxpoll_info' ),
			array( 'COUNT(poll_id) AS count' ),
			array( 'poll_id' => $id ),
			__METHOD__
		);

		$showResultsBeforeVoting = null;
		if ( array_key_exists( 'show-results-before-voting', $args ) ) {
			if ( strval( $args['show-results-before-voting'] ) !== '0' ) {
				$showResultsBeforeVoting = '1';
			} else {
				$showResultsBeforeVoting = '0';
			}
		}

		if( empty( $row->count ) ) {
			$dbw->insert(
				'ajaxpoll_info',
				array(
					'poll_id' => $id,
					'poll_show_results_before_voting' => $showResultsBeforeVoting,
					'poll_txt' => $input,
					'poll_date' => wfTimestampNow(),
				),
				__METHOD__
			);
		} else {
			$dbw->update(
				'ajaxpoll_info',
				array(
					'poll_show_results_before_voting' => $showResultsBeforeVoting,
				),
				array(
					'poll_id' => $id,
				),
				__METHOD__
			);
		}

		$dbw->commit( __METHOD__ );

		switch( $lines[0] ) {
			case 'STATS':
				$retVal = self::buildStats( $id, $userName );
				break;
			default:
				$retVal = '
<div id="ajaxpoll-container-' . $id . '">' .
self::buildHTML( $id, $userName, $lines ) .
'</div>';
				break;
		}
		return $retVal;
	}

	private static function buildStats( $id, $userName ) {

		$dbr = wfGetDB( DB_SLAVE );
		$dbr->begin( __METHOD__ );

		$res = $dbr->select(
			'ajaxpoll_vote',
			array(
				'COUNT(*)',
				'COUNT(DISTINCT poll_id)',
				'COUNT(DISTINCT poll_user)',
				'TIMEDIFF(NOW(), MAX(poll_date))'
			),
			array(),
			__METHOD__
		);
		$tab = $dbr->fetchRow( $res );

		$clock = explode( ':', $tab[3] );

		if ( $clock[0] == '00' && $clock[1] == '00' ) {
			$x = $clock[2];
			$y = 'second';
		} elseif( $clock[0] == '00' ) {
			$x = $clock[1];
			$y = 'minute';
		} else {
			if ( $clock[0] < 24 ) {
				$x = $clock[0];
				$y = 'hour';
			} else {
				$x = floor( $hr / 24 );
				$y = 'day';
			}
		}

		$clockago = $x . ' ' . $y . ( $x > 1 ? 's' : '' );

		$res = $dbr->select(
			'ajaxpoll_vote',
			'COUNT(*)',
			array( 'DATE_SUB(CURDATE(), INTERVAL 2 DAY) <= poll_date' ),
			__METHOD__
		);
		$tab2 = $dbr->fetchRow( $res );

		$dbr->commit( __METHOD__ );

		return "There are $tab[1] polls and $tab[0] votes given by $tab[2] different people.<br />
The last vote has been given $clockago ago.<br/>
During the last 48 hours, $tab2[0] votes have been given.";
	}

	public static function submitVote( $id, $answer, $token ) {
		global $wgUser,$wgOut,$wgRequest;

		$dbw = wfGetDB( DB_MASTER );
		$dbw->begin( __METHOD__ );

		if ( $wgUser->getName() == '' ) {
			$userName = wfGetIP();
		} else {
			$userName = $wgUser->getName();
		}

		if ( !$wgUser->matchEditToken( $token, $id ) ) {
			$pollContainerText = 'ajaxpoll-error-csrf-wrong-token';
			return self::buildHTML( $id, $userName, '', $pollContainerText );
		}

		if ( !$wgUser->isAllowed( 'ajaxpoll-vote' ) || $wgUser->isAllowed( 'bot' ) ) {
			return self::buildHTML( $id, $userName );
		}

		if ( $answer != 0 ) {

			$answer = ++$answer;

			$q = $dbw->select(
				'ajaxpoll_vote',
				'COUNT(*) AS count',
				array(
					'poll_id' => $id,
					'poll_user' => $userName
				),
				__METHOD__
			);
			$row = $dbw->fetchRow( $q );

			if ( $row['count'] > 0 ) {

				$updateQuery = $dbw->update(
					'ajaxpoll_vote',
					array(
						'poll_answer' => $answer,
						'poll_date' => wfTimestampNow()
					),
					array(
						'poll_id' => $id,
						'poll_user' => $userName,
					),
					__METHOD__
				);
				$dbw->commit( __METHOD__ );
				$pollContainerText = ( $updateQuery ) ? 'ajaxpoll-vote-update' : 'ajaxpoll-vote-error';

			} else {

				$insertQuery = $dbw->insert(
					'ajaxpoll_vote',
					array(
						'poll_id' => $id,
						'poll_user' => $userName,
						'poll_ip' => wfGetIP(),
						'poll_answer' => $answer,
						'poll_date' => wfTimestampNow()
					),
					__METHOD__
				);
				$dbw->commit( __METHOD__ );
				$pollContainerText = ( $insertQuery ) ? 'ajaxpoll-vote-add' : 'ajaxpoll-vote-error';

			}
		
		} else { // revoking a vote

			$deleteQuery = $dbw->delete(
				'ajaxpoll_vote',
				array(
					'poll_id' => $id,
					'poll_user' => $userName,
				),
				__METHOD__
			);
			$dbw->commit( __METHOD__ );
			$pollContainerText = ( $deleteQuery ) ? 'ajaxpoll-vote-revoked' : 'ajaxpoll-vote-error';

		}

		return self::buildHTML( $id, $userName, '', $pollContainerText );

	}

	private static function buildHTML( $id, $userName, $lines = '', $extra_from_ajax = '' ) {
		global $wgTitle, $wgUser, $wgLang, $wgUseAjax;

		$dbr = wfGetDB( DB_SLAVE );

		$q = $dbr->select(
			'ajaxpoll_info',
			array( 'poll_txt', 'poll_date', 'poll_show_results_before_voting' ),
			array( 'poll_id' => $id ),
			__METHOD__
		);
		$row = $dbr->fetchRow( $q );

		if ( empty( $lines ) ) {
			$lines = explode( "\n", trim( $row['poll_txt'] ) );
		}

		if ( $row['poll_show_results_before_voting'] !== null ) {
			$showResultsBeforeVoting = ( $row['poll_show_results_before_voting'] === '1' );
		} else {
			$showResultsBeforeVoting = $wgUser->isAllowed( 'ajaxpoll-view-results-before-vote' );
		}

		$start_date = $row['poll_date'];

		$q = $dbr->select(
			'ajaxpoll_vote',
			array( 'poll_answer', 'COUNT(*)' ),
			array( 'poll_id' => $id ),
			__METHOD__,
			array( 'GROUP BY' => 'poll_answer' )
		);

		$poll_result = array();

		while ( $row = $q->fetchRow() ) {
			$poll_result[$row[0]] = $row[1];
		}

		$amountOfVotes = array_sum( $poll_result );

		// Did we vote?
		$userVoted = false;

		$q = $dbr->select(
			'ajaxpoll_vote',
			array( 'poll_answer', 'poll_date' ),
			array(
				'poll_id' => $id,
				'poll_user' => $userName
			),
			__METHOD__
		);

		if ( $row = $dbr->fetchRow( $q ) ) {
			$ourLastVoteDate = wfMessage(
				'ajaxpoll-your-vote',
				$lines[$row[0] - 1],
				$wgLang->timeanddate( wfTimestamp( TS_MW, $row[1] ), true /* adjust? */ )
			)->escaped();
			$userVoted = true;
		}

		if ( is_object( $wgTitle ) ) {
			if( !empty( $extra_from_ajax ) ) {
				$attributes = ' style="display:inline-block;"';
				$ajaxMessage = wfMessage( $extra_from_ajax )->escaped();
			} else {
				$attributes = ' style="display:none;"';
				$ajaxMessage = '';
			}
			// HTML output has to be on one line thanks to a MediaWiki bug
			// @see https://bugzilla.wikimedia.org/show_bug.cgi?id=1319
			$ret = '<script>var useAjax='. ( !empty($wgUseAjax) ? "true" : "false" ) . ';</script>
<div id="ajaxpoll-id-' . $id . '" class="ajaxpoll">
<div id="ajaxpoll-ajax-' . $id . '" class="ajaxpoll-ajax"' . $attributes . '>' . $ajaxMessage . '</div>
<div class="ajaxpoll-question">' . strip_tags( $lines[0] ) . '</div>';

			// Different message depending on if the user has already voted or not, or is entitled to vote

			$canRevoke = false;

			if ( $wgUser->isAllowed( 'ajaxpoll-vote' ) ) {
				if ( isset( $row[0] ) ) {
					$message = $ourLastVoteDate;
					$canRevoke = true;
					$lines[] = wfMessage( 'ajaxpoll-revoke-vote' )->text();
				} else {
					if ( $showResultsBeforeVoting ) {
						$message = wfMessage( 'ajaxpoll-no-vote' )->text();
					} else {
						$message = wfMessage( 'ajaxpoll-no-vote-results-after-voting' )->text();
					}
				}
			} else {
				$message = wfMessage( 'ajaxpoll-vote-permission' )->text();
			}

			if ( !$wgUser->isAllowed( 'ajaxpoll-view-results' ) ) {

				$message .= "<br/>" . wfMessage( 'ajaxpoll-view-results-permission' )->text();

			} elseif ( !$userVoted
				&& !$wgUser->isAllowed( 'ajaxpoll-view-results-before-vote' )
				&& !$showResultsBeforeVoting ) {

					if ( $wgUser->isAllowed( 'ajaxpoll-vote' ) ) {
						$message .= "<br/>" . wfMessage( 'ajaxpoll-view-results-before-vote-permission' )->text();
					} else {
						$message .= "<br/>" . wfMessage( 'ajaxpoll-view-results-permission' )->text();
					}

			}

			$ret .= '<div class="ajaxpoll-misc">' . $message . '</div>';

			$ret .= '<form method="post" action="' . $wgTitle->getLocalURL() .
				'" id="ajaxpoll-answer-id-' . $id . '"><input type="hidden" name="ajaxpoll-post-id" value="' . $id . '" />';

			for ( $i = 1; $i < count( $lines ); $i++ ) {

				$vote = !( $canRevoke && ( $i == count( $lines ) - 1 ) );

				// answers are counted from 1 ... n
				// last answer is pseudo-answer for "I want to revoke vote"
				// and becomes answer number 0

				$answer = ( $vote ) ? $i : 0;
				$xid = $id . "-" . $answer;

				if ( $amountOfVotes == 0 ) {
					$percent = 0;
				} else {
					$percent = round( ( isset( $poll_result[$i + 1] ) ? $poll_result[$i + 1] : 0 ) * 100 / $amountOfVotes, 2 );
					$percentLocalized = $wgLang->formatNum( $percent );
				}

				$our = ( isset( $row[0] ) && ( $row[0] - 1 == $i ) );

				// If AJAX is enabled, as it is by default in modern MWs, we can
				// just use sajax library function here for that AJAX-y feel.
				// If not, we'll have to submit the form old-school way...

				if ( $wgUser->isAllowed( 'ajaxpoll-view-results' )
					&& ( $showResultsBeforeVoting || ( !$showResultsBeforeVoting && $userVoted ) ) ) {
					$resultBar = "<div class='ajaxpoll-answer-vote" . ( $our ? ' ajaxpoll-our-vote' : '' ) ."'>
<span title='" . wfMessage( 'ajaxpoll-percent-votes', sprintf( $percentLocalized ) )->escaped() . "'>" . ( ( isset( $poll_result ) && !empty( $poll_result[$i + 1] ) ) ? $poll_result[$i + 1] : 0 ) . "</span>
<div style='width:" . $percent . "%;" . ( $percent == 0 ? ' border:0;' : '' ) . "'></div>
</div>";
				} else {
					$resultBar = '';
				}

				if ( $wgUser->isAllowed( 'ajaxpoll-vote' ) ) {

					// HTML output has to be on one line thanks to a MediaWiki bug
					// @see https://bugzilla.wikimedia.org/show_bug.cgi?id=1319

					if ( $vote ) {
						$ret .= "
<div id='ajaxpoll-answer-$xid' class='ajaxpoll-answer' poll='$id' answer='$answer'><div class='ajaxpoll-answer-name'><label for='ajaxpoll-post-answer-$xid'><input type='radio' id='ajaxpoll-post-answer-$xid' name='ajaxpoll-post-answer-$id' value='" . $answer . "' " . ( $our ? 'checked=true ' : '' ) . "/>" . strip_tags( $lines[$i] ) .
"</label></div>{$resultBar}</div>
";
					} else {
						$ret .= "
<div id='ajaxpoll-answer-$xid' class='ajaxpoll-answer' poll='$id' answer='$answer'><div class='ajaxpoll-answer-name ajaxpoll-answer-name-revoke'><label for='ajaxpoll-post-answer-$xid'><input type='radio' id='ajaxpoll-post-answer-$xid' name='ajaxpoll-post-answer-$id' value='" . $answer . "' " . ( $our ? 'checked=true ' : '' ) . "/>" . strip_tags( $lines[$i] ) .
"</label></div>
</div>
";
					}

				} else {

					$ret .= "
<div id='ajaxpoll-answer-" . $xid . "' class='ajaxpoll-answer' poll='$id' answer='$answer'><div class='ajaxpoll-answer-name'><label for='ajaxpoll-post-answer-" . $xid . "' onclick='$(\"#ajaxpoll-ajax-" . $xid . "\").html(\"" . wfMessage( 'ajaxpoll-vote-permission' )->text() . "\").css(\"display\",\"block\");'><input disabled='disabled' type='radio' id='ajaxpoll-post-answer-" . $xid . "' name='ajaxpoll-post-answer-" . $id . "' value='" . $answer . "'/>" . strip_tags( $lines[$i] ) .
"</label></div>{$resultBar}</div>
";
				}

			}

			$ret .= Html::Hidden( 'ajaxPollToken', $wgUser->getEditToken( $id ) ) .
				Xml::closeElement( 'form' );

			// Display information about the poll (creation date, amount of votes)
			$pollSummary = wfMessage(
				'ajaxpoll-info',
				$amountOfVotes, // amount of votes
				$wgLang->timeanddate( wfTimestamp( TS_MW, $start_date ), true /* adjust? */ )
			)->text();

			$ret .= '<div id="ajaxpoll-info-' . $id . '" class="ajaxpoll-info">' . $pollSummary . '<div class="ajaxpoll-id-info">poll-id ' . $id . '</div></div></div>';
		} else {
			$ret = '';
		}

		return $ret;
	}

	public static function onLoadExtensionSchemaUpdates( $updater = null ) {
		if ( $updater === null ) {
			// no < 1.17 support
		} else {
			// >= 1.17 support
			$db = $updater->getDB();

			$patchPath = dirname( __FILE__ ) . '/patches/';

			if ( $db->tableExists( 'poll_info' ) ) {

				# poll_info.poll_title field was dropped in AJAXPoll version 1.72
				$updater->dropExtensionField( 
					'poll_info',
					'poll_title',
					$patchPath . 'drop-field--poll_info-poll_title.sql'
				);
				$updater->addExtensionTable(
					'ajaxpoll_info',
					$patchPath . 'rename-table--poll_info.sql'
				);

			} else {

				$updater->addExtensionTable(
					'ajaxpoll_info',
					$patchPath . 'create-table--ajaxpoll_info.sql'
				);

			}

			if ( $db->tableExists( 'ajaxpoll_info' ) ) {
				$updater->addExtensionField(
					'ajaxpoll_info',
					'poll_show_results_before_voting',
					$patchPath . 'add-field--ajaxpoll_info-poll_show_results_before_voting.sql'
				);
			}

			if ( $db->tableExists( 'poll_vote' ) ) {

				$updater->addExtensionTable(
					'poll_vote',
					$patchPath . 'rename-table--poll_vote.sql'
				);

			} else {

				$updater->addExtensionTable(
					'ajaxpoll_vote',
					$patchPath . 'create-table--ajaxpoll_vote.sql'
				);

			}

		}

		return true;
	}

} /* class AJAXPoll */
