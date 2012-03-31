<?php //echo $this->Html->script(array('wysiwyg'), array('inline' => false));   ?>
<div class="especificaciones form">
    <?php echo $this->Form->create('Especificacion'); ?>
    <fieldset>
        <legend><?php __('Editar Especificacion'); ?></legend>
        <?php
        echo $this->Form->input('id_cel_esp');
        echo $this->Form->input('celular_id', array('type' => 'hidden'));
        echo $this->Form->input('analisis');
        echo $this->Form->input('colores');
        echo $this->Form->input('evaluacion');
        echo $this->Form->input('gama_id', array('label' => 'Gama', 'empty' => '(elige uno)'));
        echo $this->Form->input('so_id');
        echo $this->Form->input('so_version');
        echo $this->Form->input('smart');
        echo $this->Form->input('tablet');
        echo $this->Form->input('basico');
        echo $this->Form->input('touch');
        echo $this->Form->input('simple');
        echo $this->Form->input('teclado_numerico');
        echo $this->Form->input('teclado');
        echo $this->Form->input('slide');
        echo $this->Form->input('flip');
        echo $this->Form->input('chips');
        echo $this->Form->input('wifi');
        echo $this->Form->input('modem');
        echo $this->Form->input('modem_wifi');
        echo $this->Form->input('g');
        echo $this->Form->input('3g');
        echo $this->Form->input('edge');
        echo $this->Form->input('gprs');
        echo $this->Form->input('wap');


        echo $this->Form->input('bluetooth');
        echo $this->Form->input('gps');
        echo $this->Form->input('memoria_telefono');
        echo $this->Form->input('chipset');
        echo $this->Form->input('procesador');
        echo $this->Form->input('gpu');
        echo $this->Form->input('ram');
        echo $this->Form->input('sd');
        echo $this->Form->input('tipo_memoria');
        echo $this->Form->input('sd_default');
        echo $this->Form->input('sd_max');
        echo $this->Form->input('camara');
        echo $this->Form->input('flash');
        echo $this->Form->input('video_llamada');
        echo $this->Form->input('mp3');
        echo $this->Form->input('radio');
        echo $this->Form->input('tv');
        echo $this->Form->input('lanzamiento');



        echo $this->Form->input('java_app');
        echo $this->Form->input('flash_player');
        echo $this->Form->input('dimensiones');
        echo $this->Form->input('pantalla_tipo');
        echo $this->Form->input('pantalla_tamano');
        echo $this->Form->input('pantalla_multitactil');
        echo $this->Form->input('pantalla_resolucion');
        echo $this->Form->input('peso');
        echo $this->Form->input('bateria_duracion');

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Listo', true)); ?>
</div>
<div class="actions">
    <?php echo $this->element('menuGeneral'); ?>
</div>