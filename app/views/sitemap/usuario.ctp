<h1 id="tituloPagina">Mapa del Sitio</h1>
<div id="linksSitemap" class="bloque">
    <h2>Secciones</h2>
    <?php e($this->Html->link("Home", $this->HProperties->APP)); ?><br>
    <?php e($this->Html->link("Smartphones", $this->HProperties->APP . 'lista/smartphones')); ?><br>
    <?php e($this->Html->link("Tablets", $this->HProperties->APP . 'lista/tablets')); ?><br>
    <?php e($this->Html->link("Noticias", $this->HProperties->APP . 'noticias')); ?><br>
    <?php e($this->Html->link("Sitemap", $this->HProperties->APP . 'sitemap/usuario')); ?><br>
    <div class="clean"></div>
    <h2>Celulares</h2>
    <?php foreach ($marcas as $marca): ?>
        <h3>
            <?php e($marca['Marca']['marca']); ?>
        </h3>
        <?php foreach ($marca['Celular'] as $celular): ?>
            <?php e($this->Html->link($celular['modelo'], array('controller' => 'celular', 'action' => 'ficha', $celular['id_celular']))); ?>
            <br/>
            <?php
        endforeach;
    endforeach;
    ?>
</div>
<aside> 
    <div style="margin-left: 0px;margin-top: 40px; width: 340px;">
        <?php echo $this->element('addsense/celuworld9'); ?>
    </div>
    <div style="margin-top: 50px;margin-left: 0px; width: 730px;">
        <?php echo $this->element('addsense/celuworld4'); ?>
    </div>
</aside>