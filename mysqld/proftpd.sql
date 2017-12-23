-- MySQL dump 10.13  Distrib 5.5.43, for Linux (i686)
--
-- Host: localhost    Database: proftpd
-- ------------------------------------------------------
-- Server version	5.5.43-alt0.M70P.1

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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(30) NOT NULL,
  `gid` int(11) NOT NULL,
  `members` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (2,'cam',5002,'cam');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_history`
--

DROP TABLE IF EXISTS `login_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `client_ip` varchar(20) NOT NULL,
  `server_ip` varchar(20) NOT NULL,
  `protocol` varchar(10) NOT NULL,
  `when` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_history`
--

LOCK TABLES `login_history` WRITE;
/*!40000 ALTER TABLE `login_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `shell` varchar(20) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `login_count` int(15) DEFAULT NULL,
  `last_err_login` datetime DEFAULT NULL,
  `err_login_count` int(15) DEFAULT NULL,
  `last_accessed` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='Таблица пользователей';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cam','zaq1xsw2',5002,5002,'/home/ftp','/sbin/nologin','0000-00-00 00:00:00',0,'2015-11-06 03:05:38',13,NULL),(12,'vova3-3','4dfcce',5005,501,'/home/campic/web/wa-data/public/campic/cams/vova3-3','/sbin/nologin',NULL,NULL,NULL,NULL,NULL),(11,'vova3-2','6a1120',5004,501,'/home/campic/web/wa-data/public/campic/cams/vova3-2','/sbin/nologin',NULL,NULL,NULL,NULL,NULL),(10,'vova3-1','82b3bd',5003,501,'/home/campic/web/wa-data/public/campic/cams/vova3-1','/sbin/nologin',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xfer_errors`
--

DROP TABLE IF EXISTS `xfer_errors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xfer_errors` (
  `unic_id` int(32) NOT NULL AUTO_INCREMENT,
  `timestamp` int(15) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `file_and_path` tinytext NOT NULL,
  `client_name` varchar(127) NOT NULL,
  `client_IP` varchar(15) NOT NULL,
  `client_command` varchar(5) NOT NULL,
  PRIMARY KEY (`unic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Таблица ошибок при работе';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xfer_errors`
--

LOCK TABLES `xfer_errors` WRITE;
/*!40000 ALTER TABLE `xfer_errors` DISABLE KEYS */;
/*!40000 ALTER TABLE `xfer_errors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xfer_table`
--

DROP TABLE IF EXISTS `xfer_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xfer_table` (
  `unic_id` int(32) NOT NULL AUTO_INCREMENT,
  `timestamp` int(15) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `file_and_path` tinytext NOT NULL,
  `bytes` int(15) NOT NULL DEFAULT '0',
  `client_name` varchar(127) NOT NULL,
  `client_IP` varchar(15) NOT NULL,
  `client_command` varchar(5) NOT NULL,
  `send_time` varchar(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`unic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Таблица, чё приняли-передали';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xfer_table`
--

LOCK TABLES `xfer_table` WRITE;
/*!40000 ALTER TABLE `xfer_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `xfer_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-17 12:45:45
