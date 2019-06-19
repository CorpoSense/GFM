-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 19 juin 2019 à 15:37
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
-- Base de données :  `gfmdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `employeId` int(11) NOT NULL,
  `nomPersonel` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `emploi` varchar(255) NOT NULL,
  `indice` varchar(255) NOT NULL,
  `groupe` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`employeId`, `nomPersonel`, `grade`, `emploi`, `indice`, `groupe`, `categorie`) VALUES
(1, 'Ali', 'grade1', 'Technicien', '1', 'groupe 1', 'categorie 1');

-- --------------------------------------------------------

--
-- Structure de la table `etatfrais`
--

CREATE TABLE `etatfrais` (
  `employeId` varchar(255) NOT NULL,
  `etatId` int(255) NOT NULL,
  `bareme` varchar(255) NOT NULL,
  `dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `missionId` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `bis` varchar(255) NOT NULL,
  `residenceAdministrative` varchar(255) NOT NULL,
  `parcours` varchar(255) NOT NULL,
  `motifDeplacement` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `dateDepart` date NOT NULL,
  `heureDepart` time NOT NULL,
  `dateRetour` date NOT NULL,
  `heureRetour` time NOT NULL,
  `moyenTransport` varchar(255) NOT NULL,
  `fraisTransport` varchar(255) NOT NULL,
  `dateEtabli` datetime NOT NULL,
  `lieuEtabli` varchar(255) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `etatId` int(255) NOT NULL,
  `employeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE `parcours` (
  `parcoursId` int(11) NOT NULL,
  `codeRegion` varchar(255) NOT NULL,
  `remarque` text NOT NULL,
  `missionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `codeRegion` varchar(255) NOT NULL,
  `nomRegion` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

CREATE TABLE `transport` (
  `transportId` varchar(255) NOT NULL,
  `typeTransport` varchar(255) NOT NULL,
  `valeur` decimal(10,0) NOT NULL,
  `missionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'master', 'RE1gbe_tFLi-tTz8_CKs43gkHQkENylH', '$2y$13$VrfykmmjsmIbToIvjFbXiOtM2KJpiAQ/t4CpHaSH4NlZS01Hb9rA2', NULL, 'master@gmail.com', 10, 1557916741, 1557916741, 'byWbKbQ6y5mujmWRjiD-KhfcD79FxQNM_1557916741'),
(2, 'master1', 'eeYgZ19RCZtBFbNr-bZDNxRzKJxIU56z', '$2y$13$igf2/ko1IPdgrgwMlMILleN6XAenRMkf9lrKUijBmhMkRyk59Vjta', NULL, 'master1@gmail.com', 9, 1557916953, 1557916953, 'PVVH5c0qT_ZNVVC70Qr1o5nlbvZoXXRW_1557916953');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`employeId`);

--
-- Index pour la table `etatfrais`
--
ALTER TABLE `etatfrais`
  ADD PRIMARY KEY (`etatId`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`missionId`),
  ADD KEY `refEtat` (`etatId`),
  ADD KEY `employeId` (`employeId`);

--
-- Index pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD PRIMARY KEY (`parcoursId`),
  ADD KEY `codeRegion` (`codeRegion`),
  ADD KEY `missionId` (`missionId`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`codeRegion`);

--
-- Index pour la table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transportId`),
  ADD KEY `missionId` (`missionId`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etatfrais`
--
ALTER TABLE `etatfrais`
  ADD CONSTRAINT `etatfrais_ibfk_1` FOREIGN KEY (`etatId`) REFERENCES `mission` (`etatId`);

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`employeId`) REFERENCES `employe` (`employeId`);

--
-- Contraintes pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD CONSTRAINT `parcours_ibfk_1` FOREIGN KEY (`codeRegion`) REFERENCES `region` (`codeRegion`),
  ADD CONSTRAINT `parcours_ibfk_2` FOREIGN KEY (`missionId`) REFERENCES `mission` (`missionId`),
  ADD CONSTRAINT `parcours_ibfk_3` FOREIGN KEY (`missionId`) REFERENCES `mission` (`missionId`);

--
-- Contraintes pour la table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`missionId`) REFERENCES `mission` (`missionId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
