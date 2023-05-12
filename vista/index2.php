<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location:../index.php?x=2");//x=2 significa que no han iniciado sesión
if (!isset($_REQUEST['pag']))
    $pag='contenido';

if (!isset($_REQUEST['msj']))
    $msj=0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Centro Médico Vida Y Salud</title>
</head>
<body>
    <div><?php include "menu.php"; ?></div>
    <div id="divContenido"> <?php include $pag.".php" ;?> </div>
    <div><?php include "piePagina.php"; ?></div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>
</html>