<?php
/*
 * talaman
 */
?>

<article>
    <div class="bloque" id="noticias">
        <h2 class="verde">
            <?php e($this->Html->link($noticia['Noticia']['titulo'], array('controller'=>'noticias','action' => 'ver', $noticia['Noticia']['id_noticia']), array('escape' => false))); ?></h2>
            <?php
            e($imagen->redimensionarNoticias(
                            $noticia['Noticia']['foto_nombre'], 200, $noticia['Noticia']['foto_nombre']));
            e($text->truncate(strip_tags($noticia['Noticia']['contenido'], '<p>'), 800, array(
                        'ending' => '... ',
                        'exact' => false,
                        'html' => false
                            )
                    )
            );
            ?>    
        <div id="seguirComen">
            <?php e($this->Html->link(__('Seguir leyendo ' . $noticia['Noticia']['titulo'], true), array('controller'=>'noticias','action' => 'ver', $noticia['Noticia']['id_noticia']), array('class' => 'underline'))); ?>

            <?php echo $this->element('global/facebookComentsCount', array('url' => $this->HProperties->APP . 'noticias/ver/' . $noticia['Noticia']['id_noticia'])); ?>
        </div>

        <div class="clean"></div>
    </div>
</article>

<?php //echo $noticia['Noticia']['fecha'];   ?>
<?php
//echo $noticia['Noticia']['posicion']; ?>