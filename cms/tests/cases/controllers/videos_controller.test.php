<?php
/* Videos Test cases generated on: 2011-06-28 01:57:27 : 1309237047*/
App::import('Controller', 'Videos');

class TestVideosController extends VideosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VideosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.video', 'app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.precio', 'app.referencia', 'app.pais', 'app.usuario');

	function startTest() {
		$this->Videos =& new TestVideosController();
		$this->Videos->constructClasses();
	}

	function endTest() {
		unset($this->Videos);
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
?>