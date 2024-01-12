-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 10:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodiversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lop_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop_latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phylum_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `lop_vn`, `lop_latin`, `description`, `slug`, `phylum_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Quyết Lá Thông', 'Psilotopsida', 'Mô tả cho Lớp 1', 'quyet-la-thong', 3, 'active', '2024-01-08 03:36:58', '2024-01-08 03:36:58'),
(4, 'Thông Đất', 'Lycopodiopsida', 'Mô tả cho Lớp 2', 'thong-dat', 4, 'active', '2024-01-08 03:36:59', '2024-01-08 03:36:59'),
(5, 'Thủy Cửu', 'Isoetopsida', 'Mô tả cho Lớp 3', 'thuy-cuu', 4, 'active', '2024-01-08 03:36:59', '2024-01-08 03:36:59'),
(6, 'Cỏ Tháp Bút', 'Equisetopsida', 'Mô tả cho Lớp 4', 'co-but-thap', 5, 'active', '2024-01-08 03:36:59', '2024-01-08 03:36:59'),
(7, 'Lưỡi Rắn', 'Ophioglossopsida', 'Mô tả cho Lớp 5', 'luoi-ran', 6, 'active', '2024-01-08 03:36:59', '2024-01-08 03:36:59'),
(8, 'Cỏ Bợ', 'Marattiopsida', 'Mô tả cho Lớp 6', 'co-bo', 6, 'active', '2024-01-08 03:36:59', '2024-01-08 03:36:59'),
(9, 'Ráng Đa Túc', 'Polypodiopsida', 'Mô tả cho Lớp 7', 'rang-da-tuc', 6, 'active', '2024-01-08 03:36:59', '2024-01-08 03:36:59'),
(13, 'Có vảy', 'acc', '1', 'co-vay', 2, 'active', '2024-01-09 19:24:11', '2024-01-09 19:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coquanbh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `coquanbh`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 'Sách đỏ', 'UICN', 'documents/Paid.pdf', '2024-01-09 01:31:25', '2024-01-09 01:31:25'),
(2, 'Danh sách động vật', 'VQG Ba Bể', 'documents/Bun kho.pdf', '2024-01-09 01:40:36', '2024-01-09 01:40:36'),
(3, 'Danh sách thực vật', 'VQG Ba Bể', 'documents/Banh da.pdf', '2024-01-09 01:41:17', '2024-01-09 01:41:17'),
(4, 'Công văn', 'VQG Ba Bể', 'documents/classstatical.xlsx', '2024-01-10 17:51:35', '2024-01-10 17:51:35'),
(5, 'Công văn 2', 'VQG Ba Bể', 'documents/nganh.xlsx', '2024-01-10 17:52:11', '2024-01-10 17:52:11'),
(6, 'Công văn 3', 'VQG Ba Bể', 'documents/Chấm công chi tiết.xlsx', '2024-01-10 17:53:02', '2024-01-10 17:53:02');

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
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ho_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phylum_id` bigint(20) UNSIGNED NOT NULL,
  `classes_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `ho_vn`, `ho_latin`, `description`, `slug`, `status`, `phylum_id`, `classes_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'Bằng Lăng', 'Lythraceae', 'Mô tả cho Ho 1', 'bang-lang', 'active', 4, 3, 4, NULL, NULL),
(2, 'Bần\n', 'Sonneratiaceae', 'Thông Đất', 'ban', 'active', 1, 7, 1, NULL, NULL),
(3, 'Đước\n', 'Rhizophoraceae\n', 'Mô tả cho Ho 3', 'duoc', 'active', 2, 3, 7, NULL, NULL),
(4, 'Lân Vĩ\n', 'Opliaceae\n', 'Mô tả cho Ho 4', 'lan-vi', 'active', 2, 4, 8, NULL, NULL),
(5, 'Bàng\n', 'Combretaceae\n', 'Mô tả cho Ho 5', 'bang', 'active', 1, 8, 3, NULL, NULL),
(6, 'Sim\n', 'Myrtaceae\n', 'Mô tả cho Ho 6', 'sim', 'active', 4, 8, 6, NULL, NULL),
(7, 'Mua\n', 'Melastomataceae\n', 'Mô tả cho Ho 7', 'mua', 'active', 1, 8, 6, NULL, NULL),
(8, 'Lộc Vừng\n', 'Lecythidaceae\n', 'Mô tả cho Ho 8', 'loc-vung', 'active', 3, 6, 6, NULL, NULL),
(10, 'Trám\n', 'Burseraceae\n', 'Mô tả cho Ho 10', 'tram', 'active', 1, 7, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genus`
--

CREATE TABLE `genus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chi_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `family_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `classes_id` bigint(20) UNSIGNED NOT NULL,
  `phylum_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genus`
--

INSERT INTO `genus` (`id`, `chi_vn`, `chi_latin`, `description`, `slug`, `status`, `family_id`, `order_id`, `classes_id`, `phylum_id`, `created_at`, `updated_at`) VALUES
(1, 'Tắc kè', 'Gekko', 'Có vảy trên người', 'tac-ke', 'active', 1, 2, 3, 1, '2024-01-09 01:00:54', '2024-01-08 10:00:00'),
(2, 'Nhông', 'Ga', 'Thuộ họ tắc kè bộ có vảy', 'nhong', 'active', 2, 4, 5, 2, '2024-01-09 01:01:03', '2024-01-08 10:00:00'),
(3, 'Thằn Lằn Bóng', 'Eutropis\r\n', 'Thằn Lằn Bóng', 'than-lan-bong\r\n', 'active', 2, 3, 4, 5, '2024-01-09 00:56:36', '2024-01-09 00:56:36'),
(4, 'Thằn Lằn Thực\r\n', 'Takydromus\r\n', 'Thằn Lằn Thực\r\n', 'than-lan-thuc', 'active', 1, 2, 3, 4, '2024-01-09 00:57:21', '2024-01-09 00:57:21'),
(5, 'Rắn roi', 'Ahaetulla\r\n', 'Rắn roi', 'ran-roi', 'active', 1, 2, 3, 4, '2024-01-09 00:58:03', '2024-01-09 00:58:03'),
(6, 'Cạp nia\r\n', 'Bungarus\r\n', 'Cạp nia\r\n', 'cap-nia', 'active', 1, 2, 3, 4, '2024-01-09 00:58:44', '2024-01-09 00:58:44'),
(7, 'Cá Nheo\r\n', 'Silurus\r\n', 'Cá Nheo\r\n', 'ca-nheo', 'active', 1, 2, 3, 4, '2024-01-08 20:22:37', '2024-01-09 00:59:33'),
(8, 'Cá da trơn\r\n', 'Clarias\r\n', 'Cá da trơn\r\n', 'ca-da-tron', 'active', 1, 2, 3, 4, '2024-01-09 00:59:33', '2024-01-09 00:59:33'),
(9, 'Cá cơm\r\n', 'Oryzias\r\n', 'Cá cơm\r\n', 'ca-com', 'active', 1, 2, 3, 4, '2024-01-09 01:01:24', '2024-01-10 01:01:24'),
(10, 'Cá Rô Đồng\r\n', 'Macropodus\r\n', 'Cá Rô Đồng\r\n', 'ca-ro-dong', 'active', 1, 2, 3, 4, '2024-01-09 01:01:57', '2024-01-09 01:01:57');

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2024_01_03_083338_create_helps_table', 1),
(40, '2024_01_03_083346_create_contacts_table', 1),
(47, '2024_01_04_010415_create_permission_tables', 1),
(48, '2024_01_04_073324_create_accounts_table', 1),
(56, '2024_01_03_083306_create_phylums_table', 7),
(57, '2024_01_03_083615_create_classes_table', 7),
(58, '2024_01_03_083625_create_orders_table', 7),
(59, '2024_01_03_083634_create_families_table', 7),
(61, '2024_01_03_094837_create_documents_table', 9),
(64, '2024_01_03_083642_create_genus_table', 10),
(66, '2024_01_03_103149_create_species_table', 11),
(67, '2024_01_12_013143_create_videos_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(17, 'App\\Models\\User', 12),
(18, 'App\\Models\\User', 13),
(19, 'App\\Models\\User', 9),
(19, 'App\\Models\\User', 11),
(20, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bo_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bo_latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classes_id` bigint(20) UNSIGNED NOT NULL,
  `phylum_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `bo_vn`, `bo_latin`, `description`, `slug`, `classes_id`, `phylum_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Quyết Lá Thông', 'Psilotales', 'Id praesentium eius odio dolor.', 'quyet-la-thong', 3, 4, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38'),
(2, 'Thông Đất', 'Lycopodiales', 'Modi omnis ut quos hic.', 'thong-dat', 4, 3, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38'),
(3, 'Quyển Bá\n', 'Selaginellales\n', 'At minus praesentium sint.', 'quyen-ba', 5, 3, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38'),
(4, 'Cỏ Tháp Bút\n', 'Equisetales\n', 'Vel in velit rerum neque vel.', 'co-but-thap', 3, 4, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38'),
(6, 'Bèo Ong\n', 'Marattiales\n', 'Aut itaque atque aut perspiciatis reiciendis.', 'beo-ong', 8, 2, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38'),
(7, 'Tổ Diều\n', 'Aspleniales\n', 'Aut expedita quod cupiditate dignissimos.', 'to-dieu', 3, 3, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38'),
(8, 'Dương Xỉ Mộc\n', 'Cyatheales', 'Adipisci consequatur tenetur perspiciatis quia non quis consequatur autem.', 'duong-xo-moc', 9, 4, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38'),
(10, 'Guột\n', 'Gleicheniales\n', 'Rerum occaecati nemo maxime reiciendis et aut mollitia.', 'guot', 6, 4, 'active', '2024-01-08 03:37:38', '2024-01-08 03:37:38');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phylums`
--

CREATE TABLE `phylums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nganh_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh_latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phylums`
--

INSERT INTO `phylums` (`id`, `nganh_vn`, `nganh_latin`, `description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Có xương sống', 'Vertebrata', 'những loài với xương sống hoặc cột sống. Khoảng 57.739 loài động vật có xương sống đã được miêu tả.', 'co-xuong-song', 'active', '2024-01-08 03:35:22', '2024-01-08 03:35:22'),
(2, 'Thân mềm', 'Mollusca', 'cơ thể mềm, có thể có vỏ đá vôi che chở và nâng đỡ, tùy lối sống mà vỏ và cấu tạo cơ thể có thể thay đổi', 'than-mem', 'active', '2024-01-08 03:35:22', '2024-01-08 03:35:22'),
(3, 'Thông đất', 'Lycopodiophyta', 'cơ thể mềm, có thể có vỏ đá vôi che chở và nâng đỡ, tùy lối sống mà vỏ và cấu tạo cơ thể có thể thay đổi', 'thong-dat', 'active', '2024-01-08 03:35:22', '2024-01-08 03:35:22'),
(4, 'Quyết lá thông', 'Psilotophyta', 'Bụi nhỏ, thường ở đất, không lông, không rễ, có căn trạng thay thế', 'quyet-la-thong', 'active', '2024-01-08 03:35:22', '2024-01-08 03:35:22'),
(5, 'Mộc Tặc', 'Equisetophyta', 'Mộc tặc', 'moc-tac', 'active', '2024-01-09 03:23:57', '2024-01-08 17:00:00'),
(6, 'Dương Xỉ', 'Polypodiophyta', 'Polypodiophyta', 'duong-xi', 'active', '2024-01-09 03:24:05', '2024-01-08 17:00:00'),
(7, 'Ngọc Lan', 'Magnoliophyta', 'Magnoliophyta', 'ngoc-lan', 'active', '2024-01-09 03:24:37', '2024-01-09 03:24:56'),
(8, 'Chân Khớp', 'Arthropoda', 'Chân Khớp', 'chan-khop', 'active', '2024-01-09 03:25:13', '2024-01-08 17:00:00'),
(9, 'Tảo silic', 'Bacillariophyta', 'Tảo silic', 'tao-silic', 'active', '2024-01-09 03:25:38', '2024-01-08 17:00:00'),
(10, 'Tảo lục', 'Chlorophyta', 'Tảo lục', 'tao-luc', 'active', '2024-01-09 03:26:13', '2024-01-09 03:26:03'),
(11, 'Tảo lam', 'Cyanophyta', 'Tảo lam', 'tao-lam', 'active', '2024-01-08 17:00:00', '2024-01-09 03:26:29'),
(12, 'Giun tròn', 'Nemathelminthes', 'Giun tròn', 'giun-tron', 'active', '2024-01-08 17:00:00', '2024-01-09 03:26:46'),
(13, 'Da Gai', 'Echinodermata', 'Da Gai', 'da-gai', 'active', '2024-01-09 03:22:37', '2024-01-09 03:22:37'),
(14, 'Tảo đơn bào hai roi', 'Pyrrophyta', 'Tảo đơn bào hai roi', 'tao-don-bao-hai-roi', 'active', '2024-01-09 03:22:37', '2024-01-09 03:22:37'),
(15, 'Chrysophyta', 'Chrysophyta', 'Chrysophyta', 'chrysophyta', 'active', '2024-01-09 03:27:06', '2024-01-09 03:27:06'),
(16, 'Tảo mắt', 'Euglenophyta', 'Tảo mắt', 'tao-mat', 'active', '2024-01-09 03:27:06', '2024-01-09 03:27:06'),
(17, 'Sứa lược', 'Ctenophora', 'Sứa lược', 'sua-luoc', 'active', '2024-01-09 03:22:37', '2024-01-09 03:27:06'),
(18, 'Platyhelminthes', 'Platyhelminthes', 'Platyhelminthes', 'platyhelminthes', 'active', '2024-01-09 03:27:59', '2024-01-09 03:27:59'),
(20, 'Thông', 'Pinophytaa', 'thông1', 'thong', 'active', '2024-01-11 01:16:52', '2024-01-11 01:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(17, 'admin', 'web', '2024-01-05 02:10:27', '2024-01-05 02:10:27'),
(18, 'ranger', 'web', '2024-01-05 02:10:27', '2024-01-05 02:10:27'),
(19, 'editor', 'web', '2024-01-05 02:10:27', '2024-01-05 02:10:27'),
(20, 'user', 'web', '2024-01-05 02:10:27', '2024-01-05 02:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loai_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `genus_id` bigint(20) UNSIGNED NOT NULL,
  `family_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `classes_id` bigint(20) UNSIGNED NOT NULL,
  `phylum_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `loai_vn`, `loai_latin`, `description`, `slug`, `status`, `genus_id`, `family_id`, `order_id`, `classes_id`, `phylum_id`, `created_at`, `updated_at`) VALUES
(1, 'Tắc Kè', 'Gekko gecko', 'Tắc Kè', 'tac-ke', 'active', 1, 2, 7, 6, 1, '2024-01-10 21:07:10', '2024-01-10 21:07:10'),
(2, 'Tắc Kè Trung Quốc', 'Gekko chinensis\r\n', 'Tắc Kè Trung Quốc', 'tac-ke-trung-quoc', 'active', 10, 5, 8, 9, 10, '2024-01-10 21:07:10', '2024-01-10 21:07:10'),
(5, 'Thạch Sùng Baorin\r\n', 'Hemidactylus bowringi\r\n', 'Thạch Sùng Baorin\r\n', 'thach-sung-baorin', 'active', 9, 6, 6, 4, 6, '2024-01-10 21:09:11', '2024-01-10 21:09:11'),
(6, 'Thạch Sùng Đuôi Sần\r\n', 'Hemidactylus frenatus\r\n', 'Thạch Sùng Đuôi Sần\r\n', 'thach-sung-duoi-san', 'active', 9, 5, 8, 3, 12, '2024-01-10 21:10:53', '2024-01-10 21:10:53'),
(7, 'Ô Rô Vảy \r\n', 'Acanthosaura lepidogaster\r\n', 'Ô Rô Vảy \r\n', 'o-ro-vay', 'active', 7, 5, 4, 13, 5, '2024-01-10 21:10:53', '2024-01-10 21:10:53'),
(9, 'Nhông Phructôphe\r\n', 'Calotes fruhstorferi\r\n', 'Nhông Phructôphe\r\n', 'nhong-phructophe', 'active', 7, 7, 3, 5, 4, '2024-01-10 21:11:59', '2024-01-10 21:11:59');

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
(9, 'Editor User', 'editor@example.com', NULL, '$2y$12$TDVkkbSM.q42d0YbKvccz.ydhilP5qWuMWx4ZljDPxfnQj2gPduN.', NULL, '2024-01-05 02:10:27', '2024-01-05 02:10:27'),
(10, 'Regular User', 'user@example.com', NULL, '$2y$12$s6vHB.Q4eJVI/aLVPv5aFOGdYG0cC8N0B1C9vFB9lUHb/9ZzE0Nvu', NULL, '2024-01-05 02:10:28', '2024-01-05 02:10:28'),
(11, 'Vũ Ngọc Hoàng12', 'hoangleo24071999@gmail.com', NULL, '$2y$12$PsjVavbk/fa8wwocw2bo3etPpAYbEGPJycihQ6IY.mFtzWQ0ieERC', NULL, '2024-01-06 00:51:19', '2024-01-06 01:01:52'),
(12, 'Admin User', 'admin@example.com', NULL, '$2y$12$Tr8xbkucIdavJKHIK64vOOY4J0yFYkF/k3.Ic1CoPHRfWWRFsqBAi', NULL, '2024-01-06 01:02:51', '2024-01-06 01:02:51'),
(13, 'Ranger User', 'ranger@example.com', NULL, '$2y$12$Kfyi/D25ePTsuAmnliRk5.XlZ4KGY8ZbcGgekw0bmAeWMHm8C1VqW', NULL, '2024-01-06 01:04:37', '2024-01-06 01:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video_path`, `created_at`, `updated_at`) VALUES
(1, 'Video đa dạng sinh học', 'Đa dạng sinh học', 'videos/pr4dvgOp1kTyzlnrlz6g0NSXqUlFJv8UaSYAScuY.mp4', '2024-01-11 18:49:01', '2024-01-11 18:49:01'),
(2, 'CSDL Thực vật', 'aaa', 'videos/lpbDU5nI2QEHbMv2VbbQpR9BezZQBFCUmaiXWoQu.mp4', '2024-01-11 19:00:40', '2024-01-11 19:00:40'),
(3, 'Video các môi trường sinh thái', 'aaa', 'videos/NGPQyt6rFc5v8MX0FYu94aLMprPbB2Lg2mQ016p1.mp4', '2024-01-11 19:14:54', '2024-01-11 19:14:54'),
(4, 'Động vật', 'aaa', 'videos/RU0ZZFkZr6k6bJa2w9plsK6n0TC0Gi1zE1WUAB2J.mp4', '2024-01-11 19:16:29', '2024-01-11 19:16:29'),
(5, 'Thực vật', 'aaa', 'videos/w3zpoScKUThyCnwdx8OCRE2BX2txmcGO9SkVF2QS.mp4', '2024-01-11 19:20:44', '2024-01-11 19:20:44'),
(6, 'Động vật tuyệt chủng trong tự nhiêna', 'aaa', 'videos/mkHwV2Y68obijzdjnEb6jmx4uKU3U84xLz7hOsN2.mp4', '2024-01-11 19:45:46', '2024-01-11 19:45:46'),
(7, 'Giới thiệu VQG Ba Bể', 'aa', 'videos/yvC7V1RLe1zdh7OhGFtioVAdPecC0DbFpKOwQHGR.mp4', '2024-01-11 19:46:20', '2024-01-11 19:46:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `classes_slug_unique` (`slug`),
  ADD KEY `classes_phylum_id_index` (`phylum_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `families_slug_unique` (`slug`),
  ADD KEY `families_phylum_id_foreign` (`phylum_id`),
  ADD KEY `families_order_id_foreign` (`order_id`),
  ADD KEY `families_classes_id_phylum_id_order_id_index` (`classes_id`,`phylum_id`,`order_id`);

--
-- Indexes for table `genus`
--
ALTER TABLE `genus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genus_slug_unique` (`slug`),
  ADD KEY `genus_order_id_foreign` (`order_id`),
  ADD KEY `genus_classes_id_foreign` (`classes_id`),
  ADD KEY `genus_phylum_id_foreign` (`phylum_id`),
  ADD KEY `genus_family_id_order_id_classes_id_phylum_id_index` (`family_id`,`order_id`,`classes_id`,`phylum_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_slug_unique` (`slug`),
  ADD KEY `orders_phylum_id_foreign` (`phylum_id`),
  ADD KEY `orders_classes_id_phylum_id_index` (`classes_id`,`phylum_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phylums`
--
ALTER TABLE `phylums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `species_slug_unique` (`slug`),
  ADD KEY `species_family_id_foreign` (`family_id`),
  ADD KEY `species_order_id_foreign` (`order_id`),
  ADD KEY `species_classes_id_foreign` (`classes_id`),
  ADD KEY `species_phylum_id_foreign` (`phylum_id`),
  ADD KEY `species_genus_id_family_id_order_id_classes_id_phylum_id_index` (`genus_id`,`family_id`,`order_id`,`classes_id`,`phylum_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genus`
--
ALTER TABLE `genus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phylums`
--
ALTER TABLE `phylums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_phylum_id_foreign` FOREIGN KEY (`phylum_id`) REFERENCES `phylums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `families`
--
ALTER TABLE `families`
  ADD CONSTRAINT `families_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `families_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `families_phylum_id_foreign` FOREIGN KEY (`phylum_id`) REFERENCES `phylums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `genus`
--
ALTER TABLE `genus`
  ADD CONSTRAINT `genus_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `genus_family_id_foreign` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `genus_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `genus_phylum_id_foreign` FOREIGN KEY (`phylum_id`) REFERENCES `phylums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_phylum_id_foreign` FOREIGN KEY (`phylum_id`) REFERENCES `phylums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `species`
--
ALTER TABLE `species`
  ADD CONSTRAINT `species_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `species_family_id_foreign` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `species_genus_id_foreign` FOREIGN KEY (`genus_id`) REFERENCES `genus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `species_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `species_phylum_id_foreign` FOREIGN KEY (`phylum_id`) REFERENCES `phylums` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
