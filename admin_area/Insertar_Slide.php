<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Slide

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-money fa-fw"></i> Insert Slide

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Slide Name

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="slide_name" type="text" maxlength="40" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" title="Solo se admiten letras" class="form-control" required>

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Slide Image

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input type="file" name="slide_image" class="form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                        <div class="form-group"><!-- form-group begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group finish -->
                    </form><!-- form-horizontal finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->

    <?php

    if(isset($_POST['submit'])){

        $slide_name = $_POST['slide_name'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        $view_slides = "select * from Carrusel";

        $view_run_slide = mysqli_query($con,$view_slides);

        $count = mysqli_num_rows($view_run_slide);

        if($count<4){

            move_uploaded_file($temp_name,"slides_images/$slide_image");

            $insert_slide = "insert into Carrusel (CarruselNombre,CarruselImagen) values ('$slide_name','$slide_image')";

            $run_slide = mysqli_query($con,$insert_slide);

            echo "<script>alert('Tu nueva Imagen del Carrusel ha sido Insertada Satisfactoriamente!!')</script>";

            echo "<script>window.open('Index.php?view_slides','_self')</script>";

        }else{

            echo "<script>alert('Ya has insertado 4 imagenes en el Carrusel')</script>";

        }

    }

    ?>

<?php } ?>