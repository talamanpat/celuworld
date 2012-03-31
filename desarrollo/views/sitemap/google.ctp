<url><loc><?php e($this->HProperties->APP);?></loc></url>
<url><loc><?php e($this->HProperties->APP.'lista/smarts'); ?></loc></url>
<url><loc><?php e($this->HProperties->APP.'sitemap/usuario'); ?></loc></url>
<?php foreach ($celulares as $celular) :?>
<url><loc><?php e($this->HProperties->APP.'celular/ficha/'.$celular['Celular']['id_celular']) ?></loc></url>
<? endforeach;?>
<url><loc><?php e($this->HProperties->APP.'links'); ?></loc></url>
