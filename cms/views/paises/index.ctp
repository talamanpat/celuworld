<div class="paises index">
	<h2><?php __('Paises');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_pais');?></th>
			<th><?php echo $this->Paginator->sort('pais');?></th>
			<th><?php echo $this->Paginator->sort('imagen');?></th>
			<th><?php echo $this->Paginator->sort('moneda');?></th>
			<th><?php echo $this->Paginator->sort('mon');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paises as $pais):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pais['Pais']['id_pais']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['pais']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['imagen']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['moneda']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['mon']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $pais['Pais']['id_pais'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $pais['Pais']['id_pais'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $pais['Pais']['id_pais']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pais['Pais']['id_pais'])); ?>
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
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Pais', true), array('action' => 'add')); ?></li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>