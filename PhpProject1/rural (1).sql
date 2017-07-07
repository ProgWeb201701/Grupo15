-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 07-Jul-2017 às 03:11
-- Versão do servidor: 5.5.28
-- versão do PHP: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `rural`
--
CREATE DATABASE IF NOT EXISTS `rural` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rural`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologia`
--

CREATE TABLE IF NOT EXISTS `tecnologia` (
  `id` int(11) NOT NULL,
  `r111` int(1) NOT NULL,
  `r112` int(1) NOT NULL,
  `r113` int(1) NOT NULL,
  `r121` int(1) NOT NULL,
  `r122` int(1) NOT NULL,
  `r123` int(1) NOT NULL,
  `r124` int(1) NOT NULL,
  `r125` int(1) NOT NULL,
  `r126` int(1) NOT NULL,
  `r127` int(1) NOT NULL,
  `r128` int(1) NOT NULL,
  `r129` int(1) NOT NULL,
  `r1210` int(1) NOT NULL,
  `r131` int(1) NOT NULL,
  `r132` int(1) NOT NULL,
  `r133` int(1) NOT NULL,
  `r134` int(1) NOT NULL,
  `r135` int(1) NOT NULL,
  `r136` int(1) NOT NULL,
  `r137` int(1) NOT NULL,
  `r138` int(1) NOT NULL,
  `r141` int(1) NOT NULL,
  `r142` int(1) NOT NULL,
  `r143` int(1) NOT NULL,
  `r144` int(1) NOT NULL,
  `r151` int(1) NOT NULL,
  `r152` int(1) NOT NULL,
  `r153` int(1) NOT NULL,
  `r154` int(1) NOT NULL,
  `r161` int(1) NOT NULL,
  `r162` int(1) NOT NULL,
  `r163` int(1) NOT NULL,
  `r164` int(1) NOT NULL,
  `r165` int(1) NOT NULL,
  `r166` int(1) NOT NULL,
  `r167` int(1) NOT NULL,
  `r168` int(1) NOT NULL,
  `r169` int(1) NOT NULL,
  `r1610` int(1) NOT NULL,
  `r1611` int(1) NOT NULL,
  `r1612` int(1) NOT NULL,
  `r1613` int(1) NOT NULL,
  `r1614` int(1) NOT NULL,
  `r1615` int(1) NOT NULL,
  `r171` int(1) NOT NULL,
  `r172` int(1) NOT NULL,
  `r173` int(1) NOT NULL,
  `r181` int(1) NOT NULL,
  `r182` int(1) NOT NULL,
  `r183` int(1) NOT NULL,
  `r184` int(1) NOT NULL,
  `r185` int(1) NOT NULL,
  `r186` int(1) NOT NULL,
  `r187` int(1) NOT NULL,
  `r188` int(1) NOT NULL,
  `r191` int(1) NOT NULL,
  `r192` int(1) NOT NULL,
  `r193` int(1) NOT NULL,
  `r1101` int(1) NOT NULL,
  `r1102` int(1) NOT NULL,
  `r1103` int(1) NOT NULL,
  `r1104` int(1) NOT NULL,
  `r1105` int(1) NOT NULL,
  `r1106` int(1) NOT NULL,
  `r1107` int(1) NOT NULL,
  `r1108` int(1) NOT NULL,
  `r1109` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `nomep` varchar(220) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(220) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `enderecoc` varchar(220) NOT NULL,
  `municipio` varchar(220) NOT NULL,
  `tipo` int(5) NOT NULL,
  `obs` varchar(220) NOT NULL,
  `total` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nomep`, `celular`, `email`, `endereco`, `enderecoc`, `municipio`, `tipo`, `obs`, `total`) VALUES
(1, 'Louzada', 'Rodrigo', 123, 'guigolouzada', 'ibicui', 'ibicui', 'uruguaiana', 0, 'obs1', '10'),
(2, 'Potranca', 'Cesar', 123456, 'cesar123', 'centro', 'centro', 'alegrete', 1, 'obs2', '20'),
(3, 'Pelea', 'Kelly', 123456789, 'kelly123456', 'duque', 'duque', 'itaqui', 2, 'obs3', '30'),
(4, 'Corte', 'Michel', 6789, 'Michel123456', 'duque', 'duque', 'itaqui', 3, 'obs4', '40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
