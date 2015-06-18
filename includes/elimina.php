<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
  ob_start();
}
 	extract ($_REQUEST);	
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="../js/jquerybuscar.js"></script>
<script type="text/javascript" language="javascript" src="../js/funcionesbuscar.js"></script>
<script type="text/javascript" language="javascript" src="../js/jquery.dataTablesbuscar.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elimina Registros</title>
<link href="../css/estilos_login.css" rel="stylesheet" type="text/css" />
<link href="../css/demo_tablebuscar.css" rel="stylesheet" type="text/css" />

      <div class="header"><?php include("cabecera.php"); ?></div>
      <div class="nav"><?php include("navega.php");?>
      <script type="text/javascript">
	  document.getElementById('div3').style.backgroundColor="#98CAF8";
	  document.getElementById("div3").innerHTML="MÓDULO DE ELIMINACIÓN";	  	  
      </script> 
      
<p>&nbsp;</p>
<div class="section"><?php include("seccion.php");?></div>
</head>
<body>
<div class="content"> 
<div class="elimina">
<article id="contenido"></article> 
</div>
<div class="videoelimina"> <!--DIV QUE REPRODUCE EL VIDEO-->
 <?php
	clearstatcache(); 
	require("../libs/buscaidelimina.php");
	if(!in_array(null, $_GET)) {//si las variables GET estan vacias
} else {
	$videos=$_GET['videos'];
	$formato=$_GET['formato'];
	$codigo_bar=$_GET['codigo_bar'];
	$id_area=$_GET['id_area'];
	$idioma=$_GET['idioma'];
	$titulo=$_GET['titulo'];
	$sinopsis=$_GET['sinopsis'];
	$serie=$_GET['serie'];
	$creditos=$_GET['creditos'];
	$inst_posee=$_GET['inst_posee'];
	$carac_video=$_GET['carac_video'];
	$carac_sonido=$_GET['carac_sonido'];
	$inst_prod=$_GET['inst_prod'];
	$disponibilidad=$_GET['disponibilidad'];
	$progra_origen=$_GET['progra_origen'];
	$lugar_inst=$_GET['lugar_inst'];
	$tit_original=$_GET['tit_original'];	
}
	if(isset($videos)){
	$videos1 = '../terminados/'.$videos.$formato;	
?>
        <video  src="<?php echo $videos1; ?>" controls style="width: 355px; height: 300px;">
    Tu navegador no implementa el elemento <code>video</code>.
    </video>
<!--      <object  data="<?php// echo $videos1; ?>"  
        id="NSPlay" width="360" height="290"
        classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95" style="display:block; margin-left:auto; margin-right:auto;  margin-top:20px;"
        codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"
        standby="Cargando los componentes del Reproductor de Windows Media de Microsoft..."             
        type="application/x-oleobject">
        <param name="FileName" value="<?php// echo $videos1; ?>">
        <param name="ShowStatusBar" value="true">
        <param name="ShowControls" value="true">
        <param name="autohref" value="true">
    <embed type="application/x-mplayer2" width="360" height="290" style="display:block; margin-left:auto; margin-right:auto; margin-top:20px;"
        onLoadedMetadata=""
        pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/"
        filename="<?php// echo $videos1; ?>" 
        src="dolarsi.asx"
        showcontrols=1
        showstatusbar=1
        autohref="true"> 
    </embed>
    </object>         -->
 <?php
     }
 ?>
</div>   
<div class="datoselimina">

     <form id="form1" name="form1" method="post" action="../libs/qryelimina.php">
         <table class="tabladatos">                 
                 <tr>
              <label for="id" style="font-weight:bold;">ID:</label>                             
                <label id="id1">
                <input name="tit_original" type="hidden" readonly="readonly" id="tit_original" size="10"  maxlength="10" value="<?php if(isset ($tit_original)) echo $tit_original; else echo "";?>">                             
                <input name="videos" type="text" readonly="readonly" id="videos" size="15"  maxlength="10" value="<?php if(isset ($videos)) echo $videos; else echo ""; ?>"> 
                </label></td>
                 <td>Código:<label for="codigo_bar"></label>
                 <input name="codigo_bar" type="text" id="codigo_bar" readonly="readonly" value="<?php if(isset ($codigo_bar)) echo $codigo_bar; else echo ""; ?>" size="12" maxlength="12"/></td>
                 <td>Área:<label for="area"></label>
                 <input name="id_area" type="text"id="id_area" readonly="readonly" value="<?php if(isset ($id_area)) echo $id_area; else echo ""; ?>" size="12" maxlength="12"/></td>

                 <td>Idioma:<label for="idioma"></label>
                 <input name="idioma" type="text" id="idioma" readonly="readonly" value="<?php if(isset ($idioma)) echo $idioma; else echo ""; ?>" size="12" maxlength="12"/></td>
                 <td>Formato:<label for="formato"></label>
                 <input name="formato" type="text" id="formato" readonly="readonly" value="<?php if(isset ($formato)) echo $formato; else echo ""; ?>" size="12" maxlength="12"/></td       
                 ></tr>
                 </table>
                 <table  class="tabladatos">
                     <tr>
                     <td>Título:</td>
                     <td><label for="titulo"></label>
                     <input name="titulo" type="text" id="titulo" readonly="readonly" value="<?php if(isset ($titulo)) echo $titulo; else echo ""; ?>" size="70" maxlength="60" />		</td>     
                     </tr>
                     <tr>
                     <td>Sinopsis:</td>
                     <td><input type="text" name="sinopsis" cols="50" readonly="readonly" value="<?php if(isset ($sinopsis)) echo $sinopsis; else echo ""; ?>" rows="1" style="width:440px; height:26px;" id="sinopsis" ></td>
                     </tr>
                     <tr>
                     <td>Serie:</td>
                     <td><input name="serie" readonly="readonly" value="<?php if(isset ($serie)) echo $serie; else echo ""; ?>" cols="54" rows="1"  style="width:440px; height:26px;"  id="serie"></td>
                     </tr>
                     <tr>
                     <td>Creditos:</td>
                     <td><input name="creditos" cols="54" readonly="readonly" rows="1" value="<?php if(isset ($creditos)) echo $creditos; else echo ""; ?>" id="creditos" style="width:440px; height:26px;"></td>
                     </tr>
                     <tr>
                     <td>Institución poseedora:</td>
                     <td><input readonly="readonly" value="<?php if(isset ($inst_posee)) echo $inst_posee; else echo ""; ?>" name="inst_posee" cols="54" rows="1" id="inst_posee" style="width:440px; height:26px;"></td>
                     </tr>
                     
                        <tr>
                            <td>Carac. de vídeo:</p></td>
                            <td>
                              <input readonly="readonly" name="carac_video" value="<?php if(isset ($carac_video)) echo $carac_video; else echo ""; ?>" cols="54" rows="2" style="width:440px; height:26px;"></td>
                        </tr>
                        <tr>
                            <td>Carac. del sonido:</td>
                            <td><input readonly="readonly" name="carac_sonido" value="<?php if(isset ($carac_sonido)) echo $carac_sonido; else echo ""; ?>" cols="54" style="width:440px; height:26px;" rows="2" id="carac_sonido"></td>
                        </tr>
                        <tr>
                            <td>Institución productora:</td>
                            <td><input readonly="readonly" name="inst_prod" cols="54" value="<?php if(isset ($inst_prod)) echo $inst_prod; else echo ""; ?>" style="width:440px; height:26px;" rows="1" id="inst_prod"></td>
                        </tr>
                        <tr>
                            <td>Disponibilidad:</td>
                            <td><input readonly="readonly" name="disponibilidad"  value="<?php if(isset ($disponibilidad)) echo $disponibilidad; else echo ""; ?>" cols="54" style="width:440px; height:26px;" rows="1" id="disponibilidad"></td>
                        </tr>
                        <tr>
                            <td>Programa de origen:</td>
                            <td><input readonly="readonly" name="progra_origen" value="<?php if(isset ($progra_origen)) echo $progra_origen; else echo ""; ?>" cols="54" style="width:440px; height:26px;" rows="2" id="progra_origen"></td>
                        </tr>
                        <tr>
                            <td>Lugar de la institución:</td>
                            <td><input readonly="readonly" value="<?php if(isset ($lugar_inst)) echo $lugar_inst; else echo ""; ?>" name="lugar_inst" cols="54" style="width:440px; height:26px;" rows="2" id="lugar_inst"></td>
                        </tr>
                    <tr>
                   
                    <td></td>
                    <td align="right"><input  type="submit" name="button" id="button" value="Eliminar" class="enviar"/>
                    </tr>                                                   
                    </table>                                       
     </form><!--Termino de Datos -->  
</div>
</div>
</body>		
 <div class="footer"> <?php include("pie.php"); ?></div>
</html>