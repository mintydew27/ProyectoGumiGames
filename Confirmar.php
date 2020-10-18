<?php
$active='Confirmar.php';
include("includes/header.php");
include ("includes/BD.php");

?>




<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>

            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3"><!-- col-md-3 Begin -->

            <?php

            include("includes/sidebar.php");

            ?>

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9"><!-- col-md-9 Begin -->

            <div class="box"><!-- box Begin -->

                <h1 align="center"> Por favor confirma tu pago</h1>

                <form action="Confirmar.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                    <div class="form-group"><!-- form-group Begin -->




                    <div class="form-group"><!-- form-group Begin -->

                        <label> Número de Tarjeta: </label>

                        <input type="number" maxlength="16" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" leng class="form-control" name="numero_tarjeta" required> <i>(Máximo 16 dígitos)</i>


                    </div><!-- form-group Finish -->




                    <div class="text-center"><!-- text-center Begin -->

                        <button type="submit" name="confirmar_pago" class="btn btn-primary"> <!-- tn btn-primary btn-lg Begin -->

                            <i class="fa fa-user-md"></i> Confirmar Pago

                        </button><!-- tn btn-primary btn-lg Finish -->

                    </div><!-- text-center Finish -->




                </form><!-- form Finish -->






            </div><!-- box Finish -->

        </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

include("includes/Footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>

<?php
if(isset($_POST['confirmar_pago'])){
    $numero_tarjeta= $_POST['numero_tarjeta'];
    $insert_confirmacion_pago = "insert into confirmacion_pago (numero_tarjeta) values('$numero_tarjeta')";
    $run_confirmacion_pago = mysqli_query($con,$insert_confirmacion_pago)or die($insert_confirmacion_pago);
    $update_cantiti = "update productos set cantidad_de_productos = cantidad_de_productos - (select qty from carrito) where (select p_id from carrito) = producto_id";
    $run_upp = mysqli_query($con,$update_cantiti)or die($update_cantiti);
    $upp_confirmacion_prueba = "delete from carrito where p_id=p_id";
    $run_upp = mysqli_query($con,$upp_confirmacion_prueba)or die($upp_confirmacion_prueba);


    if($run_confirmacion_pago ) {
            echo "<script>alert('Gracias por su compra, para mas detalles revise su correo electrónico ')</script>";
            echo "<script>window.open('Tienda.php','_self')</script>";
        }

}


?>
