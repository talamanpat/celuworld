<div class="precios form">
<?php echo $this->Form->create('Precio');?>
	<fieldset>
		<legend><?php __('Edit Precio'); ?></legend>
	<?php
		echo $this->Form->input('id_precio');
		echo $this->Form->input('celular_id');
		echo $this->Form->input('referencia_id');
		echo $this->Form->input('precio');
		echo $this->Form->input('fecha');
                echo $this->Form->input('link');
		echo $this->Form->input('descripcion_corta');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Precio.id_precio')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Precio.id_precio'))); ?></li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>