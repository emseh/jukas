/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.26 : Database - jukas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jukas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jukas`;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cms_cp` */

/*Table structure for table `cms_upload` */

DROP TABLE IF EXISTS `cms_upload`;

CREATE TABLE `cms_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `id_in_stock` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `desk` varchar(255) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `cms_upload` */

insert  into `cms_upload`(`id`,`id_kategori`,`id_in_stock`,`judul`,`harga`,`desk`,`nama_file`,`id_user`) values (7,1,1,'gambar gambar',3000,'deskripsi','../assets/uploads/17.jpeg',2);

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
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cms_user` */

insert  into `cms_user`(`id_user`,`full_name`,`username`,`sandi`,`email`,`tel`,`alamat`,`file_image`,`stat`) values (1,'ini nama mu','admin','21232f297a57a5a743894a0e4a801fc3','example@mail.com','0812345678910','disini aja','../assets/uploads/LinuxWindows-730x350.jpg',1),(2,'penjual','penjual1','7fede5a7930d9ffafdf87bc536d39312','usernamenya@mail.com',NULL,NULL,NULL,2),(3,'Pembeli','pembeli1','0e68c82f5923d0edae2cc5523e2a21ad','pembeli1@gmail.com','081555555277','jalan laswi 123 kota banjar bandung',NULL,3);

/*Table structure for table `in_stock_barang` */

DROP TABLE IF EXISTS `in_stock_barang`;

CREATE TABLE `in_stock_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_barang` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `in_stock_barang` */

insert  into `in_stock_barang`(`id`,`stock_barang`,`tanggal`) values (1,10,'2019-04-09'),(2,30,'2019-04-05');

/*Table structure for table `kategori_barang` */

DROP TABLE IF EXISTS `kategori_barang`;

CREATE TABLE `kategori_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_barang` */

insert  into `kategori_barang`(`id`,`jenis_barang`,`deskripsi`,`id_user`) values (1,'makanan',NULL,2),(2,'minuman',NULL,2);

/*Table structure for table `tipe_user` */

DROP TABLE IF EXISTS `tipe_user`;

CREATE TABLE `tipe_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tipe_user` */

insert  into `tipe_user`(`id`,`jenis_user`) values (1,'admin'),(2,'penjual'),(3,'pembeli');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
