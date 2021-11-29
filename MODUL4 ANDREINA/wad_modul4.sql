-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 02:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `nama_tempat`, `lokasi`, `harga`, `tanggal`) VALUES
(10, 0, 'Raja Ampat', 'Papua', 7000000, '2021-11-22'),
(17, 9, 'Gunung Bromo', 'Malang', 2000000, '2021-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'bobi bola', 'bobibola@gmail.com', '$2y$10$V3fMUqa4qnPe7jglW.eZKuoYb9./O0JRUGRMj0J9Aqv8IOPBS9ILK', '1234'),
(2, 'bobi bola', 'bobibola@gmail.com', '$2y$10$V3fMUqa4qnPe7jglW.eZKuoYb9./O0JRUGRMj0J9Aqv8IOPBS9ILK', '1234'),
(3, 'nugget', 'nugget@gmail.com', '$2y$10$zp3a1wQohuMOoa8hFtAanOSFjX8cbneY1Ff.FisFxWjgG1yp9i.XC', '12345'),
(4, 'kunyit', 'kunyitasem@gmail.com', '$2y$10$D/vN8xrlXztgQE0OeTGs1.UlW1IHRBX38i5jmGVJvdTxrxpz0Zrzm', '5555'),
(5, 'bobi bola', 'bobobobo@gmail.com', '$2y$10$zgVjuVfe6tiu4eEmwg6WJeIHjiv9hmJ0dXwW5rJAq8Xpl9xZHLV3y', '1234'),
(6, 'bubu', 'buburayam@gmail.com', '$2y$10$bMuDIiJjS4WdOd4Y6.CdjOrC8kZZfP8HXY0BQAEBfeHRYguOw7SIW', '12345'),
(7, 'nugget', 'nuggetayam@gmail.com', '$2y$10$.Y42MNqf7kv1qwew5iWC1us9Oeii5.lzhyQKuUboNc/TR348aY26K', '999'),
(8, 'boni bona', 'bonita@gmail.com', '$2y$10$YLTyxSqZM1tycgPYYt2wvOPb4lDxyU7qMN7gkIE9cZzFYQSwOHT6a', '5322'),
(9, 'kunyit', 'kunyit.asem@gmail.com', '$2y$10$Wr7bxPZrkM6Spcye0Nvjo.3muj7laLDUt6gEhH8u3cFidvGtWkp2a', '1456'),
(10, 'andreina', 'andreinaa@gmail.com', '$2y$10$ajai8tdCC7AzxLKFeAIYiuucY4PW96Fc1fwDTCNMLwKEaODGjAjgy', '888'),
(11, 'andreina', 'reina@gmail.com', '$2y$10$JY03z/6pDKHLPCULX/9KU.LaXLb9iz6DaW8GI1XLslnBma0kAWyJS', '666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
