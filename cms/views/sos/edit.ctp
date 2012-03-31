<div class="sos form">
<?php echo $this->Form->create('So');?>
	<fieldset>
		<legend><?php __('Editar Sistema Operativo'); ?></legend>
	<?php
		echo $this->Form->input('id_so');
		echo $this->Form->input('sistema');
		echo $this->Form->input('empresa');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('So.id_so')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('So.id_so'))); ?></li>
	
	</ul>
         <?php echo $this->element('menuGeneral'); ?>
</div>