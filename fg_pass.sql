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
-- Database: `fg_pass`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `cpassword` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `status` varchar(255) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `email`, `password`, `cpassword`, `token`, `status`) VALUES
(1, 'Diya', 'diya@gmail.com', '$2y$10$iZl3RLOzGmevxMZhxbjQEuJDYOpVayiYE/8k3AjDgnDnwQBmS.8.2', '$2y$10$MXjqXwNegJBybUliQiqnBeo/0BFhwnWerxYR1y5n84H.oB5WdZjki', '', ''),
(2, 'diya', 'ka@gmail.com', '$2y$10$8B2Yf.Bc4YEx5fLj80MyiOyDlBjTfv0M6mXJm5IwSirh5GCmMMwbC', '$2y$10$ZKoIHtc3Wo3mGHbLFlmnU.zTXi/RwySAC3alF.Bf0O8x56CB/Daf6', 'c311fc297afcae74840b9a566399d6', 'inactive'),
(5, 'diya_22', '20ceubg008@ddu.ac.in', '$2y$10$s6QpfBhx9948VVwSwv9c9.bSepiXEYb08/8frEoq8cpyCTBnRLG3O', '$2y$10$BGJnPiv89ccYoIwmVOa45OrWdTBMSKihCYXzzSYXjBDd6.1sp82cG', '12201e6bcfeb7da444364e65b297c8', 'inactive'),
(6, 'krish', 'krishlad0903@gmail.com', '$2y$10$oh72Et3Z4t/XirIKZI1RCusxzVDaTWyRZY1LMNbLMw3Zb86UpkRN2', '$2y$10$hCRHXsTPsdJ1KNgh3DSsXeJ3ebcOF9VkmeNqrIHH/4SFJLkwCJijK', '25870a41e5eb944bdb5d981cd60cab', 'inactive'),
(7, 'hiral', 'hiralladhiral@gmail.com', '$2y$10$lJYuCXDgk1MKHXv5E6arZu6hqbKkN.zEhyJ7Hi5SA.Y5lQ3Gl6Rma', '$2y$10$peldsD9fdWfNvKT3Z8PaVOyYCHzI.m/omFArCyZw6/3ZD2YS1MfaG', '77e5f528cee30857a4b4521c9b065e', 'inactive'),
(8, 'b', 'th@gmail.com', '$2y$10$U5S44m5GKK8EfSuphj/oeuy7cwuwNv9mNTkxZvwJuXuEnMs6odd8u', '$2y$10$VjfNlF7sdwoYi5fpvgUZA.moEQiMsIGQaONFkqKKfr.gA0AjR9Yh6', '66a15f6b759ce5760bf275c8599464', 'inactive'),
(9, 'lll', 'lad@gmail.com', '$2y$10$njbwa6Jo8HpMJDB04czGQ.bA066tSGxOwnjs16hdIzduWrTBXjq/C', '$2y$10$p/tNLeBZauSXtiMkdJeNwezzffn2Q6xoPeNXamN09m2l.jSV6xSL2', 'e33bef2ba05bf11b36363d63ef81d4', 'inactive'),
(10, 'oo', 'ko@gmail.com', '$2y$10$/7J3pGtaLOfdyx5LUvbRa.6u.3fS7PbFFMygAsIlJFoN.u8ET8fAW', '$2y$10$XcNjOf8ytM5wQlmyAN0yR.f7H7DTtNmwXrPMOTG5vXW0SyAg2rlA.', '4bc175340bb9cfc50172293e192fdd', 'inactive'),
(11, 'rajesh', 'lad.rajesh57@gmail.com', '$2y$10$Sz1d5tcvCexFi4GMty0IUut7HElYNafE4imUudQ1DrB.FcAHi3Atq', '$2y$10$N5iviBLOOfJ/.5tabSHojOXX1hFb57vlFTypFVbAL6KjxgqLekBHS', '35081683a514ae9b78f314c5a2b50e', 'inactive'),
(12, 'tt', 'diy@gmail.com', '$2y$10$nVrgZC9N8TcugxvLTUtJj.hfHF6H9FuszRzSlKqiSLO9vXSOI8vj.', '$2y$10$yXYESyOfqUfs0XU.CRpeZuUTdpTQrCX7WGbsRnodxPK4G2NBlcvpu', '053b3e22c913980e88183dd34c763f', 'inactive'),
(14, 'diya thakor', 'diyathakor2003@gmail.com', '$2y$10$m1Ty9B4qmdiP61rL/es8oO450.OjUv5rdjxKO1R.zAp8E/N26A.R2', '$2y$10$zh4zTqHThyfaSfJj1WFwFOBNyKk3vextXlXTWjmoawhjgsoX.i6pW', 'a46c0fcd5800f6e2f755994ecbd3cf', 'inactive'),
(20, 'megha', 'm@gmail.com', '$2y$10$USnwx0LB6toJGUbBnlga0O5fRK4P5Sdv9NuCowxVd3.aD8euYHTOO', '$2y$10$AG9YZ4cEhs1DQm5gTSLVu.CPRBdStygeB8wo3JSmbBbiCW33I.rdS', 'b75011438c705b6a125c30fcc81dd0', 'inactive'),
(31, 'vaibhavi', 'laddiya22@gmail.com', '$2y$10$YUiMnn32yGS/0KENA7ujju79Tjv7Qps4stOSpxhHWxHlc/f8uzQhO', '$2y$10$XyUIFfRBieaWW48hbYiF7eT.rdycSdFXVVovS0yXaBnrOyQecwfne', '2fbff0fc2f56d791d6863e7bb10597', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
