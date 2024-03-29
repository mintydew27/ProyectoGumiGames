<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Category

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-money fa-fw"></i> Insert Category

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                               Titulo de la Categoría

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="cat_title" type="text" class="form-control" maxlength="40" pattern="[A-Za-zÀ-ÿ,\u00f1\u00d1 ]+" title="Solo se admiten letras" required>

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Categoría Descripción

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input type='text' name="cat_desc" id="" cols="30" rows="10" class="form-control" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" required>

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->



                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input value="Insertar Categoria" name="submit" type="submit" class="form-control btn btn-primary">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                    </form><!-- form-horizontal finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->

    <?php

    if(isset($_POST['submit'])){

        $cat_title = $_POST['cat_title'];

        $cat_desc = $_POST['cat_desc'];

        $insert_cat = "insert into Categoria (CategoriaTitulo,CategoriaDescripcion) values ('$cat_title','$cat_desc')";

        $run_cat = mysqli_query($con,$insert_cat);

        if($run_cat){

            echo "<script>alert('Tu Categoria ha sido Insertada Satisfactoriamente!')</script>";

            echo "<script>window.open('Index.php?view_cats','_self')</script>";

        }

    }

    ?>

<?php } ?>
