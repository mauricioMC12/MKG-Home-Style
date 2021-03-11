<?php
//Se incluye la plantilla del encabezado para la página web
include("../app/helpers/header_template.php");
?>

<!--Componente carousel con imágenes de 800x600 píxeles-->
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="../resources/img/carousel/image01.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="../resources/img/carousel/image02.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="../resources/img/carousel/image03.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="../resources/img/carousel/image04.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="../resources/img/carousel/image05.jpg"></a>
</div>

<?php
//Se incluye la plantilla del pie para la página web
include("../app/helpers/footer_template.php");
?>