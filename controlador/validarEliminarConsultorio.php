<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/consultorio.php";

$objConsultorio= new Consultorio();
$resultado = $objConsultorio->eliminarConsultorio($_REQUEST['consultorioNombre']);
if ($resultado)
	header ("location:../Vista/index2.php?pag=eliminarConsultorio&msj=1");
else
	header ("location:../Vista/index2.php?pag=eliminarConsultorio&msj=2");
?>
