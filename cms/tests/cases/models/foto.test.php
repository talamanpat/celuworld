<?php
/* Foto Test cases generated on: 2011-05-13 01:18:11 : 1305260291*/
App::import('Model', 'Foto');

class FotoTestCase extends CakeTestCase {
	var $fixtures = array('app.foto', 'app.celular');

	function startTest() {
		$this->Foto =& ClassRegistry::init('Foto');
	}

	function endTest() {
		unset($this->Foto);
		ClassRegistry::flush();
	}

}
