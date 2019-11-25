-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 10:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chanty`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
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
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `libelle`, `description`, `delais`, `etat`, `prix`, `adresse`, `date`, `Note`, `id_location`, `id_categorie`, `id_user`) VALUES
(1, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 2, '0', '99', 'Route manzel chaker km 4', '2019-11-11', 5, 1, 0, 0),
(2, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 7, '0', '90', 'route menzel chaker km 4', '2019-11-10', 0, 2, 0, 0),
(3, 'ddd', 'ffd', 2, '0', '12', 'fdfd', '2019-11-17', 0, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
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
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `nom`, `photo`) VALUES
(1, 'sfax', ''),
(2, 'Gabes', ''),
(3, 'Sidi bouzid', '');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `id_cat`, `nom`) VALUES
(1, 3, 'sa9yen');

-- --------------------------------------------------------

--
-- Table structure for table `skillannonce`
--

CREATE TABLE `skillannonce` (
  `id` int(11) NOT NULL,
  `id_ann` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
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
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `num_tel`, `photo`, `photo_verif`, `mdp`, `etat`, `date_inscrit`, `date_naiss`, `adresse`, `ville`, `type`) VALUES
(1, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 23698520, 'user-avatar-big-01.jpg', 'n/a', '123', 0, '2019-11-13', '1996-11-20', 'Route Lafrane km 4', 'sfax', 'jobbeur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillannonce`
--
ALTER TABLE `skillannonce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skillannonce`
--
ALTER TABLE `skillannonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
