<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['borrar_genero'])){

        $delete_p_genero_id = $_GET['borrar_genero'];

        $delete_p_genero = "delete from Genero where GeneroId='$delete_p_genero_id'";

        $run_delete = mysqli_query($con,$delete_p_genero);

        if($run_delete){

            echo "<script>alert('Uno de tus Generos de Producto ha sido borrado satisfactoriamente!')</script>";

            echo "<script>window.open('Index.php?view_genero','_self')</script>";

        }

    }

    ?>




<?php } ?>
