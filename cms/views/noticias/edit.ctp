<div class="noticias form">
<?php echo $this->Form->create('Noticia');?>
	<fieldset>
		<legend><?php __('Edit Noticia'); ?></legend>
	<?php
		echo $this->Form->input('id_noticia');
		echo $this->Form->input('periodista_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('fecha');
		echo $this->Form->input('contenido');
		echo $this->Form->input('foto_nombre');
		echo $this->Form->input('foto_size');
		echo $this->Form->input('posicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Noticia.id_noticia')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Noticia.id_noticia'))); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Periodistas', true), array('controller' => 'periodistas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodista', true), array('controller' => 'periodistas', 'action' => 'add')); ?> </li>
	</ul>
</div>