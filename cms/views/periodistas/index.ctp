<div class="periodistas index">
	<h2><?php __('Periodistas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_periodista');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($periodistas as $periodista):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $periodista['Periodista']['id_periodista']; ?>&nbsp;</td>
		<td><?php echo $periodista['Periodista']['nombre']; ?>&nbsp;</td>
		<td><?php echo $periodista['Periodista']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $periodista['Periodista']['id_periodista'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $periodista['Periodista']['id_periodista'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $periodista['Periodista']['id_periodista']), null, sprintf(__('Are you sure you want to delete # %s?', true), $periodista['Periodista']['id_periodista'])); ?>
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
		<li><?php echo $this->Html->link(__('New Periodista', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>