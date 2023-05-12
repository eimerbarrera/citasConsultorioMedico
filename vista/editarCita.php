<?php
require "../Modelo/conexionBaseDatos.php";
$objConexion = Conectarse();
$sql = "Select pacNombres,pacApellidos,citObservaciones
from pacientes, citas 
where (idPaciente=citPaciente) and (idCita='$_REQUEST[idCita]')";
$citas = $objConexion->query($sql);
$cita = $citas->fetch_object();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cita</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Datos del paciente</h2>
            <div class="col-8">
                <form action="../controlador/validarEditarCita.php" method="POST">

                    <div class="mb-3">
                        <label for="paciente" class="form-label fw-bold">Nombre del paciente:</label>
                        <input type="text" name="paciente" id="paciente" class="form-control" value="<?php echo $cita->pacNombres . " " . $cita->pacApellidos ?>" readonly onmousedown="return false;">
                    </div>

                    <div class="mb-3">
                        <label for="observaciones" class="form-label fw-bold">Observaciones (Historia clínica)</label>
                        <textarea type="text" name="observaciones" id="observaciones" class="form-control" placeholder="Ingrese información acerca del procedimiento" required ></textarea> 
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary col-12">Guardar</button>
                    </div>
                    <input name="idCita" type="hidden" value="<?php echo $_REQUEST['idCita'] ?>">

                </form>
            </div>
        </div>
    </div>

</body>

</html>