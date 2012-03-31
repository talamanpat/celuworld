<div class="gama index">
	<h2><?php __('Gamas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_gama');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($gamas as $gama):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $gama['Gama']['id_gama']; ?>&nbsp;</td>
		<td><?php echo $gama['Gama']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $gama['Gama']['id_gama'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $gama['Gama']['id_gama'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $gama['Gama']['id_gama']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gama['Gama']['id_gama'])); ?>
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
<?php 
$menucont = "<h3>Menu</h3><ul>";
$menucont .= "<li>".$html->link('Agregar Gama',array('controller' => 'gamas', 'action' => 'add'))."</li></ul>";
$menucont .=  $this->element('menuGeneral'); 
echo $this->Html->div('actions', $menucont);
?>


