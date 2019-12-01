-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 01 déc. 2019 à 23:34
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chanty`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`mail`, `mdp`) VALUES
('tray@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(900) NOT NULL,
  `delais` int(50) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `Note` int(5) NOT NULL,
  `id_location` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `photo2` varchar(100) DEFAULT NULL,
  `photo3` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `libelle`, `description`, `delais`, `etat`, `prix`, `adresse`, `date`, `Note`, `id_location`, `id_categorie`, `id_user`, `photo`, `photo2`, `photo3`) VALUES
(1, 'Depannage chauffage centrale', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 2, '0', '99', 'Route manzel chaker km 4', '2019-11-11', 5, 1, 1, 2, 'chauffage.jpg', 'chauffage1.jpg', 'chauffage2.jpg'),
(2, 'Construction d\'un mur', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 7, '0', '90', 'route menzel chaker km 4', '2019-11-10', 0, 2, 1, 1, 'wall.jpg', NULL, NULL),
(3, 'ddd', 'ffd', 2, '0', '12', 'fdfd', '2019-11-17', 0, 2, 2, 1, 'company-logo-03a.png', NULL, NULL),
(4, 'ssss', 'fff', 3, '0', '34', 'fff', '2019-12-02', 0, 2, 3, 1, 'mm2.jpg', '73404022_451102948862114_2073825469974708224_n.jpg', 'mm.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`, `photo`) VALUES
(2, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(3, 'Jardinage', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(4, 'Amenagement', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(5, 'Menuiserie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(6, 'Peinture', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `nom`, `photo`) VALUES
(1, 'Sfax', 'sfax.jpg'),
(2, 'Gabes', 'gabes.jpg'),
(3, 'Sidi bouzid', 'sidibouzid.jpg'),
(4, 'Jendouba', 'jendouba.jpg'),
(5, 'Siliana', 'siliana.jpg'),
(6, 'Tunis', 'tunis.jpg'),
(7, 'Ben Arous', 'benarous.jpg'),
(8, 'Ariana', 'ariana.jpg'),
(9, 'Beja', 'beja.jpg'),
(10, 'Bizerte', 'bizerte.jpg'),
(11, 'Gafsa', 'gafsa.jpg'),
(12, 'Kairouan', 'kairouan.jpg'),
(13, 'Kasserine', 'kasserine.jpg'),
(14, 'Kebili', 'kebili.jpg'),
(15, 'Kef', 'kef.jpg'),
(16, 'Mahdia', 'mahdia.jpg'),
(17, 'Manouba', 'manouba.jpg'),
(18, 'Mednine', 'mednine.jpg'),
(19, 'Monastir', 'monastir.jpg'),
(20, 'Nabeul', 'nabeul.jpg'),
(21, 'Sousse', 'sousse.jpg'),
(22, 'Tataouine', 'tataouine.jpg'),
(23, 'Tozeur', 'tozeur.jpg'),
(24, 'Zaghouan', 'zaghouan.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `num_tel` int(20) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `photo_verif` varchar(250) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `etat` tinyint(50) DEFAULT NULL,
  `date_inscrit` date DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(250) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `num_tel`, `photo`, `photo_verif`, `mdp`, `etat`, `date_inscrit`, `date_naiss`, `adresse`, `ville`, `type`) VALUES
(1, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 23698520, 'user-avatar-big-01.jpg', 'n/a', '123', 1, '2019-11-13', '1996-11-20', 'Route Lafrane km 4', 'sfax', 'jobbeur'),
(2, 'Anis', 'Mrabet', 'Anis.mrabet@gmail.com', 23435565, 'user-avatar-big-01.jpg', NULL, 'sss', 0, NULL, NULL, NULL, NULL, 'jobbeur'),
(3, NULL, NULL, 'trigui.mohamed96@gmail.com', NULL, NULL, NULL, 'xxxxx', 0, NULL, NULL, NULL, NULL, 'jobbeur'),
(4, NULL, NULL, 'trigui.mohamed96@gmail.com', NULL, NULL, NULL, '123', NULL, NULL, NULL, NULL, NULL, 'demandeur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
