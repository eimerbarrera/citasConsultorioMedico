<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar consultorio</title>
</head>

<body>

    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para creación de nuevos consultorios</h2>
            <div class="col-8">
                <form action="../controlador/validarInsertarConsultorio.php" method="POST">

                    <div class="mb-3">
                        <label for="consultorioNombre" class="form-label fw-bold">Nombre del consultorio:</label>
                        <input type="text" name="consultorioNombre" id="consultorioNombre" class="form-control" placeholder="Ingrese el nombre del consultorio" aria-describedby="helpId" required>
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