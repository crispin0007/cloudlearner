-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cloudlearner
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `stu_id` int(255) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_img` varchar(255) NOT NULL,
  `stu_img_path` varchar(2000) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (57,'abc','abc@gmail.com','xyz@gmail.com','','','',0,''),(58,'sabina','sabina@gmail.com','sabina@gmail.com','','','',0,''),(59,'Rabina Lamichhane  ','rabina@gmail.com     ','rabina@gmail.com','','img/courseimg/','  Student   ',0,''),(60,'yanki','yanki@gmail.com','yanki@gmail.com','','','',0,''),(61,'solon','solon@gmail.com','solon@gmail.com','','','',0,''),(62,'sudip','sudip@gmail.com','sudip@gmail.com','','','',0,''),(66,'ram','ram@gmail.com','ram@gmail.com','','','',0,''),(67,'sita','sita@gmail.com','sita@gmail.com','','','',0,''),(68,'Lalit','lalit@gmail.com','12345678','','','student',0,''),(70,'SABINA MAHATO','sabinamahato66@gmail.com','admin@123','','','',0,''),(71,'demo ','lalit@forbescollege.edu.np','123456','','','',0,'8564fc09ebda8879ab3d7e4db0e644c3'),(72,'demo ','lalit@forbescollege.edu.nppp','e10adc3949ba59abbe56e057f20f883e','','','',0,'650283a1d24572f722f988164989eed0'),(73,'Lalit Kumar Chaudhary','lalitchaudhary622@gmail.com','123456','','','',0,''),(74,'saf a','crispin@whez.edu.np','fsadf','','','',0,'');
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

-- Dump completed on 2023-08-08 12:21:46
