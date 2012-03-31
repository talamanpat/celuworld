<?php
/* Especificaciones Test cases generated on: 2011-05-13 01:32:53 : 1305261173*/
App::import('Controller', 'Especificaciones');

class TestEspecificacionesController extends EspecificacionesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EspecificacionesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.especificacion', 'app.celular', 'app.marca', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.precio', 'app.referencia', 'app.pais', 'app.usuario', 'app.video', 'app.so');

	function startTest() {
		$this->Especificaciones =& new TestEspecificacionesController();
		$this->Especificaciones->constructClasses();
	}

	function endTest() {
		unset($this->Especificaciones);
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
