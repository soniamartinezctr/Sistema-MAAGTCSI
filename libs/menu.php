<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
//initialize the session
	if (!isset($_SESSION)) {
	  session_start();
	}
	$usuario = $_SESSION['MM_Username'];
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

<div id='cssmenu'>
<ul>
   <li class='active'><a href='./index.php'><span>Inicio</span></a></li>
   
<?php 
	if ($altas == 1) {
		echo "<li><a href='./includes/altas.php'><span>Altas</span></a></li>";
    }
	if ($modificaciones == 1) {
		echo "<li><a href='./includes/modifica.php'><span>Modifica</span></a></li>";
    }
	if ($bajas == 1) {
		echo "<li><a href='./includes/elimina.php'><span>Elimina</span></a></li>";
    }
	if ($consultas == 1) {
		echo "<li><a href='./includes/consulta.php'><span>Consulta</span></a></li>";
    }
	if ($descargas == 1) {
		echo "<li><a href='./includes/descarga.php'><span>Descarga</span></a></li>";
    }
	if ($registro == 1) {
		echo "<li class='last'><a href='#'><span>Usuarios</span></a></li>";
    }
?>
</ul>
</div> 