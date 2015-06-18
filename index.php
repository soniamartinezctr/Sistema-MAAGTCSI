<?php require_once('Connections/catalogacion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
} else   session_destroy();

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['strUsuario'])) {
  $loginUsername=$_POST['strUsuario'];
//	$password=md5($_POST['password']);
  $password=$_POST['strPassword']; 
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "principal.php";
  $MM_redirectLoginFailed = "html/error_usu.html";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_catalogacion, $catalogacion);
  $LoginRS__query=sprintf("SELECT usuario, password intEstado FROM tblusuarios WHERE usuario=%s AND password=%s AND intEstado=1",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $catalogacion) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	
    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
	
  } 
  
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Catalogación Videográfica</title>
<link href="css/estilos_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
      <div class="header"> <?php include("includes/cabecera.php"); ?></div>
      <div class="content">
      	<form action="<?php echo $loginFormAction; ?>" method="POST" name="form1">
        	<table width="356" border="0" class="tab_login">
  <tr>
    <td width="149">&nbsp;</td>
    <td width="189">&nbsp;</td>
  </tr>
  <tr>
    <td>Usuario:</td>
    <td><label for="strUsuario"></label>
      <input type="text" autofocus="autofocus" name="strUsuario" id="strUsuario" /></td>
    </tr>
  <tr>
    <td>Contraseña:</td>
    <td><label for="strPassword"></label>
      <input type="password" name="strPassword" id="strPassword" /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Enviar" class="enviar" /></td>
    <td><input type="reset" name="button2" id="button2" value="Restablecer"  class="enviar"/></td>
  </tr>
</table>

        </form>
      </div>
      <div class="footer"> <?php include("includes/pie.php"); ?></div>
    </div>
</body>
</html>