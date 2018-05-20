<!--
	Formulario de sevicio de Incendio
	Miercoles, 16 de mayo del 2018
	21:44 PM
	Alex Alonzo
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
							<h1 class="text-center">Servicio De Incendio</h1>
							</div>
						</div>
						<!-- Contenedor del ícono del Usuario -->
							<div class="Icon">
								<!-- Icono de usuario -->
								<!-- <span class="glyphicon glyphicon-user"></span>>-->
							</div>
					<div class="row">
					<!-- Control-->
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
						

						<div class="col-xs-3">
							<div class="input-group input-group-sm mb-3">
							<span class="input-group-addon" id="sizing-addon1"><i>Fecha:</i></span>
							<input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						
					</div>
					</br>
					<div class="row">
						<!-- Hora_Salida -->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Hora Salida:</i></span>
								<input type="time" class="form-control" name="Horasalida" id="Horasalida" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Hora_Entrada -->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Hora Entrada:</i></span>
								<input type="time" class="form-control" name="Horaentrada" id="Horaentrada" aria-describedby="sizing-addon1" required>
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
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Nombre del Solicitante:</i></span>
								<input type="text" class="form-control" name="NombreSolicitante" id="NombreSolicitante" aria-describedby="sizing-addon1" required>
							</div>
							</div>
					<!-- Radio Telefonista -->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Radio Telefonista:</i></span>	
								<input type="text" class="form-control" name="RadioTelefonista" id="RadioTelefonista" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
						</br>
						
							<div class="container">
				  <div class="row text-center">
					<div class="container-fluid">
						<div class="row">
						</div>
						<!-- PROPIEDAD INMUEBLE -->
						
							<div class="col-xs-6 col-xs-offset-3">
							<h1 class="text-center">Propiedad Inmueble</h1>
							</div>
						</div>
						<!-- Contenedor del ícono del Usuario -->
							<div class="Icon">
								<!-- Icono de usuario -->
							</div>
							
					<div class="row">
						<!-- Propietario-->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Propietario:</i></span>
								<input type="text" class="form-control" name="Propietario" id="Propietario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Direccion del Incendio:</i></span>
								<input type="text" class="form-control" name="OrigenIncendio" id="OrigenIncendio" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						
					</div>
					</br>
					
					<div class="row">
						<!-- Causas -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Causas Principales:</i></span>
								<input type="text" class="form-control" name="Causas" id="Causas" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					
					<div class="row">
						<!-- Valor Aproximado del Inmueble -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Valor Aproximado del Inmueble:</i></span>
								<input type="text" class="form-control" name="Valoraproximadoinmueble" id="Valoraproximadoinmueble" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						
						<!-- Monto Aproximado en Perdidas-->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Valor Aproximado en Perdidas:</i></span>
								<input type="text" class="form-control" name="Personal" id="Personal" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						
						<!-- Aseguradora -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Aseguradora:</i></span>
								<input type="text" class="form-control" name="Aseguradora" id="Aseguradora" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						
						
						
						
						</div>	
					<br>
										<!-- Datos del VEHICULO -->
					
					<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
							<h1 class="text-center">Datos del Vehiculo</h1>
							</div>
						</div>
					
							
					<div class="row">
						<!-- PROPIETARIO DEL VEHICULO-->
						<div class="col-xs-6">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Propietario:</i></span>
								<input type="text" class="form-control" name="Propietario" id="Propietario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<div class="row">
						<!-- CONDUCTOR DEL EHICULO-->
						<div class="col-xs-5">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Conductor:</i></span>
								<input type="text" class="form-control" name="Conductor" id="Conductor" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>	
						
						
					</div>	
					<br>	
					
					<div class="row">
						<!-- TIPO DE DESCRIPCION-->
						<div class="col-xs-5">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Tipo de Descripcion:</i></span>
								<input type="text" class="form-control" name="tipodescripcion" id="tipodescripcion" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- MARCA-->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Marca:</i></span>
								<input type="text" class="form-control" name="Marca" id="Marca" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- MODELO-->
						<div class="col-xs-3">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Modelo:</i></span>
								<input type="text" class="form-control" name="Modelo" id="Modelo" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<!-- PLACAS-->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Placas:</i></span>
								<input type="text" class="form-control" name="Placas" id="Placas" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- VALOR APROXIMADO-->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Valor Aproximado:</i></span>
								<input type="text" class="form-control" name="Valoraproximado" id="Valoraproximado" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- PERDIDAS APROXIMADAS -->
						<div class="col-xs-4">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Perdidas Aproximadas:</i></span>
								<input type="text" class="form-control" name="Perdidas" id="Perdidas" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Otros -->
						</div>
					<br>
					<div class="row">
						<!-- Aseguradora -->
						<div class="col-xs-12">
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-addon" id="sizing-addon1"><i>Aseguradora:</i></span>
								<input type="text" class="form-control" name="Aseguradora" id="Aseguradora" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- En Letras -->
						
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
