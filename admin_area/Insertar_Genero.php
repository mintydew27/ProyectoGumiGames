<?php
if (!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";
}else{




?>
    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Product Category

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-money fa-fw"></i> Insertar Genero

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                              Titulo del Genero

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="genero_titulo" type="text" maxlength="40" required pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" class="form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Genero Descripción

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input type='text' name="genero_descripcion" cols="30" rows="10"  class="form-control"  pattern="[A-Za-zÀ-ÿ,\u00f1\u00d1 ]+" required>

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->



                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input value="Insertar Genero" name="submit" type="submit" class="form-control btn btn-primary">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                    </form><!-- form-horizontal finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->

    <?php

    if(isset($_POST['submit'])){

        $genero_title = $_POST['genero_titulo'];

        $genero_desc = $_POST['genero_descripcion'];

        $insert_genero = "insert into Genero (GeneroTitulo,GeneroDescripcion) values ('$genero_title','$genero_desc')";

        $run_genero = mysqli_query($con,$insert_genero);

        if($run_genero){

            echo "<script>alert('Tu Nuevo Genero de productos se ha insertado Satisfactoriamente!')</script>";

            echo "<script>window.open('Index.php?view_genero','_self')</script>";

        }

    }

    ?>








<?php }?>

