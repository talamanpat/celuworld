<?php

class ListaController extends AppController {

    var $name = 'Lista';
    var $components = array('Filtros');
    var $paginate;
    var $uses = array();

    function smartphones() {
        $this->layout = 'lista';
        $this->listaFiltrosSmart();
        $this->data['Especificacion']['basico'] = 0;
        $this->data['Especificacion']['tablet'] = 0;
        $this->data['Especificacion']['smart'] = 1;
        $this->set('title_for_layout', 'Smartphones');
        $this->set('css_for_layout', array('lista', 'filtros'
//            , 'widget'
                )
        );
        $this->set('description_for_layout', 'Smartphones' . $this->CProperties->CELULARES_DESCRIPTION);
        $this->set('keywords_for_layout', 'Smartphones, smart' . $this->CProperties->CELULARES_KEYWORDS);
        $this->set('celulares', $this->listaCelulares($this->Filtros->condiciones($this->data)));
        $this->set('gamas', $this->Celular->Especificacion->Gama->find('list'));
        $this->set('sos', $this->Celular->Especificacion->So->find('list'));
    }

    function tablets() {
        $this->layout = 'lista';
        $this->listaFiltrosTablet();
        $this->data['Especificacion']['tablet'] = 1;
        $this->data['Especificacion']['smart'] = 0;
        $this->data['Especificacion']['basico'] = 0;
        $this->set('title_for_layout', 'Tablets ');
        $this->set('css_for_layout', array('lista', 'filtros'
//            , 'widget'
        ));
        $this->set('description_for_layout', 'Tablets' . $this->CProperties->CELULARES_DESCRIPTION);
        $this->set('keywords_for_layout', 'Tablets' . $this->CProperties->CELULARES_KEYWORDS);
        $this->set('celulares', $this->listaCelulares($this->Filtros->condiciones($this->data)));
        $this->set('gamas', $this->Celular->Especificacion->Gama->find('list'));
        $this->set('sos', $this->Celular->Especificacion->So->find('list'));
    }

    function smartClean() {
        $this->Session->write('filtros.smart', null);
//        echo '<pre>'.$this->Session.'</pre>';
        $this->Session->setFlash(__('Filtro de Smartphones reiniciado', true));
        $this->redirect(array('action' => 'smartphones'));
    }

    private function listaCelulares($condiciones=null) {
        $referPais = $this->Celular->Precio->Referencia->find('list', array(
                    'conditions' => array('Referencia.pais_id' => $this->Session->read('pais.Pais.id_pais'))));
        $this->paginate = array(
            'limit' => 7,
            'contain' => array(
                'Foto' => array(
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
    }

    private function listaFiltrosTablet() {
        $sos = $this->Filtros->getSos();
        $camaras = $this->Filtros->getCamaras();
        $marcas = $this->Filtros->getMarcas();
        $iMovil = $this->Filtros->getG();
        $this->set('sos', $sos);
        $this->set('camaras', $camaras);
        $this->set('marcas', $marcas);
        $this->set('iMovil', $iMovil);

        if (!empty($this->data)) {
            $this->Session->write('filtros.tablet', $this->data);
        } else if ($this->Session->read('filtros.tablet') != null) {
            $this->data = $this->Session->read('filtros.tablet');
        } else {
            $this->Session->write('filtros.tablet', $this->Filtros->getCheckedAll($sos, $camaras, $marcas, $iMovil));
            $this->data = $this->Session->read('filtros.tablet');
        }
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

    function filtrosClose() {
        
    }

    function filtrosOpen() {
        
    }

}
