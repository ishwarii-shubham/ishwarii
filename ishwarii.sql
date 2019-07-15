# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.38-MariaDB)
# Database: ishwarii
# Generation Time: 2019-06-09 20:15:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` int(1) NOT NULL COMMENT 'INACTIVE: -2,UNAVAILABLE: -1, ADDED: 0, AVAILABLE: 1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id`, `date_created`, `date_updated`, `category_name`, `status`)
VALUES
	(1,'2019-06-03 18:09:13','2019-06-09 20:57:24','Apricots',1),
	(2,'2019-06-09 16:42:30','2019-06-10 00:29:26','Flour',1);

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table price_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `price_list`;

CREATE TABLE `price_list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `sub_id` int(11) unsigned NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quantity` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `price` int(11) NOT NULL,
  `status` int(1) NOT NULL COMMENT 'INACTIVE: -2,UNAVAILABLE: -1, ADDED: 0, AVAILABLE: 1',
  `weight` int(1) NOT NULL COMMENT 'G: 0, KG: 1',
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `sub_id` (`sub_id`),
  CONSTRAINT `price_list_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`id`),
  CONSTRAINT `price_list_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `product_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `price_list` WRITE;
/*!40000 ALTER TABLE `price_list` DISABLE KEYS */;

INSERT INTO `price_list` (`id`, `product_id`, `sub_id`, `date_created`, `date_updated`, `quantity`, `price`, `status`, `weight`)
VALUES
	(1,4,1,'2019-06-10 00:12:59','2019-06-10 00:14:28','100',90,1,0),
	(2,4,1,'2019-06-10 00:12:59','2019-06-10 00:14:41','250',210,1,0),
	(3,4,1,'2019-06-10 00:12:59','2019-06-10 00:14:45','500',400,1,0),
	(4,4,1,'2019-06-10 00:12:59','2019-06-10 00:14:48','1',750,1,1),
	(5,5,2,'2019-06-10 01:07:47','2019-06-10 01:08:50','500',199,1,0),
	(6,5,2,'2019-06-10 01:07:47','2019-06-10 01:08:54','1',349,1,1);

/*!40000 ALTER TABLE `price_list` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_details`;

CREATE TABLE `product_details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL COMMENT 'INACTIVE: -2,UNAVAILABLE: -1, ADDED: 0, AVAILABLE: 1',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `product_details` WRITE;
/*!40000 ALTER TABLE `product_details` DISABLE KEYS */;

INSERT INTO `product_details` (`id`, `category_id`, `date_created`, `date_updated`, `product_name`, `description`, `properties`, `status`)
VALUES
	(4,1,'2019-06-03 18:12:57','2019-06-09 20:57:43','Dried Apricots','<b>This tasty and very healthy snack</b> enhances your vision, boosts your immune system and protects your skin. A storehouse of antioxidants, apricots prevents anaemia, improve digestion and strengthen bones. When farmed naturally without chemical fertilizers and pesticides, apricots can prevent Neovascular ARMD, an age-related eye problem that leads to loss of complete vision.','<p><b><i>Nutrients in 100 grams of apricot:</i></b></p>\r\n																 <ul style=\"list-style-type: circle; margin-left:20px;\">\r\n																		 <li>48 calories</li>\r\n																		 <li>1.40 gram protein</li>\r\n																		 <li>0.39 gram fat</li>\r\n																		 <li>11.12 gram carbohydrates</li>\r\n																		 <li>2 grams fibre</li>\r\n																		 <li>9.20 gram natural fruit sugar.</li>\r\n																 <ul>',1),
	(5,2,'2019-06-03 18:12:57','2019-06-10 00:32:26','Buckwheat Flour','<b>Kuttu ka aata | healthier substitute to white flour</b>\n <br><b>[Available only in season]</b>\n A staple of Indians during fasts, buckwheat flour is a high-fibre, high-protein alternative to white flour. It is also higher in many essential vitamins and minerals than white flour. The original Himalayan buckwheat flour is difficult to access and those available in local markets are generally adulterated. This is also a great substitute for people suffering from wheat allergy. Some researches indicate that buckwheat flour health benefits are equal to or even higher than vegetables and fruits.','<p><b><i>Nutrients in 100 grams Buckwheat flour:</i></b></p> \n <ul style=\"list-style-type: circle; margin-left:20px;\">\n <li>343 calories </li>\n <li>10% water </li>\n <li>13.3 gram protein </li>\n <li>71.5 gram carbohydrates </li>\n <li>10 gram fibre </li>\n <li>3.4 gram fat </li>\n <li>0.08 gram Omega- 3 </li>\n <li>0.96 gram Omega- 6 </li>\n <ul>',1);

/*!40000 ALTER TABLE `product_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_type`;

CREATE TABLE `product_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sub_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` int(1) NOT NULL COMMENT 'INACTIVE: -2,UNAVAILABLE: -1, ADDED: 0, AVAILABLE: 1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `product_type` WRITE;
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;

INSERT INTO `product_type` (`id`, `product_id`, `date_created`, `date_updated`, `sub_type`, `status`)
VALUES
	(1,4,'2019-06-10 00:08:36','2019-06-10 00:08:40','',1),
	(2,5,'2019-06-10 00:24:39','2019-06-10 01:04:46','',1);

/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table prouct_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `prouct_images`;

CREATE TABLE `prouct_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) unsigned NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` int(1) NOT NULL COMMENT 'INACTIVE: -1, ADDED: 0, AVAILABLE: 1',
  `image_type` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_id` (`sub_id`),
  CONSTRAINT `prouct_images_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `product_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `prouct_images` WRITE;
/*!40000 ALTER TABLE `prouct_images` DISABLE KEYS */;

INSERT INTO `prouct_images` (`id`, `sub_id`, `date_created`, `date_updated`, `image_url`, `status`, `image_type`)
VALUES
	(1,1,'2019-06-10 00:15:20','2019-06-10 00:15:56','images1/dried-apricots.jpg',1,'BP'),
	(2,1,'2019-06-10 00:15:20','2019-06-10 00:16:35','images1/dried-apricots1.jpg',1,'PP'),
	(3,1,'2019-06-10 00:15:20','2019-06-10 00:16:39','images1/dried-apricots2.jpg',1,'PP'),
	(4,1,'2019-06-10 00:15:20','2019-06-10 00:16:43','images1/dried-apricots3.jpg',1,'PP'),
	(5,1,'2019-06-10 00:15:20','2019-06-10 00:16:47','images1/dried-apricots4.jpg',1,'PP'),
	(6,2,'2019-06-10 01:05:06','2019-06-10 01:05:38','images1/basmati-rice.jpeg',1,'BP'),
	(7,2,'2019-06-10 01:06:10','2019-06-10 01:06:24','images1/basmati-rice1.jpeg',1,'PP'),
	(8,2,'2019-06-10 00:15:20','2019-06-10 01:10:21','images1/dried-apricots1.jpg',1,'PP'),
	(9,2,'2019-06-10 00:15:20','2019-06-10 01:10:27','images1/dried-apricots2.jpg',1,'PP'),
	(10,2,'2019-06-10 00:15:20','2019-06-10 01:10:31','images1/dried-apricots3.jpg',1,'PP');

/*!40000 ALTER TABLE `prouct_images` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
