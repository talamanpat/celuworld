<?php
/* Especificacion Test cases generated on: 2011-05-13 01:15:00 : 1305260100*/
App::import('Model', 'Especificacion');

class EspecificacionTestCase extends CakeTestCase {
	var $fixtures = array('app.especificacion', 'app.celular', 'app.so');

	function startTest() {
		$this->Especificacion =& ClassRegistry::init('Especificacion');
	}

	function endTest() {
		unset($this->Especificacion);
		ClassRegistry::flush();
	}

}
