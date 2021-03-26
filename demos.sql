-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 11:05 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demos`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `disps` ()  SELECT * FROM specification$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'administrator', '$2y$10$EQ/H1VA5u0wTe/oHUVQHrOwsZ7kWliAVhruo4Nwaf9ILy.s.U04t6', '2019-11-11 22:03:38'),
(4, 'mahi', '$2y$10$pwHOE5EcfpCuZsqQM8wamuxVLlsZwe0Q63TL9lgHjqfZ8Z3VQY6ja', '2019-11-12 18:32:27'),
(5, 'prajji', '$2y$10$5vQQf28tT4I2T0aIDHFMB.5SaYoTGA5wEpV2IHewjmAu1Y7VoGhRa', '2019-11-12 19:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sp_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sp_id`, `c_id`, `c_name`, `year`, `created_at`) VALUES
(12, 23, 'Msc  Chemistry', 2, '2019-11-28 20:51:52'),
(12, 24, 'MSc Botany', 2, '2019-11-28 20:51:52'),
(12, 25, 'MSc Zoology', 2, '2019-11-28 20:51:52'),
(12, 26, 'MSc Computer science', 2, '2019-11-28 20:51:52'),
(12, 27, 'MSc Mathematics', 2, '2019-11-28 20:51:52'),
(12, 28, 'MSc PCM', 2, '2019-11-28 20:51:52'),
(12, 29, ' MSc CBZ', 2, '2019-11-28 20:51:52'),
(12, 30, '  MSc Forestry', 2, '2019-11-28 20:51:52'),
(12, 31, 'MSc Dietician & Nutritionist', 2, '2019-11-28 20:51:52'),
(12, 32, ' MSc Home Science', 2, '2019-11-28 20:51:52'),
(12, 33, ' MSc Agriculture Science', 2, '2019-11-28 20:51:52'),
(12, 34, ' MSc Horticulture', 2, '2019-11-28 20:51:52'),
(12, 35, ' MSc Sericulture', 2, '2019-11-28 20:51:52'),
(12, 36, ' MSc Oceanography', 2, '2019-11-28 20:51:52'),
(12, 37, '  MSc Melsorology', 2, '2019-11-28 20:51:52'),
(12, 38, ' MSc Arthopology', 2, '2019-11-28 20:51:52'),
(12, 39, ' MSc Forensic Science', 2, '2019-11-28 20:51:52'),
(12, 40, ' MSc Food technology', 2, '2019-11-28 20:51:52'),
(12, 41, ' MSc Diary Technology', 2, '2019-11-28 20:51:52'),
(12, 42, ' MSc Hotel Management', 2, '2019-11-28 20:51:52'),
(12, 43, ' Msc Fashion Design', 2, '2019-11-28 20:51:52'),
(12, 44, ' MSc, Mass Communication', 2, '2019-11-28 20:51:52'),
(12, 45, ' MSc Electronic Media', 2, '2019-11-28 20:51:52'),
(12, 46, 'MSc Multimedia', 2, '2019-11-28 20:51:52'),
(12, 47, 'MSc 3D Animation', 2, '2019-11-28 20:51:52'),
(31, 49, 'B.B.A.', 3, '2019-11-28 20:53:28'),
(31, 50, 'B.M.S. ', 3, '2019-11-28 20:53:28'),
(31, 51, 'B.F.A.  ', 3, '2019-11-28 20:53:28'),
(31, 52, 'B.H.M.', 3, '2019-11-28 20:53:28'),
(31, 53, 'B.E.M', 3, '2019-11-28 20:53:28'),
(31, 54, 'B.A.+L.L.B.', 3, '2019-11-28 20:53:28'),
(31, 55, 'B.J.M', 3, '2019-11-28 20:53:28'),
(31, 56, 'B.F.D.', 3, '2019-11-28 20:53:28'),
(31, 57, 'B.El.Ed', 3, '2019-11-28 20:53:28'),
(31, 58, 'B.P.Ed.', 3, '2019-11-28 20:53:28'),
(31, 59, 'D.El.Ed', 3, '2019-11-28 20:53:28'),
(31, 60, 'B.SW.', 3, '2019-11-28 20:53:28'),
(31, 61, 'B.RM.', 3, '2019-11-28 20:53:28'),
(31, 62, 'B.B.S.', 3, '2019-11-28 20:53:28'),
(31, 63, 'B.T.T.M.', 3, '2019-11-28 20:53:28'),
(22, 64, 'M.Com Regular', 2, '2019-11-28 20:54:33'),
(22, 65, 'M.Com Taxation &Tax Procedure', 2, '2019-11-28 20:54:33'),
(22, 66, 'M.Com Travel & Tourism', 2, '2019-11-28 20:54:33'),
(22, 67, 'M.Com Bank Management', 2, '2019-11-28 20:54:33'),
(22, 68, 'M.Com Professional', 2, '2019-11-28 20:54:33'),
(22, 69, 'MBA  /. MBM Regular', 2, '2019-11-28 20:54:33'),
(22, 70, 'MFM Bachelor of Financial Management ', 2, '2019-11-28 20:54:33'),
(22, 71, 'MMS', 2, '2019-11-28 20:54:33'),
(11, 73, 'BSc  Chemistry', 3, '2019-11-28 20:57:11'),
(11, 74, 'BSc Botany', 3, '2019-11-28 20:57:11'),
(11, 75, 'BSc Zoology', 3, '2019-11-28 20:57:11'),
(11, 76, 'BSc Computer science', 3, '2019-11-28 20:57:11'),
(11, 77, 'BSc Mathematics', 3, '2019-11-28 20:57:11'),
(11, 78, 'BSc PCM', 3, '2019-11-28 20:57:11'),
(11, 79, ' BSc CBZ', 3, '2019-11-28 20:57:11'),
(11, 80, '  BSc Forestry', 3, '2019-11-28 20:57:11'),
(11, 81, 'BSc Dietician & Nutritionist', 3, '2019-11-28 20:57:11'),
(11, 82, ' BSc Home Science', 3, '2019-11-28 20:57:11'),
(11, 83, ' BSc Agriculture Science', 3, '2019-11-28 20:57:11'),
(11, 84, ' BSc Horticulture', 3, '2019-11-28 20:57:11'),
(11, 85, ' BSc Sericulture', 3, '2019-11-28 20:57:11'),
(11, 86, ' BSc Oceanography', 3, '2019-11-28 20:57:11'),
(11, 87, '  BSc Melsorology', 3, '2019-11-28 20:57:11'),
(11, 88, ' BSc Arthopology', 3, '2019-11-28 20:57:11'),
(11, 89, ' BSc Forensic Science', 3, '2019-11-28 20:57:11'),
(11, 90, ' BSc Food technology', 3, '2019-11-28 20:57:11'),
(11, 91, ' BSc Diary Technology', 3, '2019-11-28 20:57:11'),
(11, 92, ' BSc Hotel Management', 3, '2019-11-28 20:57:11'),
(11, 93, ' BSc Fashion Design', 3, '2019-11-28 20:57:11'),
(11, 94, ' BSc, Mass Communication', 3, '2019-11-28 20:57:11'),
(11, 95, ' BSc Electronic Media', 3, '2019-11-28 20:57:11'),
(11, 96, 'BSc Multimedia', 3, '2019-11-28 20:57:11'),
(11, 97, 'BSc 3D Animation', 3, '2019-11-28 20:57:11'),
(11, 98, 'diploma', 3, '2019-11-28 21:01:50'),
(11, 99, 'Engineering', 4, '2019-11-28 21:02:11'),
(11, 100, 'Medical', 6, '2019-11-28 21:02:43'),
(11, 101, 'Paramedical', 5, '2019-11-28 21:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `s_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`s_id`, `sp_id`, `sp_name`) VALUES
(1, 11, 'Under Graduation'),
(1, 12, 'Post Graduation'),
(2, 21, 'Under Graduation'),
(2, 22, 'Post Graduation'),
(3, 31, 'Under Graduation'),
(3, 32, 'Post Graduation');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `s_id` int(11) NOT NULL,
  `S_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`s_id`, `S_name`) VALUES
(3, 'ARTS'),
(2, 'COMMERCE'),
(1, 'SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(12, 'pari', 'p@p', '$2y$10$BlOwb9vqunWTNjwp9/a5O.dfvIm409if1gFF1Uad/ZZvbG3dOP91y', '2019-11-13 12:42:15'),
(15, 'mahi', 'mahi@1', '$2y$10$4DcVWKCyNUEZ0uqxHEC5VumsIKcCTS0lLAclXeR9LU1CxmlRWGmxi', '2019-12-04 15:32:54'),
(23, 'nikhil', 'n@n', '$2y$10$4BkpjUGKQGT288kgAHfCruJVidYJCbgJ1o5A8Yf4lktcG6yMk929.', '2019-11-27 16:35:14'),
(24, 'ruchira', 'ruch@gmail.com', '$2y$10$bCPgW3HiV8KjnNCgKSd5d.9PO2DpjUYauYjoUatYGI4enHcGS0/8K', '2019-11-30 18:03:48'),
(25, 'mangi', 'mangi@gmail.com', '$2y$10$wAvocCxJkLR65PoCZPU2FeqLIBI3U8K3pYladfclLjz0fF1AHG3vK', '2019-12-01 11:37:00');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `time` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
set new.created_at=CURRENT_TIMESTAMP();
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `S_name` (`S_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `specification` (`sp_id`) ON DELETE CASCADE;

--
-- Constraints for table `specification`
--
ALTER TABLE `specification`
  ADD CONSTRAINT `specification_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `stream` (`s_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
