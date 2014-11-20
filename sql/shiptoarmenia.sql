/*
SQLyog Ultimate v11.52 (64 bit)
MySQL - 5.6.14 : Database - shiptoarmenia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admins` */

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admins` */

LOCK TABLES `admins` WRITE;

insert  into `admins`(`id`,`email`,`password`,`hash`) values (2,'aaa@aaa.aaa','aaaaaa',NULL);

UNLOCK TABLES;

/*Table structure for table `cms_settings` */

CREATE TABLE `cms_settings` (
  `var` varchar(60) CHARACTER SET ascii NOT NULL,
  `value` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`var`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cms_settings` */

LOCK TABLES `cms_settings` WRITE;

UNLOCK TABLES;

/*Table structure for table `languages` */

CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phrase_en` mediumtext,
  `phrase_am` mediumtext,
  `phrase_ru` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `languages` */

LOCK TABLES `languages` WRITE;

insert  into `languages`(`id`,`phrase_en`,`phrase_am`,`phrase_ru`) values (1,'Sunday',NULL,NULL);
insert  into `languages`(`id`,`phrase_en`,`phrase_am`,`phrase_ru`) values (2,'Monday',NULL,NULL);
insert  into `languages`(`id`,`phrase_en`,`phrase_am`,`phrase_ru`) values (3,'Tuseday',NULL,NULL);
insert  into `languages`(`id`,`phrase_en`,`phrase_am`,`phrase_ru`) values (4,'Wednesday',NULL,NULL);
insert  into `languages`(`id`,`phrase_en`,`phrase_am`,`phrase_ru`) values (5,'Thursday',NULL,NULL);
insert  into `languages`(`id`,`phrase_en`,`phrase_am`,`phrase_ru`) values (6,'Friday',NULL,NULL);
insert  into `languages`(`id`,`phrase_en`,`phrase_am`,`phrase_ru`) values (7,'Saturday',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`email`,`password`,`hash`) values (1,'aaa@aaa.aaa','aaaaaa',NULL);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
