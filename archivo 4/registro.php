<?php

if (!empty($_POST['enviardatos'])){

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = $conexion->query("INSERT INTO tabla331(cedula, nombre, apellido, fecha, usuario, clave)
VALUES ('$cedula','$nombre', '$apellido', '$fecha', '$usuario', '$clave')");

}

?>
