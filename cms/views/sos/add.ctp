<div class="sos form">
<?php echo $this->Form->create('So');?>
	<fieldset>
		<legend><?php __('Agregar Sistema Operativo'); ?></legend>
	<?php
		echo $this->Form->input('sistema');
		echo $this->Form->input('empresa');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">

         <?php echo $this->element('menuGeneral'); ?>
</div>