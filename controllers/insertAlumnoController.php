<?php

    if (filter_input_array(INPUT_POST)) {
                    
        $_matricula =  trim(filter_input(INPUT_POST, 'matricula'));   
        $_nombre = trim(filter_input(INPUT_POST, 'nombre'));
        $_sexo = trim(filter_input(INPUT_POST, 'sexo'));
        include_once '../model/alumnos.php';

        $insert = alumnos::insert($_matricula,$_nombre,$_sexo);
        if ($insert){
            header("location: ../index.php?menu=alumnos");
        } else{
            echo 'Error, no se pudo actualizar';
        }
    }

?>