-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 07-Jul-2017 às 02:16
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
-- Estrutura da tabela `gestao`
--

CREATE TABLE IF NOT EXISTS `gestao` (
  `id` int(11) NOT NULL,
  `r211` int(11) NOT NULL,
  `r212` int(11) NOT NULL,
  `r213` int(11) NOT NULL,
  `r214` int(11) NOT NULL,
  `r215` int(11) NOT NULL,
  `r216` int(11) NOT NULL,
  `r217` int(11) NOT NULL,
  `r218` int(11) NOT NULL,
  `r219` int(11) NOT NULL,
  `r221` int(11) NOT NULL,
  `r222` int(11) NOT NULL,
  `r223` int(11) NOT NULL,
  `r224` int(11) NOT NULL,
  `r231` int(11) NOT NULL,
  `r232` int(11) NOT NULL,
  `r233` int(11) NOT NULL,
  `r234` int(11) NOT NULL,
  `r241` int(11) NOT NULL,
  `r242` int(11) NOT NULL,
  `r251` int(11) NOT NULL,
  `r252` int(11) NOT NULL,
  `r253` int(11) NOT NULL,
  `r254` int(11) NOT NULL,
  `r255` int(11) NOT NULL,
  `r256` int(11) NOT NULL,
  `r257` int(11) NOT NULL,
  `r261` int(11) NOT NULL,
  `r262` int(11) NOT NULL,
  `r263` int(11) NOT NULL,
  `r271` int(11) NOT NULL,
  `r272` int(11) NOT NULL,
  `r273` int(11) NOT NULL,
  `r274` int(11) NOT NULL,
  `r281` int(11) NOT NULL,
  `r282` int(11) NOT NULL,
  `r283` int(11) NOT NULL,
  `r284` int(11) NOT NULL,
  `r291` int(11) NOT NULL,
  `r292` int(11) NOT NULL,
  `r293` int(11) NOT NULL,
  `r2101` int(11) NOT NULL,
  `r2102` int(11) NOT NULL,
  `r2103` int(11) NOT NULL,
  `r2104` int(11) NOT NULL,
  `r2105` int(11) NOT NULL,
  `r2106` int(11) NOT NULL,
  `r2107` int(11) NOT NULL,
  `r2108` int(11) NOT NULL,
  `r2109` int(11) NOT NULL,
  `r21010` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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


INSERT INTO `gestao` ( `id` , `r211` , `r212` , `r213` , `r214` , `r215` , `r216` , `r217` , `r218` , `r219` , `r221` , `r222` , `r223` , `r224` , `r231` , `r232` , `r233` , `r234` , `r241` , `r242` , `r251` , `r252` , `r253` , `r254` , `r255` , `r256` , `r257` , `r261` , `r262` , `r263` , `r271` , `r272` , `r273` , `r274` , `r281` , `r282` , `r283` , `r284` , `r291` , `r292` , `r293` , `r2101` , `r2102` , `r2103` , `r2104` , `r2105` , `r2106` , `r2107` , `r2108` , `r2109` , `r21010` )
VALUES 
( 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1' ) 
( 1, '1', '0', '0', '1', '1', '1', '0', '1', '0', '1', '0', '0', '1', '1', '1', '0', '0', '1', '0', '0', '0', '1', '0', '1', '0', '1', '0', '1', '0', '0', '1', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0', '0', '1', '0' )

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
