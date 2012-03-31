<?php
class PreciosController extends AppController {

	var $name = 'Precios';
	var $helpers = array('Html', 'Form','Ajax','Javascript');
 	var $components = array( 'RequestHandler' );
/*
	function index() {
		$this->Precio->recursive = 0;
		$this->set('precios', $this->paginate());
	}
*/
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid precio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('precio', $this->Precio->read(null, $id));
	}

	function add($idcel = null) {
		if (!empty($this->data)) {
			$this->Precio->create();
			if ($this->Precio->save($this->data)) {
				$this->Session->setFlash(__('The precio has been saved', true));
				$this->redirect(array('action' => 'add',$this->data["Precio"]["celular_id"]));            
			} else {
				$this->Session->setFlash(__('The precio could not be saved. Please, try again.', true));
			}
		}
		if (!$idcel && empty($this->data)) {
			$this->Session->setFlash(__('Entrada invalida', true));
			$this->redirect(array('controller' => 'celulares','action' => 'index'));
		}
		//$celulares = $this->Precio->Celular->find('list');
                
		$celular = $this->Precio->Celular->find('first', array(
                    'conditions' => array(
                        'Celular.id_celular' => $idcel
                        ),
                    'fields'=>array(
                        'Marca.marca','Celular.modelo')                       
                    ));
		$referencias = $this->Precio->Referencia->find('list');
                
		$this->set('title_for_layout',$celular['Celular']['modelo']);
		$this->set(compact('referencias'));
		$this->set('celular',$celular);   
		$this->set('cel',$idcel);   
		$this->set('Paises', $this->Precio->Referencia->Pais->find('list'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid precio', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Precio->save($this->data)) {
				$this->Session->setFlash(__('The precio has been saved', true));
				$this->redirect(array('controller' => 'celulares','action' => 'view',  $this->data["Precio"]["celular_id"]));
			} else {
				$this->Session->setFlash(__('The precio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Precio->read(null, $id);
		}
		$celulares = $this->Precio->Celular->find('list');
		$referencias = $this->Precio->Referencia->find('list');
		$this->set(compact('celulares', 'referencias'));
	}

	function delete($id = null,$cel=null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for precio', true));
			$this->redirect(array('controller' => 'celulares','action' => 'view',$cel));
		}
		if ($this->Precio->delete($id)) {
			$this->Session->setFlash(__('Precio deleted', true));
			$this->redirect(array('controller' => 'celulares','action' => 'view',$cel));
		}
		$this->Session->setFlash(__('Precio was not deleted', true));
		$this->redirect(array('controller' => 'celulares','action' => 'view',$cel));
	}
	function referenciasDelPais($idPais=null){
		$this->set('Referencias', $this->Precio->Referencia->find('list', array(
		 	'value' => array('Referencia.id_referencia', 'Referencia.nombre'),
            'conditions' =>array('Referencia.pais_id' => $this->data['Precio']['pais_id']))));
	}
}
