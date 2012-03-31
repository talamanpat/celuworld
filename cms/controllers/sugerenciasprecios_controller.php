<?php
class SugerenciasreciosController extends AppController {

	var $name = 'Sugerenciasrecios';
	var $helpers = array('Html', 'Form');
 	var $components = array( 'RequestHandler' );

	function index() {
		$this->Precio->recursive = 0;
		$this->set('Sugerenciasrecios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid precio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sugerenciasrecio', $this->Sugerenciasrecio->read(null, $id));
	}

	function add($idcel = null) {
		if (!empty($this->data)) {
			$this->Sugerenciasrecio->create();
			if ($this->Sugerenciasrecio->save($this->data)) {
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
                
		$celular = $this->Sugerenciasrecio->Celular->find('first', array(
                    'conditions' => array(
                        'Celular.id_celular' => $idcel
                        ),
                    'fields'=>array(
                        'Marca.marca','Celular.modelo')                       
                    ));
                
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
			if ($this->Sugerenciasrecio->save($this->data)) {
				$this->Session->setFlash(__('The precio has been saved', true));
				$this->redirect(array('controller' => 'celulares','action' => 'view',  $this->data["Precio"]["celular_id"]));
			} else {
				$this->Session->setFlash(__('The precio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sugerenciasrecio->read(null, $id);
		}
		$celulares = $this->Sugerenciasrecio->Celular->find('list');
		$referencias = $this->Sugerenciasrecio->Referencia->find('list');
		$this->set(compact('celulares', 'referencias'));
	}

	function delete($id = null,$cel=null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for precio', true));
			$this->redirect(array('controller' => 'celulares','action' => 'view',$cel));
		}
		if ($this->Sugerenciasrecio->delete($id)) {
			$this->Session->setFlash(__('Precio deleted', true));
			$this->redirect(array('controller' => 'celulares','action' => 'view',$cel));
		}
		$this->Session->setFlash(__('Precio was not deleted', true));
		$this->redirect(array('controller' => 'celulares','action' => 'view',$cel));
	}
}
