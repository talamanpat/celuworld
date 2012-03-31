<?php
/*
 * talaman
 * 
 */
?>
<article>
    <div class="BloqueInfBarraTitulo">     
        <table width="447" border="0" cellspacing="0">
            <tr>
                <th width="72"  height="20" align="left" style="padding-left: 8px;">referencia</th>
                <th width="72" align="left" >precio <?php e($utilidad->paisSelectImgSmall()); ?></th>
                <th width="112" align="left">descripcion</th>
                <th width="60" align="left" style="padding-left: 10px;">fecha</th>
                <th width="30" align="left">link</th>
            </tr>
        </table>
    </div>
    <div class="ContendorBloquePrecios">
        <?php
        $p = 1;
        if ($this->Session->read('pais') == null) {
            ?>
            <div class="ContenedoraAviso"><?php e($this->HProperties->PAIS_SIN_SELECT); ?></div>
            <?
            $p = 0;
        } else if (empty($celular['Precio'])) {
            ?>
            <div class="ContenedoraAviso"><?php e($this->HProperties->PAIS_SIN_PRECIO); ?></div>
            <?php
            $p = 1;
        } else {
            ?> <div class="BloquePrecios" id="BloquePrecios">
                <table width="448" border="0"><?php
        foreach ($celular['Precio'] as $precio):
                ?>
                        <tr>
                            <td width="84" align="left" style="padding-left: 9px" ><?php e($text->truncate($precio['Referencia']['nombre'], 12, array('exact' => 'false'))); ?></td>
                            <td width="85" align="left"><?php e($text->truncate($number->currency($precio['precio'], 'MN '), 15, array('exact' => 'false'))); ?></td>
                            <td width="134" align="left" ><?php e($text->truncate($precio['descripcion_corta'], 24, array('exact' => 'false'))); ?></td>
                            <td  width="70" align="left"><?php e($this->Time->format($format = 'd-m-Y', $precio['fecha'])); ?></td>
                            <td  align="center"><?php if (!empty($precio['link']))
                    e($this->Html->link("ir", $precio['link'], array('target' => '_blank'))); // e($precio['link']);         ?></td>
                        </tr>

                        <?php
                    endforeach;
                    ?>
                </table>
            </div>
            <?php
            $p = 2;
        }
        ?>

    </div>
</article>
<article>
    <div class="PieBloquePrecios">
        <div class="PieBloquePreciosColIz">
            <?php if ($p==2) { ?>                
                <div class="BloquePreciosP" id="BloquePrecios">
                    <p><?php e($this->HProperties->PRECIOS_RESPONSABILIDAD) ?></p>
                </div>
                <?php
            } else if ($p==0){
                ?>
                <div class="BloquePreciosP" id="BloquePaises">
                    <?php e($this->element('layout/paises'));
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="PieBloquePreciosColDer">
            <table width="120" height="30" border="0">
                <tr>
                    <td width="112" class="verMas"><?php
            e($this->Html->link("<div>VER FICHA</div>", array('controller' => 'celular', 'action' => 'ficha',
                        $celular['Celular']['id_celular']), array('escape' => false, 'target' => '_blank')));
            ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</article>