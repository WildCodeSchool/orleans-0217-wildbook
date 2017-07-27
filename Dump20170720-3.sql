-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: wildbook
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `availability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `availability`
--

LOCK TABLES `availability` WRITE;
/*!40000 ALTER TABLE `availability` DISABLE KEYS */;
INSERT INTO `availability` VALUES (60,'En recherche de stage'),(61,'En Poste'),(62,'En Stage'),(63,'En recherche d\'un poste'),(64,'En Formation');
/*!40000 ALTER TABLE `availability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campus_manager`
--

DROP TABLE IF EXISTS `campus_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campus_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `firsname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_88BD459AA76ED395` (`user_id`),
  KEY `IDX_88BD459AC32A47EE` (`school_id`),
  CONSTRAINT `FK_88BD459AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`),
  CONSTRAINT `FK_88BD459AC32A47EE` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campus_manager`
--

LOCK TABLES `campus_manager` WRITE;
/*!40000 ALTER TABLE `campus_manager` DISABLE KEYS */;
INSERT INTO `campus_manager` VALUES (20,100,201,'John','Le John'),(21,101,202,'Damien','Armenté'),(22,102,203,'Maxime','Cornuau'),(23,103,204,'Elisa','Etcheverry'),(24,104,205,'Olivier','Trentesaux'),(25,105,206,'Marine','Bonte'),(26,106,207,'Franck','Olivier'),(27,107,208,'Justine','Lacousse'),(28,108,209,'Claire','Job');
/*!40000 ALTER TABLE `campus_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (49,'Application web'),(50,'Site vitrine'),(51,'Application Mobile'),(52,'Hackathon');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `promotion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  KEY `IDX_957A6479139DF194` (`promotion_id`),
  CONSTRAINT `FK_957A6479139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (199,'super1','super1','superadmin1@gmail.com','superadmin1@gmail.com',1,NULL,'$2y$13$fF1EE0x0h7nu9Jqmqi23ke8w8T/dYb9cw.NS4lFWaxjuV0bfLFqhS','2017-07-20 13:02:32',NULL,NULL,'a:2:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:16:\"ROLE_SUPER_ADMIN\";}',NULL),(200,'super2','super2','superadmin2@gmail.com','superadmin2@gmail.com',1,NULL,'$2y$13$fF1EE0x0h7nu9Jqmqi23ke8w8T/dYb9cw.NS4lFWaxjuV0bfLFqhS','2017-06-01 12:32:52',NULL,NULL,'a:2:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:16:\"ROLE_SUPER_ADMIN\";}',NULL),(201,'camp1','camp1','camp1@gmail.com','camp1@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(202,'camp2','camp2','camp2@gmail.com','camp2@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(203,'camp3','camp3','camp3@gmail.com','camp3@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(204,'camp4','camp4','camp4@gmail.com','camp4@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(205,'camp5','camp5','camp5@gmail.com','camp5@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(206,'camp6','camp6','camp6@gmail.com','camp6@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(207,'camp7','camp7','camp7@gmail.com','camp7@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(208,'camp8','camp8','camp8@gmail.com','camp8@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(209,'camp9','camp9','camp9@gmail.com','camp9@gmail.com',1,NULL,'$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su','2017-06-01 12:32:52',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL),(210,'wilder1','wilder1','wilder1@gmail.com','wilder1@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 21:51:45',NULL,NULL,'a:0:{}',132),(211,'wilder2','wilder2','wilder2@gmail.com','wilder2@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 21:57:21',NULL,NULL,'a:0:{}',132),(212,'wilder3','wilder3','wilder3@gmail.com','wilder3@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 22:03:03',NULL,NULL,'a:0:{}',132),(213,'wilder4','wilder4','wilder4@gmail.com','wilder4@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 22:03:26',NULL,NULL,'a:0:{}',132),(214,'wilder5','wilder5','wilder5@gmail.com','wilder5@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 10:14:26',NULL,NULL,'a:0:{}',132),(215,'wilder6','wilder6','wilder6@gmail.com','wilder6@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',132),(216,'wilder7','wilder7','wilder7@gmail.com','wilder7@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 11:38:19',NULL,NULL,'a:0:{}',132),(217,'wilder8','wilder8','wilder8@gmail.com','wilder8@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 22:24:47',NULL,NULL,'a:0:{}',132),(218,'wilder9','wilder9','wilder9@gmail.com','wilder9@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 22:26:55',NULL,NULL,'a:0:{}',131),(219,'wilder10','wilder10','wilder10@gmail.com','wilder10@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 22:29:19',NULL,NULL,'a:0:{}',131),(220,'wilder11','wilder11','wilder11@gmail.com','wilder11@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-19 22:31:47',NULL,NULL,'a:0:{}',131),(221,'wilder12','wilder12','wilder12@gmail.com','wilder12@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',133),(222,'wilder13','wilder13','wilder13@gmail.com','wilder13@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',133),(223,'wilder14','wilder14','wilder14@gmail.com','wilder14@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',133),(224,'wilder15','wilder15','wilder15@gmail.com','wilder15@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',134),(225,'wilder16','wilder16','wilder16@gmail.com','wilder16@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',135),(226,'wilder17','wilder17','wilder17@gmail.com','wilder17@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 11:52:13',NULL,NULL,'a:0:{}',135),(227,'wilder18','wilder18','wilder18@gmail.com','wilder18@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 11:57:27',NULL,NULL,'a:0:{}',135),(228,'wilder19','wilder19','wilder19@gmail.com','wilder19@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 12:00:13',NULL,NULL,'a:0:{}',135),(229,'wilder20','wilder20','wilder20@gmail.com','wilder20@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 12:05:37',NULL,NULL,'a:0:{}',138),(230,'wilder21','wilder21','wilder21@gmail.com','wilder21@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 12:08:39',NULL,NULL,'a:0:{}',138),(231,'wilder22','wilder22','wilder22@gmail.com','wilder22@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 12:18:00',NULL,NULL,'a:0:{}',136),(232,'wilder23','wilder23','wilder23@gmail.com','wilder23@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-07-20 12:21:00',NULL,NULL,'a:0:{}',136),(233,'wilder24','wilder24','wilder24@gmail.com','wilder24@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',137),(234,'wilder25','wilder25','wilder25@gmail.com','wilder25@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',140),(235,'wilder26','wilder26','wilder26@gmail.com','wilder26@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',140),(236,'wilder27','wilder27','wilder27@gmail.com','wilder27@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',141),(237,'wilder28','wilder28','wilder28@gmail.com','wilder28@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',141),(238,'wilder29','wilder29','wilder29@gmail.com','wilder29@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(239,'wilder30','wilder30','wilder30@gmail.com','wilder30@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(240,'wilder31','wilder31','wilder31@gmail.com','wilder31@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(241,'wilder32','wilder32','wilder32@gmail.com','wilder32@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(242,'wilder33','wilder33','wilder33@gmail.com','wilder33@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(243,'wilder34','wilder34','wilder34@gmail.com','wilder34@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(244,'wilder35','wilder35','wilder35@gmail.com','wilder35@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(245,'wilder36','wilder36','wilder36@gmail.com','wilder36@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(246,'wilder37','wilder37','wilder37@gmail.com','wilder37@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(247,'wilder38','wilder38','wilder38@gmail.com','wilder38@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(248,'wilder39','wilder39','wilder39@gmail.com','wilder39@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(249,'wilder40','wilder40','wilder40@gmail.com','wilder40@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(250,'wilder41','wilder41','wilder41@gmail.com','wilder41@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(251,'wilder42','wilder42','wilder42@gmail.com','wilder42@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(252,'wilder43','wilder43','wilder43@gmail.com','wilder43@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(253,'wilder44','wilder44','wilder44@gmail.com','wilder44@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL),(254,'wilder45','wilder45','wilder45@gmail.com','wilder45@gmail.com',1,NULL,'$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116','2017-06-01 12:32:52',NULL,NULL,'a:0:{}',NULL);
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_wilder`
--

DROP TABLE IF EXISTS `home_wilder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_wilder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wilder_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5B6C44EE6BF8E6F7` (`wilder_id`),
  CONSTRAINT `FK_5B6C44EE6BF8E6F7` FOREIGN KEY (`wilder_id`) REFERENCES `wilder` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_wilder`
--

LOCK TABLES `home_wilder` WRITE;
/*!40000 ALTER TABLE `home_wilder` DISABLE KEYS */;
INSERT INTO `home_wilder` VALUES (8,191,'Developpeur Web PHP en recherche de stage');
/*!40000 ALTER TABLE `home_wilder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (127,'PHP'),(128,'JavaScript'),(129,'Java'),(130,'Ruby'),(131,'C'),(132,'C++'),(133,'Python'),(134,'Shell'),(135,'SQL'),(136,'Swift');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isPrincipal` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_16DB4F89166D1F9C` (`project_id`),
  CONSTRAINT `FK_16DB4F89166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `picture`
--

LOCK TABLES `picture` WRITE;
/*!40000 ALTER TABLE `picture` DISABLE KEYS */;
INSERT INTO `picture` VALUES (24,136,'669dc14b1380cf44b3b4c8646acea1d0.jpeg',1),(25,136,'dbb3e6f9dcbb2b3b78dff415f9fb9286.jpeg',0),(48,145,'8e9e3ff1e9bc3cf6276c5ae2b390497a.jpeg',1),(49,145,'76aad6b387e9f04aa893b170c0816e8b.jpeg',0),(50,145,'cbca4ada9ebc597f311ec126b028b505.jpeg',0),(51,145,'cd1d677895c06f2b3f2afb208ad685b5.jpeg',0),(54,147,'14e1fc2546e218d562b71b0d075fa552.jpeg',1),(55,147,'13c68eb24b729245ef491a15c7f1e5ce.jpeg',0),(56,147,'290aeb38a9e68e917d14606210095567.jpeg',0),(60,141,'21c9e0076cbf810836f5991caeab7737.jpeg',1),(61,141,'ca40616ea7c99c230c382c81bfd3c35f.jpeg',0),(62,141,'4a40bdd14bae8479978e320cd2cee9e5.jpeg',0),(63,146,'5b3a025595071f0eaa3db60f0b2e0ae5.jpeg',1),(64,146,'b22f02ff413b05a0fec29b5acd179db3.jpeg',0),(65,148,'6eb5dfc08e4fc9515eaa7b4ce03dd55f.jpeg',1),(67,138,'7b8b75cd2c2aeaea36522348391b7902.jpeg',1),(68,138,'9a760d6fd32fe48b97eafd3661373e7a.jpeg',0),(69,138,'c9ed02b54da6710d96b86b6efd826cb5.jpeg',0),(70,138,'5228753059cd9ca3536ebe5d7c3d3acc.jpeg',0);
/*!40000 ALTER TABLE `picture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `homeProject` longtext COLLATE utf8_unicode_ci,
  `homeTextProject` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_2FB3D0EE12469DE2` (`category_id`),
  KEY `IDX_2FB3D0EEC32A47EE` (`school_id`),
  CONSTRAINT `FK_2FB3D0EE12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `FK_2FB3D0EEC32A47EE` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (136,50,101,'Clara Mocquot','http://www.clara-chapeaux.com','Clara Mocquot','2017-02-20','Mis en production','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin nisl ut lorem viverra venenatis. Donec erat tellus, sollicitudin ut tortor id, consequat pharetra risus. Praesent sollicitudin ex semper, luctus eros eu, ultricies elit. Aliquam iaculis libero id malesuada finibus. Praesent eros nibh, lacinia ultrices lectus eget, mattis facilisis lacus. Suspendisse est turpis, finibus nec tristique eu, rhoncus vitae felis. Sed bibendum ligula vel porttitor condimentum. Morbi odio erat, pharetra a facilisis tempus, ornare sed leo. Sed luctus ligula eget ultrices maximus. Donec vel accumsan dolor. Praesent sed vehicula felis. Etiam convallis enim enim, a rhoncus neque mollis quis. Donec vehicula magna a massa aliquet maximus. Nulla sodales sollicitudin nulla, a mollis odio egestas quis. Nunc bibendum risus eu odio pellentesque, sed consectetur mauris dignissim.','1','CHAPEAU'),(138,50,100,'Laklak','http://www.laklak.com','Laklak Production','2016-11-05','Mis en production','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','1','jazz'),(141,50,100,'Gabriel Mattei','http://www.G-B.com','Gabriel','2016-11-05','Mis en production','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.',NULL,NULL),(145,50,100,'HOP HOP HOP','http://www.hoppophop.fr/','Festival Hop Orléans','2017-04-01','Mis en production','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin nisl ut lorem viverra venenatis. Donec erat tellus, sollicitudin ut tortor id, consequat pharetra risus. Praesent sollicitudin ex semper, luctus eros eu, ultricies elit. Aliquam iaculis libero id malesuada finibus. Praesent eros nibh, lacinia ultrices lectus eget, mattis facilisis lacus. Suspendisse est turpis, finibus nec tristique eu, rhoncus vitae felis. Sed bibendum ligula vel porttitor condimentum. Morbi odio erat, pharetra a facilisis tempus, ornare sed leo. Sed luctus ligula eget ultrices maximus. Donec vel accumsan dolor. Praesent sed vehicula felis. Etiam convallis enim enim, a rhoncus neque mollis quis. Donec vehicula magna a massa aliquet maximus. Nulla sodales sollicitudin nulla, a mollis odio egestas quis. Nunc bibendum risus eu odio pellentesque, sed consectetur mauris dignissim.',NULL,NULL),(146,49,100,'Sourcink','http://www.sourcink-club.com','Sourcink','2017-07-20','Mis en production','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at quam quis dui fermentum ullamcorper et nec nulla. Donec ultricies aliquam erat, bibendum posuere massa efficitur sed. Sed in lectus vel orci facilisis lacinia. Curabitur eleifend sed urna sed aliquet. Pellentesque massa libero, condimentum eu auctor quis, molestie in velit. Vestibulum condimentum, augue volutpat vehicula maximus, lacus leo pharetra tellus, non pretium nisl turpis auctor lectus. Vestibulum at augue turpis. In nec diam at mauris tristique malesuada sit amet ut felis. Nullam vel interdum metus, ut rhoncus enim. Vestibulum a gravida lectus. Donec egestas ipsum sit amet consectetur hendrerit. Nam quis euismod magna. Cras et augue et dui mollis tristique. Duis malesuada sapien et diam ultrices blandit. Integer non mi convallis, posuere enim in, euismod lorem.',NULL,NULL),(147,49,100,'Numo','http://www.numo.com','Ageona','2017-07-17','Mis en production','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at quam quis dui fermentum ullamcorper et nec nulla. Donec ultricies aliquam erat, bibendum posuere massa efficitur sed. Sed in lectus vel orci facilisis lacinia. Curabitur eleifend sed urna sed aliquet. Pellentesque massa libero, condimentum eu auctor quis, molestie in velit. Vestibulum condimentum, augue volutpat vehicula maximus, lacus leo pharetra tellus, non pretium nisl turpis auctor lectus. Vestibulum at augue turpis. In nec diam at mauris tristique malesuada sit amet ut felis. Nullam vel interdum metus, ut rhoncus enim. Vestibulum a gravida lectus. Donec egestas ipsum sit amet consectetur hendrerit. Nam quis euismod magna. Cras et augue et dui mollis tristique. Duis malesuada sapien et diam ultrices blandit. Integer non mi convallis, posuere enim in, euismod lorem.',NULL,NULL),(148,49,100,'Comme l\'air de rien','http://www.commelair2rien.fr','Air2Rien','2017-04-01','Mis en production','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at quam quis dui fermentum ullamcorper et nec nulla. Donec ultricies aliquam erat, bibendum posuere massa efficitur sed. Sed in lectus vel orci facilisis lacinia. Curabitur eleifend sed urna sed aliquet. Pellentesque massa libero, condimentum eu auctor quis, molestie in velit. Vestibulum condimentum, augue volutpat vehicula maximus, lacus leo pharetra tellus, non pretium nisl turpis auctor lectus. Vestibulum at augue turpis. In nec diam at mauris tristique malesuada sit amet ut felis. Nullam vel interdum metus, ut rhoncus enim. Vestibulum a gravida lectus. Donec egestas ipsum sit amet consectetur hendrerit. Nam quis euismod magna. Cras et augue et dui mollis tristique. Duis malesuada sapien et diam ultrices blandit. Integer non mi convallis, posuere enim in, euismod lorem.',NULL,NULL);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_language`
--

DROP TABLE IF EXISTS `project_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_language` (
  `project_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`language_id`),
  KEY `IDX_E995FA6E166D1F9C` (`project_id`),
  KEY `IDX_E995FA6E82F1BAF4` (`language_id`),
  CONSTRAINT `FK_E995FA6E166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E995FA6E82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_language`
--

LOCK TABLES `project_language` WRITE;
/*!40000 ALTER TABLE `project_language` DISABLE KEYS */;
INSERT INTO `project_language` VALUES (136,127),(136,128),(138,127),(138,128),(141,127),(141,128),(145,127),(146,127),(147,127),(147,128),(147,135),(148,127);
/*!40000 ALTER TABLE `project_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_tag`
--

DROP TABLE IF EXISTS `project_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_tag` (
  `project_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`tag_id`),
  KEY `IDX_91F26D60166D1F9C` (`project_id`),
  KEY `IDX_91F26D60BAD26311` (`tag_id`),
  CONSTRAINT `FK_91F26D60166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_91F26D60BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_tag`
--

LOCK TABLES `project_tag` WRITE;
/*!40000 ALTER TABLE `project_tag` DISABLE KEYS */;
INSERT INTO `project_tag` VALUES (136,141),(136,143),(138,142),(138,143),(141,140),(141,143),(145,142),(145,143),(146,148),(147,141),(148,141);
/*!40000 ALTER TABLE `project_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_technology`
--

DROP TABLE IF EXISTS `project_technology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_technology` (
  `project_id` int(11) NOT NULL,
  `technology_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`technology_id`),
  KEY `IDX_ECC5297F166D1F9C` (`project_id`),
  KEY `IDX_ECC5297F4235D463` (`technology_id`),
  CONSTRAINT `FK_ECC5297F166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_ECC5297F4235D463` FOREIGN KEY (`technology_id`) REFERENCES `technology` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_technology`
--

LOCK TABLES `project_technology` WRITE;
/*!40000 ALTER TABLE `project_technology` DISABLE KEYS */;
INSERT INTO `project_technology` VALUES (136,107),(136,108),(136,109),(138,107),(138,108),(141,107),(141,108),(145,107),(145,108),(145,109),(146,106),(146,107),(146,108),(146,109),(147,106),(147,107),(147,108),(147,109),(148,107),(148,108),(148,109);
/*!40000 ALTER TABLE `project_technology` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_wilder`
--

DROP TABLE IF EXISTS `project_wilder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_wilder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `wilder_id` int(11) DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BCCCC619166D1F9C` (`project_id`),
  KEY `IDX_BCCCC6196BF8E6F7` (`wilder_id`),
  CONSTRAINT `FK_BCCCC619166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  CONSTRAINT `FK_BCCCC6196BF8E6F7` FOREIGN KEY (`wilder_id`) REFERENCES `wilder` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_wilder`
--

LOCK TABLES `project_wilder` WRITE;
/*!40000 ALTER TABLE `project_wilder` DISABLE KEYS */;
INSERT INTO `project_wilder` VALUES (110,136,156,1,NULL),(111,136,157,1,NULL),(112,136,158,1,NULL),(113,136,159,1,NULL),(127,138,146,1,NULL),(128,138,147,1,NULL),(129,138,148,1,NULL),(130,138,149,1,NULL),(136,141,155,1,NULL),(137,141,193,1,NULL),(138,141,194,1,NULL),(139,145,202,1,NULL),(140,145,201,1,NULL),(141,145,200,1,NULL),(142,146,202,1,NULL),(143,146,201,1,NULL),(144,146,200,1,NULL),(145,147,196,1,NULL),(146,147,197,1,NULL),(147,147,198,1,NULL),(148,147,199,1,NULL),(149,148,155,1,NULL),(150,148,193,1,NULL),(151,148,194,1,NULL),(152,148,195,1,NULL);
/*!40000 ALTER TABLE `project_wilder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(11) DEFAULT NULL,
  `promotion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C11D7DD1C32A47EE` (`school_id`),
  CONSTRAINT `FK_C11D7DD1C32A47EE` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
INSERT INTO `promotion` VALUES (131,100,'OrlSept16'),(132,100,'OrlFev17'),(133,101,'LyonFev17'),(134,101,'LyonSept16'),(135,102,'LoupSept16'),(136,102,'LoupFev17'),(137,102,'LoupFev16'),(138,102,'LoupSept15'),(139,103,'BordSept16'),(140,103,'BordNov16'),(141,103,'BordFev17'),(142,103,'BordJuin17'),(143,104,'LilleSept16'),(144,104,'LilleFev17'),(145,105,'ParisFev17'),(146,106,'StrasFev17'),(147,107,'ToulFev16'),(148,107,'ToulFev17'),(149,107,'ToulSept16'),(150,108,'FontFev17');
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion_language`
--

DROP TABLE IF EXISTS `promotion_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion_language` (
  `promotion_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY (`promotion_id`,`language_id`),
  KEY `IDX_128FD5F1139DF194` (`promotion_id`),
  KEY `IDX_128FD5F182F1BAF4` (`language_id`),
  CONSTRAINT `FK_128FD5F1139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_128FD5F182F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion_language`
--

LOCK TABLES `promotion_language` WRITE;
/*!40000 ALTER TABLE `promotion_language` DISABLE KEYS */;
INSERT INTO `promotion_language` VALUES (131,127),(132,127),(133,127),(133,128),(134,127),(134,128),(135,128),(136,128),(137,129),(138,128),(139,127),(139,128),(140,127),(141,127),(141,128),(142,127),(143,130),(144,130),(145,130),(146,129),(146,135),(147,129),(148,129),(148,136),(149,129),(149,136),(150,127);
/*!40000 ALTER TABLE `promotion_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` VALUES (100,'47.9108329, 1.9157977','45000 Orléans','Orléans'),(101,'45.7567546, 4.8409266','69000 Lyon','Lyon'),(102,'48.471285, 1.014305','28240 La Loupe','La Loupe'),(103,'44.8350088, -0.587269','33000 Bordeaux','Bordeaux'),(104,'50.6138111, 3.0423599','59000 Lille','Lille'),(105,'48.8785419, 2.3642198','75000 Paris','Paris'),(106,'48.6019858, 7.7835217','67000 Strasbourg','Strasbourg'),(107,'43.6046256, 1.444205','31000 Toulouse','Toulouse'),(108,'48.3880879, 2.6613069','77300 Fontainebleau','Fontainebleau');
/*!40000 ALTER TABLE `school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (140,'Restauration'),(141,'Theatre'),(142,'Musique'),(143,'Festival'),(144,'Orchestre'),(145,'Immobilier'),(146,'Jardin'),(147,'Entretien'),(148,'Nature');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technology`
--

DROP TABLE IF EXISTS `technology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `technology` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `technology` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technology`
--

LOCK TABLES `technology` WRITE;
/*!40000 ALTER TABLE `technology` DISABLE KEYS */;
INSERT INTO `technology` VALUES (106,'Symfony'),(107,'PHPStorm'),(108,'Bootstrap'),(109,'WorkBench'),(110,'Eclipse'),(111,'AndroidS'),(112,'Laravel');
/*!40000 ALTER TABLE `technology` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilder`
--

DROP TABLE IF EXISTS `wilder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wilder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `availability_id` int(11) DEFAULT NULL,
  `promotion_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `birthDate` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postalCode` int(11) NOT NULL,
  `city` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `skill` longtext COLLATE utf8_unicode_ci,
  `freelanceAvailability` tinyint(1) NOT NULL,
  `modjo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext COLLATE utf8_unicode_ci,
  `contactEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profilPicture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` longtext COLLATE utf8_unicode_ci,
  `github` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userActivation` tinyint(1) NOT NULL,
  `managerActivation` tinyint(1) NOT NULL,
  `codewarsUsername` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AB682D53A76ED395` (`user_id`),
  KEY `IDX_AB682D5361778466` (`availability_id`),
  KEY `IDX_AB682D53139DF194` (`promotion_id`),
  CONSTRAINT `FK_AB682D53139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`),
  CONSTRAINT `FK_AB682D5361778466` FOREIGN KEY (`availability_id`) REFERENCES `availability` (`id`),
  CONSTRAINT `FK_AB682D53A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilder`
--

LOCK TABLES `wilder` WRITE;
/*!40000 ALTER TABLE `wilder` DISABLE KEYS */;
INSERT INTO `wilder` VALUES (146,61,132,212,'1990-11-17','36 rue de wester','47.9108329, 1.9157977',45000,'Orleans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Plus tu dors, moins t\'es fort !','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','Wilder3contacte@gmail.com','be047bec4f52239ed3b487fe05024b61.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Maxime','Cabezas'),(147,61,132,213,'1990-11-17','36 rue de wester','47.9108329, 1.9157977',45000,'Orleans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Plus tu pédales moins vite, plus tu avances lentement.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','Wilder4contacte@gmail.com','95e12b0529c8d06bc77744dd4ce34311.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Camille','Célestin'),(148,63,132,214,'1990-11-17','36 rue de wester','48.862725, 2.287592000000018',45140,'Ingre','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder5contacte@gmail.com','WCS_Jeremie.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Jérémie','Daviaud'),(149,63,132,215,'1990-11-17','36 rue de wester','47.921704, 1.830401',45140,'Ingre','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'J\'aime les licornes','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','Wilder6contacte@gmail.com','c2b0c6e6ac2f1968b10b784954ff5052.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Tanguy','David'),(155,64,131,221,'1990-11-17','36 rue de wester','33.960203, -118.432638',67000,'Saran','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Du passé vers le futur','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','Wilder12contacte@gmail.com','4b88bb9153668c4d374a5bb3d7aae798.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Sylvain','Jan'),(156,64,133,222,'1990-11-17','36 rue de wester','45.764043, 4.835658999999964',69001,'Lyon','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder13contacte@gmail.com','WCS_Fanny.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Fanny','Jean'),(157,64,133,223,'1990-11-17','36 rue de wester','45.764043, 4.835658999999964',69001,'Lyon','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder14contacte@gmail.com','profil4.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Guillaume','Koffi'),(158,61,133,224,'1990-11-17','36 rue de wester','45.746821, 4.7249169',69290,'Craponne','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Le karaoké c\'est ma vie','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder15contacte@gmail.com','b9db4eb0455c032fc74482da591ea578.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Nicolas','Le Flohic'),(159,60,134,225,'1990-11-17','36 rue de wester','45.7129212, 4.8048453',69600,'Oullins','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'J\'ai tout plaqué pour le code','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder16contacte@gmail.com','72fc64d4d0dd93775234a437302689a3.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Julien','Martin'),(167,60,137,233,'1990-11-17','36 rue de wester','48.347607, 0.3673300000000381',72600,'Mamers','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder24contacte@gmail.com','profil1.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Tyrell','Olenna'),(168,60,140,234,'1990-11-17','36 rue de wester','44.837789, -0.5791799999999512',33000,'Bordeaux','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder25contacte@gmail.com','profil2.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Lannister','Joffrey'),(169,60,140,235,'1990-11-17','36 rue de wester','44.837789, -0.5791799999999512',33000,'Bordeaux','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder26contacte@gmail.com','profil3.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Sand','Ellaria'),(170,60,141,236,'1990-11-17','36 rue de wester','44.837789, -0.5791799999999512',33000,'Bordeaux','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder27contacte@gmail.com','profil4.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Miss','Melisandre'),(173,64,141,239,'1990-11-17','36 rue de wester','44.880543, -0.4614890000000287',33370,'Yvrac','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder30contacte@gmail.com','profil3.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Ragekit','Ygritte'),(174,64,150,240,'1990-11-17','36 rue de wester','48.40467599999999, 2.701620000000048',77300,'Fontainebleau','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder31contacte@gmail.com','profil4.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','De Torth','Brienne'),(175,62,150,241,'1990-11-17','36 rue de wester','48.40467599999999, 2.701620000000048',77300,'Fontainebleau','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder32contacte@gmail.com','profil1.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Bolton','Ramsey'),(176,60,143,242,'1990-11-17','36 rue de wester','50.62925, 3.057256000000052',59000,'Lille','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder33contacte@gmail.com','profil2.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Targaryen','Lord'),(177,60,143,243,'1990-11-17','36 rue de wester','50.62925, 3.057256000000052',59000,'Lille','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder34contacte@gmail.com','profil3.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Tyrell','Margaery'),(178,60,143,244,'1990-11-17','36 rue de wester','50.62925, 3.057256000000052',59000,'Lille','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder35contacte@gmail.com','profil4.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Stark','Sansa'),(179,64,144,245,'1990-11-17','36 rue de wester','50.61513900000001, 3.017729000000031',59120,'Loos','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder36contacte@gmail.com','profil1.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Stark','Talisa'),(180,64,144,246,'1990-11-17','36 rue de wester','50.54699929999999, 2.9176195000000007',59272,'Don','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder37contacte@gmail.com','profil2.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Gris','Ver'),(181,60,145,247,'1990-11-17','36 rue de wester','48.85661400000001, 2.3522219000000177',75001,'Paris','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder38contacte@gmail.com','profil3.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Tyrell','Loras'),(182,63,145,248,'1990-11-17','36 rue de wester','48.85661400000001, 2.3522219000000177',70001,'Paris','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','wilder39contacte@gmail.com','profil4.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Forel','Syrio'),(183,60,131,249,'1990-11-17','36 rue de wester','48.57340529999999, 7.752111300000024',67000,'Strasbourg','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder40contacte@gmail.com','profil1.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Lannister','Tywin'),(184,60,131,250,'1990-11-17','36 rue de wester','48.57340529999999, 7.752111300000024',67000,'Strasbourg','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder41contacte@gmail.com','profil2.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Flynn','Bronn'),(185,64,131,251,'1990-11-17','36 rue de wester','48.0793589, 7.358512000000019',68000,'Colmar','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder42contacte@gmail.com','profil3.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','La..','Shae'),(186,62,149,252,'1990-11-17','36 rue de wester','43.604652, 1.4442090000000007',31000,'Toulouse','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder43contacte@gmail.com','profil4.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Mormont','Jorah'),(187,61,148,253,'1990-11-17','36 rue de wester','43.71623899999999, 1.4803518999999596',31140,'Montberon','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder44contacte@gmail.com','profil1.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Geyjoy','Yara'),(188,63,148,254,'1990-11-17','36 rue de wester','43.71623899999999, 1.4803518999999596',31140,'Montberon','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'\'Dieu est le maître du ciel, et l\'argent le maître de la terre.\'','Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe','Wilder45contacte@gmail.com','profil1.jpg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Mormont','Lady'),(189,62,132,210,'1990-11-17','36 rue de wester','47.9108329, 1.9157977',45000,'Orléans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum nisi id tellus sagittis, sed auctor magna maximus. Donec luctus cursus velit vitae scelerisque. Vivamus orci enim, finibus sit amet ornare in, finibus non urna. Curabitur eu lacus a sapien consectetur imperdiet ut nec enim. Curabitur eget blandit eros. Sed ut bibendum velit. Proin auctor, quam non interdum interdum, erat diam posuere sapien, at fringilla turpis felis vel velit. Quisque vestibulum nisl eros, eget aliquam sem sollicitudin a. Phasellus dictum urna quis mauris elementum, sed elementum justo facilisis. Nam dictum elementum aliquet. Cras ultricies turpis purus, nec scelerisque neque pulvinar gravida. Sed nec leo eget purus cursus commodo eu id felis. Nullam eu libero condimentum, consectetur magna sit amet, aliquet sapien. Aenean ornare urna id accumsan lacinia.',NULL,'0a563c03ea7b297230b6a7b4732fe30e.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Jason','BENEDITE'),(190,60,132,211,'1990-04-09','36 rue de wester','47.9108329, 1.9157977',45000,'Orléans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.',NULL,'63857f3e6f252a64571c80c96619a9f5.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Dylan','BOUCHET'),(191,64,132,199,'1990-08-12','36 rue de wester','47.9108329, 1.9157977',45000,'Orléans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Moi, Moche et Méchant','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.',NULL,'28893fee1f5f44174652683008a96588.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Thibault','Derot'),(192,60,132,217,'1989-06-15','3 rue du Faubourg Bannier','47.9108329, 1.9157977',45000,'ORLEANS','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'mon côté wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.',NULL,'3ade9c35802c0ba9a250ea8c20022766.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Ludovic','Duriez'),(193,63,131,218,'1965-05-06','36 rue de wester','47.9108329, 1.9157977',45000,'Orléans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Tout est dans ma moustache','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.',NULL,'bf4769429eb82aa63dd962ac2f589f0b.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Patrick','Faucheux'),(194,62,131,219,'1991-09-04','36 rue de wester','47.9108329, 1.9157977',45000,'Orléans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.',NULL,'ba04fb850c467783dbbde01c4b6386f4.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Jean Baptiste','Halassou'),(195,60,131,220,'1994-07-11','36 rue de wester','47.9108329, 1.9157977',45000,'Orléans','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.',NULL,'ea0bd4022172ee3ac9371bdab7b5b2c3.jpeg',NULL,'http://www.google.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','David','Hu'),(196,60,135,226,'1990-06-06','9bis rue ingres','47.827007, 1.697432',45130,'MEUNG SUR LOIRE','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at quam quis dui fermentum ullamcorper et nec nulla. Donec ultricies aliquam erat, bibendum posuere massa efficitur sed. Sed in lectus vel orci facilisis lacinia. Curabitur eleifend sed urna sed aliquet. Pellentesque massa libero, condimentum eu auctor quis, molestie in velit. Vestibulum condimentum, augue volutpat vehicula maximus, lacus leo pharetra tellus, non pretium nisl turpis auctor lectus. Vestibulum at augue turpis. In nec diam at mauris tristique malesuada sit amet ut felis. Nullam vel interdum metus, ut rhoncus enim. Vestibulum a gravida lectus. Donec egestas ipsum sit amet consectetur hendrerit. Nam quis euismod magna. Cras et augue et dui mollis tristique. Duis malesuada sapien et diam ultrices blandit. Integer non mi convallis, posuere enim in, euismod lorem.','veronique.jollivel@wanadoo.fr','bcf7193f624bb4ba47b4354cd2e8cb1e.jpeg',NULL,'http://www.monsite.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Véronique','Monaco'),(197,63,135,227,'1990-01-01','36 rue de wester','48.471285, 1.014305',28240,'La Loupe','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder18@gmail.com','30509c3cf7a9feff465c2d09a6a429d1.jpeg',NULL,'http://www.monsite.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Isabelle','Muligo'),(198,62,135,228,'1990-05-06','36 rue de wester','48.471285, 1.014305',28240,'La Loupe','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder19@gmail.com','afa42731f6118c2343193bc13f70ad25.jpeg',NULL,'http://www.monsite.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Hagera','Nege'),(199,61,138,229,'1989-04-08','36 rue de wester','48.471285, 1.014305',28240,'La Loupe','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder20@gmail.com','2d4bb456a2b085f38b73c1584dab15d6.jpeg',NULL,'http://www.monsite.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Sarah','Peltier'),(200,61,138,230,'1990-06-14','36 rue de wester','48.471285, 1.014305',28240,'La Loupe','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder21@gmail.com','6ac9d79d4a1b5b7cb81cdc373e49857f.jpeg',NULL,'http://www.monsite.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Nicolas','Pinsard'),(201,61,136,231,'1990-09-18','36 rue de wester','48.4337291, 0.0894789',61000,'Alencon','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',0,'Mon côté Wild','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis nisl eleifend mauris dapibus, et elementum tortor gravida. Duis libero lacus, faucibus vel nibh eget, vestibulum auctor nunc. Praesent maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder22@gmail.com','e76c2a71de7b157bf469bf098ea79dfc.jpeg',NULL,'http://www.monsite.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','François','Ponceau'),(202,60,136,232,'1990-07-18','36 rue de wester','48.347607, 0.36733',72600,'Mamers','SCRUM,BDD, Adobe Suite, Microsoft Office, Git',1,'Mon Git et mon couteau !','maximus elit id nunc scelerisque elementum. In vitae arcu est. Curabitur non fermentum turpis, at scelerisque odio. Quisque vitae iaculis libero. Proin in erat ultricies mauris maximus tincidunt sit amet nec tortor. Nunc rhoncus condimentum libero tincidunt imperdiet. Proin non gravida nunc. Maecenas gravida est non fermentum blandit. Quisque ante risus, auctor sed libero in, rhoncus rutrum ipsum. Duis nec lorem ultrices, sollicitudin ex tincidunt, tincidunt odio. Duis eu diam varius metus fermentum euismod. Etiam hendrerit lacus ante, quis tempus purus vulputate et.','wilder23@gmail.com','9709f92bc36697c7e1617bdbdc6472ae.jpeg',NULL,'http://www.monsite.com','http://www.github.com','http://www.linkedin.com','http://www.facebook.com','http://www.twitter.com',1,1,'ssineriz','Quentin','Riandiere');
/*!40000 ALTER TABLE `wilder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilder_language`
--

DROP TABLE IF EXISTS `wilder_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wilder_language` (
  `wilder_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY (`wilder_id`,`language_id`),
  KEY `IDX_1835DD4E6BF8E6F7` (`wilder_id`),
  KEY `IDX_1835DD4E82F1BAF4` (`language_id`),
  CONSTRAINT `FK_1835DD4E6BF8E6F7` FOREIGN KEY (`wilder_id`) REFERENCES `wilder` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1835DD4E82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilder_language`
--

LOCK TABLES `wilder_language` WRITE;
/*!40000 ALTER TABLE `wilder_language` DISABLE KEYS */;
INSERT INTO `wilder_language` VALUES (146,127),(146,128),(147,127),(147,128),(148,127),(148,128),(149,127),(149,128),(155,127),(155,128),(156,128),(157,128),(158,127),(159,127),(159,128),(167,128),(168,127),(168,128),(169,127),(169,128),(170,128),(173,128),(174,127),(175,127),(176,130),(177,130),(178,130),(179,130),(180,130),(181,130),(182,130),(183,129),(183,135),(184,129),(184,135),(185,129),(185,135),(186,129),(186,136),(187,129),(187,136),(188,129),(188,136),(189,128),(189,129),(189,135),(190,127),(190,133),(191,127),(191,128),(191,130),(192,128),(192,129),(192,133),(193,127),(193,129),(193,131),(193,135),(194,127),(194,128),(195,127),(195,129),(196,127),(196,128),(196,134),(196,135),(197,127),(197,128),(197,130),(198,127),(198,128),(198,134),(199,127),(199,128),(199,133),(200,127),(200,128),(200,135),(201,127),(201,129),(201,133),(202,127),(202,128),(202,129),(202,135);
/*!40000 ALTER TABLE `wilder_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilder_technology`
--

DROP TABLE IF EXISTS `wilder_technology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wilder_technology` (
  `wilder_id` int(11) NOT NULL,
  `technology_id` int(11) NOT NULL,
  PRIMARY KEY (`wilder_id`,`technology_id`),
  KEY `IDX_DC4B49166BF8E6F7` (`wilder_id`),
  KEY `IDX_DC4B49164235D463` (`technology_id`),
  CONSTRAINT `FK_DC4B49164235D463` FOREIGN KEY (`technology_id`) REFERENCES `technology` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_DC4B49166BF8E6F7` FOREIGN KEY (`wilder_id`) REFERENCES `wilder` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilder_technology`
--

LOCK TABLES `wilder_technology` WRITE;
/*!40000 ALTER TABLE `wilder_technology` DISABLE KEYS */;
INSERT INTO `wilder_technology` VALUES (146,106),(146,107),(146,108),(147,106),(147,107),(147,108),(148,106),(148,107),(148,108),(149,106),(149,107),(149,108),(155,106),(155,107),(155,108),(156,106),(156,107),(156,108),(157,106),(157,107),(157,108),(158,106),(158,107),(158,108),(159,106),(159,107),(159,108),(167,106),(167,107),(167,108),(168,106),(168,107),(168,108),(169,106),(169,107),(169,108),(170,106),(170,107),(170,108),(173,106),(173,107),(173,108),(174,106),(174,107),(174,108),(175,106),(175,107),(175,108),(176,106),(176,107),(176,108),(177,106),(177,107),(177,108),(178,106),(178,107),(178,108),(179,106),(179,107),(179,108),(180,106),(180,107),(180,108),(181,106),(181,107),(181,108),(182,106),(182,107),(182,108),(183,106),(183,107),(183,108),(184,106),(184,107),(184,108),(185,106),(185,107),(185,108),(186,106),(186,107),(186,108),(187,106),(187,107),(187,108),(188,106),(188,107),(188,108),(189,106),(189,107),(189,108),(190,106),(190,108),(190,110),(191,106),(191,107),(191,108),(192,107),(192,109),(192,112),(193,106),(193,107),(193,108),(193,109),(194,106),(194,107),(194,108),(195,106),(195,107),(195,108),(196,106),(196,107),(197,106),(197,107),(197,108),(197,109),(198,106),(198,107),(198,109),(199,106),(199,107),(199,108),(200,106),(200,107),(200,108),(200,109),(201,106),(201,107),(201,108),(201,109),(202,106),(202,107),(202,108),(202,109);
/*!40000 ALTER TABLE `wilder_technology` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-20 13:35:31
