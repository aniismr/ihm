-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 24 nov. 2019 à 15:32
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
  `Note` int(5) NOT NULL,
  `id_location` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `libelle`, `description`, `delais`, `etat`, `prix`, `adresse`, `date`, `Note`, `id_location`, `id_categorie`, `id_user`) VALUES
(1, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 2, '0', '99', 'Route manzel chaker km 4', '2019-11-11', 5, 1, 0, 0),
(2, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 7, '0', '90', 'route menzel chaker km 4', '2019-11-10', 0, 2, 0, 0),
(3, 'ddd', 'ffd', 2, '0', '12', 'fdfd', '2019-11-17', 0, 2, 2, 1);

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
(1, 'menuiserie aluminium', 'Software Engineer, Web / Mobile Developer & More', 'icon-line-awesome-file-code-o\r\n'),
(2, 'Plomberie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(3, 'Jardinage', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(4, 'Amenagement', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(5, 'Menuiserie', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n'),
(6, 'Peinture', 'Plomberie, Etanchité, Plomberie, Etanchité', 'icon-line-awesome-file-code-o\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `num_tel`, `photo`, `photo_verif`, `mdp`, `etat`, `date_inscrit`, `date_naiss`, `adresse`, `ville`, `type`) VALUES
(1, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 23698520, 'user-avatar-big-01.jpg', 'n/a', '123', 0, '2019-11-13', '1996-11-20', 'Route Lafrane km 4', 'sfax', 'jobbeur');

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
-- Index pour la table `location`
--
ALTER TABLE `location`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
