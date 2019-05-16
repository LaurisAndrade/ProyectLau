-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2019 a las 04:44:07
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `estado` char(1) NOT NULL,
  `personacreo` int(11) NOT NULL,
  `personamodifico` int(11) NOT NULL,
  `fechacreo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechamodifico` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`id`, `nombre`, `foto`, `descripcion`, `estado`, `personacreo`, `personamodifico`, `fechacreo`, `fechamodifico`) VALUES
(9, 'Espalda', '', 'Ejemplo', '1', 0, 0, '2019-05-15 20:42:16', '0000-00-00 00:00:00'),
(11, 'Piernas', '', 'Excelente ejercicio', '1', 0, 0, '2019-05-15 20:58:50', '0000-00-00 00:00:00'),
(12, 'Hombros', '', 'Ejemplo', '0', 0, 0, '2019-05-15 20:59:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `principal`
--

INSERT INTO `principal` (`id`, `foto`) VALUES
(1, 'images/ejercicio3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendaciones`
--

CREATE TABLE `recomendaciones` (
  `rec_codigo` bigint(20) NOT NULL,
  `rec_descripcion` text NOT NULL,
  `rec_foto` varchar(250) NOT NULL,
  `rec_estado` varchar(1) NOT NULL,
  `rec_fechacreo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rec_fechamodifico` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rec_personacreo` int(11) NOT NULL,
  `rec_personamodifico` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recomendaciones`
--

INSERT INTO `recomendaciones` (`rec_codigo`, `rec_descripcion`, `rec_foto`, `rec_estado`, `rec_fechacreo`, `rec_fechamodifico`, `rec_personacreo`, `rec_personamodifico`) VALUES
(1, '1. Coma alimentos variados\r\n\r\nNecesitamos más de 40 nutrientes diferentes y ningún alimento por sí solo puede proporcionarlos todos. El suministro de alimentos que existe hoy en día facilita tomar una amplia variedad de alimentos, tanto comprando alimentos frescos para cocinar como comprando comidas preparadas o comida para llevar. ¡Elija los alimentos siempre de manera equilibrada!', 'images/1.jpg', '1', '2019-05-14 04:40:52', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, '2. Base su dieta en alimentos ricos en hidratos de carbono\r\n\r\nLa mayoría de la gente no incorpora suficientes alimentos ricos en hidratos de carbono como el pan, la pasta, el arroz, las papas y otros cereales, considerándolos prohibidos para lograr no engordar. Sin embargo, esto no es correcto, más de la mitad de las calorías de su dieta, es decir el 60 % aproximadamente, deben venir de estos alimentos. Lo ideal es aumentar la ingesta de fibra con el aporte de pan integral, la pasta integrales y otros cereales.', 'images/2.jpg', '1', '2019-05-14 04:41:02', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, '3. Tome muchas frutas y verduras\r\n\r\nLa mayor parte de la gente no come la suficiente cantidad de estos alimentos que proporcionan importantes nutrientes protectores. Intente comer al menos cinco raciones al día. Pruebe nuevas recetas o vea qué platos preparados están disponibles en el supermercado.', 'images/3.jpg', '1', '2019-05-14 04:41:34', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, '4. Mantenga un peso corporal saludable y siéntase bien\r\n\r\nEl peso adecuado depende de muchos factores tales como el sexo, la altura, la edad y la genética. El sobrepeso aumenta el riesgo de padecer varias enfermedades como son los problemas cardiovasculares, de los huesos, articulares y el cáncer. El exceso de grasa aparece al ingerir más calorías de las que se necesitan. Estas calorías suplementarias pueden provenir de cualquier nutriente que contenga calorías (las proteínas, las grasas, los hidratos de carbono o el alcohol) pero la grasa es la fuente más concentrada de calorías. La actividad física es un buen método para quemar calorías y hacernos sentir bien. El mensaje es simple: si está ganando peso, tiene que comer más moderadamente y ser más activo.', 'images/4.jpg', '1', '2019-05-14 04:41:46', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, '5. Coma raciones moderadas: \r\nReduzca, no elimine alimentos Si ingiere las raciones adecuadas de cada alimento, es más fácil comer de todos los grupos de alimentos sin necesidad de eliminar ninguno. \r\nSi come fuera, podría compartir parte de su comida con un amigo. \r\nNo abandone el hábito de comer con los que quiere.', 'images/5.jpg', '1', '2019-05-14 04:41:56', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, '6. Coma regularmente\r\n\r\nSaltarse las comidas, sobre todo el desayuno, puede conducir a una sensación de hambre descontrolada, causando a menudo una sobre ingesta. \r\nRealizar la merienda puede ayudar a contener el hambre, pero no coma demasiado para no sustituir las comidas principales.', 'images/1.jpg', '1', '2019-05-14 04:41:24', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, '7. Beba muchos líquidos\r\n\r\n¡Los adultos necesitamos beber por lo menos 1,5 litros de líquidos al día! Y necesitamos más cantidad si hace calor o si realizamos mucho deporte. \r\nHidratarse es fundamental para vivir. \r\nEl agua es obviamente una buena fuente de líquidos pero la variedad puede ser tanto agradable como saludable. \r\nOtras opciones son las bebidas dietéticas pero éstas no deben sustituir el aporte de agua.', 'images/2.jpg', '1', '2019-05-14 04:41:16', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'qekjqkje', 'images/CTRO_291117_HBO_11.png', '1', '2019-05-15 20:48:36', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 'yuliana', 'images/Movistar-logo.jpg', '1', '2019-05-15 21:03:33', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(10, '        ggyyyuuyuu', 'images/resdes.jpg', '1', '2019-05-15 21:03:58', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_codigo` int(11) NOT NULL,
  `rol_nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_codigo`, `rol_nombre`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `foto` varchar(300) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `fechacreo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechamodifico` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `personacreo` int(11) NOT NULL,
  `personamodifico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tips`
--

INSERT INTO `tips` (`id`, `nombre`, `foto`, `estado`, `fechacreo`, `fechamodifico`, `personacreo`, `personamodifico`) VALUES
(1, 'Ejercicio para espalda\r\n\r\nEste ejercicio contribuye tanto a la amplitud como la densidad de la espalda; involucrando al dorsal ancho, romboides, redondo mayor y trapecio.\r\n\r\na)Coge una mancuerna con cada mano y flexiona tus rodillas y caderas como para colocarte en una posición de sentadillas.\r\n\r\nb)Eleva ambas mancuernas en forma recta hacia arriba sin alterar los ángulos de tus rodillas y caderas, y bájalas nuevamente luego de una breve pausa.\r\n\r\n\r\n', 'images/espalda.jpg', '1', '2019-05-14 04:43:46', '0000-00-00 00:00:00', 0, 0),
(2, 'Ejercicio para hombros\r\n\r\nDeltoides Posterior o Pájaros\r\n\r\nExcelente ejercicio para trabajar la cara posterior del hombro o deltoides. En este caso se suelen emplear cargas livianas, y respondiendo bastante bien a altas repeticiones. Además atiende a una gran número de variantes.\r\n\r\na) Podemos realizarlo de pie o sentados. Para el segundo caso, nos sentamos en el borde de un banco.\r\nb) Posición inicial: con el torso ligeramente echado hacia adelante, las mancuernas quedan colgando por debajo de los muslos, y con un agarra prono.\r\n', 'images/hombros.jpg', '1', '2019-05-14 04:43:53', '0000-00-00 00:00:00', 0, 0),
(3, 'Ejercicio para piernas\r\n\r\nPeso muerto\r\n\r\nUnos lo incluyen entre los ejercicios para la espalda y otros en los ejercicios para la musculatura femoral, pero aquí queremos abordarlo desde el punto de vista del trabajo de la musculatura femoral ya que el peso muerto es uno de los mejores ejercicios para desarrollar la parte posterior de nuestro tren inferior. Debido a que es un ejercicio que va a implicar el trabajo de nuestra espalda a nivel lumbar, debemos prestar especial atención a la técnica empleada, ya que ello va a reducir el riesgo de lesiones (y no querer cargar más peso del que podamos manejar).', 'images/piernas.jpg', '1', '2019-05-14 04:44:01', '0000-00-00 00:00:00', 0, 0),
(4, 'Ejercicio para pecho\r\n\r\nPress de Banca\r\n\r\na) Acostado en una banca plana, sostenga una barra con pesas con los brazos extendidos.\r\n\r\nb) Inicie el descenso de la carga por medio de la flexión de ambos miembros superiores.\r\n\r\nc) Cuando la barra haya tocado su pecho, pero sin dejarla apoyado en el mismo, inicie el ascenso de la barra hasta su posición inicial.', 'images/pecho.jpg', '1', '2019-05-14 04:44:08', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_codigo` int(11) NOT NULL,
  `usu_nombres` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_apellidos` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_tipoidentificacion` int(11) NOT NULL,
  `usu_numeroidentificacion` int(11) NOT NULL,
  `usu_alias` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_contrasena` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `usu_estado` varchar(1) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_codigo`, `usu_nombres`, `usu_apellidos`, `usu_tipoidentificacion`, `usu_numeroidentificacion`, `usu_alias`, `usu_contrasena`, `id_rol`, `usu_estado`) VALUES
(1, 'Karen Yuliana', 'Palacio Minú', 1, 1010135781, 'yuliana', '38c6c878467eaa7fd5aa2c8fec6ae082', 1, '1'),
(2, 'Laura', 'Cedeño Andrade', 1, 1004491130, 'laura', 'baeda96806bdb5eb5faa03f3e6ad3a65', 2, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD PRIMARY KEY (`rec_codigo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_codigo`);

--
-- Indices de la tabla `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  MODIFY `rec_codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
