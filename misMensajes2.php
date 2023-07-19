<!doctype html>
<html>
<meta charset="utf-8">
<head>
<title>modificar</title>
</head>
<body>
    <!--En este fichero confirmo el envio de información-->
<?php
include("configuracion.php");
$nombre=$_POST['nombre'];
$mensaje=$_POST['mensaje'];
echo "<p> Mensaje:".$mensaje."</p>";
$query="UPDATE usuarios SET nombre = '".$nombre."', mensaje=
'".$mensaje."' WHERE nombre = '$nombre'";
$conexion = new mysqli ('localhost','root','','intranet');
$result=$conexion->query($query);
echo "Mensaje enviado<br/>";
echo "<a href='verMensajes.php'>Ver mensajes</a>";
echo "<a href='misMensajes.php'> Envia otro mensaje</a>";
mysqli_close();
?>
</body>
</html>
