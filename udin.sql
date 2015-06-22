/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.20 : Database - schema15
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `blog` */

insert  into `blog`(`no`,`user`,`judul`,`isi`,`tanggal`) values (1,'Admin','iOS 9 Resmi Diperkenalkan, Hadir dengan Kemampuan lebih Pintar dan Fitur Bejibun','Seperti tahun-tahun sebelumnya, ajang WWDC menjadi momen bagi Apple untuk meluncurkan produk-produk terbarunya. Dan kali ini, mereka pun secara resmi mengungkapkan keberadaan iOS 9. Apple pun mengungkapkan kalau iOS 9 mempunyai kemampuan yang lebih pintar dan proaktif jika dibandingkan dengan iOS 8.','2015-06-10');

/*Table structure for table `daerah` */

DROP TABLE IF EXISTS `daerah`;

CREATE TABLE `daerah` (
  `ID` int(2) unsigned zerofill NOT NULL,
  `DAERAH` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daerah` */

insert  into `daerah`(`ID`,`DAERAH`) values (01,'Surabaya'),(02,'Malang'),(03,'Kediri'),(04,'Jember'),(05,'Madiun'),(06,'Solo'),(07,'Jakarta'),(08,'Denpasar'),(09,'Tulungagung'),(10,'Sumbawa'),(11,'Online');

/*Table structure for table `hubungi_kami` */

DROP TABLE IF EXISTS `hubungi_kami`;

CREATE TABLE `hubungi_kami` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(100) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `hubungi_kami` */

insert  into `hubungi_kami`(`no`,`nama`,`email`,`subjek`,`pesan`) values (1,'Didit Sepiyanto','didit@gmail.com','Tralala','LALALA'),(2,'Didit Sepiyanto','didit@gmail.com','Tralala','LALALA'),(3,'Didit Sepiyanto','didit@gmail.com','Tralala','LALALA'),(4,'Didit Sepiyanto','didit@gmail.com','Tralala','LALALA'),(5,'Didit Sepiyanto','didit@gmail.com','Tralala','LALALA'),(6,'Didit Sepiyanto','alfalink@gmail.com','alfalink','dsadasdsa'),(7,'Didit Sepiyanto','alfalink@gmail.com','alfalink','dsadasdsa');

/*Table structure for table `informasi_nlc` */

DROP TABLE IF EXISTS `informasi_nlc`;

CREATE TABLE `informasi_nlc` (
  `no` int(11) NOT NULL,
  `informasi` text,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `informasi_nlc` */

insert  into `informasi_nlc`(`no`,`informasi`) values (1,'Soal NLC Tahun 2014 ');

/*Table structure for table `informasi_npc` */

DROP TABLE IF EXISTS `informasi_npc`;

CREATE TABLE `informasi_npc` (
  `no` int(11) NOT NULL,
  `informasi` text,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `informasi_npc` */

insert  into `informasi_npc`(`no`,`informasi`) values (1,'Tutorial NPC');

/*Table structure for table `nlc_denpasar` */

DROP TABLE IF EXISTS `nlc_denpasar`;

CREATE TABLE `nlc_denpasar` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_denpasar` */

insert  into `nlc_denpasar`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'adiwicaksana29@gmail.com','kocokmas','Wicak Tampan','adiwicaksana29@gmail.com','Shania Gracia','Nadhifa Salsabila','018805697535','07379','98179179','SMA N 3 Denpasar','Jl. menuju','Denpasar','Bali','2015-06-10',0);

/*Table structure for table `nlc_jakarta` */

DROP TABLE IF EXISTS `nlc_jakarta`;

CREATE TABLE `nlc_jakarta` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_jakarta` */

insert  into `nlc_jakarta`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'jakarta@gmail.com','Didit_S','dasdas','didit@gmail.com','ddsadasdsa','sdsadasdas','313121312321','21312321312','3123123123','SMA Taruna Dra. Zulaeh','jl. Surabaya','Probolinggo','Propdsad','2015-06-19',0);

/*Table structure for table `nlc_jember` */

DROP TABLE IF EXISTS `nlc_jember`;

CREATE TABLE `nlc_jember` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_jember` */

insert  into `nlc_jember`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'jember@gmail.com','dasdas','dsadsadsa','dasda@gmail.om','','','4232','','','dasda','dsada','dsada','dasda','2015-06-19',0),(0002,'denpasar@gmail.com','dasdasdsa','dasdasd','dsada@gmil.com','','','321312','','','dasda','adsa','dsada','dsada','2015-06-19',0);

/*Table structure for table `nlc_kediri` */

DROP TABLE IF EXISTS `nlc_kediri`;

CREATE TABLE `nlc_kediri` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_kediri` */

insert  into `nlc_kediri`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'kediri@gmail.com','dsadasda','dadad','dsadas@gas.dsad','dasdas','dsdas','890890890','98098','90709','dadas','dasdas','dasda','dsadas','2015-06-19',0);

/*Table structure for table `nlc_madiun` */

DROP TABLE IF EXISTS `nlc_madiun`;

CREATE TABLE `nlc_madiun` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_madiun` */

insert  into `nlc_madiun`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'madiun@gmail.com','dsadas','dsadad','dasdas@gas.com','','','4244234','','','sdadas','dadasda','dsada','dsada','2015-06-19',0);

/*Table structure for table `nlc_malang` */

DROP TABLE IF EXISTS `nlc_malang`;

CREATE TABLE `nlc_malang` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_malang` */

insert  into `nlc_malang`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'malang@gmail.com','dsadsada','dasdas','dadas@dasd.comdsa','','','789789789','','','dasd','dsada','dasda','dsadas','2015-06-19',0);

/*Table structure for table `nlc_online` */

DROP TABLE IF EXISTS `nlc_online`;

CREATE TABLE `nlc_online` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_online` */

insert  into `nlc_online`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'didit@gmail.com','didit','dsadas','dasda@gmail.comasd','adasad','dasdas','9809','','','dasda','dsada','dasda','dasda','2015-06-12',0),(0002,'x@gmail.com','OWLine','Didit','didit@gmail.com','','','085746692273','','','SMA Taruna Dra. Zulaeh','Probolinggo','Probolinggo','Jawa Timur','2015-06-19',0);

/*Table structure for table `nlc_solo` */

DROP TABLE IF EXISTS `nlc_solo`;

CREATE TABLE `nlc_solo` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_solo` */

insert  into `nlc_solo`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'usaid_sc@yahoo.com','usc_','Didit S','didit@gmail.com','usaid sC','','085746692273','089765434222','','ITS Surabaya','Sukolilo Surabaya','Surabaya','Jawa Timur','2015-06-10',0),(0002,'didit@gmail.com','dsadsa','dasdsad','dsadsad@gmail.com','','','798797','','','dsadsad','dsadsad','dsadsadsa','dsadsad','2015-06-10',0),(0003,'solo@gmail.com','dasda','dsadas','dsada@gmail.com','','','3213123213','','','dsadsa','dassa','dsadsadsa','dsadasdsa','2015-06-19',0);

/*Table structure for table `nlc_sumbawa` */

DROP TABLE IF EXISTS `nlc_sumbawa`;

CREATE TABLE `nlc_sumbawa` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_sumbawa` */

insert  into `nlc_sumbawa`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'sumbawa@gmail.com','dsadasda','dsadas','dsad@gmail.com','','','321312','','','dasda','dsada','dsada','dsadas','2015-06-19',0);

/*Table structure for table `nlc_surabaya` */

DROP TABLE IF EXISTS `nlc_surabaya`;

CREATE TABLE `nlc_surabaya` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_surabaya` */

insert  into `nlc_surabaya`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'1','s0','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsad',NULL,0),(0002,'1dsdsd','s0','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsad',NULL,0),(0003,'1dsdss','s0','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','png',NULL,0),(0004,'1ssdsdss','s0','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','dsd','png','2015-06-07',0),(0005,'diditsepiyanto@gmail.com','rfrw','joijoij','dsada@gmail.com','iuiusod','','fsfa','fsaf','fas','ujijiojiojo','dsad','iojoi','joijoi','2015-06-07',0),(0006,'nanana@gmail.com','dsadas','dsadas','dsda@gmail.com','','','9809809','','','dsada','dsad','dsada','dsad','2015-06-13',0);

/*Table structure for table `nlc_tulungagung` */

DROP TABLE IF EXISTS `nlc_tulungagung`;

CREATE TABLE `nlc_tulungagung` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `NAMA_KELOMPOK` varchar(25) NOT NULL,
  `NAMA_KETUA` varchar(50) NOT NULL,
  `EMAIL_KETUA` varchar(50) NOT NULL,
  `NAMA_ANGGOTA_1` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA_2` varchar(50) DEFAULT NULL,
  `NO_HP_KETUA` varchar(20) NOT NULL,
  `NO_HP_ANGGOTA_1` varchar(20) DEFAULT NULL,
  `NO_HP_ANGGOTA_2` varchar(20) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) NOT NULL,
  `ALAMAT_SEKOLAH` varchar(255) NOT NULL,
  `KABUPATEN` varchar(50) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `WAKTU` date DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `nlc_tulungagung` */

insert  into `nlc_tulungagung`(`NO`,`EMAIL`,`NAMA_KELOMPOK`,`NAMA_KETUA`,`EMAIL_KETUA`,`NAMA_ANGGOTA_1`,`NAMA_ANGGOTA_2`,`NO_HP_KETUA`,`NO_HP_ANGGOTA_1`,`NO_HP_ANGGOTA_2`,`NAMA_SEKOLAH`,`ALAMAT_SEKOLAH`,`KABUPATEN`,`PROVINSI`,`WAKTU`,`KODE`) values (0001,'tulungagung@gmail.com','dsadas','dasda','dsada@gmail.com','','','7080','','','dsada','sdad','dsada','dsadas','2015-06-19',0);

/*Table structure for table `notifdaerah` */

DROP TABLE IF EXISTS `notifdaerah`;

CREATE TABLE `notifdaerah` (
  `ID` varchar(10) NOT NULL,
  `PESAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notifdaerah` */

/*Table structure for table `npc` */

DROP TABLE IF EXISTS `npc`;

CREATE TABLE `npc` (
  `NO` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `NO_HP` varchar(20) NOT NULL,
  `FACEBOOK_ACC` varchar(200) NOT NULL,
  `ASAL_SEKOLAH` varchar(200) NOT NULL,
  `NAMA_JALAN` varchar(200) NOT NULL,
  `NAMA_KOTA` varchar(200) NOT NULL,
  `NAMA_PROVINSI` varchar(200) NOT NULL,
  `TANGGAL` date DEFAULT NULL,
  `KODE` int(1) DEFAULT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `npc` */

insert  into `npc`(`NO`,`NAMA`,`EMAIL`,`NO_HP`,`FACEBOOK_ACC`,`ASAL_SEKOLAH`,`NAMA_JALAN`,`NAMA_KOTA`,`NAMA_PROVINSI`,`TANGGAL`,`KODE`) values (0001,'dsada','tralala@gmail.com','534543543','dsada','SMA Taruna Dra. Zulaeh','jl. Surabaya','dasda','dsada','2015-06-12',NULL),(0002,'Didit','npc@gmail.com','7889798789','dasdads','SMA Taruna Dra. Zulaeh','jl. Surabaya','Probolinggo','Jawa Timur','2015-06-19',NULL);

/*Table structure for table `oprec` */

DROP TABLE IF EXISTS `oprec`;

CREATE TABLE `oprec` (
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `pil1` varchar(15) NOT NULL,
  `pil2` varchar(15) NOT NULL,
  `pil3` varchar(15) NOT NULL,
  `pil4` varchar(15) NOT NULL,
  `pil5` varchar(15) NOT NULL,
  `pil6` varchar(15) NOT NULL,
  `pil7` varchar(15) NOT NULL,
  `pil8` varchar(15) NOT NULL,
  `pil9` varchar(15) NOT NULL,
  `pil10` varchar(15) NOT NULL,
  `motivasi_inovasi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `oprec` */

insert  into `oprec`(`nrp`,`nama`,`email`,`fb`,`jabatan`,`pil1`,`pil2`,`pil3`,`pil4`,`pil5`,`pil6`,`pil7`,`pil8`,`pil9`,`pil10`,`motivasi_inovasi`) values ('5113100090','Didit Sepiyanto','Alfalink@gmail.com','dasdsa','','','','','','','','','','','',''),('','','','','','','','','','','','','','','',''),('','','','','','','','','','','','','','','',''),('','','','','','','','','','','','','','','',''),('gdgdfg','gfdgfd','gfdgfdg@fsdf','fdsfsd','','','','','','','','','','','',''),('5113100090','dsadsadsaddsadsadsadsadsadsadsadsadasdasdsadsadsad','dsadsadsad@dsadsad','dsadsadsadsad','b','DANA','NPC','NLC','NST','REEVA','','','','','',''),('4324324324','sdsadsadsad','dsadsadsad@dsadsad','dsadsadsa','staf','NST','REEVA','REEVA','NST','NST','WEBKESTARI','REEVA','NST','NST','',''),('5113100090','dsadsa','dsadsadsad@dsadsad','dsadsadsa','bph','','','','','','','','','','',''),('5113100090','dsadsa','dsadsadsad@dsadsad','dsadsadsa','bph','','','','','','','','','','',''),('4234324324','dsadsadasd','cdsadsa@dsadsa','dsadsadsa','','WAKIL','WAKIL','NPC','PERKAPTRANS','PERKAPTRANS','','','','','','sadsadsa\r\ndsa\r\ndsadsa\r\ndsa\r\ndsa\r\ndsa\r\ndsa\r\ndsad\r\nsad\r\nsad\r\nsa\r\ndsa'),('ewqewqewqe','czxczxc','cxzcx@szsdsa','dsadsadsa','bph','NLC','NLC','NST','DANUS','HUMAS','','','','','','dsadsa'),('3232321432','sadsadsadsa','dsadsadsad@dsadsad','ddsadsadsa','staf','DANUS','','NLC','','','','','','','',''),('5113100090','dsadsa','dsadsa@ds','dsadsa','bph','NLC','','WAKIL','','','','','','','','');

/*Table structure for table `panitia` */

DROP TABLE IF EXISTS `panitia`;

CREATE TABLE `panitia` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email_peserta` varchar(225) NOT NULL,
  `event` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `panitia` */

insert  into `panitia`(`id`,`nrp`,`nama`,`email_peserta`,`event`,`tanggal`) values (1,'5113100090','Didit Sepiyanto','didit@gmail.com','NPC','2015-06-18'),(2,'','','','','2015-06-18'),(3,'','','','','2015-06-18'),(4,'','','','','2015-06-18'),(5,'','','','','2015-06-18'),(6,'','','','','2015-06-18'),(7,'','','','','2015-06-18');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `event` varchar(10) NOT NULL,
  `status` varchar(1) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `daerah` varchar(100) DEFAULT NULL,
  `KODE` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`password`,`event`,`status`,`waktu`,`daerah`,`KODE`) values (1,'didit@gmail.com','alfalink','NLC','t','2015-06-12','Online',0),(2,'tralala@gmail.com','f492b650d029dc263631b06feb5d8b1b','NPC','t','2015-06-12','Online',0),(3,'fsfsadas@gmail.com','alfalink','NPC',NULL,'2015-06-12',NULL,0),(4,'nanana@gmail.com','alfalink','NLC','t','2015-06-13','Surabaya',0),(5,'sari@gmail.com','alfalink','NLC',NULL,'2015-06-14',NULL,0),(6,'sarSi@gmail.com','alfalink','NLC',NULL,'2015-06-14',NULL,0),(7,'DSADAS@gmail.com','alfalink','NLC',NULL,'2015-06-14',NULL,0),(8,'x@gmail.com','alfalink','NLC','t','2015-06-19','Online',0),(9,'jakarta@gmail.com','alfalink','NLC','t','2015-06-19','Jakarta',0),(10,'solo@gmail.com','alfalink','NLC','t','2015-06-19','Solo',0),(11,'madiun@gmail.com','alfalink','NLC','t','2015-06-19','Madiun',0),(12,'malang@gmail.com','alfalink','NLC','t','2015-06-19','Malang',0),(13,'kediri@gmail.com','alfalink','NLC','t','2015-06-19','Kediri',0),(14,'tulungagung@gmail.com','alfalink','NLC','t','2015-06-19','Tulungagung',0),(15,'jember@gmail.com','alfalink','NLC','t','2015-06-19','Jember',0),(16,'denpasar@gmail.com','alfalink','NLC','t','2015-06-19','Jember',0),(17,'sumbawa@gmail.com','alfalink','NLC','t','2015-06-19','Sumbawa',0),(18,'npc@gmail.com','alfalink','NPC','t','2015-06-19','Online',0),(19,'azkaa@gmail.com','yoiki','NLC',NULL,'2015-06-22',NULL,2),(20,'azkaa1@gmail.com','yoiki','NLC',NULL,'2015-06-22',NULL,2);

/* Procedure structure for procedure `belum_denpasar` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_denpasar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_denpasar`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_denpasar.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_denpasar, `user`
	WHERE nlc_denpasar.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_jakarta` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_jakarta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_jakarta`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_jakarta.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_jakarta, `user`
	WHERE nlc_jakarta.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_jember` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_jember` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_jember`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_jember.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_jember, `user`
	WHERE nlc_jember.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_kediri` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_kediri` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_kediri`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_kediri.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_kediri, `user`
	WHERE nlc_kediri.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_madiun` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_madiun` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_madiun`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_madiun.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_madiun, `user`
	WHERE nlc_madiun.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_malang` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_malang` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_malang`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_malang.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_malang, `user`
	WHERE nlc_malang.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_solo` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_solo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_solo`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_solo.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_solo, `user`
	WHERE nlc_solo.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_sumbawa` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_sumbawa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_sumbawa`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_sumbawa.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_sumbawa, `user`
	WHERE nlc_sumbawa.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_surabaya` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_surabaya` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_surabaya`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_surabaya.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_surabaya, `user`
	WHERE nlc_surabaya.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `belum_tulungagung` */

/*!50003 DROP PROCEDURE IF EXISTS  `belum_tulungagung` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_tulungagung`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail,no_hp_ketua, nlc_tulungagung.WAKTU + INTERVAL 7 DAY AS tanggal, `status`
	FROM nlc_tulungagung, `user`
	WHERE nlc_tulungagung.EMAIL = user.email AND `status` <> 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `buat_akun` */

/*!50003 DROP PROCEDURE IF EXISTS  `buat_akun` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `buat_akun`(email_ varchar(100), password_ varchar(32), event_ varchar(225))
BEGIN
	insert user (email, password, event, waktu, kode) values (email_, password_, event_, now(), 2);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `buat_panitia` */

/*!50003 DROP PROCEDURE IF EXISTS  `buat_panitia` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `buat_panitia`(nrp_ varchar(100), nama_ varchar(200), email_ varchar(225), event_ varchar(10))
BEGIN
	insert panitia (nrp, nama, email_peserta, event, tanggal) values (nrp_, nama_, email_, event_, now());
	insert user (email, event, waktu, kode) VALUES (email_, event_, NOW(), 1);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_denpasar` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_denpasar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_denpasar`(email_ varchar(100))
BEGIN
	select mod(NO,10) as 'meja', concat('NLC', KODE, '08', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Denpasar' as 'tempat'
	from nlc_denpasar where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_jakarta` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_jakarta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_jakarta`(email_ varchar(100))
BEGIN
	select mod(NO,10) as 'meja', concat('NLC', KODE, '07', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Jakarta' as 'tempat'
	from nlc_jakarta where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_jember` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_jember` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_jember`(email_ varchar(100))
BEGIN
select mod(NO,10) as 'meja', concat('NLC', KODE, '04', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Jember' as 'tempat'
	from nlc_jember where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_kediri` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_kediri` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_kediri`(email_ varchar(100))
BEGIN
select mod(NO,10) as 'meja', concat('NLC', KODE, '03', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Kediri' as 'tempat'
	from nlc_kediri where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_madiun` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_madiun` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_madiun`(email_ varchar(100))
BEGIN
select mod(NO,10) as 'meja', concat('NLC', KODE, '05', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Madiun' as 'tempat'
	from nlc_madiun where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_malang` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_malang` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_malang`(email_ varchar(100))
BEGIN
select mod(NO,10) as 'meja', concat('NLC', KODE, '02', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Malang' as 'tempat'
	from nlc_malang where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_npc` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_npc` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_npc`(email_ varchar(100))
BEGIN
select concat('NPC', KODE, '00', NO) AS 'id_tim',nama, email, no_hp, facebook_acc, asal_sekolah
	from npc where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_online` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_online` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_online`(email_ varchar(100))
BEGIN
select '-' as 'meja', concat('NLC', KODE, '00', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Online' as 'tempat'
	from nlc_online where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_solo` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_solo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_solo`(email_ varchar(100))
BEGIN
select mod(NO,10) as 'meja', concat('NLC', KODE, '06', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Solo' as 'tempat'
	from nlc_solo where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_sumbawa` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_sumbawa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_sumbawa`(email_ varchar(100))
BEGIN
select mod(NO,10) as 'meja', concat('NLC', KODE, '10', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Sumbawa' as 'tempat'
	from nlc_sumbawa where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_surabaya` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_surabaya` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_surabaya`(email_ varchar(100))
BEGIN
	select mod(NO,10) as 'meja', concat('NLC', KODE, '01', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Surabaya' as 'tempat'
	from nlc_surabaya where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `cetak_tulungagung` */

/*!50003 DROP PROCEDURE IF EXISTS  `cetak_tulungagung` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `cetak_tulungagung`(email_ varchar(100))
BEGIN
	select mod(NO,10) as 'meja', concat('NLC', KODE, '09', NO) AS 'id_tim',email, nama_kelompok, nama_ketua, nama_anggota_1, nama_anggota_2, nama_sekolah, 'Tulungagung' as 'tempat'
	from nlc_tulungagung where email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_denpasar` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_denpasar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_denpasar`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_denpasar WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_denpasar set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		set @ema = (select kode from user where email=email_);
		INSERT INTO nlc_denpasar (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, now(), @ema);
	END IF;
		call sukses_submit(email_, 'Denpasar');
		select concat('NLC', KODE, '08', NO) AS 'id_tim' from nlc_denpasar WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_jakarta` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_jakarta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_jakarta`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
set @check_email = (SELECT email FROM nlc_jakarta WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_jakarta set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_jakarta (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	END IF;
	call sukses_submit(email_, 'Jakarta');
		select concat('NLC', KODE, '07', NO) AS 'id_tim' from nlc_jakarta WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_jember` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_jember` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_jember`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_jember WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_jember set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_jember (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	END IF;
	call sukses_submit(email_,'Jember');
		select concat('NLC', KODE, '04', NO) AS 'id_tim' from nlc_jember WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_kediri` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_kediri` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_kediri`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_kediri WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_kediri set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_kediri (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	END IF;
	call sukses_submit(email_,'Kediri');
		select concat('NLC', KODE, '03', NO) AS 'id_tim' from nlc_kediri WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_madiun` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_madiun` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_madiun`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_madiun WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_madiun set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_madiun (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	END IF;
	call sukses_submit(email_,'Madiun');
		select concat('NLC', KODE, '05', NO) AS 'id_tim' from nlc_madiun WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_malang` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_malang` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_malang`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_malang WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_malang set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_malang (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	
	END IF;
		call sukses_submit(email_,'Malang');
		select concat('NLC', KODE, '02', NO) AS 'id_tim' from nlc_malang WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_online` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_online` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_online`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
set @check_email = (SELECT email FROM nlc_online WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_online set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_online (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	
	END IF;
		call sukses_submit(email_, 'Online');
		select concat('NLC', KODE, '00', NO) AS 'id_tim' from nlc_online WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_solo` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_solo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_solo`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_solo WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_solo set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_solo (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	
	END IF;
		call sukses_submit(email_, 'Solo');
		select concat('NLC', KODE, '06', NO) AS 'id_tim' from nlc_solo WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_sumbawa` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_sumbawa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_sumbawa`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_sumbawa WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_sumbawa set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_sumbawa (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);
	END IF;
	call sukses_submit(email_, 'Sumbawa');
		select concat('NLC', KODE, '10', NO) AS 'id_tim' from nlc_sumbawa WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_surabaya` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_surabaya` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_surabaya`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_surabaya WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_surabaya set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_surabaya (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	
	END IF;
	call sukses_submit(email_, 'Surabaya');
		select concat('NLC', KODE, '01', NO) AS 'id_tim' from nlc_surabaya WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_nlc_tulungagung` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_nlc_tulungagung` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_nlc_tulungagung`(email_ varchar(100), nama_kelompok_ varchar(10), nama_ketua_ varchar(50), email_ketua_ varchar(50), 
nama_anggota_1_ varchar(50), nama_anggota_2_ varchar(50), no_hp_ketua_ varchar(20), no_hp_anggota_1_ varchar(20), 
no_hp_anggota_2_ varchar(20), nama_sekolah_ varchar(50), alamat_sekolah_ varchar(50), tempat_penyisihan_ varchar(50), 
kabupaten_ varchar(50), provinsi_ varchar(50))
BEGIN
	set @check_email = (SELECT email FROM nlc_tulungagung WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update nlc_tulungagung set NAMA_KELOMPOK = nama_kelompok_, nama_ketua=nama_ketua_, email_ketua=email_ketua_, nama_anggota_1=nama_anggota_1_, nama_anggota_2=nama_anggota_2_, nama_sekolah=nama_sekolah_, kabupaten=kabupaten_, provinsi=provinsi_
		where email= email_;
	ELSE
		SET @ema = (SELECT kode FROM USER WHERE email=email_);
		INSERT INTO nlc_tulungagung (EMAIL, NAMA_KELOMPOK, NAMA_KETUA, EMAIL_KETUA, NAMA_ANGGOTA_1, NAMA_ANGGOTA_2, NO_HP_KETUA, NO_HP_ANGGOTA_1, NO_HP_ANGGOTA_2, NAMA_SEKOLAH, ALAMAT_SEKOLAH, KABUPATEN, PROVINSI, WAKTU, KODE) 
		VALUES (email_, nama_kelompok_, nama_ketua_, email_ketua_, nama_anggota_1_, nama_anggota_2_, no_hp_ketua_, no_hp_anggota_1_, no_hp_anggota_2_, nama_sekolah_, alamat_sekolah_, kabupaten_, provinsi_, NOW(), @ema);	
	END IF;
	call sukses_submit(email_,'Tulungagung');
		select concat('NLC', KODE, '09', NO) AS 'id_tim' from nlc_tulungagung WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `dashboard_npc` */

/*!50003 DROP PROCEDURE IF EXISTS  `dashboard_npc` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `dashboard_npc`(nama_ varchar(50), email_ varchar(20), no_hp_ varchar(20), 
facebook_acc_ varchar(20), asal_sekolah_ varchar(200), nama_jalan_ varchar(200), nama_kota_ varchar(200), nama_provinsi_ varchar(200))
BEGIN
	set @check_email = (SELECT email FROM npc WHERE email=email_);
	IF (isnull(@check_email)=0) THEN
		update npc set nama = nama_, email=email_, no_hp=no_hp_, facebook_acc=facebook_acc_, asal_sekolah =asal_sekolah_, 
		nama_jalan=nama_jalan_, nama_kota=nama_kota_, nama_provinsi=nama_provinsi_
		where email= email_;
	ELSE
		set @ema = (select kode from user where email=email_);
		INSERT INTO npc (nama, email, no_hp, facebook_acc, asal_sekolah, nama_jalan, nama_kota, nama_provinsi, tanggal, KODE) 
		VALUES (nama_, email_, no_hp_, facebook_acc_, asal_sekolah_, nama_jalan_, nama_kota_, nama_provinsi_, now(), @ema);
	END IF;
		call sukses_submit(email_,'Online');
		select concat('NPC', KODE, '00', NO) AS 'id_tim' from npc WHERE email=email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `hub_kami` */

/*!50003 DROP PROCEDURE IF EXISTS  `hub_kami` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `hub_kami`(nama_ VARCHAR(50), email_ VARCHAR(100), subjek_ VARCHAR(100), pesan_ TEXT)
BEGIN
INSERT INTO hubungi_kami (nama,email,subjek,pesan) VALUES (nama_,email_,subjek_,pesan_);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `login` */

/*!50003 DROP PROCEDURE IF EXISTS  `login` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `login`(email_ varchar(100), password_ varchar(32))
BEGIN
	select * from user where email=email_ and password = password_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `show_berita` */

/*!50003 DROP PROCEDURE IF EXISTS  `show_berita` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `show_berita`(halaman_ int)
BEGIN
	set @hal = ((halaman_ - 1)*5);
	PREPARE STMT FROM 	
	" SELECT * FROM (select * from blog ORDER by no desc) as sele LIMIT ?,? "; 
	SET @START = ((halaman_ - 1)*5); 
	SET @LIMIT = 5; 
	EXECUTE STMT USING @START, @LIMIT;
	DEALLOCATE PREPARE STMT;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_denpasar` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_denpasar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_denpasar`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_denpasar, `user`
	WHERE nlc_denpasar.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_jakarta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_jakarta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_jakarta`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_jakarta, `user`
	WHERE nlc_jakarta.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_jember` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_jember` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_jember`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_jember, `user`
	WHERE nlc_jember.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_kediri` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_kediri` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_kediri`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_kediri, `user`
	WHERE nlc_kediri.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_madiun` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_madiun` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_madiun`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_madiun, `user`
	WHERE nlc_madiun.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_malang` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_malang` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_malang`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_malang, `user`
	WHERE nlc_malang.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_solo` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_solo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_solo`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_solo, `user`
	WHERE nlc_solo.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_sumbawa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_sumbawa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_sumbawa`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_sumbawa, `user`
	WHERE nlc_sumbawa.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_surabaya` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_surabaya` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_surabaya`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_surabaya, `user`
	WHERE nlc_surabaya.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sudah_tulungagung` */

/*!50003 DROP PROCEDURE IF EXISTS  `sudah_tulungagung` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sudah_tulungagung`()
BEGIN
SELECT `NO`, NAMA_KETUA, user.email AS umail, NO_HP_KETUA, `status`
	FROM nlc_tulungagung, `user`
	WHERE nlc_tulungagung.EMAIL = user.email AND `status` = 't' ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sukses_submit` */

/*!50003 DROP PROCEDURE IF EXISTS  `sukses_submit` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sukses_submit`(email_ varchar(100), daerah_ varchar(100))
BEGIN
	update user set status = 'f', daerah = daerah_
	where email= email_;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `ubah_status` */

/*!50003 DROP PROCEDURE IF EXISTS  `ubah_status` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ubah_status`(email_ varchar(100))
BEGIN
	update user set status = 't'
	where email= email_;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
