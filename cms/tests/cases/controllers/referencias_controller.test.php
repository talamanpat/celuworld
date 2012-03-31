<?php
/* Referencias Test cases generated on: 2011-05-13 01:35:43 : 1305261343*/
App::import('Controller', 'Referencias');

class TestReferenciasController extends ReferenciasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReferenciasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.referencia', 'app.pais', 'app.usuario', 'app.precio', 'app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.video');

	function startTest() {
		$this->Referencias =& new TestReferenciasController();
		$this->Referencias->constructClasses();
	}

	function endTest() {
		unset($this->Referencias);
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
