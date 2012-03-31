<?php echo $this->Html->css(array('lista', 'filtros', 'widget'), 'stylesheet', array('inline' => true));?>
<nav>
<?php echo $this->element('lista/filtros',array('titulo'=>'Tablets')); ?>
<?php echo $this->element('lista/paginacion/orden'); ?>
<?php echo $this->element('lista/paginacion/contador'); ?>
<?php echo $this->element('lista/paginacion/navegador'); ?>
</nav>
<?php
$i = 1;
foreach ($celulares as $celular):
    echo $this->element('lista/celularLista', array("celular" => $celular));
    if ($i == 3) {
        ?><div style="margin-left: 0px; width: 730px;">
        <?php echo $this->element('addsense/celuworld4'); ?>
        </div><?php
    }
    $i++;
endforeach;
?>
<nav>
<?php echo $this->element('lista/paginacion/contador'); ?>
<?php echo $this->element('lista/paginacion/navegador'); ?>
</nav>
<div style="margin-top: 50px;margin-left: 0px; width: 730px;"><?php echo $this->element('addsense/celuworld4'); ?></div>
