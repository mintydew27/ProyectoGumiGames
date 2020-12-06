<center><!--  center Begin  -->

    <h1> Mis ordenes </h1>

    <p class="lead"> Tus ordenes en un solo lugar</p>

    <p class="text-muted">

        Si tiene alguna pregunta, no dude en <a href="Contactanos.php">Contactarnos</a>. Nuestro trabajo de servicio al cliente es <strong>24/7</strong>

    </p>

</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->

    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->

        <thead><!--  thead Begin  -->

        <tr><!--  tr Begin  -->

            <th> Numero: </th>
            <th> Cantidad a deber: </th>
            <th> Factura núm.: </th>
            <th> Cantidad: </th>
            <th> Fecha de orden:</th>
            <th> Pagar con Paypal: </th>
            <th> Otros métodos de pago: </th>



        </tr><!--  tr Finish  -->

        </thead><!--  thead Finish  -->

        <tbody><!--  tbody Begin  -->

        <?php

        $customer_session = $_SESSION['ClienteCorreo'];

        $get_customer = "select * from Cliente where ClienteCorreo='$customer_session'";

        $run_customer = mysqli_query($con,$get_customer);

        $row_customer = mysqli_fetch_array($run_customer);

        $customer_id = $row_customer['ClienteId'];

        $get_orders = "select * from Orden where ClienteId='$customer_id'";

        $run_orders = mysqli_query($con,$get_orders);





        $i = 0;

        while($row_orders = mysqli_fetch_array($run_orders)){

            $order_id = $row_orders['OrdenId'];

            $invoice_no = $row_orders['FacturaNumero'];
            $pro_id = $row_orders['ProductoId'];
            $qty= $row_orders['OrdenCantidad'];
            $due_amount = $row_orders['OrdenCantidadDeber'];
            $order_date = substr($row_orders['OrdenFecha'],0,11);


            $i++;


            ?>

            <tr><!--  tr Begin  -->

                <th> <?php echo $i; ?> </th>
                <td> <?php echo $due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $order_date; ?> </td>

                <td>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="J5U3EKWKDNQFE">
                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </td>


                <td>

                    <a href="Confirmar.php?order_id='<?php echo $order_id; ?>'" target="_blank" class="btn btn-primary btn-sm"> Comprar ahora </a>

                </td>

            </tr><!--  tr Finish  -->

        <?php } ?>

        </tbody><!--  tbody Finish  -->

    </table><!--  table table-bordered table-hover Finish  -->

</div><!--  table-responsive Finish  -->