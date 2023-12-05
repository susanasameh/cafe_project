-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 01:31 AM
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
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(10) UNSIGNED NOT NULL,
  `categories_name` varchar(100) NOT NULL,
  `categories_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_info`) VALUES
(2, 'CupCake', 'Many types of special CupCake'),
(3, 'Yummy Dessert', 'Many types of special Dessert'),
(5, 'Cake', 'cake'),
(6, 'Drinks', 'many types of fresh juice');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `categories_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `price` double NOT NULL,
  `active` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `productdate` date NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`categories_id`, `title`, `content`, `price`, `active`, `image`, `productdate`, `product_id`) VALUES
(2, 'Raspberry CupCake	', 'Enjoy a taste of the raspberry with the sponge cake	', 65, 'on', '17-RaspberryCupCake.jpg', '2023-11-09', 7),
(2, 'Chocolate CupCake	', 'Enjoy a taste of the Chocolate with the sponge cake	', 50, 'on', '231-ChocolateCupCake.jpg', '2023-11-09', 8),
(3, 'Mixed Berry Parfaits	', 'Enjoy this picnic classic in parfait form! Start with a layer of strawberry gelatin, then add vanilla pudding, and top with fresh, mixed berries.	', 70, 'on', '20-MixedBerryParfaits.jpg', '2023-11-10', 9),
(3, 'Black-and-White Parfaits	', 'Start the day with something sweet by whipping up this black-and-white parfait, made with vanilla, semi-sweet chocolate, and peanut butter.', 60, 'on', '735-download.jpg', '2023-11-10', 10),
(3, 'Toffee Banofi Sundae', 'This classic English dessert transforms into a fun sundae', 35, 'on', '786-toffe.jpg', '2023-11-10', 11),
(5, 'Peanut Butter Cake	', 'this cake is covered and full of Peanut Butter	', 200, 'on', '201-Peanut _Butter _Cake.jpg', '2023-11-10', 12),
(5, 'Chocolate Meringue Layer Cake', 'Fresh raspberries lighten up this rich chocolatey dessert.', 250, 'on', '767-Chocolate Meringue Layer Cake.jpg', '2023-11-10', 13),
(2, 'Mix and Match Mini Cheesecakes	', 'You can personalize these miniature cheesecakes by topping them with your favorite fruits and candies.	', 75, 'on', '146-Mix.jpg', '2023-11-10', 15),
(2, 'Piña Colada Cupcakes	', 'Enjoy a taste of the tropics with these fun cupcakes that include pineapple and coconut flavors.	', 70, 'on', '631-pina.jpg', '2023-11-10', 16),
(2, 'Snowball Cupcakes', 'Moist chocolate cupcakes, topped with a mound of fluffy marshmallow frosting, and coated in pretty pastel coconut!  These colorful snowball cupcakes make such a fun springtime treat!', 65, 'on', '988-SnowballCupcakes.jpg', '2023-11-10', 17),
(5, 'No-Bake Cheesecake Pie	', 'A no-bake cheesecake topped with fresh fruit is the perfect treat for spring.	', 200, 'on', '311-No-Bake Cheesecake Pie.jpg', '2023-11-10', 18),
(5, 'Mini Lemon-Blueberry Bundt Cakes	', 'Packed with fresh blueberries and grated lemon zest, these mini desserts	', 150, 'on', '637-images.jpg', '2023-11-10', 19),
(6, 'Iced Americano', 'we make it with the special coffee beans', 45, 'on', '481-iced-americano.png', '2023-11-11', 21),
(6, 'Iced Cappuccino', 'we make it with the special coffee beans and milk', 75, 'on', '487-iced-cappuccino.png', '2023-11-11', 22),
(3, 'Maple bacon', 'if you love sweet and sawer..we make it for you ', 75, 'on', '636-Maple_Bacon.jpg', '2023-11-15', 25),
(6, 'special smoothie', 'choose your favorite fruit and let us make special smoothie for you', 70, 'on', '691-smoothie-3.png', '2023-11-16', 27);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `active` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `registration_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `username`, `email`, `active`, `password`, `registration_date`) VALUES
(1, 'Susana Sameh', 'susana', 's@gmail.com', 'active', '12345', '2023-11-02 08:50:00'),
(2, 'Mena Nazmey', 'MENA', 'm@gmail.com', 'active', 'GJFKFK', '2023-11-04 10:16:00'),
(3, 'Andria Mena', 'ANDY', 'a@gmail.com', 'active', 'SJSTK', '0000-00-00 00:00:00'),
(4, 'Jonathan Mena', 'JOJO', 'j@gmail.com', 'on', 'HLEHE;L\'L', '0000-00-00 00:00:00'),
(6, 'samnta', 'sam', 'sam@gmail.com', 'active', '123456', '2023-11-14 23:57:00'),
(8, 'ayla', 'loly', 'lolo@gmail.com', 'on', '123456', '2023-11-08 23:58:00'),
(9, 'perry peter', 'perry', 'p@gmail.com', 'on', '1234567', '2023-11-16 17:11:00'),
(12, 'bosy bassem', 'bosy', 'bo@gmail.com', '0', '1234', '2023-11-16 19:36:00'),
(13, 'jermen', 'jeje', 'j@gmail.com', 'active', '15987', '2023-11-17 02:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

CREATE TABLE `user_product` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categories_id` (`categories_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_product`
--
ALTER TABLE `user_product`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
