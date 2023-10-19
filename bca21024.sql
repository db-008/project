-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2023 at 09:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bca21024`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `uemail` varchar(50) NOT NULL,
  `iid` int NOT NULL,
  `iname` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `totalprice` int NOT NULL,
  `bookingdate` date NOT NULL,
  `orderdate` date NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `bid` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`uemail`, `iid`, `iname`, `price`, `quantity`, `totalprice`, `bookingdate`, `orderdate`, `status`, `bid`) VALUES
('dhanush08', 3, '', 0, 89, 7869, '2023-10-11', '2023-10-12', 2, 1),
('dhanush08', 2, '', 0, 89, 7869, '2023-10-11', '2023-10-19', 5, 2),
('dhanush08', 3, 'Beetroot', 60, 89, 7869, '2023-10-11', '2023-10-12', 2, 3),
('dhanush08', 2, '', 0, 89, 7869, '2023-10-11', '2023-10-13', 2, 4),
('dhanush08', 10, 'Potato', 60, 1, 60, '2023-10-11', '2023-10-12', 2, 5),
('dhanush08', 9, 'carrot', 55, 1, 55, '2023-10-11', '2023-10-12', 2, 6),
('dhanush08', 9, 'carrot', 55, 1, 55, '2023-10-11', '2023-10-12', 3, 7),
('dhanush08', 10, 'Potato', 60, 1, 60, '2023-10-16', '2023-10-17', 2, 8),
('dhanush08', 8, 'cabbage', 45, 1, 45, '2023-10-16', '2023-10-18', 3, 9),
('dhanush08', 10, 'Potato', 60, 1, 60, '2023-10-16', '0000-00-00', 3, 10),
('dhanush08', 9, 'carrot', 55, 0, 0, '2023-10-16', '0000-00-00', 2, 11),
('dhanush08', 9, 'carrot', 55, 0, 0, '2023-10-16', '0000-00-00', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

DROP TABLE IF EXISTS `fruits`;
CREATE TABLE IF NOT EXISTS `fruits` (
  `fid` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `fprice` int NOT NULL,
  `fimage` varchar(50) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`fid`, `fname`, `fprice`, `fimage`, `status`) VALUES
(12, 'Rambutan', 80, '890b91f0b4bc13c97287342e37284237_f1a583e162a5.jpg', 1),
(11, 'strawberry', 40, 'a39ff153b0f616f456c1cc9ea81c1de2_11ccbea5f0624641.', 1),
(8, 'orange', 120, 'db931b68abe2484529b1acb9de147385_fb174d9bbf7c6.jpg', 1),
(9, 'apple', 140, '54916981ab975ce842970f9fea0170e5_d8ec75ea566dd.jpg', 1),
(10, 'pinapple', 220, '3636d24016367170893b42b6672e4a87_a6996688ec.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(26) NOT NULL,
  `username` varchar(29) NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`uid`, `name`, `username`, `phone`, `email`, `password`) VALUES
(2, 'Dhanush', 'dhanush08', 2147483647, 'dhanush008@depaul.edu.in', '123123'),
(3, 'athul', 'athulk', 12355555, 'athul@gmail.com', '123123'),
(4, 'Dhanush', 'ddd', 1234567891, 'dasfdsa@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `veg`
--

DROP TABLE IF EXISTS `veg`;
CREATE TABLE IF NOT EXISTS `veg` (
  `veg_id` int NOT NULL AUTO_INCREMENT,
  `veg_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `veg_price` int NOT NULL,
  `veg_image` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`veg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `veg`
--

INSERT INTO `veg` (`veg_id`, `veg_name`, `veg_price`, `veg_image`, `status`) VALUES
(8, 'cabbage', 45, '63b75e094e693478f8749c4cfa8b6845_5f4bc22ebcbefe1cd1.jpg', 1),
(12, 'Tomato', 70, 'bfc30f76d93c9644dac13b2901445cd3_b48d18f2ca.jpg', 1),
(11, 'Beetroot', 55, 'a6643cccd31e27a9601f4d1cd0bdb91e_77790e4cb22ff.jpg', 1),
(9, 'carrot', 55, 'b2a067902d0b229d98b648d2784748ae_a4be2e6499ac.jpg', 1),
(10, 'Potato', 60, '4553d629b03acdda4001a11fc27aebbb_71085b52a7107ad6d3.jpg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
