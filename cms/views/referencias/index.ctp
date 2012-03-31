<div class="referencias index">
	<h2><?php __('Referencias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_referencia');?></th>
			<th><?php echo $this->Paginator->sort('pais_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($referencias as $referencia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $referencia['Referencia']['id_referencia']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($referencia['Pais']['pais'], array('controller' => 'paises', 'action' => 'view', $referencia['Pais']['id_pais'])); ?>
		</td>
		<td><?php echo $referencia['Referencia']['nombre']; ?>&nbsp;</td>
		<td><?php echo $referencia['Referencia']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $referencia['Referencia']['id_referencia'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $referencia['Referencia']['id_referencia'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $referencia['Referencia']['id_referencia']), null, sprintf(__('Are you sure you want to delete # %s?', true), $referencia['Referencia']['id_referencia'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Referencia', true), array('action' => 'add')); ?></li>
	</ul>
         <?php echo $this->element('menuGeneral'); ?>
</div>