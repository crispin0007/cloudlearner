-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: database-12.cuvdpllatkuq.us-east-1.rds.amazonaws.com    Database: cloudlearner
-- ------------------------------------------------------
-- Server version	8.0.33

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `admin_detail`
--

DROP TABLE IF EXISTS `admin_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_detail` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_detail`
--

LOCK TABLES `admin_detail` WRITE;
/*!40000 ALTER TABLE `admin_detail` DISABLE KEYS */;
INSERT INTO `admin_detail` VALUES (1,'CloudLearner','admin@gmail.com','admin@123');
/*!40000 ALTER TABLE `admin_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assignment` (
  `assignment_id` int NOT NULL AUTO_INCREMENT,
  `assignment_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `course_id` int NOT NULL,
  `course_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_id` int NOT NULL,
  `assignment_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `doc_location` text COLLATE utf8mb4_general_ci NOT NULL,
  `doc_location_path` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignment`
--

LOCK TABLES `assignment` WRITE;
/*!40000 ALTER TABLE `assignment` DISABLE KEYS */;
INSERT INTO `assignment` VALUES (1,'Demo Assignment',28,'Complete Google Workspace (G Suite), Beginner - Advanced',0,'Edit Option Worked Succesfully','','img/courseimg/'),(2,'Demo Assignment | Edit',28,'Complete Google Workspace (G Suite), Beginner - Advanced',0,'This task to do','../../img/assignment/IMG20230511101100.jpg','img/courseimg/img/assignment/IMG20230511101100.jpg'),(3,'Assignment-1',47,'Complete Python Bootcamp: Go from zero to hero in Python 3',0,'Submitted in time','../../img/assignment/first.docx','img/assignment/first.docx'),(4,'Assignment-1',48,'Google Go (golang) Programming Language',0,'Submitted in time','../../img/assignment/second.docx','img/assignment/second.docx'),(5,'Assignment-1',49,'Ultimate AWS Certified Solutions Architect Associate',0,'Submitted in time','../../img/assignment/third.docx','img/assignment/third.docx'),(6,'Assignment-1',50,'Azure Fundamentals - AZ-900',0,'Submitted in time','../../img/assignment/fourth.docx','img/assignment/fourth.docx'),(7,'Assignment-1',51,'Ultimate Google Cloud Certifications: All in one Bundle 2023',0,'Submitted in time','../../img/assignment/first.docx','img/assignment/first.docx'),(8,'Assignment-1',64,'Basic Linux',0,'Submiitted in time ','../../img/assignment/first.docx','img/assignment/first.docx'),(9,'Assignment-1',65,'Google Docking',0,'Submitted in time ','../../img/assignment/second.docx','img/assignment/second.docx'),(10,'Assignment-1',66,'Master the Art of Ethical Hacking and Penetration Testing',0,'Submitted in time ','../../img/assignment/third.docx','img/assignment/third.docx'),(11,'Assignment-1',67,'AI Fundamental',0,'Submitted in time ','../../img/assignment/fourth.docx','img/assignment/fourth.docx'),(12,'Assignment-1',62,'AWS Basics',0,'Submitted in time ','../../img/assignment/fifth.docx','img/assignment/fifth.docx');
/*!40000 ALTER TABLE `assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_posts` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_topic` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_descrip` text COLLATE utf8mb4_general_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `postimagelocation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_comment` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `stu_id` int NOT NULL,
  `instructor_id` int NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (20,'Unveiling the Cybersecurity Arsenal: A Dive into Kali Linux','lalit','Security','Kali Linux, a Debian-based distribution, is purpose-built for cybersecurity professionals and enthusiasts. It comes preloaded with an array of tools designed for penetration testing, vulnerability assessment, and network analysis. With Kali at your fingertips, you gain access to an extensive toolkit that aids in identifying security weaknesses and fortifying digital systems.','../../img/blogimage/linux.jpg','img/blogimage/linux.jpg',0,1,77,0),(21,'Final Test Blog Post From Student ','Test','AI ','This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. This is final test blog. ','../../img/blogimage/WT10_page-0010.jpg','img/blogimage/WT10_page-0010.jpg',0,0,85,0),(22,'Fusion of science and engineering','Sudeep sharma','Robot','As society increasingly embraces the era of automation, robots are transforming industries, reshaping economies, and reshaping the future of work. Yet, their potential goes beyond functionality, as robots delve into realms of companionship and emotional interaction, blurring the lines between machine and humanity. The trajectory of robotics unveils a captivating evolution, where innovation begets innovation, driving us closer to a future where robots coexist, collaborate, and contribute across a spectrum of human activities. As we navigate this dynamic landscape, the synergy between human creativity and robotic prowess promises to redefine the way we live, work, and explore the world, ushering in a new era of technological enlightenment.','../../img/blogimage/Robort.jpg','img/blogimage/Robort.jpg',0,1,0,0),(23,'Revolutionizing Mobility: The Power of Automatic Wheelchairs','Sudeep sharma','Automation','The automatic wheelchair stands as a transformative marvel in the field of assistive technology. Designed with advanced sensors, intuitive controls, and cutting-edge engineering, it empowers individuals with mobility challenges to navigate the world with newfound independence and dignity. Seamlessly integrating robotics and electronics, the automatic wheelchair responds to user commands or even anticipates movements, effortlessly maneuvering through various terrains and obstacles. Its adaptable features cater to different user needs, enabling seamless indoor navigation, outdoor exploration, and even ascending or descending stairs. Through a combination of motorized wheels, stabilizing mechanisms, and smart algorithms, the automatic wheelchair ensures a smoother and safer journey.','../../img/blogimage/wheelchair.jpg','img/blogimage/wheelchair.jpg',0,1,0,0),(24,'Elevating Possibilities: The Unveiling of Drones','Lalit Chaudhary','Drone','They provide unprecedented access to remote or hazardous locations, capturing breathtaking vistas, monitoring crops, and aiding in search and rescue operations. With the ability to carry sensors and cameras, they gather data for various applications, from environmental monitoring to infrastructure inspection. Drones play a pivotal role in precision agriculture, optimizing crop yield through real-time monitoring and targeted interventions. They have revolutionized the entertainment industry, enabling captivating aerial shots in filmmaking.','../../img/blogimage/drone.jpg','img/blogimage/drone.jpg',0,1,0,0),(25,'Mind of Computer','Lalit Chaudhary','Computer',' Nestled within a computer intricate architecture, the CPU processes data, performs calculations, and manages communication between various components. With multiple cores and threads, modern CPUs can handle complex tasks in parallel, enhancing overall performance. Clock speeds determine how quickly the CPU can execute instructions, influencing a computer processing power. The CPU cache memory stores frequently accessed data, reducing the time needed to retrieve information from the slower main memory. The evolution of CPUs has been marked by Moore Law, driving constant innovation and miniaturization, resulting in faster, more efficient, and energy-conscious processors','../../img/blogimage/cpu.jpg','img/blogimage/cpu.jpg',0,1,0,0);
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `stu_id` int NOT NULL,
  `stu_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `course_id` int NOT NULL,
  `comment` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `stu_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,59,'Rabina Lamichhane    ',34,'hi',0,'rabina@gmail.com       '),(2,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(3,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(4,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(5,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(6,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(7,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(8,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(9,85,'Test Test',67,'eqfaf',1,'testing@gmail.com'),(10,85,'Test Test',67,'eqfaf',1,'testing@gmail.com');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coursedetails`
--

DROP TABLE IF EXISTS `coursedetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coursedetails` (
  `course_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `oprice` int NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `coursedescription` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `courseimage` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagelocation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `course_id` int NOT NULL AUTO_INCREMENT,
  `sprice` int NOT NULL,
  `duration` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `instructor_id` int NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coursedetails`
--

LOCK TABLES `coursedetails` WRITE;
/*!40000 ALTER TABLE `coursedetails` DISABLE KEYS */;
INSERT INTO `coursedetails` VALUES ('Complete Python Bootcamp: Go from zero to hero in Python 3',99,'AWS','This course is gonna give you a big,solid and robust base of knowledge on Python Language. It will take you from zero to hero in coding with Python and thats in simple easy way like you are eating a piece of cake. It will really enrich the knowledge of programming where it is designed to handle most of common programming topics in any language specially Python.','../../img/courseimg/python_0-hero.jpg','img/courseimg/python_0-hero.jpg','Teacher 1',47,99,'11hrs',1,6),('Google Go (golang) Programming Language',200,'AWS','Programming had become too difficult and the choice of languages was partly to blame. One had to choose either efficient compilation, efficient execution, or ease of programming; all three were not available in the same mainstream language. Programmers who could were choosing ease over safety and efficiency by moving to dynamically typed languages such as Python and JavaScript rather than C++ or, to a lesser extent, Java. ','../../img/courseimg/golang.png','img/courseimg/golang.png','Sudeep',48,159,'12hrs',1,6),('Ultimate AWS Certified Solutions Architect Associate',199,'AWS','The AWS Certified Solutions Architect Associate SAA-C03 certification is one of the most challenging exams. Its great at assessing how well you understand not just AWS, but making sure you are making the best architectural decisions based on situations, which makes this certification incredibly valuable to have and pass. Rest assured,','../../img/courseimg/aws_ultima.png','img/courseimg/aws_ultima.png','Sudeep',49,199,'3hrs',1,6),('Azure Fundamentals - AZ-900',199,'Azure','A major refresh carried out for the course. Almost all videos refreshed to ensure that the new User-Interface changes for the Azure services are reflected. Course is also aligned with the newer exam objectives.','../../img/courseimg/Microsoft-Azure-Fundamentals-Exam-in-2023-min-1038x584.webp','img/courseimg/Microsoft-Azure-Fundamentals-Exam-in-2023-min-1038x584.webp','Sudeep',50,199,'12hrs',1,6),('Ultimate Google Cloud Certifications: All in one Bundle 2023',99,'GCP','oogle has updated the video content for several of its Cloud Platform services, including Compute Engine, Kubernetes Engine, and Cloud Storage. The updated videos provide more comprehensive and up-to-date information on how to use these services.','../../img/courseimg/google-cloud-certifications.png','img/courseimg/google-cloud-certifications.png','Sudeep',51,99,'3hrs',1,6),('AWS For Absolute Beginners: Learn AWS From Ground Up',199,'AWS','The cloud is slowly becoming an important piece of technology in today’s world. In addition to being a great data storage system, it is also becoming the standard for creating manageable and scalable web application services, all the while offering a wide range of hosting capabilities. Amazon is currently on top of the game in web application services with its Amazon Web Services (popularly known as AWS). With so many companies shifting their servers to the cloud, making it easier to save data and even access it, it is no wonder that they are looking for AWS specialists. ','../../img/courseimg/aws.jpg','img/courseimg/aws.jpg','Lalit',52,199,'11hrs',1,7),('AZ-104: Microsoft Azure Administrator - Full Course',180,'AZURE','This course teaches the participants to prepare for AZ 104 Certification. If certification is not in your mind at this time, you can still opt for this course as it gives you the knowledge to make you Azure ready and become a better Azure Administrator . This course is derived from Az 103 just like the certification itself. All the changes that were made to Az 103 by Microsoft to make it Az 104 are now incorporated in this course as well .','../../img/courseimg/MICROSOFT-AZ-104.jpeg','img/courseimg/MICROSOFT-AZ-104.jpeg','Lalit',53,160,'12hrs',1,7),('Google Professional Cloud Security Engineer Certification',199,'GCP','In this module I will teach you getting started with Google cloud platform, Setup cloud identity, manage cloud admin console,  IAM identity & access management, service account and its management, resource hierarchy, organization, project, folders,In this module I will teach you how to configure different networking product to better secure cloud resources.  VPC, Firewall, Subnets, Static IP, Internal IP, Cloud Interconnect, Cloud VPN, IAP, Hybrid connectivity, Google API private access.','../../img/courseimg/Google-Professional-Cloud-Architect-amendment-03-2.webp','img/courseimg/Google-Professional-Cloud-Architect-amendment-03-2.webp','Lalit',54,199,'11hrs',1,7),('Azure Cloud Platform (GCP) Fundamentals for Beginners',199,'AZURE','GCP is one of the fastest-growing cloud platforms in the industry. This course aims to provide a thorough overview of GCP. From the core building blocks such as Compute, Storage, and Networking to the advanced services, this course introduces the key concepts and then shows you how to start being productive. Each section includes a hands-on demo of one of the key services. You will also learn the use cases and scenarios for some of the most significant services of Google Cloud.','../../img/courseimg/azure.jpg','img/courseimg/azure.jpg','Lalit',55,199,'11hrs',1,7),('Cloud Computing for Beginners - Infrastructure as a Service',99,'CLOUDCOMPUTING','Over the last couple of years, many business companies decided to use more and more cloud services as part of their digital transformation. They are trying to be more innovative and flexible to the dynamic business landscape by leveraging the power of the cloud. Cloud computing includes a variety of cloud service models, like SaaS, IaaS, PaaS, and FaaS. Each of them is a complete category of cloud services used to solve a variety of business challenges.','../../img/courseimg/X65JX_computing-servicesew3EK.jpg','img/courseimg/X65JX_computing-servicesew3EK.jpg','Lalit',56,199,'3hrs',1,7),('AWS Basics',199,'AWS','Delve into cloud computing concepts, AWS services like EC2, S3, and RDS, and their real-world applications. Navigate the AWS Management Console, grasp resource provisioning, and learn to configure security settings. Hands-on labs provide practical experience in launching instances, storing data, and managing databases. Ideal for beginners, this course equips you with fundamental AWS knowledge, setting the stage for deeper cloud exploration and empowering you to leverage AWSs capabilities for your projects and endeavors.','../../img/courseimg/AWS_BASIC.jpg','img/courseimg/AWS_BASIC.jpg','Sudeep',62,190,'11hrs',1,8),('Basic Linux',199,'AWS','Explore Linux fundamentals in this beginners course. Learn commands, navigate folders, and manage users. Discover shell scripting, networking, and software handling. Practice creating, editing, and moving files, adjusting system settings. Whether youre curious about tech or new to it, this course equips you with vital Linux skills. Its like building a base to understand and work with the Linux operating system effectively.','../../img/courseimg/linux.jpg','img/courseimg/linux.jpg','Sudeep',64,190,'11hrs',1,0),('Google Docking',199,'GCP',' If youre referring to Google Docs, which is a popular cloud-based word processing software by Google, Id be happy to provide information about it. Google Docs allows users to create, edit, and collaborate on documents online. Its a part of Google Workspace (formerly G Suite) and offers features for real-time collaboration, sharing, and version history tracking. If youre referring to something else, please provide more context so I can assist you accurately.','../../img/courseimg/google.jpg','img/courseimg/google.jpg','Sudeep',65,190,'11hrs',1,0),('Master the Art of Ethical Hacking and Penetration Testing',199,'LINUX','Embark on a comprehensive journey into the world of cybersecurity and ethical hacking with our Complete Kali Linux Course. Dive into the depths of Kali Linux, a powerful and versatile penetration testing platform used by professionals and enthusiasts worldwide.\r\nThis immersive course equips you with the essential skills and knowledge to navigate Kali Linux confidently. Learn to harness its arsenal of tools and techniques for vulnerability assessment, penetration testing, and security auditing. Delve into topics such as reconnaissance, exploitation, post-exploitation, and more.','../../img/courseimg/IMG20230511101100.jpg','img/courseimg/IMG20230511101100.jpg','Lalit',66,190,'11hrs',1,0),('AI Fundamental',199,'AI','Delve into Artificial Intelligence (AI) through our comprehensive course, covering foundational principles and hands-on applications. Equip yourself to navigate AI transformative potential and contribute to technological innovation.','../../img/courseimg/ai_phpto.jpg','img/courseimg/ai_phpto.jpg','Sudeep',67,159,'3hrs',1,0),('aws',150,'AWS','abc','../../img/courseimg/','img/courseimg/','Lalit Chaudhary',70,150,'12',1,6);
/*!40000 ALTER TABLE `coursedetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `feedback_id` int NOT NULL AUTO_INCREMENT,
  `stu_id` int NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `stu_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (5,59,'asffsfa','rabina'),(6,59,'asffsfa','rabina');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instructor` (
  `instructor_id` int NOT NULL AUTO_INCREMENT,
  `instructor_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_position` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `instructor_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_img_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (6,'Teacher1','Teacher1@gmail.com','Teacher1@gmail.com','Teacher',1,'',''),(7,'Teacher2','Teacher2@gmail.com','Teacher2@gmail.com','Teacher',1,'',''),(8,'Teacher3','Teacher3@gmail.com','Teacher3@gmail.com','Teacher',1,'',''),(11,'Test Instructor','testins@gmail.com','testins@gmail.com','',1,'',''),(12,'test','test@gmail.com','test@gmail.com','',1,'','');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson`
--

DROP TABLE IF EXISTS `lesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lesson` (
  `lesson_id` int NOT NULL AUTO_INCREMENT,
  `lesson_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `lesson_descrip` text COLLATE utf8mb4_general_ci NOT NULL,
  `lesson_link` text COLLATE utf8mb4_general_ci NOT NULL,
  `course_id` int NOT NULL,
  `course_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `vlocation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson`
--

LOCK TABLES `lesson` WRITE;
/*!40000 ALTER TABLE `lesson` DISABLE KEYS */;
INSERT INTO `lesson` VALUES (5,'Introduction','Welcome to the future of cloud expertise with our [NEW] Ultimate AWS Certified Cloud Practitioner course in 2023.','../../img/videoes/AWS Cloud Introduction.mp4',25,'[NEW] Ultimate AWS Certified Cloud Practitioner - 2023','img/videoes/AWS Cloud Introduction.mp4'),(7,'Introduction','Unveil the realm of network analysis and ethical hacking with \"Wireshark: Packet Analysis and Ethical Hacking: Core Skills.\"','../../img/videoes/Free Wireshark and Ethical Hacking Course_ Video #0.mp4',34,'Wireshark: Packet Analysis and Ethical Hacking: Core Skills','img/videoes/Free Wireshark and Ethical Hacking Course_ Video #0.mp4'),(9,'Introduction','Unlock the full potential of data management and analysis with \"Google Sheets - The Comprehensive Masterclass.\"','../../img/videoes/2    Google  Sheets  Essentials 1  What You Achieve by the End of Essentials.mp4',36,'Google Sheets - The Comprehensive Masterclass','img/videoes/2    Google  Sheets  Essentials 1  What You Achieve by the End of Essentials.mp4'),(10,'Introduction','Explore network reconnaissance and penetration testing with precision in \"Nmap for Ethical Hackers - The Ultimate Hands-On Course.\"','../../img/videoes/Introduction _ Nmap Tutorial For Beginners _ Ethical Hacking Training For Network Security.mp4',37,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/Introduction _ Nmap Tutorial For Beginners _ Ethical Hacking Training For Network Security.mp4'),(11,'Introduction','Equip yourself for cybersecurity excellence with the \"CompTIA Security+ (SY0-601) Complete Course & Exam.\"','../../img/videoes/How to Pass your SY0-601 Security+ Exam.mp4',38,'CompTIA Security+ (SY0-601) Complete Course & Exam','img/videoes/How to Pass your SY0-601 Security+ Exam.mp4'),(12,'Introduction','Explore network reconnaissance and penetration testing with precision in \"Nmap for Ethical Hackers - The Ultimate Hands-On Course.\"','../../img/videoes/Introduction _ Nmap Tutorial For Beginners _ Ethical Hacking Training For Network Security.mp4',39,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/Introduction _ Nmap Tutorial For Beginners _ Ethical Hacking Training For Network Security.mp4'),(13,'Introduction','Master the art of ethical hacking and penetration testing through the \"Ultimate Ethical Hacking and Penetration Testing (UEH)\" course.','../../img/videoes/',40,'Ultimate Ethical Hacking and Penetration Testing (UEH)','img/videoes/'),(15,'Introduction','Embark on a transformative coding journey with the \"Learn Python Programming Masterclass.\"','../../img/videoes/1  Installing Python And PyCharm.mp4',41,'Learn Python Programming Masterclass','img/videoes/1  Installing Python And PyCharm.mp4'),(21,'Wireshark and Packet Analysis','Wireshark is a widely used network protocol analyzer. It allows you to capture and inspect the data traveling back and forth on a computer network. Packet analysis involves examining the individual units of data (packets) that are transmitted between devices on a network. This analysis can help in diagnosing network issues, optimizing performance, and identifying security threats.\r\n\r\nIn this part of the course, you might learn:\r\n\r\nHow to capture network traffic using Wireshark.\r\nHow to dissect and interpret different network protocols.\r\nIdentifying and troubleshooting network issues.\r\nAnalyzing patterns and anomalies in network traffic.','../../img/videoes/vid-2.mp4',34,'Wireshark: Packet Analysis and Ethical Hacking: Core Skills','img/videoes/vid-2.mp4'),(22,'Ethical Hacking','Ethical hacking, also known as penetration testing or white-hat hacking, involves simulating cyberattacks to identify vulnerabilities and weaknesses in computer systems and networks. Ethical hackers use their skills to help organizations improve their security measures and protect against malicious attacks.\r\n\r\nIn the context of this course, you might learn:\r\n\r\nHow to conduct controlled and authorized hacking attempts.\r\nIdentifying and exploiting vulnerabilities in systems and networks.\r\nUnderstanding common hacking techniques and attack vectors.\r\nImplementing security measures to mitigate potential risks.','../../img/videoes/vid-3.mp4',34,'Wireshark: Packet Analysis and Ethical Hacking: Core Skills','img/videoes/vid-3.mp4'),(23,'Introduction to Microsoft Azure',' This topic provides an overview of Microsoft Azure as a cloud computing platform. It covers the basic concepts of cloud services, the benefits of using Azure, and the different types of cloud models, such as Infrastructure as a Service (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS).','../../img/videoes/vid-9.mp4',35,'AZ-900 Microsoft Azure Fundamentals','img/videoes/vid-9.mp4'),(24,'Azure Core Services','This section delves into some of the core services offered by Azure. It may include topics like virtual machines (VMs), storage options (such as Azure Blob Storage and Azure Files), networking services (Azure Virtual Network), and Azure Active Directory for identity and access management.','../../img/videoes/vid-8.mp4',35,'AZ-900 Microsoft Azure Fundamentals','img/videoes/vid-8.mp4'),(25,'Azure Solutions and Management Tools:','This topic covers various solutions and tools available in Azure for different scenarios. It may include Azure App Services for web application hosting, Azure SQL Database for managed relational databases, Azure Kubernetes Service (AKS) for container orchestration, and Azure Monitor for monitoring and managing resources.','../../img/videoes/vid-7.mp4',35,'AZ-900 Microsoft Azure Fundamentals','img/videoes/vid-7.mp4'),(26,'Essential Fundamentals and Data Manipulation:','Introduction to Google Sheets interface and features.\r\nCreating, formatting, and organizing spreadsheets.\r\nWorking with cells, rows, columns, and sheets.\r\nData entry techniques and shortcuts.\r\nBasic formulas and functions for calculations.\r\nSorting, filtering, and conditional formatting.','../../img/videoes/vid-6.mp4',36,'Google Sheets - The Comprehensive Masterclass','img/videoes/vid-6.mp4'),(27,'Advanced Formulas and Functions:','Complex functions like VLOOKUP, HLOOKUP, INDEX-MATCH.\r\nLogical functions (IF, AND, OR) for decision-making.\r\nText functions for manipulating and analyzing text data.\r\nDate and time functions for handling temporal data.\r\nArray formulas for performing calculations on ranges of data.\r\nError handling and debugging techniques.','../../img/videoes/vid-5.mp4',36,'Google Sheets - The Comprehensive Masterclass','img/videoes/vid-5.mp4'),(28,'Data Visualization and Analysis:','Creating and customizing charts (bar, line, pie, etc.).\r\nUsing pivot tables for data summarization and analysis.\r\nData validation and drop-down lists.\r\nImporting and exporting data from/to different sources.\r\nCollaborative features, including sharing and commenting.\r\nData consolidation and linking between sheets.','../../img/videoes/vid-4.mp4',36,'Google Sheets - The Comprehensive Masterclass','img/videoes/vid-4.mp4'),(29,'Automation and Integration:','Using Google Apps Script for custom automation.\r\nCreating macros and recording actions.\r\nIntegrating Google Sheets with other Google Workspace apps.\r\nImporting data from external APIs or databases.\r\nSetting up data triggers and notifications.\r\nCollaborative editing and version history.','../../img/videoes/vid-3.mp4',36,'Google Sheets - The Comprehensive Masterclass','img/videoes/vid-3.mp4'),(30,'Introduction to Nmap and Network Scanning:','Overview of Nmap and its capabilities as a powerful network scanning tool.\r\nUnderstanding different scan types (TCP, UDP, SYN, etc.) and their use cases.\r\nHands-on exploration of basic Nmap commands and syntax.\r\nImportance of network reconnaissance in ethical hacking and cybersecurity.','../../img/videoes/vid-3.mp4',37,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-3.mp4'),(31,'Advanced Nmap Techniques and Target Identification:','Deep dive into Nmap scripting engine (NSE) for customized scanning scripts.\r\nNetwork target selection and subnet scanning strategies.\r\nHost discovery methods and techniques for identifying live hosts.\r\nOS fingerprinting and service/version detection for target profiling.\r\nStealth scanning techniques (e.g., SYN Stealth, Fragmentation) to avoid detection.','../../img/videoes/vid-4.mp4',37,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-4.mp4'),(32,'Vulnerability Scanning and Assessment:','Using Nmap for vulnerability detection and assessment.\r\nIntegration of Nmap with vulnerability databases and assessment tools.\r\nAnalyzing Nmap scan results to identify potential security weaknesses.\r\nConducting port scanning to identify open ports and services.\r\nLeveraging Nmap scripts for specific vulnerability detection (e.g., Heartbleed).','../../img/videoes/vid-4.mp4',37,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-4.mp4'),(33,'Network Mapping and Reporting:','Creating visual network maps using Nmap scan data.\r\nPost-scan analysis and interpretation of Nmap output.\r\nGenerating comprehensive and actionable vulnerability reports.\r\nEffective communication of findings to stakeholders.\r\nBest practices for maintaining ethical standards and legal boundaries.','../../img/videoes/vid-5.mp4',37,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-5.mp4'),(34,'Introduction','The \"CompTIA Security+ (SY0-601) Complete Course & Exam\" is a comprehensive training program designed to equip individuals with the knowledge and skills needed to excel in the field of cybersecurity. This course is aligned with the CompTIA Security+ SY0-601 certification, which is globally recognized and demonstrates a solid foundation in cybersecurity concepts.','../../img/videoes/vid-1.mp4',38,'CompTIA Security+ (SY0-601) Complete Course & Exam','img/videoes/vid-1.mp4'),(35,'content','As the course progresses, it delves into the intricate details of securing different technologies and devices. Participants learn about securing networks, implementing effective access controls, and safeguarding identities and authentication mechanisms. Hands-on labs and real-world scenarios enable learners to apply their knowledge in configuring security solutions and protecting against common cyber threats.','../../img/videoes/vid-2.mp4',38,'CompTIA Security+ (SY0-601) Complete Course & Exam','img/videoes/vid-2.mp4'),(36,'Packet Analysis','One of the core aspects of the course is its focus on cryptographic concepts and their role in maintaining data confidentiality, integrity, and authenticity. Participants explore encryption techniques, digital signatures, and key management, enabling them to understand how cryptography contributes to secure communications and data protection.\r\n\r\nIn the final stages of the course, participants are prepared for the CompTIA Security+ SY0-601 certification exam. They receive comprehensive exam-specific guidance, including practice tests and exam-taking strategies. This ensures that participants are well-equipped to successfully pass the certification exam and demonstrate their proficiency in various security domains.','../../img/videoes/vid-3.mp4',38,'CompTIA Security+ (SY0-601) Complete Course & Exam','img/videoes/vid-3.mp4'),(37,'Wireshark ','The course begins by introducing participants to the fundamental principles of cybersecurity. It covers essential topics such as threat landscapes, risk management, and security controls. Participants gain insights into identifying various types of cyber threats, understanding attack vectors, and assessing potential vulnerabilities within systems and networks.\r\nAs the course progresses, it delves into the intricate details of securing different technologies and devices. Participants learn about securing networks, implementing effective access controls, and safeguarding identities and authentication mechanisms. Hands-on labs and real-world scenarios enable learners to apply their knowledge in configuring security solutions and protecting against common cyber threats.','../../img/videoes/vid-5.mp4',38,'CompTIA Security+ (SY0-601) Complete Course & Exam','img/videoes/vid-5.mp4'),(38,'Advanced Scanning Techniques and Target Identification:','Deep dive into Nmap scan types: TCP, UDP, SYN Stealth, and more.\r\nUtilizing host discovery methods for identifying live hosts.\r\nScanning techniques for bypassing firewalls and intrusion detection systems.\r\nNetwork target selection strategies and subnet scanning.\r\nLeveraging Nmap scripting engine (NSE) for custom scanning scripts.','../../img/videoes/vid-8.mp4',39,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-8.mp4'),(39,'Vulnerability Scanning and Assessment:','Using Nmap for vulnerability detection and assessment.\r\nIntegrating Nmap with vulnerability databases and assessment tools.\r\nAnalyzing Nmap scan output to identify potential security weaknesses.\r\nIdentifying open ports, services, and their associated vulnerabilities.\r\nPractical exercises on conducting comprehensive vulnerability scans.','../../img/videoes/vid-7.mp4',39,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-7.mp4'),(40,'Network Mapping and Post-Scan Analysis:','Creating network maps and visual representations using Nmap data.\r\nUnderstanding OS fingerprinting and service/version detection.\r\nAnalyzing Nmap output to identify network topology and devices.\r\nInterpretation of Nmap scan results for actionable insights.\r\nIdentifying potential security risks based on scan findings.','../../img/videoes/vid-7.mp4',39,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-7.mp4'),(41,'Ethical Hacking and Reporting:','Ethical considerations and legal boundaries when using Nmap.\r\nIntegrating Nmap scans into the ethical hacking process.\r\nDemonstrating responsible and professional use of Nmap.\r\nCompiling comprehensive vulnerability assessment reports.\r\nCommunicating findings effectively to stakeholders and teams.','../../img/videoes/vid-6.mp4',39,'Nmap for Ethical Hackers - The Ultimate Hands-On Course','img/videoes/vid-6.mp4'),(42,'Foundations of Ethical Hacking:','Introduction to ethical hacking, its principles, and its importance in cybersecurity.\r\nUnderstanding the differences between ethical hacking and malicious hacking.\r\nExploring the legal and ethical aspects of hacking for security testing.\r\nOverview of the hacking lifecycle: reconnaissance, scanning, gaining access, maintaining access, and covering tracks.','../../img/videoes/vid-1.mp4',40,'Ultimate Ethical Hacking and Penetration Testing (UEH)','img/videoes/vid-1.mp4'),(43,'Penetration Testing Methodology:','In-depth exploration of the penetration testing process.\r\nReconnaissance techniques for gathering information about targets.\r\nScanning and vulnerability assessment using various tools and methodologies.\r\nExploitation of vulnerabilities to gain unauthorized access.\r\nPost-exploitation activities and maintaining access for further assessment.','../../img/videoes/vid-2.mp4',40,'Ultimate Ethical Hacking and Penetration Testing (UEH)','img/videoes/vid-2.mp4'),(44,'Network and System Vulnerabilities:','Identifying and exploiting network vulnerabilities (e.g., misconfigurations, weak protocols).\r\nAnalyzing and targeting system vulnerabilities (e.g., software vulnerabilities, privilege escalation).\r\nMitigating vulnerabilities and providing recommendations for securing systems.\r\nHands-on demonstrations of common attack vectors and techniques.','../../img/videoes/vid-3.mp4',40,'Ultimate Ethical Hacking and Penetration Testing (UEH)','img/videoes/vid-3.mp4'),(45,'Wireless and Mobile Device Security:','Assessing wireless network security and exploiting vulnerabilities.\r\nExploring mobile device vulnerabilities and potential attack scenarios.\r\nSecuring wireless networks and mobile devices to prevent attacks.\r\nDemonstrating techniques for testing and securing wireless and mobile environments.','../../img/videoes/vid-4.mp4',40,'Ultimate Ethical Hacking and Penetration Testing (UEH)','img/videoes/vid-4.mp4'),(46,'Conclusion','Documenting the penetration testing process and findings.\r\nCreating comprehensive penetration testing reports.\r\nCommunicating technical information to non-technical stakeholders.\r\nProviding actionable recommendations for improving security posture.\r\nThroughout the \"Ultimate Ethical Hacking and Penetration Testing (UEH)\" course, participants would likely engage in hands-on activities, simulated scenarios, and practical exercises to reinforce their understanding and application of ethical hacking concepts and techniques. The course would emphasize responsible and ethical hacking practices and the importance of contributing to improved cybersecurity.','../../img/videoes/vid-5.mp4',40,'Ultimate Ethical Hacking and Penetration Testing (UEH)','img/videoes/vid-5.mp4'),(47,'Regular Expressions:','Exploring the syntax and metacharacters used in regular expressions.\r\nUsing the re module to perform pattern matching and search operations.\r\nCreating regular expressions for tasks like email validation and text extraction.\r\nGrouping, capturing, and replacing text patterns within strings.\r\nApplying regular expressions to parse and manipulate complex data formats.','../../img/videoes/vid-5.mp4',41,'Learn Python Programming Masterclass','img/videoes/vid-5.mp4'),(48,'Web Scraping and Data Extraction:','Introduction to web scraping and its applications in data collection.\r\nSending HTTP requests and receiving responses using the requests library.\r\nParsing HTML content with BeautifulSoup to extract specific data elements.\r\nNavigating through the Document Object Model (DOM) of web pages.\r\nEthical considerations, web scraping etiquette, and handling dynamic content.','../../img/videoes/vid-2.mp4',41,'Learn Python Programming Masterclass','img/videoes/vid-2.mp4'),(49,'Data Visualization:','Introduction to data visualization and its role in conveying insights.\r\nCreating line plots, bar charts, scatter plots, and histograms using Matplotlib.\r\nEnhancing visualizations with labels, titles, legends, and color palettes.\r\nExploring Seaborn for statistical data visualization and advanced plot types.\r\nCustomizing plots, adding annotations, and saving visualizations to files.','../../img/videoes/vid-1.mp4',41,'Learn Python Programming Masterclass','img/videoes/vid-1.mp4'),(50,'Conclusion','In conclusion, the \"Learn Python Programming Masterclass\" offers a comprehensive journey from foundational concepts to advanced techniques. Participants gain expertise in debugging, regex, databases, web scraping, data visualization, and more. Through hands-on learning and real-world projects, this masterclass empowers individuals to excel in Python programming, fostering confident and versatile programmers.','../../img/videoes/vid-9.mp4',41,'Learn Python Programming Masterclass','img/videoes/vid-9.mp4'),(55,'Introduction','Edit Success','../../img/videoes/WhatsApp Video 2023-07-17 at 09.05.19.mp4',28,'Complete Google Workspace (G Suite), Beginner - Advanced','img/courseimg/img/videoes/WhatsApp Video 2023-07-17 at 09.05.19.mp4'),(56,'Testing Course ','Hello World','../../img/videoes/WhatsApp Video 2023-07-17 at 09.05.19.mp4',34,'Wireshark: Packet Analysis and Ethical Hacking: Core Skills','img/videoes/WhatsApp Video 2023-07-17 at 09.05.19.mp4'),(58,'Introduction','abc','../../img/videoes/intro.mp4',47,'Complete Python Bootcamp: Go from zero to hero in Python 3','img/videoes/intro.mp4'),(59,'Content','def','../../img/videoes/content.mp4',47,'Complete Python Bootcamp: Go from zero to hero in Python 3','img/videoes/content.mp4'),(60,'Conclusion','Thank u','../../img/videoes/conclusion.mp4',47,'Complete Python Bootcamp: Go from zero to hero in Python 3',''),(61,'Introduction','123','../../img/videoes/intro.mp4',48,'Google Go (golang) Programming Language','img/videoes/intro.mp4'),(62,'Content','sssd','../../img/videoes/content.mp4',48,'Google Go (golang) Programming Language','img/videoes/content.mp4'),(63,'Conclusion','end','../../img/videoes/conclusion.mp4',48,'Google Go (golang) Programming Language',''),(64,'Introduction','Intro','../../img/videoes/intro.mp4',49,'Ultimate AWS Certified Solutions Architect Associate','img/videoes/intro.mp4'),(65,'Content','thank u','../../img/videoes/content.mp4',49,'Ultimate AWS Certified Solutions Architect Associate','img/videoes/content.mp4'),(66,'Conclusion','conclusion','../../img/videoes/conclusion.mp4',49,'Ultimate AWS Certified Solutions Architect Associate',''),(67,'Introduction','Introduction','../../img/videoes/intro.mp4',50,'Azure Fundamentals - AZ-900','img/videoes/intro.mp4'),(68,'Content','Content','../../img/videoes/content.mp4',50,'Azure Fundamentals - AZ-900','img/videoes/content.mp4'),(69,'Conclusion','Conclusion','../../img/videoes/conclusion.mp4',50,'Azure Fundamentals - AZ-900','img/videoes/conclusion.mp4'),(70,'Introduction','Introduction','../../img/videoes/intro.mp4',51,'Ultimate Google Cloud Certifications: All in one Bundle 2023','img/videoes/intro.mp4'),(71,'Content','Content','../../img/videoes/content.mp4',51,'Ultimate Google Cloud Certifications: All in one Bundle 2023','img/videoes/content.mp4'),(72,'Conclusion','Conclusion','../../img/videoes/conclusion.mp4',51,'Ultimate Google Cloud Certifications: All in one Bundle 2023','img/videoes/conclusion.mp4'),(73,'Introduction','Introduction','../../img/videoes/intro.mp4',52,'AWS For Absolute Beginners: Learn AWS From Ground Up','img/videoes/intro.mp4'),(74,'Content','Content','../../img/videoes/content.mp4',52,'AWS For Absolute Beginners: Learn AWS From Ground Up','img/videoes/content.mp4'),(75,'Conclusion','Conclusion','../../img/videoes/conclusion.mp4',52,'AWS For Absolute Beginners: Learn AWS From Ground Up','img/videoes/conclusion.mp4'),(76,'Introduction','Introduction','../../img/videoes/intro.mp4',53,'AZ-104: Microsoft Azure Administrator - Full Course','img/videoes/intro.mp4'),(77,'Content','Content','../../img/videoes/content.mp4',53,'AZ-104: Microsoft Azure Administrator - Full Course','img/videoes/content.mp4'),(78,'Conclusion','Conclusion','../../img/videoes/conclusion.mp4',53,'AZ-104: Microsoft Azure Administrator - Full Course','img/videoes/conclusion.mp4'),(79,'Introduction','Introduction','../../img/videoes/intro.mp4',66,'Master the Art of Ethical Hacking and Penetration Testing','img/videoes/intro.mp4'),(80,'Content','Main part','../../img/videoes/content.mp4',66,'Master the Art of Ethical Hacking and Penetration Testing','img/videoes/content.mp4'),(81,'Conclusion','Conclusion','../../img/videoes/conclusion.mp4',66,'Master the Art of Ethical Hacking and Penetration Testing','img/videoes/conclusion.mp4'),(82,'Introduction','Introduction','../../img/videoes/intro.mp4',67,'AI Fundamental','img/videoes/intro.mp4'),(83,'Content','Content','../../img/videoes/content.mp4',67,'AI Fundamental','img/videoes/content.mp4'),(84,'Conclusion','Conclusion','../../img/videoes/conclusion.mp4',67,'AI Fundamental','img/videoes/conclusion.mp4');
/*!40000 ALTER TABLE `lesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `order_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_id` int NOT NULL,
  `course_id` int NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (67,'pHmbRNNTR9r4zNgRrLH6wY','sudip@gmail.com',78,47,'Complete Python Bootcamp: Go from zero to hero in Python 3','success','$WLEzg2x8gYCrN8askJVc7X',9900),(68,'9vhtW9RJTyHEUPcfmBkCQX','sudip@gmail.com',78,49,'Ultimate AWS Certified Solutions Architect Associate','success','$EDjm6SnwShDmVWc8tdDrjb',19900),(69,'wBse4evDV5i5sdAf5xmGed','lalit@gmail.com',77,48,'Google Go (golang) Programming Language','success','$SVuFiLvphmdu65EnViDNK5',15900),(70,'uxcStJzFrcYqZTw5GiMjj6','lalit@gmail.com',77,53,'AZ-104: Microsoft Azure Administrator - Full Course','success','$SyU98h5myaKmD4MXv3UQRP',16000),(71,'cV8avvAe6ekYhNaCxxD3Mi','testing@gmail.com',85,67,'AI Fundamental','success','$XxcDdM24LoLviKAxdsCAKD',15900),(72,'5jZinmVGjyTmeD4un6ZqxJ','solon@gmail.com',82,67,'AI Fundamental','success','$tYkeZbZEXzZGKk2EVR94mi',15900),(73,'fL7PUeHXMeCoLDqFQGjzGH','solon@gmail.com',82,66,'Master the Art of Ethical Hacking and Penetration Testing','success','$LE9hPAruzn9pBFrg4tCfxd',19000),(74,'w2hroxoEM27vFTGoSTyMK5','sudip@gmail.com  ',78,67,'AI Fundamental','success','$X9Jh64hkwDXnQkzqJUcn32',15900),(75,'XpikMQiKAWJszwU5njPQo3','lalit@gmail.com ',77,67,'AI Fundamental','success','$2BU9mTPPHQNbnncHB2LLNU',15900),(76,'d6KUBQ8Vm7PsMLL5uCrVka','demo@gmail.com',87,66,'Master the Art of Ethical Hacking and Penetration Testing','success','$dtQxumUAVmSaQ9YY8HqQd2',19000);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `stu_id` int NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_img_path` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_occ` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (77,'lalit ','lalit@gmail.com ','lalit@gmail.com','../../img/profilepic/lalit.jpg','img/profilepic/lalit.jpg',' student ',0,''),(78,'sudip  ','sudip@gmail.com  ','sudip@gmail.com','../../img/profilepic/sudip.jpg','img/profilepic/sudip.jpg',' student  ',0,''),(79,'sabina','sabina@gmail.com','sabina@gmail.com','','',' student',0,''),(80,'rojina','rojina@gmail.com','rojina@gmail.com','','',' student',0,''),(81,'yanki','yanki@gmail.com','yanki@gmail.com','','',' student',0,''),(82,'solon ','solon@gmail.com ','solon@gmail.com','../../img/profilepic/solon.jpg','img/profilepic/solon.jpg',' student ',0,''),(83,'raj','raj@gmail.com','12345','','','',0,''),(84,'salina','salina@gmail.com','12345','','','',0,''),(85,'Test Test','testing@gmail.com','testing@gmail.com','','','',0,''),(86,'Yanki','tamangyanki762@gmail.com','yanki@123','','','',0,''),(87,'demo123','demo@gmail.com','demo@gmail.com','','','',0,'');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-09 15:56:11
