<?php
if (!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";
}else{

    ?>
    <div class="row"> <!-- Row start-->
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / View Products log
                </li>
            </ol>
        </div>
    </div> <!-- Row end-->

    <div class="row"> <!-- Row 2 start-->
        <div class="col-lg-12">
            <ol class="panel panel-default">
                <div class="pannel-heading"> <!-- Heading start-->
                    <h3 class="panel-title">
                        <i class="fa fa-tags"></i> View Log
                    </h3>
                </div> <!-- Heading end-->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead> <!-- THead start-->
                            <tr>
                                <th>Log ID: </th>
                                <th>Producto ID: </th>
                                <th>Nombre del Producto: </th>
                                <th>Fecha de Log: </th>
                                <th>Acción Realizada </th>
                                <th>Nombre del Empleado </th>
                            </tr>
                            </thead><!-- THead end-->

                            <tbody>
                            <?php
                            $i=0;
                            $get_bit = "select * from bitacoraproducto";
                            $run_bit = mysqli_query($con,$get_bit);
                            while($row_bit=mysqli_fetch_array($run_bit)){
                                $bit_id = $row_bit['EntradaId'];
                                $bit_pro_id = $row_bit['IdProducto'];
                                $bit_pro_titulo = $row_bit['NombreProducto'];
                                $bit_fecha = $row_bit['FechaEntrada'];
                                $bit_accion = $row_bit['AccionProducto'];
                                $bit_empleado = $row_bit['EmpleadoNombre'];
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $bit_pro_id; ?></td>
                                    <td><?php echo $bit_pro_titulo; ?></td>
                                    <td><?php echo $bit_fecha; ?></td>
                                    <td><?php echo $bit_accion; ?></td>
                                    <td><?php echo $bit_empleado; ?></td>
                                </tr>
                            <?php } ?>


                            </tbody>

                        </table>
                    </div>
                </div>

            </ol>
        </div>
    </div><!-- Row 2 end-->
<?php }?>
