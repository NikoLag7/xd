<?php

$bd = "consesionario";
$usuario = "root";
$contrasena = ""; 

TRY {
	$base_datos = new PDO (
		'mysql:host=localhost;
		dbname='.$bd,$usuario,$contrasena
	);
}	

	catch (exception $e){

		echo "problemas con la conexion";
	}
?>