-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.11 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win64
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных cake_db
CREATE DATABASE IF NOT EXISTS `cake_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cake_db`;


-- Дамп структуры для таблица cake_db.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_ip` varchar(14) DEFAULT NULL,
  `user_browser` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `user_name` varchar(65) NOT NULL,
  `Email` varchar(65) NOT NULL,
  `Homepage` varchar(100) DEFAULT NULL,
  `user_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
