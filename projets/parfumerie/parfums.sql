-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 01 août 2024 à 20:22
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
-- Base de données : `parfumerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `parfums`
--

CREATE TABLE `parfums` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` decimal(5,2) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `genre` enum('Homme','Femme','Unisexe') NOT NULL,
  `quantite` int(11) NOT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `alcool` tinyint(1) NOT NULL,
  `concentration` enum('Eau de Cologne','Eau de Toilette','Eau de Parfum','Parfum') DEFAULT NULL,
  `description` text,
  `famille_olfactive` varchar(100) DEFAULT NULL,
  `note_de_tete` varchar(100) DEFAULT NULL,
  `note_de_coeur` varchar(100) DEFAULT NULL,
  `note_de_fond` varchar(100) DEFAULT NULL,
  `createur` int(11) DEFAULT '0',
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parfums`
--

INSERT INTO `parfums` (`id`, `nom`, `prix`, `image_path`, `genre`, `quantite`, `couleur`, `alcool`, `concentration`, `description`, `famille_olfactive`, `note_de_tete`, `note_de_coeur`, `note_de_fond`, `createur`, `date_creation`) VALUES
(1, 'Matin Brumeux', '150.00', 'images/fiole.png', 'Unisexe', 50, 'Gris clair', 1, 'Eau de Parfum', 'La fraîcheur délicate d\'un matin couvert de brume, révélant des notes de pin et de musc.', 'Boisé', 'Pin', 'Musc', 'Vétiver', 0, '2024-08-01 19:39:22'),
(2, 'Souffle d’Automne', '130.00', 'images/souffle_dautomne.jpg', 'Unisexe', 50, 'Orange', 1, 'Eau de Parfum', 'Les premières feuilles tombantes infusées d\'une essence de châtaigne et de bois de gaïac.', 'Boisé', 'Châtaigne', 'Bois de gaïac', 'Mousse de chêne', 0, '2024-08-01 19:39:22'),
(3, 'Ombre du Temps', '180.00', 'images/ombre_du_temps.jpg', 'Unisexe', 50, 'Noir', 1, 'Eau de Parfum', 'La profondeur énigmatique des souvenirs avec des nuances de cuir et d\'élémi.', 'Oriental', 'Élémi', 'Cuir', 'Ambre gris', 0, '2024-08-01 19:39:22'),
(4, 'Secret de Boudoir', '169.99', 'images/secret_de_boudoir.jpg', 'Femme', 50, 'Rose', 0, 'Eau de Parfum', 'Un murmure intime de pétales de rose ancienne et de benjoin.', 'Oriental', 'Rose ancienne', 'Benjoin', 'Labdanum', 0, '2024-08-01 19:39:22'),
(5, 'Crépuscule d\'Orient', '170.00', 'images/crepuscule_dorient.jpg', 'Unisexe', 50, 'Pourpre', 1, 'Eau de Parfum', 'Les mystères envoûtants de l\'Orient portés par des notes d\'encens et de safran.', 'Oriental', 'Safran', 'Encens', 'Bois de oud', 0, '2024-08-01 19:39:22'),
(6, 'Clair de Lune', '149.00', 'images/clair_de_lune.jpg', 'Femme', 50, 'Gris clair', 0, 'Eau de Parfum', 'La douceur argentée du jasmin et du bois de cachemire sous la lumière de la lune.', 'Boisé', 'Jasmin', 'Thé blanc', 'Bois de cachemire', 0, '2024-08-01 19:39:22'),
(7, 'Lueur d\'Ambre', '155.00', 'images/lueur_dambre.jpg', 'Unisexe', 50, 'Jaune', 1, 'Eau de Parfum', 'Une lueur dorée d\'ambre et de ciste, évoquant la chaleur et l\'éclat.', 'Oriental', 'Ciste', 'Ambre', 'Myrrhe', 0, '2024-08-01 19:39:22'),
(8, 'Soleil de Minuit', '175.00', 'images/soleil_de_minuit.jpg', 'Unisexe', 50, 'Bleu nuit', 1, 'Eau de Parfum', 'Le mystère d\'une fragance intense, illuminé par des notes de bergamote et de musc blanc.', 'Boisé', 'Bergamote', 'Musc blanc', 'Cèdre de l\'Atlas', 0, '2024-08-01 19:39:22'),
(9, 'Volutes de Fumée', '165.50', 'images/volutes_de_fumee.jpg', 'Unisexe', 50, 'Gris fumé', 1, 'Eau de Parfum', 'Des volutes de fumée de tabac et de bois de hô, captivantes et intrigantes.', 'Boisé', 'Tabac', 'Bois de hô', 'Ciste', 0, '2024-08-01 19:39:22'),
(10, 'Énigme Victorienne', '199.99', 'images/enigme_victorienne.jpg', 'Unisexe', 50, 'Vert foncé', 1, 'Eau de Parfum', 'Un parfum mystérieux inspiré par les intrigues victoriennes, avec des notes de bergamote et de vétiver.', 'Boisé', 'Bergamote', 'Vétiver', 'Patchouli', 0, '2024-08-01 19:39:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `parfums`
--
ALTER TABLE `parfums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `parfums`
--
ALTER TABLE `parfums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
