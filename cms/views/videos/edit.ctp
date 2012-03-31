<div class="videos form">
<?php echo $this->Form->create('Video');?>
	<fieldset>
 		<legend><?php __('Edit Video'); ?></legend>
	<?php
		echo $this->Form->input('id_video');
		echo $this->Form->input('celular_id');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Video.id_video')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Video.id_video'))); ?></li>
		<li><?php echo $this->Html->link(__('List Videos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Celulares', true), array('controller' => 'celulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Celular', true), array('controller' => 'celulares', 'action' => 'add')); ?> </li>
	</ul>
</div>