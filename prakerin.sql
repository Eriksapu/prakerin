-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 03:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `id_kecamatan`, `nama_desa`, `created_at`, `updated_at`) VALUES
(1, 1, 'sadang pasantren', '2021-02-02 00:18:57', '2021-02-02 00:18:57'),
(2, 2, 'sadang sari', '2021-02-02 00:19:05', '2021-02-02 00:19:05'),
(5, 5, 'melutuss', '2021-02-12 21:44:43', '2021-02-12 21:44:43'),
(6, 6, 'iya gatau', '2021-02-14 23:22:46', '2021-02-14 23:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kasuses`
--

CREATE TABLE `kasuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_rw` int(10) UNSIGNED NOT NULL,
  `reaktif` int(11) NOT NULL,
  `positif` int(11) NOT NULL,
  `sembuh` int(11) NOT NULL,
  `meninggal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kasuses`
--

INSERT INTO `kasuses` (`id`, `id_rw`, `reaktif`, `positif`, `sembuh`, `meninggal`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 2, 1256, 1111, 33333, 11111, '2021-02-04', NULL, '2021-02-12 21:37:00'),
(6, 5, 1000, 9000, 5000, 4000, '2021-02-13', NULL, NULL),
(7, 1, 1500, 3500, 3000, 7000, '2021-02-13', NULL, NULL),
(8, 6, 1200, 9000, 5000, 4500, '2021-02-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kota` int(10) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `id_kota`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'margahayu', '2021-02-02 00:18:34', '2021-02-02 00:18:34'),
(2, 2, 'pendopo', '2021-02-02 00:18:41', '2021-02-12 21:50:57'),
(5, 6, 'gununggg', '2021-02-12 21:43:58', '2021-02-12 21:43:58'),
(6, 7, 'sama gatau', '2021-02-14 23:22:30', '2021-02-14 23:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `kode_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `id_provinsi`, `kode_kota`, `nama_kota`, `created_at`, `updated_at`) VALUES
(1, 1, '21313', 'bandung', '2021-02-02 00:18:09', '2021-02-02 00:18:09'),
(2, 2, '1019675', 'magelang', '2021-02-02 00:18:17', '2021-02-02 00:18:17'),
(6, 5, '0998', 'BROMO', '2021-02-12 21:43:41', '2021-02-12 21:43:41'),
(7, 6, '2212', 'gatau', '2021-02-14 23:22:16', '2021-02-14 23:22:16');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_14_033615_create_provinsis_table', 1),
(5, '2021_01_14_033703_create_kotas_table', 1),
(6, '2021_01_14_033753_create_kecamatans_table', 1),
(7, '2021_01_14_033816_create_desas_table', 1),
(8, '2021_01_14_033842_create_rws_table', 1),
(9, '2021_01_14_033928_create_kasuses_table', 1),
(10, '2021_02_01_092132_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id`, `kode_provinsi`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, '1111', 'jawa barat', '2021-02-02 00:17:35', '2021-02-02 00:17:35'),
(2, '2222', 'jawa tengah', '2021-02-02 00:17:46', '2021-02-02 00:17:46'),
(5, '13321', 'jawa timur', '2021-02-12 21:43:07', '2021-02-12 21:43:07'),
(6, '1010', 'Aceh', '2021-02-14 23:21:52', '2021-02-14 23:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `rws`
--

CREATE TABLE `rws` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_desa` int(10) UNSIGNED NOT NULL,
  `nama_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rws`
--

INSERT INTO `rws` (`id`, `id_desa`, `nama_rw`, `created_at`, `updated_at`) VALUES
(1, 1, '07', '2021-02-02 00:19:21', '2021-02-02 00:19:21'),
(2, 2, '09', '2021-02-02 00:19:30', '2021-02-02 00:19:30'),
(5, 5, '45', '2021-02-12 21:44:57', '2021-02-12 21:44:57'),
(6, 6, '009', '2021-02-14 23:22:59', '2021-02-14 23:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lada', 'lada@gmail.com', NULL, '$2y$10$fLv5FIYtlneUHABxqTUXlOlWR/VBr5Yoyot/BbMstxECC.PQzTPe2', NULL, '2021-02-02 00:17:18', '2021-02-02 00:17:18'),
(2, 'erik', 'erikk@gmail.com', '2021-02-03 06:31:38', 'erik11111', NULL, NULL, NULL),
(3, 'sehah', 'sehah@gmail.com', NULL, '$2y$10$ttgEYdp16eePQ2yBY66R8.yLhjmbtfNZuZqYAoAmEupW7ODhQQxx6', NULL, '2021-02-02 23:38:38', '2021-02-02 23:38:38'),
(4, 'halo', 'halo@gmail.com', NULL, '$2y$10$/saQKmr.Z4i4fZZ2pZ.g5.kuPsGghdpXqtAdSwU5Y8dI5hDlbzlDW', NULL, '2021-02-03 23:24:41', '2021-02-03 23:24:41'),
(5, 'esa', 'esa@gmail.com', NULL, '$2y$10$v3KH0Jr1OHo71GuiAKyKAO7YjMv79KZGCCYGqmflyA8GD2TGfpeF.', NULL, '2021-02-04 23:52:57', '2021-02-04 23:52:57'),
(6, 'eriksaputraaja', 'eriksaputraaja@gmail.com', NULL, '$2y$10$GkXcZwccV8xY2dsVcsrMd.BheqSGeD2T8Zwt1its4U83ZiHTC./Ou', NULL, '2021-02-12 19:43:33', '2021-02-12 19:43:33'),
(7, 'esa', 'esa1@gmail.com', NULL, '$2y$10$8KZHt0w.n7kSjnElr7ckC.Tsd2UoFaIH5XAvDG1hPs6hv04mvPzO6', NULL, '2021-02-14 23:19:39', '2021-02-14 23:19:39'),
(8, 'erik', 'erik12@gmail.com', NULL, '$2y$10$RgWuBPlhnMYrhI88rd1kIOzdq.694Fhyn9/p5z7HZqXxha1D4r/Wy', NULL, '2021-02-23 17:59:09', '2021-02-23 17:59:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desas_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kasuses`
--
ALTER TABLE `kasuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasuses_id_rw_foreign` (`id_rw`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatans_id_kota_foreign` (`id_kota`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kotas_id_provinsi_foreign` (`id_provinsi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rws`
--
ALTER TABLE `rws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rws_id_desa_foreign` (`id_desa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasuses`
--
ALTER TABLE `kasuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rws`
--
ALTER TABLE `rws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `desas`
--
ALTER TABLE `desas`
  ADD CONSTRAINT `desas_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kasuses`
--
ALTER TABLE `kasuses`
  ADD CONSTRAINT `kasuses_id_rw_foreign` FOREIGN KEY (`id_rw`) REFERENCES `rws` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD CONSTRAINT `kecamatans_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kotas`
--
ALTER TABLE `kotas`
  ADD CONSTRAINT `kotas_id_provinsi_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rws`
--
ALTER TABLE `rws`
  ADD CONSTRAINT `rws_id_desa_foreign` FOREIGN KEY (`id_desa`) REFERENCES `desas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
