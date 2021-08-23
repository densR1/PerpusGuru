-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 11:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `perpusguru`
--

CREATE TABLE `perpusguru` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kodebuku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perpusguru`
--

INSERT INTO `perpusguru` (`id`, `judul`, `kodebuku`, `pengarang`) VALUES
(11, 'Catatan SI Boy', '1818181', 'Sandiwara Radio'),
(12, 'Matahari', '1717177', 'Tere Liye'),
(13, 'Pocong Juga Pocong', '20192019', 'Arief Muhammad'),
(14, 'Detektif Conan', '212121', 'Denjiro Maru'),
(24, 'Pendidikan Agama Islam', 'P2020202', 'Tiga serangkai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perpusguru`
--
ALTER TABLE `perpusguru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perpusguru`
--
ALTER TABLE `perpusguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
