<article>
    <h2 id="titulo-descripcion" class="subTitulo">Descripción</h2>
    <div id="descripcion" class="contenedor">
        <dl id="desDetalle" class="descripcion">		
            <dt>Marca:</dt>
            <dd><?php e($celular['Marca']['marca']); ?>&nbsp;</dd>
            <dt>Modelo:</dt>
            <dd><?php e($celular['Celular']['modelo']); ?>&nbsp;</dd>
            <dt>Tipo:</dt>
            <dd><?php
e($utilidad->booleanosTxt($celular['Especificacion']['smart'], 'Smartphone'));
e($utilidad->booleanosTxt($celular['Especificacion']['basico'], 'basico'));
e($utilidad->booleanosTxt($celular['Especificacion']['tablet'], 'tablet'));
?>
            &nbsp;</dd>
            <dt>Estilo:</dt>
            <dd><?php e($utilidad->estilosCelular($celular)); ?>&nbsp;</dd>
            <dt>Gama:</dt>
            <dd><?php e($gamas[$celular['Especificacion']['gama_id']]); ?>&nbsp;</dd>
            <dt>Pantalla:</dt>
            <dd><?php e($celular['Especificacion']['pantalla_tamano'] . "''"); ?>&nbsp;</dd>
            <dt>Camara:</dt>
            <dd><?php e($celular['Especificacion']['camara'] . " MPX"); ?>&nbsp;</dd>
            <dt>Sistema Operativo:</dt>
            <dd><?php e($sos[$celular['Especificacion']['so_id']] . " " . $celular['Especificacion']['so_version']); ?>&nbsp;</dd>
        
            <?php if ($celular['Especificacion']['procesador']!=""){?>
            <dt>Procesador:</dt>
            <dd><?php e($celular['Especificacion']['procesador']); ?> &nbsp;</dd>
            <?php } 
            
            if ($celular['Especificacion']['gpu']!=""){?>
            <dt>GPU:</dt>
            <dd><?php e($celular['Especificacion']['gpu']); ?> &nbsp;</dd>
            <?php }?>
        </dl>
        <div id="desSocial">
            <div style="float: left;"><?php e($this->element('global/tweetHor')); ?></div>
            <div style="float: left; width: 70px;"><?php e($this->element('global/plusOneHorMedium')); ?></div>
            <div style="float: left;"><?php e($this->element('global/facebookLikeHor')); ?></div>
            <div class="clean"></div>
        </div>
    </div>
</article>
<?php
if (count($celular['Video']) != 0) {
    ?>
    <aside>
        <div style="margin-left: 65px;width: 340px;float: left">
            <?php echo $this->element('addsense/celuworld9'); ?>
        </div>
    </aside>
<?php } ?>
<div class="clean"></div>
<article>
    <h2 id="titulo-analisis" class="subTitulo">Análisis</h2>
    <div id="analisis" class="bloque">
        <?php
        e($celular['Especificacion']['analisis']);
        ?>
    </div>
</article>