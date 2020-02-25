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
     <form class="form-horizontal" action="q.php" method="post"><!--boton que va a enviar a la base de datos-->
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
						<h4>Reglamento Interno de Trabajo</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="userList" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
								    
									<th scope="col"><font size="5"><center><p>CAPITULO I GENERALIDADES</p></center>
									  ART. 1.- <font size="3">El presente Reglamento Interior de Trabajo, se celebra en cumplimiento de las disposiciones de la Ley Federal del Trabajo y el Contrato Individual de trabajo que rige dentro de la Empresa.
<br>

<font size="5">ART. 2.- <font size="3">Todo trabajador por el hecho de ingresar a prestar sus servicios está obligado a conocer y cumplir el presente Reglamento.
<br><font size="5">ART. 3.-<font size="3"> El presente Reglamento es de observación obligatoria tanto para la Empresa como para los
Trabajadores, a fin de cumplir cabalmente los lineamientos que aquí se darán a conocer.
<br><font size="5">ART. 4.-<font size="3"> La relación laboral que se establezca entre la Empresa y el Trabajador será regulado por los lineamientos estipulados en el presente Reglamento, el Contrato Individual de Trabajo y lo no previsto en este documento se consultará en la L Ley Federal del Trabajo.
  <br> <br><font size="5"><center><p>CAPITULO II
LUGAR, HORA Y JORNADA DE TRABAJO</p></center>

<br>
<font size="5">ART. 5.- <font size="3">El lugar de trabajo será aquel en el que el trabajador deberá desempeñar sus servicios para lo cual fue contratado, ya sea en las instalaciones de la Empresa o fuera de las mismas dentro del territorio nacional que así lo señale y se determine conforme a las obligaciones de la Empresa (cubriéndose en su caso los viáticos correspondientes). Los trabajadores iniciaran y terminaran sus labores en los lugares que la Empresa designe y deberán atender cualquier actividad relacionada con la función principal para la que fue contratado.
<br>

<font size="5">ART. 6.- <font size="3">La semana de trabajo se compondrá de: hasta 48 horas efectivas máximas, distribuyéndose estas en el horario establecido. Los trabajadores deberán estar en sus respectivas áreas de trabajo y en sus puestos a la hora precisa en que deberán iniciar sus labores.
Administrativos: 8:00 – 17:30 horas de Lunes a Viernes
9:00 – 13:00 horas el día Sábado (según sea requerido por el jefe inmediato)
Operativos: La duración de la jornada será de 8 horas diarias teniendo un horario variable, el cual comenzará a correr en el momento en que el trabajador arribe al lugar que le haya sido asignado para realizar sus labores, la hora deberá constar en la bitácora designada para ello, teniendo 1 hora para ingerir alimentos, los cuales podrán ser ingeridos fuera del lugar de trabajo asignado.
<br>

<font size="5">ART. 7.- <font size="3">La Empresa concede al personal una tolerancia de 10 min a partir del horario de ingreso designado.
El acceso que oscile entre los 11 y 20 min posteriores al horario de ingreso será considerado como retardo, pasando los 21 minutos únicamente se podrá acceder al centro de trabajo por autorización expresa del titular del área o jefe inmediato.
En caso de no tener autorización para ingresar a las instalaciones, la Empresa (el patrón o jefe inmediato) podrá negar el acceso a las instalaciones y dicha falta se considerará como injustificada y se procederá a realizar el descuento correspondiente.
En caso de ingresar después de los 20 min tendrá que justificar dicho retraso por medio del formato “PASE DE ENTRADA Y/O SALIDA” destinado para ello, con la respectiva autorización emitido con un mínimo de
16 horas de anticipación, salvo casos fortuitos o de fuerza mayor (mismo que será a consideración del patrón y/o jefe inmediato).
Se permitirán tres retardos como máximo en un periodo de 30 días naturales. Pasando este lapso es potestativo del patrón aplicar las sanciones y/o los descuentos correspondientes, que determinen los directivos, dependiendo de la gravedad de falta, en términos de la Ley Federal del Trabajo.
<br>

<font size="5">ART. 8.-<font size="3"> El trabajador deberá registrar su hora de entrada y salida laboral, así como de las salidas y entradas correspondientes a horas de comida, en los controles que para tal efecto establezca la Empresa. En caso de no contar con el registro correspondiente se considerará como falta injustificada.
<br>

<font size="5">ART. 9.-<font size="3"> Todos los trabajadores deberán llegar a su lugar de trabajo con la debida anticipación, de tal forma que inicien su trabajo a la hora indicada previamente.
<br>

<font size="5">ART. 10.-<font size="3"> La Empresa queda facultada para modificar los horarios de trabajo conforme a las necesidades que se susciten, la empresa notificará al trabajador con anticipación.
<br>

<font size="5">ART. 11.-<font size="3"> Por cada seis días de trabajo, los trabajadores disfrutarán de un día de descanso con goce de salario íntegro, cuando por necesidad de las actividades de la Empresa sean requeridos para trabajar en domingo,  o  bien  en  el día  designado  para  el  descanso,  la  empresa  dará  aviso  anticipadamente al trabajador, con un mínimo de 24 hrs.
<br>

<font size="5">ART. 12.-<font size="3"> Los trabajadores gozarán de 20 minutos como máximo para tomar un desayuno, y 30 minutos de descanso dentro de la jornada de trabajo, los cuales deberán ser disfrutados dentro de los parámetros establecidos por la organización. Para lo cual, la Empresa deberá dar a conocer por medio de un escrito de los horarios destinados para tal fin, en caso de no acatar este lineamiento se procederá a aplicar una medida disciplinaria que determine la dirección, previa acta circunstanciada y/o incidencia. El horario de alimentos será comunicado por la Empresa, en avisos por escrito conforme a las necesidades de trabajo.
<br>

<font size="5">ART.13.- <font size="3">Cuando por circunstancias especiales los trabajadores tengan que salir de la Empresa durante las horas de trabajo deberán obtener el permiso correspondiente por escrito del jefe inmediato o del titular del área, en los formatos “PASE DE ENTRADA Y/O SALIDA” destinados para tal fin.
En caso de que el trabajador salga de la Empresa sin el permiso mencionado, se considerará como abandono de trabajo y la Empresa en consecuencia tendrá derecho a rescindir del Contrato Individual de Trabajo sin responsabilidad para ella.
<br>

<font size="5">ART.  14.-<font size="3"> Cuando  los  trabajadores tengan necesidad de ingresar a la Empresa para tratar asuntos relacionados con su trabajo y no se encuentren laborando, deberán anunciarse y señalar el motivo del asunto en vigilancia, con su jefe o personal respectivo y en su caso, dependiendo del motivo se le permitirá el ingreso o no.
<br>

<font size="5">ART. 15.- <font size="3">La empresa podrá establecer los controles de asistencia que considere necesarios para el buen funcionamiento del centro de trabajo, por lo tanto los trabajadores quedarán sujetos a los mismos, excepto aquellos que por naturaleza de sus funciones desempeñen actividades fuera del centro de trabajo. En este último caso la Empresa a través de los supervisores designados, llevará los medidores y/o controles que regulen su asistencia.
<br><br>
<font size="5"><center><p>CAPITULO III
PERMISOS Y FALTAS</p></center>

<br>
<font size="5">ART. 16.- <font size="3">Las faltas injustificadas serán sancionadas con el descuento correspondiente, serán computadas para los efectos legales aplicables, en su caso, que además de descontar el día, se le aplique alguna otra sanción que dictamine el titular del área.

<br>
<font size="5">ART. 17.- <font size="3">En caso de que algún trabajador necesite permiso para faltar a sus labores, deberá comunicarlo a su jefe inmediato y al departamento de Recursos Humanos con al menos 24 horas de anticipación y por escrito en el formato “SOLICITUD DE PERMISO” designado para ello. En caso de ser concedido podrá ser computado según se acuerde.

<br>
<font size="5">ART. 18.- <font size="3">Serán consideradas como faltas justificadas aquellas que obedezcan a un caso fortuito o de fuerza mayor debidamente comprobado. Dicha justificación deberá ser hecha por el trabajador dentro de las 24 horas siguientes al momento que faltó a sus labores, cubriendo así dicha inasistencia con el permiso escrito, utilizando el formato “SOLICITUD DE PERMISO” destinado para ello. En caso de mediar autorización escrita, se sujetará a consideración si se computa como falta injustificada o no.
<br>

<font size="5">ART. 19.- <font size="3">Las faltas que excedan de más de 3 días naturales, en un periodo de 30 días, sin permiso o sin justificación, será causal para la rescisión de las relaciones de trabajo sin responsabilidad para la Empresa. No se considerarán los derivados de una sanción aplicada como medida disciplinaria.
<br>

<font size="5">ART. 20.- <font size="3">En caso de la ausencia por accidente o enfermedad que incapacite al trabajador, se entenderá como justificados aquellos días que correspondan a los señalados en los certificados de incapacidad que expida el IMSS, siempre que se entreguen a más tardar dentro de los cinco días siguientes de haber sido expedidos por el IMSS.
<br><br>
<font size="5"><center><p>CAPITULO IV
FORMA, DÍAS Y LUGARES DE PAGO</p></center>

<br>

<font size="5">ART. 21.-<font size="3"> El salario, que es la retribución que debe pagar la Empresa al trabajador por su trabajo, será cubierto los días 15 y último de cada mes, en caso de que estos sean días inhábiles, la empresa pagará el día inmediato anterior que resultase hábil. El salario correspondiente a cada trabajador será cubierto en moneda nacional y de curso legal.
<br>

<font size="5">ART. 22.-<font size="3"> Los trabajadores por este medio e individualmente aceptan que el pago puede ser en efectivo, cheque o depósito por vía electrónica en los sistemas de depósito de nómina bancaria que la empresa tiene establecidos, precisamente en las cuentas que para tal efecto se les generen a los trabajadores en el banco correspondiente.
<br>

<font size="5">ART. 23.-<font size="3"> Al recibir el pago correspondiente, el trabajador deberá suscribir de conformidad el recibo correspondiente, todos los trabajadores están obligados a firmar los recibos de nómina como comprobante del pago de sus salarios, en este se harán constar los conceptos de las percepciones, retenciones y descuentos que se hubieran efectuados. Por lo que la firma del trabajador deberá ser la misma registrada en  la  identificación oficial e  implicará  constancia  de  recepción de  las  cantidades recibidas.

<br>
<font size="5">ART. 24.- <font size="3">La empresa realizará descuentos de los salarios por los siguientes conceptos:<br>
a)   Impuestos correspondientes a la ley.
<br>

b)   Por cuotas del IMSS<br>
c)   Por tener un crédito INFONAVIT.<br> d)   Por tener un crédito FONACOT.<br> e)   Pago de pensiones alimenticias.<br>
f)    Pago de materiales dañados o perdidos por el trabajador.<br>
g)   Por deterioros o desperfectos ocasionados en bienes, propiedad de la empresa.<br> h)   Préstamos o anticipos otorgados por la empresa.<br>
i)    En cualquier otro caso que contemplen las leyes correspondientes.<br>

<font size="5">ART. 25.- <font size="3">En caso de diferencias por error en nómina contra del trabajador, la empresa se obliga a cubrirle el monto correspondiente en las 24 horas posteriores en las que se notifique al área correspondiente (Finanzas). Cuando resulte a favor de la empresa, ésta procederá de acuerdo con el artículo 110 de la Ley Federal de Trabajo.
<br><br>
<font size="5"><center><p>CAPITULO V
SEGURIDAD, HIGIENE Y MEDIO AMBIENTE DE TRABAJO</p></center><br>
<font size="5">ART. 26.- <font size="3">La empresa establecerá las medidas de Seguridad, Higiene y Medio Ambiente de trabajo que determine la Ley Federal del Trabajo en las normas oficiales referidas a la actividad de la empresa, las adicionales que esta estime pertinentes y las que las autoridades competentes señalen, estando obligado tanto empresa como trabajador a observarlo para mejorar las condiciones de Seguridad, Higiene y Medio de Trabajo.
<br>

<font size="5">ART. 27.- <font size="3">En lo concerniente a higiene, el personal está obligado a cuidar las instalaciones, herramientas y equipos de trabajo, no hacer mal uso de ellas y colaborar para mantenerla en las mejores condiciones de limpieza y funcionamiento.
<br>

<font size="5">ART. 28.- <font size="3">Los trabajadores están obligados a avisar a quien corresponda de cualquier desperfecto, avería, descompostura o circunstancia en la que no se estén adoptando las medidas de seguridad adecuadas.

<br>
<font size="5">ART. 29.- <font size="3">Los trabajadores deberán de abstenerse de hacer mal uso de los sistemas y/o equipos de emergencia y de realizar cualquier acto que puede poner en peligro su propia seguridad, la de sus compañeros de trabajo o la de terceras personas, así como de las instalaciones de la empresa. En caso de causar algún desperfecto, por negligencia o mal uso se harán acreedores a una sanción económica que resarza el daño, misma que determinarán los directivos de acuerdo con el avalúo.
<br>

<font size="5">ART. 30.- <font size="3"> En caso de ocurrir algún accidente, los trabajadores afectados o que tengan conocimiento de los hechos deberán dar aviso al jefe inmediato y/o al titular de área que se encuentre en ese momento a fin de notificar a la gerencia de Talento Humano para que los accidentados reciban los primeros auxilios o se realicen las gestiones pertinentes para atender al caso.
<br>

<font size="5">ART. 31.- <font size="3">Los trabajadores obedecerán los avisos preventivos de peligro y seguridad que se colocan para proteger la vida e integridad física de los trabajadores, con el objeto de prevenir accidentes y/o enfermedades en los centros de trabajo e instalaciones, la empresa fijara de forma visible, las disposiciones contenidas en los instructivos de seguridad e higiene.

<br>
<font size="5">ART. 32.- <font size="3">La empresa colocará extintores de acuerdo con las disposiciones, leyes y reglamentos en materia de seguridad e higiene que deban encontrarse en el lugar de trabajo y al alcance del personal. La empresa colocará botiquines para prestar oportunamente los primeros auxilios.

<br>

<font size="5">ART. 33.- <font size="3">En caso de incendio o sismo, los trabajadores deberán actuar con el más completo orden, atendiendo las señales e indicaciones que las personas designadas en las brigadas de protección civil indiquen, a fin de conseguir la rápida evacuación de las instalaciones de la empresa.
<br>
<font size="5">ART. 34.- <font size="3">Los trabajadores deberán acatar y cumplir las siguientes normas de seguridad a fin de evitar accidentes y en general todo tipo de riesgo, pudiendo ser causa de rescisión de la relación de trabajo el incumplimiento de estas:
<br>a)   Fumar fuera de las áreas asignadas.
<br>b)   Realizar o efectuar cualquier actividad peligrosa que pueda ser causa de algún accidente.
<br>c)   Hacer bromas, juegos y en general cualquier acto que distraiga la atención de sus compañeros.
<br>d)   Obstruir el equipo contra incendios con cualquier tipo de objeto o material, procurando mantener siempre los pasillos y las puertas libres de obstrucciones, para una rápida evacuación.
e)   Mover a una persona lesionada o inconsciente que haya sufrido algún accidente, a menos que sea necesario.
<br>
<font size="5">ART. 35.- <font size="3">Todo trabajador deberá abstenerse de realizar actos que pongan en peligro su seguridad y la de sus compañeros de trabajo, bienes de la empresa, así como el inmueble en general.
<br>

<font size="5">ART. 36.-<font size="3"> Al final de la jornada laboral es obligación de los trabajadores limpiar su lugar de trabajo evitando dejar papeles, libretas, libros o cualquier otro artículo de papelería.
<br>
 <br><br>
<font size="5"><center><p>CAPITULO VI
EXAMENES Y SERVICIOS MÉDICOS</p></center><br>    
<font size="5">ART. 37.- Será responsabilidad de la Empresa que se practiquen los exámenes médicos periódicos y especiales a los trabajadores que como resultado de las actividades que realizan, los instrumentos que se utilizan y en general de sus condiciones y medio ambiente de trabajo que pueda ver alterada su salud, la periodicidad de aplicación de dichos exámenes será de forma anual, considerando el grado  de riesgo se dictaminará si se aplican antes, adoptando las medidas preventivas profilácticas que se requieren. Dichos exámenes serán realizados por los servicios médicos que para tal efecto la Empresa destine. La aplicación de exámenes médicos de ingreso será obligatoria para los cargos que la alta dirección determine. Se notificará al trabajador de tal requisito para proceder al mismo.
<br>

<font size="5">ART. 38.- <font size="3">Los trabajadores están obligados en todo tiempo a sujetarse a los reconocimientos médicos que dicte la empresa, para comprobar que no padecen ninguna incapacidad o enfermedad contagiosa.
<br>

<font size="5">ART. 39.- <font size="3">Derivado de la naturaleza del trabajo, los trabajadores podrán ser sujetos para realizarse exámenes toxicológicos y pruebas de polígrafo cada seis meses.

<br>
<font size="5">ART. 40.- <font size="3">Los trabajadores están obligados a seguir las instrucciones o sistemas preventivos y campañas de salud que la empresa notifique para contrarrestar epidemias o simples enfermedades.
<br>

<font size="5">ART. 41.- <font size="3">La empresa no reconoce ninguna obligación, ni responsabilidad para los trabajadores que sufran padecimientos venéreos, enfermedades crónico-degenerativas, accidentes sufridos fuera de la Empresa sin motivo de su trabajo o bien a consecuencia del alcoholismo, consumo de tóxicos o cualquier droga, o derivado de lesiones sufridos en riña o accidentes, o bien la práctica de algún deporte
<br>

<br><br>
<font size="5"><center><p>  CAPITULO VII
USO DE EQUIPO, ROPA DE TRABAJO Y MATERIAL O HERRAMIENTA
 </p></center><br>  
<font size="5">	ART. 42.- <font size="3">La ropa de trabajo, implementos o herramientas que la empresa proporcione a los trabajadores deberán ser usados única y exclusivamente por ellos y para el fin de que cumplan con sus labores deberán portar uniforme y equipo de protección personal completo.
<br>

<font size="5">ART. 43.- <font size="3">En el caso de traer uniforme incompleto o falta de equipo de protección personal, al igual que la falta de herramientas o material necesario para el desarrollo de sus actividades, causarán una nota de extrañamiento o levantamiento de acta de hechos, misma que disminuirá el puntaje en la evaluación de desempeño con repercusión en el bono de actuación.
<br>

<font size="5">ART.  44.- <font size="3"> Los materiales o  herramientas  para  realizar  su trabajo  deberán  ser  solicitados por  el titular, supervisor o interesado y deberá de firmar el vale y/o formato de resguardo. En caso de pérdida y/o deterioro de las herramientas de trabajo por descuido, se procederá a realizar el descuento correspondiente.
<br><br>
<font size="5"><center><p>  CAPITULO VIII OBLIGACIONES DE LOS TRABAJADORES
 </p></center><br>  
<font size="5"> ART. 45.- Son obligaciones de los trabajadores (ART. 134 LFT)<font size="3"><br>
I.- Cumplir las disposiciones de las normas de trabajo que les sean aplicables;<br>
II.-Observar las medidas preventivas e higiénicas que acuerden las autoridades competentes y las que indiquen los patrones para la seguridad y protección personal de los trabajadores;<br>
III.-Desempeñar el servicio bajo la dirección del patrón o de su representante, a cuya autoridad estarán subordinados en todo lo concerniente al trabajo;<br>
IV.- Ejecutar el trabajo con la intensidad, cuidado y esmero apropiados y en la forma, tiempo y lugar convenidos;<br>
V.-Dar aviso inmediato al patrón, salvo caso fortuito o de fuerza mayor, de las causas justificadas que le impidan concurrir a su trabajo;<br>
VI.- Restituir al patrón los materiales no usados y conservar en buen estado los instrumentos y útiles que les haya dado para el trabajo, no siendo responsables por el deterioro que origine el uso de estos objetos, ni del ocasionado por caso fortuito, fuerza mayor, o por mala calidad o defectuosa construcción;
<br>VII.- Observar buenas costumbres durante el servicio;
VIII.- Prestar auxilios en cualquier tiempo que se necesiten, cuando por siniestro o riesgo inminente peligren las personas o los intereses del patrón o de sus compañeros de trabajo;<br>
IX.- Integrar los organismos que establece esta Ley;<br>
<br>X.- Someterse a los reconocimientos médicos previstos en el reglamento interior y demás normas vigentes en la empresa o establecimiento, para comprobar que no padecen alguna incapacidad o enfermedad de trabajo, contagiosa o incurable;
<br>XI. Poner en conocimiento del patrón las enfermedades contagiosas que padezcan, tan pronto como tengan conocimiento de estas;
<br>XII. Comunicar al patrón o a su representante las deficiencias que adviertan, a fin de evitar daños o perjuicios a los intereses y vidas de sus compañeros de trabajo o de los patrones; y
<br>XIII. Guardar escrupulosamente los secretos técnicos, comerciales y de fabricación de los productos a cuya elaboración concurran directa o indirectamente, o de los cuales tengan conocimiento por razón del trabajo que desempeñen, así como de los asuntos administrativos reservados, cuya divulgación pueda causar perjuicios a la empresa.
<br><br>
<font size="5"><center><p>  CAPITULO IX
DEL TRABAJO DE LAS MUJERES

 </p></center><br> 
 <font size="5">ART. 46.- <font size="3"> Derechos y obligaciones.
(ART. 164 LFT)- Las mujeres disfrutan de los mismos derechos y tienen las mismas obligaciones que los hombres.
<br>

<font size="5">ART. 47.-  <font size="3">Protección de la maternidad por parte de las normas en este capítulo.
(ART. 165 LFT)- Las modalidades que se consignan en este Capítulo tienen como propósito fundamental, la protección de la maternidad.
<br>

<font size="5">ART. 48.-  <font size="3">Tipos de trabajo no permitidos para la mujer
(ART. 166 LFT)-Cuando se ponga en peligro la salud de la mujer, o la del producto, ya sea durante su estado de gestación o el de lactancia y sin que sufra perjuicio su salario, prestaciones y derechos, no se podrá utilizar su trabajo en labores insalubres o peligrosas, trabajo nocturno industrial, en establecimientos comerciales o de servicio después de las diez de la noche, así como en horas extraordinarias.
<br>

<font size="5">ART. 49.-  <font size="3">Que se entiende por las labores peligrosas e insalubres
(ART. 167 LFT)-Para los efectos de este Título, son labores peligrosas o insalubres las que, por la naturaleza del trabajo, por las condiciones físicas, químicas y biológicas del medio en que se presta, o por la composición de la materia prima que se utilice, son capaces de actuar sobre la vida y la salud física y mental de la mujer en estado de gestación del producto.
Los reglamentos que se expidan determinarán los trabajos que quedan comprendidos en la definición anterior.
<br>

<font size="5">ART. 50.-  <font size="3">Derechos de las madres trabajadoras.
(ART. 170 LFT) Las madres trabajadoras tendrán derecho a los siguientes derechos.
<br>I. Durante el período del embarazo, no se realizarán trabajos que exijan esfuerzos considerables y signifiquen un peligro para su salud en relación con la gestación, tales como levantar, tirar o empujar grandes pesos, que produzcan trepidación, estar de pie durante largo tiempo o que actúen o puedan alterar su estado psíquico y nervioso.
<br>II. Disfrutarán de un descanso de seis semanas anteriores y seis semanas posteriores al parto.
<br>III. Los períodos de descanso a que se refiere la fracción anterior se prorrogarán por el tiempo necesario en el caso de que se encuentren imposibilitadas para trabajar a causa del embarazo o del parto.
<br>IV. En el período de lactancia tendrán dos reposos extraordinarios por día, de media hora cada uno, para alimentar a sus hijos, en el lugar adecuado e higiénico que designe la empresa.
Podrá establecer de común acuerdo con la madre trabajadora en como tomar su tiempo de lactancia, ya sea dentro o fuera de las instalaciones de la empresa, dejando por escrito el acuerdo al que llegaron entre ambas partes.
<br>V. Durante los periodos de descanso a que se refiere la fracción II, percibirán su salario íntegro. En los casos de prórroga mencionados en la fracción III, tendrán derecho al 50 % de su salario por un período no mayor a 60 días.
<br>VI. A regresar a puesto que desempeñaban, siempre que no haya transcurrido más de un año a la fecha de parto; y
<br>VII. A que se computen en su antigüedad los periodos pre y postnatales.

 <br><br>
<font size="5"><center><p> CAPITULO X
PROHIBICIONES A LOS TRABAJADORES


 </p></center><br> 
 
 <font size="5">ART.  51.-  <font size="3">Los  Trabajadores tienen prohibido realizar lo siguiente (ART. 135 LFT-Prohibiciones a los trabajadores)<br>
<br>I. Ejecutar cualquier acto que pueda poner en peligro su propia seguridad, la de sus compañeros de trabajo o la de terceras personas, así como la de los establecimientos o lugares en que el trabajo se desempeñe; II. Faltar al trabajo sin causa justificada o sin permiso del patrón;
<br>III. Substraer de la empresa o establecimiento útiles de trabajo o materia prima o elaborada; IV. Presentarse al trabajo en estado de embriaguez;
<br>V. Presentarse al trabajo bajo la influencia de algún narcótico o droga enervante, salvo que exista prescripción médica. Antes de iniciar su servicio, el trabajador deberá poner el hecho en conocimiento del patrón y presentarle la prescripción suscrita por el médico;
<br>VI. Portar armas de cualquier clase durante las horas de trabajo, salvo que la naturaleza de éste lo exija. Se exceptúan de esta disposición las punzantes y punzocortantes que formen parte de las herramientas o útiles propios del trabajo;
<br>VII. Suspender las labores sin autorización del patrón;
<br>VIII. Hacer colectas en el establecimiento o lugar de trabajo;
<br>IX. Usar los útiles y herramientas suministrados por el patrón, para objeto distinto de aquél a que están destinados;
<br>X. Hacer cualquier clase de propaganda en las horas de trabajo, dentro del establecimiento.<br>

 <br><br>
<font size="5"><center><p> CAPITULO XI MEDIDAS DISCIPLINARIAS<br>
<font size="5">ART. 52.- <font size="3">Son causas de rescisión de la relación de trabajo, sin responsabilidad para el patrón (ART. 47- LFT).<br>
<br>I. Engañarlo el trabajador o en su caso, el sindicato que lo hubiese propuesto o recomendado con certificados falsos o referencias en los que se atribuyan al trabajador capacidad, aptitudes o facultades de que carezca. Esta causa de rescisión dejará de tener efecto después de treinta días de prestar sus servicios el trabajador;
<br>II. Incurrir el trabajador, durante sus labores, en faltas de probidad u honradez, en actos de violencia, amagos, injurias o malos tratamientos en contra del patrón, sus familiares o del personal directivo o administrativo de la empresa o establecimiento, o en contra de clientes y proveedores del patrón, salvo que medie provocación o que obre en defensa propia;
<br>III. Cometer el trabajador contra alguno de sus compañeros, cualquiera de los actos enumerados en la fracción anterior, si como consecuencia de ellos se altera la disciplina del lugar en que se desempeña el trabajo;
<br>IV. Cometer el trabajador, fuera del servicio, contra el patrón, sus familiares o personal directivo administrativo, alguno de los actos a que se refiere la fracción II, si son de tal manera graves que hagan imposible el cumplimiento de la relación de trabajo;
<br>V. Ocasionar el trabajador, intencionalmente, perjuicios materiales durante el desempeño de las labores o con motivo de ellas, en los edificios, obras, maquinaria, instrumentos, materias primas y demás objetos relacionados con el trabajo;
<br>VI. Ocasionar el trabajador los perjuicios de que habla la fracción anterior siempre que sean graves, sin dolo, pero con negligencia tal, que ella sea la causa única del perjuicio;
<br>VII. Comprometer el trabajador, por su imprudencia o descuido inexcusable, la seguridad del establecimiento o de las personas que se encuentren en él;
<br>VIII. Cometer el trabajador actos inmorales en el establecimiento o lugar de trabajo;
<br>IX. Revelar el trabajador los secretos de fabricación o dar a conocer asuntos de carácter reservado, con perjuicio de la empresa;
<br>X. Tener el trabajador más de tres faltas de asistencia en un período de treinta días, sin permiso del patrón o sin causa justificada;
<br>XI. Desobedecer el trabajador al patrón o a sus representantes, sin causa justificada, siempre que se trate del trabajo contratado;
<br>XII. Negarse el trabajador a adoptar las medidas preventivas o a seguir los procedimientos indicados para evitar accidentes o enfermedades;
<br>XIII. Concurrir el trabajador a sus labores en estado de embriaguez o bajo la influencia de algún narcótico o droga enervante, salvo que, en este último caso, exista prescripción médica. Antes de iniciar su servicio, el trabajador deberá poner el hecho en conocimiento del patrón y presentar la prescripción suscrita por el médico;
<br>XIV. La sentencia ejecutoriada que imponga al trabajador una pena de prisión, que le impida el cumplimiento de la relación de trabajo; y
<br>XV. Las análogas a las establecidas en las fracciones anteriores, de igual manera grave y de consecuencias semejantes en lo que al trabajo se refiere.
<br>El patrón deberá dar al trabajador aviso escrito de la fecha y causa o causas de la rescisión.
<br>El aviso deberá hacerse del conocimiento del trabajador y en caso de que éste se negare a recibirlo, el patrón dentro de los cinco días siguientes a la fecha de rescisión, deberá hacerlo del conocimiento de la junta respectiva, proporcionando a ésta el domicilio que tenga registrado y solicitando su notificación al trabajador.
<br>La falta de aviso al trabajador o a la Junta, por sí sola bastará para considerar que el despido fue injustificado.

<br>
<font size="5">ART. 53.- <font size="3">Será motivo de sanción el incumplimiento de alguna de las disposiciones establecidas en el presente Reglamento Interno de Trabajo, Contrato Individual de Trabajo y la Ley Federal del Trabajo.
<br>

<font size="5">ART. 54.- <font size="3">De acuerdo con la gravedad de la falta, las medidas disciplinarias consistirán en lo siguiente:
<br>a)   Amonestación escrita: se aplica cuando el trabajador reincide en una falta y de la cual se le notificó de forma verbal, o bien cuando el error humano o negligencia resultan de mayor gravedad.
<br>b)   Amonestación escrita con suspensión: se aplica a infracciones de carácter severo o bien por reincidencias graves ya sancionadas.
<br>c)   Suspensión de 1 a 8 días sin goce: aplica a faltas muy graves o por reincidencias de una conducta ya sancionada con anterioridad.
<br>d)   Rescisión: contemplar lo previsto en el ART. 47 de la Ley Federal del Trabajo.

<br>
<font size="5">ART. 55.- <font size="3">Las amonestaciones o sanciones a que se haga acreedor el personal se harán a través del departamento de Talento Humano y por escrito, dirigidos al infractor e informando de los mismas a su jefe inmediato, a fin de considerar su caso.
<br>

<font size="5">ART. 56.- <font size="3">La suspensión máxima que podrá aplicar la empresa al trabajador como medida disciplinaria al incurrir en una falta o infracción a sus reglamentos o políticas será de ocho días máximos sin goce de sueldo.
<br>

<font size="5">ART. 57.-<font size="3"> Es facultad y derecho de la Empresa aplicar en todo su alcance el ART. 47 de la LFT, al incurrir el trabajador en las faltas o casos que señale dicho ordenamiento.
<br>

 </p></center><br> 
 
 <br><br>
<font size="5"><center><p> CAPITULO XII
TRANSITORIOS
 </p></center><br> 
<font size="5">ART. 58.- <font size="3">Los trabajadores tendrán el deber de atender y cumplir con las instrucciones y disposiciones que dicte la empresa con el objeto de mantener la buena marcha y armonía del lugar de trabajo.


<font size="5">ART. 59.- <font size="3">Cuando en los términos del Art 110 de la LFT el trabajador contraiga deudas por errores, pérdidas, averías, etc. Se le descontará de su salario el importe correspondiente de la previa investigación.


<font size="5">ART. 60.- <font size="3">La Empresa y sus representantes autorizados, cumplirán y observarán las disposiciones del presente RIT y todo aquello que le corresponda, tanto en las relaciones con los trabajadores en general como en lo correspondiente a las disposiciones en vigor de la Higiene y prevención de accidentes de trabajo, así mismo se observará y cumplirá con los ordenamientos que complemente la Empresa y el personal del RIT.
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
                 <option value="RTI">RTI</option>
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
