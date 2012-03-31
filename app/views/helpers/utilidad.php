<?php

//App::import('Helper', 'Text');
class UtilidadHelper extends Helper {

    var $helpers = array('Html', 'Session', 'Text');

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

    function rowBoolMandatory($bul, $titulo, $txtNo='') {
        e('<tr><th >' . $titulo . '</th>');
        e('<td >');
        if ($bul == 1) {
            e('Si');
        } else {
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

    function rowTxtMandatory($txt, $titulo, $txtNo='') {
        e('<tr><th >' . $titulo . '</th>');
        e('<td >');
        if ($txt != "" || $txt != 0) {
            e($txt);
        } else {
            e($txtNo);
        }
        e('</td></tr>');
    }

    function rowTxt($txt, $titulo) {
        if ($txt != "" || $txt != 0) {
            e('<tr><th  >' . $titulo . '</th>');
            e('<td >');
            e($txt);
            e('</td></tr>');
        }
    }

    function especificacionesLista($especificaiones, $sos) {

        e('<ul>');
        $i = 0;

        if ($this->listaBoolean($especificaiones['pantalla_multitactil'])) {
            $this->listaCuatro($i);
            e('<li>Multitáctil</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['wifi'])) {
            $this->listaCuatro($i);
            e('<li>Wifi</li>');
            $i++;
        }
        ////11
        if ($this->listaBoolean($especificaiones['3g'])) {
            $this->listaCuatro($i);
            e('<li>3G</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['4g'])) {
            $this->listaCuatro($i);
            e('<li>4G</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['modem'])) {
            $this->listaCuatro($i);
            e('<li>Modem</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['modem_wifi'])) {
            $this->listaCuatro($i);
            e('<li>Modem Wifi</li>');
            $i++;
        }

        if ($this->listaBoolean($especificaiones['gps']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Gps</li>');
            $i++;
        }
        if ($especificaiones['memoria_telefono'] != "" && $i != 11) {
            $this->listaCuatro($i);
            e($this->Text->truncate('<li>Mem.Int. ' . $especificaiones['memoria_telefono'] . '</li>',25));
            $i++;
        }
        if ($this->listaBoolean($especificaiones['sd']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>' . $especificaiones['tipo_memoria'] ./* ' ' . $especificaiones['sd_default'] . ' -> ' . */ $especificaiones['sd_max'] . '</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['camara']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Camara ' . $especificaiones['camara'] . 'MPX</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['flash']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Cam. Flash</li>');
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
        if ($this->listaBoolean($especificaiones['java_app']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Soporta Java</li>');
            $i++;
        }
        if ($this->listaBoolean($especificaiones['flash_player']) && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Flash Player</li>');
            $i++;
        }
        if ($especificaiones['chipset'] != "" && $i != 11) {
            $this->listaCuatro($i);
            e($this->Text->truncate('<li>Chipset ' . $especificaiones['chipset'] . '</li>', 25));
            $i++;
        }
        if ($especificaiones['procesador'] != "" && $i != 11) {
            $this->listaCuatro($i);
            e($this->Text->truncate('<li>Pro. ' . $especificaiones['procesador'] . '</li>', 25));
            $i++;
        }
        if ($especificaiones['gpu'] != "" && $i != 11) {
            $this->listaCuatro($i);
            e($this->Text->truncate('<li>Gpu ' . $especificaiones['gpu'] . '</li>'), 25);
            $i++;
        }
        if ($especificaiones['ram'] != "" && $i != 11) {
            $this->listaCuatro($i);
            e('<li>Ram ' . $especificaiones['ram'] . '</li>');
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
            e('<li>... ' . $this->Html->link('ver más', array('controller' => 'celular', 'action' => 'ficha', $especificaiones['celular_id'])) . '</li>');

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

    function estilosCelular($celular) {
        $estilos = array();
        if ($celular['Especificacion']['simple'] == 1) {
            $estilos[] = "CandyBar";
        }
        if ($celular['Especificacion']['touch'] == 1) {
            $estilos[] = 'Touch';
        }
        if ($celular['Especificacion']['slide'] == 1) {
            $estilos[] = 'Slide';
        }
        if ($celular['Especificacion']['flip'] == 1) {
            $estilos[] = 'ClamShell';
        }
        if ($celular['Especificacion']['teclado'] == 1) {
            $estilos[] = 'teclado alfanumérico';
        }
        if ($celular['Especificacion']['teclado_numerico'] == 1) {
            $estilos[] = 'teclado numérico';
        }
        if (empty($estilos)) {
            $estilos[] = "no definido";
        }
        return $this->Text->toList($estilos, $and = 'y');
    }

}

?>