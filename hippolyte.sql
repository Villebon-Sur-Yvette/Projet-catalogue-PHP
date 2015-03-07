-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Mars 2015 à 00:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hippolyte`
--

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
  `Cote` varchar(40) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id_document`, `titre`, `soustitre`, `editeur`, `lieuedition`, `dateedition`, `isbn`, `description`, `Cote`, `id_langueoriginale`, `id_traducteur`, `id_langue`, `id_type`, `id_genre`) VALUES
(3, 'test', '', 'Flammarion', 'Paris', 1999, '123456789', '987654321', '', 1, 1, 1, 1, 1),
(4, 'test1', NULL, 'Flammarion', 'Paris', 2000, '123456789', '987654321', '', NULL, NULL, 1, 1, 1),
(5, 'Phèdre', NULL, 'Flammarion', 'Paris', 2007, '978-2-08-120720-2', ' 1 vol. (222 p.) ; 18 cm ', '842.4 RAC', NULL, NULL, 1, 1, 2),
(6, 'Le Seigneur des anneaux', 'I-La Communauté de l''anneau', 'Pocket', 'Paris', 2005, '2-266-15411-7', '1 vol.(697 p.) : ill.cartes ; 18 x 11 cm ', '823.914 TOL', 2, 2, 1, 1, 1),
(8, 'Le Seigneur des anneaux', 'II-Les Deux Tours', 'Pocket', 'Paris', 2005, '2-266-15413-3', '569 p. : ill. ; 18 x 11 cm ', '823.914 TOL', 2, 2, 1, 1, 1),
(9, 'Le Seigneur des anneaux ', 'III-Le Retour du roi', 'Pocket', 'Paris', 2005, '2-266-12097-2', '1 vol. (569 p.) : cartes en n. et b. ; 18 cm ', '823.914 TOL', 2, 2, 1, 1, 1),
(10, 'Le Petit Larousse illustré', 'en couleurs : 87000 articles, 5000 illustrations, 321 cartes, chronologie universelle', 'Larousse', 'Paris', 2010, '978-2-03-584088-2', '1 vol. (XLIV-1811 p.) : illustrations en couleur ; 24 cm ', '034', NULL, NULL, 1, 4, 5),
(11, 'Manifeste pour la philosophie', NULL, 'Ed. du Seuil', 'Paris', 1989, '2-02-010559-4', '91 p. ; 19 cm\r\n', '101 BAD', NULL, NULL, 1, 1, 6),
(12, 'Le Nombre et la sirène', 'un déchiffrage du "Coup de dés" de Mallarmé', 'Fayard', 'Paris', 2011, '978-2-213-66591-7', '1 vol. (248 p.) : couv. ill. en coul. ; 22 cm', '841 BAD ', NULL, NULL, 1, 1, 6),
(13, 'Après la finitude', 'essai sur la nécessité de la contingence', 'Ed. du Seuil', 'Paris', 2005, '2-02-084742-6', '1 vol. (177 p.) ; 21 cm\r\n', '111 MEI', NULL, NULL, 1, 1, 6),
(14, 'Fra Angelico, dissemblance et figuration', NULL, 'Flammarion', 'Paris', 1990, '2-08-012614-8', '263 p. : ill. en noir et en coul. ; 29 cm', '709.03 DID', NULL, NULL, 1, 1, 6),
(16, 'Les Tuniques bleus', 'Les Bleus en cavale', 'Dupuis', 'Paris', 1998, '2-8001-2649-3', '46 p. : ill. en coul., couv. ill. en coul. ; 30 cm', '741.5 LAM', NULL, NULL, 1, 2, 7),
(17, 'Les Tuniques bleus', 'Des bleus et du blues', 'Dupuis', 'Marcinelle', 2000, '2-8001-2944-1', '46 p. : ill. en coul. ; 30 cm ', '741.5 LAM', NULL, NULL, 1, 2, 7),
(18, 'La Gloire de mon père', NULL, 'Ed. du Fallois', 'Paris', 2004, '2-87706-507-3', '219 p. ; 18 cm', '843.914 PAG', NULL, NULL, 1, 1, 8),
(19, 'Le Château de ma mère', NULL, 'Ed. du Fallois', 'Paris ', 2004, '2-87706-051-9', '221 p. : couv. ill. en coul. ; 17 cm ', '843.914 PAG', NULL, NULL, 1, 1, 8),
(20, 'Le Temps des secrets', NULL, 'Ed. du Fallois', 'Paris', 2004, '2-87706-509-X', '253 p. ; 18 cm', '843.914 PAG ', NULL, NULL, 1, 1, 8),
(21, 'Un Bon Petit Diable', NULL, 'Gallimard Jeunesse', 'Paris', 2010, '978-2-07-062615-1', '1 vol. (218 p.) : ill. en n. et b. ; 18 cm', '843.7 SEG ', NULL, NULL, 1, 2, 1),
(22, 'Les Malheurs de Sophie', NULL, 'Hachette Jeunesse', 'Paris', 2010, '978-2-01-322543-4', '1 vol. (253 p.) : ill. en n. et b. ; 18 cm', '843.7 SEG', NULL, NULL, 1, 2, 1),
(25, 'Les Malheurs de Sophie', 'd''après la Comtesse de Ségur', 'Koba film', ' ', 2011, 's. o. ', '1 DVD toutes zones (1 h 30 mn) : 16/9 compatible 4/3, coul. , PAL son. ', 'DVD BRI', NULL, NULL, 1, 2, 10),
(28, 'The Tree of life', NULL, 'Europacorp', ' ', 2011, '', '1 DVD zone 2 ( 2h 13 mn ) : 16/9 compatible 4/3, coul. , PAL son. ', 'DVD TER', NULL, NULL, 1, 1, 9);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `fk_document_genre1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_langue1` FOREIGN KEY (`id_langue`) REFERENCES `langue` (`id_langue`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_langueoriginale1` FOREIGN KEY (`id_langueoriginale`) REFERENCES `langueoriginale` (`id_langueoriginale`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_traducteur1` FOREIGN KEY (`id_traducteur`) REFERENCES `traducteur` (`id_traducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_type1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
