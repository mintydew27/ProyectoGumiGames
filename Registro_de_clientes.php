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
        <div class="col-md-9"><!--Inicio col-md-3-->
            <div class="box"><!--Inicio box-->
                <div class="box-header"><!--Inicio box header-->
                <center><!--Inicio center-->
                    <h2>Registrar una nueva cuenta</h2>
                   
                </center><!--Final center-->
                    <form action="Registro_de_clientes.php" method="post" enctype="multipart/form-data"><!--Inicio Form-->
                    
                    <div class="form-group">

                        <label> Nombre</label>                    <input type="text" class="form-control" name="ClienteNombre" required>
                        </div>
                        <div class="form-group">

                            <label> Apellido</label>                    <input type="text" class="form-control" name="ClienteApellido" required>
                        </div>




                        <div class="form-group">
                        <label> Correo Electrónico</label>                    <input type="email" placeholder="usuario@correo.com" class="form-control" name="ClienteCorreo" required>
                        </div>
                        
                        <div class="form-group">
                        <label> Contraseña</label>                    <input type="password" class="form-control" name="ClienteContraseña" required>
                        </div>
                    
                        <div class="form-group">
                        <label> País</label>                    <input type="texto" class="form-control" name="ClientePais" required>
                        </div>
                        
                        <div class="form-group">
                        <label> Ciudad</label>                    <input type="texto" class="form-control" name="ClienteCiudad" required>
                        </div>

                        
                        
                        <div class="form-group">
                        <label> Teléfono</label>
                            <input type="number" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" leng class="form-control" name="ClienteTelefono" required> <i>(Máximo 10 dígitos)</i>

                        </div>

                        <p class="text-muted" align="left"><!--Inicio text muted-->
                            Al dar click en Regístrarse, estás aceptando los Términos y Condiciones de Uso de éste sitio y recibirás información publicitaria de Gumi Games a tu correo electrónico. Adicionalmente estás aceptando nuestro <a href="Aviso_de_privacidad.php">Aviso de privacidad</a>
                        </p><!--Final texto muted-->

                        <div class="text-center">
                        <button type="submit" name="registrar" class="btn btn-primary"> 
                            
                            <i class="fa fa-user-md"></i>Regístrarse
                              </button>
                        </div>
                        
                    </form><!--Final form-->
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



<?php

if (isset($_POST['registrar'])){
            $c_name= $_POST['ClienteNombre'];
            $c_lastname= $_POST['ClienteApellido'];
            $c_email= $_POST['ClienteCorreo'];
            $c_pass= $_POST['ClienteContraseña'];
            $ci_pass = password_hash($c_pass,PASSWORD_BCRYPT);
            $c_pais= $_POST['ClientePais'];
            $c_ciudad= $_POST['ClienteCiudad'];
            $c_contacto= $_POST['ClienteTelefono'];

            $c_ip = getRealIpUser();

            $insert_cliente ="insert into Cliente (ClienteNombre,ClienteApellido,ClienteCorreo,ClienteContraseña,ClienteContraseñaEncriptada,ClientePais,ClienteCiudad,ClienteTelefono,ClienteIp) 
                values ('$c_name','$c_lastname','$c_email','$c_pass','$ci_pass','$c_pais','$c_ciudad','$c_contacto','$c_ip')";

            $run_customer = mysqli_query($con,$insert_cliente);

            $sel_car = "select * from Carrito where AddIp = '$c_ip'";
            $run_cart = mysqli_query($con,$sel_car);

            $check_cart = mysqli_num_rows($run_cart);
            if ($check_cart>0){
                $_SESSION['cliente_correo'] = $c_email;
                echo "<script>alert('Te has registrado correctamente')</script>> ";
                echo "<script>window.open('Index.php','_self')</script>> ";
            }else{
                echo "<script>alert('Te has registrado correctamente')</script>> ";
                echo "<script>window.open('Index.php','_self')</script>> ";
            }
}
?>