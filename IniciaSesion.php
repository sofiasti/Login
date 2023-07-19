<?php
//En este fichero hago el inicio de sesion
session_start();
$registrado = isset($_SESSION["login"]);
$notificacion = "";
require "configuracion.php";
if (isset($_GET["accion"])) {
 $accion = $_GET["accion"];
 if ($accion == "Login") {
 $pass = $_GET["pass"];
 $usuario = $_GET["usuario"];
 if (valida_usuario($usuario, $pass)) {
 $registrado = true;
 $_SESSION["login"] = $usuario;
 } else {
 $registrado = false;
 $notificacion = "*Nombre de usuario o contraseña incorrectos";
 }
 } else if ($accion == "Desconectar") {
 unset($_SESSION["login"]);
 $registrado = false;
 }
}
function valida_usuario($usuario, $pass) {
 $mysqli = new mysqli("localhost", "root", "", "intranet");
 if ($mysqli->connect_errno) {
 die('Error al conectar: ' . $mysqli->connect_error);
 } else {
 $query = "SELECT count(*) FROM usuarios WHERE nombre='$usuario' AND clave='$pass'";
 $result = $mysqli->query($query);
 $row = $result->fetch_row();
 $correcto = $row[0];
 $result->free();
 $mysqli->close();
 return ($correcto > 0);
 }
}
?>
<html>
<head>
<style>
 p.notificacion
 {
 color:red;
 }
</style>
</head>
<body>
<?php if ($registrado) { ?>
 <p>Bienvenido, <strong><?php echo $usuario ?></strong></p>
 <p><a href="private_login.php">Link a una página privada</a></p>
 <form method="GET" action="IniciaSesion.php">
 <input type="submit" name="accion" value="Desconectar" />
 </form>
<?php } else { ?>
 <p class="notificacion"><?php echo $notificacion ?></p>
 <p>Por favor, introduce tu nombre de usuario</p>
 <form method="GET" action="IniciaSesion.php">
 Nombre de usuario: <input type="text" name="usuario" /><br />
 Contraseña: <input type="text" name="pass" /><br />
 <input type="submit" name="accion" value="Login" />
 </form>
<?php } ?>
</body>
</html>