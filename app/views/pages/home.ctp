<?php
//echo $this->Html->css(array('home', 'home-slider'), 'stylesheet', array('inline' => true));
echo $this->Html->script(array('homeSlider'), array('inline' => false));
?>
<h1 id="tituloPagina">BIENVENIDO  A CELUWORLD! </h1> 
<section>
    <?php e($this->element('pages/sliderHome', array('celulares' => $celularesSlider))); ?>
</section>
<section>
    <?php
    e($this->element('pages/sobreCeluworld'));
    ?>
</section>
<aside>
    <div style="margin-left: 0px;margin-top: 40px; width: 730px;">
        <?php echo $this->element('addsense/celuworld10'); ?>
    </div>
</aside>
<section>
    <h2 class="subTitulo" style="margin-top: 20px">Noticias</h2>
    <?php
    foreach ($noticias as $noticia):
        echo $this->element('pages/noticiaLista', array('noticia' => $noticia));
    endforeach;
    ?>
    <?php e($this->Html->link('Ver más noticias', array('controller'=>'noticias','action' => 'index'), array('id'=>'masNoticias','class' => 'derecha'))); ?>
</section>
<aside>
    <div style="margin-left: 0px;margin-top: 10px; width: 340px;">
        <?php echo $this->element('addsense/celuworld9'); ?>
    </div>
</aside>