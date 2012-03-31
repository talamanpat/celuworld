<?php
/* Marcas Test cases generated on: 2011-05-13 01:31:22 : 1305261082*/
App::import('Controller', 'Marcas');

class TestMarcasController extends MarcasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MarcasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.marca', 'app.celular', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.precio', 'app.referencia', 'app.pais', 'app.usuario', 'app.video');

	function startTest() {
		$this->Marcas =& new TestMarcasController();
		$this->Marcas->constructClasses();
	}

	function endTest() {
		unset($this->Marcas);
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
