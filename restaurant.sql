-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `people` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date_time`, `fullname`, `phonenumber`, `people`) VALUES
(2, '0000-00-00 00:00:00', 'anuja', 12345564, 5),
(3, '0000-00-00 00:00:00', 'Ellepola', 767327371, 2),
(4, '0000-00-00 00:00:00', 'Ellepola', 767327371, 2),
(5, '2023-10-07 22:44:00', 'Perera', 717327371, 5),
(6, '2023-10-31 03:44:00', 'vikum', 2147483647, 1),
(7, '2023-10-27 20:08:00', 'hemal', 774411223, 15),
(8, '2023-11-08 14:32:00', 'Kamal', 717327371, 7),
(9, '2023-11-11 13:16:00', 'Devaka', 812205030, 3),
(10, '2023-10-10 16:58:00', 'Amal', 771234567, 2),
(12, '2023-11-03 21:28:00', 'staff', 22222222, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
