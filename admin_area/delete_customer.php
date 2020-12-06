<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['delete_customer'])){

        $delete_id = $_GET['delete_customer'];

        $delete_customer = "delete from Cliente where ClienteId='$delete_id'";

        $run_delete = mysqli_query($con,$delete_customer);

        if($run_delete){

            echo "<script>alert('Se ha eliminado un cliente')</script>";

            echo "<script>window.open('Index.php?view_customers','_self')</script>";

        }

    }

    ?>

<?php } ?>