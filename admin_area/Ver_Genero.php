<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Ver Genero de Productos

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags fa-fw"></i> Ver Genero de Productos

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <div class="table-responsive"><!-- table-responsive begin -->
                        <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->

                            <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Genero ID </th>
                                <th> Genero Titulo </th>
                                <th> Genero Descripcion </th>
                                <th> Edit Genero </th>
                                <th> Delete Genero</th>
                            </tr><!-- tr finish -->
                            </thead><!-- thead finish -->

                            <tbody><!-- tbody begin -->

                            <?php

                            $i=0;

                            $get_genero= "select * from Genero";

                            $run_genero = mysqli_query($con,$get_genero);

                            while($row_genero=mysqli_fetch_array($run_genero)){

                                $genero_id = $row_genero['GeneroId'];

                                $genero_title = $row_genero['GeneroTitulo'];

                                $genero_desc = $row_genero['GeneroDescripcion'];

                                $i++;

                                ?>

                                <tr><!-- tr begin -->
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $genero_title; ?> </td>
                                    <td width="300"> <?php echo $genero_desc; ?> </td>
                                    <td>
                                        <a href="Index.php?editar_genero= <?php echo $genero_id; ?> ">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="Index.php?borrar_genero= <?php echo $genero_id; ?> ">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr><!-- tr finish -->

                            <?php } ?>

                            </tbody><!-- tbody finish -->

                        </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                    </div><!-- table-responsive finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->


<?php } ?>
