-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2016 at 11:45 AM
-- Server version: 5.7.10-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel_australia`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`Num_Client` int(11) NOT NULL,
  `Nom_Client` varchar(20) NOT NULL,
  `Prénom_Client` varchar(50) NOT NULL,
  `Civilité_Client` varchar(8) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Société_Client` varchar(30) DEFAULT NULL,
  `Adresse_Client` varchar(100) NOT NULL,
  `Adresse_Complément` varchar(50) DEFAULT NULL,
  `Code_Postal` int(11) NOT NULL,
  `Ville_Client` varchar(30) NOT NULL,
  `Pays_Client` varchar(20) NOT NULL,
  `Mail_Client` varchar(50) NOT NULL,
  `Tel_Client` varchar(11) NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Num_Client`, `Nom_Client`, `Prénom_Client`, `Civilité_Client`, `Date_Naissance`, `Société_Client`, `Adresse_Client`, `Adresse_Complément`, `Code_Postal`, `Ville_Client`, `Pays_Client`, `Mail_Client`, `Tel_Client`, `ID_User`) VALUES
(1, 'WU', 'Wenjing', 'mlle', '1994-10-08', NULL, 'WUHAN,HUBEI,CHINE', NULL, 430000, 'wuhan', 'chine', 'informatiquebcw@gmail.com', '1234567890', 1),
(2, 'CIOBANU ', 'Patricia', 'mlle', '1996-06-25', NULL, '51, rue Vasile Alecsandri', NULL, 2009, 'CHISINAU', 'MOLDAVIE', 'patricia.cioabnu@yahoo.com', '79227573', 2),
(3, 'Renoir', 'Claude', 'Monsieur', '2016-03-31', '', '84 Boulevard Marius Vivier Merle', '', 93500, 'Lyon', 'France', 'claude.renoir@gmail.fr', '33478601560', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
`Num_Hotel` int(11) NOT NULL,
  `Num_Ville` int(11) DEFAULT NULL,
  `Nom_Hotel` varchar(50) NOT NULL,
  `adresse_hotel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Num_Hotel`, `Num_Ville`, `Nom_Hotel`, `adresse_hotel`) VALUES
(1, 1, 'Majestic Tynte Street Apartments', ' 82 Tynte St, North Adelaide SA 5006, Australie'),
(2, 1, 'Mantra on Frome', ' 88 Frome St, Adelaide SA 5000, Australie'),
(3, 1, 'iStay Precinct', '185 Morphett St, Adelaide SA 5000, Australie'),
(4, 1, 'Rydges South Park Adelaide', '1 South Terrace, Adelaide SA 5000, Australie'),
(5, 1, 'Adelaide Royal Coach', '24 Dequetteville Terrace, Kent Town SA 5067, Australie'),
(6, 2, 'DoubleTree by Hilton Alice Springs ', '82 Barrett Drive, Alice Springs NT 0870, Australie'),
(7, 2, 'Desert Palms Alice Springs', '74 Barrett Drive, Alice Springs NT 0871, Australie'),
(8, 2, 'Quest Serviced Apartments Alice Springs', '10 South Terrace, Alice Springs NT 0870, Australie'),
(9, 2, 'Lasseters Hotel', '93 Barrett Drive, Alice Springs NT 0870, Australie'),
(10, 2, 'Aurora Alice Springs<', ' 11 Leichhardt Terrace, Alice Springs NT 0870, Australie'),
(11, 3, 'The Point Brisbane', '21 Lambert St, Kangaroo Point QLD 4169, Australie'),
(12, 3, 'Meriton Serviced Apartments Adelaide Street', '485 Adelaide St, Brisbane QLD 4000, Australie'),
(13, 3, 'George Williams Hotel', '317-325 George St, Brisbane QLD 4000, Australie\r\n'),
(14, 3, 'Mercure Brisbane', '85-87 N Quay, Brisbane QLD 4000, Australie'),
(15, 3, 'Hotel Jen Brisbane', '159 Roma St, Brisbane QLD 4000, Australie'),
(16, 4, 'BAY VILLAGE TROPICAL RETREAT', 'Corner of Lake and Gatton Streets Cairns, Cairns North QLD 4870, Australie'),
(17, 4, 'THE BALINESE', '215 Lake St, Cairns City QLD 4870, Australie'),
(18, 4, 'DOUBLETREE BY HILTON CAIRNS', '121-123 Esplanade, Cairns City QLD 4870, Australie'),
(19, 4, 'MANTRA ESPLANADE CAIRNS', '53-57 Esplanade, Cairns City QLD 4870, Australie'),
(20, 4, 'SHANGRI-LA HOTEL THE MARINA, CAIRNS', 'Pier Point Rd, Cairns City QLD 4870, Australie'),
(21, 5, 'Mantra Pandanas', '43 Knuckey St, Darwin NT 0800, Australie'),
(22, 5, 'Darwin City Edge Motel & Suites', '38 Gardens Rd, Darwin NT 0800, Australie'),
(23, 5, 'Ramada Suites Zen Quarter', '6 Carey St, Darwin NT 0800, Australie'),
(24, 5, 'H Hotel', '81 Smith Street, Darwin CBD, 0800 Darwin, Australie'),
(25, 5, 'Vibe Hotel Darwin Waterfront', '7 Kitchener Dr, Darwin NT 0800, Australie'),
(26, 6, 'Best Western Hobart', '156 Bathurst St, Hobart TAS 7000, Australie'),
(27, 6, 'Wrest Point', '410 Sandy Bay Rd, Sandy Bay TAS 7005, Australie'),
(28, 6, 'Fountainside Hotel', '40 Brooker Ave, Hobart TAS 7000, Australie'),
(29, 6, 'The Old Woolstore Apartment Hotel', '1 Macquarie St, Hobart TAS 7000, Australie'),
(30, 6, 'Hadley''s Orient Hotel', '34 Murray St, Hobart TAS 7000, Australie'),
(31, 7, 'PENSIONE HOTEL MELBOURNE', '16 Spencer St, Melbourne VIC 3000, Australie'),
(32, 7, 'COSMOPOLITAN HOTEL MELBOURNE', '2-8 Carlisle St, St Kilda VIC 3182, Australie'),
(33, 7, 'TRAVELODGE SOUTHBANK', '9 Riverside Quay, Southbank VIC 3006, Australie'),
(34, 7, 'QUALITY HOTEL BATMAN''S HILL ON COLLINS', '623 Collins St, Melbourne VIC 3000, Australie'),
(35, 7, 'CLARION SUITES GATEWAY', '1 William St, Melbourne VIC 3000, Australie'),
(36, 8, 'SULLIVANS HOTEL PERTH', '166 Mounts Bay Rd., Mounts Bay Rd, Perth WA 6000, Australie'),
(37, 8, 'TRAVELODGE PERTH', '417 Hay St, Perth WA 6000, Australie'),
(38, 8, 'CROWN METROPOL PERTH', 'Great Eastern Hwy, Burswood WA 6100, Australie'),
(39, 8, 'CROWNE PLAZA PERTH', '54 Terrace Rd, East Perth WA 6004, Australie'),
(40, 8, 'HYATT REGENCY PERTH', '99 Adelaide Terrace, Perth WA 6000, Australie'),
(41, 9, 'ADGE', '222 Riley St, Surry Hills NSW 2010, Australie'),
(42, 9, 'Primus hotel', 'Carrer de Menorca, 22, 46023 València, Valencia, Espagne'),
(43, 9, 'Cambridge hotel', '212 Riley St, Surry Hills NSW 2010, Australie'),
(44, 9, 'Park-Hyatt-Sydney', '7 Hickson Rd, The Rocks NSW 2000, Australie'),
(45, 9, 'InterContinental Sydney', '117 Macquarie St, Sydney NSW 2000, Australie'),
(46, 10, 'Hilton Surfers Paradise Residences', '6 Orchid Avenue, Surfers Paradise QLD 4217, Australie'),
(47, 10, 'QT Gold Coast', '7 Staghorn Ave, Gold Coast QLD 4217, Australie'),
(48, 10, 'Crowne Plaza Surfers Paradise', '2807 Gold Coast Hwy, Surfers Paradise QLD 4217, Australie'),
(49, 10, 'Royal Woods Resort', '16 Mulyan Pl, Ashmore QLD 4214, Australie'),
(50, 10, 'Sea World Resort & Water Park', 'Seaworld Dr, Main Beach QLD 4217, Australie');

-- --------------------------------------------------------

--
-- Table structure for table `monument`
--

CREATE TABLE IF NOT EXISTS `monument` (
  `Nom_Monument` varchar(50) NOT NULL,
  `Prix_Entrée_Monument` smallint(6) DEFAULT '0',
  `Num_Ville` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monument`
--

INSERT INTO `monument` (`Nom_Monument`, `Prix_Entrée_Monument`, `Num_Ville`) VALUES
('Aquascene', 15, 5),
('Brisbane River', NULL, 3),
('Chocolaterie Cadbury', NULL, 6),
('Constitution Dock', NULL, 6),
('Cottesloe ou Scarborough', NULL, 8),
('Crocodylus Park', 40, 5),
('Currumbin Wildlife Sanctuary', 50, 10),
('Forêt Tropicale, Daintree, Cape Tribulation', 191, 4),
('Fremantle', NULL, 8),
('Glenelg Beach', NULL, 1),
('GoMA et Queensland Art Gallery', 62, 3),
('Grande Marche de l''arrière-pays de la Côte d''or', NULL, 10),
('Grotte Crocosaurus', 35, 5),
('Harbour Bridge', 9, 9),
('Jardins botaniques d''Adélaïde', NULL, 1),
('Jardins botaniques royaux de Tasmanie', NULL, 6),
('Jardins Himeji', NULL, 1),
('Kings Park', NULL, 8),
('Kuranda', 18, 4),
('L''aquarium', 30, 8),
('L''Outback', NULL, 2),
('La Grande Barrière de Corail', NULL, 4),
('La Mornington Peninsula', 35, 7),
('La Yarra Valley et les Dandenong Ranges', NULL, 7),
('Le Chocolate Tour', NULL, 3),
('Le golf sur Gold Coast', NULL, 10),
('Le parc national du Promontoire de Wilson', NULL, 7),
('Le parc national d’Uluru – Kaja Tjuta', NULL, 2),
('Le Quartier The Rocks', NULL, 9),
('Le surf sur la Gold Coast', NULL, NULL),
('Les Plateaux D''Atherton', 15, 4),
('Mindil Beach', NULL, 5),
('MONA - Musée d''art nouveau et ancien', 20, 6),
('Mount Wellington', NULL, 6),
('Musée et galerie d''art du Territoire du Nord', 15, 5),
('Opera House', 35, 9),
('Parc à thème de la Gold Coast', 100, 10),
('Parc National de Wooroonooran', NULL, 4),
('Phillip island et la "Penguin Parade"', NULL, 7),
('Queen Victoria Building de Sydney', NULL, 9),
('Rottnest Island', NULL, 8),
('Rundle Mall', NULL, 1),
('South Bank', NULL, 3),
('Story Bridge', NULL, 3),
('Sydney Tower', 25, 9),
('Uluru Camel Tours', NULL, 2),
('Watarrka National Park', NULL, 2),
('Zoo d''Adélaïde', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paiement_circuit`
--

CREATE TABLE IF NOT EXISTS `paiement_circuit` (
`Num_Paiement_Circuit` int(11) NOT NULL,
  `Montant_Paiement_Circuit` int(11) NOT NULL,
  `Date_Paiement_Circuit` date NOT NULL,
  `Code_Voyage_Circuit` int(11) DEFAULT NULL,
  `Num_Client` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `paiement_circuit`
--

INSERT INTO `paiement_circuit` (`Num_Paiement_Circuit`, `Montant_Paiement_Circuit`, `Date_Paiement_Circuit`, `Code_Voyage_Circuit`, `Num_Client`) VALUES
(1, 5400, '2016-03-26', 2, 1),
(2, 5400, '2016-04-08', 2, 2),
(3, 3000, '2016-04-08', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `paiement_destination`
--

CREATE TABLE IF NOT EXISTS `paiement_destination` (
`Num_Paiement_Destination` int(11) NOT NULL,
  `Montant_Paiement_Destination` int(11) NOT NULL,
  `Date_Paiement_Destination` date DEFAULT NULL,
  `Code_Voyage_Destination` int(11) DEFAULT NULL,
  `Num_Client` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `paiement_destination`
--

INSERT INTO `paiement_destination` (`Num_Paiement_Destination`, `Montant_Paiement_Destination`, `Date_Paiement_Destination`, `Code_Voyage_Destination`, `Num_Client`) VALUES
(1, 6900, '2016-03-31', 10, 2),
(2, 3000, '2016-04-09', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
`Num_Région` int(11) NOT NULL,
  `Nom_Région` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`Num_Région`, `Nom_Région`) VALUES
(1, 'Western Australia'),
(2, 'Northern Territory'),
(3, 'South Australia'),
(4, 'Queensland'),
(5, 'New South Wales'),
(6, 'Victoria'),
(7, 'Tasmania');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_circuit`
--

CREATE TABLE IF NOT EXISTS `reservation_circuit` (
`Num_Réservation_Circuit` int(11) NOT NULL,
  `Date_Départ_Circuit` date NOT NULL,
  `Num_Client` int(11) DEFAULT NULL,
  `Code_Voyage_Circuit` int(11) DEFAULT NULL,
  `Nb_Places_Réservées_Circuit` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reservation_circuit`
--

INSERT INTO `reservation_circuit` (`Num_Réservation_Circuit`, `Date_Départ_Circuit`, `Num_Client`, `Code_Voyage_Circuit`, `Nb_Places_Réservées_Circuit`) VALUES
(1, '2016-07-01', 1, 2, 2),
(2, '2016-06-24', 2, 2, 2),
(3, '2016-07-12', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_destination`
--

CREATE TABLE IF NOT EXISTS `reservation_destination` (
`Num_Réservation_Destination` int(11) NOT NULL,
  `Date_Départ_Destination` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `Num_Client` int(11) DEFAULT NULL,
  `Code_Voyage_Destination` int(11) DEFAULT NULL,
  `Nb_Places_Réservées_Destination` int(11) NOT NULL,
  `Num_Hotel` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reservation_destination`
--

INSERT INTO `reservation_destination` (`Num_Réservation_Destination`, `Date_Départ_Destination`, `Date_Fin`, `Num_Client`, `Code_Voyage_Destination`, `Nb_Places_Réservées_Destination`, `Num_Hotel`) VALUES
(1, '2016-06-27', '2016-06-30', 2, 10, 3, 47),
(2, '2016-05-18', '2016-05-28', 2, 1, 1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(225) DEFAULT NULL,
  `Usermail` varchar(225) DEFAULT NULL,
  `Userpassword` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_User`, `Username`, `Usermail`, `Userpassword`) VALUES
(1, 'Wendy', 'wu.wenjing@gmail.com', 'jesuisbelle'),
(2, 'Patricia', 'ciobanu.paty@gmail.com', 'innerworld'),
(3, 'Claude', 'claude.renoir@gmail.fr', 'renoir'),
(4, 'Starfish', 'starfish@gmail.com', 'star');

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
`Num_Ville` int(11) NOT NULL,
  `Nom_Ville` varchar(20) NOT NULL,
  `Num_Région` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`Num_Ville`, `Nom_Ville`, `Num_Région`) VALUES
(1, 'Adelaide', 3),
(2, 'Alice Springs', 2),
(3, 'Brisbane', 4),
(4, 'Cairns', 4),
(5, 'Darwin', 2),
(6, 'Hobart', 7),
(7, 'Melbourne', 6),
(8, 'Perth', 1),
(9, 'Sydney', 5),
(10, 'The Gold Coast', 4);

-- --------------------------------------------------------

--
-- Table structure for table `voyage_circuit`
--

CREATE TABLE IF NOT EXISTS `voyage_circuit` (
`Code_Voyage_Circuit` int(11) NOT NULL,
  `Nom_Voyage_Circuit` varchar(100) DEFAULT NULL,
  `Durée_Voyage_Circuit` varchar(20) DEFAULT NULL,
  `Prix_Indicatif_Circuit` int(11) DEFAULT NULL,
  `Ville_Départ` varchar(20) DEFAULT NULL,
  `Ville_Arrivée` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `voyage_circuit`
--

INSERT INTO `voyage_circuit` (`Code_Voyage_Circuit`, `Nom_Voyage_Circuit`, `Durée_Voyage_Circuit`, `Prix_Indicatif_Circuit`, `Ville_Départ`, `Ville_Arrivée`) VALUES
(1, 'Trois semaine à partir de Melbourne, Victoria', '3 semaines ', 3000, 'Melbourne', 'Adélaïde'),
(2, 'Train de légende avec Indian Pacific', '2 semaines', 2700, 'Sydney', 'Perth');

-- --------------------------------------------------------

--
-- Table structure for table `voyage_destination`
--

CREATE TABLE IF NOT EXISTS `voyage_destination` (
`Code_Voyage_Destination` int(11) NOT NULL,
  `Num_Ville` int(11) DEFAULT NULL,
  `Prix_Indicatif_Destination` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `voyage_destination`
--

INSERT INTO `voyage_destination` (`Code_Voyage_Destination`, `Num_Ville`, `Prix_Indicatif_Destination`) VALUES
(1, 1, 1500),
(2, 2, 2000),
(3, 3, 2100),
(4, 4, 1500),
(5, 5, 1700),
(6, 6, 1400),
(7, 7, 2300),
(8, 8, 2000),
(9, 9, 2400),
(10, 10, 2300);

-- --------------------------------------------------------

--
-- Table structure for table `voyage_etape`
--

CREATE TABLE IF NOT EXISTS `voyage_etape` (
  `Rang` smallint(6) NOT NULL,
  `Ville_Etape` varchar(20) NOT NULL,
  `Num_Hotel` int(11) NOT NULL,
  `Type_Transport` varchar(20) DEFAULT NULL,
  `Nombre_Jours` smallint(6) NOT NULL,
  `Code_Voyage_Circuit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voyage_etape`
--

INSERT INTO `voyage_etape` (`Rang`, `Ville_Etape`, `Num_Hotel`, `Type_Transport`, `Nombre_Jours`, `Code_Voyage_Circuit`) VALUES
(1, 'Melbourne ', 32, 'Avion', 7, 1),
(2, 'Adelaide', 2, 'Avion', 7, 1),
(3, 'Hobart', 27, 'Avion', 7, 1),
(1, 'Sydney', 42, 'Avion', 4, 2),
(2, 'Adelaide', 2, 'Train', 5, 2),
(3, 'Perth', 38, 'Train', 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`Num_Client`), ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
 ADD PRIMARY KEY (`Num_Hotel`), ADD KEY `Num_Ville` (`Num_Ville`);

--
-- Indexes for table `monument`
--
ALTER TABLE `monument`
 ADD PRIMARY KEY (`Nom_Monument`), ADD KEY `Num_Ville` (`Num_Ville`);

--
-- Indexes for table `paiement_circuit`
--
ALTER TABLE `paiement_circuit`
 ADD PRIMARY KEY (`Num_Paiement_Circuit`), ADD KEY `Code_Voyage_Circuit` (`Code_Voyage_Circuit`), ADD KEY `Num_Client` (`Num_Client`);

--
-- Indexes for table `paiement_destination`
--
ALTER TABLE `paiement_destination`
 ADD PRIMARY KEY (`Num_Paiement_Destination`), ADD KEY `Code_Voyage_Destination` (`Code_Voyage_Destination`), ADD KEY `Num_Client` (`Num_Client`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`Num_Région`);

--
-- Indexes for table `reservation_circuit`
--
ALTER TABLE `reservation_circuit`
 ADD PRIMARY KEY (`Num_Réservation_Circuit`), ADD KEY `Num_Client` (`Num_Client`), ADD KEY `Code_Voyage_Circuit` (`Code_Voyage_Circuit`);

--
-- Indexes for table `reservation_destination`
--
ALTER TABLE `reservation_destination`
 ADD PRIMARY KEY (`Num_Réservation_Destination`), ADD KEY `Num_Client` (`Num_Client`), ADD KEY `Code_Voyage_Destination` (`Code_Voyage_Destination`), ADD KEY `Num_Hotel` (`Num_Hotel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID_User`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
 ADD PRIMARY KEY (`Num_Ville`), ADD KEY `Num_Région` (`Num_Région`);

--
-- Indexes for table `voyage_circuit`
--
ALTER TABLE `voyage_circuit`
 ADD PRIMARY KEY (`Code_Voyage_Circuit`);

--
-- Indexes for table `voyage_destination`
--
ALTER TABLE `voyage_destination`
 ADD PRIMARY KEY (`Code_Voyage_Destination`), ADD KEY `Num_Ville` (`Num_Ville`);

--
-- Indexes for table `voyage_etape`
--
ALTER TABLE `voyage_etape`
 ADD PRIMARY KEY (`Code_Voyage_Circuit`,`Rang`), ADD KEY `Num_Hotel` (`Num_Hotel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `Num_Client` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
MODIFY `Num_Hotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `paiement_circuit`
--
ALTER TABLE `paiement_circuit`
MODIFY `Num_Paiement_Circuit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paiement_destination`
--
ALTER TABLE `paiement_destination`
MODIFY `Num_Paiement_Destination` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
MODIFY `Num_Région` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reservation_circuit`
--
ALTER TABLE `reservation_circuit`
MODIFY `Num_Réservation_Circuit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservation_destination`
--
ALTER TABLE `reservation_destination`
MODIFY `Num_Réservation_Destination` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
MODIFY `Num_Ville` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `voyage_circuit`
--
ALTER TABLE `voyage_circuit`
MODIFY `Code_Voyage_Circuit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `voyage_destination`
--
ALTER TABLE `voyage_destination`
MODIFY `Code_Voyage_Destination` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`Num_Ville`) REFERENCES `ville` (`Num_Ville`);

--
-- Constraints for table `monument`
--
ALTER TABLE `monument`
ADD CONSTRAINT `monument_ibfk_1` FOREIGN KEY (`Num_Ville`) REFERENCES `ville` (`Num_Ville`);

--
-- Constraints for table `paiement_circuit`
--
ALTER TABLE `paiement_circuit`
ADD CONSTRAINT `paiement_circuit_ibfk_1` FOREIGN KEY (`Code_Voyage_Circuit`) REFERENCES `voyage_circuit` (`Code_Voyage_Circuit`),
ADD CONSTRAINT `paiement_circuit_ibfk_2` FOREIGN KEY (`Num_Client`) REFERENCES `client` (`Num_Client`);

--
-- Constraints for table `paiement_destination`
--
ALTER TABLE `paiement_destination`
ADD CONSTRAINT `paiement_destination_ibfk_1` FOREIGN KEY (`Code_Voyage_Destination`) REFERENCES `voyage_destination` (`Code_Voyage_Destination`),
ADD CONSTRAINT `paiement_destination_ibfk_2` FOREIGN KEY (`Num_Client`) REFERENCES `client` (`Num_Client`);

--
-- Constraints for table `reservation_circuit`
--
ALTER TABLE `reservation_circuit`
ADD CONSTRAINT `reservation_circuit_ibfk_1` FOREIGN KEY (`Num_Client`) REFERENCES `client` (`Num_Client`),
ADD CONSTRAINT `reservation_circuit_ibfk_2` FOREIGN KEY (`Code_Voyage_Circuit`) REFERENCES `voyage_circuit` (`Code_Voyage_Circuit`);

--
-- Constraints for table `reservation_destination`
--
ALTER TABLE `reservation_destination`
ADD CONSTRAINT `reservation_destination_ibfk_1` FOREIGN KEY (`Num_Client`) REFERENCES `client` (`Num_Client`),
ADD CONSTRAINT `reservation_destination_ibfk_2` FOREIGN KEY (`Code_Voyage_Destination`) REFERENCES `voyage_destination` (`Code_Voyage_Destination`),
ADD CONSTRAINT `reservation_destination_ibfk_3` FOREIGN KEY (`Num_Hotel`) REFERENCES `hotel` (`Num_Hotel`);

--
-- Constraints for table `ville`
--
ALTER TABLE `ville`
ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`Num_Région`) REFERENCES `region` (`Num_Région`);

--
-- Constraints for table `voyage_destination`
--
ALTER TABLE `voyage_destination`
ADD CONSTRAINT `voyage_destination_ibfk_1` FOREIGN KEY (`Num_Ville`) REFERENCES `ville` (`Num_Ville`);

--
-- Constraints for table `voyage_etape`
--
ALTER TABLE `voyage_etape`
ADD CONSTRAINT `voyage_etape_ibfk_1` FOREIGN KEY (`Code_Voyage_Circuit`) REFERENCES `voyage_circuit` (`Code_Voyage_Circuit`),
ADD CONSTRAINT `voyage_etape_ibfk_2` FOREIGN KEY (`Num_Hotel`) REFERENCES `hotel` (`Num_Hotel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
