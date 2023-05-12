<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/medico.php";

$objMedico= new Medico();
$resultado = $objMedico->eliminarMedico($_REQUEST['identificacion']);
if ($resultado)
	header ("location:../Vista/index2.php?pag=eliminarMedico&msj=1");
else
	header ("location:../Vista/index2.php?pag=eliminarMedico&msj=2");
?>
