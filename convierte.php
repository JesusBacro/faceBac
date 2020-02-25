<?php
    
    header("Content-Type:application/xls");
	header("Content-Disposition: attachment; filename=nombre_archivo.xls");
   require_once('conexion.php');
    
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM pro";
	$result=mysqli_query($link, $query);
?>

	
</table>
<table border="1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<tr style="background-color:red;">
		<th>No. Ticket</th>
	<th>	Nombre</th>
	<th>	Medida</th>
	<th>	Color</th>
	<th>	Modelo</th>
	<th>	No. Serie</th>
	<th>	Calibre</th>
	<th>	Volt's o AMP</th>
	<th>	Tipo</th>
	<th>	Otras especificaciones/</th>
		<th>	Refacción</th>
			<th>	Categoría</th>
		
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
				    
					<td><?php echo $row['id']; ?></td>
					 <td><?php echo $row['nombre'];?></td>
					<td><?php  echo $row['med'];?></td>
					<td><?php  echo $row['color']; ?></td>
					<td><?php  echo $row['modelo']; ?></td>
					<td><?php  echo $row['serie']; ?></td>
					<td><?php  echo $row['cali']; ?></td>
					<td><?php  echo $row['vol'];?></td>
					<td><?php  echo $row['tipo'];?></td>
					<td><?php  echo $row['otro']; ?></td>
					<td><?php echo $row['ref'];?></td>
				 <td><?php echo $row['cat'];?></td>
					
				</tr>	

			<?php
		}

	?>
</table>