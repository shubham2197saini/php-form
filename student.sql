-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 11:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` int(20) NOT NULL,
  `cpass` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `pass`, `cpass`) VALUES
('', '', 0, 0),
('chandan', 'gchandan390@gmail.co', 123, 123),
('chandan', 'gchandan390@gmail.co', 123, 123),
('', '', 0, 0),
('vivek', 'vivek123@gmail.com', 123, 123),
('vivek', 'vivek123@gmail.com', 123, 123),
('suraj', 'suraj123@gmail.com', 23, 23),
('Vivek Singh ', 'gchandan390@gmail.co', 123, 123),
('chandan', 'gchandan390@gmail.co', 123, 1423),
('chandan', 'gchandan390@gmail.co', 123, 1423),
('chandna', 'gchandan390@gmail.co', 587, 587),
('chandan', 'gchandan390@gmail.co', 147, 147),
('chandan', 'gchandan390@gmail.co', 587, 258),
('mo,', 'mom123@gmail.com', 147, 147),
('gello', 'hhkk@gmail.com', 123, 478);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
