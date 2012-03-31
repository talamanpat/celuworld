<?php
class PaisesController extends AppController{
   var $name = 'Paises';
	var $helpers = array('Html', 'Form');

	function index() {
		 $this->set('Paises', $this->Pais->find('all'));
	}

	function view($id = null) {
		$this->Pais->id = $id;
		$this->set('Pais', $this->Pais->read());
	}
	
	function add() {        
	 	if (!empty($this->data)) {            
			if ($this->Pais->save($this->data)) {                
				$this->Session->setFlash('El registro se ha grabado satisfactoriamente.');                
				$this->redirect(array('action' => 'index'));            
			}        
		}    
	}

	function delete($id) {
		if ($this->Pais->delete($id)){
			$this->Session->setFlash('El pais con id: '.$id.' a sido eliminado.');
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function edit($id) {
		$this->Pais->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Pais->read();
		} else {
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash('update.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

}
?>