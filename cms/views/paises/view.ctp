<div class="paises view">
<h2><?php  __('Pais');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['id_pais']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['pais']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['imagen']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Moneda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['moneda']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mon'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['mon']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Pais', true), array('action' => 'edit', $pais['Pais']['id_pais'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Pais', true), array('action' => 'delete', $pais['Pais']['id_pais']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pais['Pais']['id_pais'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Pais', true), array('action' => 'add')); ?> </li>
	</ul>
	<br>
	<?php echo $this->element('menuGeneral'); ?>
</div>
<div class="related">
	<h3><?php __('Referencias del Pais');?></h3>
	<?php if (!empty($pais['Referencia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Referencia'); ?></th>
<!-- 		<th><?php __('Pais Id'); ?></th>-->
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pais['Referencia'] as $referencia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $referencia['id_referencia'];?></td>
<!-- 		<td><?php echo $referencia['pais_id'];?></td>-->
			<td><?php echo $referencia['nombre'];?></td>
			<td><?php echo $referencia['descripcion'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'referencias', 'action' => 'view', $referencia['id_referencia'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'referencias', 'action' => 'edit', $referencia['id_referencia'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'referencias', 'action' => 'delete', $referencia['id_referencia']), null, sprintf(__('Are you sure you want to delete # %s?', true), $referencia['id_referencia'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Referencia', true), array('controller' => 'referencias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
