<?php
extract($_REQUEST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/paciente.php";
if (isset($_REQUEST['idPaciente'])) {
    $objPaciente = new Paciente();
    $resultado = $objPaciente->consultarIdPaciente($_REQUEST['idPaciente']);

    if (isset($resultado)) {
        if ($resultado->num_rows > 0) {
            $registro = $resultado->fetch_object() ?>

            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar paciente</title>
            </head>

            <body>
                <div class="container ">
                    <div class="row justify-content-center">

                        <h2 class="text-center my-5">Formulario para actualizacion de pacientes</h2>

                        <div class="col-8">
                            <form action="../controlador/validarActualizarPaciente.php" method="POST">

                                <div class="mb-3">
                                    <label for="identificacion" class="form-label fw-bold">Identificacion:</label>
                                    <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese el numero de identificacion de el paciente" aria-describedby="helpId" value="<?php echo $registro->pacIdentificacion ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nombres" class="form-label fw-bold">Nombres:</label>
                                    <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $registro->pacNombres ?>" placeholder="Ingrese los nombres de el paciente" aria-describedby="helpId" required>
                                </div>

                                <div class="mb-3">
                                    <label for="apellidos" class="form-label fw-bold">Apellidos:</label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $registro->pacApellidos ?>" placeholder="Ingrese los apellidos de el paciente" aria-describedby="helpId" required>
                                </div>

                                <div class="mb-3">
                                    <label for="fechaNacimiento" class="form-label fw-bold">Fecha de nacimiento:</label>
                                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="<?php echo $registro->pacFechaNacimiento ?>" placeholder="Ingrese la fecha de nacimiento de el paciente" aria-describedby="helpId" required>
                                </div>

                                <div class="mb-3">
                                    <label for="sexo" class="form-label fw-bold">Sexo: </label>
                                    <select class="form-control" name="sexo" id="sexo">
                                        <option class="control-label text-left"><?php echo $registro->pacSexo ?></option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary col-12">Actualizar</button>
                                </div>
                                <input name="idPaciente" type="hidden" value="<?php echo $registro->idPaciente ?>" />

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