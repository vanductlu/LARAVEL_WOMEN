-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 10:44 AM
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
-- Database: `laravel-study`
--

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `field_of_work` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `name`, `field_of_work`, `image_url`, `birth_date`, `created_at`, `updated_at`) VALUES
(1, 'Gunnar Nicolas I', 'Nuclear Engineer', 'C:\\Users\\admin\\AppData\\Local\\Temp\\php44.tmp', '1993-06-10', '2023-10-23 00:45:45', '2023-10-23 01:17:32'),
(2, 'Dahlia Kirlin DDS', 'Electro-Mechanical Technician', 'https://via.placeholder.com/640x480.png/00ee11?text=et', '2008-09-09', '2023-10-23 00:45:45', '2023-10-23 00:45:45'),
(3, 'Josie Denesik', 'Office and Administrative Support Worker', 'https://via.placeholder.com/640x480.png/0022bb?text=aliquam', '2021-08-27', '2023-10-23 00:45:45', '2023-10-23 00:45:45'),
(4, 'Juvenal Cremin', 'Broadcast News Analyst', 'https://via.placeholder.com/640x480.png/0099ff?text=et', '1994-07-09', '2023-10-23 00:45:45', '2023-10-23 00:45:45'),
(5, 'Amaya Kub', 'Fish Game Warden', 'https://via.placeholder.com/640x480.png/00bb88?text=perspiciatis', '1973-02-10', '2023-10-23 00:45:45', '2023-10-23 00:45:45'),
(6, 'Nikita White IV', 'General Manager', 'https://via.placeholder.com/640x480.png/0088aa?text=ut', '1994-01-13', '2023-10-23 00:45:45', '2023-10-23 00:45:45'),
(7, 'Brendan Rippin', 'Gaming Surveillance Officer', 'https://via.placeholder.com/640x480.png/00dd22?text=sed', '1976-03-01', '2023-10-23 00:45:45', '2023-10-23 00:45:45'),
(8, 'Angelica Steuber', 'Locksmith', 'https://via.placeholder.com/640x480.png/00dd11?text=amet', '1995-01-10', '2023-10-23 00:45:45', '2023-10-23 00:45:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
