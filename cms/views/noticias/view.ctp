<div class="noticias view">
<h2><?php  __('Noticia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Noticia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['id_noticia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Periodista'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($noticia['Periodista']['nombre'], array('controller' => 'periodistas', 'action' => 'view', $noticia['Periodista']['id_periodista'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['fecha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contenido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['contenido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foto Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['foto_nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foto Size'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['foto_size']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Posicion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['posicion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Noticia', true), array('action' => 'edit', $noticia['Noticia']['id_noticia'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Noticia', true), array('action' => 'delete', $noticia['Noticia']['id_noticia']), null, sprintf(__('Are you sure you want to delete # %s?', true), $noticia['Noticia']['id_noticia'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodistas', true), array('controller' => 'periodistas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodista', true), array('controller' => 'periodistas', 'action' => 'add')); ?> </li>
	</ul>
</div>
