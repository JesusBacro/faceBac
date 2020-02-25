<?php
    
    header("Content-Type:application/xls");
	header("Content-Disposition: attachment; filename=nombre_archivo.xls");
   require_once('../../conexion.php');
    
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM eventos";
	$result=mysqli_query($link, $query);
?>

	
</table>
<table border="1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<tr style="background-color:red;">
		<th>Empleado</th>
			<th>	Tipo de Alimentos</th>
	<th>	Fecha Seleccionada</th>
	<th>	Fecha Limite</th>


	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
				    
					<td><?php echo $row['title']; ?></td>
					 <td><?php echo $row['class'];?></td>
					<td><?php  echo $row['inicio_normal'];?></td>
					<td><?php  echo $row['final_normal']; ?></td>
					
					
				</tr>	

			<?php
		}

	?>
</table>