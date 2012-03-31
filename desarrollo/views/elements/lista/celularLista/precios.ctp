<?php

/*
 * talaman
 * 
 */
?>
<div class="BloqueInfBarraTitulo">     
                    <table width="447" border="0" cellspacing="0">
                        <tr>
                            <th width="72"  height="23" align="left" style="padding-left: 8px;">referencia</th>
                            <th width="72" align="left" >precio <?php e($utilidad->paisSelectImgSmall()); ?></th>
                            <th width="112" align="left">descripcion</th>
                            <th width="60" align="left" style="padding-left: 10px;">fecha</th>
                            <th width="30" align="left">link</th>
                        </tr>
                    </table>
                </div>
                <div class="ContendorBloquePrecios">
                    <?php
                    $p = false;
                    if ($this->Session->read('pais') == null) {
                        ?>
                        <div class="ContenedoraAviso"><?php e($this->HProperties->PAIS_SIN_SELECT); ?></div>
                        <div class="ContenedoraAvisoBanderas">
                            <?php e($this->element('global/paisesLinks')); ?>
                        </div>

<?
                        //  e($this->HProperties->PAIS_SIN_SELECT . "<br>" . $this->element('global/paisesLinks'));
                        } else if (empty($celular['Precio'])) {
                        ?>
                        <div class="ContenedoraAviso"><?php e($this->HProperties->PAIS_SIN_PRECIO); ?></div>
                        <div class="ContenedoraAvisoBanderas">
                            <?php e($this->element('global/paisesLinks')); ?>
                        </div>

                        <?php
                    } else {
                        ?> <div class="BloquePrecios" id="BloquePrecios">
                                <table width="448" border="0"><?php
                        foreach ($celular['Precio'] as $precio):
                            ?>
                            
                                    <tr>
                                        <td width="84" align="left" style="padding-left: 9px" ><?php e($text->truncate($precio['Referencia']['nombre'], 12, array('exact' => 'false'))); ?></td>
                                        <td width="85" align="left"><?php e($text->truncate($number->currency($precio['precio'], 14, array('exact' => 'false')))); ?></td>
                                        <td width="134" align="left" ><?php e($text->truncate($precio['descripcion_corta'], 24, array('exact' => 'false'))); ?></td>
                                        <td  width="70" align="left"><?php e($this->Time->format($format = 'd-m-Y', $precio['fecha'])); ?></td>
                                        <td  align="center"><?php if (!empty($precio['link']))
                        e($this->Html->link("ir", $precio['link'], array('target' => '_blank'))); // e($precio['link']);        ?></td>
                                    </tr>

                            <?php
                        endforeach;
                        ?>
                                                                    </table>
                            </div>
                        <div class="BloquePreciosP" id="BloquePrecios">
                         <p>* Los precios son referenciales y 
                                pueden cambiar de un momento a otro </p>
                        </div>
                        <?php                                
                        $p = true;                        
                    }
                    ?>

                </div>