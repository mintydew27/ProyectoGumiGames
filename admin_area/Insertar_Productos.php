
<?php
if (!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";
}else{

?>
<!--Esto es para insertar los productos de manera dinamica desde una pagina-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Productos</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">


</head>
<body>

<div class="row"><!--Inicio de row-->

     <div class="col-lg-12"><!--Inicio de col-lg-12-->
         <ol class="breadcrumb"><!--Inicio de breadcrumb-->

            <li class="active"><!--Inicio de active-->

                <i class="fa fa-dashboard"></i> Tablero / Insertar Producto


            </li><!--Final de active-->



         </ol><!--Final de breadcrumb-->

     </div><!--Final de col-lg-12-->


</div><!--Final de row-->

<!--Esto es para hacer el formulario en donde ingresaremos los datos-->

<div class="row"><!--Inicio de row-->
    <div class="col-lg-12"><!--Inicio de col-lg-12-->

        <div class="panel panel-default"><!--Inicio de col-lg-12-->

            <div class="panel-heading"><!--Inicio panel-heading-->

                <h3 class="panel-title"><!--panel-title-->

                    <i class="fa fa-money fa-fw"></i> Insertar Producto<!--Inicio fa fa-money fa-fw-->

                        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data"><!--Inicio form-horizontal-->



                            <div class="form-group">
                            <label class="col-md-3 control-label">Titulo del Producto</label>
                            <div class="col-md-6"><!--Inicio col-md-6-->

                                <input name="Producto_Titulo"type="text" class="form-control" minlength="5" maxlength="40" required pattern="[A-Za-z]+" title="Solo se admiten letras" >

                            </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Genero del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->
                                    <select name="Producto_Genero" class="form-control"><!--Inicio form-control-->

                                        <option >Selecciona el genero del Producto</option>
                                        <?php

                                        $get_p_genero="select * from Genero";
                                        $run_p_genero = mysqli_query($con,$get_p_genero);

                                        while($row_p_cats=mysqli_fetch_array($run_p_genero)){
                                            $p_genero_id=$row_p_cats['GeneroId'];
                                            $p_genero_titulo=$row_p_cats['GeneroTitulo'];

                                            echo"
                                            
                                            <option value='$p_genero_id'> $p_genero_titulo</option>
                                 
                                            
                                            ";

                                        }
                                        ?>

                                    </select><!--Final form-control-->

                                </div><!--Final col-md-6-->
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">Categorias</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->
                                    <select name="Categoria" class="form-control"><!--Inicio form-control-->

                                        <option >Selecciona la Categoria</option>
                                        <?php

                                        $get_cat="select * from Categoria";
                                        $run_cat = mysqli_query($con,$get_cat);

                                        while($row_cat=mysqli_fetch_array($run_cat)){
                                            $categoria_id=$row_cat['CategoriaId'];
                                            $categoria_titulo=$row_cat['CategoriaTitulo'];

                                            echo"
                                            
                                            <option value='$categoria_id'> $categoria_titulo</option>
                                 
                                            
                                            ";

                                        }




                                        ?>



                                    </select><!--Final form-control-->

                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Imagen 1 del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="ProductoImagenUno"type="file" class="form-control" required>

                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Imagen 2 del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="ProductoImagenDos"type="file" class="form-control" >

                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Imagen 3 del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="ProductoImagenTres"type="file" class="form-control" >

                                </div><!--Final col-md-6-->
                            </div>



                            <div class="form-group">
                                <label class="col-md-3 control-label">Cantidad de Productos disponibles</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                        <select name="Producto_Cantidad" id="" class="form-control">
                                            <option >1</option>

                                        </select><!--Final select-->

                                </div><!--Final col-md-6-->
                            </div>




                            <div class="form-group">
                                <label class="col-md-3 control-label">Precio del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="Producto_Precio"type="number" class="form-control" min="1" required >

                                </div><!--Final col-md-6-->
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">Palabras clave del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="Producto_Palabra_Clave"type="text" class="form-control" required>

                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Descripción del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <textarea name="Producto_Descripcion" cols="19" rows="6" class="form-control"></textarea>

                                </div><!--Final col-md-6-->
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="submit" value="Insertar un Producto" type="submit" class="btn btn-primary form-control">
                                </div><!--Final col-md-6-->
                            </div>




                        </form><!--Final form-horizontal-->

                </h3><!--Final panel-title-->


            </div><!--Final panel-heading-->


        </div><!--Final de col-lg-12-->


    </div><!--Final de col-lg-12-->




</div><!--Final de row-->

<script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</body>
</html>


<!--Esto es para que el boton submit funcione-->



<?php
if(isset($_POST['submit'])){

    $producto_titulo= $_POST['Producto_Titulo'];
    $producto_genero= $_POST['Producto_Genero'];
    $cat= $_POST['Categoria'];
    $precio_producto= $_POST['Producto_Precio'];
    $palabras_clave_producto= $_POST['Producto_Palabra_Clave'];
    $descripcion_producto= $_POST['Producto_Descripcion'];
    $cantidad_de_producto = $_POST['Producto_Cantidad'];


    $producto_img1= $_FILES['ProductoImagenUno']['name'];
    $producto_img2= $_FILES['ProductoImagenDos']['name'];
    $producto_img3= $_FILES['ProductoImagenTres']['name'];

    $temp_name1= $_FILES['ProductoImagenUno']['tmp_name'];
    $temp_name2= $_FILES['ProductoImagenDos']['tmp_name'];
    $temp_name3= $_FILES['ProductoImagenTres']['tmp_name'];

    /*Esto es para mover las imagenes a la ruta que queramos*/

    move_uploaded_file($temp_name1,"product_images/$producto_img1");
    move_uploaded_file($temp_name2,"product_images/$producto_img2");
    move_uploaded_file($temp_name3,"product_images/$producto_img3");





$insert_producto = "INSERT INTO Producto(ProductoTitulo,ProductoImagenUno,ProductoImagenDos,ProductoImagenTres,ProductoPalabraClave,Date,ProductoDescripcion,GeneroId,CategoriaId,ProductoPrecio,ProductoCantidad) 
VALUES ('$producto_titulo','$producto_img1','$producto_img2','$producto_img3','$palabras_clave_producto',NOW(),'$descripcion_producto','$producto_genero','$cat','$precio_producto','$cantidad_de_producto')";

$run_product = mysqli_query($con,$insert_producto) or die($insert_producto);

if($run_product) {

    echo "<script>alert('El producto fue agregado satisafctoriamente')</script>";
    echo "<script>window.open('Index.php?view_products','_self')</script>";
}
else {
    echo "<script>alert('No se pudo')</script>";

}


}


?>

<?php
}
?>



