<?php
/*
 * talaman
 */
?>
<div id="sliderHome"class="bloque">
    <h2>Novedades</h2>

    <!--    <div  id class="ContenidoSlider">-->
    <div class="sliderContainer">
        <a href="#siguiente" class="next" title="Siguiente"></a>
        <a href="#anterior" class="prev" title="Anterior"></a>
        <div id="slider">
            <div class="slidesContainer">

                <?php
                foreach ($celulares as $celular):
                    ?>
                    <div class="slide">
                        <div class="ContFoto">
                            <?php
                            if (!empty($celular['Foto']))
                                e($this->Html->link(
                                                $imagen->redimensionar($celular['Celular']['id_celular'] . "/" . $celular['Foto'][0]['nombre'], 251, $celular['Marca']['marca'] . " " . $celular['Celular']['modelo']), $this->HProperties->APP . 'img/celulares/' . $celular['Celular']['id_celular'] . "/" . $celular['Foto'][0]['nombre'], array('escape' => false, 'rel' => $celular['Celular']['id_celular'])));
                            $b = false;
                            ?> 
                            <div style="display: none;"><?php
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
                            <div class="ContadorImagenes">
                                <?php
                                echo $this->element('scripts/fancy', array('rel' => $celular['Celular']['id_celular'], 'cel' => $celular['Marca']['marca'] . " " . $celular['Celular']['modelo']));
                                e(count($celular['Foto']) . ' fotos');
                                if (!empty($celular['Video'])) {
                                    e(' y ' . count($celular['Video']) . ((count($celular['Video']) == 1) ? ' video' : ' videos'));
                                }
                                ?>

                            </div>
                        </div>
                        <div class="ContInfo">
                            <h2><?php e($celular['Celular']['modelo']); ?></h2>
                            <p><?php
                            e($text->truncate(strip_tags($celular['Especificacion']['analisis']), 345, array('ending' => '... ' . $this->Html->link("ver más", array('controller' => 'celular', 'action' => 'ficha', $celular['Celular']['id_celular']), array()),
                                        'exact' => false, 'html' => false)));
                                ?>
                            </p>

                            <div id="sliderDescripcion">
                                <table >
                                    <tr>
                                        <td><span>Marca:</span> <?php e($celular['Marca']['marca']); ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>Tipo: </span><?php
                            e($utilidad->booleanosTxt($celular['Especificacion']['smart'], 'Smartphone'));
                            e($utilidad->booleanosTxt($celular['Especificacion']['basico'], 'basico'));
                            e($utilidad->booleanosTxt($celular['Especificacion']['tablet'], 'tablet'));
                                ?></td>
                                    </tr>
                                </table>
                                <table >
                                    <tr>

                                        <td><span>Sistema: </span><?php e($sos[$celular['Especificacion']['so_id']] . ' ' . $celular['Especificacion']['so_version']); ?></td>
                                    </tr>
                                    <tr>
                                        <td><span>Estilo: </span><?php
                                        $estilos = array();
                                        if ($celular['Especificacion']['simple'] == 1) {
                                            $estilos[] = "CandyBar";
                                        }
                                        if ($celular['Especificacion']['touch'] == 1) {
                                            $estilos[] = 'Touch';
                                        }
                                        if ($celular['Especificacion']['slide'] == 1) {
                                            $estilos[] = 'Slide';
                                        }
                                        if ($celular['Especificacion']['flip'] == 1) {
                                            $estilos[] = 'ClamShell';
                                        }
                                        if ($celular['Especificacion']['teclado'] == 1) {
                                            $estilos[] = 'teclado alfanumérico';
                                        }
                                        if ($celular['Especificacion']['teclado_numerico'] == 1) {
                                            $estilos[] = 'teclado numérico';
                                        }
                                        if (empty($estilos)) {
                                            $estilos[] = "no definido";
                                        }
                                        e($this->Text->toList($estilos, $and = 'y'));
                                ?></td>
                                    </tr>
                                </table>
                            </div>
                            <?php
                            e($this->Html->link("Ir a la ficha", array(
                                        'controller' => 'celular',
                                        'action' => 'ficha',
                                        $celular['Celular']['id_celular']), array('id' => 'sliderIr')));
                            ?>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div> 
        </div> 
    </div>
    <!--    </div>-->
</div>