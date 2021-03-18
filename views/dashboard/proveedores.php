<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Proveedores','proveedores.css');
?>

<div class="row " id="pro">
    <div class="col s12 l9 ">
        <h5 class="center">Proveedor</h5>
        <div class="divider"></div>
        <div class="" id="form">
            <div class="row card-panel">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate" required>
                            <label for="first_name black-text">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" required>
                            <label for="last_name">Apellido</label>
                        </div>
                        <div class="input-field col s6 m6 l5 ">
                            <p>Dirección</p>
                            <textarea id="direccion"class="w3-input w3-border col s12" style="resize:none"></textarea>                            
                        </div>
                        <div class=" col s12 m6 l5 offset-l1">
                             <div class="input-field ">
                                <input id="password" type="password" class="validate" required>
                                <label for="password">Correo</label>
                             </div>
                             <br>
                             <div class="input-field " >
                                <input id="email" type="email" class="validate" required>
                                <label for="email">Telefono</label>
                             </div>
                        </div>
                        <div class="input-field btn col s12 m4 offset-m4 l3 offset-l4" id="combobox">                        
                            <select>
                            <option value="" disabled selected> &nbsp;&nbsp;Estado Proveedor</option>
                            <option value="" data-icon="">example 1</option>
                            <option value="" data-icon="">example 2</option>
                            <option value="" data-icon="">example 3</option>
                            </select>                   
                        </div>
                    </div>                 
                </form>
            </div>  
        </div>
    </div>      
    <div class="col s12 l3 t">
        <div class="card-panel">       
            <div class="center ">
                <br>
            <button class="btn waves-effect waves-light" id="btn_style"  type="submit" name="action">Agregar Proveedor &nbsp;&nbsp;
                <i class="material-icons left">add_circle</i>
            </button>
            <br><br>
            <button class="btn waves-effect waves-light"  id="btn_style"  type="submit" name="action">Modificar Proveedor
                <i class="material-icons left">create</i>
            </button>
            <br><br>
            <button class="btn  waves-effect waves-light"  id="btn_style"  type="submit" name="action">Eliminar Proveedor&nbsp;&nbsp;&nbsp;
                <i class="material-icons left ">delete_sweep</i>
            </button>
            <br><br>          
            </div>
        </div>
        <div class="card-panel">       
            <div class="center ">            
                <br>
                <div class="input-field btn col s12 m8 l8 offset-l2  offset-m2" id="combobox">
                    <select  >
                    <option value="" disabled selected>Nombre</option>
                    <option value="" data-icon="">example 1</option>
                    <option value="" data-icon="">example 2</option>
                    <option value="" data-icon="">example 3</option>
                    </select>                   
                </div>           
            <br><br>
            <input type="text" id="search">
            <br><br>
            <button class="btn  waves-effect waves-light"  id="btn_style"  type="submit" name="action">Buscar&nbsp;&nbsp;&nbsp;
                <i class="material-icons left ">search</i>
            </button>
            <br><br>          
            </div>
        </div>
    </div>
    <div class="col s12 l12">
        <div id="table">
        <table class="responsive-table  highlight left">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mario</td>
                <td>Ramirez</td>
                <td>29 Cl Pte y 11 Av Nte Bo San Miguelito</td>
                <td>mario_rmez@gmail.com</td>
                <td>Activo</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>Jellybean</td>
                <td>$3.76</td>
                <td></td>
                <td>Inactivo</td>
            </tr>
            <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td>Final9° Calle poniente Psj Valencia</td>
                <td>Jnapop@gmail.com</td>
                <td>Activo</td>
            </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>


<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('proveedores.js');
?>