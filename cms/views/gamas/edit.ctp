<div class="gamas form">
<?php echo $this->Form->create('Gama');?>
	<fieldset>
		<legend><?php __('Editar Gama'); ?></legend>
	<?php
		echo $this->Form->input('id_gama');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Gama.id_gama')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Gama.id_gama'))); ?></li>
	
	</ul>
         <?php echo $this->element('menuGeneral'); ?>
</div>