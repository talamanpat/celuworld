<?php
//    echo $session->flash('auth');
    echo $form->create('User', array('action' => 'registrar'));
    echo $form->input('username');
    echo $form->input('password');
    echo $form->input('Confirmar_password',array('type'=>'password','value'=>''));
    echo $form->end('registrar');
?>
