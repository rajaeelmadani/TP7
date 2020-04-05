-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 05 avr. 2020 à 23:05
-- Version du serveur :  5.05.01
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `smi2020`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `CodeE` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Nom` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Prenom` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Filiere` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Note` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`CodeE`, `Nom`, `Prenom`, `Filiere`, `Note`) VALUES
('E1', 'El madani', 'rajae', 'smi', '17'),
('E10', 'ilyas', 'ilyas', 'sma', '10'),
('E11', 'Elmadani', 'rim', 'SMP', '18'),
('E2', 'Moujtahid', 'moujtahid', 'smp', '18'),
('E3', 'kaslani', 'kaslani', 'sma', '6'),
('E8', 'imane', 'imane', 'smp', '12'),
('E9', 'tarik', 'tarik', 'smi', '19');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`CodeE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
