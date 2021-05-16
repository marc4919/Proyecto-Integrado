-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 18:30:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10


CREATE DATABASE planme;
USE planme;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 1, 'FunJump por la tarde', 'El FunJump situado en Alfafar, es el más grande de España con más de 2500 m2 con diferentes zonas donde pasarlo en grande saltando, haciendo piruetas y otras actividades', 'Carrer del Camí Fus, Massanassa', 'Cualquiera', 'Ocio', 'Deporte', 8),
(2, 1, 'Sesión de belleza', 'Relájate , y libérate con tu pareja, o solitario con un masaje', ' Carrer de Cadis, València', 'Cualquiera', 'Ocio', 'Belleza y Salud', 25),
(3, 1, 'Autocine Nocturno', 'El AutoCine el Saler cuenta con amplios servicios para ver una película al aire libre, podrás disfrutar de dos películas en cada sesión', 'Carrera del Riu, Valencia', 'Coche', 'Ocio', 'Cine', 9),
(4, 1, 'Cine y Cena', 'Disfruta de una película juntos a tus amigos o tu pareja y finalizar la noche de la mejor manera, cenando en uno selectos locales que podemos encontrar junto a las salas de Cine ABC', 'Carrer de Roger de Llòria', 'Coche, Autobús, Metro', 'Cena', 'Cine', 24),
(5, 1, 'Pádel Mañanero + Pala', 'Disfruta con tus amigos de un partido intenso en una de las mejores instalaciones de pádel de los alrededores', 'Av. dels Tarongers, Paiporta', 'Coche', 'Ocio', 'Deporte Aire Libre', 10),
(6, 1, 'Merienda en la Playa', 'Pase junto a tu pareja, o junto a tus amigos en un atardecer único e inigualable por la playa, disfrutando de un tentempié junto a la mejor compañía, y las mejores visas', 'Playa el Saler', 'Coche, Autobús', 'Naturaleza', 'Aire Libre', 5),
(7, 1, 'Paseo por la Montaña', 'Disfruta junto a tu familia de la naturaleza y sentir la paz de estar rodeados de árboles y el sonido de los pájaros', '', 'Coche', 'Naturaleza', 'Aire Libre', 0),
(8, 1, 'Masaje', 'Relájate tras un duro día de trabajo, de la mejor manera, este masaje no te dejara indiferente, saldrás como nuevo y con una nueva actitud', 'C/ Santa Mª Micaela, 11, bajo', 'Coche, Autobús, Metro', 'Ocio', 'Masaje', 40),
(9, 1, 'Escape Room Para 2', 'Disfruta de una experiencia inmersiva junto a tus amigos, cooperar juntos para llegar al objetivo, SALIR DE LA HABITACIÓN', 'Calle Maestro Sosa 27, Valencia', 'Coche, Autobús, Metro', 'Ocio', 'Misterio', 20),
(10, 1, 'Tirolina', 'Siente la adrenalina de tirarte en tirolina, rodeado de vegetación y naturaleza', 'Carrer Artur Ballester, 46015 Valencia', 'Coche', 'Ocio', 'Aire Libre', 10),
(11, 1, 'Cata Vino', 'Sorpréndete con sabores únicos, cata algunos de los vinos mas especiales de las bodegas, con sabores y olores únicos', 'Carrer de la Murta, 2, 46020 València', 'Coche', 'Degustación', 'Vinos', 15),
(12, 1, 'Cata Vino + Cena', 'Disfruta de sabores únicos e intensos junto a profesionales en la materia, y finaliza esta experiencia de la mejor manera, una cena que no te defraudara acompañada de uno de los mejores vinos de la bo', 'Carrer de la Murta, 2, 46020 València', 'Coche', 'Degustación', 'Vinos', 40),
(13, 1, 'Paseo en Bici por la Ciudad', 'Recorre las zonas más emblemáticas y más conocidas de Valencia, en un medio agradecido con el medio ambiente', 'Calle de Donoso Cortés, 12,Valencia', 'Coche, Autobús, Metro', 'Turismo', 'Ciclismo', 25),
(14, 1, 'Cine en sala VIP Bonaire', 'Estos cines cuentas con un servicio VIP que no te dejara indiferente, cuando pruebes sus butacas acolchadas, desearas volver una y otra vez. Disfruta de una amplia experiencia cinematográfica, en las ', 'A-3, Km 345, 46960 Aldaia', 'Coche, Autobús', 'Ocio', 'Cine', 11),
(15, 1, 'Visita Bioparc', 'Bioparc Valencia es un parque zoológico español situado en la costa mediterránea, en el que podrás disfrutar de una gran variedad de animales en su hábitat natural', 'Av. Pío Baroja, 3, 46015 València', 'Coche, Autobús, Metro', 'Diversión en Familia', 'Animales', 23),
(16, 1, 'Paseo Barca Albufera', 'Viaje en Barca por uno de los Parajes Naturales mas bonitos y emblemáticos que nos podemos encontrar en la Comunidad Valenciana', 'CV-500, Km 9, 5, 46012 València', 'Coche, Autobús', 'Paisaje', 'Naturaleza', 4),
(17, 1, 'Visita al Oceanográfic', 'Recorre el túnel submarino más largo de Europa, pasea bajo los dientes afilados de los tiburones o conoce a la única familia de belugas de Europa, sumérgete  y déjate sorprender con los ecosistemas ma', 'Carrer Eduardo Primo Yúfera, València', 'Coche, Autobús, Metro', 'Diversión en Familia', 'Animales', 31),
(18, 1, 'Paseo Por la ciudad de las Art', 'Disfruta de un paseo por la ciudad de las artes y las ciencias donde  se puede admirar por fuera (su arquitectura, la armonía del conjunto, la singularidad de cada edificio).Podrás realizar un picnic ', 'Av. del Profesor López Piñero, València', 'Coche, Autobús, Metro', 'Turismo', 'Arquitectura', 0),
(19, 1, 'Picnic Parque Cabecera', 'Disfruta de un Picnic sentado en el césped del parque de Cabecera y después puedes disfrutar de un fantástico paseo en barca por el lago', 'Coche, Autobús, Metro', 'Av. Pío Baroja, València', 'Paisaje', 'Naturaleza', 10),
(20, 1, 'Moto de Agua', 'Seguro que necesitas descargar tensión y has pensado alguna vez en hacerte un masaje relajante, pues olvídate de masajes porque cuando pruebes esta experiencia querrás repetir una y otra vez', 'Poblado Nautico\r\nCarrer Marina Real Juan Carlos I 46011 Valencia, España', 'Coche, Autobús, Metro', 'Adrenalina', 'Actividad Marítima', 95),
(21, 1, 'Paintball Torrente', 'Vive una experiencia de guerra total y siéntete un soldado', 'Camí, Carrer del Mas del Jutge, Torrent', 'Coche, Autobús', 'Adrenalina', 'Simulación', 15),
(22, 1, 'Ruta Garbi', 'Se trata de una ruta muy bonita y divertida, aunque con cierta dificultad', 'Naquera', 'Coche', 'Naturaleza', 'Aire Libre', 0),
(23, 1, 'Museo Nacional de Cerámica y ', 'El Museo Nacional de Cerámica y Artes Suntuarias González Martí está ubicado en el palacio del Marqués de Dos Aguas', 'Carrer del Poeta Querol, Valencia', 'Coche', 'Turismo', 'Escultura', 3),
(24, 1, 'Museo de las Ciencias', 'Descubre las EXPOSICIONES INTERACTIVAS Y ANIMACIONES CIENTÍFICAS PARA CONOCER LAS NUEVAS TECNOLOGÍAS Y LOS AVANCES DE LA CIENCIA', 'Av. del Profesor López Piñero, Valencia', 'Coche, Autobús, Metro', 'Turismo', 'Cultura', 29),
(25, 1, 'Pastoret', 'Un buen restaurante, donde si tienes hambre no te quedaras indiferente con sus raciones, y sus tamaños de los bocadillo', 'Carrer Pi del Salt, 10, 46119 Nàquera, Valencia', 'Cualquiera', 'Comida', 'Almuerzo', 12),
(26, 1, 'La Pascuala', 'La mejor oportunidad para probar unos bocadillos buenos y de gran tamaño, sus abundantes raciones harán que te quedes lleno', 'Carrer del Dr. Lluch, 299, bajo, 46011 Valencia, Valencia', 'Cualquiera', 'Comida', 'Almuerzo', 7),
(27, 1, 'Dominos Pizza', 'La opción económica para llenarte, su buffet con variedad de pizza te permitirá elegir entre una gran variedad de pizzas', 'Valencia ', 'Cualquiera', 'Comida', 'Comer', 8),
(28, 1, 'Hundred Burger', 'Hamburguesas de gran tamaño que te dejaran lleno, si eres un amante del queso fundido, te lo recomendamos', 'Carrer de Misser Mascó, 22, Bajo derecha, 46010 Valencia', 'Cualquiera', 'Comida', 'Comer', 15),
(29, 1, 'Rrevel', 'Gran lugar para comer un buen bocadillo', '16 Calle Arzobispo Mayoral', 'Cualquiera', 'Comida', 'Comer', 10),
(30, 1, 'La Pérgola', 'Bar situado en un parque, perfecto para comer mientras que vigilas a tus hijos', 'Passeig de Albereda, Valencia', 'Cualquiera', 'Comida', 'Almuerzo', 8),
(31, 1, 'Muerde la Pasta', 'Buffet de pasta con una amplia opciones de comida', 'Carrer de Ribera, 16, 46002 Valencia, Valencia', 'Cualquiera', 'Comida', 'Comer', 12),
(32, 1, 'Beata Inés', ' Horno con un amplio recorrido, conocido por sus pizzas gigantes y por sus cruasanes , la beata es una gran opción si estas dulzón', 'Avinguda Nazaret-Oliva, 3, 46419 Mareny de Sant Llorenç, Valencia', 'Cualquiera', 'Comida', 'Comer', 6),
(33, 1, 'The Orange club', ' Un parque de barras para entrenar con tus amigos', 'Carrer de Misser Mascó, 21, 46010 Valencia', 'Cualquiera', 'Comida', 'Cena', 20),
(34, 1, 'La Cigrona', ' La Cigrona Restaurant es una opción ideal para su comida o cena de trabajo, familiar, con amigos o cualquier celebración', 'Carrer dels Serrans, 22, 46003 València, Valencia', 'Cualquiera', 'Comida', 'Cena', 30),
(35, 1, 'Casa Carmela', ' En Casa Carmela llevamos casi cien años haciendo posible esa liturgia donde el fuego tiene un papel esencial y en el que la tradición, la calidad y la proximidad de la materia prima hacen el resto', 'Carrer Isabel de Villena, Valencia', 'Cualquiera', 'Comida', 'Cena', 20),
(36, 1, 'El bobo', ' Especialidad en paellas, arroces y platos de pescado y marisco. Su terraza con vistas privilegiadas da a la playa y es perfecta para degustar lo mejor de la cocina valenciana junto al mar', 'Paseo Marítimo, Valencia', 'Cualquiera', 'Comida', 'Comer', 18),
(37, 1, 'Elite Gaming', ' Salón de videojuegos, júntate con tus amigos y jugar juntos desde un mismo lugar, crecer juntos como un team', 'Carrer Emili Panach i Ramos', 'Cualquiera', 'Entretenimiento', 'Juegos', 8),
(38, 1, 'Pc Locura', ' Centro de videojuegos, con equipo propio de e-sports, juega para mostrar tus habilidades', 'Carrer de Rascanya, Valencia\", Local 8, 46020', 'Cualquiera', 'Entretenimiento', 'Juegos', 10),
(39, 1, 'Ramboot', ' Centro de videojuegos, con equipo propio de e-sports, juega para mostrar tus habilidades', 'Plaça de Horticultor Corset, Valencia,\", Local 8, 46020', 'Cualquiera', 'Entretenimiento', 'Juegos', 7),
(40, 1, 'Cala Moraig', ' Entre Moraira y Jávea encontramos una recóndita cala turquesa flanqueada por acantilados… para la que es necesaria reserva previa.', 'Alicante/Moraira', 'Cualquiera', 'Naturaleza', 'Calas', 0),
(41, 1, 'Cala Granadella', ' Un precioso paraíso de tonos turquesa y esmeralda. Una bahía encajonada entre acantilados de aguas tranquilas y de una increíble transparencia', '03738,Alicante', 'Cualquiera', 'Naturaleza', 'Calas', 0),
(42, 1, 'Cala Foradada', ' Situada en la zona turística norte, esta cala está rodeada por una zona residencial. Destaca por la forma de sus acantilados, de ahí su nombre. Es ideal para el submarinismo y un baño relajado.', 'C. Costa Mar, 293-299, 12500 Vinaròs, Castelló', 'Cualquiera', 'Naturaleza', 'Calas', 0),
(43, 1, 'Cala Blanca', ' Compuesta por dos calitas contiguas, conectadas por litoral de piedra. Su nombre deriva del color blanquecino de las rocas de sus acantilados', 'Camí de la Caleta, 03738 Xàbia, Alicante', 'Cualquiera', 'Naturaleza', 'Calas', 0),
(44, 1, 'Cala Fonda', ' Cala Fonda es conocida popularmente como Waikiki en honor a las mejores playas de Hawai.  Estamos hablando de una de las mejores playas del sur de Cataluña que es todo un “must” que debes visitar si ', 'Plaça Talades Pp 26, 19, 03570 La Vila Joiosa, Alicante', 'Cualquiera', 'Naturaleza', 'Calas', 0),
(45, 1, 'Cala Purtixol', ' Cala rústica de grava, bolos y roca situada entre el Cap Prim y el Cap Negre. Cala que se ha dado a conocer gracias a Instagram', 'Javea', 'Cualquiera', 'Naturaleza', 'Calas', 0),
(46, 1, 'Parque de Barras Piccolo', ' Si eres una persona alta y te gusta el deporte de las barras o la calistenia, te recomendamos este parque de barras por su altura', 'Carrer de Arquitecte Ribes, València', 'Cualquiera', 'Deporte', 'Aire Libre', 0),
(47, 1, 'Paraque street work out', ' Parque de barras, con gran abundancia de gente, parte de ellos experimentados que te podrán ayudar a progresar', '46920 Mislata, Valencia', 'Cualquiera', 'Deporte', 'Aire Libre', 0),
(48, 1, 'SON GOTEN ', ' Parque de barras con su propio lugar cerrado, tiene una gran posibilidad de usos, gracias a su variedad de barras', ' Carrer del Baró de Barxeta, Valencia', 'Cualquiera', 'Deporte', 'Aire Libre', 0),
(49, 1, 'Parque de Calistenia GOKU', ' Amplio parque de barras, con gente muy amable, y siempre dispuesta para ayudar', 'Carrer de Enginyer Fausto Elio, Valencia', 'Cualquiera', 'Deporte', 'Aire Libre', 0),
(50, 1, 'Running', ' Lugar perfecto para salir a hacer Running sus 7 kilómetros se te harán amenos, gracias a su ambiente de gente corriendo y haciendo deporte', 'Rio Valencia', 'Cualquiera', 'Deporte', 'Aire Libre', 0),
(51, 1, 'Ruta en bicicleta ', ' El rio Turia cuenta con un carril bici que es perfecto si te apetece dar un paseo, puedes aprovechar y hacer un picnic en algunos de sus amplios lugares de césped', 'Rio Turia / Saler', 'Cualquiera', 'Deporte', 'Aire Libre', 0),
(52, 1, 'Aquarama', ' Disfruta de nuestros toboganes de agua, la piscina de olas, zona infantil y… ¡nuestro famoso gofre!', ' Benicàssim, Castellón', 'Cualquiera', 'Ocio', 'Parque Atcuaticos', 24),
(53, 1, 'Aqualandia/Cullera', ' Si lo que te apetece es, refrescarte y pasártelo bien a la vez, tienes que venir a Aqualandia Cullera', 'Antigua Carretera Nazaret-Oliva, Valencia', 'Cualquiera', 'Ocio', 'Parque Atcuaticos', 17),
(54, 1, 'Aqualandia/Benidorm', ' Un hermoso entorno natural, con grandes atracciones acuáticas para todas las edades y gustos, jardines con vegetación típica de la zona y toda una serie de servicios adicionales te esperan.', '03503 Benidorm, Alicante', 'Cualquiera', 'Ocio', 'Parque Atcuaticos', 17),
(55, 1, 'Terramitica', ' Descubre las antiguas civilizaciones del Mediterráneo en Terra Mítica, Benidorm, el parque temático y de atracciones que te hará viajar directamente a la historia de Grecia, Egipto y Roma. Terra Míti', ' Benidorm, Alicante', 'Cualquiera', 'Ocio', 'Parque Atracciones', 40),
(56, 1, 'Feria Valencia', ' Feria Muestrario Internacional de Valencia o, como marca comercial, Feria Valencia es la institución organizadora de certámenes feriales más antigua', 'Valencia', 'Cualquiera', 'Ocio', 'Feria', 0),
(57, 1, 'Castillo Murallas Cullera', ' El Castillo de Cullera es un conjunto de arquitectura militar musulmana que se encuentra en la una zona montañosa de la localidad de Cullera', 'Pujada Castell, s/n, 46400 Cullera, Valencia', 'Cualquiera', 'Turismo', 'Mirador', 3),
(58, 1, 'Subida al peñón de ifach', ' El Parque Natural del Penyal d’Ifac es una joya ambiental que alberga varios endemismos de flora (especies únicas en el mundo), a la vez que constituye un importante refugio para las aves.', 'Carr. del Peñon, 03710 Calp, Alicante', 'Cualquiera', 'Ruta', 'Turismo', 0),
(59, 1, 'Ruta de Olocau en la Sierra Ca', ' Desde el Neolítico han quedado numerosos res- tos en forma de yacimientos que han dejado una huella de gran riqueza arqueológica.', 'Olocau, 46169, Valencia', 'Cualquiera', 'Ruta', 'Turismo', 0),
(60, 1, 'Ruta de los Puentes Colgantes ', ' Una de las rutas más bonitas que puedes hacer en el interior de la provincia de Valencia, es la que discurre por las Hoces del Río Turia. Un cañón excavado por el agua durante miles de años que nos h', '46160 Chulilla, Valencia', 'Cualquiera', 'Ruta', 'Turismo', 0),
(61, 1, 'Ruta del Agua de Chelva', ' Una gran ruta donde podremos encontrarnos por el camino, algunas de las antiguas ruinas arqueológicas , donde podremos encontrar una mezcla de cultura histórica y naturaleza', ' laza Mayor,  Chelva, Valencia', 'Cualquiera', 'Ruta', 'Turismo', 0),
(62, 1, 'Castillo Xativa', ' Doble fortaleza situada en la sierra del Castell, sobre Xàtiva, por la situación estratégica de la ciudad ha sido escenario y testimonio de numerosos conflictos. Dividido en el Castell Menor y el Cas', 'Subida al Castillo, Xàtiva, Valencia', 'Cualquiera', 'Turismo', 'MIrador', 6),
(63, 1, 'Cine Yelmo', 'Una experiencia de cine asegurada, puedes ver tus películas favoritas en los sillones VIP como en la comodidad de tu casa o en las salas estándar', 'Mercado de, Av. de Tirso de Molina, 16, 46015 Valencia', 'Cualquiera', 'Ocio', 'Cine', 6),
(64, 1, 'ABC Gran Turia ', 'Cine situado en el recinto del Prica, una gran opción si lo que deseas es comer algo tras ver una película', 'Plaza Europa, Xirivella, Valencia', 'Cualquiera', 'Ocio', 'Cine', 6),
(65, 1, 'Cine Aqua', 'Etos cines esta situado en uno de los centros comerciales más céntricos de la comunidad valenciana, lo podemos encontrar junto a la ciudad de las artes y las ciencias', 'Carrer de Menorca, 19, 46023 Valencia, Valencia', 'Cualquiera', 'Ocio', 'Cine', 9),
(66, 1, 'Kinepolis', 'Estos cines situados en el Centro de Ocio Herón City', 'Avinguda de Francisco Tomàs I Valiente, s/n, 46980, Valencia', 'Cualquiera', 'Ocio', 'Cine', 7),
(67, 1, 'Piscina Quart de poblet ', 'Quart de Poblet reabre sus instalaciones de piscina cubierta, balneario y salas de cardio y musculación.', 'Quart de poblet', 'Cualquiera', 'Ocio', 'Piscina', 1),
(68, 1, 'Piscina Municipal Mislata', 'Piscina municipal de Mislata, en la que te podrás dar baños nocturnos', 'Mislata', 'Cualquiera', 'Ocio', 'Piscina', 2),
(69, 1, 'Piscina Abastos  ', 'Centro deportivo que cuenta con dos piscinas cubiertas', 'Carrer Alberic, 18, 46008 Valencia', 'Cualquiera', 'Ocio', 'Piscina', 3),
(70, 1, 'Piscina Municipal Ayora ', 'Descubre qué te ofrece la Piscina Municipal Ayora. Disponemos de un amplio complejo deportivo con las más completas instalaciones y servicios.', 'Carrer de Jeroni de Montsoriu, Valencia', 'Cualquiera', 'Ocio', 'Piscina', 1),
(71, 1, 'Quest Laser Café', 'Disfruta de un fantástico café, mientras que tus hijos echan unas partidas', 'Av. Pío Baroja ,Valencia', 'Cualquiera', 'Comida', 'Café', 11),
(72, 1, 'Laser Game Herón City', 'Disfruta de las fantásticas instalaciones con las que cuenta, podrás echar unas partidas con tus amigos llenas de adrenalina, siéntete como un guerrero', ' Carrer Accés Pista Ademús, Paterna, Valencia', 'Cualquiera', 'Ocio', 'Infantil', 5),
(73, 1, 'ALFAZONE Laser Game', 'Si lo que buscas es pasártelo bien, te recomendamos que pruebes esta experiencia', ' Carrer Castelló, Valencia', 'Cualquiera', 'Ocio', 'Infantil', 7),
(74, 1, 'Colonial Buffet', 'Si tienes hambre, te recomendamos este buffet, podrás comer hasta saciar tu hambre', 'Carrer Pont Trencat, 7 - CC. Parque Albán, Burjassot', 'Cualquiera', 'Comida', 'Buffet', 14),
(75, 1, 'Restaurante Aoyama', 'Somos un restaurante japonés en valencia, Ofrecemos no sólo sushi, maki, sashimi y los platos más conocidos de los restaurantes japoneses, sino que también tenemos comida japonesa casera', ' Carrer de Joaquín Costa, Valencia', 'Cualquiera', 'Shushi', 'Buffet', 15),
(76, 1, 'Asador Wok Buffet Libre', 'La mejor carne en grandes cantidades, come carne hasta llenar tu estomago', ' Av. de Pius XII, Valencia', 'Cualquiera', 'Comida', 'Carne', 10),
(77, 1, 'Restaurante Japonés Sakura', 'El restaurante Sakura es el decano de los restaurantes japoneses en Valencia, con una larga experiencia en la preparación de comida japonesa.', 'Av. de Pius XII, Valencia', 'Cualquiera', 'Comida', 'Shushi', 11),
(78, 1, 'Restaurante el Quitin', ' En Restaurante Quitín nos especializamos en arroces por encargo, pizzas y carnes a la brasa', 'Carrer de Espartero, 63, 46100 Burjassot, Valencia', 'Cualquiera', 'Comida', 'Cena', 14),
(79, 1, 'Saona', ' Saona no trabaja con Quinta Gama, tiene una cocina central que reparte a los restaurantes', 'Carrer de Martínez Cubells, Valencia', 'Cualquiera', 'Comida', 'Cena', 18),
(80, 1, 'Maratón de Series', ' Siempre tienes alguna saga de películas que quieres ver, pues es la hora de comenzar, te recomendamos algunas como : Juego de Tronos, Sherlock, Peaky Blinders, Dark, The Mandalorian', ' En casa', 'Cualquiera', 'Entretenimiento', 'Cine', 0),
(81, 1, 'Maratón de Películas\r\n', ' Todos tenemos películas pendientes en nuestra lista, así que es el momento de comenzar con esa saga, a la que le tienes tantas ganas, te recomendamos algunas como : El Padrino, Star Wars, Regreso al ', ' En casa', 'Cualquiera', 'Entretenimiento', 'Cine', 0),
(82, 1, 'La Pollería', ' Te apetece probar una experiencia única e irrepetible, comerte una po***', 'Carrer dels Cavallers 3, 46001 València', 'Cualquiera', 'Comida', 'Merienda', 4),
(83, 1, 'Bolera Heron City', ' Si te apetece echar unas partidas de bolos, este es tu lugar, a demás cuentan con unas maquinas recreativas en su piso superior', ' Herón City Paterna', 'Cualquiera', 'Ocio', 'Bolera', 9),
(84, 1, 'Felisano', 'Si no lo has probado, debes de hacerlo, el pan baozi es una bolita de pan rellena de carne', 'Carrer de Pelai, València', 'Cualquiera', 'Comida', 'Merienda', 0),
(85, 1, 'Hundred - MEJOR HABURGUESA ', 'Una genial hamburguesería, condecorada como la mejor hamburguesa del 2018, debes de ir a probar su fantástica comida', 'Carrer de Misser Mascó, Valencia', 'Cualquiera', 'Comida', 'Comida', 10),
(86, 1, 'Tienda de Cómics Futurama', 'El paraíso para amantes del Cómic, donde puedes encontrar cómics europeos, USA y manga', 'C/ de Guillem de Castro, Valencia', 'Cualquiera', 'Lectura', 'Entretenimiento', 4),
(87, 1, 'Sesión de Fotos', 'A quien no le gusta verse en fotos, puedes aprovechar e ir de sesión de fotos y buscar spots para hacer fotos chulísimas', 'Cualquier lugar es bueno, para hacer unas buenas fotos, pero te recomendamos algunos lugares : Parqu', 'Fotografia', 'Belleza', 'Entretenimiento', 0),
(88, 1, 'Teatro', 'Por qué no, hay obras de teatro que te dejara boquiabierto', 'Hay muchos teatros, con fantásticas obras de teatro, algunos teatros son : Teatro Olympia, Teatro Ta', 'Cualquiera', 'Ocio', 'Teatro', 15),
(89, 1, 'Las pequeña Venecia', 'Es una urbanización alrededor de un pequeño puerto deportivo. Situada en la localidad de Alboraya, a pocos kilometros de Valencia siguiendo la Playa de la Malvarrosa en dirección norte', 'Port Saplaya – Alboraya', 'Cualquiera', 'Turismo', 'Vistas', 0),
(90, 1, 'Akuarela', 'Si quieres salir a tomar algo por la noche, puedes acercarte a Akuarela Playa, podrás entrar gratis antes de la 01:00', 'Carrer Eugènia Viñes,  Valencia', 'Cualquiera', 'Ocio', 'Fiesta', 10),
(91, 1, 'mya', 'Mya es el club de L'Umbracle, con tres diferentes espacios para una experiencia completa: Main Room (house + hits), The Lobby (fiesta) y Mya Beats (urban music)', 'Av. del Professor López Piñero, Valencia', 'Cualquiera', 'Ocio', 'Fiesta', 10),
(92, 1, 'Oasis shihas Valencia', 'Lugar idoneo para tomar algo con tus amigos y estar de chill en una noche de veranito', 'Carrer de Juan Molina, 21, 46950 Xirivella, Valencia', 'Cualquiera', 'Ocio', 'Chill', 15),
(93, 1, 'Spit chupitos', 'Más de 600 chupitos originales y 180 Jarras y Cocteleras', ' Carrer del Dr. Chiarri, Valencia', 'Cualquiera', 'Ocio', 'Fiesta', 3),
(94, 1, 'Flow shisha club', 'Ambiente y musica chill, idoneo para ir de relax', 'Carrer d'Emili Gascó Contell, Valencia', 'Cualquiera', 'Ocio', 'Chill', 15),
(95, 1, 'Most food', 'Se destaca por su tubo de bebida de cerveza', 'Carrer de Gascó Oliag, Valencia,', 'Cualquiera', 'Comida', 'Merienda', 6),
(96, 1, 'High cube', 'Un nlugar ideal para venir de fiesta y pasartelo espectacular, salta, baila y rie', 'Marina Real Juan Carlos I, Valencia', 'Cualquiera', 'Ocio', 'Fiesta', 10),
(97, 1, 'Camarote roof', 'THE ROOF es un espacio creado para ofrecer a los valencianos y a los miles de turistas que aman nuestra ciudad, un lugar donde poder desconectar del estrés diario junto a amigos y familiares con la mejor música en directo. La terraza a 5 minutos de la ciudad que permite acompañar unos cócteles con la suave brisa marina', 'Marina Juan Carlos I. Explanada Veles e Vents, Valencia', 'Cualquiera', 'Ocio', 'Comida', 20),
(98, 1, 'Cream', 'Situado en el antiguo Magnum , TBClub y Pacha Valencia, Cream aporta un nuevo y fresco concepto de buena música hip hop de DJ's y artistas', ' C. de Sant Vicent Màrtir, Valencia', 'Cualquiera', 'Ocio', 'Fiesta', ),
(99, 1, 'White House', 'Un lugar ideal para tomar algo y estar en el mejor ambiente de todo valencia', 'Calle de Eolo, Valencia', 'Cualquiera', 'Ocio', 'Pub', 15),
(100, 1, 'Destino 56', 'Destino 56 es un nuevo concepto multi-espacio, en el que podrás disfrutar de un completo desayuno, una comida entre amigos, una cena o un delicioso ...', 'Passeig de Neptú, Valencia', 'Cualquiera', 'Ocio', 'Chill', 20);

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
  MODIFY `ID_PLAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

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
