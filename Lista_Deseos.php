
<?php
$active='Lista_Deseos.php';
include("includes/header.php")?>
<body>
<div id="content"><!--Inicio content-->
    <div class="container"><!--Inicio container-->
        <div class="col-md-12"><!--Inicio col-md-12-->
            <ul class="breadcrumb"><!--Inicio Breadcrumb-->
                <li>
                    <a href="Index.php">Home</a>
                </li>
                <li>
                    Mi Wish List
                </li>
            </ul><!--Final breadcrumb-->

        </div><!--Final col-md-12-->
        <div id="heart" class="col-md-12"><!--Inicio col-md-9-->
            <div class="box">
                <?php
                $ip_add = getRealIpUser();

                $select_cart="select * from Carrito where AddIp='$ip_add'";
                $run_cart = mysqli_query($con,$select_cart);

                $count = mysqli_num_rows($run_cart);

                ?>

                <p class="text-muted">Actualmente tienes <!--?php echo $count; ?--> artículos en tu Wish List</p>
                <div class="table-responsive"><!--Inicio Tabla-responsive-->
                    <table class="table">
                        <thead><!-- Inicio Thead -->

                        <tr><!-- Inicio tr -->

                            <th colspan="2">Producto</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Precio</th>


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
                                $product_desc = $row_products['ProductoDescripcion'];


                                ?>




                                <tr><!-- Inicio try -->

                                    <td><!-- Inicio td -->

                                        <img class="img-responsive" width="50" height="50" src="admin_area/product_images/<?php echo $product_img1;?>" alt="Producto 3a">

                                    </td><!-- Final td -->

                                    <td>
                                        <a href="Detalles.php?pro_id=<?php echo $pro_id ?>"><?php echo $product_title; ?></a>
                                    </td>

                                    <td>
                                        <?php echo $pro_qty;  ?>
                                    </td>



                                    <td>

                                        <?php echo $product_desc;?>

                                    </td>
                                    <td>

                                        <?php echo $only_price_;?>

                                    </td>



                                </tr><!-- Final try -->
                            <?php }} ?>

                        </tbody><!-- Final tbody -->
                        <th colspan="5"> </th>
                    </table>
                    <div class="box-footer"><!--Inicio box-footer-->

                        <div class="pull-left"><!--Inicio pull-left-->

                            <a href="Index.php" class="btn btn-default" align-left><!--Inicio btn btn-default-->

                                <i class="fa fa-chevron-left"></i>Continuar Comprando

                            </a><!--Final btn btn-default-->

                        </div><!--Final pull-left-->


                    </div><!--Final box-footer-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/Footer.php");
?>
</body>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</html>
