<div class="marcas index">
	<h2><?php __('Marcas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_marca');?></th>
			<th><?php echo $this->Paginator->sort('marca');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($marcas as $marca):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $marca['Marca']['id_marca']; ?>&nbsp;</td>
		<td><?php echo $marca['Marca']['marca']; ?>&nbsp;</td>
		<td><?php echo $marca['Marca']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Agregar Celular', true), array('controller' => 'celulares', 'action' => 'add',$marca['Marca']['id_marca']));?> 
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $marca['Marca']['id_marca'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $marca['Marca']['id_marca'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $marca['Marca']['id_marca']), null, sprintf(__('Are you sure you want to delete # %s?', true), $marca['Marca']['id_marca'])); ?>
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
<!-- 
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Marca', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Celulares', true), array('controller' => 'celulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Celular', true), array('controller' => 'celulares', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
<?php 
$menucont = "<h3>Menu</h3><ul>";
$menucont .= "<li>".$html->link('Agregar Marca',array('controller' => 'marcas', 'action' => 'add'))."</li></ul>";
$menucont .=$this->element('menuGeneral'); 
echo $this->Html->div('actions', $menucont);
?>


