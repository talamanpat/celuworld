<?php
/*
 * talaman
 * 
 */
?>
<!--<div class="PieBloquePrecios">-->

    <div id="irFicha">
        <table  height="30" border="0">
            <tr>
                <td>
                    <?php echo $this->element('global/facebookComentsCount', array('url' => $this->HProperties->APP . 'celular/ficha/' . $celular['Celular']['id_celular'])); ?>
                </td>
                <td width="112" class="verMas"><?php
                    e($this->Html->link("<div>VER FICHA</div>", array('controller' => 'celular', 'action' => 'ficha',
                                $celular['Celular']['id_celular']), array('escape' => false, 'target' => '_blank')));
                    ?>
                </td>
            </tr>
        </table>
    </div>
<!--</div>-->