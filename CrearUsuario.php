<!--
	Módulo de creación de Usuarios
	Martes, 08 de mayo del 2018
	09:02 PM
	Gemis Daniel Guevara Villeda
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
		if($_SESSION["PrivilegioUsuario"] == 'Administrador'){
		?>
			<body>
				<nav class="navbar navbar-default">
				  <div class="container-fluid"> 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					  <a class="navbar-brand" href="principal.php">Administración</a></div>
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

				<div class="form-group">
					<form name="CrearUsuario" action="CrearUsuario.php" method="post">
						<div class="container">
							<div class="row text-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 col-xs-offset-3">
										<h1 class="text-center">Registro de usuario</h1>
										</div>
									</div>
									<!-- Contenedor del ícono del Usuario -->
									
										<div class="Icon">
											<!-- Icono de usuario -->
											<span class="glyphicon glyphicon-user"></span>
										</div>
									
								<!-- Nombre del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
											<input type="text" class="form-control" name="NombreUsuario" placeholder="Nombre" id="NombreUsuario" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Apellido del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
											<input type="text" class="form-control" name="ApellidoUsuario" placeholder="Apellido" id="ApellidoUsuario" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Dirección del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
											<input type="text" class="form-control" name="DireccionUsuario" placeholder="Dirección" id="DireccionUsuario" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- DPIPersona -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-credit-card"></i></span>
											<input type="text" class="form-control" name="DPIPersona" placeholder="DPI" id="DPIPersona" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Teléfono del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
											<input type="tel" class="form-control" name="TelefonoUsuario" placeholder="Teléfono" id="TelefonoUsuario" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Correo del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
											<input type="email" class="form-control" name="CorreoUsuario" placeholder="Correo" id="CorreoUsuario" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Fecha de nacimiento -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="date" class="form-control" name="FechaNacimiento" placeholder="Fecha de Nacimiento" id="FechaNacimiento" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Privililegio del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
											<select class="form-control" name="PrivilegioUsuario" id="PrivilegioUsuario">
											<option value="" disabled selected>Privilegios</option>
													<option value="Administrador">Administrador</option>
													<option value="Jefatura">Jefatura</option>
													<option value="Operador">Operador</option>
											</select>
										</div>
									</div>
								</div>
								<br>
								<!-- Nombre de usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="text" class="form-control" name="username" placeholder="Nombre e Usuario" id="username" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Contraseña del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="password" class="form-control" name="PasswordUsuario" placeholder="Contraseña" id="PasswordUsuario" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Repetición de contraseña del usuario -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="password" class="form-control" name="RePasswordUsuario" placeholder="Ingrese nuevamente la contraseña" id="RePaswordUsuario" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<!-- Resgistrar -->
								<div class="row">
									<div class="col-xs-12 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<div clss="btn-group">
												<button type="submit" class="btn btn-primary" id="IngresoLog" name="enviar">Registrar</button>
												<button type="button" class="btn btn-danger">Cancelar</button>
											</div>
										</div>
									</div>
								</div>
								<br>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php
					include_once "Seguridad/conexion.php";
					if (isset($_POST['enviar'])) {
						// Obtenemos los valores de todos los campos y los almacenamos en variables
						$NombreUsuario=$_POST['NombreUsuario'];
						$ApellidoUsuario=$_POST['ApellidoUsuario'];
						$FechaNacimiento=$_POST['FechaNacimiento'];
						$DireccionUsuario=$_POST['DireccionUsuario'];
						$DPIPersona=$_POST['DPIPersona'];
						$TelefonoUsuario=$_POST['TelefonoUsuario'];
						$CorreoUsuario=$_POST['CorreoUsuario'];
						$FechaNacimiento=$_POST['FechaNacimiento'];
						$PrivilegioUsuario=$_POST['PrivilegioUsuario'];
						$username=$_POST['username'];
						$PasswordUsuario=$_POST['PasswordUsuario'];
						$RePasswordUsuario=$_POST['RePasswordUsuario'];
						
						if($PasswordUsuario != $RePasswordUsuario){
							?>
							<div class="alert alert-warning">Las contraseñas no coinciden</div>
							<?php
						}
						else{
							$ContraseniaEncriptada = md5($PasswordUsuario);
							// Creamos la consulta para la insersión de los datos
							$InsertarPersona = "INSERT INTO Persona(NombrePersona, ApellidoPersona, DireccionPersona,
															 DPIPersona, TelefonoPersona, FechaNacPersona, CorreoPersona)
													  Values('".$NombreUsuario."', '".$ApellidoUsuario."', '".$DireccionUsuario."', '".$DPIPersona."',
															 '".$TelefonoUsuario."', '".$FechaNacimiento."', '".$CorreoUsuario."')";
							
							if(!$resultado = $mysqli->query($InsertarPersona)){
								echo "Error: La ejecución de la consulta falló debido a: \n";
								echo "Query: " . $InsertarPersona . "\n";
								echo "Error: " . $mysqli->errno . "\n";
								exit;
							}
							//$id = mysqli_insert_id($mysqli);
							//printf("El último registro insertado tiene el id %d\n", $id);
							$InsertarUsuario = "INSERT INTO Usuario (NombreUsuario, ContraseniaUsuario, idPersona, PrivilegioUsuario)
															VALUES('".$username."', '".$ContraseniaEncriptada."', '".mysqli_insert_id($mysqli)."', '".
																	$PrivilegioUsuario."');";
																	
							if(!$resultado2 = $mysqli->query($InsertarUsuario)){
								echo "Error: La ejecución de la consulta falló debido a: \n";
								echo "Query: " . $InsertarUsuario . "\n";
								echo "Error: " . $mysqli->errno . "\n";
								exit;
							}
						}
					}
				?>
				
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
				<script src="js/jquery-1.11.3.min.js"></script>

				<!-- Include all compiled plugins (below), or include individual files as needed --> 
				<script src="js/bootstrap.js"></script>
				<!-- Pie de página, se utilizará el mismo para todos. -->
				<footer>
					<hr>
					<div class="row">
						<div class="text-center col-md-6 col-md-offset-3">
							<h4>Sistema de Reportes</h4>
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
