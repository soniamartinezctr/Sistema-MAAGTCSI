<?PHP
//FUNCIÓN PARA ENCRYPTAR 
function cifrar($contrasena, $numero = 8)
{
    $salt = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz./';
    $saltc = sprintf('$2x$%02d$', $numero);
    for($i = 0; $i < 22; $i++)
        $saltc .= $salt[ rand(0, strlen($salt)-1) ];
    return crypt($contrasena, $saltc);
}

//FUNCIÓN PARA COMPROBAR LA CONTRASEÑA
function descifrar($contrasena, $cifrada)
{
    if(crypt($contrasena, $cifrada) == $cifrada)
        return true;
    return false;
}

//FUNCIÓN PARA BUSCAR USUARIO Y PODER LOGUEARLO
function encriptar($contrasena, $numero = 8)
{
    $salt = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz./';
    $saltc = sprintf('$2y$%02d$', $numero);
    for($i = 0; $i < 22; $i++)
        $saltc .= $salt[ rand(0, strlen($salt)-1) ];
     
    return crypt($contrasena, $saltc);
}
 
function descifrar($contrasena, $cifrada)
{
    if(crypt($contrasena, $cifrada) == $cifrada)
        return true;
    return false;
}
 
$contrasena = 'MiContraseña';
$cifrada = encriptar($contrasena);
$descifrada = (descifrar($contrasena, $cifrada) ? 'Si' : 'No');
 
echo 'Contraseña: ' . $contrasena ;
echo 'Encriptada: ' . $cifrada ;
echo 'Es igual: ' . $descifrada ;


//OTRA FUNCIÓN PARA LOGUEO

function descifrar($contrasena)
{
$cifrada = encriptar($contrasena);
if(crypt($contrasena, $cifrada) == $cifrada)
return true;
return false;
}
?>