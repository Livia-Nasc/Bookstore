-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: booksonli
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `autores`
--

DROP TABLE IF EXISTS `autores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `autores` (
  `id_autores` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `nacionalidade` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_autores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autores`
--

LOCK TABLES `autores` WRITE;
/*!40000 ALTER TABLE `autores` DISABLE KEYS */;
INSERT INTO `autores` VALUES (0,'Teste',NULL,'Brasileiro'),(1,'Frank Patrick Herbert','1920-10-08','Americano'),(2,'Jane Austen','1775-12-16','Britânica'),(3,'Daniel Handler','1970-02-08','Americano'),(4,'John Green','1977-08-24','Americano'),(5,'Penélope Martins','1973-09-01','Brasileira'),(6,'Igor Pires da Silva','1979-07-27','Brasileiro'),(7,'Beth O`Leary',NULL,'Britânica'),(8,'Jennifer Lynn Barnes','1984-10-19','Oklahoma'),(9,'Malala Yousafzai','1997-07-12','Paquistenesa'),(10,'Pedro Reis','1967-09-30','Português'),(11,'Amanda Lovelace','1991-11-13','Americana'),(12,'Clarisse Lispector','1920-12-10','Ucraniana'),(13,'Collen Hoover','1979-10-11','Americana'),(14,'Victoria Aveyard','1990-07-27','Americana'),(15,'Sarah J. Maas','1986-03-05','Americana'),(16,'Pedro Santiago','1969-08-29','Brasileiro'),(17,'Anne Frank','1929-06-12','Alemã'),(18,'Stephen King','1947-09-21','Americano'),(19,'Taylor Jenkins Reid','1983-12-20','Americana'),(20,'Eva Ibbotson','1925-01-21','Britânica'),(21,'Walcyr Carrasco','1951-12-01','Brasileiro'),(22,'Veronica Roth','1988-08-19','Americana'),(23,'Moacyr Scliar','1937-03-23','Brasileiro'),(24,'Jennifer L. Armentrout','1980-06-11','Americana'),(25,'Ali Hazelwood','1989-12-11','Italiana');
/*!40000 ALTER TABLE `autores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-10 22:35:43
