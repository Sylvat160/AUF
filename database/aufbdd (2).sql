-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 01 mai 2022 à 00:21
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
-- Structure de la table `admin_account`
--

DROP TABLE IF EXISTS `admin_account`;
CREATE TABLE IF NOT EXISTS `admin_account` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin_account`
--

INSERT INTO `admin_account` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`) VALUES
(10, 'TAGNABOU', 'Sylvain', 'sylvaintagnabou@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `identifiants`
--

INSERT INTO `identifiants` (`id`, `nom`, `prenoms`, `date_de_naissance`, `numero`, `email`, `date_d_abonnement`) VALUES
(1, 'TAGNABOU', 'Sylvain', '2020-11-05', '55831383', 'sylvat160@gmail.com', '2022-04-22'),
(2, 'GAUCHE', 'Laplume', '2022-04-12', '74055335', 'plulegauche@yahoo.fr', '2022-04-28'),
(3, 'Flutter', 'Dart', '2021-06-08', '54199696', 'flutter@gmail.fr', '2022-03-27'),
(4, 'Ilboudo', 'Souleymane', '2002-01-02', '55993984', 'ilboudoaphro@gmail.com', '2022-04-08'),
(5, 'some', 'nadine', '2000-02-08', '70461621', 'somenadine683@gmail.com', '2012-01-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
