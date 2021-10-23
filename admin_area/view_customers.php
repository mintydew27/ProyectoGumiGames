<?php

if(!isset($_SESSION['AdministradorCorreo'])){

    echo "<script>window.open('Login.php','_self')</script>";

}else{

    ?>

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li class="active"><!-- active begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Ver Clientes

                </li><!-- active finish -->
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

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







    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags"></i>  Ver Clientes

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <div class="table-responsive"><!-- table-responsive begin -->
                        <table id="regTable" class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->

                            <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Número: </th>
                                <th> Nombre: </th>
                                <th> Primer Apellido: </th>
                                <th> Segundo Apellido: </th>
                                <th> E-Mail: </th>
                                <th> País: </th>
                                <th> Ciudad: </th>
                                <th> Telefono: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                            </thead><!-- thead finish -->

                            <tbody><!-- tbody begin -->

                            <?php

                            $i=0;

                            $get_c = "select * from Cliente";

                            $run_c = mysqli_query($con,$get_c);

                            while($row_c=mysqli_fetch_array($run_c)){

                                $c_id = $row_c['ClienteId'];

                                $c_name = $row_c['ClienteNombre'];

                                $c_ape = $row_c['ClientePrimerApellido'];

                                $c_apeseg = $row_c['ClienteSegundoApellido'];

                                $c_email = $row_c['ClienteCorreo'];

                                $c_country = $row_c['ClientePais'];

                                $c_city = $row_c['ClienteCiudad'];

                                $c_contact = $row_c['ClienteTelefono'];

                                $i++;

                                ?>

                                <tr><!-- tr begin -->
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $c_name; ?> </td>
                                    <td> <?php echo $c_ape; ?> </td>
                                    <td> <?php echo $c_apeseg; ?> </td>
                                    <td> <?php echo $c_email; ?> </td>
                                    <td> <?php echo $c_country; ?></td>
                                    <td> <?php echo $c_city; ?> </td>
                                    <td> <?php echo $c_contact ?> </td>
                                    <td>

                                        <a href="Index.php?delete_customer=<?php echo $c_id; ?>">

                                            <i class="fa fa-trash-o"></i> Delete

                                        </a>

                                    </td>
                                </tr><!-- tr finish -->

                            <?php } ?>

                            </tbody><!-- tbody finish -->

                        </table><!-- table table-striped table-bordered table-hover finish -->
                    </div><!-- table-responsive finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->

<?php } ?>