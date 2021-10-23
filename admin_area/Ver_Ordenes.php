<?php
$active='Ver_Ordenes.php';
include_once("../functions/functions.php");
if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li class="active"><!-- active begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / View Orders

                </li><!-- active finish -->
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <script language="javascript">
        function doSearch() {
            var tableReg = document.getElementById('regTable');
            var searchText = document.getElementById('searchTerm').value.toLowerCase();
            for (var i = 1; i < tableReg.rows.length; i++) {
                var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                var found = false;
                for (var j = 0; j < cellsOfRow.length && !found; j++) {
                    var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                        found = true;
                    }
                }
                if (found) {
                    tableReg.rows[i].style.display = '';
                } else {
                    tableReg.rows[i].style.display = 'none';
                }
            }
        }
    </script>

    Buscar: <input id="searchTerm" type="text" onkeyup="doSearch()" />





    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags"></i>  View Orders

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <div class="table-responsive"><!-- table-responsive begin -->
                        <table id="regTable" class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->

                            <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th>
                                <th> Order Date: </th>
                                <th> Total Amount: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                            </thead><!-- thead finish -->

                            <tbody><!-- tbody begin -->

                            <?php

                            $i=0;

                            $get_orders = "select * from Orden";

                            $run_orders = mysqli_query($con,$get_orders);

                            while($row_order=mysqli_fetch_array($run_orders)){

                                $order_id = $row_order['OrdenId'];

                                $c_id = $row_order['ClienteId'];

                                $invoice_no = $row_order['FacturaNumero'];

                                $product_id = $row_order['ProductoId'];

                                $qty = $row_order['OrdenCantidad'];

                                $order_amount = $row_order['OrdenCantidadDeber'];

                                $order_date = $row_order['OrdenFecha'];

                                $get_products = "select * from Producto where ProductoId='$product_id'";

                                $run_products = mysqli_query($con,$get_products);

                                $row_products = mysqli_fetch_array($run_products);

                                $product_title = $row_products['ProductoTitulo'];

                                $get_customer = "select * from Cliente where ClienteId='$c_id'";

                                $run_customer = mysqli_query($con,$get_customer);

                                $row_customer = mysqli_fetch_array($run_customer);

                                $customer_email = $row_customer['ClienteCorreo'];


                                $i++;

                                ?>

                                <tr><!-- tr begin -->
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $customer_email; ?> </td>
                                    <td> <?php echo $invoice_no; ?></td>
                                    <td> <?php echo $product_title; ?> </td>
                                    <td> <?php echo $qty; ?></td>
                                    <td> <?php echo $order_date; ?> </td>
                                    <td> <?php echo $order_amount; ?> </td>
                                    <td>

                                        <a href="Index.php?delete_order=<?php echo $order_id; ?>">

                                            <i class="fa fa-trash-o"></i> Delete

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





