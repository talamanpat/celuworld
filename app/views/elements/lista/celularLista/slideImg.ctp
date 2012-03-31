<div class="SliderVt">
    <?php
    if (!empty($celular['Foto']))
        e($this->Html->link(
                        $imagen->redimensionar($celular['Celular']['id_celular'] . "/" . $celular['Foto'][0]['nombre'], 251, $celular['Marca']['marca'] . " " . $celular['Celular']['modelo']), $this->HProperties->APP . 'img/celulares/' . $celular['Celular']['id_celular'] . "/" . $celular['Foto'][0]['nombre'], array('escape' => false, 'rel' => $celular['Celular']['id_celular'])));
    $b = false;
    ?> 
    <div style="display: none;">  
        <?php
        foreach ($celular['Foto'] as $foto):
            if ($b) {
                ?> 

                <?php
                e($this->Html->link("", $this->HProperties->APP . 'img/celulares/' . $celular['Celular']['id_celular'] . "/" . $foto['nombre'], array('escape' => false, 'rel' => $celular['Celular']['id_celular'])));
                ?>

                <?php
            }else
                $b=true;
        endforeach;
        ?>
    </div>
</div>
<!--<div class="ContadorImagenes">
    <?php
    echo $this->element('scripts/fancy', array('rel' => $celular['Celular']['id_celular'], 'cel' => $celular['Marca']['marca'] . " " . $celular['Celular']['modelo']));
    e(count($celular['Foto']) . ' fotos');
    if (!empty($celular['Video'])) {
        e(' y ' . count($celular['Video']) . ((count($celular['Video']) == 1) ? ' video' : ' videos'));
    }
    ?>

</div>-->