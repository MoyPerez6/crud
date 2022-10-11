<?php
function conectar(){
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$bd = "pruebas";
$conexion = mysqli_connect($host, $usuario, $contrasenia);
mysqli_select_db($conexion, $bd);
return $conexion;
}
?>