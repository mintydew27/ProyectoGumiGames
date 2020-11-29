
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

                <div class="box"><!--Inicio box-->

                    <form action=  "Lista_Deseos.phP" method="post" enctype="multipart/form-data" ><!--Inicio Form-->

                        <h1> Mi Wish List</h1>

                        <?php
                        $ip_add = getRealIpUser();

                        $select_cart="select * from ListaDeseo where AddIp='$ip_add'";
                        $run_cart = mysqli_query($con,$select_cart);

                        $count = mysqli_num_rows($run_cart);

                        ?>



                        <p class="text-muted">Actualmente tienes <?php echo $count; ?> artículos en el carrito</p>

                        <div class="table-responsive"><!--Inicio Tabla-responsive-->

                            <table class="table"><!--Inicio Tabla-->

                                <thead><!-- Inicio Thead -->

                                <tr><!-- Inicio tr -->

                                    <th colspan="2">Producto</th>
                                    <th>Precio</th>


                                    <th colspan="1">Eliminar</th>


                                </tr><!-- Final tr -->

                                </thead><!-- Final Thead -->

                                <tbody><!-- inicio tbody -->

                                <?php

                                $total = 0;
                                while ($row_cart = mysqli_fetch_array($run_cart)){

                                    $pro_id = $row_cart['ListaDeseoId'];
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

                                                <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1;?>" width="100" height="100" alt="Producto 3a">

                                            </td><!-- Final td -->

                                            <td>
                                                <a href="Detalles.php?pro_id=<?php echo $pro_id ?>"><?php echo $product_title; ?></a>
                                            </td>


                                            <td>

                                                <?php echo $only_price_;?>

                                            </td>
                                            <td>

                                                <input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>">

                                            </td>



                                        </tr><!-- Final try -->
                                    <?php }} ?>

                                </tbody><!-- Final tbody -->





                            </table><!--Final Tabla-->

                        </div><!--Final Tabla-responsive-->

                        <div class="box-footer"><!--Inicio box-footer-->

                            <div class="pull-left"><!--Inicio pull-left-->

                                <a href="Index.php" class="btn btn-default"><!--Inicio btn btn-default-->

                                    <i class="fa fa-chevron-left"></i>Continuar Comprando

                                </a><!--Final btn btn-default-->

                            </div><!--Final pull-left-->
                            <div class="pull-right"><!--Inicio pull-right-->

                                <button type="submit" name="update" value="Actualizar Wish List" class="btn btn-default"><!--Inicio btn btn-default-->

                                    <i class="fa fa-refresh"></i>Actualizar Wish List

                                </button><!--Final btn btn-default-->



                            </div><!--Final pull-right-->

                        </div><!--Final box-footer-->

                    </form><!--Final Form-->

                </div><!--Final box aqui va lo de detalles VIvi!!-->

                <?php
                function update_wishlist(){
                    global $con;
                    if(isset($_POST['update'])){
                        foreach ($_POST['remove'] as $remove_id){

                            $delete_product = "delete from ListaDeseo where ListaDeseoId = '$remove_id'";
                            $run_delete = mysqli_query($con,$delete_product);
                            if($run_delete){
                                echo"<script>window.open('Lista_Deseos.php','_self')</script>";

                            }
                        }


                    }

                }
                echo @$up_wishlist =  update_wishlist();


                ?>


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
