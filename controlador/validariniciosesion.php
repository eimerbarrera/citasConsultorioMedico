<?php
session_start();
extract ($_POST);
require "../modelo/conexionBaseDatos.php";

$contrasena = md5($_POST['contrasena']);
$usuario = $_POST['usuario'];
$objConexion=Conectarse();

$sql="select * from usuarios where usuLogin = '$usuario' and usuPassword = '$contrasena'";

$resultado=$objConexion->query($sql);

$existe = $resultado->num_rows;

if ($existe==1)  
{
	$usuario=$resultado->fetch_object() or die ("Error");
	$_SESSION['user']= $usuario->usuLogin;
	header("location:../Vista/index2.php?pag=contenido");
}
else
{
	header("location:../Vista/index2.php?pag=iniciarSesion&x=2");  
	
}

?>