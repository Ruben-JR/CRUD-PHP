CREATE DATABASE  IF NOT EXISTS `empresa` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `empresa`;
-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: empresa
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoas` (
  `cod_pessoa` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoas`
--

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
INSERT INTO `pessoas` VALUES (1,'Ruben de Pina','Achadinha, Praia, Cabo Verde','5951171','rubenpina758@gmail.com','2022-02-25','20220301110322 '),(2,'Edino Moniz','Achadinha, Praia, Cabo Verde','5996282','edinopraia@gmail.com','1997-02-19','20220301090328.jpg'),(3,'Erica dos Santos','Agua de Gato, SD, Cabo Verde','9732373','ericajosiane@gmail.com','2022-03-08','20220301090323.jpg'),(4,'Cleiton da Moura','Terra Branca','555 222 666','cleiton@gmail.com','2022-03-17','20220301110341'),(5,'Mario Joao','Maio, Morro, Cabo Verde','5663281','mario.morro@gmail.com','2022-03-09','20220301100342.jpg'),(6,'Denilson semedo','Calbeceira, Praia, Cabo Verde','9963541','dstavares00@gmail.com','2022-03-16','0'),(7,'Djamay Cabo Verde','Maio, Morro, Cabo Verde','34243454','djarmay@gmail.com','2022-03-16','20220301110317jpeg'),(8,'Morro grande','Maio, Cabo Verde','34243454','maio@gmail.com','2022-03-16','20220301110354jpeg'),(9,'Morro grande','Maio, Cabo Verde','34243454','maio@gmail.com','2022-03-17','0'),(10,'Blink de Pina','Achadinha, Praia, Cabo Verde','5964878','blink@gmail.com','2019-05-12','0'),(11,'wvvwrfrqwef','wvwrv3rf','243546','34235fef@gmail.com','2022-03-10','20220301110353.png'),(12,'sdfbbww','ebtb','518','ewb@gmail.com','2022-03-09','0'),(13,'Emily','Achadinha, Praia, Cabo Verde','518158115','emily@gmail.com','2022-03-17','0'),(14,'Ruben dos reis','Maio, Cabo Verde','5364512','rubenpina758@gmail.com','2022-03-09','20220303110330.jpeg');
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilizador`
--

DROP TABLE IF EXISTS `utilizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilizador` (
  `cod_utilizador` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cod_utilizador`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilizador`
--

LOCK TABLES `utilizador` WRITE;
/*!40000 ALTER TABLE `utilizador` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilizador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-28 10:41:48
