<div class="noticias form">
<?php echo $this->Form->create('Noticia', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Agregar Noticia'); ?></legend>
	<?php
		echo $this->Form->input('periodista_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('fecha');
		echo $this->Form->input('contenido',array('type'=>'textarea', 'rows' => 5));
	//	echo $this->Form->input('foto_nombre');
	//	echo $this->Form->input('foto_size');
                echo $this->Form->file('uploadFile');
		echo $this->Form->input('posicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
  
		<li><?php echo $this->Html->link(__('Noticias', true), array('action' => 'index'));?></li>
	
        </ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>