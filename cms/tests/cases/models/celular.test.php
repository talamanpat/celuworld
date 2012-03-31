<?php
/* Celular Test cases generated on: 2011-05-13 01:22:22 : 1305260542*/
App::import('Model', 'Celular');

class CelularTestCase extends CakeTestCase {
	var $fixtures = array('app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.precio', 'app.usuario', 'app.video');

	function startTest() {
		$this->Celular =& ClassRegistry::init('Celular');
	}

	function endTest() {
		unset($this->Celular);
		ClassRegistry::flush();
	}

}
