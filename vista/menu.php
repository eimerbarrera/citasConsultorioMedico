<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/11f24224f5.js" crossorigin="anonymous"></script>
    <title>Sistema Vida Y Salud</title>
</head>

<body style="overflow-x: hidden;">

    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid flex-column">
            <div class="row col-12">
                <div class="col col-lg-2 ">
                    <div class="row">
                        <div class="d-grid col-12  text-center">
                            <div class="row">

                                <figure class="col-5 col-sm-12 p-0 m-0">
                                    <img class="img-fluid" src="../assets/img/logoVidaYSalud.png" width="150" alt="logo">
                                </figure>

                                <div class="col-5 col-sm-12 p-0 m-0">
                                    <div class=" ">
                                        <a class="text-primary text-decoration-none" href="index2.php">Regresar al Sistema</a>
                                    </div>
                                    <div class="d-flex nav justify-content-center">
                                        <p class="m-0">Usuario</p> <?php echo ": " . $_SESSION['user'] ?>
                                    </div>
                                </div>

                                <div class="col-2 col-sm-12 m-2 pe-3 p-0">
                                    <button class="navbar-toggler navbar-primary-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId">
                                        <span class="navbar-toggler-icon "></span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10 p-0">

                    <div class="row m-2 collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="col-12 navbar-nav mt-2 p-0 mt-lg-0">
                            <!-- <div class="row"> -->
                                <!-- Boton usuarios -->
                                <li class="row nav-item dropdown m-2 justify-content-center">
                                    <a class="col-8 col-sm-12 dropdown-toggle btn btn-outline-primary" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i> Usuarios</a>
                                    <div class="dropdown-menu btn btn-info col-8 col-sm-12 text-center" aria-labelledby="dropdownId">
                                        <a class="dropdown-item p-1" href="index2.php?pag=insertarUsuario"><i class="fa-solid fa-user-plus"></i> Agregar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=consultarUsuario"><i class="fa-solid fa-magnifying-glass"></i> Consultar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=actualizarUsuario"><i class="fa-solid fa-rotate"></i> Actualizar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=eliminarUsuario"><i class="fa-solid fa-user-minus"></i> Eliminar</a>
                                    </div>
                                </li>
                                <!-- Boton medicos -->
                                <li class="row nav-item dropdown m-2 justify-content-center">
                                    <a class="col-8 col-sm-12 dropdown-toggle btn btn-outline-primary" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user-doctor"></i> Medicos</a>
                                    <div class="dropdown-menu btn btn-info col-8 col-sm-12 text-center" aria-labelledby="dropdownId">
                                        <a class="dropdown-item p-1" href="index2.php?pag=insertarMedico"><i class="fa-solid fa-user-doctor"></i><i class="fa-solid fa-plus"></i> Agregar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=consultarMedico"><i class="fa-solid fa-magnifying-glass"></i> Consultar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=actualizarMedico"><i class="fa-solid fa-rotate"></i> Actualizar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=eliminarMedico"><i class="fa-solid fa-user-doctor"></i><i class="fa-solid fa-minus"></i> Eliminar</a>
                                    </div>
                                </li>
                                <!-- Boton pacientes -->
                                <li class="row nav-item dropdown m-2 justify-content-center">
                                    <a class="col-8 col-sm-12 dropdown-toggle btn btn-outline-primary" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i> Pacientes</a>
                                    <div class="dropdown-menu btn btn-info col-8 col-sm-12 text-center" aria-labelledby="dropdownId">
                                        <a class="dropdown-item p-1" href="index2.php?pag=insertarPaciente"><i class="fa-solid fa-user-plus"></i> Agregar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=consultarPaciente"><i class="fa-solid fa-magnifying-glass"></i> Consultar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=actualizarPaciente"><i class="fa-solid fa-rotate"></i> Actualizar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=eliminarPaciente"><i class="fa-solid fa-user-minus"></i> Eliminar</a>
                                    </div>
                                </li>


                                <!-- Boton citas -->
                                <li class="row nav-item dropdown m-2 justify-content-center">
                                    <a class="col-8 col-sm-12 dropdown-toggle btn btn-outline-primary" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-calendar"></i> Citas</a>
                                    <div class="dropdown-menu btn btn-info col-8 col-sm-12 text-center" aria-labelledby="dropdownId">
                                        <a class="dropdown-item p-1" href="index2.php?pag=insertarCita"><i class="fa-solid fa-calendar-plus"></i> Agregar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=atenderCita"><i class="fa-solid fa-clipboard-user"></i> Atender</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=listarCitas"><i class="fa-solid fa-magnifying-glass"></i> Consultar</a>
                                    </div>
                                </li>
                                <!-- Boton consultorios -->
                                <li class="row nav-item dropdown m-2 justify-content-center">
                                    <a class="col-8 col-sm-12 dropdown-toggle btn btn-outline-primary" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-house-medical"></i> Consultorios</a>
                                    <div class="dropdown-menu btn btn-info col-8 col-sm-12 text-center" aria-labelledby="dropdownId">
                                        <a class="dropdown-item p-1" href="index2.php?pag=insertarConsultorio"><i class="fa-solid fa-house-medical-circle-check"></i> Agregar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=consultarConsultorio"><i class="fa-solid fa-magnifying-glass"></i> Consultar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=actualizarConsultorio"><i class="fa-solid fa-rotate"></i> Actualizar</a>
                                        <a class="dropdown-item p-1" href="index2.php?pag=eliminarConsultorio"><i class="fa-solid fa-house-medical-circle-xmark"></i> Eliminar</a>
                                    </div>
                                </li>

                                <ul class="navbar-nav col-12">
                                    <li class="nav-item m-2 row justify-content-center">
                                        <a class="col-8 col-sm-12 btn btn-outline-danger" href="salir.php"><i class="fa-regular fa-circle-xmark"></i> Cerrar Sesión</a>
                                    </li>
                                </ul>
                            <!-- </div> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>