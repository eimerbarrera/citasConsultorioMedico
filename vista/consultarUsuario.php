<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuarios</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para consulta de usuarios</h2>
            <div class="col-8">
                <form action="" method="POST">

                    <div class="mb-5">
                        <label for="usuario" class="form-label fw-bold">Usuario:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese el nombre de usuario" aria-describedby="helpId" required>
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
require "../Modelo/usuario.php";

if (isset($_POST['usuario'])) {
    $objUsuario = new Usuario();
    $resultado = $objUsuario->ConsultarUsuario($_POST['usuario']);
    if (isset($resultado)) {
        if ($resultado->num_rows > 0) { ?>

            <h1 align="center">Datos del usuario</h1>
            <table class="table table-hover text-center mt-3">
                <thead>
                    <th class="text-center">Usuario.</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Rol</th>

                </thead>
                <?php
                while ($registro = $resultado->fetch_object()) {
                ?>
                    <tr>
                        <td><?php echo $registro->usuLogin ?></td>
                        <td><?php echo $registro->usuPassword ?></td>
                        <td><?php echo $registro->usuEstado ?></td>
                        <td><?php echo $registro->usuRol ?></td>


                    </tr>
                <?php
                }
                ?>
            </table>
<?php
        } else {
            echo '<div class="alert alert-danger text-center">El Usuario No existe en la base de datos</div>';
        }
    }
}
?>