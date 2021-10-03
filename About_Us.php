<?php
$active='About_Us.php';
include("includes/header.php")?>

<div id="content"><!--Inicio content-->
    <div class="container"><!--Inicio container-->
        <div class="col-md-12"><!--Inicio col-md-12-->
            <ul class="breadcrumb"><!--Inicio Breadcrumb-->
                <li>
                    <a href="Index.php">Home</a>
                </li>
                <li>
                    Contactanos
                </li>
            </ul><!--Final breadcrumb-->

        </div><!--Final col-md-12-->

        <div class="col-md-3"><!--Inicio col-md-3--->

            <?php
            include("includes/sidebar.php");
            ?>

        </div><!--Final col-md-3-->

        <div class="col-md-9"><!--Inicio col-md-3-->
            <div class="box"><!--Inicio box-->
                <div class="box-header"><!--Inicio box header-->
                    <center><!--Inicio center-->
                        <BLOCKQUOTE> <h2>Sobre Nosotros</h2>
                        </BLOCKQUOTE>
                        <br class="row">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/logotipo_pagina_au.png">
                            </div>
                            <div class="col-md-6">

                                <p>Gumi Games es una pagina de venta de videojuegos para diferentes plataformas
                                    de manera digital. Sabemos que existen diversas plataformas que están enfocadas a este tipo de mercado pero
                                    normalmente son para una marca en específico, dando así una clara preferencia, dandole mayor prioridad a
                                    una franquicia que a otra, consideramos que esto provoca que algunas marcas
                                    o videojuegos no puedan crecer o sean reconocidas en Gumi Games queremos hacer que esto
                                    cambie para así poder darle un panorama diferente a esta comunidad, también
                                    poderles dar más facilidad a los usuarios de conseguir estos productos.
                                </p>
                            </div>



                </div>

                <div class="row">
                    <div class="title text-center">
                        <h2></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="title text-center">
                        <h2></h2>
                    </div>
                </div>


                        <div class="row">
                            <div class="title"><h2>Miembros de equipo</h2></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="team-member text-center">
                                    <img class="img-circle" src="images/profile_boy.jpg">
                                    <h4>De Luna Luevano Héctor</h4>
                                    <p>Desarrollador</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="team-member text-center">
                                    <img class="img-circle" src="images/profile_boy.jpg">
                                    <h4>Diaz Ruiz Juan Carlos</h4>
                                    <p>Desarrollador</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="team-member text-center">
                                    <img class="img-circle" src="images/profile_boy.jpg">
                                    <h4>Núñez Villalpando Jesús Guillermo</h4>
                                    <p>Desarrollador</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="team-member text-center">
                                    <img class="img-circle" src="images/profile_girl.jpg">
                                    <h4>Vivero Guzmán Viviana</h4>
                                    <p>Desarrollador</p>
                                </div>
                            </div>
                        </div>






                    </center><!--Final center-->





                    <!--Final form-->
                </div>
            </div><!--Final box-->
        </div><!--Final col-md-3-->

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


