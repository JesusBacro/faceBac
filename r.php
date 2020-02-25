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
	$stmt = $conn->prepare("INSERT INTO aceptar (nombre, labor) VALUES (?, ?)");
	$stmt->bind_param("ss", $nombre, $labor);
	// set parameters and execute
	$nombre = $_POST["nombre"];
	$labor = $_POST["labor"];

	$stmt->execute();

	$ar = $stmt->affected_rows;
	//printf("%d Row inserted.\n", $stmt->affected_rows);

	/* close statement and connection */
	$stmt->close();
	
	include 'header.php';
?>
  <!DOCTYPE html>
      <html lang="en">
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
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (m谩s bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
<link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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

		
				
					
				
<!--ESTE BOTON DIRIGIRA A CONSULTAR LOS DATOS-->
<center><input type="button" onclick="location.href= '/view/admin/d.php'" value="Descarga & Firma" name="boton" /></center>
			</div>
      </body>
      </html>