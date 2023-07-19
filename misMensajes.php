<!doctype html>
<html>
<head>
    <!--En este fichero envio los mensajes-->
<meta charset="utf-8">
</head>
<body>
<h1>Envia un mensaje</h1>
<br/>
<?php
include("configuracion.php");
echo '<form method="post" action="misMensajes2.php">nombre<br/>';
$query="select * from usuarios order by nombre";
$conexion = new mysqli ('localhost','root','','intranet');
$result=$conexion->query($query);
//Selecciono el usuario al cual le quiero enviar el mensaje
echo '<select name="nombre">';
while ($row=mysqli_fetch_array($result))
{echo '<option>'.$row["nombre"].'</option>';};
?>
<p>Mensaje</p><br/>
<input type="text" name="mensaje"><br/>
<input type="submit" value="modificar">
</form>
</div>
</body>
</html>