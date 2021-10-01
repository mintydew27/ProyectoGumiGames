<?php
session_start();
include("includes/BD.php");
include_once("functions/functions.php");

?>
<?php
$producto_id = "";
$p_genero_id = "";
$pro_title = "";
$pro_price = "";
$pro_desc = "";
$pro_img1 = "";
$pro_img2 = "";
$pro_img3 = "";
$p_genero_title = "";


if(isset($_GET['pro_id'])){

    $producto_id = $_GET['pro_id'];

    $get_product = "select * from Producto where ProductoId='$producto_id'";

    $run_product = mysqli_query($con,$get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_genero_id = $row_product['GeneroId'];

    $pro_title = $row_product['ProductoTitulo'];

    $pro_price = $row_product['ProductoPrecio'];

    $pro_desc = $row_product['ProductoDescripcion'];

    $pro_img1 = $row_product['ProductoImagenUno'];

    $pro_img2 = $row_product['ProductoImagenDos'];

    $pro_img3 = $row_product['ProductoImagenTres'];

    $get_p_genero = "select * from Genero where GeneroId='$p_genero_id'";

    $run_p_genero = mysqli_query($con,$get_p_genero);

    $row_p_genero = mysqli_fetch_array($run_p_genero);

    $p_genero_title = $row_p_genero['GeneroTitulo'];


}


// Se comento esta funcion debido a que no funcionaba en los ordenadores de algunos integrantes de equipo


/*(if(!isset($_COOKIE["Visitado"])){
    $date = date('d/M/Y', time());
    $select = "Select * from Visita Where VisitaFecha = '$date'";
    $result = mysqli_query($con,$select);
    echo mysqli_num_rows($result);
    if(mysqli_num_rows($result)>0){
        $update = "Update Visita set VisitaCantidad=VisitaCantidad+1 where VisitaFecha = '$date' ";
        $updateresult = mysqli_query($con,$update);
    }
    else{
        $insertdate = "INSERT INTO Visita (VisitaFecha,VisitaCantidad) VALUES('$date',1)";
        $insertresult = mysqli_query($con,$insertdate);
    }
    setcookie("Visitado",true,mktime().time()+60*60*24);

}*/


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">




    <!-- Nombre de la pagina-->
    <title>Gumi-Games</title>
    <!-- Conexion a los folders para el diseño-->
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

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
    <link rel="stylesheet" href="styles/style.css">
</head>





<body id ="body">
<!--Creacion de la cabecera en base a la plantilla-->

<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div >
                    <link rel="icon" type="image/png" href="/images/favicon.png" />
                    <img src="images/logotipo_pagina.png" alt="LogotipoGumiGames" class="hidden-xs">
                    <img src="images/logotipo_pagina.png" alt="LogotipoGumiGames" class="visible-xs">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="index.html">
                        <!-- replace logo here -->
                        <svg width="280px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                               font-family="AustinBold, Austin" font-weight="bold">
                                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                    <text id="GUMIGAMES">
                                        <tspan x="108.94" y="325">GumiGames</tspan>
                                    </text>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4 ">
                <!-- Cart -->
                <ul class="top-menu text-right list-inline">

                   <li class="dropdown cart-nav dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-android-cart"></i>Carrito</a>
                        <div class="dropdown-menu cart-dropdown">

                            <!-- Cart Item -->
                            <div class="media">



                                <?php if(isset($_SESSION['ClienteCorreo'])){

                                    items();
                                    echo '<div class="media">
                                        <h4 class="media-heading">Objetos en tu carrito</h4>
                                        <div class="cart-price">
                                     
                                        ';

                                } ?>

                                <?php if(isset($_SESSION['ClienteCorreo'])){
                                    echo ' <div class="cart-summary">
                                              <span>Total</span>
                                              <span class="total-price"> </span>
                                               </div>';

                                    precio_total();

                                }?>

                            </div>
                        </div><!-- / Cart Item -->

                        <?php if(isset($_SESSION['ClienteCorreo'])){
                            echo  '<ul class="text-center cart-buttons">
                            <li><a href="Carrito.php" class="btn btn-small">Ver Carrito</a></li>
                            <li><a href="Lista_Deseo.php" class="btn btn-small btn-solid-border">Wish list</a></li>
                        </ul> ';

                        }?>
            </div>
            </li><!-- / Cart -->














            <?php if(isset($_SESSION['ClienteCorreo'])){
                echo '
                    <li class="dropdown"> 
                        <a href="Mi_cuenta.php" >Mi Cuenta</a>
                    </li>';
            }?>


            <li class="dropdown ">
                <a href="Registro_de_clientes.php" >Registro</a>
            </li><!-- / Home -->

            <li class="dropdown ">


                <?php
                if(!isset($_SESSION['ClienteCorreo'])){
                    echo "<a href='Revisa.php'> Iniciar sesión</a>";
                }else{
                    echo "<h1></h1> 
                                
                                <a href='Cerrar_sesion.php' class='tf-ion-log-out' > </a> ";
                }
                ?>


            </li><!-- / Home -->




            </ul><!-- / .nav .navbar-nav .navbar-right -->
        </div>
    </div>
    </div>
</section><!-- End Top Header Bar -->

<!-- Main Menu Section -->
<section class="menu">
    <nav class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
                <h2 class="menu-title">Main Menu</h2>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse text-center">
                <ul class="nav navbar-nav">

                    <!-- Tienda -->
                    <li class="dropdown ">
                        <a href="Index.php">Home</a>
                    </li><!-- / Home -->

                    <!-- / Tienda -->
                    <li class="dropdown dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                           role="button" aria-haspopup="true" aria-expanded="false">Tienda <span
                                    class="tf-ion-ios-arrow-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="Tienda.php">Tienda</a></li>
                            <li><a href="Carrito.php">Carrito</a></li>
                            <li><a href="Lista_Deseos.php">Wish list</a></li>

                        </ul>
                    </li><!-- / Tienda -->



                    <!-- / Nosotros -->
                    <li class="dropdown dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                           role="button" aria-haspopup="true" aria-expanded="false">Nosotros <span
                                    class="tf-ion-ios-arrow-down"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="Contactanos.php">Contactanos</a></li>
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a href="PreguntasFrecuentes.php">Preguntas Frecuentes</a></li>

                        </ul>
                    </li><!-- / Nosotros -->


                    <?php if(isset($_SESSION['ClienteCorreo'])){
                        echo '
                    <li><li class="dropdown dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                           role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta<span
                                  ></span></a>
                        <ul class="dropdown-menu">
                        
                        <li><a href="Mi_cuenta.php">Detalles del Perfil</a></li>
                     <li class="<?php if(isset($_GET["mis_ordenes"])){ echo "active"; } ?>"
                                <a href="Mi_cuenta.php?mis_ordenes">
                                   Mis Ordenes
                                </a>
                            </li>
                    </li>';
                    }?>

    </nav>
</section>
























<!--Creacion de la cabecera-->

<!--Creacioin de la barra de navegacion-->



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
