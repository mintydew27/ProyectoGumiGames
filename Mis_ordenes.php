<center><!--  center Begin  -->

    <h1> My Orders </h1>

    <p class="lead"> Your orders on one place</p>

    <p class="text-muted">

        If you have any questions, feel free to <a href="Contactanos.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong>

    </p>

</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->

    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->

        <thead><!--  thead Begin  -->

        <tr><!--  tr Begin  -->

            <th> ON: </th>
            <th> Due Amount: </th>
            <th> Invoice No: </th>
            <th> Qty: </th>
            <th> Order Date:</th>
            <th>  </th>



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

                    <a href="Confirmar.php?order_id='<?php echo $order_id; ?>'" target="_blank" class="btn btn-primary btn-sm"> Confirm Paid </a>

                </td>

            </tr><!--  tr Finish  -->

        <?php } ?>

        </tbody><!--  tbody Finish  -->

    </table><!--  table table-bordered table-hover Finish  -->

</div><!--  table-responsive Finish  -->