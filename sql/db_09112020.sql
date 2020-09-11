/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.13-MariaDB : Database - agency
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`agency` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `agency`;

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`description`) values (1,'admin','Administrator'),(2,'members','General User');

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `login_attempts` */

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8;

/*Data for the table `state` */

insert  into `state`(`id`,`city`) values (1,' 01 - Ain'),(2,'02 - Aisne'),(3,'2A - Corse-du-Sud'),(4,'2B - Haute-Corse'),(5,'03 - Allier'),(6,'04 - Alpes-de-Haute-Provence'),(7,'05 - Hautes-Alpes'),(8,'06 - Alpes-Maritimes'),(9,'07 - Ard?che'),(10,'08 - Ardennes'),(11,'09 - Ari?ge'),(12,'10 - Aube'),(13,'11 - Aude'),(14,'12 - Aveyron'),(15,'13 - Bouches-du-Rh?ne'),(16,'14 - Calvados'),(17,'15 - Cantal'),(18,'16 - Charente'),(19,'17 - Charente-Maritime'),(20,'18 - Cher'),(21,'19 - Corr?ze'),(22,'21 - C?te-d\'Or'),(23,'22 - C?tes d\'Armor'),(24,'23 - Creuse'),(25,'24 - Dordogne'),(26,'25 - Doubs'),(27,'26 - Dr?me'),(28,'27 - Eure'),(29,'28 - Eure-et-Loir'),(30,'29 - Finist?re'),(31,'30 - Gard'),(32,'31 - Haute-Garonne'),(33,'32 - Gers'),(34,'33 - Gironde'),(35,'34 - H?rault'),(36,'35 - Ille-et-Vilaine'),(37,'36 - Indre'),(38,'37 - Indre-et-Loire'),(39,'38 - Is?re'),(40,'39 - Jura'),(41,'40 - Landes'),(42,'41 - Loir-et-Cher'),(43,'42 - Loire'),(44,'43 - Haute-Loire'),(45,'44 - Loire-Atlantique'),(46,'45 - Loiret'),(47,'46 - Lot'),(48,'47 - Lot-et-Garonne'),(49,'48 - Loz?re'),(50,'49 - Maine-et-Loire'),(51,'50 - Manche'),(52,'51 - Marne'),(53,'52 - Haute-Marne'),(54,'53 - Mayenne'),(55,'54 - Meurthe-et-Moselle'),(56,'55 - Meuse'),(57,'56 - Morbihan'),(58,'57 - Moselle'),(59,'58 - Ni?vre'),(60,'59 - Nord'),(61,'60 - Oise'),(62,'61 - Orne'),(63,'62 - Pas-de-Calais'),(64,'63 - Puy-de-D?me'),(65,'64 - Pyr?n?es-Atlantiques'),(66,'65 - Hautes-Pyr?n?es'),(67,'66 - Pyr?n?es-Orientales'),(68,'67 - Bas-Rhin'),(69,'68 - Haut-Rhin'),(70,'69 - Rh?ne'),(71,'70 - Haute-Sa?ne'),(72,'71 - Sa?ne-et-Loire'),(73,'72 - Sarthe'),(74,'73 - Savoie'),(75,'74 - Haute-Savoie'),(76,'75 - Paris'),(77,'76 - Seine-Maritime'),(78,'77 - Seine-et-Marne'),(79,'78 - Yvelines'),(80,'79 - Deux-S?vres'),(81,'80 - Somme'),(82,'81 - Tarn'),(83,'82 - Tarn-et-Garonne'),(84,'83 - Var'),(85,'84 - Vaucluse'),(86,'85 - Vand?e'),(87,'86 - Vienne'),(88,'87 - Haute-Vienne'),(89,'88 - Vosges'),(90,'89 - Yonne'),(91,'90 - Territoire de Belfort'),(92,'91 - Essonne'),(93,'92 - Hauts-de-Seine'),(94,'93 - Seine-St-Denis'),(95,'94 - Val-de-Marne'),(96,'95 - Val-D\'Oise');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`email`,`activation_selector`,`activation_code`,`forgotten_password_selector`,`forgotten_password_code`,`forgotten_password_time`,`remember_selector`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`,`group_id`) values (1,'127.0.0.1','administrator','$2y$12$xS9gZuCJcSp9Ew6qy59aCeDPMgdYzmx2PUhvEVdBbJOUnTOnQfV5.','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1599685820,1,'Admin','istrator','ADMIN','0',1),(2,'::1',NULL,'$2y$10$CT.3yEzFpcDIJWEl.1dV1OZKZDKFefcUnmDfFdOO3rx2ENGebaR3m','test@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1599664104,1599785607,1,'Test','001','1',NULL,2);

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values (1,1,1),(2,1,2),(3,2,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
