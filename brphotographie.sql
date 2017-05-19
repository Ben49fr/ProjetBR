-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Août 2016 à 00:27
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `brphotographie`
--

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `shortDescription` text NOT NULL,
  `description` longtext NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `shortDescription`, `description`, `picture`) VALUES
(8, 'LE MANS CLASSIC 2014', 'Rendez-vous incontournable rassemblant des voitures mythiques ayant courues au Mans de 1923 à 1979.', '', 'classic2014.png'),
(9, 'GT TOUR 2014', 'Revivez le coup d''envoi du GT Tour 2014 sur le fabuleux circuit Bugatti du Mans.', '', 'gttour2014.png'),
(11, 'LM STORY 2013', '6ème édition des LM Story regroupant des courses de véhicules historiques de compétition.', '', 'lmstory2013.png'),
(39, 'htghergh', 'ergergergre', '', '57aa5854a045f-Screenshot2015-08-06-00-10-02.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `photographe`
--

CREATE TABLE IF NOT EXISTS `photographe` (
`id_photographe` int(11) NOT NULL,
  `nom_photographe` varchar(25) NOT NULL,
  `prenom_photographe` varchar(25) NOT NULL,
  `pseudo_photographe` varchar(30) NOT NULL,
  `mot_passe_photographe` varchar(255) NOT NULL,
  `logo` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `photographe`
--

INSERT INTO `photographe` (`id_photographe`, `nom_photographe`, `prenom_photographe`, `pseudo_photographe`, `mot_passe_photographe`, `logo`) VALUES
(1, 'Rauturier', 'Benjamin', 'ben49', '9a1b7d042a1476ae65145a7e9536b350', '');

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
`id` int(11) NOT NULL,
  `galleryId` int(11) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `picture`
--

INSERT INTO `picture` (`id`, `galleryId`, `picture`, `title`, `description`, `date`, `place`) VALUES
(18, 8, '', 'Audi', 'test', '2016-03-09', 'Le Mans'),
(19, 8, '', 'test', 'test', '2231-02-02', 'test'),
(20, 8, '', 'vftc', 'gvh', '0000-00-00', '164516'),
(21, 8, '', 'vftc', 'gvh', '0000-00-00', '164516'),
(22, 8, '', 'vftc', 'gvh', '0000-00-00', '164516'),
(23, 8, '', '', '', '0000-00-00', ''),
(24, 8, '', '', '', '0000-00-00', ''),
(25, 8, '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `realise`
--

CREATE TABLE IF NOT EXISTS `realise` (
  `id_photographe` int(11) DEFAULT NULL,
  `id_galerie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photographe`
--
ALTER TABLE `photographe`
 ADD PRIMARY KEY (`id_photographe`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realise`
--
ALTER TABLE `realise`
 ADD KEY `fk_id_photographe` (`id_photographe`), ADD KEY `fk_id_galerie` (`id_galerie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `photographe`
--
ALTER TABLE `photographe`
MODIFY `id_photographe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `realise`
--
ALTER TABLE `realise`
ADD CONSTRAINT `fk_id_galerie` FOREIGN KEY (`id_galerie`) REFERENCES `gallery` (`id`),
ADD CONSTRAINT `fk_id_photographe` FOREIGN KEY (`id_photographe`) REFERENCES `photographe` (`id_photographe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
