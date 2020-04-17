-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2020 at 02:25 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordonnes`
--
create table data;

use data;

CREATE TABLE `coordonnes` (
  `nom` varchar(255) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordonnes`
--

INSERT INTO `coordonnes` (`nom`, `longitude`, `latitude`) VALUES
('Centre', -1.5486, 12.3491),
('Centre-Est', -0.2081, 11.6426),
('Centre-Nord', -0.9823, 13.2362),
('Centre-Ouest', -2.3345, 11.7909),
('Boucle du Mouhoun', -3.5941, 12.4516),
('Centre-Sud', -1.1441, 11.54),
('Est', 0.9244, 12.1327),
('Cascades', -4.5764, 10.3064),
('Hauts-Bassins', -4.3684, 11.3118),
('Nord', -2.242, 13.4065),
('Plateau-Central', -1.121, 12.5199),
('Sahel', -0.5432, 14.3478),
('Sud-Ouest', -3.2937, 10.5122);

-- --------------------------------------------------------

--
-- Table structure for table `geodata`
--

CREATE TABLE `geodata` (
  `id` varchar(255) NOT NULL,
  `confirme` varchar(255) NOT NULL,
  `gueri` varchar(255) NOT NULL,
  `decede` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geodata`
--

INSERT INTO `geodata` (`id`, `confirme`, `gueri`, `decede`) VALUES
('Boucle du Mouhoun', '299', '299', '0'),
('Centre-Sud', '0', '0', '0'),
('Nord', '5', '3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geodata`
--
ALTER TABLE `geodata`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;