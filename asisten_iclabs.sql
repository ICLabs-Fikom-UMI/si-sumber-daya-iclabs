CREATE DATABASE  IF NOT EXISTS `asisten_iclabs` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `asisten_iclabs`;
-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: asisten_iclabs
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mst_asisten`
--

DROP TABLE IF EXISTS `mst_asisten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_asisten` (
  `id_asisten` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_asisten` varchar(50) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `deksripsi` text NOT NULL,
  `bidang_keahlian` text NOT NULL,
  PRIMARY KEY (`id_asisten`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_asisten`
--

LOCK TABLES `mst_asisten` WRITE;
/*!40000 ALTER TABLE `mst_asisten` DISABLE KEYS */;
INSERT INTO `mst_asisten` VALUES (1,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(2,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(3,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(4,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(5,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(6,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(7,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(8,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(9,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile'),(10,'Muhammad Dani Arya Putra','A1','asisten_lab/arya/home.png','13120210004','Sistem Informasi',2021,'13120210004@umi.ac.id','085824549295','Perum. Pelita Asri Blok I No. 1, Pallangga, Kabupa','Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur, voluptate quod laborum repellat quaerat provident magnam! Voluptates quae tempora maiores? Omnis ad incidunt voluptates asperiores consequuntur, veritatis earum. Est ad ut animi vero eveniet nemo optio corrupti voluptatibus iure, maxime quia soluta architecto debitis aliquam quam. Deserunt voluptatibus tempora quia asperiores officia iste ea dignissimos sit excepturi nemo? Numquam magni maxime cumque veritatis voluptas sint aliquam ad repellendus inventore cum placeat molestias, error tenetur eveniet possimus ea blanditiis soluta quis aperiam excepturi. Architecto mollitia dolorem voluptatem cupiditate repellat distinctio quibusdam quod, tempora laudantium voluptate inventore adipisci perspiciatis temporibus beatae!','Pemrograman Web, Pemrograman Mobile');
/*!40000 ALTER TABLE `mst_asisten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_kepala_lab`
--

DROP TABLE IF EXISTS `mst_kepala_lab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_kepala_lab` (
  `id_kepala_lab` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kepala_lab` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nidn` varchar(11) NOT NULL,
  `lulusan` varchar(50) NOT NULL,
  `dosen_prodi` varchar(40) NOT NULL,
  `mulai_menjabat` year(4) NOT NULL,
  `selesai_menjabat` year(4) DEFAULT NULL,
  `masih_menjabat` tinyint(1) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `deskripsi` text NOT NULL,
  `bidang_keahlian` text NOT NULL,
  PRIMARY KEY (`id_kepala_lab`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_kepala_lab`
--

LOCK TABLES `mst_kepala_lab` WRITE;
/*!40000 ALTER TABLE `mst_kepala_lab` DISABLE KEYS */;
INSERT INTO `mst_kepala_lab` VALUES (1,'Ir. Huzain Azis, S.Kom., M.Cs., MTA.','Kepala_lab/pak_huzein/home.jpg','0920098801','Universiti Kuala Lumpur','Teknik Informatika',2020,NULL,1,'huzain.azis@umi.ac.id','08535345435','Ir. Huzain Azis, S.Kom., M.Cs., MTA adalah Tenaga Pendidik dan Peneliti di bidang Teknik Informatika, yang telah menjadi bagian dari Fakultas Ilmu Komputer, Universitas Muslim Indonesia sejak 2014. Beliau meraih gelar S2 Ilmu Komputer dari Universitas Gadjah Mada dan saat ini sedang mengejar pendidikan S3 di MIIT University of Kuala Lumpur. Perannya sebagai Dosen, Ir. Huzain Azis mengajarkan berbagai matakuliah khusus di bidangnya, seperti Struktur Data, Data Mining, dan Keamanan Sistem Komputer. \r\n\r\nTujuannya adalah untuk memberikan pemahaman yang mendalam kepada mahasiswa tentang konsep-konsep penting dan penerapannya melalui praktik di laboratorium. Untuk memberikan kontribusi yang lebih pada dunia akademik, Ir. Huzain Azis aktif dalam penelitian dimana fokus riset utamanya yaitu bidang Data Science, Machine Learning, Computer Vision, dan Computer Security. Melalui aktivitas penelitian dan pengembangan yang berkelanjutan, beliau juga bertekad menciptakan teknologi inovatif melalui startup yang bermanfaat dan meningkatkan standar pendidikan di bidang keahliannya.','Artificial Intelligence, Computer Vision, Data Sience'),(2,'Ir. Abdul Rachman Manga’, S.Kom., MT.,MTA','Kepala_lab/pak_eman/home.jpg','0931018001','Universitas Negeri Malang','Teknik Informatika',2020,2024,NULL,'abdulrachman.manga@umi.ac.id','0834543245','TES TES','Computer Networking, Artificial Intellegence'),(3,'Lutfi Budi Ilmawan, S.Kom., M.Cs., MTA','Kepala_lab/pak_luthfi/home.png','0921018902','Universitas Negeri Malang','Teknik Informatika',2020,2024,NULL,'lutfibudi.ilmawan@umi.ac.id','0835345345','Received the barchelor degree in computer science from Universitas Muslim Indonesia in 2010. He received the master of computer science degree from Gadjah Mada University in 2014. Currently, He is lecturer in Department of Informatics Engineering, Computer Science Faculty, Universitas Muslim Indonesia. He received the certificate of competence in the area of software development with qualification programmer from BNSP in 2019, he also received the certificate of competence from Microsoft Technogy Associate for Introduction to Programming using Python scheme in 2020. His research interest include sentiment analysis using multiple strategies such as feature engineering, negation handling, and missing value or data sparsity handling to gain higher classifier performance.\r\n\r\n','Sentiment Analysis');
/*!40000 ALTER TABLE `mst_kepala_lab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_laboran`
--

DROP TABLE IF EXISTS `mst_laboran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_laboran` (
  `id_laboran` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_laboran` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `lulusan` varchar(50) NOT NULL,
  `mulai_menjabat` year(4) NOT NULL,
  `selesai_menjabat` int(11) DEFAULT NULL,
  `masih_menjabat` tinyint(1) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `deskripsi` text NOT NULL,
  `bidang_keahlian` text NOT NULL,
  PRIMARY KEY (`id_laboran`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_laboran`
--

LOCK TABLES `mst_laboran` WRITE;
/*!40000 ALTER TABLE `mst_laboran` DISABLE KEYS */;
INSERT INTO `mst_laboran` VALUES (1,'Fatimah AR. Tuasamu, S.Kom., MTA, MCF','laboran/ibu_fatimah/home.jpg','Universitas Muslim Indonesia',2020,2024,NULL,'contoh@umi.ac.id','089483758656','Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, porro explicabo? Veritatis inventore deleniti dolorum laudantium consequuntur, ea fuga at dignissimos blanditiis porro, a, ipsa atque? Molestiae aspernatur optio, assumenda doloremque enim eos eligendi delectus sunt quia esse distinctio laboriosam quae. Hic, autem enim dolorum ducimus voluptatibus nulla officiis dicta?','Pemrograman ');
/*!40000 ALTER TABLE `mst_laboran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_matkul`
--

DROP TABLE IF EXISTS `mst_matkul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_matkul` (
  `id_matkul` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `matkul` varchar(20) NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_matkul`
--

LOCK TABLES `mst_matkul` WRITE;
/*!40000 ALTER TABLE `mst_matkul` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_matkul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_user`
--

DROP TABLE IF EXISTS `mst_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_user` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role_admin` enum('laboran','admin_asisten') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_user`
--

LOCK TABLES `mst_user` WRITE;
/*!40000 ALTER TABLE `mst_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trx_riwayat_matkul`
--

DROP TABLE IF EXISTS `trx_riwayat_matkul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trx_riwayat_matkul` (
  `id_riwayat_mengajar` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_matkul` int(10) unsigned NOT NULL,
  `id_asisten_lab` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_riwayat_mengajar`),
  KEY `id_asisten_lab` (`id_asisten_lab`),
  KEY `id_matkul` (`id_matkul`),
  CONSTRAINT `trx_riwayat_matkul_ibfk_1` FOREIGN KEY (`id_asisten_lab`) REFERENCES `trx_sumber_daya_lab` (`id_sumber_daya`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trx_riwayat_matkul_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `mst_matkul` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trx_riwayat_matkul`
--

LOCK TABLES `trx_riwayat_matkul` WRITE;
/*!40000 ALTER TABLE `trx_riwayat_matkul` DISABLE KEYS */;
/*!40000 ALTER TABLE `trx_riwayat_matkul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trx_sumber_daya_lab`
--

DROP TABLE IF EXISTS `trx_sumber_daya_lab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trx_sumber_daya_lab` (
  `id_sumber_daya` int(10) unsigned NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `prodi` enum('Teknik Informatika','Sistem Informasi') NOT NULL,
  `deskripsi` text NOT NULL,
  `keahlian` varchar(30) NOT NULL,
  `sertifikat` varchar(30) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `id_riwayat_mengajar` int(10) unsigned NOT NULL,
  `id_jabatan` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_sumber_daya`),
  KEY `id_riwayat_mengajar` (`id_riwayat_mengajar`),
  CONSTRAINT `trx_sumber_daya_lab_ibfk_1` FOREIGN KEY (`id_riwayat_mengajar`) REFERENCES `trx_riwayat_matkul` (`id_riwayat_mengajar`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trx_sumber_daya_lab_ibfk_3` FOREIGN KEY (`id_jabatan`) REFERENCES `mst_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trx_sumber_daya_lab`
--

LOCK TABLES `trx_sumber_daya_lab` WRITE;
/*!40000 ALTER TABLE `trx_sumber_daya_lab` DISABLE KEYS */;
/*!40000 ALTER TABLE `trx_sumber_daya_lab` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-23  5:36:58
