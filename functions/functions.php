<?php
$db = mysqli_connect("localhost","root","","gumigames");


function getRealIpUser(){

    switch(true){

        case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default : return $_SERVER['REMOTE_ADDR'];

    }

}
//Inicio de la funcion dinamica del boton de agregar al carrito para que agregara el pedido a la tabla carrito de la base de datos//
function add_cart(){

    global $db;

    if(isset($_GET['add_cart'])){

        $ip_add = getRealIpUser();

        $p_id = $_GET['add_cart'];

        $product_qty = $_POST['product_qty'];

        $check_product = "select * from Carrito where AddIp='$ip_add' AND CarritoId='$p_id' ";

        $run_check = mysqli_query($db,$check_product);


        if(mysqli_num_rows($run_check)>0){

            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('Detalles.php?pro_id=$p_id','_self')</script>";


        }else{


            $query = "insert into Carrito (CarritoId,AddIp,CarritoCantidad)values('$p_id','$ip_add','$product_qty')";
            $run_query = mysqli_query($db,$query);


            echo "<script>window.open('Detalles.php?pro_id=$p_id','_self')</script>";

        }

    }

}




//Esto funcion es para hacer dinamico la parte de Detalles con el titulo precio imagen del producto//
function getPro(){
    global $db;
    $get_products = "select * from Producto";
    $run_products= mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
            $pro_id =$row_products['ProductoId'];
            $pro_titulo =$row_products['ProductoTitulo'];
            $pro_precio =$row_products['ProductoPrecio'];
            $pro_imagen1 =$row_products['ProductoImagenUno'];

            echo"
            <div class='col-md-4 col-sm-6 single'>
                <div class='product'>
                <a href='Detalles.php?pro_id=$pro_id''>
                    <img class='img-responsive' src='admin_area/product_images/$pro_imagen1'>
                </a>
                
                        <div class='text'>
                            
                            <h3>
                                 <a href='Detalles.php?pro_id=$pro_id''>
                                 
                                    $pro_titulo
                                                                        
                                 </a>
                            </h3>
                            
                            <p class='price'>
                            $ $pro_precio
                            </p>
                            
                            <p class='button'>
                           
                            <a class='btn btn-default' href='Detalles.php?pro_id=$pro_id''>
                                 
                                    Ver Detalles
                                                                        
                                 </a>
                                 
                                 <a class='btn btn-primary' href='Detalles.php?pro_id=$pro_id''>
                                 
                                    <i class='fa fa-shopping-cart'></i> Agregar al carrito
                                                                        
                                 </a>
                                 
                            </p>
                            
                            
                        </div>
                </div>
            </div>
            ";
    }
}

//getPCats

function getPGenero(){
    global $db;
    $get_p_genero = "select * from Genero";
    $run_p_genero= mysqli_query($db,$get_p_genero);
while($row_p_genero=mysqli_fetch_array($run_p_genero)){
    $p_genero_id =$row_p_genero['GeneroId'];
    $p_genero_titulo =$row_p_genero['GeneroTitulo'];
        echo" <li>
                <a href='Tienda.php?p_cat=$p_genero_id'> $p_genero_titulo </a>
               </li>
               ";
}
}

function getCats(){
    global $db;
    $get_cats = "select * from Categoria";
    $run_cats= mysqli_query($db,$get_cats);
    while($row_cats=mysqli_fetch_array($run_cats)){
        $cat_id =$row_cats['CategoriaId'];
        $cat_titulo =$row_cats['CategoriaTitulo'];
        echo" <li>
                <a href='Tienda.php?cat=$cat_id'> $cat_titulo </a>
               </li>
               ";
    }
}

///final getCat Funciones///

/// Inicio getcatpro functions///
/// Para  hacer dinamico los tipos de categorias con los tipos de productos de la barra izquierda de Tienda.php///
//getpcatpro
function getpgenpro(){

    global $db;

    if(isset($_GET['p_cat'])) {

        $p_genero_id = $_GET['p_cat'];
        $get_p_genero = "select * from Genero where GeneroId='$p_genero_id'";
        $run_p_genero = mysqli_query($db, $get_p_genero);
        $row_p_genero = mysqli_fetch_array($run_p_genero);
        $p_genero_title = $row_p_genero['GeneroTitulo'];
        $p_genero_desc = $row_p_genero['GeneroDescripcion'];
        $get_products = "select * from Producto where GeneroId='$p_genero_id'";
        $run_products = mysqli_query($db, $get_products);
        $count = mysqli_num_rows($run_products);
        if ($count == 0) {
            echo "
            
            <div class = 'box'>   
            
            <hi> No se encontraron productos en esta categoría :(</hi>
            
            </div>
           
            ";

        } else {
            echo "
              <div class = 'box'>   
            
            <hi> $p_genero_title</hi>
            
            <p> $p_genero_desc </p>
            
            </div>
            
            
            
            
            ";

        }
        while ($row_products = mysqli_fetch_array($run_products)) {

            $pro_id = $row_products['ProductoId'];

            $pro_titulo = $row_products['ProductoTitulo'];

            $pro_precio = $row_products['ProductoPrecio'];

            $pro_imagen1 = $row_products['ProductoImagenUno'];

            echo

            "
              <div class='col-md-4 col-sm-6 center-responsive'>
                <div class='product'>
                <a href='Detalles.php?pro_id=$pro_id''>
                    <img class='img-responsive' src='admin_area/product_images/$pro_imagen1'>
                </a>
                
                        <div class='text'>
                            
                            <h3>
                                 <a href='Detalles.php?pro_id=$pro_id''>
                                 
                                    $pro_titulo
                                                                        
                                 </a>
                            </h3>
                            
                            <p class='price'>
                            $ $pro_precio
                            </p>
                            
                            <p class='button'>
                           
                            <a class='btn btn-default' href='Detalles.php?pro_id=$pro_id''>
                                 
                                    Ver Detalles
                                                                        
                                 </a>
                                 
                                 <a class='btn btn-primary' href='Detalles.php?pro_id=$pro_id''>
                                 
                                    <i class='fa fa-shopping-cart'></i> Agregar al carrito
                                                                        
                                 </a>
                                 
                            </p>
                            
                            
                        </div>
                </div>
            </div>
              
            ";


        }


    }
}
///Final getcatpro functions///
/// Para obtener las categorias de los productos como videojuegos o consolas///
//getcatpro
function getcatpro()
{
    global $db;
    if (isset($_GET['cat'])) {

        $cat_id = $_GET['cat'];

        $get_cat = "select * from Categoria where CategoriaId='$cat_id'";

        $run_cat = mysqli_query($db, $get_cat);

        $row_cat = mysqli_fetch_array($run_cat);

        $cat_title = $row_cat['CategoriaTitulo'];
        $cat_desc = $row_cat['CategoriaDescripcion'];
        $get_cat = "select * from Producto where GeneroId='$cat_id'";
        $run_products = mysqli_query($db, $get_cat);
        $count = mysqli_num_rows($run_products);
        if ($count == 0) {

            echo "
            
            <div class= 'box'>
            <hi>No se encontraron productos en esta categoria :(</hi>
           
            </div>
        
            ";
        } else {
            echo "
            <div class='box'>
                <h1>$cat_title</h1>
                <p>$cat_desc</p>  
            
             </div>
            
            ";


        }

        while ($row_products = mysqli_fetch_array($run_products)) {


            $pro_id = $row_products['ProductoId'];

            $pro_titulo = $row_products['ProductoTitulo'];

            $pro_precio = $row_products['ProductoPrecio'];

            $pro_imagen1 = $row_products['ProductoImagenUno'];


            echo "
            <div class='col-md-4 col-sm-6 center-responsive'>
                <div class='product'>
                <a href='Detalles.php?pro_id=$pro_id''>
                    <img class='img-responsive' src='admin_area/product_images/$pro_imagen1'>
                </a>
                
                        <div class='text'>
                            
                            <h3>
                                 <a href='Detalles.php?pro_id=$pro_id''>
                                    $pro_titulo                                      
                                 </a>
                            </h3>
                            
                            <p class='price'>
                            $ $pro_precio
                            </p>
                            
                            <p class='button'>
                           
                            <a class='btn btn-default' href='Detalles.php?pro_id=$pro_id''>
                                 
                                    Ver Detalles
                                                                        
                                 </a>
                                 
                                 <a class='btn btn-primary' href='Detalles.php?pro_id=$pro_id''>
                                 
                                    <i class='fa fa-shopping-cart'></i> Agregar al carrito
                                                                        
                                 </a>
                                 
                            </p>
                            
                            
                        </div>
                </div>
            </div>
            
            
            
            
            
            
            ";
        }
    }

}

//Estas funciones son para que me de el numero de articulos agregados a mi carrito y el precio total//
function items(){
    global $db;

    $ip_add= getRealIpUser();
    $get_items= "select * from Carrito where AddIp='$ip_add'";
    $run_items = mysqli_query($db, $get_items);
    $count_items = mysqli_num_rows($run_items);

    echo $count_items;


}
function precio_total(){
    global $db;

    $ip_add = getRealIpUser();
    $total = 0;
    $select_cart = "select * from Carrito where AddIp = '$ip_add'";
    $run_cart = mysqli_query($db,$select_cart);
    while ($record= mysqli_fetch_array($run_cart)){

        $pro_id = $record['CarritoId'];
        $pro_qty = $record['CarritoCantidad'];
        $get_price ="select * from Producto where ProductoId='$pro_id'";
        $run_price = mysqli_query($db,$get_price);
        while($row_price=mysqli_fetch_array($run_price)){
            $sub_total = $row_price = $row_price['ProductoPrecio']*$pro_qty;
            $total += $sub_total;

        }

    }
    echo "$". $total;

}
?>




