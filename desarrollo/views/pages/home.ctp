<?php
echo $this->Html->css(array('home', 'home-slider'), 'stylesheet', array('inline' => true));
echo $this->Html->script(array('homeSlider'), array('inline' => false));
?>
<div id="TituloPaginaGener"> 
    <h1>BIENVENIDO  A CELUWORLD! </h1> 
</div>
<section>
    <?php e($this->element('pages/sliderHome', array('celulares' => $celularesSlider))); ?>
</section>
<section>
    <?php
    e($this->element('pages/sobreCeluworld'));
    ?>
</section>
<div style="margin-left: 0px;margin-top: 40px; width: 730px;">
    <?php echo $this->element('addsense/celuworld4'); ?>
</div>
<section>
<?php
e($this->element('pages/noticias'));
?>
</section>
<div style="margin-left: 0px;margin-top: 40px; width: 340px;">
    <?php echo $this->element('addsense/celuworld9'); ?>
</div>