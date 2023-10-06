-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 08:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `sno` int(5) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(10) NOT NULL,
  `seating_capacity` int(2) NOT NULL,
  `rent_per_day` int(10) NOT NULL,
  `agent_name` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `added_vehicle`
--

INSERT INTO `added_vehicle` (`sno`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `agent_name`, `time`) VALUES
(1, 'Honda City with sunroof', '    ODXX11', 5, 2400, 'admin@123', '2023-10-06 06:15:31'),
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
(16, 'Bolero Neo', '  ODXXABXX', 7, 2300, 'admin@123', '2023-10-05 06:16:01'),
(17, 'aaa', 'aaa', 5, 10000, 'admin@123', '2023-10-06 06:14:48');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `added_vehicle`
--
ALTER TABLE `added_vehicle`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
