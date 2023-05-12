<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/paciente.php";

$objPaciente= new Paciente();
$resultado = $objPaciente->eliminarPaciente($_REQUEST['identificacion']);
if ($resultado)
	header ("location:../Vista/index2.php?pag=eliminarPaciente&msj=1");
else
	header ("location:../Vista/index2.php?pag=eliminarPaciente&msj=2");
?>
