<?php

extract ($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/medico.php";

if (isset($_REQUEST['idMedico'])) {
  
$objMedico= new Medico();
$resultado=$objMedico->consultarIdMedico($_REQUEST['idMedico']);
//Asignar a una variable el resultado de la consulta

 if (isset($resultado))  //quiere decir que los datos estan bien
     { if($resultado->num_rows >0 ){
    
     $registro=$resultado->fetch_object()?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar medico</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">

            <h2 class="text-center my-5">Verifique la informacion del medico a eliminar</h2>

            <div class="col-8">
                <form action="../controlador/validarEliminarMedico.php" method="POST">

                    <div class="mb-3">
                        <label for="identificacion" class="form-label fw-bold">Identificacion:</label>
                        <input type="text" name="identificacion" id="identificacion" class="form-control" aria-describedby="helpId" value="<?php echo $registro->medIdentificacion ?>" required readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <label for="nombres" class="form-label fw-bold">Nombres:</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $registro->medNombres ?>" aria-describedby="helpId" required readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label fw-bold">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $registro->medApellidos ?>" aria-describedby="helpId" required readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <label for="especialidad" class="form-label fw-bold">Especialidad: </label>
                        <select class="form-control" name="especialidad" id="especialidad" readonly onmousedown="return false;">
                            <option class="control-label text-left"><?php echo $registro->medEspecialidad ?></option>
                            <option value="Medico general">Médico General</option>
                            <option value="Pediatra">Pediatra</option>
                            <option value="Dermatologo">Dermatólogo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label fw-bold">Telefono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $registro->medTelefono ?>" aria-describedby="helpId" required readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label fw-bold">Correo:</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $registro->medCorreo ?>" aria-describedby="helpId" required readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary col-12">Confirmar eliminacion</button>
                    </div>
                    <input name="idMedico" type="hidden" value="<?php echo $registro->idMedico ?>" />

                </form>

            </div>
        </div>
    </div>
</body>

</html>
<?php
  }
  }
}
?>