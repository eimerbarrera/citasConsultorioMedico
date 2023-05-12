<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>Consultorio Vida y Salud</title>	
</head>
<body>
	 <?php include "vista/iniciarsesion.php" ?> 
</body>
</html>