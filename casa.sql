-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.22 - MySQL Community Server (GPL)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for m102
DROP DATABASE IF EXISTS `m102`;
CREATE DATABASE IF NOT EXISTS `m102` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `m102`;


-- Dumping structure for table m102.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table m102.ci_sessions: ~4 rows (approximately)
DELETE FROM `ci_sessions`;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('57cff06fcf5501eff318f33ac23e08ab', '188.109.125.34', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1419250526, ''),
	('5d68d5562a0c3d253b3116c5f11428b5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 1419250513, ''),
	('7cbb67624cb3bc611c4f43111b1e8ad0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 1419251136, ''),
	('a347fb7c303675a8173800721710b770', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 1419256276, '');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Dumping structure for table m102.hotel
DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `Code` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `pobox` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `wifi` enum('No','Yes') NOT NULL,
  `parking` enum('No','Yes') NOT NULL,
  `tv` enum('No','Yes') NOT NULL,
  `ac` enum('No','Yes') NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table m102.hotel: ~2 rows (approximately)
DELETE FROM `hotel`;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` (`Code`, `name`, `street`, `pobox`, `city`, `wifi`, `parking`, `tv`, `ac`) VALUES
	(1, 'Hilton', 'Egnatia', 54124, 'Thessaloniki', 'Yes', 'Yes', 'Yes', 'Yes');
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;


-- Dumping structure for table m102.reservation
DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Code` int(11) NOT NULL AUTO_INCREMENT,
  `roomcode` tinyint(4) NOT NULL,
  `clientcode` tinyint(4) NOT NULL,
  `referencecode` tinyint(4) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `personnum` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `reservationdate` date NOT NULL,
  PRIMARY KEY (`Code`),
  KEY `fk_room` (`roomcode`),
  KEY `fk_client` (`clientcode`),
  CONSTRAINT `fk_client` FOREIGN KEY (`clientcode`) REFERENCES `user` (`Code`),
  CONSTRAINT `fk_room` FOREIGN KEY (`roomcode`) REFERENCES `room` (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table m102.reservation: ~0 rows (approximately)
DELETE FROM `reservation`;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;


-- Dumping structure for table m102.reserved
DROP TABLE IF EXISTS `reserved`;
CREATE TABLE IF NOT EXISTS `reserved` (
  `Code` bigint(20) NOT NULL,
  `ReseravtionCode` bigint(20) NOT NULL,
  `ReaservedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table m102.reserved: ~0 rows (approximately)
DELETE FROM `reserved`;
/*!40000 ALTER TABLE `reserved` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserved` ENABLE KEYS */;


-- Dumping structure for table m102.room
DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `Code` tinyint(4) NOT NULL AUTO_INCREMENT,
  `hotelcode` tinyint(4) NOT NULL,
  `roomtype` tinyint(4) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `price` float NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Code`),
  KEY `fk_room_1` (`hotelcode`),
  KEY `fk_roomtype` (`roomtype`),
  CONSTRAINT `fk_roomtype` FOREIGN KEY (`RoomType`) REFERENCES `roomtype` (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table m102.room: ~3 rows (approximately)
DELETE FROM `room`;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` (`Code`, `hotelcode`, `roomtype`, `quantity`, `price`, `foto`) VALUES
	(1, 1, 1, 10, 45, NULL),
	(2, 1, 2, 10, 55, NULL),
	(3, 1, 3, 10, 65, NULL);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;


-- Dumping structure for table m102.roomtype
DROP TABLE IF EXISTS `roomtype`;
CREATE TABLE IF NOT EXISTS `roomtype` (
  `Code` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` enum('Monoklino','Diklino','Triklino') NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table m102.roomtype: ~2 rows (approximately)
DELETE FROM `roomtype`;
/*!40000 ALTER TABLE `roomtype` DISABLE KEYS */;
INSERT INTO `roomtype` (`Code`, `description`) VALUES
	(1, 'Monoklino'),
	(2, 'Diklino'),
	(3, 'Triklino');
/*!40000 ALTER TABLE `roomtype` ENABLE KEYS */;


-- Dumping structure for table m102.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Code` tinyint(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','manager','client') NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_number` varchar(15) NOT NULL,
  `doctype` varchar(15) NOT NULL,
  `street` varchar(30) NOT NULL,
  `pobox` int(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `remark` varchar(40) NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table m102.user: ~2 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`Code`, `email`, `username`, `password`, `user_type`, `name`, `id_number`, `doctype`, `street`, `pobox`, `city`, `country`, `remark`) VALUES
	(1, 'anselal@auth.gr', 'anselal', '47cab398fdc08f7abc8c700bf04a7186a1330db5', 'admin', 'Anastasios Selalmazidis', '', '', '', 0, '', '', ''),
	(3, 'foo@bar.org', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'client', 'test client', '', '', '', 0, '', '', '');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
