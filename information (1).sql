-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 01:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `id_no` int(11) NOT NULL,
  `d_o_b` text NOT NULL,
  `post_scondary` varchar(50) NOT NULL,
  `gpa` varchar(50) NOT NULL,
  `date_addmited` text NOT NULL,
  `date_completion` text NOT NULL,
  `secondary_school` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `date_registerd` text NOT NULL,
  `date_of_completion` text NOT NULL,
  `skills` text NOT NULL,
  `referee_name` varchar(100) NOT NULL,
  `referee_role` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `id_copy` varchar(100) NOT NULL,
  `attachment_letter` varchar(100) NOT NULL,
  `passport_photo` varchar(100) NOT NULL,
  `application_letter` varchar(100) NOT NULL,
  `insurance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `fname`, `lname`, `email`, `mobile_no`, `id_no`, `d_o_b`, `post_scondary`, `gpa`, `date_addmited`, `date_completion`, `secondary_school`, `grade`, `date_registerd`, `date_of_completion`, `skills`, `referee_name`, `referee_role`, `institution`, `contact_number`, `id_copy`, `attachment_letter`, `passport_photo`, `application_letter`, `insurance`) VALUES
(0, 'test1', 'test1', 'test1@gmail.com', ' 26272828', 27289608, '0000-00-00', 'nibs', ' credit', '0000-00-00', '0000-00-00', 'ndalani', 'c(plain)', '0000-00-00', '0000-00-00', '<p>;hshhsiskmhhsisoslsshsuiwokssjsjkkls</p>', 'mr x', 'y work', 'NIBS Technical College', '34527291', '639252a85176d.jpg', '639252a85176f.jpg', '639252a851770.png', '639252a851771.jpg', '639252a851772.jpg'),
(0, 'test2', 'test3', 'test2@gmail.com', ' +254742220764', 272030931, '09/25/1999', 'wecasd', ' ds', '12/08/2016', '12/07/2022', 'ndalani', 'vsd', '12/01/2019', '12/08/2019', '', 'DSCSDC', 'SDCSD', 'CSDCAs', 'asdvasdv', '6392550741742.jpg', '6392550741744.jpg', '6392550741745.jpg', '6392550741746.png', '6392550741747.jpg'),
(0, 'Harun', 'Kibe', 'test3@gmail.com', ' +254742220764', 2567890, '12/06/2004', 'Kennyata University', ' first class', '12/04/2016', '12/19/2019', 'Starehe Boys Center', 'A(plain)', '12/10/2008', '12/06/2012', '', 'Evans Omondi', 'Ict Systems', 'Kenyatta University', '+254742220764', '639867d79e8f8.jpg', '639867d79e8fa.jpg', '639867d79e8fb.jpg', '639867d79e8fc.jpg', '639867d79e8fd.jpg'),
(0, 'Harun', 'Kibe', 'test3@gmail.com', ' +254742220764', 2567890, '12/06/2004', 'Kennyata University', ' first class', '12/04/2016', '12/19/2019', 'Starehe Boys Center', 'A(plain)', '12/10/2008', '12/06/2012', '', 'Evans Omondi', 'Ict Systems', 'Kenyatta University', '+254742220764', '639868e156358.jpg', '639868e15635a.jpg', '639868e15635b.jpg', '639868e15635c.jpg', '639868e15635d.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
