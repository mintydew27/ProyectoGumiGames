<?php
if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

?>

<div class="row"><!--Inicio de row-->
    <div class="col-lg-12"><!--Inicio de col-lg-12-->
        <h1 class="page header">
            Dashboard
        </h1>
        <ol class="breadcrumb">

            <li class="active"><i class="fa fa-dashboard"></i>Dashboard</li>

        </ol>
    </div><!--final de col-lg-12-->
</div><!--final row-->

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">

        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"> <?php echo $count_products; ?>

                    </div>

                    <div>Productos</div>

                </div>
            </div>
        </div>
            <a href="Index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left">
                        Ver Detalles

                    </span>

                    <span class="pull-right">
                    <i class="fa fa-arrow-circle-right"></i>

                    </span>
                    <div class="clearfix"></div>

                    </div>
            </a>

        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">

            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $count_customers; ?>

                        </div>

                        <div>Clientes</div>

                    </div>
                </div>
            </div>
            <a href="Index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left">
                        Ver Detalles

                    </span>

                    <span class="pull-right">
                    <i class="fa fa-arrow-circle-right"></i>

                    </span>
                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">

            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_category; ?>

                        </div>

                        <div>Categoria de Productos</div>

                    </div>
                </div>
            </div>
            <a href="Index.php?view_genero">
                <div class="panel-footer">
                    <span class="pull-left">
                        Ver Detalles

                    </span>

                    <span class="pull-right">
                    <i class="fa fa-arrow-circle-right"></i>

                    </span>
                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">

            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> $ <?php echo  $TotalPago; ?>
                        </div>
                        <div>Detalle de Ventas</div>

                    </div>
                </div>
            </div>
            <a href="Index.php?view_estadistics">
                <div class="panel-footer">
                    <span class="pull-left">
                        Ver Detalles

                    </span>

                    <span class="pull-right">
                    <i class="fa fa-arrow-circle-right"></i>

                    </span>
                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>




</div>
<div class="row"><!--Inicio row -->
         <div class="col-lg-8">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <h3 class="panel-title">


                       <i class="fa fa-money fa-fw"></i>Nuevas Compras


                     </h3>
               </div>
              <div class="panel-body">
                   <div class="table-responsive">
                       <table class="table table-hover table-striped table-bordered">

                           <thead>
                           <tr>

                           <th>Numero de Compra: </th>
                           <th>Correo del Cliente: </th>
                           <th>Fecha: </th>
                           <th>Producto Id: </th>
                           <th>Cantidad: </th>
                           <th>Status: </th>

                           </tr>

                           </thead>


                           <tbody>
                           <?php

                           $i=0;

                           $get_order = "select * from OrdenPendiente order by 1 DESC LIMIT 0,5";

                           $run_order = mysqli_query($con,$get_order);

                           while($row_order=mysqli_fetch_array($run_order)){

                               $order_id = $row_order['OrdenPendienteId'];

                               $c_id = $row_order['ClienteId'];

                               $invoice_no = $row_order['FacturaNumero'];

                               $product_id = $row_order['ProductoId'];

                               $qty = $row_order['OrdenPendienteCantidad'];

                               $amount = $row_order['OrdenPendienteCantidadDeber'];

                               $date = $row_order['OrdenPendienteFecha'];

                               $i++;

                               ?>

                               <tr><!-- tr begin -->

                                   <td> <?php echo $order_id; ?> </td>
                                   <td>

                                       <?php

                                       $get_customer = "select * from Cliente where ClienteId='$c_id'";

                                       $run_customer = mysqli_query($con,$get_customer);

                                       $row_customer = mysqli_fetch_array($run_customer);

                                       $customer_email = $row_customer['ClienteCorreo'];

                                       echo $customer_email;

                                       ?>

                                   </td>
                                   <td> <?php echo $invoice_no; ?> </td>
                                   <td> <?php echo $product_id; ?> </td>
                                   <td> <?php echo $qty; ?> </td>
                                   <td> <?php echo $amount; ?> </td>
                                   <td> <?php echo $date; ?> </td>
                                   <td>



                                   </td>

                               </tr><!-- tr finish -->

                           <?php } ?>
                           </tbody>

                       </table>
                   </div>
                   <div class="text-right">
                       <a href="Index.php?view_orders">

                           View All Orders <i class="fa fa-arrow-circle-right"></i>


                       </a>


                   </div>
               </div>


           </div>
       </div>

    <div class="col-md-4">
    <div class="panel"><!--Inicio panel -->
        <div class="panel-body"><!--Inicio panel-body-->
            <div class="mb-md thumb-info"><!--Inicio mb-md thumb-info-->
                <img src="admin_images/<?php echo $admin_image; ?>" alt="admin-thumb-info" class="img-rounded img-responsive">
                <div class="thumb-info-title"><!--Inicio thumb-info-title-->
                    <i class="fa fa-user"></i><span > Nombre: </span> <?php echo $admin_name; ?></br>
                    <i class="fa fa-paw"></i><span > Rol: </span><?php echo $admin_rol; ?></br>

                </div><!--Final thumb-info-title-->

            </div><!--Final mb-md thumb-info-->

            <div class="mb-md"><!--Inicio mb-md-->
                <div class="widget-content-expanded"><!--Inicio widget-content-expanded-->
                    <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?></br>
                    <i class="fa fa-flag"></i> <span> Pais: </span> <?php echo $admin_country; ?></br>
                    <i class="fa fa-envelope"></i> <span> Telefono:</span><?php echo $admin_contact; ?></br>
                </div><!--Final widget-content-expanded-->
                <hr class="dotted short">

                <h5 class="text-muted"> Acerca de mi </h5>

                <p>
                    <?php echo $admin_desc; ?>
                </p>

            </div><!--Final mb-md-->

        </div><!--Final panel-body-->
    </div><!--Final panel -->
    </div>
</div><!--Final row -->
<?php
}
    ?>