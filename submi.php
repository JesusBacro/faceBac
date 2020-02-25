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
	$stmt = $conn->prepare("INSERT INTO solicitudes (fecha, autor, email, descr, impacto, justif, proceso) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssss", $date, $author, $email, $desc, $impacto, $justif, $proceso);
	// set parameters and execute
	$date = $_POST["date"];
	$author = $_POST["author"];
	$email = $_POST["email"];
	$desc = $_POST["desc"];
	$impacto = $_POST["impacto"];
	$justif = $_POST["justif"];
    $proceso = $_POST["proceso"];
    $id = $_POST["id"];
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
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
<link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	  </head>

	<body>
	     <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
      <!--doy inicio al menu -->
     <div class="sidebar">
    <header>B A C R O C O R P</header>
  <ul>
    <li><a href="/view/user/index.php"><i class="fas fa-qrcode"></i>INICIO</a></li>
    
  </ul>
</div>
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
			  <td colspan="2"><p>Petición de Cambios al Sistema.</p></td>
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
					<label class="control-label col-sm-2" for="date">Fecha:</label>
					<div class="col-sm-10">
						<?php echo $date; ?>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="date">Autor:</label>
					<div class="col-sm-10">
						<?php echo $author; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="date">Email:</label>
					<div class="col-sm-10">
						<?php echo $email; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="date">Descripción:</label>
					<div class="col-sm-10">
						<?php echo $desc; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="date">Impacto:</label>
					<div class="col-sm-10">
						<?php echo $impacto; ?><br>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="date">Justificación:</label>
					<div class="col-sm-10">
						<?php echo $justif; ?><br>
					</div>
				</div>
				
					<div class="form-group">
					<label class="control-label col-sm-2" for="date">Estado:</label>
					<div class="col-sm-10">
						<?php echo $proceso; ?><br>
				
					

			</div>

		</div>

	</body>
</html>

