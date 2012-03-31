<?php
/* Marca Test cases generated on: 2011-05-13 01:04:18 : 1305259458*/
App::import('Model', 'Marca');

class MarcaTestCase extends CakeTestCase {
	var $fixtures = array('app.marca', 'app.celular');

	function startTest() {
		$this->Marca =& ClassRegistry::init('Marca');
	}

	function endTest() {
		unset($this->Marca);
		ClassRegistry::flush();
	}

}
