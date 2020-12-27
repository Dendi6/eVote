-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 09:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pilihan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `nik`, `nama`, `pilihan`, `created_at`, `updated_at`) VALUES
(1, '12345', 'Dendi', 'Dendi', '2020-12-26 18:43:44', '2020-12-26 18:43:44'),
(2, '12346', 'Siti Marliana', 'Siti Marliana', '2020-12-26 18:44:11', '2020-12-26 18:44:11'),
(3, '12347', 'Muhammad Fikriansyah', 'Dendi', '2020-12-26 18:44:31', '2020-12-26 18:44:31'),
(4, '12348', 'Marina', 'Marina Sascya', '2020-12-26 18:47:00', '2020-12-26 18:47:00'),
(5, '12349', 'Simar', 'Dendi', '2020-12-26 18:47:23', '2020-12-26 18:47:23'),
(6, '12350', 'Mawar', 'Reza Zulfan', '2020-12-26 18:47:47', '2020-12-26 18:47:47'),
(7, '12351', 'Ayu', 'Rijal El Fikri', '2020-12-26 18:48:14', '2020-12-26 18:48:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
