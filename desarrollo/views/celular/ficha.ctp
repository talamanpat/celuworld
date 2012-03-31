<?php
echo $this->Html->css(array('detalle', 'detalle-slider'), 'stylesheet', array('inline' => true));
echo $this->Html->script(array('slides.min.jquery'), array('inline' => false));
echo $this->element('scripts/slide');
echo $this->element('scripts/slideVideo');
?>
<section>
    <article>
        <?php echo $this->element('celular/fotosVideos'); ?>
    </article>
    <article>
        <?php echo $this->element('celular/descripcion'); ?>
    </article>
    <?php
    if (!ife(count($celular['Video']) == 0, true, false)) {
        ?>
        <div style="margin-top: 30px;margin-left: 0px;width: 468px;"><?php echo $this->element('addsense/celuworld7'); ?></div>
    <?php } ?>

        <?php echo $this->element('celular/caracteristicas'); ?>
    <div style="margin-top: 30px;margin-left: 0px; width: 730px;"><?php echo $this->element('addsense/celuworld3'); ?></div>
    <article>
        <?php echo $this->element('celular/precios'); ?>
    </article>
    <article>
        <div id="posts">
             <?php echo $html->image('tegustoF2.jpg', array('alt' => 'Te gusto? danos un +1!','id'=>'megustaFlecha'))?>
            <div >
                <div style="float: left;"><?php e($this->element('global/tweetHor')); ?></div>
                <div style="float: left; width: 70px;"><?php e($this->element('global/plusOneHorMedium')); ?></div>
                <div style="float: left;"><?php e($this->element('global/facebookLikeHor')); ?></div>
                <div style="width: 100%;height: 30px"></div>
            </div>
            <?php echo $this->element('global/facebookComents', array('urlcel' => $this->HProperties->APP . 'celular/ficha/' . $celular['Celular']['id_celular'])); ?>
        </div>
    </article>
</section>
<div style="margin-left: 0px; width: 730px;margin-top: 50px;"><?php echo $this->element('addsense/celuworld4'); ?></div>