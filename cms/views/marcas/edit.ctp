<div class="marcas form">
<?php echo $this->Form->create('Marca');?>
	<fieldset>
		<legend><?php __('Editar Marca'); ?></legend>
	<?php
		echo $this->Form->input('id_marca');
		echo $this->Form->input('marca');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Marca.id_marca')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Marca.id_marca'))); ?></li>
	</ul>
    <?php echo $this->element('menuGeneral'); ?>
</div>