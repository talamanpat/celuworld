<?php

class FotosController extends AppController {

    var $name = 'Fotos';
    var $helpers = array('Html', 'Form', 'Imagen', 'Utilidad');

    function upload($cel=null, $situacion=0) {


        if (isset($_FILES["archivos"])) {
            $celularFoto = $this->Foto->Celular->find('first', array('conditions' => array('Celular.id_celular' => $this->data['Foto']['celu'])));
            $tot = count($_FILES["archivos"]["name"]);

//			$dir = getcwd();
            $dir = APP . "../app/webroot/img/celulares/";
//			@			mkdir($dir .'/img/celulares/'.$this->data['Foto']['celu'] , 0777);
            @ mkdir($dir . $this->data['Foto']['celu'], 0777);
            for ($i = 0; $i < $tot; $i++) {
                if ($_FILES["archivos"]["error"][$i] != 4) {


                    //datos del arhivo
                    $extencion = split('[.]', $_FILES["archivos"]["name"][$i]);
//                    debug($extencion );
                    $nombre_archivo = rand(50, 1000) . ' ' . $celularFoto['Marca']['marca'] .
                            ' ' . $celularFoto['Celular']['modelo'] . "." . $extencion[1];
                    $tipo_archivo = $_FILES["archivos"]["tmp_name"][$i];
                    $tamano_archivo = $_FILES["archivos"]["size"][$i];

                    $this->Foto->id = null;
                    //$this->data['Foto']['id_foto'] = null;
                    $this->data['Foto']['celular_id'] = $this->data['Foto']['celu'];
                    $this->data['Foto']['nombre'] = $nombre_archivo;
                    if ($i == 0)
                        $this->data['Foto']['show'] = "1";
                    if ($i != 0)
                        $this->data['Foto']['show'] = "0";
                    $this->data['Foto']['size'] = $_FILES["archivos"]["size"][$i];

//					if (move_uploaded_file($_FILES['archivos']['tmp_name'][$i],$dir .'/img/celulares/'.
                    if (move_uploaded_file($_FILES['archivos']['tmp_name'][$i], $dir .
                                    $this->data['Foto']['celular_id'] . '/' . $nombre_archivo)
                            && $this->Foto->save($this->data)) {
                        
                    } else {
                        echo '<pre>';
                        print_r($this->data);
                        echo '</pre>';
                        $this->Session->setFlash('Ocurrio algun error al subir el fichero. No pudo guardarse.');
                        $this->redirect(array('action' => 'upload', $this->data['Foto']['celular_id']));
                    }
                }
            }
            $this->Session->setFlash('Los Archivos an sido cargados correctamente.');
            //	if($this->data['Foto']['sit'] ==0)$this->redirect(array('action' => '../celulares/index'));
            //	if($this->data['Foto']['sit'] ==1)$this->redirect(array('action' => 'edit/'.$this->data['Foto']['celular_id']));
            $this->redirect(array('action' => '../celulares/view/' . $this->data['Foto']['celular_id']));
        }
        /* --------
          0-nuevo celular
          1-nuevas fotos celular existente
          -------- */
        //if($cel != null)
        $this->set('cel', $cel);
        $this->set('sit', $situacion);
        $this->set('Celular', $this->Foto->Celular->find('first', array('conditions' => array('Celular.id_celular' => $cel))));
    }

    function edit($celu) {
        if (($this->Foto->find('first', array('conditions' => array('Foto.celular_id' => $celu)))) == null) {
            $this->Session->setFlash('Este celular no tiene fotos.');
            //	$this->flash("Este celular no tiene fotos", 'upload/'.$celu.'/1','2');
            $this->redirect(array('action' => 'upload/' . $celu . '/1'));
        } else {

            $this->set('Fotos', $this->data = $this->Foto->find('all', array('conditions' => array('Foto.celular_id' => $celu))));
        }
    }

    function index($celu) {
        if (($this->Foto->find('first', array('conditions' => array('Foto.celular_id' => $celu)))) == null) {
            $this->Session->setFlash('Este celular no tiene fotos.');
            //	$this->flash("Este celular no tiene fotos", 'upload/'.$celu.'/1','2');
            $this->redirect(array('action' => 'upload/' . $celu . '/1'));
        } else {

            $this->set('Fotos', $this->data = $this->Foto->find('all', array('conditions' => array('Foto.celular_id' => $celu))));
        }
    }

    function delete($id, $cel) {
        $archivo = $this->Foto->find('first', array('conditions' => array('Foto.id_foto' => $id)));
        if ($this->Foto->delete($id)) {
            $dir = APP . "../app/webroot/img/celulares/";
            unlink($dir . $archivo['Foto']['celular_id'] . '/' . $archivo['Foto']['nombre']);
            //unlink($_GET["/img/celulares/".$archivo['Foto']['celular_id']."/".$archivo['Foto']['nombre']]);
            $this->Session->setFlash('la Foto con id: ' . $id . ' a sido eliminada.');


            if (($this->Foto->find('first', array('conditions' => array('Foto.celular_id' => $cel)))) == null) {
                $this->Session->setFlash('Este celular no tiene fotos, agregalas.');
                $dirFoto = '../Fotos/upload/' . $cel . '/1';
            } else {
                $dirFoto = '../Celulares/view/' . $cel;
            }

            $this->redirect(array('action' => $dirFoto)); //'edit/'.$archivo['Foto']['celular_id']));
        }
    }

    function fotoPrincipal($id, $cel) {
        $this->Foto->query('UPDATE fotos SET fotos.show = 0 WHERE fotos.celular_id =' . $cel . ' AND fotos.id_foto <>' . $id);
        $this->Foto->query('UPDATE fotos SET fotos.show = 1 WHERE fotos.celular_id =' . $cel . ' AND fotos.id_foto =' . $id);
        $this->redirect(array('controller' => 'celulares', 'action' => 'view', $cel));
    }

}

?>