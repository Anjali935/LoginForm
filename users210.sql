-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 30, 2023 at 12:05 PM
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
-- Database: `users210`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `username` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `designation`, `username`, `password`, `email`, `dt`) VALUES
(1, 'Arun', 'Manager', 8860340672, '$2y$10$631AHQiFyBKC/g0eX0N9N.d6xz7pyfCkt7B97Is.anCNqWUTHmsPy', 'arun@gmail.com', '2023-12-30 15:50:54'),
(2, 'Narendra', 'Developer', 9632587415, '$2y$10$QswiQNs7PyOMdtVk21F6x.DnUbVTnlODp37NwVSfRLiRCNFiaenHK', 'narendra@gmail.com', '2023-12-30 15:55:20'),
(3, 'Harsh', 'Accountant', 8523697412, '$2y$10$rbZypIMp0xFfidRgYYY.VeXDKylYRBgkisT/A6csCo.SbS7NrIbQa', 'harsh@gmail.com', '2023-12-30 16:23:18'),
(4, 'Aman', 'Sales man', 9582765723, '$2y$10$00qYn0O3/56LoZJ2EjgMqevtKDF4DGIymDrFx/mta1i8DfZAgxwlq', 'aman@gmail.com', '2023-12-30 16:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
