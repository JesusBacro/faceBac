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
     <form class="form-horizontal" action="i.php" method="post"><!--boton que va a enviar a la base de datos-->
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
						<h4>Código de Vestimenta</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="userList" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th scope="col"><font size="5"><i>Los lineamientos de vestimenta deben estar basados en necesidades del negocio, la imagen que se quiere demostrar a los clientes y por temas de seguridad ocupacional. De esta forma, la empresa puede dictar lineamientos de vestimenta y, establecer el uso de uniformes o determinadas prendas para ciertos puestos. Igualmente, se procura con ello que los lineamientos no generen discriminación de cualquier índole establecidos en nuestra Política de Igualdad y No Discriminación. Claro está, la empresa puede aplicar medidas más restrictivas a ciertos puestos laborales. De igual forma, las denuncias por hostigamiento sexual en los centros de trabajo han generado más conciencia y preocupación sobre la importancia de establecernormas de vestimenta para mantener un ambiente de trabajo sano y de respeto</i>
							<font size="5">	<br>• Manejamos de lunes a jueves un estilo de vestimenta Casual de Negocios en la Oficina Central (evitar el uso de tenis, sudaderas, playeras deportivas y jeans rasgados), y los viernes y sábados Casual, entendiendo por casual una mayor comodidad, no un estado desalineado.
								<br>• Deberá usarse vestimenta formal cuando se espera la visita a las instalaciones de clientes y/o directivos de alto nivel y/o autoridadesgubernamentales. 
							<br>	• El área comercial y los involucrados en visitas comerciales a clientes y/o directivos de alto nivel y/o autoridades gubernamentales,deberánusar vestimenta de negocios. 
							<br>	• En las áreas de alta y baja operación y operación en campo, deberán usar la vestimenta adecuada a sus funciones y responsabilidades, por ejemplo, funciones de mantenimiento, cocina, intendencia y los que correspondan a uso de materiales corrosivos, húmedos, aceitosos, grasosos, limpiadores, etc. Además del uso del Equipo de Protección Personal que por marco Normativo sea requeridoy exigido por la compañía. 
								<br>• No se permite el uso de pearcings dentro de las instalaciones. 
								<br>• En las áreas de Operaciones altas, bajas y de campo no se permite el uso de joyería alguna. 
							<br>	• No se permiten tatuajes visibles inapropiados,con mensajesofensivos, propaganda política o religiosa. 
							<br>	• Se prohíbe el uso de ropa que muestre mensajes ofensivos, propaganda religiosao política. 
							<br>	• La ropa deportiva, sólo deberá usarse el día en que estén programados eventos deportivos y en su defecto los sábados. 
							<br>	• El uso de falda está permitido a la rodilla, midi, coctel y Chanel. No se permite el uso de shorts de playa. 
							<br>	• Por seguridad: Los tacones no deben tener más de 12 cm de altura y no se permite el uso de sandalias “pata de gallo” parala oficina, ni en ningún centro de trabajo. 
							<br>	• El cabello deberá estar arreglado, limpio y peinado. En caso de usar barba o bigote, mantenerlos recortados y pulcros,en áreas de alta y baja operación deberáser de uso obligatorio el cubrebarba. 
							<br>	• En las áreas de operaciones altas y de campo no se permite el uso de gorras y el cabello debe mantenerse recogido. 
							<br>	• Para el ingreso a áreas de operaciones deberá usarse como indispensable el Equipo de Protección Personal indicado por el área de Seguridad y, Operaciones,establecidoen las respectivasdescripcionesde puesto.
	</th>
							
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row"><div class="form-group">
        <label for="nombre" class ="control-label col-sm-2">Yo:</label>
        
         <select name="nombre" >
        <option value="<?php echo ($_SESSION['nombre']); ?>"><?php echo ($_SESSION['nombre']); ?></option>
             </select>
             He Leído el
             
             <select name="labor" >
                 <option value="Código de Vestimenta">Código de Vestimenta</option>
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
