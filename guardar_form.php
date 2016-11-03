<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mydb';

$conexion = mysqli_connect($host, $user, $pass) or die ('problemas con el servidor');
mysqli_select_db($conexion, $db) or die ('problemas con la base de datos');

//recuperamos los valores del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$web = $_POST['web'];
$proyecto = $_POST['proyecto'];
$empresa = $_POST['empresa'];
$ubicacion = $_POST['ubicacion'];
$municipio = $_POST['municipio'];
$origen = $_POST['origen'];
$sector = $_POST['sector'];
$inversion = $_POST['inversion'];
$empleos = $_POST['empleos'];
$dependencia = $_POST['dependencia'];
$giro = $_POST['giro'];
$fase = $_POST['fase'];




$query1  = "INSERT INTO contacto (nombre, telefono, email, direccion, web) VALUES ('$nombre','$telefono','$email','$direccion','$web')";
 mysqli_query($conexion, $query1); 

$query2  = "INSERT INTO empresas (proyecto, empresa, ubicacion, municipio, origen, sector, inversion, empleos, dependencia, giro, fase) VALUES ('$proyecto','$empresa','$ubicacion','$municipio','$origen','$sector','$inversion','$empleos','$dependencia','$giro','$fase')"; 
mysqli_query($conexion, $query2); 

header("Location: form_validation.php");  
?>