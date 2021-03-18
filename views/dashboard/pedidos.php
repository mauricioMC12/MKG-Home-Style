<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Pedidos','../../resources/css/dashboard/pedidos.css');
?>





<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('pedidos.js');
?>