<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/11f24224f5.js" crossorigin="anonymous"></script>
    <title>Iniciar Sesion</title>
</head>

<body class="bg-dark">

    <div class="container py-5 ">

        <div class="text-center row justify-content-center ">
            <div class="col-auto text-light"><br><br><br><br><br><br><br><br><br><br>

                <h2>Consultorio Vida y Salud</h2>
                <h3>Presione clic en ingresar</h3>


                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                    ingresar
                </button>
                <a href="./index.html" class="btn btn-danger m-2 btn-lg">Salir a la web</a>


            </div>
        </div>

    </div>

    <!-- Modal Body -->

    <div class="modal  fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content ">



                <div class="modal-header ">
                    <h5 class="modal-tittle " id="modalTitleId">Ingresar al sistema</h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="form1" name="form1" method="post" action="controlador/validariniciosesion.php" role="form">
                        <div class="mb-3">
                            <label for="usuario" class="form-label"><i class="fa-solid fa-user"></i> Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="Ingrese Usuario" placeholder="Ingrese Usuario" required="">
                        </div>

                        <div class="mb-3">
                            <label for="contrasena" class="form-label"><i class="fa-solid fa-key"></i> Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Ingrese contraseña" required="">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div><!-- Modal content -->
        </div>
    </div>


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>

    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php

if ($x==1)
  echo '<br><br><div class="alert alert-success text-center">Bienvenido</div>';
if ($x==2)
  echo '<br><br><div class="alert alert-danger text-center">Error de usuario y/o contraseña ó el usuario no está registrado en la base de datos nueva</div>';
if ($x==3)
  echo '<br><br><div class="alert alert-info text-center">El usuario cerró sesión correctamente</div>';
?>