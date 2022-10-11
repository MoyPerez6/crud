<?php
 include ("conexion.php");
    $con = conectar();
    $sql = "SELECT * FROM `disfraz` WHERE `Modelo_Disfraz` = '" . $_GET['id']. "'";
    $query = mysqli_query($con,$sql);
    $item = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Disfraz</title>
</head>
<body>
    <div> 
        <center>
        <form action="update.php?id=<?php echo $_GET['id']?>" method ="POST">
            Modelo_Disfraz: <br>
            <input type="text" name="Modelo_Disfraz" size="20" value="<?php echo $item['Modelo_Disfraz']?>">
            <p>
            Nombre: <br>
            <input type="text" name="Nombre" size="20" value="<?php echo $item['Nombre']?>">
            <p>
            Talla: <br>
            <input type="text" name="Talla" size="20" value="<?php echo $item['Talla']?>">
            <p>
            <input type="submit" value="Actualizar">
            <a href = "index.php">
            <input type="button" value="REGRESAR"></a>
            
        </form>
    </div>
    </center>
    </body>