<div class="noticias index">
	<h2><?php __('Noticias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_noticia');?></th>
			<th><?php echo $this->Paginator->sort('periodista_id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
<!--			<th><?php echo $this->Paginator->sort('contenido');?></th>-->
			<th><?php echo $this->Paginator->sort('foto_nombre');?></th>
			<th><?php echo $this->Paginator->sort('foto_size');?></th>
			<th><?php echo $this->Paginator->sort('posicion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($noticias as $noticia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $noticia['Noticia']['id_noticia']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($noticia['Periodista']['nombre'], array('controller' => 'periodistas', 'action' => 'view', $noticia['Periodista']['id_periodista'])); ?>
		</td>
		<td><?php echo $noticia['Noticia']['titulo']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['fecha']; ?>&nbsp;</td>
<!--		<td><?php echo $noticia['Noticia']['contenido']; ?>&nbsp;</td>-->
		<td><?php echo $noticia['Noticia']['foto_nombre']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['foto_size']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['posicion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $noticia['Noticia']['id_noticia'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $noticia['Noticia']['id_noticia'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $noticia['Noticia']['id_noticia']), null, sprintf(__('Are you sure you want to delete # %s?', true), $noticia['Noticia']['id_noticia'])); ?>
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
		<li><?php echo $this->Html->link(__('New Noticia', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Periodistas', true), array('controller' => 'periodistas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodista', true), array('controller' => 'periodistas', 'action' => 'add')); ?> </li>
	</ul>
</div>