-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2017 at 05:50 AM
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `NIP`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'mischelle', '123', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_ta`
--

CREATE TABLE `dosen_ta` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `tgl_submit` date NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_revisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_ta` double NOT NULL,
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`id_industri`, `email`, `nama_industri`, `nama_lengkap`, `jabatan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'afiqrasyidm@gmail.com', 'afiq', 'afiq', 'afiq', 5, '2017-03-15 07:02:33', '2017-03-15 07:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ta`
--

CREATE TABLE `jenis_ta` (
  `id_jenis_ta` int(10) UNSIGNED NOT NULL,
  `nama_ta` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `tgl_pengajuan` date NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `judul_topik` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dosen` int(10) UNSIGNED NOT NULL,
  `id_industri` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL,
  `status_tugas_akhir` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `id_jenis_ta` int(10) UNSIGNED NOT NULL,
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(10) UNSIGNED NOT NULL,
  `nama_universitas` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'afiq.rasyid', 'lol', 'mahasiswa', NULL, NULL),
(2, 'mischelle.meilisa', 'propensi2017', 'dosen', NULL, NULL),
(3, 'aneira.dwira', 'propen18', 'staf', NULL, NULL),
(4, 'monica.agustin', 'mon1c4', 'mahasiswa', NULL, NULL),
(5, 'anto', 'Password123', 'industri', '2017-03-15 07:02:33', '2017-03-15 07:02:33');

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
-- Indexes for table `dosen_ta`
--
ALTER TABLE `dosen_ta`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `dosen_ta`
--
ALTER TABLE `dosen_ta`
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
  MODIFY `id_hasil_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `id_industri` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_topik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id_tugas_akhir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD CONSTRAINT `fakultas_id_universitas_foreign` FOREIGN KEY (`id_universitas`) REFERENCES `universitas` (`id_universitas`) ON DELETE CASCADE;

--
-- Constraints for table `hasil_ta`
--
ALTER TABLE `hasil_ta`
  ADD CONSTRAINT `hasil_ta_id_tugas_akhir_foreign` FOREIGN KEY (`id_tugas_akhir`) REFERENCES `tugas_akhir` (`id_tugas_akhir`) ON DELETE CASCADE;

--
-- Constraints for table `industri`
--
ALTER TABLE `industri`
  ADD CONSTRAINT `industri_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `log_bimbingan`
--
ALTER TABLE `log_bimbingan`
  ADD CONSTRAINT `log_bimbingan_id_tugas_akhir_foreign` FOREIGN KEY (`id_tugas_akhir`) REFERENCES `tugas_akhir` (`id_tugas_akhir`) ON DELETE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_id_prodi_foreign` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE,
  ADD CONSTRAINT `mahasiswa_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_id_fakultas_foreign` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE;

--
-- Constraints for table `topik`
--
ALTER TABLE `topik`
  ADD CONSTRAINT `topik_id_dosen_foreign` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `topik_id_industri_foreign` FOREIGN KEY (`id_industri`) REFERENCES `industri` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `tugas_akhir_id_jenis_ta_foreign` FOREIGN KEY (`id_jenis_ta`) REFERENCES `jenis_ta` (`id_jenis_ta`) ON DELETE CASCADE,
  ADD CONSTRAINT `tugas_akhir_id_mahasiswa_foreign` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;