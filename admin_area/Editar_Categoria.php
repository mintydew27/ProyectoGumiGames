<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['edit_cat'])){

        $edit_cat_id = $_GET['edit_cat'];

        $edit_cat_query = "select * from Categoria where CategoriaId='$edit_cat_id'";

        $run_edit = mysqli_query($con,$edit_cat_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $cat_id = $row_edit['CategoriaId'];

        $cat_title = $row_edit['CategoriaTitulo'];

        $cat_desc = $row_edit['CategoriaDescripcion'];

    }

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Editar Categoria

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-pencil fa-fw"></i> Editar Categoria

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Category Title

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input value=" <?php echo $cat_title; ?> " name="cat_title" type="text" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" class="form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Category Description

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input type='text' name="cat_desc" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" class="form-control"><?php echo $cat_desc; ?></input>

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->



                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input value="Update" name="update" type="submit" class="form-control btn btn-primary">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                    </form><!-- form-horizontal finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->

    <?php

    if(isset($_POST['update'])){

        $cat_title = $_POST['cat_title'];

        $cat_desc = $_POST['cat_desc'];

        $update_cat = "update Categoria set CategoriaTitulo='$cat_title',CategoriaDescripcion='$cat_desc' where CategoriaId='$cat_id'";

        $run_cat = mysqli_query($con,$update_cat);

        if($run_cat){

            echo "<script>alert('Tu Categoria ha sido Actualizada Satisfactoriamente!!')</script>";

            echo "<script>window.open('Index.php?view_cats','_self')</script>";

        }

    }

    ?>



<?php } ?>