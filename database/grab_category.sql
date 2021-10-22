-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 02:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baitaplon1`
--

-- --------------------------------------------------------

--
-- Table structure for table `grab_category`
--

CREATE TABLE `grab_category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `home` int(11) NOT NULL,
  `right` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grab_category`
--

INSERT INTO `grab_category` (`id`, `name`, `home`, `right`) VALUES
(1, 'Văn hóa', 1, 0),
(2, 'Thể thao', 1, 0),
(3, 'Giải trí', 1, 0),
(4, 'Xã hội', 1, 0),
(5, 'Pháp luật', 1, 0),
(6, 'Sự kiện', 1, 0),
(7, 'Giải trí', 0, 1),
(8, 'Cười', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grab_category`
--
ALTER TABLE `grab_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grab_category`
--
ALTER TABLE `grab_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
