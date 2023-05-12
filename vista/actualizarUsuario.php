<!DOCTYPE html>
<html lang="es">

<head>
    <title>Vida y salud</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para actualizacion de usuarios</h2>
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

    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
extract ($_POST);
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
                    <th class="text-center">Usuario</th>
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
                        <td>
                            <a href="index2.php?pag=editarUsuario&idUsuario=<?php echo $registro->idUsuario?>">
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
                alert("El usuario no existe en la base de datos!!!!");
                window.location.href='index2.php';
            </script> <?php  ;}
    }
}
?>

<?php
if ($msj == 1) {
?>
    <script type="text/javascript">
        alert("El usuario fue editado correctamente");
        window.location.href = 'index2.php?pag=actualizarUsuario';
    </script>
<?php
}

if ($msj == 2) {
?>
    <script type="text/javascript">
        alert("La Información no se actualizó de manera adecuada, favor verificar nuevamente");
        window.location.href = 'index2.php';
    </script>
<?php
}

?>