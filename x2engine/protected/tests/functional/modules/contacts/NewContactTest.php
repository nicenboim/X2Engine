<?php

Yii::import('application.modules.contacts.models.Contacts');
Yii::import('application.modules.actions.models.Actions');

/**
 * 
 * @package X2CRM.tests.functional.modules.contacts
 */
class NewContactTest extends X2WebTestCase {

	public $fixtures = array(
		'contacts' => 'Contacts',
		'actions' => 'Actions'
	);
	
	public function testNewContactAndAccount() {
		$this->openX2('/contacts/create');
		$this->localSelenese('NewContactAndAccount.html');
	}
}

?>
