-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: register
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `a_id` int NOT NULL AUTO_INCREMENT,
  `a_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `a_pwd` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `a_email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_ph` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Miguel Age','phoo1234','phoomyat@gmail.com','09246810111','Pyin Oo Lwin');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clubs` (
  `club_id` int NOT NULL AUTO_INCREMENT,
  `club_name` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubs`
--

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
INSERT INTO `clubs` VALUES (1,'Football club','12:54','2024-02-27','Join the training'),(2,'Football club','17:05','2024-02-28','join us'),(3,'Art club','14:00','2024-04-12','come');
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `eve_id` int NOT NULL AUTO_INCREMENT,
  `eve_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `eve_time` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `eve_date` date NOT NULL,
  `eve_desc` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`eve_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Football','15:00','2024-03-17','Come Join Us!'),(2,'ART CLUB','15:15','2024-03-18','We have art exhibition at class B01!Come join us!'),(3,'Photo Club','15:00','2024-02-29','Come Join us on this wonderful event!'),(4,'Football event','13:00','2024-03-02','Come Join Us!'),(5,'Football Event','13:00','2024-08-12','Come join us!');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `form` (
  `f_id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL,
  `club_id` int NOT NULL,
  `a_id` int NOT NULL,
  PRIMARY KEY (`f_id`),
  KEY `club_id_idx` (`club_id`),
  KEY `clubf_idx` (`club_id`),
  KEY `id_idx` (`id`),
  KEY `a_id_idx` (`a_id`),
  CONSTRAINT `a_id` FOREIGN KEY (`a_id`) REFERENCES `admins` (`a_id`),
  CONSTRAINT `clubid` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`club_id`),
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form`
--

LOCK TABLES `form` WRITE;
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
/*!40000 ALTER TABLE `form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memories`
--

DROP TABLE IF EXISTS `memories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `memories` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `club_id_idx` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `memories`
--

LOCK TABLES `memories` WRITE;
/*!40000 ALTER TABLE `memories` DISABLE KEYS */;
INSERT INTO `memories` VALUES (1,'Football Club','2024-02-21','Winter football competition.'),(2,'Football Club','2023-12-22','Christmas football competition.');
/*!40000 ALTER TABLE `memories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `out_id` text COLLATE utf8mb4_general_ci NOT NULL,
  `in_id` text COLLATE utf8mb4_general_ci NOT NULL,
  `msg` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (299,'1','3','Hi'),(300,'3','1','Hello admin');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mkpt` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ph` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `major` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pic` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `club_name` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Mya Yoon','mkpt-7018','mya12345','09123456789','cs','SecondYearSemII','mya@gmail.com',NULL,'female',NULL,'music club','MEMBER'),(3,'Zaw Khant Win','mkpt-7007','zaw12345','09135791113','CS','SecondYearSemII','zaw@gmail.com','Mandalay','male','images/af37fc1e0b659504577b327a5dfeb9f4.jpg','art club','MEMBER'),(6,'Ngu War Thein','mkpt-6979','ngu12345','09664804662','cs','SecondYearSemII','ngu@gmail.com','Mandalay','female','1708527124.','art club','MEMBER'),(9,'Phoo Myat Thwe','mkpt-7011','phoo1234','09778654804','cs','SecondYearSemII','phoo@gmail.com',NULL,'female',NULL,'photo club','MEMBER'),(10,'Uzumaki Naruto','mkpt-4321','naruto12','09987634567','cs','SecondYearSemII','naruto@gmail.com',NULL,'male',NULL,'photo club','MEMBER'),(11,'Uchiha Sasuke','mkpt-5678','sasuke12','09567843653','ct','SecondYearSemII','sasuke@gmail.com',NULL,'male',NULL,'NULL','NULL'),(14,'Kyo Kaneko','mkpt-7223','kyo12345','09567742467','cst','FirstYearSemI','kyo@gmail.com',NULL,'male',NULL,'football club','MEMBER'),(15,'Nico Robin','mkpt-1357','nicorobin1234','09456328901','cs','ThirdYearSemII','nico@gmail.com',NULL,'female',NULL,'art club','MEMBER'),(17,'Itadori Yuji','mkpt-1111','yuji1234','09123432167','ct','SecondYearSemI','yuji@gmail.com',NULL,'male',NULL,'football club','MEMBER'),(18,'Megumi','mkpt-2222','megumi12','09987654323','ct','SecondYearSemI','megumi@gmail.com',NULL,'male',NULL,'football club','MEMBER'),(19,'Sukuna','mkpt-3333','sukuna1234','09463126789','ct','SecondYearSemI','sukuna@gmail.com',NULL,'male',NULL,'football club','MEMBER'),(20,'Gojo Satouru','mkpt-8888','gojo1234','09884875258','cs','SecondYearSemII','gojo@gmail.com',NULL,'male',NULL,'music club','MEMBER'),(21,'Xavier','mkpt-9999','xavier12','09111111223','cs','ThirdYearSemI','xavier@gmail.com',NULL,'male',NULL,'photo club','MEMBER'),(22,'Rafayel','mkpt-1010','rafayel12','09988776654','cs','FirstYearSemI','rafayel@gmail.com','Under the sea','male',NULL,'art club','MEMBER'),(23,'Zayne','mkpt-5555','zayne12','09778866554','ct','FirstYearSemI','zayne@gmail.com','Hospital','male',NULL,'music club','MEMBER'),(24,'Kamado Tanjiro','mkpt-6666','tanjiro12','09667755443','cs','FirstYearSemI','tanjiro@gmail.com',NULL,'male',NULL,'football club','MEMBER'),(25,'Zenitsu','mkpt-7777','zenitsu12','09985664356','ct','FirstYearSemI','zenitsu@gmail.com','Yangon','male',NULL,'photo club','MEMBER'),(26,'Inosuke','mkpt-1001','inosuke12','09989898984','ct','FirstYearSemI','inosuke@gmail.com',NULL,'male',NULL,'football club','MEMBER'),(27,'Soe Thurein ','mkpt-7013','1234567soe','09776060139','cst','SecondYearSemII','reinblahblah@gmail.com',NULL,'male',NULL,'art club','MEMBER'),(28,'Hnin Wutt Yee Htun','mkpt-6977','hnin1234','09698571555','cs','SecondYearSemII','wuttyee@gmail.com',NULL,'female','images/usersignUp.png','music club','MEMBER'),(29,'Akame','mkpt-2323','akame123','09776655443','cs','FirstYearSemII','akame@gmail.com',NULL,'female',NULL,'photo club','MEMBER'),(30,'Rui','mkpt-1222','rui12345','09886655446','se','FourthYearSemI','rui@gmail.com',NULL,'female',NULL,'music club','MEMBER'),(31,'Senku','mkpt-1333','senku1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'Chrome','mkpt-1444','chrome123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'Phoo Myat Thwe','mkpt-7011','hiEverythings',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'Zaw Myo Thant','mkpt-7012','zaw123','09456543276','cs','SecondYearSemII','myo@gmail.com',NULL,'male',NULL,'football club','MEMBER');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-26 23:35:10
