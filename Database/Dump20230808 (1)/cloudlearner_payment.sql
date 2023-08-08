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
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (51,'QvoyFAF2mzXgrdLhSJxhQV','lalitchaudhary622@gmail.com',54,35,'AZ-900 Microsoft Azure Fundamentals','success','$iiW4Dmg2wiamQvf6XWoY6F',19900,'2023-08-04'),(52,'TKkRNxYaWsaRzWLcYoLShW','rabina@gmail.com',59,34,'Wireshark: Packet Analysis and Ethical Hacking: Core Skills','success','$pjwB8Q32beWz4x3jNTDwBB',19900,'2023-08-04'),(55,'YxggPRTj4zuYLVjsC7H8HZ','sabina@gmail.com',58,28,'Complete Google Workspace (G Suite), Beginner - Advanced','success','$L8PkJTzBVVqpCKuVAAcgcJ',19900,'2023-08-04'),(56,'x7vqJu3W3jyuzpVHFY5GaJ','yanki@gmail.com',60,34,'Wireshark: Packet Analysis and Ethical Hacking: Core Skills','success','$UPDja75ujcoqVAEjZaqq3b',19900,'2023-08-04'),(57,'XwGdVkgpLULCJWXGEAkeB5','yanki@gmail.com',60,35,'AZ-900 Microsoft Azure Fundamentals','success','$5gttVajkWuB8rGmAr8wM5m',19900,'2023-08-04'),(58,'rcqTq9JQUjPhmkgwCM8e9Y','solon@gmail.com',61,28,'Complete Google Workspace (G Suite), Beginner - Advanced','success','$jDocUW66RXic2VUrkiHaQi',19900,'2023-08-04'),(59,'bxpDZ687ymQ5TPuQWuvuM9','solon@gmail.com',61,39,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','success','$p7m4r6TTx7ncbahzBaFwhL',19900,'2023-08-04'),(60,'4nSrQNg8UZjLLopmcaEFqF','sudip@gmail.com',62,38,'CompTIA Security+ (SY0-601) Complete Course & Exam','success','$7HLsH6owtU2oLAR3NFAvBn',19900,'2023-08-04'),(61,'HcEh4v5EHBeKrBH46WehJM','sudip@gmail.com',62,40,'Ultimate Ethical Hacking and Penetration Testing (UEH)','success','$WwHznTdYqiKsyFf6oMGa8J',19900,'2023-08-04'),(62,'JcKBjTsAvrFJiimybdnkwa','ram@gmail.com',66,36,'Google Sheets - The Comprehensive Masterclass','success','$6WbKR2raRJkqBtDV7ViPCA',19900,'2023-08-04'),(63,'jCPHLZAKt3RCdrWcu7q8i3','ram@gmail.com',66,41,'Learn Python Programming Masterclass','success','$tXFh5bh4T7cvv6dk5kytyc',19900,'2023-08-04'),(64,'EGmiAiJC9mN3MiDsUeFzH3','sita@gmail.com',67,35,'AZ-900 Microsoft Azure Fundamentals','success','$egFPCKfFdR23C7dTUPVTAT',19900,'2023-08-04'),(65,'RJi3iWEZUmWzDZboDSFvtJ','sita@gmail.com',67,37,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','success','$g4mSJSbEhQ9sSrZGFj5Qad',19900,'2023-08-04'),(66,'CfMp3U8Jq33egcoHXvSdDX','rabina@gmail.com',59,39,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','success','$ULordADPSte7QoPA3VzUmK',19900,'2023-08-07');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
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
