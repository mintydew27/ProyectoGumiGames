<center><!--Inicio center-->
    <h1>Mis Ordenes</h1>
    <p class="lead">Tus ordenes en un solo lugar. </p>
    <p class="text-muted">
        Cualquier duda o sugerencia <a href="Contactanos.php">Contactanos</a>. Nuestro servicio al cliente trabaja <strong>24/7</strong>
    </p>
</center><!--Final center-->

<hr>

<div class="table-responsive"><!--Inicio table-responsive-->

    <table class="table table-bordered table-hover"><!--Inicio table table-bordered table-hover-->

        <thead><!--Inicio thead-->
            <tr><!--Inicio tr-->

                <th> ON: </th>
                <th> Cantidad a deber: </th>
                <th> Numero Factura: </th>
                <th> Cantidad: </th>
                <th> Estado: </th>
                <th> Fecha de Orden:</th>
                <th> Pagado/ Sin Pagar: </th>
                <th> Status: </th>

            </tr><!--Final tr-->
        </thead><!--Final thead-->

        <tbody>

        <!--?php
        $cliente_sesion = $_SESSION['ClienteCorreo'];
        $get_cliente = "select * from Cliente where ClienteCorreo='$cliente_sesion'";
        $run_cliente = mysqli_query($con,$get_cliente);
        $row_ciente = mysqli_fetch_array($run_cliente);
        $cliente_id = $row_ciente['ClienteId'];
        $get_ordenes= "select * from clientes_pedidos where ClienteId='$cliente_id'";
        $run_ordenes = mysqli_query($con,$get_ordenes);

        $i = 0;
        while($row_ordenes = mysqli_fetch_array($run_ordenes)){
            $orden_id = $row_ordenes['orden_id'];
            $cantidad_a_deber = $row_ordenes['cantidad_a_deber'];
            $factura_no = $row_ordenes['factura_no'];
            $qty = $row_ordenes['qty'];
            $estado = $row_ordenes['estado'];

            $fecha_orden = substr($row_ordenes['fecha_orden'],0,11);
            $estado_del_pedido= $row_ordenes['estado_del_pedido'];
            $i++;
            if($estado_del_pedido=='pending'){
                $estado_del_pedido='No pagado';


            }else {
                $estado_del_pedido='Pagado';

            }

            ?-->


        <!--
            <tr>

                <th> <-?php echo $i;?></th>

                <td> <-?php echo $cantidad_a_deber;?> </td>
                <td> <-?php echo $factura_no;?></td>
                <td> <-?php echo $qty;?></td>
                <td> <-?php echo $estado;?> </td>
                <td> <-?php echo $fecha_orden;?></td>
                <td> <-?php echo $estado_del_pedido;?></td>

                <td>

                    <a href="Confirmar.php" target="_blank" class="btn btn-primary btn-sm"> Confirmar pago</a>

                </td>

            </tr>
-->
        <!--?php}
        ?-->



        </tbody>

    </table><!--Final table table-bordered table-hover-->

</div><!--Final table-responsive-->