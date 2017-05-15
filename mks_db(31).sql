-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 10:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mks_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nama_dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_dosen` int(10) UNSIGNED NOT NULL,
  `interest` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_jadwal_submit` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nama_dosen`, `NIP`, `id_user`, `created_at`, `id_maker`, `updated_at`, `id_dosen`, `interest`, `is_jadwal_submit`) VALUES
('Mischelle', '123', 2, NULL, NULL, NULL, 1, 'Anaprancis', NULL),
('Budi', '12311', 9, NULL, NULL, NULL, 2, 'Matdas', NULL),
('Anto', '444', 9, NULL, NULL, NULL, 3, 'Matdis', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pa`
--

CREATE TABLE `dosen_pa` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `id_dosen` int(10) NOT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `id_mahasiswa` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen_pa`
--

INSERT INTO `dosen_pa` (`id`, `created_at`, `update_at`, `id_dosen`, `id_maker`, `id_mahasiswa`) VALUES
(1, NULL, NULL, 1, 1, 1),
(2, NULL, NULL, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pembimbing_ta`
--

CREATE TABLE `dosen_pembimbing_ta` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_dosen` int(10) UNSIGNED NOT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `status_dosen_pembimbing` int(3) NOT NULL,
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen_pembimbing_ta`
--

INSERT INTO `dosen_pembimbing_ta` (`id`, `created_at`, `updated_at`, `id_dosen`, `id_maker`, `status_dosen_pembimbing`, `id_tugas_akhir`) VALUES
(39, '2017-05-03 00:13:00', '2017-05-03 00:13:11', 1, 1, 2, 23),
(38, '2017-05-02 06:25:36', '2017-05-02 06:25:36', 1, 2, 2, 23),
(37, '2017-05-02 05:27:36', '2017-05-02 05:27:36', 1, 2, 2, 23),
(41, '2017-05-11 05:01:35', '2017-05-11 05:02:14', 1, 1, 2, 433);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_penguji_ta`
--

CREATE TABLE `dosen_penguji_ta` (
  `id_penguji_ta` int(10) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `id_dosen` int(10) NOT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `id_tugas_akhir` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(10) UNSIGNED NOT NULL,
  `nama_fakultas` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_universitas` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`, `id_universitas`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Fakultas Ilmu Komputer', 1, NULL, NULL, NULL),
(2, 'Fakultas Hukum', 1, NULL, NULL, NULL),
(3, 'Fakultas Kedokteran', 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tugas_akhir`
--

CREATE TABLE `feedback_tugas_akhir` (
  `id_feedback_tugas_akhir` int(10) NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_maker` int(10) DEFAULT NULL,
  `id_tugas_akhir` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_tugas_akhir`
--

INSERT INTO `feedback_tugas_akhir` (`id_feedback_tugas_akhir`, `komentar`, `updated_at`, `created_at`, `id_maker`, `id_tugas_akhir`) VALUES
(13, 'LOL', '2017-04-25 22:26:04', '2017-04-25 22:26:04', 2, 67),
(12, 'LOL', '2017-04-25 22:25:43', '2017-04-25 22:25:43', 1, 67),
(11, 'LOLOL', '2017-04-25 22:25:30', '2017-04-25 22:25:30', 2, 67),
(14, 'LOLOL', '2017-04-25 22:29:05', '2017-04-25 22:29:05', 2, 68),
(15, 'cekkk', '2017-04-26 00:06:05', '2017-04-26 00:06:05', 1, 71),
(16, 'tes', '2017-04-26 00:06:35', '2017-04-26 00:06:35', 2, 71),
(17, 'tolong di setujui', '2017-04-26 00:19:41', '2017-04-26 00:19:41', 1, 76),
(18, 'ok', '2017-04-26 00:20:30', '2017-04-26 00:20:30', 2, 76),
(19, 'Tolong disetujui', '2017-04-26 00:50:53', '2017-04-26 00:50:53', 1, 80),
(20, 'Oke, saya setujui', '2017-04-26 00:52:12', '2017-04-26 00:52:12', 2, 80),
(21, 'Tolong setujui', '2017-05-05 00:07:22', '2017-05-05 00:07:22', 1, 101),
(22, 'Nanti ya dikoreksi dulu', '2017-05-05 00:08:19', '2017-05-05 00:08:19', 2, 101);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(10) NOT NULL,
  `nama_hari` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_ta`
--

CREATE TABLE `hasil_ta` (
  `id_hasil_ta` int(10) UNSIGNED NOT NULL,
  `tgl_submit` date DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_revisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_ta` double DEFAULT NULL,
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_ta`
--

INSERT INTO `hasil_ta` (`id_hasil_ta`, `tgl_submit`, `dokumen`, `dokumen_revisi`, `nilai_ta`, `id_tugas_akhir`, `created_at`, `id_maker`, `updated_at`) VALUES
(14, NULL, '1406544072.pdf', NULL, NULL, 76, '2017-04-26 00:34:25', 1, '2017-04-26 00:34:25'),
(16, NULL, '1406544072.pdf', NULL, NULL, 80, '2017-04-26 01:05:03', 1, '2017-04-26 01:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `industri`
--

CREATE TABLE `industri` (
  `id_industri` int(10) UNSIGNED NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_industri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`id_industri`, `email`, `nama_industri`, `nama_lengkap`, `jabatan`, `id_user`, `created_at`, `updated_at`, `id_maker`) VALUES
(1, 'afiqrasyidm@gmail.com', 'Perusahaan afiq', 'afiq', 'afiq', 5, '2017-03-15 07:02:33', '2017-03-15 07:02:33', 0),
(2, 'afiqrasyidm@gmail.com', 'Perusahaan afiq', 'afiq Lagi', 'afiq', 6, '2017-03-18 05:51:11', '2017-03-18 05:51:11', 0),
(3, 'afiqrasyidm@gmail.com', 'Perusahaan aldi', 'aldi', 'aldi', 7, '2017-03-19 00:19:27', '2017-03-19 00:19:27', 0),
(4, 'afiqrasyidm@gmail.com', 'afiq', 'afiq', 'afiq', 8, '2017-04-04 22:36:07', '2017-04-04 22:36:07', 0),
(5, 'akbar@akbar.com', 'akbar', 'akbar', 'akbar', 10, '2017-04-07 08:54:21', '2017-04-07 08:54:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dosen`
--

CREATE TABLE `jadwal_dosen` (
  `id_jadwal_dosen` int(10) UNSIGNED NOT NULL,
  `id_tugas_akhir` int(10) NOT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `id_hari` int(10) DEFAULT NULL,
  `id_dosen` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_dosen`
--

INSERT INTO `jadwal_dosen` (`id_jadwal_dosen`, `id_tugas_akhir`, `waktu_mulai`, `id_hari`, `id_dosen`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 433, '00:00:00', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ta`
--

CREATE TABLE `jenis_ta` (
  `id_jenis_ta` int(10) UNSIGNED NOT NULL,
  `nama_ta` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_bimbingan`
--

CREATE TABLE `log_bimbingan` (
  `id_log_bimbingan` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL,
  `id_dosen_pembimbing` int(10) NOT NULL,
  `status_bimbingan` int(2) NOT NULL,
  `id_jadwal_dosen` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_bimbingan`
--

INSERT INTO `log_bimbingan` (`id_log_bimbingan`, `keterangan`, `id_tugas_akhir`, `id_dosen_pembimbing`, `status_bimbingan`, `id_jadwal_dosen`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'LOL LOL LOL LOL LOL LOL LOL LOL LOL LOL LOL LOL  ', 433, 41, 1, 1, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NPM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `jenjang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_prodi` int(10) UNSIGNED NOT NULL,
  `IPK` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_sudah_ambil_ta` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `NPM`, `email`, `jumlah_sks`, `semester`, `jenjang`, `id_user`, `id_prodi`, `IPK`, `is_sudah_ambil_ta`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Afiq Rasyid Muhammad', '1406544072', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 1, 1, '4.0', 1, NULL, NULL, NULL),
(2, 'Monica', '1406544073', 'afiq.rasyid@ui.ac.id', 115, 4, 'S3', 4, 2, '4.0', 1, NULL, NULL, NULL),
(4, 'Anto', '1406544074', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 12, 1, '3.0', 1, NULL, NULL, NULL),
(5, 'Ani', '1406544075', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 13, 2, '3.5', 1, NULL, NULL, NULL),
(6, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 3, '3.2', 1, NULL, NULL, NULL),
(7, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(8, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(9, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(10, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(11, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(12, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(13, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(14, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(15, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(16, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(17, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(18, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(19, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(20, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(21, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(22, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(23, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(24, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(25, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(26, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(27, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(28, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(29, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(30, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(31, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(32, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(33, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(34, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(35, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(36, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(37, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(38, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(39, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(40, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(41, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(42, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(43, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(44, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(45, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(46, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(47, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(48, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(49, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(50, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(51, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(52, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(53, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(54, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(55, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(56, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(57, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(58, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(59, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(60, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(61, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(62, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(63, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(64, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(65, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(66, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(67, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(68, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(69, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(70, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(71, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(72, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(73, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(74, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(75, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(76, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(77, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(78, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(79, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(80, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(81, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(82, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(83, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(84, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(85, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(86, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(87, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(88, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(89, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(90, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(91, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(92, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(93, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(94, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(95, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(96, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(97, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(98, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(99, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(100, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(101, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL),
(102, 'Anti', '1406544076', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 14, 1, '3.2', 1, NULL, NULL, NULL),
(103, 'Ana', '1406544077', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 15, 2, '3.4', 1, NULL, NULL, NULL),
(104, 'fauzan', '1406544078', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_03_15_071743_create_universitas_table', 1),
(2, '2017_03_15_074029_create_fakultas_table', 1),
(3, '2017_03_15_075715_create_prodi_table', 1),
(4, '2017_03_15_080002_create_user_table', 1),
(5, '2017_03_15_080141_create_industri_table', 1),
(6, '2017_03_15_080550_create_jenis_ta_table', 1),
(7, '2017_03_15_081142_create_pengajuan_sidang_table', 1),
(8, '2017_03_15_081642_create_dosen_table', 1),
(9, '2017_03_15_082042_create_tugas_akhir_table', 1),
(10, '2017_03_15_082413_create_hasil_ta_table', 1),
(11, '2017_03_15_082831_create_log_bimbingan_table', 1),
(12, '2017_03_15_083339_create_topik_table', 1),
(13, '2017_03_15_083906_create_dosen_ta_table', 1),
(14, '2017_03_15_092110_create_drinks_table', 1),
(15, '2017_03_15_092126_create_mahasiswa_table', 1),
(16, '2017_03_15_095109_add_role_to_user', 1),
(17, '2017_03_15_125621_add_id_mahasiswa_to_tugas_akhir', 2),
(18, '2017_03_15_125937_delete_id_tugas_akhir_to_mahasiswa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_sidang`
--

CREATE TABLE `pengajuan_sidang` (
  `id_pengajuan` int(10) UNSIGNED NOT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mahasiswa` int(10) NOT NULL,
  `id_tugas_akhir` int(10) DEFAULT NULL,
  `waktu_sidang` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_sidang_topik`
--

CREATE TABLE `pengajuan_sidang_topik` (
  `id_pengajuan` int(10) UNSIGNED NOT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `status` int(10) NOT NULL,
  `id_mahasiswa` int(10) NOT NULL,
  `id_tugas_akhir` int(10) DEFAULT NULL,
  `waktu_sidang` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) UNSIGNED NOT NULL,
  `nama_prodi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fakultas` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_fakultas`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Sistem Informasi', 1, NULL, NULL, NULL),
(2, 'Hukum', 2, NULL, NULL, NULL),
(3, 'kedokteran', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referensi_status_sidang`
--

CREATE TABLE `referensi_status_sidang` (
  `id_referensi_status_sidang` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referensi_status_sidang`
--

INSERT INTO `referensi_status_sidang` (`id_referensi_status_sidang`, `status`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Menunggu Persetujuan Sidang', NULL, NULL, NULL),
(2, 'Pengajuan Sidang Telah Diverifikasi oleh SBA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referensi_status_sidang_topik`
--

CREATE TABLE `referensi_status_sidang_topik` (
  `id_referensi_status_sidang` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referensi_status_sidang_topik`
--

INSERT INTO `referensi_status_sidang_topik` (`id_referensi_status_sidang`, `status`, `created_at`, `id_maker`, `updated_at`) VALUES
(0, '', NULL, NULL, NULL),
(1, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referensi_status_ta`
--

CREATE TABLE `referensi_status_ta` (
  `id_referensi_status_ta` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referensi_status_ta`
--

INSERT INTO `referensi_status_ta` (`id_referensi_status_ta`, `status`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Permohonan TA Ditolak oleh Dosen Pembimbing', NULL, NULL, NULL),
(2, 'Permohonan TA Ditolak oleh PA', NULL, NULL, NULL),
(3, 'Menunggu Persetujuan Topik', NULL, NULL, NULL),
(4, 'Pengambilan Topik Tidak Disetujui', NULL, NULL, NULL),
(5, 'Pengambilan Topik Disetujui', NULL, NULL, NULL),
(6, 'Menunggu Persetujuan Permohonan TA oleh PA', NULL, NULL, NULL),
(7, 'Menunggu Verifikasi Permohonan TA oleh SBA', NULL, NULL, NULL),
(8, 'Menunggu Pengambilan Dosen Pembimbing', NULL, NULL, NULL),
(9, 'Menunggu Persetujuan Dosen Pembimbing', NULL, NULL, NULL),
(10, 'Mahasiswa Melakukan Bimbingan TA', NULL, NULL, NULL),
(11, 'Dosen Pembimbing Mengizinkan Sidang', NULL, NULL, NULL),
(12, 'Sidang Telah Dilakukan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id_staff` int(10) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `nama_staff` varchar(25) NOT NULL,
  `id_fakultas` int(10) NOT NULL,
  `id_universitas` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_maker` int(10) DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id_topik` int(10) UNSIGNED NOT NULL,
  `topik_ta` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dosen` int(10) UNSIGNED DEFAULT NULL,
  `id_industri` int(10) UNSIGNED DEFAULT NULL,
  `maksimal_pendaftar` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sudah_diambil` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `topik_ta`, `deskripsi`, `id_dosen`, `id_industri`, `maksimal_pendaftar`, `created_at`, `id_maker`, `updated_at`, `sudah_diambil`) VALUES
(17, 'Sentiment Analisis untuk BukaKaoak', 'Lorem', NULL, 1, 5, '2017-03-18 08:06:14', NULL, '2017-03-18 08:06:14', 1),
(23, 'Sentiment Analisis untuk Fasilkom', 'Ini merupakan sentiment analisis', 1, NULL, 5, '2017-03-18 18:24:20', NULL, '2017-03-18 18:24:20', 1),
(24, 'Sentiment Analisis untuk FH', 'Lorem', 1, NULL, 15, '2017-03-18 22:46:15', 2, '2017-03-18 22:46:15', 1),
(25, 'Survey Leptop Asus', 'Lorem', NULL, 3, 5, '2017-03-19 00:20:05', 7, '2017-03-19 00:20:05', 1),
(26, 'Struktur Database BukaPintu', 'Lorem', 1, NULL, 6, '2017-03-19 00:23:04', NULL, '2017-03-19 00:23:04', 1),
(27, 'Sentiment Analisis untuk FK', 'Lorem', NULL, 4, 7, '2017-04-04 23:02:10', NULL, '2017-04-04 23:02:10', 0),
(28, 'Data Mining', 'Lorem', 1, NULL, 10, '2017-04-04 23:35:57', NULL, '2017-04-04 23:35:57', 1),
(30, 'MatDas-2', 'Lorem', NULL, 4, 8, '2017-04-05 00:25:37', NULL, '2017-04-05 00:25:37', 0),
(40, 'Matematika Diskrit 3', 'LOLOL', NULL, 3, 10, '2017-04-12 00:33:22', NULL, '2017-04-12 00:33:22', 1),
(43, 'Agile Software Development', 'Latar Belakang Agile Software Development', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(72, 'Lorem76', 'Lorem', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(71, 'Lorem', 'Lorem', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(70, 'Topik TA PLN', 'LOrem', NULL, 3, 10, '2017-05-05 00:03:00', 7, '2017-05-05 00:03:00', 0),
(69, 'Lorem123', 'Lorem', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(66, 'K2', 'KKK', NULL, 3, 10, '2017-05-02 06:39:07', 7, '2017-05-02 06:39:07', 0),
(65, 'Shand2', 'Lorem', NULL, 3, 10, '2017-05-02 06:32:47', 7, '2017-05-02 06:32:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL,
  `status_tugas_akhir` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `id_jenis_ta` int(10) UNSIGNED DEFAULT NULL,
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `nilai_ta` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul_ta` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_topik` int(10) UNSIGNED NOT NULL,
  `is_publish` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id_tugas_akhir`, `status_tugas_akhir`, `tgl_pengajuan`, `id_jenis_ta`, `id_mahasiswa`, `nilai_ta`, `created_at`, `id_maker`, `updated_at`, `judul_ta`, `id_topik`, `is_publish`) VALUES
(23, '3', NULL, NULL, 4, NULL, '2017-04-04 18:48:42', 2, '2017-04-04 18:48:42', 'Lorem', 28, 1),
(25, '4', NULL, NULL, 5, NULL, '2017-04-04 18:48:42', 7, '2017-04-04 18:48:42', NULL, 25, 1),
(26, '3', NULL, NULL, 6, NULL, '2017-04-04 18:48:42', 2, '2017-04-04 18:48:42', NULL, 28, 1),
(102, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(103, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(104, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(105, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(106, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(107, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(108, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(109, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(110, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(111, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(112, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(113, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(114, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(115, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(116, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(117, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(118, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(119, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(120, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(121, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(122, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(123, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(124, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(125, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(126, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(127, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(128, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(129, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1),
(130, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(131, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(132, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0),
(133, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(134, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(135, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0),
(136, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(137, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(138, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0),
(139, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(140, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(141, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0),
(142, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(143, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(144, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(145, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(146, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(147, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(148, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(149, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(150, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(151, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(152, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(153, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(154, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(155, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(156, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(157, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(158, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(159, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(160, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(161, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(162, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(163, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(164, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(165, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(166, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(167, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(168, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(169, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(170, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(171, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(172, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(173, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(174, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(175, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(176, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(177, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(178, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(179, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(180, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(181, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(182, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(183, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(184, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(185, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(186, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(187, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(188, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(189, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(190, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(191, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(192, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(193, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(194, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(195, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(196, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(197, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(198, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(199, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(200, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(201, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(202, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(203, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(204, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(205, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(206, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(207, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(208, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(209, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(210, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(211, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(212, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(213, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(214, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(215, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(216, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(217, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(218, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(219, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(220, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(221, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(222, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(223, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(224, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(225, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(226, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(227, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(228, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(229, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(230, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(231, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(232, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(233, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(234, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(235, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(236, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(237, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(238, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(239, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(240, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(241, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(242, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(243, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(244, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(245, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(246, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(247, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(248, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(249, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(250, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(251, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(252, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(253, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(254, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(255, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(256, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(257, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(258, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(259, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(260, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(261, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(262, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(263, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(264, '3', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(265, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(266, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(267, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(268, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(269, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(270, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(271, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(272, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(273, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(274, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(275, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(276, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(277, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(278, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(279, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(280, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(281, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(282, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(283, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(284, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(285, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(286, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(287, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(288, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(289, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(290, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(291, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(292, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(293, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(294, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(295, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(296, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(297, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(298, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(299, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(300, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(301, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(302, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(303, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(304, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(305, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(306, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(307, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(308, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(309, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(310, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(311, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(312, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(313, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(314, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(315, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(316, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(317, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(318, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(319, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(320, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(321, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(322, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(323, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(324, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(325, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(326, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(327, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(328, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(329, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(330, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(331, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(332, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(333, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(334, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(335, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(336, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(337, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(338, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(339, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(340, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(341, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(342, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(343, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(344, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(345, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(346, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(347, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(348, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(349, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(350, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(351, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(352, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(353, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(354, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(355, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(356, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(357, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(358, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(359, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(360, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(361, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(362, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(363, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(364, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(365, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(366, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(367, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(368, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(369, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(370, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(371, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(372, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(373, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(374, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(375, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(376, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(377, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(378, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(379, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(380, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(381, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(382, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(383, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(384, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(385, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(386, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(387, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(388, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(389, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(390, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(391, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(392, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(393, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(394, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(395, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(396, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(397, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(398, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(399, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(400, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1),
(401, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(402, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1),
(403, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(404, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(405, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(406, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(407, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(408, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(409, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(410, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(411, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(412, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(413, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(414, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(415, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(416, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(417, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(418, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(419, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(420, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(421, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(422, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(423, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(424, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(425, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(426, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(427, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(428, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(429, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(430, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0),
(431, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(432, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0),
(433, '10', '2017-05-11', 1, 1, NULL, '2017-05-11 04:59:23', 1, '2017-05-11 04:59:23', 'Lorem', 72, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(10) UNSIGNED NOT NULL,
  `nama_universitas` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `nama_universitas`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Universitas Indonesia', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'afiq.rasyid', 'lol', 'mahasiswa', NULL, NULL, NULL),
(2, 'mischelle.meilisa', 'propensi2017', 'dosen', NULL, NULL, NULL),
(3, 'aneira.dwira', 'propen18', 'staf', NULL, NULL, NULL),
(4, 'monica.agustin', 'mon1c4', 'mahasiswa', NULL, NULL, NULL),
(5, 'anto', 'Password123', 'industri', '2017-03-15 07:02:33', NULL, '2017-03-15 07:02:33'),
(6, 'antolagi', 'Password123', 'industri', '2017-03-18 05:51:11', NULL, '2017-03-18 05:51:11'),
(10, 'akbar', 'eyJpdiI6IlE5R05oYXRaVlhVR0tGY3dIUTdIWFE9PSIsInZhbHVlIjoiZFhDZDMwQmdOSHFyK051YVptazBEZlFpb3Y4Ykd2STRmWUFaVHVUbHN5QT0iLCJtYWMiOiJmZGJjZTY4ZmM1MDM3ZDI2N2IwNDVhZDljOGI0OWMyZTc1YmExZjFjZWU4ZDZkZmQ1NGU2Y2Q3MmNiNjM4ODdjIn0=', 'industri', '2017-04-07 08:54:21', NULL, '2017-04-07 08:54:21'),
(7, 'ojan', 'eyJpdiI6IlB6dW16S0hUXC9iTmQwZUQwcGdRTVdRPT0iLCJ2YWx1ZSI6InRzRllINnNwUUVDT3cycXladXFZSW00SjBWK3ZmRmxIOGhMZUFudkFieVU9IiwibWFjIjoiM2QyOWJhOWQwN2E3MjJmMWMxNGJmNjg5ZGUzZjYyNDNhYjdkZmM4NDM0ODViZWZiNTY1OTE4ZjI2NjBhODA5MyJ9', 'industri', '2017-04-04 22:36:07', NULL, '2017-04-04 22:36:07'),
(9, 'ab', 'ab', 'mahasiswa', NULL, NULL, NULL),
(11, 'fauzandi.muhammad', 'ozan15', 'managerial', NULL, NULL, NULL),
(12, 'fauzandi.muhammada', 'ozan15', 'mahasiswa', NULL, NULL, NULL),
(13, 'fauzandi.muhammadb', 'ozan15', 'mahasiswa', NULL, NULL, NULL),
(14, 'fauzandi.muhammadc', 'ozan15', 'mahasiswa', NULL, NULL, NULL),
(15, 'fauzandi.muhammadd', 'ozan15', 'mahasiswa', NULL, NULL, NULL),
(16, 'fauzandi.muhammade', 'ozan15', 'mahasiswa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_user_role` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `dosen_id_user_foreign` (`id_user`);

--
-- Indexes for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen_pembimbing_ta`
--
ALTER TABLE `dosen_pembimbing_ta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_tugas_akhir` (`id_tugas_akhir`);

--
-- Indexes for table `dosen_penguji_ta`
--
ALTER TABLE `dosen_penguji_ta`
  ADD PRIMARY KEY (`id_penguji_ta`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD UNIQUE KEY `fakultas_nama_fakultas_unique` (`nama_fakultas`),
  ADD KEY `fakultas_id_universitas_foreign` (`id_universitas`);

--
-- Indexes for table `feedback_tugas_akhir`
--
ALTER TABLE `feedback_tugas_akhir`
  ADD PRIMARY KEY (`id_feedback_tugas_akhir`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `hasil_ta`
--
ALTER TABLE `hasil_ta`
  ADD PRIMARY KEY (`id_hasil_ta`),
  ADD KEY `hasil_ta_id_tugas_akhir_foreign` (`id_tugas_akhir`);

--
-- Indexes for table `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`id_industri`),
  ADD KEY `industri_id_user_foreign` (`id_user`);

--
-- Indexes for table `jadwal_dosen`
--
ALTER TABLE `jadwal_dosen`
  ADD PRIMARY KEY (`id_jadwal_dosen`);

--
-- Indexes for table `jenis_ta`
--
ALTER TABLE `jenis_ta`
  ADD PRIMARY KEY (`id_jenis_ta`);

--
-- Indexes for table `log_bimbingan`
--
ALTER TABLE `log_bimbingan`
  ADD PRIMARY KEY (`id_log_bimbingan`),
  ADD KEY `log_bimbingan_id_tugas_akhir_foreign` (`id_tugas_akhir`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `mahasiswa_id_user_foreign` (`id_user`),
  ADD KEY `mahasiswa_id_prodi_foreign` (`id_prodi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_sidang`
--
ALTER TABLE `pengajuan_sidang`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengajuan_sidang_topik`
--
ALTER TABLE `pengajuan_sidang_topik`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `prodi_nama_prodi_unique` (`nama_prodi`),
  ADD KEY `prodi_id_fakultas_foreign` (`id_fakultas`);

--
-- Indexes for table `referensi_status_sidang`
--
ALTER TABLE `referensi_status_sidang`
  ADD PRIMARY KEY (`id_referensi_status_sidang`);

--
-- Indexes for table `referensi_status_sidang_topik`
--
ALTER TABLE `referensi_status_sidang_topik`
  ADD PRIMARY KEY (`id_referensi_status_sidang`);

--
-- Indexes for table `referensi_status_ta`
--
ALTER TABLE `referensi_status_ta`
  ADD PRIMARY KEY (`id_referensi_status_ta`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id_topik`),
  ADD KEY `topik_id_dosen_foreign` (`id_dosen`),
  ADD KEY `topik_id_industri_foreign` (`id_industri`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id_tugas_akhir`),
  ADD KEY `tugas_akhir_id_jenis_ta_foreign` (`id_jenis_ta`),
  ADD KEY `tugas_akhir_id_mahasiswa_foreign` (`id_mahasiswa`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_universitas`),
  ADD UNIQUE KEY `universitas_nama_universitas_unique` (`nama_universitas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_user_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dosen_pembimbing_ta`
--
ALTER TABLE `dosen_pembimbing_ta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `dosen_penguji_ta`
--
ALTER TABLE `dosen_penguji_ta`
  MODIFY `id_penguji_ta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback_tugas_akhir`
--
ALTER TABLE `feedback_tugas_akhir`
  MODIFY `id_feedback_tugas_akhir` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasil_ta`
--
ALTER TABLE `hasil_ta`
  MODIFY `id_hasil_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `id_industri` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jenis_ta`
--
ALTER TABLE `jenis_ta`
  MODIFY `id_jenis_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_bimbingan`
--
ALTER TABLE `log_bimbingan`
  MODIFY `id_log_bimbingan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengajuan_sidang`
--
ALTER TABLE `pengajuan_sidang`
  MODIFY `id_pengajuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengajuan_sidang_topik`
--
ALTER TABLE `pengajuan_sidang_topik`
  MODIFY `id_pengajuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id_staff` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id_topik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id_tugas_akhir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
