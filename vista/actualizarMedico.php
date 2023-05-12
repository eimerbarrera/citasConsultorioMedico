<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar medico</title>
</head>

<body>

    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para actualizacion de medicos</h2>
            <div class="col-8">
                <form action="" method="POST">

                    <div class="mb-5">
                        <label for="identificacion" class="form-label fw-bold">Identificacion:</label>
                        <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese el numero de documento del medico" aria-describedby="helpId" required>
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
require "../Modelo/medico.php";

if (isset($_POST['identificacion'])) {
    $objMedico = new Medico();
    $resultado = $objMedico->consultarMedico($_POST['identificacion']);
    if (isset($resultado)) {
        if ($resultado->num_rows > 0) { ?>

            <h1 align="center">Datos del medico</h1>
            <table class="table table-hover text-center mt-3">

                <thead>
                    <th class="text-center">Identificación</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Especialidad</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Correo</th>
                </thead>

                <?php
                while ($registro = $resultado->fetch_object()) {
                ?>
                    <tr>
                        <td><?php echo $registro->medIdentificacion ?></td>
                        <td><?php echo $registro->medNombres ?></td>
                        <td><?php echo $registro->medApellidos ?></td>
                        <td><?php echo $registro->medEspecialidad ?></td>
                        <td><?php echo $registro->medTelefono ?></td>
                        <td><?php echo $registro->medCorreo ?></td>
                        <td>
                            <a href="index2.php?pag=editarMedico&idMedico=<?php echo $registro->idMedico ?>">
                                <span class="class btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</span>
                            </a>
                        </td>
                    </tr>
                <?php
                }  //cerrando el ciclo while
                ?>
            </table>
        <?php
        } else { ?> <script type="text/javascript">
                alert("El medico no existe en la base de datos!!!!");
                window.location.href = 'index2.php';
            </script> <?php  ;}
    }
}
?>

<?php
if ($msj == 1) {
?>
    <script type="text/javascript">
        alert("El medico fue editado correctamente");
        window.location.href = 'index2.php?pag=actualizarMedico';
    </script>
<?php
}

if ($msj == 2) {
?>
    <script type="text/javascript">
        alert("La información no se actualizó de manera adecuada, favor verificar nuevamente");
        window.location.href = 'index2.php';
    </script>
<?php
}

?>