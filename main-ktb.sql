-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2024 at 05:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main-ktb`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int NOT NULL,
  `icon1` varchar(255) NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `icon3` varchar(255) NOT NULL,
  `bg1` varchar(255) NOT NULL,
  `bg2` varchar(255) NOT NULL,
  `mobil1` varchar(255) NOT NULL,
  `mobil2` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_deskripsi` varchar(255) NOT NULL,
  `meta_sitename` varchar(255) NOT NULL,
  `icon_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `icon1`, `icon2`, `icon3`, `bg1`, `bg2`, `mobil1`, `mobil2`, `deskripsi`, `title`, `meta_title`, `meta_deskripsi`, `meta_sitename`, `icon_website`) VALUES
(1, '1716098924.png', '1716098935.png', '1716098926.png', '1716099032.png', '1716099033.png', '1716099054.png', '1716099055.png', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p><ul><li>Lorem ipsum sit dolor amet</li><li><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text</li></ul>', 'Caldwell Moody', 'Libby Wells', 'Kiara Page', 'Lars Mcguire', '1716115541.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
