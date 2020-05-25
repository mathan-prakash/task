-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2020 at 04:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

DROP TABLE IF EXISTS `t1`;
CREATE TABLE IF NOT EXISTS `t1` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`id`, `name`) VALUES
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

DROP TABLE IF EXISTS `testing`;
CREATE TABLE IF NOT EXISTS `testing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `Address` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `name`, `email`, `phone`, `Address`, `status`, `created_datetime`) VALUES
(17, 'Karthick', 'karthickraj953@gmail.com', '9876543210', 'huigfuriafraufwbfhe', 1, '2020-05-24 20:22:29'),
(13, 'Mathan', 'mathanrajhop@gmail.com', '9780314700', 'sjhdgfueg ufgfe ufgu virgei ufg vb ie vsu viv dkvb fyiv gs', 1, '2020-05-24 16:00:27'),
(16, 'SARAVANAN', 'karthickraj953@gmail.com', '9876543210', 'fgeuwfg we hfwoiafa ffgu fuaeg fa fewiarf ', 1, '2020-05-24 20:18:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
