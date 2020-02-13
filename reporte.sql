/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.8-MariaDB : Database - archivo a realizar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`archivo a realizar` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `archivo a realizar`;

/*Table structure for table `equipo, instrumentos o software  utilizados` */

DROP TABLE IF EXISTS `equipo, instrumentos o software  utilizados`;

CREATE TABLE `equipo, instrumentos o software  utilizados` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Equipo` varchar(30) DEFAULT NULL,
  `Cantidad` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `equipo, instrumentos o software  utilizados` */

/*Table structure for table `material utilizado (por equipo de trabajo)` */

DROP TABLE IF EXISTS `material utilizado (por equipo de trabajo)`;

CREATE TABLE `material utilizado (por equipo de trabajo)` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Material` varchar(30) DEFAULT NULL,
  `Cantidad` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `material utilizado (por equipo de trabajo)` */

/*Table structure for table `nombre del responsable académico` */

DROP TABLE IF EXISTS `nombre del responsable académico`;

CREATE TABLE `nombre del responsable académico` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `estudios` varchar(30) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `1°Apellido` varchar(30) DEFAULT NULL,
  `2°Apellido` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `nombre del responsable académico` */

/*Table structure for table `objetivo` */

DROP TABLE IF EXISTS `objetivo`;

CREATE TABLE `objetivo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Objetivo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `objetivo` */

/*Table structure for table `observaciones generales` */

DROP TABLE IF EXISTS `observaciones generales`;

CREATE TABLE `observaciones generales` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Observacion` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `observaciones generales` */

/*Table structure for table `reactivos químicos utilizados (por grupo)` */

DROP TABLE IF EXISTS `reactivos químicos utilizados (por grupo)`;

CREATE TABLE `reactivos químicos utilizados (por grupo)` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Reactivo químico o solución en concentración` varchar(50) DEFAULT NULL,
  `Cantidad` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `reactivos químicos utilizados (por grupo)` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
