<?php
require "../Modelo/conexionBaseDatos.php";
$objConexion = Conectarse();

$sql = "Select idMedico, medNombres, medApellidos, medEspecialidad from medico";
$medicos = $objConexion->query($sql);

$sql = "select idPaciente, pacIdentificacion, pacNombres, pacApellidos from pacientes";
$pacientes = $objConexion->query($sql);

$sql = "select * from consultorios";
$consultorios = $objConexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar cita</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para asignacion de citas</h2>
            <div class="col-8">
                <form action="../controlador/validarAsignarCita.php" method="POST">

                    <div class="mb-3">
                        <label for="paciente" class="form-label fw-bold">Paciente: </label>
                        <select class="form-control" name="paciente" id="paciente">
                            <option class="control-label text-left">Seleccione el paciente</option>
                            <?php
                            while ($paciente = $pacientes->fetch_object()) {
                            ?>
                                <option value="<?php echo $paciente->idPaciente; ?> ">
                                    <?php echo $paciente->pacIdentificacion . "-" . $paciente->pacNombres . " " . $paciente->pacApellidos; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fechaCita" class="form-label fw-bold">Fecha de la cita:</label>
                        <input type="date" name="fechaCita" id="fechaCita" class="form-control" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="horaCita" class="form-label fw-bold">Hora de la cita:</label>
                        <input type="time" name="horaCita" id="horaCita" class="form-control" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="medico" class="form-label fw-bold">Medico: </label>
                        <select class="form-control" name="medico" id="medico">
                            <option class="control-label text-left">Seleccione el medico</option>
                            <?php
                            while ($medico = $medicos->fetch_object()) {
                            ?>
                                <option value="<?php echo $medico->idMedico; ?>">
                                    <?php echo $medico->medNombres . " " . $medico->medApellidos . " ( " . $medico->medEspecialidad . " )" ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="consultorio" class="form-label fw-bold">Consultorio: </label>
                        <select class="form-control" name="consultorio" id="consultorio">
                            <option class="control-label text-left">Seleccione el consultorio</option>
                            <?php
                            while ($consultorio = $consultorios->fetch_object()) {
                            ?>
                                <option value="<?php echo $consultorio->idConsultorio; ?> ">
                                    <?php echo $consultorio->conNombre ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary col-12">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>

</html>
<?php
if ($msj == 1) {
?>
    <script type="text/javascript">
        alert("Se ha creado la cita de manera correcta!");
        window.location.href = 'index2.php';
    </script>
<?php
};
if ($msj == 2) {
?>
    <script type="text/javascript">
        alert("Error al generar la cita, favor validar!");
        window.location.href = 'index2.php';
    </script>
<?php
}
?>