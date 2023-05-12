<?php
extract($_REQUEST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/medico.php";
if (isset($_REQUEST['idMedico'])) {
    $objMedico = new Medico();
    $resultado = $objMedico->consultarIdMedico($_REQUEST['idMedico']);

    if (isset($resultado)) {
        if ($resultado->num_rows > 0) {
            $registro = $resultado->fetch_object() ?>

            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar medico</title>
            </head>

            <body>
                <div class="container ">
                    <div class="row justify-content-center">

                        <h2 class="text-center my-5">Formulario para actualizacion de medicos</h2>

                        <div class="col-8">
                            <form action="../controlador/validarActualizarMedico.php" method="POST">

                                <div class="mb-3">
                                    <label for="identificacion" class="form-label fw-bold">Identificacion:</label>
                                    <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese el numero de identificacion de el medico" aria-describedby="helpId" value="<?php echo $registro->medIdentificacion ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nombres" class="form-label fw-bold">Nombres:</label>
                                    <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $registro->medNombres ?>" placeholder="Ingrese los nombres de el medico" aria-describedby="helpId" required>
                                </div>

                                <div class="mb-3">
                                    <label for="apellidos" class="form-label fw-bold">Apellidos:</label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $registro->medApellidos ?>" placeholder="Ingrese los apellidos de el medico" aria-describedby="helpId" required>
                                </div>

                                <div class="mb-3">
                                    <label for="especialidad" class="form-label fw-bold">Especialidad: </label>
                                    <select class="form-control" name="especialidad" id="especialidad">
                                        <option class="control-label text-left"><?php echo $registro->medEspecialidad ?></option>
                                        <option>Médico General</option>
                                        <option>Pediatra</option>
                                        <option>Dermatólogo</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="telefono" class="form-label fw-bold">Telefono:</label>
                                    <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $registro->medTelefono ?>" placeholder="Ingrese el numero de telefono" aria-describedby="helpId" required>
                                </div>

                                <div class="mb-3">
                                    <label for="correo" class="form-label fw-bold">Correo:</label>
                                    <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $registro->medCorreo ?>" placeholder="Ingrese el correo electronico" aria-describedby="helpId" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary col-12">Actualizar</button>
                                </div>
                                <input name="idMedico" type="hidden" value="<?php echo $registro->idMedico ?>" />

                            </form>

                        </div>
                    </div>
                </div>
            </body>

<?php
        }
    }
}
?>