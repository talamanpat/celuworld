<div class="videos index">
	<h2><?php __('Videos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_video');?></th>
			<th><?php echo $this->Paginator->sort('celular_id');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($videos as $video):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $video['Video']['id_video']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($video['Celular']['modelo'], array('controller' => 'celulares', 'action' => 'view', $video['Celular']['id_celular'])); ?>
		</td>
		<td><?php echo $video['Video']['url']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $video['Video']['id_video'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $video['Video']['id_video'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $video['Video']['id_video']), null, sprintf(__('Are you sure you want to delete # %s?', true), $video['Video']['id_video'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Video', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Celulares', true), array('controller' => 'celulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Celular', true), array('controller' => 'celulares', 'action' => 'add')); ?> </li>
	</ul>
</div>