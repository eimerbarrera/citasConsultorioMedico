<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/paciente.php";

$objPaciente=new Paciente();
$objPaciente->crearPaciente($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['fechaNacimiento'],$_POST['sexo']);
$resultado=$objPaciente->actualizarPaciente();
if($resultado)
header("location:../Vista/index2.php?pag=actualizarPaciente&msj=1");
else
header("location:../Vista/index2.php?pag=actualizarPaciente&msj=2");