-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 jan. 2021 à 02:44
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
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `typeheb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `devise` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `typeheb`, `pour`, `prix`, `devise`, `vue`, `photos`) VALUES
(1, 'Villa Hils', '2 Personnes', 406, 'TND', '-', 'images/chambre/ch1.png'),
(3, 'Villa Golf', '2 Personnes', 428, 'TND', '-', 'images/chambre/ch2.png'),
(4, 'Chambre Double Supèrieure', '2 Personnes', 460, 'TND', 'Sur montagne', 'images/chambre/ch3.jpg'),
(5, 'Villa Mer', '2 personnes', 480, 'TND', '-', 'images/chambre/ch4.jpg'),
(6, 'Chambre Double Deluxe', '2 Personnes', 507, 'TND', '-', 'images/chambre/chm1.png'),
(7, 'Chambre Double Premium', '2 Personnes', 500, 'TND', 'Sur Mer', 'images/chambre/chm3.png'),
(8, 'Chambre Double Exécutive', '2 Personnes', 630, 'TND', 'Sur Mer', 'images/chambre/chm4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `gallerie`
--

DROP TABLE IF EXISTS `gallerie`;
CREATE TABLE IF NOT EXISTS `gallerie` (
  `images` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gallerie`
--

INSERT INTO `gallerie` (`images`) VALUES
('hotel\\img1.jpg'),
('hotel\\img2.jpg'),
('hotel\\img3.jpg'),
('hotel\\img4.jpg'),
('chambre\\ch1.png'),
('chambre\\ch2.png'),
('chambre\\ch3.jpg'),
('chambre\\ch4.jpg'),
('resto\\rest1.jpg'),
('resto\\rest2.jpg'),
('resto\\rest3.png'),
('resto\\rest4.jpg'),
('golf\\golf1.jpg'),
('golf\\golf2.jpg'),
('golf\\golf3.jpg'),
('golf\\golf4.jpg'),
('spa\\spa1.jpg'),
('spa\\spa2.jpg'),
('spa\\spa3.jpg'),
('spa\\spa4.jpg'),
('sport\\sp1.jpg'),
('sport\\sp2.jpg'),
('sport\\sp3.jpg'),
('sport\\sp4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `arrivée` date NOT NULL,
  `nuits` int(11) NOT NULL,
  `nbrch` int(11) NOT NULL,
  `adulte` int(11) NOT NULL,
  `enfant` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `arrivée`, `nuits`, `nbrch`, `adulte`, `enfant`) VALUES
(5, '2021-05-05', 6, 2, 1, 3),
(8, '2021-01-20', 6, 4, 2, 3),
(10, '2021-01-15', 2, 5, 6, 8),
(12, '2021-01-15', 5, 4, 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `nomserv` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`nomserv`) VALUES
('bar'),
('Ascenseur'),
('Assistance médicale'),
('Boutique Tabac'),
('Café Maure'),
('Centre d\'affaires'),
('Centre de remise en forme'),
('Change'),
('Climatisation Centrale'),
('Coffre Fort'),
('Conciergerie'),
('Equipements pour conférences'),
('Fax/photocopieur'),
('Garderie d\'enfants'),
('Golf'),
('Hammam'),
('Jacuzzi'),
('Massage'),
('Mini Bar'),
('Parking gratuit'),
('Parking payant'),
('Piscine Couverte'),
('Piscine Extérieure'),
('Plage'),
('Restaurant'),
('Restaurant à la Carte'),
('Salle de Fitness'),
('Salle de Réunion'),
('Salon d\'acceuil pour VIP'),
('Sauna'),
('Sèche-cheveux'),
('Snack Bar'),
('Tennis'),
('TV Satellite');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_image`) VALUES
(14, 'eya', 'eya@gmail.com', '$2y$10$4CnH3c.rp/4UakgDMhOADOWavBq4l6IOFlfphjVrB4NV5h45/idhC', '4.jpg'),
(15, 'montahe', 'montahe@gmail.com', '$2y$10$OKYuBIN34xTeIoN3KVbLXuKDFljoPmodzVnz.vYRB3.HEauCB79W6', '6.jpg'),
(16, 'mariem', 'mariem@gmail.com', '$2y$10$/VCi044p0j0CZEKkIDiOOOOXQ/wkZmx2HGlk3mo3LysN4GlQxkzh.', '9.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
