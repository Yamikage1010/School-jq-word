/*
SQLyog Enterprise v12.08 (32 bit)
MySQL - 5.6.5-m8 : Database - jqwork
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jqwork` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jqwork`;

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  `age` int(11) DEFAULT NULL,
  `pn` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `msg` varchar(1000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `message` */

insert  into `message`(`name`,`age`,`pn`,`msg`) values ('yami',21,'13192180340','asdasdasdasda'),('rika',17,'13794100340','asdasas31223'),('yamikage',18,'18138786458','å•Šå®žæ‰“å®žå¤§ä¸Šæµ·'),('yamisan',66,'18138786458','é£Žæ ¼ICæŠŠè°·å¤§ç«æŠŠç›‘äº‹ä¼šä¸æ¸…ä¸æ¥šviaçœ‹ä¸æ‡‚è¯');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
