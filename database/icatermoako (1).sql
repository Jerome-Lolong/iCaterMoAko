-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 16, 2024 at 05:23 PM
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
-- Table structure for table `application_feedback`
--

CREATE TABLE `application_feedback` (
  `application_feedback_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `application_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='comments as they use the ';

-- --------------------------------------------------------

--
-- Table structure for table `appointment_schedule`
--

CREATE TABLE `appointment_schedule` (
  `appointment_id` int(11) NOT NULL,
  `caterer_id` int(11) NOT NULL,
  `food_order_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `food_package_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `number_of_guests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `caterer_info`
--

CREATE TABLE `caterer_info` (
  `caterer_id` int(11) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `caterer_image_path` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `date_founded` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caterer_info`
--

INSERT INTO `caterer_info` (`caterer_id`, `owner_name`, `business_name`, `caterer_image_path`, `address`, `tin`, `date_founded`, `email`, `password`) VALUES
(1, 'Juan Dela Cruz', 'Juan\'s Bistro', NULL, '#22, Bitano Legazpi City', '123-456-7890', '2024-05-16 13:00:00', 'juanbistro@gmail.com', '1234567890'),
(2, 'Jose Delos Santos', 'Ang Pinakamasarap na Catering', NULL, '#11, Gogon, Legazpi City', '234-567=8901', '2024-05-16 10:09:19', 'pinakamasarap@gmail.com', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `event_information`
--

CREATE TABLE `event_information` (
  `customer_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_information`
--

INSERT INTO `event_information` (`customer_id`, `last_name`, `first_name`, `contact_no`, `event_name`, `event_location`, `event_date`, `description`, `event_time`) VALUES
(1, 'Reyes', 'Anabel', '09123456789', 'A Seminar Related to IT Trends', 'Proxy by the Oriental', '2024-05-29', 'wertyuiopasdfghjkl;zxcvbnm,', '13:00:00'),
(2, 'Santos', 'Joselito', '09987654321', 'A Meeting of the Executive and Managers of Santos Company', 'Santos COmpany Headquarters', '2024-05-26', 'mnbvcxzlkjhgfdsapoiuytrq', '15:00:00');

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
(1, 1, 'Litson Baboy', 'qwertyu[lkjhgfdsazxcvbnm', '', 2, 20),
(2, 2, 'Assorted Gulay', 'mmnbvcxzlkjhgfdsapoiuytrewq', '', 8, 20);

-- --------------------------------------------------------

--
-- Table structure for table `food_pck_gen_info`
--

CREATE TABLE `food_pck_gen_info` (
  `food_pckgeninfo_id` int(11) NOT NULL,
  `food_caterer_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `details` varchar(512) NOT NULL,
  `price` double(10,2) NOT NULL,
  `orders_taken` int(11) NOT NULL,
  `sales_per_foodpackage` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_pck_gen_info`
--

INSERT INTO `food_pck_gen_info` (`food_pckgeninfo_id`, `food_caterer_id`, `package_name`, `details`, `price`, `orders_taken`, `sales_per_foodpackage`) VALUES
(1, 1, 'Filipino Fiesta', 'qwertyui[asdfghjzxcvbnm', 15000.00, 6, 90000.00),
(2, 1, 'Corporate Foods', 'mnbvcxzlkjhgfdsapoiuytrewq', 20000.00, 10, 200000.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_caterer_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `gcash_no` varchar(12) DEFAULT NULL,
  `amount_paid` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_feedback`
--
ALTER TABLE `application_feedback`
  ADD PRIMARY KEY (`application_feedback_id`),
  ADD KEY `fk_customer_id` (`customer_id`);

--
-- Indexes for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `fk_payment_id` (`payment_id`),
  ADD KEY `fk_caterer_id` (`caterer_id`),
  ADD KEY `food_package_id` (`food_package_id`),
  ADD KEY `fk_order_id` (`food_order_id`),
  ADD KEY `fk_event_id` (`event_id`);

--
-- Indexes for table `caterer_info`
--
ALTER TABLE `caterer_info`
  ADD PRIMARY KEY (`caterer_id`);

--
-- Indexes for table `event_information`
--
ALTER TABLE `event_information`
  ADD PRIMARY KEY (`customer_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pay_event_id` (`event_id`),
  ADD KEY `fk_order_caterer_id` (`order_caterer_id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_feedback`
--
ALTER TABLE `application_feedback`
  MODIFY `application_feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `caterer_info`
--
ALTER TABLE `caterer_info`
  MODIFY `caterer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_information`
--
ALTER TABLE `event_information`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_packages`
--
ALTER TABLE `food_packages`
  MODIFY `food_package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_pck_gen_info`
--
ALTER TABLE `food_pck_gen_info`
  MODIFY `food_pckgeninfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `application_feedback`
--
ALTER TABLE `application_feedback`
  ADD CONSTRAINT `fk_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `event_information` (`customer_id`);

--
-- Constraints for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  ADD CONSTRAINT `appointment_schedule_ibfk_1` FOREIGN KEY (`food_package_id`) REFERENCES `food_packages` (`food_package_id`),
  ADD CONSTRAINT `fk_caterer_id` FOREIGN KEY (`caterer_id`) REFERENCES `caterer_info` (`caterer_id`),
  ADD CONSTRAINT `fk_event_id` FOREIGN KEY (`event_id`) REFERENCES `event_information` (`customer_id`),
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`food_order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_payment_id` FOREIGN KEY (`payment_id`) REFERENCES `payment_info` (`payment_id`);

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

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_caterer_id` FOREIGN KEY (`order_caterer_id`) REFERENCES `caterer_info` (`caterer_id`),
  ADD CONSTRAINT `fk_pay_event_id` FOREIGN KEY (`event_id`) REFERENCES `event_information` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
