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
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`ID_PLAN`, `ID_Creador`, `Nombre`, `Descripcion`, `Localizacion`, `Transporte`, `Categoria_Principal`, `Categoria_Secundaria`, `Precio`) VALUES
(1, 1, 'FunJump por la tarde', 'El FunJump situado en Alfafar, es el más grande de España con más de 2500 m2 con diferentes zonas donde pasarlo en grande saltando, haciendo piruetas y otras actividades', 'Carrer del Camí Fus, Massanassa', 'Cualquiera', 'Ocio', 'Deporte', '8'),
(2, 1, 'Sesión de belleza', 'Relájate , y libérate con tu pareja, o solitario con un masaje', ' Carrer de Cadis, València', 'Cualquiera', 'Ocio', 'Belleza y Salud', '25'),
(3, 1, 'Autocine Nocturno', 'El AutoCine el Saler cuenta con amplios servicios para ver una película al aire libre, podrás disfrutar de dos películas en cada sesión', 'Carrera del Riu, Valencia', 'Coche', 'Ocio', 'Cine', '9'),
(4, 1, 'Cine y Cena', 'Disfruta de una película juntos a tus amigos o tu pareja y finalizar la noche de la mejor manera, cenando en uno selectos locales que podemos encontrar junto a las salas de Cine ABC', 'Carrer de Roger de Llòria', 'Coche, Autobús, Metro', 'Cena', 'Cine', '24'),
(5, 1, 'Pádel Mañanero + Pala', 'Disfruta con tus amigos de un partido intenso en una de las mejores instalaciones de pádel de los alrededores', 'Av. dels Tarongers, Paiporta', 'Coche', 'Ocio', 'Deporte Aire Libre', '10'),
(6, 1, 'Merienda en la Playa', 'Pase junto a tu pareja, o junto a tus amigos en un atardecer único e inigualable por la playa, disfrutando de un tentempié junto a la mejor compañía, y las mejores visas', 'Playa el Saler', 'Coche, Autobús', 'Naturaleza', 'Aire Libre', '5'),
(7, 1, 'Paseo por la Montaña', 'Disfruta junto a tu familia de la naturaleza y sentir la paz de estar rodeados de árboles y el sonido de los pájaros', '', 'Coche', 'Naturaleza', 'Aire Libre', '0'),
(8, 1, 'Masaje', 'Relájate tras un duro día de trabajo, de la mejor manera, este masaje no te dejara indiferente, saldrás como nuevo y con una nueva actitud', 'C/ Santa Mª Micaela, 11, bajo', 'Coche, Autobús, Metro', 'Ocio', 'Masaje', '40'),
(9, 1, 'Escape Room Para 2', 'Disfruta de una experiencia inmersiva junto a tus amigos, cooperar juntos para llegar al objetivo, SALIR DE LA HABITACIÓN', 'Calle Maestro Sosa 27, Valencia', 'Coche, Autobús, Metro', 'Ocio', 'Misterio', '20'),
(10, 1, 'Tirolina', 'Siente la adrenalina de tirarte en tirolina, rodeado de vegetación y naturaleza', 'Carrer Artur Ballester, 46015 Valencia', 'Coche', 'Ocio', 'Aire Libre', '10'),
(11, 1, 'Cata Vino', 'Sorpréndete con sabores únicos, cata algunos de los vinos mas especiales de las bodegas, con sabores y olores únicos', 'Carrer de la Murta, 2, 46020 València', 'Coche', 'Degustación', 'Vinos', '15'),
(12, 1, 'Cata Vino + Cena', 'Disfruta de sabores únicos e intensos junto a profesionales en la materia, y finaliza esta experiencia de la mejor manera, una cena que no te defraudara acompañada de uno de los mejores vinos de la bodega', 'Carrer de la Murta, 2, 46020 València', 'Coche', 'Degustación', 'Vinos', '40'),
(13, 1, 'Paseo en Bici por la Ciudad', 'Recorre las zonas más emblemáticas y más conocidas de Valencia, en un medio agradecido con el medio ambiente', 'Calle de Donoso Cortés, 12,Valencia', 'Coche, Autobús, Metro', 'Turismo', 'Ciclismo', '25'),
(14, 1, 'Cine en sala VIP Bonaire', 'Estos cines cuentas con un servicio VIP que no te dejara indiferente, cuando pruebes sus butacas acolchadas, desearas volver una y otra vez. Disfruta de una amplia experiencia cinematográfica, en las ', 'A-3, Km 345, 46960 Aldaia', 'Coche, Autobús', 'Ocio', 'Cine', '11'),
(15, 1, 'Visita Bioparc', 'Bioparc Valencia es un parque zoológico español situado en la costa mediterránea, en el que podrás disfrutar de una gran variedad de animales en su hábitat natural', 'Av. Pío Baroja, 3, 46015 València', 'Coche, Autobús, Metro', 'Diversión en Familia', 'Animales', '23'),
(16, 1, 'Paseo Barca Albufera', 'Viaje en Barca por uno de los Parajes Naturales mas bonitos y emblemáticos que nos podemos encontrar en la Comunidad Valenciana', 'CV-500, Km 9, 5, 46012 València', 'Coche, Autobús', 'Paisaje', 'Naturaleza', '4'),
(17, 1, 'Visita al Oceanográfic', 'Recorre el túnel submarino más largo de Europa, pasea bajo los dientes afilados de los tiburones o conoce a la única familia de belugas de Europa, sumérgete  y déjate sorprender con los ecosistemas marinos', 'Carrer Eduardo Primo Yúfera, València', 'Coche, Autobús, Metro', 'Diversión en Familia', 'Animales', '31'),
(18, 1, 'Paseo Por la ciudad de las Art', 'Disfruta de un paseo por la ciudad de las artes y las ciencias donde  se puede admirar por fuera (su arquitectura, la armonía del conjunto, la singularidad de cada edificio).Podrás realizar un picnic ', 'Av. del Profesor López Piñero, València', 'Coche, Autobús, Metro', 'Turismo', 'Arquitectura', '0'),
(19, 1, 'Picnic Parque Cabecera', 'Disfruta de un Picnic sentado en el césped del parque de Cabecera y después puedes disfrutar de un fantástico paseo en barca por el lago', 'Coche, Autobús, Metro', 'Av. Pío Baroja, València', 'Paisaje', 'Naturaleza', '10'),
(20, 1, 'Moto de Agua', 'Seguro que necesitas descargar tensión y has pensado alguna vez en hacerte un masaje relajante, pues olvídate de masajes porque cuando pruebes esta experiencia querrás repetir una y otra vez', 'Poblado Nautico\r\nCarrer Marina Real Juan Carlos I 46011 Valencia, España', 'Coche, Autobús, Metro', 'Adrenalina', 'Actividad Marítima', '95'),
(21, 1, 'Paintball Torrente', 'Vive una experiencia de guerra total y siéntete un soldado', 'Camí, Carrer del Mas del Jutge, Torrent', 'Coche, Autobús', 'Adrenalina', 'Simulación', '15'),
(22, 1, 'Ruta Garbi', 'Se trata de una ruta muy bonita y divertida, aunque con cierta dificultad', 'Naquera', 'Coche', 'Naturaleza', 'Aire Libre', '0'),
(23, 1, 'Museo Nacional de Cerámica y ', 'El Museo Nacional de Cerámica y Artes Suntuarias González Martí está ubicado en el palacio del Marqués de Dos Aguas', 'Carrer del Poeta Querol, Valencia', 'Coche', 'Turismo', 'Escultura', '3'),
(24, 1, 'Museo de las Ciencias', 'Descubre las EXPOSICIONES INTERACTIVAS Y ANIMACIONES CIENTÍFICAS PARA CONOCER LAS NUEVAS TECNOLOGÍAS Y LOS AVANCES DE LA CIENCIA', 'Av. del Profesor López Piñero, Valencia', 'Coche, Autobús, Metro', 'Turismo', 'Cultura', '29');

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
