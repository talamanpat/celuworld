<?php
class GamasController extends AppController {

	var $name = 'Gamas';

	function index() {
		$this->Gama->recursive = 0;
		$this->set('gamas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid gama', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('gama', $this->Gama->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Gama->create();
			if ($this->Gama->save($this->data)) {
				$this->Session->setFlash(__('The gama has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gama could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid gama', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Gama->save($this->data)) {
				$this->Session->setFlash(__('The gama has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gama could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Gama->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for gama', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Gama->delete($id)) {
			$this->Session->setFlash(__('Gama deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Gama was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
