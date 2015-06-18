<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
if (!isset($_SESSION)) {
  session_start();
  ob_start();
}
if (isset($videos)) {
	require_once('../Connections/catalogacion.php');
	extract ($_REQUEST);	
	$consulta="SELECT * FROM catalogav WHERE id=".$videos;
	$resultado=mysql_query($consulta) or die (mysql_error());
	if (mysql_num_rows($resultado)>0)	{
	$fila = mysql_fetch_row($resultado);
	$videos=$fila[0];
	$codigo_bar=$fila[1];
	$id_area=$fila[2];
	$fecha_reg=$fila[3];	
	$anio=$fila[4];	
	$idioma=$fila[5];
	$formato=$fila[6];
	$duracion=$fila[7];	
	$tinicial=$fila[8];
	$tfinal=$fila[9];
	$titulo=$fila[10];
	$sinopsis=$fila[11];
	$serie=$fila[12];
	$carac_video=$fila[13];
	$carac_sonido=$fila[14];	
	$creditos=$fila[15];
	$inst_prod=$fila[16];	
	$disponibilidad=$fila[17];	
	$progra_origen=$fila[18];	
	$lugar_inst=$fila[19];	
	$inst_posee=$fila[20];
	$tit_original=$fila[21];	
//	mysql_free_result($resultado);		
	}
		else{
		header("Location: ../html/noiddescarga.html");	
		}
}
?>
