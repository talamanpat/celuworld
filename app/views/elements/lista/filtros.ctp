<?php
echo $this->Html->script(array(
    'jquery.ui.widget',
//    'jquery.usermode', 
    'ui.checkbox',
    'checkbox',
//    'widget'
        ), array('inline' => false));
?>
<div id="panel">
    <?php echo $html->image('loading_1.gif', array('alt' => 'Cargando','id'=>'cargandoLista'))?>
    <div id="filtrosFix">
        <div class="content clearfix" style="margin:0"> <!-- aqui va formulario -->	

            <div class="ContenedorFormulario">
                <?php echo $this->Form->create(null, array('type' => 'post')); ?>
                <?php echo $this->Form->input('Especificacion.smart', array('type' => 'hidden')); ?>
                <?php echo $this->Form->input('Especificacion.basico', array('type' => 'hidden')); ?>
                <?php echo $this->Form->input('Especificacion.tablet', array('type' => 'hidden')); ?>

                <ul id="marca">
                    <?php echo $this->Form->input('Celular.marca_id', array('multiple' => 'checkbox', 'options' => $marcas, 'label' => 'marcas')); ?> 
                </ul>

                <ul id="so">
                    <?php echo $this->Form->input('So.id_so', array('multiple' => 'checkbox', 'options' => $sos, 'label' => 'sistemas operativos')); ?> 
                </ul>
                <!--                <ul id="internet">
                <?php echo $this->Form->input('Especificacion.g', array('multiple' => 'checkbox', 'options' => $iMovil, 'label' => 'internet movil (g)')); ?> 
                                </ul>-->
                <ul id="camara">
                    <?php echo $this->Form->input('Especificacion.camara', array('multiple' => 'checkbox', 'options' => $camaras, 'label' => 'camara (mpx)')); ?> 
                </ul>
                <ul id="estilo">
                    <?php echo $this->Form->label('estilo'); ?>
                    <?php echo $this->Form->input('Especificacion.teclado', array('label' => 'tec. alfanumérico')); ?>
                    <?php echo $this->Form->input('Especificacion.teclado_numerico', array('label' => 'tec. numérico')); ?>
                    <br>
                    <?php echo $this->Form->input('Especificacion.touch', array('label' => $this->Html->image('touch.gif', array('alt' => 'touch', 'title' => 'touch')))); ?>
                    <?php echo $this->Form->input('Especificacion.slide', array('label' => $this->Html->image('slide.gif', array('alt' => 'slide', 'title' => 'slide')))); ?>
                    <?php echo $this->Form->input('Especificacion.flip', array('label' => $this->Html->image('clamshell.gif', array('alt' => 'ClamShell', 'title' => 'ClamShell')))); ?>
                    <?php echo $this->Form->input('Especificacion.simple', array('label' => $this->Html->image('candybar.gif', array('alt' => 'CandyBar', 'title' => 'CandyBar')))); ?>
                </ul>
                <ul id="caracteristicas">
                    <p id="filtrosTexto">
                        *Este filtro esta enfocado a lo que no quieres, para que así descubras tu celular
                        <br>
                        <br>
                        <?php
                        echo $this->Html->link('Marcar todos', array('action' => '#'), array('id' => 'check-all'));
                        ?><br>
                        <?php
                        //echo $this->Html->link('Desmarcar todos', array('action' => '#'), array('id' => 'uncheck-all'));
                        ?>
                        <?php
                        //echo $this->Html->link('<br>Toggle', array('action' => '#'), array('id' => 'toggle-all'));
                        ?>
                    </p>
                    <p id="filtrosSubmit">
                        <?php
                        echo $this->Form->end(__('Filtrar', true));
//                        echo $this->Html->link('Reiniciar filtros', array('action' => 'smartClean'));
                        ?>
                    </p>
                </ul>

            </div> 
        </div>
    </div>
</div> 