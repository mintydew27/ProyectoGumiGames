<?php
session_start();

include("Conexion.php");
$con=AbrirConexion();

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


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Nombre de la pagina-->
    <title>Gumi-Games</title>
    <!-- Conexion a los folders para el diseño-->
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
<!--Creacion de la cabecera-->
<div id="top"><!--cabecera-->
    <div class="container"><!--Inicio contendor-->
        <div class="col-md-6 offer"><!--Inicio col-md-6 offe-->
            <a href="Mi_cuenta.php" class="btn btn-primary btn-sm">


                <?php
                if(!isset($_SESSION['ClienteCorreo'])){
                    echo "Bienvenido: ";

                    }else{
                    echo "Bienvenido: " . $_SESSION['ClienteCorreo'] . "";
                }
                ?>

            </a>
            <a href="Carrito.php"><?php items();?> objetos en tu carrito | Precio total: <?php precio_total();?></php></a>
        </div><!--Final col-md-6 offer-->
        <div class="col-md-6"><!--Inicio col-md-6-->
            <ul class="menu"><!--Inicio Menu-->
                <li>
                    <a href="Registro_de_clientes.php">Registro</a>
                </li>

                <li>
                    <a href="Mi_cuenta.php">Mi cuenta</a>
                </li>

                <li>


                    <a href="Revisa.php">

                        <?php
                        if(!isset($_SESSION['ClienteCorreo'])){
                            echo "<a href='Revisa.php'> Iniciar sesión</a>";
                        }else{
                            echo "<a href='Cerrar_sesion.php'> Cerrar sesión</a>";
                        }

                        ?>



                    </a>
                </li>
            </ul><!--final menu-->
        </div><!--Final col-md-6-->
    </div><!--Final contenedor-->
</div><!--Final cabecera-->

<!--Creacioin de la barra de navegacion-->
<div id="navbar" class="navbar navbar-dafault"><!--Inicio navbar navbar-dafault-->

    <div class="container"><!--Inicio contenedor-->

         <div class="navbar-header"><!-- Inicio navbar--header"-->
            <a href="Index.php" class="navbar-brand home"><!--Inicio navbar-brand home-->
                <link rel="icon" type="image/png" href="/images/favicon.png" />
                <img src="images/logotipo_gumi_games.png" alt="LogotipoGumiGames" class="hidden-xs">
                <img src="images/logotipo_gumi_games.png" alt="LogotipoGumiGames" class="visible-xs">

            </a><!--Final navbar-brand home-->

            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>

            <button class="navbar-toggle" data-toggle="collapse"  data-target="#search">

                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </button>

        </div><!--Final navbar--header"-->


        <div class="navbar-collapse collapse" id="navigation"><!--Inicio navbar-collapse-collapse"-->

            <div class="padding-nav"><!--Inicio padding-nav"-->

                <ul class="nav navbar-nav left"><!--Inicio nav navbar-nav left"-->

                    <li class="<?php if ($active=='Index.php') echo "active";?>">
                        <a href="Index.php">Home</a>
                    </li>
                    <li class="<?php if ($active=='Tienda.php') echo "active";?>">
                        <a href="Tienda.php">Tienda</a>
                    </li>

                    </>
                    <li class="<?php if ($active=='Carrito.php') echo "active";?>">
                        <a href="Carrito.php">Carrito de Compras</a>
                    </li>
                    <li class="<?php if ($active=='Contactanos.php') echo "active";?>">
                        <a href="Contactanos.php">Contáctanos</a>
                    </li>
                <li class="<?php if ($active=='Mi_cuenta.php') echo "active";?>">
                    <a href="Mi_cuenta.php">Mi cuenta</a>
                </li>

                <li class="<?php if ($active=='Lista_Deseos.php') echo "active";?>">
                    <a href="Lista_Deseos.php">Mi Wish List</a>
                </li>


                </ul><!--Final nav navbar-nav left"-->

            </div><!--Final padding-nav"-->

            <a href="Carrito.php" class="btn navbar-btn btn-primary right"><!--Inicio btn navbar-btn btn-primary right"-->
                <i class="fa fa-shopping-cart"></i>
                <span> <?php items(); ?> Objetos en tu carrito</span>
            </a><!--Final btn navbar-btn btn-primary right"-->


            <!--Boton cabecera-->




        </div><!--Final navbar-collapse-collapse"-->

    </div><!--Final contenedor-->

</div><!--Final navbar navbar-dafault-->



