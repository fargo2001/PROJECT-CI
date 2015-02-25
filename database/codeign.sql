-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2015 at 10:03 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeign`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Gotcha, Pokemon Caught !!', 'gotcha-pokemon-caught', 'Flash news, some pokemon trainer had seen the legendary lucia get caught by tim rockets.'),
(2, 'Oh god, not again !!', 'oh-got-not-again', 'There''s some bad news swirling on the network that the famous crime suspect known as dika were set loose on the street.\r\n\r\nBoys be careful !!'),
(3, 'Dika strikes back !!', 'dika-strikes-back', 'saudara - saudara sekalian, harap berhati - hati, karena monster dika sedang lolos dari pengawasan kami !!'),
(4, 'Dika again !!', 'dika-again', 'berita kali ini mengabarkan bahwa dika berhasil kabur dari penjara fort knox !!'),
(5, 'Test news', 'test-news', 'test newest news'),
(6, 'Testing News 2', 'testing-news-2', 'Testing news aja');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `quotes_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `quote` text NOT NULL,
  PRIMARY KEY (`quotes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quotes_id`, `user_id`, `quote`) VALUES
(1, 1, 'Jika memang masih bisa mulut ku berbicara !'),
(2, 2, 'Avenger, Roll on !!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(25) NOT NULL,
  `quote` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `quote`) VALUES
(1, 'admin', 'admin', 'Hari yang indah untuk jiwa yang terlarang'),
(2, 'andreas', 'andreas', 'Tang Ting Tung yok kita nabung !');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
