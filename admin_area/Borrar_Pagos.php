<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['delete_payment'])){

        $delete_payment_id = $_GET['delete_payment'];

        $delete_payment = "delete from Pago where PagoId='$delete_payment_id'";

        $run_delete = mysqli_query($con,$delete_payment);

        if($run_delete){

            echo "<script>alert('One of Your Payment Has Been Deleted')</script>";

            echo "<script>window.open('Index.php?view_payments','_self')</script>";

        }

    }

    ?>




<?php } ?>
