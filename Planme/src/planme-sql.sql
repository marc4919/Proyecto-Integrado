-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2021 a las 12:46:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

CREATE DATABASE `planme`;
USE `planme`;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `ID_PLAN` int(11) NOT NULL,
  `ID_Creador` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Localizacion` varchar(100) NOT NULL,
  `Transporte` varchar(30) NOT NULL,
  `Categoria_Principal` varchar(20) NOT NULL,
  `Categoria_Secundaria` varchar(20) NOT NULL,
  `Precio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`ID_PLAN`, `ID_Creador`, `Nombre`, `Descripcion`, `Localizacion`, `Transporte`, `Categoria_Principal`, `Categoria_Secundaria`, `Precio`) VALUES
(1, 1, 'FunJump por la tarde', 'El trampoline situado en Alfafar, es el más grande de España con más de 2500 m2 con diferentes zonas donde pasarlo en grande saltando, haciendo piruetas y otras actividades', 'Carrer del Camí Fus, Massanassa', 'Cualquiera', 'Ocio', 'Deporte', '8'),
(2, 1, 'Sesión de belleza', 'Relajate , y liberate con tu pareja, o solitario con un masaje', ' Carrer de Cadis, València', 'Cualquiera', 'Ocio', 'Belleza y Salud', '25'),
(3, 1, 'Autocine Nocturno', 'El AutoCine el Saler cuenta con amplios servicios para ver una pelicula al aire libre, podras disfrutar de dos peliculas en cada sesión', 'Carrera del Riu, Valencia', 'Coche', 'Ocio', 'Cine', '9'),
(4, 1, 'Cine y Cena', 'Disfruta de una pelicula juntos a tus amigos o tu pareja y finalizar la noche de la mejor manera, cenando en uno selectos locales que podemos encontrar junto a las salas de Cine ABC', 'Carrer de Roger de Llòria', 'Coche, Autobus, Metro', 'Cena', 'Cine', '24'),
(5, 1, 'Padel Mañanero + Pala', 'Disgruta con tus amigos de un partido intenso en una de las mejores instalaciones de padel de los alrrededores', 'Av. dels Tarongers, Paiporta', 'Coche', 'Ocio', 'Deporte Aire Libre', '10'),
(6, 1, 'Merienda en la Playa', 'Pase junto a tu pareja, o junto a tus amigos en un atardecer unico e inigualable por la playa, disfrutando de un tentempie junto a la mejor compañia, y las mejores visas', 'Playa el Saler', 'Coche, Autobus', 'Naturaleza', 'Aire Libre', '5'),
(7, 1, 'Paseo por la Montaña', 'Disfruta junto a tu familia de la naturaleza y sentir la paz de estar rodeados de arboles y el sonido de los pajaros', '', 'Coche', 'Naturaleza', 'Aire Libre', '0'),
(8, 1, 'Masaje', 'Relajate tras un duro dia de trabajo, de la mejor manera, este masaje no te dejara indiferente, saldras como nuevo y con una nueva actidud', 'C/ Santa Mª Micaela, 11, bajo', 'Coche, Autobus, Metro', 'Ocio', 'Masaje', '40'),
(9, 1, 'Escape Room Para 2', 'Disgruta de una experiencia inmersiva junto a tus amigos, cooperar juntos para llegar al objetivo, SALIR DE LA HABITACIÓN', 'Calle Maestro Sosa 27, Valencia', 'Coche, Autobus, Metro', 'Ocio', 'Misterio', '20'),
(10, 1, 'Tirolina', 'Siente la adredalina de tirarte en tirolina, rodeado de vegetación y naturaleza', 'Carrer Artur Ballester, 46015 Valencia', 'Coche', 'Ocio', 'Aire Libre', '10'),
(11, 1, 'Cata Vino', 'Sorprendete con sabores unicos , cata algunos de los vinos mas especiales de las bodegas, con sabores y olores unicos', 'Carrer de la Murta, 2, 46020 València', 'Coche', 'Degustación', 'Vinos', '15'),
(12, 1, 'Cata Vino + Cena', 'Disgruta de sabores unicos e intensos junto a profesinales en la materia, y finaliza esta experiencia de la mejor manera, una cena que no te defraudara acompañada de uno de los mejores vinos de la bod', 'Carrer de la Murta, 2, 46020 València', 'Coche', 'Degustación', 'Vinos', '40'),
(13, 1, 'Paseo en Bici por la Ciudad', 'Recorree las zonas mas emblematicas y mas conocidas de Valencia, en un medio agradecido con el medio ambiente', 'Calle de Donoso Cortés, 12,Valencia', 'Coche, Autobus, Metro', 'Turismo', 'Ciclismo', '25'),
(14, 1, 'Cine en sala VIP Bonaire', 'Estos cines cuentas con un servicio VIP que no te dejara indiferente, cuando pruebes sus butacas acolchadas, desearas volver una y otra vez. Disfruta de una amplia experiencia cinematografica, en las ', 'A-3, Km 345, 46960 Aldaia', 'Coche, Autobus', 'Ocio', 'Cine', '11'),
(15, 1, 'Visita Bioparc', 'Bioparc Valencia es un parque zoológico español situado en la costa mediterránea, en el que podras disgrutar de una gran variedad de animales en su habitat natural', 'Av. Pío Baroja, 3, 46015 València', 'Coche, Autobus, Metro', 'Diversión en Familia', 'Animales', '23'),
(16, 1, 'Paseo Varca Albufera', 'Viaje en Varca por uno de los Parajes Naturales mas bonitos y emblematicos que nos podemos encontrar en la Comunidad Valenciana', 'CV-500, Km 9, 5, 46012 València', 'Coche, Autobus', 'Paisaje', 'Naturaleza', '4'),
(17, 1, 'Visita al Oceanografic', 'Recorre el túnel submarino más largo de Europa, pasea bajo los dientes afilados de los tiburones o conoce a la única familia de belugas de Europa.\r\nSumérgete y déjate sorprender con los ecosistemas ma', 'Carrer Eduardo Primo Yúfera, València', 'Coche, Autobus, Metro', 'Diversión en Familia', 'Animales', '31'),
(18, 1, 'Paseo Por la ciudad de las Art', 'Disfruta de un paseo por la ciudad de las artes y las ciencias donde  se puede admirar por fuera (su arquitectura, la armonía del conjunto, la singularidad de cada edificio).Podras realizar un picnic ', 'Av. del Professor López Piñero, València', 'Coche, Autobus, Metro', 'Turismo', 'Arquitectura', '0'),
(19, 1, 'Pícnic Parque Cabecera', 'Dusfruta de un Pícnic sentado en el cesped del parque de Cabecera y depues puedes disfrutar de un fantastico paseo en varca por el lago', 'Coche, Autobus, Metro', 'Av. Pío Baroja, València', 'Paisaje', 'Naturaleza', '10'),
(20, 1, 'Moto de Agua', 'Seguro que necesitas descargar tensión y has pensado alguna vez en hacerte un masaje relajante, pues olvídate de masajes por que cuando pruebes esta experiencia querras repetir una y ora vez', 'Poblado Nautico\r\nCarrer Marina Real Juan Carlos I 46011 Valencia, España', 'Coche, Autobus,Metro', 'Adredalina', 'Actividad Maritima', '95'),
(21, 1, 'Paintball Torrente', 'Vive una experiencia de guerra total y siéntete un soldado', 'Camí, Carrer del Mas del Jutge, Torrent', 'Coche, Autobus', 'Adredalina', 'Simulación', '15'),
(22, 1, 'Ruta Garbi', 'Se trata de una ruta muy bonita y divertida, aunque con cierta dificultad', 'Naquera', 'Coche', 'Naturaleza', 'Aire Libre', '0'),
(23, 1, 'Museo Nacional de Ceramitca y ', 'El Museo Nacional de Cerámica y Artes Suntuarias González Martí está ubicado en el palacio del Marqués de Dos Aguas', 'Carrer del Poeta Querol, Valencia', 'Coche', 'Turismo', 'Escultura', '3'),
(24, 1, 'Museo de las Ciencias', 'Descubre las EXPOSICIONES INTERACTIVAS Y ANIMACIONES CIENTÍFICAS PARA CONOCER LAS NUEVAS TECNOLOGÍAS Y LOS AVANCES DE LA CIENCIA', 'Av. del Professor López Piñero, Valencia', 'Coche, Autobus, Metro', 'Turismo', 'Cultura', '29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `ID_Usuario` int(11) NOT NULL,
  `ID_PLAN` int(11) NOT NULL,
  `Horario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nombre`, `Correo`, `Password`, `Tipo`) VALUES
(1, 'ADMIN', 'ADMIN', 'planme', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`ID_PLAN`),
  ADD KEY `ID_Creador` (`ID_Creador`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`ID_Usuario`,`ID_PLAN`),
  ADD KEY `ID_PLAN` (`ID_PLAN`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `ID_PLAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `planes_ibfk_1` FOREIGN KEY (`ID_Creador`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD CONSTRAINT `relacion_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`),
  ADD CONSTRAINT `relacion_ibfk_2` FOREIGN KEY (`ID_PLAN`) REFERENCES `planes` (`ID_PLAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
