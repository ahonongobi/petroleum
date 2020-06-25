-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 25 juin 2020 à 18:21
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `petroleum321`
--

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaire`
--

CREATE TABLE `beneficiaire` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nometprenom` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `beneficiaire`
--

INSERT INTO `beneficiaire` (`id`, `userid`, `email`, `nometprenom`, `bic`, `iban`, `pays`) VALUES
(1, 10, 'abyssinieajhu@gmail.com', 'zerty', 'z', 'z', 'Nationalité du bénéficiaire'),
(2, 10, 'abyssinieajhu@gmail.com', 'gobi', 'BANAMEX', 'FR12 34 56 7891 0111 2131 4151 617', 'BS'),
(3, 10, 'gobi@gmail.kom', 'gobi abyssinie', 'BANAMEX', 'FR12 34 56 7891 0111 2131 4151 617', 'AZ'),
(4, 10, 'abyssinieajhu2020@gmail.com', 'abyssibie', 'BANAMEX', 'FR12 34 56 7891 0111 2131 4151 617', 'BE'),
(5, 11, 'abyssinieajhu@gmail.com', 'abyssibie', 'BANAMEX', 'FR12 34 56 7891 0111 2131 4151 617', 'BI');

-- --------------------------------------------------------

--
-- Structure de la table `credit`
--

CREATE TABLE `credit` (
  `id` int(10) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `revenue` int(255) DEFAULT NULL,
  `montant` int(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `numero` int(255) DEFAULT NULL,
  `datedemande` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `credit`
--

INSERT INTO `credit` (`id`, `userid`, `name`, `email`, `adresse`, `revenue`, `montant`, `pays`, `numero`, `datedemande`) VALUES
(1, 14, 'kkkkk', NULL, NULL, NULL, NULL, 'k', NULL, NULL),
(2, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(3, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(4, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(5, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(6, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(7, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(8, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(9, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(10, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(11, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(12, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, 'p', NULL, NULL),
(13, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, NULL, NULL, NULL),
(14, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, NULL, NULL, NULL),
(15, 11, 'abyssibie', 'abyssiniea@gmail.com', NULL, NULL, 200, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `suejet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dateenvoi` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inbox`
--

INSERT INTO `inbox` (`id`, `userid`, `suejet`, `message`, `dateenvoi`) VALUES
(1, 10, 'send a message', 'send a messagfe eto ussrr', '2020-06-05 20:27:33.000000'),
(2, 11, 'sujet a propos de petroleum', 'a propos de petroleuem', '2020-06-11 18:14:12.280448'),
(3, 11, 'gobi', 'ssalut', '2020-06-11 18:14:20.637318');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `userid` int(10) NOT NULL,
  `dateenvoie` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `email`, `sujet`, `message`, `userid`, `dateenvoie`) VALUES
(1, 'abyssinieajhu2020@gmail.com', 'salut', ' x-special/nautilus-clipboard\ncopy\nfile:///opt/lampp/htdocs/petroleum/espace-clients/pages/ui/Loader.gif\n', 10, '2020-06-05 20:25:47.862097'),
(2, 'abyssinieajhu2020@gmail.com', 'salaiya', ' bonjoour, je m\'appele goby et je suis un developeur fullstack', 10, '2020-06-05 20:27:33.000000'),
(4, 'abyssinieajhu@gmail.com', 'undefined', 'undefined', 10, '2020-06-07 00:37:17.000000'),
(5, 'abyssinieajhu@gmail.com', 'undefined', 'undefined', 10, '2020-06-07 00:39:06.000000');

-- --------------------------------------------------------

--
-- Structure de la table `souscription`
--

CREATE TABLE `souscription` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `numero` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `datenaissance` varchar(255) NOT NULL,
  `situationmatrimoniale` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `heberge` varchar(255) DEFAULT NULL,
  `notification` varchar(225) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `revenusmenusel` int(255) DEFAULT NULL,
  `typedebit` varchar(255) DEFAULT NULL,
  `montantpret` int(255) DEFAULT NULL,
  `typedeversement` varchar(255) DEFAULT NULL,
  `codevalid` varchar(10) DEFAULT NULL,
  `solde` decimal(65,0) NOT NULL DEFAULT 0,
  `avenir` decimal(65,0) NOT NULL DEFAULT 0,
  `previsionnel` decimal(65,0) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `souscription`
--

INSERT INTO `souscription` (`id`, `name`, `numero`, `email`, `genre`, `nationalite`, `datenaissance`, `situationmatrimoniale`, `photo`, `adresse`, `pays`, `heberge`, `notification`, `profession`, `revenusmenusel`, `typedebit`, `montantpret`, `typedeversement`, `codevalid`, `solde`, `avenir`, `previsionnel`) VALUES
(1, 'goo', 321321, 'abyssiniea@gmail.com', 'H', 'BY', '2020-06-03', 'celibataire', 'banner.jpg', 'goi', 'fran', 'oui', 'sms', 'designe', 2000, NULL, NULL, NULL, 'nCS5', '0', '0', '0'),
(2, 'gobi', 33222, 'abyssinieajhpu@gmail.com', 'H', 'BE', '2020-06-10', 'celibataire', 'me.jpg', 'goi', 'fran', 'oui', 'sms', 'designe', 2000, NULL, NULL, NULL, NULL, '0', '0', '0'),
(3, 'trsois', 3214711, 'abyssiniehu@gmail.com', 'H', 'BT', '2020-07-01', 'mariee', 'me.jpg', 'goi', 'fran', 'oui', 'sms', 'designe', 2000, NULL, NULL, NULL, NULL, '0', '0', '0'),
(4, 'salut', 321321, 'abyssinieajhu@gmail.com', 'H', 'BO', '2020-06-10', 'mariee', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(5, 'salut', 321321, 'abyssinieajhu202@gmail.com', 'H', 'BO', '2020-06-10', 'mariee', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(7, 'salut', 321321, 'abyssinieajhu2000@gmail.com', 'H', 'BO', '2020-06-10', 'mariee', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(8, 'salut', 321321, 'abyssinieajhu2020@gmail.com', 'H', 'BO', '2020-06-10', 'mariee', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(9, 'salut', 321321, 'abyssinieajhufinis@gmail.com', 'H', 'BO', '2020-06-10', 'mariee', 'banner.jpg', 'belgique2', 'beke', 'oui', 'sms', 'desiss', 3000, NULL, NULL, NULL, NULL, '0', '0', '0'),
(10, 'salutss', 321321, 'gob@gmail.com', 'H', 'BO', '2020-06-10', 'mariee', '1591450272.jpg', 'belgique3', 'fr', 'oui', 'sms', 'analyste', 3000000, NULL, NULL, NULL, '123', '980', '0', '0'),
(11, 'goby abysssinie', 321321, 'gobi@gmail.com', 'F', 'BO', '2020-06-10', 'mariee', 'banner.jpg', 'belgique3', 'fr', 'oui', 'sms', 'analyste', 3000000, NULL, NULL, NULL, '321', '800808', '0', '0'),
(12, 'salutss', 321321, 'gobdoub@gmail.com', 'F', 'BO', '2020-06-10', 'mariee', 'banner.jpg', 'usa', 'usa', 'oui', 'sms', 'analyses', 3000000, NULL, NULL, NULL, NULL, '0', '0', '0'),
(13, 'salutss', 321321, 'gobdoubantork@gmail.com', 'F', 'BO', '2020-06-10', 'mariee', 'banner.jpg', 'erty', 'qsdfg', 'oui', 'sms', 'google developer ', 200000, 'immediat', 300000, 'western union', NULL, '0', '0', '0'),
(14, 'arnelle', 333322, 'abyssinidddea@gmail.com', 'H', 'BA', '2020-06-11', 'celibataire', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(15, 'arnelle', 333322, 'abyssinidddea@gmail.com', 'H', 'BA', '2020-06-11', 'celibataire', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(16, 'arnelle', 333322, 'abyssinidddea@gmail.com', 'H', 'BA', '2020-06-11', 'celibataire', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(17, 'arnelle', 333322, 'abyssinidddea@gmail.com', 'H', 'BA', '2020-06-11', 'celibataire', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(18, 'arnelle', 333322, 'abyssinidddea@gmail.com', 'H', 'BA', '2020-06-11', 'celibataire', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(19, 'arnelle', 333322, 'abyssinidddea@gmail.com', 'H', 'BA', '2020-06-11', 'celibataire', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(20, 'arnelle', 333322, 'abyssinidddea@gmail.com', 'H', 'BA', '2020-06-11', 'celibataire', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0'),
(21, 'kkkk', 333322, 'abyssinieajhu@gmail.com', 'F', 'BA', '2020-06-25', 'mariee', 'banner.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0');

-- --------------------------------------------------------

--
-- Structure de la table `virement`
--

CREATE TABLE `virement` (
  `id` int(10) NOT NULL,
  `myid` int(10) NOT NULL,
  `datevirement` varchar(30) NOT NULL DEFAULT 'current_timestamp(6)',
  `typevirement` varchar(255) NOT NULL,
  `nombeneficiaire` varchar(255) NOT NULL,
  `banquenom` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `montant` int(255) NOT NULL,
  `paysbeneficiaire` varchar(255) NOT NULL,
  `motisvirement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `virement`
--

INSERT INTO `virement` (`id`, `myid`, `datevirement`, `typevirement`, `nombeneficiaire`, `banquenom`, `bic`, `iban`, `email`, `montant`, `paysbeneficiaire`, `motisvirement`) VALUES
(1, 10, 'Euro', '12/12/200', 'motisvirement ', 'motisvirement ', 'ATLAFR3214', 'FR1242484645214224547', 'abyssinieajhu@gmail.com', 200, 'BA', 'motisvirement '),
(2, 10, 'Euro', '12/12/200', 'gobi', 'gobi', 'ATLAFR3214', 'FR12222344477555886', 'abyssinidddea@gmail.com', 200, 'Choisir votre Nationalité...', '200'),
(3, 10, '04/06/20', 'Euro', 'typevirement', 'typevirement', 'ATKAEDFE233', '200', 'abyssinieaaa@gmail.com', 300, 'BA', 'atypevirement'),
(4, 11, '07/06/20', 'Euro', 'gobi', 'gobi', 'BANAMEX', 'FR1242484645214224547', 'abyssiniea@gmail.com', 200, 'BD', 'transfter');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `souscription`
--
ALTER TABLE `souscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `virement`
--
ALTER TABLE `virement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `souscription`
--
ALTER TABLE `souscription`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `virement`
--
ALTER TABLE `virement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
