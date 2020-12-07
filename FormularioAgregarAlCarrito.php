<form action="Detalles.php?add_cart=<?php echo $producto_id; ?> " class="form-horizontal" method="post">
    <div class="form-group">
        <label for="" class="col-sm-5 control-label"> Cantidad de Producto </label>
        <div class="col-md-7"><!--Inicio col-sm-7-->
            <select name="product_qty" id="" class="form-control">
                <option >1</option>

            </select><!--Final select-->
        </div>

    </div>

    <p class="price">$<?php echo $pro_price?></p>

    <p class="text-center buttons">
        <button class="btn btn-primary i fa fa-shopping-cart btn-lg"> Agregar al carrito </button>

    </p>
</form>
