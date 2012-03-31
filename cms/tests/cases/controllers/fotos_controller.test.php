<?php
/* Fotos Test cases generated on: 2011-05-13 01:33:27 : 1305261207*/
App::import('Controller', 'Fotos');

class TestFotosController extends FotosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FotosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.foto', 'app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.precio', 'app.referencia', 'app.pais', 'app.usuario', 'app.video');

	function startTest() {
		$this->Fotos =& new TestFotosController();
		$this->Fotos->constructClasses();
	}

	function endTest() {
		unset($this->Fotos);
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
