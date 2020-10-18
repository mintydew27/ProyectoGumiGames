<?php
function AbrirConexion(){
    $servername="localhost";
    $user="root";
    $password="";
    $database="gumigames";
    $conexion= mysqli_connect($servername,$user,$password) or die ("Conexion Fallida".mysqli_error());
    mysqli_select_db($conexion,$database);
    return $conexion;
}
?>
