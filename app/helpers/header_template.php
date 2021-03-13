<!DOCTYPE html>
<html lang="es">

<head>
    <!--Se establece la codificación de caracteres para el documento-->
    <meta charset="utf-8">
    <!--Se importa la fuente de iconos de Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Se importan los archivos CSS locales-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css" />
    <link type="text/css" rel="stylesheet" href="../../resources/css/styles.css" />
    <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Título del documento-->
    <title>Materialize</title>
</head>

<body class="grey lighten-2">
    <!--Encabezado del documento-->
    <header>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <!--Barra de navegación fija-->
        <div class="navbar-fixed ">
            <nav class="white">
                <div class="nav-wrapper">
                   <div class="container">
                   <a href="index.php" class="brand-logo"><img src="../resources/img/MKG.ico"></a>
                   </div> 
                    <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i
                            class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down ">
                        <li><a href="cards.php" class="black-text">Inicio</a></li>
                        <li><a class="dropdown-trigger black-text" data-target="dropdown1">Articulos<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="" class="black-text">Promociones</a></li>                        
                        <li><a href=""><i class="Medium material-icons black-text">search</i></li></a>
                        <li><a href=""><i class="Medium material-icons black-text">account_circle</i></li></a>
                        <li><a href=""><i class="Medium material-icons black-text">favorite</i></li></a>
                        <li><a href=""><i class="Medium material-icons black-text">local_grocery_store</i></li></a>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Navegación lateral para dispositivos móviles-->
        <ul class="sidenav" id="mobile-navbar">
            <li><a href=""><i class="medium material-icons black-text">account_circle </i><h4>&nbsp;&nbsp;Perfil</h4></li></a>
            <li><a href=""><i class="Medium material-icons black-text">search</i></li></a> 
            <li><a href="cards.php">Inicio</a></li>
            <li><a href="form.php" class="dropdown-trigger">Articulos</a></li>
            <li><a href="carousel.php">Promociones</a></li>
            <li><a href="collapsible.php">Collapsible</a></li>                       
            <li><a href=""><i class="Medium material-icons black-text">favorite</i></li></a>
            <li><a href=""><i class=" material-icons black-text">local_grocery_store</i></li></a>
        </ul>


    </header>
    <!--Contenido principal del documento-->
    <main>