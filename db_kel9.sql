/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.17-MariaDB : Database - db_project_kel9
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_project_kel9` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_project_kel9`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kode_barang` char(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`kode_barang`,`nama_barang`,`jumlah`) values 
('001','Buku','20 Buku'),
('002','Meja','50 Unit'),
('003','Kursi','50 Unit'),
('004','Monitor','30 Unit');

/*Table structure for table `pengajuan` */

DROP TABLE IF EXISTS `pengajuan`;

CREATE TABLE `pengajuan` (
  `kode_pengajuan` char(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `npm_peminjam` char(11) DEFAULT NULL,
  `nama_peminjam` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `no_handphone` char(15) DEFAULT NULL,
  PRIMARY KEY (`kode_pengajuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengajuan` */

insert  into `pengajuan`(`kode_pengajuan`,`tanggal`,`npm_peminjam`,`nama_peminjam`,`prodi`,`no_handphone`) values 
('P001','2023-06-17','20311088','Vika','SI','082173648937'),
('P002','2023-06-19','20311134','Bila','SI','089726535272'),
('P003','2023-06-21','20321145','Akbar','TK','087363252637'),
('P004','2023-06-17','203112937','Mamat','SI','087362533232');

/*Table structure for table `pengembalian` */

DROP TABLE IF EXISTS `pengembalian`;

CREATE TABLE `pengembalian` (
  `kode_pengembalian` char(11) NOT NULL,
  `kode_pengajuan` char(11) DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  PRIMARY KEY (`kode_pengembalian`),
  KEY `kode_pengajuan` (`kode_pengajuan`),
  CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`kode_pengajuan`) REFERENCES `pengajuan` (`kode_pengajuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengembalian` */

insert  into `pengembalian`(`kode_pengembalian`,`kode_pengajuan`,`tanggal_kembali`) values 
('K001','P001','2023-06-18'),
('K002','P002','2023-06-20'),
('K003','P003','2023-06-23'),
('K004','P004','2023-06-20');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id_user`,`name`,`username`,`pass`,`role`) values 
(1,'Vika','tes','28b662d883b6d76fd96e4ddc5e9ba780','admin'),
(2,'vika1','user','ee11cbb19052e40b07aac0ca060c23ee','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
