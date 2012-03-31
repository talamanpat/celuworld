<?php

//App::import('Helper', 'Text');
class UtilidadHelper extends Helper {

    var $helpers = array('Html', 'Session','Text');

    function booleanos($bul) {
        if ($bul == 1) {
            return true;
        } else
        if ($bul == 0) {
            return false;
        }
    }

    function booleanosSN($bul) {
        if ($bul == 1) {
            return 'Si';
        } else
        if ($bul == 0) {
            return 'No';
        }
    }

    function booleanosTxt($bul, $txtS, $txtN=null) {
        if ($bul == 1) {
            return $txtS;
        } else
        if ($bul == 0) {
            return $txtN;
        }
    }

    function notCeroTxt($bul, $txtS, $txtN=null) {
        if ($bul > 0) {
            return $txtS;
        } else
        if ($bul == 0) {
            return $txtN;
        }
    }

    function rowBoolMandatory($bul, $titulo,$txtNo='') {
        e('<tr><th >' . $titulo . '</th>');
        e('<td >');
        if ($bul == 1) {
            e('Si');
        }else{
            e($txtNo);
        }
        e('</td></tr>');
    }

    function rowBool($bul, $titulo) {
        if ($bul == 1) {
            e('<tr><th >' . $titulo . '</th>');
            e('<td>');
            e('Si');
            e('</td></tr>');
        }
    }
    function rowTxtMandatory($txt, $titulo,$txtNo='') {
        e('<tr><th >' . $titulo . '</th>');
        e('<td >');
        if ($txt != "" || $txt !=0) {
            e($txt);
        }else{
            e($txtNo);
        }
        e('</td></tr>');
    }

    function rowTxt($txt, $titulo) {
        if ($txt != "" || $txt !=0) {
            e('<tr><th  >' . $titulo . '</th>');
            e('<td >');
            e($txt);
            e('</td></tr>');
        }
    }

    function especificacionesLista($especificaiones, $sos) {

        e('<ul>');
        $i = 0;
        if ($this->listaBoolean($especificaiones['smart'])) {
            e('<li>Smartphone</li>');
            $i++;
        }

        if ($this->listaBoolean($especificaiones['basico'])) {
            e('<li>Basico</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['tablet'])) {
            e('<li>Tablet</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['so_id'])) {
            e('<li>' . $sos[$especificaiones['so_id']] .' '.$especificaiones['so_version'].'</li>');
            $i++;
        }
        //4
        if ($this->listaBoolean($especificaiones['touch'])) {
            $this->listaCuatro($i);
            e('<li>Touch</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['slide'])) {
            $this->listaCuatro($i);
            e('<li>Slide</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['flip'])) {
            $this->listaCuatro($i);
            e('<li>ClamShell</li>');
            $i++;
        }

        if ($this->listaBoolean($especificaiones['simple'])) {
            $this->listaCuatro($i);
            e('<li>CandyBar</li>');
            $i++;
        }
        ////8
        if ($this->listaBoolean($especificaiones['teclado'])) {
            $this->listaCuatro($i);
            e('<li>Tec. alfanumérico</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['teclado_numerico'])) {
            $this->listaCuatro($i);
            e('<li>Tec. numérico</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['wifi']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Wifi</li>');
            $i++;
        }
        ////11
        if ($this->listaBoolean($especificaiones['g']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>3G</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['modem']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Modem</li>');
            $i++;
        }

        if ($this->listaBoolean($especificaiones['gps']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Gps</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['sd']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>'.$especificaiones['tipo_memoria']. ' ' . $especificaiones['sd_default'] . ' -> ' . $especificaiones['sd_max'] . '</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['camara']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Camara ' . $especificaiones['camara'] . 'MPX</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['flash']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Flash</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['video_llamada']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Video llamada</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['tv']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Tv</li>');
            $i++;
        }
        if ($especificaiones['procesador']!="" && $i != 11) {
            $this->listaCuatro($i);
            e($this->Text->truncate('<li>Pro. '.$especificaiones['procesador'].'</li>',25));
            $i++;
        }
        if ($especificaiones['ram']!="" && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Ram '.$especificaiones['ram'].'</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['radio']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Radio</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['mp3']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Mp3</li>');
            $i++;
        }
        if ($i == 11)
            e('<li>...' . $this->Html->link(' ver más', array('controller' => 'Celular', 'action' => 'ficha', $especificaiones['celular_id']), array('target' => '_blank')) . '</li>');

        e('</ul>');
    }

    private function listaCuatro($i) {
        if ($i == 4 || $i == 8)
            e('</ul></div><div  class="celularBloqueSupCol"><ul>');
        //debug($i.' '. ife($i==4||$i==8, 't','f'));
    }

    private function listaBoolean($var) {
        return ife($var != 0, true, false);
    }

//
//    function haveFoto($idCel) {
//        App::import('Controller', 'Fotos');
//        $Fotos = new FotosController;
//        $Fotos->haveFoto($idCel);
//    }

    function paisSelectImg() {
        if ($this->Session->read('pais') != null) {
            return $this->Html->image($this->Session->read('pais.Pais.imagen'), array('alt' => $this->Session->read('pais.Pais.pais')));
        } else {
            return NULL;
        }
    }

    function paisSelectImgSmall() {
        if ($this->Session->read('pais') != null) {
            return $this->Html->image($this->Session->read('pais.Pais.imagen'), array('alt' => $this->Session->read('pais.Pais.pais'), 'width' => '12px', 'height' => '10px'));
        } else {
            return NULL;
        }
    }

}

?>