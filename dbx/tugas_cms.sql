/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.26 : Database - tugas_cms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tugas_cms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tugas_cms`;

/*Table structure for table `cms_cp` */

DROP TABLE IF EXISTS `cms_cp`;

CREATE TABLE `cms_cp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(70) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `subjek` varchar(100) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cms_cp` */

insert  into `cms_cp`(`id`,`nama`,`email`,`telpon`,`subjek`,`pesan`) values (1,'saya','example@mail.com','08123456789','subnya','ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ');

/*Table structure for table `cms_upload` */

DROP TABLE IF EXISTS `cms_upload`;

CREATE TABLE `cms_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `desk` varchar(255) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cms_upload` */

insert  into `cms_upload`(`id`,`judul`,`desk`,`nama_file`) values (1,'ini image','ini imageini imageini imageini imageini imageini imageini imageini imageini imageini imageini imageini imageini imageini image','../assets/uploads/WhatsApp Image 2018-10-08 at 13.25.31 (1).jpeg'),(2,'gagagag','gagagaggagagaggagagaggagagaggagagaggagagaggag agagg agagagg agaga gg a g a g ag g agaga ggagagaggagagaggagagag','../assets/uploads/IMG_9642.JPG'),(3,'gambar gambar','gambar gambar gambar gambar gambar gambar gambar gambar gambar gambar gambar gambar gambar gambar gambar gambar','../assets/uploads/jadwal.png');

/*Table structure for table `cms_user` */

DROP TABLE IF EXISTS `cms_user`;

CREATE TABLE `cms_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `sandi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `alamat` text,
  `file_image` varchar(50) DEFAULT NULL,
  `stat` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `cms_user` */

insert  into `cms_user`(`id_user`,`full_name`,`username`,`sandi`,`email`,`tel`,`alamat`,`file_image`,`stat`) values (1,'ini nama mu','usernya','6eea9b7ef19179a06954edd0f6c05ceb','example@mail.com','0812345678910','disini aja','../assets/uploads/LinuxWindows-730x350.jpg','1'),(4,NULL,'usernamenya','34365f9574bafa92f24270ee16acc779','usernamenya@mail.com',NULL,NULL,NULL,'1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
