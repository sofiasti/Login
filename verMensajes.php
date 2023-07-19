<!doctype html>
<html>
<body>
<?php
//En este fichero se muestran los mensajes de cada usuario
include("configuracion.php");
$query="SELECT * FROM usuarios";
$conexion = new mysqli ('localhost','root','','intranet');
$result=$conexion->query($query);
if ($row = mysqli_fetch_array($result)){
do {
    echo "Has recibido un nuevo mensaje:".$row["mensaje"]."<br>";
} while ($row = mysqli_fetch_array($result));
} else 
{
echo "'Aún no hay datos que mostrar'";
}
?>
<a href="misMensajes.php">ENVIA OTRO MENSAJE<a>
</body>
</html>
