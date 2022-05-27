-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 05:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startup`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `subject`, `pesan`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bunga', 'bungaelf@gmail.com', 'test', 'gajah itu gendut', '1', NULL, '2021-12-27 23:27:53', '2021-12-27 23:27:53'),
(2, 'bunga', 'bunga@gmail.com', 'GAJAH', 'GAJAH COMEL', '1', NULL, '2021-12-20 09:19:40', '2021-12-20 09:19:40'),
(3, 'xiangzo', 'xiabunga@gmail.com', 'halooo', 'ini adalah pesan yang panjang sepanjang belalai gajah yang gendut tapi tetep imut apalagi waktu masih kecil', '1', '2021-12-24 06:00:22', '2021-12-24 06:01:24', '2021-12-24 06:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `detail-produks`
--

CREATE TABLE `detail-produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail__products`
--

CREATE TABLE `detail__products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail__products`
--

INSERT INTO `detail__products` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 11, '/img/produk/cat3.png', '2021-12-27 09:39:30', '2021-12-27 09:39:30'),
(2, 11, '/img/produk/catt.png', '2021-12-27 09:39:30', '2021-12-27 09:39:30'),
(9, 12, '/img/produk/cat2.png', '2021-12-27 10:35:45', '2021-12-27 10:35:45'),
(10, 12, '/img/produk/cat3.png', '2021-12-27 10:35:45', '2021-12-27 10:35:45'),
(11, 12, '/img/produk/catt.png', '2021-12-27 10:35:45', '2021-12-27 10:35:45'),
(12, 13, '/img/produk/2.jpg', '2021-12-28 04:48:17', '2021-12-28 04:48:17'),
(13, 13, '/img/produk/E_FJcspVkAA9k-y.jpg', '2021-12-28 04:48:17', '2021-12-28 04:48:17'),
(14, 14, '/img/produk/1.jpg', '2021-12-28 05:53:57', '2021-12-28 05:53:57'),
(15, 14, '/img/produk/E_FJcspVkAA9k-y.jpg', '2021-12-28 05:53:57', '2021-12-28 05:53:57'),
(16, 15, '/img/produk/WhatsApp Image 2021-12-28 at 8.08.42 PM (1).jpeg', '2021-12-28 06:41:49', '2021-12-28 06:41:49'),
(17, 16, '/img/produk/L-5.jpg', '2021-12-28 06:42:10', '2021-12-28 06:42:10'),
(18, 16, '/img/produk/L-4.jpg', '2021-12-28 06:42:37', '2021-12-28 06:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_pages2s`
--

CREATE TABLE `landing_pages2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visi` text COLLATE utf8_unicode_ci NOT NULL,
  `misi` text COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ig` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `landing_pages2s`
--

INSERT INTO `landing_pages2s` (`id`, `cta`, `visi`, `misi`, `no_hp`, `email`, `ig`, `fb`, `alamat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '<h1>Solusi RisTI</h1>', '<p>Sebagai penyedia alat berbasis IoT yang dapat menyelesaikan permasalahan di masyarakat</p>', '<ol>\r\n	<li>Memberikan layanan prima dan solusi dibidang IT yang bernilai tambah kepada pelanggan.</li>\r\n	<li>Membuka lapangan kerja selebar &ndash; lebarnya bagi masyarakat Indonesia.</li>\r\n	<li>Meningkatkan kepedulian dan tanggung jawab terhadap lingkungan dan sosial</li>\r\n</ol>', '123', 'email@gmail.com', 'startup', 'startup', '<p>Jl. Sekolahan No.1, Kuthuk, Sidokare, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61214</p>', '<p>Kami memiliki beberapa produk. Produk pertama kami adalah Sistem Pendeteksi Kualitas Air Kolam Koi, untuk produk ini yang terbantu adalah masyarakat pembudidaya ikan koi.</p>\r\n\r\n<p>Produk ke 2 kami adalah Sistem Pendukung Keputusan Penentuan Tanaman pangan, untuk produk ini yang terbantu adalah petani.</p>', NULL, '2021-12-28 07:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_16_043517_create_landing_pages_table', 1),
(6, '2021_12_16_050724_create_teams_table', 1),
(7, '2021_12_16_050734_create_products_table', 1),
(8, '2021_12_16_050743_create_contacts_table', 1),
(9, '2021_12_18_082046_delete_coloumn', 1),
(10, '2021_12_18_082316_create_landing_pages2s_table', 1),
(11, '2021_12_18_083012_ubah_field', 1),
(12, '2021_12_18_083038_tambah_field', 1),
(13, '2021_12_18_090705_add-team', 1),
(14, '2021_12_20_160713_add-contact', 2),
(15, '2021_12_24_132808_add-landpage', 3),
(16, '2021_12_24_132939_add-landing', 4),
(17, '2021_12_24_133047_add-alamat', 5),
(18, '2021_12_24_133536_create_detail-produks_table', 6),
(19, '2021_12_24_162949_add-product', 7),
(20, '2021_12_24_173230_detail_produk', 8),
(21, '2021_12_24_173440_create_detail__products_table', 8),
(22, '2021_12_28_140007_ubah-deskripsi', 9),
(23, '2021_12_28_140104_hapus-deskripsi', 10),
(24, '2021_12_28_140439_ubah-desk', 11),
(25, '2021_12_28_140723_drop-desk', 11),
(26, '2021_12_28_140818_drop-deskripsi', 12),
(27, '2021_12_28_140919_deskripsi-hapus', 12),
(28, '2021_12_28_141110_deskripsi-tambah', 12),
(29, '2021_12_28_141144_deskripsi-hapus2', 13),
(30, '2021_12_28_141234_deskripsi-tambah2', 14),
(31, '2021_12_28_163636_create_trackers_table', 15),
(32, '2021_12_28_164149_create_visitors_table', 15),
(33, '2021_12_28_164954_hapus-jumlah', 16),
(34, '2021_12_28_165046_add-jumlah', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `slug`, `foto`, `deskripsi`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'kolam koi', 'kolam-koi', '', '<p>koi berenang</p>', 'https://www.dailymotion.com/video/x7p3lvl', '2021-12-24 09:57:42', '2021-12-27 09:36:13', '2021-12-27 09:36:13'),
(4, 'koki', 'koki', '', '<p>koki berenang</p>', 'https://www.dailymotion.com/video/x7p3lvl', '2021-12-24 10:06:22', '2021-12-27 09:36:57', '2021-12-27 09:36:57'),
(5, 'cupang', 'cupang', '/img/produk/2021-12-24170828.png', '<p>cupang berenang</p>', 'https://www.instagram.com/p/B0-yKfCAOQN/', '2021-12-24 10:08:28', '2021-12-27 09:37:01', '2021-12-27 09:37:01'),
(6, 'lobster', 'lobster', '', '<p>lobster jelek</p>', 'https://www.dailymotion.com/video/x7xkr6y', '2021-12-24 10:13:35', '2021-12-27 09:37:03', '2021-12-27 09:37:03'),
(7, 'udang', 'udang', '', '<p>udang udang udang</p>', 'https://www.instagram.com/p/B0-yKfCAOQN/', '2021-12-24 10:14:51', '2021-12-27 09:37:05', '2021-12-27 09:37:05'),
(8, 'kokiii', 'kokiii', '', '<p>koki gendut</p>', 'https://www.dailymotion.com/video/x7p3lvl', '2021-12-24 10:15:34', '2021-12-27 09:37:07', '2021-12-27 09:37:07'),
(9, 'koi', 'koi', '', '<p>koi gendut</p>', 'https://www.dailymotion.com/video/x7p3lvl', '2021-12-24 10:18:32', '2021-12-27 09:37:09', '2021-12-27 09:37:09'),
(10, 'fds', 'fds', '/img/produk/2021-12-24172057.png', '<p>dfsa</p>', 'https://www.dailymotion.com/video/x7p3lvl', '2021-12-24 10:20:57', '2021-12-27 09:37:12', '2021-12-27 09:37:12'),
(11, '123', '123', '/img/produk/2021-12-24172213.png', '<h3 style=\"color:#aaaaaa;font-style:italic;\">fdas</h3>', 'https://www.instagram.com/p/B0-yKfCAOQN/', '2021-12-24 10:22:13', '2021-12-27 09:39:53', '2021-12-27 09:39:53'),
(12, 'Koi', 'koi', '/img/produk/2021-12-27164022.png', '<p>Kolam Koi</p>', 'https://www.dailymotion.com/video/x7p3lvl', '2021-12-27 09:40:22', '2021-12-28 04:30:04', '2021-12-28 04:30:04'),
(13, 'Sistem pendeteksi kualitas air kolam koi berbasis IoT', 'sistem-pendeteksi-kualitas-air-kolam-koi-berbasis-iot', '/img/produk/2021-12-28114803.jpg', '<p>Sistem pendeteksi kualitas air kolam koi berbasis IoT adalah sebuah alat yang dapat membantu pembudidaya ikan koi untuk memonitor kolam koi dan kualitas air kolam sehingga dapat mecegah gagal panen.</p>', 'https://www.youtube.com/watch?v=sW0Pul3-mSY', '2021-12-28 04:48:03', '2021-12-28 05:54:08', '2021-12-28 05:54:08'),
(14, 'Sistem Pendeteksi Kualitas Air Kolam Ikan Koi berbasis IoT', 'sistem-pendeteksi-kualitas-air-kolam-ikan-koi-berbasis-iot', '/img/produk/2021-12-28125338.jpg', '<p>Sistem pendeteksi kualitas air kolam koi berbasis IoT adalah sebuah alat yang dapat membantu pembudidaya ikan koi untuk memonitor kolam koi dan kualitas air kolam sehingga dapat mecegah gagal panen.</p>\r\n\r\n<p>Alat ini adalah solusi dan kemudahan kepada pembudidaya ikan koi agar tingkat kegagalan dalam budidaya ikan koi menurun.</p>', 'https://www.youtube.com/watch?v=sW0Pul3-mSY', '2021-12-28 05:53:38', '2021-12-28 06:32:06', '2021-12-28 06:32:06'),
(15, 'Sistem Pendeteksi Kualitas Air Kolam Ikan Koi berbasis IoT', 'sistem-pendeteksi-kualitas-air-kolam-ikan-koi-berbasis-iot', '/img/produk/2021-12-28132420.jpeg', '<p>Sistem pendeteksi kualitas air kolam koi berbasis IoT adalah sebuah alat yang dapat membantu pembudidaya ikan koi untuk memonitor kolam koi dan kualitas air kolam sehingga dapat mecegah gagal panen.</p>\r\n\r\n<p>Alat ini adalah solusi dan kemudahan kepada pembudidaya ikan koi agar tingkat kegagalan dalam budidaya ikan koi menurun.</p>', 'https://www.youtube.com/watch?v=sW0Pul3-mSY', '2021-12-28 06:24:20', '2021-12-28 06:24:20', NULL),
(16, 'Sistem Pendukung Keputusan Penentuan Tanaman Pangan', 'sistem-pendukung-keputusan-penentuan-tanaman-pangan', '/img/produk/2021-12-28133837.jpg', '<p>Sistem pendukung keputusan membantu pemilihan tanaman pangan berdasarkan karakteristik lahan yang diukur menggunakan sensor pada alat pendeteksi karakteristik lahan dan menggunakan metode Fuzzy Multi-Criteria Decision Making.</p>', 'https://www.youtube.com/watch?v=Xmx17EGCHug', '2021-12-28 06:38:37', '2021-12-28 06:38:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `posisi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wa` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `ig` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `nama`, `slug`, `email`, `posisi`, `wa`, `ig`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'bunga', 'bunga', 'bunga@gmail.com', 'gcjhvfn', '083723792322', 'xiangzo', '/img/tim/2021-12-18131418.png', '2021-12-18 05:23:34', '2021-12-28 00:09:51', '2021-12-28 00:09:51'),
(4, 'gajah', 'gajah', 'gajahgendut@gmail.com', 'moodbooster', '081232264475', 'gajahgendut', '/img/tim/2021-12-18184012.png', '2021-12-18 11:39:41', '2021-12-28 00:09:53', '2021-12-28 00:09:53'),
(5, 'Ryan Hartadi', 'ryan-hartadi', 'ryanhartadi@gmail.com', 'General Manager', '081359652164', 'https://instagram.com', '/img/tim/2021-12-28071142.png', '2021-12-28 00:11:42', '2021-12-28 00:11:42', NULL),
(6, 'Octavian Yudha', 'octavian-yudha', 'octavianyudha@gmail.com', 'Production Engineering Manager', '081252989930', 'https://instagram.com', '/img/tim/2021-12-28071256.png', '2021-12-28 00:12:56', '2021-12-28 00:12:56', NULL),
(7, 'Bunga Prasetya Dwi Ulul Azmi', 'bunga-prasetya-dwi-ulul-azmi', 'bungaelf@gmail.com', 'Finance Manager', '083111693588', 'https://instagram.com/xiangzo_', '/img/tim/2021-12-28071653.png', '2021-12-28 00:14:41', '2021-12-28 00:16:53', NULL),
(8, 'Satsa Ratri Hastutik', 'satsa-ratri-hastutik', 'bernadeta252@gmail.com', 'Marketing Manager', '081339011430', 'https://instagram.com', '/img/tim/2021-12-28071757.png', '2021-12-28 00:17:57', '2021-12-28 00:17:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trackers`
--

CREATE TABLE `trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bunga', 'bungaelf@gmail.com', NULL, '$2y$10$cI6zSPSm9ItHxzGRt2ex6.NfehSKg6MC6BBNm0yrnpHRB22T6BhVa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-12-28 09:52:25', '2021-12-28 09:52:25'),
(2, '1', '2021-12-28 09:52:43', '2021-12-28 09:52:43'),
(3, '1', '2021-12-28 22:59:47', '2021-12-28 22:59:47'),
(4, '1', '2021-12-28 22:59:48', '2021-12-28 22:59:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail-produks`
--
ALTER TABLE `detail-produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail__products`
--
ALTER TABLE `detail__products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `landing_pages2s`
--
ALTER TABLE `landing_pages2s`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_email_unique` (`email`);

--
-- Indexes for table `trackers`
--
ALTER TABLE `trackers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trackers_ip_unique` (`ip`),
  ADD UNIQUE KEY `trackers_visit_date_unique` (`visit_date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail-produks`
--
ALTER TABLE `detail-produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail__products`
--
ALTER TABLE `detail__products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing_pages2s`
--
ALTER TABLE `landing_pages2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trackers`
--
ALTER TABLE `trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
