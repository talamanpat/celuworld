<?php
class EspecificacionesController extends AppController {

	var $name = 'Especificaciones';

	function index() {
		$this->Especificacion->recursive = 0;
		$this->set('especificaciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid especificacion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('especificacion', $this->Especificacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Especificacion->create();
			if ($this->Especificacion->save($this->data)) {
				$this->Session->setFlash(__('The especificacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especificacion could not be saved. Please, try again.', true));
			}
		}
		$celulares = $this->Especificacion->Celular->find('list');
		$sos = $this->Especificacion->So->find('list');
		$this->set(compact('celulares', 'sos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid especificacion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Especificacion->save($this->data)) {
				$this->Session->setFlash(__('The especificacion has been saved', true));
				$this->redirect(array('controller'=>'celulares','action' => 'view',$this->data['Especificacion']['celular_id']));
			} else {
				$this->Session->setFlash(__('The especificacion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Especificacion->read(null, $id);
		}
		$sos = $this->Especificacion->So->find('list');
		$gamas = $this->Especificacion->Gama->find('list');
		$this->set(compact('sos','gamas'));
}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for especificacion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Especificacion->delete($id)) {
			$this->Session->setFlash(__('Especificacion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Especificacion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
