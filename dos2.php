<?php
if(isset($_POST["nombre"]))
{
$usuario=$_POST["nombre"];
setcookie("nombre",$usuario);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Mi web2</title>
</head>
<body>
<?php
if(isset($usuario))
echo "Usuario: $usuario<br/>";
else
echo "No hay Usuario<br/>";
?>
<a href="unob.php">Ir a Inicio</a>
</body>
</html>