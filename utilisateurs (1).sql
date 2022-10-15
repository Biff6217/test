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
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `password_retype` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `password_retype`, `ip`, `token`, `date_inscription`) VALUES
(11, 'azertyuiopqsdfghjklm', 'zsx@zsx.c', '$2y$12$z4AI35UDvJ6.BnY73eUSgu.81O3hqqjW66s1EdYtjpRxuhZDO6h0C', 'zsx', '::1', '037e96bb263e73659f7dfa0ad4a23d83d4e8b9da436af0f9c4e6c33bc56c56e8d939d998a532e5e2ffb4c895f0a9e0d5fbaa96f1cbc0219b204efec5bc2b7d4c', '2022-09-18 21:27:01'),
(10, 'azerty', 'azerty@azerty.c', '$2y$12$E8ehxmiQupGqqtttCpS8ruGkEPF2lLuGJRxAP5hynPnY5YRLTj0Ei', 'azerty', '::1', 'ad50329e7ba66e9fa1d1f2885e8a8ef8c6622dfcd9dc206a3a0978133969cec67198090c4b43cbd86b2f429394e682d1c4997d88eedc4419153b556e1e176ca2', '2022-09-18 21:09:57'),
(0, 'Guest', 'pas@pas.pas', 'pas', 'pas', '::1', '7224db79175426f1929d99dc9f376cb7d6bca08d69102a05054fcf53987ced4b57e66c32606f6178b3ee3b81b7e5aac8810cd4ef9d9c5936e3f2a893bf9c8efb', '2022-09-15 21:33:21'),
(8, 'aze', 'aze@aze.c', '$2y$12$TVXgxfp8byY2ZGkdCe7uxOvGb5say.7zaUp.uvjufHv7bWQDy13uK', 'aze', '::1', '0a3b89acca0e5a2b5a73b33884ee5ee2afc84c5a7211d06cc32ae3e8d947e8dec3d1c47b69e4eb59b468ee1b5dd0f3d892a71eb58e777c200fe004ca3619c055', '2022-09-15 18:06:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
