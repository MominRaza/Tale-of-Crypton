-- MySQL dump 10.14  Distrib 5.5.64-MariaDB, for Linux (x86_64)
--
-- Host: toc.cqbghryr12cf.us-east-2.rds.amazonaws.com    Database: toc
-- ------------------------------------------------------
-- Server version	5.7.22-log

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
-- Table structure for table `gquestions`
--

DROP TABLE IF EXISTS `gquestions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gquestions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `hint` varchar(80) DEFAULT 'Answer should be in lowercase and space and number is counted',
  `answer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gquestions`
--

LOCK TABLES `gquestions` WRITE;
/*!40000 ALTER TABLE `gquestions` DISABLE KEYS */;
INSERT INTO `gquestions` VALUES (1,'gquestions/qstn-001-gXgXz.jpg','Answer should be in lowercase and space and number is counted','time stone'),(2,'gquestions/qstn-002-gf5tg.jpg','Answer should be in lowercase and space and number is counted','yondu udonta'),(3,'gquestions/qstn-003-trt5h.jpg','Answer should be in lowercase and space and number is counted','trevor slattery'),(4,'gquestions/qstn-004-3rtu7.jpg','Answer should be in lowercase and space and number is counted','shamballa'),(5,'gquestions/qstn-005-g42f6.jpg','Answer should be in lowercase and space and number is counted','uranus and gaia'),(6,'gquestions/qstn-006-4gi7V.jpg','Answer should be in lowercase and space and number is counted','the man generalissimo');
/*!40000 ALTER TABLE `gquestions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new`
--

DROP TABLE IF EXISTS `new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new`
--

LOCK TABLES `new` WRITE;
/*!40000 ALTER TABLE `new` DISABLE KEYS */;
INSERT INTO `new` VALUES (1,'...',NULL,NULL),(2,'...',NULL,NULL),(3,'...',NULL,NULL),(4,'...',NULL,NULL),(5,'...',NULL,NULL),(6,'...',NULL,NULL);
/*!40000 ALTER TABLE `new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `hint` varchar(80) DEFAULT 'Answer should be in lowercase and space and number is counted',
  `answer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'questions/qstn-001-uVfEQ.jpeg','Answer should be in lowercase and space and number is counted','norse mythology'),(2,'questions/qstn-002-Dc7bO.jpeg','Answer should be in lowercase and space and number is counted','pym particle'),(3,'questions/qstn-003-H0ApI.jpeg','Answer should be in lowercase and space and number is counted','valkyrie'),(4,'questions/qstn-004-gIxvk.jpeg','Answer should be in lowercase and space and number is counted','hulk'),(5,'questions/qstn-005-RWqRH.jpeg','Answer should be in lowercase and space and number is counted','eternal flame'),(6,'questions/qstn-006-9neIH.jpeg','Answer should be in lowercase and space and number is counted','14000605'),(7,'questions/qstn-007-ZRMhJ.jpeg','Answer should be in lowercase and space and number is counted','sharon carter'),(8,'questions/qstn-008-YGKdi.jpeg','Answer should be in lowercase and space and number is counted','nova corps'),(9,'questions/qstn-009-FWWGr.jpeg','Answer should be in lowercase and space and number is counted','star lord'),(10,'questions/qstn-0010-kNNQO.jpeg','Answer should be in lowercase and space and number is counted','helen cho'),(11,'questions/qstn-0011-H7aDz.jpeg','Answer should be in lowercase and space and number is counted','vibranium'),(12,'questions/qstn-0012-peiqt.jpeg','Answer should be in lowercase and space and number is counted','mandarin'),(13,'questions/qstn-0013-DsP5D.jpeg','Answer should be in lowercase and space and number is counted','anton vanko'),(14,'questions/qstn-0014-WfQP2.jpeg','Answer should be in lowercase and space and number is counted','asus'),(15,'questions/qstn-0015-6a735.jpeg','Answer should be in lowercase and space and number is counted','1865'),(16,'questions/qstn-0016-y1Q5X.jpeg','Answer should be in lowercase and space and number is counted','kamartaj'),(17,'questions/qstn-0017-fecNM.jpeg','Answer should be in lowercase and space and number is counted','i want you back'),(18,'questions/qstn-0018-anSie.jpeg','Answer should be in lowercase and space and number is counted','myrmecia'),(19,'questions/qstn-0019-IpoAf.jpeg','Answer should be in lowercase and space and number is counted','dad'),(20,'questions/qstn-0020-FeAbH.jpeg','Answer should be in lowercase and space and number is counted','vision'),(21,'questions/qstn-0021-maHOB.jpeg','Answer should be in lowercase and space and number is counted','captain america civil war'),(22,'questions/qstn-0022-3pLhG.png','Answer should be in lowercase and space and number is counted','the dark aster'),(23,'questions/qstn-0023-A5Wgm.jpeg','Answer should be in lowercase and space and number is counted','sakaar'),(24,'questions/qstn-0024-EYRGT.jpg','Answer should be in lowercase and space and number is counted','tonsberg'),(25,'questions/qstn-0025-94vFv.png','Answer should be in lowercase and space and number is counted','alyssa milano'),(26,'questions/qstn-0026-h3Sn6.jpg','Answer should be in lowercase and space and number is counted','ovette'),(27,'questions/qstn-0027-HUD4P.jpg','Answer should be in lowercase and space and number is counted','halfworld'),(28,'questions/qstn-0028-tf56d.jpeg','Answer should be in lowercase and space and number is counted','damage control'),(29,'questions/qstn-0029-yu56T.jpeg','Answer should be in lowercase and space and number is counted','glowstick of destiny'),(30,'questions/qstn-0030-65y5r.jpeg','Answer should be in lowercase and space and number is counted','uru');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `fbToken` varchar(100) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT '1',
  `number` bigint(10) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `glevel` int(11) DEFAULT '0',
  `passwd` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`fbToken`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('abhishanand14@gmail.com','Abhishek Anand Sinha','3rd Year','KNIT',1,8840160109,0,0,'12345678'),('mominr082@gmail.com','Tale Of Crypton','3rd Year','ISTE KNIT',31,7302606166,1,6,'12345678');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-13 13:12:52
