-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for wishlist
CREATE DATABASE IF NOT EXISTS `wishlist` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wishlist`;

-- Dumping structure for table wishlist.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `product_img` varchar(125) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_qty` int(10) NOT NULL,
  KEY `PRIMARY KEY` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table wishlist.products: ~2 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`product_id`, `product_name`, `product_img`, `product_desc`, `product_price`, `product_qty`) VALUES
	(1, 'Hand Wash', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCORAlZ7dAD_2Ccm4TDpJaiYIUkHqJ1ZPzaw&usqp=CAU', 'This is a hand wash used in  cleaning. It has a very high cleaning effect', 300, 200),
	(2, 'Dish Wash', 'https://lh3.googleusercontent.com/IqikVgs86HCvBYzFZwrs-4zn4fmkjU3LgWGkBdq08YycM8MrU3hgXXJsqdZdQwbx9pUQXCM=s85', 'This is a detergent used in utensils cleaning. It has a very high rathering effect', 100, 23);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
