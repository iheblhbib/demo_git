-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Décembre 2017 à 21:05
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gest_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `Id_commande` varchar(20) NOT NULL,
  `date_commande` date NOT NULL,
  `Id_enseignant` varchar(20) NOT NULL,
  `prods` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`Id_commande`, `date_commande`, `Id_enseignant`, `prods`, `quantite`, `etat`) VALUES
('11020', '2006-12-17', '111445', 0, 5, ''),
('11125', '2017-12-06', '1111', 0, 0, ''),
('1120', '2006-12-17', 'hhhjnvg', 0, 0, ''),
('221', '2017-12-07', '221', 2, 5, 'en attente'),
('221554', '2017-12-07', '11554', 0, 50, ''),
('755823', '0000-00-00', '147455', 0, 0, ''),
('gghhggg', '0000-00-00', 'fffghfe', 0, 0, ''),
('hhg', '2017-12-06', 'nbn', 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `Id_enseignant` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `magasinier`
--

CREATE TABLE `magasinier` (
  `Id_magasinier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `Id_personne` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `Ncin` varchar(8) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profil` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`Id_personne`, `nom`, `prenom`, `Ncin`, `telephone`, `email`, `username`, `password`, `profil`) VALUES
('111', 'jihed', '', '00554422', '55209175', 'soltanijihed3@gmail.com', 'jihed', 'jihed', 'magasinier'),
('112', 'oumaima', 'chargui', '11223355', '11223344', 'oumaima@gmail.com', 'oumaima chargui', 'oumaima', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Ref` varchar(20) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `type_produit` varchar(40) NOT NULL,
  `qte_stock` int(11) NOT NULL,
  `qte_alerte` int(11) NOT NULL,
  `qte_provisoire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`Ref`, `Designation`, `type_produit`, `qte_stock`, `qte_alerte`, `qte_provisoire`) VALUES
('0012', 'prd225', 'prd225', 10000, 2000, 6000),
('2215', 'prd12', 'prd12', 50000, 4500, 5000),
('22251', 'llkkkk', 'jjjhgg', 11254, 132250, 124455),
('22544', 'jihed', 'feutre', 50000, 11225, 2225),
('hhj22015', 'produit4', 'feutre', 9000, 1500, 900),
('jjjjj5578', 'produit33', 'prod', 80000, 2500, 4000),
('jjkk223', 'mlmmlp', 'mmp', 120000, 12000, 221),
('ngbcvb', 'vcxvbv', 'bcvbvcb', 2255, 125, 225);

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `Id_sortie` varchar(20) NOT NULL,
  `qte_sortie` int(11) NOT NULL,
  `date_sortie` date NOT NULL,
  `Ref` varchar(20) NOT NULL,
  `Id_magasinier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sortie`
--

INSERT INTO `sortie` (`Id_sortie`, `qte_sortie`, `date_sortie`, `Ref`, `Id_magasinier`) VALUES
('11220', 50, '2017-12-07', '225544', '2254');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`Id_commande`),
  ADD KEY `Id_enseignant` (`Id_enseignant`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`Id_enseignant`);

--
-- Index pour la table `magasinier`
--
ALTER TABLE `magasinier`
  ADD PRIMARY KEY (`Id_magasinier`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`Id_personne`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Ref`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`Id_sortie`),
  ADD KEY `Id_magasinier` (`Ref`,`Id_magasinier`),
  ADD KEY `Id_magasinier_2` (`Id_magasinier`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
