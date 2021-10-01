
<?php



include("functions/functions.php");

?>
<?php
$active='Index.php';

include("includes/header.php");


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
<link rel="stylesheet" href="styles/css.css">


<div class="hero-slider">
    <div class="slider-item th-fullpage hero-area" style="background-image: url(admin_area/slides_images/slide_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center">
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTOS</p>
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Una variedad de juegos nuevos <br> por descubrir.</h1>
                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="Tienda.php">Ir Ahora</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area" style="background-image: url(admin_area/slides_images/slide2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-left">
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Fall Guys</p>
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Nuevos desafíos te esperan <br> en esta nueva temporada.</h1>
                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="Tienda.php">Ir Ahora</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area" style="background-image: url(admin_area/slides_images/slide4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-right">
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Kurtzpel</p>
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Una experiencia única <br> en este nuevo juego PvP.</h1>
                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="Tienda.php">Ir Ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>




<!--Creacion de los bloques de las ventajas de la pagina-->
    <div id="advantages"><!--Inicio advantages-->

        <div class="container"><!--Inicio contenedor-->
            <div class="same-height-row"><!--Inicio same-height-row-->
                <div class="col-sm-4"><!--Inicio col-sm-4"-->
                    <div class="box same-height"><!--Inicio box same-height"-->

                        <div class="icon"><!--Inicio Icon"-->

                            <i class="fa fa-heart"></i>

                        </div><!--Final Icon"-->

                        <h3><a href="Contactanos.php">¿Tienes una duda?</a></h3>

                        <p>Preguntanos</p>

                    </div><!--Final box same-height"-->

                </div><!--Final col-sm-4"-->

                <div class="col-sm-4"><!--Inicio col-sm-4"-->
                    <div class="box same-height"><!--Inicio box same-height"-->

                        <div class="icon"><!--Inicio Icon"-->

                            <i class="fa fa-tag"></i>

                        </div><!--Final Icon"-->

                        <h3><a href="Tienda.php">Los mejores precios</a></h3>

                        <p>Solo para ti</p>

                    </div><!--Final box same-height"-->
                </div><!--Final col-sm-4"-->

                <div class="col-sm-4"><!--Inicio col-sm-4"-->
                    <div class="box same-height"><!--Inicio box same-height"-->

                        <div class="icon"><!--Inicio Icon"-->

                            <i class="fa fa-thumbs-up"></i>

                        </div><!--Final Icon"-->

                        <h3><a href="Tienda.php">Juegos originales</a></h3>

                        <p>De la mejor calidad </p>

                    </div><!--Final box same-height"-->

                </div><!--Final col-sm-4"-->


            </div><!--Final same-height-row-->


        </div><!--Final contenedor-->


    </div><!--Final advantages-->

    <div id="hot"><!--Inicio hot-->
        <div class="box"><!--Inicio box-->
            <div class="container"><!--Inicio contenedor-->

                <div class="col-md-12"><!--Inicio col-md-12"-->

                    <h2>
                        Nuestros Productos Más recientes
                    </h2>


                </div><!--Final col-md-12"-->



            </div><!--Final contenedor-->




        </div><!--Final box-->




    </div><!--Final hot-->

    <div id="content" class="container"><!--Inicio container-->
        <div class="row"><!--Inicio row-->

            <?php
                getPro();

            ?>

        </div><!--Final row-->
    </div><!--Final container-->
<!--Para incluir el pie de pagina-->
    <?php

    include("includes/Footer.php");

    ?>
<!-- Librerias de los folders jquery para que funcione-->
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


<!-- Main jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Touchpin -->
<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

<!-- Video Lightbox Plugin -->
<script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
<!-- Count Down Js -->
<script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

<!-- slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>

<!-- Main Js File -->
<script src="js/script.js"></script>

</body>

</html>
