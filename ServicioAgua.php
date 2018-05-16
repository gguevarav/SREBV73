<!--
	Módulo de Registro de sevicio de agua
	Martes, 15 de mayo del 2018
	21:44 PM
	Tavito
	UMG - Morales Izabal
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistema de Reportes</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login -->
<link rel="stylesheet" type="text/css" href="text/estilo.css"> 

</head>
	<?php
		//include_once 'Seguridad/conexion.php';
		// Incluimos el archivo que valida si hay una sesión activa
		include_once "Seguridad/seguro.php";
		// Si en la sesión activa tiene privilegios de administrador puede ver el formulario
		if($_SESSION["PrivilegioUsuario"] == 'administrador'){
		?>
			<body>
				<nav class="navbar navbar-default">
				  <div class="container-fluid"> 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					  <a class="navbar-brand" href="principal.php">Principal</a></div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="defaultNavbar1">
					  <ul class="nav navbar-nav">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión de Usuarios<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Crear usuario</a></li>
							<li><a href="#">Eliminar Usuario</a></li>
							<li><a href="#">Editar usuario</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cerrar Sesión<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Seguridad/logout.php">Cerrar Sesión</a></li>
						  </ul>
						</li>
					  </ul>
				</div>
					<!-- /.navbar-collapse --> 
				  </div>
				  <!-- /.container-fluid --> 
				</nav>

				<div class="container">
				  <div class="row text-center">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
							<h1 class="text-center">Servicio De Agua</h1>
							</div>
						</div>
						<!-- Contenedor del ícono del Usuario -->
							<div class="Icon">
								<!-- Icono de usuario -->
								<span class="glyphicon glyphicon-user"></span>
							</div>
					<div class="row">
					<!-- Campo control - servicio de agua -->
						<div class="col-xs-5">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Control:</i></span>
								<input type="text" class="form-control" name="Control" id="Control" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Minutos Trabajados -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
							<span class="input-group-addon" id="sizing-addon1"><i>Minutos Trabajados:</i></span>
							<input type="time" class="form-control" name="MinutosTrabajados" id="MinutosTrabajados" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Fecha -->
						<div class="col-xs-2">
							<div class="input-group input-group-sm mb-3">
							<span class="input-group-addon" id="sizing-addon1"><i>Fecha:</i></span>
							<input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					</br>
					<div class="row">
						<!-- Salida -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Salida:</i></span>
								<input type="text" class="form-control" name="Salida" id="Salida" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Hora_Salida -->
						<div class="col-xs-2">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Hora:</i></span>
								<input type="time" class="form-control" name="Hora" id="Hora" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Entrada -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Entrada:</i></span>
								<input type="text" class="form-control" name="Entrada" id="Entrada" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Hora_Entrada -->
						<div class="col-xs-2">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Hora:</i></span>
								<input type="time" class="form-control" name="Hora" id="Hora" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Dirección -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Dirección:</i></span>
								<input type="text" class="form-control" name="Direccion" id="Direccion" aria-describedby="sizing-addon1" required>
							</div>
							</div>
					</div>
					</br>
					<div class="row">
					<!-- Nombre del Solicitante -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Nombre del Solicitante:</i></span>
								<input type="text" class="form-control" name="NombreSolicitante" id="NombreSolicitante" aria-describedby="sizing-addon1" required>
							</div>
							</div>
					</div>
					</br>
					<div class="row">
						<!-- Residencia -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Residencia:</i></span>
								<input type="text" class="form-control" name="Residencia" id="Residencia" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					</br>
					<div class="row">
						<!-- Nombre del Establecimiento -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Nombre del Establecimiento:</i></span>
								<input type="text" class="form-control" name="NombreEstablecimiento" id="NombreEstablecimiento" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Centro Asistencial -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Centro Asistencial:</i></span>
								<input type="text" class="form-control" name="CentroAsistencial" id="CentroAsistencial" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Colonia -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Colonia:</i></span>
								<input type="text" class="form-control" name="Colonia" id="Colonia" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Solicitud por Telefono -->
						<div class="col-xs-5">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Solicitud Por Teléfono:</i></span>
								<input type="tel" class="form-control" name="SolicitudPorTelefono" id="SolicitudPorTelefono" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Personal -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Personal:</i></span>
								<input type="text" class="form-control" name="Personal" id="Personal" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Nota -->
						<div class="col-xs-3">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Nota:</i></span>
								<input type="text" class="form-control" name="Nota" id="Nota" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
					<br>
					<div class="row">
						<!-- Unidad(es) -->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Unidad(es):</i></span>
								<input type="text" class="form-control" name="Unidad" id="Unidad" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Piloto(s) -->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Piloto(s):</i></span>
								<input type="text" class="form-control" name="Piloto" id="Piloto" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
					<br>	
					<div class="row">
						<!-- Personal Destacado -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Personal Destacado:</i></span>
								<input type="text" class="form-control" name="PersonalDestacado" id="PersonalDestacado" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
					<br>
					<div class="row">
						<!-- Radio Telefonista -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Radio Telefonista:</i></span>	
								<input type="text" class="form-control" name="RadioTelefonista" id="RadioTelefonista" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
					<br>
					<div class="row">
						<!-- Servicio Autorizado Por -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Servicio Autorizado Por:</i></span>
								<input type="text" class="form-control" name="ServicioAutorizadoPor" id="ServicioAutorizadoPor" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
					<br>	
					<div class="row">
						<!-- Galones Distribuidos -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Galones Distribuidos:</i></span>
								<input type="text" class="form-control" name="GalonesDistribuidos" id="GalonesDistribuidos" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
					<br>
					<div class="row">
						<!-- Forma en que se distribuyo: barril -->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Como se distribuyo: Barril:</i></span>
								<input type="text" class="form-control" name="Barril" id="Barril" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Forma en que se distribuyo: Cisterna Subterranea -->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Cisterna Subterránea:</i></span>
								<input type="text" class="form-control" name="CisternaSubterranea" id="CisternaSubterranea" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Cisterna Aerea -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Cistarena Aérea:</i></span>
								<input type="text" class="form-control" name="CisternaAerea" id="CisternaAerea" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Piscina -->
						<div class="col-xs-3">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Piscina:</i></span>
								<input type="text" class="form-control" name="Piscina" id="Piscina" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Pila -->
						<div class="col-xs-2">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Pila:</i></span>
								<input type="text" class="form-control" name="Pila" id="Pila" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Otros -->
						<div class="col-xs-3">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Otros:</i></span>
								<input type="text" class="form-control" name="Otros" id="Otros" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Donativo -->
						<div class="col-xs-5">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Donativo:</i></span>
								<input type="text" class="form-control" name="Donativo" id="Donativo" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- En Letras -->
						<div class="col-xs-7">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>En letras:</i></span>
								<input type="text" class="form-control" name="EnLetras" id="EnLetras" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Observaciones -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Observaciones:</i></span>
								<!--<input type="text" class="form-control" name="Observaciones" id="Observaciones" aria-describedby="sizing-addon1" required>-->
								<textarea class="form-control" name="Observaciones" id="Observaciones" rows="5"></textarea>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Reporte Realiza Por -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Reporte Realiza Por:</i></span>
								<input type="text" class="form-control" name="ReporteRealizaPor" id="ReporteRealizaPor" aria-describedby="sizing-addon1" required>
						</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- Es Conforme El Piloto-->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Es Conforme El Piloto:</i></span>
								<input type="text" class="form-control" name="EsConformeElPiloto" id="EsConformeElPiloto" aria-describedby="sizing-addon1" required>
						</div>
						</div>
					</div>
					</br>
					<div class="row">
						<!-- Vo. Bo: Jefe De Servicio-->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Vo. Bo: Jefe De Servicio:</i></span>
								<input type="text" class="form-control" name="JefeDeServicio" id="JefeDeServicio" aria-describedby="sizing-addon1" required>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="text-center col-md-6 col-md-offset-3">
							<h4>Calle Tulio Maruzzo</h4>
							<h4>Teléfonos 7947-7106 y 7947-7108</h4>
							<h4>Email: relacionespublicas73cvb@gmail.com</h4>
						</div>
					</div>
					</div>
					</br>
					<!-- Resgistrar -->
					<div class="row">
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<div clss="btn-group">
									<button type="button" class="btn btn-primary">Registrar</button>
									<button type="button" class="btn btn-danger">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
					<br>
				</div>
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
				<script src="js/jquery-1.11.3.min.js"></script>

				<!-- Include all compiled plugins (below), or include individual files as needed --> 
				<script src="js/bootstrap.js"></script>
				<!-- Pie de página, se utilizará el mismo para todos. -->
				<footer>
					<hr>
					<div class="row">
						<div class="text-center col-md-6 col-md-offset-3">
							<h4>SREBV73</h4>
							<p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; <a href="http://www.umg.edu.gt/" >www.umg.edu.gt</a></p>
						</div>
					</div>
					<hr>
				</footer> 
			</body>
	<?php
		// De lo contrario lo redirigimos al inicio de sesión
			} 
			else{
				echo "usuario no valido";
				header("location:index.php");
			}
		?>
</html>
