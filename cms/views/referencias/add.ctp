<div class="referencias form">
<?php echo $this->Form->create('Referencia');?>
	<fieldset>
		<legend><?php __('Agregar Referencia'); ?></legend>
	<?php
		echo $this->Form->input('pais_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	 <?php echo $this->element('menuGeneral'); ?>
</div>