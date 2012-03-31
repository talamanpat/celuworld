<?php
/*
 * talaman
 */

if (!empty($similares)) {
    ?>
    <div id="similares" class="bloque"> 
        <h2>Moviles Similares</h2> 
        <p>
            <?php
            foreach ($similares as $similar):
                e($this->Html->link($similar['Marca']['marca'] . " " . $similar['Celular']['modelo'], array(
                            'controller' => 'celular',
                            'action' => 'ficha',
                            $similar['Celular']['id_celular']
                                )
                        )
                );
                e("<br/>");
            endforeach;
            ?>
        </p>
    </div>  
    <?php
}
?>