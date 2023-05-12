<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/medico.php";

$objMedico=new Medico();
$objMedico->crearMedico($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['especialidad'],$_POST['telefono'],$_POST['correo']);
$resultado=$objMedico->actualizarMedico();
if($resultado)
header("location:../Vista/index2.php?pag=actualizarMedico&msj=1");
else
header("location:../Vista/index2.php?pag=actualizarMedico&msj=2");