<?php
    echo $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('username', array('label' => 'Usuario'));
    echo $form->input('password');
    echo $form->end('Login');
?>
