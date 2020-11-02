<?php

include("includes/BD.php");
include("functions/functions.php");

?>
<?php

if(isset($_GET['c_id'])){

    $customer_id = $_GET['c_id'];

}

$ip_add = getRealIpUser();

$status = "pending";

$invoice_no = mt_rand();

$select_cart = "select * from Carrito where AddIp='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

    $pro_id = $row_cart['CarritoId'];

    $pro_qty = $row_cart['CarritoCantidad'];

    $get_products = "select * from Producto where ProductoId='$pro_id'";

    $run_products = mysqli_query($con,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){

        $sub_total = $row_products['ProductoPrecio'];

        $insert_customer_order = "insert into ClienteOrden (ClienteId,ClienteOrdenCantidadDeber,FacturaNumero,ClienteOrdenCantidad,ClienteOrdenFecha,ClienteOrdenEstado) values ('$customer_id','$sub_total','$invoice_no','$pro_qty',NOW(),'$status')";

        $run_customer_order = mysqli_query($con,$insert_customer_order);

        $insert_pending_order = "insert into OrdenPendiente (ClienteId,FacturaNumero,ProductoId,OrdenPendienteCantidad,OrdenPendienteEstado) values ('$customer_id','$invoice_no','$pro_id','$pro_qty','$status')";

        $run_pending_order = mysqli_query($con,$insert_pending_order);

        $delete_cart = "delete from Carrito where AddIp='$ip_add'";

        $run_delete = mysqli_query($con,$delete_cart);

        echo "<script>alert('Your orders has been submitted, Thanks')</script>";

        echo "<script>window.open('Mi_cuenta.php?mis_ordenes','_self')</script>";

    }

}

?>