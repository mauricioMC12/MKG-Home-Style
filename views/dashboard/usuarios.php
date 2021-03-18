<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Usuarios','../../resources/css/dashboard/usuarios.css');
?>





<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('usuarios.js');
?>