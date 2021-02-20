-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2021 at 05:37 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` mediumtext NOT NULL,
  `message_id` int(11) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `message_id`, `author`) VALUES
(2, 'good message ', 11, 'john doe'),
(3, 'it really is ', 11, 'Timmy'),
(11, 'weather for reading ', 17, 'Timmy'),
(5, 'my foot break', 20, 'Timmy'),
(6, 'up top my g ', 15, 'Timmy'),
(10, 'my foot break', 19, 'Timmy'),
(8, 'cat food', 20, 'Timmy'),
(9, 'it really is ', 15, 'Timmy'),
(12, 'may the force be with you', 22, 'Timmy');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_content` longtext NOT NULL,
  `author` text NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message_content`, `author`, `time`) VALUES
(20, 'Keep walking youth', 'Timmy', '2021-02-12'),
(19, 'Keep walking brother ', 'john walker ', '2021-02-12'),
(14, 'i LOVE THE WEATHER ', 'JOHN SMITH ', '1999-09-12'),
(15, 'i LOVE THE WEATHER ', 'JOHN SMITH ', '1999-09-12'),
(16, 'i LOVE THE WEATHER today ', 'JOHN SMITH jr ', '1999-10-12'),
(17, 'i LOVE THE WEATHER today ', 'JOHN SMITH jr ', '1999-10-12'),
(18, 'i LOVE THE WEATHER today johnny ', 'JOHN SMITH jr ', '1999-10-12'),
(21, 'unless she is from industry ,she aint worth it ', 'Timmy', '2021-02-12'),
(22, 'WHERE THERE IS LIFE THERE IS HOPE', 'Timmy', '2021-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'Timmy', '123tim'),
(2, 'Tim', '123timmy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
