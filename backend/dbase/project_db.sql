-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 04:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `acc_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`acc_id`, `username`, `password`) VALUES
(5, 'jcdavid', '$2y$10$RbHi2H0s2dMLRAOKexB8tO/xacxQ4P9gne9omm5rZY00qBKtNjIia'),
(6, 'jhyra', '$2y$10$M1jqHIIzPm4pjS9Jj.ToqO1KI1PT3kN.JJu4JWSbdk23bGWGFUVP.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_details`
--

CREATE TABLE `tbl_account_details` (
  `acc_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_account_details`
--

INSERT INTO `tbl_account_details` (`acc_id`, `first_name`, `middle_name`, `last_name`, `address`, `contact`) VALUES
(5, 'Jc', 'Domingo', 'David', 'Montecillo subd', '09565535401'),
(6, 'jhy', '', 'mariano', 'Holycross', '09512847442');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `item_id` int(11) DEFAULT NULL,
  `acc_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price` int(11) DEFAULT NULL,
  `item_qnty` int(11) NOT NULL DEFAULT 1,
  `item_src` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`item_id`, `acc_id`, `item_name`, `item_price`, `item_qnty`, `item_src`) VALUES
(1, 5, 'Razer Basilisk V3 Pro - Black', 1423, 2, '../products/Razer Basilisk V3 Pro - Black.jpg'),
(3, 5, 'Razer Kishi V2 Pro for Android (Xbox)', 2290, 1, '../products/Razer Kishi V2 Pro for Android (Xbox).jpg'),
(4, 5, 'Razer BlackWidow V4 75% - US - White', 2690, 1, '../products/Razer BlackWidow V4 Pro - Orange Switch - US.jpg'),
(1, 6, 'Razer x *A Bathing Ape® Opus', 2000, 1, '../products/razer headset.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `review_id` int(11) NOT NULL,
  `review_name` varchar(255) DEFAULT NULL,
  `review_item_name` varchar(255) DEFAULT NULL,
  `review_message` varchar(255) DEFAULT NULL,
  `review_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`review_id`, `review_name`, `review_item_name`, `review_message`, `review_date`) VALUES
(5, 'Jc David', 'Keyboard', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque fugiat, amet obcaecati maxime aliquam placeat accusamus ipsum, dolore, nulla commodi soluta natus quis ratione veniam molestiae laboriosam voluptatem nihil iste?', '2023-12-12'),
(6, 'Jc David', 'Mouse', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque fugiat, amet obcaecati maxime aliquam placeat accusamus ipsum, dolore, nulla commodi soluta natus quis ratione veniam molestiae laboriosam voluptatem nihil iste?', '2023-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `tbl_account_details`
--
ALTER TABLE `tbl_account_details`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_account_details`
--
ALTER TABLE `tbl_account_details`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
