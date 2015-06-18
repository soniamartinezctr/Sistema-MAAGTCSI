<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
require("../connections/catalogacion.php");
$cn= Conectarse();
$listado= mysql_query("select * from catalogav",$cn);

?>

<script type="text/javascript" language="javascript" src="../js/jslistadovideosbuscar.js"></script>
<script type="text/javascript" language="javascript">
	function muestra(ObjetoTR){  
	  idvideo = (ObjetoTR.cells[0].childNodes[0].nodeValue);
	  fo = (ObjetoTR.cells[5].childNodes[0].nodeValue);
	  				
	}
	function enviar(){
	   document.getElementById('formulario').action="../includes/descarga.php?videos="+videos+"&formato="+formato+"";
		document.getElementById('formulario').submit();
	}
	function onEnviar(){
        videos= document.getElementById("videos1").value=idvideo;		
        formato= document.getElementById("formato1").value=fo;				
    }
</script>

<div id="datos" style=" margin:0 auto; background-color:#FFFCF3;">
<form method="post" id="formulario" name="formulario">
<input id="videos1" name="videos1" type="hidden"/>
<input id="formato1" name="formato1" type="hidden"/>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_videos">
    <thead>
    <tr>
    <th>ID</th>
    <th>CÓD.BARRAS</th>                
    <th>TÍTULO</th>
    <th>SINOPSIS</th>
    <th>SERIE</th>    
    <th>FORMATO</th>        
    </tr>
    </thead>
    <tbody>
    <?php
    while($reg= mysql_fetch_array($listado))
    {
  echo '<tr style="cursor: pointer" onclick="muestra(this);onEnviar();enviar();">';
    echo '<td>'.mb_convert_encoding($reg['id'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['codigo_bar'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['titulo'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['sinopsis'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['serie'], "UTF-8").'</td>';		
    echo '<td>'.mb_convert_encoding($reg['formato'], "UTF-8").'</td>';
	
    echo '</tr>';
}

?>
<tbody>
</table>
</form>