-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `produc_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `product_keyword` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`produc_id`, `product_name`, `product_description`, `product_keyword`, `cat_id`, `brand_id`, `product_image`, `product_price`) VALUES
(5, 'Asus 6Z', 'Innovation And Quality', 'mobile,asus,black,camera,6z', 3, 3, 'Asus_6Z.PNG', '29999'),
(6, 'Asus ROG', 'Innovation and Quality', 'mobile,camera,asus,black,game', 3, 3, 'Asus_ROG.PNG', '35999'),
(7, 'Asus Zenfone', 'Innovation and Quality', 'mobile,asus,black,camera', 3, 3, 'Asus_Zenfone.PNG', '19999'),
(8, 'Blackberry Evolve', 'Keep Calm. Keep On Growing Blackberries.', 'mobile,blackberry,camera,black', 3, 4, 'Blackberry_Evolve.PNG', '22999'),
(9, 'Blackberry Keyone', 'Keep Calm. Keep On Growing Blackberries.', 'mobile,blackberry,black,keyboard,key', 3, 4, 'Blackberry_Keyone.PNG', '29999'),
(10, 'Gionee A1', 'Perfect Combination Of Protection And Style For Your Phone.', 'mobile,gionee,black,camera', 3, 5, 'Gionee_A1.PNG', '9999'),
(11, 'Gionee Marathon M5 Plus', 'Perfect Combination Of Protection And Style For Your Phone.', 'mobile,gionee,marathon,m5,white,camera', 3, 5, 'Gionee_Marathon_M5_Plus.PNG', '14999'),
(12, 'Gionee S6 Pro', 'Perfect Combination Of Protection And Style For Your Phone.', 'gionee,s6,pro,mobile,white', 3, 5, 'Gionee_S6_Pro.PNG', '17999'),
(13, 'Google Pixel 3', '“We Do Lots Of Stuff.', 'google,pixel,mobile,camera,black', 3, 6, 'Google_Pixel_3.PNG', '24999'),
(14, 'Google Pixel 3 XL', '“We Do Lots Of Stuff.', 'google,camera,black,pixel', 3, 6, 'Google_Pixel_3_XL.PNG', '29999'),
(15, 'Google Pixel 3A', '“We Do Lots Of Stuff.', 'mobile,google,camera,black,pixel', 3, 6, 'Google_Pixel_3a.PNG', '24999'),
(16, 'Honor 8C', 'You Should Not Honor Men More Than Truth.', 'honor,mobile,black,camera', 3, 8, 'Honor_8C.PNG', '19999'),
(17, 'Honor 9 Lite', 'You Should Not Honor Men More Than Truth.', 'mobile,honor,lite,camera,blue', 3, 8, 'Honor_9_Lite.PNG', '17999'),
(18, 'HTC Desire', 'We Are A Pioneering Company.', 'mobile,white,htc,camera', 3, 7, 'HTC_Desire_816G.PNG', '22999'),
(19, 'HTC One', 'We Are A Pioneering Company.', 'htc,black,camera,mobile,one', 3, 7, 'HTC_ONE-A9.PNG', '29999'),
(20, 'HTC U11', 'We Are A Pioneering Company.', 'htc,camera,black,mobile', 3, 7, 'HTC_U11.PNG', '31999'),
(21, 'Moto Turbo', 'Believe In Yourself', 'moto,turbo', 3, 2, 'Moto_Turbo.PNG', '23999'),
(22, 'Vivo Z1 Pro', 'The smartphone has become a young divine, embodying the ultimate desire and saving.', 'vivo,z1,pro', 3, 17, 'Vivo_Z1Pro.PNG', '32999'),
(23, 'Sony Xperia', 'The One and Only.', 'sony,camera,black,5g', 3, 16, 'Sony_Xperia_XA_Ultra_Dual.PNG', '34999'),
(24, 'Sony Xperia 2', 'The One and Only.', 'sony,xperia,white', 3, 16, 'Sony_Xperia_XZ_Dual.PNG', '29999'),
(25, 'Samsung Galaxy M30', 'Together for tomorrow', 'samsung,galaxy,black', 3, 15, 'Samsung_Galaxy_M30.PNG', '16999'),
(26, 'Samsung Galaxy J6', 'Together for tomorrow', 'samsung,galaxy,j6', 3, 15, 'Samsung_Galaxy_J6.png', '13999'),
(27, 'Oppo F11 Pro', 'Selfie Expert.', 'selfie,oppo,f11,black', 3, 12, 'OPPO_F11_Pro.PNG', '24999'),
(28, 'Oppo Find X', 'Selfie Expert.', 'oppo,find,selfie,black', 3, 12, 'OPPO_Find_X.PNG', '24999'),
(29, 'Realme X', 'Dare to Leap. Proud to be Young.', 'realme,x,black', 3, 13, 'Realme_X.PNG', '17999'),
(30, 'Realme C2', 'Dare to Leap. Proud to be Young', 'realme,c2,black', 3, 13, 'Realme_C2.PNG', '12999'),
(31, 'Nokia 8.1', 'We create meaningful interactions to drive human progress.', 'nokia,camera,black', 3, 11, 'Nokia_8.1.PNG', '22999'),
(32, 'Nokia 8 Sirocco', 'We create meaningful interactions to drive human progress.', 'nokia,sirocco,black', 3, 11, 'Nokia_8_Sirocco.PNG', '19999'),
(33, 'Nokia 9', 'We create meaningful interactions to drive human progress.', 'nokia,9,black', 3, 11, 'Nokia_9.PNG', '24999'),
(34, 'Moto X4', 'Hello Moto.', 'moto,x,black', 3, 2, 'Moto_X4.PNG', '16999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`produc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `produc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
