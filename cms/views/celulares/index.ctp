<div class="celulares index">
	<h2><?php __('Celulares');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_celular');?></th>
<!-- 		<th><?php echo $this->Paginator->sort('cel_esp_id');?></th>-->
			<th><?php echo $this->Paginator->sort('marca_id');?></th>
			<th><?php echo $this->Paginator->sort('modelo');?></th>
			<th><?php echo $this->Paginator->sort('vigente');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($celulares as $celular):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $celular['Celular']['id_celular']; ?>&nbsp;</td>
	<!-- <td><?php echo $celular['Celular']['cel_esp_id']; ?>&nbsp;</td> -->	
		<td>
			<?php echo $this->Html->link($celular['Marca']['marca'], array('controller' => 'marcas', 'action' => 'view', $celular['Marca']['id_marca'])); ?>
		</td>
		<td><?php echo $celular['Celular']['modelo']; ?>&nbsp;</td>
		<td><?php echo $utilidad->booleanos($celular['Celular']['vigente']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Agregar precio', true), array('controller' => 'precios','action' => 'add', $celular['Celular']['id_celular']),array('target'=>'_blank')); ?>
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $celular['Celular']['id_celular'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $celular['Celular']['id_celular'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete/'. $celular['Celular']['id_celular']."/".$celular['Celular']['cel_esp_id']), 
							null, sprintf(__('Are you sure you want to delete # %s?', true), $celular['Celular']['id_celular'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Celular', true), array('action' => 'add')); ?></li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>