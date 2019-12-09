-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 04:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `id_user` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `libelle`, `description`, `delais`, `etat`, `prix`, `adresse`, `date`, `Note`, `id_location`, `id_categorie`, `id_user`, `photo`, `photo2`, `photo3`) VALUES
(1, 'Construction mur', 'Construction d\'un mur de cloture', 2, '0', '99', 'Route manzel chaker km 4', '2019-11-11', 5, 1, 1, 1, 'mur.jpg', 'mur2.jpg', 'mur3.jpg'),
(2, 'fenetre en alimunium', 'Construction d\'une fenetre en aliminium 40cm /60com ', 7, '0', '90', 'route mahdia km 6', '2019-11-10', 0, 2, 1, 60, 'fen.jpg', 'fen2.jpg', 'fen3.jpg'),
(3, 'Reparation chauffage', 'Besoin de reparation d\'un chauffage', 2, '0', '12', 'Route matar km 2', '2019-11-17', 0, 2, 2, 1, 'chauffage.jpg', 'chauf.jpg', 'chauf1.jpg'),
(4, 'hello', 'ok', 9, '0', '22', 'aaa', '2019-12-02', 0, 2, 4, 1, '', '', ''),
(5, 'test', '', 0, '0', '400', '', '2019-12-02', 0, 1, 2, 1, '', '', '');

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
(1, 'Sfax', 'sfax.jpg'),
(2, 'Gabes', 'gabes.jpg'),
(3, 'Sidi bouzid', 'sidibouzid.jpg'),
(4, 'Touzeur', 'tozeur.jpg'),
(5, 'Gafsa', 'gafsa.jpg'),
(6, 'Zaghouan', 'zaghouan.jpg'),
(7, 'Tunis', 'tunis.jpg'),
(8, 'Ariana', 'ariana.jpg'),
(9, 'Ben Arous', 'benarous.jpg'),
(10, 'Beja', 'beja.jpg'),
(11, 'Jandouba', 'jendouba.jpg'),
(12, 'Kasserine', 'kasserine.jpg'),
(13, 'Kef', 'kef.jpg'),
(14, 'Sousse', 'sousse.jpg'),
(15, 'Mahdia', 'mahdia.jpg'),
(16, 'Monastir', 'monastir.jpg'),
(17, 'Nabeul', 'nabeul.jpg'),
(18, 'Mednine', 'mednine.jpg'),
(19, 'Tataouine', 'tataouine.jpg'),
(20, 'Kebili', 'kebili.jpg'),
(21, 'Kairouan', 'kairouan.jpg'),
(22, 'Bizerte', 'bizerte.jpg'),
(23, 'Siliana', 'siliana.jpg\r\n'),
(24, 'Manouba', 'manouba.jpg');

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
(1, 3, 'Zabran'),
(2, 2, 'Jaab'),
(3, 3, 'Sa9yen'),
(4, 3, 'Zar3an'),
(5, 2, 'la7men\r\n');

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
-- Table structure for table `skilluser`
--

CREATE TABLE `skilluser` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skilluser`
--

INSERT INTO `skilluser` (`id`, `id_user`, `id_skill`) VALUES
(8, 60, 1),
(10, 67, 1),
(11, 68, 2),
(12, 68, 3),
(14, 1, 2),
(18, 70, 1),
(19, 1, 2),
(20, 1, 2),
(21, 1, 3),
(22, 1, 3);

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
  `type` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sal_min` decimal(10,0) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `num_tel`, `photo`, `photo_verif`, `mdp`, `etat`, `date_inscrit`, `date_naiss`, `adresse`, `ville`, `type`, `description`, `sal_min`, `rate`) VALUES
(1, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 23698520, 'user-avatar-placeholder.png', 'n/a', '123', 0, '2019-11-13', '1996-11-20', 'Route Lafrane km 4', 'Touzeur', 'jobbeur', 'Ahla ', '35', 0),
(60, 'ali', 'choureb', 'Slim.chaari@gmail.com', 23246639, 'user-avatar-placeholder.png', '', 'zaazza', 0, '2019-12-01', '0000-00-00', 'route rbat', 'sfax', 'utilisateur', '', '35', 0),
(61, 'Slar', 'lzeza', 'Slim.chaari@gmail.com', 23246639, 'user-avatar-placeholder.png', '', 'zaazza', 0, '2019-12-01', '0000-00-00', '', '', 'utilisateur', '', '35', 0),
(62, 'Slar', 'lzeza', 'Slim.chaari@gmail.com', 23246639, 'user-avatar-placeholder.png', '', 'zaazza', 0, '2019-12-01', '0000-00-00', '', '', 'utilisateur', '', '35', 0),
(63, 'Slar', 'lzeza', 'Slim.chaari@gmail.com', 23246639, 'user-avatar-placeholder.png', '', 'zaazza', 0, '2019-12-01', '0000-00-00', '', '', 'utilisateur', '', '35', 0),
(64, 'Slar', 'lzeza', 'Slim.chaari@gmail.com', 23246688, 'user-avatar-placeholder.png', '', 'zaazza', 0, '2019-12-01', '0000-00-00', '', '', 'utilisateur', '', '35', 0),
(65, 'Slar', 'lzeza', 'Slim.chaari@gmail.com', 23246637, 'user-avatar-placeholder.png', '', 'zaazza', 0, '2019-12-01', '0000-00-00', '', '', 'utilisateur', '', '35', 0),
(66, 'Slar', 'lzeza', 'Slim.chaari@gmail.com', 23246677, 'user-avatar-placeholder.png', '', 'zaazza', 0, '2019-12-01', '0000-00-00', '', '', 'utilisateur', '', '35', 0),
(67, 'Chaari', 'Slim', 'Slim.chaari@gmail.com', 78412697, 'user-avatar-placeholder.png', '', 'HHH', 0, '2019-12-01', '0000-00-00', '', '', 'jobbeur', '', '35', 0),
(68, 'salah', 'ben atay', 'salah@gmail.com', 21309545, 'user-avatar-placeholder.png', '', '123', 0, '2019-12-01', '0000-00-00', 'route de teniour km4', '', 'jobbeur', '', '35', 0),
(70, 'slim', 'slim', 'slimslim@slim', 54324210, 'user-avatar-placeholder.png', '', '123', 0, '2019-12-02', '0000-00-00', '', 'Sidi bouzid', 'utilisateur', 'aaa', '35', 0),
(71, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 21456789, 'user-avatar-placeholder.png', '', '123', 0, '2019-12-02', '0000-00-00', '', 'Gafsa', 'jobbeur', 'Salem ana fathi j8ol .... Ahla wa sahla', '64', 0),
(72, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 70145365, 'user-avatar-placeholder.png', '', '123', 0, '2019-12-02', '0000-00-00', '', 'Gabes', 'jobbeur', 'Ahla wa sahla ...', '35', 0),
(73, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 0, 'user-avatar-placeholder.png', '', '123', 0, '2019-12-02', '0000-00-00', '', 'Gafsa', 'jobbeur', 'ahlawsahla !!!', '35', 0),
(74, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 0, 'user-avatar-placeholder.png', '', '123', 0, '2019-12-02', '0000-00-00', '', 'Sidi bouzid', 'jobbeur', 'Ajla', '35', 0),
(75, 'Ben Mohamed', 'Semi', 'benmohamed@gmail.com', 0, 'user-avatar-placeholder.png', '', '123', 0, '2019-12-02', '0000-00-00', '', 'Sfax', 'jobbeur', 'jjjj', '35', 0),
(76, 'OK', 'OK', 'OKOK@OK', 0, 'user-avatar-placeholder.png', '', 'OK', 0, '2019-12-02', '0000-00-00', '', 'Touzeur', 'utilisateur', 'HELLO', '66', 0);

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
-- Indexes for table `skilluser`
--
ALTER TABLE `skilluser`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skillannonce`
--
ALTER TABLE `skillannonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skilluser`
--
ALTER TABLE `skilluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
