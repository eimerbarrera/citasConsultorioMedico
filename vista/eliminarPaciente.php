<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar paciente</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para eliminacion de pacientes</h2>
            <div class="col-8">
                <form action="" method="POST">

                    <div class="mb-5">
                        <label for="identificacion" class="form-label fw-bold">Identificacion:</label>
                        <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese el numero de documento de el paciente" aria-describedby="helpId" required>
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
require "../Modelo/paciente.php";

if (isset($_POST['identificacion'])) {
    $objPaciente = new Paciente();
    $resultado = $objPaciente->consultarPaciente($_POST['identificacion']);
    if (isset($resultado)) {
        if ($resultado->num_rows > 0) { ?>

            <h1 align="center">Datos del paciente</h1>
            <table class="table table-hover text-center mt-3">
                <thead>
                    <th class="text-center">Identificación</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Fecha de nacimiento</th>
                    <th class="text-center">Sexo</th>
                </thead>
                <?php
                while ($registro = $resultado->fetch_object()) {
                ?>
                    <tr>
                        <td><?php echo $registro->pacIdentificacion ?></td>
                        <td><?php echo $registro->pacNombres ?></td>
                        <td><?php echo $registro->pacApellidos ?></td>
                        <td><?php echo $registro->pacFechaNacimiento ?></td>
                        <td><?php echo $registro->pacSexo ?></td>
                        <td align="center">
                            <a href="index2.php?pag=borrarPaciente&idPaciente=<?php echo $registro->idPaciente ?>" title="Clic para eliminar paciente">
                                <i class="btn btn-primary"><span><i class="fa-solid fa-user-minus"></i></span> Eliminar</i>
                            </a>
                        </td>
                    </tr>
                <?php
                }  //cerrando el ciclo while
                ?>
            </table>
<?php
        } else {
            echo '<div class="alert alert-danger text-center">El paciente no existe en la base de datos</div>';
        }
    }
}
?>
<?php
if ($msj == 1) {
?>
    <script type="text/javascript">
        alert("Los datos de el paciente fueron eliminados");
        window.location.href = 'index2.php?pag=eliminarPaciente';
    </script>
<?php
}

if ($msj == 2) {
?>
    <script type="text/javascript">
        alert("No es posible eliminar el paciente");
        window.location.href = 'index2.php';
    </script>
<?php
}

?>