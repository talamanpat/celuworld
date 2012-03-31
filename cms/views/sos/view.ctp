<div class="sos view">
<h2><?php  __('Sistema Operativo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id So'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $so['So']['id_so']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sistema'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $so['So']['sistema']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Empresa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $so['So']['empresa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $so['So']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Sistema Operativo', true), array('action' => 'edit', $so['So']['id_so'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Sistema Operativo', true), array('action' => 'delete', $so['So']['id_so']), null, sprintf(__('Are you sure you want to delete # %s?', true), $so['So']['id_so'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Sistema Operativo', true), array('action' => 'add')); ?> </li>
	</ul>
         <?php echo $this->element('menuGeneral'); ?>
</div>