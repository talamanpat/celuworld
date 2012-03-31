<div class="gamas view">
<h2><?php  __('Gamas');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Gama'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gama['Gama']['id_gama']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gama['Gama']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Gama', true), array('action' => 'edit', $gama['Gama']['id_gama'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Gama', true), array('action' => 'delete', $gama['Gama']['id_gama']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gama['Gama']['id_gama'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Gama', true), array('action' => 'add')); ?> </li>
	</ul>
         <?php echo $this->element('menuGeneral'); ?>
</div>