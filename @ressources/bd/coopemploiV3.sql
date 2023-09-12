-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2023 at 06:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coopemploi`
--

-- --------------------------------------------------------

--
-- Table structure for table `accompagnateurs`
--

CREATE TABLE `accompagnateurs` (
  `codeA` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialisation` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'La spécialisation de l’accompagnateurs ',
  `date_c` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `date_m` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de modification '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accompagnateurs`
--

INSERT INTO `accompagnateurs` (`codeA`, `nom`, `prenom`, `telephone`, `email`, `specialisation`, `date_c`, `date_m`) VALUES
(1, 'pareschi', 'thomas', '0777995137', 'toto41700@hotmail.fr', '', '2023-09-12 19:58:35', '2023-09-12 19:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `lieux`
--

CREATE TABLE `lieux` (
  `CodeL` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse1` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse2` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse3` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse4` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codePostal` int NOT NULL,
  `ville` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneS` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Téléphone de la salle',
  `contact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneC` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Téléphone du contact',
  `Capacite` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Capacité d’accueil de la salle',
  `date_c` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `date_m` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de modification '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lieux`
--

INSERT INTO `lieux` (`CodeL`, `nom`, `adresse1`, `adresse2`, `adresse3`, `adresse4`, `codePostal`, `ville`, `telephoneS`, `contact`, `telephoneC`, `Capacite`, `date_c`, `date_m`) VALUES
(1, 'centreal', '', '', '', '', 41700, 'CHALONS EN CHAMPAGNE', '', 'Thomas', '0777995137', '40', '2023-09-12 20:40:28', '2023-09-12 20:40:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accompagnateurs`
--
ALTER TABLE `accompagnateurs`
  ADD PRIMARY KEY (`codeA`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`CodeL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accompagnateurs`
--
ALTER TABLE `accompagnateurs`
  MODIFY `codeA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `CodeL` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
