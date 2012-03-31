<?php echo $this->Html->css(array('sitemap'), 'stylesheet', array('inline' => false));?>
<div id="contenedorSitemap">
    <div id="TituloPaginaGener"><h1>Mapa del Sitio</h1></div>
<?php e($this->Html->link("Home",$this->HProperties->APP));?><br>
<?php e($this->Html->link("Smartphones",$this->HProperties->APP.'lista/smarts')); ?><br>
<?php e($this->Html->link("Tablets",$this->HProperties->APP.'lista/tablets')); ?><br>
<?php e($this->Html->link("Sitemap",$this->HProperties->APP.'sitemap/usuario')); ?><br>
<?php foreach ($marcas as $marca): ?>
    <h3>
        <?php e($marca['Marca']['marca']); ?>
    </h3>
    <?php foreach ($marca['Celular'] as $celular): ?>
        <?php e($this->Html->link($celular['modelo'], array('controller' => 'celular', 'action' => 'ficha', $celular['id_celular']))); ?>
</br>
        <?php
    endforeach;
endforeach;
?>
</div>