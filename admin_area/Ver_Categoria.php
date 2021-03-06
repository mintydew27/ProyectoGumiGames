<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Ver Categorias

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags fa-fw"></i> Ver Categorias

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <div class="table-responsive"><!-- table-responsive begin -->
                        <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->

                            <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Categoría ID </th>
                                <th> Categoría Titulo </th>
                                <th> Categoría Descripción </th>
                                <th> Editar Categoría </th>
                                <th> Eliminar Categoría </th>
                            </tr><!-- tr finish -->
                            </thead><!-- thead finish -->

                            <tbody><!-- tbody begin -->

                            <?php

                            $i=0;

                            $get_cats = "select * from Categoria";

                            $run_cats = mysqli_query($con,$get_cats);

                            while($row_cats=mysqli_fetch_array($run_cats)){

                                $cat_id = $row_cats['CategoriaId'];

                                $cat_title = $row_cats['CategoriaTitulo'];

                                $cat_desc = $row_cats['CategoriaDescripcion'];

                                $i++;

                                ?>

                                <tr><!-- tr begin -->
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $cat_title; ?> </td>
                                    <td width="300"> <?php echo $cat_desc; ?> </td>
                                    <td>
                                        <a href="Index.php?edit_cat= <?php echo $cat_id; ?> ">
                                            <i class="fa fa-pencil"></i> Editar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="Index.php?delete_cat= <?php echo $cat_id; ?> ">
                                            <i class="fa fa-trash"></i> Eliminar
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
