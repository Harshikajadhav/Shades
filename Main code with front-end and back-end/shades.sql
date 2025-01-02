-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 10:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shades`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(8, 27, 'Vincent Chase', '3000', 'product-3.jpg', 1),
(10, 27, 'John Jacobs', '3000', 'product-4.jpg', 1),
(16, 28, 'Vincent Chase', '3000', 'product-3.jpg', 2),
(17, 27, 'Royal Chase', '2900', 'product-6.jpg', 1),
(18, 27, 'Diamond Chase', '2800', 'product-11.jpg', 2),
(19, 29, 'Cat Eye', '2800', 'product-7.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `number`, `email`, `address`) VALUES
(1, 'Harshika Jadhav', 9987168123, 'harshika.jadhav@gmail.com', 'Kores Towers'),
(2, 'Harshika', 8465179925, 'harshika@gmail.com', 'Thane'),
(3, 'Harshika', 8465179925, 'harshika@gmail.com', 'Thane'),
(4, 'Kunal Jadhav', 9819372694, 'Kunal@gmail.com', 'Thane'),
(5, 'Kalpana Jadhav', 9819126532, 'kalpana@gmail.com', 'Thane');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Navy Blue', '2500', 'product-1.jpg'),
(2, 'Black Eyewear', '1500', 'product-2.jpg'),
(3, 'Vincent Chase', '3000', 'product-3.jpg'),
(4, 'John Jacobs', '3000', 'product-4.jpg'),
(5, 'Shades Air', '3000', 'product-5.jpg'),
(6, 'Royal Chase', '2900', 'product-6.jpg'),
(7, 'Cat Eye', '2800', 'product-7.jpg'),
(8, 'Plain Black', '2500', 'product-8.jpg'),
(9, 'Flair Eyewear', '1900', 'product-9.jpg'),
(10, 'Charcoal Eyewear', '2500', 'product-10.jpg'),
(11, 'Diamond Chase', '2800', 'product-11.jpg'),
(12, 'Banner Eyewear', '3500', 'product-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(11, 'kunal@2006', 'kunal@gmail.com', 'kunal'),
(27, 'happy', 'happy@gmail.com', '123'),
(28, 'kalpana', 'kalpana@gmail.com', '123'),
(29, 'random', 'random@gmail.com', 'random');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
