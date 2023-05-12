<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/medico.php";

$objMedico=New Medico();
$objMedico->crearMedico($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['especialidad'],$_POST['telefono'],$_POST['correo']);
$resultado=$objMedico->agregarMedico();
if($resultado)
header("location:../Vista/index2.php?pag=insertarMedico&msj=1");
else
header("location:../Vista/index2.php?pag=insertarMedico&msj=2");