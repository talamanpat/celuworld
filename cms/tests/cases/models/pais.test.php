<?php
/* Pais Test cases generated on: 2011-05-13 01:24:47 : 1305260687*/
App::import('Model', 'Pais');

class PaisTestCase extends CakeTestCase {
	var $fixtures = array('app.pais', 'app.referencia', 'app.usuario');

	function startTest() {
		$this->Pais =& ClassRegistry::init('Pais');
	}

	function endTest() {
		unset($this->Pais);
		ClassRegistry::flush();
	}

}
