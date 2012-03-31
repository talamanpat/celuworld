<?php
/* Celulares Test cases generated on: 2011-05-13 01:34:13 : 1305261253*/
App::import('Controller', 'Celulares');

class TestCelularesController extends CelularesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CelularesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.precio', 'app.referencia', 'app.pais', 'app.usuario', 'app.video');

	function startTest() {
		$this->Celulares =& new TestCelularesController();
		$this->Celulares->constructClasses();
	}

	function endTest() {
		unset($this->Celulares);
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
