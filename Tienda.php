
<?php

$active='Tienda.php';
include("includes/header.php");


?>



<div id="content"><!--Inicio content-->
    <div class="container"><!--Inicio container-->
        <div class="col-md-12"><!--Inicio col-md-12-->
            <ul class="breadcrumb"><!--Inicio Breadcrumb-->
                <li>
                    <a href="Index.php">Home</a>
                </li>
                <li>
                    Tienda
                </li>
            </ul><!--Final breadcrumb-->

        </div><!--Final col-md-12-->

        <div class="col-md-3"><!--Inicio col-md-3--->

            <?php
            include("includes/sidebar.php");
            include("includes/BD.php");
            ?>

        </div><!--Final col-md-3-->

        <div class="col-md-9"><!--Inicio col-md-9-->

            <?php
            if(!isset($_GET['p_gen'])) {
            if(!isset($_GET['cat'])) {
                echo "
            <div class='box'><!--Inicio box-->
                <h1>Tienda</h1>
                    <p>
                       Aqui podras encontrar una gran variedad de juegos.
                    </p>
            </div><!--Final box-->
            ";
            }
            }
            ?>

            <div class="row"><!--Inicio row-->
    <?php
                if(!isset($_GET['p_gen'])) {
                    if(!isset($_GET['cat'])) {
                $per_page=6;

                if(isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else{
                        $page=1;
                }

                    $start_from = ($page-1)* $per_page;
                    $get_products ="select * from Producto limit $start_from,$per_page";
                    $run_products=mysqli_query($con,$get_products);

                    while ($row_products=mysqli_fetch_array($run_products)){
                        $pro_id =$row_products['ProductoId'];
                        $pro_titulo =$row_products['ProductoTitulo'];
                        $pro_precio =$row_products['ProductoPrecio'];
                        $pro_imagen1 =$row_products['ProductoImagenUno'];
                        echo "
                        <div class='col-md-4 col-sm-6 center-responsive'>
                            <div class='product'>
                                    <a href='Detalles.php?pro_id=$pro_id'>  
                                            <img class='img-responsive' alt='Producto' src='admin_area/product_images/$pro_imagen1'>                                       
                                    </a>
                                        <div class='text'>
                                                       <h3> 
                                                                <a href='Detalles.php?pro_id=$pro_id'> $pro_titulo </a>
                                                       </h3>   
                                                       
                                                        <p class='price'>
                                                         $$pro_precio
                                                         </p> 
                                                         <p class='buttons'>
                                                <a class='btn btn-default' href='Detalles.php?pro_id=$pro_id'>
                                                Ver Detalles
                                                </a>
                                                  <a class='btn btn-primary' href='Detalles.php?pro_id=$pro_id'>
                                                <i class='fa fa-shopping-cart'></i> Añadir al carrito
                                                </a>
                                        </p>                             
                                        </div>
                                        
                            </div>
                        </div>                         
                        ";

                }
         ?>
        </div><!--Final row-->


            <!-- Para hacer la paginacion en la parte inferior de la pagina de Tienda.php-->

            <center>
                <ul class="pagination">
                    <?php

                    $query = "select * from Producto";

                    $result = mysqli_query($con,$query);

                    $total_records = mysqli_num_rows($result);

                    $total_pages = ceil($total_records / $per_page);

                    echo "
                        
                            <li>
                            
                                <a href='Tienda.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";

                    for($i=1; $i<=$total_pages; $i++){

                        echo "
                        
                            <li>
                            
                                <a href='Tienda.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";

                    };

                    echo "
                        
                            <li>
                            
                                <a href='Tienda.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                        
                        ";

                    }

                    }

                    ?>
                </ul>
            </center>


                <?php
                /*Este es para el tipo de categoria del producto y el segundo es para la categoria del producto como videojuego o consolas*/
                getpgenpro();
                getcatpro();


                ?>




            </div><!--Final de row-->






        </div><!--Final col-md-3-->

    </div><!--Final container-->
</div><!--Final content-->

<?php
include("includes/Footer.php");
?>
<!-- Librerias de los folders jquery para que funcione-->
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>