<div class="videos view">
<h2><?php  __('Video');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Video'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $video['Video']['id_video']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Celular'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($video['Celular']['modelo'], array('controller' => 'celulares', 'action' => 'view', $video['Celular']['id_celular'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $video['Video']['url']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Video', true), array('action' => 'edit', $video['Video']['id_video'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Video', true), array('action' => 'delete', $video['Video']['id_video']), null, sprintf(__('Are you sure you want to delete # %s?', true), $video['Video']['id_video'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Celulares', true), array('controller' => 'celulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Celular', true), array('controller' => 'celulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
