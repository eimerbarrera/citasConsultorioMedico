<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/usuario.php";

$objUsuario= new Usuario();
$resultado = $objUsuario->eliminarUsuario($_REQUEST['usuario']);
if ($resultado)
	header ("location:../Vista/index2.php?pag=eliminarUsuario&msj=1");
else
	header ("location:../Vista/index2.php?pag=eliminarUsuario&msj=2");
?>
