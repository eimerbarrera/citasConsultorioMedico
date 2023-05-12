<?php
extract($_REQUEST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/consultorio.php";
if (isset($_REQUEST['idConsultorio'])) {
    $objConsultorio = new Consultorio();
    $resultado = $objConsultorio->ConsultarIdConsultorio($_REQUEST['idConsultorio']);

    if (isset($resultado)) {
        if ($resultado->num_rows > 0) {
            $registro = $resultado->fetch_object() ?>

            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar consultorio</title>
            </head>

            <body>
                <div class="container ">
                    <div class="row justify-content-center">
                        <h2 class="text-center my-5">Formulario para actualizacion de consultorios</h2>
                        <div class="col-8">
                            <form action="../controlador/validarActualizarConsultorio.php" method="POST">

                                <div class="mb-3">
                                    <label for="consultorioNombre" class="form-label fw-bold">Nombre del consultorio:</label>
                                    <input type="text" name="consultorioNombre" id="consultorioNombre" class="form-control" placeholder="Ingrese el nombre de consultorio" aria-describedby="helpId" value="<?php echo $registro->conNombre ?>" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary col-12">Actualizar</button>
                                </div>
                                <input name="idConsultorio" type="hidden" value="<?php echo $registro->idConsultorio ?>" />

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