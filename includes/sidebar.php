<?php
include_once("functions/functions.php");
?>
<div class="panel panel-default sidebar-menu"><!--Inicio de panel-default sidebar-menu-->
    <div class="panel-heading"><!--Inicio de panel-heading-->
        <h3 class="panel-title">Genero</h3>
    </div><!--Final de panel-heading-->

    <div class="panel-body"><!--Final de panel-body-->
        <ul class="nav nav-pills nav-stacked category-menu"><!--Final nav nav-pills nav-stacked category-menu -->
            <?php
            getPGenero();
            ?>


        </ul><!--Final nav nav-pills nav-stacked category-menu -->
    </div><!--Final de panel-body-->

</div><!--Final de panel-default sidebar-menu-->



<div class="panel panel-default sidebar-menu"><!--Inicio de panel-default sidebar-menu-->
    <div class="panel-heading"><!--Inicio de panel-heading-->
        <h3 class="panel-title">Categorias</h3>
    </div><!--Final de panel-heading-->
    <div class="panel-body"><!--Final de panel-body-->
        <ul class="nav nav-pills nav-stacked category-menu"><!--Final nav nav-pills nav-stacked category-menu -->
            <?php
            getCats();
            ?>

        </ul><!--Final nav nav-pills nav-stacked category-menu -->
    </div><!--Final de panel-body-->

</div><!--Final de panel-default sidebar-menu-->