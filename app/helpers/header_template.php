<!DOCTYPE html>
<html lang="es">
<head>
    <!--Se establece la codificación de caracteres para el documento-->
    <meta charset="utf-8">
    <!--Se importa la fuente de iconos de Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Se importan los archivos CSS locales-->
    <link type="text/css" rel="stylesheet" href="../resources/css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="../resources/css/styles.css"/>
    <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Título del documento-->
    <title>Materialize</title>
</head>

<body>
    <!--Encabezado del documento-->
    <header>
        <!--Barra de navegación fija-->
        <div class="navbar-fixed">
            <nav class="blue">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo">Logo</a>
                    <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="cards.php">Cards</a></li>
                        <li><a href="form.php">Form</a></li>
                        <li><a href="carousel.php">Carousel</a></li>
                        <li><a href="collapsible.php">Collapsible</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Navegación lateral para dispositivos móviles-->
        <ul class="sidenav" id="mobile-navbar">
            <li><a href="cards.php">Cards</a></li>
            <li><a href="form.php">Form</a></li>
            <li><a href="carousel.php">Carousel</a></li>
            <li><a href="collapsible.php">Collapsible</a></li>
        </ul>
    </header>
    <!--Contenido principal del documento-->
    <main>