<div class="box"><!--Box Inicio--->

    <div class="box-header"><!--Box header Inicio--->

        <center><!--center Inicio--->

            <h1>  Comentarios  </h1>
            <p class="lead">  </p>

            <p class="text-muted"> Deja tu comentario </p>

        </center><!--center Final--->

    </div><!--Box header Final--->

    <h4>Calificación</h4>
    <form method="post" action="Detalles.php?pro_id=<?php echo $producto_id?>"<!--Inicio Form-->
        <input id="radio1" type="radio" name="estrellas" value="1">
        <img src='admin_area/product_images/calif/uno.png' >

        <input id="radio2" type="radio" name="estrellas" value="2">
        <label for="radio2"><img src='admin_area/product_images/calif/dos.png' ></label>

        <input id="radio3" type="radio" name="estrellas" value="3">
        <label for="radio3"><img src='admin_area/product_images/calif/tres.png' ></label>
        <input id="radio4" type="radio" name="estrellas" value="4">
        <label for="radio4"><img src='admin_area/product_images/calif/cuatro.png' ></label>

        <input id="radio5" type="radio" name="estrellas" value="5" checked>
        <label for="radio5"> <img src='admin_area/product_images/calif/cinco.png'></label>

        <div class="form-group"><!--Form group incio--->
            <label> Ingresa tu comentario </label>
            <textarea name="Comentario" type="texto" class="form-control" required> </textarea>
        </div><!--Form group Final--->

        <div class="text-center"><!--text-centerInicio--->
            <button name="Guardar" value="guardar"class="btn btn-main btn-large">
                <i class="fa fa-sign-in"></i> Guardar Comentario
            </button>
        </div>
    </form>

    <div class="row">
        <div class="title text-center">
            <h2></h2>
        </div>
    </div>

</div>

