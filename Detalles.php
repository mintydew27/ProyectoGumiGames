<?php
$active='Detalles.php';
include("includes/header.php")
?>

<div id="content"><!--Inicio content-->
    <div class="container"><!--Inicio container-->
        <div class="col-md-12"><!--Inicio col-md-12-->
            <ul class="breadcrumb"><!--Inicio Breadcrumb-->
                <li>
                    <a href="Index.php">Home</a>
                </li>
                <li>
                    Tienda
                </li>
                <a href="Tienda.php?p_gen=<?php echo $p_genero_id; ?>"><?php echo $p_genero_title; ?></a>

                <li> <?php echo $pro_title;?> </li>

            </ul><!--Final breadcrumb-->

        </div><!--Final col-md-12-->

        <div class="col-md-3"><!--Inicio col-md-3--->

            <?php
            include("includes/sidebar.php");
            ?>

        </div><!--Final col-md-3-->

            <div class="col-md-9"><!--Inicio col-md-9--->
                <div id="productMain" class="row">
                    <div class=" col-sm-6">
                        <div id="mainImage">
                        <div id="myCarousel" class="carousel slide" data-ride-"carousel">
                            <ol class="carousel-indicators">
                               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" ></li>
                                <li data-target="#myCarousel" data-slide-to="2" ></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" alt="Producto" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="productoimg1carrusel"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" alt="Producto" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="productoimg2carrusel"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" alt="Producto" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="productoimg3carrusel"></center>
                                </div>
                            </div>
                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a><!--Final carrusel izquierdo-->
                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                            </a><!--Final carrusel derecho-->

                        </div>
                        </div>
                    </div>
                <div class="col-sm-6"><!--Inicio col-sm-6-->
                    <div class="box">
                        <h1 class="text-center" ><?php echo $pro_title;?> </h1>

                        <?php  add_cart();?>

                        <form action="Detalles.php?add_cart=<?php echo $producto_id; ?>" class="form-horizontal" method="post">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label"> Cantidad de Producto </label>
                                <div class="col-md-7"><!--Inicio col-sm-7-->
                                    <select name="product_qty" id="" class="form-control">
                                        <option >1</option>

                                    </select><!--Final select-->
                                </div>

                            </div>

                            <p class="price">$<?php echo $pro_price?></p>

                            <p class="text-center buttons">
                                <button class="btn btn-primary i fa fa-shopping-cart btn-lg"> Agregar al carrito </button>

                            </p>
                            <p class="text-center buttons">
                                <button class="btn btn-primary i fa fa-heart"> Agregar a mi Wish List </button>
                            </p>
                        </form>

                    </div><!--Final box-->
                    <div class ="row" id="thumbs">
                         <div class="col-xs-4">
                             <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                 <img src="admin_area/product_images/<?php echo $pro_img1?>" alt="producto" class="img-responsive">
                             </a>
                    </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $pro_img2?>" alt="producto" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $pro_img3?>" alt="producto" class="img-responsive">
                            </a>
                        </div>
                </div>
                </div><!--Final col- sm- 6-->

                </div><!--Final row-->
        <div class="box" id="detalles"><!--Inicio box-->
            <h4>Detalles del Producto</h4>
            <p>
                <?php echo $pro_desc;?>
            </p>

            <hr>

        </div><!--Final box-->
        <div id="row same-heigh-row">
            <div class="col-md-3 col-sm-6">
                <div class="box same-height headline">
                    <h3 class="text-center">Productos que podrian gustarte</h3>
                </div>
            </div>

            <?php

            $get_products="select * from Producto order by 1 DESC LIMIT 0,3";
            $run_products = mysqli_query($con, $get_products);

            while($row_products=mysqli_fetch_array($run_products)){

                $pro_id = $row_products['ProductoId'];
                $pro_title = $row_products['ProductoTitulo'];
                $pro_img1 = $row_products['ProductoImagenUno'];
                $pro_price= $row_products['ProductoPrecio'];

                echo "
                <div class= 'col-md-4 col-sm-6 center-responsive'>
                <div class='product same-height'>
                <a href='Detalles.php?pro_id=$pro_id'>
                <img class='img-responsive' alt='Producto' src='admin_area/product_images/$pro_img1'>
                
                </a>
                <div class='text'>
                    <h3>
                        <a href='Detalles.php?pro_id=$pro_id'> $pro_title </a>
                    </h3>
                <p class='price'> $ $pro_price </p>
                    </div>
          
                </div>
               
              </div>
                ";

            }
            ?>
            </div>
        </div><!--Final md-9-->
      </div><!--Final container-->
</div><!--Final content-->

<?php
include("includes/Footer.php");
?>
<!-- Librerias de los folders jquery para que funcione-->
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>

</html>