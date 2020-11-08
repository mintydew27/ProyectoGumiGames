<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['delete_order'])){

        $delete_id = $_GET['delete_order'];

        $delete_order = "delete from Orden where OrdenId='$delete_id'";

        $run_delete = mysqli_query($con,$delete_order);

        if($run_delete){

            echo "<script>alert('One of your costumer order has been Deleted')</script>";

            echo "<script>window.open('Index.php?view_orders','_self')</script>";

        }

    }

    ?>

<?php } ?>
