-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 oct. 2021 à 15:50
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mediatheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `password`, `ip`, `token`) VALUES
(1, 'sebastien', 'pazdyka@gmail.com', '$2y$12$90Cz3NINWT/MDFOb8BRvn.VzdVuCckgjb0kYsk.GyZdRfYCi9FH1C', '::1', '45dea18dc4c4d4ce0f375b754e9d1afa69b5d4c83107e41ba386d96384e355b687792e068832a394ed4cf240033abb1c32014e5d2a574b3792c105184af23a13');

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `titreliv` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`id`, `titreliv`, `amount`, `time`) VALUES
(1, 'LA PESTE', '1', '2021-10-20 23:19:57');

-- --------------------------------------------------------

--
-- Structure de la table `habitant`
--

DROP TABLE IF EXISTS `habitant`;
CREATE TABLE IF NOT EXISTS `habitant` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prénom` varchar(100) NOT NULL,
  `adresse_postale` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `habitant`
--

INSERT INTO `habitant` (`id`, `nom`, `prénom`, `adresse_postale`) VALUES
(1, 'AMMAN', 'PATRICK', '4 RUE DE LA BOUSTIFAILLE'),
(2, 'LACOURT', 'DENIS', '22 RUE DE METZ'),
(3, 'CULIGHAN', 'VERA', '32 RUE MOZART'),
(4, 'VEGA', 'ZOE', '5 RUE DE L\'USINE'),
(5, 'ROBERT', 'LAURENT', '3 AVENUE LONGUE'),
(6, 'BOLAIRE', 'ANNIE', '55 AVENUE DE LA VIERGE'),
(7, 'COOPER', 'FLORA', '2 RUE DE LA PAIX'),
(8, 'LAVAL', 'ERIC', '13 RUE DU CHENIL'),
(9, 'SORIN', 'DANIEL', '15 RUE DES CHAMPS'),
(10, 'LONGFORD', 'NORA', '45 RUE DE LA BELLE');

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text NOT NULL,
  `token` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `job`
--

INSERT INTO `job` (`id`, `pseudo`, `email`, `password`, `token`, `ip`) VALUES
(1, 'David', 'david@email.fr', '$2y$12$tFToJYZnXsDV635T6JXAH.Pkq/wxsU/fTcV3rUlzIqMUEqmerIQnO', '34b2a06b035e6cea50516c1268842fad244ef6c30f167eb459e4150fe8fc5cf6e45b423ba4f94576a407d543345bb3a6193f993a234eed2a61951df5d1b12484', '::1'),
(2, 'HENRI', 'henri@email.fr', '$2y$12$JHSjf9LtXSbkcrg9W7xIZODZgj5gknjy9HeXRNeDxPDMPKla74Nzu', 'c14e0847cd01de70be0af922520f69a482bdf5d0697370a35b2a0abe86b0496729300a2389e39851d3e47189434a3f40f62d7ea3121b7310bd99022709499fa2', '::1'),
(3, 'JEANNINE', 'jeannine@email.fr', '$2y$12$pt3CzCi80065/RZmuU9CX.C8doHg9zvy5xgAa0F1LTW2MhQL1zRvO', 'df433396d7861376a8164127fccb00735d0fd93cb75046297083d49bd9ef7c8ee53bd1262bad15fceb54bc9ec7072ba3455453503891478212f4ae94d0c4c770', '::1'),
(4, 'CHLOE', 'chloe@email.fr', '$2y$12$p.qtQQRMWLvDGTS6MoiV1uXheHN/i3YSQDCqwyjgYyFw1X.2dt.UO', '7feea7c99e74a13352671210e2cdd6942b85e9e8c4f1ae102eba6c6951d9bb8d6bfc849bac17939d0cb9d6abbd7edd1e5b865c59785128144adcf020c3759360', '::1'),
(5, 'CAROLE', 'carole@email.fr', '$2y$12$PhLAv1ORaEHCebVjEdSuQe.wQ37J.TXoZHqJ97tAkbqRO/YBhhdwS', 'e4a4b8c226b20b2b2682fd9354c1acbb9fffacfd64f77e73ee13e4666c400eab2a4666e0403d333960780ad42bc407846bdd73b07717e8ac59e2b08d76c4fb62', '::1');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `titreliv` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `titreliv`, `amount`, `time`) VALUES
(1, 'LA PESTE', '9', '2021-10-11 19:27:56'),
(2, 'TRAGEDIE', '9', '2021-10-11 19:30:22'),
(3, 'GERMINALE', '7', '2021-10-11 19:28:44'),
(4, '0 COMME OUBLIE', '12', '2021-10-11 19:34:42'),
(5, 'LES MAINS SALES', '5', '2021-10-11 19:38:47'),
(6, 'F COMME FUGITIF', '10', '2021-10-11 19:40:27'),
(7, 'CAHIER DE RETOUR', '3', '2021-10-11 19:43:57'),
(8, 'AVENTURE AMBIGUE', '11', '2021-10-11 19:45:32'),
(9, 'MADAME BOVARY', '15', '2021-10-11 19:47:33'),
(10, 'HARRY POTTER', '5', '2021-10-11 19:50:23'),
(13, 'VOYAGE AU BOUT DE LA NUIT', '8', '2021-10-11 19:53:11'),
(14, 'CENT ANS DE SOLITUDE', '2', '2021-10-11 19:56:16'),
(15, 'LE SEIGNEUR DES ANNEAUX', '32', '2021-10-11 19:59:33'),
(16, '1984', '22', '2021-10-11 20:02:53'),
(17, 'LES MISERABLES', '20', '2021-10-11 20:05:51'),
(18, 'LA PROMESSE DE L\'AUBE', '12', '2021-10-11 20:08:21'),
(19, 'LE COMTE DE MONTE CRISTO', '21', '2021-10-11 20:10:32'),
(20, 'ORGUEIL ET PREJUGES', '11', '2021-10-11 20:14:42'),
(21, 'LA VIE DEVANT SOI', '18', '2021-10-11 20:17:41'),
(22, 'LE ROUGE EST LE NOIR', '21', '2021-10-11 20:21:22'),
(23, 'LE PETIT PRINCE', '26', '2021-10-11 20:24:12');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `date_inscription`) VALUES
(1, 'jack', 'jack@email.fr', '$2y$12$nrRhCjI2MFi2RDdQt0dv9e6P8PaetNucQZ./0fRQMtekZ4pvj8bLK', '::1', 'f3186c7d715b60a3f14c709123a2c4151a88efc246f7449cebff2292c4f08e27a887ee73b26577c81513b3094bd21b69baccf5de76e047d2ec8ecae20215de46', '2021-10-18 15:34:01'),
(2, 'Flora', 'flora@email.fr', '$2y$12$sjbRldq4SirshbTdxpqGmeEld7UQULVfDVlvOGRwc9adnEtIl3UkC', '::1', '129208f0666428b77a05302ff792d33d19b85fd37a4e36aadf2dfeb0629cedc71392bf72ea1b2f8a7137f5f89ef7205241baf953cda4ef45dfb70f7535202a14', '2021-10-18 15:54:13'),
(3, 'LAUREN', 'lauren@email.fr', '$2y$12$Nc4TOOGQm3q5Hyb/zpStde4/yN6mb2f3LXplG.UxTlGJQYNHPE/Au', '::1', 'f3301b1bd52bf3d93c0fcf1d81fe811f8a8860f1b538e83197f9cddb114bf73de0c9cc7d13884d849f7ecc38b78e663f59e070ad8f5cf06d8dbc20dae954176b', '2021-10-18 17:11:16'),
(4, 'FRANCOIS', 'francois@email.fr', '$2y$12$/viSxhUszVRvmAbuXsuAqO7vIuqpXipc5DiBJS9pbcZU4umQXIKty', '::1', '1857801df6d5d017bd0df7294c9f66e428c49bb4f66fc23fe7ab3c98d8c9839238485e8943e315e32814087bf2904b0fbdd5d4756fc28132479405a0a0cef7ca', '2021-10-18 17:11:34'),
(5, 'FRANCK', 'franck@email.fr', '$2y$12$hSvILcHRVWHgqCEI1xo7EeN10m4by77c9URHuVHdxk6tgURbrHuQ.', '::1', 'dc2fb08efcdfa145563712f1ca5267a2cfe0073d6e40a846b9bc651d1c8fcf8e8a84b8a65b57708cff567e4dace53e718d6bd68c7df4d0afaaf598d6189437a5', '2021-10-18 17:12:00'),
(6, 'ALEX', 'alex@email.fr', '$2y$12$AYUpnhfzJLEKoa7.jqSss.udxIqbyGfqliianYZxoTUlOxhMVXdQK', '::1', '8ef5bf4f036d8ce2a3ee7b88ea795c722a19eefe06ee756074f226cc5fb62652e5a71d7d82e86765ff632f8909a3340e15034ca615dc3372b9a30b73d103d502', '2021-10-18 17:13:07'),
(7, 'JUNE', 'june@email.fr', '$2y$12$JzOvy5QBgrC7sFhnxf.nReaP5KfIHJVUdBbQ3BfD0lTSBxqa/6rre', '::1', 'a4fc4726a6e831b10e276769d0c72d8cd6728c131f422d63c7063fba162d0309f8adadff437ef7dc716506317d67cba30a489b2ffd474c33cc8815509f0bc1fc', '2021-10-18 17:13:21'),
(8, 'CHARLOTTE', 'charlotte@email.fr', '$2y$12$oXxmz5RscT8a4hlG4lD1FOMfY9sTMedpafvMjcdz0tk4oQGz90iNu', '::1', 'bc8eb7c0424de0996a6e7994d3dd56a59babcaae33b03356cf883ca24a2e0bb043bb8b02598e1259b1f9b1392e78278d53451da94cdefd51783d8cc4c134397c', '2021-10-18 17:13:35'),
(9, 'CARL', 'carl@email.fr', '$2y$12$hriXeelTkLYZHFsOvg2WQufqD7F0ZFZ5rFz0BAP695S0HUMi0/Cfu', '::1', '4265de1071804ac5585e68c4568622d06f4b8f1201d7f73d56f30d324988ccefea3327c645bd546f8c0a5f9d3e160d9d10811d30f561306232ca0a1bfe752096', '2021-10-18 17:13:52'),
(10, 'ERWAN', 'erwan@email.fr', '$2y$12$v4xp/C8umE4peLomu4L0o.26gFwVqXPch.o41g6Cv5m3A/MGQks4G', '::1', '5c3dc2ae1821f41b35e282dbf899ecd3967bb8258a562bd8f5f850bf4129b178639957f2f0414e221be9c17961395afc2b724b235374235b02a6cc1a84ad1dfe', '2021-10-18 17:14:51'),
(11, 'seb', 'seb@email.fr', '$2y$12$pVtjiDdzezSitNOkelNBSuP0NV8y.Estb2hlsePfsR4Qutyf48T4y', '::1', '09fc8f25d91c700a3c898677f7774fe152b99920ab719956b5171e548eff6eb39ff11d616485eff7636ca12ecbff3abdb2c11d1fa969294657ca55b64b179e11', '2021-10-20 16:20:59'),
(12, 'azaz', 'azaz@azaz.fr', '$2y$12$ajI.ZM5qSS8xmPb4RJU9MOje7Uq25qlqIeoVvCUCYZ5tnWr4PDQWG', '::1', '6912d841481d1e065855fbf879015886bd05920b02189a3dd4a6d87ed5a10f1cfad8c6de5cc5155e4ebfc7e76450653f00b0fbe8f79dbfa83bd2697953d41d61', '2021-10-21 01:14:21'),
(13, 'seb', 'ae@ae.fr', '$2y$12$ECHaI88U2nmXLSAe.HAzduiZLuwBfJpDk.3N1b/Pvxz1daQrncMZC', '::1', 'c4cf7b936f1a73ed3d7e7b1fb06660daac4dc22e96cb6ab5ecf14ff2d3d5427c6a9dcc4ce1f93666e322c792dacecfa3dea7a5f4e26c309426b0ab5136ad5249', '2021-10-21 17:41:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
