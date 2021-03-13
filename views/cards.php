<?php
//Se incluye la plantilla del encabezado para la página web
include("../app/helpers/header_template.php");
?>

<!--Contenedor para mostrar tarjetas con imágenes de 500x500 píxeles-->
<div class="container">
    <div class="row">
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="../resources/img/cards/image01.jpg">
                    <a href=""><span class="card-title transparent">Usuario</span></a>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="../resources/img/cards/image02.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="../resources/img/cards/image03.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="../resources/img/cards/image04.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//Se incluye la plantilla del pie para la página web
include("../app/helpers/footer_template.php");
?>