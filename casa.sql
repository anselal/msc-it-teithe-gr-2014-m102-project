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
CREATE DATABASE IF NOT EXISTS `m102` /*!40100 DEFAULT CHARACTER SET greek */;
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

-- Dumping data for table m102.ci_sessions: ~14 rows (approximately)
DELETE FROM `ci_sessions`;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('30a951336611f229698c303755ef2bc2', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 1421096964, ''),
	('eed5277b317c518b0ac91f0c7724c33b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 1421098697, '');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table m102.hotel: ~1 rows (approximately)
DELETE FROM `hotel`;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` (`Code`, `name`, `street`, `pobox`, `city`, `wifi`, `parking`, `tv`, `ac`) VALUES
	(1, 'Hilton', 'Egnatia', 54124, 'Thessaloniki', 'Yes', 'Yes', 'Yes', 'Yes'),
	(2, 'Le Palace', 'Tsimiski 12', 54624, 'Thessaloniki', 'Yes', 'No', 'Yes', 'Yes'),
	(3, 'Hotel Nikopolis Thessaloniki', 'Ασκληπιού 16-18', 57001, 'Thessaloniki', 'Yes', 'Yes', 'Yes', 'Yes');
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;


-- Dumping structure for table m102.reservation
DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Code` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` varchar(3) NOT NULL,
  `hotelcode` tinyint(4) NOT NULL,
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
  KEY `fk_client` (`clientcode`),
  KEY `fk_room_number` (`room_number`),
  KEY `fk_hotel_code` (`hotelcode`),
  CONSTRAINT `fk_client` FOREIGN KEY (`clientcode`) REFERENCES `user` (`Code`),
  CONSTRAINT `fk_hotel_code` FOREIGN KEY (`hotelcode`) REFERENCES `room` (`hotelcode`),
  CONSTRAINT `fk_room_number` FOREIGN KEY (`room_number`) REFERENCES `room` (`room_number`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- Dumping data for table m102.reservation: ~0 rows (approximately)
DELETE FROM `reservation`;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` (`Code`, `room_number`, `hotelcode`, `clientcode`, `referencecode`, `checkin`, `checkout`, `personnum`, `price`, `breakfast`, `remarks`, `reservationdate`) VALUES
	(1, '101', 2, 3, 2, '2015-04-01', '2015-04-04', 2, 55, 1, '', '2015-01-01'),
	(2, '102', 2, 9, 3, '2015-04-01', '2015-04-04', 2, 55, 1, '', '2015-01-01'),
	(3, '103', 2, 9, 4, '2015-04-01', '2015-04-04', 2, 55, 1, '', '2015-01-01'),
	(5, '201', 2, 9, 5, '2015-04-01', '2015-04-08', 2, 55, 1, '', '2015-01-01'),
	(6, '201', 2, 9, 6, '2015-04-13', '2015-04-12', 2, 55, 1, '', '2015-01-01'),
	(7, '201', 2, 9, 7, '2015-04-18', '2015-04-22', 2, 75, 1, '', '2015-01-01'),
	(8, '201', 2, 9, 8, '2015-04-23', '2015-04-27', 2, 55, 1, '', '2015-01-01'),
	(9, '201', 2, 9, 9, '2015-04-28', '2015-04-30', 2, 55, 1, '', '2015-01-01'),
	(10, '202', 2, 9, 10, '2015-04-01', '2015-04-08', 2, 55, 1, '', '2015-01-01'),
	(11, '202', 2, 9, 11, '2015-04-13', '2015-04-12', 2, 45, 1, '', '2015-01-01'),
	(12, '202', 2, 9, 12, '2015-04-18', '2015-04-22', 2, 55, 1, '', '2015-01-01'),
	(13, '202', 2, 9, 13, '2015-04-23', '2015-04-27', 2, 55, 1, '', '2015-01-01'),
	(14, '202', 2, 9, 14, '2015-04-28', '2015-04-30', 2, 55, 1, '', '2015-01-01'),
	(15, '203', 2, 9, 15, '2015-04-01', '2015-04-08', 2, 78, 1, '', '2015-01-01'),
	(16, '203', 2, 9, 16, '2015-04-13', '2015-04-12', 2, 55, 1, '', '2015-01-01'),
	(17, '203', 2, 9, 17, '2015-04-18', '2015-04-22', 2, 55, 1, '', '2015-01-01'),
	(18, '203', 2, 9, 18, '2015-04-23', '2015-04-27', 2, 55, 1, '', '2015-01-01'),
	(19, '203', 2, 9, 19, '2015-04-28', '2015-04-30', 2, 67, 1, '', '2015-01-01'),
	(20, '204', 2, 9, 20, '2015-04-01', '2015-04-08', 2, 55, 1, '', '2015-01-01'),
	(21, '204', 2, 9, 21, '2015-04-13', '2015-04-12', 2, 55, 1, '', '2015-01-01'),
	(22, '204', 2, 9, 22, '2015-04-18', '2015-04-22', 2, 65, 1, '', '2015-01-01'),
	(23, '204', 2, 9, 23, '2015-04-23', '2015-04-27', 2, 55, 1, '', '2015-01-01'),
	(24, '204', 2, 9, 24, '2015-04-28', '2015-04-30', 2, 55, 1, '', '2015-01-01'),
	(25, '301', 2, 9, 25, '2015-04-01', '2015-04-08', 2, 55, 1, '', '2015-01-01'),
	(26, '301', 2, 9, 26, '2015-04-13', '2015-04-12', 2, 55, 1, '', '2015-01-01'),
	(27, '301', 2, 9, 27, '2015-04-18', '2015-04-22', 2, 65, 1, '', '2015-01-01'),
	(28, '301', 2, 9, 28, '2015-04-23', '2015-04-27', 2, 55, 1, '', '2015-01-01'),
	(29, '301', 2, 9, 29, '2015-04-28', '2015-04-30', 2, 55, 1, '', '2015-01-01'),
	(30, '302', 2, 9, 30, '2015-04-01', '2015-04-08', 2, 55, 1, '', '2015-01-01'),
	(31, '302', 2, 9, 31, '2015-04-13', '2015-04-12', 2, 55, 1, '', '2015-01-01'),
	(32, '302', 2, 9, 32, '2015-04-18', '2015-04-22', 2, 65, 1, '', '2015-01-01'),
	(33, '302', 2, 9, 33, '2015-04-23', '2015-04-27', 2, 55, 1, '', '2015-01-01'),
	(34, '302', 2, 9, 34, '2015-04-28', '2015-04-30', 2, 55, 1, '', '2015-01-01'),
	(35, '101', 1, 1, 35, '2015-04-01', '2015-04-08', 1, 40, 1, '', '2014-12-04'),
	(36, '101', 1, 1, 36, '2015-04-13', '2015-04-12', 1, 40, 1, '', '2014-12-04'),
	(37, '101', 1, 1, 37, '2015-04-18', '2015-04-22', 1, 40, 1, '', '2014-12-04'),
	(38, '101', 1, 1, 38, '2015-04-23', '2015-04-27', 1, 45, 1, '', '2014-12-04'),
	(39, '101', 1, 1, 39, '2015-04-28', '2015-04-30', 1, 34, 1, '', '2014-12-04'),
	(40, '102', 1, 1, 40, '2015-04-01', '2015-04-08', 1, 45, 1, '', '2014-12-04'),
	(41, '102', 1, 1, 41, '2015-04-13', '2015-04-12', 1, 55, 1, '', '2014-12-04'),
	(42, '102', 1, 1, 42, '2015-04-18', '2015-04-22', 1, 60, 1, '', '2014-12-04'),
	(43, '102', 1, 1, 43, '2015-04-23', '2015-04-27', 1, 60, 1, '', '2014-12-04'),
	(44, '102', 1, 1, 44, '2015-04-28', '2015-04-30', 1, 55, 1, '', '2014-12-04'),
	(45, '103', 1, 1, 45, '2015-04-01', '2015-04-08', 1, 45, 1, '', '2014-12-04'),
	(46, '103', 1, 1, 46, '2015-04-13', '2015-04-12', 1, 40, 1, '', '2014-12-04'),
	(47, '103', 1, 1, 47, '2015-04-18', '2015-04-22', 1, 55, 1, '', '2014-12-04'),
	(48, '103', 1, 1, 48, '2015-04-23', '2015-04-27', 1, 55, 1, '', '2014-12-04'),
	(49, '103', 1, 1, 49, '2015-04-28', '2015-04-30', 1, 67, 1, '', '2014-12-04'),
	(50, '104', 1, 1, 50, '2015-04-01', '2015-04-08', 1, 55, 1, '', '2014-12-04'),
	(51, '104', 1, 1, 51, '2015-04-13', '2015-04-12', 1, 55, 1, '', '2014-12-04'),
	(52, '104', 1, 1, 52, '2015-04-18', '2015-04-22', 1, 35, 1, '', '2014-12-04'),
	(53, '104', 1, 1, 53, '2015-04-23', '2015-04-27', 1, 45, 1, '', '2014-12-04'),
	(54, '104', 1, 1, 54, '2015-04-28', '2015-04-30', 1, 65, 1, '', '2014-12-04'),
	(55, '105', 1, 1, 55, '2015-04-01', '2015-04-08', 1, 65, 1, '', '2014-12-04'),
	(56, '105', 1, 1, 56, '2015-04-13', '2015-04-12', 1, 75, 1, '', '2014-12-04'),
	(57, '105', 1, 1, 57, '2015-04-18', '2015-04-22', 1, 40, 1, '', '2014-12-04'),
	(58, '105', 1, 1, 58, '2015-04-23', '2015-04-27', 1, 40, 1, '', '2014-12-04'),
	(59, '105', 1, 1, 59, '2015-04-28', '2015-04-30', 1, 35, 1, '', '2014-12-04'),
	(60, '106', 1, 1, 60, '2015-04-01', '2015-04-08', 1, 65, 1, '', '2014-12-04'),
	(61, '106', 1, 1, 61, '2015-04-13', '2015-04-12', 1, 56, 1, '', '2014-12-04'),
	(62, '106', 1, 1, 62, '2015-04-18', '2015-04-22', 1, 55, 1, '', '2014-12-04'),
	(63, '106', 1, 1, 63, '2015-04-23', '2015-04-27', 1, 45, 1, '', '2014-12-04'),
	(64, '106', 1, 1, 64, '2015-04-28', '2015-04-30', 1, 35, 1, '', '2014-12-04');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;


-- Dumping structure for table m102.room
DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_number` varchar(3) NOT NULL,
  `hotelcode` tinyint(4) NOT NULL,
  `roomtype` tinyint(4) NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`room_number`,`hotelcode`),
  KEY `fk_room_1` (`hotelcode`),
  KEY `fk_roomtype` (`roomtype`),
  CONSTRAINT `fk_hotelcode` FOREIGN KEY (`hotelcode`) REFERENCES `hotel` (`Code`),
  CONSTRAINT `fk_roomtype` FOREIGN KEY (`RoomType`) REFERENCES `roomtype` (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table m102.room: ~18 rows (approximately)
DELETE FROM `room`;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` (`room_number`, `hotelcode`, `roomtype`, `price`, `foto`) VALUES
	('101', 1, 1, 45, NULL),
	('102', 1, 2, 55, NULL),
	('103', 1, 3, 65, NULL),
	('104', 1, 1, 45, NULL),
	('105', 1, 1, 45, NULL),
	('106', 1, 2, 55, NULL),
	('201', 1, 2, 55, NULL),
	('201', 2, 1, 55, NULL),
	('202', 1, 1, 45, NULL),
	('202', 2, 1, 55, NULL),
	('203', 1, 2, 55, NULL),
	('203', 2, 2, 55, NULL),
	('204', 1, 1, 45, NULL),
	('204', 2, 3, 65, NULL),
	('205', 1, 1, 45, NULL),
	('206', 1, 3, 65, NULL),
	('301', 1, 1, 45, NULL),
	('301', 2, 2, 65, NULL),
	('302', 1, 1, 45, NULL),
	('302', 2, 3, 75, NULL),
	('303', 1, 2, 55, NULL),
	('304', 1, 2, 55, NULL),
	('305', 1, 2, 55, NULL),
	('306', 1, 3, 65, NULL);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;


-- Dumping structure for table m102.roomtype
DROP TABLE IF EXISTS `roomtype`;
CREATE TABLE IF NOT EXISTS `roomtype` (
  `Code` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` enum('Monoklino','Diklino','Triklino','Τζούνιορ Σουίτα') NOT NULL,
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
  `user_type` enum('admin','manager','client') NOT NULL DEFAULT 'client',
  `name` varchar(30) NOT NULL,
  `id_number` varchar(15) DEFAULT NULL,
  `doctype` varchar(15) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `pobox` int(6) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `remark` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table m102.user: ~4 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`Code`, `email`, `username`, `password`, `user_type`, `name`, `id_number`, `doctype`, `street`, `pobox`, `city`, `country`, `remark`) VALUES
	(1, 'anselal@auth.gr', 'anselal', '47cab398fdc08f7abc8c700bf04a7186a1330db5', 'admin', 'Anastasios Selalmazidis', '', '', '', 0, '', '', ''),
	(3, 'foo@bar.org', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'client', 'test client', '', '', '', 0, '', '', ''),
	(6, 'apostolia2000@gmail.com', 'apostolia', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin', 'Apostolia', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'tasos@papafilakis.gr', 'tasosp', 'd38ae5ccf86cb0e54627b19c8064f0188ec8fbaa', 'admin', 'Tassos Papafylakis', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
