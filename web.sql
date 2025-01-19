-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2025 at 09:13 PM
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
-- Database: `idk`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_address` int(12) NOT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `psc` varchar(10) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_address`, `street`, `city`, `psc`, `country`) VALUES
(1, 'Šancová 50', 'Bratislava', '81105', 'Slovensko'),
(2, 'Hlavná 12', 'Košice', '04001', 'Slovensko'),
(3, 'Námestie SNP 4', 'Žilina', '01001', 'Slovensko'),
(4, 'Dunajská 3', 'Trnava', '91701', 'Slovensko');

-- --------------------------------------------------------

--
-- Table structure for table `allergens`
--

CREATE TABLE `allergens` (
  `id_allergen` int(12) NOT NULL,
  `allergen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `allergens`
--

INSERT INTO `allergens` (`id_allergen`, `allergen`) VALUES
(1, 'Gluten'),
(2, 'Milk'),
(3, 'Eggs'),
(4, 'Nuts'),
(5, 'Soy'),
(6, 'Wheat'),
(7, 'Peanuts'),
(8, 'Almonds'),
(9, 'Coconut'),
(10, 'Hazelnuts'),
(11, 'Chocolate'),
(12, 'Butter');

-- --------------------------------------------------------

--
-- Table structure for table `allergen_product`
--

CREATE TABLE `allergen_product` (
  `id_allergen_product` int(12) NOT NULL,
  `id_product` int(12) DEFAULT NULL,
  `id_allergen` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `allergen_product`
--

INSERT INTO `allergen_product` (`id_allergen_product`, `id_product`, `id_allergen`) VALUES
(1, 1, 1),
(3, 1, 3),
(5, 2, 1),
(7, 2, 3),
(9, 3, 1),
(11, 3, 3),
(14, 4, 1),
(15, 4, 4),
(16, 4, 7),
(17, 5, 1),
(18, 5, 3),
(20, 6, 1),
(21, 6, 4),
(23, 7, 1),
(26, 1, 11),
(27, 2, 11),
(29, 6, 11),
(31, 4, 3),
(32, 1, 12),
(34, 2, 12),
(35, 3, 12),
(36, 5, 12),
(37, 6, 8),
(38, 6, 11),
(39, 6, 12),
(40, 6, 2),
(41, 7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `baking_method`
--

CREATE TABLE `baking_method` (
  `id_baking_method` int(12) NOT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `baking_method`
--

INSERT INTO `baking_method` (`id_baking_method`, `type`) VALUES
(1, 'Classic'),
(2, 'Vegan'),
(3, 'Gluten-Free'),
(4, 'Low Sugar');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id_basket`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `basket_items`
--

CREATE TABLE `basket_items` (
  `id_basket_item` int(12) NOT NULL,
  `id_basket` int(12) DEFAULT NULL,
  `id_product` int(12) DEFAULT NULL,
  `quantity` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `basket_items`
--

INSERT INTO `basket_items` (`id_basket_item`, `id_basket`, `id_product`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 3),
(3, 2, 3, 1),
(4, 3, 5, 3),
(5, 4, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `flavours`
--

CREATE TABLE `flavours` (
  `id_flavour` int(12) NOT NULL,
  `flavour` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `flavours`
--

INSERT INTO `flavours` (`id_flavour`, `flavour`) VALUES
(1, 'Chocolate'),
(2, 'Salted Caramel'),
(3, 'Vanilla'),
(4, 'Peanut Butter'),
(5, 'Cinnamon'),
(6, 'Almond'),
(7, 'Coconut'),
(8, 'Hazelnut'),
(9, 'Coffee'),
(10, 'Orange'),
(11, 'Pistachio');

-- --------------------------------------------------------

--
-- Table structure for table `flavour_product`
--

CREATE TABLE `flavour_product` (
  `id_flavour_product` int(12) NOT NULL,
  `id_product` int(12) DEFAULT NULL,
  `id_flavour` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `flavour_product`
--

INSERT INTO `flavour_product` (`id_flavour_product`, `id_product`, `id_flavour`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 3),
(5, 3, 2),
(6, 4, 4),
(7, 5, 5),
(8, 5, 3),
(9, 6, 11),
(10, 6, 1),
(11, 7, 2),
(12, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(12) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `id_address` int(12) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `id_status` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `order_date`, `id_address`, `total_price`, `id_status`) VALUES
(1, 2, '2024-12-10 10:00:00', 1, 49.00, 3),
(2, 3, '2024-12-13 12:00:00', 2, 30.50, 3),
(3, 1, '2024-12-20 16:40:00', 3, 33.00, 3),
(4, 5, '2025-01-04 15:30:00', 4, 59.50, 2),
(5, 3, '2025-01-03 14:20:00', 2, 49.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id_order_item` int(12) NOT NULL,
  `id_order` int(12) DEFAULT NULL,
  `id_product` int(12) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id_order_item`, `id_order`, `id_product`, `quantity`) VALUES
(10, 1, 1, 1),
(11, 1, 5, 1),
(12, 1, 6, 1),
(13, 2, 7, 1),
(14, 2, 2, 1),
(15, 3, 5, 2),
(16, 4, 6, 1),
(17, 4, 1, 2),
(18, 4, 2, 1),
(19, 5, 7, 1),
(20, 5, 1, 1),
(21, 5, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id_status` int(12) NOT NULL,
  `o_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id_status`, `o_status`) VALUES
(1, 'Pending'),
(2, 'Shipped'),
(3, 'Delivered'),
(4, 'Canceled'),
(5, 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_payment` int(12) NOT NULL,
  `id_pay_method` int(12) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `date_of_payment` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id_payment`, `id_pay_method`, `amount`, `date_of_payment`) VALUES
(1, 2, 49.00, '2024-12-10 10:00:00'),
(2, 1, 30.50, '2024-12-13 12:00:00'),
(3, 2, 33.00, '2024-12-20 16:40:00'),
(4, 1, 59.50, '2025-01-04 15:30:00'),
(5, 1, 49.00, '2025-01-03 14:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id_method` int(12) NOT NULL,
  `method` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id_method`, `method`) VALUES
(1, 'Credit Card'),
(2, 'PayPal'),
(3, 'Cash on Delivery'),
(4, 'Bank Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(12) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price_piece` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `id_baking_method` int(12) DEFAULT NULL,
  `in_stock` int(15) DEFAULT NULL,
  `special` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `product_name`, `description`, `price_piece`, `price`, `id_baking_method`, `in_stock`, `special`) VALUES
(1, 'Brownie Cookie', 'A delicious chocolate brownie cookie with a fudgy center and crisp edges.', 1.45, 14.50, 1, 100, 0),
(2, 'Chocolate Chip Cookie', 'Classic soft and chewy cookie loaded with chocolate chips.', 1.25, 12.50, 1, 150, 0),
(3, 'Salted Caramel Cookie', 'A rich and gooey caramel-filled cookie topped with a sprinkle of sea salt.', 1.60, 16.00, 1, 80, 0),
(4, 'Peanut Butter Cookie', 'A soft and chewy cookie made with creamy peanut butter and a hint of vanilla.', 1.40, 14.00, 1, 120, 0),
(5, 'Cinnamon Vanilla Cookie', 'A warm, spiced cookie with cinnamon and vanilla flavors, perfect for the holidays.', 1.65, 16.50, 1, 90, 1),
(6, 'Pistachio Chocolate Cookie', 'A crunchy cookie featuring pistachios and rich dark chocolate chunks.', 1.80, 18.00, 1, 70, 0),
(7, 'Vegan Chocolat Salted Caramel Cookie', 'A rich and gooey vegan caramel-filled chocolate cookie topped with a sprinkle of sea salt, made with plant-based ingredients.', 1.80, 18.00, 2, 80, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(12) NOT NULL,
  `id_user` int(12) DEFAULT NULL,
  `id_order` int(12) DEFAULT NULL,
  `rating` int(3) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `review_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id_review`, `id_user`, `id_order`, `rating`, `title`, `review_text`, `review_date`) VALUES
(1, 3, 2, 5, 'Perfect Pair', 'The Vegan Caramel Chocolate Cookie was unexpectedly amazing with gooey caramel, and the Chocolate Chip Cookie was soft and loaded with chocolate chips. A winning combo!', '2024-12-17 14:05:00'),
(2, 1, 3, 4, 'Cozy Christmas Comfort', 'Warm and sweet with a hint of cinnamon, this cookie instantly brings a festive, holiday feel. It’s the perfect treat to pair with tea by the fireplace, though I was hoping for a little more crunch to make it even more satisfying.', '2024-12-28 12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(12) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `user_password` varchar(64) DEFAULT NULL,
  `registration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `last_name`, `mail`, `phone_number`, `user_password`, `registration_date`) VALUES
(1, 'Peter', 'Novák', 'peter.novak@example.com', '+421901234567', 'passwordhash1', '2025-01-01 12:00:00'),
(2, 'Jana', 'Kováčová', 'jana.kovacova@example.com', '+421908765432', 'passwordhash2', '2025-01-02 14:30:00'),
(3, 'Marek', 'Horváth', 'marek.horvath@example.com', '+421915246810', 'passwordhash3', '2025-01-03 16:00:00'),
(4, 'Zuzana', 'Balážová', 'zuzana.balazova@example.com', '+421902468135', 'passwordhash4', '2025-01-04 10:15:00'),
(5, 'Lucia', 'Fialová', 'lucia.fialova@example.com', '+421905739284', 'passwordhash5', '2025-01-05 09:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Indexes for table `allergens`
--
ALTER TABLE `allergens`
  ADD PRIMARY KEY (`id_allergen`);

--
-- Indexes for table `allergen_product`
--
ALTER TABLE `allergen_product`
  ADD PRIMARY KEY (`id_allergen_product`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_allergen` (`id_allergen`);

--
-- Indexes for table `baking_method`
--
ALTER TABLE `baking_method`
  ADD PRIMARY KEY (`id_baking_method`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`);

--
-- Indexes for table `basket_items`
--
ALTER TABLE `basket_items`
  ADD PRIMARY KEY (`id_basket_item`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_basket` (`id_basket`);

--
-- Indexes for table `flavours`
--
ALTER TABLE `flavours`
  ADD PRIMARY KEY (`id_flavour`);

--
-- Indexes for table `flavour_product`
--
ALTER TABLE `flavour_product`
  ADD PRIMARY KEY (`id_flavour_product`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_flavour` (`id_flavour`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_address` (`id_address`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id_order_item`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_pay_method` (`id_pay_method`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id_method`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_baking_method` (`id_baking_method`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`),
  ADD UNIQUE KEY `id_order` (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `allergens`
--
ALTER TABLE `allergens`
  MODIFY `id_allergen` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `allergen_product`
--
ALTER TABLE `allergen_product`
  MODIFY `id_allergen_product` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `baking_method`
--
ALTER TABLE `baking_method`
  MODIFY `id_baking_method` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `basket_items`
--
ALTER TABLE `basket_items`
  MODIFY `id_basket_item` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `flavours`
--
ALTER TABLE `flavours`
  MODIFY `id_flavour` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `flavour_product`
--
ALTER TABLE `flavour_product`
  MODIFY `id_flavour_product` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id_order_item` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_status` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id_payment` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id_method` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allergen_product`
--
ALTER TABLE `allergen_product`
  ADD CONSTRAINT `allergen_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `allergen_product_ibfk_2` FOREIGN KEY (`id_allergen`) REFERENCES `allergens` (`id_allergen`);

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`id_basket`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `basket_items`
--
ALTER TABLE `basket_items`
  ADD CONSTRAINT `basket_items_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `basket_items_ibfk_3` FOREIGN KEY (`id_basket`) REFERENCES `basket` (`id_basket`);

--
-- Constraints for table `flavour_product`
--
ALTER TABLE `flavour_product`
  ADD CONSTRAINT `flavour_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `flavour_product_ibfk_2` FOREIGN KEY (`id_flavour`) REFERENCES `flavours` (`id_flavour`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `order_status` (`id_status`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_address`) REFERENCES `address` (`id_address`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `order_items_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`id_pay_method`) REFERENCES `payment_method` (`id_method`),
  ADD CONSTRAINT `payments_ibfk_3` FOREIGN KEY (`id_payment`) REFERENCES `orders` (`id_order`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_baking_method`) REFERENCES `baking_method` (`id_baking_method`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
