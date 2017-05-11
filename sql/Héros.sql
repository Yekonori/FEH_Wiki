-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 18 Février 2014 à 02:38
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `coursphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `Héros`
--

CREATE TABLE `Héros` (
  `ID :` int(5) NOT NULL AUTO_INCREMENT,
  `Nom :` varchar(20) NOT NULL,
  `Titre :` varchar(50) NOT NULL,
  `Description :` varchar(255) NOT NULL,
  `Couleur :` varchar(5) NOT NULL,
  `Arme :` varchar(10) NOT NULL,
  `Déplacement :` char(10) NOT NULL,
  `Obtention :` varchar(15) NOT NULL,
  PRIMARY KEY (`ID :`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4;

--
-- Contenu de la table `Héros`
--

INSERT INTO `Héros` (`ID :`, `Nom :`, `Titre :`, `Description :`, `Couleur :`, `Arme :`, `Déplacement :`, `Obtention :`) VALUES
(1, "Alfonse", "Prince d'Askr",
  "Prince et membre des Gardien d'Askr.\nSa bienveillance et son sérieux n'ont d'égal que son amour pour la paix.",
  "Rouge", "Epée", "Infanterie", "Début du jeu"),
(2, "Sharena", "Princesse d'Askr",
  "Princesse du royaume d'Askr et soeur d'Alfonse.\nToujours enjouée, elle aime se faire de nouveaux amis, notamment parmi les héros", 
  "Bleu", "Lance", "Infanterie", "Début du jeu"),
(3, "Anna", "Commandant", "Combattante aguerrie qui dirige l'ordre des Gardiens d'Askr, dont Alfonse et Sharena font partie.", 
  "Vert", "Hache", "Infanterie", "Début du jeu");

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;