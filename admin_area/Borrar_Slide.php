<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['delete_slide'])){

        $delete_slide_id = $_GET['delete_slide'];

        $delete_slide = "delete from Carrusel where CarruselId='$delete_slide_id'";

        $run_delete = mysqli_query($con,$delete_slide);

        if($run_delete){

            echo "<script>alert('Uno de tus slides ha sido eliminada')</script>";

            echo "<script>window.open('index.php?view_slides','_self')</script>";

        }

    }

    ?>




<?php } ?>