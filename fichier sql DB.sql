-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 26 juin 2021 à 18:43
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `examens`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(200) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`login`, `mdp`) VALUES
('sefiane', '123');

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

DROP TABLE IF EXISTS `calendrier`;
CREATE TABLE IF NOT EXISTS `calendrier` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Module` varchar(100) NOT NULL,
  `Professeur` varchar(100) NOT NULL,
  `Salle` int NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `calendrier`
--

INSERT INTO `calendrier` (`Id`, `Module`, `Professeur`, `Salle`, `Date`) VALUES
(22, 'Langage C avancé', 'Hjjami Oussama', 103, '2021-06-24 09:00:00'),
(30, 'Langage C avancé', 'Jourani Reda', 205, '2021-06-24 09:00:00'),
(32, 'Langage C avancé', 'Mesmoudi Yassine', 112, '2021-06-24 09:00:00'),
(33, 'Compilation', 'Hjjami Oussama', 205, '2021-06-25 15:00:00'),
(34, 'Compilation', 'Mesmoudi Yassine', 115, '2021-06-25 15:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `Id_module` int NOT NULL AUTO_INCREMENT,
  `Nom_module` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Professeur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Id_module`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`Id_module`, `Nom_module`, `Professeur`) VALUES
(25, 'VHDL', 'Zkriti Alia'),
(12, 'Compilation ', 'Mesmoudi Yassin'),
(23, 'Langage C avancé', 'Bouhdidi Jaber'),
(24, 'Programmation Web', 'Jourani Reda');

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `Code_prof` int NOT NULL AUTO_INCREMENT,
  `Nom_prof` varchar(30) NOT NULL,
  `Prenom_prof` varchar(30) NOT NULL,
  `Email_instit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  PRIMARY KEY (`Code_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`Code_prof`, `Nom_prof`, `Prenom_prof`, `Email_instit`, `Telephone`) VALUES
(65, 'Hjjami', 'Oussama', 'hjjami.ouami@etu.uae.ma', '0666789012'),
(63, 'Mesmoudi', 'Yassine', 'yassin.mesmoudi@etu.uae.ma', '0567881255'),
(71, 'Jourani', 'Reda', 'reda.jourani@etu.uae.ma', '0657123418'),
(72, 'Zkriti', 'Alia', 'alia.zkriti@etu.uae.ma', '0678901234'),
(70, 'Bouhdidi', 'Jaber', 'bouhdid.jaber@etu.uae.ma', '0610191062');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `Id_salle` int NOT NULL AUTO_INCREMENT,
  `Etage` varchar(15) NOT NULL,
  `Num_salle` int NOT NULL,
  PRIMARY KEY (`Id_salle`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`Id_salle`, `Etage`, `Num_salle`) VALUES
(3, '3éme étage', 205),
(17, '2éme étage', 108),
(6, '2éme étage', 115),
(7, '3éme étage', 213),
(15, '2éme étage', 112),
(14, '1er étage', 103);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
