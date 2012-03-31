<?php

class UsersController extends AppController {

    var $name = 'Users';
    var $helpers = array('Session');

    function beforeFilter() {
        $this->Auth->allow('login');
        $this->Auth->loginError = "Usuario o password incorrecto!";
        $this->Auth->authError = "Acceso denegado";
    }

    /**
     *  El AuthComponent proporciona la funcionalidad necesaria
     *  para el acceso (login), por lo que se puede dejar esta funci�n en blanco.
     */
    function login() {
        
    }

    function logout() {
        $this->Auth->logout();
        $this->redirect(array('action' => 'login'));
    }

    function registrar() {
//		if ($this->data) {
//			/*  if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['Confirmar_password'])) {
//			 $this->User->create();
//			 $this->User->save($this->data);
//			 //   $this->Session->setFlash('Bienvenido '.$this->data['User']['username']);
//			 $this->redirect(array('action' => '../'));
//			 }*/
//			if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['Confirmar_password'])) { 
//				$this->User->create();
//			 	$this->User->save($this->data);
//     	//	  	$this->Session->setFlash('Nuebo usuario agregado.');
//			 	$this->redirect(array('action' => '../'));
//			} else { 
//				$this->data=null;
//		//		 $session->setFlash('las contrase&ntilde;as no concuerdan');
//				
//			}
//		}
        if ($this->data) {
            /*  if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['Confirmar_password'])) {
              $this->User->create();
              $this->User->save($this->data);
              //   $this->Session->setFlash('Bienvenido '.$this->data['User']['username']);
              $this->redirect(array('action' => '../'));
              } */

            if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['Confirmar_password'])) {
                $this->User->create();
                if ($this->User->save($this->data)) {
                    $this->Session->setFlash('Nuevo usuario agregado.');
                    $this->redirect(array('action' => '../'));
                } else {
                    $this->Session->setFlash(__('El usuario no pudo guardarce, por favor intenta de nuevo', true));
                }
            } else {
                $this->data = null;
                $this->Session->setFlash('las contrase&ntilde;as no concuerdan');
            }
        }
    }

}

?>