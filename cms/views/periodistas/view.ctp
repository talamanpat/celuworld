<div class="periodistas view">
<h2><?php  __('Periodista');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Periodista'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $periodista['Periodista']['id_periodista']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $periodista['Periodista']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $periodista['Periodista']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Periodista', true), array('action' => 'edit', $periodista['Periodista']['id_periodista'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Periodista', true), array('action' => 'delete', $periodista['Periodista']['id_periodista']), null, sprintf(__('Are you sure you want to delete # %s?', true), $periodista['Periodista']['id_periodista'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodistas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodista', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Noticias');?></h3>
	<?php if (!empty($periodista['Noticia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Noticia'); ?></th>
		<th><?php __('Periodista Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Contenido'); ?></th>
		<th><?php __('Foto Nombre'); ?></th>
		<th><?php __('Foto Size'); ?></th>
		<th><?php __('Posicion'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($periodista['Noticia'] as $noticia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $noticia['id_noticia'];?></td>
			<td><?php echo $noticia['periodista_id'];?></td>
			<td><?php echo $noticia['titulo'];?></td>
			<td><?php echo $noticia['fecha'];?></td>
			<td><?php echo $noticia['contenido'];?></td>
			<td><?php echo $noticia['foto_nombre'];?></td>
			<td><?php echo $noticia['foto_size'];?></td>
			<td><?php echo $noticia['posicion'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'noticias', 'action' => 'view', $noticia['id_noticia'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'noticias', 'action' => 'edit', $noticia['id_noticia'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'noticias', 'action' => 'delete', $noticia['id_noticia']), null, sprintf(__('Are you sure you want to delete # %s?', true), $noticia['id_noticia'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
