<?php
$active='Carrito.php';
include("includes/header.php");
$session_email = $_SESSION['ClienteCorreo'];

 $select_customer = "select * from Cliente where ClienteCorreo='$session_email'";

    $run_customer = mysqli_query($con,$select_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['ClienteId'];

?>


<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

<!-- Themefisher Icon font -->
<link rel="stylesheet" href="plugins/themefisher-font/style.css">
<!-- bootstrap.min css -->
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

<!-- Animate css -->
<link rel="stylesheet" href="plugins/animate/animate.css">
<!-- Slick Carousel -->
<link rel="stylesheet" href="plugins/slick/slick.css">
<link rel="stylesheet" href="plugins/slick/slick-theme.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/style.css">

<div id="content"><!--Inicio content-->
    <div class="container"><!--Inicio container-->
        <div class="col-md-12"><!--Inicio col-md-12-->
            <ul class="breadcrumb"><!--Inicio Breadcrumb-->
                <li>
                    <a href="Index.php">Home</a>
                </li>
                <li>
                    Carrito de compras
                </li>
            </ul><!--Final breadcrumb-->

        </div><!--Final col-md-12-->
        <div id="cart" class="col-md-9"><!--Inicio col-md-9-->

        <div class="box"><!--Inicio box-->

            <form action=  "Carrito.php" method="post" enctype="multipart/form-data" ><!--Inicio Form-->

                <h1>Carrito de compras</h1>

                <?php
                $ip_add = getRealIpUser();

                $select_cart="select * from Carrito where AddIp='$ip_add'";
                $run_cart = mysqli_query($con,$select_cart);

                $count = mysqli_num_rows($run_cart);

                ?>



                <p class="text-muted">Actualmente tienes <?php echo $count; ?> artículos en el carrito</p>

                <div class="table-responsive"><!--Inicio Tabla-responsive-->

                    <table class="table"><!--Inicio Tabla-->

                        <thead><!-- Inicio Thead -->

                        <tr><!-- Inicio tr -->

                            <th colspan="2">Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>


                            <th colspan="1">Eliminar</th>
                            <th colspan="2">Sub-Total</th>

                        </tr><!-- Final tr -->

                        </thead><!-- Final Thead -->

                        <tbody><!-- inicio tbody -->

                        <?php

                        $total = 0;
                        while ($row_cart = mysqli_fetch_array($run_cart)){

                            $pro_id = $row_cart['CarritoId'];
                            $pro_qty = $row_cart['CarritoCantidad'];

                            $get_products = "select * from Producto where ProductoId='$pro_id'";
                            $run_products= mysqli_query($con,$get_products);
                            while($row_products= mysqli_fetch_array($run_products)){

                                $product_title = $row_products['ProductoTitulo'];
                                $product_img1 = $row_products['ProductoImagenUno'];
                                $only_price_ = $row_products['ProductoPrecio'];
                                $sub_total = $row_products['ProductoPrecio'];
                                $total += $sub_total;

                        ?>




                        <tr><!-- Inicio try -->

                        <td><!-- Inicio td -->

                            <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1;?>" alt="Producto 3a">

                        </td><!-- Final td -->
                            
                            <td>
                                <a href="Detalles.php?pro_id=<?php echo $pro_id ?>"><?php echo $product_title; ?></a>
                            </td>

                            <td>
                                <?php echo $pro_qty;  ?>
                            </td>



                         <td>

                                <?php echo $only_price_;?>

                            </td>
                         <td>

                             <input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>">

                         </td>

                         <td>
                             $<?php echo $sub_total;?>
                         </td>

                        </tr><!-- Final try -->
                        <?php }} ?>

                        </tbody><!-- Final tbody -->

                        <th colspan="5"> Total</th>
                        <th colspan="2">$<?php echo $total; ?></th>



                    </table><!--Final Tabla-->

                </div><!--Final Tabla-responsive-->

                <div class="box-footer"><!--Inicio box-footer-->

                <div class="pull-left"><!--Inicio pull-left-->

                    <a href="Index.php" class="btn btn-default"><!--Inicio btn btn-default-->

                    <i class="fa fa-chevron-left"></i>Regresar a la tienda

                    </a><!--Final btn btn-default-->

                </div><!--Final pull-left-->
                    <div class="pull-right"><!--Inicio pull-right-->

                        <button type="submit" name="update" value="Actualizar Compra" class="btn btn-default"><!--Inicio btn btn-default-->

                            <i class="fa fa-refresh"></i>Actualizar Carrito

                        </button><!--Final btn btn-default-->

                        <a href="Orden.php?c_id=<?php echo $customer_id ?>" class="btn btn-primary">

                        Pagar <i class="fa fa chevron-right"></i>

                        </a>

                    </div><!--Final pull-right-->

                </div><!--Final box-footer-->

            </form><!--Final Form-->

        </div><!--Final box aqui va lo de detalles VIvi!!-->

            <?php
            function update_cart(){
                global $con;
                if(isset($_POST['update'])){
                    foreach ($_POST['remove'] as $remove_id){

                       $delete_product = "delete from Carrito where CarritoId = '$remove_id'";
                        $run_delete = mysqli_query($con,$delete_product);
                        if($run_delete){
                            echo"<script>window.open('Carrito.php','_self')</script>";

                        }
                    }


                }

            }
            echo @$up_cart =  update_cart();


            ?>
            <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                    <div class="box same-height headline"><!-- box same-height headline Begin -->
                        <h3 class="text-center">Productos que quizá te gusten</h3>
                    </div><!-- box same-height headline Finish -->
                </div><!-- col-md-3 col-sm-6 Finish -->

                <?php

                $get_products = "select * from Producto order by rand() LIMIT 0,3";

                $run_products = mysqli_query($con,$get_products);

                while($row_products=mysqli_fetch_array($run_products)){

                    $pro_id = $row_products['ProductoId'];

                    $pro_title = $row_products['ProductoTitulo'];

                    $pro_price = $row_products['ProductoPrecio'];

                    $pro_img1 = $row_products['ProductoImagenUno'];

                    echo "
                       
                    <div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class='product same-height'><!-- product same-height Begin -->
                           <a href='Detalles.php?pro_id=$pro_id'>  
                                            <img class='img-responsive' alt='Producto' src='admin_area/product_images/$pro_img1'>                                       
                                    </a>
                            
                            <div class='text'><!-- text Begin -->
                                <h3><a href='Detalles.php?pro_id=$pro_id'> $pro_title </a></h3>
                                
                                <p class='price'>$$pro_price</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                       ";

                }

                ?>

            </div><!-- #row same-heigh-row Finish -->

        </div><!--Final col-md-9-->

        <div class="col-md-3"><!--Inicio col-md-3-->

        <div id="order-summary" class="widget widget-category"><!--Inicio Box-->

            <h3 class="widget-title">Resumen del pedido</h3>

            <p class="text-muted"><!--Inicio text-muted-->
                Resumen de tus pedidos.


            </p><!--Final text-muted-->

            <div class="table-responsive"><!--Inicio table-responsive-->

            <table class="table"><!--Inicio table-->

            <tbody><!--Inicio tbody-->

            <td>Total de articulos en tu carrito </td>
            <th><?php echo $count; ?></th>

            <tr><!--Inicio tr-->



            <td> Ordenar todo el Sub-Total </td>
            <th>$<?php echo $total; ?></th>

            </tr><!--FInal tr-->


            <tr class="Total"><!--Inicio tr-->

                <td>Total</td>
                <th>$<?php echo $total; ?></th>

            </tr><!--FInal tr-->

            </tbody><!--Final tbody-->

            </table><!--Final table-->

            </div><!--Final table-responsive-->

        </div><!--Final Box-->

            </div>


        </div><!--Inicio col-md-3-->

    </div><!--Final container-->
</div><!--Final content-->

<?php
include("includes/Footer.php");
?>
<!-- Librerias de los folders jquery para que funcione-->
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<!--
   Essential Scripts
   =====================================-->

<!-- Main jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Touchpin -->
<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<!-- Instagram Feed Js -->
<script src="plugins/instafeed/instafeed.min.js"></script>
<!-- Video Lightbox Plugin -->
<script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
<!-- Count Down Js -->
<script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

<!-- slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>

<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="plugins/google-map/gmap.js"></script>

<!-- Main Js File -->
<script src="js/script.js"></script>


</body>

</html>