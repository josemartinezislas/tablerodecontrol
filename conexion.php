<?php

	$servidor = "localhost";
	$usuario = "admcoinhi";
	$pass = "Co.Ngo3016";
	$db_name = "inversiones";

	$conexion=mysqli_connect($servidor,$usuario,$pass,$db_name);

	if (mysqli_connect_errno($conexion)) {
		echo "LA BASE DE DATOS NO HA PODIDO CONECTARSE".mysqli_connect_errno();
		
	}

	else {
		 header("Datos Guardados con exito");
	}

?>