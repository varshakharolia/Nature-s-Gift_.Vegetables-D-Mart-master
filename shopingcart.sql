-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 02:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `image`, `Name`, `Price`) VALUES
(1, './Vegetables/Broccoil.jpg', 'Broccoli', 35),
(2, './Vegetables/Beet Root.jpg', 'Beet Root', 62),
(3, './Vegetables/Chilli Green.jpg', 'Green Chilli', 25),
(4, './Vegetables/Malabar.jpg', 'Malabar', 20),
(5, './Vegetables/Lemon.jpg', 'Lemon', 40),
(6, './Vegetables/Brinjal Bharta.jpg', 'Brinjal Bharta', 30),
(7, './Vegetables/Cabbage.jpg', 'Cabbage', 40),
(8, './Vegetables/Celery.jpg', 'Celery', 45),
(9, './Vegetables/Cauliflower.jpg', 'Caluflower', 52),
(10, './Vegetables/Onion.jpg', 'Onion', 60),
(11, './Vegetables/Chilli Green Achari.jpg', 'Achari Chilli', 60),
(12, './Vegetables/Gooseberry_Amla.jpg', 'Gooseberry Amla', 40),
(13, './Vegetables/Organic Ridge Gourd.jpg', 'Ridge Gourd', 25),
(14, './Vegetables/Tomato.jpg', 'Tomato', 45),
(15, './Vegetables/Green Pease.jpg', 'Green Pease', 30),
(16, './Vegetables/Bhendi.jpg', 'Lady Finger/Bhendi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `image`, `Name`, `Price`) VALUES
(1, './fruits/Mango.jpg', 'Mango', 70),
(2, './fruits/Orange.jpg', 'Orange', 30),
(3, './fruits/Pineapple.jpg', 'Pineapple', 60),
(4, './fruits/Sweet Corn.jpg', 'Sweet Corn', 45),
(5, './fruits/Tangerine.jpg', 'Tangerine', 50),
(6, './fruits/Litchi.jpg', 'Litchi', 30),
(7, './fruits/Graper red globe.jpg', 'Graper Red Globe', 75),
(8, './fruits/Apple Shimla.jpg', 'Apple Shimla', 60),
(9, './fruits/Banana.jpg', 'Banana', 40),
(10, './fruits/Pomegranate.jpg', 'Pomegrante', 110),
(11, './fruits/Chikoo.jpg', 'Chikoo', 30),
(12, './fruits/Organic Fresh Papaua.jpg', 'Organic Fresh Papaua', 45);

-- --------------------------------------------------------

--
-- Table structure for table `gifting`
--

CREATE TABLE `gifting` (
  `id` int(11) NOT NULL,
  `images` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gifting`
--

INSERT INTO `gifting` (`id`, `images`, `Name`, `Price`) VALUES
(1, './gifts/Chocochips Cookies.jpg', 'Chocochips Cookies', 150),
(2, './gifts/Almond Financier 3 Pcs.jpg', 'Almond Financier 3 Pcs', 200),
(3, './gifts/Light Hearted Munchies - Gift.jpg', 'Light Hearted Munchies - Gift', 120),
(4, './gifts/Brownies 3 Pcs.jpg', 'Brownies 3 Pcs', 200),
(5, './gifts/Original Stoolen Bread.jpg', 'Stoolen Bread', 290),
(6, './gifts/Christmas Cake Big.jpg', 'Christmas Cake Big', 1092),
(7, './gifts/Plum Cake.jpg', 'Plum Cake', 350),
(8, './gifts/Fresh Orange Cake.jpg', 'Fresh Orange Cake', 275),
(9, './gifts/Fudgy Chocolate Brownie.jpg', 'Fudgy Chocolate Brownie', 200),
(10, './gifts/Raw Turkey - Alf Farm.jpg', 'Raw Turkey - Alf Farm', 3560),
(11, './gifts/Vanilla Madeleines 4 Pcs.jpg', 'Vanilla Madeleines 4 Pcs', 95),
(13, './gifts/Assorted Jujupes - smoor.jpg', 'Assorted Jujupes - smoor', 200);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`email`, `password`, `rpassword`) VALUES
('raj@root.co', 'asdfsdf', 'sfsdf'),
('rkaybhaker@gmail.com', 'Rak@47325', 'Rak@47325'),
('bhaker@gmail.com', 'bha343434', 'bha343434'),
('don@yahoo.com', 'don@12345', 'don@12345'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('rakeshbhaker10@gmail.com', 'abc@123', 'abc@123'),
('abc@234.com', 'erer', 'erer'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('456@456', '12345678', '12345678'),
('bhaker@rakesh.com', 'bhakerbhaker', 'bhakerbhaker'),
('mukesh@bhaker.org', '09876543', '09876543'),
('bhaker@rkay.com', 'bhakerbhaker', 'bhakerbhaker');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `mob` bigint(11) NOT NULL,
  `cphno` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `slot_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `fname`, `lname`, `address`, `landmark`, `pincode`, `area`, `mob`, `cphno`, `date`, `slot_time`) VALUES
(0, 'Rakesh', 'Bhaker', 'VPO BIRAN 4AMS DHANI TEH BHADRA DISTRICT HANUMANGA', 'Rajasthan', 335511, 'Hanumangarh', 8059147325, 9350625981, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `slot_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `date`, `slot_time`) VALUES
(0, '2020-07-19', 'Afternoon 11:30am to 4:30pm*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gifting`
--
ALTER TABLE `gifting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gifting`
--
ALTER TABLE `gifting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
