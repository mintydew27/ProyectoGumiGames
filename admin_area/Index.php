<?php

session_start();
include ("includes/BD.php");

if(!isset($_SESSION['AdministradorCorreo'])){
    echo"<script>window.open('Login.php','_self')</script>";

}else{

    $admin_session= $_SESSION['AdministradorCorreo'];
    $get_admin = "select * from Administrador where AdministradorCorreo='$admin_session'";
    $run_admin = mysqli_query($con,$get_admin);
    $row_admin = mysqli_fetch_array($run_admin);
    $admin_id= $row_admin['AdministradorId'];
    $admin_name = $row_admin['AdministradorNombre'];
    $admin_email= $row_admin['AdministradorCorreo'];
    $admin_image = $row_admin['AdministradorImagen'];
    $admin_country= $row_admin['AdministradorPais'];
    $admin_desc= $row_admin['AdministradorDescripcion'];
    $admin_contact = $row_admin['AdministradorTelefono'];
    $admin_rol= $row_admin['AdministradorRol'];


    $get_products= "select * from Producto";
    $run_products= mysqli_query($con,$get_products);
    $count_products=  mysqli_num_rows($run_products);
    $get_customers = "select * from Cliente";
    $run_customers= mysqli_query($con,$get_customers);
    $count_customers= mysqli_num_rows($run_customers);
    $get_genero= "select * from Genero";
    $run_genero= mysqli_query($con,$get_genero);
    $count_genero = mysqli_num_rows($run_genero);
    $get_category = "select * from Categoria";
    $run_category= mysqli_query($con,$get_category);
    $count_category= mysqli_num_rows($run_category);


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



    </head>
<body>
<div id="wrapper"> <!-- Wrapper Begin -->
    <?php include("includes/sidebar.php")?>
    <div id="page-wrapper">   <!-- Page Wrapper Begin -->
        <div id="container-fluid>"> <!--container-fluid Begin -->
            <?php
                    if(isset($_GET['dashboard'])){

                        include ("dashboard.php");

                    }
                    if(isset($_GET['insert_product'])){

                        include("Insertar_Productos.php");

                    }


            ?>


        </div><!--container-fluid finish -->
    </div><!--Page wrapper finish -->
</div><!--Wrapper finish -->
<script src="js/jquery-331.min.js"></script>
<script src="js/boostrap-337.min.js"></script>

</body>
</html>

<?php

}
?>