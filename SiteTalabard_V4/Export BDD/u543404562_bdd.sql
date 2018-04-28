
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2016 at 03:49 PM
-- Server version: 10.0.20-MariaDB-log
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u543404562_bdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `competence`
--

CREATE TABLE IF NOT EXISTS `competence` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `competence`
--

INSERT INTO `competence` (`name`, `type`, `image`, `ID`) VALUES
('Android', 'language', 'Android-Icon.png', 1),
('Windows Phone', 'language', 'Windows-phone-logo.png', 2),
('Ios', 'language', 'IOS.png', 3),
('Objective-C', 'language', 'objective-c.png', 4),
('Java', 'language', 'java.png', 37),
('C#', 'language', 'csharp.png', 6),
('Yaml', 'language', 'yaml.png', 7),
('Jolla', 'language', 'jolla-sailfish-logo.png', 8),
('Cordova', 'language', 'cordova.png', 9),
('JavaFx', 'language', 'JavaFx.png', 10),
('QtMobile', 'language', 'qtmobile.png', 11),
('QML', 'language', 'qml.png', 12),
('Javascript', 'language', 'logo_js.png', 13),
('AngularJs', 'language', 'angularjs.png', 14),
('Bootstrap', 'language', 'bootstrap.png', 15),
('Php', 'language', 'php.png', 16),
('Css', 'language', 'css.png', 17),
('SQL', 'language', 'sql.png', 18),
('HTML5', 'language', 'html5.png', 19),
('Yii Framework PHP', 'language', 'yii_framework.png', 20),
('Windows Mobile', 'language', 'Windows-Mobile-Logo.png', 21),
('Visual Basic for Application', 'language', 'vba.png', 22),
('Visual basic', 'language', 'vb.png', 23),
('Python', 'language', 'python-logo.png', 24),
('C', 'language', 'logo_c.png', 25),
('C++', 'language', 'cplusplus.png', 26),
('Agile', 'tool', 'agile.png', 39),
('Merise', 'tool', 'merise.png', 38),
('Visual Studio', 'tool', 'Visual-Studio.png', 29),
('Android Studio', 'tool', 'studio-logo.png', 36),
('Plsql', 'language', 'plsql.png', 31),
('Netbeans', 'tool', 'netbeans.png', 32),
('Eclipse', 'tool', 'eclipse.png', 33),
('Xcode', 'tool', 'Logo_xcode.png', 34);

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `intitule` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `faceBookLink` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linkedinLink` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `adress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`intitule`, `photo`, `resume`, `name`, `email`, `tel`, `faceBookLink`, `linkedinLink`, `ID`, `adress`) VALUES
('Description Générale', 'image_anonyme.png', 'Je m''appelle Jérémy Talabard. Je suis originaire de Vendat dans l''Allier (03), j''ai 21 ans. J''ai eu mon Baccalauréat Scientifique en 2012. Suite à cela j''ai fait un DUT Informatique et une licence professionnelle développement d''applications pour plateformes mobiles à Clermont-Ferrand. Je suis actuellement en Licence 3 informatique dans le but de faire un Master. Je suis quelqu''un d''autonome et qui n''a pas peur du travail. Grâce aux différents stages et emplois que j''ai réalisés, j''ai acquît une bonne expérience dans le milieu professionnel mais surtout en développement informatique. Mon domaine informatique favori est le développement d''applications mobiles car leurs intérêts dans le monde d''aujourd''hui est capital aussi bien pour les particuliers que les professionnels.', 'Talabard Jérémy', 'jeremy.talabard@hotmail.fr', '0677189651', 'https://www.facebook.com/jeremy.talabard', 'https://www.linkedin.com/profile/view?id=AAIAABYFOeIBA2k2B-Rqw86SJGu1IWol7UksASI&trk=nav_responsive_tab_profile', 1, '39 avenue des Landais 63000 Clermont-Ferrand');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `libl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`name`, `libl`, `link`, `ID`, `type`) VALUES
('Talabard_Jérémy_CV_original.pdf', 'CV Coloré', 'https://www.dropbox.com/s/civatb6142dsc4q/Talabard_J%C3%A9r%C3%A9my_CV_original.pdf?dl=1', 1, 'cv'),
('Talabard_Jérémy_CV_classique.pdf', 'CV Classique', 'https://www.dropbox.com/s/t09lna6yxnfa51i/Talabard_J%C3%A9r%C3%A9my_CV_classique.pdf?dl=1', 2, 'cv');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idlinks` int(11) NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`title`, `subtitle`, `date`, `resume`, `ID`, `idlinks`, `photo`) VALUES
('Baccalauréat Générale scientifique (SI)', 'Lycée Albert Londres Cusset (03)', '2009-2012', 'Le baccalauréat scientifique implique des capacités de concentration, de rigueur, de raisonnement et un goût de l''expérimentation. Son objectif est de développer une réelle culture scientifique fondée sur des connaissances et une approche expérimentale des sciences. ', 1, 4, 'bacS.jpg'),
('DUT informatique', 'Université D''Auvergne Aubière(63)', '2012-2014', 'Le DUT informatique est un diplôme universitaire national à bac + 2 (sur quatre semestres) conduisant essentiellement au métier de développeur de logiciels dans différents langages (C, C++, JAVA, C#, PHP, …), d''administrateur de systèmes d''exploitation, de bases de données et de réseaux. Il est aussi un excellent diplôme généraliste, alliant la théorie à la pratique.', 2, 5, 'iut.jpg'),
('Licence Professionnelle Génie logiciel, développement d''applications pour plateformes mobiles', 'Université D''Auvergne Aubière(63)', '2014-2015', 'Cette licence spécialise des informaticiens sur les thèmes du génie logiciel et de l''informatique mobile. Ainsi, à l''issue de la licence, l''analyse et le développement fiable de logiciels auront été détaillés avec le Java, le C#, le C++ et l''ObjectiveC. Des supports variés de développement sont à la disposition des étudiants afin qu''ils soient capables de développer pour les téléphones portables et les tablettes du marché (Windows phone, Android, IOs), ainsi que pour de supports plus exceptionnels (Sailfish, QT mobile).', 3, 6, 'dev_mobile.png'),
('Licence 3 Informatique ', 'Université Blaise Pascal à Aubière(63)', '2015-2016', 'L''objectif de la licence Informatique est de donner une connaissance approfondie des systèmes informatiques, de leurs applications et des méthodes de conception de logiciels. Elle propose une formation de base solide dans les domaines fondamentaux de l''informatique : algorithmique, architecture, réseaux, systèmes d''exploitation, génie logiciel, bases de données, mathématiques pour l''informatique, recherche opérationnelle, recouvrant ainsi tous les grands domaines de l''Informatique.', 4, 7, 'ubp.png');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE IF NOT EXISTS `head` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subsubtitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`ID`, `title`, `subtitle`, `subsubtitle`, `resume`) VALUES
(0, 'Talabard Jérémy', 'Développeur d''applications pour plateformes mobiles', 'En recherche de stage', 'Vous trouverez sur ce site toutes mes formations, mes projets, mes loisirs et toutes mes compétences dans le domaine de l''informatique.'),
(1, 'Formations', '', '', 'Pour connaître mon parcours scolaire, universitaire et mes formations professionnelles.'),
(2, 'Projets et Stages', '', '', 'Pour connaître les projets que j''ai réalisé au cours de mes différentes formations et mes projets personnels ainsi que pour connaître les stages que j''ai eu la chance de faire.'),
(3, 'Loisirs', '', '', '''Un esprit sain dans un corps sain'''),
(4, 'Emplois', '', '', 'Pour connaître mes emplois et pour montrer mes capacités à m''adapter à des environnements différents.'),
(5, 'Mes compétences informatiques', '', '', ''),
(6, 'Administration', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hobie`
--

CREATE TABLE IF NOT EXISTS `hobie` (
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `idlinks` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hobie`
--

INSERT INTO `hobie` (`photo`, `title`, `subtitle`, `date`, `resume`, `idlinks`, `ID`) VALUES
('jogging.jpg', 'Course à pied', 'Amateur', '', 'La course à pied me permet de me vider l''esprit, mais elle m''apporte aussi un gain de souffle et d''énergie pour les autres sports.', 12, 1),
('theatre.jpg', 'Théâtre', 'Compagnie Pattafyx à Vendat (03)', '', 'Je fais du théâtre depuis l''âge de dix ans. Cette activité m''a permis de m''ouvrir vers les personnes, de tenir des longs discours et d''être à l''aise à l''oral.', 13, 2),
('judo.jpg', 'Judo/Jujitsu', 'Licencié au Martres de Veyre (63)', '', 'Je pratique le judo depuis 15 ans. Je suis ceinture noire. J''aime ce sport parce qu''il permet de se défouler tout en apprenant à se contrôler. De plus, le code moral est très important, il va au delà du Judo car ces valeurs sont applicables dans la vie en générale.', 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=78 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ID`, `name`) VALUES
(1, 'Android-Icon.png'),
(64, 'agile.png'),
(3, 'angularjs.png'),
(4, 'bacS.jpg'),
(5, 'benevolat.jpg'),
(6, 'bootstrap.png'),
(7, 'cordova.png'),
(8, 'cplusplus.png'),
(9, 'csharp.png'),
(10, 'css.png'),
(11, 'dev_mobile.png'),
(12, 'eclipse.png'),
(13, 'formation.jpg'),
(14, 'formation.png'),
(15, 'html5.png'),
(16, 'image_anonyme.png'),
(17, 'ionic.png'),
(18, 'IOS.png'),
(19, 'iut.jpg'),
(20, 'JavaFx.png'),
(21, 'java-logo.png'),
(22, 'JeuxVideoImageApp.png'),
(23, 'jogging.jpg'),
(24, 'jolla-sailfish-logo.png'),
(25, 'Jretouch.png'),
(26, 'judo.jpg'),
(27, 'logo_c.png'),
(28, 'logo_js.png'),
(29, 'logo_PDD.png'),
(30, 'logo_ubp.png'),
(31, 'Logo_xcode.png'),
(32, 'logoExcel_VBA.png'),
(33, 'merise.png'),
(34, 'Microsoft-VBA-Large.png'),
(35, 'netbeans.png'),
(36, 'objective-c.png'),
(37, 'osw.png'),
(38, 'patifrais.jpg'),
(39, 'pattern.png'),
(40, 'php.png'),
(41, 'plsql.png'),
(42, 'poker.png'),
(43, 'projet.jpg'),
(44, 'projet.png'),
(45, 'python-logo.png'),
(46, 'qml.png'),
(47, 'qtmobile.png'),
(48, 'Responsive-Design.jpg'),
(49, 'rwd.jpg'),
(50, 'sql.png'),
(51, 'studio-logo.png'),
(52, 'tbf.png'),
(53, 'theatre.jpg'),
(54, 'ubp.png'),
(55, 'uda_logo.jpg'),
(56, 'UML-Logo.png'),
(57, 'vb.png'),
(58, 'vba.png'),
(59, 'Visual-Studio.png'),
(60, 'Windows-Mobile-Logo.png'),
(61, 'Windows-phone-logo.png'),
(62, 'yaml.png'),
(63, 'yii_framework.png'),
(65, 'bootstrap.png'),
(66, 'ionic.png'),
(67, 'java.png'),
(68, 'JavaFx.png'),
(69, 'UML.png'),
(70, 'plsql.png'),
(71, 'vb.png'),
(72, 'GRTGaz.jpg'),
(73, 'geotechniquegeniecivil7.jpg'),
(74, 'screenShotFunnyBird.png'),
(75, 'chemistryQuiz.png'),
(76, 'logo_PM_2.png'),
(77, 'PM.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `idlinks` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`photo`, `title`, `subtitle`, `date`, `resume`, `idlinks`, `ID`) VALUES
('benevolat.jpg', 'Bénévolat (03)', 'Aide à l''organisation d''événementiel', 'De 2011 à 2016', 'Au sein de ma compagnie de théâtre, je participe à la réalisation d''un repas afin d''apporter de l''argent pour réaliser les spectacles. Mais j''ai aussi participé à l''organisation de la brocante de mon ancien club de Judo à Vendat (03).', 8, 1),
('GRTGaz.jpg', 'GRTGaz (03)', 'Agent administratif', 'Eté 2013', 'Le but de ce travail était de gérer et de trier des documents qui ont été déménagé depuis un autre local. La patience et l''organisation étaient cruciales pour réaliser ce travail.', 9, 2),
('patifrais.jpg', 'Patifrais (03)', 'Livraison à domicile de produits frais', 'Eté 2013/2014', 'Le but de ce travail était de faire une tournée en camionnette réfrégérée, dans un secteur géographique précis et de vendre des produits frais comme des viennoiseries, des desserts ou des plats cuisinés à des clients. (ou de trouver des nouveaux clients) C''est un travail compliqué qui nécessite une bonne organisation pour la gestion des stocks et pour suivre correctement la tournée. De plus, il faut être à l''écoute des besoins du client et très autonome.', 10, 3),
('geotechniquegeniecivil7.jpg', 'Aide Tp pour le concours enseignants CAPLP', 'Lycée P.J. Bonté Riom 63200', '06 Juin 2016 - 11 Juin 2016', 'Ce travail avait pour but d''apporter une aide aux candidats du concours dans la phase des Travaux pratiques; étant dans la section Génie Civil option construction les candidats ont forcément besoin d''une aide pour porter et installer du matériel, mesurer, tracer, faire du béton... Cette expérience m''a été bénéfique car j''ai appris différentes choses en construction, j''ai du être autonome et comprendre par moi même.\r\nNote :  le concours du CAPLP permet d''enseigner dans un lycée professionnel de l''enseignement public.', 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `importance` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `libllink` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idLinks` int(11) NOT NULL,
  `libl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`importance`, `url`, `link`, `libllink`, `ID`, `idLinks`, `libl`) VALUES
('0', '1', 'https://www.dropbox.com/s/econ14cdqhhvnet/Talabard_J%C3%A9r%C3%A9my_Note%20Bac.jpg?dl=1', 'Talabard_Jérémy_Note Bac.jpg', 1, 4, 'Note Bac'),
('1', '0', 'http://www.onisep.fr/Choisir-mes-etudes/Au-lycee-au-CFA/Au-lycee-general-et-technologique/Les-bacs-generaux/Le-bac-S-scientifique', 'http://www.onisep.fr/Choisir-mes-etudes/Au-lycee-au-CFA/Au-lycee-general-et-technologique/Les-bacs-generaux/Le-bac-S-scientifique', 2, 4, 'Détail du BAC S'),
('1', '1', 'https://www.dropbox.com/s/lp4fufzs432mlb4/Licence_Informatique.pdf?dl=1', 'Licence_Informatique.pdf', 3, 7, 'Détail de la Licence'),
('1', '1', 'https://www.dropbox.com/s/v40vok4hl8gi3dr/Licence_pro.pdf?dl=1', 'Licence_pro.pdf', 4, 6, 'Détail de la Licence Pro'),
('0', '1', 'https://www.dropbox.com/s/ccmkkhdj3nicx86/Talabard_J%C3%A9r%C3%A9my_Feuille%20de%20Note_Licence_Pro.pdf?dl=1', 'Talabard_Jérémy_Feuille.pdf', 5, 6, 'Notes Licence'),
('0', '1', 'https://www.dropbox.com/s/x9m0pi5cutjnl4m/Talabard_J%C3%A9r%C3%A9my_attestation_diplome_licence_pro.jpg?dl=1', 'Talabard_Jérémy_attestation_diplome_licence_pro.jpg', 6, 6, 'Diplôme Licence Pro'),
('1', '1', 'https://www.dropbox.com/s/x3mk41dh300e3iu/DUT_Info.pdf?dl=1', 'DUT_Info.pdf', 7, 5, 'Détail du DUT'),
('0', '1', 'https://www.dropbox.com/s/vt73pj7pqwy2xl4/Talabard_J%C3%A9r%C3%A9my_Diplome_DUT.jpg?dl=1', 'Talabard_Jérémy_Diplome_DUT.jpg', 8, 5, 'Diplôme DUT'),
('0', '1', 'https://www.dropbox.com/s/7uicuneniz98p5l/JeuxVideo.apk?dl=1', 'JeuxVideo.apk', 9, 22, 'APK du Projet'),
('0', '1', 'https://www.dropbox.com/s/hjp9ch1u3j8o6cn/Pattern.apk?dl=1', 'Pattern.apk', 10, 21, 'APK du Projet'),
('0', '1', 'https://www.dropbox.com/s/6g1texeuwzwh9xj/Talabard_J%C3%A9r%C3%A9my_Rapport_Stage%20CG.pdf?dl=1', 'Talabard_Jérémy_Rapport_Stage CG.pdf', 11, 19, 'Rapport du Stage'),
('0', '1', 'https://www.dropbox.com/s/gazbtihtpua3z4r/Talabard_J%C3%A9r%C3%A9my_Poker_Rapport.pdf?dl=1', 'Talabard_Jérémy_Poker_Rapport.pdf', 12, 18, 'Rapport de projet'),
('0', '1', 'https://www.dropbox.com/s/l5utyj0yngm57ly/Talabard_J%C3%A9r%C3%A9my_Poker%20table.zip?dl=1', 'Talabard_Jérémy_Poker table.zip', 13, 18, 'Code et exécutable de la table de jeu'),
('0', '1', 'https://www.dropbox.com/s/q47sw5mib8ocdd9/Talabard_J%C3%A9r%C3%A9my_Poker_application.apk?dl=1', 'Talabard_Jérémy_Poker_application.apk', 14, 18, 'Exécutable Android'),
('0', '1', 'https://www.dropbox.com/s/2sdstv0wn4z41ew/Talabard_J%C3%A9r%C3%A9my_Rapport_Stage%20TBF.pdf?dl=1', 'Talabard_Jérémy_Rapport_Stage TBF.pdf', 15, 17, 'Rapport de Stage'),
('0', '1', 'https://www.dropbox.com/s/eibgrwn4wu1s4dt/Talabard_J%C3%A9r%C3%A9my_Rapport_Retoucheur%20image.pdf?dl=1', 'Talabard_Jérémy_Rapport_Retoucheur_image.pdf', 16, 15, 'Rapport de projet'),
('0', '1', 'https://www.dropbox.com/s/gsx98m32g3kyobv/Talabard_J%C3%A9r%C3%A9my_JRetouch.7z?dl=1', 'Talabard_Jérémy_JRetouch.7z', 17, 15, 'Projet'),
('1', '1', 'https://www.dropbox.com/s/043kynfi17m2kvy/Chemistry%20Quiz.pdf?dl=1', 'Quemistry_Quiz.pdf', 18, 24, 'Rapport'),
('0', '1', 'https://www.dropbox.com/s/jc5sqf4v48c3o1v/ProjectEnglish.apk?dl=1', 'quemistryQuiz.apk', 19, 24, 'APK du Projet'),
('0', '1', 'https://www.dropbox.com/s/3p38hxo3s485nrh/Dossier%20Final%20ProjectManagement.pdf?dl=0', 'ProjectManagement.pdf', 20, 25, 'Rapport'),
('0', '1', 'https://www.dropbox.com/s/uhnalb811ynjd6w/ProjectManagement.rar?dl=1', 'ProjectManagement.rar', 21, 25, 'Application');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`ID`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `idlinks` int(11) NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`title`, `photo`, `subtitle`, `resume`, `idlinks`, `date`, `ID`) VALUES
('JRetouch', 'Jretouch.png', 'Réalisation d''un logiciel de retouche d''images', 'Au cours de mon DUT, j''ai réalisé un projet par groupe de quatre. Le but était de faire un logiciel en Java (Swing) en étudiant tout les algorithmes permettant la transformation d''une image, de rendre ce logiciel ''User friendly'' et d''apprendre à réaliser un logiciel en groupe tout en mettant au courant notre tuteur de l''avancement du projet grâce à un blog.', 15, 'Octobre 2013-Mars 2014', 1),
('Gestionnaire de planning chez TBF', 'Microsoft-VBA-Large.png', 'Améliaration d''un outil de planning sous excel', 'Automatisation de tâches répétitives sous excel grâce à des macros en Visual Basic pour Applications.', 16, 'Septembre 2014', 2),
('Stage chez Transport Blanquet et Fils (63)', 'tbf.png', 'Amélioration d''un outil de traçabilité', 'L''outil de traçabilité est utilisé par des chauffeurs pour scanner des sacoches bancaires de sorte à connaître son itinéraire et l''heure de passage. Il a donc fallu reprendre un site internet développé avec le Framework PHP Yii, et aussi améliorer l''application faite sur des appareils Windows Mobile en Visual Basic en apportant plus de fonctionnalités.', 17, 'Mars 2014-Mai 2014', 3),
('Réalisation d''un jeu de poker en réseau', 'poker.png', 'Création d''un serveur sur ordinateur servant de table de jeu, création d''une application mobile perm', 'Dans le cadre de ma licence professionnelle, j''ai réalisé un projet avec 2 autres collègues. Nous avons suivi la méthode de travail Scrum. En dix semaines, nous avons découvert JavaFx et réalisé la table de jeu dans ce langage. Nous avons implémenté quasiment toutes les règles du Texas Holdem Poker. Et nous pouvions jouer une partie à plusieurs grâce à une application Android qui permet de voir sa main, de miser mais aussi de se coucher en faisant glisser les cartes pour qu''elles arrivent sur la table de jeu. ', 18, 'Octobre 2014 - Décembre 2014', 4),
('Stage Conseil Général du Puy-de-Dôme', 'osw.png', 'Etude de différentes possibilités pour adapter un site internet existant vers un environnement mobil', 'Au cours de ce stage, j''ai réalisé des web services permettant d''alimenter en données une future application mobile. Pour réaliser cette application, j''ai étudié différentes possibilités afin de montrer toutes les technologies mobiles au Conseil Général comme le responsive design, une application native Android ou encore une application hybride en Ionic et Cordova.', 19, 'Février 2015-Juillet 2015', 5),
('Réalisation d''un site responsive design (Projet personnel)', 'rwd.jpg', 'Conception d''un site faisant office de Curriculum Vitae et dans le but de m''entraîner sur des techno', 'Vous naviguez depuis tout à l''heure sur ce site, c''est moi qui l''ai conçu. Tout d''abord une première version avec Bootstrap et ensuite une seconde en m''inspirant de plusieurs template de responsive design.', 20, 'Septembre 2015', 6),
('Réalisation d''une application Android (Projet personnel)', 'pattern.png', 'Création d''une application permettant de lister les patrons de conception du Gang of Four', 'J''ai conçu cette application dans le but de me perfectionner en Android et de me remémorer les patrons de conception. Les données sont liées à une base de données SQLite sur le téléphone, on y trouve aussi des animations.', 21, 'Octobre 2015', 7),
('Réalisation d''une application Android (Projet personnel)', 'JeuxVideoImageApp.png', 'Création d''une application permettant de récupérer les flux RSS de JeuxVideo.com', 'J''ai conçu cette application dans le but de me perfectionner en Android. Des données sont stockées dans une base SQLite,le contenu de cette base est téléchargé depuis une URL. Le reste des données est mis à jour via une connexion internet en parsant des flux RSS. J''utilise dans cette application un SwipeRefreshLayout qui permet de rafraîchir une liste mais aussi des WebView et des VideoView. ', 22, 'Novembre 2015', 8),
('Funny Bird', 'screenShotFunnyBird.png', 'Application Android ', 'Jeux fait avec Unity 3D s''inspirant du célèbre Flappy Bird.', 23, 'Janvier 2016', 9),
('Chemistry Quiz', 'chemistryQuiz.png', 'Application Android de question de chimie', 'Dans le cadre du cours d''anglais de ma L3 informatique, j''ai réalisé une application Android posant des questions sur la chimie. Le joueur a 15 secondes pour répondre aux questions. Quand le joueur répond correctement il accumule des points pour changer de niveau. Quand le niveau change la difficultés change aussi. On saisit les questions dans un fichier XML, les questions sont ensuite transformés en requête sqlite via XSLT puis télécharger pour alimenter la base de données locale du téléphone.', 24, 'Mars 2016', 10),
('Project Management', 'PM.PNG', 'Logiciel de gestion de projet', 'Au cours de la troisième année de licence informatique, il nous a été demandé de réaliser un projet par groupe. Nous étions deux pour concevoir cet outil.\r\nNotre projet consiste à développer un logiciel capable de créer des diagrammes de PERT et de GANTT qui sont utilisés dans la gestion de projet et permettent de planifier un projet de façon global. Le résultat attendu est un logiciel capable de gérer un projet dans le temps selon des échéances et des ressources ayant des capacités différentes.', 25, 'Février 2016 - Mai 2016', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`) VALUES
('jetalabard', '9*65C08ab');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
