<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
require("../connections/catalogacion.php");
$cn= Conectarse();
$listado= mysql_query("select * from catalogav",$cn);
?>

<script type="text/javascript" language="javascript" src="../js/jslistadovideos.js"></script>
<script type="text/javascript" language="javascript">
	function muestra(ObjetoTR){  
	  idvideo = (ObjetoTR.cells[0].childNodes[0].nodeValue);
	  fo = (ObjetoTR.cells[6].childNodes[0].nodeValue);
	  
	}
	function enviar(){
		document.getElementById('formulario').submit();
	}
	function onEnviar(){
        vi= document.getElementById("variable").value=idvideo;		
        fo1= document.getElementById("variable1").value=fo;				
    }
	function abrir() {
		window.open("../includes/videoconsulta.php?final="+vi+"&format="+fo,'Video','toolbar=no,Location=no, directories=no, status=no, menubar=no, width=620, height=570, resizable=no');		
	}
</script>

<div id="datos" style=" margin:0 auto; background-color:#FFFCF3;">
<form action="#" method="post" id="formulario" name="formulario">
<input id="variable" name="variable" type="hidden" />
<input id="variable1" name="variable1" type="hidden"/>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_videos">
    <thead>
    <tr>
    <th>ID</th>
    <th>CÓD.BARRAS</th>                
    <th>AREA</th>                    
    <th>FECHA</th>                
    <th>AÑO</th>                    
    <th>IDIOMA</th>                    
    <th>FORMATO</th>                            
    <th>DURACIÓN</th>    
    <th>TIEMPO INI</th>
    <th>TIEMPO FIN</th>
    <th>TÍTULO</th>
    <th>SINOPSIS</th>
    <th>SERIE</th>    
    <th>CARAC_VIDEO</th>    
    <th>CARAC_SONIDO</th> 
    <th>CREDITOS</th>
    <th>INST. PRODUCTORA</th>  
    <th>DISPONIBILIDAD</th>         
    <th>PROGRA. ORIGEN</th>        
    <th>LUGAR INST.</th>
    <th>INST.POSEEDORA</th>    
    <th>TIT_ORIGINAL</th>        
    </tr>
    </thead>
    <tbody>
    <?php
    while($reg= mysql_fetch_array($listado))
    {
    echo '<tr style="cursor: pointer" onclick="muestra(this);onEnviar();abrir();">';
    echo '<td>'.mb_convert_encoding($reg['id'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['codigo_bar'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['id_area'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['fecha_reg'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['anio'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['idioma'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['formato'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['duracion'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['tinicial'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['tfinal'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['titulo'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['sinopsis'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['serie'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['carac_video'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['carac_sonido'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['creditos'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['inst_prod'], "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($reg['disponibilidad'], "UTF-8").'</td>';		
    echo '<td>'.mb_convert_encoding($reg['progra_origen'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['lugar_inst'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['inst_posee'], "UTF-8").'</td>';	
    echo '<td>'.mb_convert_encoding($reg['tit_original'], "UTF-8").'</td>';		
    echo '</tr>';
}

?>
<tbody>
</table>
</form>