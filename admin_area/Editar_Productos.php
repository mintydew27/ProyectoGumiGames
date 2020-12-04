<?php
if (!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";
}else{

    ?>
        <?php
            if (isset($_GET['edit_product'])){
                $edit_id = $_GET['edit_product'];
                $get_p = "select * from producto where ProductoId='$edit_id'";
                $run_edit = mysqli_query($con,$get_p);
                $row_edit = mysqli_fetch_array($run_edit);
                $p_id = $row_edit['ProductoId'];
                $p_titulo = $row_edit['ProductoTitulo'];
                $p_cat = $row_edit['GeneroId'];
                $cat = $row_edit['CategoriaId'];
                $p_image1 = $row_edit['ProductoImagenUno'];
                $p_image2 = $row_edit['ProductoImagenDos'];
                $p_image3 = $row_edit['ProductoImagenTres'];
                $p_cantidad = $row_edit['ProductoCantidad'];
                $p_price = $row_edit['ProductoPrecio'];
                $p_keywords = $row_edit['ProductoPalabraClave'];
                $p_desc = $row_edit['ProductoDescripcion'];
            }
                $get_p_genero = "select * from genero where GeneroId='$p_cat'";
            $run_p_genero = mysqli_query($con,$get_p_genero);
            $row_p_genero = mysqli_fetch_array($run_p_genero);
            $p_genero_titulo = $row_p_genero['GeneroTitulo'];


            $get_cat = "select * from categoria where CategoriaId='$cat'";
            $run_cat = mysqli_query($con,$get_cat);
            $row_cat = mysqli_fetch_array($run_cat);
            $cat_titulo = $row_cat['CategoriaTitulo'];


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

                    <i class="fa fa-dashboard"></i> Tablero / Editar Producto


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

                                    <input name="Producto_Titulo"type="text" class="form-control" maxlength="40" required pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" title="Solo se admiten letras" required value="<?php echo $p_titulo; ?>">

                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Genero del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->
                                    <select name="Producto_Genero" class="form-control"><!--Inicio form-control-->

                                        <option value="<?php echo $p_cat; ?>"> <?php echo $p_genero_titulo; ?></option>
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

                                        <option value="<?php echo $cat; ?>"><?php echo $cat_titulo; ?></option>
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
                                        <br>

                                    <img height="90" width="90" src="product_images/<?php echo $p_image1; ?>" alt="<?php echo $p_titulo; ?>">
                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Imagen 2 del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="ProductoImagenDos"type="file" class="form-control" >
                                    <br>

                                    <img height="90" width="90" src="product_images/<?php echo $p_image2; ?>" alt="<?php echo $p_titulo; ?>">

                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Imagen 3 del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="ProductoImagenTres"type="file" class="form-control" >
                                    <br>

                                    <img height="90" width="90" src="product_images/<?php echo $p_image3; ?>" alt="<?php echo $p_titulo; ?>">
                                </div><!--Final col-md-6-->
                            </div>



                            <div class="form-group">
                                <label class="col-md-3 control-label">Cantidad de Productos disponibles</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <div class="col-md-6"><!--Inicio col-md-6-->

                                        <select name="Producto_Cantidad" id="" class="form-control">
                                            <option ><?php echo $p_cantidad; ?></option>

                                        </select><!--Final select-->

                                    </div><!--Final col-md-6-->


                                </div><!--Final col-md-6-->
                            </div>




                            <div class="form-group">
                                <label class="col-md-3 control-label">Precio del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="Producto_Precio" type="number" min="1" class="form-control" required value="<?php echo $p_price; ?>">

                                </div><!--Final col-md-6-->
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">Palabras clave del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="Producto_Palabra_Clave"type="text" class="form-control" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1 ]+" required value="<?php echo $p_keywords; ?>">

                                </div><!--Final col-md-6-->
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Descripción del Producto</label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <textarea name="Producto_Descripcion" cols="19" rows="6" class="form-control">
                                        <?php echo $p_desc; ?>
                                    </textarea>

                                </div><!--Final col-md-6-->
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6"><!--Inicio col-md-6-->

                                    <input name="update" value="Actualizar un Producto" type="submit" class="btn btn-primary form-control">
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
    if(isset($_POST['update'])){

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

        $update_product = "update Producto set ProductoTitulo='$producto_titulo',ProductoImagenUno='$producto_img1',ProductoImagenDos='$producto_img2', ProductoImagenTres='$producto_img3',ProductoPalabraClave='$palabras_clave_producto',Date=NOW(),ProductoDescripcion='$descripcion_producto',GeneroId='$producto_genero',CategoriaId='$cat',ProductoPrecio='$precio_producto',ProductoCantidad='$cantidad_de_producto' where ProductoId='$p_id'";
        $run_product = mysqli_query($con,$update_product);
        if ($run_product){
            echo "<script>alert('Su producto ha sido actualizado satisfactoriamente')</script>";
            echo "<script>window.open('Index.php?view_products','_self')</script>";
        }
    }
    ?>

    <?php
}
?>