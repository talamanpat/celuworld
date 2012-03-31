<?php
/* Precios Test cases generated on: 2011-05-13 01:35:59 : 1305261359*/
App::import('Controller', 'Precios');

class TestPreciosController extends PreciosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PreciosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.precio', 'app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.usuario', 'app.video', 'app.referencia', 'app.pais');

	function startTest() {
		$this->Precios =& new TestPreciosController();
		$this->Precios->constructClasses();
	}

	function endTest() {
		unset($this->Precios);
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
