<div class="referencias view">
<h2><?php  __('Referencia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Referencia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referencia['Referencia']['id_referencia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($referencia['Pais']['pais'], array('controller' => 'paises', 'action' => 'view', $referencia['Pais']['id_pais'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referencia['Referencia']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $referencia['Referencia']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Referencia', true), array('action' => 'edit', $referencia['Referencia']['id_referencia'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Referencia', true), array('action' => 'delete', $referencia['Referencia']['id_referencia']), null, sprintf(__('Are you sure you want to delete # %s?', true), $referencia['Referencia']['id_referencia'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Referencia', true), array('action' => 'add')); ?> </li>
	</ul>
 <?php echo $this->element('menuGeneral'); ?>
</div>
<div class="related">
	<h3><?php __('Related Precios');?></h3>
	<?php if (!empty($referencia['Precio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Precio'); ?></th>
		<th><?php __('Celular'); ?></th>
<!--		<th><?php __('Referencia Id'); ?></th>-->
		<th><?php __('Precio'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($referencia['Precio'] as $precio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $precio['id_precio'];?></td>
			<td><?php echo $celularesList[$precio['celular_id']];?></td>
<!--			<td><?php echo $precio['referencia_id'];?></td>-->
			<td><?php echo $precio['precio'];?></td>
			<td><?php echo $precio['fecha'];?></td>
			<td><?php echo $precio['descripcion'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'precios', 'action' => 'view', $precio['id_precio'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'precios', 'action' => 'edit', $precio['id_precio'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'precios', 'action' => 'delete', $precio['id_precio']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precio['id_precio'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
