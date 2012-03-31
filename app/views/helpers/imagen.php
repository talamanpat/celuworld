<?php
class ImagenHelper extends Helper {

    var $helpers = array('HProperties');

    function redimensionar($imagen, $altura, $alt="foto") {
        try {
            $archivo = $this->HProperties->APP_ROOT . 'webroot/img/celulares/' . $imagen;
            $tamano = getimagesize($archivo);

            return $this->output('<img src="' . $this->HProperties->APP . 'img/celulares/' . $imagen . '" 
      			height="' . $altura . '" 
      			width="' . intval($tamano['0'] * $altura / $tamano['1']) . '" 
                        alt="' . $alt . '" />');
        } catch (Exception $e) {
            return "";//$e->getMessage();
        }
    }
function redimensionarNoticias($imagen, $altura, $alt="foto") {
        try {
            $archivo = $this->HProperties->APP_ROOT . 'webroot/img/noticias/' . $imagen;
            $tamano = getimagesize($archivo);

            return $this->output('<img src="' . $this->HProperties->APP . 'img/noticias/' . $imagen . '" 
      			height="' . $altura . '" 
      			width="' . intval($tamano['0'] * $altura / $tamano['1']) . '" 
                        alt="' . $alt . '" / class="derecha">');
        } catch (Exception $e) {
            return "";//$e->getMessage();
        }
    }
}

?>