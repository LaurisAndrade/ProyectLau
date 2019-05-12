-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2019 a las 03:11:33
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

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
-- Estructura de tabla para la tabla `recomendaciones`
--

CREATE TABLE `recomendaciones` (
  `rec_codigo` bigint(20) NOT NULL,
  `rec_descripcion` text NOT NULL,
  `rec_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recomendaciones`
--

INSERT INTO `recomendaciones` (`rec_codigo`, `rec_descripcion`, `rec_foto`) VALUES
(1, '1. Coma alimentos variados\r\n\r\nNecesitamos más de 40 nutrientes diferentes y ningún alimento por sí solo puede proporcionarlos todos. El suministro de alimentos que existe hoy en día facilita tomar una amplia variedad de alimentos, tanto comprando alimentos frescos para cocinar como comprando comidas preparadas o comida para llevar. ¡Elija los alimentos siempre de manera equilibrada!', 'images/1.jpg'),
(2, '2. Base su dieta en alimentos ricos en hidratos de carbono\r\n\r\nLa mayoría de la gente no incorpora suficientes alimentos ricos en hidratos de carbono como el pan, la pasta, el arroz, las papas y otros cereales, considerándolos prohibidos para lograr no engordar. Sin embargo, esto no es correcto, más de la mitad de las calorías de su dieta, es decir el 60 % aproximadamente, deben venir de estos alimentos. Lo ideal es aumentar la ingesta de fibra con el aporte de pan integral, la pasta integrales y otros cereales.', 'images/2.jpg'),
(3, '3. Tome muchas frutas y verduras\r\n\r\nLa mayor parte de la gente no come la suficiente cantidad de estos alimentos que proporcionan importantes nutrientes protectores. Intente comer al menos cinco raciones al día. Pruebe nuevas recetas o vea qué platos preparados están disponibles en el supermercado.', 'images/3.jpg'),
(4, '4. Mantenga un peso corporal saludable y siéntase bien\r\n\r\nEl peso adecuado depende de muchos factores tales como el sexo, la altura, la edad y la genética. El sobrepeso aumenta el riesgo de padecer varias enfermedades como son los problemas cardiovasculares, de los huesos, articulares y el cáncer. El exceso de grasa aparece al ingerir más calorías de las que se necesitan. Estas calorías suplementarias pueden provenir de cualquier nutriente que contenga calorías (las proteínas, las grasas, los hidratos de carbono o el alcohol) pero la grasa es la fuente más concentrada de calorías. La actividad física es un buen método para quemar calorías y hacernos sentir bien. El mensaje es simple: si está ganando peso, tiene que comer más moderadamente y ser más activo.', 'images/4.jpg'),
(5, '5. Coma raciones moderadas: reduzca, no elimine alimentosSi ingiere las raciones adecuadas de cada alimento, es más fácil comer de todos los grupos de alimentos sin necesidad de eliminar ninguno. Si come fuera, podría compartir parte de su comida con un amigo. No abandone el hábito de comer con los que quiere.', 'images/5.jpg'),
(6, '6. Coma regularmente\r\n\r\nSaltarse las comidas, sobre todo el desayuno, puede conducir a una sensación de hambre descontrolada, causando a menudo una sobre ingesta. Realizar la merienda puede ayudar a contener el hambre, pero no coma demasiado para no sustituir las comidas principales.', 'images/6.jpg'),
(7, '7. Beba muchos líquidos\r\n\r\n¡Los adultos necesitamos beber por lo menos 1,5 litros de líquidos al día! Y necesitamos más cantidad si hace calor o si realizamos mucho deporte. Hidratarse es fundamental para vivir. El agua es obviamente una buena fuente de líquidos pero la variedad puede ser tanto agradable como saludable. Otras opciones son las bebidas dietéticas pero éstas no deben sustituir el aporte de agua.', 'images/7.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD PRIMARY KEY (`rec_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  MODIFY `rec_codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
