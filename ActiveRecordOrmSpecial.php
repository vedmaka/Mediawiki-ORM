<?php

/**
 * Special page that allows authorised users to rename
 * user accounts
 */
class ActiveRecordOrmSpecial extends SpecialPage {
	public function __construct() {
		parent::__construct( 'Orm', 'vieworm' );
	}

	/**
	 * Show the special page
	 *
	 * @param mixed $par Parameter passed to the page
	 * @throws UserBlockedError|PermissionsError
	 * @return void
	 */
	public function execute( $par ) {
		global $wgContLang, $wgCapitalLinks;

		$this->setHeaders();

		$out = $this->getOutput();

		$out->addHTML('Hello!');

	}

}
