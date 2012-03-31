<?php
class ReferenciasController extends AppController {

	var $name = 'Referencias';

	function index() {
		$this->Referencia->recursive = 0;
		$this->set('referencias', $this->paginate());
               
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid referencia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('referencia', $this->Referencia->read(null, $id));
                 $this->set('celularesList', $this->Referencia->Precio->Celular->find('list'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Referencia->create();
			if ($this->Referencia->save($this->data)) {
				$this->Session->setFlash(__('The referencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referencia could not be saved. Please, try again.', true));
			}
		}
		$paises = $this->Referencia->Pais->find('list');
		$this->set(compact('paises'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid referencia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Referencia->save($this->data)) {
				$this->Session->setFlash(__('The referencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referencia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Referencia->read(null, $id);
		}
		$paises = $this->Referencia->Pais->find('list');
		$this->set(compact('paises'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for referencia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Referencia->delete($id)) {
			$this->Session->setFlash(__('Referencia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Referencia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
