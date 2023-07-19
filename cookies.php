<!DOCTYPE html>
<html>
<head>
<title>Mi web</title>
</head>
<body>
<form name="form1" method="POST" action="dos2.php">
Introduce un nombre
<input name="nombre" type="text" id="nombre" value='<?php
if(isset($_COOKIE['nombre']))
echo $_COOKIE['nombre']."'";
else
echo "' placeholder='inserta tu nombre aquí'" ;
?>/>
<input name="enviar" type="submit" id="Enviar" value="Enviar"/>
</form>
</body>
</html>