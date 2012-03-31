<div class="celulares form">
<?php echo $this->Form->create('Celular');?>
	<fieldset>
		<legend><?php __('Editar Celular'); ?></legend>
	<?php
		echo $this->Form->input('id_celular');
		echo $this->Form->input('marca_id');
		echo $this->Form->input('modelo');
		echo $this->Form->input('vigente');
		echo $this->Form->input('novedad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo', true));?>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Celular.id_celular')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Celular.id_celular'))); ?></li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>