-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 13 nov. 2019 à 21:09
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

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
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(900) NOT NULL,
  `delais` int(50) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `Note` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `libelle`, `description`, `delais`, `etat`, `prix`, `adresse`, `date`, `Note`) VALUES
(1, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 2, '0', '99', 'Route manzel chaker km 4', '2019-11-11', 5),
(2, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 7, '0', '90', 'route menzel chaker km 4', '2019-11-10', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`, `photo`) VALUES
(1, 'Web & Software Dev', 'Software Engineer, Web / Mobile Developer & More', 'icon-line-awesome-file-code-o\r\n'),
(2, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(3, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(4, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(5, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(6, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(7, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(8, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(9, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(10, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(11, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(12, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(13, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(14, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(15, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(16, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(17, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(18, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `num_tel` int(20) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `photo_verif` varchar(250) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `etat` tinyint(50) NOT NULL,
  `date_inscrit` date NOT NULL,
  `date_naiss` date NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `num_tel`, `photo`, `photo_verif`, `mdp`, `etat`, `date_inscrit`, `date_naiss`, `adresse`, `ville`, `type`) VALUES
(1, 'Ben Mohamed', 'Semi', 23698520, '/public/images/user-avatar-big-01.jpg', 'n/a', '123', 0, '2019-11-13', '1996-11-20', 'Route Lafrane km 4', 'sfax', 'jobbeur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
