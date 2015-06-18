<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
if (!isset($_SESSION)) {
  session_start();
  extract ($_REQUEST);
  require("../connections/catalogacion.php"); 
}
if ( $videos != NULL) {
	echo $tit_original;
		$ssql = "UPDATE catalogav SET 
		codigo_bar='$codigo_bar',
		id_area='$id_area',
		fecha_reg='',
		anio='',
		idioma='$idioma',
		formato='$formato',
		duracion='',
		tinicial='',
		tfinal='',
		titulo=upper('$titulo'),
		sinopsis=upper('$sinopsis'),
		serie=upper('$serie'),
		carac_video=upper('$carac_video'),
		carac_sonido=upper('$carac_sonido'),
		creditos=upper('$creditos'),
		inst_prod=upper('$inst_prod'),
		disponibilidad=upper('$disponibilidad'),
		progra_origen=upper('$progra_origen'),
		lugar_inst=upper('$lugar_inst'),
		inst_posee=upper('$inst_posee'),
		tit_original=upper('$tit_original')		
		WHERE id=".$videos;
		if  ($ssql = $mysqli->query($ssql)) {
			header("Location: ../html/modifica.html");	
		}
		else{
		header("Location: ../html/nomodifica.html");	
		}		
} else 
{
	header("Location: ../html/nomodifica.html");	
	}
?>