<div class="paises form">
<?php echo $this->Form->create('Pais');?>
	<fieldset>
		<legend><?php __('Agregar Pais'); ?></legend>
	<?php
		echo $this->Form->input('pais');
		echo $this->Form->input('imagen');
		echo $this->Form->input('moneda');
		echo $this->Form->input('mon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	 <?php echo $this->element('menuGeneral'); ?>
</div>