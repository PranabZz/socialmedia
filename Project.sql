-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2022 at 11:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Post`
--

CREATE TABLE `Post` (
  `id` int(100) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Post` varchar(250) NOT NULL,
  `Time` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Likes` int(4) NOT NULL,
  `Comment` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Post`
--

INSERT INTO `Post` (`id`, `Username`, `Post`, `Time`, `Image`, `Likes`, `Comment`) VALUES
(23, 'Pranab', 'alert(&#34;Hacked&#34;);', '02:03:29 PM', 'post_photos/index.jpeg02:03:29 PM', 0, 0),
(24, 'Pranab', 'alert(&#34;Hacked&#34;);', '02:03:32 PM', 'post_photos/index.jpeg02:03:32 PM', 0, 0),
(25, 'Pranab', 'eeras', '02:03:24 PM', 'post_photos/index.jpeg02:03:24 PM', 0, 0),
(26, 'Pranab', 'eeras', '02:03:40 PM', 'post_photos/index.jpeg02:03:40 PM', 0, 0),
(27, 'Pranab', 'eeras', '02:03:49 PM', 'post_photos/index.jpeg02:03:49 PM', 0, 0),
(28, 'Pranab', 'Lab 2', '02:03:17 PM', 'post_photos/Lab-2-MP.pdf02:03:17 PM', 0, 0),
(29, 'New', 'Hello world', '05:03:42 PM', 'post_photos/05:03:42 PM', 0, 0),
(30, 'New', 'das', '06:03:16 PM', 'post_photos/index.jpeg06:03:16 PM', 0, 0),
(31, 'New', 'qwe', '06:03:21 PM', 'post_photos/Screenshot from 2021-12-26 16-47-54.png06:03:21 PM', 0, 0),
(32, 'Pranab', 'okay must work', '02:03:19 AM', 'post_photos/ok.png02:03:19 AM', 0, 0),
(34, 'alert(&#34;nigga&#34;);', 'alert(&#34;Hacked&#34;);', '02:03:14 AM', 'post_photos/Screenshot from 2022-02-01 20-05-11.png02:03:14 AM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `Id` int(100) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Id`, `Username`, `Email`, `Password`) VALUES
(5, 'Pranab', 'Pranab@gmail.com', 'Pranab'),
(7, 'Pranabzz', 'Pranab@gmal.com', 'Pranab'),
(10, 'Bot', 'Pranab@gma', 'bot'),
(12, 'New', 'New@gmail.com', 'bot'),
(14, 'Newas', 'Newas@gmail.com', 'bot'),
(16, 'Pranabaz', 'Pranabaz@gmail.com', 'Pranab'),
(17, '', '', ''),
(20, 'Newasz', 'Newasz@gmail.com', 'bot'),
(22, 'Botas', 'Pranab@gmail.comas', 'bot'),
(26, 'alert(&#34;hello&#34;);', 'Pranab@gmails.com', 'bot'),
(28, 'Suman', 'Suman@gmail.com', 'Suman'),
(29, 'alert(&#34;nigga&#34;);', 'n@gmail.com', 'nigga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`),
  ADD UNIQUE KEY `Username_2` (`Username`,`Email`),
  ADD UNIQUE KEY `Username_3` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Post`
--
ALTER TABLE `Post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
