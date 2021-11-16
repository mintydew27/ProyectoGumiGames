
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


<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.es/b19032969/crm/site_button/loader_4_qpe66s.js');
</script>

<!--Creacion de los bloques de las ventajas de la pagina-->
    <div id="advantages"><!--Inicio advantages-->
        <section class="product-category section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    <div class="col-md-6">
                        <div class="category-box">
                            <a href="Tienda.php">
                                <img src="admin_area\slides_images\gumi3.png" alt="ventajas2" />
                                <div class="content">
                                    <h3>Los mejores precios</h3>
                                    <p>Solo para ti</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-box">
                            <a href="Tienda.php">
                                <img src="admin_area\slides_images\gumi1.png" alt="ventajas 3" />
                                <div class="content">
                                    <h3>¿Buscas un juego nuevo?</h3>
                                    <p>Da un paseo por nuestro catalogo</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-box category-box-2">
                            <a href="Contactanos.php">
                                <img src="admin_area\slides_images\gumi2.png" alt="ventajas 2" />
                                <div class="content">
                                    <h3>¿Tienes una duda o comentario?</h3>
                                    <p>Contactate con nosotros</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
<section class="products section bg-gray">
    <div class="container">
        <div class="row"><!--Inicio row-->

            <?php
                getPro();

            ?>

        </div><!--Final row-->
    </div><!--Final container-->
</section>





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
