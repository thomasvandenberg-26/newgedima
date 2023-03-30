-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 30 mars 2023 à 14:56
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `newgedima`
--

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `id_participant` int(11) NOT NULL,
  `nom_participant` varchar(50) NOT NULL,
  `email_participant` varchar(50) NOT NULL,
  `mdp_participant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`id_participant`, `nom_participant`, `email_participant`, `mdp_participant`) VALUES
(1, 'vandenbergthomas', 'vandenbergthomas@hotmail.fr', '26270'),
(2, 'vandenbergthomas', 'vandenbergthomas@hotmail.fr', '26270');

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

CREATE TABLE `realisation` (
  `id_realisation` int(11) NOT NULL,
  'id_participant' int(11) NOT NULL,
  `titre_rea` varchar(500) DEFAULT NULL,
  `description_rea` varchar(500) DEFAULT NULL,
  `date_rea` date DEFAULT NULL,
  `date_participation` date DEFAULT NULL,
  `url_rea` varchar(500) NOT NULL,
  `nbJaime` int(11) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisation`
--

INSERT INTO `realisation` (`id_realisation`, `titre_rea`, `description_rea`, `date_rea`, `date_participation`, `url_rea`, `nbJaime`) VALUES
(4, 'Meuble salon', 'meuble en acacia', '2022-12-07', '2022-12-16', '/web/assets/photos/petit-meuble-de-rangement.jpg', 8),
(5, 'Meuble salle de bain', 'meuble en rotin', '2022-12-07', '2022-12-16', '/web/assets/photos/fauteuil-en-rotin.jpg', 9),
(6, 'meuble tv', 'meuble en pin', '2022-12-14', '2022-12-17', '/web/assets/photos/meuble tv.jpg', 7);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_participant`);

--
-- Index pour la table `realisation`
--
ALTER TABLE `realisation`
  ADD PRIMARY KEY (`id_realisation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `realisation`
--
ALTER TABLE `realisation`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
