-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 11:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`, `description`, `status`, `created_at`) VALUES
(1, 'Sample', 'category1629751346', 'TEsting', 'active', '2021-08-23 20:42:26'),
(2, 'sf,nds,nfhkj', 'category1629751851', 'fjkfdsfdsnfkjdfd', 'active', '2021-08-23 20:50:51'),
(3, 'sdadasdas', 'category1629752182', 'dsdsadasdsad', 'active', '2021-08-23 20:56:22'),
(4, 'dsadsafndlkj', 'category1629752467', 'jlfdnhdk', 'active', '2021-08-23 21:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) DEFAULT NULL,
  `product_name` varchar(50) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
