<?php
include("conexion.php");
$con = conectar();
$sql = "select * from disfraz";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Disfraz</title>
</head>
<style>
	table, th, td{
		border: 2px solid black;
		color: black;
	}
	th, td{
		padding: 30px;
	}
</style>
<body>
	<div> <center>
		   <a href = "agregar.php">
    <input type = "button" value = "NUEVO REGISTRO"></a> 
		<p>
		<table>
			<thead>
				<tr bgcolor="green">
					<th>Modelo_Disfraz</th>
					<th>Nombre</th>
					<th>Talla</th>
					
                    <th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				while($row = mysqli_fetch_array($query)){
				?>

				<tr bgcolor="white">
					<td><?php echo $row ['Modelo_Disfraz']?></td>
					<td><?php echo $row ['Nombre']?></td>
					<td><?php echo $row ['Talla']?></td>
					<td><a href="editar.php?id=<?php echo $row ['Modelo_Disfraz']?>">Editar</a>
					<a href="delete.php?id=<?php echo $row ['Modelo_Disfraz']?>">Borrar</a></td>
				</tr>

				<?php
				}
				?>
			</tbody>
		</table>
		</center>
	</div>
</body>
</html>
