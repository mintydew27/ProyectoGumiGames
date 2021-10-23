<?php
if (!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";
}else{

?>
    <div class="row"> <!-- Row start-->
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / View Products
                </li>
            </ol>
        </div>
    </div> <!-- Row end-->

    <script language="javascript">
        function doSearch() {
            var tableReg = document.getElementById('regTable');
            var searchText = document.getElementById('searchTerm').value.toLowerCase();
            for (var i = 1; i < tableReg.rows.length; i++) {
                var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                var found = false;
                for (var j = 0; j < cellsOfRow.length && !found; j++) {
                    var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                        found = true;
                    }
                }
                if (found) {
                    tableReg.rows[i].style.display = '';
                } else {
                    tableReg.rows[i].style.display = 'none';
                }
            }
        }
    </script>

    Buscar: <input id="searchTerm" type="text" onkeyup="doSearch()" />









<div class="row"> <!-- Row 2 start-->
    <div class="col-lg-12">
        <ol class="panel panel-default">
            <div class="pannel-heading"> <!-- Heading start-->
                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> View Products
                </h3>
            </div> <!-- Heading end-->
            <div class="panel-body">
                <div class="table-responsive">
                    <table  id="regTable" class="table table-striped table-bordered table-hover">
                        <thead> <!-- THead start-->
                        <tr>
                            <th>Producto ID: </th>
                            <th>Producto Titulo: </th>
                            <th>Producto Imagen: </th>
                            <th>Producto Precio: </th>
                            <th>Producto Vendido: </th>
                            <th>Producto Palabras Clave: </th>
                            <th>Producto Fecha: </th>
                            <th>Producto Eliminar:</th>
                            <th>Producto Editar: </th>
                        </tr>
                        </thead><!-- THead end-->

                        <tbody>
                            <?php
                            $i=0;
                                $get_pro = "select * from producto";
                                $run_pro = mysqli_query($con,$get_pro);
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    $pro_id = $row_pro['ProductoId'];
                                    $pro_titulo = $row_pro['ProductoTitulo'];
                                    $pro_img1 = $row_pro['ProductoImagenUno'];
                                    $pro_precio = $row_pro['ProductoPrecio'];
                                    $pro_palabraclave = $row_pro['ProductoPalabraClave'];
                                    $pro_date = $row_pro['Date'];
                                    $i++;
                                    ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pro_titulo; ?></td>
                                <td> <img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td><?php echo $pro_precio; ?></td>
                                <td><?php
                                        $get_sold = "select * from Orden where ProductoId='$pro_id'";
                                        $run_sold = mysqli_query($con,$get_sold);
                                        $count = mysqli_num_rows($run_sold);
                                        echo $count;
                                    ?>
                                </td>
                                <td><?php echo $pro_palabraclave; ?></td>
                                <td><?php echo $pro_date; ?></td>

                                <td><a href="Index.php?delete_product=<?php echo $pro_id ?>">
                                            <i class="fa fa-trash"></i> Eliminar
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-pencil"></i> Editar
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>


                        </tbody>

                    </table>
                </div>
            </div>

        </ol>
    </div>
</div><!-- Row 2 end-->
<?php }?>
