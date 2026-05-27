-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2026 at 07:03 PM
-- Server version: 11.8.6-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u950265867_cecybot2026`
--

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `coach` varchar(100) NOT NULL,
  `integrante1` varchar(100) NOT NULL,
  `integrante2` varchar(100) DEFAULT NULL,
  `integrante3` varchar(100) DEFAULT NULL,
  `integrante4` varchar(100) DEFAULT NULL,
  `categoria` varchar(50) NOT NULL,
  `institucion` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `url_imagen` varchar(100) DEFAULT NULL,
  `url_comprobante` varchar(200) NOT NULL,
  `url_qr` varchar(200) DEFAULT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp(),
  `verificado` enum('SI','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`id`, `nombre_equipo`, `coach`, `integrante1`, `integrante2`, `integrante3`, `integrante4`, `categoria`, `institucion`, `email`, `tel`, `url_imagen`, `url_comprobante`, `url_qr`, `fecha_registro`, `verificado`) VALUES
(6, 'Teams guadayana ', 'Carina Olalde ', 'Maria Guadalupe Casas Colunga ', 'Dayana Lissette Puchote Rojas ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Plantel Comonfort 1', 'mariaguadalupecasascolunga@gmail.com', '461 143 0328', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Teams guadayana _20260326010534.jpg', 'uploads/qr/6.svg', '2026-03-26', 'NO'),
(7, 'SKLegends', 'Felix Fernando Ortega Rico', 'Diego Alvarez Parra', 'Maria de los Angeles Vargas Orduña ', 'Carmen Alejandra Sandoval Martinez ', 'Lesly María Centeno Rojas ', 'ROBOT SOCCER PROFESIONAL', 'CECYTEG Plantel Comonfort Plantel 1', 'alejandramartinez123567@gmail.com', '4121193394', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_SKLegends_20260326151330.pdf', 'uploads/qr/7.svg', '2026-03-26', 'NO'),
(8, 'JONELIN', 'Félix Fernando Ortega Rico ', 'Jonathan Oswaldo Guitarrero Ramírez ', 'Olalde García Evelin Guadalupe ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1', 'amelingarcia4@gmail.com', '+1 (945) 247-9892', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_JONELIN_20260326185947.jpg', 'uploads/qr/8.svg', '2026-03-26', 'NO'),
(9, 'NEY', 'Carina Olalde Lopez ', 'Vianey Carina Mesita Lopez ', 'Evelin Itzel Escobedo Rojas ', '', '', 'MINI SUMO RC', '', 'evelin.itzel.e.0259@gmail.com', '412 200 21 93 ', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_NEY_20260326210646.jpg', 'uploads/qr/9.svg', '2026-03-26', 'NO'),
(10, 'Tetsu Titans ', 'Félix Fernando Ortega Rico ', 'Jose Guadalupe Nieves López ', 'Karla Guadalupe Bustos Galván ', '', '', 'ROBOT SOCCER PROFESIONAL', 'CECYTEG Plantel Comonfort 1 ', 'bustoskarla40@gmail.com', '4121465121 ', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Tetsu Titans _20260327024449.pdf', 'uploads/qr/10.svg', '2026-03-27', 'NO'),
(11, 'Legacy ', 'Félix Fernando Ortega Rico', 'María Guadalupe Cid Gutiérrez ', 'Danna Nicole Casas Reyes ', 'Oscar Miranda Ramírez ', 'Jesús Samuel torres lopez ', 'ROBOT SOCCER PROFESIONAL', 'CECYTEG Plantel Comonfort 1', 'cidgutierrezmariaguadalupe35@gmail.com', '412 160 0699', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Legacy _20260327035223.pdf', 'uploads/qr/11.svg', '2026-03-27', 'NO'),
(12, 'The starts', 'Félix Fernando Ortega Rico ', 'Sujeiry Marleth Olalde Inclán ', 'Jennifer Tapia Cid ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1', 'jcid85986@gmail.com', '4121173678', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_The starts_20260327120837.jpg', 'uploads/qr/12.svg', '2026-03-27', 'NO'),
(13, 'Vibes Girls', 'Carina Olalde López ', 'Martha Teresa Estrada Munguia ', 'Nahomi Esmeralda Santiago Sánchez ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort I', 'bolosestrada10@gmail.com', '4121273988', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Vibes Girls_20260327172251.pdf', 'uploads/qr/13.svg', '2026-03-27', 'NO'),
(14, 'ASTROGIRLS ', 'Félix Fernando Ortega Rico', 'Lluvia Pilar Barcenas Don Juan ', 'Alexandra Ramirez Guerreras', 'Adriana Milagros Blancas Ramirez ', 'Chelse Hernández Pérez ', 'ROBOT SOCCER PROFESIONAL', 'CECYTEG Plantel Comonfort 1', 'lluviabarcenasdonjuan@gmail.com', '4121427536', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_ASTROGIRLS _20260327211337.pdf', 'uploads/qr/14.svg', '2026-03-27', 'NO'),
(15, 'Ciberbots', 'Félix Fernando Ortega Rico ', 'Héctor Leopoldo Sánchez Sánchez ', 'Ana Karen Cerón Flores ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Cecyteg Comonfort 1', 'anakarenceronflores@gmail.com', '4121429465', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Ciberbots_20260327230147.jpg', 'uploads/qr/15.svg', '2026-03-27', 'NO'),
(16, 'PRIME', 'Félix Fernando Ortega Rico ', 'Emmanuel Presa Godínez ', 'Liliana Ángeles Martinez ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Plantel Comonfort l ', 'emmanuelpresa87@gmail.com', '4121871490', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_PRIME_20260328011417.jpg', 'uploads/qr/16.svg', '2026-03-28', 'NO'),
(17, 'PROS', 'Carina Olalde Lopez', 'Jose Miguel Ramirez Juarez ', 'Brandon Israel Florencio Hernandez', '', '', 'SEGUIDOR DE LINEA EDUCATIVO', 'CECYTEG Plantel Plantel 1 comonfort', 'josmiguel.rj@gmail.com', '4121060263', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_PROS_20260328020048.jpg', 'uploads/qr/17.svg', '2026-03-28', 'NO'),
(18, 'Dubot', 'Carina Olalde Lopez ', 'Arina Merino', 'Dalila valle ', '', '', 'SEGUIDOR DE LINEA EDUCATIVO', 'CECYTEG Plantel Comonfort 1', '25411070020359@alumnos.cecyteg.edu.mx', '4612989906', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Dubot_20260328221438.jpg', 'uploads/qr/18.svg', '2026-03-28', 'NO'),
(19, 'CyberAura Bit', 'Carina Olalde López', 'Etni Abigail Espinosa Casas', 'Wendy Joana Laguna Lindero', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1', 'abaespinosa.libros@gmail.com', '4121000510', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_CyberAura Bit_20260404221854.png', 'uploads/qr/19.svg', '2026-04-04', 'NO'),
(20, 'ROBO DUPLA', 'Carina Olalde Lopez ', 'Néstor Andrés Soto Tovar ', 'Luz Sandra Robles Camacho ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1 ', 'sotonestor813@gmail.com', '4122601646', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_ROBO DUPLA_20260411022736.pdf', 'uploads/qr/20.svg', '2026-04-11', 'NO'),
(21, 'Valkirie Bots', 'Carina Olalde', 'Maria Cristina Emiliano Aboytes', 'Valeria Juarez Saucillo', 'Maria Guadalupe Mota Ramirez', 'Wenndy Cruz Arroyo', 'ROBOT SOCCER PROFESIONAL', 'CECYTEG Plantel Cecyte Comonfort 1             ', 'cristinaemilianoaboytes22@alumnos.cecyteg.edu.mx', '4121107206', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Valkirie Bots_20260414213335.pdf', 'uploads/qr/21.svg', '2026-04-14', 'NO'),
(22, 'El Chino', 'Felix Fernando Ortega Rico', 'Ximena Guadalupe Velazquez Montes', '', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort', 'xvelazquez1234@gmail.com', '4122003122', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_El Chino_20260415145745.pdf', 'uploads/qr/22.svg', '2026-04-15', 'NO'),
(23, 'Roswer', 'Evely Martinez Orduña', 'Rosa Maria Ramirez Padilla ', 'Fernanda Michelle Reyes Oro', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Plantel comonfort 1', '25411070020286@alumnos.cecyteg.edu.mx', '4121154588', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Roswer_20260417184545.jpg', 'uploads/qr/23.svg', '2026-04-17', 'NO'),
(24, 'Sofanya boots', 'Evelyn Martínez Orduña.', 'Guadalupe Sofía Aguilar Salas', 'Ana Stefanía Santana Jiménez ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Plantel Comonfort 1', '25411070020007@alumnos.cecyteg.edu.mx', '4121472382', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Sofanya boots_20260417191832.pdf', 'uploads/qr/24.svg', '2026-04-17', 'NO'),
(25, 'Anbi Bot', 'Evelyn Martínez Orduña', 'Bibiana Rico Ramirez', 'Juan Ángel Camacho González ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Plantel Comonfort 1', '25411070020047@alumnos.cecyteg.edu.mx', '4612917228', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Anbi Bot_20260417200323.pdf', 'uploads/qr/25.svg', '2026-04-17', 'NO'),
(26, 'Chetobot ', 'Evelin Martínez Orduña ', 'Britani Romero Ramírez ', 'Jocelyn Camila Roman Llanito ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Plantel Comonfort 1 ', 'rbritani028@gmail.com', '412 127 4113', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Chetobot _20260417210545.jpeg', 'uploads/qr/26.svg', '2026-04-17', 'NO'),
(27, 'Los gala-tikos ', 'Evelyn Martínez orduña ', 'Giovani de Jesús Galván Escobedo ', 'Marcos Josue bustos romero ', '', '', 'MINI SUMO RC', 'Cecyteg Guanajuato Comonfort l ', '25411070020094@alumnos.cecyteg.edu.mx', '412 100 76 08 ', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Los gala-tikos _20260417211445.jpg', 'uploads/qr/27.svg', '2026-04-17', 'NO'),
(28, 'Andromeda', 'Lic. Evelyn Martínez Orduña', 'Karen Guadalupe Velazquez Arzola ', 'Brenda Melissa Pérez Amador ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1', '25411070020367@alumnos.cecyteg.edu.mx', '412 201 5966', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Andromeda_20260417215626.jpeg', 'uploads/qr/28.svg', '2026-04-17', 'NO'),
(29, 'EmpujaMax', 'Félix Fernando Ortega Rico', 'Dulce María Ángel Puentes', 'Carlos Oswaldo Mexicano Olvera', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1', 'mexicanocarlos28@gmail.com', '4122019680', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_EmpujaMax_20260417220938.jpeg', 'uploads/qr/29.svg', '2026-04-17', 'NO'),
(30, 'Danando boots', 'Evelyn Martínez Orduña', 'Mario Fernando aboytes torres', 'Dana Camila segura Moya ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort1', '25411070020002@alumnos.cecyteg.edu.mx', '4121896592', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Danando boots_20260418005156.jpeg', 'uploads/qr/30.svg', '2026-04-18', 'NO'),
(31, 'Star Girls', 'Evelyn Martinez Orduña ', 'Heidi Cantera Estrada ', 'Ana Paula Ríos Olalde ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1 ', '25411070020049@alumnos.cecyteg.edu.mx', '412 122 0913', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Star Girls_20260418054501.pdf', 'uploads/qr/31.svg', '2026-04-18', 'NO'),
(32, 'CODE TITINS ', 'Carina Olalde Lopez', 'America Sherlyn Barbosa Santana', 'Brayan Tadeo Vazquez Yerbabuena', '', '', 'SEGUIDOR DE LINEA AMATEUR', 'CECYTEG Plantel Cecyteg plantel comonfort 1', 'com.abarbosas23@alumnos.cecyteg.edu.mx', '4121770964', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_CODE TITINS _20260419043030.pdf', 'uploads/qr/32.svg', '2026-04-19', 'NO'),
(33, 'Yosp', 'Felix fernando ortega rico', 'Nicole Jaqueline Hernandez Prado ', 'Yoselinee Estrella Mexicano Ramirez ', '', '', 'SEGUIDOR DE LINEA AMATEUR', 'CECYTEG Plantel Plantel comonfort 1', 'nicoleprado377@gmail.com', '412 160 3562 ', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Yosp_20260420214851.pdf', 'uploads/qr/33.svg', '2026-04-20', 'NO'),
(34, 'Robotlove', 'Evelyn Martínez Orduña ', 'Larisse ', 'Abigail ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort ', '25411070020336@alumnos.cecyteg.edu.mx', '4613523980', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Robotlove_20260420222453.jpg', 'uploads/qr/34.svg', '2026-04-20', 'NO'),
(35, 'Rebeldes ', 'Evelin Martínez Orduña ', 'Reyna Daniela García Ramírez ', 'Bruno Jesús López Romero ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1', '25411070020181@alumnos.cecyteg.edu.mx', '4121061683', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Rebeldes _20260420222733.jpeg', 'uploads/qr/35.svg', '2026-04-20', 'NO'),
(36, 'Robotines ', 'Evelin Martínez Orduña ', 'Angel Soria Plaza ', 'Luis Gerardo palma Pérez ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort 1 ', 'miguelsoriaa589@gmail.com', '412 262 4922', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Robotines _20260421205845.jpg', 'uploads/qr/36.svg', '2026-04-21', 'NO'),
(37, 'CHICAS INOVACION ', 'CARINA OLALDE LOPEZ ', 'AMAYRANI BARTOLO GARCIA ', 'CAMILA MORENO PEREZ ', '', '', 'SEGUIDOR DE LINEA AMATEUR', '', 'amayranibartologarciagmail.com', '4121099016', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_CHICAS INOVACION _20260421211219.jpeg', 'uploads/qr/37.svg', '2026-04-21', 'NO'),
(38, 'Las comadres ', 'Felix Fernando Ortega Rico ', 'Bibiana Músico Bárcenas ', 'Maria Ximena Mendoza Sánchez ', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Plantel Comonfort I', 'com.mmendozas23@alumnos.cecyteg.edu.mx', '4121239643', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Las comadres _20260422145823.jpg', 'uploads/qr/38.svg', '2026-04-22', 'NO'),
(39, 'Sofia-bot', 'Felix Fernando Ortega Rico', 'Andrea Guadalupe Olivares Vargas', '', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Comonfort I', 'com.aolivaresv23@alumnos.cecyteg.edu.mx', '1111111111', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Sofia-bot_20260423165035.jpeg', 'uploads/qr/39.svg', '2026-04-23', 'NO'),
(41, 'Grim Ending', 'Carina Olalde Lopez', 'Oscar Garcia Rodriguez ', 'Jorge Raul Olvera Ramirez', '', '', 'MINI SUMO RC', 'CECYTEG Plantel Cecyte Guanajuato plantel comonfort 1', 'oscargarcia777122@gmail.com', '4613534573', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Grim Ending_20260424044524.jpg', 'uploads/qr/41.svg', '2026-04-24', 'NO'),
(42, 'Astro robótica ', 'Beatriz Yañez Perez', 'Santiago Ariza García ', 'Alexia Guadalupe Tapia Ramírez', '', '', 'MINI SUMO RC', 'CECYTEG Plantel CECyTEG ', 'arizagarciasantiago@gmail.com', '421 262 4171', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_Astro robótica _20260429193321.pdf', 'uploads/qr/42.svg', '2026-04-29', 'NO'),
(43, 'SM Nyx', 'Carina Olaldel Lopez', 'Mendoza Martinez Melanie', 'Stephanie Guadalupe', '', '', 'SEGUIDOR DE LINEA AMATEUR', 'CECYTEG Plantel cecyteg 1', '3stephanies3@gmail.com', '4122623100', 'uploads/logos/logo_temporal.jpg', 'uploads/comprobantes/comprobante_SM Nyx_20260430135022.jpeg', 'uploads/qr/43.svg', '2026-04-30', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `estatus` enum('1','0') NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `idRol` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `email`, `password`, `estatus`, `token`, `idRol`) VALUES
(1, 'Christian', 'Lozano', 'christian.lozanoh', 'cecybot2026', '1', NULL, '1'),
(3, 'José Fernando ', 'Cervantes Rosas', 'jose.cervantesr', 'cecybot2026', '1', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
