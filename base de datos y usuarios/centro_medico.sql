-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 04:53:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centro_medico`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarMedicos` (`id` INT(11), `identificacion` CHAR(15), `nombres` VARCHAR(50), `apellidos` VARCHAR(50), `especialidad` VARCHAR(50), `telefono` CHAR(15), `correo` VARCHAR(50))   INSERT INTO medico(idMedico, medIdentificacion, medNombres, medApellidos, medEspecialidad, medTelefono, medCorreo)
VALUES (id, identificacion, nombres, apellidos, especialidad, telefono, correo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarPacientes` (`id` INT(11), `identificacion` CHAR(15), `nombres` VARCHAR(50), `apellidos` VARCHAR(50), `fechaNacimiento` DATE, `sexo` ENUM('Femenino','Masculino'))   INSERT INTO pacientes(idPaciente, pacIdentificacion, pacNombres, pacApellidos, pacFechaNacimiento, pacSexo)
VALUES(id, identificacion, nombres, apellidos, fechaNacimiento, sexo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarUsuarios` (`id` INT(11), `login` CHAR(15), `contraseña` VARCHAR(60), `estado` ENUM('Activo','Inactivo'), `rol` TEXT)   INSERT INTO usuarios(idUsuario, usuLogin, usuPassword, usuEstado, usuRol)
VALUES(id, login, contraseña, estado, rol)$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `numMedicos` () RETURNS INT(11)  BEGIN
RETURN (SELECT count(*) from medico);
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `numPacientes` () RETURNS INT(11)  BEGIN
RETURN (SELECT count(*) from pacientes);
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `numUsuarios` () RETURNS INT(11)  BEGIN
DECLARE cantidad int;
RETURN (SELECT COUNT(*) FROM usuarios);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `citFecha` date NOT NULL,
  `citHora` time NOT NULL,
  `citPaciente` int(11) NOT NULL,
  `citMedico` int(11) NOT NULL,
  `citConsultorio` int(11) NOT NULL,
  `citEstado` enum('Asignado','Atendido') NOT NULL,
  `citObservaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `citFecha`, `citHora`, `citPaciente`, `citMedico`, `citConsultorio`, `citEstado`, `citObservaciones`) VALUES
(1, '2022-08-01', '07:00:00', 1, 2, 1, 'Asignado', 'Cita medicina general'),
(2, '2022-07-30', '08:00:00', 3, 4, 3, 'Asignado', 'Cita de Ortopedia'),
(3, '2022-07-30', '09:30:00', 9, 2, 4, 'Asignado', 'Cita Pediatria'),
(4, '2022-08-01', '10:30:00', 7, 5, 2, 'Atendido', 'Cita medicina general'),
(8, '2022-10-20', '00:20:00', 11, 7, 5, 'Asignado', ''),
(9, '2022-10-12', '12:10:00', 1, 1, 2, 'Asignado', ''),
(10, '2022-10-10', '10:10:00', 1, 2, 1, 'Atendido', 'Paciente con diagnóstico de hipertencion '),
(12, '2022-10-13', '11:33:00', 21, 1, 3, 'Atendido', 'posible fractura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `idConsultorio` int(11) NOT NULL,
  `conNombre` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`idConsultorio`, `conNombre`) VALUES
(1, 'Medicina genera'),
(2, 'Medicina genera'),
(3, 'Ortopedia'),
(4, 'Pedriatria'),
(5, 'Laboral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `medIdentificacion` char(15) NOT NULL,
  `medNombres` varchar(50) NOT NULL,
  `medApellidos` varchar(50) NOT NULL,
  `medEspecialidad` varchar(50) NOT NULL,
  `medTelefono` char(15) NOT NULL,
  `medCorreo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`idMedico`, `medIdentificacion`, `medNombres`, `medApellidos`, `medEspecialidad`, `medTelefono`, `medCorreo`) VALUES
(1, '14578621', 'Jesus', 'Paniagua', 'Medicina General', '3114561223', 'jesusp@medico.com'),
(2, '45875453', 'Mariela', 'Henao', 'Pediatria', '3219876541', 'marielah@medico.com'),
(3, '87612344', 'Luz Elena', 'Velasquez', 'Medicina General', '3114821006', 'luzv@medico.com'),
(4, '45678032', 'Santiago', 'Perez', 'Ortopedia', '504321456', 'santiagop@medico.com'),
(5, '1046903541', 'Mauricio', 'Cardenas', 'Medico general', '4567892100', 'mauricioc@medico.com'),
(6, '45867123', 'Sofia', 'Prada', 'Medicina laboral', '3218021244', 'sofiap@medico.com'),
(7, '1046852147', 'Emanuel', 'Posada Quiceno', 'Pediatria', '3004564321', 'emanuelp@medico.co'),
(9, '123123123', 'edgar', 'alayon', 'Pediatra', '35678892', 'ejemplo@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `pacIdentificacion` char(15) NOT NULL,
  `pacNombres` varchar(50) NOT NULL,
  `pacApellidos` varchar(50) NOT NULL,
  `pacFechaNacimiento` date NOT NULL,
  `pacSexo` enum('Femenino','Masculino') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `pacIdentificacion`, `pacNombres`, `pacApellidos`, `pacFechaNacimiento`, `pacSexo`) VALUES
(1, '70415285', 'Jesus Arturo', 'Londoño Graciano', '1972-04-18', 'Masculino'),
(2, '43225672', 'Edilma', 'Pizarro Lozano', '1966-09-01', 'Femenino'),
(3, '82543711', 'Luis', 'Mosquera Palacio', '1955-07-03', 'Masculino'),
(4, '103455', 'Milton', 'Rozan Florez', '1978-12-24', 'Masculino'),
(5, '205788', 'Angelica', 'Torres Suarez', '0000-00-00', 'Femenino'),
(6, '1020850455', 'Daniel', 'Rozan Torres', '2007-02-28', 'Masculino'),
(7, '1007232156', 'Natalia', 'Rozan Torres', '1998-07-22', 'Femenino'),
(8, '1132456788', 'Santiago', 'Castillo Moreno', '2017-11-07', 'Masculino'),
(9, '1172489321', 'Sofia', 'Alzate Loaiza', '2019-10-28', 'Femenino'),
(10, '1010987654', 'Marcela', 'Camacho Buitrago', '1989-05-16', 'Femenino'),
(11, '15487321', 'Andres Felipe', 'Arango', '2001-11-11', 'Masculino'),
(21, '100100100', 'Lorena', 'Alayon', '2022-10-19', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Médico'),
(3, 'Recepción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuLogin` char(15) NOT NULL,
  `usuPassword` varchar(60) NOT NULL,
  `usuEstado` enum('Activo','Inactivo') NOT NULL,
  `usuRol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`, `usuRol`) VALUES
(1, 'Gerencia', 'Gerencia1', 'Activo', 'Gerente'),
(2, 'Recepcion', 'Recepcion1', 'Activo', 'Recepcionista'),
(3, 'MedicoGeneral', 'MedicoGeneral1', 'Activo', 'Médico general'),
(4, 'Pediatria', 'Pediatria1', 'Activo', 'Médico Pedítra'),
(5, 'Ortopedia', 'Ortopedia1', 'Activo', 'Médico Ortopedísta'),
(6, 'MedicoLaboral', 'MedicoLaboral1', 'Activo', 'Médico Laboral'),
(7, 'MedicoGeneral2', 'MedicoGeneral2', 'Activo', 'Médico general'),
(8, 'MedicoGeneral3', 'MedicoGeneral3', 'Inactivo', 'Médico general'),
(9, 'Edgar Hernández', '237b7ae49737ded167ef657e13fc9981', 'Activo', 'Médico General'),
(10, 'ejemplo', '2f1767dc31e7a8dc68b2c21bf07984ff', 'Activo', 'Administrador'),
(12, 'lorena', '62a90ccff3fd73694bf6281bb234b09a', 'Activo', 'Paciente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `citPaciente` (`citPaciente`),
  ADD KEY `citMedico` (`citMedico`),
  ADD KEY `citConsultorio` (`citConsultorio`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`idConsultorio`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `medIdentificacion` (`medIdentificacion`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `pacIdentificacion` (`pacIdentificacion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `usuLogin` (`usuLogin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  MODIFY `idConsultorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
