<meta http-equiv="content-type" content="text/html; UTF-8" />
<script>
	function pregunta()
	{
	if(confirm("Esta seguro"))
	document.location.href="../html/alta.html";
	else
	document.location.href=" ../includes/detalle.php"; 
	}
</script>
<?php
	extract ($_REQUEST);
		require("../connections/catalogacion.php");
		$ssql = "INSERT INTO catalogav VALUES ('','$codigo_bar','$id_area','','','$idioma','$formato','','','',upper('$titulo'),upper('$sinopsis'),upper('$serie'),upper('$carac_video'),upper('$carac_sonido'),upper('$creditos'),upper('$inst_prod'),upper('$disponibilidad'),upper('$progra_origen'),upper('$lugar_inst'),upper('$inst_posee'),upper('$tit_original'))";
		if  ($ssql = $mysqli->query($ssql)) {
			$ultimo_id = mysqli_insert_id($mysqli);
			$longid = strlen($ultimo_id);
			$log = 12;
			$temp = $log - $longid;
			$a="";
			for ( $i=1 ; $i <= $temp ; $i ++) {
				 $a++;
			}
			$array = array("0", "00", "000", "0000", "00000", "000000", "0000000", "00000000", "000000000", "0000000000", "00000000000", "000000000000");
			$id= ($array[$a-1]);
			$todo=$id.$ultimo_id;
			$_GET['id']=$todo;		
			rename($videos, "../terminados/".$todo.$formato);							

			header("Location: ../html/alta.html");	
		}
		else{
		header("Location: ../html/noalta.html");	
		}		
?>