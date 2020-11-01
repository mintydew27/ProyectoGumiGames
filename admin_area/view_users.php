<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li class="active"><!-- active begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Ver Administradores

                </li><!-- active finish -->
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags"></i>  Ver Administradores

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <div class="table-responsive"><!-- table-responsive begin -->
                        <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->

                            <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Número: </th>
                                <th> Nombre del Administrador: </th>
                                <th> Primer Apellido del Administrador: </th>
                                <th> Segundo Apellido del Administrador: </th>
                                <th> Imagen del Administrador: </th>
                                <th> E-Mail del Administrador: </th>
                                <th> País del Administradores: </th>
                                <th> Trabajo del Administrador: </th>
                                <th> Telefono del Administrador: </th>
                                <th> Editar: </th>
                                <th> Borrar: </th>
                            </tr><!-- tr finish -->
                            </thead><!-- thead finish -->

                            <tbody><!-- tbody begin -->

                            <?php

                            $i=0;

                            $get_users = "select * from Administrador";

                            $run_users = mysqli_query($con,$get_users);

                            while($row_users=mysqli_fetch_array($run_users)){

                                $user_id = $row_users['AdministradorId'];

                                $user_name = $row_users['AdministradorNombre'];

                                $user_ape1 = $row_users['AdministradorPrimerApellido'];

                                $user_ape2 = $row_users['AdministradorSegundoApellido'];

                                $user_img = $row_users['AdministradorImagen'];

                                $user_email = $row_users['AdministradorCorreo'];

                                $user_country = $row_users['AdministradorPais'];

                                $user_job = $row_users['AdministradorRol'];

                                $user_contact = $row_users['AdministradorTelefono'];

                                $i++;

                                ?>

                                <tr><!-- tr begin -->
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $user_name; ?> </td>
                                    <td> <?php echo $user_ape1; ?> </td>
                                    <td> <?php echo $user_ape2; ?> </td>
                                    <td> <img src="../admin_area/admin_images/<?php echo $user_img; ?>" width="60" height="60"></td>
                                    <td> <?php echo $user_email; ?> </td>
                                    <td> <?php echo $user_country; ?></td>
                                    <td> <?php echo $user_job; ?> </td>
                                    <td> <?php echo $user_contact ?> </td>
                                    <td>

                                        <a href="index.php?user_profile=<?php echo $user_id; ?>">

                                            <i class="fa fa-pencil"></i> Editar

                                        </a>

                                    </td>
                                    <td>

                                        <a href="index.php?delete_user=<?php echo $user_id; ?>">

                                            <i class="fa fa-trash-o"></i> Borrar

                                        </a>

                                    </td>
                                </tr><!-- tr finish -->

                            <?php } ?>

                            </tbody><!-- tbody finish -->

                        </table><!-- table table-striped table-bordered table-hover finish -->
                    </div><!-- table-responsive finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->

<?php } ?>