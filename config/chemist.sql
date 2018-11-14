/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.31-MariaDB : Database - db_chemist
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_chemist` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_chemist`;

/*Table structure for table `ch_firm` */

DROP TABLE IF EXISTS `ch_firm`;

CREATE TABLE `ch_firm` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firm_name` varchar(255) DEFAULT NULL,
  `proprietor_firstname` varchar(255) DEFAULT NULL,
  `proprietor_middlename` varchar(255) DEFAULT NULL,
  `proprietor_lastname` varchar(255) DEFAULT NULL,
  `firm_mobile` bigint(20) DEFAULT NULL,
  `proprietor_mobile` bigint(20) DEFAULT NULL,
  `proprietor_dob` date DEFAULT NULL,
  `proprietor_marriage_anniversary` date DEFAULT NULL,
  `proprietor_email` varchar(255) DEFAULT NULL,
  `drug_lisence_no` varchar(255) DEFAULT NULL,
  `gst_no` varchar(255) DEFAULT NULL,
  `food_lisence_registration_no` varchar(255) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ch_firm` */

insert  into `ch_firm`(`id`,`firm_name`,`proprietor_firstname`,`proprietor_middlename`,`proprietor_lastname`,`firm_mobile`,`proprietor_mobile`,`proprietor_dob`,`proprietor_marriage_anniversary`,`proprietor_email`,`drug_lisence_no`,`gst_no`,`food_lisence_registration_no`,`added_on`,`modified_on`) values (4,'Test Firm','Abhimanyu','','Sood',9090909090,8989898989,'2018-11-20','2018-11-12','proprietor@email.com','ADSFASDF','ASDFASD89898','ASFDASDF/909F0SADF','2018-11-14 12:37:41','2018-11-14 12:37:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
