<?php
$active='Profile-User.php';
include("includes/header.php")?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

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
<!-- Start Top Header Bar -->
<section class="top-header">
	
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	
</section>
<?php
include("includes/BD.php");
    $cliente_sesion = $_SESSION['ClienteCorreo'];
    $get_cliente = "select * from Cliente where ClienteCorreo = '$cliente_sesion'";
    $run_cliente = mysqli_query($con,$get_cliente);
    $row_cliente = mysqli_fetch_array($run_cliente);
    $cliente_nombre = $row_cliente['ClienteNombre'];
    $cliente_correo = $row_cliente['ClienteCorreo'];
    $cliente_pais = $row_cliente['ClientePais'];
    $cliente_ciudad = $row_cliente['ClienteCiudad'];
    $cliente_telefono = $row_cliente['ClienteTelefono'];

    ?>
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Tablero</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">Mi perfil</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="user-dashboard page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="list-inline dashboard-menu text-center">
          <li> <a class="active"  href="Profile-User.php">Detalles del perfil</a></li>
          <li><a href="Ordenes.php">Ordenes</a></li>
        </ul>
        <div class="dashboard-wrapper dashboard-user-profile">
          <div class="media">
            <div class="pull-left text-center" href="#!">
              <img class="media-object user-img" src="images/avatar.jpg" alt="Image">
              <a href="#x" class="btn btn-transparent mt-20">Cambiar Imagen</a>
            </div>
            <div class="media-body">
              <ul class="user-profile-list">
                <li><span>Nombre: </span><?php echo $cliente_nombre; ?></li>
                <li><span>Pais:</span><?php echo $cliente_pais; ?></li>
                <li><span>Correo:</span><?php echo $cliente_correo; ?></li>
                <li><span>Numero:</span><?php echo $cliente_telefono; ?></li>
                <li><span>Ciudad</span><?php echo $cliente_ciudad; ?></li>
              </ul>
            </div>
          </div>
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
