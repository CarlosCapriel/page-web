<?php 
    $opcion = isset($_GET['menu'])? $_GET['menu'] : 'home';
    switch ($opcion) {
        case 'about': 
            require_once('./views/about.php');
            break;
        case 'login': 
            require_once('./views/login.php');
            break;
        case 'register': 
            require_once('./views/registro.php');
            break;
        case "alumnos":
            include_once './model/alumnos.php';
            $sqlAlumnos = alumnos::consultar();
            include_once './views/viewalumnos.php';
            break;
        default:
            require_once('./views/home.php');
    }
?>