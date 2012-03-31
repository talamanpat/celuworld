<?php
class MarcasController extends AppController {

	var $name = 'Marcas';
        var $helpers = array('Html', 'Form','Utilidad');
	function index() {
		$this->Marca->recursive = 0;
		$this->set('marcas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid marca', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('marca', $this->Marca->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Marca->create();
			if ($this->Marca->save($this->data)) {
				$this->Session->setFlash(__('The marca has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marca could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid marca', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Marca->save($this->data)) {
				$this->Session->setFlash(__('The marca has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marca could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Marca->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for marca', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Marca->delete($id)) {
			$this->Session->setFlash(__('Marca deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Marca was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
