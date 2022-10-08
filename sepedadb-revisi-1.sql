-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 04:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepedadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `trsewasepeda`
--

CREATE TABLE `trsewasepeda` (
  `id` int(11) NOT NULL,
  `namaPenyewa` varchar(255) NOT NULL,
  `emailPenyewa` varchar(255) NOT NULL,
  `noTelpPenyewa` varchar(255) NOT NULL,
  `jenisSepeda` varchar(255) NOT NULL,
  `durasiSewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trsewasepeda`
--

INSERT INTO `trsewasepeda` (`id`, `namaPenyewa`, `emailPenyewa`, `noTelpPenyewa`, `jenisSepeda`, `durasiSewa`) VALUES
(1, 'sadsa', 'sada@gmail.com', '2414', '2414', 241);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trsewasepeda`
--
ALTER TABLE `trsewasepeda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trsewasepeda`
--
ALTER TABLE `trsewasepeda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
