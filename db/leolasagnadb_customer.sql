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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `customer` (
  `customerid` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `customertypeid` int(5) NOT NULL,
  `customerPhone` varchar(14) DEFAULT NULL,
  `customerName` varchar(40) DEFAULT NULL,
  `customerAddress` varchar(45) DEFAULT NULL,
  `customerCity` varchar(20) DEFAULT NULL,
  `customerState` varchar(20) DEFAULT NULL,
  `customerZip` int(5) DEFAULT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,1,'(212)784-8545','Justin Bieber','825 8th Avenue 28th Floor','New York','NY',10019),(2,3,'(421)910-7462','Kanye West','11790 Southampton Ct','Los Angeles','CA',90077),(3,1,'(421)910-7462','Nicole Polizzi','165 Summit Road','Florham Park','NJ',7932),(4,2,'(212) 586-7000','Hotel New York Hilton Midtown','1335 6th Ave','New York','NY',10019),(5,2,'(212)398-1900','New York Marriott Marquis','1535 Broadway','New York','NY',10036),(6,2,'(212) 581-1000','Sheraton New York Times Square Hotel','811 7th Avenue','New York','NY',10019),(7,2,'(212) 736-5000','Hotel Pennsylvania','401 7th Ave','New York','NY',10001),(8,2,'(212) 883-1234','Grand Hyatt New York','109 E 42nd St','New York','NY',10017),(9,2,'(212)971-0101','The New Yorker, A Wyndham Hotel','481 8th Ave,','New York','NY',10001),(10,2,'(212) 201-2700','The Westin New York at Times Square','270 W 43rd St','New York','NY',10036),(11,2,'(646) 826-8600','W New York – Downtown','8 Albany St, New York','New York','NY',10006),(12,2,'(212) 755-4000','New York Marriott East Side','525 Lexington Avenue at, E 49th St','New York','NY',10017);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-19 21:31:56
