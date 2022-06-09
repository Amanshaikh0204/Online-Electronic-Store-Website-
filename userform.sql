-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 02:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('Aman@123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(50) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(50) NOT NULL,
  `Address` text NOT NULL,
  `Pay_Mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(2, 'Anuj Yadav', 9876877654, 'Kanjurmarg', 'Online'),
(3, 'Aman Shaikh', 9876543213, 'Kanjurmarg', 'Online'),
(5, 'Anuj Yadav', 9876877654, 'Bhandup', 'Online'),
(7, 'Ritik yadav', 9987654321, 'Bhandup', 'Online'),
(8, 'Roshan yadav', 9876543213, 'Nahur', 'Online'),
(10, 'Aman Shaikh', 9876877654, 'CST', 'Online'),
(11, 'Aman Shaikh', 9876543210, 'Kanjurmarg', 'Online'),
(12, 'Aman Shaikh', 9876543210, 'Bhandup', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(3, 'Aman', 'aman.ms@somaiya.edu', '$2y$10$ZlgZQ1TlBAS.pk1Vs4kqCenEpO9ELAHXq3RqCrIz2rvtrJWDAnxWS', 0, 'verified'),
(4, 'Anuj', 'yadavanuj517@gmail.com', '$2y$10$cHu31WifWuc2PGFw9Ky4nO0gnQjNyUVoPbTnMPFGw79xDdqoGJzD2', 0, 'verified'),
(6, 'Ritik Yadav', 'ritik.y@somaiya.edu', '$2y$10$nyQH9QYjhGKupiPd20H3b.Nw76W7.whyOnxZ7KBg59WA1X3XTuXt6', 667955, 'notverified'),
(7, 'Ashif Shaikh', 'ashifshaikh08@gmail.com', '$2y$10$ASoAYO4uGEc2.rFKlsR7yeaSPPYlAvKNkxtmrh6r1XSbk0yyyljZe', 0, 'verified'),
(8, 'Roshan', 'amanshaikh0204@gmail.com', '$2y$10$Qx9b9gvJ99fKuHXe3FlnROWY.8xq03lyjYQKm13.1WJBrFOdWFoKi', 0, 'verified'),
(9, 'Akash Yadav', 'akash087@gmail.com', '$2y$10$8Lt5L23X0XBXbwvbx24S0OU1BovILQSRvZo.6G6wyRhy3O.xF86zG', 379913, 'notverified'),
(10, '123456', 'abc@gmail.com', '$2y$10$mMGLeZxvluWk5OhP6ApUk.T1plAn.O7oNC5aKLEMpAAPbiR4C5OQO', 188807, 'notverified');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(50) NOT NULL,
  `Item_Name` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL,
  `Quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(1, 'Redmi Note 10 Pro Max', 19999, 1),
(2, 'One Plus Nord 2 5G', 35999, 1),
(3, 'JBL C100SI In Ear Wired', 599, 1),
(4, 'One Plus Nord 2 5G', 35999, 1),
(5, 'Bajaj Rex Mixer', 3800, 1),
(1, 'One Plus Nord 2 5G', 35999, 1),
(2, 'Redmi Note 10 Pro Max', 19999, 1),
(3, 'boAt Rockerz 185 Bluetooth', 999, 1),
(4, 'Asus Vivobook F571GT', 57999, 1),
(5, 'One Plus Nord 2 5G', 35999, 1),
(6, 'Redmi GPS Watch', 3999, 1),
(7, 'One Plus Nord 2 5G', 35999, 1),
(7, 'Realme 8 Pro', 18999, 1),
(8, 'Bajaj Rex Mixer', 3800, 1),
(9, 'One Plus Nord 2 5G', 35999, 1),
(9, 'KENT ULTRA Water Purifier', 7200, 1),
(10, 'boAt Rockerz 185 Bluetooth', 999, 1),
(11, 'Redmi Note 10 Pro Max', 19999, 1),
(12, 'boAt Rockerz 185 Bluetooth', 999, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
