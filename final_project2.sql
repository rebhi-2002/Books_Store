-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 11:09 PM
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
  `category` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `price`, `serial`, `ShortDescription`, `FullDescription`, `author`, `category`, `created_at`) VALUES
(1, 'انت لي', '01.jpg', '125', '600391735', 'Maiores et ratione v', 'Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu', 'د.منى المرشود', 'action', '2023-06-02 20:35:33'),
(2, 'دع القلق وابدا الحياة', '02.png', '5', '75336116', 'Esse quis et et Nam', 'Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu', 'ديل كارنيجي', 'action', '2023-06-02 20:35:33'),
(3, 'استمتع بحياتك', '03.jpg', '7', '2003017683', 'Maiores et ratione v', 'Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu', 'د.محمد بن عبد الرحمن العريفي', 'romantic', '2023-06-02 20:35:33'),
(26, 'HTML & CSS', '04.jpg', '30', '9781118008188', 'Design and Build Websites', 'Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.\r\n\r\nIntroduces HTML and CSS in a way that makes them accessible to everyone—hobbyists, students, and professionals—and it’s full-color throughout\r\nUtilizes information graphics and lifestyle photography to explain the topics in a simple way that is engaging\r\nBoasts a unique structure that allows you to progress through the chapters from beginning to end or just dip into topics of particular interest at your leisure\r\nThis educational book is one that you will enjoy picking up, reading, then referring back to. It will make you wish other technical topics were presented in such a simple, attractive and engaging way!\r\n\r\n', 'Jon Duckett', 'Web Development', '2023-06-02 20:35:33'),
(28, 'Javascript And Jquery\r\nJon Duckett', '05.jpg', '42', '9781118531648', 'Interactive Front-End Web Development', 'Jquery Was Written To Express, In Short-order, The Concepts Essential To Intermediate And Advanced Jquery Development. Its Purpose Is To Instill In You, The Reader, Practices That Jquery Developers Take As Common Knowledge. Each Chapter Contains Concepts Essential To Becoming A Seasoned Jquery Developer.this Book Is Intended For Two Types Of Readers. The First Is Someone Who Has Read Introductory Material On Jquery And Is Looking For The Next Logical Step. The Second Type Of Reader Is A Javascript Developer, Already Versed In Another Library, Now Trying To Quickly Learn Jquery. I Crafted This Book To Be Used As My Own Personal Reference Point For Jquery Concepts. This Is Exactly The Type Of Book I Wish Every Javascript Library Had Available. This Updated And Expanded Second Edition Of Book Provides A User-friendly Introduction To The Subject, Taking A Clear Structural Framework, It Guides The Reader Through The Subject\'s Core Elements. A Flowing Writing Style Combines With The Use Of Illustrations And Diagrams Throughout The Text To Ensure The Reader Understands Even The Most Complex Of Concepts. This Succinct And Enlightening Overview Is A Required Reading For All Those Interested In The Subject . We Hope You Find This Book Useful In Shaping Your Future Career & Business.', 'Jon Duckett', 'Web Development', '2023-06-02 20:35:33'),
(29, 'PHP & MySQL', '06.jpg', '42', '978-1119149217', 'Server-side Web Development', 'Learn PHP, the programming language used to build sites like Facebook, Wikipedia and WordPress, then discover how these sites store information in a database (MySQL) and use the database to create the web pages.\r\n\r\nThis full-color book is packed with inspiring code examples, infographics and photography that not only teach you the PHP language and how to work with databases, but also show you how to build new applications from scratch. It demonstrates practical techniques that you will recognize from popular sites where visitors can:\r\n\r\n1. Register as a member and log in\r\n2. Create articles, posts and profiles that are saved in a database\r\n3. Upload their own images and files\r\n4. Automatically receive email notifications\r\n5. Like and comment on posts.\r\nTo show you how to apply the skills you learn, you will build a complete content management system, enhanced with features that are commonly seen on social networks.\r\n\r\nWritten by best-selling HTML & CSS and JavaScript & jQuery author Jon Duckett, this book uses a unique visual approach, with step-by-step instructions, practical code examples and pro tips that will teach you how to build modern database-driven websites using PHP.', 'Jon Duckett', 'Web Development', '2023-06-02 20:35:33');

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
(79, 'انت لي', '01.jpg', '125', 1, ''),
(83, 'دع القلق وابدا الحياة', '02.png', '5', 1, ''),
(84, 'استمتع بحياتك', '03.jpg', '7', 1, ''),
(85, 'دع القلق وابدا الحياة', '02.png', '5', 1, '');

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
  `type` varchar(5) NOT NULL DEFAULT 'user',
  `url` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `url`, `age`, `phone`, `country`) VALUES
(1, 'Mohammed Naji', 'moh@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', '', 0, '0', ''),
(2, 'Zina Mohammed', 'zina@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', '', 0, '0', ''),
(31, 'Rebhe Ibrahim', 'rebhe@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', 'https://github.com/rebhi-2002/Books_Store', 22, '0597523575', 'Palestine, Gaza');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
