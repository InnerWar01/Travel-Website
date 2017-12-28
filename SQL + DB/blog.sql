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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `billets`
--

CREATE TABLE IF NOT EXISTS `billets` (
`ID_Billet` int(11) NOT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `Contenu` text,
  `Date_creation` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `billets`
--

INSERT INTO `billets` (`ID_Billet`, `Titre`, `Contenu`, `Date_creation`) VALUES
(1, 'CONSEILS pour partir en Australie', 'Je vais voyager en Australie, avez-vous des conseils?', '2016-04-07 00:00:00'),
(2, 'Vol Hobart/Alice Springs', 'Salut tout le monde!\r\nEst-il possible de faire un vol Hobart/Alice Springs?', '2016-04-15 04:24:05'),
(3, 'Swan River à Perth', 'Hello!\r\nJusqu''où va la promenade en bateau de Perth sur la Swan River? J''aimerais demander ma petite-amie en mariage au cours de cette promenade...', '2016-04-05 11:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
`ID_Commentaire` int(11) NOT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Billet` int(11) DEFAULT NULL,
  `Commentaire` text,
  `Date_commentaire` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`ID_Commentaire`, `ID_User`, `ID_Billet`, `Commentaire`, `Date_commentaire`) VALUES
(1, 1, 1, 'Bonjour,\r\nJ''adore l''Australie et j''aimerais vraiment y aller mais je suis encore novice. Avez-vous des endroits à me suggérer?', '2016-04-13 15:11:02'),
(2, 2, 1, 'Salut Wenjing,\r\n\r\nje connais bien l''Australie. J''y suis allée cinq fois! Je peux te conseiller si tu veux!', '2016-04-13 17:12:22'),
(3, 1, 1, 'Merci Lola pour ta réponse, j''aimerais aller aux plus beaux endroits de l''Australie en sachant que j''adore la plage. Qu''est-ce que tu me conseilles?', '2016-04-13 18:01:34'),
(4, 2, 1, 'Tu dois aller à The Gold Coast alors!', '2016-04-14 12:14:07'),
(5, 2, 2, 'Bonjour Dimitri!  Il n''est pas possible de faire un vol direct Hobart/Alice Springs, tu dois partir de Sydney, Melbourne, Cairns, Darwin, Adelaide, Brisbane ou Perth pour aller à Alice Springs!Bon séjour! :)', '2016-04-15 11:37:15'),
(6, 0, 2, 'Merci Lola!', '2016-04-15 19:15:10'),
(7, 2, 3, 'Salut Titi,\r\n\r\nLa promenade va jusqu''à Fremantle!', '2016-04-05 13:09:02'),
(8, 3, 3, 'Y a-t-il d''autres destinations possibles?', '2016-04-06 10:25:32'),
(9, 2, 3, 'C''est soit Fremantle soit les vignobles de la Swan Valley!\r\nBonne chance pour ta demande en mariage et beaucoup de bonheur avec ta future fiancée et peut-être ta future femme!', '2016-04-06 16:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Usermail` varchar(225) NOT NULL,
  `Userpassword` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_User`, `Username`, `Usermail`, `Userpassword`) VALUES
(0, 'Dimitri', 'dimitri.roger@gmail.com', 'dimitri'),
(1, 'wuwenjing', 'wuwenjing@gmail.com', 'wenjing'),
(2, 'Lola', 'lola.au@gmail.com', 'lola'),
(3, 'Titi', 'thibault.titi@gmail.com', 'titi'),
(4, 'Patricia', 'ciobanu.paty@gmail.com', 'innerworld'),
(5, 'Claude', 'claude.renoir@gmail.fr', 'renoir'),
(6, 'Starfish', 'starfish@gmail.com', 'star');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billets`
--
ALTER TABLE `billets`
 ADD PRIMARY KEY (`ID_Billet`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
 ADD PRIMARY KEY (`ID_Commentaire`), ADD KEY `ID_User` (`ID_User`), ADD KEY `ID_Billet` (`ID_Billet`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billets`
--
ALTER TABLE `billets`
MODIFY `ID_Billet` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
MODIFY `ID_Commentaire` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaires`
--
ALTER TABLE `commentaires`
ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`ID_Billet`) REFERENCES `billets` (`ID_Billet`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
