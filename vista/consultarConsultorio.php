<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar consultorios</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para consulta de consultorios</h2>
            <div class="col-8">
                <form action="" method="POST">

                    <div class="mb-5">
                        <label for="consultorioNombre" class="form-label fw-bold">Nombre del consultorio:</label>
                        <input type="text" name="consultorioNombre" id="consultorioNombre" class="form-control" placeholder="Ingrese el nombre de consultorio" aria-describedby="helpId" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-lg btn-primary col-12">Buscar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>

<?php
extract($_POST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/consultorio.php";

if (isset($_POST['consultorioNombre'])) {
    $objConsultorio = new Consultorio();
    $resultado = $objConsultorio->consultarConsultorio($_POST['consultorioNombre']);
    if (isset($resultado)) {
        if ($resultado->num_rows > 0) { ?>

            <h1 align="center">Datos del consultorio</h1>
            <table class="table table-hover text-center mt-3">

                <thead>
                    <th class="text-center">Nombre del consultorio</th>
                </thead>

                <?php
                while ($registro = $resultado->fetch_object()) {
                ?>
                    <tr>
                        <td><?php echo $registro->conNombre ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
<?php
        } else {
            echo '<div class="alert alert-danger text-center">El consultorio no existe en la base de datos</div>';
        }
    }
}
?>