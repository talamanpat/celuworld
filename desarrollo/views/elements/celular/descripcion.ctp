<div id="contenedor-vt-descripcion" class="contenedor">
    <div class="VtBarraTituloPrincipal">
        <div class="Icono">
            <?php e($this->Html->image('iconogris.png', array('width' => '26', 'height' => '27'))); ?>
        </div>
        <h2>Descripción, Análisis y Características</h2>
    </div>
    <div class="ColIzDesc">
        <article>
            <div class="DatosDes">
                <table width="385" border="0" cellspacing="0">
                    <tr>
                        <td width="128"><p>Marca:</p></td>
                        <td width="253"><h3><?php e($celular['Marca']['marca']); ?></h3></td>
                    </tr>
                    <tr>
                        <td><p>Modelo:</p></td>
                        <td><h3>  <?php e($celular['Celular']['modelo']); ?></h3></td>
                    </tr>
                    <tr>
                        <td><p>Tipo:</p></td>
                        <td><h3>
                                <?php
                                e($utilidad->booleanosTxt($celular['Especificacion']['smart'], 'SmartPhone'));
                                e($utilidad->booleanosTxt($celular['Especificacion']['basico'], 'Basico'));
                                e($utilidad->booleanosTxt($celular['Especificacion']['tablet'], 'Tablet'));
                                ?>
                            </h3></td>
                    </tr>
                    <tr>
                        <td><p>Sistema Operativo:</p></td>
                        <td><h3> <?php e($sos[$celular['Especificacion']['so_id']] . " " . $celular['Especificacion']['so_version']); ?></h3></td>
                    </tr>
                    <tr>
                        <td><p>Estilo</p></td>
                        <td><h3><?php
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
                                    $estilos[] = 'Teclado alfanumérico';
                                }
                                if ($celular['Especificacion']['teclado_numerico'] == 1) {
                                    $estilos[] = 'Teclado numérico';
                                }
                                if (empty($estilos)) {
                                    $estilos[] = "no definido";
                                }
                                e($this->Text->toList($estilos, $and = 'y'));
                                ?>
                            </h3></td>
                    </tr> 
                    <tr>
                        <td><p>Vigente</p></td>
                        <td><h3> <?php e($utilidad->booleanosSN($celular['Celular']['vigente'])); ?></h3></td>
                    </tr>
                </table>
                <div id="descSocial">
                    <div style="float: left;"><?php e($this->element('global/tweetHor')); ?></div>
                    <div style="float: left; width: 70px;"><?php e($this->element('global/plusOneHorMedium')); ?></div>
                    <div style="float: left;"><?php e($this->element('global/facebookLikeHor')); ?></div>
                </div>
            </div>
        </article>
    </div>
    <div class="ColDerDesc">
        <article>
            <div class="DatosDesDer">
                <p><?php
                                e($text->truncate(strip_tags($celular['Especificacion']['analisis']), 680, array('ending' => '... ' . $this->Html->link("ver el análisis", "#analisisLB", array('title' => $celular['Marca']['marca'] . " " . $celular['Celular']['modelo'],
                                                'class' => 'popupLB')),
                                            'exact' => false, 'html' => false)));
                                ?>
                </p>	
                <div style="display: none;">
                    <div id="analisisLB" >
                        <?php e($celular['Especificacion']['analisis']); ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>