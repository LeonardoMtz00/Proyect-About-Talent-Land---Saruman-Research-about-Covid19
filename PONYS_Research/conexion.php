<?php
/*Datos de conexion a la base de datos*/
$db_host = "localhost"; 
$db_user = "root";
$db_pass = "root";
$db_name = "ictrp";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name); //variable conexion. Pasamos nuestras variables, host, user, pass. Mediante la funcion "mysqli_connect".

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>