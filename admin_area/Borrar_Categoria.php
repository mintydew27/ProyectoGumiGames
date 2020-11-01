<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <?php

    if(isset($_GET['delete_cat'])){

        $delete_cat_id = $_GET['delete_cat'];

        $delete_cat = "delete from Categoria where CategoriaId='$delete_cat_id'";

        $run_delete = mysqli_query($con,$delete_cat);

        if($run_delete){

            echo "<script>alert('Una de tus Categorias ha sido Eliminada')</script>";

            echo "<script>window.open('Index.php?view_cats','_self')</script>";

        }

    }

    ?>




<?php } ?>
