<?php

class NoticiasController extends AppController {

    var $name = 'Noticias';

    function index() {
        $this->layout = 'lista';
        $this->Noticia->recursive = 0;
        $this->paginate = array(
            'limit' => 7,
           'order' => array(
                'Noticia.fecha' => 'desc',
                'Noticia.id_noticia' => 'desc'
               )
        );
        $this->set('noticias', $this->paginate());

        $this->set('title_for_layout', 'Noticias');
        $this->set('css_for_layout', array('noticias','lista'));
        $this->set('description_for_layout', $this->CProperties->NOTICIAS_DESCRIPTION);
        $this->set('keywords_for_layout', $this->CProperties->NOTICIAS_KEYWORDS);
    }

    function ver($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Noticia Invalida', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->layout = 'detalle';
        $noticia = $this->Noticia->read(null, $id);
        $this->set('noticia', $noticia);

        $this->set('title_for_layout', $noticia['Noticia']['titulo']);
        $this->set('css_for_layout', array('noticias'));
        $this->set('description_for_layout', $noticia['Noticia']['titulo'] . $this->CProperties->NOTICIA_DESCRIPTION);
        $this->set('keywords_for_layout', $noticia['Noticia']['titulo'] . $this->CProperties->NOTICIA_KEYWORDS);
    }
}

?>