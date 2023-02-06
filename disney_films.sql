# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.41)
# Database: sjdisneyFilms
# Generation Time: 2023-02-06 12:32:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table films
# ------------------------------------------------------------

DROP TABLE IF EXISTS `films`;

CREATE TABLE `films` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `year` year(4) NOT NULL,
  `character` varchar(250) NOT NULL DEFAULT '',
  `imageURL` varchar(2048) NOT NULL DEFAULT '',
  `rating` enum('0','1','2','3','4','5','6','7','8','9','10') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;

INSERT INTO `films` (`id`, `title`, `year`, `character`, `imageURL`, `rating`)
VALUES
	(1,'Ralph Breaks the Internet','2018','Wreck-It-Ralph','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFbnLkPIQdbZ0TANmL5d2gpJpffoOoec0nKEAEGmvJK__MhQFdRdlbeA6DLlO341O9Od0&usqp=CAU','8'),
	(2,'Strange World','2022','Searcher Clade','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdleSG07Xcp17_6T9h8ot6t7OrbknbDJgayg&usqp=CAU','7'),
	(3,'Descendants','2015','Mal','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0IltCL8BfB_dfGRz3g41Zv9Z2hdd1QfUMEw&usqp=CAU','7'),
	(4,'Zombies','2018','Zed','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsuclvLxj--ySfGBy3frdLufJNXQNS-3xkuQ&usqp=CAU','8'),
	(5,'Moana','2016','Moana','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr5xtVumNKKNNDWzspe5JwzYO2sokqcZ_BLw&usqp=CAU','8');

/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
