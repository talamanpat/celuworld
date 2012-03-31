<?php 
class ImagenHelper extends Helper{
    var $helpers = array('HProperties');
   function redimensionar($imagen, $altura,$alt="foto"){

      $archivo=$this->HProperties->APP_ROOT.'webroot/img/celulares/'.$imagen;
      $tamano = getimagesize($archivo);
      

      return $this->output('<img src="'.$this->HProperties->APP.'img/celulares/'.$imagen.'" 
      			height="'.$altura.'" 
      			width="'.intval($tamano['0']*$altura/$tamano['1']).'" 
                        alt="'.$alt.'" />');
   }
}
   
?>