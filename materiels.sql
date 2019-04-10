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
-- Structure de la table `materiels`
--

CREATE TABLE IF NOT EXISTS `materiels` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_sent` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `user_fk` int(11) NOT NULL,
  `code` varchar(60) NOT NULL,
  `nombre` int(11) NOT NULL,
  PRIMARY KEY (`id_material`),
  KEY `fk_idUtilsateur` (`user_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Contenu de la table `materiels`
--

INSERT INTO `materiels` (`id_material`, `category`, `lieu`, `date_sent`, `image`, `message`, `user_fk`, `code`, `nombre`) VALUES
(48, 'CABLE', 'BatA', '2019-03-15 11:30:25', '1 (Copy).jpg', 'aaa', 57, '12A', 3),
(49, 'ARMOIRE', 'BatA', '2019-03-22 19:09:39', '1 (Copy).jpg', 'aaa', 57, '12A ', 2),
(55, 'kkdkdkkd', 'BatA', '2019-03-23 18:30:22', 'arr.jpg', 'ttt', 57, '12A ', 1),
(59, 'Armoire de rangement', 'SalleA', '2019-03-23 18:44:56', '1 (Copy) (2).jpg', 'ggg', 57, '12A', 2),
(67, 'Chaise accoudoirs', 'SalleA', '2019-03-23 19:18:43', '1 (Copy).jpg', 'bbbb', 57, '234 ', 2),
(68, 'kkdkdkkd', 'SalleA', '2019-03-23 19:22:29', 'acc.jpg', 'nnn', 57, '12A ', 4),
(71, 'Armoire basse de rangement', 'SalleA', '2019-03-27 17:27:11', 'acc1.jpg', 'nnn', 57, '12A', 3),
(89, 'Armoire coulissante', 'SalleA', '2019-04-02 15:59:20', '1 (Copy).jpg', 'nnn', 57, '234 ', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD CONSTRAINT `fk_idUtilsateur` FOREIGN KEY (`user_fk`) REFERENCES `utilisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
