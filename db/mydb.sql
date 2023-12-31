/*
SQLyog Community
MySQL - 5.7.43-log : Database - mydb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mydb`;

/*Table structure for table `controlvacuna` */

DROP TABLE IF EXISTS `controlvacuna`;

CREATE TABLE `controlvacuna` (
  `Mascota_id` int(11) NOT NULL,
  `Vacuna_id` int(11) NOT NULL,
  `fecha` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`Mascota_id`,`Vacuna_id`),
  KEY `fk_Mascota_has_Vacuna_Vacuna1_idx` (`Vacuna_id`),
  KEY `fk_Mascota_has_Vacuna_Mascota1_idx` (`Mascota_id`),
  CONSTRAINT `fk_Mascota_has_Vacuna_Mascota1` FOREIGN KEY (`Mascota_id`) REFERENCES `mascota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_has_Vacuna_Vacuna1` FOREIGN KEY (`Vacuna_id`) REFERENCES `vacuna` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `controlvacuna` */

/*Table structure for table `mascota` */

DROP TABLE IF EXISTS `mascota`;

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `FechaNacimiento` datetime(6) DEFAULT NULL,
  `foto` blob,
  `User_id` int(11) NOT NULL,
  `TipoMascota_id` int(11) NOT NULL,
  `Raza_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Mascota_User1_idx` (`User_id`),
  KEY `fk_Mascota_TipoMascota1_idx` (`TipoMascota_id`),
  KEY `fk_Mascota_Raza1_idx` (`Raza_id`),
  CONSTRAINT `fk_Mascota_Raza1` FOREIGN KEY (`Raza_id`) REFERENCES `raza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_TipoMascota1` FOREIGN KEY (`TipoMascota_id`) REFERENCES `tipomascota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mascota` */

insert  into `mascota`(`id`,`nombre`,`FechaNacimiento`,`foto`,`User_id`,`TipoMascota_id`,`Raza_id`) values 
(1,'soledad','2022-06-14 00:00:00.000000',NULL,1,1,1),
(2,'pluto','2019-06-25 00:00:00.000000',NULL,2,2,2);

/*Table structure for table `raza` */

DROP TABLE IF EXISTS `raza`;

CREATE TABLE `raza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `TipoMascota_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Raza_TipoMascota_idx` (`TipoMascota_id`),
  CONSTRAINT `fk_Raza_TipoMascota` FOREIGN KEY (`TipoMascota_id`) REFERENCES `tipomascota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `raza` */

insert  into `raza`(`id`,`nombre`,`TipoMascota_id`) values 
(1,'vengala',1),
(2,'montuno',3);

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `role` */

/*Table structure for table `tipomascota` */

DROP TABLE IF EXISTS `tipomascota`;

CREATE TABLE `tipomascota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `EdadEquivalenteJoven` int(11) DEFAULT NULL,
  `EdadEquivalenteAdulto` int(11) DEFAULT NULL,
  `EdadAdulto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tipomascota` */

insert  into `tipomascota`(`id`,`nombre`,`EdadEquivalenteJoven`,`EdadEquivalenteAdulto`,`EdadAdulto`) values 
(1,'conejo',NULL,NULL,NULL),
(2,'conejo',NULL,NULL,NULL),
(3,'tigre',NULL,NULL,NULL),
(4,'tigre',NULL,NULL,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Role_id` int(11) DEFAULT NULL,
  `foto` blob,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_User_Role1_idx` (`Role_id`),
  CONSTRAINT `fk_User_Role1` FOREIGN KEY (`Role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`nombre`,`username`,`email`,`password`,`Role_id`,`foto`) values 
(1,'nilson','nilcambarp','nilcambar@gmail.com','Nil@25',NULL,NULL),
(2,'jose','josec','josec@gmail.com','joS$12',NULL,NULL);

/*Table structure for table `vacuna` */

DROP TABLE IF EXISTS `vacuna`;

CREATE TABLE `vacuna` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `vacuna` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
