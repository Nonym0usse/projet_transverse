-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 07:28 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_creatoke`
--

-- --------------------------------------------------------

--
-- Table structure for table `chansons`
--

CREATE TABLE `chansons` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `style` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `source` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `descriptionen` text CHARACTER SET utf8,
  `nblecture` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `types` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lectureoeuvre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `online` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sourcecreatoke` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `enavant` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lyrics` text,
  `lyricsen` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diaporama`
--

CREATE TABLE `diaporama` (
  `id` int(11) NOT NULL,
  `diapo1` varchar(64) NOT NULL,
  `diapo2` varchar(64) NOT NULL,
  `diapo3` varchar(64) NOT NULL,
  `diapo4` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diaporama`
--

INSERT INTO `diaporama` (`id`, `diapo1`, `diapo2`, `diapo3`, `diapo4`) VALUES
(1, 'upload/img/100_0224.JPG', 'upload/img/100_0223.JPG', 'upload/img/100_0232.JPG', 'upload/img/100_0221.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `image_chanson`
--

CREATE TABLE `image_chanson` (
  `id` int(11) NOT NULL,
  `image` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_chanson`
--

INSERT INTO `image_chanson` (`id`, `image`) VALUES
(1, 'NC'),
(2, 'upload/img/100_0224.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `id` int(11) NOT NULL,
  `nom_fr` varchar(64) NOT NULL,
  `nom_en` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`id`, `nom_fr`, `nom_en`) VALUES
(1, 'rap', 'rap'),
(2, 'Jazz', 'Jazz'),
(3, 'Jazz', 'Jazz'),
(4, 'Jazz', 'Jazz'),
(5, 'USA', 'USA'),
(6, 'USA', 'USA'),
(7, 'USA', 'USA'),
(8, 'USA', 'USA'),
(9, 'USA', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `text_fr`
--

CREATE TABLE `text_fr` (
  `id` int(11) NOT NULL,
  `titre1` varchar(64) NOT NULL,
  `titre2` varchar(64) NOT NULL,
  `texte1` varchar(1024) NOT NULL,
  `texte2` varchar(1024) NOT NULL,
  `titre3` varchar(64) NOT NULL,
  `texte3` varchar(1024) NOT NULL,
  `titre4` varchar(512) NOT NULL,
  `texte4` varchar(512) NOT NULL,
  `titre5` varchar(512) NOT NULL,
  `texte5` varchar(512) NOT NULL,
  `titre6` varchar(512) NOT NULL,
  `texte6` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chansons`
--
ALTER TABLE `chansons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diaporama`
--
ALTER TABLE `diaporama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_chanson`
--
ALTER TABLE `image_chanson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_fr`
--
ALTER TABLE `text_fr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chansons`
--
ALTER TABLE `chansons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `diaporama`
--
ALTER TABLE `diaporama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `image_chanson`
--
ALTER TABLE `image_chanson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `text_fr`
--
ALTER TABLE `text_fr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
