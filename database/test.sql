-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 11:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_schedule`
--

CREATE TABLE `appointment_schedule` (
  `appointment_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `first_name` int(11) NOT NULL,
  `last_name` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `caterer_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `food_package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `caterer_blogs`
--

CREATE TABLE `caterer_blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_caterer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `tags` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `caterer_info`
--

CREATE TABLE `caterer_info` (
  `caterer_id` int(11) NOT NULL,
  `owner's_name` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `date_founded` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catering_sales`
--

CREATE TABLE `catering_sales` (
  `caterer_id` int(11) NOT NULL,
  `no_of_transactions` int(11) NOT NULL,
  `paymentsby_gcash` int(11) NOT NULL COMMENT 'to be populated by a trigger mechanism',
  `paymentsby_card` int(11) NOT NULL COMMENT 'to be populated by a trigger mecahnism',
  `total_sales` double(10,2) NOT NULL COMMENT 'to be populated by a procedural method'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `caterer_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `feedback_message` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_packages`
--

CREATE TABLE `food_packages` (
  `food_package_id` int(11) NOT NULL,
  `food_pckgen_info` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `servings_min` int(11) NOT NULL,
  `servings_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This is where the php will display specific information about food packages';

-- --------------------------------------------------------

--
-- Table structure for table `food_pck_gen_info`
--

CREATE TABLE `food_pck_gen_info` (
  `food_pckgeninfo_id` int(11) NOT NULL,
  `food_caterer_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `details` varchar(512) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `phone`, `address`, `email`, `total_quantity`, `total_price`, `created_at`) VALUES
(9, 'Juan', 'Tamad', '09519322047', 'Sto. Domingo Albay', 'diwata@pares.com', 3, 9500.00, '2024-05-14 20:48:25'),
(10, 'Del', 'Rosario', '8765432190', 'Biringan', 'welcome@biringan.com', 5, 988.00, '2024-05-14 20:50:52'),
(11, 'Del', 'Rosario', '8765432190', 'Biringan', 'welcome@biringan.com', 4, 1339.00, '2024-05-14 20:51:52'),
(12, 'Jerome', 'Olavidez', '2015550123', 'diwatapares', 'diwata@pares.com', 6, 1195.00, '2024-05-14 20:57:50'),
(13, 'Pedro', 'Penduko', '09094999150', 'Italy St. Quiapo Tondo', 'youtube@instagram.facbook', 3, 345.00, '2024-05-14 21:01:43'),
(15, 'Jerome', 'Dimagiba', '09519322047', 'Sto. Domingo Albay', 'diwata@pares.com', 7, 3020.00, '2024-05-15 03:59:04'),
(16, 'Juan', 'Tamad', '09519322047', 'Sto. Domingo Albay', 'diwata@pares.com', 4, 603.00, '2024-05-15 04:04:43'),
(19, 'Jerome', 'Olavidez', '09519322047', 'dasddaads', 'jeromebansale.lolong@bicol-u.edu.ph', 4, 603.00, '2024-05-15 04:20:03'),
(20, 'Juan', 'Tamad', '09519322047', 'Sto. Domingo Albay', 'diwata@pares.com', 2, 0.00, '2024-05-15 04:25:51'),
(21, 'Del', 'Rosario', '08765432190', 'Biringan', 'welcome@biringan.com', 1, 550.00, '2024-05-15 04:36:33'),
(22, 'Pedro', 'Penduko', '09094999150', 'Italy St. Quiapo Tondo', 'youtube@instagram.facbook', 5, 2450.00, '2024-05-15 05:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `payment_id` int(11) NOT NULL,
  `mode_of_payment` varchar(100) NOT NULL,
  `card_name` varchar(50) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `card_no` varchar(20) DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `gcash_no` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `fk_payment_id` (`payment_id`),
  ADD KEY `fk_caterer_id` (`caterer_id`),
  ADD KEY `food_package_id` (`food_package_id`);

--
-- Indexes for table `caterer_blogs`
--
ALTER TABLE `caterer_blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `fk_client_id` (`blog_caterer_id`);

--
-- Indexes for table `caterer_info`
--
ALTER TABLE `caterer_info`
  ADD PRIMARY KEY (`caterer_id`);

--
-- Indexes for table `catering_sales`
--
ALTER TABLE `catering_sales`
  ADD UNIQUE KEY `caterer_id` (`caterer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `caterer_id` (`caterer_id`),
  ADD KEY `fk_appointment_id` (`appointment_id`);

--
-- Indexes for table `food_packages`
--
ALTER TABLE `food_packages`
  ADD PRIMARY KEY (`food_package_id`),
  ADD UNIQUE KEY `food_pckgen_info` (`food_pckgen_info`);

--
-- Indexes for table `food_pck_gen_info`
--
ALTER TABLE `food_pck_gen_info`
  ADD PRIMARY KEY (`food_pckgeninfo_id`),
  ADD KEY `fk_foodcaterer_id` (`food_caterer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `caterer_blogs`
--
ALTER TABLE `caterer_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `caterer_info`
--
ALTER TABLE `caterer_info`
  MODIFY `caterer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_packages`
--
ALTER TABLE `food_packages`
  MODIFY `food_package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_pck_gen_info`
--
ALTER TABLE `food_pck_gen_info`
  MODIFY `food_pckgeninfo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  ADD CONSTRAINT `appointment_schedule_ibfk_1` FOREIGN KEY (`food_package_id`) REFERENCES `food_packages` (`food_package_id`),
  ADD CONSTRAINT `fk_caterer_id` FOREIGN KEY (`caterer_id`) REFERENCES `caterer_info` (`caterer_id`),
  ADD CONSTRAINT `fk_payment_id` FOREIGN KEY (`payment_id`) REFERENCES `payment_info` (`payment_id`);

--
-- Constraints for table `caterer_blogs`
--
ALTER TABLE `caterer_blogs`
  ADD CONSTRAINT `fk_client_id` FOREIGN KEY (`blog_caterer_id`) REFERENCES `caterer_info` (`caterer_id`);

--
-- Constraints for table `catering_sales`
--
ALTER TABLE `catering_sales`
  ADD CONSTRAINT `catering_sales_ibfk_1` FOREIGN KEY (`caterer_id`) REFERENCES `caterer_info` (`caterer_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`caterer_id`) REFERENCES `caterer_info` (`caterer_id`),
  ADD CONSTRAINT `fk_appointment_id` FOREIGN KEY (`appointment_id`) REFERENCES `appointment_schedule` (`appointment_id`);

--
-- Constraints for table `food_packages`
--
ALTER TABLE `food_packages`
  ADD CONSTRAINT `food_packages_ibfk_1` FOREIGN KEY (`food_pckgen_info`) REFERENCES `food_pck_gen_info` (`food_pckgeninfo_id`);

--
-- Constraints for table `food_pck_gen_info`
--
ALTER TABLE `food_pck_gen_info`
  ADD CONSTRAINT `fk_foodcaterer_id` FOREIGN KEY (`food_caterer_id`) REFERENCES `caterer_info` (`caterer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
