-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 02:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_src` varchar(191) NOT NULL,
  `alt_text` varchar(191) NOT NULL,
  `publish_status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `checkin_date` varchar(191) NOT NULL,
  `checkout_date` varchar(191) NOT NULL,
  `total_adults` varchar(191) NOT NULL,
  `total_children` varchar(191) NOT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `room_id`, `checkin_date`, `checkout_date`, `total_adults`, `total_children`, `ref`, `created_at`, `updated_at`) VALUES
(13, 2, 1, '2024-01-26', '2024-01-27', '3', '2', NULL, '2024-01-17 22:02:59', '2024-01-17 22:02:59'),
(14, 2, 3, '2024-01-19', '2024-01-20', '2', '2', NULL, '2024-01-18 08:14:37', '2024-01-18 08:14:37'),
(15, 2, 3, '2024-01-19', '2024-01-20', '2', '2', NULL, '2024-01-18 08:14:37', '2024-01-18 08:14:37'),
(16, 2, 2, '2024-01-13', '2024-01-06', '2', '1000', NULL, '2024-01-18 08:41:08', '2024-01-18 08:41:08'),
(17, 2, 3, '2024-01-27', '2024-01-25', '2', '3', NULL, '2024-01-18 09:08:58', '2024-01-18 09:08:58'),
(18, 2, 4, '2024-01-20', '2024-01-27', '45', '3', NULL, '2024-01-18 16:57:53', '2024-01-18 16:57:53'),
(19, 2, 2, '2024-01-20', '2024-01-20', '2', '2', NULL, '2024-01-18 18:34:48', '2024-01-18 18:34:48'),
(20, 17, 2, '2024-01-19', '2024-01-21', '3', '1', NULL, '2024-01-18 18:42:27', '2024-01-18 18:42:27'),
(21, 18, 4, '2024-10-21', '2027-10-14', '600', '600', NULL, '2024-01-18 20:01:28', '2024-01-18 20:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `address` varchar(191) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `password`, `mobile`, `address`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Mark Lester Raguindin', 'suguitanmark123@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '09360991034', 'Rizal, Roxas, Isabela', 'public/images/C92hPZcbBwlS3JlePXVc5V7B1TOC7aPQetUT13G0.jpg', '2023-12-21 20:09:32', '2023-12-21 20:09:32'),
(4, 'Armando Raguindin', 'armandoraguindin025@yahoo.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '09685340012', 'Rizal, Roxas, Isabela', 'public/images/RzWTDw8utE0UGK7GETjjPlMf35RzbJa24mC9eHbR.jpg', '2023-12-26 22:21:32', '2023-12-26 22:21:32'),
(5, 'Diether Apil', 'apil@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '111', 'Quezon', 'public/images/3OAMlQXK2ZznLFMH6YQuwJsvz3ECQwYdgjqRaJ5S.jpg', '2024-01-08 17:46:42', '2024-01-08 17:46:42'),
(6, 'Kholeen Banay', 'Kholeen@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '09360099134', 'San Placido', 'public/images/g6QFfWTIeIEW4aSHnkZYxRNcnjHhNdWznTLDjnhS.png', '2024-01-16 23:34:44', '2024-01-16 23:34:44'),
(7, 'Katleen Ancheta', 'katleen@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '093609920454', 'Qu', NULL, '2024-01-17 03:23:33', '2024-01-17 03:23:33'),
(8, 'Rjay Manzano', 'Luis@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '09360099134', 'San Placido', NULL, '2024-01-17 18:30:18', '2024-01-17 18:30:18'),
(9, 'Diether Apil', 'apil@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '2523535', 'Quezon', NULL, '2024-01-17 18:35:14', '2024-01-17 18:35:14'),
(10, 'John Doe', 'johndoe@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '0936099134', 'Canada', NULL, '2024-01-17 20:28:56', '2024-01-17 20:28:56'),
(11, 'John Doe', 'apil@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '2523535', 'Quezon', NULL, '2024-01-17 20:29:37', '2024-01-17 20:29:37'),
(12, 'Mj', 'mj@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '0936099134', 'Canada', NULL, '2024-01-17 20:35:39', '2024-01-17 20:35:39'),
(13, 'Mj', 'mj@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '936099134', 'Canada', NULL, '2024-01-17 20:36:35', '2024-01-17 20:36:35'),
(14, 'John Doe', 'johndoe@gmail.com', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', '936099134', 'Canada', NULL, '2024-01-18 08:07:56', '2024-01-18 08:07:56'),
(15, 'John Doe', 'johndoe@gmail.com', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', '936099134', 'Canada', NULL, '2024-01-18 09:08:31', '2024-01-18 09:08:31'),
(16, 'John Doe', 'johndoe@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '936099134', 'Canada', NULL, '2024-01-18 18:34:24', '2024-01-18 18:34:24'),
(17, 'Bryan', 'acostabryan152@gmail.com', '360700d7463f03b8ffe959fdfbbda4d2deadf9ab', '0987654321', 'Mallig', NULL, '2024-01-18 18:40:57', '2024-01-18 18:40:57'),
(18, 'Moan Wyeth Frejas', 'Frejas@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '092388482818', 'que', NULL, '2024-01-18 19:59:48', '2024-01-18 19:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(3, 'House Keeping', 'House Department', '2023-12-26 22:16:02', '2023-12-26 22:23:47'),
(4, 'Shift Managers', 'Shift Managers', '2023-12-26 23:36:28', '2023-12-26 23:36:28'),
(5, 'Finance Department', 'Finance Department', '2024-01-14 18:56:45', '2024-01-14 18:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_22_181853_create_room_types_table', 1),
(5, '2021_07_22_182302_create_rooms_table', 2),
(6, '2021_07_22_182755_add_room_type_id_to_rooms_table', 3),
(7, '2021_07_29_154439_create_customers_table', 4),
(8, '2021_07_29_165100_add_price_to_room_types_table', 5),
(9, '2021_08_01_163509_create_admins_table', 6),
(10, '2021_08_05_031451_create_roomtypeimages_table', 7),
(11, '2021_08_05_033838_create_roomtypeimages_table', 8),
(12, '2021_08_15_090054_create_departments_table', 9),
(13, '2021_08_15_094608_create_staff_table', 10),
(14, '2021_08_19_034453_create_staff_payments_table', 11),
(15, '2021_08_30_192906_create_bookings_table', 12),
(16, '2021_10_29_033215_create_services_table', 13),
(17, '2021_10_31_083320_create_testimonials_table', 14),
(18, '2021_11_12_180726_create_banners_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `created_at`, `updated_at`, `room_type_id`) VALUES
(1, 'Room 3', '2024-01-17 20:13:27', '2024-01-17 20:13:27', 1),
(2, 'room 1', '2024-01-18 08:13:12', '2024-01-18 08:13:12', 2),
(3, 'room 2', '2024-01-18 08:13:23', '2024-01-18 08:13:23', 2),
(4, 'room 4', '2024-01-18 09:59:42', '2024-01-18 09:59:42', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypeimages`
--

CREATE TABLE `roomtypeimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `img_src` text NOT NULL,
  `img_alt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomtypeimages`
--

INSERT INTO `roomtypeimages` (`id`, `room_type_id`, `img_src`, `img_alt`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/images/xPPB5fnYQtAUjtfLKNJQjZDPWQTWMJX6Z2MCtydv.jpg', 'Deluxe Rooms', '2023-12-25 09:00:36', '2023-12-25 09:00:36'),
(2, 1, 'public/images/CN8Rb68twqyNsGlUlS5zE23BhYWoAv3U8JLrw1Yh.jpg', 'Deluxe Rooms', '2023-12-25 09:00:36', '2023-12-25 09:00:36'),
(5, 4, 'public/images/ZK0Huo7m4hALnj3HibbFSkfnrHdjhiIrlXWjCwia.jpg', 'first class', '2024-01-17 18:56:17', '2024-01-17 18:56:17'),
(6, 1, 'public/images/l1iYGTACrb2kZutEShHFEcG6mlP4uWxgtILfoLyL.jpg', 'First Class', '2024-01-17 20:12:46', '2024-01-17 20:12:46'),
(7, 1, 'public/images/lJ6k3EUPlmSvBiVgOxxoMYcdT0dYzOBrtkr92V2H.jpg', 'First Class', '2024-01-17 20:12:46', '2024-01-17 20:12:46'),
(8, 2, 'public/images/D8WXjoZVQSzvvXtdNf0HqEro1Z0Nxel1SKZ231ZH.jpg', 'deluxe class', '2024-01-17 21:03:01', '2024-01-17 21:03:01'),
(9, 2, 'public/images/Y49doDlc3xsxOVDzbAu9r2QNZAWIzNgSkEF6J1Tl.jpg', 'deluxe class', '2024-01-17 21:03:01', '2024-01-17 21:03:01'),
(10, 2, 'public/images/NPqGS77cbKidpsP2OIkEbveY7yenEzw4aNJUVLBX.jpg', 'deluxe class', '2024-01-17 21:03:01', '2024-01-17 21:03:01'),
(11, 3, 'public/images/igrRVA3NrEoJgCWI1AuOKMdyB6wnEdHsn8bsQgo5.jpg', 'Family Room', '2024-01-17 21:08:56', '2024-01-17 21:08:56'),
(12, 3, 'public/images/bpLrSi8GGXpemCVh1Ga19nb6YWGmdWUVVgc8fZq2.jpg', 'Family Room', '2024-01-17 21:08:56', '2024-01-17 21:08:56'),
(13, 3, 'public/images/SgVbC1JYhXBkSNJElJbhHAS6WLGeDuGcWiF2iyND.jpg', 'Family Room', '2024-01-17 21:08:56', '2024-01-17 21:08:56'),
(14, 4, 'public/images/ViQw4CgEk5voMSLsT2H1vYLeBwZuDcZEUmA0sggF.jpg', 'budget room', '2024-01-18 09:59:25', '2024-01-18 09:59:25'),
(15, 4, 'public/images/LhFvuSDgnxE43f8pQABMrSvuRAWWmICzOM8Ctfhd.jpg', 'budget room', '2024-01-18 09:59:25', '2024-01-18 09:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `title`, `detail`, `created_at`, `updated_at`, `price`) VALUES
(1, 'First Class', 'Good for 2-4 Pax', '2024-01-17 20:12:46', '2024-01-17 20:12:46', '2500'),
(2, 'deluxe class', 'usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom, and include more high-end amenities. Many deluxe hotel rooms are also advertised based on the view they offer guests: Bay view, city view, mountain view, or other desirable scenery for travelers to enjoy.', '2024-01-17 21:03:01', '2024-01-17 21:03:01', '30000'),
(3, 'Family Room', 'Description: Specifically designed to accommodate families.\r\nFeatures: Larger space, additional beds or pull-out sofas, and family-friendly amenities.\r\nSuitable for: Families with children or larger groups traveling together.', '2024-01-17 21:08:56', '2024-01-17 21:08:56', '5000'),
(4, 'budget room', 'simple room', '2024-01-18 09:59:25', '2024-01-18 09:59:25', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `small_desc` text NOT NULL,
  `detail_desc` text NOT NULL,
  `photo` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `small_desc`, `detail_desc`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Dining', 'Embark on a culinary journey at our world-class restaurants', 'where our talented chefs curate a symphony of flavors using the finest ingredients. From international cuisine to local delicacies, our diverse dining options cater to every palate. Savor a gourmet experience in an ambiance that exudes elegance.', 'public/images/GztRVk7fT2432MWbhaZ40k1YUIeMbHpF5NmDk4fr.jpg', '2024-01-17 00:12:23', '2024-01-17 03:12:06'),
(5, '24/Hours', 'A 24-hours online service for a hotel system ensures that guests can access various services and information', 'A 24-hours online service for a hotel system ensures that guests can access various services and information around the clock, providing convenience and enhancing the overall guest experience. Here\'s a detailed description of key features and benefits for a hotel with 24-hours online service', 'public/images/fDHy1JhNXowyKb7nP4q2zcBbZ7jZgbrT6qpmhzfX.jpg', '2024-01-17 20:45:45', '2024-01-17 20:45:45'),
(6, 'Special Packages and Offers', 'Take advantage of limited-time promotions and discounts for a budget-friendly stay.', 'Explore our exclusive packages tailored to suit your needs, including romantic getaways, family packages, and business traveler specials. Take advantage of limited-time promotions and discounts for a budget-friendly stay.', 'public/images/gf5Juoj97BFNbHSIK8sAcsjGIUnGy39sBsVSd1M3.jpg', '2024-01-17 20:50:11', '2024-01-17 20:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) NOT NULL,
  `department_id` int(11) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `bio` text NOT NULL,
  `salary_type` varchar(191) NOT NULL,
  `salary_amt` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `full_name`, `department_id`, `photo`, `bio`, `salary_type`, `salary_amt`, `created_at`, `updated_at`) VALUES
(1, 'Armando Raguindin Jr.', 3, 'public/images/CF0mVZLnjaE12KzUyzwHGVICVpKIDYJ1cvVNFVax.jpg', 'This is my Bio', 'daily', '2500', '2023-12-26 23:51:18', '2023-12-27 01:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `staff_payments`
--

CREATE TABLE `staff_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_date` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_payments`
--

INSERT INTO `staff_payments` (`id`, `staff_id`, `amount`, `payment_date`, `created_at`, `updated_at`) VALUES
(2, 1, 2500, '2024-01-05', '2024-01-04 07:35:20', '2024-01-04 07:35:20'),
(3, 2, 10000, '2024-01-30', '2024-01-09 19:35:15', '2024-01-09 19:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `testi_cont` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `customer_id`, `testi_cont`, `created_at`, `updated_at`) VALUES
(3, 2, 'This is Testimonial', '2024-01-17 08:15:11', '2024-01-17 08:15:11'),
(4, 2, 'Test Tesmonial', '2024-01-17 09:16:56', '2024-01-17 09:16:56'),
(5, 2, 'Test Tesmonial', '2024-01-17 18:36:32', '2024-01-17 18:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypeimages`
--
ALTER TABLE `roomtypeimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_payments`
--
ALTER TABLE `staff_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomtypeimages`
--
ALTER TABLE `roomtypeimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_payments`
--
ALTER TABLE `staff_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
