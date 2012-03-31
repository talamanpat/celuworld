<?php

class NoticiasController extends AppController {

    var $name = 'Noticias';

    function index() {
        $this->Noticia->recursive = 0;
        $this->set('noticias', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid noticia', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('noticia', $this->Noticia->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) { 
            if (isset($this->data["Noticia"]["uploadFile"]) && $this->data["Noticia"]["uploadFile"] != 4) {
                $archivo = $this->data["Noticia"]["uploadFile"];
                $dir = APP . "../app/webroot/img/noticias/";
                $nameArch=rand(50, 1000) . ' '.$archivo['name'];
                $dir = $dir . basename($nameArch);
                if (move_uploaded_file($archivo['tmp_name'], $dir)) {
                    $this->data["Noticia"]["foto_nombre"] = $nameArch;
                    $this->data["Noticia"]["foto_size"] = $archivo['size'];
                    $this->Noticia->create();
                    if ($this->Noticia->save($this->data)) {
                        $this->Session->setFlash(__('The noticia has been saved', true));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The noticia could not be saved. Please, try again.', true));
                    }
                } else {
                    echo "There was an error uploading the file, please try again!";
                }
            }
        }
            $periodistas = $this->Noticia->Periodista->find('list');
            $this->set(compact('periodistas'));
        }

        function edit($id = null) {
            if (!$id && empty($this->data)) {
                $this->Session->setFlash(__('Invalid noticia', true));
                $this->redirect(array('action' => 'index'));
            }
            if (!empty($this->data)) {
                if ($this->Noticia->save($this->data)) {
                    $this->Session->setFlash(__('The noticia has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The noticia could not be saved. Please, try again.', true));
                }
            }
            if (empty($this->data)) {
                $this->data = $this->Noticia->read(null, $id);
            }
            $periodistas = $this->Noticia->Periodista->find('list');
            $this->set(compact('periodistas'));
        }

        function delete($id = null) {
            if (!$id) {
                $this->Session->setFlash(__('Invalid id for noticia', true));
                $this->redirect(array('action' => 'index'));
            }
            if ($this->Noticia->delete($id)) {
                $this->Session->setFlash(__('Noticia deleted', true));
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Noticia was not deleted', true));
            $this->redirect(array('action' => 'index'));
        }

    }

    