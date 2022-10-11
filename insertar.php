<?php
include ("conexion.php");
$con = conectar();

$Modelo_Disfraz = $_POST['Modelo_Disfraz'];
$Nombre = $_POST['Nombre'];
$Talla = $_POST['Talla'];

if ($Modelo_Disfraz != null || $Nombre != null || $Talla != null ){

    $sql = "INSERT INTO disfraz(Modelo_Disfraz,Nombre,Talla) VALUES ('".$Modelo_Disfraz."','".$Nombre."','".$Talla."')";

    $query = mysqli_query($con,$sql);

    if ($query){
        header ("location:index.php");
    }
}