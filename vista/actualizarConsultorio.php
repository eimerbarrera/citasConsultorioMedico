<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar consultorio</title>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <h2 class="text-center my-5">Formulario para actualizacion de consultorios</h2>
            <div class="col-8">
                <form action="" method="POST">

                    <div class="mb-5">
                        <label for="consultorioNombre" class="form-label fw-bold">Nombre del consultorio:</label>
                        <input type="text" name="consultorioNombre" id="consultorioNombre" class="form-control" placeholder="Ingrese el nombre del consultorio" aria-describedby="helpId" required>
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
    $resultado = $objConsultorio->ConsultarConsultorio($_POST['consultorioNombre']);
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
                        <td>
                            <a href="index2.php?pag=editarConsultorio&idConsultorio=<?php echo $registro->idConsultorio ?>">
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
                alert("El consultorio no existe en la base de datos!!!!");
                window.location.href = 'index2.php';
            </script> <?php  ;}
    }
}
                        ?>

<?php
if ($msj == 1) {
?>
    <script type="text/javascript">
        alert("El consultorio fue editado correctamente");
        window.location.href = 'index2.php?pag=actualizarConsultorio';
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