-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: leolasagnadb
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `employee` (
  `employeeId` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `employeeSSN` varchar(12) DEFAULT NULL,
  `employeeFirstName` varchar(25) DEFAULT NULL,
  `employeeSecondName` varchar(25) DEFAULT NULL,
  `employeeAddress` varchar(45) DEFAULT NULL,
  `employeePhone` varchar(14) DEFAULT NULL,
  `employeeEmail` varchar(35) DEFAULT NULL,
  `employeeTitle` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`employeeId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'121-854-9645','Jonh','Doe','103rd St Apt 14 NY 10010','(345)924-0010','johndoe@aol.com','Truck Driver'),(2,'236-965-1232','Gertrude','Elion','2121 41st Ave Long Island City NY 11101','(345)965-1255','geliol@hotmail.com','Truck Driver'),(3,'852-964-7395','Issac','Newton','200 W 40th St New York NY 11101','(345)965-1255','i.newtom@hotmail.com','Head of Operations'),(4,'789-900-6700','Michael','Jackson','33 E 17th St New York, NY 10003','(212)965-8596','m.jackson@yahoo.com','Chief Financial Officer'),(5,'965-746-1123','Leo','Rizzo','535 Madison Ave New York, NY1 10022','(917)450-2030','leo.rizzo@yahoo.com','Chief Executive Officer');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-19 21:32:02
