-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 01 Août 2011 à 00:41
-- Version du serveur: 5.5.9
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `econometrix`
--

-- --------------------------------------------------------

--
-- Structure de la table `econ_usuarios`
--

CREATE TABLE `econ_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `econ_usuarios`
--

INSERT INTO `econ_usuarios` VALUES(10, 'rodrigo', 'minguis', 'feliperodrigo@gmail.com', '1234568', 0, '2011-07-30 23:07:29', '2011-07-30 23:57:54');
INSERT INTO `econ_usuarios` VALUES(20, 'oloco', 'oloco', 'oloco@oloco.com', 'czczxcxcxz', 1, '2011-07-31 21:55:26', '2011-07-31 21:55:26');
INSERT INTO `econ_usuarios` VALUES(18, 'zeca', 'zeca', 'tes@tes.com', 'gjkkj', 1, '2011-07-31 21:32:01', '2011-07-31 21:32:01');
INSERT INTO `econ_usuarios` VALUES(21, 'piao', 'piao', 'piao@piao.com', 'sdvdsf', 1, '2011-07-31 21:57:34', '2011-07-31 21:57:34');
INSERT INTO `econ_usuarios` VALUES(19, 'tucano', 'tucano', 'tucano@tucano.com', 'asdasdasda', 1, '2011-07-31 21:53:42', '2011-07-31 21:53:42');
INSERT INTO `econ_usuarios` VALUES(15, 'form', 'form', 'form@form.com', 'form', 1, '2011-07-31 19:17:21', '2011-07-31 19:17:21');
INSERT INTO `econ_usuarios` VALUES(16, '232323', '232323', 'admin@email.com', '34343434', 1, '2011-07-31 19:19:54', '2011-07-31 19:19:54');
INSERT INTO `econ_usuarios` VALUES(17, 'locator', 'locator', 'admin@teste.com', 'wewewe', 1, '2011-07-31 19:20:59', '2011-07-31 19:20:59');
INSERT INTO `econ_usuarios` VALUES(22, 'jackson', 'michael', 'michel@gmail.com', 'dcvsdvd', 1, '2011-07-31 21:59:43', '2011-08-01 00:33:09');
INSERT INTO `econ_usuarios` VALUES(23, 'disco', 'disc', 'disc@disc.com', 'zcxcxz', 1, '2011-07-31 23:45:53', '2011-08-01 00:36:29');
