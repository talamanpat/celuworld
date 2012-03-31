<br>
<h3><?php __('Navegaci&oacute;n'); ?></h3>
<ul>
    <li><?php echo $this->Html->link(__('Marcas', true), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Celulares', true), array('controller' => 'celulares', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Sistemas Operativos', true), array('controller' => 'sos', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Paises', true), array('controller' => 'paises','action' => 'index'));?></li>
    <li><?php echo $this->Html->link(__('Referencias', true), array('controller' => 'referencias', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Noticias', true), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Periodistas', true), array('controller' => 'periodistas', 'action' => 'index')); ?> </li>
</ul>