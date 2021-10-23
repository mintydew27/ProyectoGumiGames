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
                        <div> Ventas</div>

                    </div>
                </div>
            </div>
            <a>
                <div class="panel-footer">
                    <span class="pull-center">
                        Total de Ventas

                    </span>


                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>




</div>

    <!DOCTYPE HTML>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
            #container {
                height: 400px;
                min-width: 310px;
                max-width: 800px;
                margin: 0 auto;
            }
        </style>
        <script type="text/javascript">
            $(function () {
                $('#container').highcharts({
                    chart: {
                        type: 'column',
                        margin: 75,
                        options3d: {
                            enabled: true,
                            alpha: 10,
                            beta: 25,
                            depth: 70
                        }
                    },
                    title: {
                        text: 'Ventas del Dia'
                    },
                    subtitle: {
                        text: 'Total de Ventas del Dia'
                    },
                    plotOptions: {
                        column: {
                            depth: 25
                        }
                    },
                    xAxis: {
                        categories: [
                            <?php
                            $sql="SELECT PagoFecha FROM Pago Where PagoFecha= DATE(NOW()) ";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                            ?>
                            ['<?php echo $res['PagoFecha'];?>'],

                            <?php
                            }
                            ?>
                        ]
                    },
                    yAxis: {
                        title: {
                            text: null
                        }
                    },
                    series: [{
                        name: 'Ventas del Dia',
                        data:[
                            <?php
                            $sql="SELECT  SUM(PagoCantidad) as totalventas FROM Pago  ";
                            $run_cat = mysqli_query($con,$sql);
                            while($res=mysqli_fetch_array($run_cat)){
                            ?>
                            [<?php echo $res['totalventas']?>],

                            <?php
                        }
                        ?>
                        ]


                    }]





                });



            });
        </script>






    </head>


    <body>

    <script src="admin_area/Highcharts-4.1.5/js/highcharts.js"></script>
    <script src="admin_area/Highcharts-4.1.5/js/highcharts-3d.js"></script>
    <script src="admin_area/Highcharts-4.1.5/js/modules/exporting.js"></script>

    <div id="container" style="height: 400px"></div>
    </body>
    </html>



    <div class="row"><!--Inicio row -->
         <div class="col-lg-8">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <h3 class="panel-title">


                       <i class="fa fa-money fa-fw"></i>Lista de Ordenes


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

                           $get_order = "select * from Orden order by 1 DESC LIMIT 0,5";

                           $run_order = mysqli_query($con,$get_order);

                           while($row_order=mysqli_fetch_array($run_order)){

                               $order_id = $row_order['OrdenId'];

                               $c_id = $row_order['ClienteId'];

                               $invoice_no = $row_order['FacturaNumero'];

                               $product_id = $row_order['ProductoId'];

                               $qty = $row_order['OrdenCantidad'];

                               $amount = $row_order['OrdenCantidadDeber'];

                               $date = $row_order['OrdenFecha'];

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

                           Ver Ordenes <i class="fa fa-arrow-circle-right"></i>


                       </a>


                   </div>
               </div>


           </div>
       </div>

</div><!--Final row -->











    <!---Busqueda y paginacion tabla de ventas-->



    <div class="row">

    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">


                    <i class="fa fa-money fa-fw"></i>Lista de Ventas


                </h3>
            </div>


            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">

                        <thead>
                        <tr>

                            <th>Numero de Compra Id: </th>
                            <th>Numero de Referencia Pago: </th>
                            <th>Cantidad de dinero $: </th>
                            <th>Modo de pago: </th>
                            <th>Numero de Referencia: </th>
                            <th>Codigo de Pago: </th>
                            <th>Fecha: </th>

                        </tr>

                        </thead>


                        <tbody>
                        <?php

                        $i=0;

                        $get_payment = "select * from Pago order by 1 DESC LIMIT 0,5";


                        $run_payment = mysqli_query($con,$get_payment);

                        while($row_payment=mysqli_fetch_array($run_payment)){

                            $payment_id = $row_payment['PagoId'];

                            $payment_invoice_no = $row_payment['FacturaNumero'];

                            $payment_money = $row_payment['PagoCantidad'];

                            $payment_mode = $row_payment['PagoModo'];

                            $payment_num_ref = $row_payment['PagoNumeroReferencia'];

                            $payment_code = $row_payment['PagoCodigo'];

                            $payment_date = $row_payment['PagoFecha'];

                            $i++;

                            ?>

                            <tr><!-- tr begin -->
                                <td> <?php echo $payment_id; ?> </td>
                                <td> <?php echo $payment_invoice_no; ?> </td>
                                <td> <?php echo $payment_money; ?> </td>
                                <td> <?php echo $payment_mode; ?> </td>
                                <td> <?php echo $payment_num_ref; ?> </td>
                                <td> <?php echo $payment_code; ?> </td>
                                <td> <?php echo $payment_date; ?> </td>
                            </tr><!-- tr finish -->

                        <?php } ?>

                        </tbody>



                    </table>
                </div>
                <div class="text-right">
                    <a href="Index.php?view_orders">

                        Ver Ventas <i class="fa fa-arrow-circle-right"></i>


                    </a>


                </div>
            </div>


        </div>
    </div>

    </div><!--Final row -->








<?php
}
    ?>