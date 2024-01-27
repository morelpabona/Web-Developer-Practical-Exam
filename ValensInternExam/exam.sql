-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 09:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valendb`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `plateno` varchar(255) NOT NULL,
  `currentcolor` varchar(255) NOT NULL,
  `targetcolor` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`plateno`, `currentcolor`, `targetcolor`, `action`) VALUES
('xxR23', 'Blue', 'Green', 'completed'),
('xxrxz', 'Red', 'Green', 'completed'),
('xxrxz', 'Red', 'Green', 'completed'),
('22xz', 'Green', 'Green', 'Mark as Completed'),
('XXRSAB', 'Green', 'Blue', 'Mark as Completed'),
('xxrxz', 'Green', 'Blue', 'completed'),
('MORSAX', 'Green', 'Green', 'Mark as Completed'),
('MOREL2', 'red', 'blue', 'Mark as Completed'),
('PLES2', 'green', 'green', 'Mark as Completed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
