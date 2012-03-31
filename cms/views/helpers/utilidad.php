<?php
class UtilidadHelper extends Helper{

	
	
	function booleanos($bul)
	{
		if ($bul == 1) {
			return $this->output('Si');
		} else
		if ($bul == 0) {
			return $this->output('No');
		}
	}
	
	function tablaInicio($id=null,$clase=null){
		if($id != null && $clase==null){
			return "<table id='".$id."'>";
		}
		elseif($id == null && $clase!=null){
			return "<table class='".$clase."' >";
		}
		elseif($id != null && $clase!==null){
			return "<table id='".$id."' class='".$clase."'>";
		}else return "<table>";
	}
	function tablaFin(){
		return "</table>";
	}

	function haveFoto($idCel){
		App::import('Controller', 'Fotos');
		$Fotos = new FotosController;
		$Fotos->haveFoto($idCel);
	}
}

 
?>