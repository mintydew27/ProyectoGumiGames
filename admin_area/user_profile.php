<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['user_profile'])){

        $edit_user = $_GET['user_profile'];

        $get_user = "select * from administrador where AdministradorId='$edit_user'";

        $run_user = mysqli_query($con,$get_user);

        $row_user = mysqli_fetch_array($run_user);

        $user_id = $row_user['AdministradorId'];

        $user_name = $row_user['AdministradorNombre'];

        $user_ape1 = $row_user['AdministradorPrimerApellido'];

        $user_ape2 = $row_user['AdministradorSegundoApellido'];

        $user_pass = $row_user['AdministradorContraseña'];

        $user_email = $row_user['AdministradorCorreo'];

        $user_image = $row_user['AdministradorImagen'];

        $user_country = $row_user['AdministradorPais'];

        $user_about = $row_user['AdministradorDescripcion'];

        $user_contact = $row_user['AdministradorTelefono'];

        $user_job = $row_user['AdministradorRol'];

    }

    ?>

    <div class="row"><!-- row Begin -->

        <div class="col-lg-12"><!-- col-lg-12 Begin -->

            <ol class="breadcrumb"><!-- breadcrumb Begin -->

                <li class="active"><!-- active Begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Editar Usuario

                </li><!-- active Finish -->

            </ol><!-- breadcrumb Finish -->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->

    <div class="row"><!-- row Begin -->

        <div class="col-lg-12"><!-- col-lg-12 Begin -->

            <div class="panel panel-default"><!-- panel panel-default Begin -->

                <div class="panel-heading"><!-- panel-heading Begin -->

                    <h3 class="panel-title"><!-- panel-title Begin -->

                        <i class="fa fa-money fa-fw"></i> Editar Usuario

                    </h3><!-- panel-title Finish -->

                </div> <!-- panel-heading Finish -->

                <div class="panel-body"><!-- panel-body Begin -->

                    <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Nombre del Administrador </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_name; ?>" name="admin_name" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Primer Apellido del Administrador </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_ape1; ?>" name="admin_ape1" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->


                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Segundo Apellido del Administrador </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_ape2; ?> name="admin_ape2" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->





                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> E-mail </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_email; ?>"  name="admin_email" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Contraseña </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_pass; ?>"  name="admin_pass" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> País </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_country; ?>"  name="admin_country" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Teléfono </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_contact; ?>"  name="admin_contact" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Job </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input value="<?php echo $user_job; ?>"  name="admin_job" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Imagen </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_image" type="file" class="form-control" required>

                                <img src="admin_images/<?php echo $user_image; ?>" alt="<?php echo $user_name; ?>" width="70" height="70">

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Acerca de </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <textarea  name="admin_about" class="form-control" rows="3"> <?php echo $user_about; ?></textarea>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="update" value="Update User" type="submit" class="btn btn-primary form-control">

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                    </form><!-- form-horizontal Finish -->

                </div><!-- panel-body Finish -->

            </div><!-- canel panel-default Finish -->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->


    <?php

    if(isset($_POST['update'])){

        $user_name = $_POST['admin_name'];
        $user_ape1 = $_POST['admin_name'];
        $user_ape2 = $_POST['admin_name'];
        $user_email = $_POST['admin_email'];
        $user_pass = $_POST['admin_pass'];
        $user_country = $_POST['admin_country'];
        $user_contact = $_POST['admin_contact'];
        $user_job = $_POST['admin_job'];
        $user_about = $_POST['admin_about'];

        $user_image = $_FILES['admin_image']['name'];
        $temp_admin_image = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($temp_admin_image,"admin_images/$user_image");

        $update_user = "update administrador set AdministradorNombre='$user_name',AdministradorPrimerApellido='$user_ape1',AdministradorSegundoApellido='$user_ape2',AdministradorCorreo='$user_email',AdministradorContraseña='$user_pass',AdministradorCorreo='$user_country',AdministradorTelefono='$user_contact',AdministradorRol='$user_job',AdministradorDescripcion='$user_about',AdministradorImagen='$user_image' where AdministradorId='$user_id'";

        $run_user = mysqli_query($con,$update_user);

        if($run_user){

            echo "<script>alert('El usuario ha sido actualizado')</script>";
            echo "<script>window.open('login.php','_self')</script>";

            session_destroy();

        }

    }

    ?>


<?php } ?>