-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 01:00 AM
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
  `interest` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nama_dosen`, `NIP`, `id_user`, `created_at`, `id_maker`, `updated_at`, `id_dosen`, `interest`) VALUES
('mischelle', '123', 2, NULL, NULL, NULL, 1, '');

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
(1, '2017-04-17 17:00:00', '2017-04-17 17:00:00', 1, NULL, 1, 47),
(2, '2017-04-17 17:00:00', '2017-04-17 17:00:00', 1, NULL, 1, 48),
(3, '2017-04-20 15:45:47', '2017-04-20 15:45:47', 1, 2, 2, 52),
(4, '2017-04-20 15:46:11', '2017-04-20 15:46:11', 1, 2, 2, 53);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_penguji_ta`
--

CREATE TABLE `dosen_penguji_ta` (
  `id_penguji_ta` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
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
(2, 'Fakultas Hukum', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tugas_akhir`
--

CREATE TABLE `feedback_tugas_akhir` (
  `id_feedback_tugas_akhir` int(10) NOT NULL,
  `feedback_dosen_pa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_dosen_pembimbing_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_maker` int(10) DEFAULT NULL,
  `id_tugas_akhir` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, NULL, '1491807628.pdf', NULL, NULL, 41, '2017-04-10 00:00:28', NULL, '2017-04-10 00:00:28'),
(7, NULL, '1406544072.pdf', NULL, NULL, 48, '2017-04-14 22:07:01', NULL, '2017-04-14 22:07:01'),
(10, NULL, '1406544072.pdf', NULL, NULL, 53, '2017-04-20 15:57:35', 1, '2017-04-20 15:57:35');

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
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL,
  `id_dosen_pembimbing` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Monica', '1406544072', 'afiq.rasyid@ui.ac.id', 115, 4, 'S3', 4, 2, '4.0', 1, NULL, NULL, NULL),
(4, 'Anto', '1406544072', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 1, 1, '3.0', 1, NULL, NULL, NULL),
(5, 'Ani', '1406544072', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 1, 2, '3.5', 1, NULL, NULL, NULL),
(6, 'Anti', '1406544072', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 1, 1, '3.2', 1, NULL, NULL, NULL),
(7, 'Ana', '1406544072', 'afiq.rasyid@ui.ac.id', 115, 4, 'S1', 1, 2, '3.4', 1, NULL, NULL, NULL),
(8, 'fauzan', '1406', 'afiq.rasyid@ui.ac.id', 100, 6, 'S2', 11, 1, '4.0', 0, NULL, NULL, NULL);

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
  `waktu_sidang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan_sidang`
--

INSERT INTO `pengajuan_sidang` (`id_pengajuan`, `tgl_pengajuan`, `status`, `id_mahasiswa`, `id_tugas_akhir`, `waktu_sidang`, `created_at`, `id_maker`, `updated_at`) VALUES
(4, NULL, '2', 1, 53, '2017-04-20 23:00:32', '2017-04-20 15:53:19', NULL, '2017-04-20 15:53:19');

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
(2, 'Hukum', 2, NULL, NULL, NULL);

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
(1, 'Mahasiswa Mengajukan Pengajuan Sidang', NULL, NULL, NULL),
(2, 'Pengajuan Sidang Telah Diverifikasi oleh SBA', NULL, NULL, NULL);

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
(6, 'Permohonan TA Sedang Diverfikasi oleh PA', NULL, NULL, NULL),
(7, 'Permohonan TA Sedang Diverifikasi oleh SBA', NULL, NULL, NULL),
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
  `deskripsi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(24, 'Sentiment Analisis untuk FH', 'Lorem', 1, NULL, 15, '2017-03-18 22:46:15', NULL, '2017-03-18 22:46:15', 0),
(25, 'Survey Leptop Asus', 'Lorem', NULL, 3, 5, '2017-03-19 00:20:05', NULL, '2017-03-19 00:20:05', 0),
(26, 'Struktur Database BukaPintu', 'Lorem', 1, NULL, 6, '2017-03-19 00:23:04', NULL, '2017-03-19 00:23:04', 1),
(27, 'Sentiment Analisis untuk FK', 'Lorem', NULL, 4, 7, '2017-04-04 23:02:10', NULL, '2017-04-04 23:02:10', 0),
(28, 'Data Mining', 'Lorem', 1, NULL, 10, '2017-04-04 23:35:57', NULL, '2017-04-04 23:35:57', 1),
(30, 'MatDas-2', 'Lorem', NULL, 4, 8, '2017-04-05 00:25:37', NULL, '2017-04-05 00:25:37', 0),
(40, 'Matematika Diskrit 3', 'LOLOL', NULL, 3, 10, '2017-04-12 00:33:22', NULL, '2017-04-12 00:33:22', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul_ta` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_topik` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id_tugas_akhir`, `status_tugas_akhir`, `tgl_pengajuan`, `id_jenis_ta`, `id_mahasiswa`, `created_at`, `id_maker`, `updated_at`, `judul_ta`, `id_topik`) VALUES
(23, '0', NULL, NULL, 4, '2017-04-04 18:48:42', NULL, '2017-04-04 18:48:42', NULL, 28),
(25, '0', NULL, NULL, 6, '2017-04-04 18:48:42', NULL, '2017-04-04 18:48:42', NULL, 25),
(26, '-1', NULL, NULL, 7, '2017-04-04 18:48:42', NULL, '2017-04-04 18:48:42', NULL, 28),
(53, '11', NULL, NULL, 1, '2017-04-20 15:46:05', 2, '2017-04-20 15:46:05', NULL, 24);

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
(11, 'fauzandi.muhammad', 'ozan15', 'mahasiswa', NULL, NULL, NULL);

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
  MODIFY `id_dosen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dosen_pembimbing_ta`
--
ALTER TABLE `dosen_pembimbing_ta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback_tugas_akhir`
--
ALTER TABLE `feedback_tugas_akhir`
  MODIFY `id_feedback_tugas_akhir` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasil_ta`
--
ALTER TABLE `hasil_ta`
  MODIFY `id_hasil_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id_log_bimbingan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengajuan_sidang`
--
ALTER TABLE `pengajuan_sidang`
  MODIFY `id_pengajuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id_staff` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id_topik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id_tugas_akhir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
