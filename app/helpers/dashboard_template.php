<?php

class Dashboard_template{

public static function headerDashboard($title,$diseño){
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
            <link type="text/css" rel="stylesheet" href="../../resources/css/dashboard/'.$diseño.'" />   
            <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!--Título del documento-->
            <title>Dashboard - '.$title. '</title>
        </head>
        <body  class=" ">
                <!--Encabezado del documento-->
                <header>
                <div class="navbar-fixed ">
                    <nav class="white">
                        <div class="nav-wrapper">
                            <div class="container">
                                <a href="index_dashboard.php" class="brand-logo"><img src="../../resources/img/MKG.ico"></a>
                            </div>
                            <a href="#" data-target="mobile-navbar" class="sidenav-trigger black-text"><i
                                    class="material-icons">menu</i></a> 
                                    <ul class="right">
                                    <a class="black-text sidenav-trigger show-on-large" data-target="slide-out">
                                    <i class="medium material-icons left">account_circle</i>Mi Perfil
                                </a>   
                                </ul>        
                            <ul class="right hide-on-med-and-down">
                                 <li>
                                    <a class="black-text sidenav-trigger show-on-large" href="index_dashboard.php">
                                        <i class="medium material-icons left">home</i>Inicio
                                    </a>                                
                                </li>                                                                                                
                            </ul>
                       

                        </div>
                    </nav>
                    </div>

                    <ul class="sidenav" id="mobile-navbar">                    
                    <li><a href=""><i class="Medium material-icons black-text">search</i>Usuarios</li></a>                                                   
                    <li><a href=""><i class="Medium material-icons black-text">favorite</i>Proveedores</li></a>
                    <li><a href=""><i class=" material-icons black-text">local_grocery_store</i>Inventario</li></a>
                    <li><a href=""><i class=" material-icons black-text">local_grocery_store</i>Pedidos</li></a>
                </ul>   
                    <ul id="slide-out" class="sidenav right">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="../../resources/img/">
                                </div>
                                <a href="#user"><img class="circle" src="../../resources/img/users/"></a>
                                <a href="#name"><span class="white-text name">User name</span></a>
                                <a href="#email"><span class="white-text email">UserEmail@gmail.com</span></a>
                            </div>
                        </li>
                        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                        <li><a href="#!">Second Link</a></li>
                        <li>
                            <div class="divider"></div>
                        </li>
                        <li><a class="subheader">Subheader</a></li>
                        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                </ul>
                </header>
                <!--Contenido principal del documento-->
                <main>     
    ' );

    }

    public static function footerDashboard($controller){
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
               <script type="text/javascript" src="../../app/controllers/dashboard/'.$controller.'"></script>
           </body>
           </html>
        ');
       }

}

?>