-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 04 Mars 2015 à 18:21
-- Version du serveur: 5.5.41-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `HIPpolyte`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`) VALUES
(1, 'test', 'test'),
(2, 'Racine', 'Jean'),
(3, 'Tolkien', 'J.R.R.'),
(4, 'Badiou', 'Alain'),
(5, 'Meillassoux', 'Quentin'),
(6, 'Didi-Huberman', 'Georges');

-- --------------------------------------------------------

--
-- Structure de la table `auteur_document`
--

CREATE TABLE IF NOT EXISTS `auteur_document` (
  `id_auteur` int(10) unsigned NOT NULL,
  `id_document` int(10) unsigned NOT NULL,
  KEY `fk_auteur_document_auteur1_idx` (`id_auteur`),
  KEY `fk_auteur_document_document1_idx` (`id_document`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `auteur_document`
--

INSERT INTO `auteur_document` (`id_auteur`, `id_document`) VALUES
(1, 3),
(2, 3),
(2, 5),
(3, 6),
(3, 8),
(3, 8),
(3, 9),
(4, 11),
(5, 12),
(5, 13),
(6, 14);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) NOT NULL,
  `ajout-not` tinyint(4) NOT NULL,
  `sudo-not` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `intitule`, `ajout-not`, `sudo-not`) VALUES
(1, 'test', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id_document` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `soustitre` varchar(200) DEFAULT NULL,
  `editeur` varchar(45) NOT NULL,
  `lieuedition` varchar(45) NOT NULL,
  `dateedition` year(4) NOT NULL,
  `isbn` varchar(45) NOT NULL,
  `description` varchar(200) NOT NULL,
  `id_langueoriginale` int(10) unsigned DEFAULT NULL,
  `id_traducteur` int(10) unsigned DEFAULT NULL,
  `id_langue` int(10) unsigned NOT NULL,
  `id_type` int(10) unsigned NOT NULL,
  `id_genre` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_document`),
  KEY `fk_document_langueoriginale1_idx` (`id_langueoriginale`),
  KEY `fk_document_traducteur1_idx` (`id_traducteur`),
  KEY `fk_document_langue1_idx` (`id_langue`),
  KEY `fk_document_type1_idx` (`id_type`),
  KEY `fk_document_genre1_idx` (`id_genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id_document`, `titre`, `soustitre`, `editeur`, `lieuedition`, `dateedition`, `isbn`, `description`, `id_langueoriginale`, `id_traducteur`, `id_langue`, `id_type`, `id_genre`) VALUES
(3, 'test', '', 'Flammarion', 'Paris', 1999, '123456789', '987654321', 1, 1, 1, 1, 1),
(4, 'test1', NULL, 'Flammarion', 'Paris', 2000, '123456789', '987654321', NULL, NULL, 1, 1, 1),
(5, 'Phèdre', NULL, 'Flammarion', 'Paris', 2007, '978-2-08-120720-2', ' 1 vol. (222 p.) ; 18 cm ', NULL, NULL, 1, 1, 2),
(6, 'Le Seigneur des anneaux', 'I-La Communauté de l''anneau', 'Pocket', 'Paris', 2005, '2-266-15411-7', '1 vol.(697 p.) : ill.cartes ; 18 x 11 cm ', 2, 2, 1, 1, 1),
(8, 'Le Seigneur des anneaux', 'II-Les Deux Tours', 'Pocket', 'Paris', 2005, '2-266-15413-3', '569 p. : ill. ; 18 x 11 cm ', 2, 2, 1, 1, 1),
(9, 'Le Seigneur des anneaux ', 'Le Retour du roi', 'Pocket', 'Paris', 2005, '2-266-12097-2', '1 vol. (569 p.) : cartes en n. et b. ; 18 cm ', 2, 2, 1, 1, 1),
(10, 'Le Petit Larousse illustré', 'en couleurs : 87000 articles, 5000 illustrations, 321 cartes, chronologie universelle', 'Larousse', 'Paris', 2010, '978-2-03-584088-2', '1 vol. (XLIV-1811 p.) : illustrations en couleur ; 24 cm ', NULL, NULL, 1, 4, 5),
(11, 'Manifeste pour la philosophie', NULL, 'Ed. du Seuil', 'Paris', 1989, '2-02-010559-4', '91 p. ; 19 cm\r\n', NULL, NULL, 1, 1, 6),
(12, 'Le nombre et la sirène', 'un déchiffrage du "Coup de dés" de Mallarmé', 'Fayard', 'Paris', 2011, '978-2-213-66591-7', '1 vol. (248 p.) : couv. ill. en coul. ; 22 cm', NULL, NULL, 1, 1, 6),
(13, 'Après la finitude', 'essai sur la nécessité de la contingence', 'Ed. du Seuil', 'Paris', 2005, '2-02-084742-6', '1 vol. (177 p.) ; 21 cm\r\n', NULL, NULL, 1, 1, 6),
(14, 'Fra Angelico, dissemblance et figuration', NULL, 'Flammarion', 'Paris', 1990, '2-08-012614-8', '263 p. : ill. en noir et en coul. ; 29 cm', NULL, NULL, 1, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `intitule`) VALUES
(1, 'Roman'),
(2, 'Théâtre'),
(3, 'Poèsie'),
(4, 'Monographie'),
(5, 'Dictionnaire et encyclopédie'),
(6, 'Essais');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE IF NOT EXISTS `langue` (
  `id_langue` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) NOT NULL,
  PRIMARY KEY (`id_langue`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `langue`
--

INSERT INTO `langue` (`id_langue`, `intitule`) VALUES
(1, 'français'),
(2, 'anglais'),
(3, 'espagnole'),
(4, 'allemand'),
(5, 'néérlandais'),
(6, 'russe'),
(7, 'japonnais'),
(8, 'italien'),
(9, 'latin'),
(10, 'grec');

-- --------------------------------------------------------

--
-- Structure de la table `langueoriginale`
--

CREATE TABLE IF NOT EXISTS `langueoriginale` (
  `id_langueoriginale` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) NOT NULL,
  PRIMARY KEY (`id_langueoriginale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `langueoriginale`
--

INSERT INTO `langueoriginale` (`id_langueoriginale`, `intitule`) VALUES
(1, 'français'),
(2, 'anglais'),
(3, 'espagnole'),
(4, 'allemand'),
(5, 'néérlandais'),
(6, 'russe'),
(7, 'japonnais'),
(8, 'italien'),
(9, 'latin'),
(10, 'grec');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) NOT NULL,
  PRIMARY KEY (`id_theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`id_theme`, `intitule`) VALUES
(1, 'philosophie'),
(2, 'histoire'),
(3, 'amour'),
(4, 'voyage'),
(5, 'Russie'),
(6, 'Japon'),
(7, 'Litterature fantasty'),
(8, 'manga'),
(9, 'biographie'),
(10, 'histoire vraie'),
(11, 'tragédie'),
(12, 'roman d''aventure'),
(13, 'géographie'),
(14, 'science'),
(15, 'science politique'),
(16, 'économie'),
(17, 'religion'),
(18, 'littérature'),
(19, 'Art');

-- --------------------------------------------------------

--
-- Structure de la table `theme_document`
--

CREATE TABLE IF NOT EXISTS `theme_document` (
  `id_theme` int(10) unsigned NOT NULL,
  `id_document` int(10) unsigned NOT NULL,
  KEY `fk_theme_document_theme1_idx` (`id_theme`),
  KEY `fk_theme_document_document1_idx` (`id_document`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `theme_document`
--

INSERT INTO `theme_document` (`id_theme`, `id_document`) VALUES
(3, 5),
(11, 5),
(7, 6),
(7, 8),
(7, 9),
(1, 11),
(1, 12),
(18, 12),
(1, 13),
(19, 14),
(1, 14);

-- --------------------------------------------------------

--
-- Structure de la table `traducteur`
--

CREATE TABLE IF NOT EXISTS `traducteur` (
  `id_traducteur` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`id_traducteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `traducteur`
--

INSERT INTO `traducteur` (`id_traducteur`, `nom`, `prenom`) VALUES
(1, 'test', 'test'),
(2, 'Ledoux', 'Francis');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `intitule`) VALUES
(1, 'Livre adulte'),
(2, 'Livre enfant'),
(3, 'DVD'),
(4, 'Usuel'),
(5, 'CD'),
(6, 'BD');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_bibliothecaire` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(45) NOT NULL,
  `motdepasse` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `id_categorie` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_bibliothecaire`),
  KEY `fk_utilisateur_categorie_idx` (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_bibliothecaire`, `mail`, `motdepasse`, `nom`, `prenom`, `id_categorie`) VALUES
(1, 'test@test.com', '1234', 'test', 'test', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `auteur_document`
--
ALTER TABLE `auteur_document`
  ADD CONSTRAINT `fk_auteur_document_auteur1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_auteur_document_document1` FOREIGN KEY (`id_document`) REFERENCES `document` (`id_document`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `fk_document_langueoriginale1` FOREIGN KEY (`id_langueoriginale`) REFERENCES `langueoriginale` (`id_langueoriginale`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_traducteur1` FOREIGN KEY (`id_traducteur`) REFERENCES `traducteur` (`id_traducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_langue1` FOREIGN KEY (`id_langue`) REFERENCES `langue` (`id_langue`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_type1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_genre1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `theme_document`
--
ALTER TABLE `theme_document`
  ADD CONSTRAINT `fk_theme_document_theme1` FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id_theme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_theme_document_document1` FOREIGN KEY (`id_document`) REFERENCES `document` (`id_document`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
