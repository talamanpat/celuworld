<div class="sos index">
	<h2><?php __('Sistemas Operativos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_so');?></th>
			<th><?php echo $this->Paginator->sort('sistema');?></th>
			<th><?php echo $this->Paginator->sort('empresa');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sos as $so):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $so['So']['id_so']; ?>&nbsp;</td>
		<td><?php echo $so['So']['sistema']; ?>&nbsp;</td>
		<td><?php echo $so['So']['empresa']; ?>&nbsp;</td>
		<td><?php echo $so['So']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $so['So']['id_so'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $so['So']['id_so'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $so['So']['id_so']), null, sprintf(__('Are you sure you want to delete # %s?', true), $so['So']['id_so'])); ?>
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
<!--  <div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New So', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Especificaciones', true), array('controller' => 'especificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especificacion', true), array('controller' => 'especificaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<?php 
$menucont = "<h3>Menu</h3><ul>";
$menucont .= "<li>".$html->link('Agregar Sistema Operativo',array('controller' => 'sos', 'action' => 'add'))."</li></ul>";
$menucont .=  $this->element('menuGeneral'); 
echo $this->Html->div('actions', $menucont);
?>


