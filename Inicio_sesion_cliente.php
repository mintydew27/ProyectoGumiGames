<div class="box"><!--Box Inicio--->

    <div class="box-header"><!--Box header Inicio--->

        <center><!--center Inicio--->

            <h1>  Inicio de sesión  </h1>

            <p class="lead"> ¿Ya tienes tu propia cuenta..? </p>

            <p class="text-muted"> Registrate en nuestra pagina </p>


        </center><!--center Final--->

    </div><!--Box header Final--->
    <form method="post" action="Revisa.php"><!--Inicio Form-->
        <div class="form-group"><!--Form group incio--->
            <label> Correo Electrónico </label>
            <input name="ClienteCorreo" type="email" placeholder="usuario@correo.com" class="form-control" required>
        </div><!--Form group Final--->

        <div class="form-group"><!--Form group incio--->
            <label> Contraseña </label>
            <input name="ClienteContraseña" type="password" class="form-control" required>
        </div><!--Form group Final--->

        <div class="text-center"><!--text-centerInicio--->
            <button name="login" value="Login"class="btn btn-primary">
                <i class="fa fa-sign-in"></i> Inicio de Sesión

            </button>


        </div><!--text center Final--->




    </form><!--Form Final--->
    <center><!--Inicio center-->
        <a href="Registro_de_clientes.php">
       <h3>¿No tienes una cuenta..? Registrate aquí </h3>
        </a>
    </center><!--Final center-->


</div><!--Box Final--->

<?php
if(isset($_POST['login'])){
    $cliente_correo = $_POST['ClienteCorreo'];
    $cliente_pass = $_POST['ClienteContraseña'];
    $select_customer= "select * from Cliente where ClienteCorreo='$cliente_correo' AND ClienteContraseña='$cliente_pass'";
    $run_customer = mysqli_query($con, $select_customer);

    $get_ip = getRealIpUser();
    $check_customer = mysqli_num_rows($run_customer);
    $select_carrito = "select * from Carrito where AddIp='$get_ip'";
    $run_carrito = mysqli_query($con,$select_carrito);
    $check_carrito= mysqli_num_rows($run_carrito);
    if($check_customer==0){
        echo "<script>alert('Tu correo o contraseña son incorrectos')</script>";

        exit();

    }

    if($check_customer==1 AND $check_carrito==0){
        $_SESSION['ClienteCorreo']=$cliente_correo;
        $customer = mysqli_fetch_array($run_customer);
        $_SESSION['ClienteId']=$customer['ClienteId'];

        echo "<script>alert('Inicio de sesión correcta')</script>";
        echo "<script>window.open('Index.php','_self')</script>";

    }
    else{
        $_SESSION['ClienteCorreo']=$cliente_correo;
        echo "<script>alert('Inicio de sesión correcta')</script>";
        echo "<script>window.open('Index.php','_self')</script>";


    }
}

?>
