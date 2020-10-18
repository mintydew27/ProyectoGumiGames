<?php
session_start();
include("includes/BD.php");
include_once("functions/functions.php");

?>


<?php

if(isset($_GET['c_id'])){
    $customer_id = $_GET['c_id'];
}
$ip_add = getRealIpUser();
$estado="Pendiente";
$factura_no = mt_rand();
$select_carrito = "select * from carrito where ip_add='$ip_add'";
$run_carrito=mysqli_query($con,$select_carrito);

while($row_carrito = mysqli_fetch_array($run_carrito)){

    $pro_id = $row_carrito['p_id'];
    $pro_qty = $row_carrito['qty'];
    $pro_estado = $row_carrito['estado'];
    $get_productos = "select * from productos where producto_id ='$pro_id'";
    $run_productos = mysqli_query($con, $get_productos);

    while($row_productos = mysqli_fetch_array($run_productos)){
        $sub_total = $row_productos['producto_precio'] * $pro_qty;
        $insert_cliente_orden = "insert into clientes_pedidos (cliente_id, cantidad_a_deber, factura_no, qty, estado, fecha_orden, estado_del_pedido) values 
        ('$customer_id','$sub_total','$factura_no','$pro_qty','$pro_estado',NOW(),'$estado')";
        $run_cliente_orden = mysqli_query($con, $insert_cliente_orden);
        $insert_orden_pendiente = "insert into ordenes_pendientes (cliente_id,factura_no, producto_id, qty, estado, estado_del_pedido) values
        ('$customer_id','$factura_no','$pro_id','$pro_qty','$pro_estado','$estado')";
        $run_orden_pendiente =mysqli_query($con, $insert_orden_pendiente) ;
        $delete_carrito = "delete from carrito where ip_add='$ip_add'";
        $run_delete = mysqli_query($con, $delete_carrito);
        echo "<script>alert ('Tu orden a sido enviada..Gracias')</script>";
        echo "<script>window.open('Mi_cuenta.php?mis_ordenes','_self')</script>";
    }

}


?>
