<?php
//Se incluye la plantilla del encabezado para la página web
include("../app/helpers/header_template.php");
?>

<!--Contenedor para mostrar el componente collapsible-->
<div class="container">
    <ul class="collapsible">
        <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
    </ul>
</div>

<?php
//Se incluye la plantilla del pie para la página web
include("../app/helpers/footer_template.php");
?>