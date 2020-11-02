<?php
$active='Mi_cuenta.php';
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
                    Mi cuenta
                </li>
            </ul><!--Final breadcrumb-->

        </div><!--Final col-md-12-->

        <div class="col-md-3"><!--Inicio col-md-3--->

            <?php
            include("includes/sidebarMicuenta.php");
            ?>

        </div><!--Final col-md-3-->

        <div class="col-md-9"><!--inicio col-md-9-->
            <div class="box"><!--inicio box-->
                <?php

                if(isset($_GET['mis_ordenes'])){
                    include("Mis_ordenes.php");

                }

                if (isset($_GET['pay_offline'])) {
                    include("Carrito.php");
                }


                ?>



            </div><!--Final box-->


        </div><!--Final col-md-9-->



    </div><!--Final container-->
</div><!--Final content-->

<?php
include("includes/FooterMicuenta.php");
?>
<!-- Librerias de los folders jquery para que funcione-->
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>
