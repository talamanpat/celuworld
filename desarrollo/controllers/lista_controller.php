<?php

class ListaController extends AppController {

    var $name = 'Lista';
    var $components = array('Filtros');
    var $paginate;
    var $uses=array();

    function smarts() {
        $this->listaFiltrosSmart();
        $this->data['Especificacion']['basico'] = 0;
        $this->data['Especificacion']['tablet'] = 0;
        //$this->listaCelulares($this->Filtros->condiciones($this->data));
        $this->set('title_for_layout', 'Smartphones');
        $this->set('description_for_layout','Smartphones'.$this->CProperties->CELULARES_DESCRIPTION);
        $this->set('keywords_for_layout','Smartphones, smart'.$this->CProperties->CELULARES_KEYWORDS);
        $this->set('celulares', $this->listaCelulares($this->Filtros->condiciones($this->data)));

    }
    function tablets() {
        $this->listaFiltrosSmart();
        $this->data['Especificacion']['smart'] = 0;
        $this->data['Especificacion']['basico'] = 0;
        $this->data['Especificacion']['tablet'] = 1;
        //$this->listaCelulares($this->Filtros->condiciones($this->data));
        $this->set('title_for_layout', 'Tablets');
        $this->set('description_for_layout','Tablets'.$this->CProperties->CELULARES_DESCRIPTION);
        $this->set('keywords_for_layout','Tablets'.$this->CProperties->CELULARES_KEYWORDS);
        $this->set('celulares', $this->listaCelulares($this->Filtros->condiciones($this->data)));

    }

    
    
    function smartClean() {
        $this->Session->write('filtros.smart', null);
        $this->Session->setFlash(__('Filtro de Smartphones reiniciado', true));
        $this->redirect(array('action' => 'smarts'));
    }

    private function listaCelulares($condiciones=null) {
        
            
        $referPais = $this->Celular->Precio->Referencia->find('list', array(
                    'conditions' => array('Referencia.pais_id' => $this->Session->read('pais.Pais.id_pais'))));
        $this->paginate = array(
            'limit' => 7,
            'contain' => array(
                'Foto'=>array(
                    'order' => array(
                        'Foto.show' => 'desc'),
                ),
                'Video',
                'Especificacion',
                'Marca',
                'Precio' => array(
                    'conditions' => array(
                        'Precio.referencia_id' => array_keys($referPais),
                    ),
                    'order' => array(
                        'Precio.fecha' => 'desc'),
                        'limit' => '4',
                        'Referencia' => array(
                            'conditions' => array(
                                'Referencia.pais_id' => $this->Session->read('pais.Pais.id_pais'),
                            )
                    )
                )
            ),
            'order' => array(
                'Especificacion.lanzamiento' => 'desc'),
            'conditions' => $condiciones
        );
        $this->Celular->recursive = 0;
        return $this->paginate();
        //$celulares = $this->paginate();
        //$this->set('celulares', $celulares);
    }

    private function listaFiltrosSmart() {
        $sos = $this->Filtros->getSos();
        $camaras = $this->Filtros->getCamaras();
        $marcas = $this->Filtros->getMarcas();
        $iMovil = $this->Filtros->getG();
        $this->set('sos', $sos);
        $this->set('camaras', $camaras);
        $this->set('marcas', $marcas);
        $this->set('iMovil', $iMovil);

        if (!empty($this->data)) {
            $this->Session->write('filtros.smart', $this->data);
        } else if ($this->Session->read('filtros.smart') != null) {
            $this->data = $this->Session->read('filtros.smart');
        } else {
            $this->Session->write('filtros.smart', $this->Filtros->getCheckedAll($sos, $camaras, $marcas, $iMovil));
            $this->data = $this->Session->read('filtros.smart');
        }
    }

}
