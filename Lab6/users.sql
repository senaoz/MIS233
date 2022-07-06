-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 04:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MIS 233`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_mail` varchar(200) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_surname` varchar(200) NOT NULL,
  `u_phone` varchar(250) NOT NULL,
  `u_country` varchar(250) NOT NULL,
  `u_city` varchar(250) NOT NULL,
  `u_uni` varchar(255) NOT NULL,
  `u_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_mail`, `u_name`, `u_surname`, `u_phone`, `u_country`, `u_city`, `u_uni`, `u_password`) VALUES
('tazeyta+11@gmail.com', 'Betül', 'OZ', '+905532704508', 'Turkey', 'İzmir', 'Boğaziçi Üniversitesi', 'deneme'),
('tazeyta@gmail.com', 'Sena', 'Oz', '', '', '', '', 'test'),
('z.sena.oz@outlook.com', 'Sena', 'Oz', '05532704508', '', 'İzmir', 'Boğaziçi Üniversitesi', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
