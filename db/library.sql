-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 21 jan. 2019 à 02:57
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `reference` varchar(256) COLLATE utf8_bin NOT NULL,
  `genre` varchar(256) COLLATE utf8_bin NOT NULL,
  `auteur` varchar(256) COLLATE utf8_bin NOT NULL,
  `image` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `reference`, `genre`, `auteur`, `image`) VALUES
(1, 'The Alchimist', '112324458', 'Litterature', 'Paolo Cohillo', '21_01_2019_00_58_49.JPG'),
(2, 'History', '6532231564', 'Histoire', 'Victor higo', '21_01_2019_00_57_58.JPG'),
(98, 'PHP 7', '5445321564', 'Enseignement', 'Imad Bouzgou', '21_01_2019_02_56_14.PNG'),
(3, 'Harry Potter', '5445321564', 'Litterature', 'J. K. Rowling', '21_01_2019_00_55_12.JPG'),
(4, 'Le livre pratique', '897995445', 'Sciences', 'Hermione Granger', '21_01_2019_00_56_12.JPG'),
(5, 'The power of Habit', '98779454', 'Arts', 'Charle Heuig', '21_01_2019_00_57_17.JPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
