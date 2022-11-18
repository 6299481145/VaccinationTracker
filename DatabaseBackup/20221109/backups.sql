-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: vaccination_tracker
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment` (
  `appointment_id` char(4) NOT NULL,
  `child_id` char(5) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `vaccination_date` date DEFAULT NULL,
  `vaccination_time` time DEFAULT NULL,
  `user_id` char(4) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`appointment_id`),
  KEY `child_id` (`child_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`),
  CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `child` (
  `child_id` char(5) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `parents_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `village` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pincode` char(10) DEFAULT NULL,
  `contact_no` char(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`child_id`),
  UNIQUE KEY `contact_no` (`contact_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child`
--

LOCK TABLES `child` WRITE;
/*!40000 ALTER TABLE `child` DISABLE KEYS */;
INSERT INTO `child` VALUES ('CH001','Kumari','Annu','Priya','Radeshyam Paswan','Female','2018-01-02','Motipur','Muzaffarpur','Bihar','843113','8954231237','annu0201@gmai.com');
/*!40000 ALTER TABLE `child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registration` (
  `user_id` char(4) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES ('U001','Neha Bharti','nb873809@gmail.com','Neha@1224','Staff'),('U002','Prity Bharti','pb@0916gmail.com','Pb@0916','Parent');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff` (
  `staff_id` char(5) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `village` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pincode` char(10) DEFAULT NULL,
  `contact_no` char(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `contact_no` (`contact_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `state` (
  `state` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` VALUES ('Andhra Pradesh'),('Arunachal Pradesh'),('Assam'),('Bihar');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccination`
--

DROP TABLE IF EXISTS `vaccination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaccination` (
  `appointment_id` char(4) DEFAULT NULL,
  `v_id` int NOT NULL AUTO_INCREMENT,
  `vaccine_id` int DEFAULT NULL,
  `child_id` char(5) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `actual_date` date DEFAULT NULL,
  PRIMARY KEY (`v_id`),
  KEY `appointment_id` (`appointment_id`),
  KEY `vaccine_id` (`vaccine_id`),
  KEY `child_id` (`child_id`),
  CONSTRAINT `vaccination_ibfk_1` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`appointment_id`),
  CONSTRAINT `vaccination_ibfk_2` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccination_chart` (`vaccine_id`),
  CONSTRAINT `vaccination_ibfk_3` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccination`
--

LOCK TABLES `vaccination` WRITE;
/*!40000 ALTER TABLE `vaccination` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccination_chart`
--

DROP TABLE IF EXISTS `vaccination_chart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaccination_chart` (
  `vaccine_id` int NOT NULL AUTO_INCREMENT,
  `group_id` int DEFAULT NULL,
  `vaccine_name` varchar(20) DEFAULT NULL,
  `prevents` varchar(50) DEFAULT NULL,
  `minimum_age` varchar(50) DEFAULT NULL,
  `units` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`vaccine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccination_chart`
--

LOCK TABLES `vaccination_chart` WRITE;
/*!40000 ALTER TABLE `vaccination_chart` DISABLE KEYS */;
INSERT INTO `vaccination_chart` VALUES (1,1,'OPV-0','Polio','0','Day'),(2,1,'Hep B','Hepatitis B ','0','Day'),(3,1,'BCG','TB and Bladder cancer ','0','Day'),(4,2,'OPV-1','Polio','1 1/2','Months'),(5,2,'Penta-1','Diptheria, Tetanus, Pertusis, Hib, and Hepatitis B','1 1/2','Months'),(6,2,'Rota-1','Diarrhea, Vomiting, Fever','1 1/2','Months'),(7,2,'PCV-1','Pneumonia','1 1/2','Months'),(8,2,'IPV-1','Polio','1 1/2','Months'),(9,3,'OPV-2','Polio','2 1/2','Months'),(10,3,'Penta-2','Diptheria, Tetanus, Pertusis, Hib, and Hepatitis B','2 1/2','Months'),(11,3,'Rota-2','Diarrhea, Vomiting, Fever','2 1/2','Months'),(12,4,'OPV-3','Polio','3 1/2','Months'),(13,4,'Penta-3','Diptheria, Tetanus, Pertusis, Hib, and Hepatitis B','3 1/2','Months'),(14,4,'Rota-3','Diarrhea, Vomiting, Fever','3 1/2','Months'),(15,4,'PCV-2','Polio','3 1/2','Months'),(16,4,'IPV-2','Polio','3 1/2','Months'),(17,5,'MR-1','Measles, Mumps, and Rubella','9','Months'),(18,5,'JE-1','Mosquito Bites','9','Months'),(19,5,'PCV-Boster','Polio','9','Months'),(20,6,'DPT Boster-1','Whooping cough, Diptheria, Tetanus','16-24','Months'),(21,6,'MR-2','Measles, Mumps, and Rubella','16-24','Months'),(22,6,'JE-2','Mosquito Bites','16-24','Months'),(23,6,'OPV Booster','Polio','16-24','Months'),(24,7,'DPT Boster-2','Whooping cough, Diptheria, Tetanus','5-6','Year');
/*!40000 ALTER TABLE `vaccination_chart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccine`
--

DROP TABLE IF EXISTS `vaccine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaccine` (
  `v_id` int DEFAULT NULL,
  `vaccine_id` int DEFAULT NULL,
  KEY `v_id` (`v_id`),
  KEY `vaccine_id` (`vaccine_id`),
  CONSTRAINT `vaccine_ibfk_1` FOREIGN KEY (`v_id`) REFERENCES `vaccination` (`v_id`),
  CONSTRAINT `vaccine_ibfk_2` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccination_chart` (`vaccine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccine`
--

LOCK TABLES `vaccine` WRITE;
/*!40000 ALTER TABLE `vaccine` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccine` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-09 13:35:46
