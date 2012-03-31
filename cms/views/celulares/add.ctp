<?php //echo $this->Html->script(array('wysiwyg'), array('inline' => false));   ?>
<div class="celulares form">
    <?php echo $form->create('Celular'); ?>
    <table border="1">
        <tr>
            <td colspan="2"><?php echo $this->Form->input('Celular.modelo'); ?>&nbsp;</td>
        </tr>
        <tr>
            <td><?php // echo $this->Form->label('Marca (obligatorio)');echo $form->select('Celular.ID_MARCA', $ListaMarcas);&nbsp;
    echo $form->input('Celular.marca_id', array('empty' => '(elige uno)', 'selected' => $mar)); ?></td>
            <td><?php echo $this->Form->input('Celular.vigente', array('checked ' => true)); ?>
                <?php echo $this->Form->input('Celular.novedad'); ?></td>

        </tr>
    </table>

    <h1>Especificaciones</h1>
    
    <h2>Tipo de Gadget</h2>
    <?php
    echo $this->Form->input('Especificacion.smart');
    echo $this->Form->input('Especificacion.tablet');
    echo $this->Form->input('Especificacion.basico');
    echo '<br>';
    echo $this->Form->input('Especificacion.so_id', array('label' => 'Sistema Operativo', 'options' => $ListaSistemas, 'empty' => '(elige uno)'));
    echo $this->Form->input('Especificacion.so_version');
    ?>
    <h2>Estilo</h2>
    <?php
    echo $this->Form->input('Especificacion.touch');
    echo $this->Form->input('Especificacion.simple', array('label' => 'CandyBar'));
    echo $this->Form->input('Especificacion.teclado_numerico');
    echo $this->Form->input('Especificacion.teclado', array('label' => 'Teclado alfanumerico'));
    echo $this->Form->input('Especificacion.slide');
    echo $this->Form->input('Especificacion.flip', array('label' => 'ClamShell'));
    ?>

    <h2>Señales</h2>
    <?php
    echo $this->Form->input('Especificacion.wifi');
    echo $this->Form->input('Especificacion.modem');
    echo $this->Form->input('Especificacion.modem_wifi');
    echo $this->Form->input('Especificacion.g');
    echo $this->Form->input('Especificacion.3g');
    echo $this->Form->input('Especificacion.4g');
    echo $this->Form->input('Especificacion.edge');
    echo $this->Form->input('Especificacion.gprs');
    echo $this->Form->input('Especificacion.wap');
    echo $this->Form->input('Especificacion.bluetooth');
    echo $this->Form->input('Especificacion.gps');
    ?>
    <h2>Hardware</h2>
    <?php
    
    echo $this->Form->input('Especificacion.chips');
    echo $this->Form->input('Especificacion.dimensiones', array('type' => 'textarea', 'rows' => 2));
        echo $this->Form->input('Especificacion.colores');
    echo $this->Form->input('Especificacion.pantalla_tipo');
    echo $this->Form->input('Especificacion.pantalla_tamano');
    echo $this->Form->input('Especificacion.pantalla_multitactil');
    echo $this->Form->input('Especificacion.pantalla_resolucion');
    echo $this->Form->input('Especificacion.peso');
    echo $this->Form->input('Especificacion.bateria_duracion', array('type' => 'textarea', 'rows' => 5));
    
    echo $this->Form->input('Especificacion.chipset');
    echo $this->Form->input('Especificacion.procesador');
    echo $this->Form->input('Especificacion.gpu');
    echo $this->Form->input('Especificacion.ram');
    echo $this->Form->input('Especificacion.memoria_telefono');
    echo $this->Form->input('Especificacion.sd', array('label' => 'Memoria externa'));
    echo $this->Form->input('Especificacion.tipo_memoria');
    echo $this->Form->input('Especificacion.sd_default');
    echo $this->Form->input('Especificacion.sd_max');
    echo $this->Form->input('Especificacion.camara');
    echo $this->Form->input('Especificacion.flash');
    echo $this->Form->input('Especificacion.video_llamada');
    echo $this->Form->input('Especificacion.mp3');
    echo $this->Form->input('Especificacion.radio');
    echo $this->Form->input('Especificacion.tv');
    ?>
    <h2>mas</h2>
    <?php
    echo $this->Form->input('Especificacion.lanzamiento');
    echo $this->Form->input('Especificacion.java_app');
    echo $this->Form->input('Especificacion.flash_player');
    ?>
    <table border="1">
        <tr>
            <td>
<?php echo $form->input('Especificacion.analisis'); ?>
            </td> 
        </tr>
        <tr>
            <td>
                <?php
                echo $this->Form->input('Especificacion.gama_id', array('label' => 'Gama', 'options' => $ListaGamas, 'empty' => '(elige uno)'));
                ?>
            </td> 
        </tr>
        <tr>
            <td>
                <?php echo $form->input('Especificacion.evaluacion', array('options' => array(null, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10))); ?>
            </td> 
        </tr>
    </table>
                <?php echo $form->end('Listo'); ?>
</div>
<div class="actions">

<?php echo $this->element('menuGeneral'); ?>
</div>