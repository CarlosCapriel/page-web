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
        case "bienvenido":
            require_once('./views/bienvenido.php');
            break;
        case "logout":
            $session_destroy = session_destroy();
            header("location: ./index.php?menu=home");
            break;
        case "deletealumno":
            $_usuario = trim(filter_input(INPUT_GET, 'idalumno'));
            $_idalumno = isset($_GET['idalumno']) ? $_GET['idalumno'] : '0';
            require_once ('./model/alumnos.php');        
            $sqlAlumnos = alumnos::delete($_idalumno);
            header("location: ./index.php?menu=alumnos");       
            break;
        case "editalumno":
                $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
                require_once ('./model/alumnos.php');
                $sqlAlumnos = alumnos::consultarAlumno($_idalumno);
                include_once './views/editar.php';   
        break;
        case "insertalumnoview":
            require_once('./views/insertAlumno.php');
            break;
        default:
            require_once('./views/home.php');
    }
?>