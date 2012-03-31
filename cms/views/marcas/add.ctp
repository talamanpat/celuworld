<div class="marcas form">
<?php echo $this->Form->create('Marca');?>
	<fieldset>
		<legend><?php __('Agregar Marca'); ?></legend>
	<?php
		echo $this->Form->input('marca');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
<?php echo $this->element('menuGeneral'); ?>
</div>