<?php
class PeriodistasController extends AppController {

	var $name = 'Periodistas';

	function index() {
		$this->Periodista->recursive = 0;
		$this->set('periodistas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid periodista', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('periodista', $this->Periodista->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Periodista->create();
			if ($this->Periodista->save($this->data)) {
				$this->Session->setFlash(__('The periodista has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The periodista could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid periodista', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Periodista->save($this->data)) {
				$this->Session->setFlash(__('The periodista has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The periodista could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Periodista->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for periodista', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Periodista->delete($id)) {
			$this->Session->setFlash(__('Periodista deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Periodista was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
