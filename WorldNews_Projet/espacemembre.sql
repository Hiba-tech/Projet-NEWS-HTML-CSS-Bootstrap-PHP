-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 jan. 2020 à 16:21
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espacemembre`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mail`, `motdepasse`) VALUES
(1, 'amina.rhaiem', 'amina.rhaiem.94@gmail.com', '70c881d4a26984ddce795f6f71817c9cf4480e79'),
(3, 'amina.rhaiem', 'amina.rhaiem.94@gmail.com', 'c1c93f88d273660be5358cd4ee2df2c2f3f0e8e7'),
(4, 'ss', 'amina.rhaiem.94@gmail.com', 'c1c93f88d273660be5358cd4ee2df2c2f3f0e8e7'),
(5, 'amina.rhaiem', 'amina.rhaiem.94@gmail.com', 'bf9661defa3daecacfde5bde0214c4a439351d4d'),
(6, 'amina.rhaiem', 'amina.rhaiem.94@gmail.com', 'bf9661defa3daecacfde5bde0214c4a439351d4d'),
(7, 'amina.rhaiem', 'amina.rhaiem.94@gmail.com', 'bf9661defa3daecacfde5bde0214c4a439351d4d'),
(8, 'amina.rhaiem', 'amina.rhaiem.94@gmail.com', '91223fd10ce86fc852b449583aa2196c304bf6e0'),
(9, 'amina', 'amina.rhaiem@gmail.com', '75f9c9a7b920b608fb40c3a600f75c82fb335fcc');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
