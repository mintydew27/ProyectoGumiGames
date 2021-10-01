<?php
$active='Detalles.php';
include("includes/header.php");

?>


<?php
if (isset($_POST['Guardar'])){
    $comentario= $_POST['Comentario'];
    $calificacion= $_POST['estrellas'];
    $idproducto=$_GET['pro_id'];
    $idcliente=$_SESSION['ClienteId'];
    $insert_mensaje ="insert into Comentario (Comentario,ComentarioCalificacion,ProductoId,ClienteId) 
                            values ('$comentario','$calificacion','$idproducto','$idcliente')";
    $run_comentario= mysqli_query($con,$insert_mensaje);
}
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
                        <div class='carousel-inner '>
                            <div class='item active'>
                                <img class="img-responsive" alt="Producto" src="admin_area/product_images/<?php echo $pro_img1; ?>" />
                            </div>
                            <div class='item'>
                                <img class="img-responsive" alt="Producto" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="productoimg2carrusel" />
                            </div>

                            <div class='item'>
                                <img  class="img-responsive" alt="Producto" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="productoimg3carrusel" />
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
                    <?php add_wishlist(); ?>


                    <?php
                    if(isset($_SESSION['ClienteCorreo'])){
                        include_once('FormularioAgregarAlCarrito.php');
                        include_once('FormularioAgregarWishList.php');
                    }
                    ?>

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
    </div><!--Final md-9-->


<div class="col-md-9">
                    <div id="row same-heigh-row" >
            <div class="col-md-3 col-sm-6">
                <div class="box same-height headline">
                    <h3 class="text-center">Productos que podrian gustarte</h3>
                </div>
            </div>

            <?php

            $get_products="select * from Producto order by rand() DESC LIMIT 0, 2";
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
                <img class='img-responsive'  alt='Producto' src='admin_area/product_images/$pro_img1'>
                
                </a>
                <div class='text'>
                    <h3>
                        <a href='Detalles.php?pro_id=$pro_id'> $pro_title </a>
                    </h3>
                <p class='price'> $$pro_price </p>
                    </div>
          
                </div>
               
              </div>

                ";

            }
            ?>
            </div>

</div>




        <div class="row"><!-- row 2 begin -->
            <div class="col-lg-12"><!-- col-lg-12 begin -->
                <div class="panel panel-default"><!-- panel panel-default begin -->
                    <div class="panel-heading"><!-- panel-heading begin -->
                        <h3 class="panel-title"><!-- panel-title begin -->

                            <label> Lee comentarios que mencionan </label>

                        </h3><!-- panel-title finish -->
                    </div><!-- panel-heading finish -->

                    <div class="panel-body"><!-- panel-body begin -->
                        <div class="table-responsive"><!-- table-responsive begin -->
                            <?php
                            $i=0;
                            $idproducto=$_GET['pro_id'];
                            $get_pro = "select * from Comentario JOIN Cliente ON Comentario.ClienteId=Cliente.ClienteId  where ProductoId='$idproducto'";
                            $run_pro = mysqli_query($con,$get_pro);
                            while($row_com=mysqli_fetch_array($run_pro)){
                            $comen_id = $row_com['ComentarioId'];
                            $comentario = $row_com['Comentario'];
                            $calif = $row_com['ComentarioCalificacion'];
                            $pr_id = $row_com['ProductoId'];
                            $cli_nom= $row_com['ClienteNombre'];
                            $i++;
                            ?>

                            <img src='https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SX48_.png'>
                            <p class="text-muted"> <?php echo  $cli_nom ?>  <label> <?php echo $calif; ?> estrellas </label> </p>
                            <p>
                                <?php echo $comentario; ?>

                            </p>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if(isset($_SESSION['ClienteCorreo'])){
            include_once('FormularioComentarios.php');
        }
        ?>


    </div>

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