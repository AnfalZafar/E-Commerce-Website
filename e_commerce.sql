-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 06:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_table`
--

CREATE TABLE `about_table` (
  `about_id` int(11) NOT NULL,
  `about_text` varchar(500) NOT NULL,
  `about_img` varchar(500) NOT NULL,
  `about_team_img` varchar(500) NOT NULL,
  `about_team_name` varchar(500) NOT NULL,
  `about_team_work` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_table`
--

INSERT INTO `about_table` (`about_id`, `about_text`, `about_img`, `about_team_img`, `about_team_name`, `about_team_work`) VALUES
(5, 'Welcome to our e-commerce store, your one-stop destination for high-quality watches, stylish t-shirts, premium headphones, and trendy shoes. We are passionate about providing you with the best selection of products to suit your style and needs. Our team is dedicated to offering top-notch customer service, quick shipping, and a secure shopping experience. With a commitment to quality and style, we strive to make your online shopping experience as enjoyable as possible.', 'aboutus.jpg', 'ourteam.jpg', 'John Son', 'Oparator');

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE `all_products` (
  `a_p_id` int(11) NOT NULL,
  `a_p_name` varchar(500) DEFAULT NULL,
  `a_p_img` varchar(500) DEFAULT NULL,
  `a_p_descript` varchar(500) DEFAULT NULL,
  `product_foren` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `all_products`
--

INSERT INTO `all_products` (`a_p_id`, `a_p_name`, `a_p_img`, `a_p_descript`, `product_foren`) VALUES
(1, 'T-SHIRT', 't_shirt1.jpg', 'Proajlkfjakushdfjkasq', 13);

-- --------------------------------------------------------

--
-- Table structure for table `e_product`
--

CREATE TABLE `e_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_product`
--

INSERT INTO `e_product` (`product_id`, `product_name`, `product_img`) VALUES
(13, 'T-SHIRT', 'first cate tshirt.jpg'),
(14, 'HEAD PHONES', 'first cate headphone.jpg'),
(15, 'SHOES', 'first_cate_shoes_1-removebg-preview.png'),
(16, 'WATCH', 'first cate watch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feature_product`
--

CREATE TABLE `feature_product` (
  `fea_id` int(11) NOT NULL,
  `fea_name` varchar(500) NOT NULL,
  `fea_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feature_product`
--

INSERT INTO `feature_product` (`fea_id`, `fea_name`, `fea_img`) VALUES
(1, 'COFA', 'first cate cofa.jpg'),
(2, 'SHOES', 'feature_product_2.jpg'),
(3, 'CLOTHES', 'feature_product_3-removebg-preview.png'),
(4, 'CAP', 'feature_product_1-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `sales_table`
--

CREATE TABLE `sales_table` (
  `sales_id` int(11) NOT NULL,
  `sales_name` varchar(500) NOT NULL,
  `sales_img` varchar(500) NOT NULL,
  `sales_price` varchar(200) NOT NULL,
  `actual_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_table`
--

INSERT INTO `sales_table` (`sales_id`, `sales_name`, `sales_img`, `sales_price`, `actual_price`) VALUES
(4, 'Watch', 'first cate watch.jpg', '$:50', '$:80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_table`
--
ALTER TABLE `about_table`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `all_products`
--
ALTER TABLE `all_products`
  ADD PRIMARY KEY (`a_p_id`),
  ADD KEY `product_foren` (`product_foren`);

--
-- Indexes for table `e_product`
--
ALTER TABLE `e_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `feature_product`
--
ALTER TABLE `feature_product`
  ADD PRIMARY KEY (`fea_id`);

--
-- Indexes for table `sales_table`
--
ALTER TABLE `sales_table`
  ADD PRIMARY KEY (`sales_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_table`
--
ALTER TABLE `about_table`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `all_products`
--
ALTER TABLE `all_products`
  MODIFY `a_p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e_product`
--
ALTER TABLE `e_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feature_product`
--
ALTER TABLE `feature_product`
  MODIFY `fea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_table`
--
ALTER TABLE `sales_table`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_products`
--
ALTER TABLE `all_products`
  ADD CONSTRAINT `all_products_ibfk_1` FOREIGN KEY (`product_foren`) REFERENCES `e_product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
