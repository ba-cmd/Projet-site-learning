-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 28 avr. 2022 à 14:07
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--
CREATE DATABASE IF NOT EXISTS `forum` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forum`;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` int(11) NOT NULL AUTO_INCREMENT,
  `NomCours` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idCours`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `NomCours`) VALUES
(1, 'Dev-android'),
(2, 'Dev-java'),
(3, 'Systemes et Reseaux'),
(4, 'Dev-web'),
(5, 'Marketing-digital'),
(6, 'Algo-Complexite'),
(7, 'Langage-formelle'),
(8, 'Traitement-images'),
(9, 'Programmation-logique');

-- --------------------------------------------------------

--
-- Structure de la table `coursconsulte`
--

DROP TABLE IF EXISTS `coursconsulte`;
CREATE TABLE IF NOT EXISTS `coursconsulte` (
  `idUser` int(11) NOT NULL,
  `idCours` int(11) NOT NULL,
  `DateConsultation` date NOT NULL,
  PRIMARY KEY (`idUser`,`idCours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `idForum` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `idCours` int(11) NOT NULL,
  `DateCreationForum` date NOT NULL,
  PRIMARY KEY (`idForum`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`idForum`, `Titre`, `idCours`, `DateCreationForum`) VALUES
(9, 'roi', 1, '2022-04-28');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `idQuestion` int(11) NOT NULL AUTO_INCREMENT,
  `Sujet` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Explication` text COLLATE utf8_unicode_ci,
  `DateQuestion` date NOT NULL,
  `NumUser` int(11) NOT NULL,
  `Favoris` int(11) NOT NULL DEFAULT '1',
  `idForum` int(11) NOT NULL,
  PRIMARY KEY (`idQuestion`),
  KEY `Directionuser` (`NumUser`),
  KEY `DetectionForum` (`idForum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reaction`
--

DROP TABLE IF EXISTS `reaction`;
CREATE TABLE IF NOT EXISTS `reaction` (
  `idReaction` int(11) NOT NULL AUTO_INCREMENT,
  `liker` int(11) NOT NULL DEFAULT '0',
  `dislike` int(11) NOT NULL DEFAULT '0',
  `idQuestionReaction` int(11) NOT NULL,
  PRIMARY KEY (`idReaction`),
  KEY `Reagir` (`idQuestionReaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `idReponse` int(11) NOT NULL AUTO_INCREMENT,
  `idQuestionReponse` int(11) NOT NULL,
  `Reponse` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idReponse`),
  KEY `Repondre` (`idQuestionReponse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `Nom`, `Prenom`) VALUES
(1, 'BARRY', 'Thierno'),
(2, 'Diallo', 'Mamadou');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `AccederForum` FOREIGN KEY (`idForum`) REFERENCES `cours` (`idCours`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `DetectionForum` FOREIGN KEY (`idForum`) REFERENCES `forum` (`idForum`),
  ADD CONSTRAINT `Directionuser` FOREIGN KEY (`NumUser`) REFERENCES `utilisateur` (`idUser`);

--
-- Contraintes pour la table `reaction`
--
ALTER TABLE `reaction`
  ADD CONSTRAINT `Reagir` FOREIGN KEY (`idQuestionReaction`) REFERENCES `question` (`idQuestion`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `Repondre` FOREIGN KEY (`idQuestionReponse`) REFERENCES `question` (`idQuestion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
