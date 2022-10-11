<?php
    include ("conexion.php");
    $con = conectar();
    $id = $_GET['id'];
    $sql = "DELETE FROM `disfraz` WHERE `disfraz`.`Modelo_Disfraz` = '".$id."'";
    $query = mysqli_query($con,$sql);
    if($query){
        header("location:index.php");
    }
?>