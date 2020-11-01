<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['delete_user'])){

        $delete_user_id = $_GET['delete_user'];

        $delete_user = "delete from administrador where AdministradorId='$delete_user_id'";

        $run_delete = mysqli_query($con,$delete_user);

        if($run_delete){

            echo "<script>alert('Un Administrador ha sido eliminado')</script>";

            echo "<script>window.open('index.php?view_users','_self')</script>";

        }

    }

    ?>

<?php } ?>