-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 06:12 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vocab`
--

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `id` int(11) NOT NULL,
  `text` varchar(25) NOT NULL,
  `meaning` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`id`, `text`, `meaning`, `status`) VALUES
(1, 'mesmerizing', 'bedazzled', 1),
(6, 'illuminate', 'lighten', 1),
(39, 'omnipresent', 'Ä‘i Ä‘Ã¢u cÅ©ng gáº·p', 1),
(52, 'angst', 'a feeling of deep anxiety or dread', 1),
(37, 'early adopter', 'first adapter, trendsetter, tastemaker', 1),
(38, 'agility', 'ability to think and understand quickly', 1),
(51, 'euphoria', 'phÃª lÃ¡ Ä‘u Ä‘á»§', 1),
(13, 'move the needle', 'Make a significant difference', 1),
(54, 'imminent', 'about to happen', 1),
(33, 'bus rapid transit', 'xe bus nhanh', 1),
(46, 'ferociously', 'in a savagely fierce, cruel, or violent manner', 1),
(53, 'commencement', 'a ceremony in which degrees or diplomas are conferred on graduating students', 1),
(49, 'ebb and flow', 'a recurrent or rhythmical pattern of coming and going or decline and regrowth', 1),
(50, 'amnesia', 'a partial or total loss of memory', 1),
(30, 'voice-controlled', 'manh iu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
