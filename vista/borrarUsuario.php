<?php

extract ($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/usuario.php";

if (isset($_REQUEST['idUsuario'])) {
  
$objUsuario= new Usuario();
$resultado=$objUsuario->ConsultarIdUsuario($_REQUEST['idUsuario']);
//Asignar a una variable el resultado de la consulta

 if (isset($resultado))  //quiere decir que los datos estan bien
     { if($resultado->num_rows >0 ){
    
     $registro=$resultado->fetch_object()?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar usuario</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Verifique la informacion del usuario a eliminar</h2>
            <div class="col-8">
                <form action="../controlador/validarEliminarUsuario.php" method="POST">

                    <div class="mb-3">
                        <label for="usuario" class="form-label fw-bold">Usuario:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" aria-describedby="helpId" value="<?php echo $registro->usuLogin ?>" required readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" value="<?php echo $registro->usuPassword ?>" required readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label fw-bold">Estado: </label>
                        <select class="form-control" name="estado" id="estado" readonly onmousedown="return false;">
                            <option class="control-label text-left"><?php echo $registro->usuEstado ?></option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="rol" class="form-label fw-bold">Rol del sistema: </label>
                        <select class="form-control" name="rol" id="rol" readonly onmousedown="return false;">
                            <option class="control-label text-left"><?php echo $registro->usuRol ?></option>
                            <option>Administrador</option>
                            <option>Medico</option>
                            <option>Paciente</option>
                            <option>Auxiliar</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary col-12">Confirmar eliminacion</button>
                    </div>
                    <input name="idUsuario" type="hidden" value="<?php echo $registro->idUsuario ?>" />

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