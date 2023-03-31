-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 10:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustelkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `databuku`
--

CREATE TABLE `databuku` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `merek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `databuku`
--

INSERT INTO `databuku` (`id`, `nama`, `nrp`, `harga`, `gmail`, `gambar`, `merek`) VALUES
(1, 'alvin prasetio nugroho', '086763686378', '199.000', 'alvinprasetiyonugraha@gmail.com', 'images1.jpeg', 'buku miskin'),
(3, 'qwd', 'adw', 'wda', 'wd', 'images2.jpeg', 'wda'),
(5, 'awd', 'wda', 'awd', 'awdwaw', 'images3.jpeg', 'wa'),
(6, 'wa', 'wadaw', 'awd', 'awd', 'images1.jpeg', 'awd'),
(7, 'sa', 'sad', 'sdaarga', 'sad', 'images5.jpeg', 'adk'),
(8, 'alvin ', '56321', '800.000', 'akk', 'images2.jpeg', 'subatsa'),
(9, 'alvin ', '56321', '800.000', 'akk', 'images2.jpeg', 'subatsa'),
(10, 'sadasd', 'sa', 'sda', 'asd', 'images1.jpeg', 'asd'),
(11, 'sadasd', 'sa', 'sda', 'asd', 'images1.jpeg', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databuku`
--
ALTER TABLE `databuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
