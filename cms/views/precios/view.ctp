<div class="precios view">
<h2><?php  __('Precio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Precio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['id_precio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Celular'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($precio['Celular']['modelo'], array('controller' => 'celulares', 'action' => 'view', $precio['Celular']['id_celular'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Referencia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($precio['Referencia']['nombre'], array('controller' => 'referencias', 'action' => 'view', $precio['Referencia']['id_referencia'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Precio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['precio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['fecha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precio['Precio']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Precio', true), array('action' => 'edit', $precio['Precio']['id_precio'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Precio', true), array('action' => 'delete', $precio['Precio']['id_precio']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precio['Precio']['id_precio'])); ?> </li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>
