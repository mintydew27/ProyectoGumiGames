<?php
    session_start();
    include("includes/BD.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>GumiGames Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">


</head>
<body>

<div class="container"><!--Inicio container-->
    <form action="" class="form-login" method="post"><!--Inicio form-login-->
        <h2 class="form-login-heading">Admin Login </h2>
        <input type="text" class="form-control" placeholder="Correo Electrónico" name="admin_email" required>

        <input type="password" class="form-control" placeholder="Tu Contraseña" name="admin_pass" required>


        <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!--Inicio btn btn-lg btn-primary btn-block-->
        Login
        </button><!--Final btn btn-lg btn-primary btn-block-->

    </form><!--Final form-login-->
</div><!--Final container-->

</body>
</html>

<?php

    if(isset($_POST['admin_login'])){
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);


        $get_admin = "select * from Administrador where AdministradorCorreo='$admin_email' AND AdministradorContraseña='$admin_pass'";

        $run_admin = mysqli_query($con, $get_admin);
        $count=mysqli_num_rows($run_admin);
        if($count==1){
            $_SESSION['AdministradorCorreo']=$admin_email;

            echo "<script>
            alert('Logged in. Bienvenido de vuelta!')
            </script>";
            echo "<script>
            window.open('SecondFactor.php','_self')
            </script>";

        }else{

            echo"<script>alert('El correo o contraseña son incorrectos!')</script>";

        }

    }

?>>