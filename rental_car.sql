-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2023 at 04:57 AM
-- Server version: 8.0.34-0ubuntu0.23.04.1
-- PHP Version: 8.1.12-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `added_vehicle`
--

CREATE TABLE `added_vehicle` (
  `sno` int NOT NULL,
  `vehicle_model` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `vehicle_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `seating_capacity` int NOT NULL,
  `rent_per_day` int NOT NULL,
  `agent_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `added_vehicle`
--

INSERT INTO `added_vehicle` (`sno`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `agent_name`, `time`) VALUES
(1, 'Honda City with sunroof', 'ODXX11XXXX', 5, 2400, 'admin@123', '2023-10-06 19:15:13'),
(2, 'Swift Dzire new model', 'ODXXABXXXX', 5, 1480, 'admin@123', '2023-10-04 19:14:59'),
(3, 'Hyundai EON', 'ODXXABXXXX', 5, 1000, 'admin@123', '2023-10-04 19:15:15'),
(4, 'Maruti Alto', 'ODXXABXXXX', 5, 1020, 'admin@123', '2023-10-04 19:15:33'),
(5, 'Suzuki-baleno', 'ODXXABXXXX', 5, 1480, 'admin@123', '2023-10-04 19:15:47'),
(6, 'Hyundai i20', 'ODXXABXXXX', 5, 1520, 'admin@123', '2023-10-04 19:16:09'),
(7, 'Maruti Suzuki Ciaz', 'ODXXABXXXX', 5, 1620, 'admin@123', '2023-10-04 19:16:29'),
(8, 'Maruti Suzuki Swift', 'ODXXABXXXX', 5, 1420, 'admin@123', '2023-10-04 19:16:45'),
(9, 'Maruti Celerio', 'ODXXABXXXX', 5, 1120, 'admin@123', '2023-10-04 19:17:03'),
(10, 'IGNIS', 'ODXXABXXXX', 4, 1230, 'admin@123', '2023-10-04 19:17:21'),
(11, 'Kwid', 'ODXXABXXXX', 5, 1090, 'admin@123', '2023-10-04 19:17:36'),
(12, 'Tata Tiago', 'ODXXABXXXX', 5, 1020, 'admin@123', '2023-10-04 19:17:53'),
(13, 'Hyundai venue SX top model', 'ODXXABXXXX', 5, 1700, 'admin@123', '2023-10-04 19:18:14'),
(14, 'Hyundai Aura', 'ODXXABXXXX', 5, 1400, 'admin@123', '2023-10-04 19:18:27'),
(15, 'Kia carens', 'ODXXABXXXX', 7, 2400, 'admin@123', '2023-10-04 19:18:41'),
(16, 'Bolero Neo', '  ODXXABXX', 7, 2300, 'admin@123', '2023-10-05 06:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `sno` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_no` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`sno`, `name`, `email`, `phone_no`, `password`, `time`) VALUES
(1, 'admin', 'admin@123', '', '$2y$10$pC9X0QBZP5hG4b2O1KmP6.XRhMlzfJYd39yFy2n5VaAFsh79fHacK', '2023-10-06 15:43:29'),
(2, 'Saksham', 'singhsaksham0001@gmail.com', '7839313569', '$2y$10$o1QJ1zRIZ1qAcum.QJm1xOniGqNF8wX3uF9rA78en3.qRxytp.Kea', '2023-10-07 06:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `booked_car_details`
--

CREATE TABLE `booked_car_details` (
  `sno` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vehicle_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `seating_capacity` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `rent_per_day` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `pickup_date` date NOT NULL,
  `no_of_days` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `gps_navigaton` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `booked_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_car_details`
--

INSERT INTO `booked_car_details` (`sno`, `full_name`, `phone_number`, `email`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `pickup_date`, `no_of_days`, `gps_navigaton`, `booked_time`) VALUES
(1, 'temp', '2222222222', 'temp@gmail.com', 'Honda City with sunroof', 'ODXX11XXXX', '5', '2400', '2023-10-07', '5', 'Yes', '2023-10-06 19:18:42'),
(2, 'temp', '2222222222', 'temp@gmail.com', 'Maruti Alto', 'ODXXABXXXX', '5', '1020', '2023-10-08', '4', 'Yes', '2023-10-06 19:19:08'),
(3, 'MANORANJAN KUMAR ', '2222222222', 'mail.manoranjan01@gmail.com', 'Honda City with sunroof', 'ODXX11XXXX', '5', '2400', '2023-10-07', '4', 'Yes', '2023-10-07 07:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_no` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `email`, `phone_no`, `password`, `time`) VALUES
(1, 'kanan', 'kanan@123', '', '$2y$10$3023pJaoCXRjCuvNoN5jnejyqT5ZHdH9fIqI55myhugJABGm9eUpO', '2023-10-06 15:18:11'),
(2, 'saksham', 'saksham@123', '8011111111', '$2y$10$eDWR49w4Xy5HiFOP8fvzc.cg.K15Uwdv41ldMjrUoKRZig/fSZ3GC', '2023-10-06 17:11:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `added_vehicle`
--
ALTER TABLE `added_vehicle`
  ADD PRIMARY KEY (`sno`);
ALTER TABLE `added_vehicle` ADD FULLTEXT KEY `vehicle_model` (`vehicle_model`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `booked_car_details`
--
ALTER TABLE `booked_car_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `added_vehicle`
--
ALTER TABLE `added_vehicle`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booked_car_details`
--
ALTER TABLE `booked_car_details`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
