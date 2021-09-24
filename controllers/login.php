<?php
    if (filter_input_array(INPUT_POST)) {
        echo '<h1>Hola</h1>';
        $_usuario = trim(filter_input(INPUT_POST, 'nombre'));
        $_pswd = trim(filter_input(INPUT_POST, 'contrasenia'));
        
        include_once '../model/alumnos.php';
        
        $loginok = alumnos::login($_usuario, $_pswd);
        echo '<br> LoginOk = ';
        print_r($loginok);
        
        if ($loginok){
            header("location: ../index.php?menu=bienvenido");
        } else{
            echo 'Usuario No Existe o password Incorrecto';
        }
    }
?>