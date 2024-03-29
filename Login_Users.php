<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Gumi Games</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
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
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="Index.php">
            <img src="images/logotipo_gumi.png" alt="">
          </a>
          <h2 class="text-center">Inicio de sesión</h2>
          <form class="text-left clearfix" method="post" action="Revisa.php" >
            <div class="form-group">
            <input name="ClienteCorreo" type="email" placeholder="usuario@correo.com" class="form-control" required>
            </div>
            <div class="form-group">
            <input name="ClienteContraseña" placeholder="Contraseña" type="password" class="form-control" required>
            </div>
            <div class="text-center">
              <button type="submit" name="login" value="Login" class="btn btn-main text-center" >Iniciar Sesión</button>
            </div>
          </form>
          <p class="mt-20">¿No tienes una cuenta?<a href="Registro_de_clientes.php"> Registrate Aqui</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include("includes/Footer.php");
?>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
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