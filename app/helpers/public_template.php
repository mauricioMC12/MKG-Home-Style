<?php

class Public_template{
//Metodo  que presenta el encabezado 
    public static function headerPublic($title){
        print('
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
            <title>Public - '.$title. '</title>
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
                            <a href="index.php" class="brand-logo"><img src="../../resources/img/MKG.ico"></a>
                            </div> 
                            <a href="#" data-target="mobile-navbar" class="sidenav-trigger black-text"><i
                                    class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down ">
                                <li><a href="" class="black-text">Inicio</a></li>
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
            <main>');
    
    }

public static function footer_public($controller){
 print('
    </main>
        <!--Pie del documento-->
        <footer class="page-footer black">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                            content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
        <!--Importación de archivos JavaScript al final del cuerpo para una carga optimizada-->
        <script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
        <script type="text/javascript" src="../../app/controllers/public/'.$controller.'"></script>
    </body>
    </html>
 ');
}


}
?>