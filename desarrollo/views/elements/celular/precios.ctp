<div id="contenedor-vt-precios">
    <div id="preciosTitulo"class="VtBarraTitulo">
        <div class="Icono">
            <?php e($this->Html->image('iconogris.png"', array('width' => '26', 'height' => '27'))); ?>
        </div>
        <h2>Precios / Costos</h2>

    </div>

    <?php
    if ($this->Session->read('pais') == null) {
        e('<div class="ContenidoSubVistasPreciosTabla"><p>');
        e($this->HProperties->PAIS_SIN_SELECT .  $this->element('global/paisesLinks'));
        e('</p></div>');
    } else if (empty($precios)) {
        e('<div class="ContenidoSubVistasPreciosTabla"><p>');
        e($this->HProperties->PAIS_SIN_PRECIO . $this->element('global/paisesLinks'));
        e('</p></div>');
    } else {
        ?>
        <div class="ContenidoSubVistasPreciosTabla">
            <table width="809px" border="0" cellspacing="0">
                <tr>
                    <th  width="100" height="32px" class="CaractTiruloPrecios">referencia</th>
                    <th width="97" height="32px" class="CaractTiruloPrecios">precio <?php e($utilidad->paisSelectImgSmall()); ?></th>
                    <th width="347" height="32px" class="CaractTiruloPrecios">descripcion</th>
                    <th width="125" height="32px" class="CaractTiruloPrecios">fecha</th>
                    <th  width="126" height="32px" class="CaractTiruloPrecios">link</th>
                </tr>
                <?php foreach ($precios as $precio): ?>
                    <tr>
                        <td  width="100"  height="25" class="CaractContenidoPrecios" align="center" valign="middle">
                            <?php e($precio['Referencia']['nombre']); ?>
                        </td>
                        <td  width="95"  height="25" class="CaractContenidoPrecios" align="center" valign="middle">
                            <?php e($number->currency($precio['Precio']['precio'])); ?>
                        </td>
                        <td width="341"  height="25" class="CaractContenidoPrecios" align="center" valign="middle">
                            <?php e($precio['Precio']['descripcion_corta']); ?>
                        </td>
                        <td width="125"  height="25" class="CaractContenidoPrecios" align="center" valign="middle">
                            <?php e($this->Time->format($format = 'd-m-Y', $precio['Precio']['fecha'])); ?>
                        </td>
                        <td  width="126" height="25" class="CaractContenidoPrecios" align="center" valign="middle">
                            <?php if (!empty($precio['Precio']['link']))
                                e($this->Html->link("ir", $precio['Precio']['link'], array('target' => '_blank'))); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <p style="color: red; font-size: 11px;margin-top: 2px;text-align: left ">
            <?php
            // e($utilidad->paisSelectImg());
            ?>
            * Los precios son referenciales y pueden cambiar de un momento a otro, 
            CELUWORLD no se hace responsable por ning&uacute;n inconveniente con los vendedores o cambios en los precios. </p>
        <?php
    }
    ?>

</div>