<?php
/* So Test cases generated on: 2011-05-13 01:08:02 : 1305259682*/
App::import('Model', 'So');

class SoTestCase extends CakeTestCase {
	var $fixtures = array('app.so', 'app.especificacion');

	function startTest() {
		$this->So =& ClassRegistry::init('So');
	}

	function endTest() {
		unset($this->So);
		ClassRegistry::flush();
	}

}
