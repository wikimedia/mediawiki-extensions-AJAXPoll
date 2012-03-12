<?php
/**
 * AJAX Poll extension for MediaWiki
 * Created by Dariusz Siedlecki, based on the work by Eric David.
 * Licensed under the GFDL.
 *
 * <poll>
 * [Option]
 * Question
 * Answer 1
 * Answer 2
 * Answer ...
 * Answer n
 * </poll>
 *
 * @file
 * @ingroup Extensions
 * @author Dariusz Siedlecki <datrio@gmail.com>
 * @author Jack Phoenix <jack@countervandalism.net>
 * @author Thomas Gries
 * @maintainer Thomas Gries
 * @version 1.64
 * @link http://www.mediawiki.org/wiki/Extension:AJAX_Poll Documentation
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( "This is not a valid entry point.\n" );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'AJAX Poll',
	'version' => '1.64 20120312',
	'author' => array( 'Dariusz Siedlecki', 'Jack Phoenix', 'Thomas Gries' ),
	'descriptionmsg' => 'ajaxpoll-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:AJAX_Poll',
);

// Internationalization + AJAX function
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['AJAXPoll'] = $dir . 'AJAXPoll.i18n.php';
$wgAutoloadClasses['AJAXPoll'] = $dir . 'AJAXPoll_body.php';
$wgAjaxExportList[] = 'AJAXPoll::submitVote';
$wgHooks['ParserFirstCallInit'][] = 'AJAXPoll::AJAXPollParserInit';

# new user rights
$wgAvailableRights[] = 'ajaxpoll-vote';

# default: nobody can vote
$wgGroupPermissions['*']['ajaxpoll-vote'] = false;
# allow users to vote
# $wgGroupPermissions['user']['ajaxpoll-vote'] = true;

// Parameter to enable the automatic tracking category
// for all pages using this parser extension
//
// Category name [[MediaWiki:Ajaxpoll-tracking-category]] (default)
// $wgAJAXPollTrackingCategory = true;
//
// you can assign a specific category name [[MediaWiki:Ajaxpoll-mycategory]]
// $wgAJAXPollTrackingCategory = 'ajaxpoll-mycategory';
//
// you can disable the use of a tracking category
// $wgAJAXPollTrackingCategory = false;
$wgAJAXPollTrackingCategory = true;
