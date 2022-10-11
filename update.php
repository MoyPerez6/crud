<?php
include ("conexion.php");
$con = conectar();

    $id = $_GET['id'];

    $Modelo_Disfraz = $_POST['Modelo_Disfraz'];
    $Nombre = $_POST['Nombre'];
    $Talla = $_POST['Talla'];

    if($Modelo_Disfraz != null || $Nombre != null || $Talla != null){

        $sql="UPDATE `disfraz` SET `Modelo_Disfraz` = '".$Modelo_Disfraz."', `Nombre` = '".$Nombre."', `Talla` = '".$Talla."'  WHERE `disfraz`.`Modelo_Disfraz` = '".$id."'";

        $query = mysqli_query($con,$sql);

        if($query){
                header("location:index.php");
        }
    }