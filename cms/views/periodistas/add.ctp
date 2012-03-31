<div class="periodistas form">
<?php echo $this->Form->create('Periodista');?>
	<fieldset>
		<legend><?php __('Add Periodista'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Periodistas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>