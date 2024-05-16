-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:25 AM
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
-- Database: `icatermoako`
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

--
-- Dumping data for table `appointment_schedule`
--

INSERT INTO `appointment_schedule` (`appointment_id`, `event_name`, `first_name`, `last_name`, `description`, `location`, `appointment_date`, `number_of_guests`, `caterer_id`, `payment_id`, `food_package_id`) VALUES
(6, 'BIRTHDAY', 0, 0, 0, 0, '2024-05-01', 45, 1, 1, 1);

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
  `owner_name` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `date_founded` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `caterer_image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caterer_info`
--

INSERT INTO `caterer_info` (`caterer_id`, `owner_name`, `business_name`, `address`, `tin`, `date_founded`, `email`, `password`, `caterer_image_path`) VALUES
(1, 'Test Name', 'Test Business', 'Test, Address City', '001', '0000-00-00 00:00:00', 'ownername@email.com', 'ownerpass', './assets/img/chef/chef-1.jpg'),
(2, 'Test Name', 'Test Business 2', 'Test, Address City', '002', '0000-00-00 00:00:00', 'testemail@gmail.com', 'testpass', './assets/img/chef/chef-2.jpg');

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

--
-- Dumping data for table `food_packages`
--

INSERT INTO `food_packages` (`food_package_id`, `food_pckgen_info`, `name`, `description`, `imagepath`, `servings_min`, `servings_max`) VALUES
(1, 1, 'Birthday Pack', 'Description test.', 'D:xampphtdocsiCaterMoAko2assetsimgmenuitem-21.jpg', 3, 5);

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

--
-- Dumping data for table `food_pck_gen_info`
--

INSERT INTO `food_pck_gen_info` (`food_pckgeninfo_id`, `food_caterer_id`, `package_name`, `details`, `price`) VALUES
(1, 1, 'Lumpiang Shanghai', 'N/A', 300.00);

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
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`payment_id`, `mode_of_payment`, `card_name`, `bank`, `card_no`, `exp_date`, `gcash_no`) VALUES
(1, 'CASH', 'N/A', 'N/A', 'N/A', '0000-00-00', 'N/A');

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `caterer_blogs`
--
ALTER TABLE `caterer_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `caterer_info`
--
ALTER TABLE `caterer_info`
  MODIFY `caterer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_packages`
--
ALTER TABLE `food_packages`
  MODIFY `food_package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_pck_gen_info`
--
ALTER TABLE `food_pck_gen_info`
  MODIFY `food_pckgeninfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
