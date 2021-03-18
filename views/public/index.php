<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/public_template.php');
Public_template::headerPublic('Bienvenido');
?>

<!--Componente slider con una altura de 400 píxeles e imágenes de 1600x400 píxeles-->
<div class="slider">
    <ul class="slides">
        <li>
            <img src=" ">
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src=" ">
            <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="">
            <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="">
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
    </ul>
</div>


<?php
//Se incluye la plantilla del pie para la página web
public_template::footer_public('index_public.js');
?>