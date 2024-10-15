-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2024 at 03:17 AM
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
(1, 'Bret Hoodie', 50, 'tops', 'tops2.avif', 34.99),
(2, 'Crew T-Shirt', 30, 'tops', 'tops1.avif', 8.99),
(3, 'Camo Zip-Up Hoodie', 80, 'tops', 'tops3.avif', 34.99),
(4, 'V-Neck Sweater', 60, 'tops', 'tops4.avif', 44.49),
(5, 'Seamless Henley', 30, 'tops', 'tops5.avif', 18.00),
(6, 'Icon Polo', 50, 'tops', 'tops6.avif', 15.00),
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
(18, 'High-Raise Leggings', 70, 'bottoms', 'bottom8.avif', 44.95),
(19, 'Medium Wash Carpenter Jeans', 40, 'bottoms', 'bottom9.avif', 59.95),
(20, 'Taped Super Baggy Jeans', 100, 'bottoms', 'bottom10.avif', 79.95),
(21, 'Women\'s X4 Training Shoes', 20, 'shoes', 'shoes1.jpeg', 139.99),
(22, 'RS-X Peb Running Shoes', 30, 'shoes', 'shoes2.jpeg', 69.56),
(23, 'Men\'s Micro G Valsetz Tactical Boots', 20, 'shoes', 'shoes3.jpeg', 97.80),
(24, 'Jordan 4 Retro Bred', 10, 'shoes', 'shoes4.jpeg', 397.51),
(25, 'Dunk Low Retro', 20, 'shoes', 'shoes5.jpeg', 94.87),
(26, 'V8 Sneaker', 10, 'shoes', 'shoes6.jpeg', 87.99),
(27, 'Air Max 270', 20, 'shoes', 'shoes7.jpeg', 149.88),
(28, 'Jordan 1 Retro High Dior', 10, 'shoes', 'shoes8.jpeg', 7673.82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
