CREATE TABLE `Role` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `Permission` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `Role_Detail` (
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  PRIMARY KEY (`role_id`, `permission_id`)
);

CREATE TABLE `User` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255),
  `phone_number` varchar(255),
  `address` varchar(255),
  `role_id` int NOT NULL,
  `deleted` int NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
);

CREATE TABLE `Cart` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `user_id` int NOT NULL
);

CREATE TABLE `Cart_Detail` (
  `cart_id` int PRIMARY KEY NOT NULL,
  `product_id` int NOT NULL,
  `product_detail_id` int NOT NULL,
  `product_color_id` int NOT NULL,
  `amount` int NOT NULL,
  `total_price` int NOT NULL
);

CREATE TABLE `Product` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` longblob NOT NULL,
  `category_id` int,
  `deleted` int NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
);

CREATE TABLE `Product_Detail` (
  `detail_id` int NOT NULL,
  `product_id` int NOT NULL,
  `detail_name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `description` longtext NOT NULL,
  `amount` int NOT NULL DEFAULT 0,
  `deleted` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`detail_id`, `product_id`)
);

CREATE TABLE `Product_Color` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `product_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longblob NOT NULL
);

CREATE TABLE `Category` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `Gallery` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `product_id` int NOT NULL,
  `image` longblob NOT NULL
);

CREATE TABLE `Order` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `user_id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255),
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` varchar(255),
  `order_date` datetime,
  `total_price` int NOT NULL
);

CREATE TABLE `Order_Detail` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_detail_id` int NOT NULL,
  `product_color_id` int NOT NULL,
  `price` int NOT NULL,
  `amount` int NOT NULL,
  `total_price` int NOT NULL
);

CREATE TABLE `Order_Status_Detail` (
  `order_id` int NOT NULL,
  `status_id` int NOT NULL,
  `date` datetime,
  PRIMARY KEY (`order_id`, `status_id`)
);

CREATE TABLE `Order_Status` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `Feedback` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `user_id` int NOT NULL,
  `fullname` varchar(255),
  `email` varchar(255),
  `phone_number` varchar(255),
  `content` varchar(255) NOT NULL
);

CREATE TABLE `Rating` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `stars` float NOT NULL,
  `content` varchar(255)
);

CREATE TABLE `Event` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `Discount` (
  `product_id` int NOT NULL,
  `event_id` int NOT NULL,
  `percentage` float NOT NULL,
  PRIMARY KEY (`product_id`, `event_id`)
);

ALTER TABLE `Role_Detail` ADD FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);

ALTER TABLE `Role_Detail` ADD FOREIGN KEY (`permission_id`) REFERENCES `Permission` (`id`);

ALTER TABLE `Order` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

ALTER TABLE `Feedback` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

ALTER TABLE `Cart` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

ALTER TABLE `Cart_Detail` ADD FOREIGN KEY (`cart_id`) REFERENCES `Cart` (`id`);

ALTER TABLE `Cart_Detail` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Rating` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

ALTER TABLE `Rating` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Order_Detail` ADD FOREIGN KEY (`order_id`) REFERENCES `Order` (`id`);

ALTER TABLE `Order_Detail` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Gallery` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Discount` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Discount` ADD FOREIGN KEY (`event_id`) REFERENCES `Event` (`id`);

ALTER TABLE `Product_Detail` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `User` ADD FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);

ALTER TABLE `Order_Status_Detail` ADD FOREIGN KEY (`status_id`) REFERENCES `Order_Status` (`id`);

ALTER TABLE `Order_Status_Detail` ADD FOREIGN KEY (`order_id`) REFERENCES `Order_Detail` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`);

ALTER TABLE `Product_Color` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Order_Detail` ADD FOREIGN KEY (`product_detail_id`) REFERENCES `Product_Detail` (`detail_id`);

ALTER TABLE `Order_Detail` ADD FOREIGN KEY (`product_color_id`) REFERENCES `Product_Color` (`id`);

ALTER TABLE `Cart_Detail` ADD FOREIGN KEY (`product_detail_id`) REFERENCES `Product_Detail` (`detail_id`);

ALTER TABLE `Cart_Detail` ADD FOREIGN KEY (`product_color_id`) REFERENCES `Product_Color` (`id`);
