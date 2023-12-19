-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 01:15 PM
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
-- Database: `coop-emploi`
--

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_accompagnateurs`
--

CREATE TABLE `p4t1_accompagnateurs` (
  `acc_ide` int NOT NULL COMMENT 'Identifiant de l''accompagnateur ',
  `acc_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom ',
  `acc_pre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Prénom ',
  `acc_tel` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Téléphone ',
  `acc_mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mail ',
  `acc_fon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Fonction, spécialisation ',
  `acc_dcr` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `acc_dmo` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de dernière modification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p4t1_accompagnateurs`
--

INSERT INTO `p4t1_accompagnateurs` (`acc_ide`, `acc_nom`, `acc_pre`, `acc_tel`, `acc_mail`, `acc_fon`, `acc_dcr`, `acc_dmo`) VALUES
(9, 'centreal', 'Thomas', '0504520727', 'toto41700@hotmail.fr', 'SLAM', '2023-09-14 15:16:34', '2023-09-14 15:16:34'),
(10, 'pareschi ', 'Thomas', '07 77 99 51 37', 'thomas.pareschi@hotmail.com', 'SLAMM', '2023-10-17 11:20:47', '2023-10-17 11:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_entretien`
--

CREATE TABLE `p4t1_entretien` (
  `ent_ide` int NOT NULL COMMENT 'ID de l''entretien',
  `ent_res` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Compte Rendu de l''entretien',
  `ent_dat` date NOT NULL COMMENT 'Date de l''entretien',
  `ent_acc` int NOT NULL COMMENT 'Identifiant de l''accompagnateur',
  `ent_pdp` int NOT NULL COMMENT 'Identifiant du PDP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_lieux`
--

CREATE TABLE `p4t1_lieux` (
  `lie_ide` int NOT NULL COMMENT 'Identifiant ',
  `lie_nom` varchar(38) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom de l''établissement ',
  `lie_ad1` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1 - Service, N°de bureau ou d''étage ',
  `lie_ad2` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '2 - Résidence, Immeuble, Bâtiment, ZI ',
  `lie_ad3` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '3 - Numéro voie, type, nom de la voie ',
  `lie_ad4` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '4 - Mention de distribution (BP,...), Lieu-dit ',
  `lie_cpo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Code postal',
  `lie_ville` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ville ',
  `lie_tel` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Téléphone de l''établissement ',
  `lie_con` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom du contact ',
  `lie_tco` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Téléphone du contact ',
  `lie_cap` tinyint NOT NULL COMMENT 'Capacité maximale d''accueil de la salle',
  `lie_dcr` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `lie_dmo` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de dernière modification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p4t1_lieux`
--

INSERT INTO `p4t1_lieux` (`lie_ide`, `lie_nom`, `lie_ad1`, `lie_ad2`, `lie_ad3`, `lie_ad4`, `lie_cpo`, `lie_ville`, `lie_tel`, `lie_con`, `lie_tco`, `lie_cap`, `lie_dcr`, `lie_dmo`) VALUES
(1, 'centreal', '', '', '', '', '41700', 'CHALONS EN CHAMPAGNE', '', 'Thomas', '0777995137', 40, '2023-09-12 18:40:28', '2023-09-12 18:40:28'),
(3, 'blois', '', '', '', '', '41700', 'bloissss', '07 77 99 51 37', 'thomas', '07 77 99 51 37', 100, '2023-10-17 12:22:03', '2023-10-17 12:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_porteur_de_projet`
--

CREATE TABLE `p4t1_porteur_de_projet` (
  `pdp_ide` int NOT NULL COMMENT 'ID du porteur de projet',
  `pdp_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom du porteur de projet',
  `pdp_npre` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Prenom du porteur de projet',
  `pdp_ad1` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1- Service,N°de bureau ou d''étage',
  `pdp_ad2` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '2- Résidence, Immeuble, Batiment, ZI',
  `pdp_ad3` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '3- Numéro voie, type, nom de la voie',
  `pdp_ad4` varchar(38) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '4- Mention de distribution (BP,...), lieu-dit',
  `pdp_cpo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Code postal',
  `pdp_vil` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ville',
  `pdp_tel` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Telephone perso de pdp',
  `pdp_por` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Telephone portable perso du pdp',
  `pdp_mai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Email perso du pdp',
  `pdp_dna` date DEFAULT NULL COMMENT 'Dete de naissance',
  `pdp_pri` tinyint(1) DEFAULT '0' COMMENT 'Présence réunion d''info collective',
  `pdp_een` tinyint(1) DEFAULT '0' COMMENT 'Est entrepreneur o/n',
  `pdp_sor` tinyint(1) DEFAULT '0' COMMENT 'Non accepté ou pdp sorti',
  `pdp_reu` int NOT NULL COMMENT 'ID de la réunion d''information collective',
  `pdp_vit` int DEFAULT NULL COMMENT 'ID de la vitrine du pdp',
  `pdp_dcr` timestamp NULL DEFAULT NULL COMMENT 'Date de création de l''occurence',
  `pdp_dmo` timestamp NULL DEFAULT NULL COMMENT 'Date de la derniere modification de l''occurence'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `reu_dcr` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reu_dmo` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p4t1_reunion`
--

INSERT INTO `p4t1_reunion` (`reu_ide`, `reu_dat`, `reu_heu`, `reu_dur`, `reu_lie`, `reu_cap`, `reu_pre`, `reu_acc`, `reu_pub`, `reu_dcr`, `reu_dmo`) VALUES
(2, '2023-10-18', '16:00:00', '03:00:00', 3, 20, 'presentation', 9, 1, '2023-10-17 11:21:57', '2023-10-17 11:21:57'),
(3, '2023-10-25', '15:00:00', '05:00:00', 3, 70, 'presentation', 10, 1, '2023-10-24 09:10:00', '2023-10-24 09:10:00'),
(4, '2024-12-23', '15:00:00', '02:00:00', 3, 20, 'Présentation', 10, 1, '2023-12-14 14:33:56', '2023-12-14 14:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_utilisateur`
--

CREATE TABLE `p4t1_utilisateur` (
  `uti_ide` int NOT NULL COMMENT 'Identifiant',
  `uti_log` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Login de connexion',
  `uti_mdp` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mot de passe de connexion (chiffré)',
  `uti_ide_acc` int DEFAULT NULL COMMENT 'Identifiant accompagnateur',
  `uti_ide_ent` int DEFAULT NULL COMMENT 'Identifiant entrepreneur',
  `uti_dcr` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de création',
  `uti_dmo` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date de dernière modification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p4t1_vitrine`
--

CREATE TABLE `p4t1_vitrine` (
  `vit_ide` int NOT NULL COMMENT 'Identifiant de la vitrine(relation 1.1 -1.1)',
  `vit_pse` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Pseudo, Nom d''artiste',
  `vit_nco` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Nom commercial de la structure',
  `vit_slo` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Slogan',
  `vit_tpro` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Téléphone Professionel',
  `vit_mpro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mail Professionel',
  `vit_met` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Métier(s) proposé(s)',
  `vit_pac` text COLLATE utf8mb4_unicode_ci COMMENT 'Présentation de l''activité',
  `vit_cli` text COLLATE utf8mb4_unicode_ci COMMENT 'Présentation des principaux clients',
  `vit_ref` text COLLATE utf8mb4_unicode_ci COMMENT 'Les principales références',
  `vit_rso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lien vers réseau social public',
  `vit_lin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lien vers espace Linkedin',
  `vit_pwe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lien vers page web / Portefolio',
  `vit_pho` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lien vers photo du PDP',
  `vit_log` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lien vers logo de l''entreprise',
  `vit_pub` tinyint(1) DEFAULT '0' COMMENT 'Publiée ou non',
  `vit_dcr` timestamp NULL DEFAULT NULL COMMENT 'Date de création de l''occurence',
  `vit_dmo` timestamp NULL DEFAULT NULL COMMENT 'Date de modification de l''occurence'
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
-- Indexes for table `p4t1_entretien`
--
ALTER TABLE `p4t1_entretien`
  ADD PRIMARY KEY (`ent_ide`),
  ADD KEY `fk_ent_acc` (`ent_acc`),
  ADD KEY `fk_ent_pdp` (`ent_pdp`);

--
-- Indexes for table `p4t1_lieux`
--
ALTER TABLE `p4t1_lieux`
  ADD PRIMARY KEY (`lie_ide`);

--
-- Indexes for table `p4t1_porteur_de_projet`
--
ALTER TABLE `p4t1_porteur_de_projet`
  ADD PRIMARY KEY (`pdp_ide`),
  ADD KEY `fk_pdp_reu` (`pdp_reu`),
  ADD KEY `fk_pdp_vit` (`pdp_vit`);

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
-- Indexes for table `p4t1_vitrine`
--
ALTER TABLE `p4t1_vitrine`
  ADD PRIMARY KEY (`vit_ide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p4t1_accompagnateurs`
--
ALTER TABLE `p4t1_accompagnateurs`
  MODIFY `acc_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''accompagnateur ', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `p4t1_entretien`
--
ALTER TABLE `p4t1_entretien`
  MODIFY `ent_ide` int NOT NULL AUTO_INCREMENT COMMENT 'ID de l''entretien';

--
-- AUTO_INCREMENT for table `p4t1_lieux`
--
ALTER TABLE `p4t1_lieux`
  MODIFY `lie_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant ', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p4t1_porteur_de_projet`
--
ALTER TABLE `p4t1_porteur_de_projet`
  MODIFY `pdp_ide` int NOT NULL AUTO_INCREMENT COMMENT 'ID du porteur de projet';

--
-- AUTO_INCREMENT for table `p4t1_reunion`
--
ALTER TABLE `p4t1_reunion`
  MODIFY `reu_ide` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p4t1_utilisateur`
--
ALTER TABLE `p4t1_utilisateur`
  MODIFY `uti_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant';

--
-- AUTO_INCREMENT for table `p4t1_vitrine`
--
ALTER TABLE `p4t1_vitrine`
  MODIFY `vit_ide` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de la vitrine(relation 1.1 -1.1)';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p4t1_entretien`
--
ALTER TABLE `p4t1_entretien`
  ADD CONSTRAINT `fk_ent_acc` FOREIGN KEY (`ent_acc`) REFERENCES `p4t1_accompagnateurs` (`acc_ide`),
  ADD CONSTRAINT `fk_ent_pdp` FOREIGN KEY (`ent_pdp`) REFERENCES `p4t1_porteur_de_projet` (`pdp_ide`);

--
-- Constraints for table `p4t1_porteur_de_projet`
--
ALTER TABLE `p4t1_porteur_de_projet`
  ADD CONSTRAINT `fk_pdp_reu` FOREIGN KEY (`pdp_reu`) REFERENCES `p4t1_reunion` (`reu_ide`),
  ADD CONSTRAINT `fk_pdp_vit` FOREIGN KEY (`pdp_vit`) REFERENCES `p4t1_vitrine` (`vit_ide`);

--
-- Constraints for table `p4t1_reunion`
--
ALTER TABLE `p4t1_reunion`
  ADD CONSTRAINT `p4t1_reunion_ibfk_1` FOREIGN KEY (`reu_lie`) REFERENCES `p4t1_lieux` (`lie_ide`),
  ADD CONSTRAINT `p4t1_reunion_ibfk_2` FOREIGN KEY (`reu_acc`) REFERENCES `p4t1_accompagnateurs` (`acc_ide`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
