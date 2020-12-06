<div class="panel panel-default sidebar-menu"><!--  panel panel-default sidebar-menu Begin  -->

    <div class="panel-heading"><!--  panel-heading  Begin  -->
    <?php

    $cliente_sesion = $_SESSION['ClienteCorreo'];
    $get_cliente = "select * from Cliente where ClienteCorreo = '$cliente_sesion'";
    $run_cliente = mysqli_query($con,$get_cliente);
    $row_cliente = mysqli_fetch_array($run_cliente);
    $cliente_nombre = $row_cliente['ClienteNombre'];
    $cliente_correo = $row_cliente['ClienteCorreo'];
    $cliente_pais = $row_cliente['ClientePais'];
    $cliente_ciudad = $row_cliente['ClienteCiudad'];
    $cliente_telefono = $row_cliente['ClienteTelefono'];

    if(!isset($_SESSION['ClienteCorreo'])){

    }else{

        echo "
        
        
        <h3 class='panel-title' align='center'>
Name:  $cliente_nombre
        
</h3>
<i class='fa fa-envelope'></i> <span> Email:  $cliente_correo</span> <br/>
<i class='fa fa-flag'></i> <span> Pais:  $cliente_pais</span>  <br/>
<i class='fa fa-map'></i> <span> Ciudad:  $cliente_ciudad</span>  <br/>
<i class='fa fa-phone'></i> <span> Telefono:  $cliente_telefono</span>  <br/>
        ";



    }

    ?>

    </div><!--  panel-heading Finish  -->

    <div class="panel-body"><!--  panel-body Begin  -->

        <ul class="nav-pills nav-stacked nav"><!--  nav-pills nav-stacked nav Begin  -->
            <li class="<?php if(isset($_GET['mis_ordenes'])){ echo "active"; } ?>">
                <a href="Mi_cuenta.php?mis_ordenes">
                    <i class="fa fa-list"></i> My Orders
                </a>
            </li>


            <li>

                <a href="Cerrar_sesion.php">

                    <i class="fa fa-sign-out"></i> Cerrar Sesión

                </a>

            </li>

        </ul><!--  nav-pills nav-stacked nav Begin  -->

    </div><!--  panel-body Finish  -->

</div><!--  panel panel-default sidebar-menu Finish  -->