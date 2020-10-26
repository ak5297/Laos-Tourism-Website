-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2019 at 09:34 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ak5297`
--

-- --------------------------------------------------------

--
-- Table structure for table `Survey_feedback_form`
--

CREATE TABLE `Survey_feedback_form` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visitdate` date DEFAULT NULL,
  `learnnew` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `mostinteresting` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `food` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regions` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landmarks` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `comments` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Survey_feedback_form`
--

INSERT INTO `Survey_feedback_form` (`id`, `name`, `email`, `visitdate`, `learnnew`, `mostinteresting`, `food`, `regions`, `landmarks`, `rating`, `comments`) VALUES
(1, 'Alex', 'alaldald@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ALEX', 'ak5297@rit.edu', '2019-04-09', 'yes', 'regions,culture', 'larb,kowpiek', 'central,south', 'north,central', 10, 'Hey'),
(3, 'Alex', 'ak5297@rit.edu', '2019-03-31', 'yes', 'history,culture', 'larb,gangnormai', 'central,south', 'north,central', 10, 'HI.'),
(4, 'Alex', 'ak5297@rit.edu', '2019-03-31', 'yes', 'history,culture', 'larb,gangnormai', 'central,south', 'north,central', 10, 'HI.'),
(5, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(6, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(7, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(8, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(9, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(10, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(11, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(12, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(13, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(14, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(15, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(16, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(17, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(18, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(19, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(20, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(21, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(22, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(23, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(24, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(25, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(26, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(27, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(28, 'Alex', 'akaka@gmail.com', '2019-04-14', 'yes', 'regions,food', 'larb,kowpiek', 'central,south', 'central,south', 10, 'Hi.'),
(29, 'llll', 'ffjsf@gmail.com', '0000-00-00', 'yes', 'history,culture', 'kowpiek', 'central', 'south', 6, ''),
(30, 'lll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(31, 'lll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(32, 'llll', '', '0000-00-00', 'no', NULL, NULL, NULL, NULL, 6, ''),
(33, 'llll', '', '0000-00-00', 'no', 'regions,culture', 'larb,gangnormai', 'central', 'central', 10, ''),
(34, 'Alex', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(35, 'alsaslsl', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(36, 'Alex', '', '0000-00-00', 'yes', 'culture', 'kowpiek', 'central', 'south', 10, ''),
(37, 'aaa', '', '0000-00-00', 'yes', NULL, 'kowpiek', 'central', 'north', 10, ''),
(38, 'Alex', 'ak5297@rit.edu', '2019-04-15', 'yes', 'regions,culture', 'kowpiek,gangnormai', 'north,central', 'central,south', 10, 'Hi'),
(39, 'aaa', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(40, 'llll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(41, 'llll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(42, 'lll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(43, 'llll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(44, 'lllll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, ''),
(45, 'llll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, 'Hi'),
(46, 'llll', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, 'No Comment provided by the user!'),
(47, 'aaaa', '', '0000-00-00', 'yes', NULL, NULL, NULL, NULL, 6, 'No Comment provided by the user!'),
(48, 'lllll', '', '0000-00-00', 'yes', 'Most interesting was not selected on the form', 'None', 'Region was not selected on the form', 'Landmarks was not selected on the form', 6, 'No Comment provided by the user!'),
(49, 'lllll', '', '0000-00-00', 'yes', 'Most interesting was not selected on the form', 'Food was not selected on the form', 'Region was not selected on the form', 'Landmarks was not selected on the form', 6, 'No Comment provided by the user!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Survey_feedback_form`
--
ALTER TABLE `Survey_feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Survey_feedback_form`
--
ALTER TABLE `Survey_feedback_form`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
