<?php
//Página privada de los usuarios
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
if (isset($_SESSION["login"]))
{
echo ("El nombre de usuario es ".$_SESSION["login"]."<br>");
?>
<!--Enviar mensajes-->
<a href='misMensajes.php'>Envia un mensaje</a>
<?php
}
else
{
echo("Esto es una página privada, por favor inicia sesión");
echo("<br/><a href='IniciaSesion.php'>Inicia sesión</a>");
}
?>
</body>
</html>