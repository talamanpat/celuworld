<?php
if (Configure::read() == 0):
	$this->cakeError('error404');
endif;
?>

<h2>Inicio</h2>

<?php

$menucont = "<br><h3>Agregar</h3><ul>";
$menucont .= "<li>".$html->link('Celular', array('controller' => 'celulares', 'action' =>'add'))."</li>";
$menucont .= "<li>".$this->Html->link('Marca', array('controller' => 'Marcas', 'action' =>'add'))."</li>";
$menucont .= "<li>".$this->Html->link('Sistema Operativo',array('controller' =>'sos', 'action' => 'add'))."</li>";
$menucont .= "<li>".$this->Html->link('Referencia',array('controller' =>'Referencias', 'action' => 'add'))."</li></ul>";
$menucont .= $this->element('menuGeneral'); ;
echo $this->Html->div('actions', $menucont);
?>
<div class="view">
<h3>CeluWorld!</h3>
<?php echo $this->Html->link('Logout',array('controller' =>'users', 'action' => 'logout'))?>
<?php
if (Configure::read() > 0):
	Debugger::checkSecurityKeys();
endif;
?>
</div>

