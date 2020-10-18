<?php
$active='Contactanos.php';
include("includes/header.php")?>

<div id="content"><!--Inicio content-->
    <div class="container"><!--Inicio container-->
        <div class="col-md-12"><!--Inicio col-md-12-->
            <ul class="breadcrumb"><!--Inicio Breadcrumb-->
                <li>
                    <a href="Index.php">Home</a>
                </li>
                <li>
                    Contáctanos
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
                    <h2>Contáctanos estamos a tu servicio</h2>
                    <p class="text-muted"><!--Inicio text muted-->
                        Cualquier duda o sugerencia contáctanos. Nuestro servicio al cliente trabaja 24/7
                    </p><!--Final texto muted-->
                </center><!--Final center-->
                    <form action="Contactanos.php" method="post"><!--Inicio Form-->

                    <div class="form-group">
                        <label> Nombre</label>                    <input type="text" class="form-control" name="Nombre" required>
                        </div>

                        <div class="form-group">
                        <label> Correo Electrónico</label>                    <input type="email" placeholder="usuario@correo.com" class="form-control" name="correo" required>
                        </div>

                        <div class="form-group">
                        <label> Asunto</label>                    <input type="text" class="form-control" name="asunto" required>
                        </div>

                        <div class="form-group">
                        <label> Mensaje</label>                    <textarea name="Mensaje" class="form-control">
                            </textarea>
                        </div>

                        <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user-md"></i>Enviar Mensaje
                              </button>
                        </div>
                        
                    </form><!--Final form-->

                    <?php
                        if (isset($_POST['submit'])){

                            echo "
                                <h2> Tu mensaje fue enviado correctamente </h2>";
                        }
                    ?>


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