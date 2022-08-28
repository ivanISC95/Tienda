-- --------------------------------------------------------
-- Host:                         192.168.1.134
-- Versión del servidor:         5.7.29 - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla tienda.categoria: ~11 rows (aproximadamente)
INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
	(1, 'Mochila'),
	(2, 'Mochila Combo rueditas'),
	(3, 'Mochila Combo'),
	(4, 'Mochila Kinder'),
	(5, 'Mochila Combo sin Rueditas'),
	(6, 'Mochila Primaria Luces'),
	(7, 'Mochila maya'),
	(8, 'Portafolio'),
	(9, 'Prueba'),
	(10, ''),
	(11, 'Mochila Economica ejercicio');

-- Volcando datos para la tabla tienda.producto: ~3 rows (aproximadamente)
INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `id_categoria`) VALUES
	(1, 'Combo Personajes', 'Combo Mario Bros, Mochila de rueditas, Lonchera y Cartuchera', 580, 2),
	(2, 'Combo Personajes', 'Combo Frozen, Mochila de rueditas, Lonchera y Cartuchera', 580, 2),
	(3, 'Combo Personajes', 'Combo Amoug Us, Mochila de rueditas, Lonchera y Cartuchera', 580, 2);

-- Volcando datos para la tabla tienda.producto_image: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
