<!DOCTYPE html>
<html lang="en">
<head>


  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Registro Gumi Games</title>

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
          <a class="logo" href="index.html">
            <img src="images/logotipo_gumi.png" alt="">
          </a>
          <h2 class="text-center">Create Your Account</h2>
          <form class="text-left clearfix" action="Registro_Users.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombres" name="ClienteNombre" maxlength="40" required pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Apellido Paterno" name="ClientePaterno" maxlength="40" required pattern="[A-Za-zÀ-ÿ\u00f1\u00d1]+" title="Solo se admiten letras" required>            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Apellido Materno" name="ClienteMaterno" maxlength="40" required pattern="[A-Za-zÀ-ÿ\u00f1\u00d1]+" title="Solo se admiten letras" required>            </div>
            <div class="form-group">
            <input type="email" placeholder="usuario@correo.com" class="form-control" name="ClienteCorreo" required>            </div>
            <div class="form-group">
            <input type="password" placeholder="Contraseña" class="form-control" name="ClienteContraseña" required>
            </div>
            <div class="form-group">
            <input type="text" placeholder="Pais" class="form-control" name="ClientePais" maxlength="40" required pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>            </div>
            <div class="form-group">
            <input type="text" placeholder="Ciudad" class="form-control" name="ClienteCiudad" maxlength="40" required pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>            </div>
            <div class="form-group">
            <input type="number" placeholder="4494561230" maxlength="10" size="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" leng class="form-control" name="ClienteTelefono" min="1" required> <i>(Máximo 10 dígitos)</i>            </div>
            <p>
            Al dar click en Regístrarse, estás aceptando los Términos y Condiciones de Uso de éste sitio y recibirás información publicitaria de Gumi Games a tu correo electrónico. Adicionalmente estás aceptando nuestro <a href="Aviso_de_privacidad.php">Aviso de privacidad</a>
            </p>
            <div class="text-center">
              <button type="submit" name="registrar" class="btn btn-main text-center">Registrar</button>
            </div>
          </form>
          <p class="mt-20">¿Ya cuentas con una cuenta?<a href="Login_Users.php"> Iniciar Sesión</a></p>
          <p><a href="forget-password.html"> ¿Olvidaste tu contraseña?</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

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
    
<!-- Librerias de los folders jquery para que funcione-->
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

  </body>
  </html>
  <?php

if (isset($_POST['registrar'])){
            $c_name= $_POST['ClienteNombre'];
            $c_firstlastname= $_POST['ClientePaterno'];
            $c_secondlastname= $_POST['ClienteMaterno'];
            $c_email= $_POST['ClienteCorreo'];
            $c_pass= $_POST['ClienteContraseña'];
            $ci_pass = password_hash($c_pass,PASSWORD_BCRYPT);
            $c_pais= $_POST['ClientePais'];
            $c_ciudad= $_POST['ClienteCiudad'];
            $c_contacto= $_POST['ClienteTelefono'];
            $c_ip = getRealIpUser();
    $insert_cliente ="insert into Cliente (ClienteNombre,ClientePrimerApellido,ClienteSegundoApellido,ClienteCorreo,ClienteContraseña,ClienteContraseñaEncriptada,ClientePais,ClienteCiudad,ClienteTelefono,ClienteIp) 
                values ('$c_name','$c_firstlastname','$c_secondlastname','$c_email','$c_pass','$ci_pass','$c_pais','$c_ciudad','$c_contacto','$c_ip')";

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