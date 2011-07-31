-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jul 31, 2011 as 02:51 AM
-- Versão do Servidor: 5.1.33
-- Versão do PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `econometrix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `apelido`, `email`, `senha`, `status`, `created_at`, `updated_at`) VALUES
(10, 'rodrigo', 'minguis', 'feliperodrigo@gmail.com', '1234568', 0, '2011-07-30 23:07:29', '2011-07-30 23:57:54'),
(9, 'nome 2', 'apelido 2', 'email 2', 'senha', 1, '2011-07-30 22:40:31', '2011-07-30 22:40:31'),
(7, 'teste', 'teste', 'teste', 'teste', 1, '2011-07-30 21:02:23', '2011-07-30 21:02:23'),
(11, 'fghfghgh', 'hjghj', 'ghjghj', 'hgjghjhj', 0, '2011-07-30 23:07:50', '2011-07-30 23:07:50'),
(12, 'd', 'df', 'df', 'df', 0, '2011-07-30 23:19:18', '2011-07-30 23:19:18');
