-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 07:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemhaidepok`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `id_attachment` int(11) NOT NULL,
  `id_dokumenpersyaratan` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokumenpersyaratan`
--

CREATE TABLE `dokumenpersyaratan` (
  `id_dokumenpersyaratan` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `nama_dokumenpersyaratan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `ulasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `id_fungsi` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `nama_fungsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id_inbox` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `isi_inbox` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bayar`
--

CREATE TABLE `jenis_bayar` (
  `id_jenisbayar` int(11) NOT NULL,
  `nama_jenisbayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_bayar`
--

INSERT INTO `jenis_bayar` (`id_jenisbayar`, `nama_jenisbayar`) VALUES
(1, 'Berbayar'),
(2, 'Gratis');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ruangpublik`
--

CREATE TABLE `jenis_ruangpublik` (
  `id_jenisruangpublik` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_ruangpublik`
--

INSERT INTO `jenis_ruangpublik` (`id_jenisruangpublik`, `nama_jenis`) VALUES
(1, 'Gedung'),
(2, 'Taman');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_ruangpublik`
--

CREATE TABLE `pendaftaran_ruangpublik` (
  `id_ruangpublik` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `id_jenisbayar` int(11) NOT NULL,
  `id_jenisruangpublik` int(11) NOT NULL,
  `id_tiperuangpublik` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `tgl_daftar` int(11) NOT NULL,
  `nama_ruangpublik` varchar(255) NOT NULL,
  `harga_ruangpublik` varchar(255) NOT NULL,
  `alamat_ruangpublik` varchar(255) NOT NULL,
  `kec_ruangpublik` varchar(255) NOT NULL,
  `kel_ruangpublik` varchar(255) NOT NULL,
  `rt_ruangpublik` varchar(50) NOT NULL,
  `rw_ruangpublik` varchar(50) NOT NULL,
  `email_ruangpublik` varchar(255) NOT NULL,
  `wa_ruangpublik` varchar(50) NOT NULL,
  `tlp_ruangpublik` varchar(50) NOT NULL,
  `status_pendaftaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `id_tipeuser` int(11) NOT NULL,
  `nama_pengelola` varchar(255) NOT NULL,
  `alamat_pengelola` varchar(255) NOT NULL,
  `kec_pengelola` varchar(50) NOT NULL,
  `kel_pengelola` varchar(50) NOT NULL,
  `rt_pengelola` varchar(50) NOT NULL,
  `rw_pengelola` varchar(50) NOT NULL,
  `email_pengelola` varchar(100) NOT NULL,
  `wa_pengelola` varchar(50) NOT NULL,
  `tlp_pengelola` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_tipeuser` int(11) NOT NULL,
  `nik_pengguna` varchar(50) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `jk_pengguna` varchar(50) NOT NULL,
  `alamat_pengguna` varchar(1000) NOT NULL,
  `kec_pengguna` varchar(50) NOT NULL,
  `kel_pengguna` varchar(50) NOT NULL,
  `rt_pengguna` varchar(50) NOT NULL,
  `rw_pengguna` varchar(50) NOT NULL,
  `tlp_pengguna` varchar(50) NOT NULL,
  `wa_pengguna` varchar(50) NOT NULL,
  `email_pengguna` varchar(100) NOT NULL,
  `nama_komunitas` varchar(255) NOT NULL,
  `alamat_kumunitas` varchar(255) NOT NULL,
  `kec_komunitas` varchar(50) NOT NULL,
  `kel_komunitas` varchar(50) NOT NULL,
  `rt_komunitas` varchar(50) NOT NULL,
  `rw_komunitas` varchar(50) NOT NULL,
  `tlp_komunitas` varchar(50) NOT NULL,
  `wa_komunitas` varchar(50) NOT NULL,
  `email_komunitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_ruangpublik`
--

CREATE TABLE `penggunaan_ruangpublik` (
  `id_penggunaan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `id_tipeacara` int(11) NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `jumlah_tamu` varchar(255) NOT NULL,
  `periode_penggunaan` datetime NOT NULL,
  `status_penggunaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_pendaftaran`
--

CREATE TABLE `status_pendaftaran` (
  `id_statuspendaftaran` int(11) NOT NULL,
  `nama_statuspendaftaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_pendaftaran`
--

INSERT INTO `status_pendaftaran` (`id_statuspendaftaran`, `nama_statuspendaftaran`) VALUES
(1, 'Diajukan'),
(2, 'Diproses'),
(3, 'Disetujui'),
(4, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `status_penggunaan`
--

CREATE TABLE `status_penggunaan` (
  `id_statuspenggunaan` int(11) NOT NULL,
  `nama_statuspenggunaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_penggunaan`
--

INSERT INTO `status_penggunaan` (`id_statuspenggunaan`, `nama_statuspenggunaan`) VALUES
(1, 'Diajukan'),
(2, 'Disetujui'),
(3, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `syaratdanketentuan`
--

CREATE TABLE `syaratdanketentuan` (
  `id_syaratdanketentuan` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `syaratketentuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tagmaster`
--

CREATE TABLE `tagmaster` (
  `id` int(11) NOT NULL,
  `hit_count` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `flag` varchar(255) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tata_tertib`
--

CREATE TABLE `tata_tertib` (
  `id_tatatertib` int(11) NOT NULL,
  `id_ruangpublik` int(11) NOT NULL,
  `tata_tertib` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_ruangpublik`
--

CREATE TABLE `tipe_ruangpublik` (
  `id_tiperuangpublik` int(11) NOT NULL,
  `nama_tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_ruangpublik`
--

INSERT INTO `tipe_ruangpublik` (`id_tiperuangpublik`, `nama_tipe`) VALUES
(1, 'In Door'),
(2, 'Out Door');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_user`
--

CREATE TABLE `tipe_user` (
  `id_tipeuser` int(11) NOT NULL,
  `nama_tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `key_wilayah` bigint(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kd_kecamatan` varchar(15) NOT NULL DEFAULT '',
  `kecamatan` varchar(100) NOT NULL DEFAULT '',
  `kd_kelurahan` varchar(15) NOT NULL DEFAULT '',
  `kelurahan` varchar(100) NOT NULL DEFAULT '',
  `kd_kabupaten` varchar(5) NOT NULL DEFAULT '',
  `kabupaten` varchar(100) NOT NULL DEFAULT '',
  `kd_propinsi` varchar(5) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `kd_sektor` varchar(15) NOT NULL DEFAULT '',
  `kd_pos` varchar(15) NOT NULL DEFAULT '',
  `tgl_ubah` datetime NOT NULL,
  `versi` int(11) NOT NULL DEFAULT 0,
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime NOT NULL,
  `versi_akhir` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`key_wilayah`, `nama`, `jenis`, `kd_kecamatan`, `kecamatan`, `kd_kelurahan`, `kelurahan`, `kd_kabupaten`, `kabupaten`, `kd_propinsi`, `propinsi`, `kd_sektor`, `kd_pos`, `tgl_ubah`, `versi`, `tgl_mulai`, `tgl_akhir`, `versi_akhir`) VALUES
(1, 'UNKNOWN', '', '', '', '', '', '', '', '', '', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(2, 'Jawa Barat', 'propinsi', '', '', '', '', '', '', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(3, 'Depok', 'kabupaten', '', '', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(4, 'Pancoran Mas', 'kecamatan', '32.76.01', 'Pancoran Mas', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(5, 'Depok', 'kelurahan', '32.76.01', 'Pancoran Mas', '32.76.01.1006', 'Depok', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(6, 'Depok Jaya', 'kelurahan', '32.76.01', 'Pancoran Mas', '32.76.01.1007', 'Depok Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(7, 'Pancoran Mas', 'kelurahan', '32.76.01', 'Pancoran Mas', '32.76.01.1008', 'Pancoran Mas', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(8, 'Mampang', 'kelurahan', '32.76.01', 'Pancoran Mas', '32.76.01.1009', 'Mampang', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(9, 'Rangkapan Jaya Baru', 'kelurahan', '32.76.01', 'Pancoran Mas', '32.76.01.1010', 'Rangkapan Jaya Baru', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(10, 'Rangkapan Jaya', 'kelurahan', '32.76.01', 'Pancoran Mas', '32.76.01.1011', 'Rangkapan Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(11, 'Cimanggis', 'kecamatan', '32.76.02', 'Cimanggis', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(12, 'Harjamukti', 'kelurahan', '32.76.02', 'Cimanggis', '32.76.02.1007', 'Harjamukti', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(13, 'Curug', 'kelurahan', '32.76.02', 'Cimanggis', '32.76.02.1008', 'Curug', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(14, 'Tugu', 'kelurahan', '32.76.02', 'Cimanggis', '32.76.02.1009', 'Tugu', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(15, 'Mekarsari', 'kelurahan', '32.76.02', 'Cimanggis', '32.76.02.1010', 'Mekarsari', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(16, 'Pasir Gunung Selatan', 'kelurahan', '32.76.02', 'Cimanggis', '32.76.02.1011', 'Pasir Gunung Selatan', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(17, 'Cisalak Pasar', 'kelurahan', '32.76.02', 'Cimanggis', '32.76.02.1012', 'Cisalak Pasar', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(18, 'Sawangan', 'kecamatan', '32.76.03', 'Sawangan', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(19, 'Pasir Putih', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1001', 'Pasir Putih', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(20, 'Bedahan', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1002', 'Bedahan', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(21, 'Pengasinan', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1003', 'Pengasinan', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(22, 'Cinangka', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1009', 'Cinangka', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(23, 'Sawangan', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1010', 'Sawangan', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(24, 'Sawangan Baru', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1011', 'Sawangan Baru', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(25, 'Kedaung', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1012', 'Kedaung', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(26, 'Limo', 'kecamatan', '32.76.04', 'Limo', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(27, 'Maruyung', 'kelurahan', '32.76.04', 'Limo', '32.76.04.1001', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(28, 'Grogol', 'kelurahan', '32.76.04', 'Limo', '32.76.04.1002', 'Grogol', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(29, 'Krukut', 'kelurahan', '32.76.04', 'Limo', '32.76.04.1003', 'Krukut', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(30, 'Limo', 'kelurahan', '32.76.04', 'Limo', '32.76.04.1004', 'Limo', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(31, 'Sukmajaya', 'kecamatan', '32.76.05', 'Sukmajaya', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(32, 'Sukmajaya', 'kelurahan', '32.76.05', 'Sukmajaya', '32.76.05.1001', 'Sukmajaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(33, 'Abadi Jaya', 'kelurahan', '32.76.05', 'Sukmajaya', '32.76.05.1003', 'Abadi Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(34, 'Mekar Jaya', 'kelurahan', '32.76.05', 'Sukmajaya', '32.76.05.1004', 'Mekar Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(35, 'Baktijaya', 'kelurahan', '32.76.05', 'Sukmajaya', '32.76.05.1005', 'Baktijaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(36, 'Cisalak', 'kelurahan', '32.76.05', 'Sukmajaya', '32.76.05.1008', 'Cisalak', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(37, 'Titajaya', 'kelurahan', '32.76.05', 'Sukmajaya', '32.76.05.1010', 'Tirta Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(38, 'Beji', 'kecamatan', '32.76.06', 'Beji', '32.76.06.1001', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(39, 'Beji', 'kelurahan', '32.76.06', 'Beji', '32.76.06.1001', 'Beji', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(40, 'Kukusan', 'kelurahan', '32.76.06', 'Beji', '32.76.06.1002', 'Kukusan', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(41, 'Tanah Baru', 'kelurahan', '32.76.06', 'Beji', '32.76.06.1003', 'Tanah Baru', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(42, 'Kemiri Muka', 'kelurahan', '32.76.06', 'Beji', '32.76.06.1004', 'Kemiri Muka', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(43, 'Pondok Cina', 'kelurahan', '32.76.06', 'Beji', '32.76.06.1005', 'Pondok Cina', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(44, 'Beji Timur', 'kelurahan', '32.76.06', 'Beji', '32.76.06.1006', 'Beji Timur', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(45, 'Cipayung', 'kecamatan', '32.76.07', 'Cipayung', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(46, 'Cipayung', 'kelurahan ', '32.76.07', 'Cipayung', '32.76.07.1001', 'Cipayung', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(47, 'Cipayung Jaya', 'kelurahan', '32.76.07', 'Cipayung', '32.76.07.1002', 'Cipayung Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(48, 'Ratu Jaya', 'kelurahan', '32.76.07', 'Cipayung', '32.76.07.1003', 'Ratu Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(49, 'Bojong Pondok Terong', 'kelurahan', '32.76.07', 'Cipayung', '32.76.07.1004', 'Bojong Pondok Terong', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(50, 'Pondok Jaya', 'kelurahan', '32.76.07', 'Cipayung', '32.76.07.1005', 'Pondok Jaya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(51, 'Cilodong', 'kecamatan', '32.76.08', 'Cilodong', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(52, 'Sukamaju', 'kelurahan', '32.76.08', 'Cilodong', '32.76.08.1001', 'Sukamaju', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(53, 'Cilodong', 'kelurahan', '32.76.08', 'Cilodong', '32.76.08.1002', 'Cilodong', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(54, 'Kalibaru', 'kelurahan', '32.76.08', 'Cilodong', '32.76.08.1003', 'Kalibaru', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(55, 'Kalimulya', 'kelurahan', '32.76.08', 'Cilodong', '32.76.08.1004', 'Kalimulya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(56, 'Jatimulya', 'kelurahan', '32.76.08', 'Cilodong', '32.76.08.1005', 'Jatimulya', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(57, 'Cinere', 'kecamatan', '32.76.09', 'Cinere', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(58, 'Cinere', 'kelurahan', '32.76.09', 'Cinere', '32.76.09.1001', 'Cinere', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(59, 'Gandul', 'kelurahan', '32.76.09', 'Cinere', '32.76.09.1002', 'Gandul', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(60, 'Pangkalan Jati', 'kelurahan', '32.76.09', 'Cinere', '32.76.09.1003', 'Pangkalan Jati', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(61, 'Pangkalan Jati Baru', 'kelurahan', '32.76.09', 'Cinere', '32.76.09.1004', 'Pangkalan Jati Baru', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(62, 'Tapos', 'kecamatan', '32.76.10', 'Tapos', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(63, 'Tapos', 'kelurahan', '32.76.10', 'Tapos', '32.76.10.1001', 'Tapos', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(64, 'Leuwinanggung', 'kelurahan', '32.76.10', 'Tapos', '32.76.10.1002', 'Leuwinanggung', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(65, 'Sukatani', 'kelurahan', '32.76.10', 'Tapos', '32.76.10.1003', 'Sukatani', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(66, 'Sukamaju Baru', 'kelurahan', '32.76.10', 'Tapos', '32.76.10.1004', 'Sukamaju Baru', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(67, 'Jatijajar', 'kelurahan', '32.76.10', 'Tapos', '32.76.10.1005', 'Jatijajar', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(68, 'Cilangkap', 'kelurahan', '32.76.10', 'Tapos', '32.76.10.1006', 'Cilangkap', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(69, 'Cimpaeun', 'kelurahan', '32.76.10', 'Tapos', '32.76.10.1007', 'Cimpaeun', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(70, 'Bojongsari', 'kecamatan', '32.76.11', 'Bojongsari', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(71, 'Bojongsari', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1001', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(72, 'Bojongsari Baru', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1002', 'Bojongsari Baru', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(73, 'Serua', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1003', 'Serua', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(74, 'Pondok Petir', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1004', 'Pondok Petir', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(75, 'Curug', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1005', 'Curug', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(76, 'Duren Mekar', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1006', 'Duren Mekar', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(77, 'Duren Seribu', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1007', 'Duren Seribu', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(78, 'Luar Depok', 'kelurahan', '00.00.00', 'Luar Depok', '00.00.00.0000', 'Luar Depok', '00.00', 'Luar Depok', '00', 'Luar Depok', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(80, 'TOL JASAMARGA', 'tol', 'TOL', 'JALAN TOL', 'JASAMARGA', 'JASAMARGA', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(81, 'TOL CIJAGO', 'tol', 'TOL', 'JALAN TOL', 'CIJAGO', 'CIJAGO', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(82, 'TOL CIMANGGIS CIBITING', 'tol', 'TOL', 'JALAN TOL', 'CIMCIBITUNG', 'CIMANGGIS CIBITUNG', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(83, 'Pancoran Mas', 'kecamatan', '32.76.01', 'Pancoran Mas', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(84, 'Sukmajaya', 'kecamatan', '32.76.05', 'Sukmajaya', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(85, 'Pancoran Mas', 'Kecamatan', '32.76.01', 'Pancoran Mas', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(86, 'Sawangan', 'kecamatan', '32.76.03', 'Sawangan', '', 'Kelurahan', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(87, 'Cimanggis', 'kecamatan', '32.76.02', 'Cimanggis', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(88, 'Cilodong', 'kecamatan', '32.76.08', 'Cilodong', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(89, 'Bojongsari', 'kelurahan', '32.76.11', 'Bojongsari', '32.76.11.1001', 'Bojongsari', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(90, 'Bojongsari', 'kecamatan', '32.76.11', 'Bojongsari', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(91, 'Cipayung', 'kecamatan', '32.76.07', 'Cipayung', '', '', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(92, 'Meruyung', 'kelurahan', '32.76.04', 'Limo', '32.76.04.1001', 'Meruyung', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(93, 'Sawangan', 'kelurahan', '32.76.03', 'Sawangan', '32.76.03.1014', 'Sawangan Lama', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y'),
(94, 'Sawangan', 'kelurahan', '32.76.03', 'Duren Mekar', '32.76.03.1015', 'Sawangan Lama', '32.76', 'Depok', '32', 'Jawa Barat', '', '', '2017-10-17 00:00:00', 0, '1979-10-25 00:00:00', '3000-10-31 00:00:00', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id_attachment`),
  ADD KEY `id_dokumenpersyaratan` (`id_dokumenpersyaratan`);

--
-- Indexes for table `dokumenpersyaratan`
--
ALTER TABLE `dokumenpersyaratan`
  ADD PRIMARY KEY (`id_dokumenpersyaratan`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`id_fungsi`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id_inbox`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `jenis_bayar`
--
ALTER TABLE `jenis_bayar`
  ADD PRIMARY KEY (`id_jenisbayar`),
  ADD KEY `id_jenisbayar` (`id_jenisbayar`);

--
-- Indexes for table `jenis_ruangpublik`
--
ALTER TABLE `jenis_ruangpublik`
  ADD PRIMARY KEY (`id_jenisruangpublik`),
  ADD KEY `id_jenisruangpublik` (`id_jenisruangpublik`);

--
-- Indexes for table `pendaftaran_ruangpublik`
--
ALTER TABLE `pendaftaran_ruangpublik`
  ADD PRIMARY KEY (`id_ruangpublik`),
  ADD KEY `id_pengelola` (`id_pengelola`),
  ADD KEY `id_jenisbayar` (`id_jenisbayar`),
  ADD KEY `id_jenisruangpublik` (`id_jenisruangpublik`),
  ADD KEY `id_tiperuangpublik` (`id_tiperuangpublik`),
  ADD KEY `kec_ruangpublik` (`kec_ruangpublik`),
  ADD KEY `kel_ruangpublik` (`kel_ruangpublik`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id_pengelola`),
  ADD KEY `id_tipeuser` (`id_tipeuser`),
  ADD KEY `kec_pengelola` (`kec_pengelola`),
  ADD KEY `kel_pengelola` (`kel_pengelola`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_tipeuser` (`id_tipeuser`),
  ADD KEY `kec_pengguna` (`kec_pengguna`),
  ADD KEY `kel_pengguna` (`kel_pengguna`),
  ADD KEY `kec_komunitas` (`kec_komunitas`),
  ADD KEY `kel_komunitas` (`kel_komunitas`);

--
-- Indexes for table `penggunaan_ruangpublik`
--
ALTER TABLE `penggunaan_ruangpublik`
  ADD PRIMARY KEY (`id_penggunaan`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`),
  ADD KEY `id_tipeacara` (`id_tipeacara`),
  ADD KEY `status_penggunaan` (`status_penggunaan`);

--
-- Indexes for table `status_pendaftaran`
--
ALTER TABLE `status_pendaftaran`
  ADD PRIMARY KEY (`id_statuspendaftaran`),
  ADD KEY `id_statuspendaftaran` (`id_statuspendaftaran`);

--
-- Indexes for table `status_penggunaan`
--
ALTER TABLE `status_penggunaan`
  ADD PRIMARY KEY (`id_statuspenggunaan`),
  ADD KEY `id_statuspenggunaan` (`id_statuspenggunaan`);

--
-- Indexes for table `syaratdanketentuan`
--
ALTER TABLE `syaratdanketentuan`
  ADD PRIMARY KEY (`id_syaratdanketentuan`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`);

--
-- Indexes for table `tagmaster`
--
ALTER TABLE `tagmaster`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tata_tertib`
--
ALTER TABLE `tata_tertib`
  ADD PRIMARY KEY (`id_tatatertib`),
  ADD KEY `id_ruangpublik` (`id_ruangpublik`);

--
-- Indexes for table `tipe_ruangpublik`
--
ALTER TABLE `tipe_ruangpublik`
  ADD PRIMARY KEY (`id_tiperuangpublik`),
  ADD KEY `id_tiperuangpublik` (`id_tiperuangpublik`);

--
-- Indexes for table `tipe_user`
--
ALTER TABLE `tipe_user`
  ADD PRIMARY KEY (`id_tipeuser`),
  ADD KEY `id_tipeuser` (`id_tipeuser`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`key_wilayah`),
  ADD KEY `nama` (`nama`),
  ADD KEY `versi_akhir` (`versi_akhir`),
  ADD KEY `IDX_DW_NAMA` (`kecamatan`,`kelurahan`,`tgl_mulai`,`tgl_akhir`),
  ADD KEY `IDX_DW_KODE` (`kd_kecamatan`,`kd_kelurahan`,`tgl_mulai`,`tgl_akhir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `id_attachment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumenpersyaratan`
--
ALTER TABLE `dokumenpersyaratan`
  MODIFY `id_dokumenpersyaratan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `id_fungsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_bayar`
--
ALTER TABLE `jenis_bayar`
  MODIFY `id_jenisbayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_ruangpublik`
--
ALTER TABLE `jenis_ruangpublik`
  MODIFY `id_jenisruangpublik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran_ruangpublik`
--
ALTER TABLE `pendaftaran_ruangpublik`
  MODIFY `id_ruangpublik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penggunaan_ruangpublik`
--
ALTER TABLE `penggunaan_ruangpublik`
  MODIFY `id_penggunaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syaratdanketentuan`
--
ALTER TABLE `syaratdanketentuan`
  MODIFY `id_syaratdanketentuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagmaster`
--
ALTER TABLE `tagmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tata_tertib`
--
ALTER TABLE `tata_tertib`
  MODIFY `id_tatatertib` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipe_ruangpublik`
--
ALTER TABLE `tipe_ruangpublik`
  MODIFY `id_tiperuangpublik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe_user`
--
ALTER TABLE `tipe_user`
  MODIFY `id_tipeuser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `key_wilayah` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
