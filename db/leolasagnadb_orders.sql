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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `orderId` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `customerid` int(5) NOT NULL,
  `userId` int(5) DEFAULT NULL,
  `airportId` int(5) DEFAULT NULL,
  `airlineid` int(5) DEFAULT NULL,
  `orderType` varchar(25) DEFAULT NULL,
  `departuresTerminal` int(5) DEFAULT NULL,
  `arrivalsTerminal` int(5) DEFAULT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,0,3,1,1,'2',1,1),(2,0,3,1,2,'2',1,1),(3,0,3,1,3,'2',2,2),(4,0,3,1,4,'2',1,1),(5,0,3,1,5,'2',3,3),(6,0,3,1,14,'2',1,1),(7,0,3,1,6,'2',2,2),(8,0,3,1,7,'2',1,1),(9,0,3,1,8,'2',4,9),(10,0,4,2,9,'2',5,5),(11,0,4,2,3,'2',6,6),(12,0,3,2,5,'2',5,5),(13,0,3,2,10,'2',7,7),(14,0,3,2,8,'2',6,6),(15,0,3,2,11,'2',5,5),(16,0,3,2,12,'2',8,10),(17,0,3,2,13,'2',5,5),(18,4,4,0,0,'2',0,0),(19,5,4,0,0,'2',0,0),(20,6,3,0,0,'2',0,0),(21,7,4,0,0,'2',0,0),(22,8,4,0,0,'2',0,0),(23,9,4,0,0,'2',0,0),(24,10,4,0,0,'2',0,0),(25,11,4,0,0,'2',0,0),(26,12,4,0,0,'2',0,0),(27,2,6,0,0,'1',0,0);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-19 21:31:55
