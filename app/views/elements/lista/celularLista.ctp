<section>
    <div class="contenedor-vt">
        <div class="ColIz">
            <article>
                <?php e($this->element('lista/celularLista/slideImg', array('celular' => $celular))); ?>
            </article>
        </div>
        <div class="ColDer">
            <h2 class="tituloLista verde"><?php
                e($this->Html->link($celular['Celular']['modelo'], array(
                            'controller' => 'celular',
                            'action' => 'ficha',
                            $celular['Celular']['id_celular']), array('escape' => false)));
                ?></h2>
            <div class="clean"></div>
            <dl id="desLista" class="descripcion izquierda">		
                <dt>Marca:</dt>
                <dd><?php e($celular['Marca']['marca']); ?></dd>
                <dt>Tipo:</dt>
                <dd><?php
                e($utilidad->booleanosTxt($celular['Especificacion']['smart'], 'Smartphone'));
                e($utilidad->booleanosTxt($celular['Especificacion']['basico'], 'basico'));
                e($utilidad->booleanosTxt($celular['Especificacion']['tablet'], 'tablet'));
                ?></dd>
                <dt>Gama:</dt>
                <dd><?php e($gamas[$celular['Especificacion']['gama_id']]); ?></dd>

            </dl>
            <dl id="desLista" class="descripcion izquierda">	
                <dt>Pantalla:</dt>
                <dd><?php e($celular['Especificacion']['pantalla_tamano'] . "''"); ?></dd>
                <dt>Estilo:</dt>
                <dd><?php e($text->truncate($utilidad->estilosCelular($celular),20)); ?></dd>
                <dt>Sist.Oper.:</dt>
                <dd><?php e($text->truncate($sos[$celular['Especificacion']['so_id']] . " " . $celular['Especificacion']['so_version'],20)); ?></dd>
            </dl>

            <div class="clean"></div>
            <div  class="celularBloqueSupCol">
                <?php $utilidad->especificacionesLista($celular['Especificacion'], $sos); ?>
            </div>
            <div class="clean"></div>
            <div id="mensajeFotos">
                <?php
                echo $this->element('scripts/fancy', array('rel' => $celular['Celular']['id_celular'], 'cel' => $celular['Marca']['marca'] . " " . $celular['Celular']['modelo']));
                e(count($celular['Foto']) . ' fotos');
                if (!empty($celular['Video'])) {
                    e(' y ' . count($celular['Video']) . ((count($celular['Video']) == 1) ? ' video' : ' videos'));
                }
                ?><br>
                <span>*Dale clic a la foto para ver más fotos!</span>
            </div>
            <?php //e($this->element('lista/celularLista/preciosSocialMas', array('celular' => $celular)));  ?>
            <div id="irFicha">
                <table  height="30" border="0">
                    <tr>
                        <td id="redesSociales">
                            <?php echo $this->element('global/facebookComentsCount', array('url' => $this->HProperties->APP . 'celular/ficha/' . $celular['Celular']['id_celular'])); ?>
                            <br> 
                            <?php e($this->element('global/tweetHorUrl', array('url' => $this->HProperties->APP . 'celular/ficha/' . $celular['Celular']['id_celular']))); ?>
                        </td> 
                        <td width="112" class="verMas"><?php
                            e($this->Html->link("<div>VER FICHA</div>", array('controller' => 'celular', 'action' => 'ficha',
                                        $celular['Celular']['id_celular']), array('escape' => false)));
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="clean"></div>
        </div>
        <div class="clean"></div>
    </div>
</section>