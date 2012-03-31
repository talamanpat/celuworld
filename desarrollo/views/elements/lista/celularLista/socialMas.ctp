<div class="PieBloquePrecios">
    <div class="PieBloquePreciosColIz">
 
    </div>

    <div class="PieBloquePreciosColDer">
        <table width="120" height="30" border="0">
            <tr>
                <td width="112" class="verMas"><?php
                    e($this->Html->link("<div >VER FICHA</div>", array('controller' => 'celular', 'action' => 'ficha',
                                $celular['Celular']['id_celular']), array('escape' => false, 'target' => '_blank')));
                    ?>
                </td>
            </tr>
        </table>
    </div>
</div>