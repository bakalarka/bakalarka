/*
SQLyog Community v9.60 
MySQL - 5.5.20-log : Database - bc_01_dev
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`group_id`,`name`,`surname`,`phone`,`active`,`disabled`,`deleted`,`registration_code`,`created`,`modified`) values (1,'admin','963d708a99a0314d5f000d880b6f9579bb25f77e',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2011-12-01 12:37:33','2011-12-01 12:37:33');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
