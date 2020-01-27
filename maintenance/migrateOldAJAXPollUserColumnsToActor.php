<?php
/**
 * @file
 * @ingroup Maintenance
 */
$IP = getenv( 'MW_INSTALL_PATH' );
if ( $IP === false ) {
	$IP = __DIR__ . '/../../..';
}
require_once "$IP/maintenance/Maintenance.php";

/**
 * Run automatically with update.php
 *
 * @since January 2020
 */
class MigrateOldAJAXPollUserColumnsToActor extends LoggedUpdateMaintenance {
	public function __construct() {
		parent::__construct();
		// @codingStandardsIgnoreLine
		$this->addDescription( 'Migrates data from old poll_user column in the ajaxpoll_vote table to the new actor column.' );
	}

	/**
	 * Get the update key name to go in the update log table
	 *
	 * @return string
	 */
	protected function getUpdateKey() {
		return __CLASS__;
	}

	/**
	 * Message to show that the update was done already and was just skipped
	 *
	 * @return string
	 */
	protected function updateSkippedMessage() {
		return 'ajaxpoll_vote has already been migrated to use the actor column.';
	}

	/**
	 * Do the actual work.
	 *
	 * @return bool True to log the update as done
	 */
	protected function doDBUpdates() {
		$dbw = $this->getDB( DB_MASTER );

		if ( $dbw->fieldExists( 'ajaxpoll_vote', 'poll_vote_id', __METHOD__ ) ) {
			return true;
		}

		$dbw->sourceFile( __DIR__ . '/../sql/drop-primary-key.sql' );
		$dbw->sourceFile( __DIR__ . '/../sql/add-new-primary-key.sql' );
		$dbw->sourceFile( __DIR__ . '/../sql/create-unique-index-poll_id_actor.sql' );
		$dbw->query(
			// @codingStandardsIgnoreLine
			"UPDATE {$dbw->tableName( 'ajaxpoll_vote' )} SET poll_actor=(SELECT actor_id FROM {$dbw->tableName( 'actor' )} WHERE actor_name=poll_user AND actor_user IS NOT NULL)",
			__METHOD__
		);

		return true;
	}
}

$maintClass = MigrateOldAJAXPollUserColumnsToActor::class;
require_once RUN_MAINTENANCE_IF_MAIN;
