<?php
/* Video Test cases generated on: 2011-06-28 01:56:29 : 1309236989*/
App::import('Model', 'Video');

class VideoTestCase extends CakeTestCase {
	var $fixtures = array('app.video', 'app.celular', 'app.marca', 'app.especificacion', 'app.so', 'app.comentario', 'app.evaluacion', 'app.foto', 'app.precio', 'app.referencia', 'app.pais', 'app.usuario');

	function startTest() {
		$this->Video =& ClassRegistry::init('Video');
	}

	function endTest() {
		unset($this->Video);
		ClassRegistry::flush();
	}

}
?>