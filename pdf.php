<?php
    
    header("Content-Type:application/xls");
	header("Content-Disposition: attachment; filename=nombre_archivo.xls");
   require_once('conexion.php');
    
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM solicitudes";
	$result=mysqli_query($link, $query);
?>

<table border="1">
    
	<tr style="background-color:red;">
		<th>Fecha</th>
		<th>Autor</th>
		<th>email</th>
		<th>Descripci¨®n</th>
		<th>Impacto</th>
        <th>Justificaci¨®n</th>
        <th>Proceso</th>
         <th>No. Ticket</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['fecha']; ?></td>
					<td><?php echo $row['autor']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['descr']; ?></td>
					<td><?php echo $row['impacto']; ?></td>
                    <td><?php echo $row['justif']; ?></td>
                    <td><?php echo $row['proceso']; ?></td>
                    <td><?php echo $row['id']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>