-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 09 Avril 2019 à 18:30
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projetmateriel1`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(254) DEFAULT NULL,
  `username` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `role` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `username`, `email`, `mdp`, `role`) VALUES
(24, '   thiam', '   ibrahima', 'thiam@gmail.com', 'prest', '   Prestataire'),
(25, 'niang', 'babacar', 'niang29@gmail.com', 'vigile', 'Chef des vigiles'),
(26, 'samb', 'mamadou', 'mamadou@gmail.com', 'admin', 'ChefService'),
(35, 'diagne', 'mamadou', 'diagne@gmail.com', 'agent', 'Agent logistique'),
(57, 'ndiaye', 'aicha', 'ndiayeaicha29@yahoo.fr', 'resp', 'Responsable de classe'),
(58, 'fall', 'doudou', 'ndiayeaicha29@yahoo.fr', 'prof', 'Professeur principal'),
(60, 'ndiaye', 'admin', 'ndiayeaicha29@yahoo.fr', NULL, 'Agent logistique '),
(61, 'aaaaa', 'bbbbbb', 'ndiayeaicha29@yahoo.fr', 'ccccc', 'Agent logistique'),
(62, 'bbbbb', 'vvvvvv', 'fatou@gmail.com', 'chef', 'Chef des vigiles'),
(63, 'uuuuu', 'uuuuu', 'thiam@gmail.com', 'rrrr', 'Prestataire'),
(64, 'nnnnnn', 'nnnnnnnnn', 'niang@gmail.com', 'doudou', 'Surveillant gÃ©nÃ©ral'),
(67, 'aaaaa', 'admin', 'niang@gmail.com', 'bbbb', 'Professeur principal'),
(68, 'dembe', 'dembe', 'niang@gmail.com', 'eeee', 'Agent logistique'),
(70, 'ndiaye', 'prof', 'thiam@gmail.com', 'prof', 'Professeur principal'),
(88, 'fal', 'doudou', 'doudou@gmail.com', 'doudou', 'Prestataire'),
(90, 'aaaaa', 'admin', 'diagne@gmail.com ', 'admin', 'Agent logistique');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
