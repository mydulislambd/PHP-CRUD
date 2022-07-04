-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 11:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `creat_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `address`, `phone`, `creat_time`, `update_time`) VALUES
(11, 'Habiba Akter', 'habibaakterume@gmail.com', 'Jigatola, Dhanmondi, Dhaka-1209', '01783004472', '2021-11-15 06:53:32', '2021-11-15 06:53:57'),
(14, 'Mahfuz Haque', 'mahfuz@gmail.com', 'Durgapur, Ulipur, Kurigram', '017805485984', '2021-11-17 04:39:10', '2021-11-17 04:39:10'),
(15, 'Abu Rayhan', 'raihan@gmail.com', 'Jigatola, Dhanmondi, Dhaka-1209	', '01780583387', '2021-11-17 04:40:00', '2021-11-17 04:40:00'),
(16, 'Jahir Khan', 'jahir@gmail.com', 'Jigatola, Dhanmondi, Dhaka-1209	', '01780583814', '2021-11-17 04:40:27', '2021-11-17 04:40:27'),
(17, 'Hasan Ali', 'hasn@gamil.com', 'Jigatola, Dhanmondi, Dhaka-1209', '01780583355', '2021-11-17 05:43:08', '2021-11-17 05:43:08'),
(19, 'Mujibur Rahman', 'mujib@gmail.com', 'Jigatola', '01780583387', '2022-06-06 05:01:13', '2022-06-06 05:01:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
