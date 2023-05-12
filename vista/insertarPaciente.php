<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar paciente</title>
</head>

<body>

    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para creación de nuevos pacientes</h2>
            <div class="col-8">
                <form action="../controlador/validarInsertarPaciente.php" method="POST">

                    <div class="mb-3">
                        <label for="identificacion" class="form-label fw-bold">Identificacion:</label>
                        <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese el numero de identificacion de el paciente" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombres" class="form-label fw-bold">Nombres:</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese los nombres de el paciente" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label fw-bold">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese los apellidos de el paciente" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="fechaNacimiento" class="form-label fw-bold">Fecha de nacimiento:</label>
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" placeholder="Ingrese la fecha de nacimiento de el paciente" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="sexo" class="form-label fw-bold">Sexo: </label>
                        <select class="form-control" name="sexo" id="sexo">
                            <option class="control-label text-left">Seleccione el sexo</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
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
        alert("El registro se ha guardado correctamente!");
        window.location.href = 'index2.php';
    </script>
<?php
};
if ($msj == 2) {
?>
    <script type="text/javascript">
        alert("El registro no pudo ser guardado, favor validar!");
        window.location.href = 'index2.php';
    </script>
<?php
}
?>