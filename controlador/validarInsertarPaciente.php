<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/paciente.php";

$objPaciente=New Paciente();
$objPaciente->crearPaciente($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['fechaNacimiento'],$_POST['sexo']);
$resultado=$objPaciente->agregarPaciente();
if($resultado)
header("location:../Vista/index2.php?pag=insertarPaciente&msj=1");
else
header("location:../Vista/index2.php?pag=insertarPaciente&msj=2");