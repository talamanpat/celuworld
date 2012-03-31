<?php echo $javascript->link('prototype');
echo $javascript->link('scriptaculous'); ?>

<div class="precios form">
    <h3><?php e($celular['Marca']['marca'].' '.$celular['Celular']['modelo']) ?></h3>
    <fieldset>
        <legend><?php __('Agregar Precio'); ?></legend>
        <?php echo $form->create('Precio'); ?>
        <?php echo $form->hidden('Precio.celular_id', array('value' => $cel)); ?>
        <table border="1">
            <tr>
                <td ><?php echo $form->input('Precio.pais_id', array('options' => $Paises, 'empty' => '(elige uno)')); ?></td>
                <td><div id='referencias' style="margin: 0px;padding: 0px;" >
                        <?php echo $form->input('Precio.referencia_id', array('options' => null, 'empty' => '(elige un pais)')); ?>
                    </div><?php
                        echo $this->Html->image('celuwo	rld/cargando.gif', array('alt' => 'Cargando!',
                            'style' => 'display: none;',
                            'id' => 'cargando'));
                        ?></td>
                <td><?php echo $this->Form->input('Precio.precio'); ?></td>
                <td><?php
                    echo $this->Form->input('Precio.fecha', array('dateFormat' => 'DMY', 'minYear' => date('Y') - 5
                        , 'maxYear' => date('Y') + 2));
                        ?></td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('Precio.link'); ?></td>
                <td><?php echo $this->Form->input('Precio.descripcion_corta'); ?></td>
                <td colspan="2"><?php echo $this->Form->input('Precio.descripcion', array('rows' => 3)); ?></td>
            </tr>
        </table>



    <?php echo $this->Form->end('Grabar Precio'); ?>
    </fieldset>
    <?php
    echo $ajax->observeField('PrecioPaisId', array(
        'url' => array('action' => 'referenciasDelPais'),
        'frequency' => 0.2,
        'update' => 'referencias',
        'before' => 'document.getElementById("referencias").innerHTML = "";document.getElementById("cargando").style.display = "";',
        'complete' => 'document.getElementById("cargando").style.display = "none";'
            )
    );
    ?>
</div>
<div class="actions">
    <h3><?php __('Menu'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Ir al celular', true), array('controller' => 'celulares', 'action' => 'view', $cel)); ?> </li>
    </ul>
    <?php echo $this->element('menuGeneral'); ?>
</div>