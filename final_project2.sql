-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 01:46 AM
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
-- Database: `final_project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(7) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `ShortDescription` varchar(200) NOT NULL,
  `FullDescription` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `price`, `serial`, `ShortDescription`, `FullDescription`, `author`, `category`) VALUES
(1, 'انت لي', '01.jpg', '125', '600391735', 'Maiores et ratione v', 'Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu', 'د.منى المرشود', 'action'),
(2, 'دع القلق وابدا الحياة', '02.png', '5', '75336116', 'Esse quis et et Nam', 'Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu', 'ديل كارنيجي', 'action'),
(3, 'استمتع بحياتك', '03.jpg', '7', '2003017683', 'Maiores et ratione v', 'Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu', 'د.محمد بن عبد الرحمن العريفي', 'romantic');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_image` varchar(200) NOT NULL,
  `book_price` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `book_name`, `book_image`, `book_price`, `user_id`, `quantity`) VALUES
(73, 'دع القلق وابدا الحياة', '02.png', '5', 1, ''),
(74, 'انت لي', '01.jpg', '125', 1, ''),
(75, 'Merritt Harper', '', '546', 1, ''),
(76, 'دع القلق وابدا الحياة', '02.png', '5', 1, ''),
(77, 'انت لي', '01.jpg', '125', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Drama'),
(3, 'Romantic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Mohammed Naji', 'moh@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user'),
(2, 'Zina Mohammed', 'zina@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
