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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table wishlist.products: ~4 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`product_id`, `product_name`, `product_img`, `product_desc`, `product_price`, `product_qty`) VALUES
	(1, 'Hand Wash', 'https://via.placeholder.com/150', 'This is a hand wash used in  cleaning. It has a very high cleaning effect, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae fugiat delectus architecto adipisci praesentium.', 300, 200),
	(2, 'Dish Wash', 'https://via.placeholder.com/150', 'This is a detergent used in utensils cleaning. It has a very high rathering effect', 100, 23),
	(3, 'Item 3', 'https://via.placeholder.com/150', 'This is item 3 You can create a variable to store the context of the current element', 50, 10),
	(4, 'Item 4', 'https://via.placeholder.com/150', 'This is item 4 Specify the width first, then height. Height is optional: if no height is specified, your placeholder image will be a square. So this example', 60, 60);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table wishlist.wishlist
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_size` varchar(50) DEFAULT '',
  `product_qty` varchar(11) NOT NULL,
  `product_price` varchar(11) NOT NULL,
  KEY `PRIMARY KEY` (`wishlist_id`),
  KEY `FK__products` (`product_id`),
  CONSTRAINT `FK__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table wishlist.wishlist: ~0 rows (approximately)
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
INSERT INTO `wishlist` (`wishlist_id`, `product_id`, `product_size`, `product_qty`, `product_price`) VALUES
	(1, 1, '0.5 litre', '3', '900'),
	(2, 1, '0.5 litre', '4', '1200'),
	(3, 2, '5 litre', '3', '300'),
	(4, 2, '0.5 litre', '11', '1100'),
	(5, 2, '0.5 litre', '11', '1100'),
	(6, 2, '0.5 litre', '11', '1100'),
	(7, 2, '0.5 litre', '11', '1100'),
	(8, 2, '0.5 litre', '11', '1100'),
	(9, 2, '0.5 litre', '11', '1100');
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
