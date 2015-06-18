<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_catalogacion = "localhost";
$database_catalogacion = "catalogacion";
$username_catalogacion = "root";
$password_catalogacion = "";
$catalogacion = mysql_pconnect($hostname_catalogacion, $username_catalogacion, $password_catalogacion) or trigger_error(mysql_error(),E_USER_ERROR); 


	$mysqli = new mysqli("localhost", "root", "", "catalogacion");
	if (mysqli_connect_errno()) {
		errormsg("Conexión fallida: %s\n", mysqli_connect_error());
		exit();
	}
	
function Conectarse(){
	
$servidor="localhost";
$basededatos="catalogacion";
$usuario="root";
$clave="";
$cn=mysql_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos");
mysql_select_db($basededatos ,$cn) or die("Error seleccionando la Base de datos");
mysql_query ("SET NAMES 'utf8'");
return $cn;}
?>