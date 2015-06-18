<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../js/funciones.js"></script>
<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta</title>
<link href="../css/estilos_login.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="../css/demo_table.css" rel="stylesheet" />
    <div class="header"><?php include("cabecera.php"); ?></div>
    <div class="nav"><?php include("navega.php");?>
      <script type="text/javascript">
	  document.getElementById('div3').style.backgroundColor="#D7B1FB";
	  document.getElementById("div3").innerHTML="MÓDULO DE CONSULTAS";	  
      </script> 
    
<p>&nbsp;</p>
	<div class="section"><?php include("seccion.php");?></div>
</head>
<body>
<div class="content"> 
<article id="contenido"></article>
</div>
    
</body>	
	
      <div class="footer"> <?php include("pie.php"); ?></div>
</html>