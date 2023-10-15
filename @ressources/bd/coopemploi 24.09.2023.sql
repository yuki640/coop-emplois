-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2023 at 01:55 PM
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
-- Table structure for table `p4t1_accompagnateurs`
--

CREATE TABLE `p4t1_accompagnateurs` (
  `acc_ide` int NOT NULL COMMENT 'Identifiant de l''accompagnateur ',
  `acc_nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom ',
  `acc_pre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Prénom ',
  `acc_tel` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Téléphone ',
  `acc_mail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mail ',
  `acc_fon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Fonction, spécialisation ',
  `acc_dcr` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `acc_dmo` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de dernière modification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p4t1_accompagnateurs`
--

INSERT INTO `p4t1_accompagnateurs` (`acc_ide`, `acc_nom`, `acc_pre`, `acc_tel`, `acc_mail`, `acc_fon`, `acc_dcr`, `acc_dmo`) VALUES
(9, 'centreal', 'Thomas', '0504520727', 'toto41700@hotmail.fr', 'SLAM', '2023-09-14 15:16:34', '2023-09-14 15:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_entrepreneur`
--

CREATE TABLE `p4t1_entrepreneur` (
  `ent_ide` int NOT NULL COMMENT 'Identifiant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_lieux`
--

CREATE TABLE `p4t1_lieux` (
  `lie_ide` int NOT NULL COMMENT 'Identifiant ',
  `lie_nom` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom de l''établissement ',
  `lie_ad1` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1 - Service, N°de bureau ou d''étage ',
  `lie_ad2` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '2 - Résidence, Immeuble, Bâtiment, ZI ',
  `lie_ad3` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '3 - Numéro voie, type, nom de la voie ',
  `lie_ad4` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '4 - Mention de distribution (BP,...), Lieu-dit ',
  `lie_cpo` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Code postal',
  `lie_ville` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ville ',
  `lie_tel` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Téléphone de l''établissement ',
  `lie_con` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom du contact ',
  `lie_tco` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Téléphone du contact ',
  `lie_cap` tinyint NOT NULL COMMENT 'Capacité maximale d''accueil de la salle',
  `lie_dcr` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `lie_dmo` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de dernière modification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p4t1_lieux`
--

INSERT INTO `p4t1_lieux` (`lie_ide`, `lie_nom`, `lie_ad1`, `lie_ad2`, `lie_ad3`, `lie_ad4`, `lie_cpo`, `lie_ville`, `lie_tel`, `lie_con`, `lie_tco`, `lie_cap`, `lie_dcr`, `lie_dmo`) VALUES
(1, 'centreal', '', '', '', '', '41700', 'CHALONS EN CHAMPAGNE', '', 'Thomas', '0777995137', 40, '2023-09-12 18:40:28', '2023-09-12 18:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_reunion`
--

CREATE TABLE `p4t1_reunion` (
  `reu_ide` int NOT NULL,
  `reu_dat` date NOT NULL,
  `reu_heu` time NOT NULL,
  `reu_dur` time DEFAULT NULL,
  `reu_lie` int NOT NULL,
  `reu_cap` smallint NOT NULL,
  `reu_pre` text COLLATE utf8mb4_unicode_ci,
  `reu_acc` int NOT NULL,
  `reu_pub` tinyint(1) NOT NULL,
  `reu_dcr` timestamp NULL DEFAULT NULL,
  `reu_dmo` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_utilisateur`
--

CREATE TABLE `p4t1_utilisateur` (
  `uti_ide` int NOT NULL COMMENT 'Identifiant',
  `uti_log` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Login de connexion',
  `uti_mdp` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mot de passe de connexion (chiffré)',
  `uti_ide_acc` int NOT NULL COMMENT 'Identifiant accompagnateur',
  `uti_ide_ent` int NOT NULL COMMENT 'Identifiant entrepreneur',
  `uti_dcr` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `uti_dmo` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date de dernière modification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p4t1_accompagnateurs`
--
ALTER TABLE `p4t1_accompagnateurs`
  ADD PRIMARY KEY (`acc_ide`),
  ADD UNIQUE KEY `email` (`acc_mail`);

--
-- Indexes for table `p4t1_entrepreneur`
--
ALTER TABLE `p4t1_entrepreneur`
  ADD PRIMARY KEY (`ent_ide`);

--
-- Indexes for table `p4t1_lieux`
--
ALTER TABLE `p4t1_lieux`
  ADD PRIMARY KEY (`lie_ide`);

--
-- Indexes for table `p4t1_reunion`
--
ALTER TABLE `p4t1_reunion`
  ADD PRIMARY KEY (`reu_ide`),
  ADD KEY `reu_lie` (`reu_lie`),
  ADD KEY `reu_acc` (`reu_acc`);

--
-- Indexes for table `p4t1_utilisateur`
--
ALTER TABLE `p4t1_utilisateur`
  ADD PRIMARY KEY (`uti_ide`),
  ADD KEY `FK_uti_ide_acc` (`uti_ide_acc`),
  ADD KEY `FK_uti_ide_ent` (`uti_ide_ent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p4t1_accompagnateurs`
--
ALTER TABLE `p4t1_accompagnateurs`
  MODIFY `acc_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''accompagnateur ', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `p4t1_entrepreneur`
--
ALTER TABLE `p4t1_entrepreneur`
  MODIFY `ent_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant';

--
-- AUTO_INCREMENT for table `p4t1_lieux`
--
ALTER TABLE `p4t1_lieux`
  MODIFY `lie_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant ', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p4t1_reunion`
--
ALTER TABLE `p4t1_reunion`
  MODIFY `reu_ide` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p4t1_utilisateur`
--
ALTER TABLE `p4t1_utilisateur`
  MODIFY `uti_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p4t1_reunion`
--
ALTER TABLE `p4t1_reunion`
  ADD CONSTRAINT `p4t1_reunion_ibfk_1` FOREIGN KEY (`reu_lie`) REFERENCES `p4t1_lieux` (`lie_ide`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `p4t1_reunion_ibfk_2` FOREIGN KEY (`reu_acc`) REFERENCES `p4t1_accompagnateurs` (`acc_ide`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `p4t1_utilisateur`
--
ALTER TABLE `p4t1_utilisateur`
  ADD CONSTRAINT `FK_uti_ide_acc` FOREIGN KEY (`uti_ide_acc`) REFERENCES `p4t1_accompagnateurs` (`acc_ide`),
  ADD CONSTRAINT `FK_uti_ide_ent` FOREIGN KEY (`uti_ide_ent`) REFERENCES `p4t1_entrepreneur` (`ent_ide`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
