-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Nov-2019 às 23:42
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finsis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `missaovalores`
--

DROP TABLE IF EXISTS `missaovalores`;
CREATE TABLE IF NOT EXISTS `missaovalores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `razaoSocial` varchar(200) NOT NULL,
  `missao` varchar(200) NOT NULL,
  `visao` varchar(200) NOT NULL,
  `valores` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `missaovalores`
--

INSERT INTO `missaovalores` (`id`, `nome`, `razaoSocial`, `missao`, `visao`, `valores`) VALUES
(1, 'DFXTGDF', 'FGDGD', 'GDF', 'DFG', 'GDF'),
(2, '', 'v', 'v', 'v', 'v'),
(3, 'sadfsad', 'asdfsdf', 'dfghfgh', 'hjkhj', 'jkljk'),
(4, 'cfgfdhd', 'fghfg', 'fghfg', 'fghfg', 'fghf'),
(5, 'teste', 'testa s/a', 'fazer teste', 'mais ou menos', 'muitos testes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `swot`
--

DROP TABLE IF EXISTS `swot`;
CREATE TABLE IF NOT EXISTS `swot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forcas` varchar(220) DEFAULT NULL,
  `fraquezas` varchar(220) DEFAULT NULL,
  `oportunidades` varchar(220) DEFAULT NULL,
  `ameacas` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `swot`
--

INSERT INTO `swot` (`id`, `forcas`, `fraquezas`, `oportunidades`, `ameacas`) VALUES
(1, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
