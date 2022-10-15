-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 15 oct. 2022 à 08:49
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
-- Base de données : `wishflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `continue_film`
--

DROP TABLE IF EXISTS `continue_film`;
CREATE TABLE IF NOT EXISTS `continue_film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `nom_film` text NOT NULL,
  `image_film` text NOT NULL,
  `token` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `continue_film`
--

INSERT INTO `continue_film` (`id`, `user_id`, `film_id`, `nom_film`, `image_film`, `token`) VALUES
(1, 2, 2, '', '', ''),
(2, 2, 2, '', '', ''),
(3, 1, 2, '', '', ''),
(4, 8, 2, '', '', ''),
(5, 8, 3, '', '', ''),
(6, 8, 3, '', '', ''),
(7, 8, 4, '', '', ''),
(8, 8, 4, '', '', ''),
(9, 8, 4, 'Uncharted', 'https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg', ''),
(10, 8, 5, 'Uncharted', 'https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg', ''),
(11, 8, 5, 'Uncharted', 'https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg', ''),
(12, 8, 5, 'Uncharted', 'https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg', '0a3b89acca0e5a2b5a73b33884ee5ee2afc84c5a7211d06cc32ae3e8d947e8dec3d1c47b69e4eb59b468ee1b5dd0f3d892a71eb58e777c200fe004ca3619c055'),
(18, 8, 5, 'Uncharted', '<a href=\"\" ><img src=\"https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg\"/><br>Uncharted</a>', '0a3b89acca0e5a2b5a73b33884ee5ee2afc84c5a7211d06cc32ae3e8d947e8dec3d1c47b69e4eb59b468ee1b5dd0f3d892a71eb58e777c200fe004ca3619c055'),
(17, 8, 5, '<p>Uncharted</p>', '<a href=\"\" ><img src=\"https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg\"/><br>Uncharted</a>', '0a3b89acca0e5a2b5a73b33884ee5ee2afc84c5a7211d06cc32ae3e8d947e8dec3d1c47b69e4eb59b468ee1b5dd0f3d892a71eb58e777c200fe004ca3619c055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
