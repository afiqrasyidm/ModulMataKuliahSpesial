-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mei 2017 pada 19.01
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deploy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
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
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nama_dosen`, `NIP`, `id_user`, `created_at`, `id_maker`, `updated_at`, `id_dosen`, `interest`, `is_jadwal_submit`) VALUES
('Mischelle', '123', 2, NULL, NULL, NULL, 1, 'Analisis Sistem', 1),
('Budi', '12311', 9, NULL, NULL, NULL, 2, 'Machine Learning', NULL),
('Anto', '444', 9, NULL, NULL, NULL, 3, 'Data Mining', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_pa`
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
-- Dumping data untuk tabel `dosen_pa`
--

INSERT INTO `dosen_pa` (`id`, `created_at`, `update_at`, `id_dosen`, `id_maker`, `id_mahasiswa`) VALUES
(1, NULL, NULL, 1, 1, 1),
(2, NULL, NULL, 1, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_pembimbing_ta`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_penguji_ta`
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
-- Struktur dari tabel `dosen_penguji_topik`
--

CREATE TABLE `dosen_penguji_topik` (
  `id_penguji_topik` int(10) NOT NULL,
  `id_dosen` int(10) NOT NULL,
  `id_tugas_akhir` int(10) NOT NULL,
  `id_maker` int(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
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
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`, `id_universitas`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Fakultas Ilmu Komputer', 1, NULL, NULL, NULL),
(2, 'Fakultas Hukum', 1, NULL, NULL, NULL),
(3, 'Fakultas Kedokteran', 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback_tugas_akhir`
--

CREATE TABLE `feedback_tugas_akhir` (
  `id_feedback_tugas_akhir` int(10) NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_maker` int(10) DEFAULT NULL,
  `id_tugas_akhir` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(10) NOT NULL,
  `nama_hari` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`, `create_at`, `update_at`) VALUES
(1, 'Senin', '2017-05-14 10:13:39', '2017-05-14 10:13:39'),
(2, 'Selasa', '2017-05-15 07:25:47', '2017-05-15 07:25:47'),
(3, 'Rabu', '2017-05-15 07:25:47', '2017-05-15 07:25:47'),
(4, 'Kamis', '2017-05-15 07:25:47', '2017-05-15 07:25:47'),
(5, 'Jumat', '2017-05-15 07:25:47', '2017-05-15 07:25:47'),
(6, 'Sabtu', '2017-05-15 07:25:47', '2017-05-15 07:25:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_ta`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `industri`
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
-- Dumping data untuk tabel `industri`
--

INSERT INTO `industri` (`id_industri`, `email`, `nama_industri`, `nama_lengkap`, `jabatan`, `id_user`, `created_at`, `updated_at`, `id_maker`) VALUES
(3, 'afiqrasyidm@gmail.com', 'Perusahaan aldi', 'aldi', 'aldi', 7, '2017-03-18 17:19:27', '2017-03-18 17:19:27', 0),
(2, 'afiqrasyidm@gmail.com', 'Perusahaan afiq', 'afiq Lagi', 'afiq', 6, '2017-03-17 22:51:11', '2017-03-17 22:51:11', 0),
(1, 'afiqrasyidm@gmail.com', 'Perusahaan afiq', 'afiq', 'afiq', 5, '2017-03-15 00:02:33', '2017-03-15 00:02:33', 0),
(4, 'afiqrasyidm@gmail.com', 'afiq', 'afiq', 'afiq', 8, '2017-04-04 15:36:07', '2017-04-04 15:36:07', 0),
(5, 'akbar@akbar.com', 'akbar', 'akbar', 'akbar', 10, '2017-04-07 01:54:21', '2017-04-07 01:54:21', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dosen`
--

CREATE TABLE `jadwal_dosen` (
  `id_jadwal_dosen` int(10) UNSIGNED NOT NULL,
  `id_tugas_akhir` int(10) DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `id_hari` int(10) DEFAULT NULL,
  `id_dosen` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_ta`
--

CREATE TABLE `jenis_ta` (
  `id_jenis_ta` int(10) UNSIGNED NOT NULL,
  `nama_ta` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_ta`
--

INSERT INTO `jenis_ta` (`id_jenis_ta`, `nama_ta`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Skripsi', NULL, NULL, NULL),
(2, 'Tesis', NULL, NULL, NULL),
(3, 'Disertasi', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_bimbingan`
--

CREATE TABLE `log_bimbingan` (
  `id_log_bimbingan` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tugas_akhir` int(10) UNSIGNED NOT NULL,
  `id_dosen_pembimbing` int(10) NOT NULL,
  `status_bimbingan` int(2) NOT NULL,
  `waktu_mulai` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
-- Dumping data untuk tabel `mahasiswa`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `pengajuan_sidang`
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
-- Struktur dari tabel `pengajuan_sidang_topik`
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
-- Struktur dari tabel `prodi`
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
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_fakultas`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'S1 Sistem Informasi', 1, NULL, NULL, NULL),
(2, 'S2 Ilmu Hukum', 2, NULL, NULL, NULL),
(3, 'S1 Kedokteran', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `referensi_status_sidang`
--

CREATE TABLE `referensi_status_sidang` (
  `id_referensi_status_sidang` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `referensi_status_sidang`
--

INSERT INTO `referensi_status_sidang` (`id_referensi_status_sidang`, `status`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Menunggu Persetujuan Sidang', NULL, NULL, NULL),
(2, 'Pengajuan Sidang Telah Diverifikasi oleh SBA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `referensi_status_sidang_topik`
--

CREATE TABLE `referensi_status_sidang_topik` (
  `id_referensi_status_sidang` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `referensi_status_sidang_topik`
--

INSERT INTO `referensi_status_sidang_topik` (`id_referensi_status_sidang`, `status`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Dosen Mengizinkan Sidang Topik', NULL, NULL, NULL),
(2, 'Menunggu Verifikasi SBA', NULL, NULL, NULL),
(3, 'Siap Sidang', NULL, NULL, NULL),
(4, 'Selesai Sidang', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `referensi_status_ta`
--

CREATE TABLE `referensi_status_ta` (
  `id_referensi_status_ta` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `referensi_status_ta`
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
-- Struktur dari tabel `staf`
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
-- Struktur dari tabel `topik`
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
-- Dumping data untuk tabel `topik`
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
(73, 'LoremLorem', 'Lorem', 1, NULL, 10, '2017-05-15 00:15:19', 2, '2017-05-15 00:15:19', 0),
(70, 'Topik TA PLN', 'LOrem', NULL, 3, 10, '2017-05-05 00:03:00', 7, '2017-05-05 00:03:00', 0),
(66, 'K2', 'KKK', NULL, 3, 10, '2017-05-02 06:39:07', 7, '2017-05-02 06:39:07', 0),
(65, 'Shand2', 'Lorem', NULL, 3, 10, '2017-05-02 06:32:47', 7, '2017-05-02 06:32:47', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_akhir`
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
  `is_publish` int(1) DEFAULT NULL,
  `nilai_topik` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id_tugas_akhir`, `status_tugas_akhir`, `tgl_pengajuan`, `id_jenis_ta`, `id_mahasiswa`, `nilai_ta`, `created_at`, `id_maker`, `updated_at`, `judul_ta`, `id_topik`, `is_publish`, `nilai_topik`) VALUES
(23, '3', NULL, NULL, 4, NULL, '2017-04-04 18:48:42', 2, '2017-04-04 18:48:42', 'Lorem', 28, 1, NULL),
(25, '4', NULL, NULL, 5, NULL, '2017-04-04 18:48:42', 7, '2017-04-04 18:48:42', NULL, 25, 1, NULL),
(26, '3', NULL, NULL, 6, NULL, '2017-04-04 18:48:42', 2, '2017-04-04 18:48:42', NULL, 28, 1, NULL),
(102, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(103, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(104, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(105, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(106, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(107, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(108, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(109, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(110, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(111, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(112, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(113, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(114, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(115, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(116, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(117, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(118, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(119, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(120, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(121, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(122, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(123, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(124, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(125, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(126, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(127, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(128, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(129, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 1, NULL),
(130, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(131, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(132, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0, NULL),
(133, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(134, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(135, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0, NULL),
(136, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(137, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(138, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0, NULL),
(139, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(140, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(141, '3', NULL, NULL, 4, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', 'Lorem', 28, 0, NULL),
(142, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(143, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(144, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(145, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(146, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(147, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(148, '4', NULL, NULL, 5, NULL, '2017-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(149, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(150, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(151, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(152, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(153, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(154, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(155, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(156, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(157, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(158, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(159, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(160, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(161, '3', NULL, NULL, 6, NULL, '2017-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(162, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(163, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(164, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(165, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(166, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(167, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(168, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(169, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(170, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(171, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(172, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(173, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(174, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(175, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(176, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(177, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(178, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(179, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(180, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(181, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(182, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(183, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(184, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(185, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(186, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(187, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(188, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(189, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(190, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(191, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(192, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(193, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(194, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(195, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(196, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(197, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(198, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(199, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(200, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(201, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(202, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(203, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(204, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(205, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(206, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(207, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(208, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(209, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(210, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(211, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(212, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(213, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(214, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(215, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(216, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(217, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(218, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(219, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(220, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(221, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(222, '3', NULL, NULL, 4, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(223, '4', NULL, NULL, 5, NULL, '2016-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(224, '3', NULL, NULL, 6, NULL, '2016-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(225, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(226, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(227, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(228, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(229, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(230, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(231, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(232, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(233, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(234, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(235, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(236, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(237, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(238, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(239, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(240, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(241, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(242, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(243, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(244, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(245, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(246, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(247, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(248, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(249, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(250, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(251, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(252, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(253, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(254, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(255, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(256, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(257, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(258, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(259, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(260, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(261, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(262, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(263, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(264, '3', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(265, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(266, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(267, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(268, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(269, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(270, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(271, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(272, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(273, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(274, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(275, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(276, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(277, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(278, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(279, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(280, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(281, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(282, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(283, '3', NULL, NULL, 4, NULL, '2015-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(284, '4', NULL, NULL, 5, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(285, '4', NULL, NULL, 6, NULL, '2015-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(286, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(287, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(288, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(289, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(290, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(291, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(292, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(293, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(294, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(295, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(296, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(297, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(298, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(299, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(300, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(301, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(302, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(303, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(304, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(305, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(306, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(307, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(308, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(309, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(310, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(311, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(312, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(313, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(314, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(315, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(316, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(317, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(318, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(319, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(320, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(321, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(322, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(323, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(324, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(325, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(326, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(327, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(328, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(329, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(330, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(331, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(332, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(333, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(334, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(335, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(336, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(337, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(338, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(339, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(340, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(341, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(342, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(343, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(344, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(345, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(346, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(347, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(348, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(349, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(350, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(351, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(352, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(353, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(354, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(355, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(356, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(357, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(358, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(359, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(360, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(361, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(362, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(363, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(364, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(365, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(366, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(367, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(368, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(369, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(370, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(371, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(372, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(373, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(374, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(375, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(376, '3', NULL, NULL, 4, NULL, '2014-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(377, '4', NULL, NULL, 5, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(378, '4', NULL, NULL, 6, NULL, '2014-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(379, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(380, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(381, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(382, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(383, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(384, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(385, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(386, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(387, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(388, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(389, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(390, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(391, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(392, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(393, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(394, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(395, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(396, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(397, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(398, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(399, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(400, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 1, NULL),
(401, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(402, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 1, NULL),
(403, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(404, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(405, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(406, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(407, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(408, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(409, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(410, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(411, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(412, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(413, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(414, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(415, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(416, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(417, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(418, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(419, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(420, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(421, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(422, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(423, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(424, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(425, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(426, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(427, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(428, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(429, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(430, '3', NULL, NULL, 4, NULL, '2013-04-04 11:48:42', 2, '2017-04-04 11:48:42', NULL, 28, 0, NULL),
(431, '4', NULL, NULL, 5, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(432, '4', NULL, NULL, 6, NULL, '2013-04-04 11:48:42', 7, '2017-04-04 11:48:42', NULL, 25, 0, NULL),
(435, '10', '2017-05-15', 1, 1, NULL, '2017-05-15 00:15:33', 1, '2017-05-15 00:15:33', 'Lorem', 73, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(10) UNSIGNED NOT NULL,
  `nama_universitas` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_maker` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `nama_universitas`, `created_at`, `id_maker`, `updated_at`) VALUES
(1, 'Universitas Indonesia', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
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
-- Struktur dari tabel `user_role`
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
-- Indexes for table `dosen_penguji_topik`
--
ALTER TABLE `dosen_penguji_topik`
  ADD PRIMARY KEY (`id_penguji_topik`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `dosen_penguji_ta`
--
ALTER TABLE `dosen_penguji_ta`
  MODIFY `id_penguji_ta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `dosen_penguji_topik`
--
ALTER TABLE `dosen_penguji_topik`
  MODIFY `id_penguji_topik` int(10) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_hari` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hasil_ta`
--
ALTER TABLE `hasil_ta`
  MODIFY `id_hasil_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `id_industri` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jadwal_dosen`
--
ALTER TABLE `jadwal_dosen`
  MODIFY `id_jadwal_dosen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_ta`
--
ALTER TABLE `jenis_ta`
  MODIFY `id_jenis_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id_pengajuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
  MODIFY `id_topik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id_tugas_akhir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;
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
