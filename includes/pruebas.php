<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
$cadena="cualqasdasduiercosahttp://www.forosdelweb.com/index.htmlterminando"; 
$maximo= strlen ($cadena); 
$ide= "http://"; 
$ide2= ".html"; 
$total= strpos($cadena,$ide); 
$total2= stripos($cadena,$ide2); 
echo "Largo de la cadena: $maximo"; 
echo "<br>"; 
echo "Lo que sobra al inicio: $total"; 
echo "<br>"; 
$total3= ($maximo-$total2-5); 
echo "Lo que sobra al final: $total3"; 
echo"<br>"; 
$final= substr ($cadena,$total,-$total3); 
echo "Esto es lo que queremos: $final"; 
?>
</body>
</html>