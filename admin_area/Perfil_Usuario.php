
<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->

                <i class="fa fa-dashboard"></i> Dashboard / User Profile

            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->

                    <i class="fa fa-tags"></i>  View Profile

                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->

<div class="col-md-4">
    <div class="panel"><!--Inicio panel -->
        <div class="panel-body"><!--Inicio panel-body-->
            <div class="mb-md thumb-info"><!--Inicio mb-md thumb-info-->
                <img src="admin_images/<?php echo $admin_image; ?>" alt="admin-thumb-info" class="img-rounded img-responsive">
                <div class="thumb-info-title"><!--Inicio thumb-info-title-->
                    <i class="fa fa-user"></i><span > Nombre: </span> <?php echo $admin_name; ?></br>
                    <i class="fa fa-paw"></i><span > Rol: </span><?php echo $admin_rol; ?></br>

                </div><!--Final thumb-info-title-->

            </div><!--Final mb-md thumb-info-->

            <div class="mb-md"><!--Inicio mb-md-->
                <div class="widget-content-expanded"><!--Inicio widget-content-expanded-->
                    <i class="fa fa-envelope"></i> <span> Email: </span> <?php echo $admin_email; ?></br>
                    <i class="fa fa-flag"></i> <span> Pais: </span> <?php echo $admin_country; ?></br>
                    <i class="fa fa-user"></i> <span> Telefono:</span><?php echo $admin_contact; ?></br>
                </div><!--Final widget-content-expanded-->
                <hr class="dotted short">

                <h5 class="text-muted"> Acerca de mi </h5>

                <p>
                    <?php echo $admin_desc; ?>
                </p>

            </div><!--Final mb-md-->

        </div><!--Final panel-body-->
    </div><!--Final panel -->
</div>
            </div>