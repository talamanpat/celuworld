<div class="referencias form">
<?php echo $this->Form->create('Referencia');?>
	<fieldset>
		<legend><?php __('Editar Referencia'); ?></legend>
	<?php
		echo $this->Form->input('id_referencia');
		echo $this->Form->input('pais_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Referencia.id_referencia')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Referencia.id_referencia'))); ?></li>
	</ul>
         <?php echo $this->element('menuGeneral'); ?>
</div>