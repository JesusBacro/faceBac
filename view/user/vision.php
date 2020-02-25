<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }
 

?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
	<title>BACROCORP INFORMATION</title>
	
	<!--JQUERY-->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
	<!-- Nuestro css-->
	
<link rel="stylesheet" href="los.css">
</head>
<body>
     <form class="form-horizontal" action="rer.php" method="post"><!--boton que va a enviar a la base de datos-->
   <div class="container">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Terminos y Condiciones</a>
			</li>
		
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
				<div class="card">
					<div class="card-header">
						<h4>Visión</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="userList" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th scope="col"><font size="5">Ser la mejor empresa que dé, a nivel nacional, productos y servicios integrales, operando con estándares internacionales y de la más alta calidad que satisfagan a nuestros clientes.</th>
							
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row"><div class="form-group">
        <label for="nombre" class ="control-label col-sm-2">Yo:</label>
        
         <select name="nombre" >
        <option value="<?php echo ($_SESSION['nombre']); ?>"><?php echo ($_SESSION['nombre']); ?></option>
             </select>
             He Leído la
             
             <select name="labor" >
                 <option value="vision">Visión</option>
                 </select>de BACRO CORPORATIVO.
             <!--ESTO MANDO A LLAMAR EL USUARIO CONECTADO-->
             </div> 
							
							
							
							
		<div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
          <center>  <button type="submit" class="btn btn-default" >Entendido</button> </center>
          </div>
        </div>	
								</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
			</body>
</html>
