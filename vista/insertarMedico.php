<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar medico</title>
</head>

<body>

    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para creación de nuevos medicos</h2>
            <div class="col-8">
                <form action="../controlador/validarInsertarMedico.php" method="POST">

                    <div class="mb-3">
                        <label for="identificacion" class="form-label fw-bold">Identificacion:</label>
                        <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese el numero de identificacion de el medico" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombres" class="form-label fw-bold">Nombres:</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese los nombres de el medico" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label fw-bold">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese los apellidos de el medico" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="especialidad" class="form-label fw-bold">Especialidad: </label>
                        <select class="form-control" name="especialidad" id="especialidad">
                            <option class="control-label text-left">Seleccione la especialidad</option>
                            <option>Médico General</option>
                            <option>Pediatra</option>
                            <option>Dermatólogo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label fw-bold">Telefono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese el numero de telefono" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label fw-bold">Correo:</label>
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese el correo electronico" aria-describedby="helpId" required>
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