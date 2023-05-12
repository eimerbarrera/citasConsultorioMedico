<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar Usuario</title>
</head>

<body>

  <div class="container ">
    <div class="row justify-content-center">
      <h2 class="text-center my-5">Formulario para creación de nuevos usuarios</h2>
      <div class="col-8">
        <form action="../controlador/validarInsertarUsuario.php" method="POST">

          <div class="mb-3">
            <label for="usuario" class="form-label fw-bold">Usuario:</label>
            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese el nombre de usuario" aria-describedby="helpId" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese la contraseña del usuario" aria-describedby="helpId" required>
          </div>
          <div class="mb-3">
            <label for="estado" class="form-label fw-bold">Estado: </label>
            <select class="form-control" name="estado" id="estado">
              <option class="control-label text-left">Seleccione el estado</option>
              <option>Activo</option>
              <option>Inactivo</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="rol" class="form-label fw-bold">Rol del sistema: </label>
            <select class="form-control" name="rol" id="rol">
              <option class="control-label text-left">Seleccione el rol</option>
              <option>Administrador</option>
              <option>Medico</option>
              <option>Paciente</option>
              <option>Auxiliar</option>
            </select>
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