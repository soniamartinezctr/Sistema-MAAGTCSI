<?php
	extract ($_REQUEST);
	ini_set('max_execution_time', 60);
	$videocon='../terminados/'.$videos.$formato;
	$fichero="C:/videosusuario/".$videos.$formato;
	if (file_exists($fichero))
	{
		$mensaje1="El video ya existe";
		print "<script>alert('$mensaje1')</script>";
		print("<script>window.location.replace('../includes/descarga.php');</script>");
	}
	else
	{
	$archivo2="C:/videosusuario/".$codigo_bar.$formato;
	copy($videocon, $archivo2);
	header("Location: ../html/descarga.html");	
	}
?>