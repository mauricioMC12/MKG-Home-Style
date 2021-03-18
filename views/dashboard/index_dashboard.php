<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Bienvenido','../../resources/css/dashboard/index.css');
?>

<div class="container">
<div class="row">
  <div class="col s6 m6 l3">
    <div class="card">
      <div class="card-image blue-grey lighten-4">
        <a href="usuarios.php"><img src="../../resources/img/Menu/Usuario3.png"></a>
      </div>
    </div>
  </div>
  <div class="col s6 m6 l3">
    <div class="card">
      <div class="card-image blue-grey lighten-4">
        <a href="proveedores.php"><img src="../../resources/img/Menu/Proveedores.png"></a>
      </div>
    </div>
  </div>
  <div class="col s6 m6 l3">
    <div class="card ">
      <div class="card-image  blue-grey lighten-4">
        <a href="inventario.php"><img src="../../resources/img/Menu/Inventario.png"></a>
      </div>
    </div>
  </div>
  <div class="col s6 m6 l3">
    <div class="card">
      <div class="card-image blue-grey lighten-4">
        <a href="pedidos.php"><img src="../../resources/img/Menu/Pedido.png"></a>
      </div>
    </div>
  </div>
  <div class="col s6 m6 l3 ">
    <div class="card">
      <div class="card-image blue-grey lighten-4">
        <a href=""><img src="../../resources/img/Menu/Factura.png"></a>
      </div>
    </div>
  </div>
</div>
</div>



<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('index_dashboard.js');
?>