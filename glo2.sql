-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: mysql.theswack.com
-- Generation Time: Apr 18, 2016 at 06:50 PM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `happyThoughts`
--

CREATE TABLE `happyThoughts` (
  `thoughtID` int(15) NOT NULL,
  `author` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `thought` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `happyThoughts`
--

INSERT INTO `happyThoughts` (`thoughtID`, `author`, `date`, `thought`) VALUES
(1, 'Ralph Waldo Emerson', '2000-03-02', 'Conditions to the events of each day. To do this is to condition circumstances instead of being conditioned by them'),
(3, 'Albert Camus', '2010-09-10', 'You will never be happy if you continue to search for what happiness consists of. You will never live if you are looking for the meaning of life'),
(4, 'Kierkegaard', '2012-10-15', 'Most men pursue pleasure with such breathless haste, that they hurry past it'),
(5, 'Helen Keller', '2009-05-28', 'Resolve to keep happy and your joy and you shall form an invincible host against difficulties'),
(6, 'Thich Nhat Hanh', '2013-12-19', 'Sometimes your joy is the source of your smile, but sometimes your smile can be the source of your joy.'),
(7, 'Andy Rooney', '2011-06-10', 'For most of life, nothing wonderful happens. If you don’t enjoy getting up and working and finishing your work and sitting down to a meal with family or friends, then the chances are that you’re not going to be very happy. If someone bases his happiness or unhappiness on major events like a great new job, huge amounts of money, a flawlessly happy marriage or a trip to Paris, that person isn’t going to be happy much of the time. If, on the other hand, happiness depends on a good breakfast, flowers in the yard, a drink or a nap, then we are more likely to live with quite a bit of happiness.'),
(8, 'C.S. Lewis', '2006-07-01', 'When we are such as He can love without impediment, we shall in fact be happy.'),
(9, 'Count Leo Tolstoy', '2008-02-15', 'Happiness does not depend on outward things, but on the way we see them'),
(10, 'Margaret Bonnano', '2007-08-25', 'It is only possible to live happily ever after on a day to day basis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `happyThoughts`
--
ALTER TABLE `happyThoughts`
  ADD PRIMARY KEY (`thoughtID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `happyThoughts`
--
ALTER TABLE `happyThoughts`
  MODIFY `thoughtID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
