<?php
//    echo $session->flash('auth');
    echo $form->create('User', array('action' => 'registrar'));
    echo $form->input('username',array('label'=>'Usuario'));
    echo $form->input('email',array('label'=>'E-mail'));
    echo $form->input('password',array('value'=>'','type'=>'password'));
    echo $form->input('Confirmar_password',array('type'=>'password','value'=>''));
    echo $form->end('registrar');
?>
