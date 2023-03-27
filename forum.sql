-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.72-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for forum
DROP DATABASE IF EXISTS `forum`;
CREATE DATABASE IF NOT EXISTS `forum` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `forum`;

-- Dumping structure for table forum.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(8) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cat_description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_unique` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table forum.categories: ~3 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
	(1, 'Test', 'A test category'),
	(2, 'Another Category', 'This is a secound raw test'),
	(3, 'A new CS Category', 'This is a sample category');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table forum.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_content` text COLLATE latin1_general_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_topic` (`post_topic`),
  KEY `post_by` (`post_by`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table forum.posts: ~4 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
	(1, 'This is a sample comment', '2022-02-23 19:56:31', 1, 1),
	(2, 'Second topic to crash the sql', '2022-02-23 20:15:05', 2, 1),
	(3, 'a reply for topic 2', '2022-02-23 21:00:43', 2, 1),
	(4, 'A new topic for discussion', '2022-02-24 08:32:23', 3, 2);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table forum.topics
DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_cat` (`topic_cat`),
  KEY `topic_by` (`topic_by`),
  CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table forum.topics: ~3 rows (approximately)
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
REPLACE INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
	(1, 'Almost done', '2022-02-23 19:56:31', 2, 1),
	(2, 'Fooling around', '2022-02-23 20:15:05', 2, 1),
	(3, 'Testing the app', '2022-02-24 08:32:23', 3, 2);
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;

-- Dumping structure for taforumforumforumforumusersusersble forum.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `user_pass` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `user_email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `user_date` datetime NOT NULL,
  `user_level` int(8) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name_unique` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table forum.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`) VALUES
	(1, 'arios', '0ec224e3e63423f4af2aa04616020e379c661a7c', '8855@greengates.edu.mx', '2022-02-23 19:08:01', 0),
	(2, 'renan', 'ebfc7910077770c8340f63cd2dca2ac1f120444f', '8524@greengates.edu.mx', '2022-02-24 08:31:11', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;