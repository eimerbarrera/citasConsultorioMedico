<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/usuario.php";

$objUsuario=New Usuario();
$objUsuario->crearUsuario($_POST['usuario'],$_POST['password'],$_POST['estado'],$_POST['rol']);
$resultado=$objUsuario->agregarUsuario();
if($resultado)
header("location:../Vista/index2.php?pag=insertarUsuario&msj=1");
else
header("location:../Vista/index2.php?pag=insertarUsuario&msj=2");