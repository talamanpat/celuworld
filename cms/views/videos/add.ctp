<div class="videos form">
<?php echo $this->Form->create('Video');?>
	<fieldset>
 		<legend><?php __('Add Video'); ?></legend>
	<?php
		echo $this->Form->input('celular_id',array('type'=>'hidden','value'=>$cel));
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
    <h3><?php __('Menu'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Ir al celular', true), array('controller' => 'celulares', 'action' => 'view', $cel)); ?> </li>
    </ul>
    <?php echo $this->element('menuGeneral'); ?>
</div>