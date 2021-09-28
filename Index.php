
<?php



include("functions/functions.php");

?>
<?php
$active='Index.php';

 include("includes/header.php"); 


?>


<!--Creacion del carril de imagenes-->
    <div class="container" id="slider" style="max-width: 1800px"><!--Incio del contenedor-->

        <div class="col-md-12"><!--Inicio del col-md-12-->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--Inicio del carousel slide-->
                <ol class="carousel-indicators"><!--Inicio del carousel-indicators-->

                    <li class="active" data-target="#myCarousel" data-slide-to="0" ></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol><!--Final del carousel-indicators-->

                <div class="carousel-inner"><!--Inicio del carousel-inner, Seleccion de las imagenes que se utilizaran-->

                 <?php
                 $get_slides = "select * from Carrusel LIMIT 0,1";

                 $run_slides = mysqli_query($con,$get_slides);
                  while($row_slides=mysqli_fetch_array($run_slides)){

                      $slide_name = $row_slides['CarruselNombre'];
                      $slide_image= $row_slides['CarruselImagen'];

                      echo "
                       
                       <div class='item active'>
                       
                      <a href='Tienda.php'><img alt='Producto' src='admin_area/slides_images/$slide_image' ></a> 
                       
                       </div>
                       
                       ";



                  }
                 $get_slides = "select * from Carrusel LIMIT 1,3";
                 $run_slides = mysqli_query($con,$get_slides);
                 while($row_slides=mysqli_fetch_array($run_slides)){

                     $slide_name = $row_slides['CarruselNombre'];
                     $slide_image= $row_slides['CarruselImagen'];

                     echo "
                       
                       <div class='item'>
                       
                      <a href='Tienda.php'><img alt='Producto' src='admin_area/slides_images/$slide_image' ></a>
                       
                       </div>
                       
                       ";



                 }
                  
                 ?>

                </div><!--Final del carousel-inner-->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--Inicio del left carousel-control-->
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a><!--Final del left carousel-control-->

                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--Inicio del left carousel-control-->
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Siguiente</span>
                </a><!--Final del left carousel-control-->


            </div><!--Final del carousel slide-->
        </div><!--Final del col-md-12-->
    </div><!--Final del contenedor-->

<!--Creacion de los bloques de las ventajas de la pagina-->
    <div id="advantages"><!--Inicio advantages-->

        <div class="container"><!--Inicio contenedor-->
            <div class="same-height-row"><!--Inicio same-height-row-->
                <div class="col-sm-4"><!--Inicio col-sm-4"-->
                    <div class="box same-height"><!--Inicio box same-height"-->

                        <div class="icon"><!--Inicio Icon"-->

                            <i class="fa fa-heart"></i>

                        </div><!--Final Icon"-->

                        <h3><a href="#">Las mejores ofertas</a></h3>

                        <p>Tenemos el mejor servicio para ti</p>

                    </div><!--Final box same-height"-->

                </div><!--Final col-sm-4"-->

                <div class="col-sm-4"><!--Inicio col-sm-4"-->
                    <div class="box same-height"><!--Inicio box same-height"-->

                        <div class="icon"><!--Inicio Icon"-->

                            <i class="fa fa-tag"></i>

                        </div><!--Final Icon"-->

                        <h3><a href="#">Los mejores precios</a></h3>

                        <p>Tenemos los mejores precios aquí</p>

                    </div><!--Final box same-height"-->
                </div><!--Final col-sm-4"-->

                <div class="col-sm-4"><!--Inicio col-sm-4"-->
                    <div class="box same-height"><!--Inicio box same-height"-->

                        <div class="icon"><!--Inicio Icon"-->

                            <i class="fa fa-thumbs-up"></i>

                        </div><!--Final Icon"-->

                        <h3><a href="#">100% originales</a></h3>

                        <p>La mejor calidad </p>

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
                        Nuestros Últimos Productos
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


</body>

</html>
