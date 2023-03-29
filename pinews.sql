-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 03:56 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marisha`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `sub_judul_berita` varchar(255) NOT NULL,
  `short_desc_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `lokasi_berita` varchar(255) NOT NULL,
  `jumlah_berita_dibaca` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_sub_kategori`, `id_users`, `judul_berita`, `sub_judul_berita`, `short_desc_berita`, `isi_berita`, `foto_berita`, `lokasi_berita`, `jumlah_berita_dibaca`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, 1, 'Puma Minta Maaf 4 Member NCT 127 Alami Kecelakaan saat Syuting Iklan', 'NCT 127 mengalami kecelakaan saat syuting iklan', 'NCT 127 belum lama ini menjalani syuting iklan untuk brand Puma', 'NCT 127 belum lama ini menjalani syuting iklan untuk brand Puma. Namun ada kesalahan di set yang menyebabkan jungle gym setinggi 2 meter jatuh dan melukai empat orang member. Insiden tersebut terjadi di lokasi syuting pada 9 Desember 2022. Johnny, Jaehyun, dan Jungwoo langsung dilarikan ke rumah sakit usai mengalami cedera, sementara Taeil memilih untuk pulang ke rumah dan beristirahat. Setelah menjalani pemeriksaan di rumah sakit, ditemukan luka memar pada Johnny, Jaehyun, dan Jungwoo. Untungnya, ketiga member tidak mengalami cedera serius', '1', 'Seoul, Korea', 1000, '2022-12-19 19:50:16', '2023-01-17 20:34:33', '2023-01-17 20:34:33'),
(2, 4, 2, 'Tanggapan Inul Daratista soal Gibran Rakabuming Pakai Kaus Bergambar Wajahnya dan Adam Suseno', 'Tanggapan Inul Daratista soal Gibran Rakabuming Pakai Kaus Bergambar Wajahnya dan Adam Suseno sebelum Midodareni Kaesang Pangarep', 'Di tengah ramainya pemberitaan tentang pernikahan Kaesang Pangarep dan Erina Gudono, sang kakak yaitu Gibran Rakabuming Raka, ikut mendapat sorotan masyarakat.', 'Di tengah ramainya pemberitaan tentang pernikahan Kaesang Pangarep dan Erina Gudono, sang kakak yaitu Gibran Rakabuming Raka, ikut mendapat sorotan masyarakat. Gara-garanya adalah beredar potret saat Gibran Rakabuming akan didandani sebelum menjalani prosesi Midodareni. Tampak Gibran Rakabuming mengenakan kaus bertuliskan \"Inul Adam\" lengkap dengan gambarnya dan keterangan \"couple goals\". Mendadak sontak hal itu menjadi perbincangan warganet.', '1', 'Jakarta', 500, '2022-12-19 19:59:15', '2023-01-25 00:15:23', '2023-01-25 00:15:23'),
(3, 12, 1, 'Taylor Swift Debut Jadi Sutradara Film Panjang', 'Taylor Swift Debut Jadi Sutradara Film Panjang, Naskah Ditulis Sendiri', 'Taylor Swift dikenal sebagai penyanyi yang mempunyai segudang prestasi bahkan di kancah global.', 'Taylor Swift pernah menjadi sutradara untuk film pendeknya bertajuk All To Well: The Short Film.', '1', 'Jakarta', 2033, '2022-12-19 20:03:44', '2023-01-11 21:52:22', NULL),
(4, 0, 0, 'tetew cepmek', 'tetew', 'tetew', 'tetew', 'tetew', 'tetew', 1, '2023-01-12 07:48:21', '2023-01-11 21:12:48', NULL),
(5, 12, 1, 'Taylor Swift Debut Jadi Sutradara', 'Taylor Swift Debut Jadi Sutradara Film Panjang', 'Taylor Swift dikenal sebagai penyanyi yang mempunyai segudang prestasi bahkan di kancah global.', 'Baru-baru ini beredar kabar penyanyi 33 tahun itu akan melebarkan sayapnya menjadi seorang sutradara film.', '1', 'Jakarta', 209, '2023-01-11 20:49:23', '2023-01-11 21:40:01', NULL),
(6, 3, 3, 'tetew', 'tetew', 'tetew', 'tetew', '1', 'Jakarta, Indonesia', 20331, '2023-01-11 22:05:44', '2023-01-12 00:55:59', '2023-01-12 00:55:59'),
(7, 3, 3, 'tetew', 'tetew', 'tetew', 'tetew', '1', 'Jakarta, Indonesia', 20331, '2023-01-17 20:27:10', '2023-01-17 20:27:10', NULL),
(8, 2, 2, 'test', 'test', 'test', 'test', 'test', 'test', 1, '2023-01-17 20:53:56', '2023-01-17 20:53:56', NULL),
(9, 1, 7, 'cepmek', 'model cepmek', 'dth', 'thdf', 'test', 'test', 12, '2023-01-24 23:06:26', '2023-01-24 23:06:26', NULL),
(10, 15, 7, 'cepmek', 'model cepmek', 'rg', 'tdfbh', 'DgOA0lmC7DlAWkBibj0po3tcX8lgGyYrXSt9Kxir.png', 'kamu nanya?', 1, '2023-01-24 23:15:36', '2023-01-24 23:15:36', NULL),
(11, 5, 9, 'test', 'test', 'test', 'test', 'vRshUgbk3hJyklZQX8nEK6Mtce4W9KHzIX1IIDND.jpg', 'Jakarta', 12, '2023-01-25 00:19:45', '2023-01-25 00:19:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE `hashtag` (
  `id_hashtag` int(11) NOT NULL,
  `nama_hashtag` varchar(35) NOT NULL,
  `keterangan_hashtag` varchar(35) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hashtag`
--

INSERT INTO `hashtag` (`id_hashtag`, `nama_hashtag`, `keterangan_hashtag`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'NCT 127', 'Informasi seputar NCT 127', '2022-12-19 19:28:10', '2022-12-19 19:28:10', NULL),
(2, 'Inul', 'Informasi seputar Inul Daratista', '2022-12-19 19:28:32', '2022-12-19 19:28:32', NULL),
(3, 'Taylor Swift', 'Informasi seputar Taylor Swift', '2022-12-19 19:28:59', '2022-12-19 19:28:59', NULL),
(4, 'teteww', 'Informasi seputar tetew', '2023-01-11 19:18:32', '2023-01-11 20:01:44', NULL),
(11, 'tetew lagi lagi lagi', 'tetetetetetetewawsehgyft', '2023-01-11 20:10:01', '2023-01-11 20:12:46', '2023-01-11 20:12:46'),
(12, 'tetewww', 'Informasi seputar tetew', '2023-01-11 20:15:25', '2023-01-11 20:15:25', NULL),
(13, 'tetewww 1234', 'Informasi seputar tetew 1234', '2023-01-11 20:28:52', '2023-01-24 21:48:08', '2023-01-24 21:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `hashtag_list`
--

CREATE TABLE `hashtag_list` (
  `id_hashtag_list` int(25) NOT NULL,
  `id_berita` int(15) NOT NULL,
  `id_hashtag` int(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hashtag_list`
--

INSERT INTO `hashtag_list` (`id_hashtag_list`, `id_berita`, `id_hashtag`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2022-12-19 20:06:02', '2022-12-19 20:07:42', '2022-12-19 20:07:42'),
(2, 1, 1, '2022-12-19 20:06:08', '2022-12-19 20:06:08', NULL),
(3, 2, 2, '2022-12-19 20:06:17', '2022-12-19 20:06:17', NULL),
(4, 3, 3, '2022-12-19 20:06:26', '2022-12-19 20:06:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `judul_iklan` varchar(100) NOT NULL,
  `ukuran_iklan` varchar(50) NOT NULL,
  `posisi_iklan` varchar(50) NOT NULL,
  `gambar_iklan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `id_users`, `judul_iklan`, `ukuran_iklan`, `posisi_iklan`, `gambar_iklan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Kopi Luwak Belang', '12', 'Tengah', '1', '2022-12-19 19:30:49', '2022-12-19 19:30:49', NULL),
(2, 3, 'Sarung Gajah Berdiri', '20', 'Tengah', '1', '2022-12-19 19:31:15', '2022-12-19 19:31:15', NULL),
(3, 3, 'Skincare Kucing', '15', 'Tengah', '1', '2022-12-19 19:32:43', '2022-12-19 19:32:43', NULL),
(4, 1, 'Susu belalang', '127', 'tengah', '14', '2023-01-12 07:46:32', '2023-01-17 21:14:01', NULL),
(5, 2, 'Skincare sapi', '15', 'Tengah', '1', '2023-01-17 20:57:58', '2023-01-17 21:16:01', '2023-01-17 21:16:01'),
(6, 3, 'test', '3', 'test', 'test', '2023-01-17 20:58:42', '2023-01-17 21:14:53', '2023-01-17 21:14:53'),
(7, 6, 'ciki cinta', '15', 'test', 'w7GrzbR58ScgzppcBCjn5xD1pddsOmgy1UXkTC0a.png', '2023-01-24 23:58:49', '2023-01-24 23:58:49', NULL),
(8, 2, 'Susu belalang', '30', 'tengah', 'Nki4833eILKKCEZkekaYPHoFw5l21ZxSEQU3CSAj.jpg', '2023-01-25 00:18:03', '2023-01-25 00:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL,
  `keterangan_kategori` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Populer', 'Informasi seputar musik yang sedang populer', NULL, NULL, NULL),
(2, 'POP', 'Informasi seputar musik POP', NULL, NULL, NULL),
(3, 'Dangdut', 'Informasi seputar musik dangdut', NULL, NULL, NULL),
(4, 'K-POP', 'Informasi seputar musik K-Pop', NULL, NULL, NULL),
(10, 'Internasional', 'Informasi seputar musik internasional', NULL, NULL, NULL),
(11, 'Test tetew', 'Tester tester', '2023-01-11 07:48:21', '2023-01-11 02:55:01', '2023-01-11 02:55:01'),
(12, 'Jazz', 'Informasi seputar musik Jazz', '2023-01-11 01:01:56', '2023-01-11 01:01:56', NULL),
(13, 'Klasik beut', 'Musik Klasik', '2023-01-11 01:20:37', '2023-01-11 20:06:46', NULL),
(14, 'Klasik', 'Musik Klasik', '2023-01-11 01:20:53', '2023-01-11 02:56:53', '2023-01-11 02:56:53'),
(15, 'Klasik', 'Musik Klasik', '2023-01-11 01:33:15', '2023-01-11 02:56:13', '2023-01-11 02:56:13'),
(16, 'Tetew', 'Teteeeeeeeeewwww', '2023-01-11 01:40:41', '2023-01-11 02:57:10', '2023-01-11 02:57:10'),
(17, 'Tetew', 'Tetew Tetew', '2023-01-11 01:44:14', '2023-01-11 02:48:39', '2023-01-11 02:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_berita`
--

CREATE TABLE `komentar_berita` (
  `id_komentar_berita` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `isi_komentar` varchar(255) NOT NULL,
  `rating_komentar` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar_berita`
--

INSERT INTO `komentar_berita` (`id_komentar_berita`, `id_berita`, `id_pengunjung`, `isi_komentar`, `rating_komentar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 4, 'Semoga member cepat membaik:(', '125', '2022-12-19 20:13:41', '2022-12-19 20:13:41', NULL),
(2, 3, 1, 'Keren banget', '121', '2022-12-19 20:14:37', '2022-12-19 20:14:37', NULL),
(3, 2, 3, 'wkwk kocak banget', '113', '2022-12-19 20:15:06', '2022-12-19 20:15:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama_pengunjung` varchar(35) NOT NULL,
  `email_pengunjung` varchar(100) NOT NULL,
  `telepon_pengunjung` bigint(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama_pengunjung`, `email_pengunjung`, `telepon_pengunjung`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nurul', 'nuyuy@gmail.com', 87612345678, '125790', '2022-12-19 19:24:31', '2022-12-19 19:24:31', NULL),
(2, 'Putri', 'putri@gmail.com', 81234567890, '098234', '2022-12-19 19:25:11', '2022-12-19 19:25:11', NULL),
(3, 'Firda', 'kakfirda@gmail.com', 83456873209, '456712', '2022-12-19 19:25:57', '2022-12-19 19:25:57', NULL),
(4, 'Marisha', 'kakmar@gmail.com', 83412568730, '4567121234', '2022-12-19 20:12:15', '2022-12-19 20:12:15', NULL),
(5, 'dika', 'dikultetew@gmail.com', 8971212343456, '12345678', NULL, '2023-01-12 00:05:14', '2023-01-12 00:05:14'),
(6, 'tetew', 'tetew@gmail.com', 83412568731, '111111111111111', '2023-01-11 23:49:25', '2023-01-12 00:05:01', '2023-01-12 00:05:01'),
(7, 'zilong11', 'zilong72@gmail.com', 898767545322, '1111111', '2023-01-11 23:50:06', '2023-01-12 00:03:50', NULL),
(8, 'zilong', 'zilong72@gmail.com', 8677531346535, '123456', '2023-01-12 00:43:56', '2023-01-12 00:43:56', NULL),
(9, 'test', 'test@gmail.com', 897898789876, '1234', '2023-01-17 20:24:21', '2023-01-17 20:54:46', '2023-01-17 20:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_baca`
--

CREATE TABLE `riwayat_baca` (
  `id_riwayat_baca` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `id_berita` bigint(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_baca`
--

INSERT INTO `riwayat_baca` (`id_riwayat_baca`, `id_pengunjung`, `id_berita`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2022-12-19 20:09:20', '2022-12-19 20:09:20', NULL),
(2, 3, 1, '2022-12-19 20:09:41', '2022-12-19 20:09:41', NULL),
(3, 2, 2, '2022-12-19 20:09:54', '2022-12-19 20:09:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_sub_kategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_sub_kategori` varchar(35) NOT NULL,
  `keterangan_sub_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub_kategori`, `id_kategori`, `nama_sub_kategori`, `keterangan_sub_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Penyanyi POP', 'Informasi seputar penyanyi POP ', NULL, NULL, NULL),
(2, 2, 'Konser dan Festival POP', 'Informasi seputar konser dan festival musik POP', NULL, NULL, NULL),
(3, 3, 'Penyanyi Dangdut', 'Informasi seputar penyanyi dangdut', NULL, NULL, NULL),
(4, 3, 'Konser dan Festival Dangdut', 'Informasi seputar konser dan festival dangdut', NULL, NULL, NULL),
(5, 4, 'Penyanyi K-POP', 'Informasi seputar penyanyi K-POP', NULL, NULL, NULL),
(9, 4, 'Konser dan Festival K-POP', 'Informasi seputar konser dan festival K-POP', NULL, NULL, NULL),
(10, 10, 'Penyanyi Internasional', 'Informasi seputar penyanyi internasional', NULL, NULL, NULL),
(11, 10, 'Konser dan Festival Internasional', 'Informasi seputar konser dan festival internasional', NULL, NULL, NULL),
(14, 10, 'tetew', 'tetew', NULL, NULL, NULL),
(15, 4, 'teteww', 'tetetew', '2023-01-24 22:35:45', '2023-01-24 22:35:45', NULL),
(16, 2, 'tetewwwww', 'wert', '2023-01-24 22:40:30', '2023-01-24 22:41:12', '2023-01-24 22:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `telepon` bigint(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_users` varchar(100) NOT NULL,
  `level_users` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama`, `telepon`, `email`, `password`, `foto_users`, `level_users`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Marisha', 89712346789, 'marisha@gmail.com', '123456', '1', '5', '2022-12-19 19:19:08', '2022-12-19 19:19:08', NULL),
(2, 'Eva', 89712097826, 'eva@gmail.com', '09876', '1', '3', '2022-12-19 19:21:15', '2022-12-19 19:21:15', NULL),
(3, 'Zazil', 89945097826, 'zilong@gmail.com', '09876213', '1', '2', '2022-12-19 19:21:59', '2022-12-19 19:21:59', NULL),
(4, 'test test', 123, 'test@gmail.com', 'test12', 'test', '1', NULL, '2023-01-17 21:55:08', '2023-01-17 21:55:08'),
(5, 'Uyu Aya', 89945097826, 'uyu@gmail.com', '1245780', '1', '2', '2023-01-17 21:27:00', '2023-01-17 21:56:02', '2023-01-17 21:56:02'),
(6, 'uyu', 89655231653, 'uyu@gmail.com', '123456', 'uyu', '5', '2023-01-17 22:06:17', '2023-01-17 22:06:17', NULL),
(7, 'tetew', 81874387165, 'tetew@gmail.com', '67890', 'tetew', '90', '2023-01-17 22:06:48', '2023-01-17 22:06:48', NULL),
(8, 'kiming', 62876543098123, 'kiming@gmail.com', '123456', '9m2xbK7Gf0sKwRhI6zptx7iQ6mKVF2RRNRVvGxJm.png', '90', '2023-01-25 00:09:12', '2023-01-25 00:09:12', NULL),
(9, 'inul', 6280099887766, 'test@gmail.com', '6789', '616wrpoPmiifPUYr7Ckb6mMnaZKBxPKDn6KN5efB.png', '11', '2023-01-25 00:13:12', '2023-01-25 00:13:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`id_hashtag`);

--
-- Indexes for table `hashtag_list`
--
ALTER TABLE `hashtag_list`
  ADD PRIMARY KEY (`id_hashtag_list`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  ADD PRIMARY KEY (`id_komentar_berita`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `riwayat_baca`
--
ALTER TABLE `riwayat_baca`
  ADD PRIMARY KEY (`id_riwayat_baca`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hashtag`
--
ALTER TABLE `hashtag`
  MODIFY `id_hashtag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hashtag_list`
--
ALTER TABLE `hashtag_list`
  MODIFY `id_hashtag_list` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  MODIFY `id_komentar_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwayat_baca`
--
ALTER TABLE `riwayat_baca`
  MODIFY `id_riwayat_baca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
