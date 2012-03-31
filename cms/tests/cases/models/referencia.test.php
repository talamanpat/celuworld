<?php
/* Referencia Test cases generated on: 2011-05-13 01:26:49 : 1305260809*/
App::import('Model', 'Referencia');

class ReferenciaTestCase extends CakeTestCase {
	var $fixtures = array('app.referencia', 'app.pais', 'app.usuario', 'app.precio');

	function startTest() {
		$this->Referencia =& ClassRegistry::init('Referencia');
	}

	function endTest() {
		unset($this->Referencia);
		ClassRegistry::flush();
	}

}
