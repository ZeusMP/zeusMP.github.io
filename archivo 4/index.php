
<?php


require_once 'conexion.php';
require_once 'registro.php';



?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	
	<title>Registrar</title>
</head>
<body>
	<div><h1>Formulario</h1></div>

	<form method="POST">
		
		<div class="inputs-info">
			<input type="text" name="cedula" placeholder="Cedula" class="h">

			<input type="text" name="nombre" placeholder="Nombre" class="h">

			<input type="text" name="apellido" placeholder="Apellido" class="h">

			<input type="date" name="fecha"class="h">

			<input type="text" name="usuario" placeholder="Usuario" class="h">
			
			<input type="password" name="clave" placeholder="Clave" class="h">

		</div>

		<div class="input-btn">
			<input type="submit" name="enviardatos" value="Registrar" class="in">
		</div>


	</form>
	<script src="js/formulario.js"></script>




	
</body>
</html>