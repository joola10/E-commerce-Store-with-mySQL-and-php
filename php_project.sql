-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2024 at 02:05 AM
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
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int(11) NOT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `user_city` varchar(100) DEFAULT NULL,
  `user_address` varchar(256) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cost`, `order_status`, `user_id`, `user_phone`, `user_city`, `user_address`, `order_date`) VALUES
(1, 58.00, 'on_hold', 1, '0', 'demo', 'demo', '2024-10-15 00:01:49'),
(2, 274.00, 'on_hold', 1, '990', 'Demo 1 Addy', 'Demo1 Addy', '2024-10-15 00:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `user_id`, `order_date`) VALUES
(1, 1, 2, 'Crew T-Shirt', 'tops1.avif', 8.00, 1, 1, '2024-10-15 00:01:49'),
(2, 1, 6, 'Icon Polo', 'tops6.avif', 15.00, 1, 1, '2024-10-15 00:01:49'),
(3, 1, 1, 'Bret Hoodie', 'tops2.avif', 34.00, 1, 1, '2024-10-15 00:01:49'),
(4, 2, 18, 'High-Raise Leggings', 'bottom8.avif', 44.00, 3, 1, '2024-10-15 00:03:19'),
(5, 2, 21, 'Women\'s X4 Training Shoes', 'shoes1.jpeg', 139.00, 1, 1, '2024-10-15 00:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_quantity`, `product_category`, `product_image`, `product_price`) VALUES
(1, 'Bret Hoodie', 49, 'tops', 'tops2.avif', 34.99),
(2, 'Crew T-Shirt', 29, 'tops', 'tops1.avif', 8.99),
(3, 'Camo Zip-Up Hoodie', 80, 'tops', 'tops3.avif', 34.99),
(4, 'V-Neck Sweater', 60, 'tops', 'tops4.avif', 44.49),
(5, 'Seamless Henley', 30, 'tops', 'tops5.avif', 18.00),
(6, 'Icon Polo', 49, 'tops', 'tops6.avif', 15.00),
(7, 'Relax Graphic Tee', 40, 'tops', 'tops7.avif', 29.95),
(8, 'Flannel T-Shirt', 50, 'tops', 'tops8.avif', 39.95),
(9, 'Crew Sweatshirt', 60, 'tops', 'tops9.avif', 31.96),
(10, 'Cable-Knit Sweater', 30, 'tops', 'tops10.avif', 59.95),
(11, 'Fleece Jogger', 60, 'bottoms', 'bottom1.avif', 23.49),
(12, 'Medium Wash Baggy Jeans', 10, 'bottoms', 'bottom2.avif', 34.99),
(13, 'Fleece Wide-Leg Pants', 30, 'bottoms', 'bottom3.avif', 44.95),
(14, 'Flannel Pajama Pants', 30, 'bottoms', 'bottom4.avif', 34.95),
(15, 'Fleece Joggers', 50, 'bottoms', 'bottom5.avif', 44.95),
(16, 'Black Baggy Jeans', 50, 'bottoms', 'bottom6.avif', 49.95),
(17, 'Active Shorts', 40, 'bottoms', 'bottom7.avif', 39.95),
(18, 'High-Raise Leggings', 67, 'bottoms', 'bottom8.avif', 44.95),
(19, 'Medium Wash Carpenter Jeans', 40, 'bottoms', 'bottom9.avif', 59.95),
(20, 'Taped Super Baggy Jeans', 100, 'bottoms', 'bottom10.avif', 79.95),
(21, 'Women\'s X4 Training Shoes', 19, 'shoes', 'shoes1.jpeg', 139.99),
(22, 'RS-X Peb Running Shoes', 30, 'shoes', 'shoes2.jpeg', 69.56),
(23, 'Men\'s Micro G Valsetz Tactical Boots', 20, 'shoes', 'shoes3.jpeg', 97.80),
(24, 'Jordan 4 Retro Bred', 10, 'shoes', 'shoes4.jpeg', 397.51),
(25, 'Dunk Low Retro', 20, 'shoes', 'shoes5.jpeg', 94.87),
(26, 'V8 Sneaker', 10, 'shoes', 'shoes6.jpeg', 87.99),
(27, 'Air Max 270', 10, 'shoes', 'shoes7.jpeg', 149.88),
(28, 'Jordan 1 Retro High Dior', 10, 'shoes', 'shoes8.jpeg', 7673.82);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `UX_Constraint` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
