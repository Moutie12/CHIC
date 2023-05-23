-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 mai 2023 à 17:16
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

CREATE TABLE `accessoire` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` varchar(36) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accessoire`
--

INSERT INTO `accessoire` (`id`, `image`, `prix`, `description`) VALUES
(1, '1.jpg', '69.90', 'BESACE MATELASSÉE AVEC CHAÎNE\r\n'),
(2, '2.jpg', '69.90', 'SAC À BANDOULIÈRE MATELASSÉ\r\n'),
(3, '3.jpg', '65.90', 'MINI-SAC EN TOILE\r\n'),
(4, '4.jpg', '79.90', 'SAC À BANDOULIÈRE ANSE CROCO\r\n'),
(5, '5.jpg', '119.00', 'SAC CABAS MOYEN MATELASSÉ\r\n'),
(6, '6.jpg', '65.90', 'POCHETTE DE SOIRÉE À BANDOULIÈRE\r\n'),
(7, '7.jpg', '89.90', 'SAC À DOS ZIPPÉ\r\n'),
(8, '8.jpg', '65.90', 'SAC BESACE FERMOIR\r\n'),
(9, '9.jpg', '65.90', 'BESACE AVEC DOUBLE CHAÎNE\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'moutie', 'moutie123');

-- --------------------------------------------------------

--
-- Structure de la table `chaussure`
--

CREATE TABLE `chaussure` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chaussure`
--

INSERT INTO `chaussure` (`id`, `image`, `prix`, `description`) VALUES
(7, '1.jpg', '139.00', 'BASKETS AVEC DÉTAIL\r\n'),
(8, '2.jpg', '199.00', 'BASKETS CHUNCKY XL'),
(9, '3.jpg', '199.00', 'BASKETS MULTIPIÈCES AVEC DÉTAIL\r\n'),
(10, '4.jpg', '200', 'BASKETS COMBINÉES\r\n'),
(11, '5.jpg', '129.00', 'BASKETS CASUAL RÉTRO\r\n'),
(12, '6.jpg', '179.00', 'BASKETS MULTIPIÈCES\r\n'),
(13, '7.jpg', '129.00', 'BASKETS À SCRATCH\r\n'),
(14, '8.jpg', '129.00', 'BASKETS COMBINÉES\r\n'),
(15, '9.jpg', '136.00', 'BASKETS MONTANTES BLEU DENIM');

-- --------------------------------------------------------

--
-- Structure de la table `chemise`
--

CREATE TABLE `chemise` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chemise`
--

INSERT INTO `chemise` (`id`, `image`, `prix`, `description`) VALUES
(1, '1.jpg', '89.90', 'CHEMISE RUSTIQUE'),
(2, '2.jpg', '89.90', 'CHEMISIER DÉCONTRACTÉ\r\n'),
(3, '3.jpg', '89.90', 'CHEMISE DAILY FLUIDE\r\n'),
(4, '4.jpg', '129.00', 'SURCHEMISE FLUIDE AVEC CEINTURE\r\n'),
(5, '5.jpg', '99.90', 'CHEMISE EN SATIN À REVERS\r\n'),
(6, '6.jpg', '99.90', 'CHEMISE DAILY RUSTIQUE\r\n'),
(7, '7.jpg', '119.00', 'CHEMISIER EN SATIN DRAPÉ\r\n'),
(8, '8.jpg', '129.00', 'CHEMISE OVERSIZE EN SIMILICUIR\r\n'),
(9, '9.jpg', '119.00', 'CHEMISE EN JEAN REGULAR FIT\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `quantité` int(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `email` varchar(56) NOT NULL,
  `adresse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `quantité`, `color`, `email`, `adresse`) VALUES
(1, 0, '', 'moutie@gmail.com', 'kk'),
(2, 0, '', 'bogec@terkoer.com', ''),
(3, 0, '', '', ''),
(4, 0, '', '', ''),
(5, 2, 'bleu', 'bleu@gmail.com', 'espagne'),
(6, 2, 'white', 'webhosthost4@gmail.com', 'tunis');

-- --------------------------------------------------------

--
-- Structure de la table `jeans`
--

CREATE TABLE `jeans` (
  `id` int(11) NOT NULL,
  `image` varchar(163) NOT NULL,
  `prix` varchar(36) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jeans`
--

INSERT INTO `jeans` (`id`, `image`, `prix`, `description`) VALUES
(1, '1.jpg', '129.00', 'JEAN MOM TAILLE MOYENNE'),
(2, '2.jpg', '149.00', 'JEAN CARGO\r\n'),
(3, '3.jpg', '129.00', 'JEAN REGULAR'),
(4, '4.jpg', '149.00', 'Jean 90’s wide leg déchiré'),
(5, '5.jpg', '179.00', 'salopette'),
(6, '6.jpg', '129.00', 'JEAN FLARE STYLE VINTAGE\r\n'),
(8, '7.jpg', '129.00', 'JEAN DROIT'),
(11, '8.jpg', '194.00', 'JEAN CARGO STRAIGHT'),
(12, '9.jpg', '129.00', 'Jean 90’s wide leg déchiré');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'moutie@gmail.com', 'moutie123');

-- --------------------------------------------------------

--
-- Structure de la table `manteaux`
--

CREATE TABLE `manteaux` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `manteaux`
--

INSERT INTO `manteaux` (`id`, `image`, `prix`, `description`) VALUES
(2, '2.jpg', '119.00', 'TRENCH FLUIDE LONG'),
(3, '3.jpg', '179.00', 'TRENCH COURT FLUIDE\r\n'),
(4, '4.jpg', '149.00', 'TRENCH COURt'),
(5, '5.jpg', '259.00', 'MANTEAU BASIQUE EN\r\nLAINE MÉLANGÉE'),
(6, '6.jpg', '149.00', 'MANTEAU EN MAILLE GRATTÉE\r\n'),
(7, '7.jpg', '299.00', 'MANTEAU COURT EN\r\nLAINE MÉLANGÉE À CAPUCHE\r\nEN FAUSSE FOURRURE'),
(8, '8.jpg', '359.00', 'MANTEAU EN LAINE\r\nMÉLANGÉE ET BOUTONS'),
(9, '9.jpg', '299.00', 'MANTEAU EN LAINE\r\nMÉLANGÉE CEINTURE'),
(10, '1.jpg', '299.0', 'TRENCH SERGÉ');

-- --------------------------------------------------------

--
-- Structure de la table `pantalon`
--

CREATE TABLE `pantalon` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pantalon`
--

INSERT INTO `pantalon` (`id`, `image`, `prix`, `description`) VALUES
(7, '1.jpg', '120', 'PANTALON HABILLÉ À PINCES\r\n'),
(8, '2.jpg', '100', 'PANTALON HABILLÉ À RAYURES'),
(9, '3.jpg', '100', 'PANTALON HABILLÉ CEINTURE'),
(10, '4.jpg', '119', 'JUPE-CULOTTE EN LYOCELL\r\n'),
(11, '5.jpg', '119', 'PANTALON TAILLE RABATTUE\r\n'),
(12, '6.jpg', '99', 'LEGGINGS FLARE CROPPED\r\n'),
(13, '7.jpg', '119.00', 'PANTALON LARGE FULL LENGTH\r\n'),
(14, '8.jpg', '119.00', 'PANTALON WIDE LEG\r\n'),
(15, '9.jpg', '99.00', 'wide leg with centieur\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `pull`
--

CREATE TABLE `pull` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pull`
--

INSERT INTO `pull` (`id`, `image`, `prix`, `description`) VALUES
(14, '1.jpg', '79.00', 'SANDALES À PLATEFORME AVEC BRIDES'),
(15, '2.jpg', '45.90', 'TOP SANS MANCHES EN COTON\r\n'),
(16, '3.jpg', '65.90', 'TOP MANCHES LONGUES CUT OUT\r\n'),
(17, '4.jpg', '65.90', 'TOP À MANCHES LONGUES\r\nEN DENTELLE TRANSPARENTE'),
(18, '5.jpg', '99.90', 'T-SHIRT EN TULLE AVEC BRILLANTS\r\n'),
(19, '6.jpg', '49.90', 'TOP ASYMÉTRIQUE DÉCOUPÉ\r\n'),
(20, '7.jpg', '129.00', 'TOP RAYÉ À COL ZIPPÉ\r\n'),
(21, '8.jpg', '65.90', 'PULL EN MAILLE À COL MONTANT\r\n'),
(22, '9.jpg', '79.90', 'BODY BASIQUE EN POLYAMIDE\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `robe`
--

CREATE TABLE `robe` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `robe`
--

INSERT INTO `robe` (`id`, `image`, `prix`, `description`) VALUES
(1, '1.jpg', '99.900', 'ROBE MIDI ASYMÉTRIQUE\r\n'),
(2, '2.jpg', '99.900', 'ROBE MIDI CARDÉE AVEC UN COL\r\n'),
(3, '3.jpg', '99.900', 'ROBE COURTE EN MAILLE À BRETELLES\r\n'),
(4, '4.jpg', '149.00', 'ROBE COURTE À GODETS EN SATIN\r\n'),
(5, '5.jpg', '179.00', 'BLAZER ROBE\r\n'),
(6, '6.jpg', '99.90', 'ROBE MIDI DÉCOUPÉE\r\n'),
(7, '7.jpg', '194.90', 'ROBE COURTE IMPRIMÉE\r\n'),
(8, '8.jpg', '194.90', 'ROBE CHEMISE MIDI DENTELLE\r\n'),
(9, '9.jpg', '99.90', 'ROBE BOHO COURTE FLOQUÉE\r\n');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chaussure`
--
ALTER TABLE `chaussure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chemise`
--
ALTER TABLE `chemise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeans`
--
ALTER TABLE `jeans`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `manteaux`
--
ALTER TABLE `manteaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pantalon`
--
ALTER TABLE `pantalon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pull`
--
ALTER TABLE `pull`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `robe`
--
ALTER TABLE `robe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accessoire`
--
ALTER TABLE `accessoire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chaussure`
--
ALTER TABLE `chaussure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `chemise`
--
ALTER TABLE `chemise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `jeans`
--
ALTER TABLE `jeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `manteaux`
--
ALTER TABLE `manteaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `pantalon`
--
ALTER TABLE `pantalon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `pull`
--
ALTER TABLE `pull`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `robe`
--
ALTER TABLE `robe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
