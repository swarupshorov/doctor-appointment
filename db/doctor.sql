-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for doctor
DROP DATABASE IF EXISTS `doctor`;
CREATE DATABASE IF NOT EXISTS `doctor` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_estonian_ci */;
USE `doctor`;

-- Dumping structure for table doctor.appointment
DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL COMMENT 'doctor_id',
  `patient_id` int(11) DEFAULT NULL,
  `chamber_id` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table doctor.chamber
DROP TABLE IF EXISTS `chamber`;
CREATE TABLE IF NOT EXISTS `chamber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `place` varchar(50) NOT NULL DEFAULT '0',
  `in_time` time NOT NULL DEFAULT '00:00:00',
  `out_time` time NOT NULL DEFAULT '00:00:00',
  `user_id` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table doctor.city
DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- Data exporting was unselected.
-- Dumping structure for table doctor.schedule
DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_view` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `chamber_id` int(11) NOT NULL,
  `date` date NOT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table doctor.specialist
DROP TABLE IF EXISTS `specialist`;
CREATE TABLE IF NOT EXISTS `specialist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table doctor.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table doctor.user_meta
DROP TABLE IF EXISTS `user_meta`;
CREATE TABLE IF NOT EXISTS `user_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `cell_no` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `special_id` varchar(50) DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
