-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 07:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calendar_embed_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `bg`, `description`, `calendar_embed_link`, `created_at`, `updated_at`) VALUES
(1, 'Java Programming Class A', NULL, 'Java is well-known for its high performance and flexibility, as it can be used to construct mobile and web-based applications, video games, and more. Through this course, you will learn about object-oriented programming and GUI in Java.', 'https://calendar.google.com/calendar/embed?src=7d1844mu281p8jus6toqqt9ego%40group.calendar.google.com&ctz=Asia%2FJakarta', NULL, NULL),
(2, 'Java Programming B', NULL, 'Java is well-known for its high performance and flexibility, as it can be used to construct mobile and web-based applications, video games, and more. Through this course, you will learn about object-oriented programming and GUI in Java.', 'https://calendar.google.com/calendar/embed?src=175ndfd0rvmtfgfoa3obbqafhg%40group.calendar.google.com&ctz=Asia%2FJakarta', NULL, NULL),
(3, 'UI/UX Design', NULL, 'More of a design person? Well, this course is just for you! Through this course, you will learn how to create a beautiful and user-friendly interface. Improve your sense of design through various researches to achieve the best user satisfaction.', 'https://calendar.google.com/calendar/embed?src=2ji7s516a5ehm4msbvnagai0fc%40group.calendar.google.com&ctz=Asia%2FJakarta', NULL, NULL),
(4, 'Game Development', NULL, 'Ever thought about developing your own games? By joining this course, you will be able to understand the process of making a game and gain the skills to stand out as a game developer. Turn your passion for gaming into your career!', 'https://calendar.google.com/calendar/embed?src=895m4e9k0ml1l1brv8ke7neauc%40group.calendar.google.com&ctz=Asia%2FJakarta', NULL, NULL),
(5, 'Mobile Development Class A', NULL, 'Ever considered mobile app development? In this course, you’ll learn how to develop android applications from scratch. This course is the perfect start for your journey to becoming a mobile apps developer!', 'https://calendar.google.com/calendar/embed?src=rb6jr0ra41j1ocl2247otrai6s%40group.calendar.google.com&ctz=Asia%2FJakarta', NULL, NULL),
(6, 'Mobile Development Class B', NULL, 'Ever considered mobile app development? In this course, you’ll learn how to develop android applications from scratch. This course is the perfect start for your journey to becoming a mobile apps developer!', 'https://calendar.google.com/calendar/embed?src=1ve61uemf4ij91kvp4o3llefmo%40group.calendar.google.com&ctz=Asia%2FJakarta', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
