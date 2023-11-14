-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.25-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para yup
DROP DATABASE IF EXISTS `yup`;
CREATE DATABASE IF NOT EXISTS `yup` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `yup`;

-- Copiando estrutura para tabela yup.cookie
DROP TABLE IF EXISTS `cookie`;
CREATE TABLE IF NOT EXISTS `cookie` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT '0',
  `descricao` varchar(1000) DEFAULT '0',
  `preco` float DEFAULT 0,
  `imagem` varchar(50) DEFAULT '0',
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela yup.cookie: ~3 rows (aproximadamente)
DELETE FROM `cookie`;
INSERT INTO `cookie` (`cod`, `nome`, `descricao`, `preco`, `imagem`) VALUES
	(3, 'Tradicional', 'Gotas de Chocolate', 500, 'cookieT'),
	(4, 'Red Velvet', 'Gotas de Chocolate Brancos', 500, 'cookieRV'),
	(5, 'Chocolate Amargo', 'Chocolate Amargo com Gotas de Chocolate Branco', 500, 'cookieCB');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
