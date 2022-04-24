-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 24 avr. 2022 à 05:56
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
-- Base de données : `aufbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `identifiants`
--

DROP TABLE IF EXISTS `identifiants`;
CREATE TABLE IF NOT EXISTS `identifiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `date_de_naissance` varchar(255) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_d_abonnement` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `identifiants`
--

INSERT INTO `identifiants` (`id`, `nom`, `prenoms`, `date_de_naissance`, `numero`, `email`, `date_d_abonnement`) VALUES
(1, 'TAGNABOU', 'Sylvain', '2020-11-05', '55831383', 'sylvat160@gmail.com', '2022-04-22'),
(2, 'GAUCHE', 'Laplume', '2022-04-12', '74055335', 'plulegauche@yahoo.fr', '2022-04-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
