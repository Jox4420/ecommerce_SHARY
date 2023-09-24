-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 03:38 AM
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `img`, `title`, `role`) VALUES
(12, 'Yousefomar', 'jox443@gmail.com', '332551520', 'jox.jpg', 'webDevolper', 0),
(18, 'Habiba omar', 'habibaomar@gmail.com', '1234', 'beba.jpg', 'Graphic disigner ', 2),
(20, 'Mekawy', 'yousef.elmakkawy@gmail.com', '123', 'meky.jpg', 'AndroidDevolper', 1),
(27, 'gana omar', 'gana@gmail.com', '123456', 'gana.jpg', 'student ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `disid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `desper` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`disid`, `name`, `des`, `desper`, `created_at`, `updated_at`) VALUES
(1, 'winter', ' 34an ALS23A', ' 20%  ', '2023-09-21 11:35:59', '2023-09-21 12:20:33'),
(4, 'non', '  ', ' 1', '2023-09-21 14:21:53', '2023-09-21 14:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `orderid` int(11) NOT NULL,
  `proudect_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `crated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`orderid`, `proudect_id`, `updated_at`, `crated_at`, `userid`) VALUES
(10, 3, '2023-09-23 16:12:45', '2023-09-23 16:12:45', 1),
(11, 7, '2023-09-23 16:14:10', '2023-09-23 16:14:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permthion`
--

CREATE TABLE `permthion` (
  `roleid` int(11) NOT NULL,
  `descrepthion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permthion`
--

INSERT INTO `permthion` (`roleid`, `descrepthion`) VALUES
(0, 'all acces'),
(1, 'semi acces'),
(2, 'view acces');

-- --------------------------------------------------------

--
-- Table structure for table `proudect`
--

CREATE TABLE `proudect` (
  `id` int(11) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `dis` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `discountid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proudect`
--

INSERT INTO `proudect` (`id`, `proname`, `dis`, `price`, `category`, `img`, `date_update`, `add_date`, `discountid`) VALUES
(2, 'HP 15-dw3089ne Laptop', 'HP 15-dw3089ne Laptop - 11th Intel Core i5-1135G7, 8GB RAM, 512GB SSD, NVIDIA GeForce MX350 2GB GDDR5 dedicated Graphics, 15.6', ' EGP19,899.00', 'laptop', '51EIaaZRFCL._AC_SL1500_.jpg', '2023-09-21 14:25:55', '2023-09-21 14:22:33', 4),
(3, 'Dell Inspiron 5410', 'Dell Inspiron 5410 2-in-1 Convertible x360 laptop - 11th Intel Core i5-1135G7, 8GB RAM, 256GB SSD, Intel Iris Xe Graphics, 14', 'EGP25,999.00', 'laptop', '2.jpg', '2023-09-21 23:23:22', '2023-09-21 14:27:11', 4),
(4, 'ASUS Vivobook Pro ', 'ASUS Vivobook Pro 16X OLED M7600QC-OLED007W R7-5800H RTX 3050 4GB 16.0 4K OLED 16GB DDR4 1TB M.2 NVMe™ PCIe® 3.0 SSD WIN11 - Black', 'EGP39,980.00', 'laptop', '3.jpg', '2023-09-21 23:23:47', '2023-09-21 14:28:05', 4),
(5, '13-inch MacBook Air', '13-inch MacBook Air: Apple M1 chip with 8-core CPU and 7-core GPU, 8GB/256GB - Gold', ' EGP37,370.00', 'laptop', '4.jpg', '2023-09-21 23:24:10', '2023-09-21 14:29:24', 4),
(6, 'Dell G15 5520 Gaming Laptop ', 'Dell G15 5520 Gaming Laptop NG9E5A-CHLDG- Dark Gray (Core i7-12700H, 16GB, 512GB SSD, RTX3050,15in FHD)', ' EGP33,980.00', 'laptop', '5.jpg', '2023-09-21 23:24:31', '2023-09-21 14:31:07', 4),
(7, 'iPhone 14 Pro Max (256 GB) ', 'New Apple iPhone 14 Pro Max (256 GB) - Space Black, Bluetooth, Wi-Fi, USB', 'EGP49,000.', 'mobile', 'iphone.jpg', '2023-09-21 17:32:23', '2023-09-21 17:32:23', 4),
(8, 'Samsung Galaxy Tab S6 Lite', 'Samsung Galaxy Tab S6 Lite, 4GB RAM, 64GB ROM, 10.4 inches, WiFi - Oxford Grey - 1 year Warranty', 'EGP15,750.00', 'Tablet', 'tab1.jpg', '2023-09-22 00:06:28', '2023-09-22 00:04:38', 4),
(9, 'New Apple Watch Ultra', 'New Apple Watch Ultra GPS + Cellular, 49mm Titanium Case With Orange Alpine Loop - Medium, USB', ' EGP36,550.00', 'Whatches', 'whatch1.jpg', '2023-09-22 00:07:35', '2023-09-22 00:07:35', 4),
(10, 'OnePlus 11 5G ', 'OnePlus 11 5G (Titan Black, 8GB RAM, 128GB Storage) Upto 18M No Cost EMI with ICICI Amazon Pay Credit Card, Wi-Fi', 'EGP27,850.00', 'mobile', 'mobile2.jpg', '2023-09-22 11:41:23', '2023-09-22 11:41:23', 4),
(11, 'OPPO Reno8 Pro', 'OPPO Reno8 Pro Smartphone, MediaTek Dimensity 8100-MAX 5G, 6.7“ 120Hz AMOLED screen, 50MP+8MP+2MP rear camera, 32MP front camera, RAM 8GB + ROM 256GB, 4500mAh 80W Supervooc, Glazed Green (GREEN)', 'EGP19,700.00', 'mobile', 'mobile3.jpg', '2023-09-22 11:42:07', '2023-09-22 11:42:07', 4),
(13, 'HUAWEI WATCH GT 3', '', 'EGP7,999.00', 'Whatches', 'whatch2.jpg', '2023-09-22 11:53:48', '2023-09-22 11:53:48', 4),
(14, 'Samsung Galaxy S23 Ultra,', 'Samsung Galaxy S23 Ultra, 256GB, 12GB, 5G Mobile Phone, Dual SIM, Android Smartphone, Green - ‎SM-S918BZGCMEA', 'EGP27,850.00', 'mobile', 'mobile4.jpg', '2023-09-22 11:54:47', '2023-09-22 11:54:47', 4),
(15, 'Apple 11-inch iPad Pro ', 'New 2022 Apple 11-inch iPad Pro (Wi-Fi, 256GB) - Space Gray (4th generatio', 'EGP42,750.00', 'Tablet', 'tablet2.jpg', '2023-09-22 11:56:31', '2023-09-22 11:55:53', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `countery` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `countery`, `name`, `userimg`) VALUES
(1, 'JOX44', 'jox443@gmail.com', '332551520', '01061680641', 'Egypt', 'yousef omar ', 'jox.jpg'),
(21, 'ganaa12', 'ganaomar@gmail.com', '123456', '01066666666', 'Egypt', 'gana', 'gana.jpg'),
(23, 'Habiba12', 'habibaomar@gmail.com', '1234', '01008457396', 'Egypt', 'HABIBA', 'beba.jpg'),
(24, 'omarabdalhakim2', 'omarabdalhakim2@gmailcom', '123456', '01004518391', 'Egypt', 'omarabdalhakim2', 'jox.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`disid`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `proudect_id` (`proudect_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `permthion`
--
ALTER TABLE `permthion`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `proudect`
--
ALTER TABLE `proudect`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discountid` (`discountid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `disid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `proudect`
--
ALTER TABLE `proudect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role`) REFERENCES `permthion` (`roleid`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`proudect_id`) REFERENCES `proudect` (`id`),
  ADD CONSTRAINT `order_item_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `proudect`
--
ALTER TABLE `proudect`
  ADD CONSTRAINT `proudect_ibfk_1` FOREIGN KEY (`discountid`) REFERENCES `discount` (`disid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
