<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
if (!isset($_SESSION)) {
  session_start();
  extract ($_REQUEST);
	require("../connections/catalogacion.php");  
}
if ( $videos != NULL) {
	$fichero="../videos/".$tit_original.$formato;
	$dir='../terminados/'.$videos.$formato; 					
		if (file_exists($fichero))	{
			header("Location: ../html/noeliminafichero.html");	
		}
			else {	
			$ssql = "DELETE FROM catalogav WHERE id=".$videos;
			$ssql = $mysqli->query($ssql);
			copy($dir, $fichero);
			unlink($dir);
			header("Location: ../html/elimina.html");	
			}
} else
{
	header("Location: ../html/noelimina.html");	
	}
?>