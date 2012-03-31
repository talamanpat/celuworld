<?php
/*
 * talaman
 */

//debug($noticia);
?>
<section>
        <h1 id="tituloPagina"><?php e($noticia['Noticia']['titulo']); ?></h1>
    <!--        <div class="periodistaFecha"><?php e($noticia['Periodista']['nombre']); ?></div>
        <div class="periodistaFecha"><?php e($noticia['Noticia']['fecha']) ?></div>-->
    
    <article>
        <div class="bloque" id="noticia">

            <?php
            e($imagen->redimensionarNoticias(
                            $noticia['Noticia']['foto_nombre'], 253, $noticia['Noticia']['foto_nombre']));
            e($noticia['Noticia']['contenido']);
            ?>    
            <div class="clean"></div>
        </div>
    </article>
    <article>
        <div id="noticiaPost" class="posts">
            <?php echo $html->image('tegustoF2.jpg', array('alt' => 'Te gusto? danos un +1!', 'id' => 'megustaFlecha')) ?>
            <div >
                <div style="float: left;"><?php e($this->element('global/tweetHor')); ?></div>
                <div style="float: left; width: 70px;"><?php e($this->element('global/plusOneHorMedium')); ?></div>
                <div style="float: left;"><?php e($this->element('global/facebookLikeHor')); ?></div>
                <div style="width: 100%;height: 30px"></div>
            </div>
            <?php echo $this->element('global/facebookComents', array('urlcel' => $this->HProperties->APP . 'noticias/ver/' . $noticia['Noticia']['id_noticia']));?>
        </div>
    </article>
</section>

<aside>
    <div style="margin-left: 0px; width: 730px;margin-top: 50px;"><?php echo $this->element('addsense/celuworld4'); ?></div>
    <!--    <div style="margin-left: 0px;margin-top: 30px; width: 730px;">
    <?php //echo $this->element('addsense/celuworld10'); ?></div>-->
    <div style="margin-left: 0px;margin-top: 40px; width: 340px;">
        <?php echo $this->element('addsense/celuworld9');
        ?></div>
</aside>