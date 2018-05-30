-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 08:47 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `login` varchar(20) NOT NULL,
  `passwd` varchar(512) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `dateInscription` date DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `telFixe` varchar(10) DEFAULT NULL,
  `telPort` varchar(10) DEFAULT NULL,
  `cRole` int(1) DEFAULT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`login`, `passwd`, `nom`, `prenom`, `dateNaissance`, `dateInscription`, `adresse`, `mail`, `telFixe`, `telPort`, `cRole`, `gender`) VALUES
('user', '$2y$10$HRTUSFZG4IdMeUIxT3vBWeC6QVEXsbdmWjdU/DxvFKIcc9pmjrmYm', 'user', 'user', NULL, NULL, '16', 'user@user.fr', NULL, NULL, 0, 'm'),
('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'TESt', 'CYRIL', NULL, NULL, '16 ALLEE DES SERRES', 'cycy1402@hotmail.fr', NULL, NULL, 1, 'm'),
('test', '$2y$10$0T5OB6gYIiL1l9xJbvV2gubx2/qmAEKNrXQjaQqLnjV.7D.uFJhKy', 'VELLA', 'CYRIL', NULL, NULL, '16 ALLEE DES SERRES', 'cycy1402@hotmail.fr', NULL, NULL, 0, 'm'),
('user1', '780d06d3a2af1b22aa2f657aa1385e3813a9d2ecc16edffb23f6e30b05dc4b45', 'VELLA', 'CYril', NULL, NULL, '16 ALLEE DES SERRES', 'cycy1402@hotmail.fr', NULL, NULL, 0, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(10) NOT NULL,
  `adresseLivraison` varchar(50) DEFAULT NULL,
  `adresseFacturation` varchar(50) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`idCommande`, `adresseLivraison`, `adresseFacturation`, `login`) VALUES
(12, NULL, NULL, 'admin'),
(13, NULL, NULL, 'admin'),
(14, NULL, NULL, 'admin'),
(15, NULL, NULL, 'admin'),
(16, NULL, NULL, 'admin'),
(17, NULL, NULL, 'admin'),
(18, NULL, NULL, 'admin'),
(19, NULL, NULL, 'admin'),
(20, NULL, NULL, 'admin'),
(21, NULL, NULL, 'admin'),
(22, NULL, NULL, 'admin'),
(23, NULL, NULL, 'admin'),
(24, NULL, NULL, 'admin'),
(25, NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `login` varchar(20) NOT NULL,
  `idProduit` int(10) NOT NULL,
  `commentaire` varchar(100) DEFAULT NULL,
  `note` int(2) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `dateModif` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `idCommande` int(10) NOT NULL,
  `paiement` varchar(10) DEFAULT NULL,
  `methodeLivraison` varchar(10) DEFAULT NULL,
  `etapeLivraison` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailscommande`
--

INSERT INTO `detailscommande` (`idCommande`, `paiement`, `methodeLivraison`, `etapeLivraison`) VALUES
(1, '2', '2', '2'),
(2, '2', '2', '2'),
(3, 'cb', 'Mondial re', 'En transit'),
(4, 'cb', 'Mondial re', 'En transit'),
(5, 'cb', 'Mondial re', 'En transit'),
(6, 'paypal', 'Mondial re', 'En transit'),
(7, 'cb', 'Mondial re', 'En transit');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `login` varchar(20) NOT NULL,
  `idProduit` int(10) NOT NULL,
  `quantite` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`login`, `idProduit`, `quantite`) VALUES
('admin', 1, 12),
('admin', 4, 2),
('admin', 11, 8),
('admin', 13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(10) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `provenance` varchar(15) DEFAULT NULL,
  `contenanceCL` int(2) DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `image` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `nom`, `prix`, `description`, `provenance`, `contenanceCL`, `stock`, `image`) VALUES
(21, 'Canette Marignane', 7, 'Ceci est la fameuse canette de Marignane', 'Marignane', 200, 3, 'c'),
(7, 'TEST', 6, NULL, 'Message de test', NULL, NULL, 'N'),
(8, 'TEST', 6, NULL, 'Message de test', NULL, NULL, 'N'),
(9, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(10, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(11, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(12, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(13, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(14, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(15, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(16, 'Canette Rouen', 6, 'Canette degeulasse', 'Message de test', 8, 8, 'N'),
(17, 'EEEE', 99, 'Mess', 'MARSEILLE', 12, 2, 'N'),
(18, 'EEEE', 99, 'Mess', 'MARSEILLE', 12, 2, 'NC'),
(19, 'EEEE', 99, 'Mess', 'MARSEILLE', 12, 2, 'NC'),
(20, 'EEEE', 99, 'Mess', 'MARSEILLE', 12, 2, 'NC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `FK_commande_client` (`login`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`login`,`idProduit`),
  ADD KEY `FK_comm_produit` (`idProduit`);

--
-- Indexes for table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`idCommande`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`login`,`idProduit`),
  ADD KEY `FK_panier_produit` (`idProduit`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `detailscommande`
--
ALTER TABLE `detailscommande`
  MODIFY `idCommande` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
