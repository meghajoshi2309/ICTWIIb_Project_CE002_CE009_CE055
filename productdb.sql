-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 05:12 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE TABLE `ac` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Whirlpool 1.5 Ton 3 Star Inverter Split AC', '29990', './images/a1.png'),
(2, 'Daikin 0.8 Ton 3 Star Split AC (Copper, PM 2.5 Filter)', '22490', './images/a2.png'),
(3, 'Panasonic 1.5 Ton 5 Star Wi-Fi Twin Cool Inverter Split AC', '39990', './images/a3.png'),
(4, 'Voltas 0.75 Ton 2 Star Window AC (Copper 102 EZQ White)', '16990', './images/a3.png'),
(5, 'Blue Star 1.5 Ton 3 Star Fixed Speed Split AC', '34290', './images/a5.png'),
(6, 'Lloyd 1 Ton 3 Star Non-Inverter Split AC ', '26990', './images/a6.png'),
(7, 'Godrej 1.25 Ton 3 Star Inverter Split AC (AC 1.25T GIC 15STC3-WTA Split)', '26990', './images/a7.png'),
(8, 'Sanyo 1 Ton 3 Star Inverter Split AC (Copper, PM 2.5 Filter)', '25990', './images/a8.png'),
(9, 'Haier 1 Ton 3 Star Window AC (Copper, High Density Filter)', '21980', './images/a9.png');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `product_name`, `product_price`, `product_image`, `categories`) VALUES
(1, 'Sony Alpha ILCE-6400L 24.', 79990, './images/camera1.png', 'camera'),
(2, 'Sony Alpha ILCE 6000L 24.', 43190, './images/camera2.png', 'camera'),
(3, 'Fujifilm X-A7 24.2 MP', 45000, './images/camera3.png', 'camera'),
(4, 'Sony Alpha ILCE 6000Y 24.', 59065, './images/camera4.png', 'camera'),
(5, 'Sony Alpha ILCE-7M3 Full-', 1300, './images/camera5.png', 'camera'),
(6, 'Sony Alpha ILCE-7C Compac', 14600, './images/camera6.png', 'camera'),
(7, 'Panasonic LUMIX G7 16.00 ', 38990, './images/camera7.png', 'camera'),
(8, 'Fujifilm X-A7 24.2 MP Mir', 4500, './images/camera8.png', 'camera'),
(9, 'Canon EOS 1500D 24.1 Digi', 34152, './images/camera9.png', 'camera');

-- --------------------------------------------------------

--
-- Table structure for table `headphone`
--

CREATE TABLE `headphone` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headphone`
--

INSERT INTO `headphone` (`id`, `product_name`, `product_price`, `product_image`, `categories`) VALUES
(1, 'boAt Rockerz 550 Over-Ear Wireless Headphone ', 999, './images/headphone1.png', 'headphone'),
(2, 'boAt Rockerz 450 Bluetooth On-Ear Headphone with Mic', 899, './images/headphone2.png', 'headphone'),
(3, 'boAt Bassheads 900 On Ear Wired Headphones', 750, './images/headphone3.png', 'headphone'),
(4, 'Boult Audio Bass Buds Q2 Over-Ear Wired Lightweight Stereo Headphones', 950, './images/headphone4.png', 'headphone'),
(5, 'boAt Rockerz 400 Bluetooth On-Ear Headphone with Mic', 700, './images/headphone5.png', 'headphone'),
(6, 'pTron Pride Lite HBE (High Bass Earphones) in-Ear Wired Headphones', 200, './images/headphone6.png', 'headphone'),
(7, 'JBL C100SI by Harman In-Ear Deep Bass Headphones with Mic (Black)', 150, './images/headphone7.png', 'headphone'),
(8, 'pTron Tangent Lite Bluetooth 5.0 Wireless Headphones with Hi-Fi Stereo Sound', 175, './images/headphone8.png', 'headphone'),
(9, 'Redgear Cloak Wired RGB Gaming Headphones with Microphone for PC', 800, './images/headphone9.png', 'headphone');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Lenovo IdeaPad L340 9th Gen Intel Core i5 15.6\" ', '50990', './images/l1.png'),
(2, 'HP 15 Intel Pentium Gold 6405U Processor', '26554', './images/l2.png'),
(3, 'Dell Inspiron 3502 15.6\" (39.62 cms) HD Display ', '25990', './images/l3.png'),
(4, 'Acer Swift 5 14\" (35.56cms) Full HD IPS Display', '91999', './images/l4.png'),
(5, 'HP Pavilion Gaming 10th Gen Intel Core i5 Processor ', '82589', './images/l5.png'),
(6, 'ASUS VivoBook 15 (2020), 39.6 cm HD, Dual Core Intel Celeron N4020', '22990', './images/l6.png'),
(7, 'HP Spectre x360 11th Gen Intel Core i5 Full HD Touchscreen', '112999', './images/l7.png'),
(8, 'Apple MacBook Pro (13-inch, 8GB RAM, 256GB SSD)', '96990', './images/l8.png'),
(9, 'Apple MacBook Pro (16-inch, 16GB RAM, 1TB Storage)', '215990', './images/l9.png');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `product_name`, `product_price`, `product_image`, `categories`) VALUES
(1, 'Samsung Galaxy M31 (128GB Storage, 8GB RAM)', '20000', './images/m1.png', 'mobile'),
(2, 'New Apple iPhone 12 Mini (128GB) - White', '63999', './images/m2.png', 'mobile'),
(3, 'Redmi 9 (Sky Blue, 4GB RAM, 64GB Storage)', '26000', './images/m3.png', 'mobile'),
(4, 'Oppo A31 (6GB RAM,128GB Storage)', '15000', './images/m4.png', 'mobile'),
(5, 'Vivo Y91i (Fusion Black, 2GB RAM, 32GB Storage) ', '18000', './images/m5.png', 'mobile'),
(6, 'Redmi Note 9 (Pebble Grey, 4GB RAM 64GB Storage)', '10999', './images/m6.png', 'mobile'),
(7, 'Samsung Galaxy M51 (Electric Blue, 6GB RAM, 128GB Storage)', '20999', './images/m7.png', 'mobile'),
(8, 'Panasonic Eluga i7 (2GB RAM, 16GB Storage,4000mAh Battery)', '5000', './images/m8.png', 'mobile'),
(9, 'OnePlus Nord 5G (Blue Marble, 12GB RAM, 256GB Storage)', '29999', './images/m9.png', 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `quantity` int(255) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `quantity`, `categories`) VALUES
(1, 'Apple MacBook Pro', 1799, 'product1.png', 0, 'f1'),
(2, 'Sony E7 Headphones', 147, 'product2.png', 0, 'f1'),
(3, 'Sony Xperia Z4', 459, 'product3.png', 0, 'f1'),
(4, 'Samsung Galaxy A50', 278, 'product4.png', 0, 'f1'),
(5, 'Sony Alpha ILCE-6400L 24.', 79990, './images/camera1.png', 0, 'camera'),
(6, 'Sony Alpha ILCE 6000L 24.', 43190, './images/camera2.png', 0, 'camera'),
(7, 'Fujifilm X-A7 24.2 MP', 45000, './images/camera3.png', 0, 'camera'),
(8, 'Sony Alpha ILCE 6000Y 24.', 59065, './images/camera4.png', 0, 'camera'),
(9, 'Sony Alpha ILCE-7M3 Full-', 1300, './images/camera5.png', 0, 'camera'),
(10, 'Sony Alpha ILCE-7C Compac', 14600, './images/camera6.png', 0, 'camera'),
(11, 'Panasonic LUMIX G7 16.00 ', 38990, './images/camera7.png', 0, 'camera'),
(12, 'Fujifilm X-A7 24.2 MP Mir', 4500, './images/camera8.png', 0, 'camera'),
(13, 'Canon EOS 1500D 24.1 Digi', 34152, './images/camera9.png', 0, 'camera'),
(23, 'Fire-Boltt SpO2 Full Touc', 2999, './images/watch1.png', 0, 'watch'),
(24, 'Zebronics Fitness Band Ze', 2151, './images/watch2.png', 0, 'watch'),
(25, 'Fire-Boltt Beast SPO2 1.6', 3999, './images/watch3.png', 0, 'watch'),
(26, 'Noise ColorFit Pro 2- Ind', 2599, './images/watch4.png', 0, 'watch'),
(27, 'Titox Combo of 3 Bullet-S', 1000, './images/watch5.png', 0, 'watch'),
(28, 'Band Red LED Digital Wris', 500, './images/watch6.png', 0, 'watch'),
(29, 'Gusto 2.0 by Helix, Dual ', 800, './images/watch7.png', 0, 'watch'),
(30, 'KPMART M4 Smart Fitness B', 999, './images/watch8.png', 0, 'watch'),
(31, 'Suprico Z02 Unisex Blueto', 1299, './images/watch9.png', 0, 'watch'),
(32, 'Whirlpool 1.5 Ton 3 Star ', 29990, './images/a1.png', 0, 'ac'),
(33, 'Daikin 0.8 Ton 3 Star Spl', 22490, './images/a2.png', 0, 'ac'),
(34, 'Panasonic 1.5 Ton 5 Star ', 39990, './images/a3.png', 0, 'ac'),
(35, 'Voltas 0.75 Ton 2 Star Wi', 16990, './images/a3.png', 0, 'ac'),
(36, 'Blue Star 1.5 Ton 3 Star ', 34290, './images/a5.png', 0, 'ac'),
(37, 'Lloyd 1 Ton 3 Star Non-In', 26990, './images/a6.png', 0, 'ac'),
(38, 'Godrej 1.25 Ton 3 Star In', 26990, './images/a7.png', 0, 'ac'),
(39, 'Sanyo 1 Ton 3 Star Invert', 25990, './images/a8.png', 0, 'ac'),
(40, 'Haier 1 Ton 3 Star Window', 21980, './images/a9.png', 0, 'ac'),
(41, 'boAt Rockerz 550 Over-Ear', 999, './images/headphone1.png', 0, 'headphone'),
(42, 'boAt Rockerz 450 Bluetoot', 899, './images/headphone2.png', 0, 'headphone'),
(43, 'boAt Bassheads 900 On Ear', 750, './images/headphone3.png', 0, 'headphone'),
(44, 'Boult Audio Bass Buds Q2 ', 950, './images/headphone4.png', 0, 'headphone'),
(45, 'boAt Rockerz 400 Bluetoot', 700, './images/headphone5.png', 0, 'headphone'),
(46, 'pTron Pride Lite HBE (Hig', 200, './images/headphone6.png', 0, 'headphone'),
(47, 'JBL C100SI by Harman In-E', 150, './images/headphone7.png', 0, 'headphone'),
(48, 'pTron Tangent Lite Blueto', 175, './images/headphone8.png', 0, 'headphone'),
(49, 'Redgear Cloak Wired RGB G', 800, './images/headphone9.png', 0, 'headphone'),
(50, 'ALEXA SMART HOME', 4298, './images/alexa.png', 0, 'smart'),
(51, 'SMART LOCK', 1099, './images/lock.png', 0, 'smart'),
(52, 'SMART PLUG', 599, './images/plug.png', 0, 'smart'),
(53, 'SMART LIGHT', 1999, './images/light.png', 0, 'smart'),
(54, 'CCTV ', 2999, './images/cctv.png', 0, 'smart'),
(55, 'SMART HEALTH DEVICE', 1999, './images/helth.png', 0, 'smart'),
(56, 'Mi 4A PRO 80 cm (32 inche', 14999, './images/t1.png', 0, 'tv'),
(57, 'LG 80 cm (32 inches) HD R', 16999, './images/t2.png', 0, 'tv'),
(58, 'eAirtec 61 cms (24 inches', 7599, './images/l3.png', 0, 'tv'),
(59, 'OnePlus 80 cm (32 inches)', 15999, './images/t4.png', 0, 'tv'),
(60, 'Samsung 80 cm (32 Inches)', 16999, './images/t5.png', 0, 'tv'),
(61, 'TCL 100 cm (40 inches) Fu', 20499, './images/t6.png', 0, 'tv'),
(62, 'VW 80 cm (32 inches) HD R', 11999, './images/t7.png', 0, 'tv'),
(63, 'Panasonic 100 cm (40 inch', 24999, './images/t8.png', 0, 'tv'),
(64, 'Sony Bravia 108 cm (43 in', 49990, './images/t9.png', 0, 'tv'),
(65, 'Samsung Galaxy M31 (128GB', 20000, './images/m1.png', 0, 'mobile'),
(66, 'New Apple iPhone 12 Mini ', 63999, './images/m2.png', 0, 'mobile'),
(67, 'Redmi 9 (Sky Blue, 4GB RA', 26000, './images/m3.png', 0, 'mobile'),
(68, 'Oppo A31 (6GB RAM,128GB S', 15000, './images/m4.png', 0, 'mobile'),
(69, 'Vivo Y91i (Fusion Black, ', 18000, './images/m5.png', 0, 'mobile'),
(70, 'Redmi Note 9 (Pebble Grey', 10999, './images/m6.png', 0, 'mobile'),
(71, 'Samsung Galaxy M51 (Elect', 20999, './images/m7.png', 0, 'mobile'),
(72, 'Panasonic Eluga i7 (2GB R', 5000, './images/m8.png', 0, 'mobile'),
(73, 'OnePlus Nord 5G (Blue Mar', 29999, './images/m9.png', 0, 'mobile'),
(74, 'Lenovo IdeaPad L340 9th G', 50990, './images/l1.png', 0, 'laptop'),
(75, 'HP 15 Intel Pentium Gold ', 26554, './images/l2.png', 0, 'laptop'),
(76, 'Dell Inspiron 3502 15.6\" ', 25990, './images/l3.png', 0, 'laptop'),
(77, 'Acer Swift 5 14\" (35.56cm', 91999, './images/l4.png', 0, 'laptop'),
(78, 'HP Pavilion Gaming 10th G', 82589, './images/l5.png', 0, 'laptop'),
(79, 'ASUS VivoBook 15 (2020), ', 22990, './images/l6.png', 0, 'laptop'),
(80, 'HP Spectre x360 11th Gen ', 112999, './images/l7.png', 0, 'laptop'),
(81, 'Apple MacBook Pro (13-inc', 96990, './images/l8.png', 0, 'laptop'),
(82, 'Apple MacBook Pro (16-inc', 215990, './images/l9.png', 0, 'laptop'),
(83, 'Dell Inspiron 5408 14 inc', 68901, 'https://images-na.ssl-images-amazon.com/images/I/518ha6z%2B9PL._SL1080_.jpg', 1, 'home'),
(84, 'New Apple iPhone 12 Pro (', 123400, 'https://images-na.ssl-images-amazon.com/images/I/71YlH-4MUQL._SX679_.jpg', 1, 'home'),
(85, 'Nikon D7500 20.9MP Digita', 78999, 'https://images-na.ssl-images-amazon.com/images/I/71YlH-4MUQL._SX679_.jpg\r\n', 1, 'home');

-- --------------------------------------------------------

--
-- Table structure for table `smart`
--

CREATE TABLE `smart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smart`
--

INSERT INTO `smart` (`id`, `product_name`, `product_price`, `product_image`, `categories`) VALUES
(1, 'ALEXA SMART HOME', 4298, './images/alexa.png', 'smart'),
(2, 'SMART LOCK', 1099, './images/lock.png', 'smart'),
(3, 'SMART PLUG', 599, './images/plug.png', 'smart'),
(4, 'SMART LIGHT', 1999, './images/light.png', 'smart'),
(5, 'CCTV ', 2999, './images/cctv.png', 'smart'),
(6, 'SMART HEALTH DEVICE', 1999, './images/helth.png', 'smart');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `product_name`, `product_price`, `product_image`, `categories`) VALUES
(1, 'Mi 4A PRO 80 cm (32 inches) HD Ready Android LED TV ', '14999', './images/t1.png', 'tv'),
(2, 'LG 80 cm (32 inches) HD Ready Smart LED TV', '16999', './images/t2.png', 'tv'),
(3, 'eAirtec 61 cms (24 inches) HD Ready LED TV 24DJ (Black)', '7599', './images/l3.png', 'tv'),
(4, 'OnePlus 80 cm (32 inches) Y Series HD Ready LED Smart Android', '15999', './images/t4.png', 'tv'),
(5, 'Samsung 80 cm (32 Inches) Wondertainment Series HD Ready LED', '16999', './images/t5.png', 'tv'),
(6, 'TCL 100 cm (40 inches) Full HD Certified Android Smart LED TV', '20499', './images/t6.png', 'tv'),
(7, 'VW 80 cm (32 inches) HD Ready LED Smart TV', '11999', './images/t7.png', 'tv'),
(8, 'Panasonic 100 cm (40 inches) Full HD Android Smart LED TV', '24999', './images/t8.png', 'tv'),
(9, 'Sony Bravia 108 cm (43 inches) 4K Ultra HD Smart Android LED TV', '49990', './images/t9.png', 'tv');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `product_name`, `product_price`, `product_image`, `categories`) VALUES
(1, 'Fire-Boltt SpO2 Full Touc', 2999, './images/watch1.png', 'watch'),
(2, 'Zebronics Fitness Band Ze', 2151, './images/watch2.png', 'watch'),
(3, 'Fire-Boltt Beast SPO2 1.6', 3999, './images/watch3.png', 'watch'),
(4, 'Noise ColorFit Pro 2- Ind', 2599, './images/watch4.png', 'watch'),
(5, 'Titox Combo of 3 Bullet-S', 1000, './images/watch5.png', 'watch'),
(6, 'Band Red LED Digital Wris', 500, './images/watch6.png', 'watch'),
(7, 'Gusto 2.0 by Helix, Dual ', 800, './images/watch7.png', 'watch'),
(8, 'KPMART M4 Smart Fitness B', 999, './images/watch8.png', 'watch'),
(9, 'Suprico Z02 Unisex Blueto', 1299, './images/watch9.png', 'watch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headphone`
--
ALTER TABLE `headphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smart`
--
ALTER TABLE `smart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac`
--
ALTER TABLE `ac`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `headphone`
--
ALTER TABLE `headphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `smart`
--
ALTER TABLE `smart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
