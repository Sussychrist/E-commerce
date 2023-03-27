-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: March 9, 2023 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version:

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(57) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'SmartPhone', 152.00, './assets/products/1.png', '2020-03-28 11:08:57'), -- NOW()
(2, 'Redmi', 'SmartPhone', 122.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Redmi', 'SmartPhone', 122.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Redmi', 'SmartPhone', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Redmi', 'SmartPhone', 122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Redmi', 'SmartPhone', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'Redmi', 'SmartPhone', 122.00, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'Redmi', 'SmartPhone', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Samsung', 'SmartPhone', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'Samsung', 'SmartPhone', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Apple', 'SmartPhone', 152.00, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Apple', 'SmartPhone', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'Apple', 'SmartPhone', 152.00, './assets/products/15.png', '2020-03-28 11:08:57'),
(14, 'Toshiba', 'Cooker', 152.00, './assets/products/Cooker/10003002-noi-com-dien-happy-cook-0-6-lit-hc-060-1.jpg','2020-03-28 11:08:57'), -- NOW()
(15, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10012149-noi-com-dien-cuckoo-1-8-lit-crp-g1015m-r-1_wjxt-q1.jpg', '2020-03-28 11:08:57'),
(16, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10026256-noi-com-dien-cuckoo-1-8-lit-cr-1055-1_sk7h-ep.jpg', '2020-03-28 11:08:57'),
(17, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10036633-noi-com-dien-toshiba-1-lit-rc-10jfm-h-vn-1.jpg', '2020-03-28 11:08:57'),
(18, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10036633-noi-com-dien-toshiba-1-lit-rc-10jfm-h-vn-1.jpg', '2020-03-28 11:08:57'),
(19, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10039245-noi-com-dien-tu-sharp-ks-com185ev-sl-1.jpg', '2020-03-28 11:08:57'),
(20, 'Dell Vostro', 'Laptop', 122.00, './assets/products/Laptop/10051065-laptop-dell-vostro-3405-v4r53500u003w1-1.jpg', '2020-03-28 11:08:57'),
(21, 'Asus Vivobook 15', 'Laptop', 122.00, './assets/products/Laptop/10052337-laptop-asus-vivobook-15-x1502za-bq127w-1.jpg', '2020-03-28 11:08:57'),
(22, 'Asus Tuf', 'Laptop', 152.00, './assets/products/Laptop/10052586-laptop-asus-tuf-gaming-f15-fx506hc-hn144w-1.jpg', '2020-03-28 11:08:57'),
(23, 'Acer Aspire 3', 'Laptop', 152.00, './assets/products/Laptop/10053511-laptop-acer-aspire-3-a315-59-381e-nx-k6tsv-006-1.jpg', '2020-03-28 11:08:57'),
(24, 'HP 340s', 'Laptop', 152.00, './assets/products/Laptop/10053987-laptop-hp-340s-g7-i3-1005g1-4gb-512gb-win10-224l0pa-1.jpg', '2020-03-28 11:08:57'),
(25, 'Lenovo Ideapad', 'Laptop', 152.00, './assets/products/Laptop/10054254-laptop-lenovo-ideapad-3-14iau7-i3-1215u-82rj001avn-1.jpg', '2020-03-28 11:08:57'),
(26, 'HP 15s', 'Laptop', 152.00, './assets/products/Laptop/10054753-laptop-hp-15s-fq5146tu-i7-1255u-7c0r9pa-1.jpg', '2020-03-28 11:08:57'),
(27, 'Wendy Nuts', 'Laptop', 152.00, './assets/products/Laptop/laptop-new-arrival-sales-banner-1-5fe0c476c3a3f.png', '2020-03-28 11:08:57'), -- NOW()
(28, 'XDL', 'Shoes', 122.00, './assets/products/Shoes/17.png', '2020-03-28 11:08:57'),
(29, 'Joe', 'Shoes', 122.00, './assets/products/20shoes_5.jpg', '2020-03-28 11:08:57'),
(30, 'Chicken nuggets', 'Shoes', 122.00, './assets/products/20shoes_10.jpg', '2020-03-28 11:08:57'),
(31, 'Grandma-360', 'Shoes', 122.00, './assets/products/20shoes_6.jpg', '2020-03-28 11:08:57'),
(32, 'Rizzler boots', 'Shoes', 122.00, './assets/products/20shoes_7.jpg', '2020-03-28 11:08:57'),
(33, 'Sink in the CUW', 'Shoes', 122.00, './assets/products/20shoes_8.jpg', '2020-03-28 11:08:57'),
(34, 'Sigma boots', 'Shoes', 122.00, './assets/products/20shoes_9.jpg', '2020-03-28 11:08:57'),
(35, 'Kansa', 'Shoes', 152.00, './assets/products/Shoes/19.png', '2020-03-28 11:08:57'),
(36, 'IPX-811', 'Shoes', 152.00, './assets/products/Shoes/3870555.jpg', '2020-03-28 11:08:57'),
(37, 'IPX-716', 'Shoes', 152.00, './assets/products/Shoes/400.png', '2020-03-28 11:08:57'),
(38, 'Wat are those!', 'Shoes', 152.00, './assets/products/Shoes/4626584.jpg', '2020-03-28 11:08:57'),
(39, 'Adidi', 'Shoes', 152.00, './assets/products/Shoes/4651712.jpg', '2020-03-28 11:08:57'),
(40, 'CUMN', 'Shoes', 122.00, './assets/products/Shoes/50.png', '2020-03-28 11:08:57'),
(41, 'Brainussy', 'Shoes', 122.00, './assets/products/Shoes/a.png', '2020-03-28 11:08:57'),
(42, 'Bread', 'Shoes', 122.00, './assets/products/Shoes/b.png', '2020-03-28 11:08:57'),
(43, 'MXP-284', 'Shoes', 122.00, './assets/products/Shoes/d.png', '2020-03-28 11:08:57'),
(44, 'IPS-039', 'Controller', 122.00, './assets/products/Controller/35.png', '2020-03-28 11:08:57'),
(45, 'Ksa-238', 'Controller', 152.00, './assets/products/Controller/20.png', '2020-03-28 11:08:57'),
(46, 'IPX-111', 'Controller', 152.00, './assets/products/Controller/49.png', '2020-03-28 11:08:57'),
(47, 'IPX-312', 'Controller', 152.00, './assets/products/Controller/Screenshot%202023-03-08%20055726.png', '2020-03-28 11:08:57'),
(48, 'shw-283', 'Controller', 152.00, './assets/products/Controller/Screenshot%202023-03-08%20055750.png', '2020-03-28 11:08:57'),
(49, 'ifj-947', 'Controller', 152.00, './assets/products/Controller/Screenshot%202023-03-08%20055815.png', '2020-03-28 11:08:57'),
(50, 'kdj-283', 'Controller', 122.00, './assets/products/Controller/Screenshot%202023-03-08%20055828.png', '2020-03-28 11:08:57'),
(51, 'Bsd-938', 'Controller', 122.00, './assets/products/Controller/Screenshot%202023-03-08%20055840.png', '2020-03-28 11:08:57'),
(52, 'Brd-182', 'Controller', 122.00, './assets/products/Controller/Screenshot%202023-03-08%20055855.png', '2020-03-28 11:08:57'),
(53, 'MXP-484', 'Controller', 122.00, './assets/products/Controller/Screenshot%202023-03-08%20055918.png', '2020-03-28 11:08:57'),
(54, 'Sig-943', 'Controller', 122.00, './assets/products/Controller/Screenshot%202023-03-08%20055934.png', '2020-03-28 11:08:57'),
(55, 'Kan-384', 'Controller', 152.00, './assets/products/Controller/Screenshot%202023-03-08%20060014.png', '2020-03-28 11:08:57'),
(56, 'IPX-853', 'Controller', 152.00, './assets/products/Controller/Screenshot%202023-03-08%20060029.png', '2020-03-28 11:08:57'),
(57, 'IPX-203', 'Controller', 152.00, './assets/products/Controller/Screenshot%202023-03-08%20060051.png', '2020-03-28 11:08:57');


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Dumb', 'Dumb', '2020-03-28 13:07:17'),
(2, 'lol', 'time98', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
