-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 11:05 AM
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
  `id_dosen` int(10) UNSIGNED NOT NULL,
  `nama_dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `interest` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `NIP`, `id_user`, `created_at`, `updated_at`, `interest`) VALUES
(1, 'mischelle', '123', 2, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pembimbing_ta`
--

CREATE TABLE `dosen_pembimbing_ta` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_dosen` int(10) UNSIGNED NOT NULL,
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`, `id_universitas`, `created_at`, `updated_at`) VALUES
(1, 'Fakultas Ilmu Komputer', 1, NULL, NULL),
(2, 'Fakultas Hukum', 1, NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`id_industri`, `email`, `nama_industri`, `nama_lengkap`, `jabatan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'afiqrasyidm@gmail.com', 'Perusahaan afiq', 'afiq', 'afiq', 5, '2017-03-15 07:02:33', '2017-03-15 07:02:33'),
(2, 'afiqrasyidm@gmail.com', 'Perusahaan afiq', 'afiq Lagi', 'afiq', 6, '2017-03-18 05:51:11', '2017-03-18 05:51:11'),
(3, 'afiqrasyidm@gmail.com', 'Perusahaan aldi', 'aldi', 'aldi', 7, '2017-03-19 00:19:27', '2017-03-19 00:19:27'),
(4, 'afiqrasyidm@gmail.com', 'afiq', 'afiq', 'afiq', 8, '2017-04-04 22:36:07', '2017-04-04 22:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ta`
--

CREATE TABLE `jenis_ta` (
  `id_jenis_ta` int(10) UNSIGNED NOT NULL,
  `nama_ta` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `NPM`, `email`, `jumlah_sks`, `semester`, `jenjang`, `id_user`, `id_prodi`, `created_at`, `updated_at`) VALUES
(1, 'Afiq Rasyid Muhammad', '1406544072', 'afiq.rasyid@ui.ac.id', 10, 4, 'S1', 1, 1, NULL, NULL),
(2, 'Monica', '1406544072', 'afiq.rasyid@ui.ac.id', 10, 4, 'S3', 4, 2, NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengambil_topik`
--

CREATE TABLE `pengambil_topik` (
  `id_mahasiswa` int(10) NOT NULL,
  `id_topik` int(10) NOT NULL,
  `izin_ambil` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengambil_topik`
--

INSERT INTO `pengambil_topik` (`id_mahasiswa`, `id_topik`, `izin_ambil`, `created_at`, `updated_at`) VALUES
(1, 27, 0, '2017-04-05 01:33:02', '2017-04-05 01:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) UNSIGNED NOT NULL,
  `nama_prodi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fakultas` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_fakultas`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Informasi', 1, NULL, NULL),
(2, 'Hukum', 2, NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `sudah_diambil` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `topik_ta`, `deskripsi`, `id_dosen`, `id_industri`, `maksimal_pendaftar`, `created_at`, `updated_at`, `sudah_diambil`) VALUES
(17, 'Sentiment Analisis untuk BukaKaoak', 'Lorem', NULL, 1, NULL, '2017-03-18 08:06:14', '2017-03-18 08:06:14', 1),
(23, 'Sentiment Analisis untuk Fasilkom', 'Ini merupakan sentiment analisis', 1, NULL, NULL, '2017-03-18 18:24:20', '2017-03-18 18:24:20', 0),
(24, 'Sentiment Analisis untuk FH', 'Lorem', 1, NULL, NULL, '2017-03-18 22:46:15', '2017-03-18 22:46:15', 0),
(25, 'Survey Leptop Asus', 'Lorem', NULL, 3, NULL, '2017-03-19 00:20:05', '2017-03-19 00:20:05', 0),
(26, 'Struktur Database BukaPintu', 'Lorem', 1, NULL, NULL, '2017-03-19 00:23:04', '2017-03-19 00:23:04', 1),
(27, 'Sentiment Analisis untuk FK', 'Lorem', NULL, 4, 10, '2017-04-04 23:02:10', '2017-04-04 23:02:10', 0),
(28, 'Data Mining', 'Lorem', 1, NULL, 10, '2017-04-04 23:35:57', '2017-04-04 23:35:57', 0),
(30, 'MatDas-2', 'Lorem', NULL, 4, 10, '2017-04-05 00:25:37', '2017-04-05 00:25:37', 0),
(32, 'Matdis', 'Lorem', NULL, NULL, NULL, NULL, NULL, 1);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul_ta` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_topik` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id_tugas_akhir`, `status_tugas_akhir`, `tgl_pengajuan`, `id_jenis_ta`, `id_mahasiswa`, `created_at`, `updated_at`, `judul_ta`, `id_topik`) VALUES
(18, '000', NULL, NULL, 1, '2017-04-05 01:48:42', '2017-04-05 01:48:42', NULL, 32);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(10) UNSIGNED NOT NULL,
  `nama_universitas` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `nama_universitas`, `created_at`, `updated_at`) VALUES
(1, 'Universitas Indonesia', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'afiq.rasyid', 'lol', 'mahasiswa', NULL, NULL),
(2, 'mischelle.meilisa', 'propensi2017', 'dosen', NULL, NULL),
(3, 'aneira.dwira', 'propen18', 'staf', NULL, NULL),
(4, 'monica.agustin', 'mon1c4', 'mahasiswa', NULL, NULL),
(5, 'anto', 'Password123', 'industri', '2017-03-15 07:02:33', '2017-03-15 07:02:33'),
(6, 'antolagi', 'Password123', 'industri', '2017-03-18 05:51:11', '2017-03-18 05:51:11'),
(7, 'aldi', 'Password123', 'industri', '2017-03-19 00:19:27', '2017-03-19 00:19:27'),
(8, 'ojan', 'eyJpdiI6IlB6dW16S0hUXC9iTmQwZUQwcGdRTVdRPT0iLCJ2YWx1ZSI6InRzRllINnNwUUVDT3cycXladXFZSW00SjBWK3ZmRmxIOGhMZUFudkFieVU9IiwibWFjIjoiM2QyOWJhOWQwN2E3MjJmMWMxNGJmNjg5ZGUzZjYyNDNhYjdkZmM4NDM0ODViZWZiNTY1OTE4ZjI2NjBhODA5MyJ9', 'industri', '2017-04-04 22:36:07', '2017-04-04 22:36:07');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dosen_pembimbing_ta`
--
ALTER TABLE `dosen_pembimbing_ta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hasil_ta`
--
ALTER TABLE `hasil_ta`
  MODIFY `id_hasil_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `id_industri` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id_mahasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengajuan_sidang`
--
ALTER TABLE `pengajuan_sidang`
  MODIFY `id_pengajuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id_topik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id_tugas_akhir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
