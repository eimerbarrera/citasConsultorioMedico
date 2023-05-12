<?php
require "../modelo/conexionBaseDatos.php";
$objConexion = Conectarse();
$sql = "select idCita, pacNombres, pacApellidos, medNombres, medApellidos, medEspecialidad, conNombre, citFecha, citHora, citEstado, citObservaciones 
from pacientes, medico, consultorios, citas
where (idPaciente = citPaciente) and 
    (idMedico = citMedico) and 
    (idConsultorio = citConsultorio) and
    (citEstado='Atendido')";
$citas = $objConexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar citas</title>
</head>

<body>
    <h2 align="center" class="p-5">Informacion de los registros de las citas</h1>
        <table class="table table-hover text-center m-1">
            <th class="text-center">Fecha</th>
            <th class="text-center">Hora</th>
            <th class="text-center">Paciente</th>
            <th class="text-center">Médico</th>
            <th class="text-center">Especialidad</th>
            <th class="text-center">Consultorio</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Observaciones</th>
            </tr>
            <?php
            while ($cita = $citas->fetch_object()) {
            ?>
                <tr>
                    <td><?php echo $cita->citFecha ?></td>
                    <td><?php echo $cita->citHora ?></td>
                    <td><?php echo $cita->pacNombres . " " . $cita->pacApellidos ?></td>
                    <td><?php echo $cita->medNombres . " " . $cita->medApellidos ?></td>
                    <td><?php echo $cita->medEspecialidad ?></td>
                    <td><?php echo $cita->conNombre ?></td>
                    <td><?php echo $cita->citEstado ?></td>
                    <td><?php echo $cita->citObservaciones ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

</body>

</html>