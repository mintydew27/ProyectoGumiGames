<form action="Detalles.php?add_cart=<?php echo $producto_id; ?> " class="form-horizontal" method="post">


    <h3 class="price text-center">$<?php echo $pro_price?></h3>

    <div class="form-group text-center">
        <label for="" class="col-sm-5 control-label"> Cantidad de Producto </label>
        <div class="col-md-7"><!--Inicio col-sm-7-->
            <select name="product_qty" id="" class="form-control">
                <option >1</option>

            </select><!--Final select-->
        </div>

    </div>

    <p class="text-center buttons">
        <button class="btn btn-main i fa fa-shopping-cart btn-lg"> Agregar al carrito </button>
    </p>

</form>
