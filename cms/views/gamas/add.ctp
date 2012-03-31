<div class="gamas form">
<?php echo $this->Form->create('Gama');?>
	<fieldset>
		<legend><?php __('Agregar Gama'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">

         <?php echo $this->element('menuGeneral'); ?>
</div>