-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 juin 2023 à 14:15
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sgpo`
--

-- --------------------------------------------------------

--
-- Structure de la table `use6`
--

DROP TABLE IF EXISTS `use6`;
CREATE TABLE IF NOT EXISTS `use6` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` int NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `Token` varchar(225) NOT NULL,
  `Post` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `use6`
--

INSERT INTO `use6` (`ID`, `Username`, `Password`, `Active`, `Token`, `Post`) VALUES
(1, 'user1', 0, 1, '124578', 'dev'),
(2, 'user2', 1, 0, '12547', 'It'),
(3, 'user3', 2, 1, '1478852', 'RH'),
(4, 'user4', 3, 0, '1478963', 'Manager'),
(5, 'user5', 4, 0, '147852', 'DG'),
(6, 'user6', 5, 0, '147852', 'Designer'),
(7, 'user7', 6, 1, '147852', 'dev'),
(8, 'user8', 7, 0, '14785236', 'designer'),
(9, 'user9', 8, 1, '1478523', 'Manager');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
