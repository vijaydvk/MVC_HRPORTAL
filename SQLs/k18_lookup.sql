-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: suncom
-- ------------------------------------------------------
-- Server version	5.5.56

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
-- Table structure for table `k18_lookup`
--

DROP TABLE IF EXISTS `k18_lookup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `k18_lookup` (
  `id` int(11) NOT NULL,
  `codegroup` varchar(20) DEFAULT NULL,
  `codeid` varchar(40) NOT NULL,
  `codevalue` varchar(60) NOT NULL,
  `shortdesc` varchar(60) DEFAULT NULL,
  `longdesc` varchar(60) DEFAULT NULL,
  `sortorder` int(11) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  `createdby` varchar(60) DEFAULT NULL,
  `createdon` datetime DEFAULT NULL,
  `modifiedby` varchar(60) DEFAULT NULL,
  `modifiedon` datetime DEFAULT NULL,
  PRIMARY KEY (`codeid`,`codevalue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('1', 'suncom', 'it_tickect_status', 'Open', 'Open', 'Open', '1', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');

INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('2', 'suncom', 'it_tickect_status', 'On Hold', 'On Hold', 'On Hold', '2', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');

INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('3', 'suncom', 'it_tickect_status', 'Waiting 3rd Party Response', 'Waiting 3rd Party Response', 'Waiting 3rd Party Response', '3', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');

INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('4', 'suncom', 'it_tickect_status', 'Duplicate', 'Duplicate', 'Duplicate', '4', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');

INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('5', 'suncom', 'it_tickect_status', 'Cancelled', 'Cancelled', 'Cancelled', '5', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');

INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('6', 'suncom', 'it_tickect_status', 'Closed', 'Closed', 'Closed', '6', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');

INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('7', 'suncom', 'it_tickect_status', 'Resolved', 'Resolved', 'Resolved', '7', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');

INSERT INTO `suncomportal`.`k18_lookup` 
(`id`, `codegroup`, `codeid`, `codevalue`, `shortdesc`, `longdesc`, `sortorder`, `status`, `createdby`, `createdon`, `modifiedby`, `modifiedon`) 
VALUES 
('8', 'suncom', 'it_tickect_status', 'Assigned To Tech', 'Assigned To Tech', 'Assigned To Tech', '8', 'Active', 'Admin', '0000-00-00 00:00:00', 'Admin', '0000-00-00 00:00:00');


