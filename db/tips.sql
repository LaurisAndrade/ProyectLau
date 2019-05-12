-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2019 a las 23:52:12
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

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
-- Estructura de tabla para la tabla `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tips`
--

INSERT INTO `tips` (`id`, `nombre`, `foto`) VALUES
(1, 'Ejercicio para espalda\r\n\r\nEste ejercicio contribuye tanto a la amplitud como la densidad de la espalda; involucrando al dorsal ancho, romboides, redondo mayor y trapecio.\r\n\r\na)Coge una mancuerna con cada mano y flexiona tus rodillas y caderas como para colocarte en una posición de sentadillas.\r\n\r\nb)Eleva ambas mancuernas en forma recta hacia arriba sin alterar los ángulos de tus rodillas y caderas, y bájalas nuevamente luego de una breve pausa.\r\n\r\n\r\n', 'images/espalda.jpg'),
(2, 'Ejercicio para hombros\r\n\r\nDeltoides Posterior o Pájaros\r\n\r\nExcelente ejercicio para trabajar la cara posterior del hombro o deltoides. En este caso se suelen emplear cargas livianas, y respondiendo bastante bien a altas repeticiones. Además atiende a una gran número de variantes.\r\n\r\na) Podemos realizarlo de pie o sentados. Para el segundo caso, nos sentamos en el borde de un banco.\r\nb) Posición inicial: con el torso ligeramente echado hacia adelante, las mancuernas quedan colgando por debajo de los muslos, y con un agarra prono.\r\n', 'images/hombros.jpg'),
(4, 'Ejercicio para pecho\r\n\r\nPress de Banca\r\n\r\na) Acostado en una banca plana, sostenga una barra con pesas con los brazos extendidos.\r\n\r\nb) Inicie el descenso de la carga por medio de la flexión de ambos miembros superiores.\r\n\r\nc) Cuando la barra haya tocado su pecho, pero sin dejarla apoyado en el mismo, inicie el ascenso de la barra hasta su posición inicial.', 'images/pecho.jpg'),
(3, 'Ejercicio para piernas\r\n\r\nPeso muerto\r\n\r\nUnos lo incluyen entre los ejercicios para la espalda y otros en los ejercicios para la musculatura femoral, pero aquí queremos abordarlo desde el punto de vista del trabajo de la musculatura femoral ya que el peso muerto es uno de los mejores ejercicios para desarrollar la parte posterior de nuestro tren inferior. Debido a que es un ejercicio que va a implicar el trabajo de nuestra espalda a nivel lumbar, debemos prestar especial atención a la técnica empleada, ya que ello va a reducir el riesgo de lesiones (y no querer cargar más peso del que podamos manejar).', 'images/piernas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
