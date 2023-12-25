/*
SQLyog Community v8.4 RC2
MySQL - 5.7.19 : Database - easyfund
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`easyfund` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `easyfund`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`id`,`name`,`phone`,`email`,`username`,`password`,`usertype`) values (1,'Nabilah','+60192235971','nabilahqaisarah77@gmail.com','nabilah','202cb962ac59075b964b07152d234b70','admin'),(2,'Razak','+60192235971','nabilahqaisarah77@gmail.com','razak','202cb962ac59075b964b07152d234b70','admin');

/*Table structure for table `donor` */

DROP TABLE IF EXISTS `donor`;

CREATE TABLE `donor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `donor` */

insert  into `donor`(`id`,`name`,`phone`,`email`,`username`,`password`,`usertype`) values (1,'najwa','+60192235971','nabilahqaisarah77@gmail.com','najwa','202cb962ac59075b964b07152d234b70','user'),(2,'husna','+60192235971','nabilahqaisarah77@gmail.com','husna','bcbe3365e6ac95ea2c0343a2395834dd','user'),(3,'zaiton','+60192235971','zaiton@gmail.com','zaiton','202cb962ac59075b964b07152d234b70','user'),(4,'MOHD ARIF','0133034626','arifwahab@rocketmail.com','arif','d9b7e017c6a20fadde10ffee149bea99','user');

/*Table structure for table `fundraising` */

DROP TABLE IF EXISTS `fundraising`;

CREATE TABLE `fundraising` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `targetAmount` double NOT NULL,
  `accountNumber` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `fundraising` */

insert  into `fundraising`(`id`,`title`,`description`,`targetAmount`,`accountNumber`) values (1,'hui','hi',1000,'$2y$10$4eqeI4opZZh12UAKPWBN.Ov6ukfr7Z6VzMEMmJjLmyTirYz83yJLu');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fund_id` int(11) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  `cvv` varchar(10) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `amount` decimal(16,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`id`,`fund_id`,`payment_type`,`name`,`bank_name`,`card_number`,`cvv`,`payment_date`,`amount`) values (1,1,'FPX','Mohd Arif','Maybank','123456789','256','2023-12-07','10.00'),(2,1,'FPX','Nor Emylyana Azmi','','547896523','879','2023-12-07','50.00'),(3,1,'FPX','Dollah','Maybank','162106857485','879','2023-12-07','5.00'),(4,1,'FPX',NULL,'CIMB','165872458',NULL,'2023-12-07','5.00'),(5,1,'FPX',NULL,'','123',NULL,'2023-12-07','5.00'),(6,1,'FPX',NULL,'','111',NULL,'2023-12-07','10.00'),(7,1,'Credit Card','ARIf',NULL,'123','12333','2023-12-07','5.00'),(8,1,'FPX',NULL,'Maybank','162106807418',NULL,'2023-12-08','5.00'),(9,1,'Credit Card','rttt',NULL,'12569','123','2023-12-07','1.00'),(10,1,'FPX',NULL,'Maybank','',NULL,'2023-12-08','10.00'),(11,1,'FPX',NULL,'CIMB','123456',NULL,'2023-12-08','5.00'),(12,1,'Credit Card','Dollah',NULL,'123','888','2023-12-08','5.00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
