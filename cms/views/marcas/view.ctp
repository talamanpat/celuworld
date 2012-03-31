<div class="marcas view">
<h2><?php  __('Marca');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Marca'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $marca['Marca']['id_marca']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Marca'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $marca['Marca']['marca']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $marca['Marca']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Marca', true), array('action' => 'edit', $marca['Marca']['id_marca'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Marca', true), array('action' => 'delete', $marca['Marca']['id_marca']), null, sprintf(__('Are you sure you want to delete # %s?', true), $marca['Marca']['id_marca'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Marca', true), array('action' => 'add')); ?> </li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
        
</div>
<div class="related">
	<h3><?php __('Related Celulares');?></h3>
	<?php if (!empty($marca['Celular'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Celular'); ?></th>
<!--		<th><?php __('Cel Esp Id'); ?></th>-->
<!--		<th><?php __('Marca Id'); ?></th>-->
		<th><?php __('Modelo'); ?></th>
		<th><?php __('Vigente'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($marca['Celular'] as $celular):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $celular['id_celular'];?></td>
<!--			<td><?php echo $celular['cel_esp_id'];?></td>-->
<!--			<td><?php echo $celular['marca_id'];?></td>-->
			<td><?php echo $celular['modelo'];?></td>
			<td><?php echo $utilidad->booleanos($celular['vigente']);?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'celulares', 'action' => 'view', $celular['id_celular'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'celulares', 'action' => 'edit', $celular['id_celular'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'celulares', 'action' => 'delete', $celular['id_celular']), null, sprintf(__('Are you sure you want to delete # %s?', true), $celular['id_celular'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Celular', true), array('controller' => 'celulares', 'action' => 'add',$marca['Marca']['id_marca']));?> </li>
		</ul>
	</div>
</div>
