<?php
if (isset($paises)) {
    $options = array();
    $options['width'] = "12px";
    $options['height'] = "10px";
    $options['class'] = "flag";
    ?> 
    <div class="drop-menu">
        <span class="plus">+</span><span class="mensajePais">    
            <?php
            $ps = false;
            foreach ($paises as $pais):
                if ($this->Session->read('pais.Pais.id_pais') == $pais['Pais']['id_pais']) {
                    $options['alt'] = "Precios de " . $pais['Pais']['pais'];
                    $options['title'] = "Precios de " . $pais['Pais']['pais'];
                    e($pais['Pais']['pais'] . $this->Html->image($pais['Pais']['imagen'], $options));
                    $ps = true;
                }
            endforeach;
            if (!$ps)
                e("Paises");
            ?>
        </span>
        <ul class="sub-menu">
            <?php
            foreach ($paises as $pais):
                $options['alt'] = "Precios de " . $pais['Pais']['pais'];
                $options['title'] = "Precios de " . $pais['Pais']['pais'];
                ?>
                <li>
                    <?php
                    echo $ajax->link(
                            $pais['Pais']['pais']
                            . $this->Html->image($pais['Pais']['imagen'], $options)
                            , array('controller' => 'paises', 'action' => 'selectPais',
                        $pais['Pais']['id_pais']), array('escape' => false,
                        'complete' => 'location.reload()'
                            )
                    );
                    ?>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
    </div>
    <?php
}
?>