-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-12-2020 a las 20:01:33
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `M07`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LIST_CUSTOMER`
--

CREATE TABLE `LIST_CUSTOMER` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `PASSWORD` int(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `AGE` int(11) NOT NULL,
  `BIRTH_DATE` date NOT NULL,
  `ADDRESS` text NOT NULL,
  `ZIP_CODE` int(11) NOT NULL,
  `PROVINCE` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `LIST_CUSTOMER`
--

INSERT INTO `LIST_CUSTOMER` (`ID`, `NAME`, `PASSWORD`, `EMAIL`, `AGE`, `BIRTH_DATE`, `ADDRESS`, `ZIP_CODE`, `PROVINCE`, `GENDER`) VALUES
(1, 'CRISTINA', 123, 'cristina@gm.com', 37, '1983-11-06', 'C/ Sants, 123', 8014, 'Barcelona', 'F'),
(2, 'JHEN JIAN', 234, 'jhen@gm.com', 38, '1982-05-08', 'C/ Meridiana 6', 8014, 'Barcelona', 'M'),
(3, 'VIORICA', 345, 'viorica@gm.com', 72, '1948-03-25', 'Les Corts 314', 8004, 'Barcelona', 'F'),
(4, 'MICHELLE', 321, 'michelle@gm.com', 11, '2009-06-13', 'Sants, 33', 8014, 'Barcelona', 'F'),
(5, 'TARA', 543, 'tara@gmfff.com', 50, '1970-08-02', 'C/Jocs Florals, 34', 8008, 'Barcelona', 'F'),
(6, 'NAE ST.', 987, 'nae@fms.com', 62, '1958-10-17', 'C/Dacia, 1, 20 C', 8002, 'Barcelona', 'M'),
(7, 'CONRAD', 765, 'conrad@dhm.com', 50, '1970-12-26', 'Les Corts,2', 8014, 'Barcelona', 'M'),
(8, 'Mary', 999, 'mary@dmdm.com', 20, '2000-11-13', 'Bosc 22', 8002, 'Barcelona', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LIST_NEWS`
--

CREATE TABLE `LIST_NEWS` (
  `ID` int(10) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `CONTENT` varchar(300) NOT NULL,
  `AUTHOR` varchar(100) NOT NULL,
  `DATE` date NOT NULL,
  `LIKES` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `LIST_NEWS`
--

INSERT INTO `LIST_NEWS` (`ID`, `TITLE`, `CONTENT`, `AUTHOR`, `DATE`, `LIKES`) VALUES
(1, 'Gobiernos empaticos y ciudadanos responsables frenan el virus. Los paises que', 'El virus se ha podido frenar allí donde las autoridades han reaccionado más rápido, con un despliegue masivo de medios sanitarios y una excelente campaña de comunicación. Para ello han contado con un amplio consenso político y, asimismo, con la confianza de una población muy responsable, que ha acep', 'Carlo Allegri_ Reuters', '2020-12-09', 50),
(2, 'Everest crece hasta los 8.848,86 metros', 'Tras años de divergencias, China y Nepal han anunciado hoy la nueva altitud de la montaña más alta del mundo, el Everest, que según las últimas mediciones realizadas entre los meses de mayo del 2019 y del 2020 por equipos de ambos países se eleva hasta los 8.848, 86 metros; por tanto, 86 centímetros', 'Rosa M. Bosch', '2020-12-11', 20),
(3, 'Testimonio de un superviviente de covid, lleva 4 meses en rehabilitacion', 'Jordi Valldaura, informático, 41 años, casi 2 metros de altura, es uno de los 318.000 catalanes que se han infectado de Covid. Y uno de los casi 5.166 que han pasado una larga temporada en la uci (80 días en su caso). Y uno de los miles que siguen haciendo rehabilitación (respiratoria, muscular, neu', 'Ana Maria Macpherson', '2020-12-05', 30),
(4, 'La sorprendente relacion entre el deshielo Artico y las tormentas de arena del Sahara', 'Aunque el desierto del Sahara y el Ártico estén tan alejados, en realidad están más interconectados de lo que nos podríamos llegar a imaginar. Lo que pasa en un sitio puede tener consecuencias en el otro y también en cualquier parte del mundo.\r\n\r\nAsí lo han determinado un grupo de científicos lidera', 'Neus Palou', '2020-12-04', 15),
(5, 'Europa y la recuperacion verde. Que paises combaten mas la crisis climatica? ', 'Suecia, Reino Unido y Dinamarca, seguidos por Marruecos, Noruega y Chile son los países que más están contribuyendo a combatir el calentamiento del planeta. Son datos de un índice que, con datos del 2018, analiza y compara el grado de compromiso con la protección del clima de 57 países (más la UE en', 'Antonio M. Cerrillo', '2020-12-10', 27),
(6, 'Emergencia Sanitara: El Reino Unido comienza hoy a vacunar contra la Covid-19', 'Colocarse la medalla de ser el primer país (después de Rusia) en poner la inyección para inmunizar contra la Covid-19, y decir que ello es gracias al Brexit, conlleva un notable riesgo y responsabilidad. Los ojos del mundo están en el Reino Unido, que ha bautizado el día de hoy como el “V Day”. “V” ', 'Rafael Ramos', '2020-12-08', 35),
(7, 'Nuevos estudios confirman la seguridad y eficacia de las vacunas', 'Buenas noticias para dos de las principales vacunas que podrían suponer el principio del fin de la crisis del coronavirus. Las personas a las que se ha inoculado la inyección de la Universidad de Oxford y la compañía AstraZeneca no han tenido problemas de salud en los meses siguientes que los volunt', '\r\nJosep Corbella-Francesc Peiron', '2020-12-04', 55),
(8, 'Una gran sanidad publica protege a Uruguay de la pandemia\r\n', 'Hace poco más de diez años, durante el primer mandato del presidente José Pepe Mújica, Uruguay puso en marcha un ambicioso plan de sanidad pública que hoy ha sido vital para frenar el coronavirus. Pocos países del mundo tienen un sistema de salud tan universal y pocos países latinoamericanos tienen ', 'Xavier Mas ', '2020-12-06', 45),
(9, 'Disney + anuncia un aluvion de grandes estrenos y una subida de cuota', 'Disney+ ha tirado la casa por la ventana y ha anunciado de golpe un aluvión de grandes estrenos con un objetivo claro: ser la plataforma de streaming por excelencia y así adelantar a Netflix o HBO. La compañía del ratón Mickey Mouse lanzará más de 50 estrenos próximamente, entre los que se encuentra', 'David Juarez', '2020-12-06', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `LIST_CUSTOMER`
--
ALTER TABLE `LIST_CUSTOMER`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `LIST_NEWS`
--
ALTER TABLE `LIST_NEWS`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
