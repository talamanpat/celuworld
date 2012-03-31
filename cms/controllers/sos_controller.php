<?php
class SosController extends AppController {

	var $name = 'Sos';

	function index() {
		$this->So->recursive = 0;
		$this->set('sos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid so', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('so', $this->So->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->So->create();
			if ($this->So->save($this->data)) {
				$this->Session->setFlash(__('The so has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The so could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid so', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->So->save($this->data)) {
				$this->Session->setFlash(__('The so has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The so could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->So->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for so', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->So->delete($id)) {
			$this->Session->setFlash(__('So deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('So was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
