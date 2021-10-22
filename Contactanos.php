<?php
$active='Contactanos.php';
include("includes/header.php")?>

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

<link rel="stylesheet" href="styles/css.css">


</div><!--Final col-md-3-->
        <div class="col-md-14"><!--Inicio col-md-3-->
            <div class="box"><!--Inicio box-->
                <div class="box-header"><!--Inicio box header-->
<center><!--Inicio center-->
                    <h2>Contáctanos estamos a tu servicio</h2>
                    <p class="text-muted"><!--Inicio text muted-->
                        Cualquier duda o sugerencia contáctanos. Nuestro servicio al cliente trabaja 24/7
                    </p><!--Final texto muted-->
                </center><!--Final center-->
                    </div>
            </div>
        </div>
        <section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form action="Contactanos.php" method="post"><!--Inicio Form-->

						<div class="form-group">
							<label> Nombre</label>                    <input type="text" class="form-control" name="Nombre"  maxlength="40" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>
							</div>
	
							<div class="form-group">
							<label> Correo Electrónico</label>                    <input type="Email" placeholder="usuario@correo.com" class="form-control" name="correo" required>
							</div>
	
							<div class="form-group"><!-- form-group Begin -->
	
								<label> Asunto: </label>
	
								<select name="TipoAsunto" class="form-control"><!-- form-control Begin -->
	
	
									<option> Duda </option>
									<option> Sugerencia </option>
									<option> Felicitación </option>
									<option> Queja </option>
	
								</select><!-- form-control Finish -->
	
							</div><!-- form-group Finish -->
	
	
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
				</div>
				<!-- ./End Contact Form -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.463520586747!2d-102.26510588522113!3d21.878219685544398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee069d6cf307%3A0xd93b5294c07171a7!2sInstituto%20Tecnol%C3%B3gico%20de%20Aguascalientes!5e0!3m2!1ses-419!2smx!4v1633146127006!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Av. Adolfo López Mateos Ote. # 1801, Bona Gens, 20256 Aguascalientes</span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: Equipo1@gmail.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					
				</div>
				<!-- / End Contact Details -->
					
				
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
<?php
include("includes/Footer.php");
?>
<!-- Librerias de los folders jquery para que funcione-->
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>