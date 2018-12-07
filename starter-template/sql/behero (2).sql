-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 07 déc. 2018 à 06:17
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `behero`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `NominationC` char(50) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`idC`, `NominationC`) VALUES
(1, '2TSSIO'),
(2, '1TSSIO'),
(3, 'Admin'),
(4, 'Professeur');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `idE` int(11) NOT NULL AUTO_INCREMENT,
  `NomE` char(50) NOT NULL,
  `PrenomE` char(50) NOT NULL,
  `nbPoint` int(11) NOT NULL DEFAULT '0',
  `password` char(50) NOT NULL,
  `idC` int(11) NOT NULL,
  PRIMARY KEY (`idE`),
  KEY `fk_eleve` (`idC`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`idE`, `NomE`, `PrenomE`, `nbPoint`, `password`, `idC`) VALUES
(1, 'Swart', 'Wendeline', 1255, 'motdepassecomplique', 1),
(2, 'Dehes', 'Nico', 0, 'uncertainmdp', 2),
(3, 'Iwa', 'Ségo', 0, 'aaaaa', 1),
(4, 'Ferrier', 'Cirill', 0, 'bbbbb', 1),
(5, 'legofelegend', 'Teabears', 0, 'teabears', 2),
(6, 'NameAdmin', 'PrenomAdmin', 42, 'admin', 3);

-- --------------------------------------------------------

--
-- Structure de la table `recompense`
--

DROP TABLE IF EXISTS `recompense`;
CREATE TABLE IF NOT EXISTS `recompense` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `nomProd` char(50) NOT NULL,
  `valeurProd` int(11) NOT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recompense`
--

INSERT INTO `recompense` (`idR`, `nomProd`, `valeurProd`) VALUES
(1, 'Donnut au choco', 250),
(2, 'Gauffre au chocolat', 500),
(3, 'Muffin', 250),
(4, 'Bonbon 50cent', 50),
(5, 'Bonbon 1€', 150);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
