<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row Begin -->

        <div class="col-lg-12"><!-- col-lg-12 Begin -->

            <ol class="breadcrumb"><!-- breadcrumb Begin -->

                <li class="active"><!-- active Begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Insertar Administrador

                </li><!-- active Finish -->

            </ol><!-- breadcrumb Finish -->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->

    <div class="row"><!-- row Begin -->

        <div class="col-lg-12"><!-- col-lg-12 Begin -->

            <div class="panel panel-default"><!-- panel panel-default Begin -->

                <div class="panel-heading"><!-- panel-heading Begin -->

                    <h3 class="panel-title"><!-- panel-title Begin -->

                        <i class="fa fa-money fa-fw"></i> Insertar Administrador

                    </h3><!-- panel-title Finish -->

                </div> <!-- panel-heading Finish -->

                <div class="panel-body"><!-- panel-body Begin -->

                    <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Nombre del Administrador </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_name" type="text" class="form-control" maxlength="40"  pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Primer Apellido del Administrador </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_ape1" type="text" class="form-control" maxlength="40" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->


                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Segundo Apellido del Administrador </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_ape2" type="text" class="form-control"  maxlength="40" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->




                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> E-mail </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_email" type="text" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Constraseña </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_pass" type="password" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> País </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_country" type="text" class="form-control" maxlength="40" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Teléfono </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_contact" type="number" class="form-control" maxlength="10" size="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" leng min="1" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Rol </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_job" type="text" class="form-control" maxlength="40" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Imagen </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_image" type="file" class="form-control" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"> Acerca de: </label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="admin_about" class="form-control" rows="3" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required>

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group"><!-- form-group Begin -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!-- col-md-6 Begin -->

                                <input name="submit" value="Insert User" type="submit" class="btn btn-primary form-control">

                            </div><!-- col-md-6 Finish -->

                        </div><!-- form-group Finish -->

                    </form><!-- form-horizontal Finish -->

                </div><!-- panel-body Finish -->

            </div><!-- canel panel-default Finish -->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->


    <?php

    if(isset($_POST['submit'])){

        $user_name = $_POST['admin_name'];
        $user_ape1 = $_POST['admin_ape1'];
        $user_ape2 = $_POST['admin_ape2'];
        $user_email = $_POST['admin_email'];
        $user_pass = $_POST['admin_pass'];
        $user_country = $_POST['admin_country'];
        $user_contact = $_POST['admin_contact'];
        $user_job = $_POST['admin_job'];
        $user_about = $_POST['admin_about'];

        $user_image = $_FILES['admin_image']['name'];
        $temp_admin_image = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($temp_admin_image,"admin_images/$user_image");

        $insert_user = "insert into administrador (AdministradorNombre,AdministradorPrimerApellido,AdministradorSegundoApellido,AdministradorCorreo,AdministradorContraseña,AdministradorPais,AdministradorTelefono,AdministradorRol,AdministradorImagen,AdministradorDescripcion) values ('$user_name','$user_ape1','$user_ape2','$user_email','$user_pass','$user_country','$user_contact','$user_job','$user_image','$user_about')";

        $run_user = mysqli_query($con,$insert_user);

        if($run_user){

            echo "<script>alert('Se ha registrado el nuevo Administrador Correctamente')</script>";
            echo "<script>window.open('index.php?view_users','_self')</script>";

        }

    }

    ?>


<?php } ?>