<?php

class PaisesController extends AppController {

    var $name = 'Paises';
    var $helpers = array('Youtube');
    var $uses = array('Pais');


    function selectPais($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Entrada Inv&aacute;lida', true));
        }else{
            $this->Session->write('pais',$this->Pais->read(null, $id));    
        } 
        
    }


}
