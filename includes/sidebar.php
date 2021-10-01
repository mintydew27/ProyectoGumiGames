<?php
include_once("functions/functions.php");
?>

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



<!--Inicio de panel-default sidebar-menu-->

    <div class="widget widget-category"><!--Final de panel-body-->
        <!--Inicio de panel-heading-->
        <h3 class="widget-title">Genero</h3>
        <!--Final de panel-heading-->
        <ul class="widget-category-list"><!--Final nav nav-pills nav-stacked category-menu -->
            <?php
            getPGenero();
            ?>


        </ul><!--Final nav nav-pills nav-stacked category-menu -->
    </div><!--Final de panel-body-->

<!--Final de panel-default sidebar-menu-->



<div class="widget widget-tag"><!--Inicio de panel-default sidebar-menu-->
  <!--Inicio de panel-heading-->
        <h3 class="widget-title">Categorias</h3>
  <!--Final de panel-heading-->
    <!--Final de panel-body-->
        <ul class="widget-tag-list"><!--Final nav nav-pills nav-stacked category-menu -->
            <?php
            getCats();
            ?>
        </ul><!--Final nav nav-pills nav-stacked category-menu -->
    </div><!--Final de panel-body-->

<!--Final de panel-default sidebar-menu-->