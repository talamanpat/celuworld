<?php
/* Precio Test cases generated on: 2011-05-13 01:30:02 : 1305261002*/
App::import('Model', 'Precio');

class PrecioTestCase extends CakeTestCase {
	var $fixtures = array('app.precio', 'app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.usuario', 'app.video', 'app.referencia', 'app.pais');

	function startTest() {
		$this->Precio =& ClassRegistry::init('Precio');
	}

	function endTest() {
		unset($this->Precio);
		ClassRegistry::flush();
	}

}
