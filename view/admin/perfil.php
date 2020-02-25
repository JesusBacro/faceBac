<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perfil de puestos</title>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  	<!-- Optional theme -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
      </script>    

  </head>
  <body>
  	<div class="container">
	   <center> <h1>Perfil de Puestos</h1>
<h1>B A C R O  C O R P </h1></center>
      <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingresa el Puesto que Deseas Buscar...">
      </div>

	   	    <table class="table table-hover">
        <thead>
          <tr>
            <th>Área</th>
            <th>Departamento</th>
            <th>Puesto</th>
            <th>Descripción</th>            
            
          </tr>
        </thead>
        <tbody class="buscar">
          <tr><td>Administración</td>
          <td>Administración</td>
          <td>Jurídico</td>
          <td>Dirigir las gestiones y estrategias legales en los diversos juicios y trámites.</td>
          </tr>
           <tr><td>Dirección General</td>
          <td>Dirección General</td>
          <td>Dirección General</td>
          <td>Planificar, organizar, dirigir y evaluar las actividades de la empresa, asegurando el cumplimiento de objetivos y metas.</td>
          </tr>
           <tr><td>Operaciones</td>
          <td>Biomédica</td>
          <td>Coordinación de Biomedica</td>
          <td>Coordinar los mantenimientos preventivos y/o correctivos mayores a equipo médico, logrando la satisfacción del cliente mediante la planeación y gestión de los recursos necesarios.</td>
          </tr>
           <tr><td> Finanzas</td>
          <td> Finanzas</td>
          <td>Dirección Finanzas</td>
          <td>Asegurar el cumplimiento de las obligaciones administrativas, contables, financieras y fiscales, ante los socios y las autoridades competentes, para facilitar la actividad de la empresa en las mejores condiciones de coste, liquidez, rentabilidad y seguridad.</td>
          </tr>
           <tr>
               <td>Administración
 </td>
          <td> Recursos Humanos
</td>
          <td>Dirección Administrativa
 </td>
          <td> Administrar, dirigir y controlar eficientemente los recursos humanos, materiales, financieros y tecnológicos de la empresa, diseñando las políticas y procedimientos a seguir en materia presupuestal, flujos de efectivo, movilidad del personal  y  control  del  gasto  administrativo;  garantizando  el suministro oportuno de los recursos requeridos en la implementación de los proyectos, planeación y administración del presupuesto y sus principales indicadores.
</td>
          </tr>
          
          </tr>
           <tr><td> Dirección General
</td>
          <td> Operaciones
</td>
          <td>Dirección Operativa
 </td>
          <td> Gestionar con eficiencia todos los recursos puestos a su disposición para lograr máxima eficacia en los mantenimientos preventivos y correctivos de los equipos electromecánicos y médicos.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Finanzas
</td>
          <td> Finanzas
</td>
          <td>Subdirección de Finanzas
 </td>
          <td> Asegurar el cumplimiento de las obligaciones administrativas, contables, financieras y fiscales, ante los socios y las autoridades competentes, para facilitar la actividad de la empresa en las mejores condiciones de coste, liquidez, rentabilidad y seguridad.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Finanzas
</td>
          <td> Contabilidad
</td>
          <td> Gerencia de Contabilidad
</td>
          <td> Proporcionar información útil y oportuna para la correcta toma de decisiones mediante estados financieros, llevando un control de las operaciones mercantiles y financieras para obtener mayor productividad y aprovechamiento del patrimonio de la empresa.
</td>
          </tr>
          
          
          </tr>
           <tr><td>Administración
 </td>
          <td> Recursos Humanos
</td>
          <td> Gerencia de Talento Humano
</td>
          <td>Diseñar e implementar las diferentes políticas de personal de la empresa, con la finalidad de conseguir un equipo humano adecuado, profesionalizado, motivado y comprometido con los objetivos corporativos, que sea capaz de aportar la máxima contribución individual y colectiva a los resultados globales de la organización.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Administración
 </td>
          <td>Compras
 </td>
          <td> Gerencia de Compras
</td>
          <td> Contribuir al mejoramiento continuo en las adquisiciones de mercancías, bienes, insumos o servicios (calidad, costos, y tiempos de entrega), para realizar los trabajos (servicios) que ofrecemos como empresa en tiempo y forma.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Finanzas
</td>
          <td> Cotizaciones 
</td>
          <td> Gerencia de Cotizaciones
</td>
          <td> Realizar las cotizaciones de manera eficaz en tiempo y forma con el análisis de investigación de mercado, aplicando factores correctos, para obtener expectativas de satisfacción del cliente, en calidad, servicio y precio.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Dirección General
</td>
          <td> Dirección General
</td>
          <td> Representante Legal
</td>
          <td> Realizar las notoficaciones en los términos ordenados en la resolución respectiva, practicando oportunamente las diligencias que se le encomienden y elaborando las actas respectivas de las notificaciones.
</td>
          </tr>
          
          </tr>
           <tr><td>Administración
 </td>
          <td>Servicios Generales
 </td>
          <td>Gerencia de Servicios Generales y Recursos Materiales
 </td>
          <td>Asegurar los servicios generales y de mantenimiento requeridos para la operación eficiente de los bienes muebles e inmuebles.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Dirección General
 </td>
          <td> Contraloría
</td>
          <td>Contraloría
 </td>
          <td>Auditar y revisar las actividades administrativas y financieras, velando por la excelencia operacional de las áreas de gestión de cobranza, tesorería y contabilidad.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Dirección General
 </td>
          <td> Licitaciones
</td>
          <td> Gerencia de Licitaciones
</td>
          <td> Administrar, dirigir y ejecutar los procesos de licitación de las obras públicas, los servicios relacionados con las mismas, las adquisiciones, los arrendamientos y la prestación de servicios de cualquier naturaleza que le sean solicitados, respetando siempre la normatividad correspondiente.
</td>
          </tr>
          
          
          </tr>
           <tr><td>Administración
 </td>
          <td> Administración
</td>
          <td>Digitalización
 </td>
          <td> Control de archivo documental, escaneo y resguardo de ordenes de servicio, facturas y archivo digital por contrato de empresa, digitaizacion de requisiciones internas y externas en CONTPAQ.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Ingeniero de Servicio
</td>
          <td> Sistemas 
</td>
          <td>Gerencia de Sistemas
 </td>
          <td>Proporcionar a cada área del corporativo las herramientas necesarias en manteria de sistemas y mejorar la gestión  de la infomación a gran escala.
 </td>
          </tr>
          
          
          </tr>
           <tr><td> Finanzas
</td>
          <td> Tesorería
</td>
          <td>Gerencia de Tesoreria
 </td>
          <td> Manejar, custodiar, utilizar, recaudar y utilizar los fondos de la empresa, de acuerdo, a los procedimientos y normas establecidas.
</td>
          </tr>
          
          
          </tr>
           <tr><td>Dirección General
 </td>
          <td>Operaciones
 </td>
          <td> Desarrollador de Proyectos
</td>
          <td>Implementar y ejecutar estudios de mercado, cotizaciones y levantamientos para la generación de nuevos proyectos.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Finanzas
 </td>
          <td> Facturación 
</td>
          <td>Coodinación de facturación
 </td>
          <td> Calendarizar, emitir y entregar la facturación en tiempo y forma al área de Gestión y Cobranza para su cobro.
</td>
          </tr>
          
          
          </tr>
           <tr><td>Administración
 </td>
          <td>Servicios Generales
 </td>
          <td>Coordinación de Servicios Generales
 </td>
          <td> Mantener en óptimas condiciones de funcionamiento el parque vehicular y  el inmueble, así como  dar atención a los requerimientos de las diferentes áreas del Corporativo.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Finanzas
</td>
          <td>Facturación 
 </td>
          <td> Facturista
</td>
          <td> Realizar en tiempo y forma, la facturación de los servicios prestados de a cuerdo a los contraton y/o clientes, así como tener el control efectivo de las facturas, para la recuperación de la cartera de clientes para la toma de decisiones.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Finanzas
</td>
          <td>Gestión 
 </td>
          <td>Gerencia de Gestión y Cobranza
 </td>
          <td> Confirmar y entregar la facturación al instituto correspondiente para eliminar la morosidad en la cartera de clientes. Así como la gestión y obtención de todo tipo de liciencias y permisos federales, estatales y municipales
</td>
          </tr>
          
          
          </tr>
           <tr><td> Dirección General
</td>
          <td> Licitaciones
</td>
          <td> Coordinación de Licitaciones
</td>
          <td> Coordinar y dar seguimiento a los procesos de participación en licitaciones.
</td>
          </tr>
            </tr>
           <tr><td> Dirección General
</td>
          <td> Operaciones
</td>
          <td>Gerencia de elevadores
 </td>
          <td>supervisar los procesos llevados a cabo por coordinación, especialista en elevadores y técnicos.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Dirección General
 </td>
          <td> Operaciones
</td>
          <td> Coordinación de Elevadores
</td>
          <td>Coordinar los trabajos de la Ingeniería de elevadores.
 </td>
          </tr>
          
          
          </tr>
           <tr><td> Dirección General
</td>
          <td> Operaciones
</td>
          <td> Mejora Continua
</td>
          <td>Desarrollo de proceso y nuevas tecnologías de la información e implementación de sistemas.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Finanzas
 </td>
          <td> Control de Egresos 
</td>
          <td>Coordinación de Control de Egresos
 </td>
          <td> Administrar y controlar los gastos generales, reembolso de gastos y conciliaciones de tarjetas, así como el control  vehicular  en cuanto a gasolina , consumos y control de casetas de cobro.
</td>
          </tr>
            </tr>
           <tr><td>Operaciones
 </td>
          <td>Biomédica
 </td>
          <td> Ingeniero Especializado
</td>
          <td>Brindar servicio de mantenimiento preventivo y correctivo de calidad a equipo médico.
 </td>
          </tr>
          
          
          </tr>
           <tr><td> Dirección General
</td>
          <td> Operaciones
</td>
          <td> Ingeniero Especializado en Operaciones
</td>
          <td>Realizar mantenimientos correctivos mayores, logrando la satisfacción del cliente mediante la planeación y gestión de los recursos necesarios, así como asegurar que la maquinaria no represente ningún riesgo para el personal usuario.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Administración
 </td>
          <td> Compras
</td>
          <td> Analista de Compras
</td>
          <td> Colaborar con la gerencia de compras en la cotización y elaboración de órdenes de compra, buscando siempre la mejor opción en el mercado en cuanto a calidad y precio de los artículos o servicios, para lograr un óptimo nivel de surtimiento de los materiales.
</td>
          </tr>
          
          
          </tr>
           <tr><td>Administración
 </td>
          <td>Calidad
 </td>
          <td> Coordinación de Calidad
</td>
          <td>Dirigir, planificar, organizar y controlar los procesos, procedimientos y actividades relacionados con la gestión de la calidad, con el fin de garantizar el cumplimiento de sus estándares y normas, así como favorecer la mejora continua.
 </td>
          </tr>
            </tr>
           <tr><td> Dirección General
</td>
          <td> Operaciones
</td>
          <td>Auxiliar Administrativo de Operaciones
 </td>
          <td>Auxiliar en la ejecución de procesos, relacionado con las actividades de operación, así como dar seguimiento y apoyar todos los procedimientos administrativos de la misma con el fin de garantizar el cumplimiento de los estándares y favorecer la mejora continua.
 </td>
          </tr>
          
          
          </tr>
           <tr><td>Administración
 </td>
          <td>Administración
 </td>
          <td>Capacitación
 </td>
          <td> Coordinación e implementación de cursos de capacitación por áreas, según las necesidades de las mismas.
</td>
          </tr>
         </tr>
           <tr><td>Dirección General
 </td>
          <td> Operaciones
</td>
          <td> Ingeniero de servicio
</td>
          <td> Proveer de conocimientos técnicos sobre los productos o servicios que la empresa ofrece. brindar todo el apoyo en la instalación, mantenimiento o resolución de problemas con el servicio. Dar apoyo en las reuniones de venta, utilizando su conocimiento para explicar las características del producto y así ayudar al equipo.
</td>
          </tr></tr>
           <tr><td>Finanzas
 </td>
          <td> Control de Egresos 
</td>
          <td>Analista Control de Egresos
 </td>
          <td>Apoyar al área de Control de Egresos en la administración y registro de los gastos de la organización.
 </td>
          </tr></tr>
           <tr><td>Administración
 </td>
          <td>Servicios Generales
 </td>
          <td> Auxiliar Servicios Generales
</td>
          <td>Apoyar en la compra y recolección de material diverso para suministra a las distintas áreas.
 </td>
          </tr></tr>
           <tr><td> Finanzas
</td>
          <td>Cotizaciones 
 </td>
          <td> Analista de Cotizaciones
</td>
          <td>Auxiliar en el control, realización y envió de información general, administrativa del área de cotizaciones.
 </td>
          </tr></tr>
           <tr><td> Finanzas
</td>
          <td> Contabilidad
</td>
          <td>Analista Contable
 </td>
          <td>Verificar, codificar, registrar y tramitar toda la información contable de la empresa.
 </td>
          </tr></tr>
           <tr><td> Finanzas
</td>
          <td>Finanzas
 </td>
          <td>Fiscalista
 </td>
          <td>Responsable del área de Impuestos, determinación de pagos provisionales mensuales, declaración anual ante el SAT. (atención de requerimientos), liquidaciones IMSS (prima de riesgo) e INFONAVIT. Atención de requerimientos), recuperación de impuestos a favor, disminución de costos en áreas de personal.
 </td>
          </tr></tr>
           <tr><td> Administración
</td>
          <td>Recursos Humanos
 </td>
          <td>Analista de Talento Humano
 </td>
          <td> Apoyar en los procesos de administración de capital humano, para mantener el control de los aspectos relacionados al desarrollo del personal.
</td>
          </tr></tr>
           <tr><td> Dirección General
</td>
          <td>Operaciones
 </td>
          <td>Elevadorista
 </td>
          <td> Realizar trabajos de la Ingeniería de elevadores.
</td>
          </tr></tr>
           <tr><td> Dirección General
</td>
          <td> Operaciones
</td>
          <td>Analista Bafar
 </td>
          <td>Realizar levantamiento para identificar los puntos de mantenimiento correctivo y preventivo de cámaras de refrigeración.
 </td>
          </tr></tr>
           <tr><td>Dirección General
 </td>
          <td>Operaciones
 </td>
          <td>Especialista en elevadores
 </td>
          <td> Supervisar el mantenimiento y ben ffuncionamiento de los elevaores, por medio de los técnicos encargados de la reparación y mentenimiento de los mismos.
</td>
          </tr></tr>
           <tr><td> Operaciones
</td>
          <td> Almacén
</td>
          <td>Auxiliar de almacén
 </td>
          <td> Asistir en las actividaes de almacén, recibiendo, revisando y organizando los materiales y productos, equipos y herramientas a fin de atender oportunamente las entregas a los usuarios.
</td>
          </tr>
           <tr><td>Finanzas
 </td>
          <td> Gestión 
</td>
          <td>Analista de Gestión y Cobranza
 </td>
          <td> Auxiliar en la entrega, recopilación y control de las facturas por cobrar. Así como apoyo a trámites de llenados y permisos.
</td>
          </tr>
          
          
          </tr>
           <tr><td> Dirección General
</td>
          <td> Licitaciones
</td>
          <td>Analista de Licitaciones
 </td>
          <td> Recopilar información para integrar y presentar una propuesta comercial, facilitando el cumplimiento de los proyectos.
</td>
          </tr>
            <tr><td> Dirección General
</td>
          <td> Licitaciones
</td>
          <td>Analista de Licitaciones
 </td>
          <td> Recopilar información para integrar y presentar una propuesta comercial, facilitando el cumplimiento de los proyectos.
</td>
          </tr>
          
          <tr><td> Administración
</td>
          <td>Servicios Generales
 </td>
          <td>Monitorista
 </td>
          <td>Rastrear las ubicaciones y recorridos de los carros por GPS y Webfleet, así como los reportes respectivos para dichas funciones.
 </td>
          </tr>
          <tr><td>Finanzas
 </td>
          <td> Contabilidad
</td>
          <td>Analista de Contabilidad
 </td>
          <td> Tomar decisiones sobre estados financieros, llevando un control de las operaciones mercantiles y financieras para obtener mayor productividad y aprovechamiento del patrimonio de la empresa.
</td>
          </tr>
          <tr><td>Administración
 </td>
          <td> Servicios Generales
</td>
          <td> Auxiliar de Control Vehicular
</td>
          <td>Auxiliar en el adecuado funcionamiento y estado de los vehículos propiedad de la empresa.
 </td>
          </tr>
          <tr><td>Finanzas
 </td>
          <td> Gestión 
</td>
          <td>Gestor
</td>
          <td>Cobranza, resolver problemáticas de la unidad, hacer convenios, afiliaciones, llevar control de permisos, licencias estatales y locales, apoyo a todas las áreas.
 </td>
          </tr>
          <tr><td>Operaciones
 </td>
          <td> Almacén
</td>
          <td>Encargado de Almacén
 </td>
          <td>Mantener el abastecimiento de la materia prima para la empresa, llevando los controles y aplicando los procedimientos establecidos, así como conservar los inventarios dentro de los rangos de máximos y mínimos en el almacén de la empresa. Controlar eficientemente los recursos materiales y tecnológicos asignados a su cargo para cumplir el programa de trabajo, apegados a las normas, reglamentos y procedimientos dentro de la Empresa.
 </td>
          </tr>
          <tr><td> Operaciones
</td>
          <td> Biomédica
</td>
          <td> Tecnico Especializado
</td>
          <td>Auxiliar en el proceso de revisión y mantenimiento de la maquinaria mediante la realización de tareas asignadas.
 </td>
          </tr>
          <tr><td>Ingeniero de Servicio
 </td>
          <td>Sistemas 
 </td>
          <td>Auxiliar de Sistemas
 </td>
          <td> Proporcionar a las áreas del corporativo herramientas, soporte y asistencia personalizada para la gestión de actividades de cada departamento.
</td>
          </tr>
          <tr><td>Administración
 </td>
          <td>Servicios Generales
 </td>
          <td>Auxiliar de Limpieza
 </td>
          <td>Realizar actividades de limpieza para garantizar la higiene dentro de la organización
 </td>
          </tr>
          <tr><td>Administración
 </td>
          <td> Compras
</td>
          <td>Auxiliar de Compras
 </td>
          <td>Colaborar con la gerencia de compras en la cotización y elaboración de órdenes de compra, buscando siempre la mejor opción en el mercado en cuanto a calidad  y precio de los artículos o servicios, para lograr un óptimo nivel de surtimiento de las materias.
 </td>
          </tr>
           <tr><td>Administración
 </td>
          <td>Administración
 </td>
          <td>Auxiliar Administrativo
 </td>
          <td> Apoyar a las áreas administrativas y operativas del corporativo.
</td>
          </tr>
           <tr><td> Administración
</td>
          <td> Administración
</td>
          <td> Auxiliar de Servicios Generales
</td>
          <td>Apoyar con diversas actividades al área de servicios generales con las funciones correspondientes.
 </td>
          </tr>
           <tr><td>Administración
 </td>
          <td>Administración
 </td>
          <td>Auxiliar Contable
 </td>
          <td>Apoyar al área de contabilidad en funciones respecto a estados financieros, llevando un control de las operaciones mercantiles y financieras para obtener mayor productividad y aprovechamiento del patrimonio de la empresa.
 </td>
          </tr>
           <tr><td>Dirección General
 </td>
          <td>Dirección General
 </td>
          <td> Auxiliar de cotizaciones
</td>
          <td>Apoyar en la realización de las cotizaciones de manera eficaz en tiempo y forma con el análisis de investigación de mercado, aplicando factores correctos, para obtener expectativas de satisfacción del cliente, en calidad, servicio y precio.
 </td>
          </tr>
           <tr><td>Finanzas
 </td>
          <td>Finanzas
 </td>
          <td> Auxiliar de Finanzas
</td>
          <td> Apoyar a asegurar el cumplimiento de las obligaciones administrativas, contables, financieras y fiscales, ante los socios y las autoridades competentes, para facilitar la actividad de la empresa en las mejores condiciones de coste, liquidez, rentabilidad y seguridad..
</td>
          </tr>
           <tr><td> Finanzas
</td>
          <td> Gestión 
</td>
          <td> Auxiliar de Gestión
</td>
          <td> Apoyar en la cobranza, resolver problemáticas de la unidad, hacer convenios, afiliaciones, llevar control de permisos, licencias estatales y locales, apoyo a todas las áreas.
</td>
          </tr>
           <tr><td>Dirección General
 </td>
          <td>Dirección General
 </td>
          <td>Asistente de Dirección
 </td>
          <td>Proporcionar un alto nivel de apoyo administrativo a su jefe ayudando con las tareas administrativas, la organización de teleconferencias, la  programación de reuniones y la  preparación de la correspondencia de la empresa, entre otras.
 </td>
          </tr>
           <tr><td>Administración
 </td>
          <td> Administración
</td>
          <td>Auxiliar de Cocina

 </td>
          <td>Apoyar al encargado de cocina con la limpieza de la misma y todo lo que esta conlleve, así como la preparación de algunos alimentos.
 </td>
          </tr>
           <tr><td>Administración
 </td>
          <td>Administración
 </td>
          <td> Intendente
</td>
          <td>Asegurar la limpieza y orden requeridos para la operación eficiente de los bienes muebles e inmuebles.
 </td>
          </tr>
          <tr><td> Administración
</td>
          <td> Servicios Generales
</td>
          <td>Ayudante General
 </td>
          <td> Dar mantenimiento a las edificaciones de la Organización utilizando las técnicas, materiales y herramientas necesarias para asegurar el correcto acabado de dichas estructuras física
</td>
          </tr>
          <tr><td>Administración
 </td>
          <td>Administración
 </td>
          <td>Interno
 </td>
          <td> Apoyar a las actividades generales que asigne el área a la que se brinda el apoyo.
</td>
          </tr>
          
        
                                         
        </tbody>
      </table>
  <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ATRAS</a>
    </div>
  </body>
</html>
