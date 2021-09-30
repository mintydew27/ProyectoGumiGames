<?php
$active='Registro_de_clientes.php';
include("includes/header.php");
?>


    <div id="content"><!--Inicio content-->
        <div class="container"><!--Inicio container-->
            <div class="col-md-12"><!--Inicio col-md-12-->
                <ul class="breadcrumb"><!--Inicio Breadcrumb-->
                    <li>
                        <a href="Index.php">Home</a>
                    </li>
                    <li>
                        Registro
                    </li>
                </ul><!--Final breadcrumb-->

            </div><!--Final col-md-12-->

            <div class="col-md-3"><!--Inicio col-md-3--->

                <?php
                include("includes/sidebar.php");
                ?>

            </div><!--Final col-md-3-->

            <div class="col-md-9">
            <?php
            if(!isset($_SESSION['ClienteCorreo'])){

                include("Login_Users.php");
            }else{

                include("Opcion_pago.php");
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


