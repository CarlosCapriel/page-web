<header class="">
    <h1 class="title-blog">Remote brand sprint</h1>
</header>
<?php 
    $estado_session = session_status();
    if($estado_session == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['loggedUserName'])){
?>
<nav class="row">
    <div class="nav-wrapper grey darken-4 col s12">
        <a href="">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=home">Sitio web</a></li>
            <li><a href="?menu=about"> About</a></li>
            <li><a href="?menu=alumnos">Alumnos</a></li>
            <li><a href="?menu=logout">Salir</a></li>
        </ul>  
    </div> 
</nav>
<?php 
    } else {
?>
<nav class="row">
    <div class="nav-wrapper grey darken-2 col s12">
        <a href="">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=home">Sitio web</a></li>
            <li><a href="?menu=about"> About</a></li>
            <li><a href="?menu=login">Iniciar sesión</a></li>
            <li><a href="?menu=register"> Registrarme</a></li>  
        </ul>  
    </div> 
</nav>

<?php 
} 
?>