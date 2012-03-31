<?php

class SitemapController extends AppController {

    var $name = 'Sitemap';
    var $helpers = array('Youtube','Xml');
    var $uses = array('Marca');

    function usuario() {
        $this->set('title_for_layout', "Mapa del sitio ");
        $this->set('description_for_layout', "mapa del sitio, todos los links de los celulares entre otras cosas.");
        $this->set('keywords_for_layout', "sitemap, mapa del sitio, celuworld, celulares, marcas, preguntas frecuentes, faq");

        $this->set('marcas', $this->Marca->find('all', array(
                    'contain' => array(
                        'Celular' => array(
                            'order' => array(
                                'Celular.modelo' => 'asc'),
                        )
                    ),
                    'order' => array('Marca.marca' => 'asc')
                        )
                )
        );
    }
    function google(){
        $this->layout = 'xml/sitemap';
        $this->set('celulares', $this->Celular->find('all',array(
            'contain'=> array(),
            'order' => array('Celular.id_celular' => 'desc')                        
        )));
    }

}
