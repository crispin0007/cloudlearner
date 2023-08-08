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
-- Table structure for table `coursedetails`
--

DROP TABLE IF EXISTS `coursedetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coursedetails` (
  `course_title` text NOT NULL,
  `oprice` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `coursedescription` longtext NOT NULL,
  `courseimage` text NOT NULL,
  `imagelocation` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `course_id` int(255) NOT NULL AUTO_INCREMENT,
  `sprice` int(255) NOT NULL,
  `duration` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `instructor_id` int(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coursedetails`
--

LOCK TABLES `coursedetails` WRITE;
/*!40000 ALTER TABLE `coursedetails` DISABLE KEYS */;
INSERT INTO `coursedetails` VALUES ('Complete Google Workspace (G Suite), Beginner - Advanced',2500,'aws','Passionate content specialist crafting engaging narratives, curating materials, and optimizing messaging for authentic brand-audience connections across diverse platforms. ','../../img/courseimg/devops.jpg','img/courseimg/img/courseimg/devops.jpg','Lalit Chaudhary',28,199,'11hrs',1,2),('Wireshark: Packet Analysis and Ethical Hacking: Core Skills',3000,'security','Learn Wireshark practically. Wireshark pcapng files provided so you can practice while you learn! There is so much to learn in this course:\r\n\r\n- Capture Telnet, FTP, TFTP, HTTP passwords.\r\n\r\n- Replay VoIP conversations.\r\n\r\n- Capture routing protocol (OSPF) authentication passwords.\r\n\r\n- Troubleshoot network issues.\r\n\r\n- Free software.\r\n\r\n- Free downloadable pcapng files.\r\n\r\n- Answer quiz questions.\r\n\r\nThe course is very practical. You can practice while you learn!\r\n\r\nLearn how to analyze and interpret network protocols and leverage Wireshark for what it was originally intended: Deep Packet Inspection and network analysis.\r\n\r\nI also show you have to hack network protocols using Kali Linux! Hack network protocols like DTP, VTP, STP and DHCP using Ethical hacking tools included in Kali Linux.\r\n\r\nUpdates: Now includes Python scripting to automatically capture packets from the network using tshark. Lean how to automate your captures and learn how to hack the network using Python and Wireshark.\r\n\r\nProtocols we capture and discuss in this course include:\r\n\r\n- Telnet\r\n\r\n- FTP\r\n\r\n- TFTP\r\n\r\n- HTTP\r\n\r\n- VoIP\r\n\r\n- OSPF\r\n\r\n- EIGRP\r\n\r\n- DNS\r\n\r\n- ICMP\r\n\r\n- DTP\r\n\r\n-  VTP\r\n\r\n- STP\r\n\r\n- DHCP','../../img/courseimg/wireshark.jpeg','img/courseimg/wireshark.jpeg','sudeep',34,199,'12hrs',1,0),('AZ-900 Microsoft Azure Fundamentals',1500,'cloud','Azure Fundamentals exam is an opportunity to prove knowledge of cloud concepts, Azure services, Azure workloads, security and privacy in Azure, as well as Azure pricing and support. Candidates should be familiar with the general technology concepts, including concepts of networking, storage, compute, application support, and application development.\r\n\r\nCandidates for this practice exam should have foundational knowledge of cloud services and how those services are provided with Microsoft Azure. The pratctice test is intended for candidates who are just beginning to work with cloud-based solutions and services or are new to Azure.\r\n\r\nThis practice test measures your ability to describe the following concepts:\r\n\r\n- cloud concepts;\r\n\r\n- core Azure services;\r\n\r\n- core solutions and management tools on Azure;\r\n\r\n- general security and network security features; identity,\r\n\r\n- governance, privacy, and compliance features; and Azure cost management and Service Level Agreements.\r\n\r\nSkills measured\r\n\r\nDescribe cloud concepts\r\n\r\nDescribe core Azure services\r\n\r\nDescribe core solutions and management tools on Azure\r\n\r\nDescribe general security and network security features\r\n\r\nDescribe identity, governance, privacy, and compliance features\r\n\r\nDescribe Azure cost management and Service Level Agreements','../../img/courseimg/azure.jpeg','img/courseimg/azure.jpeg','sudeep',35,199,'3hrs',1,0),('Google Sheets - The Comprehensive Masterclass',1500,'aws','This is the best-selling Google Workspace End User course on Udemy, along with the highest rating. Over 4000 5 star reviews!\r\nWelcome to the Complete Google Workspace (G Suite) Course, covering Google Docs, Google Sheets and Google Sheets Advanced topics, Google Slides, Google Calendar, Google Drive, Gmail, Google Forms, Google Meet etc Loaded with tips and tricks, resources and helpful information ready to help you learn Google Workspace (Previously called G Suite and Google Apps for Business). Work faster and smarter, do more with G Suite. Explore how to get more productive - make use of all the amazing features that GSuite has to offer. G Suite is perfect for workplace collaboration, communications and productivity. You can also use your own personal Gmail account for free! G Suite Apps work seamlessly together, allowing uses to collaborate on files, create documents, build spreadsheets, and so much more. G Suite has the tools to boost your productivity. Cover covers everything you need to know about using Google in your Workplace with Google Workspace (GSuite Apps or the Google Suite). Find out more about Google Chrome - ','../../img/courseimg/google suits.jpeg','img/courseimg/google suits.jpeg','sudeep',36,199,'11hrs',1,0),('Nmap for Ethical Hackers - The Ultimate Hands-On Course',1500,'security','Nmap for Ethical Hackers - The Ultimate Hands-On Course\" is a comprehensive and practical training program designed to equip aspiring ethical hackers with the essential skills to effectively utilize Nmap (Network Mapper) for network reconnaissance, vulnerability assessment, and penetration testing. This course delves into the depths of Nmap, exploring its features, techniques, and applications to empower students to become proficient in network scanning and analysis.','../../img/courseimg/nmap.jpeg','img/courseimg/nmap.jpeg','sudeep',37,199,'12hrs',1,0),('CompTIA Security+ (SY0-601) Complete Course & Exam',3000,'security','The \"CompTIA Security+ (SY0-601) Complete Course & Exam\" offers a comprehensive and in-depth exploration of essential cybersecurity concepts and practices, equipping learners with the knowledge and skills necessary to excel in the dynamic field of information security. This meticulously crafted course provides a comprehensive understanding of the latest SY0-601 exam objectives set by CompTIA, a globally recognized authority in IT certifications.\r\n\r\nThrough a combination of engaging video lectures, hands-on labs, and practical exercises, participants embark on a journey through diverse topics such as threat management, cryptography, network security, identity and access management, and more. The course covers fundamental principles while delving into cutting-edge security technologies and methodologies, reflecting the ever-evolving landscape of digital threats and defenses.\r\n\r\nInstructors with extensive industry experience guide learners in grasping complex security theories and applying them to real-world scenarios, promoting a deep comprehension of cybersecurity strategies. With an emphasis on interactive learning, students acquire proficiency in risk mitigation, incident response, and security architecture.\r\n\r\nFurthermore, the course culminates in comprehensive exam preparation, ensuring participants are well-equipped to confidently tackle the SY0-601 exam. Whether aspiring to kickstart a career in cybersecurity or seeking to enhance existing skills, the \"CompTIA Security+ (SY0-601) Complete Course & Exam\" serves as an invaluable resource for individuals eager to master the intricacies of modern information security and emerge as adept professionals in this vital field.','../../img/courseimg/Security+.jpeg','img/courseimg/Security+.jpeg','sudeep',38,199,'15hrs',1,0),('Nmap for Ethical Hackers - The Ultimate Hands-On Course',1500,'security','Nmap for Ethical Hackers - The Ultimate Hands-On Course\" is a comprehensive and practical training program designed to equip aspiring ethical hackers with the essential skills to effectively utilize Nmap (Network Mapper) for network reconnaissance, vulnerability assessment, and penetration testing. This course delves into the depths of Nmap, exploring its features, techniques, and applications to empower students to become proficient in network scanning and analysis.','../../img/courseimg/nmap.jpeg','img/courseimg/nmap.jpeg','sudeep',39,199,'12hrs',1,0),('Ultimate Ethical Hacking and Penetration Testing (UEH)',3000,'Security','Ultimate Ethical Hacking and Penetration Testing (UEH) is a comprehensive and advanced training program that equips individuals with the skills and knowledge to ethically identify vulnerabilities in digital systems. Through hands-on exercises and real-world simulations, participants learn to assess network security, probe for weaknesses, and safeguard against cyber threats. Covering a wide range of techniques and tools, UEH delves into penetration testing methodologies, exploiting vulnerabilities, and proposing effective security solutions. ','../../img/courseimg/kali linux.jpeg','img/courseimg/kali linux.jpeg','Sudeep',40,199,'15hrs',1,0),('Learn Python Programming Masterclass',1500,'Programming','The \"Learn Python Programming Masterclass\" is an immersive and comprehensive online course designed to empower learners with a solid foundation in Python programming. Covering fundamental concepts to advanced techniques, this masterclass equips participants with the skills to create versatile applications, websites, and automation scripts. Through engaging lectures and hands-on projects, students gain practical experience in data manipulation, algorithm design, and object-oriented programming. With expert guidance, learners unravel the complexities of Python, harnessing its potential for web development, data analysis, and more','../../img/courseimg/python.jpeg','img/courseimg/img/courseimg/python.jpeg','Sudeep',41,199,'11hrs',1,0),('teacher coursse ',499,'DASD','sdsdf','../../img/courseimg/IMG20230511101100.jpg','img/courseimg/IMG20230511101100.jpg','Lalit Chaudhary',42,122,'EQWE',0,2),('teacher course 2',499,'DevOPS','dsfsdf','../../img/courseimg/IMG20230511101100.jpg','img/courseimg/IMG20230511101100.jpg','Lalit Chaudhary',44,399,'9.5 hours on-demand video',0,2);
/*!40000 ALTER TABLE `coursedetails` ENABLE KEYS */;
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
