-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2017 lúc 07:58 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websearch`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nhà hàng', NULL, NULL),
(2, 'Cây xănng', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ád', 'ádsad', '2017-06-16 13:15:08', '2017-06-16 13:15:08'),
(2, 1, 2, 'ga', '1223', '2017-06-16 13:16:24', '2017-06-16 13:16:24'),
(3, 1, 2, 'Nhà Hàng Ngon', 'Món ăn ở đây rất ngon\n- Phục vụ rất tốt', '2017-06-16 16:24:20', '2017-06-16 16:24:20'),
(4, 2, 3, 'Chất lượng', 'Sản phẩm chất lượng rất tốt \nCảm ơn quý công ty !', '2017-06-16 18:50:51', '2017-06-16 18:50:51'),
(5, 2, 3, 'Giá cả', 'Giá cả rất hợp lý', '2017-06-16 18:51:35', '2017-06-16 18:51:35'),
(6, 2, 3, 'lol', 'tiến', '2017-06-18 02:25:41', '2017-06-18 02:25:41'),
(7, 2, 1, 'Món ngon', 'Các món ngon', '2017-06-20 08:56:12', '2017-06-20 08:56:12'),
(8, 2, 4, 'Món ngon', 'Ngon lắm', '2017-06-20 15:15:24', '2017-06-20 15:15:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_12_172448_create_post_table', 1),
(4, '2017_06_12_173513_create_comment_table', 1),
(5, '2017_06_12_173713_create_category_table', 1),
(6, '2017_06_12_194523_add_fk_to_comment', 1),
(7, '2017_06_12_195045_add_fk_to_post', 1),
(8, '2017_06_13_163233_create_profile_table', 1),
(9, '2017_06_13_164503_add_fk_to_profile', 1),
(10, '2017_06_13_212647_create_post_picture_table', 1),
(11, '2017_06_13_213251_add_fk_to_post_picture', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `open_time` time DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `category_id`, `user_id`, `title`, `photo`, `tag`, `website`, `phone`, `address`, `description`, `open_time`, `close_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Nhà hàng Long não', 'PM13_images.jpg', NULL, NULL, NULL, 'Quận 1', '<p>ád</p>', '00:59:00', '12:59:00', '2017-06-16 13:14:52', '2017-06-16 13:14:52'),
(2, 2, 1, 'Cây xang 2AB', 'ThL9_3_20_1348291700_44_1348286551-nhieu-cay-xang-don-cua.jpg', NULL, 'cayxang.com', NULL, 'Bình Dương', '<p>ád</p>', '00:00:00', '12:00:00', '2017-06-16 13:15:58', '2017-06-16 13:15:58'),
(3, 2, 1, 'USB Hoàng phú', 'bDYh_29059_100g33.jpg', NULL, 'https://www.google.com.vn/', NULL, 'Adress USB', '<p>ád</p>', '12:00:00', '01:00:00', '2017-06-16 13:34:46', '2017-06-16 13:34:46'),
(4, 1, 2, 'Nhà Hàng SEA', 'Lniq_2.jpg', NULL, 'trandinhphu.com', '0974755854', 'Bình Dương', '<p>Khuyến mãi 24/24</p>', '02:02:00', '14:02:00', '2017-06-20 05:44:13', '2017-06-20 05:44:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_picture`
--

CREATE TABLE `post_picture` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `reference_piture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_picture`
--

INSERT INTO `post_picture` (`id`, `post_id`, `reference_piture`, `created_at`, `updated_at`) VALUES
(1, 1, 'PM13_images.jpg', '2017-06-16 13:14:52', '2017-06-16 13:14:52'),
(2, 1, 'ObmE_kinh-doanh-nhà-hàng-2.gif', '2017-06-16 13:14:52', '2017-06-16 13:14:52'),
(3, 1, 'PM13_images.jpg', '2017-06-16 13:14:52', '2017-06-16 13:14:52'),
(4, 1, 'PM13_images.jpg', '2017-06-16 13:14:52', '2017-06-16 13:14:52'),
(5, 2, 'M2Tf_asdasc.jpg', '2017-06-16 13:15:58', '2017-06-16 13:15:58'),
(6, 2, 'ie1p_asdasc.jpg', '2017-06-16 13:15:58', '2017-06-16 13:15:58'),
(7, 2, '3f8w_3_20_1348291700_44_1348286551-nhieu-cay-xang-don-cua.jpg', '2017-06-16 13:15:58', '2017-06-16 13:15:58'),
(8, 2, 'yZVL_3_20_1348291700_44_1348286551-nhieu-cay-xang-don-cua.jpg', '2017-06-16 13:15:58', '2017-06-16 13:15:58'),
(9, 3, 'LVn7_1380144522928-P-1111729.jpg', '2017-06-16 13:34:47', '2017-06-16 13:34:47'),
(10, 3, 'zbPK_images.jpg', '2017-06-16 13:34:47', '2017-06-16 13:34:47'),
(11, 3, '0m71_1380144522928-P-1111729.jpg', '2017-06-16 13:34:47', '2017-06-16 13:34:47'),
(12, 3, 'PM13_images.jpg', '2017-06-16 13:34:47', '2017-06-16 13:34:47'),
(13, 4, 'ZslN_3.jpg', '2017-06-20 05:44:13', '2017-06-20 05:44:13'),
(14, 4, '', '2017-06-20 05:44:13', '2017-06-20 05:44:13'),
(15, 4, '', '2017-06-20 05:44:13', '2017-06-20 05:44:13'),
(16, 4, '', '2017-06-20 05:44:13', '2017-06-20 05:44:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `avatar`, `phone`, `address`, `date_of_birth`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 1, 'default.jpg', NULL, NULL, '2017-06-07', NULL, '2017-06-16 13:09:43', '2017-06-16 13:09:43'),
(2, 2, '51c6_2.jpg', '0974755854', 'Bình Dương', NULL, NULL, '2017-06-16 17:08:47', '2017-06-20 02:51:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tien', 'tien@gmail.com', '$2y$10$LplkpKbtw.h3TDLVwB0JMepCUku7wUZSEwizeoeShR06Wwd.9qgyy', 0, 'QWmpZLqceGohK32Pl7aHhtsi8A6wEwIkrSMhererA52YG9cYTGSxdL7YAWD7', '2017-06-16 13:09:43', '2017-06-16 13:09:43'),
(2, 'Trần Đình Phú', 'trandinhphu2606@gmail.com', '$2y$10$5L3W.LdoKPLWzw5t5EynROSAGmEAbm4OnOPR4Hme20zbRsndoBe5a', 0, 'rcD5siIzSvlF44LjHVVFGyopz7QKxg1WurKGmvJjuGb9R1t17iPAxoEyLORU', '2017-06-16 17:08:47', '2017-06-16 17:08:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_user_id_foreign` (`user_id`),
  ADD KEY `comment_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_id_foreign` (`user_id`),
  ADD KEY `post_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `post_picture`
--
ALTER TABLE `post_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Post` (`post_id`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `post_picture`
--
ALTER TABLE `post_picture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `post_picture`
--
ALTER TABLE `post_picture`
  ADD CONSTRAINT `FK_Post` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
