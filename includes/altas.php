<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registra</title>
<link href="../css/estilos_login.css" rel="stylesheet" type="text/css" />
      <div class="header"><?php include("cabecera.php"); ?></div>
      <div class="nav"><?php include("navega.php");?>
      <script type="text/javascript">
	  	document.getElementById('div3').style.backgroundColor="#D5FF96";
  	    document.getElementById("div3").innerHTML="MÓDULO DE REGISTRO";	  		
      </script> 
      
<p>&nbsp;</p>
<div class="section"><?php include("seccion.php");?></div>
</head>
<body>
<script type="text/javascript">
function vaciar(control)
{
  control.value='';
}
function verificarEntrada(control)
{
  if (control.value=='')
    alert('Debe ingresar datos');
}

function formulario(f) { 
if (f.videos.value   == '') { alert ('Debe seleccionar un video a catalogar');  
f.videos.focus(); return false; } 

if (f.codigo_bar.value   == '') { alert ('El campo código de barras esta vacío');  
f.codigo_bar.focus(); return false; }

if (f.titulo.value   == '') { alert ('El campo título esta vacío');  
f.titulo.focus(); return false; }

if (f.sinopsis.value  == '') { alert ('El campo sinopsis esta vacío'); 
f.sinopsis.focus(); return false; }

if (f.serie.value   == '') { alert ('El campo serie esta vacío');  
f.serie.focus(); return false; } return true; } 
</script>

<div class="content"> 

 <div id="archivos1"> <!--DIV QUE ABRE LA CARPETA DE VIDEOS-->

	 <?php
         $dir = "../videos"; 
         $rep = opendir($dir); 
         echo "<table id='list-arch' width='300px' border='0'>\n"; 
         while ($arc = readdir($rep)) { 
             if($arc != '..' && $arc !='.' && $arc){ 
                $miarchivo = $arc;	
                echo "<TR id='traltas'><TD id='traltas' width='15'><img src='../img/iconovideo.png'></TD>";
                echo "<TD id='traltas'><a  href='altas.php?z=".$miarchivo."'> ".$arc."</a></TD></TR>";
             } 
         }
         closedir($rep); 
         clearstatcache(); 
         echo "\n</table>\n"; 
         if(isset($_GET["z"])){
                $videos = '../videos/'.$_GET["z"];	
			    ///////////////////////////////
				$original=$_GET['z'];
				$formato=substr($original,strlen($original)-4,4);			
				$cadena=$videos; 
				$maximo= strlen ($cadena); 
				$ide= $_GET["z"]; 
				$ide2= $formato; 
				$total= strpos($cadena,$ide); 
				$total2= stripos($cadena,$ide2); 
				$total3= ($maximo-$total2-0); 
				$titulo= substr ($cadena,$total,-$total3); 
				$tit_original= substr ($cadena,$total,-$total3); 				
				
				//////////////////////////////
     ?>
 </div>

 <div class="video1"> <!--DIV QUE REPRODUCE EL VIDEO-->
    <video  src="<?php echo $videos; ?>" controls style="width: 355px; height: 300px;">
    Tu navegador no implementa el elemento <code>video</code>.
    </video>
 
<!--     <object  data="<?php// echo $videos; ?>"  
        id="NSPlay" width="360" height="290"
        classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95" style="display:block; margin-left:auto; margin-right:auto;  margin-top:20px;"
        codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"
        standby="Cargando los componentes del Reproductor de Windows Media de Microsoft..."             
        type="application/x-oleobject">
        <param name="FileName" value="<?php// echo $videos; ?>">
        <param name="ShowStatusBar" value="true">
        <param name="ShowControls" value="true">
        <param name="autohref" value="true">
    <embed type="application/x-mplayer2" width="360" height="290" style="display:block; margin-left:auto; margin-right:auto; margin-top:20px;"
        onLoadedMetadata=""
        pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/"
        filename="<?php// echo $videos; ?>" 
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
 <div class="video2"> </div>

<div class="datosaltas">
     <form id="form1" name="form1" method="post" action="../libs/qryalta.php" onsubmit="return formulario(this)">
         <table class="tabladatos">                 
                 <tr>
              <td width="87">Código:<label for="id"></label>                             
                <label id="id1">          
                    <input name="tit_original" type="hidden" id="tit_original" size="10"  maxlength="10" value="<?php if(isset ($tit_original)) echo $tit_original; else echo "";?>"/>              
                <input name="videos" type="hidden" id="videos" size="10"  maxlength="10" value="<?php if(isset ($videos)) echo $videos; else echo $videos; ?>"/> 
                
                </label></td>
                 <td><label for="codigo_bar"></label>
                 <input name="codigo_bar" type="text"  onfocus="" autofocus onBlur="" id="codigo_bar" placeholder="Código de barras" value="<?php if (isset($_POST['codigo_bar'])){ echo $_POST['codigo_bar']; } ?>" size="12" maxlength="12"/></td>
                 <td>&Aacute;rea:</td>
                 <td><label for="id_area"></label>
                 <select style="width:90px;" name="id_area" id="id_area">
                    <option value="1">Producción</option>
                    <option value="2">Noticias</option>
                    <option value="3">Vinculación</option>
                 </select></td><?php if (isset($_POST['id_area'])){ echo $_POST['id_area']; } ?>          
                 <td>Idioma:</td>          
                 <td><label for="idioma"></label>
                 <select style="width:80px;" name="idioma" id="idioma">
                     <option value="1">Español</option>
                     <option value="2">Ingles</option>
                     <option value="3">Frances</option>
                 </select></td> <?php if (isset($_POST['idioma'])){ echo $_POST['idioma']; } ?>
                 <td>Formato:</td>
                 <td><label for="formato"></label>
                <input name="formato" type="text" id="formato" readonly="readonly" size="10"  maxlength="10" value="<?php if(isset ($formato)) echo $formato; else echo "";?>">                      
                 </select></td><?php if (isset($_POST['formato'])){ echo $_POST['formato']; } ?>             
                 </tr>
                 </table>
                 <table  class="tabladatos">
                     <tr>
                     <td>Título:</td>
                     <td><label for="titulo"></label>
                     <input name="titulo" type="text" id="titulo" size="50"  maxlength="74" value="<?php if(isset ($titulo)) echo $titulo; else echo ""; ?>">    
                     </td>     
                     </tr>
                     <tr>
                     <td>Sinopsis:</td>
                     <td><textarea name="sinopsis" cols="50	" rows="1" onBlur="" style="width:440px; height:26px;" id="sinopsis" placeholder="Sinopsis"></textarea></td><?php if (isset($_POST['sinopsis'])){ echo $_POST['sinopsis']; } ?>
                     </tr>
                     <tr>
                     <td>Serie:</td>
                     <td><textarea name="serie" cols="54" rows="1" onBlur="" style="width:440px; height:26px;"  id="serie" placeholder="Serie a la que pertenece"></textarea></td><?php if (isset($_POST['serie'])){ echo $_POST['serie']; } ?>
                     </tr>
                     <tr>
                     <td>Creditos:</td>
                     <td><textarea name="creditos" cols="54" rows="1" id="creditos" style="width:440px; height:26px;" placeholder="Creditos"></textarea></td><?php if (isset($_POST['creditos'])){ echo $_POST['creditos']; } ?>
                     </tr>
                     <tr>
                     <td>Institución poseedora:</td>
                     <td><textarea name="inst_posee" cols="54" rows="1" id="inst_posee" style="width:440px; height:26px;" placeholder="Institución poseedora"></textarea></td><?php if (isset($_POST['inst_posee'])){ echo $_POST['inst_posee']; } ?>
                     </tr>
                     
                        <tr>
                            <td>Carac. de vídeo:</p></td>
                            <td>
                              <textarea name="carac_video" cols="54" rows="2" style="width:440px; height:26px;" placeholder="Características del video" ><?php if (isset($_POST['carac_video'])){ echo $_POST['carac_video']; } ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Carac. del sonido:</td>
                            <td><textarea name="carac_sonido" cols="54" style="width:440px; height:26px;" rows="2" id="carac_sonido" placeholder="Características del sonido"><?php if (isset($_POST['carac_sonido'])){ echo $_POST['carac_sonido']; } ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Institución productora:</td>
                            <td><textarea name="inst_prod" cols="54" style="width:440px; height:26px;" rows="1" id="inst_prod" placeholder="Institución productora"><?php if (isset($_POST['inst_prod'])){ echo $_POST['inst_prod']; } ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Disponibilidad:</td>
                            <td><textarea name="disponibilidad" cols="54" style="width:440px; height:26px;" rows="1" id="disponibilidad" placeholder="Disponibilidad"><?php if (isset($_POST['disponibilidad'])){ echo $_POST['disponibilidad']; } ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Programa de origen:</td>
                            <td><textarea name="progra_origen" cols="54" style="width:440px; height:26px;" rows="2" id="progra_origen" placeholder="Programa de origen"><?php if (isset($_POST['progra_origen'])){ echo $_POST['progra_origen']; } ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Lugar de la institución:</td>
                            <td><textarea name="lugar_inst" cols="54" style="width:440px; height:26px;" rows="2" id="lugar_inst" placeholder="Lugar de la instituci&oacute;n"><?php if (isset($_POST['lugar_inst'])){ echo $_POST['lugar_inst']; } ?></textarea></td>
                        </tr>
                    <tr>
                   
                    <td></td>
                    <td align="right"><input type="submit" name="button" id="button" value="Guardar" class="enviar"/>
                    <input type="reset" name="button2" id="button2" value="Restablecer"  class="enviar"/></td>
                    </tr>                                                   
                    </table>                                       
     </form><!--Termino de Datos -->  	         	
	 </div>
	</div>
    
</body>	
	
      <div class="footer"> <?php include("pie.php"); ?></div>
</html>