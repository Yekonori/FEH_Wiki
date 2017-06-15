-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Juin 2017 à 22:02
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fire_emblem_heroes`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `ID :` int(11) NOT NULL,
  `Date :` date NOT NULL,
  `Titre :` varchar(255) NOT NULL,
  `Description :` text NOT NULL,
  `Type :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`ID :`, `Date :`, `Titre :`, `Description :`, `Type :`) VALUES
(1, '2017-02-02', 'Focus : Sentiments Profonds', 'Du 02/02/2017 08:00 au 15/02/2017 07:59\n\nPour célébrer le lancement de Fire Emblem™ Heroes, les Héros aux \"Sentiments Profonds\" sont de sortie !\n    \n    Fire Emblem : The Binding Blade\n    Roy - Jeune Lion\n    \n    Fire Emblem : The Blazing Sword\n    Lyn - Lady de Sacae\n    \n    Fire Emblem™ Fates\n    Takumi - Électron Libre\n    Camilla - Beauté Fatale\n       \nDe plus, nous vous offrons deux orbes en guise de bonus de connexion chaque jour où vous lancerez l\'application durant cette période.\n\nVous pourrez compter sur la dévotion sans borne de ces Héros.', 'Bannière'),
(2, '2017-02-02', 'Focus : Héros Légendaires', 'Du 02/02/2017 08:00 au 15/02/2017 07:59\n\nPour célébrer le lancement de Fire Emblem™ Heroes, les Héros Légendaires sont de sortie !\n    \n    Fire Emblem : Mystery of the Emblem\n    - Marth - Prince d\'Altea\n    - Tiki [Jeune] - Fille Dragon\n    \n    Fire Emblem : Awakening\n    - Daraen [H] - Stratège Sensé\n    - Lucina - Voix du Futur\n       \nDe plus, nous vous offrons deux orbes en guise de bonus de connexion chaque jour où vous lancerez l\'application durant cette période.\n\nEt maintenant, à vous d\'écrire votre propre légende.', 'Bannière'),
(3, '2017-02-03', 'Campagne de lancement mondial', 'Du 03/02/2017 12:00 au 20/02/2017 7:59\n    \nMerci de vous lancer dans Fire Emblem Heroes !\nPour fêter sa sortie mondiale, nous avons organisé une campagne de lancement mondial !\n    \nDétails :\n	- L\'énergie nécessaire pour participer aux batailles de la Tour d\'Entraînement sera réduite de moitié.\n	- Les aptitudes pourront être réassignées sans dépenser d\'énergie.\n	- Pendant la campagne, vous pourrez recevoir 10 Élixirs d\'Énergie.\n    \nAmusez vous bien avec Fire Emblem Heroes.', 'Événement'),
(4, '2017-02-06', 'Cartes Spéciales de Lancement', 'Du 06/02/2017 08:00 au 14/03/2017 07:59\r\n    \r\nDe nouvelles cartes célébrant le lancement de l\'application seront ajoutées aux Cartes Spéciales chaque semaine. Chaque carte vous permet d\'obtenir 3 orbes, assurez-vous de les terminer avant qu\'elles ne disparaissent !', 'Événement'),
(5, '2017-02-08', 'Une Grande Bataille approche !', 'Du 10/02/2017 08:00 au 14/02/2017 07:59\n\nUn adversaire redoutable approche ! Son nom ? C\'est un mystère pour le moment...\n\n\"Je suis fort... Je suis sage...\nJe suis beau... Et j\'ai toujours raison...\"', 'Grande Bataille'),
(6, '2017-02-09', 'Promotion : l\'Arène', 'Montrez au monde entier de quoi vos équipes sont capables ! Avec cette nouvelle promotion, ça va chauffer dans l\'arène !\r\n    \r\n    \r\nQuêtes Spéciales de l\'Arène :\r\n    - Disponibilité 09/02/2017 08:00 au 01/03/2017 07:59\r\n\r\nTerminez ces quêtes spéciales en combattant dans l\'arène. C\'est un excellent moyen de gagner un grand nombre de Plumes de Héros !\r\n    \r\nBonus : Symbole de Duel\r\n    - Disponibilité : 09/02/2017 08:00 13/03/2017 07:59\r\n\r\nConnectez vous pendant cette période pour obtenir un bonus de connexion unique de 10 Symboles de Duel. Ces objets vous permettront de retourner encore et encore dans l\'Arène.', 'Événement'),
(7, '2017-02-10', 'Grande Bataille contre Narcian', 'Du 10/02/2017 08:00 au 14/02/2017 07:59\n\nUne Grande Bataille fait son apparition dans les Cartes Spéciales ! Si vous parvenez à remporter la victoire, Narcian rejoindra vos rangs !', 'Grande Bataille'),
(8, '2017-02-15', 'Nouveautés dans le jeu', 'Merci de jouer à Fire Emblem Heroes ! Nous voulons vous donner des informations sur quelques changements prévus pour une mise à jour future.\r\n    \r\n    - La période bonus pour le lancement de l\'application sera prolongée jusqu\'au 14/03/2017 07:59\r\n    - La campagne de lancement mondial sera prolongée indéfiniment, ce qui signifie que l\'énergie nécessaire pour participer aux batailles de la Tour d\'Entraînement restera réduite de moitié et que les aptitudes pourront toujours être réassignées sans dépenser d\'énergie.\r\n    - Des récompenses seront ajoutées à la Tour d\'Entraînement entre le Lundi 08:00 et Mardi 07:59 à partir du 20/02/2017 08:00.\r\n    - Les unités pourront gagner de l\'EXP après avoir vaincu des ennemis dont le niveau est bien inférieur au leur. Ce changement est prévu pour le début du mois de Mars.\r\n\r\nNous espérons que vous continuerez de vous amuser avec Fire Emblem Heroes.', 'Mise à Jour'),
(9, '2017-02-15', 'Focus : Liens Familiaux', 'Du 15/02/2017 08:00 au 27/02/2017 07:59\r\n\r\nDe nouveaux Héros ont rejoint Fire Emblem Heroes !\r\n\r\nLe focus mis sur Ephraim et Eirika de Fire Emblem™ The Sacred Stones ainsi que Seliph et Julia de Fire Emblem : Genealogy of the Holy War, qui sont désormais disponible au rang 5★ !\r\n\r\nDe plus, le scénario annexe Liens Familiaux ainsi que ses quêtes spéciales associés sont également disponible pour une durée limitée !', 'Bannière'),
(10, '2017-02-17', 'De l\'Exp comme s\'il en pleuvait !', 'Du 17/02/2017 08:00 au 23/02/2017 07:59\r\n\r\nDurant cette période, l\'Exp est multipliée par 1.5 ! Cela s\'applique à l\'Exp reçue dans les cartes du Scénario Principal, de la Tour d\'Entraînement, dans les Cartes Spéciales et dans l\'Arène ! C\'est le moment parfait pour augmenter le niveau de vos Héros !', 'Événement'),
(11, '2017-02-20', 'Quêtes liées aux Armes', 'Du 20/02/2017 08:00 au 27/02/2017 07:59\r\n\r\nDe nouvelles quêtes mettant l\'accent sur les différentes armes au corps-à-corps du jeu sont maintenant disponible : \"Maîtrise de l\'Épée\", \"Maîtrise de la Lance\", \"Maîtrise de la Hache\". Lancez-vous dans ces quêtes en brandissant vos armes préférées ou profitez de l\'occasion pour vous familiariser avec un type d\'arme que vous maîtrisez moins.\r\n\r\nUne chose est sûre, il y en aura pour tous les goûts !', 'Quêtes Spéciales');

-- --------------------------------------------------------

--
-- Structure de la table `appel_aux_armes`
--

CREATE TABLE `appel_aux_armes` (
  `ID :` int(11) NOT NULL,
  `Héros Bonus :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `appel_aux_armes`
--

INSERT INTO `appel_aux_armes` (`ID :`, `Héros Bonus :`) VALUES
(1, 'Shiida [Vive les Mariées]'),
(2, 'Lyn [Vive les Mariées]'),
(3, 'Cordelia [Vive les Mariées]'),
(4, 'Charlotte [Vive les Mariées]'),
(5, 'Lloyd'),
(6, 'Henry'),
(7, 'Corrin [F]'),
(8, 'Donnel'),
(9, 'Olivia'),
(10, 'Sharena');

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales`
--

CREATE TABLE `aptitudes_spéciales` (
  `ID :` int(11) NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Compteur :` tinyint(1) UNSIGNED NOT NULL,
  `Effet :` varchar(255) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitudes_spéciales`
--

INSERT INTO `aptitudes_spéciales` (`ID :`, `Nom :`, `Compteur :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Restriction :`, `Type :`, `Lien :`) VALUES
(1, 'Nocturne', 4, 'L\'unité inflige 50% de dégâts supplémentaires.', 2, 2, '', 3, 1, 'Nocturne'),
(2, 'Lueur', 3, 'L\'unité inflige 50% de dégâts supplémentaires.', 4, 4, '', 3, 1, 'Lueur'),
(3, 'Stellaire', 5, 'L\'unité inflige 150% de dégâts supplémentaires.', 4, 4, '', 3, 1, 'Stellaire'),
(4, 'Diurne', 4, 'L\'unité se soigne à hauteur de 30% des dégâts qu\'elle inflige.', 2, 2, 'Alfonse, Chrom, Faye, Laslow', 3, 2, 'Diurne'),
(5, 'Solaire', 4, 'L\'unité se soigne à hauteur de 50% des dégâts qu\'elle inflige.', 4, 4, 'Alfonse, Chrom', 3, 2, 'Solaire');

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales_ajout`
--

CREATE TABLE `aptitudes_spéciales_ajout` (
  `ID :` int(11) NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Compteur :` tinyint(1) UNSIGNED NOT NULL,
  `Effet :` varchar(255) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitudes_spéciales_ajout`
--

INSERT INTO `aptitudes_spéciales_ajout` (`ID :`, `Nom :`, `Compteur :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Restriction :`, `Type :`, `Lien :`) VALUES
(1000, 'TEST', 0, 'dezf', 2, 0, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales_compteur`
--

CREATE TABLE `aptitudes_spéciales_compteur` (
  `ID_Compteur :` tinyint(1) UNSIGNED NOT NULL,
  `Compteur :` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitudes_spéciales_compteur`
--

INSERT INTO `aptitudes_spéciales_compteur` (`ID_Compteur :`, `Compteur :`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales_cout_pa`
--

CREATE TABLE `aptitudes_spéciales_cout_pa` (
  `ID_Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_PA :` smallint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitudes_spéciales_cout_pa`
--

INSERT INTO `aptitudes_spéciales_cout_pa` (`ID_Coût_PA :`, `Coût_PA :`) VALUES
(1, 50),
(2, 100),
(3, 150),
(4, 200),
(5, 300),
(6, 500);

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales_cout_transmission`
--

CREATE TABLE `aptitudes_spéciales_cout_transmission` (
  `ID_Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` smallint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitudes_spéciales_cout_transmission`
--

INSERT INTO `aptitudes_spéciales_cout_transmission` (`ID_Coût_Transmission :`, `Coût_Transmission :`) VALUES
(1, 75),
(2, 150),
(3, 225),
(4, 300),
(5, 450),
(6, 750);

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales_modification`
--

CREATE TABLE `aptitudes_spéciales_modification` (
  `ID :` int(11) NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Compteur :` tinyint(1) UNSIGNED NOT NULL,
  `Effet :` varchar(255) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales_restriction`
--

CREATE TABLE `aptitudes_spéciales_restriction` (
  `ID_Restriction :` tinyint(1) NOT NULL,
  `Restriction :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitudes_spéciales_restriction`
--

INSERT INTO `aptitudes_spéciales_restriction` (`ID_Restriction :`, `Restriction :`) VALUES
(1, 'Aucune'),
(2, 'Utilisateurs de Bâton uniquement'),
(3, 'Utilisateurs de Bâton exclus'),
(4, 'Utilisateurs d\'Armes de Mêlée uniquement '),
(5, 'Utilisateurs d\'Épée, Lance, Hache uniquement');

-- --------------------------------------------------------

--
-- Structure de la table `aptitudes_spéciales_type`
--

CREATE TABLE `aptitudes_spéciales_type` (
  `ID_Type :` tinyint(1) UNSIGNED NOT NULL,
  `Type :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aptitudes_spéciales_type`
--

INSERT INTO `aptitudes_spéciales_type` (`ID_Type :`, `Type :`) VALUES
(1, 'Bonus de Dommage'),
(2, 'Soin');

-- --------------------------------------------------------

--
-- Structure de la table `armes`
--

CREATE TABLE `armes` (
  `ID :` int(11) NOT NULL,
  `Couleur :` varchar(255) NOT NULL,
  `Type :` tinyint(4) NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Dmg :` tinyint(4) NOT NULL,
  `Por :` tinyint(4) NOT NULL,
  `Effet :` tinyint(4) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Exclusif :` tinyint(1) NOT NULL,
  `Chemin :` varchar(255) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes`
--

INSERT INTO `armes` (`ID :`, `Couleur :`, `Type :`, `Nom :`, `Dmg :`, `Por :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Exclusif :`, `Chemin :`, `Lien :`) VALUES
(1, 'Rouge', 1, 'Épée Fer', 6, 1, 1, 1, 1, 'Alfonse, Alm, Cain, Chrom, Corrin [M], Edgar, Eirika, Eldigan, Eliwood, Fir, Hana, Hinata, Ike, Karel', 2, 'Épée_Fer.png', 'Épée_Fer'),
(2, 'Rouge', 1, 'Épée Acier', 6, 1, 1, 2, 2, 'Alfonse, Marth', 2, 'Épée_Acier.png', 'Épée_Acier'),
(3, 'Rouge', 1, 'Épée Argent', 11, 1, 1, 4, 4, 'Alfonse, Alm, Cain, Chrom, Corrin [M]', 2, 'Épée_Argent.png', 'Épée_Argent'),
(4, 'Rouge', 1, 'Épée Argent +', 15, 1, 1, 5, 5, '', 2, 'Épée_Argent_+.png', 'Épée_Argent_Plus'),
(1000, 'Bleu', 2, 'Lance Héros', 5, 1, 2, 4, 4, 'Abel, Cordelia, Donnel', 2, 'Lance_Héros.png', 'Lance_Héros'),
(1001, 'Bleu', 2, 'Lance Héros +', 8, 1, 2, 5, 5, 'Abel, Cordelia, Donnel', 2, 'Lance_Héros.png', 'Lance_Héros_Plus'),
(1002, 'Rouge', 1, 'Épée Héros', 5, 1, 2, 4, 4, 'Cain, Edgar, Ogma', 2, 'Épée_Héros.png', 'Épée_Héros'),
(1003, 'Rouge', 1, 'Épée Héros +', 8, 1, 2, 5, 5, 'Cain, Edgar, Ogma', 2, 'Épée_Héros_+.png', 'Épée_Héros_Plus'),
(1004, 'Rouge', 1, 'Fer Létal', 7, 1, 4, 4, 4, 'Eldigan, Fir, Lon\'zu, Nabarl', 2, 'Fer_Létal.png', 'Fer_Létal'),
(1005, 'Rouge', 1, 'Fer Létal +', 11, 1, 4, 5, 5, 'Fir, Lon\'zu, Nabarl', 2, 'Fer_Létal_+.png', 'Fer_Létal_Plus');

-- --------------------------------------------------------

--
-- Structure de la table `armes_ajout`
--

CREATE TABLE `armes_ajout` (
  `ID :` int(11) NOT NULL,
  `Couleur :` varchar(255) NOT NULL,
  `Type :` tinyint(4) NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Dmg :` tinyint(4) NOT NULL,
  `Por :` tinyint(4) NOT NULL,
  `Effet :` tinyint(4) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Exclusif :` tinyint(1) NOT NULL,
  `Chemin :` varchar(255) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Contenu de la table `armes_ajout`
--

INSERT INTO `armes_ajout` (`ID :`, `Couleur :`, `Type :`, `Nom :`, `Dmg :`, `Por :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Exclusif :`, `Chemin :`, `Lien :`) VALUES
(1000, 'Bleu', 2, 'Lance Héros', 5, 1, 2, 4, 4, 'Abel, Cordelia, Donnel', 2, '', ''),
(1001, 'Bleu', 2, 'Lance Héros +', 8, 1, 2, 5, 5, 'Abel, Cordelia, Donnel', 2, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `armes_cout_pa`
--

CREATE TABLE `armes_cout_pa` (
  `ID_Coût_PA :` tinyint(1) NOT NULL,
  `Coût_PA :` smallint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_cout_pa`
--

INSERT INTO `armes_cout_pa` (`ID_Coût_PA :`, `Coût_PA :`) VALUES
(1, 50),
(2, 100),
(3, 150),
(4, 200),
(5, 300),
(6, 400);

-- --------------------------------------------------------

--
-- Structure de la table `armes_cout_transmission`
--

CREATE TABLE `armes_cout_transmission` (
  `ID_Coût_Transmission :` tinyint(1) NOT NULL,
  `Coût_Transmission :` smallint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_cout_transmission`
--

INSERT INTO `armes_cout_transmission` (`ID_Coût_Transmission :`, `Coût_Transmission :`) VALUES
(1, 75),
(2, 150),
(3, 225),
(4, 300),
(5, 450),
(6, 600);

-- --------------------------------------------------------

--
-- Structure de la table `armes_dmg`
--

CREATE TABLE `armes_dmg` (
  `ID_Dmg :` tinyint(2) NOT NULL,
  `Dmg :` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_dmg`
--

INSERT INTO `armes_dmg` (`ID_Dmg :`, `Dmg :`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16);

-- --------------------------------------------------------

--
-- Structure de la table `armes_effet`
--

CREATE TABLE `armes_effet` (
  `ID_Effet :` int(11) NOT NULL,
  `Effet :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_effet`
--

INSERT INTO `armes_effet` (`ID_Effet :`, `Effet :`) VALUES
(1, '-'),
(2, 'Vit -5.\r\n L\'unité attaque deux fois lorsqu\'elle initie le combat.'),
(3, 'Atq +20% si avantage tactique.\r\n Atq -20% si désavantage tactique.'),
(4, 'Accélère l\'activation des Aptitudes Spéciales (Compteur -1).'),
(5, 'L\'unité inflige +10 de dégâts lors de l\'activation des Aptitudes Spéciales.'),
(6, 'Efficace contre les unités Cuirassés.');

-- --------------------------------------------------------

--
-- Structure de la table `armes_exclusif`
--

CREATE TABLE `armes_exclusif` (
  `ID_Exclusif :` tinyint(1) NOT NULL,
  `Exclusif :` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_exclusif`
--

INSERT INTO `armes_exclusif` (`ID_Exclusif :`, `Exclusif :`) VALUES
(1, 'Oui'),
(2, 'Non');

-- --------------------------------------------------------

--
-- Structure de la table `armes_modification`
--

CREATE TABLE `armes_modification` (
  `ID :` int(11) NOT NULL,
  `Couleur :` varchar(255) NOT NULL,
  `Type :` tinyint(4) NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Dmg :` tinyint(4) NOT NULL,
  `Por :` tinyint(4) NOT NULL,
  `Effet :` tinyint(4) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Exclusif :` tinyint(1) NOT NULL,
  `Chemin :` varchar(255) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_modification`
--

INSERT INTO `armes_modification` (`ID :`, `Couleur :`, `Type :`, `Nom :`, `Dmg :`, `Por :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Exclusif :`, `Chemin :`, `Lien :`) VALUES
(2, 'Rouge', 1, 'Épée Fer', 6, 1, 1, 1, 1, 'Alfonse, Alm, Cain, Chrom, Corrin [M],  Edgar, Eirika, Eldigan, Eliwood, Fir, Hana, Hinata, Ike, Karel', 2, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `armes_por`
--

CREATE TABLE `armes_por` (
  `ID_Por :` tinyint(1) NOT NULL,
  `Por :` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_por`
--

INSERT INTO `armes_por` (`ID_Por :`, `Por :`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `armes_type`
--

CREATE TABLE `armes_type` (
  `ID_Type :` int(1) NOT NULL,
  `Type :` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `armes_type`
--

INSERT INTO `armes_type` (`ID_Type :`, `Type :`) VALUES
(1, 'Épée'),
(2, 'Lance'),
(3, 'Hache'),
(4, 'Tome'),
(5, 'Souffle'),
(6, 'Arc'),
(7, 'Dague'),
(8, 'Bâton');

-- --------------------------------------------------------

--
-- Structure de la table `bannieres`
--

CREATE TABLE `bannieres` (
  `ID :` int(11) NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Chemin :` varchar(255) NOT NULL,
  `Début :` datetime NOT NULL,
  `Fin :` datetime NOT NULL,
  `Héros F. 1 :` varchar(255) NOT NULL,
  `Héros F. 2 :` varchar(255) NOT NULL,
  `Héros F. 3 :` varchar(255) NOT NULL,
  `Héros F. 4 :` varchar(255) NOT NULL,
  `Héros F. 5 :` varchar(255) NOT NULL,
  `Héros F. 6 :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bannieres`
--

INSERT INTO `bannieres` (`ID :`, `Nom :`, `Chemin :`, `Début :`, `Fin :`, `Héros F. 1 :`, `Héros F. 2 :`, `Héros F. 3 :`, `Héros F. 4 :`, `Héros F. 5 :`, `Héros F. 6 :`) VALUES
(1, 'Focus : Sentiments Profonds', 'Sentiments_Profonds.png', '2017-02-02 08:00:00', '2017-02-15 07:59:59', 'Roy', 'Lyn', 'Takumi', 'Camilla', '', ''),
(2, 'Focus : Héros Légendaires', 'Héros_Légendaires.png', '2017-02-02 08:00:00', '2017-02-15 07:59:59', 'Marth', 'Tiki [Jeune]', 'Daraen [H]', 'Lucina', '', ''),
(3, 'Focus : Liens Familiaux', 'Liens_Familiaux.png', '2017-02-15 08:00:00', '2017-02-27 07:59:59', 'Eirika', 'Ephraim', 'Seliph', 'Julia', '', ''),
(4, 'Daraen fait son Entrée !', 'Tous_contre_Daraen.png', '2017-02-23 08:00:00', '2017-02-27 07:59:59', 'Maria', 'Fir', 'Hawkeye', 'Tiki [Adulte]', '', ''),
(5, 'Focus : Liens Fraternels', 'Liens_Fraternels.png', '2017-02-27 08:00:00', '2017-03-14 07:59:59', 'Eldigan', 'Lachesis', 'Reinhardt', 'Olwen', 'Klein', 'Sanaki'),
(6, 'Focus : Princesses', 'Princesses.png', '2017-03-07 08:00:00', '2017-03-13 07:59:59', 'Eirika', 'Lucina', 'Elise', '', '', ''),
(7, 'Focus : Princes', 'Princes.png', '2017-03-07 08:00:00', '2017-03-13 07:59:59', 'Ephraim', 'Chrom', 'Leo', '', '', ''),
(8, 'Focus : Grande Bataille contre Ursula', 'Tous_contre_Ursula.png', '2017-03-10 08:00:00', '2017-03-14 07:59:59', 'Nino', 'Felicia', 'Effie', 'Setsuna', '', ''),
(9, 'Nouveaux Héros : Ombres et Flammes', 'Ombres_et_Flammes.png', '2017-03-14 08:00:00', '2017-03-30 07:59:59', 'Rebecca', 'Priscilla', 'Lucius', 'Ninian', 'Karel', 'Jaffar'),
(10, 'Focus : Michalis', 'Tous_contre_Michalis.png', '2017-03-24 08:00:00', '2017-03-28 07:59:59', 'Gordin', 'Minerva', 'Eliwood', 'Selena', '', ''),
(11, 'Festival du Printemps : Héros Spéciaux', 'Festival_du_Printemps.png', '2017-03-30 09:00:00', '2017-04-14 08:59:59', 'Chrom [St-Roi du Printemps]', 'Lucina [Ste-Reine Vernale]', 'Xander [Prince du Printemps]', 'Camilla [Princesse Vernale]', '', ''),
(12, 'Focus : Cavaliers Wyverne', 'Cavaliers_Wyverne.png', '2017-04-03 09:00:00', '2017-04-11 08:59:59', 'Minerva', 'Zelcher', 'Camilla', 'Beruka', '', ''),
(13, 'Focus : Chevaliers Pégases', 'Chevaliers_Pégase.png', '2017-04-03 09:00:00', '2017-04-11 08:59:59', 'Palla', 'Cordelia', 'Hinoka', 'Subaki', '', ''),
(14, 'Focus : Grande Bataille contre Nabarl', 'Tous_contre_Nabarl.png', '2017-04-04 09:00:00', '2017-04-09 08:59:59', 'Shiida', 'Sophia', 'Kagero', 'Effie', '', ''),
(15, 'Nouveaux Héros : Monde de Shadows', 'Monde_de_Shadows.png', '2017-04-14 09:00:00', '2017-04-26 08:59:59', 'Alm', 'Faye', 'Lukas', 'Clair', '', ''),
(16, 'Focus : Grande Bataille contre Zephiel', 'Tous_contre_Zephiel.png', '2017-04-20 09:00:00', '2017-04-24 08:59:59', 'Reinhardt', 'Frederick', 'Nowi', 'Hana', '', ''),
(17, 'Focus : Monde de Radiance', 'Monde_de_Radiance.png', '2017-04-26 09:00:00', '2017-05-15 08:59:59', 'Ike', 'Soren', 'Mist', 'Titania', '', ''),
(18, 'Focus : Festival des Héros', 'Festival_des_Héros.png', '2017-04-28 09:00:00', '2017-05-08 08:59:59', 'Hector', 'Azura', 'Ryoma', 'Takumi', '', ''),
(19, 'Focus : Grande Bataille contre Xander', 'Tous_contre_Xander.png', '2017-05-02 09:00:00', '2017-05-08 08:59:59', 'Linde', 'Chrom', 'Cordelia', 'Arthur', '', ''),
(20, 'Focus : Hommes Mages', 'Hommes_Mages.png', '2017-05-08 09:00:00', '2017-05-18 08:59:59', 'Merric', 'Daraen [H]', 'Henry', 'Leo', '', ''),
(21, 'Focus : Femmes Mages', 'Femmes_Mages.png', '2017-05-08 09:00:00', '2017-05-18 08:59:59', 'Linde', 'Julia', 'Sanaki', 'Tharja', '', ''),
(22, 'Nouveaux Héros : Rituel de Shadows', 'Rituel_de_Shadows.png', '2017-05-15 09:00:00', '2017-05-30 08:59:59', 'Celica', 'Mae', 'Boey', 'Genny', '', ''),
(23, 'Focus : Grande Bataille contre Lloyd', 'Tous_contre_Lloyd.png', '2017-05-19 09:00:00', '2017-05-26 08:59:59', 'Ninian', 'Hinoka', 'Klein', 'Raven', '', ''),
(24, 'Focus : Triangle des Armes', 'Triangle_des_Armes.png', '2017-05-22 09:00:00', '2017-06-06 08:59:59', 'Hinata', 'Azura', 'Titania', 'Cecilia', '', ''),
(25, 'Focus (Héros Spéciaux) : Vive les Mariées', 'Vive_les_Mariées.png', '2017-05-30 09:00:00', '2017-06-14 08:59:59', 'Shiida [Mariée de Talys]', 'Lyn [Mariée de Sacae]', 'Cordelia [Mariée Idéale]', 'Charlotte [Mariée Cupide]', '', ''),
(26, 'Focus : Grande Bataille contre Camus', 'Tous_contre_Camus.png', '2017-06-02 09:00:00', '2017-06-09 08:59:59', 'Tiki [Jeune]', 'Jaffar', 'Olwen', 'Fae', '', ''),
(27, 'Focus : Tourmente', 'Tourmente.png', '2017-06-08 09:00:00', '2017-06-22 08:59:59', 'Lucina', 'Tharja', 'Nowi', 'Daraen', '', ''),
(28, 'Focus : Initiative', 'Initiative.png', '2017-06-12 09:00:00', '2017-06-26 08:59:59', 'Lon\'zu', 'Reinhardt', 'Gordin', '', '', ''),
(29, 'Nouveaux Héros : New Mystery', 'New_Mystery.png', '2017-06-14 09:00:00', '2017-06-30 08:59:59', 'Athenais', 'Luke', 'Katarina', 'Roderick', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `héros`
--

CREATE TABLE `héros` (
  `ID :` int(11) NOT NULL,
  `Nom :` varchar(50) NOT NULL,
  `Titre :` varchar(75) NOT NULL,
  `Description :` varchar(255) NOT NULL,
  `Arme :` tinyint(1) UNSIGNED NOT NULL,
  `Couleur :` tinyint(1) UNSIGNED NOT NULL,
  `Déplacement :` tinyint(1) UNSIGNED NOT NULL,
  `Origine :` tinyint(2) UNSIGNED NOT NULL,
  `Voix :` tinyint(4) UNSIGNED NOT NULL,
  `Dessinateur :` tinyint(4) UNSIGNED NOT NULL,
  `Obtention :` tinyint(1) UNSIGNED NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros`
--

INSERT INTO `héros` (`ID :`, `Nom :`, `Titre :`, `Description :`, `Arme :`, `Couleur :`, `Déplacement :`, `Origine :`, `Voix :`, `Dessinateur :`, `Obtention :`, `Lien :`) VALUES
(1, 'Alfonse', 'Prince d\'Askr', 'Prince et membre des Gardiens d\'Askr.\nSa bienveillance et son sérieux n\'ont d\'égal que son amour pour la paix.', 1, 1, 1, 1, 47, 30, 1, 'Alfonse'),
(2, 'Sharena', 'Princesse d\'Askr', 'Princesse du royaume d\'Askr et sœur d\'Alfonse.\r\nToujours enjouée, elle aime se faire de nouveaux amis, notamment parmi les héros.', 2, 2, 1, 1, 58, 30, 1, 'Sharena'),
(3, 'Anna', 'Commandant', 'Combattante aguerrie qui dirige l\'ordre des Gardien d\'Askr, dont Alfonse et Sharena font partie.', 3, 3, 1, 1, 30, 30, 1, 'Anna'),
(4, 'Marth', 'Prince d\'Altea', 'Prince du royaume d\'Altea qui se bat pour sa partie et chérit ses amis.\nApparaît dans Fire Emblem : Mystery of the Emblem', 1, 1, 1, 2, 57, 52, 2, 'Marth');

-- --------------------------------------------------------

--
-- Structure de la table `héros_ajout`
--

CREATE TABLE `héros_ajout` (
  `ID :` int(11) NOT NULL,
  `Nom :` varchar(50) NOT NULL,
  `Description :` varchar(255) NOT NULL,
  `Titre :` varchar(75) NOT NULL,
  `Arme :` tinyint(1) UNSIGNED NOT NULL,
  `Couleur :` tinyint(1) UNSIGNED NOT NULL,
  `Déplacement :` tinyint(1) UNSIGNED NOT NULL,
  `Origine :` tinyint(2) UNSIGNED NOT NULL,
  `Voix :` tinyint(4) UNSIGNED NOT NULL,
  `Dessinateur :` tinyint(4) UNSIGNED NOT NULL,
  `Obtention :` tinyint(1) UNSIGNED NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_ajout`
--

INSERT INTO `héros_ajout` (`ID :`, `Nom :`, `Description :`, `Titre :`, `Arme :`, `Couleur :`, `Déplacement :`, `Origine :`, `Voix :`, `Dessinateur :`, `Obtention :`, `Lien :`) VALUES
(1000, 'Anna', '													Combattante aguerrie qui dirige l\'ordre des Gardien d\'Askr, dont Alfonse et Sharena font partie.												', 'Commandant', 3, 0, 0, 0, 0, 0, 0, ''),
(1001, 'AnnaZE', '													Combattante aguerrie qui dirige l\'ordre des Gardien d\'Askr, dont Alfonse et Sharena font partie.												', 'Commandant', 3, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `héros_arme`
--

CREATE TABLE `héros_arme` (
  `ID_Arme :` tinyint(1) NOT NULL,
  `Arme :` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_arme`
--

INSERT INTO `héros_arme` (`ID_Arme :`, `Arme :`) VALUES
(1, 'Épée'),
(2, 'Lance'),
(3, 'Hache'),
(4, 'Tome'),
(5, 'Souffle'),
(6, 'Arc'),
(7, 'Dague'),
(8, 'Bâton');

-- --------------------------------------------------------

--
-- Structure de la table `héros_couleur`
--

CREATE TABLE `héros_couleur` (
  `ID_Couleur :` tinyint(3) UNSIGNED NOT NULL,
  `Couleur :` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_couleur`
--

INSERT INTO `héros_couleur` (`ID_Couleur :`, `Couleur :`) VALUES
(1, 'Rouge'),
(2, 'Bleu'),
(3, 'Vert'),
(4, 'Gris');

-- --------------------------------------------------------

--
-- Structure de la table `héros_dessinateur`
--

CREATE TABLE `héros_dessinateur` (
  `ID_Dessinateur :` tinyint(4) NOT NULL,
  `Dessinateur :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_dessinateur`
--

INSERT INTO `héros_dessinateur` (`ID_Dessinateur :`, `Dessinateur :`) VALUES
(1, 'AKIRA'),
(2, 'Amagaitaro (アマガイタロー)'),
(3, 'Aoji (あおじ)'),
(4, 'Arai Teruko'),
(5, 'Asatani Tomoyo (麻谷知世)'),
(6, 'bthx'),
(7, 'BUNBUN'),
(8, 'Caou (かおう)'),
(9, 'cuboon'),
(10, 'Daisuke Izuka'),
(11, 'Ebila'),
(12, 'Fujikawa Akira (藤川祥)'),
(13, 'Fujisaka Kimihiko (藤坂公彦)'),
(14, 'Fujiwara Ryo (冨士原良)'),
(15, 'Fuzichoco (藤ちょこ)'),
(16, 'HACCAN'),
(17, 'Haimura Kiyotaka (はいむらきよたか)'),
(18, 'HAKO (羽公)'),
(19, 'Himukai Yuji (日向悠二)'),
(20, 'Hino Shinnosuke (日野慎之助)'),
(21, 'Hoshino Lily (星野リリィ)'),
(22, 'Ichiiro Hako (一色箱)'),
(23, 'Itagaki Hako (板垣ハコ)'),
(24, 'Ito Noizi (いとうのいぢ)'),
(25, 'kaya8'),
(26, 'Kippu (切符)'),
(27, 'Kita Senri (北千里)'),
(28, 'Konfuzi Kokon'),
(29, 'Kotobuki Tsukasa (ことぶきつかさ)'),
(30, 'Kozaki Yusuke (コザキユースケ)'),
(31, 'Kusugi Toku (久杉トク)'),
(32, 'lack'),
(33, 'Maeshima Shigeki (前嶋重機)'),
(34, 'Maiponpon (まいぽんぽん)'),
(35, 'Masao Tsubasa (政尾翼)'),
(36, 'Mayo (まよ)'),
(37, 'Meka (めか)'),
(38, 'Mendako (メンダコ)'),
(39, 'Miwabe Sakura (みわべさくら)'),
(40, 'Miyajima Haru (ミヤジマハル)'),
(41, 'Miyuu (深遊)'),
(42, 'Mizuno Kana (水野加奈)'),
(43, 'Okaya (岡谷)'),
(44, 'pikomaro'),
(45, 'Sasashima Suisei (笹島彗星)'),
(46, 'Sata (沙汰)'),
(47, 'Suekane Kumiko (スエカネクミコ)'),
(48, 'Takagi Masafumi (高木正文)'),
(49, 'Tobi'),
(50, 'Tomioka Jiro (富岡二郎)'),
(51, 'Ueda Yumehito (上田夢人)'),
(52, 'Wada Sachiko (ワダサチコ)'),
(53, 'Yamada Akihiro (山田章博)'),
(54, 'Yamada Kotaro (山田孝太郎)'),
(55, 'Yoshiku (四々九)'),
(56, 'Yura (由良)'),
(57, 'Zaza (ザザ)'),
(58, 'ZIS'),
(59, 'PenekoR (п猫R)');

-- --------------------------------------------------------

--
-- Structure de la table `héros_déplacement`
--

CREATE TABLE `héros_déplacement` (
  `ID_Déplacement :` tinyint(4) NOT NULL,
  `Déplacement :` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_déplacement`
--

INSERT INTO `héros_déplacement` (`ID_Déplacement :`, `Déplacement :`) VALUES
(1, 'Fantassin'),
(2, 'Cuirassé'),
(3, 'Cavalier'),
(4, 'Volant');

-- --------------------------------------------------------

--
-- Structure de la table `héros_modifier`
--

CREATE TABLE `héros_modifier` (
  `ID :` int(11) NOT NULL,
  `Nom :` varchar(50) NOT NULL,
  `Titre :` varchar(75) NOT NULL,
  `Description :` varchar(255) NOT NULL,
  `Arme :` tinyint(1) UNSIGNED NOT NULL,
  `Couleur :` tinyint(1) UNSIGNED NOT NULL,
  `Déplacement :` tinyint(1) UNSIGNED NOT NULL,
  `Origine :` tinyint(2) UNSIGNED NOT NULL,
  `Voix :` tinyint(4) UNSIGNED NOT NULL,
  `Dessinateur :` tinyint(4) UNSIGNED NOT NULL,
  `Obtention :` tinyint(1) UNSIGNED NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_modifier`
--

INSERT INTO `héros_modifier` (`ID :`, `Nom :`, `Titre :`, `Description :`, `Arme :`, `Couleur :`, `Déplacement :`, `Origine :`, `Voix :`, `Dessinateur :`, `Obtention :`, `Lien :`) VALUES
(7, 'Alfonse', 'Prince d\'Askr', '													Prince et membre des Gardiens d\'Askr.\r\nSa bienveillance et son sérieux n\'ont d\'égal que son amour pour la paix.												', 1, 1, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `héros_obtention`
--

CREATE TABLE `héros_obtention` (
  `ID_Obtention :` tinyint(1) NOT NULL,
  `Obtention :` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_obtention`
--

INSERT INTO `héros_obtention` (`ID_Obtention :`, `Obtention :`) VALUES
(1, 'Début du Jeu'),
(2, 'Tirage'),
(3, 'Grande Bataille');

-- --------------------------------------------------------

--
-- Structure de la table `héros_origine`
--

CREATE TABLE `héros_origine` (
  `ID_Origine :` tinyint(4) NOT NULL,
  `Origine :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_origine`
--

INSERT INTO `héros_origine` (`ID_Origine :`, `Origine :`) VALUES
(1, 'Fire Emblem Heroes'),
(2, 'Fire Emblem : Mystery of the Emblem'),
(3, 'Fire Emblem Echoes : Shadows of Valentia'),
(4, 'Fire Emblem : Genealogy of the Holy War'),
(5, 'Fire Emblem : Thracia 776'),
(6, 'Fire Emblem : The Binding Blade'),
(7, 'Fire Emblem : The Blazing Blade'),
(8, 'Fire Emblem : The Sacred Stones'),
(9, 'Fire Emblem : Path of Radiance'),
(10, 'Fire Emblem : Radiant Dawn'),
(11, 'Fire Emblem : Awakening'),
(12, 'Fire Emblem Fates');

-- --------------------------------------------------------

--
-- Structure de la table `héros_statistiques_1_etoile`
--

CREATE TABLE `héros_statistiques_1_etoile` (
  `ID_Stats_1_etoile :` smallint(3) UNSIGNED NOT NULL,
  `PV_1_etoile :` varchar(2) NOT NULL,
  `Atq_1_etoile :` varchar(2) NOT NULL,
  `Vit_1_etoile :` varchar(2) NOT NULL,
  `Déf_1_etoile :` varchar(2) NOT NULL,
  `Rés_1_etoile :` varchar(2) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `héros_statistiques_2_etoile`
--

CREATE TABLE `héros_statistiques_2_etoile` (
  `ID_Stats_2_etoile :` smallint(3) UNSIGNED NOT NULL,
  `PV_2_etoile :` varchar(2) NOT NULL,
  `Atq_2_etoile :` varchar(2) NOT NULL,
  `Vit_2_etoile :` varchar(2) NOT NULL,
  `Déf_2_etoile :` varchar(2) NOT NULL,
  `Rés_2_etoile :` varchar(2) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_statistiques_2_etoile`
--

INSERT INTO `héros_statistiques_2_etoile` (`ID_Stats_2_etoile :`, `PV_2_etoile :`, `Atq_2_etoile :`, `Vit_2_etoile :`, `Déf_2_etoile :`, `Rés_2_etoile :`, `Lien :`) VALUES
(1, '36', '29', '25', '32', '22', 'Alfonse'),
(2, '36', '26', '26', '22', '17', 'Sharena'),
(3, '34', '23', '32', '17', '21', 'Anna');

-- --------------------------------------------------------

--
-- Structure de la table `héros_statistiques_3_etoile`
--

CREATE TABLE `héros_statistiques_3_etoile` (
  `ID_Stats_3_etoile :` smallint(3) UNSIGNED NOT NULL,
  `PV_3_etoile :` varchar(2) NOT NULL,
  `Atq_3_etoile :` varchar(2) NOT NULL,
  `Vit_3_etoile :` varchar(2) NOT NULL,
  `Déf_3_etoile :` varchar(2) NOT NULL,
  `Rés_3_etoile :` varchar(2) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_statistiques_3_etoile`
--

INSERT INTO `héros_statistiques_3_etoile` (`ID_Stats_3_etoile :`, `PV_3_etoile :`, `Atq_3_etoile :`, `Vit_3_etoile :`, `Déf_3_etoile :`, `Rés_3_etoile :`, `Lien :`) VALUES
(1, '39', '31', '22', '28', '19', 'Alfonse'),
(2, '39', '28', '28', '25', '19', 'Sharena'),
(3, '37', '25', '34', '19', '24', 'Anna');

-- --------------------------------------------------------

--
-- Structure de la table `héros_statistiques_4_etoile`
--

CREATE TABLE `héros_statistiques_4_etoile` (
  `ID_Stats_4_etoile :` smallint(3) UNSIGNED NOT NULL,
  `PV_4_etoile :` varchar(2) NOT NULL,
  `Atq_4_etoile :` varchar(2) NOT NULL,
  `Vit_4_etoile :` varchar(2) NOT NULL,
  `Déf_4_etoile :` varchar(2) NOT NULL,
  `Rés_4_etoile :` varchar(2) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_statistiques_4_etoile`
--

INSERT INTO `héros_statistiques_4_etoile` (`ID_Stats_4_etoile :`, `PV_4_etoile :`, `Atq_4_etoile :`, `Vit_4_etoile :`, `Déf_4_etoile :`, `Rés_4_etoile :`, `Lien :`) VALUES
(1, '40', '33', '23', '30', '20', 'Alfonse'),
(2, '40', '30', '30', '26', '20', 'Sharena'),
(3, '38', '27', '36', '20', '25', 'Anna'),
(4, '38', '29', '32', '29', '23', 'Marth');

-- --------------------------------------------------------

--
-- Structure de la table `héros_statistiques_5_etoile`
--

CREATE TABLE `héros_statistiques_5_etoile` (
  `ID_Stats_5_etoile :` smallint(3) UNSIGNED NOT NULL,
  `PV_5_etoile :` varchar(2) NOT NULL,
  `Atq_5_etoile :` varchar(2) NOT NULL,
  `Vit_5_etoile :` varchar(2) NOT NULL,
  `Déf_5_etoile :` varchar(2) NOT NULL,
  `Rés_5_etoile :` varchar(2) NOT NULL,
  `Lien :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_statistiques_5_etoile`
--

INSERT INTO `héros_statistiques_5_etoile` (`ID_Stats_5_etoile :`, `PV_5_etoile :`, `Atq_5_etoile :`, `Vit_5_etoile :`, `Déf_5_etoile :`, `Rés_5_etoile :`, `Lien :`) VALUES
(1, '43', '35', '25', '32', '22', 'Alfonse'),
(2, '43', '32', '32', '29', '22', 'Sharena'),
(3, '41', '29', '38', '22', '28', 'Anna'),
(4, '41', '31', '34', '29', '23', 'Marth');

-- --------------------------------------------------------

--
-- Structure de la table `héros_voix`
--

CREATE TABLE `héros_voix` (
  `ID_Voix :` tinyint(4) NOT NULL,
  `Voix :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `héros_voix`
--

INSERT INTO `héros_voix` (`ID_Voix :`, `Voix :`) VALUES
(1, 'Alexis Tipton'),
(2, 'Amanda C. Miller'),
(3, 'Amber Connor'),
(4, 'Benjamin Diskin'),
(5, 'Brianna Knickerbocker'),
(6, 'Bryce Papenbrook'),
(7, 'Cam Clarke'),
(8, 'Cassandra Lee Morris'),
(9, 'Cherami Leigh'),
(10, 'Chris Hackney'),
(11, 'Christian La Monte'),
(12, 'Christopher Corey Smith'),
(13, 'Cindy Robinson'),
(14, 'Cristina Valenzuela'),
(15, 'David Stanbra'),
(16, 'David Vincent'),
(17, 'DC Douglas'),
(18, 'Delem Donaldson'),
(19, 'Eden Riegel'),
(20, 'Edward Bosco'),
(21, 'Erica Lindbeck'),
(22, 'Erin Fitzgerald'),
(23, 'Greg Chun'),
(24, 'Hunter MacKenzie Austin'),
(25, 'Jamieson Price'),
(26, 'Julianne Alexander'),
(27, 'Julie Ann Taylor'),
(28, 'Julie Maddalena'),
(29, 'Kaiji Tang'),
(30, 'Karen Strassman'),
(31, 'Kate Higgins'),
(32, 'Kira Buckland'),
(33, 'Kyle Hebert'),
(34, 'Kyle McCarley'),
(35, 'Laura Bailey'),
(36, 'Lauren Landa'),
(37, 'Marcella Lentz-Pope'),
(38, 'Marisha Ray'),
(39, 'Matthew Mercer'),
(40, 'Max Mittelman'),
(41, 'Mela Lee'),
(42, 'Michael Sinterniklaas'),
(43, 'Mick Wingert'),
(44, 'Misty Lee'),
(45, 'Natalie Lander'),
(46, 'Patrick Seitz'),
(47, 'Ray Chase'),
(48, 'Rena Strober'),
(49, 'Sam Riegel'),
(50, 'Sarah Blandy'),
(51, 'Sarah Williams'),
(52, 'Stephanie Sheh'),
(53, 'Taliesin Jaffe'),
(54, 'Travis Willingham'),
(55, 'Walden James'),
(56, 'Wendee Lee'),
(57, 'Yuri Lowenthal'),
(58, 'Julie Kliewer');

-- --------------------------------------------------------

--
-- Structure de la table `passifs`
--

CREATE TABLE `passifs` (
  `ID :` int(11) UNSIGNED NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Effet :` varchar(255) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL,
  `Chemin :` varchar(255) NOT NULL,
  `Lien :` varchar(255) NOT NULL,
  `Type Effet :` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `passifs`
--

INSERT INTO `passifs` (`ID :`, `Type :`, `Nom :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Restriction :`, `Chemin :`, `Lien :`, `Type Effet :`) VALUES
(1, 1, 'PV +3', 'Les PV max de l\'unité augmentent de 3.', 2, 2, 'Abel, Arthur', 1, 'PV_+3.png', 'PV_Plus_3', 1),
(2, 1, 'PV +4', 'Les PV max de l\'unité augmentent de 4.', 5, 5, 'Abel, Arthur', 1, 'PV_+4.png', 'PV_Plus_4', 1),
(3, 1, 'PV +5', 'Les PV max de l\'unité augmentent de 5.', 9, 9, 'Abel, Arthur', 1, 'PV_+5.png', 'PV_Plus_5', 1),
(4, 1, 'Coup Fatal 1', 'Confère Atq +2 à l\'unité lorsqu\'elle initie le combat', 3, 3, 'Alfonse, Urusla', 1, 'Coup_Fatal_1.png', 'Coup_Fatal_1', 2),
(5, 1, 'Coup Fatal 2', 'Confère Atq +4 à l\'unité lorsqu\'elle initie le combat', 6, 6, 'Alfonse, Urusla', 1, 'Coup_Fatal_2.png', 'Coup_Fatal_2', 2),
(6, 1, 'Coup Fatal 3', 'Confère Atq +6 à l\'unité lorsqu\'elle initie le combat', 10, 10, 'Alfonse, Urusla', 1, 'Coup_Fatal_3.png', 'Coup_Fatal_3', 2);

-- --------------------------------------------------------

--
-- Structure de la table `passifs_ajout`
--

CREATE TABLE `passifs_ajout` (
  `ID :` int(11) UNSIGNED NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Effet :` varchar(255) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL,
  `Chemin :` varchar(255) NOT NULL,
  `Lien :` varchar(255) NOT NULL,
  `Type Effet :` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `passifs_cout_pa`
--

CREATE TABLE `passifs_cout_pa` (
  `ID_Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_PA :` smallint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `passifs_cout_pa`
--

INSERT INTO `passifs_cout_pa` (`ID_Coût_PA :`, `Coût_PA :`) VALUES
(1, 30),
(2, 40),
(3, 50),
(4, 60),
(5, 80),
(6, 100),
(7, 120),
(8, 150),
(9, 160),
(10, 200),
(11, 240),
(12, 300);

-- --------------------------------------------------------

--
-- Structure de la table `passifs_cout_transmission`
--

CREATE TABLE `passifs_cout_transmission` (
  `ID_Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` smallint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `passifs_cout_transmission`
--

INSERT INTO `passifs_cout_transmission` (`ID_Coût_Transmission :`, `Coût_Transmission :`) VALUES
(1, 45),
(2, 60),
(3, 75),
(4, 90),
(5, 120),
(6, 150),
(7, 180),
(8, 225),
(9, 240),
(10, 300),
(11, 360),
(12, 450);

-- --------------------------------------------------------

--
-- Structure de la table `passifs_modification`
--

CREATE TABLE `passifs_modification` (
  `ID :` int(11) UNSIGNED NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Effet :` varchar(255) NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL,
  `Chemin :` varchar(255) NOT NULL,
  `Lien :` varchar(255) NOT NULL,
  `Type Effet :` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `passifs_restriction`
--

CREATE TABLE `passifs_restriction` (
  `ID_Restriction :` tinyint(1) UNSIGNED NOT NULL,
  `Restriction :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `passifs_restriction`
--

INSERT INTO `passifs_restriction` (`ID_Restriction :`, `Restriction :`) VALUES
(1, 'Aucune'),
(2, 'Utilisateurs d\'Hache uniquement'),
(3, 'Utilisateurs de Tome Bleu uniquement'),
(4, 'Utilisateurs de Souffle uniquement'),
(5, 'Utilisateurs d\'Arc uniquement'),
(6, 'Utilisateurs de Bâton uniquement'),
(7, 'Utilisateurs de Bâton exclus'),
(8, 'Utilisateurs d\'Armes de Mêlée uniquement'),
(9, 'Utilisateurs d\'Armes à Distance uniquement'),
(10, 'Unités Rouges exclus'),
(11, 'Unités Bleues exclus'),
(12, 'Unités Vertes exclus'),
(13, 'Unités Grises exclus'),
(14, 'Cuirassés uniquement'),
(15, 'Cavaliers uniquement'),
(16, 'Volants uniquement'),
(17, 'Volants exclus');

-- --------------------------------------------------------

--
-- Structure de la table `passifs_type`
--

CREATE TABLE `passifs_type` (
  `ID_Type :` tinyint(1) NOT NULL,
  `Type :` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `passifs_type`
--

INSERT INTO `passifs_type` (`ID_Type :`, `Type :`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'S');

-- --------------------------------------------------------

--
-- Structure de la table `passifs_type_effet`
--

CREATE TABLE `passifs_type_effet` (
  `ID_Type_Effet :` tinyint(1) UNSIGNED NOT NULL,
  `Type_Effet :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `passifs_type_effet`
--

INSERT INTO `passifs_type_effet` (`ID_Type_Effet :`, `Type_Effet :`) VALUES
(1, 'Modification de Statistiques'),
(2, 'Bonus de Combat');

-- --------------------------------------------------------

--
-- Structure de la table `soutiens`
--

CREATE TABLE `soutiens` (
  `ID :` int(11) NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Effet :` text NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Contenu de la table `soutiens`
--

INSERT INTO `soutiens` (`ID :`, `Type :`, `Nom :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Restriction :`) VALUES
(1, 1, 'Inversion', 'L\'unité échange de place avec un allié adjacent.', 3, 3, '', 3),
(2, 1, 'Traversée', 'L\'unité se déplace de l\'autre côté d\'un allié adjacent.', 3, 3, '', 3),
(3, 1, 'Pivot', 'Déplace un allié adjacent de l\'autre côté de l\'unité.', 3, 3, '', 3),
(4, 1, 'Repli', 'L\'unité recule d\'une case et tire un allié ciblé avec elle.', 3, 3, '', 3),
(5, 1, 'Bousculade', 'L\'unité repousse d\'une case un allié adjacent.', 3, 3, '', 3),
(6, 1, 'Charge', 'L\'unité repousse de deux cases un allié adjacent.', 3, 3, '', 3),
(7, 1, 'Danse', 'Permet à la cible d\'agir à nouveau.\r\nNe peut être utilisé sur les unités possédant l\'aptitude Chant ou Danse.', 3, 3, '', 1),
(8, 1, 'Chant', 'Permet à la cible d\'agir à nouveau.\r\nNe peut être utilisé sur les unités possédant l\'aptitude Chant ou Danse.', 3, 3, '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `soutiens_ajout`
--

CREATE TABLE `soutiens_ajout` (
  `ID :` int(11) NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Effet :` text NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `soutiens_cout_pa`
--

CREATE TABLE `soutiens_cout_pa` (
  `ID_Coût_PA :` tinyint(3) UNSIGNED NOT NULL,
  `Coût_PA :` smallint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Contenu de la table `soutiens_cout_pa`
--

INSERT INTO `soutiens_cout_pa` (`ID_Coût_PA :`, `Coût_PA :`) VALUES
(1, 0),
(2, 100),
(3, 150),
(4, 200),
(5, 300);

-- --------------------------------------------------------

--
-- Structure de la table `soutiens_cout_transmission`
--

CREATE TABLE `soutiens_cout_transmission` (
  `ID_Coût_Transmission :` tinyint(3) UNSIGNED NOT NULL,
  `Coût_Transmission :` smallint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Contenu de la table `soutiens_cout_transmission`
--

INSERT INTO `soutiens_cout_transmission` (`ID_Coût_Transmission :`, `Coût_Transmission :`) VALUES
(1, 0),
(2, 150),
(3, 225),
(4, 300),
(5, 450);

-- --------------------------------------------------------

--
-- Structure de la table `soutiens_modification`
--

CREATE TABLE `soutiens_modification` (
  `ID :` int(11) NOT NULL,
  `Type :` tinyint(1) UNSIGNED NOT NULL,
  `Nom :` varchar(255) NOT NULL,
  `Effet :` text NOT NULL,
  `Coût_PA :` tinyint(1) UNSIGNED NOT NULL,
  `Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL,
  `Possesseur :` text NOT NULL,
  `Restriction :` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `soutiens_restriction`
--

CREATE TABLE `soutiens_restriction` (
  `ID_Restriction :` tinyint(1) NOT NULL,
  `Restriction :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Contenu de la table `soutiens_restriction`
--

INSERT INTO `soutiens_restriction` (`ID_Restriction :`, `Restriction :`) VALUES
(1, 'Exclusif'),
(2, 'Utilisateurs de Bâton uniquement'),
(3, 'Utilisateurs de Bâton exclus');

-- --------------------------------------------------------

--
-- Structure de la table `soutiens_type`
--

CREATE TABLE `soutiens_type` (
  `ID_Type :` tinyint(1) UNSIGNED NOT NULL,
  `Type :` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `soutiens_type`
--

INSERT INTO `soutiens_type` (`ID_Type :`, `Type :`) VALUES
(1, 'Positionnement');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `appel_aux_armes`
--
ALTER TABLE `appel_aux_armes`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `aptitudes_spéciales`
--
ALTER TABLE `aptitudes_spéciales`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `aptitudes_spéciales_ajout`
--
ALTER TABLE `aptitudes_spéciales_ajout`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `aptitudes_spéciales_compteur`
--
ALTER TABLE `aptitudes_spéciales_compteur`
  ADD PRIMARY KEY (`ID_Compteur :`);

--
-- Index pour la table `aptitudes_spéciales_cout_pa`
--
ALTER TABLE `aptitudes_spéciales_cout_pa`
  ADD PRIMARY KEY (`ID_Coût_PA :`);

--
-- Index pour la table `aptitudes_spéciales_cout_transmission`
--
ALTER TABLE `aptitudes_spéciales_cout_transmission`
  ADD PRIMARY KEY (`ID_Coût_Transmission :`);

--
-- Index pour la table `aptitudes_spéciales_modification`
--
ALTER TABLE `aptitudes_spéciales_modification`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `aptitudes_spéciales_restriction`
--
ALTER TABLE `aptitudes_spéciales_restriction`
  ADD PRIMARY KEY (`ID_Restriction :`);

--
-- Index pour la table `aptitudes_spéciales_type`
--
ALTER TABLE `aptitudes_spéciales_type`
  ADD PRIMARY KEY (`ID_Type :`);

--
-- Index pour la table `armes`
--
ALTER TABLE `armes`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `armes_ajout`
--
ALTER TABLE `armes_ajout`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `armes_cout_pa`
--
ALTER TABLE `armes_cout_pa`
  ADD PRIMARY KEY (`ID_Coût_PA :`);

--
-- Index pour la table `armes_cout_transmission`
--
ALTER TABLE `armes_cout_transmission`
  ADD PRIMARY KEY (`ID_Coût_Transmission :`);

--
-- Index pour la table `armes_dmg`
--
ALTER TABLE `armes_dmg`
  ADD PRIMARY KEY (`ID_Dmg :`);

--
-- Index pour la table `armes_effet`
--
ALTER TABLE `armes_effet`
  ADD PRIMARY KEY (`ID_Effet :`);

--
-- Index pour la table `armes_exclusif`
--
ALTER TABLE `armes_exclusif`
  ADD PRIMARY KEY (`ID_Exclusif :`);

--
-- Index pour la table `armes_modification`
--
ALTER TABLE `armes_modification`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `armes_por`
--
ALTER TABLE `armes_por`
  ADD PRIMARY KEY (`ID_Por :`);

--
-- Index pour la table `armes_type`
--
ALTER TABLE `armes_type`
  ADD PRIMARY KEY (`ID_Type :`);

--
-- Index pour la table `bannieres`
--
ALTER TABLE `bannieres`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `héros`
--
ALTER TABLE `héros`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `héros_ajout`
--
ALTER TABLE `héros_ajout`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `héros_arme`
--
ALTER TABLE `héros_arme`
  ADD PRIMARY KEY (`ID_Arme :`);

--
-- Index pour la table `héros_couleur`
--
ALTER TABLE `héros_couleur`
  ADD PRIMARY KEY (`ID_Couleur :`);

--
-- Index pour la table `héros_dessinateur`
--
ALTER TABLE `héros_dessinateur`
  ADD PRIMARY KEY (`ID_Dessinateur :`);

--
-- Index pour la table `héros_déplacement`
--
ALTER TABLE `héros_déplacement`
  ADD PRIMARY KEY (`ID_Déplacement :`);

--
-- Index pour la table `héros_modifier`
--
ALTER TABLE `héros_modifier`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `héros_obtention`
--
ALTER TABLE `héros_obtention`
  ADD PRIMARY KEY (`ID_Obtention :`);

--
-- Index pour la table `héros_origine`
--
ALTER TABLE `héros_origine`
  ADD PRIMARY KEY (`ID_Origine :`);

--
-- Index pour la table `héros_statistiques_1_etoile`
--
ALTER TABLE `héros_statistiques_1_etoile`
  ADD PRIMARY KEY (`ID_Stats_1_etoile :`);

--
-- Index pour la table `héros_statistiques_2_etoile`
--
ALTER TABLE `héros_statistiques_2_etoile`
  ADD PRIMARY KEY (`ID_Stats_2_etoile :`);

--
-- Index pour la table `héros_statistiques_3_etoile`
--
ALTER TABLE `héros_statistiques_3_etoile`
  ADD PRIMARY KEY (`ID_Stats_3_etoile :`);

--
-- Index pour la table `héros_statistiques_4_etoile`
--
ALTER TABLE `héros_statistiques_4_etoile`
  ADD PRIMARY KEY (`ID_Stats_4_etoile :`);

--
-- Index pour la table `héros_statistiques_5_etoile`
--
ALTER TABLE `héros_statistiques_5_etoile`
  ADD PRIMARY KEY (`ID_Stats_5_etoile :`);

--
-- Index pour la table `héros_voix`
--
ALTER TABLE `héros_voix`
  ADD PRIMARY KEY (`ID_Voix :`);

--
-- Index pour la table `passifs`
--
ALTER TABLE `passifs`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `passifs_ajout`
--
ALTER TABLE `passifs_ajout`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `passifs_cout_pa`
--
ALTER TABLE `passifs_cout_pa`
  ADD PRIMARY KEY (`ID_Coût_PA :`);

--
-- Index pour la table `passifs_cout_transmission`
--
ALTER TABLE `passifs_cout_transmission`
  ADD PRIMARY KEY (`ID_Coût_Transmission :`);

--
-- Index pour la table `passifs_modification`
--
ALTER TABLE `passifs_modification`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `passifs_restriction`
--
ALTER TABLE `passifs_restriction`
  ADD PRIMARY KEY (`ID_Restriction :`);

--
-- Index pour la table `passifs_type`
--
ALTER TABLE `passifs_type`
  ADD PRIMARY KEY (`ID_Type :`);

--
-- Index pour la table `passifs_type_effet`
--
ALTER TABLE `passifs_type_effet`
  ADD PRIMARY KEY (`ID_Type_Effet :`);

--
-- Index pour la table `soutiens`
--
ALTER TABLE `soutiens`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `soutiens_ajout`
--
ALTER TABLE `soutiens_ajout`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `soutiens_cout_pa`
--
ALTER TABLE `soutiens_cout_pa`
  ADD PRIMARY KEY (`ID_Coût_PA :`);

--
-- Index pour la table `soutiens_cout_transmission`
--
ALTER TABLE `soutiens_cout_transmission`
  ADD PRIMARY KEY (`ID_Coût_Transmission :`);

--
-- Index pour la table `soutiens_modification`
--
ALTER TABLE `soutiens_modification`
  ADD PRIMARY KEY (`ID :`);

--
-- Index pour la table `soutiens_restriction`
--
ALTER TABLE `soutiens_restriction`
  ADD PRIMARY KEY (`ID_Restriction :`);

--
-- Index pour la table `soutiens_type`
--
ALTER TABLE `soutiens_type`
  ADD PRIMARY KEY (`ID_Type :`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `appel_aux_armes`
--
ALTER TABLE `appel_aux_armes`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales`
--
ALTER TABLE `aptitudes_spéciales`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales_ajout`
--
ALTER TABLE `aptitudes_spéciales_ajout`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales_compteur`
--
ALTER TABLE `aptitudes_spéciales_compteur`
  MODIFY `ID_Compteur :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales_cout_pa`
--
ALTER TABLE `aptitudes_spéciales_cout_pa`
  MODIFY `ID_Coût_PA :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales_cout_transmission`
--
ALTER TABLE `aptitudes_spéciales_cout_transmission`
  MODIFY `ID_Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales_modification`
--
ALTER TABLE `aptitudes_spéciales_modification`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales_restriction`
--
ALTER TABLE `aptitudes_spéciales_restriction`
  MODIFY `ID_Restriction :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `aptitudes_spéciales_type`
--
ALTER TABLE `aptitudes_spéciales_type`
  MODIFY `ID_Type :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `armes`
--
ALTER TABLE `armes`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT pour la table `armes_ajout`
--
ALTER TABLE `armes_ajout`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
--
-- AUTO_INCREMENT pour la table `armes_cout_pa`
--
ALTER TABLE `armes_cout_pa`
  MODIFY `ID_Coût_PA :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `armes_cout_transmission`
--
ALTER TABLE `armes_cout_transmission`
  MODIFY `ID_Coût_Transmission :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `armes_dmg`
--
ALTER TABLE `armes_dmg`
  MODIFY `ID_Dmg :` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `armes_effet`
--
ALTER TABLE `armes_effet`
  MODIFY `ID_Effet :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `armes_exclusif`
--
ALTER TABLE `armes_exclusif`
  MODIFY `ID_Exclusif :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `armes_modification`
--
ALTER TABLE `armes_modification`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `armes_por`
--
ALTER TABLE `armes_por`
  MODIFY `ID_Por :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `armes_type`
--
ALTER TABLE `armes_type`
  MODIFY `ID_Type :` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `bannieres`
--
ALTER TABLE `bannieres`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `héros`
--
ALTER TABLE `héros`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `héros_ajout`
--
ALTER TABLE `héros_ajout`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
--
-- AUTO_INCREMENT pour la table `héros_arme`
--
ALTER TABLE `héros_arme`
  MODIFY `ID_Arme :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `héros_couleur`
--
ALTER TABLE `héros_couleur`
  MODIFY `ID_Couleur :` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `héros_dessinateur`
--
ALTER TABLE `héros_dessinateur`
  MODIFY `ID_Dessinateur :` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT pour la table `héros_déplacement`
--
ALTER TABLE `héros_déplacement`
  MODIFY `ID_Déplacement :` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `héros_modifier`
--
ALTER TABLE `héros_modifier`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `héros_obtention`
--
ALTER TABLE `héros_obtention`
  MODIFY `ID_Obtention :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `héros_origine`
--
ALTER TABLE `héros_origine`
  MODIFY `ID_Origine :` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `héros_statistiques_1_etoile`
--
ALTER TABLE `héros_statistiques_1_etoile`
  MODIFY `ID_Stats_1_etoile :` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `héros_statistiques_2_etoile`
--
ALTER TABLE `héros_statistiques_2_etoile`
  MODIFY `ID_Stats_2_etoile :` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `héros_statistiques_3_etoile`
--
ALTER TABLE `héros_statistiques_3_etoile`
  MODIFY `ID_Stats_3_etoile :` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `héros_statistiques_4_etoile`
--
ALTER TABLE `héros_statistiques_4_etoile`
  MODIFY `ID_Stats_4_etoile :` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `héros_statistiques_5_etoile`
--
ALTER TABLE `héros_statistiques_5_etoile`
  MODIFY `ID_Stats_5_etoile :` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `héros_voix`
--
ALTER TABLE `héros_voix`
  MODIFY `ID_Voix :` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pour la table `passifs`
--
ALTER TABLE `passifs`
  MODIFY `ID :` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `passifs_ajout`
--
ALTER TABLE `passifs_ajout`
  MODIFY `ID :` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- AUTO_INCREMENT pour la table `passifs_cout_pa`
--
ALTER TABLE `passifs_cout_pa`
  MODIFY `ID_Coût_PA :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `passifs_cout_transmission`
--
ALTER TABLE `passifs_cout_transmission`
  MODIFY `ID_Coût_Transmission :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `passifs_modification`
--
ALTER TABLE `passifs_modification`
  MODIFY `ID :` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `passifs_restriction`
--
ALTER TABLE `passifs_restriction`
  MODIFY `ID_Restriction :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `passifs_type`
--
ALTER TABLE `passifs_type`
  MODIFY `ID_Type :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `passifs_type_effet`
--
ALTER TABLE `passifs_type_effet`
  MODIFY `ID_Type_Effet :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `soutiens`
--
ALTER TABLE `soutiens`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `soutiens_ajout`
--
ALTER TABLE `soutiens_ajout`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- AUTO_INCREMENT pour la table `soutiens_cout_pa`
--
ALTER TABLE `soutiens_cout_pa`
  MODIFY `ID_Coût_PA :` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `soutiens_cout_transmission`
--
ALTER TABLE `soutiens_cout_transmission`
  MODIFY `ID_Coût_Transmission :` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `soutiens_modification`
--
ALTER TABLE `soutiens_modification`
  MODIFY `ID :` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `soutiens_restriction`
--
ALTER TABLE `soutiens_restriction`
  MODIFY `ID_Restriction :` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `soutiens_type`
--
ALTER TABLE `soutiens_type`
  MODIFY `ID_Type :` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
