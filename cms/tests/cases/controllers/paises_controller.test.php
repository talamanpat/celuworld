<?php
/* Paises Test cases generated on: 2011-05-13 01:35:25 : 1305261325*/
App::import('Controller', 'Paises');

class TestPaisesController extends PaisesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaisesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pais', 'app.referencia', 'app.precio', 'app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.usuario', 'app.video');

	function startTest() {
		$this->Paises =& new TestPaisesController();
		$this->Paises->constructClasses();
	}

	function endTest() {
		unset($this->Paises);
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
