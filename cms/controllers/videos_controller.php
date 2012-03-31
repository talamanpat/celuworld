<?php
class VideosController extends AppController {

	var $name = 'Videos';

	function index() {
		$this->Video->recursive = 0;
		$this->set('videos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid video', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('video', $this->Video->read(null, $id));
	}

	function add($cel=null) {
		if (!empty($this->data)) {
			$this->Video->create();
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The video has been saved', true));
				$this->redirect(array('controller' => 'videos','action' => 'add',  $this->data['Video']['celular_id']));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.', true));
			}
		}
		//$celulares = $this->Video->Celular->find('list');
		//$this->set(compact('celulares'));
		$this->set('cel',$cel);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid video', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The video has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Video->read(null, $id);
		}
		$celulares = $this->Video->Celular->find('list');
		$this->set(compact('celulares'));
	}

	function delete($id = null,$idcel=NULL) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for video', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Video->delete($id)) {
			$this->Session->setFlash(__('Video deleted', true));
			$this->redirect(array('controller' => 'Celulares','action' => 'view',$idcel));
		}
		$this->Session->setFlash(__('Video was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>