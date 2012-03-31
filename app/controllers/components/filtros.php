<?php

class FiltrosComponent extends Object {

    function initialize(&$controller) {
        $this->controller = & $controller;
    }

    function getSos() {
        //  $So = ClassRegistry::init('So');
        return $this->controller->Celular->Especificacion->So->find('list'); //$So->find('list');
    }

    function getMarcas() {
        //  $So = ClassRegistry::init('So');
        return $this->controller->Celular->Marca->find('list', array('order' => 'marca')); //$So->find('list');
    }

    function getCamaras() {
        // $Especificacion = ClassRegistry::init('Especificacion');
        return $this->controller->Celular->Especificacion->find('list', array(/*'conditions' => array('Especificacion.camara >' => '0'),*/
            'order' => 'camara',
            'fields' => array('Especificacion.camara', 'Especificacion.camara'),
            'group' => array('Especificacion.camara')));
    }

    function getCamaras0() {
        // $Especificacion = ClassRegistry::init('Especificacion');
        return $this->controller->Celular->Especificacion->find('list', array(
            'order' => 'camara',
            'fields' => array('Especificacion.camara', 'Especificacion.camara'),
            'group' => array('Especificacion.camara')));
    }

    function getG() {
        // $Especificacion = ClassRegistry::init('Especificacion');
        return $this->controller->Celular->Especificacion->find('list', array(/*'conditions' => array('Especificacion.g >' => '0'),*/
            'order' => 'g',
            'fields' => array('Especificacion.g', 'Especificacion.g'),
            'group' => array('Especificacion.g')));
    }

    function getG0() {
        // $Especificacion = ClassRegistry::init('Especificacion');
        return $this->controller->Celular->Especificacion->find('list', array(
            'order' => 'g',
            'fields' => array('Especificacion.g', 'Especificacion.g'),
            'group' => array('Especificacion.g')));
    }

    function getCheckedAll($sos, $camaras, $marcas, $iMovil) {
        return Array(
            'Especificacion' => Array
                (
                'smart' => 1,
                'basico' => 1,
                'tablet' => 1,
                'camara' => array_keys($camaras),
                'touch' => 1,
                'slide' => 1,
                'flip' => 1,
                'simple' => 1,
                'teclado' => 1,
                'teclado_numerico' => 1,
                'g' => array_keys($iMovil)
            ),
            'So' => array(
                'id_so' => array_keys($sos)
            ),
            'Celular' => array(
                'marca_id' => array_keys($marcas)
            )
        );
    }

    function condiciones($data) {
//        debug($data);
        
        //obligatorios primer nivel
        $and = array();
        $this->arrayAdd(&$and, 1, 'Celular.vigente');
        $this->arrayAdd(&$and, $data['Especificacion']['smart'], 'Especificacion.smart');
        $this->arrayAdd(&$and, $data['Especificacion']['basico'], 'Especificacion.basico');
        $this->arrayAdd(&$and, $data['Especificacion']['tablet'], 'Especificacion.tablet');
        $this->arrayAdd(&$and, $data['Celular']['marca_id'], 'Celular.marca_id');
        $this->arrayAdd(&$and, $data['Especificacion']['camara'], 'Especificacion.camara');
//        $this->arrayAdd(&$and, $data['Especificacion']['g'], 'Especificacion.g');
        $this->arrayAdd(&$and, $data['So']['id_so'], 'Especificacion.so_id');

        //extras
        $andOr = array();
        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['touch'], 'Especificacion.touch');
        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['slide'], 'Especificacion.slide');
        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['flip'], 'Especificacion.flip');
        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['simple'], 'Especificacion.simple');
        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['teclado'], 'Especificacion.teclado');
        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['teclado_numerico'], 'Especificacion.teclado_numerico');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['flash'], 'Especificacion.flash');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['wifi'], 'Especificacion.wifi');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['modem'], 'Especificacion.modem');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['bluetooth'], 'Especificacion.bluetooth');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['gps'], 'Especificacion.gps');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['sd'], 'Especificacion.sd');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['mp3'], 'Especificacion.mp3');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['radio'], 'Especificacion.radio');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['video_llamada'], 'Especificacion.video_llamada');
//        $this->arrayAddMaybe(&$andOr, $data['Especificacion']['tv'], 'Especificacion.tv');
        $this->arrayAdd(&$and, $andOr, 'OR');
        

        $condiciones = array(
            'AND' => $and
        );
        //debug($condiciones);

        return $condiciones;
    }

    private function arrayAdd($var, $val, $nom) {
//        if ($val != null) {
        $var[$nom] = $val;
//        }
    }

    private function arrayAddMaybe($var, $val, $nom) {
        if ($val != 0 &&$val != null) {
            $var[$nom] = $val;
        }
    }

}

?>