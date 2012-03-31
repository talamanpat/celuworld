<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {

    var $helpers = array('Html', 'Form', 'Time', 'Text', 'Number', 'Ajax', 'Javascript', 'Session', 'Utilidad', 'Imagen', 'HProperties');
    var $components = array('RequestHandler', 'Session', 'CProperties');
    var $uses = array('Celular', 'Pais');

    function beforeFilter() {
        if ($this->Session->read('pais') == null) {
            $this->geoPais();
        };
        $this->set('paises', $this->Pais->find('all', array('contain' => array(),
                    'order' => array('Pais.pais' => 'asc')
                        )
                )
        );
    }

    private function geoPais() {
        App::import('Component', 'Iploc');
        $iploc = new IplocComponent();
        $code = $iploc->getCountryFromIP($_SERVER["REMOTE_ADDR"], "code");
        if ($code == 'CL') {
            $this->Session->write('pais', $this->Pais->read(null, 5));
        } else
        if ($code == 'AR') {
            $this->Session->write('pais', $this->Pais->read(null, 6));
        } else
        if ($code == 'CO') {
            $this->Session->write('pais', $this->Pais->read(null, 7));
        } else
        if ($code == 'MX') {
            $this->Session->write('pais', $this->Pais->read(null, 8));
        }
//        if ($code == 'PE') {
//            $this->Session->write('pais', $this->Pais->read(null, 9));
//        }
//        if ($code == 'VE') {
//            $this->Session->write('pais', $this->Pais->read(null, 10));
//        }
        if ($code == 'ES') {
            $this->Session->write('pais', $this->Pais->read(null, 11));
        }
//        echo $code;
    }

}
