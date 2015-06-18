<?PHP
require_once('../Connections/catalogacion.php');
//initialize the session
	if (!isset($_SESSION)) {
	  session_start();
	}
	$usuario = $_SESSION['MM_Username']; ;
	mysql_select_db($database_catalogacion, $catalogacion);
	$consulta = sprintf("SELECT * FROM tblusuarios WHERE usuario = '$usuario'");
	$resultado = mysql_query($consulta);
	if (!$resultado) {
		$mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
		$mensaje  .= 'Consulta completa: ' . $consulta;
		die($mensaje);
	}
	if($row =  mysql_fetch_assoc($resultado)){
	   $altas = $row["altas"];
	   $bajas = $row["bajas"];
	   $modificaciones = $row["modificaciones"];
	   $consultas = $row["consultas"];
	   $descargas = $row["descargas"];
	   $registro = $row["registro"];		   
	}
	mysql_free_result($resultado);		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
<div id="seccion">
<div class="navi3">
<ul>
 <?php 
	if ($altas == 1) {
		echo "<li  class='sm1'><a href='altas.php'></a></li>";
    }
	if ($bajas == 1) {
		echo "<li  class='sm2'><a href='elimina.php'></a></li>";
    }
	if ($modificaciones == 1) {
		echo "<li  class='sm3'><a href='modifica.php'></a></li>";
    }
	if ($consultas == 1) {
		echo "<li class='sm4'><a href='consulta.php'></a></li>";
    }
	if ($descargas == 1) {
		echo "<li class='sm5'><a href='descarga.php'></a></li>";
    }
?>
</ul>
</div> 

</head>

<body>
</body>
</html>