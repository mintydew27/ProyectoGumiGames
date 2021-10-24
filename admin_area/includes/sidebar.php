<?php
if (!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";
}else{


?>

<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse">
            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="Index.php?dashboard" class="navbar-brand"Admin Area></a>
    </div>



    <ul class="nav navbar-right top-nav">
        <li >
                <li>
                    <a href="Index.php?view_profile=<?php echo $admin_id; ?>">
                        <i class="fa fa-fw fa-user"></i> <?php echo $admin_name; ?>
                    </a>
                </li>
                <li>
                    <a href="Logout.php">
                        <i class="fa fa-fw fa-power-off"></i> Salir
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="Index.php?dashboard">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li>

                <a href="Index.php?view_products" id="products" data-target="products" >
                    <i class="fa fa-fw fa-tag"></i>Productos <span class="badge"><?php echo $count_products; ?></span>
                </a>

            <li>
                <a href="Index.php?insert_product">Insertar Producto </a>
                <a href="Index.php?view_products">Ver Productos </a>
            </li>

            </li>
            ///////////////////////////////////////////////////////////////////

            <li>
                <a href="Index.php?view_genero" data-toggle="collapse" data-target="#p_cat">
                    <i class="fa fa-fw fa-edit"></i> Genero de Productos <span class="badge"><?php echo $count_genero; ?></span>

                </a>
                    <li>
                        <a href="Index.php?insert_genero">Insertar Genero</a>
                    </li>
                    <li>
                        <a href="Index.php?view_genero">Ver Generos</a>
                    </li>

            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_cats" data-toggle="collapse" data-target="#cat">
                    <i class="fa fa-fw fa-book"></i> Categoría <span class="badge"><?php echo $count_category; ?></span>

                </a>
                    <li>
                        <a href="Index.php?insert_cat">Insertar Categoría </a>
                    </li>
                    <li>
                        <a href="Index.php?view_cats">Ver Categorias</a>
                    </li>

            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_customers" data-toggle="collapse" data-target="#customers">
                    <i class="fa fa-fw fa-users"></i> Clientes <span class="badge"><?php echo $count_customers; ?></span>

                </a>
                <li>
                <a href="index.php?view_customers"> Ver Clientes
                </a>
            </li>

            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_slides" data-toggle="collapse" data-target="#slides">
                    <i class="fa fa-fw fa-gear"></i> Slides
                </a>

                    <li>
                        <a href="Index.php?insert_slide">Insertar Slide </a>
                    </li>
                    <li>
                        <a href="Index.php?view_slides">Ver Slides</a>
                    </li>

            </li>


            ///////////////////////////////////////////////////////////////////
            <li>
                <a data-toggle="collapse" data-target="#slides">
                    <i class="fa fa-fw fa-gear"></i> Estadísticas
                </a>



            <li>
                <a href="Index.php?view_estadistics2"> Ventas</a>
            </li>

            <li>
                <a href="Index.php?view_estadistics3">Visitas</a>
            </li>
            <li>
                <a href="Index.php?EstadisticaOrden">Ordenes</a>
            </li>
            <li>
                <a href="Index.php?EstadisticaProducto">Productos</a>
            </li>
            <li><a href="Index.php?EstadisticaUsuario">Usuarios</a>
            </li>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_orders">
                    <i class="fa fa-fw fa-book"></i> Ver Ordenes
                </a>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_payments">
                    <i class="fa fa-fw fa-money"></i> Ver Pagos <span class="badge"><?php echo $count_pago; ?></span>
                </a>
            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="Index.php?view_users" data-toggle="collapse" data-target="#users">
                    <i class="fa fa-fw fa-users"></i> Administradores
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>

                    <li>
                        <a href="Index.php?insert_user">Insertar Admin. </a>
                    </li>
                    <li>
                        <a href="Index.php?view_users">Ver Admin.</a>
                    </li>
                    <li>
                        <a href="Index.php?user_profile=<?php echo $admin_id;?>">Editar Perfil Admin</a>
                    </li>

            </li>
            ///////////////////////////////////////////////////////////////////
            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i> Salir
                </a>
            </li>
            ///////////////////////////////////////////////////////////////////
        </ul>
    </div>
</nav>
<?php }


?>