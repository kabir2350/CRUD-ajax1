-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 01:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `one` text NOT NULL,
  `two` text NOT NULL,
  `three` text NOT NULL,
  `four` text NOT NULL,
  `five` text NOT NULL,
  `six` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `one`, `two`, `three`, `four`, `five`, `six`) VALUES
(9, 'D', 'edf', 'sd', 'sd', 'sd', 'sd'),
(10, 'sd', 'sd', 'sd', 'ds', 'ds', 'd'),
(11, 'rd', 'fg', 'fghfgh', 'gfh', 'gh', 'gh'),
(12, 'f', 'sd', 'abc', 'def', 'dfg', 'fg'),
(13, 'dsf', 'gds', 'fdg', 'fg', 'fd', 'fdg'),
(14, 'fgfg', 'fdg', 'fdg', 'fdg', 'fg', 'fg'),
(15, 'sd', 'sadqqq', 'asd', 'sda', 'asd', 'sad'),
(16, 's', 's', 's', 's', 's', 's'),
(17, 'Machine Learning', ' a field of computer, a type of artificial intelligence', '', 'extract patterns out of raw data by using an algorithm or method;Â  allow computer systems learn from experience without being explicitly programmed or human intervention.', '', ''),
(18, 'Machine Learning', 'Emotion analysis', 'Sentiment analysis', 'Error detection and prevention', 'Stock market analysis and forecasting', 'Speech synthesis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
