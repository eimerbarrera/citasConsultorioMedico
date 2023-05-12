<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/consultorio.php";

$objConsultorio=New Consultorio();
$objConsultorio->crearConsultorio($_POST['consultorioNombre']);
$resultado=$objConsultorio->agregarConsultorio();
if($resultado)
header("location:../Vista/index2.php?pag=insertarConsultorio&msj=1");
else
header("location:../Vista/index2.php?pag=insertarConsultorio&msj=2");