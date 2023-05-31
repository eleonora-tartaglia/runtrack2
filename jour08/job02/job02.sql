-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 31 mai 2023 à 11:39
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

CREATE TABLE `etage` (
  `Id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `superficie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etage`
--

INSERT INTO `etage` (`Id`, `nom`, `numero`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'RDC', 0, 500),
(3, 'R+1', 1, 500),
(4, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `Id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Id_etage` int(11) NOT NULL,
  `capacité` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`Id`, `nom`, `Id_etage`, `capacité`) VALUES
(1, 'Lounge\r\n', 1, 100),
(2, 'Lounge\r\n', 1, 100),
(3, 'Studio Son', 1, 5),
(4, 'Studio Son', 1, 5),
(5, 'Broadcasting', 2, 50),
(6, 'Broadcasting', 2, 50),
(7, 'Bocal Peda', 2, 4),
(8, 'Bocal Peda', 2, 4),
(9, 'Coworking', 2, 80),
(10, 'Coworking', 2, 80),
(11, 'Studio Video', 2, 5),
(12, 'Studio Video', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `étudiants`
--

CREATE TABLE `étudiants` (
  `Id` int(11) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `étudiants`
--

INSERT INTO `étudiants` (`Id`, `prénom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Cyril\r\n', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(3, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(5, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
(7, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(9, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(11, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
(13, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etage`
--
ALTER TABLE `etage`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `étudiants`
--
ALTER TABLE `étudiants`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etage`
--
ALTER TABLE `etage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `étudiants`
--
ALTER TABLE `étudiants`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
