<?php

extract($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/consultorio.php";

if (isset($_REQUEST['idConsultorio'])) {

    $objConsultorio = new Consultorio();
    $resultado = $objConsultorio->consultarIdConsultorio($_REQUEST['idConsultorio']);
    //Asignar a una variable el resultado de la consulta

    if (isset($resultado))  //quiere decir que los datos estan bien
    {
        if ($resultado->num_rows > 0) {

            $registro = $resultado->fetch_object() ?>

            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Borrar consultorio</title>
            </head>

            <body>
                <div class="container ">
                    <div class="row justify-content-center">
                        <h2 class="text-center my-5">Verifique la informacion del consultorio a eliminar</h2>
                        <div class="col-8">
                            <form action="../controlador/validarEliminarConsultorio.php" method="POST">

                                <div class="mb-3">
                                    <label for="consultorioNombre" class="form-label fw-bold">Nombre del consultorio:</label>
                                    <input type="text" name="consultorioNombre" id="consultorioNombre" class="form-control" aria-describedby="helpId" value="<?php echo $registro->conNombre ?>" required readonly onmousedown="return false;">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary col-12">Confirmar eliminacion</button>
                                </div>
                                <input name="idConsultorio" type="hidden" value="<?php echo $registro->idConsultorio ?>" />

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