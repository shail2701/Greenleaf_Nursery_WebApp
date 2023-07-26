-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 07:37 PM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `del_price` int(6) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `image`, `price`, `del_price`, `description`) VALUES
(10001, 'Pressure Sprayer (1.5 ltr) - Gardening Tool', 'Pressure Sprayer (1.5 ltr) - Gardening Tool.png', 439, 549, 'These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.\r\n\r\nThe color of this sprayer may vary depending on the availabilityThe quality of plastic used for this tool is best in class and handle of this tool is specially designed for better grip. Customer Reviews'),
(10002, 'Gardening Water Can No. 1117 ( 5 ltr) - Gardening Tool', 'Gardening Water Can No. 1117 ( 5 ltr) - Gardening Tool.png', 439, 549, 'These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.\r\n\r\nThe color of this sprayer may vary depending on the availabilityThe quality of plastic used for this tool is best in class and handle of this tool is specially designed for better grip. Customer Reviews'),
(10003, 'Bonsai Set No.1025 - Gardening Tools', 'Bonsai Set No.1025 - Gardening Tools.png', 379, 479, 'These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.This tool set can be used to keep your bonsai plants healthy.\r\n\r\nThese tools can be used to loosen the soil, remove weeds and cultivate the soil.Metal parts of this tool are coated for protection from rust and handle of this tool is specially designed for better grip.Blade Type: Fixed.'),
(10004, 'Hedge Shear with Wooden Handle No. MMI-78 - Gardening Tool', 'Hedge Shear with Wooden Handle No. MMI-78 - Gardening Tool.png', 379, 479, 'These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.Shears can be used to cut long grass and small plant hedges.\r\n\r\nThis tool is also used for shaping shrubs and bushes.Metal parts of this tool are coated for protection from rust and handle of this tool is specially designed for better grip.Blade Type: Fixed.'),
(10005, 'Hand Fork Plain No. 1004 - Gardening Tool', 'Hand Fork Plain No. 1004 - Gardening Tool.png', 379, 479, ' These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.This tool can be used for looseing, lifting, turniung over the soil.\r\n\r\nThe handle color and design of this tool may vary depending on the availabilityMetal parts of this tool are coated for protection from rust and handle of this tool is specially designed for better grip.Blade Type: Fixed.'),
(10006, 'Transplanting Trowel No. MMI 83 - Gardening Tool', 'Transplanting Trowel No. MMI 83 - Gardening Tool.png', 379, 479, 'These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.The handle color of this tool may vary depending on the availabilityThis tool can be used for transplanting saplings.\r\n\r\nMetal parts of this tool are coated for protection from rust and handle of this tool is specially designed for better grip.Blade Type: Fixed.'),
(10007, '5 inch (13 cm) Khurpa with Wooden Color Handle No. 1017 - Gardening Tool', '5 inch (13 cm) Khurpa with Wooden Color Handle No. 1017 - Gardening Tool.png', 379, 479, 'These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.This tool can be used for digging soil, removing weeds in the garden.\r\n\r\nMetal parts of this tool are coated for protection from rust and handle of this tool is specially designed for better grip.The color of product may vary as per availability.Blade Type: Fixed.'),
(10008, 'Pruning Shear No. MMI 58 - Gardening Tool', 'Pruning Shear No. MMI 58 - Gardening Tool.png', 150, 189, 'These specially designed tools are perfect to maintain a healthy and attractive garden.\r\n\r\nGarden tool is any tool made to make gardening easy, may it be hand tool or power tool. Get the real experience of gardening with right tool in your hand.Secateurs are used to cut strong branches of the shrubs, twigs of the tree plants.\r\n\r\nThis tool is also helpful to remove infected plant parts. The handle color of this tool may vary depending on the availabilityMetal parts of this tool are coated for protection from rust and handle of this tool is specially designed for better grip.Blade Type: Fixed.'),
(10009, 'prong handler', '3-prong-hand-cultivator-no-mmi-84-gardening-tool.png', 400, 599, 'It is useful when we want to clean soil .');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `name`, `password`, `type`, `first_name`, `last_name`) VALUES
('abhi.kadiya@gmail.com', 'Abhishek K', '12345612', 'user', 'Abhishek', 'Kadiya'),
('parmar123@gmail.com', 'Parmar D', '123321', 'user', 'Darshil', 'Parmar K'),
('parmardarshil151@gmail.com', 'Darshil Parmar K', '123456', 'admin', 'Darshil', 'Parmar');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Tree'),
(2, 'Seeds'),
(3, 'Fertilizers'),
(4, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `link`) VALUES
(1, 'Plants', 'category/All_Plants.php'),
(2, 'Seeds', 'category/All_seeds.php'),
(3, 'Fertilizer', 'category/fertilizers.php'),
(4, 'Accessories', 'category/accessory.php'),
(5, 'About Us', 'aboutus.php');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `oid` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `totle_price` int(10) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`oid`, `email`, `fname`, `lname`, `address`, `city`, `country`, `state`, `pincode`, `contact_no`, `userid`, `totle_price`, `u_mail`, `date_created`, `status`) VALUES
(10000122, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 46534646, 40, 13049, 'parmardarshil151@gmail.com', '2021-05-04 20:17:24', 'processing'),
(10000123, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 46534646, 40, 13049, 'parmardarshil151@gmail.com', '2021-05-04 20:18:08', 'delivered'),
(10000124, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 4295, 'parmardarshil151@gmail.com', '2021-05-04 20:24:38', 'processing '),
(10000125, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 398, 'parmardarshil151@gmail.com', '2021-05-04 20:25:50', 'processing '),
(10000126, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 719, 'parmardarshil151@gmail.com', '2021-05-04 20:56:29', 'processing '),
(10000127, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 46534646, 40, 3278, 'parmardarshil151@gmail.com', '2021-05-04 20:57:45', 'processing '),
(10000128, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 46534646, 40, 0, 'parmardarshil151@gmail.com', '2021-05-05 23:58:26', 'processing '),
(10000129, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 479, 'parmardarshil151@gmail.com', '2021-05-06 00:53:34', 'processing '),
(10000130, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 798, 'parmardarshil151@gmail.com', '2021-05-06 00:55:40', 'processing '),
(10000131, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 479, 'parmardarshil151@gmail.com', '2021-05-06 11:06:44', 'processing '),
(10000132, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 46534646, 40, 399, 'parmardarshil151@gmail.com', '2021-05-06 11:15:24', 'processing '),
(10000133, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 399, 'parmardarshil151@gmail.com', '2021-05-06 11:21:23', 'processing '),
(10000134, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 479, 'parmardarshil151@gmail.com', '2021-05-06 11:39:24', 'processing '),
(10000135, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 479, 'parmardarshil151@gmail.com', '2021-05-06 11:40:03', 'processing '),
(10000136, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 398, 'parmardarshil151@gmail.com', '2021-05-06 11:49:35', 'processing '),
(10000137, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 398, 'parmardarshil151@gmail.com', '2021-05-06 11:50:12', 'processing '),
(10000138, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 398, 'parmardarshil151@gmail.com', '2021-05-06 11:51:23', 'processing '),
(10000139, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 878, 'parmardarshil151@gmail.com', '2021-05-06 11:53:49', 'processing '),
(10000140, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 878, 'parmardarshil151@gmail.com', '2021-05-06 11:57:57', 'processing '),
(10000141, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 878, 'parmardarshil151@gmail.com', '2021-05-06 12:00:36', 'processing '),
(10000142, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 399, 'parmardarshil151@gmail.com', '2021-05-06 12:17:06', 'processing '),
(10000143, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1377, 'parmardarshil151@gmail.com', '2021-05-06 12:24:09', 'processing '),
(10000144, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 2576, 'parmardarshil151@gmail.com', '2021-05-06 12:57:06', 'processing '),
(10000145, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1304, 'parmardarshil151@gmail.com', '2021-05-06 14:15:54', 'processing '),
(10000146, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1304, 'parmardarshil151@gmail.com', '2021-05-06 14:16:26', 'processing '),
(10000147, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1077, 'parmardarshil151@gmail.com', '2021-05-06 14:18:52', 'cancel'),
(10000148, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1148, 'parmardarshil151@gmail.com', '2021-05-06 14:20:39', 'processing '),
(10000149, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 598, 'parmardarshil151@gmail.com', '2021-05-06 17:00:38', 'processing '),
(10000150, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 2077, 'parmardarshil151@gmail.com', '2021-05-06 17:01:56', 'processing '),
(10000151, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 997, 'parmardarshil151@gmail.com', '2021-05-06 17:10:00', 'processing '),
(10000152, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 878, 'parmardarshil151@gmail.com', '2021-05-06 17:16:49', 'processing '),
(10000153, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1377, 'parmardarshil151@gmail.com', '2021-05-06 17:30:39', 'processing '),
(10000154, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1178, 'parmardarshil151@gmail.com', '2021-05-06 17:32:23', 'processing '),
(10000155, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 3991, 'parmardarshil151@gmail.com', '2021-05-06 17:34:35', 'processing '),
(10000156, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 878, 'parmardarshil151@gmail.com', '2021-05-06 17:36:13', 'processing '),
(10000157, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1277, 'parmardarshil151@gmail.com', '2021-05-06 17:40:00', 'processing '),
(10000158, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1177, 'parmardarshil151@gmail.com', '2021-05-06 17:44:16', 'processing '),
(10000159, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 1177, 'parmardarshil151@gmail.com', '2021-05-06 17:44:34', 'processing '),
(10000160, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 878, 'parmardarshil151@gmail.com', '2021-05-06 17:45:38', 'processing '),
(10000161, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 597, 'parmardarshil151@gmail.com', '2021-05-06 17:46:37', 'processing '),
(10000162, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 399, 'parmardarshil151@gmail.com', '2021-05-06 18:24:00', 'processing '),
(10000163, 'parmardarshil151@gmail.com', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 'Ahmedabad', 'India', 'Gujarat', 380000, 2147483647, 40, 658, 'parmardarshil151@gmail.com', '2021-05-06 18:24:38', 'processing '),
(10000164, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 380001, 2147483647, 41, 479, 'abhishek12@gmail.com', '2021-05-07 01:13:26', 'processing '),
(10000165, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 1437, 'abhishek12@gmail.com', '2021-05-07 01:37:32', 'processing '),
(10000166, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 398, 'abhishek12@gmail.com', '2021-05-07 01:40:02', 'processing '),
(10000167, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 398, 'abhishek12@gmail.com', '2021-05-07 01:42:07', 'processing '),
(10000168, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 399, 'abhishek12@gmail.com', '2021-05-07 01:49:16', 'processing '),
(10000169, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 598, 'abhishek12@gmail.com', '2021-05-07 01:50:46', 'processing '),
(10000170, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 598, 'abhishek12@gmail.com', '2021-05-07 01:59:32', 'processing '),
(10000171, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 598, 'abhishek12@gmail.com', '2021-05-07 02:01:22', 'processing '),
(10000172, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 9600, 'abhishek12@gmail.com', '2021-05-07 02:07:23', 'processing '),
(10000173, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 4748, 'abhishek12@gmail.com', '2021-05-07 02:16:32', 'processing '),
(10000174, 'abhishek12@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 41, 4748, 'abhishek12@gmail.com', '2021-05-07 02:19:58', 'processing '),
(10000175, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 878, 'shail123@gmail.com', '2021-05-07 02:38:17', 'processing '),
(10000176, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 199, 'shail123@gmail.com', '2021-05-07 02:41:42', 'processing '),
(10000177, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 878, 'shail123@gmail.com', '2021-05-07 02:46:04', 'processing '),
(10000178, 'parmardarshil151@gmail.com', 'Abhishek', 'Kadiya', '1018 , jamalpur char rasta', 'Ahmedabad', 'India', 'Gujarat', 123456, 2147483647, 40, 1408, 'parmardarshil151@gmail.com', '2021-05-07 19:50:38', 'processing '),
(10000179, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 899, 'parmardarshil151@gmail.com', '2021-05-07 23:43:38', 'processing '),
(10000180, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 360, 'parmardarshil151@gmail.com', '2021-05-08 00:06:02', 'processing '),
(10000181, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 2894, 'parmardarshil151@gmail.com', '2021-05-08 22:44:54', 'processing '),
(10000182, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 1247, 'parmardarshil151@gmail.com', '2021-05-08 22:52:03', 'processing '),
(10000183, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 1297, 'parmardarshil151@gmail.com', '2021-05-08 22:55:25', 'processing '),
(10000184, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 1198, 'parmardarshil151@gmail.com', '2021-05-08 22:59:13', 'processing '),
(10000185, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 898, 'parmardarshil151@gmail.com', '2021-05-08 23:02:52', 'processing '),
(10000186, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 1258, 'parmardarshil151@gmail.com', '2021-05-08 23:05:01', 'processing '),
(10000187, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 1547, 'parmardarshil151@gmail.com', '2021-05-08 23:09:55', 'processing '),
(10000188, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 1508, 'parmardarshil151@gmail.com', '2021-05-08 23:18:38', 'processing '),
(10000189, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 2894, 'parmardarshil151@gmail.com', '2021-05-08 23:21:38', 'processing '),
(10000190, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 680, 'parmardarshil151@gmail.com', '2021-05-08 23:33:58', 'processing '),
(10000191, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 898, 'parmardarshil151@gmail.com', '2021-05-08 23:44:25', 'processing '),
(10000192, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 898, 'parmardarshil151@gmail.com', '2021-05-08 23:46:04', 'processing '),
(10000193, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 4093, 'parmardarshil151@gmail.com', '2021-05-08 23:50:44', 'processing '),
(10000194, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 46534646, 46, 1408, 'shail123@gmail.com', '2021-05-09 10:40:46', 'processing '),
(10000195, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 499, 'shail123@gmail.com', '2021-05-09 10:44:53', 'processing '),
(10000196, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 199, 'shail123@gmail.com', '2021-05-09 10:48:26', 'processing '),
(10000197, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 4004, 'shail123@gmail.com', '2021-05-09 11:06:21', 'processing '),
(10000198, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 30241, 'shail123@gmail.com', '2021-05-09 11:08:44', 'processing '),
(10000199, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 1194, 'shail123@gmail.com', '2021-05-09 11:15:12', 'processing '),
(10000200, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 4444, 'shail123@gmail.com', '2021-05-09 11:46:24', 'processing '),
(10000201, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 6499, 'shail123@gmail.com', '2021-05-09 11:48:19', 'processing '),
(10000202, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 15645, 'shail123@gmail.com', '2021-05-09 12:01:03', 'processing '),
(10000203, 'shail123@gmail.com', 'Shail', 'Parekh', '1234 hanuman gali same', 'Ahmedabad', 'India', 'Gujarat', 200001, 2147483647, 46, 1630, 'shail123@gmail.com', '2021-05-09 12:03:29', 'delivered'),
(10000204, 'shail123@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 1234567, 46, 2596, 'shail123@gmail.com', '2021-05-09 23:46:42', 'cancel'),
(10000205, 'shail123@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 12345, 46, 360, 'shail123@gmail.com', '2021-05-09 23:48:19', 'processing '),
(10000206, 'shail123@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 1234, 46, 360, 'shail123@gmail.com', '2021-05-09 23:48:59', 'processing '),
(10000207, 'shail123@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 46, 399, 'shail123@gmail.com', '2021-05-10 00:53:00', 'processing '),
(10000208, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 759, 'parmardarshil151@gmail.com', '2021-05-10 11:41:24', 'processing '),
(10000209, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 'Ahmedabad', 'India', 'Gujarat', 380023, 2147483647, 40, 199, 'parmardarshil151@gmail.com', '2021-05-10 11:44:15', 'processing '),
(10000210, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 40, 649, 'parmardarshil151@gmail.com', '2021-05-14 20:24:02', 'processing '),
(10000211, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 40, 2738, 'parmardarshil151@gmail.com', '2021-05-14 20:27:02', 'processing '),
(10000212, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 1547, 'parmardarshil151@gmail.com', '2021-05-14 20:49:05', 'processing '),
(10000213, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 360, 'parmardarshil151@gmail.com', '2021-05-16 01:28:51', 'processing '),
(10000214, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 30, 'parmardarshil151@gmail.com', '2021-05-16 02:45:55', 'processing '),
(10000215, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 6400, 'parmardarshil151@gmail.com', '2021-05-16 12:39:46', 'processing '),
(10000216, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 0, 'parmardarshil151@gmail.com', '2021-05-16 12:54:52', 'processing '),
(10000217, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 320, 'parmardarshil151@gmail.com', '2021-05-19 17:42:47', 'processing '),
(10000218, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 680, 'parmardarshil151@gmail.com', '2021-05-20 19:29:58', 'delivered'),
(10000219, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, -24950, 'parmardarshil151@gmail.com', '2021-05-23 22:10:40', 'processing'),
(10000220, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 2495, 'parmardarshil151@gmail.com', '2021-05-23 22:11:01', 'processing'),
(10000221, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, -2495, 'parmardarshil151@gmail.com', '2021-05-23 22:16:23', 'processing'),
(10000222, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, -6120, 'parmardarshil151@gmail.com', '2021-05-24 16:33:30', 'processing'),
(10000223, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, -5356, 'parmardarshil151@gmail.com', '2021-05-24 16:41:55', 'processing'),
(10000224, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, -8193, 'parmardarshil151@gmail.com', '2021-05-24 16:55:25', 'processing'),
(10000225, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 459, 'parmardarshil151@gmail.com', '2021-05-24 17:08:02', 'processing'),
(10000226, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 201, 'parmardarshil151@gmail.com', '2021-05-24 17:09:47', 'processing'),
(10000227, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 320, 'parmardarshil151@gmail.com', '2021-05-26 16:48:06', 'processing'),
(10000228, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 680, 'parmardarshil151@gmail.com', '2021-05-26 16:50:18', 'processing'),
(10000229, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 320, 'parmardarshil151@gmail.com', '2021-05-26 16:54:22', 'processing'),
(10000230, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 399, 'parmardarshil151@gmail.com', '2021-05-26 16:55:56', 'processing'),
(10000231, 'parmardarshil151@gmail.com', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 'Ahmedabad', 'india', 'Gujarat', 300001, 2147483647, 51, 320, 'parmardarshil151@gmail.com', '2021-05-26 16:59:22', 'processing');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comid` int(10) NOT NULL,
  `proid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `umail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'approved',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comid`, `proid`, `uid`, `umail`, `content`, `status`, `date`) VALUES
(1, 15, 41, 'Abhishek Kadiya', 'Good Product Kela', 'approved', '2021-05-23 16:23:06'),
(17, 117, 51, 'Darshil Parmar', 'i love to see sunflower.', 'approved', '2021-05-23 17:52:04'),
(18, 1009, 51, 'Darshil Parmar', 'its best price for me..', 'approved', '2021-05-23 17:54:51'),
(19, 10008, 51, 'Darshil Parmar', 'good quality.', 'approved', '2021-05-23 17:56:45'),
(20, 10008, 51, 'Darshil Parmar', 'strong product.', 'approved', '2021-05-23 18:24:10'),
(34, 118, 41, 'Abhishek Kadiya', 'so yummy', 'approved', '2021-05-24 11:48:13'),
(37, 10009, 41, 'Abhishek Kadiya', 'wow', 'approved', '2021-05-24 11:52:20'),
(40, 22, 41, 'Abhishek Kadiya', 'Hii Abhi', 'approved', '2021-05-24 16:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `del_price` int(6) NOT NULL,
  `description` text NOT NULL,
  `care` text NOT NULL,
  `uses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`id`, `name`, `image`, `price`, `del_price`, `description`, `care`, `uses`) VALUES
(1001, 'Light Weight Clay Aggregates For Plants - 1 kg', 'Light Weight Clay Aggregates For Plants - 1 kg.png', 399, 499, 'Light Exclusive Clay Aggregate (LECA) ideal for supporting seedlings and also quite aesthetic for potted plants.\r\n\r\nwhich is also known with other names in global market like Expanded Clay Aggregate, Ceramsite, Leca, clay aggregate Hydroton, Hydrocorn etc.', '---', '---'),
(1002, 'My Organic Garden (Plant Protection and Enhancer Kit)', 'My Organic Garden (Plant Protection and Enhancer Kit).png', 1199, 1499, 'Grow everything natural, completely organic, absolutely free from pesticide and harmful chemicals with My Organic Garden kit. It is a one-stop solution to manage your garden.\r\n\r\nMy Organic Garden is a special kit for home garden, kitchen garden, backyard garden, and green offices. The idea is to make green spaces around us for a happier and healthier life.\r\n\r\nThe easy to use kit designed to give you convenience so you can easily maintain your garden at your window, balcony, backyard, home, and workplace. This pack of My Organic Garden kit contains 6 items :1. Organic Garden Foliar Protection (200ml) - Plant stem, leaves, flowers and fruits are most targeted sites for insect pest to feed on. These insects destroy its beauty and damage plants. Foliar protection is ready to use products which keeps plant pest free and improves plant bloom. 2. Organic Garden Foliar Nutrition (200ml) - Plant nutrients are necessary for healthy plant. due to inadequate nutrient plant loose root health, plant vigor, flowering and freshness. Foliar nutrient contains nutrients for plants as well as protection for plant. It improves plant health and nutrient uptake. It is ready to use products which keeps plant healthy and improve plant bloom. Organic Garden Water Booster (150 Capsules) - Water management for garden plants is another crucial task. Water booster capsules hold optimum water necessary for plant growth as well as supply carbon which improves soil property. It is the perfect soil property enhancer and conditioner infused with aqua crystal and is loaded with bio-active carbons. Organic Garden Soil Enhancer (150 Capsules) - It take care of root health and nutrient. the active ingredients targets to roots and improves its health and performance. The composition of soil enhancer contains all nutrient necessary for healthy plant growth. these nutrient are infused with beneficial microbial consortia, which allow is to assimilate in plant easily and organically. Organic Garden Foliar Protection Refill Pack (15ml) - Once product in Foliar Protection spray bottle is empty simply add 1-2 drop from concentration and fill the bottle with water and spray. Organic Garden Foliar Nutrition Refill Pack (15ml) - Once product in Foliar Nutrient spray bottle is empty simply add 1-2 drop from concentration and fill the bottle with water and spray.', 'Store in a cool and dry place.\r\n\r\nAvoid storage in sunlight.\r\n\r\nKeep it away from the reach of the children.\r\n\r\nKeep away from the eye, do not ingest or inhale.\r\n\r\nIf ingested seek medical advice immediately.\r\n', 'Organic Garden Foliar Protection - Point and spray on the affected area of the plant once in a week.\r\n\r\nMake sure that the whole plant along with the lower surface of leaves is properly covered with spray solution.\r\n\r\nAvoid spraying under hot sun.\r\n\r\nEarly morning or late evening is ideal time for using foliar protection spray.\r\n\r\nOrganic Garden Foliar Nutrition - Point and spray on the plant once in a week.\r\n\r\nMake sure that the whole plant along with the lower surface of leaves is properly covered with spray solution.\r\n\r\nAvoid spraying under hot sun.\r\n\r\nEarly morning or late evening is ideal time for using foliar protection spray.\r\n\r\nOrganic Garden Water Booster - Put one capsule per plant every 15 days at plant base and pour water.\r\n\r\nIt will keep plant watered for 8-10 days.\r\n\r\nPut mulch/cover of straw or plant leaves on water booster applied to soil.\r\n\r\nEarly morning or late evening is ideal time of use the water booster.\r\n\r\nOrganic Garden Soil Enhancer - Put one capsule per plant every 15 days at plant base and pour water.\r\n\r\nEarly morning or late evening is ideal time of use the water booster.\r\n\r\nOrganic Garden Foliar Protection Refill Pack - Once product in Foliar Protection spray bottle is empty simply add 1-2 drop from concentration and fill the bottle with water and spray.\r\n\r\nOrganic Garden Foliar Nutrition Refill Pack - Once product in Foliar Nutrient spray bottle is empty simply add 1-2 drop from concentration and fill the bottle with water and spray'),
(1003, 'Nutrient-rich general purpose potting soil mix - 10 kg', 'Nutrient-rich general purpose potting soil mix - 10 kg.png', 779, 899, 'Quality of the growing medium decides the quality of the plants. Soil in the pots/containers should be well drained and aerated. It should still retain moisture.\r\n\r\nContents: Soil, Perlite, Vermiculite, Cocopeat, Vermicompost.', 'To fill pots/containers, vertical gardens, bio walls for growing Plants.\r\n\r\nTo prepare raised beds for growing Plants.\r\n\r\nTo repot plants.\r\n\r\nTo amend existing soil in pots.\r\n', 'Keep this product away from the reach of children below 3 years.\r\n\r\n'),
(1004, 'Coco Dung (Coconut fiber Cow dung, 1 kg )', 'Coco Dung (Coconut fiber Cow dung, 1 kg ).png', 96, 120, 'Coco dung contains coconut fiber 50% + Cow manure 50%. It is a soil substitute or addition to it. Known for its good water holding capacity.\r\n\r\nPremium coco dung potting mix contains 50% coconut fiber and 50% cow manure.After adding water to the coco dung block, it becomes 5 kgs of ready to use potting mix for planting seedlings or sowing seeds.Best thing - No need of adding additional fertilizer to soilNet Weight 1 kg.', 'Storage in the dry area.\r\n\r\nKeep out of reach of children.', 'Keep the coco peat block on the plastic sheet or bucket.\r\n\r\nWater the gradually; 1 block absorb 4 liters of water.\r\n\r\nDab the block for easy water absorption.\r\n\r\nAfter a few hours, an entire block will absorb the water and swell.\r\n\r\nDrain out the excess water if necessary; then it is ready to use.'),
(1005, 'Plant O Boost (Special Flower Booster, 10 g) (set of 10)', 'Plant O Boost (Special Flower Booster, 10 g) (set of 10).png', 154, 180, 'Plant O Boost flower booster is the best in class product for the abundance of flowers. It is easy to use and very effective.\r\n\r\nPlant O Boost flower booster is a specially formulated product for the abundance of flowers and can also be used for as general fertilizer for Plants. Easy to use granular powder form. Great for Flowers.', 'Keep it away from the reach of children below 3 years.\r\n\r\nIf ingested, consult a physician immediately.\r\n\r\nDo not keep the pouch open for a long time.\r\n\r\nTightly close the leftover powder in the same pack and store in a dry place.', 'Best one who really want to grow fast and good.\r\n\r\n'),
(1006, 'Plant O Boost (Overall Growth Booster, 10 g) (set of 10)', 'Plant O Boost (Overall Growth Booster, 10 g) (set of 10).png', 154, 180, 'Plant O Boost overall growth booster is the best in class product for the growth of the plant. It is easy to use and very effective.\r\n\r\nPlant O Boost\'s overall growth booster is a specially formulated product for the healthy growth of the Plants. It is easy to use granular powder form. This product also helps in balancing the pH of the soil and improves the water holding capacity of the soil.', 'Keep it away from the reach of children below 3 years.\r\n\r\nIf ingested, consult a physician immediately.\r\n\r\nDo not keep the pouch open for a long time.\r\n\r\nTightly close the leftover powder in the same pack and store in a dry place.', 'Best one who really want to grow fast and good.\r\n'),
(1007, 'Home Compost Kit (For Family of 2)', 'Home Compost Kit (For Family of 2).png', 2399, 2999, 'Composting is a simple way to add nutrient-rich humus which fuels plant growth and restores vitality to depleted soil. It is also free, easy to make, and good for the environment.\r\n\r\ngreenleaf\'s Home compost kit is an aerobic compost kit that converts your kitchen waste into compost. This kit is sufficient to handle waste generated by a family of 2-3 members.\r\n\r\nThis easy to use compost kit allows you to turn your organic kitchen waste into fertilizer with sting-free process.\r\n\r\nThe 15 ltr compost bins can be placed at any corner of your home, decomposing about 250-300 g organic kitchen waste daily.', 'Best quality & easy to use.\r\n\r\nSting free composting process.\r\n\r\nPerfect for a family of 2-3 members to manage waste.\r\n\r\nReady to use compost in 4-6 weeks.', 'IVEM (For Sting-Free Compost and Nourishment of Plant) - 500 ml: 1 Unit.\r\n\r\nCompost Culture (Compost Starter Microbes) - 1 kg: 1 Unit.\r\n\r\nBulking Agent for Home Compost Kit - 5 kg: 1 Unit.\r\n\r\nCuring Bag: 2 Units.\r\n\r\nCompost Bin (15 ltr): 2 Units.\r\n\r\nHand Gloves for Home Compost Kit (1 Pair): 1 Unit.\r\n\r\n3 Prong Hand Cultivator No. MMI 84 - Gardening Tool: 1 Unit.\r\n\r\nSpray Bottle (Hand Trigger, 1 Ltr) - Gardening Tool: 1 Unit.\r\n\r\nInstruction Manual: 1 Unit.'),
(1008, 'Coco Husk Block - 4.5 kg', 'Coco Husk Block - 4.5 kg.png', 479, 599, 'Coco Husk is a soil substitute or addition to it. Especially when you need a well drained soil with good amount of aeration.\r\n\r\nCoco Husk is best component of any soilless potting mix especially for Cactus and Succulent mix and also to grow bulbs. Easy to carry block form.It is lightweight, best for balconies & terrace gardening, easy to carry, saves Water, eco-friendly Organic.', 'Storage in the dry area.\r\n\r\nKeep out of reach of children.', 'Keep the coco peat block on the plastic sheet or bucket.\r\n\r\nWater gradually till block absorbs water.\r\n\r\nDab the block for easy water absorption.\r\n\r\nAfter a few hours, an entire block will absorb the water and swell.\r\n\r\nDrain out the excess water if necessary; then it is ready to use.'),
(1009, 'Desert Pride (Cactus and Succulent Plant Food) - 250 g', 'Desert Pride (Cactus and Succulent Plant Food) - 250 g.png', 96, 120, 'Desert Pride is a specially formulated fertilizer for Cactus and Succulent plants.\r\n\r\nDesert pride is the special blend for all succulent, cacti, Jade, and Sansevieria. As this fertilizer is free from biosolids, sewage and slaughter house waste; it can also be used for holy plants like Tulsi without hesitation.', 'Do not keep the pouch open for a long time.\r\n\r\nTightly close the leftover powder in the same pack and store in a dry place.\r\n\r\nKeep out of reach of children.\r\n\r\nIf swallowed, seek medical advice.', 'Use 2 table spoons for plant in 10 inch diameter pot, 1 table spoon for a pot having 5 inch diameter.\r\n\r\nReduce the quantity for smaller pots Apply regularly at a gap of 60-90 days.'),
(1010, 'Jeevamrut (Plant Growth Tonic) - 500 ml', 'fertilizer-jeevamrut-plant-growth-tonic-500-ml-for-garden.png', 176, 220, 'Jeevamrut is an excellent plant growth tonic with 100 % organic ingredients.\r\n\r\nJeevamrut is a liquid organic manure popularly used as means of organic gardening. It is considered to be an excellent source of natural carbon, biomass, nitrogen, phosphorous potassium and lot of other micro nutrients required for the plants.\r\n\r\nJeevamrut adds organic matter to the soil which improves soil structure, aeration, soil moisture-holding capacity, and water infiltration. Jeevamrut improves the quality and yield of fruits, vegetables and other crops.Organic ingredients of Jeevamrut Cow dung Cow urine Lentil powder Jaggery Organic soil Water.', 'Keep the bottle in the dry area.\r\n\r\nDo not keep the bottle open for a long time.\r\n\r\nThe bottle should be tightly closed and stored in dry space after use.\r\n\r\nKeep the bottle out of reach of children.', 'Shake the bottle well before opening it every time.\r\n\r\nTake 100ml of Jeevamrut and add it to 1 liter of plain water.\r\n\r\nMix them thoroughly.\r\n\r\nPour the diluted liquid to the soil.\r\n\r\nRepeat the process every 15 days.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `land` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`no`, `name`, `link`, `land`) VALUES
(1, 'fruit', 'fruit.php', 'product.php'),
(2, 'flowering', 'flower.php', 'seeds.php'),
(3, 'fertilizer', 'fertilizers.php', 'Fertilizer_Product.php');

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `order_id` int(10) DEFAULT NULL,
  `uid` int(10) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `umail` varchar(255) NOT NULL,
  `item_time` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`order_id`, `uid`, `prod_name`, `image`, `price`, `quantity`, `time`, `umail`, `item_time`, `status`) VALUES
(10000203, 46, 'Banyan tree Bonsai - Plant', 'Banyan tree Bonsai - Plant.png', 6400, 1, '2021-05-09 06:33:37', 'shail123@gmail.com', '2021-05-09 11:58:44', 'shipped'),
(10000203, 46, 'Jade Bonsai Formal Upright Style - Plant', 'Jade Bonsai Formal Upright Style - Plant.png', 6000, 1, '2021-05-09 06:33:37', 'shail123@gmail.com', '2021-05-09 11:58:06', 'shipped'),
(10000203, 46, 'Crassula Campfire - Succulent Plant', 'Crassula Campfire - Succulent Plant.png', 649, 5, '2021-05-09 06:33:37', 'shail123@gmail.com', '2021-05-09 12:00:12', 'shipped'),
(10000203, 46, 'Amla-Tree-Indian-Gooseberry-Big-Fruit-Grown-Through-Seeds', 'Amla Tree, Indian Gooseberry (Big Fruit, Grown Through Seeds) - Plant.png', 320, 5, '2021-05-09 06:33:37', 'shail123@gmail.com', '2021-05-09 12:03:07', 'shipped'),
(10000203, 46, 'pudina plant  asda', 'nurserylive-plants-common-mint-plant-pudina-plant-16968793620620_600x600.jpg', 30, 1, '2021-05-09 06:33:37', 'shail123@gmail.com', '2021-05-09 12:03:17', 'shipped'),
(10000204, 46, 'Crassula Campfire - Succulent Plant', 'Crassula Campfire - Succulent Plant.png', 649, 4, '2021-05-09 18:16:50', 'shail123@gmail.com', '2021-05-09 23:45:01', 'shipped'),
(10000205, 46, 'Baby Echeveria, Echeveria derenbergii - Succulent Plant', 'Baby Echeveria, Echeveria derenbergii - Succulent Plant.png', 360, 1, '2021-05-09 18:18:26', 'shail123@gmail.com', '2021-05-09 23:47:22', 'processing'),
(10000207, 46, 'Graptosedum Species - Succulent Plant', 'Graptosedum Species - Succulent Plant.png', 399, 1, '2021-05-09 19:23:08', 'shail123@gmail.com', '2021-05-09 23:49:27', 'processing'),
(10000208, 40, 'Baby Echeveria, Echeveria derenbergii - Succulent Plant', 'Baby Echeveria, Echeveria derenbergii - Succulent Plant.png', 360, 1, '2021-05-10 06:11:31', 'parmardarshil151@gmail.com', '2021-05-10 11:33:19', 'processing'),
(10000208, 40, 'Graptosedum Species - Succulent Plant', 'Graptosedum Species - Succulent Plant.png', 399, 1, '2021-05-10 06:11:31', 'parmardarshil151@gmail.com', '2021-05-10 11:33:37', 'processing'),
(10000209, 40, 'Sunflower Large Bloom - Flower Seeds', 'sunflower-large-bloom-flower-seeds.png', 199, 1, '2021-05-10 06:14:22', 'parmardarshil151@gmail.com', '2021-05-10 11:44:05', 'processing'),
(10000210, 40, 'Crassula Campfire - Succulent Plant', 'Crassula Campfire - Succulent Plant.png', 649, 1, '2021-05-14 14:54:02', 'parmardarshil151@gmail.com', '2021-05-14 15:17:52', 'processing'),
(10000211, 40, 'Kaner, Nerium Oleander (Pink) - 0.5 kg Seeds', 'Kaner, Nerium Oleander (Pink) - 0.5 kg Seeds.png', 2279, 1, '2021-05-14 14:57:09', 'parmardarshil151@gmail.com', '2021-05-14 20:26:05', 'processing'),
(10000211, 40, 'Sunflower Gold', 'sunflower-russian-giant-desi-flower-seeds.png', 459, 1, '2021-05-14 14:57:09', 'parmardarshil151@gmail.com', '2021-05-14 20:25:54', 'processing'),
(10000227, 51, 'Amla-Tree-Indian-Gooseberry-Big-Fruit-Grown-Through-Seeds', 'Amla Tree, Indian Gooseberry (Big Fruit, Grown Through Seeds) - Plant.png', 320, 1, '2021-05-26 11:18:13', 'parmardarshil151@gmail.com', '2021-05-24 20:41:23', 'processing'),
(10000228, 51, 'Apple-Tree-Grafted-Plant', 'Apple-Tree-Grafted-Plant.png', 680, 1, '2021-05-26 11:20:24', 'parmardarshil151@gmail.com', '2021-05-26 16:50:08', 'processing'),
(10000229, 51, 'Amla-Tree-Indian-Gooseberry-Big-Fruit-Grown-Through-Seeds', 'Amla Tree, Indian Gooseberry (Big Fruit, Grown Through Seeds) - Plant.png', 320, 1, '2021-05-26 11:24:32', 'parmardarshil151@gmail.com', '2021-05-26 16:54:05', 'processing'),
(10000230, 51, 'Banana - G9, Kela - Plant', 'Banana - G9, Kela - Plant.png', 399, 1, '2021-05-26 11:26:03', 'parmardarshil151@gmail.com', '2021-05-26 16:55:41', 'processing'),
(10000231, 51, 'Amla-Tree-Indian-Gooseberry-Big-Fruit-Grown-Through-Seeds', 'Amla Tree, Indian Gooseberry (Big Fruit, Grown Through Seeds) - Plant.png', 320, 1, '2021-05-26 11:29:28', 'parmardarshil151@gmail.com', '2021-05-26 16:59:09', 'processing');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(5) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `del_price` int(6) NOT NULL,
  `description` varchar(255) NOT NULL,
  `care` varchar(255) NOT NULL,
  `fetures` varchar(255) NOT NULL,
  `uses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `category`, `name`, `image`, `price`, `del_price`, `description`, `care`, `fetures`, `uses`) VALUES
(1, 'avenue', 'Rubber Tree, Rubber Plant, Ficus elastica (Small) - Plant', 'Rubber Tree, Rubber Plant, Ficus elastica (Small) - Plant.png', 499, 549, 'The rubber plant (Ficus elastica) is a popular ornamental plant from the Ficus genus.\r\n\r\nIn it\'s natural habitat it grows over 30 metres tall.\r\n\r\nOrigin: India, Nepal, Myanmar, China, Malaysia & others', 'Keep the plant in natural indirect bright Light.\r\n\r\nPoke your finger/plain small stick into the soil to check the moisture.\r\n\r\nWater when top soil (1-2inches) feels dry to touch.', '---', 'Ornamental Use : The shiny glossy leaves look great and give a classy look to your interior space'),
(2, 'avenue', 'Kailashpati, Cannon-ball Tree - Plant', 'Kailashpati, Cannon-ball Tree - Plant.png', 400, 500, 'The cannon-ball tree is one of the most spectacular trees. This plant is a national flower plant of the Puducherry.', 'More than 6 hours of sunlight a day is ideal for plant and natural direct bright light for the rest of the day.\r\n\r\nApply 4 cup (Approx. 200 ml water) water when top soil (1-2 inches) in pot feels dry to touch.\r\n\r\nSoil should be well drain and fertile, ric', 'Large attractive colored flower.\r\n\r\nSweet, Strong Scented smell.', ' Ornamental Use : The shiny glossy leaves look great and give a classy look to your interior space.'),
(3, 'avenue', 'Parkia biglandulosa (Badminton Ball Tree) - Plant', 'Parkia biglandulosa (Badminton Ball Tree) - Plant.png', 299, 399, 'The cannon-ball tree is one of the most spectacular trees. This plant is a national flower plant of the Puducherry.', 'More than 6 hours of sunlight a day is ideal for plant and natural direct bright light for the rest of the day.\r\n\r\nApply 4 cup (Approx. 200 ml water) water when top soil (1-2 inches) in pot feels dry to touch.\r\n\r\nSoil should be well drain and fertile, ric', 'Large attractive colored flower.\r\n\r\nSweet, Strong Scented smell.', 'The shiny glossy leaves look great and give a classy look to your interior space.'),
(4, 'avenue', 'Ashoka Tree, Polyalthia longifolia - Plant', 'Ashoka Tree, Polyalthia longifolia Plant.png', 499, 599, 'Saraca Indica commonly known as Ashoka tree or Sorrow-less Tree is one of the most exotic flowering trees of the Indian subcontinent.\r\n\r\nIt grows natively in warm humid climates of Pakistan, India, Myanmar, and Malaysia and belongs to the Fabaceae family.', 'Full sun to partial shade of sunlight.\r\n\r\nwell-drained and organic soil.\r\n\r\nModerately Watering.\r\n\r\nApply any organic fertilizer.', 'This evergreen, tall and slender tree grows symmetrically and produces fresh and shining green foliage.', 'Use on Ornamental Use and Medicinal Use.'),
(6, 'bonsai', 'Banyan tree Bonsai - Plant', 'Banyan tree Bonsai - Plant.png', 6400, 7999, 'Ficus trees are a common plant in the home and office, mainly due to the fact that they look like a typical tree with a single trunk and a spreading canopy.\r\n\r\nFicus is a pan-tropical genus of trees, shrubs and vines occupying a wide variety of ecological', 'Most ficus trees enjoy bright indirect or filtered light with variegated varieties happily able to take medium light. Bright, direct light may result in scalding of the leaves and leaf loss.\r\n\r\nWhen watering, always check the top of the soil first. If the', 'Most ficus bonsai trees can produce aerial roots in their natural habitat, which are often presented in appealing bonsai creations with many aerial root pillars or root over rock styles. To enable aerial root growth in our homes a humidity of nearly 100% ', 'The ornamental use: The plant is used for ornamental purpose.\r\n\r\nCulinary Use: The common fig (Ficus carica) is cultivated for its pear-shaped, edible fruits, which are really hollow fleshy receptacles (syconia) containing hundreds of male and female flow'),
(7, 'bonsai', 'Ficus Bonsai - Plant', 'Ficus Panda Bonsai - Plant.png', 3600, 4550, 'Bonsai is closely resembling circumstances in nature. These styles are open to personal interpretation and creativity of nature.', '2 to 4 house of direct sunlight.\r\n\r\nMedium watering.\r\n\r\nWell-drained and coarse potting soil.\r\n\r\nBonsai fertilizer.', 'Realistic representation of nature in the miniature form.\r\n\r\nA Bonsai tree is a replication of nature.\r\n\r\nA tree which is planted in a shallow container.\r\n\r\nBest for both indoor and outdoor.', 'It is used as the ornamental plant'),
(8, 'bonsai', 'Jade Bonsai Formal Upright Style - Plant', 'Jade Bonsai Formal Upright Style - Plant.png', 6000, 7500, 'Bonsai is closely resembling circumstances in nature. These styles are open to personal interpretation and creativity of nature.', '2 to 4 house of direct sunlight.\r\n\r\nMedium watering.\r\n\r\nWell-drained and coarse potting soil.\r\n\r\nBonsai fertilizer', 'Realistic representation of nature in the miniature form.\r\n\r\nA Bonsai tree is a replication of nature.\r\n\r\nA tree which is planted in a shallow container.\r\n\r\nBest for both indoor and outdoor.', 'Bonsai use to create natural beauty in a small space'),
(9, 'cactus', 'Baby Echeveria, Echeveria derenbergii - Succulent Plant', 'Baby Echeveria, Echeveria derenbergii - Succulent Plant.png', 360, 449, 'This plant with its pale blue-green leaves can be used as contrasting foliage in succulent plantings, cactus gardens or xeriscape plantings. It is also pretty used as edging for dry borders and in rock gardens. It can be kept in pots too, provided the soi', 'Full sun to partial shade, at least 4 to 6 hours of sunlight per day.\r\n\r\nModerately Watering.\r\n\r\nWell drained soil.\r\n\r\nApply any organic fertilizer in spring.', '---', 'Ornamental Use : This plant with its pale blue-green leaves can be used as contrasting foliage in succulent plantings, cactus gardens or xeriscape plantings'),
(10, 'cactus', 'Crassula Campfire - Succulent Plant', 'Crassula Campfire - Succulent Plant.png', 649, 820, 'Crassula capitella (Campfire) is a branching succulent plant with fleshy propeller like leaves that mature from light green to bright red.', 'At least 3-6 hours of preferably morning sunlight a day is ideal for plant to grow well and natural indirect bright light for the rest of the day.\r\n\r\nApply 1 cup (Approx. 50 ml ) water when top soil (3-4 inches) in pot feels dry to touch.\r\n\r\nSoil should b', '---', 'Ornamental Use : The plant is used for ornamental purpose like borders, containers, edging, fillers, ground covers, rock gardens'),
(11, 'cactus', 'Graptosedum Species - Succulent Plant', 'Graptosedum Species - Succulent Plant.png', 399, 499, 'It has striking grey-green coloured, fleshy spoon-shaped leaves growing in a rosette on a stem. It is a popular groundcover plant in rockeries and water-wise gardens.', 'Full sun to partial shade, at least 4 to 6 hours of sunlight per day.\r\n\r\nModerately Watering.\r\n\r\nWell drained soil.\r\n\r\nApply any organic fertilizer in spring.', '---', 'This plant with its pale blue-green leaves can be used as contrasting foliage in succulent plantings, cactus gardens or xeriscape plantings.'),
(12, 'cactus', 'Parodia Leninghausii - Cactus Plant', 'Parodia Leninghausii - Cactus Plant.png', 440, 549, 'Parodia leninghausii or the Yellow Tower Cactus is an interesting clustering cactus that has round columnar stems that are coated in yellow/light brown spines that are generally harmless.', 'Full sun to partial shade, at least 4 to 6 hours of sunlight per day.\r\n\r\nRegular watering in summer and not at all in winter.\r\n\r\nWell drained sandy soil.\r\n\r\nUse any organic fertilizer.', '---', 'Cactus is used as an ornamental plant.'),
(13, 'fruit', 'Amla-Tree-Indian-Gooseberry-Big-Fruit-Grown-Through-Seeds', 'Amla Tree, Indian Gooseberry (Big Fruit, Grown Through Seeds) - Plant.png', 320, 399, 'Improve immunity of your all family member by growing a nutritious and vitamin rich an amazing Amla plant.', 'More than 6 hours of direct bright sunlight a day.\r\n\r\nBefore water poke your finger/plain small stick into the soil to check the moisture.\r\n\r\nThe soil should be well drained and fertile, rich in organic content for growing plant.\r\n\r\nDuring the main growin', '---', 'Medicinal Use : Used in many ayurvedic and pharmaceutical preparations'),
(14, 'fruit', 'Apple-Tree-Grafted-Plant', 'Apple-Tree-Grafted-Plant.png', 680, 849, 'The apple tree is a deciduous tree in the rose family best in terms of sweetness, richness, and flavor.', 'Full sunlight.\r\n\r\nWatering Moderately.\r\n\r\nSandy loam well-drained soil.\r\n\r\nApply any organic fertilizer.', '---', 'Apple Tree used in Ornamental Use and Culinary Usage.'),
(15, 'fruit', 'Banana - G9, Kela - Plant', 'Banana - G9, Kela - Plant.png', 399, 449, 'Growing Banana plant is an easy way to add a tropical flair to your garden. When you know that it has a unique leaf shape, edible fruits and how to care for Banana plants, you will be rewarded with many years of edible fruits.', 'Poke your finger/plain small stick into the soil to check the moisture.\r\n\r\nApply 4 cup (approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch.\r\n\r\nKeep the plant in indirect bright light.\r\n\r\nDo not re-pot for min. 2 weeks after ', 'They are classic tropical foliage plants with beautiful inflorescence and edible fruits.\r\n\r\nOne of the best garden fruit plants.\r\n\r\nLow maintenance plant.\r\n\r\nIt is devoutly religious plant.', 'Use on Ornamental Use, Medicinal Use and Culinary Use.'),
(16, 'fruit', 'Black-Grape-Angoor-Seedless-Plant', 'Black grapes, Kala angoor (Grafted) - Plant.png', 720, 899, 'A grape is a fruiting berry of the deciduous woody vines of the botanical genus Vitis. Grapes can be eaten fresh as table grapes or they can be used for making wine, jam, juice, jelly, grape seed extract, raisins, vinegar, and grape seed oil', 'Natural bright light with morning sunlight(more than 6 hours)\r\n\r\nApply 4 cup(approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch\r\n\r\nWell-drained, fertile and nutrient rich soil.\r\n\r\nApply organic fertilizer once a month.', '---', 'Black Grapes Ornamental Use,Medicinal Use and Culinary Use'),
(17, 'herb', 'Brahmi, Gotu Kola, Centella asiatica - Plant', 'Brahmi, Gotu Kola, Centella asiatica - Plant.png', 479, 599, 'Centella grows in tropical swampy areas.The stems are slender, creeping stolons, green to reddish-green in color, connecting plants to each other.', 'Full Sun to Partial Shade of sunlight.\r\n\r\nWell-drained soil.\r\n\r\nMedium Watering.\r\n\r\nUse any organic fertilizer.', 'The flowers are white or pinkish to red in color, born in small, rounded bunches (umbels) near the surface of the soil. Each flower is partly enclosed in two green bracts. The hermaphrodite flowers are minute in size (less than 3 mm), with 5-6 corolla lob', 'Use on Ornamental Use, Medicinal Use and Culinary Use.'),
(18, 'herb', 'Krishna Tulsi Plant, Holy Basil, Ocimum tenuiflorum (Black) - Plant', 'Krishna Tulsi Plant, Holy Basil, Ocimum tenuiflorum (Black) - Plant.png', 399, 499, ' krishna tulsi is part of routine worship and has a scientific background as the plants possess antimicrobial and antiviral properties and purify the air.', 'Natural bright light.\r\n\r\nSoil should be well drain and fertile, rich in organic content.\r\n\r\nPoke your finger/plain small stick into the soil to check the moisture. Water when topsoil (1-2 inches) feels dry to touch. Water thoroughly in the summer and redu', 'Have a traditional value.\r\n\r\nkrishna tulsi have medicinal property.', ' Use on Ornamental Use, Medicinal Use and Culinary Use.'),
(19, 'herb', 'Lemon Grass - Plant\r\n', 'Lemon Grass - Plant.png', 399, 499, 'Lemon Grass is a fragrant herb which is increasingly being used in teas, beverages, herbal medicines.', 'Full sun sunlight.\r\n\r\nSoil should be well drain and fertile, rich in organic content.\r\n\r\nmedium Watering\r\n\r\nApply any organic fertilizer', 'The stalk is used for cooking, and the leaves are used for teas. Lemongrass tea can be calming and soothing stomachs. A popular tea blend is Sleepy Time Tea, which is a mixture of lemongrass, lavender, and German chamomile flower.', 'Use on Ornamental Use and Medicinal Use.'),
(20, 'herb', 'Wild Asparagus, Shatavari - Plant', 'Wild Asparagus, Shatavari - Plant.png', 480, 599, 'Shatavari, sometimes known as wild asparagus, is primarily a reproductive tonic (both male and female), a demulcent for the digestive system, and a powerful adaptogen.', 'sunlight Partial shade.\r\n\r\nSoil should be well drain and fertile, rich in organic content.\r\n\r\nmedium Watering.\r\n\r\nApply any organic fertilizer', 'No serious pest and disease has been noticed in this crop.', 'Use on Ornamental Use and Medicinal Use.'),
(21, 'herb', 'pudina plant  asda', 'nurserylive-plants-common-mint-plant-pudina-plant-16968793620620_600x600.jpg', 30, 793, 'great', 'no care , its care your self', 'best ever plantertsdfsdf', '----all of uses arsdfeert'),
(22, 'cactus', ' Lakshmi Kamal , Sempervivum Green Wheel, Houseleek, - Succulent Plant', 'Sempervivum Green Wheel, Houseleek, Lakshmi Kamal - Succulent Plant.webp', 499, 529, ' Lakshmi Kamal is holy flower on india ', '--', '--', '--'),
(23, 'bonsai', 'Ficus Bonsai - Plant', 'nurserylive-plants-ficus-bonsai-plant-16968858140812_1140x1140.jpg', 849, 1199, 'Enjoy your surrounding with this adorable Ficus microcarpa bonsai.\r\n\r\nBonsai is the artificial production of natural tree forms in miniature appearance. Ficus microcarpa bonsai has a shape of its strong roots, stems, and small alternating oval shape with ', 'Full to partial Sunlight, bright indirect sunlight\r\n\r\nWatering	Moderate.\r\n\r\nSoil	Well-drained potting soil.\r\n\r\nTemperature	20 to 30 degree C.\r\n\r\nFertilizer	Liquid fertilizer.', 'Ficus microcarpa is a popular bonsai plant which is well training.', 'Ornamental Use :\r\n\r\nIt is used as the ornamental plant');

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `id` int(6) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `del_price` int(6) NOT NULL,
  `description` text NOT NULL,
  `care` text NOT NULL,
  `fetures` text NOT NULL,
  `uses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`id`, `category`, `name`, `image`, `price`, `del_price`, `description`, `care`, `fetures`, `uses`) VALUES
(101, 'easyto', 'Water Melon F1 Aalam Daksh 55 - Fruit Seeds', 'water-melon-f1-aalam-daksh-55-fruit-seeds.png', 159, 199, ' Watermelon is a delicious and refreshing fruit.\r\n\r\n1 packet contains - 3gm / 10gm seeds.\r\n\r\nEveryone seems to love juicy watermelon in the summertime. Native to Africa, melons need warm temperatures (up to 80 degrees during the day) and a long growing season. Gardeners in colder climates can still have success in growing watermelon by starting seeds indoors and choosing short-season varieties.\r\n\r\nDays to maturity range from 70 to 90, depending on the variety.', '---', 'Days to maturity range from 70 to 90, depending on the variety.', 'Culinary Use :\r\n\r\n-They are great sliced, in fruit salads, and the rind is even used hollowed out as a serving basket or bowl.\r\n\r\n-On a hot summer day, nothing tastes better than a nice slice of watermelon.\r\nUnderstanding the best growing conditions for watermelons will help you grow this \r\n\r\n-wonderful fruit.\r\n\r\nMedicinal Use :\r\n\r\n-Helps You Hydrate: Drinking water is an important way to keep your body hydrated,it is Contains Nutrients and Beneficial Plant Compounds: Watermelon is also high in carotenoids, including beta-carotene and lycopene Plus, it has citrulline, an important amino acid.\r\n\r\n-The strongest link so far seems to be between lycopene and cancers of the digestive system Improve Heart Health: Lifestyle factors, including diet, may lower the risk of heart attacks and strokes by reducing blood pressure and cholesterol levels.\r\n\r\n-Is Good for Skin and Hair: Vitamin C helps your body make collagen, a protein that keeps your skin supple and your hair strong\r\n'),
(102, 'easyto', 'Water Melon F1 Arya 114 - Fruit Seeds', 'water-melon-f1-arya-114-fruit-seeds.png', 199, 249, 'Watermelon is a delicious and refreshing fruit.\r\n\r\n1 packet contains - 3gm / 10gm seeds.\r\n\r\nEveryone seems to love juicy watermelon in the summertime. Native to Africa, melons need warm temperatures (up to 80 degrees during the day) and a long growing season. Gardeners in colder climates can still have success in growing watermelon by starting seeds indoors and choosing short-season varieties.\r\n\r\nDays to maturity range from 70 to 90, depending on the variety.', '---', 'Days to maturity range from 70 to 90, depending on the variety.', 'Culinary Use:\r\n\r\n-They are great sliced, in fruit salads, and the rind is even used hollowed out as a serving basket or bowl.\r\n\r\n-On a hot summer day, nothing tastes better than a nice slice of watermelon.\r\n\r\n-Understanding the best growing conditions for watermelons will help you grow this wonderful fruit\r\n\r\nMedicinal Use:\r\n\r\n-Helps You Hydrate: Drinking water is an important way to keep your body hydrated , Contains Nutrients and Beneficial Plant Compounds: Watermelon is also high in carotenoids, including beta-carotene and lycopene Plus, it has citrulline, an important amino acid.\r\n\r\n-The strongest link so far seems to be between lycopene and cancers of the digestive system Improve Heart Health: Lifestyle factors, including diet, may lower the risk of heart attacks and strokes by reducing blood pressure and cholesterol levels.\r\n\r\n-Is Good for Skin and Hair: Vitamin C helps your body make collagen, a protein that keeps your skin supple and your hair strong'),
(103, 'easyto', 'Brinjal CVK MK-124 - Vegetable Seeds', 'Brinjal CVK MK-124 - Vegetable Seeds.png', 199, 249, '1 packet contains - 50 seeds of brinjal.\r\n\r\nThe brinjal (eggplant or baingan or aubergine) is called the King of Vegetables by some cultures. It is one of the most versatile vegetables around, loved by many people across the world.\r\n\r\nDifferent varieties are available everywhere and each variety is unique in its own way, with a distinctive flavor and many essential minerals.Eggplant or Brinjal, is a very low calorie vegetable and has healthy nutrition profile; good news for weight watchers! The veggie is popularly known as aubergine in the western world.', '---', '---', 'Culinary Use:\r\n\r\n-TPrick the skin before boiling or roasting it in the oven.\r\n\r\n-This will remove any bitterness and extract some of the water.\r\n\r\n-Slice the brinjals, peeled or unpeeled as specified in the recipe.\r\n\r\n-Rinse and dry the slices before using\r\nMedicinal Use:\r\n\r\nThe brinjal or eggplant has a lot of vitamins and nutrients\r\nIt contains vitamins like B1 and B6\r\nIt also contains a good amount of potassium, copper, magnesium, manganese, phosphorus, niacin, and folic acid\r\nHelpful to the brain: Eggplant contains Phytonutrients which keep the cell membranes protected from any kind of damage and facilitates the message transfer from one part to another, thus preserving the memory function\r\nThe spongy texture of the vegetable is what facilitates these characteristics, hence one must consume in its natural form as much as possible'),
(104, 'easyto', 'Tomato Imported Moneymaker - Heirloom Vegetable Seeds', 'Tomato Imported Moneymaker - Heirloom Vegetable Seeds.png', 159, 199, '1 packet contains Tomato Imp Moneymaker - Seeds - 50 seeds.\r\n\r\nThe most popular garden vegetable crop, tomatoes come in a wide range of sizes, shapes and colo₹ Choose determinate varieties for early harvest or cool conditions. Compact varieties are also good choices for containers and planting in flower beds.Tomatoes are an incredibly versatile food.\r\n\r\nThey are often considered as a vegetable, though ideally they are a citrus fruit. They are a rich source of Vitamin C and help in increasing your immunity. Not just this, tomatoes also provide several other vitamins, magnesium, phosphorus and copper, all of which are necessary for good health.The best part is that they can be eaten either raw, in salads, sandwiches or in vegetables.', '---', '---', 'Culinary Use:\r\n\r\n-Many standard cultivars are adapted for a variety of uses, including slicing, canning, and salads.\r\n\r\n-The large, meaty fruits of beefsteak tomatoes are especially popular for slicing.\r\n\r\n-Italian or paste tomatoes are favourites for cooking, canning, and juicing.\r\n\r\n-Sweet bite-size tomatoes in a range of colours are very popular for salads or as snacks.\r\n\r\nMedicinal Use:\r\n\r\n-Tomatoes confer protection against high cholesterol, strokes, and heart disease.\r\n\r\n-Tomatoes basically have an anti-ageing affect on our body as they contain antioxidant lycopene which is easily absorbed by our body thereby leaving you with a healthy skin and hair.\r\n\r\n-Since tomatoes are a rich source of antioxidants such as vitamin C and Vitamin A, these vitamins help in preventing DNA damage from free radicals.\r\n\r\n-The vitamin K and calcium present in tomatoes help in building strong bones\r\n-\r\nDue to the presence of Lycopene, they are a natural source of fighting against several cancers, including prostate, cervical, stomach, colon, rectal, prostate and ovarian cancer'),
(105, 'flowering', 'Chrysanthemum Alaska White - Flower Seeds', 'Chrysanthemum Alaska White - Flower Seeds.png', 199, 249, 'Chrysanthemum \'Alaska\' is a commonly grown flowering herbaceous perennial plant with the classic daisy appearance of white petals.\r\n\r\nLeucanthemum x superbum is the scientific name of this plant and is a hybrid. The flowers, with the classic white rays and yellow center. It blooms for 3 Weeks or More. It has rigid stems which do not require staking. Features 3\" diameter single flower heads.', 'Sow in the late winter to late Spring or Late Summer to Autumn.\r\n\r\nGermination may occur between 21 to 35 days.\r\n\r\nPrick out the seedlings and gradually acclimatize to outdoor conditions for 10 to 15 days before planting out.\r\n\r\nKeep spacing of 20 to 24 inches.', '---', 'Ornamental Use : It is a favorite garden plant and groundcover'),
(106, 'flowering', 'Sunflower Large Bloom - Flower Seeds', 'sunflower-large-bloom-flower-seeds.png', 199, 249, 'Sunflowers say summer like no other plant.Sunflower packet contains 50 seeds.\r\n\r\nSunflowers are annuals with showy, daisylike flower-heads that are usually 2-4 inches across and bright yellow (though occasionally red). Tall and course, the plants have creeping or tuberous roots and large, bristly leaves. Today, varieties have even been developed for small spaces and container.\r\n\r\nMost sunflowers are remarkably tough and easy to grow as long as the soil is not waterlogged. Most are heat- and drought-tolerant. They make excellent cut flowers and many are attractive to bees and birds.Smaller plants with big-time flower power. Striking compact, low-growing sunflower fills vase after beautiful vase with luminous, long-stemmed, brown-eyed, golden flower Heavy-branching, floriferous tall plants will keep your home aglow with joyous blooms.', 'Water plants deeply but infrequently to encourage deep rooting.\r\n\r\nFeed plants only sparingly; over-fertilization can cause stems to break in the fall.\r\n\r\nTall species and cultivars require support.\r\n\r\nBamboo stakes are a good choice for any plant that has a strong, single stem and needs support for a short period of time.', '---', 'Ornamental Use :\r\n\r\n-The flowers can be used to make an all natural dye\r\n\r\n-The stalks are used to make paper and clothes\r\n\r\nMedicinal Use :\r\n\r\n-As you know, sunflower seeds are edible.\r\n\r\n-They can be eaten raw, cooked, roasted or dried.\r\n\r\n-They are a popular, nutritious snack containing a good source of protein, vitamins A, B, and E, calcium, nitrogen and iron.\r\n\r\nCulinary Use :\r\n\r\n-The edible sunflower seeds can be eaten raw, cooked, roasted, or dried and ground for use in bread or cakes, as a snack.\r\n\r\n-The residue oil cake has been used as cattle and poultry feed, and high quality silage can be made from the whole plant.\r\n\r\n-Yellow dyes have been made from the flowers, and black dyes from the seeds.\r\n\r\n-The buoyant pith of the stalk has been used in the making of life preservers.'),
(107, 'flowering', 'Zinnia F1 Elegans Purple - Flower Seeds', 'Zinnia F1 Elegans Purple - Flower Seeds.png', 199, 249, 'Zinnias are one of the easiest annuals to grow, grow quickly, and bloom heavily. They make a massive burst of color in your garden.\r\n\r\nThey are warm season annual flowers that bloom with abandon and require only minimal care. It does not matter how hot the summer gets, zinnia plants just keep on blooming.', 'Zinnia leaves are opposite and usually stalkless (sessile), with a shape ranging from linear to ovate, and pale to middle green in color.\r\n\r\nThe flowers have a range of appearances, from a single row of petals to a dome shape, with the colors white, chartreuse, yellow, orange, red, purple, and lilac.\r\n\r\nZinnias seem especially favored by butterflies, and many gardeners add zinnias specifically to attract them.', 'Their easy culture, heat tolerance and colorful mid to late summer show, blooming hard when other annuals are spent, make them well worth exploring.', 'Ornamental Use:\r\n\r\n-Use in an annual or mixed border.\r\n\r\n-Smaller zinnias are suitable for edging, window boxes or other containers.\r\n\r\n-The narrow-leaf zinnia also works well in hanging baskets.\r\n\r\n-Zinnias are very popular for cut flowers.'),
(108, 'flowering', 'Kaner, Nerium Oleander (Pink) - 0.5 kg Seeds', 'Kaner, Nerium Oleander (Pink) - 0.5 kg Seeds.png', 2279, 2849, 'Beautify your garden with Kaner, Nerium Oleander pink flower.\r\n\r\nNerium is evergreen shrub that grows upto the height of 4 m and bearing leaves all the year around. Nerium indicum is distributed all over the Philippines, India and Nepal found on the ranges of 6500 feet. It is commonly cultivated for its sweet smelling flowers which have medicinal uses.', 'Watering should be done early in the morning if the soil is dry.\r\n\r\nAvoid overwatering.\r\n\r\nApply organic fertilizer in monsoon and spring season.', 'Oleanders grow 6 to 12 feet tall and wide, and some varieties can be trained to grow into small trees up to 20 feet tall.', 'Ornamental Use:\r\n\r\n-Used as an ornamental plant in landscapes, in parks, and along roadsides.\r\n\r\nMedicinal Use:\r\n\r\n-Nerium has various medicinal uses and the leaves and flowers are thought to have actions as tonic, cardio tonic, diaphoretic, diuretic, emetic and expectorant.\r\n\r\n-Leaves and flowers are also used to treat malaria and as traditional medicine it induces the termination of embryo.\r\n\r\n-Leaves and bark is treated as insecticide, rat poison and parasitic.\r\n\r\n-ZThe plant of Indian oleander is thought to possess anti-cancerous activities.'),
(109, 'forest', 'Bambusa Arundinacea - 0.5 kg Seeds', 'Bambusa Arundinacea - 0.5 kg Seeds.png', 960, 1199, 'Also known as: Spiny bamboo, Thorny bamboo, Tziu chu, Kalak, Bans', 'Watering should be done early in the morning if the soil is dry.\r\n\r\nAvoid overwatering.\r\n\r\nApply organic fertilizer in monsoon and spring season.', 'Tall woody bamboo, stems thorny, numerous, tufted, up to 40 m tall, curving at top; branches numerous, internodes 30–45 cm long', 'Ornamental Use : Used as an ornamental plant'),
(110, 'forest', 'Lucky Bamboo - 5 Seeds', 'Lucky Bamboo - 5 Seeds.png', 1599, 1999, ' Also known as: Spiny bamboo, Thorny bamboo, Tziu chu, Kalak, Bans.', 'Watering should be done early in the morning if the soil is dry.\r\n\r\nAvoid overwatering.\r\n\r\nApply organic fertilizer in monsoon and spring season.', 'Tall woody bamboo, stems thorny, numerous, tufted, up to 40 m tall, curving at top; branches numerous, internodes 30–45 cm long.', 'Ornamental Use : Used as an ornamental plant'),
(111, 'forest', 'Sapindus Marginatus, Soap Nut - 1 kg Seeds', 'Sapindus Marginatus, Soap Nut - 1 kg Seeds.png', 719, 899, 'Sapindus Mukorossi, Ritha, Sapindus Marginata, Soap nut', 'Watering should be done early in the morning if the soil is dry.\r\n\r\nAvoid overwatering.\r\n\r\nApply organic fertilizer in monsoon and spring season.', 'Notched Leaf Soapnut is a medium to large size deciduous tree growing up to 18 m tall, with a 1.5 m trunk girth.', 'Ornamental Use : Used as an ornamental plant'),
(112, 'forest', 'Araucaria Cunninghamii, Hoop Pine - 0.5 kg Seeds', 'Araucaria Cunninghamii, Hoop Pine - 0.5 kg Seeds.png', 719, 899, 'Araucaria cunninghamii is a species of Araucaria known as hoop pine. Other less commonly used names include colonial pine and Queensland pine', 'Watering should be done early in the morning if the soil is dry.\r\n\r\nAvoid overwatering.\r\n\r\nApply organic fertilizer in monsoon and spring season.', 'Araucaria cunninghamii is a symmetrical, cone-shaped tree that grows up to 60 m in height and gets its common name from the outer layer of bark which forms scale-like horizontal hoops.', 'Ornamental Use : Used as construction and interior work, including mouldings, linings, panelling, domestic flooring, shelves, cupboards, general joinery, furniture and cabinet work.'),
(113, 'vegetable', 'Radish Pusa Chetki - Desi Vegetable Seeds', 'Radish Pusa Chetki - Desi Vegetable Seeds.png', 119, 149, 'Other than commonly known radishes, many different varieties exist. This Radish packet contains approximately 35 seeds.\r\n\r\nThe radish (Raphanus sativus) is an edible root vegetable. Roots flesh is crispy with mild pungency.Roots are pure white in color. The shape is long, cylindrical. It is grown as a summer and monsoon crop from April September.Root length is 30 to 35 cm.', '---', 'Wider adaptability and can tolerate high temperature.', 'Culinary Use : These are used in many cooked and uncooked dishes.'),
(114, 'vegetable', 'Carrot Red Long - Desi Vegetable Seeds', 'Carrot Red Long - Desi Vegetable Seeds.png', 119, 149, 'The carrot is most loved as it is a part of healthy diet. This seed packet contains approximately 35 seeds.\r\n\r\nYou can grow carrots all year round and they are so simple! Just sow carrot seed regularly for a year-round crop.\r\n\r\nCarrots are an easy and rewarding crop to grow, great for encouraging children to eat their vegetables! With so many varieties of this popular vegetable available, carrots can be grown in beds, containers and even window boxes making them suitable for gardens of any size. Carrots are a popular root vegetable that is easy to grow in sandy soil. They are resistant to most pests and diseases and are a good late season crop that can tolerate frost. Not all carrots are orange; varieties vary in color like purple, black to white.', '---', 'Carrot roots are shorter than other cultivars, they have vigorous foliage and greater girth, being broad in the shoulders and tapering towards a blunt, rounded tip. They store well, have a pale-coloured core and are mostly used for processing.', 'Medicinal Use : \r\n\r\nCarrots are rich in vitamin A, calcium and trace elements decay\r\n\r\nCulinary Use :\r\n\r\nIt is popular in many dishes'),
(115, 'vegetable', 'Cabbage Special Pride - Desi Vegetable Seeds', 'Cabbage Special Pride - Desi Vegetable Seeds.png', 119, 149, 'This Cabbage, leafy vegetable contains a good amount of nutrition. This pack contains approximately 35 seeds.\r\n\r\nCabbage (Brassica oleracea or variants) is a leafy green annual-biennial plant, grown as an annual vegetable crop for its dense-leaved heads.Cabbage heads generally range from 1 to 8 pounds (0.5 to 4 kg) and can be green, purple and white.\r\n\r\nSmooth-leafed firm-headed greencabbages are the most common, with smooth-leafed red and crinkle-leafed savoy cabbages of both colors seen more rarely.This cool-season crop grows best when daytime temperatures are in the 60s F. Direct-seed or transplant spring crops for fresh use in summer.Plant fall crops for winter storage or sauerkraut.', '---', 'Plants have root systems that are fibrous and shallow.', 'Medicinal Use:\r\n\r\nCabbage is a good source of beta-carotene, vitamin C and fiber.\r\n\r\nThe Ancient Greeks recommended consuming the vegetable as a laxative, and used cabbage juice as an antidote for mushroom poisoning, for eye salves, and they prepared liniments with the plant to help bruises healThe cooling properties of the leaves were used in Britain as a treatment for trench foot in World War I, and as compresses for ulcers and breast abscesses.\r\n\r\nAccumulated scientific evidence corroborates that cabbage leaf treatment can reduce the pain and hardness of engorged breasts, and increase the duration of breast feeding.\r\n\r\nPurple cabbage also contains anthocyanins, which in other vegetables have been shown to have anti-carcinogenic properties.\r\n\r\nCulinary Use:\r\n\r\nCabbage is prepared and consumed in many ways.\r\n\r\nThe simplest options include eating the vegetable raw or steaming it, though many cuisines pickle, stew, or braised cabbage.'),
(116, 'vegetable', 'Onion Gawran - Desi Vegetable Seeds', 'Onion Gawran - Desi Vegetable Seeds.png', 69, 99, 'Onion excellent for use in cooking, especially onions fresh from the garden. 1 Seed packet contains approximately 35 seeds.\r\n\r\nOnions are a wonderful staple crop in our household, and we like to store some of our onion bulbs for 6-8 months over the winter. We eat a lot of them, and we usually plant over 200 onions each year.\r\n\r\nIf you follow a few simple steps, you can harvest a large amount of high-quality onions from a small garden.Onions are such a versatile vegetable â€“ they feature in so many recipes, so growing your own onions means youâ€™ll always have them to hand. They are easy to grow from baby onions called sets. Although seed is available, sets are the easiest and quickest way to grow onions. Sets are also are better in colder regions, and are less likely to be attacked by some pests and diseases.', '---', 'Onions are a cold-season crop, easy to grow because of their hardiness.', 'Medicinal Use:\r\n\r\nOnion is used for treating digestion problems including loss of appetite, upset stomach, and gallbladder disorders; for treating heart and blood vessel problems including chest pain (angina) and high blood pressure; and for preventing â€œhardening of the arteriesâ€ (atherosclerosis)\r\n\r\nIt is also used for treating sore mouth and throat, whooping cough, bronchitis, asthma, dehydration, intestinal gas, parasitic worms, and diabetes.\r\n\r\nSome people use it as a diuretic to increase urine output.\r\n\r\nOnion is applied directly to the skin for insect bites, wounds, light burns, boils, warts, and bruises.\r\n\r\nCulinary Use:\r\n\r\nIn foods, onion is used in many recipes'),
(117, 'flowering', 'Sunflower Gold', 'sunflower-russian-giant-desi-flower-seeds.png', 459, 540, 'Sun Flower Is Good', 'Daily Atleast one bouwl water', 'good ', 'Great Smell\r\n'),
(118, 'vegetable', 'Cauliflower Super Snowball - Desi Vegetable Seeds', 'nurserylive-seeds-cauliflower-super-snowball-desi-vegetable-seeds-16968697610380_600x600.jpg', 55, 100, 'It is a famous flower vegetable and this packet contains approximately 35 seeds.\r\n\r\nCauliflower is one of the commonly used flower-vegetable. Lifecycle: annual, biennial.', 'Full sun, Can tolerate light shade but will slow maturity. Light shade can be beneficial in warm weather.\r\n\r\nPrefers well-drained, fertile soil high in organic matter, pH 6.0 to 7.5. Can tolerate slightly alkaline soil.\r\n\r\nFeed every 2 to 4 weeks with an organic fertilizer like kelp and fish emulsion.\r\n\r\nCauliflower needs consistent moisture and plenty of water.', 'Cauliflower is a cool-season crop and a descendant of the common cabbage. It is more difficult to than its relatives because it does not tolerate the heat or cold as well.', 'Medicinal Use :\r\n\r\nIt contains good amounts of many vital B-complex groups of vitamins such as folates, pantothenic acid (vitamin B5), pyridoxine (vitamin B6) and thiamin (vitamin B1), niacin (B3) as well as vitamin K\r\n\r\nCulinary Use :\r\n\r\nThe leaves and stem of cauliflower are both edible.\r\n\r\nIt mostly used in salad and vegetarian diet.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(10) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sdetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `sname`, `sdetail`) VALUES
(1, 'Corporate Gardening', 'Corporate Gardening'),
(2, 'Party Plot Gardening', 'Party Plot Gardening'),
(3, 'House hold special Gardening', 'House hold special Gardening'),
(4, 'NGO Planting', 'NGO Planting');

-- --------------------------------------------------------

--
-- Table structure for table `ser_detail`
--

CREATE TABLE `ser_detail` (
  `email` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  `umail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ser_detail`
--

INSERT INTO `ser_detail` (`email`, `sname`, `fname`, `lname`, `address`, `contact`, `city`, `state`, `country`, `uid`, `umail`) VALUES
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 2147483647, 'Ahmedabad', 'Gujarat', 'India', 40, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 2147483647, 'Ahmedabad', 'Gujarat', 'India', 40, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Darshil', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 2147483647, 'Ahmedabad', 'Gujarat', 'India', 40, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1099 kikabhatt ni pole hanuman gali same, assarva gaam', 2147483647, 'Ahmedabad', 'Gujarat', 'India', 40, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Darshil', 'Parmar', '1097 , kikabhatt ni pole derasar valo khancho ,lunsawad ahmdabad-2', 2147483647, 'Ahmedabad', 'Gujarat', 'India', 40, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('darshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Abhishek', 'Parmar', '1097 kikabhatt ni pole derasar pase 09', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('abhishekkadiya34@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', '', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 1234567890, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 1234567890, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'House hold special Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'House hold special Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com'),
('parmardarshil151@gmail.com', 'Corporate Gardening', 'Parmar', 'Darshil', '1077 ,lala bhai hostel pase, near char choki , vundrapur', 2147483647, 'Ahmedabad', 'Gujarat', 'india', 51, 'parmardarshil151@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `quantity` int(255) NOT NULL,
  `uid` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=Pending , 1=Ongoing , 2=Ready ,3=Claimed',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `done` tinyint(3) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_history`
--

CREATE TABLE `shop_history` (
  `uid` int(10) NOT NULL,
  `umail` varchar(255) NOT NULL,
  `lst_tot_prod` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_history`
--

INSERT INTO `shop_history` (`uid`, `umail`, `lst_tot_prod`) VALUES
(40, 'parmardarshil151@gmail.com', 2),
(41, 'abhishek12@gmail.com', 3),
(46, 'shail123@gmail.com', 1),
(51, 'parmardarshil151@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `address` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `img`, `contact`, `address`, `type`) VALUES
(1, 'darshil.admin@gmail.com', 'darshil.admin@gmail.com', 'Darshil K Parmar', 'IMG_20190922_142543 (3).jpg', 6452950382, '3rd flor, Alaknanda bungalows, sastrapur, Ahmedabad', 'admin'),
(41, 'abhishek12@gmail.com', 'Abhi@123', 'Abhishek Kadiya', '', NULL, '', 'user'),
(46, 'shail123@gmail.com', 'Shail123@gmail.com', 'Shail Parekh', '', NULL, '', 'user'),
(51, 'parmardarshil151@gmail.com', 'parmardarshil151@gmail.com', 'Darshil Parmar', 'IMG_20190922_142543 (3).jpg', 6469234402, '1077 ,kika bhatt ni pole', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `oid` (`oid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD UNIQUE KEY `item_time` (`item_time`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_history`
--
ALTER TABLE `shop_history`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10014;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000232;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
