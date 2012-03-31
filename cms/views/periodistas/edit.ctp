<div class="periodistas form">
<?php echo $this->Form->create('Periodista');?>
	<fieldset>
		<legend><?php __('Edit Periodista'); ?></legend>
	<?php
		echo $this->Form->input('id_periodista');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Periodista.id_periodista')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Periodista.id_periodista'))); ?></li>
		<li><?php echo $this->Html->link(__('List Periodistas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>