<div class="paises form">
<?php echo $this->Form->create('Pais');?>
	<fieldset>
		<legend><?php __('Editar Pais'); ?></legend>
	<?php
		echo $this->Form->input('id_pais');
		echo $this->Form->input('pais');
		echo $this->Form->input('imagen');
		echo $this->Form->input('moneda');
		echo $this->Form->input('mon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Pais.id_pais')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pais.id_pais'))); ?></li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>