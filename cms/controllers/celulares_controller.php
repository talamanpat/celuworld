<?php

class CelularesController extends AppController {

    var $name = 'Celulares';
    var $helpers = array('Html', 'Form', 'Utilidad', 'Imagen');

    function index() {
        $this->Celular->recursive = 0;
        $this->paginate = array(
            'limit' => 50);
        $this->set('celulares', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid celular', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('celular', $this->Celular->read(null, $id));
        $this->set('sos', $this->Celular->Especificacion->So->find('list'));
        $this->set('referencias', $this->Celular->Precio->Referencia->find('list'));
        $this->set('paises', $this->Celular->Precio->Referencia->Pais->find('list'));
        $this->set('referencias_pais', $this->Celular->Precio->Referencia->find('list',array('fields'=>array('id_referencia','pais_id'))));
    }

    function add($mar=null) {
        if (!empty($this->data)) {
            $this->Celular->create();
            if ($this->Celular->save($this->data)) {
                /* 				$this->Session->setFlash(__('The celular has been saved', true));
                  $this->redirect(array('action' => 'index')); */
                $this->data['Especificacion']['celular_id'] = $this->Celular->id;
                if ($this->Celular->Especificacion->save($this->data)) {
                    $this->Celular->saveField('cel_esp_id', $this->Celular->Especificacion->id);
                    $this->Session->setFlash('Los registros se han grabado satisfactoriamente.');
                    //$this->redirect(array('action' => '../fotos/upload/'.$this->Celular->id));
                    $this->redirect(array('action' => '../fotos/upload/' . $this->Celular->id));
                } else {
                    $this->Session->setFlash(__('Error al grabar las especificaciones.', true));
                }
            } else {
                $this->Session->setFlash(__('The celular could not be saved. Please, try again.', true));
            }
        }
        $marcas = $this->Celular->Marca->find('list');
        $this->set('ListaSistemas', $this->Celular->Especificacion->So->find('list', array('value' =>
                    array('So.so_id', 'So.sistema'))));
        $this->set('ListaGamas', $this->Celular->Especificacion->Gama->find('list', array('value' =>
                    array('Gama.gama_id', 'Gama.descripcion'))));
        $this->set(compact('marcas'));
        $this->set('mar', $mar);
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid celular', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Celular->save($this->data)) {
                $this->Session->setFlash(__('The celular has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The celular could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Celular->read(null, $id);
        }
        $marcas = $this->Celular->Marca->find('list');
        $this->set(compact('marcas'));
    }

    function delete($id = null, $idesp = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for celular', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Celular->delete($id)) {
            @ $this->Celular->Especificacion->delete($idesp);
            $this->Session->setFlash(__('Celular deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Celular was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
