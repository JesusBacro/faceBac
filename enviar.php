<?php
 
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?>

<?php
	$servername = "localhost";
	$username = "bacro";
	$password = "Mejoracontinua19";
	$dbname = "id12491651_bac";

	$ar = 0;

	/*$date = $_POST["date"];
	$author = $_POST["author"];
	$email = $_POST["email"];
	$desc = $_POST["desc"];
	$impacto = $_POST["impacto"];
	$justif = $_POST["justif"];*/

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO pro (nombre, med, color, modelo, serie, cali, vol, tipo, otro, ref, cat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssssssss", $nombre, $med, $color, $modelo, $serie, $cali, $vol, $tipo, $otro, $ref, $cat);

	
	// set parameters and execute
	$nombre = $_POST["nombre"];
	$med = $_POST["med"];
	$color = $_POST["color"];
	$modelo = $_POST["modelo"];
	$serie = $_POST["serie"];
	$cali = $_POST["cali"];
    $vol = $_POST["vol"];
    $tipo= $_POST["tipo"];
  
    $otro= $_POST["otro"];
    $ref= $_POST["ref"];
   $cat= $_POST["cat"];
	$stmt->execute();

	$ar = $stmt->affected_rows;
	//printf("%d Row inserted.\n", $stmt->affected_rows);

	/* close statement and connection */
	$stmt->close();

	/*
	$sql = "SELECT * FROM solicitudes";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["asd"]. " - Name: " . $row["author"]. " " . $row["email"]. "<br>";
		}
	}*/

	/*$sql = "INSERT INTO solicitudes (firstname, lastname, email)
	VALUES ('John', 'Doe', 'john@example.com')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}*/
?>

<html>
	<head>
		<meta charset="UTF-8">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  </head>

	<body>
		<div class="container" style="background: #DDF7F2; border-radius: 0px 0px 10px 10px;">
		  <table width="100%">
			<tr>
			  <td width="50%"><h1>Corporativo Bacros</h1></td>
			  <td width="50%">
				<p class="text-right">
				  <img src="https://s3.amazonaws.com/logocompanies/CEA5A9A9-5EF0-46CA-AD7A-314B45507566.JPG" width="180" alt="Responsive image" style="border-radius: 10px;">
				</p>
			  </td>
			</tr>
			<tr>
			  <td colspan="2"><p></p></td>
			</tr>
		  </table>
		</div>


		<br/><br/>

		<div class="container" style="background: #EEF3FB; border-radius: 10px;">
			<br/>

			<div align="center">
				<?php
					if($ar>0){
						echo "<h1>Registro Exitoso</h1>";
					} else {
						echo "<h1>Registro Fallido, Vuelva a intentar</h1>";
					}
				?>
			</div>
		

			<div class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="nombre">nombre del empleado:</label>
					<div class="col-sm-10">
					<?php echo $nombre;  ?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ref">Refacción:</label>
					<div class="col-sm-10">
						<?php echo $ref; ?>
					</div>
				</div>
				
				

				<div class="form-group">
					<label class="control-label col-sm-2" for="cat">Categoría:</label>
					<div class="col-sm-10">
						<?php echo $cat; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="color">Color:</label>
					<div class="col-sm-10">
						<?php echo $color; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="model">Modelo:</label>
					<div class="col-sm-10">
						<?php echo $model; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="serie">No. Serie:</label>
					<div class="col-sm-10">
						<?php echo $serie; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="cali">Calibre:</label>
					<div class="col-sm-10">
						<?php echo $cali; ?><br>
					</div>
				</div>
				
					<div class="form-group">
					<label class="control-label col-sm-2" for="vol">Volt´s o AMP:</label>
					<div class="col-sm-10">
						<?php echo $vol; ?><br>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="tipo">Tipo:</label>
					<div class="col-sm-10">
						<?php echo $tipo; ?><br>
					</div>
				</div>
				
				
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="otro">Otro:</label>
					<div class="col-sm-10">
						<?php echo $otro; ?><br><br>
					</div>
					<br>
				</div>
					<br><br>
				
				
				<br><br><br><br><br><br>
<!--ESTE BOTON DIRIGIRA A CONSULTAR LOS DATOS-->
<input type="button" onclick="location.href= 'consul.php'" value="Consulta" name="boton" />
			</div>

		</div>

	</body>
</html>