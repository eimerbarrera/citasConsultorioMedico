<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/consultorio.php";

$objConsultorio=new Consultorio();
$objConsultorio->crearConsultorio($_POST['consultorioNombre']);
$resultado=$objConsultorio->actualizarConsultorio();
if($resultado)
header("location:../Vista/index2.php?pag=actualizarConsultorio&msj=1");
else
header("location:../Vista/index2.php?pag=actualizarConsultorio&msj=2");