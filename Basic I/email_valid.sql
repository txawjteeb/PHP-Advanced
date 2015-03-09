-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: email_valid
-- ------------------------------------------------------
-- Server version	5.5.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email`
--

LOCK TABLES `email` WRITE;
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` VALUES (23,'itxawjteeb@gmail.com','2015-03-06 21:19:44','2015-03-06 21:19:44'),(24,'itxawjteeb@gmail.com','2015-03-06 21:24:20','2015-03-06 21:24:20'),(25,'itxawjteeb@gmail.com','2015-03-06 21:25:27','2015-03-06 21:25:27'),(26,'itxawjteeb@gmail.com','2015-03-06 21:25:56','2015-03-06 21:25:56'),(27,'itxawjteeb@gmail.com','2015-03-06 21:26:10','2015-03-06 21:26:10'),(28,'itxawjteeb@gmail.com','2015-03-06 21:26:23','2015-03-06 21:26:23'),(29,'itxawjteeb@gmail.com','2015-03-06 21:27:28','2015-03-06 21:27:28'),(30,'itxawjteeb@gmail.com','2015-03-06 21:28:11','2015-03-06 21:28:11'),(31,'itxawjteeb@gmail.com','2015-03-06 21:28:57','2015-03-06 21:28:57'),(32,'dlee148@student.cccd.edu','2015-03-06 21:29:42','2015-03-06 21:29:42'),(33,'dlee148@student.cccd.edu','2015-03-06 21:30:36','2015-03-06 21:30:36'),(34,'iamsuper@hotmail.com','2015-03-06 21:40:20','2015-03-06 21:40:20');
/*!40000 ALTER TABLE `email` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-08 14:48:41
