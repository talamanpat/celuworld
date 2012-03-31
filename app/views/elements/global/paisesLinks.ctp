<table width="50" border="0" style="margin: 0 auto">
  <tr>
<?php
if(isset ($paises )){
foreach ($paises as $pais):
    ?><td><span class="ContenedorBandera"><?php
    $options = array();
    $options['alt']=$pais['Pais']['pais'];
    $options['title']=$pais['Pais']['pais'];
    if ($this->Session->read('pais.Pais.id_pais') == $pais['Pais']['id_pais']) {
        $options['id']="paisSelect";
    }
    echo $ajax->link($this->Html->image($pais['Pais']['imagen'],$options), array('controller' => 'paises', 'action' => 'selectPais',
        $pais['Pais']['id_pais']), array('escape' => false, 'complete' => 'location.reload()'));
    ?></span></td><?php
endforeach;
}
?>
  </tr>
</table>
