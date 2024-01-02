-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 02 Janvier 2024 à 11:47
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet_fac`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

CREATE TABLE IF NOT EXISTS `acheteur` (
  `id_acheteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `num_parcelle` int(11) NOT NULL,
  PRIMARY KEY (`id_acheteur`),
  KEY `nom` (`nom`),
  KEY `mail` (`mail`),
  KEY `num_tel` (`num_tel`),
  KEY `num_parcelle` (`num_parcelle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `appartements`
--

CREATE TABLE IF NOT EXISTS `appartements` (
  `id_location` int(11) NOT NULL AUTO_INCREMENT,
  `num_prop_appart` int(11) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `nb_des_pieces` int(11) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `commune` varchar(100) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `avenue` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `photo` varchar(50000) NOT NULL,
  `securite` int(11) NOT NULL,
  `electricity` varchar(50) NOT NULL,
  `eau` varchar(50) NOT NULL,
  `proximite` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`id_location`,`num_prop_appart`),
  KEY `num_prop_appart` (`num_prop_appart`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `appartements`
--

INSERT INTO `appartements` (`id_location`, `num_prop_appart`, `dimension`, `nb_des_pieces`, `pays`, `province`, `ville`, `commune`, `quartier`, `avenue`, `num`, `photo`, `securite`, `electricity`, `eau`, `proximite`, `prix`, `date_enregistrement`) VALUES
(1, 1, '25 sur 30 m', 4, 'rdc', 'nord kivu', 'goma', 'goma', 'himbi', 'bololo', 8, '4.jpg', -40, 'oui', 'oui', 'marche,routes', 50, '2023-10-07'),
(2, 1, '10 sur 20 m', 2, 'rdc', 'nord kivu', 'goma', 'karisimbi', 'katoyi', 'bololo', 9, '5.jpg', -55, 'oui', 'oui', 'stade,marche', 70, '2023-10-07'),
(3, 2, '20 sur 20 m', 3, 'rdc', 'nord kivu', 'goma', 'karisimbi', 'katoyi', 'bololo', 20, '6.jpg', -55, 'oui', 'oui', 'stade,marche,routes', 100, '2023-10-07'),
(4, 2, '20 sur 40 m', 5, 'rdc', 'nord kivu', 'goma', 'goma', 'cclk', 'bololo', 1, '7.jpg', -55, 'oui', 'oui', 'stade,marche,routes,eglise', 300, '2023-10-07'),
(5, 3, '50 sur 50', 9, 'rdc', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'bololo', 6, '8.jpg', -40, 'oui', 'oui', 'stade', 500, '2023-10-07'),
(6, 3, '50 sur 50', 9, 'rdc', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'bololo', 6, '7.jpg', -40, 'oui', 'oui', 'stade,routes', 500, '2023-10-07'),
(7, 6, '10sur 50', 9, 'rdc', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'bololo', 6, 'zone.jpg', -40, 'oui', 'oui', 'lac', 500, '2023-11-22');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `id_contrat` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(50) NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `num_locataire` int(11) NOT NULL,
  `num_location` int(11) NOT NULL,
  PRIMARY KEY (`id_contrat`),
  KEY `num_location` (`num_location`),
  KEY `num_locataire` (`num_locataire`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `locataire`
--

CREATE TABLE IF NOT EXISTS `locataire` (
  `id_locataire` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `num_appart` int(11) NOT NULL,
  PRIMARY KEY (`id_locataire`),
  KEY `nom` (`nom`),
  KEY `mail` (`mail`),
  KEY `num_tel` (`num_tel`),
  KEY `num_appart` (`num_appart`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `parcelle`
--

CREATE TABLE IF NOT EXISTS `parcelle` (
  `id_parcelle` int(11) NOT NULL AUTO_INCREMENT,
  `num_prop_parcelle` int(11) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `commune` varchar(100) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `avenue` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `securite` int(11) NOT NULL,
  `electricity` varchar(50) NOT NULL,
  `eau` varchar(50) NOT NULL,
  `proximite` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`id_parcelle`,`num_prop_parcelle`),
  KEY `num_prop_parcelle` (`num_prop_parcelle`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `parcelle`
--

INSERT INTO `parcelle` (`id_parcelle`, `num_prop_parcelle`, `dimension`, `pays`, `province`, `ville`, `commune`, `quartier`, `avenue`, `num`, `photo`, `securite`, `electricity`, `eau`, `proximite`, `prix`, `date_enregistrement`) VALUES
(1, 1, '20 sur 40', 'RDC', 'nord kivu', 'goma', 'goma', 'kyeshero', 'rumimbi2', 34, 'loginImg.jpg', 70, 'oui', 'oui', 'stade,ecole,universite,marchÃ©,grande route,hospital,eglise,salle de fete', 100000, '2023-10-07'),
(2, 1, '30 sur 50', 'RDC', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'mbonab', 10, 'img1.png', -55, 'oui', 'oui', 'ecole,marchÃ©,eglise,salle de fete', 7000, '2023-10-07'),
(3, 2, '50 sur 50', 'RDC', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'mbonab', 20, '1.jpg', -55, 'oui', 'oui', 'ecole,marchÃ©', 10000, '2023-10-07'),
(4, 2, '50 sur 50', 'RDC', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'mbonab', 20, '2.jpg', -55, 'oui', 'oui', 'marchÃ©,grande route', 20000, '2023-10-07'),
(5, 2, '50 sur 50', 'RDC', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'mbonab', 20, '3.jpg', 70, 'oui', 'oui', 'grande route', 20000, '2023-10-07'),
(6, 3, '50 sur 50', 'RDC', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'mbonab', 20, '9.jpg', 70, 'oui', 'oui', 'grande route', 200000, '2023-10-07'),
(7, 3, '50 sur 50', 'RDC', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'mbonab', 20, '10.jpg', 70, 'oui', 'oui', 'grande route', 199732, '2023-10-07'),
(8, 3, '50 sur 50', 'RDC', 'nord kivu', 'goma', 'KARISIMBI', 'mabanga', 'mbonab', 23, '11.jpg', -55, 'oui', 'oui', 'grande route,salle de fete', 188732, '2023-10-07');

-- --------------------------------------------------------

--
-- Structure de la table `postule_appartement`
--

CREATE TABLE IF NOT EXISTS `postule_appartement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` int(11) NOT NULL,
  `appartement` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `dates` date NOT NULL,
  `garenti` varchar(100) NOT NULL,
  `carte` varchar(100) NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`id`,`client`,`appartement`),
  KEY `client` (`client`),
  KEY `appartement` (`appartement`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `postule_appartement`
--

INSERT INTO `postule_appartement` (`id`, `client`, `appartement`, `montant`, `dates`, `garenti`, `carte`, `date_enregistrement`) VALUES
(1, 3, 3, 2000, '2023-11-05', '3mois', 'SharedScreenshot.jpg', '2023-10-07'),
(2, 3, 4, 3000, '2023-10-07', '1an', 'pq1.jpg', '2023-10-07');

-- --------------------------------------------------------

--
-- Structure de la table `postule_parcelle`
--

CREATE TABLE IF NOT EXISTS `postule_parcelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` int(11) NOT NULL,
  `parcelle` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `carte` varchar(100) NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`id`,`client`,`parcelle`),
  KEY `client` (`client`),
  KEY `parcelle` (`parcelle`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `postule_parcelle`
--

INSERT INTO `postule_parcelle` (`id`, `client`, `parcelle`, `montant`, `carte`, `date_enregistrement`) VALUES
(1, 2, 1, 2000, 'SharedScreenshot.jpg', '2023-10-07'),
(2, 3, 1, 90000, 'SharedScreenshot.jpg', '2023-10-07');

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire_appartement`
--

CREATE TABLE IF NOT EXISTS `proprietaire_appartement` (
  `id_proprietaire` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `num_appart` int(11) NOT NULL,
  PRIMARY KEY (`id_proprietaire`),
  KEY `nom` (`nom`),
  KEY `mail` (`mail`),
  KEY `num_tel` (`num_tel`),
  KEY `num_appart` (`num_appart`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire_parcelle`
--

CREATE TABLE IF NOT EXISTS `proprietaire_parcelle` (
  `id_proprietaire` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `num_parcelle` int(11) NOT NULL,
  PRIMARY KEY (`id_proprietaire`),
  KEY `nom` (`nom`),
  KEY `mail` (`mail`),
  KEY `num_tel` (`num_tel`),
  KEY `num_parcelle` (`num_parcelle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE IF NOT EXISTS `visiteur` (
  `id_visiteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `post_nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`id_visiteur`,`nom`,`mail`,`num_tel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `visiteur`
--

INSERT INTO `visiteur` (`id_visiteur`, `nom`, `post_nom`, `prenom`, `mail`, `adresse`, `num_tel`, `pass`, `date_enregistrement`) VALUES
(1, 'edwige', ' kayihembako', 'mwenge', 'edwigekayihembako@gmail.com', 'goma', 2147483647, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-10-07'),
(2, 'Susanne kays', 'kays', 'Susanne', 'suskayihembako@gmail.com', 'goma', 2147483647, 'f564c4b8475fbf0ba19707e0f2449e714529362f', '2023-10-07'),
(3, 'emilie', 'bade', 'amie', 'emilie@gmail.com', 'rdc/nord-kivu/goma/karisimbi/majengo', 992254338, '7a4d87b213dc12d2e6114dad53a8eb67916a26a1', '2023-10-07'),
(4, 'ed mwenge kays', 'kays', 'Susanne', 'edwigekayihembako@gmail.com', 'goma', 2147483647, '95ea2ad380f2754fc0b93df5e7fb391c24cafbcb', '2023-11-08'),
(5, 'ed mwenge kays', 'kays', 'Susanne', 'edwigekayihembako@gmail.com', 'goma', 2147483647, '95ea2ad380f2754fc0b93df5e7fb391c24cafbcb', '2023-11-08'),
(6, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, 'a0f1490a20d0211c997b44bc357e1972deab8ae3', '2023-11-22'),
(7, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-11-24'),
(8, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-11-24'),
(9, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-11-24'),
(10, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-11-24'),
(11, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-11-24'),
(12, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-11-24'),
(13, 'Susanne', ' kahindo', 'ed', 'susannekasongya@gmail.com', 'knnk', 997650950, '50db8d1598b8a39aab5811b387ecdc3b6ec6a777', '2023-11-24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
