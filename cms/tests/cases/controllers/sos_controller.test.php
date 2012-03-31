<?php
/* Sos Test cases generated on: 2011-05-13 01:31:59 : 1305261119*/
App::import('Controller', 'Sos');

class TestSosController extends SosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.so', 'app.especificacion', 'app.celular', 'app.marca', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.precio', 'app.referencia', 'app.pais', 'app.usuario', 'app.video');

	function startTest() {
		$this->Sos =& new TestSosController();
		$this->Sos->constructClasses();
	}

	function endTest() {
		unset($this->Sos);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
