<div class="ContenedorPaginacion">
    <div class="ant">
        <div id="ContAnt">
            <?php echo $this->Paginator->prev(__('Anterior', true), array('class'=>'open','id'=>'open','name'=>'open'), null, array('style' => 'display: none;')); ?> 
        </div>
    </div>
    <div class="ContenedorPosicion">
        <div class="ContenedorNumeros">
            <table width="50" border="0">
                <tr> 
                    <?php echo $this->Paginator->numbers(array('tag' => 'td','before' => '', 'after' => '','separator' => '')); ?>
                </tr>
            </table>
        </div>
    </div>
<div class="sig">
  <div id="ContSig">
   <?php echo $this->Paginator->next(__('Siguiente', true), array('class'=>'open','id'=>'open','name'=>'open'), null, array('style' => 'display: none;')); ?>      
  </div>
   </div>
</div>
