-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Mars 2015 à 16:25
-- Version du serveur :  5.6.17-log
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
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`) VALUES
(2, 'Racine', 'Jean'),
(3, 'Tolkien', 'J.R.R.'),
(4, 'Badiou', 'Alain'),
(5, 'Meillassoux', 'Quentin'),
(6, 'Didi-Huberman', 'Georges'),
(7, 'Lambil', 'Willy'),
(8, 'Cauvin', 'Raoul'),
(9, 'Pagnol', 'Marcel'),
(10, 'Ségur (Comtesse de)', 'Sophie'),
(11, 'Brialy', 'Jean-Claude'),
(12, 'Malick', 'Terrence'),
(13, 'Fellowes', 'Julian'),
(14, 'Pollack', 'Sydney '),
(15, 'Camus', 'Albert'),
(16, 'Mirror', 'Kkrist'),
(17, 'Hearn', 'Lian'),
(18, 'Young', 'Adam'),
(19, 'Miyazaki', 'Hayao '),
(20, 'Shirodaira', ' Kyō'),
(21, 'Sano', 'Arihide'),
(22, 'Saizaki', 'Ren'),
(23, 'Plichota', 'Anne'),
(24, 'Wolf', 'Cendrine'),
(25, 'Martin', 'Georges'),
(26, 'Bouvier', 'Nicolas'),
(27, 'Carroll', 'Lewis'),
(28, 'Choderlos de Laclos', 'Pierre-Ambroise-François'),
(29, 'Shakespeare', 'William'),
(30, 'Uderzo', 'Albert'),
(31, 'Goscinny', 'René'),
(32, 'Tolstoï', 'Léon '),
(33, 'Nemiorvsky', 'Irène '),
(34, 'Apollinaire', 'Guillaume'),
(35, 'Simon', 'Claude'),
(36, 'Van Lysebeth ', 'André');

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
(2, 5),
(3, 6),
(3, 8),
(3, 9),
(4, 11),
(5, 12),
(5, 13),
(6, 14),
(7, 16),
(8, 16),
(7, 17),
(8, 17),
(9, 19),
(9, 20),
(9, 18),
(10, 21),
(10, 22),
(11, 25),
(12, 28),
(13, 30),
(13, 31),
(14, 32),
(15, 33),
(16, 34),
(16, 35),
(16, 36),
(17, 38),
(17, 37),
(17, 39),
(17, 40),
(17, 41),
(20, 44),
(21, 44),
(22, 44),
(23, 45),
(24, 45),
(25, 47),
(25, 46),
(26, 48),
(27, 49),
(28, 50),
(29, 51),
(31, 52),
(30, 52),
(32, 53),
(32, 54),
(33, 55),
(34, 56),
(29, 57),
(6, 58),
(35, 59),
(36, 60),
(3, 29),
(18, 42),
(19, 43),
(18, 42),
(19, 43);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `intitule`, `ajout-not`, `sudo-not`) VALUES
(1, 'test', 0, 0),
(2, 'Administrateur', 1, 1),
(3, 'Bibliothécaire', 1, 0),
(4, 'Visiteur', 0, 0);

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
  `id_langue` int(10) unsigned DEFAULT NULL,
  `id_type` int(10) unsigned DEFAULT NULL,
  `id_support` int(11) DEFAULT NULL,
  `id_genre` int(10) unsigned DEFAULT NULL,
  `lienimage` varchar(70) NOT NULL,
  PRIMARY KEY (`id_document`),
  KEY `fk_document_langueoriginale1_idx` (`id_langueoriginale`),
  KEY `fk_document_traducteur1_idx` (`id_traducteur`),
  KEY `fk_document_langue1_idx` (`id_langue`),
  KEY `fk_document_type1_idx` (`id_type`),
  KEY `fk_document_genre1_idx` (`id_genre`),
  KEY `fk_document_support1` (`id_support`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id_document`, `titre`, `soustitre`, `editeur`, `lieuedition`, `dateedition`, `isbn`, `description`, `Cote`, `id_langueoriginale`, `id_traducteur`, `id_langue`, `id_type`, `id_support`, `id_genre`, `lienimage`) VALUES
(5, 'Phèdre', NULL, 'Flammarion', 'Paris', 2007, '978-2-08-120720-2', ' 1 vol. (222 p.) ; 18 cm ', '842.4 RAC', NULL, NULL, 1, 1, 1, 2, 'couv5.jpg'),
(6, 'Le Seigneur des anneaux', 'I-La Communauté de l''anneau', 'Pocket', 'Paris', 2005, '2-266-15411-7', '1 vol.(697 p.) : ill.cartes ; 18 x 11 cm ', '823.914 TOL', 2, 2, 1, 1, 1, 1, 'couv6.jpg'),
(8, 'Le Seigneur des anneaux', 'II-Les Deux Tours', 'Pocket', 'Paris', 2005, '2-266-15413-3', '569 p. : ill. ; 18 x 11 cm ', '823.914 TOL', 2, 2, 1, 1, 1, 1, 'couv8.jpg'),
(9, 'Le Seigneur des anneaux ', 'III-Le Retour du roi', 'Pocket', 'Paris', 2005, '2-266-12097-2', '1 vol. (569 p.) : cartes en n. et b. ; 18 cm ', '823.914 TOL', 2, 2, 1, 1, 1, 1, 'couv9.jpg'),
(10, 'Le Petit Larousse illustré', 'en couleurs : 87000 articles, 5000 illustrations, 321 cartes, chronologie universelle', 'Larousse', 'Paris', 2010, '978-2-03-584088-2', '1 vol. (XLIV-1811 p.) : illustrations en couleur ; 24 cm ', '034 LAR', NULL, NULL, 1, 4, 1, 5, 'couv10.jpg'),
(11, 'Manifeste pour la philosophie', NULL, 'Ed. du Seuil', 'Paris', 1989, '2-02-010559-4', '91 p. ; 19 cm\r\n', '101 BAD', NULL, NULL, 1, 1, 1, 6, 'couv11.jpg'),
(12, 'Le Nombre et la sirène', 'un déchiffrage du "Coup de dés" de Mallarmé', 'Fayard', 'Paris', 2011, '978-2-213-66591-7', '1 vol. (248 p.) : couv. ill. en coul. ; 22 cm', '841 BAD ', NULL, NULL, 1, 1, 1, 6, 'couv12.jpg'),
(13, 'Après la finitude', 'essai sur la nécessité de la contingence', 'Ed. du Seuil', 'Paris', 2005, '2-02-084742-6', '1 vol. (177 p.) ; 21 cm\r\n', '111 MEI', NULL, NULL, 1, 1, 1, 6, 'couv13.jpg'),
(14, 'Fra Angelico, dissemblance et figuration', NULL, 'Flammarion', 'Paris', 1990, '2-08-012614-8', '263 p. : ill. en noir et en coul. ; 29 cm', '709.03 DID', NULL, NULL, 1, 1, 1, 6, 'couv14.jpg'),
(16, 'Les Tuniques bleues', 'Les Bleus en cavale', 'Dupuis', 'Paris', 1998, '2-8001-2649-3', '46 p. : ill. en coul., couv. ill. en coul. ; 30 cm', '741.5 LAM', NULL, NULL, 1, 2, 4, 9, 'couv16.jpg'),
(17, 'Les Tuniques bleues', 'Des bleus et du blues', 'Dupuis', 'Marcinelle', 2000, '2-8001-2944-1', '46 p. : ill. en coul. ; 30 cm ', '741.5 LAM', NULL, NULL, 1, 2, 4, 9, 'couv17.jpg'),
(18, 'La Gloire de mon père', NULL, 'Ed. du Fallois', 'Paris', 2004, '2-87706-507-3', '219 p. ; 18 cm', '843.914 PAG', NULL, NULL, 1, 1, 1, 8, 'couv18.jpg'),
(19, 'Le Château de ma mère', NULL, 'Ed. du Fallois', 'Paris ', 2004, '2-87706-051-9', '221 p. : couv. ill. en coul. ; 17 cm ', '843.914 PAG', NULL, NULL, 1, 1, 1, 8, 'couv19.jpg'),
(20, 'Le Temps des secrets', NULL, 'Ed. du Fallois', 'Paris', 2004, '2-87706-509-X', '253 p. ; 18 cm', '843.914 PAG ', NULL, NULL, 1, 1, 1, 8, 'couv20.jpg'),
(21, 'Un Bon Petit Diable', NULL, 'Gallimard Jeunesse', 'Paris', 2010, '978-2-07-062615-1', '1 vol. (218 p.) : ill. en n. et b. ; 18 cm', '843.7 SEG ', NULL, NULL, 1, 2, 1, 1, 'couv21.jpg'),
(22, 'Les Malheurs de Sophie', NULL, 'Hachette Jeunesse', 'Paris', 2010, '978-2-01-322543-4', '1 vol. (253 p.) : ill. en n. et b. ; 18 cm', '843.7 SEG', NULL, NULL, 1, 2, 1, 1, 'couv22.jpg'),
(25, 'Les Malheurs de Sophie', 'd''après la Comtesse de Ségur', 'Koba film', ' s.o. ', 2011, 's. o. ', '1 DVD toutes zones (1 h 30 mn) : 16/9 compatible 4/3, coul. , PAL son. ', 'DVD BRI', NULL, NULL, 1, 2, 3, 11, 'couv25.jpg'),
(28, 'The Tree of life', NULL, 'Europacorp', ' s.o.', 2011, '', '1 DVD zone 2 ( 2h 13 mn ) : 16/9 compatible 4/3, coul. , PAL son. ', 'DVD TER', NULL, NULL, 1, 1, 3, 11, 'couv28.jpg'),
(29, 'Le Hobbit', 'Un aller et un retour', 'C. Bourgeois', 'Paris', 2012, '978-2-267-02389-', '1 vol. (462 p.) : ill. en noir et en coul. ; 24 cm', '823.912 TOL', 2, 3, 1, 1, 1, 1, 'couv29.jpg'),
(30, 'Passé imparfait', NULL, 'Soulatine', 'Paris', 2014, '978-2-35584-245-0', '1 vol. (647 p.) ; 20 cm', '823.92 FEL', 2, 4, 1, 1, 1, 1, 'couv30.jpg'),
(31, 'Past Imperfect', NULL, 'Saint Martin''s press', 'London', 2009, '9781429929172', '1 vol. (647 p.) ; 20 cm', '823.92 FEL', NULL, NULL, 2, 1, 1, 1, 'couv31.jpg'),
(32, 'Out of Africa', NULL, 'Columbia Tristar home video', 'Boulogne-Billancourt', 2001, '', '1 DVD zone 2 (2 h 34 mn) : couleur PAL sonore', 'DVD POL', NULL, NULL, 1, 1, 3, 11, 'couv32.jpg'),
(33, 'L''Etranger', NULL, 'Gallimard', 'Paris', 2012, '978-2-7548-0768-5', '1 vol. (138 p.) : ill. en n. et b. ; 34 cm', '741.5  CAM', NULL, NULL, 1, 1, 1, 1, 'couv33.jpg'),
(34, 'Moto: visions graphiques', NULL, 'E. Proust', 'Paris', 2011, '978-2-84810-273-3', '1 vol. (120 p.) : ill. en noir et en coul., couv. ill. ; 29 cm', '388.347 MIR', NULL, NULL, 7, 1, 4, 10, 'couv34.jpg'),
(35, 'Gitans : le pèlerinage des Saintes-Maries-de-la-Mer', NULL, 'EP', 'Paris', 2009, '978-2-84810-233-7', '1 vol. (35-[43] p.) : ill., couv. ill. ; 32 cm', '305.8914 MIR', NULL, NULL, 1, 1, 4, 10, 'couv35.jpg'),
(36, 'Tsiganes', '1940-1945, le camp de concentration de Montreuil-Bellay', 'EP', 'Paris', 2008, '978-2-84810-184-2', '1 vol. (96 p.) : ill., couv. ill. ; 32 cm\r\n', '305.8914 MIR ', NULL, NULL, 1, 1, 4, 10, 'couv36.jpg'),
(37, 'Le Clan des Otori I', 'Le silence du rossignol ', 'Gallimard', 'Paris', 2003, '2-07-030258', '1 vol. (371 p.) : carte en n. et b. ; 18 cm ', '823.914 HEA', 2, 5, 1, 1, 1, 1, 'couv37.jpg'),
(38, 'Le Clan des Otori II', 'Les Neiges de l''exil', 'Gallimard', 'Paris', 2004, '2-07-030031-5', '1 vol. (384 p.) : cartes en n. et b. ; 18 cm', '823.914 HEA', 2, 5, 1, 1, 1, 1, 'couv38.jpg'),
(39, 'Le Clan des Otori III', 'La Clarté de la lune', 'Gallimard', 'Paris', 2004, '2-07-053805-2', '1 vol. (381 p.) ; 24 cm ', '823.914 HEA', 2, 5, 1, 1, 1, 1, 'couv39.jpg'),
(40, 'Le Clan des Otori IV', 'Le Vol des Otoris', 'Gallimard', 'Paris', 2008, '978-2-07-034340-9', '1 vol. (748 p.) ; 18 cm ', '823.914 HEA', 2, 5, 1, 1, 1, 1, 'couv40.jpg'),
(41, 'Le Clan des Otori V', 'Le Fil du destin', 'Gallimard', 'Paris', 2009, '978-2-07-035989-9', '1 vol. (693 p.) : carte en n. et b. ; 18 cm', '823.914 HEA', 2, 5, 1, 1, 1, 1, 'couv41.jpg'),
(42, 'Owl City', 'Ocean Eyes', 'UMG recordings', '[France]', 2009, 'EAN 602527281308', '1 disque compact (42 min 49 s)', 'CD OWL', NULL, NULL, 2, 1, 2, 13, 'couv42.jpg'),
(43, 'Le Château ambulant', NULL, 'Buena Vista home entertainment', 's. o. ', 2004, '', '1 DVD zone 2 (1 h 54 mn) : 16/9 compatible 4/3, coul., PAL son.', 'DVD MIY', 7, NULL, 1, 2, 3, 14, 'couv43.jpg'),
(44, 'The civilization blaster', 'zetsuen no tempest', 'Kurokawa', 'Paris', 2011, '42531064', '18 cm', 'Manga SHI', 7, 9, 1, 2, 4, 12, 'couv44.jpg'),
(45, 'Tugdual', 'I-les Coeurs noirs', 'XO', 'Paris', 2014, '978-2-84563-691-0', '1 vol. (416 p.) ; 24 x 16 cm', '808.838 PLI', NULL, NULL, 1, 2, 1, 1, 'couv45.jpg'),
(46, 'Le Trône de fer', 'Le Trône de fer', 'J''ai lu', 'Paris', 2005, '978-2-7564-0215-4', '476 p. ; 18 cm', '813.54 MAR', 2, 6, 1, 1, 1, 1, 'couv46.jpg'),
(47, 'Le Trône de fer', 'Le Donjon rouge', 'J''ai lu', 'Paris', 2001, '978-2290313183', '17,5 x 10,9 x 2,8 cm', '813.54 MAR', 2, 6, 1, 1, 1, 1, 'couv47.jpg'),
(48, 'Le Vide et le plein', 'Carnet du Japon 1964-1970', 'Hoëbeke', 'Paris', 2004, '2-84230-176-5', '185 p. ; 23 cm', '915.2  BOU', NULL, NULL, 1, 1, 1, 8, 'couv48.jpg'),
(49, 'Alice au pays des merveilles', NULL, 'Librairie Général française', 'Paris', 2009, '978-2-253-08244-6', '1 vol. (316 p.) ; 18 cm', '823.8 CAR', 2, 7, 1, 2, 1, 1, 'couv49.jpg'),
(50, 'Les Liaisons dangereuses', NULL, 'Pocket', 'Paris', 2012, '978-2-266-20079-0', '1 vol. (494 p.) ; 18 cm ', '843.5  LAC', NULL, NULL, 1, 1, 1, 1, 'couv50.jpg'),
(51, 'La Tempête', NULL, ' Gallimard', 'Paris', 1997, '2-07-040315-7 br', '387 p. : couv. ill. en coul. ; 18 cm ', '822.3 SHA', 2, 8, 1, 1, 1, 2, 'couv51.jpg'),
(52, 'Le Tour de Gaule d''Asterix', NULL, 'Hachette', 'Paris', 2007, '978-2-01-210168-5', '1 vol. (56 p.) : ill. en coul. ; 35 cm', '741.5 GOS', NULL, NULL, 1, 2, 4, 9, 'couv52.jpg'),
(53, 'Guerre et Paix', NULL, ' Librairie générale Française', 'Paris', 1986, '2-253-01726-4 28.00', '775 p. ; 17 cm', '891.73 TOL', 6, 5, 1, 1, 1, 1, 'couv53.jpg'),
(54, 'Les Cosaques', NULL, 'Gallimard', 'Paris', 1996, '2-07-036850-5', '1 vol. ; in-12', '891.73 TOL', 6, 5, 1, 1, 1, 1, 'couv54.jpg'),
(55, 'Suite française', NULL, 'Denoël', 'Paris', 2004, '2-207-25645-6', '1 vol. (434 p.) ; 23 cm', '843.912 NEM', NULL, NULL, 1, 1, 1, 1, 'couv55.jpg'),
(56, 'Alcools', NULL, 'Gallimard', 'Paris', 2013, '978-2-07-045019-0', '1 vol. (243 p.) : ill. en n. et b. ; 18 cm', '841.912 APO', NULL, NULL, 1, 1, 1, 3, 'couv56.jpg'),
(57, 'Sonnets', NULL, 'Ed. Mille et une nuits', 'Paris', 1999, '2-84205-426-1', '174 p. ; 15 cm.', '821.3 SHA', 2, 8, 1, 1, 1, 3, 'couv57.jpg'),
(58, 'L''Etoilement', ' conversation avec Hantaï ', 'Ed. de Minuit', 'Paris', 1998, '2-7073-1630-x', '123 p. ; 19 cm ', '709.04  DID', NULL, NULL, 1, 1, 1, 6, 'couv58.jpeg'),
(59, 'La Route des Flandres', NULL, 'Ed. de Minuit', 'Paris', 1982, '2-7073-0629-0 30.00 Fr', '315 p. ; 18 cm', '843.914  SIM', NULL, NULL, 1, 1, 1, 1, 'couv59.jpg'),
(60, 'J''apprends le yoga', NULL, 'Flammarion', 'Paris', 2004, '978-2-07-065923-4', '1 vol. (324 p.) ; 22 cm ', '204 VAN', NULL, NULL, 1, 1, 1, 4, 'couv60.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `intitule`) VALUES
(1, 'Roman'),
(2, 'Théâtre'),
(3, 'Poésie'),
(4, 'Monographie'),
(5, 'Dictionnaire et encyclopédie'),
(6, 'Essais'),
(8, 'Récit'),
(9, 'BD humouristique'),
(10, 'BD historique'),
(11, 'film'),
(12, 'manga'),
(13, 'musique'),
(14, 'Dessins animés');

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
(3, 'espagnol'),
(4, 'allemand'),
(5, 'néérlandais'),
(6, 'russe'),
(7, 'japonais'),
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
(1, 'française'),
(2, 'anglaise'),
(3, 'espagnole'),
(4, 'allemande'),
(5, 'néérlandaise'),
(6, 'russe'),
(7, 'japonaise'),
(8, 'italienne'),
(9, 'latine'),
(10, 'grecque');

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id_support` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(25) NOT NULL,
  PRIMARY KEY (`id_support`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `support`
--

INSERT INTO `support` (`id_support`, `intitule`) VALUES
(1, 'Texte imprimé'),
(2, 'CD'),
(3, 'DVD'),
(4, 'Bande dessinée');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) NOT NULL,
  PRIMARY KEY (`id_theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

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
(7, 'littérature fantasty'),
(8, 'manga'),
(9, 'biographie'),
(10, 'histoire vraie'),
(11, 'tragédie'),
(12, 'aventure'),
(13, 'géographie'),
(14, 'science'),
(15, 'science politique'),
(16, 'économie'),
(17, 'religion'),
(18, 'littérature'),
(19, 'art'),
(20, 'Amérique'),
(21, 'humour'),
(22, 'enfance'),
(23, 'Provence'),
(24, 'Afrique'),
(25, 'policier'),
(26, 'mécanique'),
(27, 'gitans'),
(28, 'guerre'),
(29, 'pop rock'),
(30, 'merveilleux'),
(31, 'sport');

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
(1, 14),
(20, 16),
(21, 16),
(20, 17),
(21, 17),
(9, 18),
(21, 18),
(22, 18),
(9, 19),
(22, 19),
(23, 19),
(22, 20),
(23, 20),
(9, 20),
(22, 21),
(22, 22),
(22, 25),
(11, 28),
(7, 29),
(3, 30),
(3, 31),
(24, 32),
(4, 32),
(18, 33),
(26, 34),
(26, 14),
(27, 35),
(19, 35),
(4, 35),
(28, 36),
(27, 36),
(6, 37),
(6, 38),
(12, 37),
(12, 38),
(6, 39),
(12, 39),
(6, 40),
(12, 40),
(6, 41),
(12, 41),
(7, 45),
(12, 45),
(7, 46),
(12, 46),
(7, 47),
(12, 47),
(6, 48),
(12, 48),
(30, 49),
(4, 49),
(3, 50),
(18, 50),
(11, 51),
(3, 51),
(21, 52),
(4, 52),
(2, 53),
(5, 53),
(5, 54),
(4, 54),
(28, 55),
(18, 55),
(18, 56),
(18, 57),
(3, 57),
(1, 58),
(28, 59),
(18, 59),
(31, 60),
(6, 60),
(6, 44),
(12, 44);

-- --------------------------------------------------------

--
-- Structure de la table `traducteur`
--

CREATE TABLE IF NOT EXISTS `traducteur` (
  `id_traducteur` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`id_traducteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `traducteur`
--

INSERT INTO `traducteur` (`id_traducteur`, `nom`, `prenom`) VALUES
(1, 'test', 'test'),
(2, 'Ledoux', 'Francis'),
(3, 'Lauzon', 'Daniel'),
(4, 'Szlamowicz', 'Jean'),
(5, 'Giraudon', 'Philippe'),
(6, 'Sola', 'Jean'),
(7, 'Tenniel', 'John'),
(8, 'Bonnefoy', 'Yves'),
(9, 'Zouzoulkovsky', 'Vincent');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(45) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `intitule`) VALUES
(1, 'Rayon adulte'),
(2, 'Rayon enfant'),
(4, 'Usuel');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_bibliothecaire`, `mail`, `motdepasse`, `nom`, `prenom`, `id_categorie`) VALUES
(1, 'test@test.com', '1234', 'test', 'test', 1),
(2, 'admin@admin.com', '1234', 'Super', 'Utilisateur', 2),
(3, 'bibli@bibli.com', '5678', 'Simple', 'Bibliothècaire', 3),
(4, 'visiteur@visiteur.com', '9012', 'Stagiaire', 'Utile', 4);

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
  ADD CONSTRAINT `fk_document_genre1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_langue1` FOREIGN KEY (`id_langue`) REFERENCES `langue` (`id_langue`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_langueoriginale1` FOREIGN KEY (`id_langueoriginale`) REFERENCES `langueoriginale` (`id_langueoriginale`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_support1` FOREIGN KEY (`id_support`) REFERENCES `support` (`id_support`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_traducteur1` FOREIGN KEY (`id_traducteur`) REFERENCES `traducteur` (`id_traducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_type1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `theme_document`
--
ALTER TABLE `theme_document`
  ADD CONSTRAINT `fk_theme_document_document1` FOREIGN KEY (`id_document`) REFERENCES `document` (`id_document`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_theme_document_theme1` FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id_theme`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
