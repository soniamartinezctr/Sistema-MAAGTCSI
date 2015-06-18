<?php 
if (!isset($_SESSION)) {
  session_start();
  } else echo" ";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../css/estilos_login.css" type="text/css" media="screen" />

<nav id="nav">

<div id="div1"><h5>Usuario: <?php echo $_SESSION['MM_Username'];?></h5></div>
<div id="div3"><h5></h5></div>
<div id="div2"><h5><a href="../index.php">Cerrar Sesi&oacute;n</a></h5></div>
</nav>
</head>
<body>
</body>
</html>