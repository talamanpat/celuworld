<?php

class CelularController extends AppController {

    var $name = 'Celular';
    var $helpers = array('Youtube');

    function ficha($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Entrada Inv&aacute;lida', true));
            $this->redirect(array('controller' => 'celulares', 'action' => 'smartphones'));
        }
        $this->layout = 'detalle';
        $celular = $this->Celular->read(null, $id);
        $similares = $this->Celular->find('all', array('conditions' => array(
                        'Especificacion.gama_id' => $celular['Especificacion']['gama_id'],
                        'Especificacion.so_id' => $celular['Especificacion']['so_id'],
                        'Celular.id_celular <>' => $celular['Celular']['id_celular'],
                    ),
                    'contain' => array(
                        'Especificacion' => array(
                            'fields' => ('gama_id')
                        ),
//                        'Marca',
                        'Marca'
                    ),
                    'order' => array(
                        'Marca.marca' => 'asc',
                    ),
                        )
        );
//        e($celular['Especificacion']['gama_id']);
//        debug($similares);
        $this->set('title_for_layout', $celular['Marca']['marca'] . " " . $celular['Celular']['modelo']);
        $this->set('css_for_layout', array('detalle', 'detalle-slider'));
        $this->set('description_for_layout', $celular['Marca']['marca'] . " " . $celular['Celular']['modelo'] . $this->CProperties->CELULAR_DESCRIPTION);
        $this->set('keywords_for_layout', $celular['Marca']['marca'] . ", " . $celular['Celular']['modelo'] . $this->CProperties->CELULAR_KEYWORDS);
        $this->set('celular', $celular);
        $this->set('similares', $similares);
        $this->set('gamas', $this->Celular->Especificacion->Gama->find('list'));
        $this->set('sos', $this->Celular->Especificacion->So->find('list'));
        $this->set('precios', $this->searchPrecios($id));
    }

    private function searchPrecios($id) {
        return $this->Celular->Precio->find('all', array('conditions' => array(
                'Referencia.pais_id' => $this->Session->read('pais.Pais.id_pais'),
                'Precio.celular_id' => $id),
            'order' => array(
                'Precio.fecha' => 'desc',
            ),
            'limit' => '12'
                )
        );
    }

    function analisis($id=null) {
        $this->layout = 'popup';
        if ($id == null) {
            $dato = 'entrada incorrecta';
        } else {
            $celular = $this->Celular->Especificacion->query(
                            "select Especificacion.analisis, Celular.modelo, Marca.marca 
            from especificaciones as Especificacion,
            marcas as Marca,
            celulares as Celular
            where Celular.id_celular =Especificacion.celular_id
            and Celular.marca_id = Marca.id_marca
            and Celular.id_celular = " . $id . " limit 1");
            $dato = $celular[0]['Especificacion']['analisis'];
            $this->set('title_for_layout', $celular[0]['Marca']['marca'] . " " . $celular[0]['Celular']['modelo'] . " análisis");
        }
        $this->set('dato', $dato);
    }
}
