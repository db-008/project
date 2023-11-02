-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2023 at 11:01 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
('dhanush08', 9, 'carrot', 55, 1, 55, '2023-10-11', '2023-10-12', 2, 7),
('dhanush08', 10, 'Potato', 60, 1, 60, '2023-10-16', '2023-10-17', 2, 8),
('dhanush08', 8, 'cabbage', 45, 1, 45, '2023-10-16', '2023-10-18', 2, 9),
('dhanush08', 10, 'Potato', 60, 1, 60, '2023-10-16', '0000-00-00', 2, 10),
('dhanush08', 9, 'carrot', 55, 0, 0, '2023-10-16', '0000-00-00', 2, 11),
('dhanush08', 9, 'carrot', 55, 0, 0, '2023-10-16', '0000-00-00', 2, 12),
('dhanush08', 12, 'Tomato', 70, 1, 54, '2023-10-19', '2023-10-20', 2, 13),
('dhanush08', 12, '', 0, 5, 60, '2023-10-20', '2023-10-20', 2, 14),
('dhanush08', 12, 'Tomato', 70, 89, 60, '2023-10-20', '2023-10-20', 2, 15),
('dhanush08', 12, 'Tomato', 70, 89, 60, '2023-10-20', '2023-10-20', 2, 16),
('dhanush08', 12, 'Tomato', 70, 89, 60, '2023-10-20', '2023-10-20', 2, 17),
('dhanush08', 12, 'Tomato', 70, 89, 60, '2023-10-20', '2023-10-20', 2, 18),
('dhanush08', 12, 'Tomato', 70, 89, 60, '2023-10-20', '2023-10-20', 2, 19),
('dhanush08', 12, 'Tomato', 70, 89, 60, '2023-10-20', '2023-10-20', 5, 20),
('dhanush08', 8, 'cabbage', 45, 1, 45, '2023-10-20', '2023-10-20', 5, 21),
('dhanush08', 12, 'Tomato', 70, 1, 70, '2023-10-20', '2023-10-20', 5, 22),
('dhanush08', 12, 'Tomato', 70, 1, 70, '2023-10-21', '2023-10-21', 5, 23),
('dhanush08', 12, 'Tomato', 70, 1, 60, '2023-10-21', '2023-10-21', 2, 24),
('dhanush08', 12, 'Tomato', 70, 1, 60, '2023-10-21', '2023-10-21', 5, 25),
('dhanush08', 11, 'Beetroot', 55, 1, 54, '2023-10-21', '2023-10-21', 5, 26),
('dhanush08', 8, '', 0, 89, 54, '2023-10-21', '2023-10-21', 5, 27),
('dhanush08', 10, '', 0, 1, 220, '2023-10-21', '2023-10-21', 5, 28),
('dhanush08', 12, 'Tomato', 70, 1, 202, '2023-10-21', '2023-10-21', 5, 29),
('dhanush08', 11, 'Beetroot', 55, 1, 222, '2023-10-21', '2023-10-21', 2, 30),
('dhanush08', 9, '', 0, 1, 222, '2023-10-21', '2023-10-21', 2, 31),
('dhanush08', 22, 'spinach', 55, 1, 22, '2023-10-21', '2023-10-21', 2, 32),
('dhanush08', 16, 'Lady Finger', 40, 0, 0, '2023-10-21', '0000-00-00', 2, 33),
('dhanush08', 17, 'Cumcumber', 50, 1, 50, '2023-10-26', '2023-10-26', 5, 34),
('dhanush08', 19, 'Broccoli', 160, 10, 1600, '2023-10-26', '2023-10-26', 5, 35),
('dhanush08', 17, 'Cumcumber', 50, 0, 0, '2023-10-26', '0000-00-00', 5, 36),
('dhanush08', 17, 'Cumcumber', 50, 0, 0, '2023-10-26', '0000-00-00', 5, 37),
('dhanush08', 16, 'Lady Finger', 40, 0, 0, '2023-10-26', '0000-00-00', 5, 38),
('dhanush08', 19, 'Broccoli', 160, 0, 0, '2023-10-26', '0000-00-00', 5, 39),
('dhanush08', 16, '', 0, 0, 0, '2023-10-26', '0000-00-00', 5, 40),
('dhanush08', 15, '', 0, 0, 0, '2023-10-26', '0000-00-00', 5, 41),
('dhanush08', 20, '', 0, 0, 0, '2023-10-26', '0000-00-00', 5, 42),
('dhanush08', 16, 'Lady Finger', 40, 0, 0, '2023-10-26', '0000-00-00', 5, 43),
('dhanush08', 16, 'Lady Finger', 40, 0, 0, '2023-10-26', '0000-00-00', 5, 44),
('dhanush08', 17, 'Cumcumber', 50, 0, 0, '2023-10-26', '0000-00-00', 5, 45),
('dhanush08', 14, '', 0, 0, 0, '2023-10-26', '0000-00-00', 5, 46),
('dhanush08', 16, 'Lady Finger', 40, 0, 0, '2023-10-26', '0000-00-00', 5, 47),
('dhanush08', 13, '', 0, 1, 170, '2023-10-26', '2023-10-26', 5, 48),
('dhanush08', 18, 'Beetroot', 45, 0, 0, '2023-10-26', '0000-00-00', 5, 49),
('dhanush08', 15, '', 0, 1, 22, '2023-10-26', '2023-11-04', 5, 50),
('dhanush08', 16, 'Lady Finger', 40, 4, 444, '2023-10-26', '0000-00-00', 5, 51),
('dhanush08', 18, 'Beetroot', 45, 412, 542, '2023-10-26', '2023-10-25', 5, 52),
('dhanush08', 17, 'Cumcumber', 50, 1, 60, '2023-10-26', '2023-10-27', 5, 53),
('dhanush08', 18, 'Beetroot', 45, 1, 45, '2023-10-31', '2023-10-31', 2, 54),
('dhanush08', 15, '', 0, 1, 22, '2023-10-31', '2023-10-31', 2, 55),
('dhanush08', 15, 'Orange', 0, 1, 22, '2023-10-31', '2023-10-31', 2, 56),
('dhanush08', 17, 'Cumcumber', 50, 1, 20, '2023-11-02', '0000-00-00', 4, 57),
('dhanush08', 17, 'Cumcumber', 50, 0, 0, '2023-11-02', '0000-00-00', 2, 58),
('dhanush08', 17, 'Cumcumber', 50, 0, 0, '2023-11-02', '0000-00-00', 2, 59),
('dhanush08', 17, 'Cumcumber', 50, 0, 0, '2023-11-02', '0000-00-00', 2, 60),
('dhanush08', 16, 'Lady Finger', 40, 0, 0, '2023-11-02', '0000-00-00', 2, 61),
('dhanush08', 20, 'Watermelon', 0, 0, 0, '2023-11-02', '0000-00-00', 2, 62),
('dhanush08', 18, 'Beetroot', 45, 0, 0, '2023-11-02', '0000-00-00', 2, 63),
('dhanush08', 18, 'Beetroot', 45, 0, 0, '2023-11-02', '0000-00-00', 4, 64),
('dhanush08', 17, 'Cumcumber', 50, 0, 0, '2023-11-02', '0000-00-00', 4, 65),
('dhanush08', 20, 'cauliflower', 140, 5, 700, '2023-11-02', '2023-11-02', 4, 66);

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`fid`, `fname`, `fprice`, `fimage`, `status`) VALUES
(16, 'grapes', 120, '853a40cd10328803f9fe0cc5daca54a3_9d230e92bd862132.', 1),
(15, 'Orange', 120, 'b50d6f18fbbd950de33994f1966f3357_94f7aedcc7d25.jpg', 1),
(14, 'Bannana', 60, 'cb4eeedc7cdb57693e48d444eec59fd5_52371abeb4.jpg', 1),
(13, 'Mango', 170, 'f15e5332540d406c0ee8929cde629c75_80c6165fc884.jpg', 1),
(12, 'Rambutan', 80, '890b91f0b4bc13c97287342e37284237_f1a583e162a5.jpg', 2),
(11, 'strawberry', 40, 'a39ff153b0f616f456c1cc9ea81c1de2_11ccbea5f0624641.', 2),
(8, 'orange', 120, 'db931b68abe2484529b1acb9de147385_fb174d9bbf7c6.jpg', 2),
(9, 'apple', 140, '54916981ab975ce842970f9fea0170e5_d8ec75ea566dd.jpg', 2),
(10, 'pinapple', 220, '3636d24016367170893b42b6672e4a87_a6996688ec.jpg', 2),
(17, 'Pinapple', 120, 'a4297ae178d207093d5630f656096262_118bab1853a.jpeg', 1),
(18, 'Apple', 160, 'aa76894606ea4f088f06d3d098146826_dd1b348b280.jpg', 1),
(19, 'strawberry', 160, '4223102cf332faf00b00597bf4c4c2fd_2ab824eb57.jpg', 1),
(20, 'Watermelon', 120, '597e043abe89db94bb853c985af2d7ad_adfb15d2e89f3144b', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `veg`
--

INSERT INTO `veg` (`veg_id`, `veg_name`, `veg_price`, `veg_image`, `status`) VALUES
(16, 'Lady Finger', 40, 'faaf25bf0139346bad8222e2b2493f0b_c565b54407a.jpg', 1),
(15, 'Potato', 60, '3eec8f44cad19375cbf66c15f9ed1724_dc096e67a8a2f4c128.png', 2),
(14, 'Beetroot', 50, '49d31e61eebda6cc144735b72889bc3b_f35c9985499eb0.jpg', 2),
(8, 'cabbage', 45, '63b75e094e693478f8749c4cfa8b6845_5f4bc22ebcbefe1cd1.jpg', 2),
(13, 'cabbage', 45, '24aad56d0876d792f648a3874464b313_60d38e8099f93e6.png', 2),
(12, 'Tomato', 70, '63341dae3e1dd7f0667aebe87aacc4cc_db0235f45f6bdb.jpg', 2),
(11, 'Beetroot', 55, 'd080f7302da0109b26dc96cb69f280c0_9679f5e3a5a48bddc1.jpg', 2),
(9, 'carrot', 55, 'e2affa82511c51a8b4725ea3466ec271_21283804fd.png', 2),
(10, 'Potato', 60, '4553d629b03acdda4001a11fc27aebbb_71085b52a7107ad6d3.jpg', 2),
(17, 'Cumcumber', 50, 'e3656ed12f3d4102bc26ee1725769cc6_9cacda73f68f26d.jpg', 1),
(18, 'Beetroot', 45, '62081c8ac75c016638f60f7d1fdd4085_283c48b4a5350b0.png', 1),
(19, 'Broccoli', 160, '14a5be9c95ce9b27eacedb3594b691d5_f286c8e2c568.jpg', 1),
(20, 'cauliflower', 140, 'b0e01a26f545e25d6716daf64d7572a0_c33f5aac877.jpg', 1),
(21, 'eggplant', 90, '27b923ef89d721f0bdd3989bdc7f0351_e92b62231ea344fe2.jpg', 1),
(22, 'spinach', 55, '8232f0a0d5d7de37de20a2e827f5be13_f273bc8f2a.png', 1),
(23, 'green kale', 65, '9e04f3f3bd4802900f87c4e772b6ee49_85886a7f57539f.jpg', 1),
(24, 'Cabbage', 70, '5508990ac591db9d2d6f112de8c8d926_73b07eba62.png', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
