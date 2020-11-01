<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['editar_genero'])){

        $edit_genero_id = $_GET['editar_genero'];

        $edit_genero_query = "select * from Genero where GeneroId='$edit_genero_id'";

        $run_edit = mysqli_query($con,$edit_genero_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $genero_id = $row_edit['GeneroId'];

        $genero_title = $row_edit['GeneroTitulo'];

        $genero_desc = $row_edit['GeneroDescripcion'];

    }

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Editar Genero de Producto

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-pencil fa-fw"></i> Editar Genero de Producto

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Titulo de Genero del Producto

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input value=" <?php echo $genero_title; ?> " name="p_genero_title" type="text" class="form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Product Category Description

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <textarea type='text' name="p_genero_desc" class="form-control"><?php echo $genero_desc; ?></textarea>

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

        $p_genero_title = $_POST['p_genero_title'];

        $p_genero_desc = $_POST['p_genero_desc'];

        $update_p_genero = "update Genero set GeneroTitulo='$p_genero_title',GeneroDescripcion='$p_genero_desc' where GeneroId='$genero_id'";

        $run_p_genero = mysqli_query($con,$update_p_genero);

        if($run_p_genero){

            echo "<script>alert('Tu Genero del Producto ha sido Actualizado Satisfactoriamente!!')</script>";

            echo "<script>window.open('Index.php?view_genero','_self')</script>";

        }

    }

    ?>



<?php } ?>