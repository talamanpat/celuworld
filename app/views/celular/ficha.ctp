<?php
//echo $this->Html->css(array('detalle', 'detalle-slider'), 'stylesheet', array('inline' => true));
echo $this->Html->script(array('slides.min.jquery'), array('inline' => false));
echo $this->element('scripts/slide');
echo $this->element('scripts/slideVideo');
?>
<!--<aside>
    <div style="margin-left: 0px; width: 730px;margin-bottom: 20px;"><?php //echo $this->element('addsense/celuworld10'); ?></div>
</aside>-->
<section>
    <h1 id="tituloPagina"><?php e($celular['Marca']['marca']) ?> - <?php e($celular['Celular']['modelo']) ?></h1>
    <article>
        <?php echo $this->element('celular/fotosVideos'); ?>
    </article>
    <article>
        <?php echo $this->element('celular/descripcion'); ?>
    </article>
    <?php echo $this->element('celular/caracteristicas'); ?>
    <aside>
        <?php if (empty($similares)) { ?>
            <div style="margin-top: 30px;margin-left: 0px; width: 730px;"><?php echo $this->element('addsense/celuworld3'); ?></div>
        <?php } else { ?>
            <div style="margin-right: 330px; margin-top: 55px; float: right"><?php echo $this->element('addsense/celuworld8'); ?></div>
        <?php } ?>
    </aside>
    <article>
        <?php echo $this->element('celular/similares'); ?>
    </article>
    <article>
        <?php echo $this->element('celular/precios'); ?>
    </article>

    <article>
        <div class="posts" id="comentarios">
            <?php echo $html->image('tegustoF2.jpg', array('alt' => 'Te gusto? danos un +1!', 'id' => 'megustaFlecha')) ?>
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
<aside>
    <div style="margin-left: 0px; width: 730px;margin-top: 50px;"><?php echo $this->element('addsense/celuworld10'); ?></div>
</aside>
<aside>
    <?php //echo $this->element('kontextua/ficha_analisis'); ?>
</aside>