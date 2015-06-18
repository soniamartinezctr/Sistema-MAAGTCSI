<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vídeo en Reproducción</title>
</head>
<body onBlur="self.focus()" onLoad="self.focus()">

<?php 
	extract ($_REQUEST);
	$video="../terminados/".$_GET['final'].$_GET['format'];		
//	echo $video;
	if(isset($video)){
?>

<div>
        <video  src="<?php echo $video; ?>" controls style="width: 355px; height: 300px;">
    Tu navegador no implementa el elemento <code>video</code>.
    </video>
<!--  <object data="<?php// echo $video; ?>"  id="NSPlay" width="600" height="550" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
    codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"
    standby="Cargando los componentes del Reproductor de Windows Media de Microsoft..."             
    type="application/x-oleobject">
    <param name="FileName" value="<?php// echo $video; ?>" />
    <param name="ShowStatusBar" value="true" />
    <param name="ShowControls" value="true" />
    <param name="autohref" value="true" />
    <embed type="application/x-mplayer2"  width="600" height="550" onloadedmetadata=""pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/"
    filename="<?php// echo $video; ?>" 
    src="dolarsi.asx"
    showcontrols=1
    showstatusbar=1
    autohref="true"> </embed>
  </object>-->
 
    </div>
 <?php 
    
    } 
    
    ?>