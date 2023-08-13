-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 13, 2023 at 01:23 AM
-- Server version: 5.7.43
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartaudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_config`
--

CREATE TABLE `admin_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_config`
--

INSERT INTO `admin_config` (`id`, `name`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'flogo', 'asset/image/flogo.jpg', NULL, '2022-06-21 08:33:22', '2023-02-17 00:56:44'),
(2, 'footer1', '<p><img alt=\"amz logo\" src=\"/storage/flogo.png\" style=\"width:100%\"></p>\r\n<p><strong>CÔNG TY CỔ PHẦN AMZ VIỆT NAM</strong><br>\r\n<strong><i class=\"bi bi-geo-alt\"></i> Địa chỉ:</strong>&nbsp;Tổ 8 P. Yên Nghĩa, Q. Hà Đông, TP. Hà Nội<br>\r\n<strong><i class=\"bi bi-globe\"></i> Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br>\r\n<strong<i class=\"bi bi-envelope\"> Email:&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br>\r\n<strong><i class=\"bi bi-phone-vibrate\"></i> ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</strong<i></p>\r\n<ul class=\"social-link d-flex list-style-none ps-0\">\r\n<li><a href=\"#\"><i class=\"bi bi-twitter\"></i></a></li>\r\n<li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>\r\n<li><a href=\"#\"><i class=\"bi bi-facebook\"></i></a></li>\r\n<li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>\r\n</ul>', NULL, '2022-06-22 07:32:47', '2023-08-05 02:40:46'),
(3, 'footer2', '<h2>Danh mục sản phẩm</h2>\r\n\r\n<p><a href=\"#\">Computers &amp; Laptop</a></p>\r\n\r\n<p><a href=\"#\">Digital Cameras</a></p>\r\n\r\n<p><a href=\"#\">Mobiles &amp; Tablets</a></p>\r\n\r\n<p><a href=\"#\">TV &amp; Home Theater</a></p>\r\n\r\n<p><a href=\"#\">Audio &amp; Video</a></p>\r\n\r\n<p><a href=\"#\">Portable Speakers</a></p>\r\n\r\n<p><a href=\"#\">Home Appliances</a></p>\r\n\r\n<p><a href=\"#\">Music &amp; Video Games</a></p>', NULL, '2022-06-22 07:40:42', '2023-08-05 02:55:48'),
(30, 'homepage_seo_title', 'Công ty cổ phần AMZ việt nam', NULL, '2023-08-06 18:10:51', '2023-08-06 18:10:51'),
(4, 'footer3', '<h2>Chăm s&oacute;c kh&aacute;ch h&agrave;ng</h2>\r\n<p><a href=\"/chinh-sach-doi-tra-hang\">Chính sách đổi trả hàng</a></p>\r\n<p><a href=\"/phuong-thuc-van-chuyen\">Phương thức vận chuyển</a></p>\r\n<p><a href=\"/chinh-sach-dai-ly\">Chính sách đại lý</a></p>\r\n<p><a href=\"/hop-tac-kinh-doanh\">Hợp tác kinh doanh</a></p>\r\n<p><a href=\"/cau-hoi-thuong-gap\">C&acirc;u hỏi thường gặp</a></p>\r\n\r\n<h2 class=\"mt-2\">Giải pháp & Dịch vụ</h2>\r\n<p><a href=\"/giai-phap\">Các giải pháp</a></p>\r\n<p><a href=\"/dich-vu\">Dịch vụ</a></p>', NULL, '2022-06-22 07:41:28', '2023-08-08 00:31:08'),
(5, 'footer4', '<h2>Giới thiệu về AMZ</h2>\r\n<p><a href=\"/ve-chung-toi\">Về ch&uacute;ng t&ocirc;i</a></p>\r\n<p><a href=\"/lien-he\">Li&ecirc;n hệ</a></p>\r\n<p><a href=\"/chinh-sach-bao-mat\">Ch&iacute;nh s&aacute;ch bảo mật</a></p>\r\n<p><a href=\"/dieu-khoan\">Điều khoản</a></p>\r\n<p><a href=\"/tin-tuc\">Tin tức nội bộ</a></p>\r\n<p><a href=\"/hoat-dong-xa-hoi\">Tin tức nội bộ</a></p>\r\n<p><a href=\"/tin-bao-chi\">B&aacute;o ch&iacute;</a></p>', NULL, '2022-06-22 07:46:23', '2023-08-08 00:27:55'),
(32, 'shop_seo_title', 'Trang chủ sản phẩm', NULL, '2023-08-06 18:13:31', '2023-08-06 18:13:31'),
(33, 'shop_seo_description', 'Các sản phẩm của công ty chúng tôi bao gồm:', NULL, '2023-08-06 18:13:49', '2023-08-06 18:13:49'),
(34, 'lien-he-ban-do', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d70890.59245640723!2d105.69745799573822!3d20.963442928555207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453c3572df0ad%3A0x11ab4275f4c21bb7!2zQ8OUTkcgVFkgQ-G7lCBQSOG6pk4gQU1aIFZJ4buGVCBOQU0!5e0!3m2!1svi!2sus!4v1691403584557!5m2!1svi!2sus\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, '2023-08-07 03:13:34', '2023-08-07 03:20:06'),
(21, 'search', 'Iphone,Flycam,Xiaomi,Nokia,Realme,Samsung,Dell', NULL, '2022-08-14 23:44:29', '2023-08-03 00:14:18'),
(23, 'hotline', '<p>Miễn ph&iacute; vận chuyển to&agrave;n quốc</p>', NULL, '2023-02-09 02:36:25', '2023-08-03 18:12:08'),
(24, 'homepage-contact', '<b>Giải Đáp Mọi Thắc Mắc</b>\r\n<p class=\"py-2 mb-0\">Bạn cần tìm giải pháp an ninh cho gia đình với các sản phẩm khóa cửa vân tay, camera quan sát, chuông cửa màn hình?</p>\r\n<p class=\"py-2 mb-0\">Bạn cần giải pháp chấm công, kiểm soát ra vào cho doanh nghiệp?</p>\r\n<p  class=\"py-2 mb-0\" >Hãy để lại thắc mắc và câu hỏi của bạn. AHK VIỆT NAM sẽ giải đáp cho bạn nhanh chóng.</p>', NULL, '2023-02-09 03:22:58', '2023-02-17 00:26:49'),
(25, 'hotline-contact-number', 'Liên hệ: 0948367009', NULL, '2023-02-09 03:45:26', '2023-02-09 03:45:26'),
(27, 'popup_image', '<p><img alt=\"popup\" src=\"/storage/popup/newlest.webp\" style=\"height:504px; width:487px\" /></p>', NULL, '2023-08-02 18:41:35', '2023-08-08 20:22:46'),
(28, 'popup_text', '<div class=\"subtitle-newsletter\">Today&#39;s your day!</div>\r\n\r\n<div class=\"title-newsletter\">\r\n<div><span style=\"color:#ff0000\">$30 off +</span></div>\r\n\r\n<div>free shipping</div>\r\n</div>\r\n\r\n<div class=\"text-newsletter\">when you sign up for emails!</div>', NULL, '2023-08-02 18:47:31', '2023-08-02 19:47:23'),
(29, 'topbar_support_email', 'lienhe@amz.com.vn', NULL, '2023-08-02 21:23:17', '2023-08-02 21:23:17'),
(31, 'homepage_seo_description', 'Công ty cổ phần amz việt nam Giải pháp Audio – Video call độ trễ thấp dành cho nhà máy, công sở', NULL, '2023-08-06 18:11:26', '2023-08-06 18:11:26'),
(35, 'contact_info', '<p><img alt=\"amz logo\" src=\"/storage/flogo.png\" style=\"width:100%\"></p>\r\n<p><strong>CÔNG TY CỔ PHẦN AMZ VIỆT NAM</strong><br>\r\n<strong><i class=\"bi bi-geo-alt\"></i> Địa chỉ:</strong>&nbsp;Tổ 8 P. Yên Nghĩa, Q. Hà Đông, TP. Hà Nội<br>\r\n<strong><i class=\"bi bi-globe\"></i> Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br>\r\n<strong<i class=\"bi bi-envelope\"> Email:&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br>\r\n<strong><i class=\"bi bi-phone-vibrate\"></i> ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</strong<i></p>\r\n<ul class=\"social-link d-flex list-style-none ps-0\">\r\n<li><a href=\"#\"><i class=\"bi bi-twitter\"></i></a></li>\r\n<li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>\r\n<li><a href=\"#\"><i class=\"bi bi-facebook\"></i></a></li>\r\n<li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>\r\n</ul>', NULL, '2022-06-22 07:32:47', '2023-08-05 02:40:46'),
(36, 'tax_vi', '0', NULL, '2023-08-07 20:03:13', '2023-08-07 20:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', 'fa-bar-chart', '/', NULL, NULL, '2022-08-14 00:10:37'),
(2, 0, 19, 'Admin', 'fa-tasks', '', NULL, NULL, '2023-08-05 01:59:12'),
(3, 2, 22, 'Users', 'fa-users', 'auth/users', NULL, NULL, '2023-08-05 01:59:12'),
(4, 2, 23, 'Roles', 'fa-user', 'auth/roles', NULL, NULL, '2023-08-05 01:59:12'),
(5, 2, 24, 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, '2023-08-05 01:59:12'),
(6, 2, 25, 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, '2023-08-05 01:59:12'),
(7, 2, 26, 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, '2023-08-05 01:59:12'),
(8, 0, 27, 'Helpers', 'fa-gears', '', NULL, '2022-06-21 04:50:30', '2023-08-05 01:59:12'),
(9, 8, 28, 'Scaffold', 'fa-keyboard-o', 'helpers/scaffold', NULL, '2022-06-21 04:50:30', '2023-08-05 01:59:12'),
(10, 8, 29, 'Database terminal', 'fa-database', 'helpers/terminal/database', NULL, '2022-06-21 04:50:30', '2023-08-05 01:59:12'),
(11, 8, 30, 'Laravel artisan', 'fa-terminal', 'helpers/terminal/artisan', NULL, '2022-06-21 04:50:30', '2023-08-05 01:59:12'),
(12, 8, 31, 'Routes', 'fa-list-alt', 'helpers/routes', NULL, '2022-06-21 04:50:30', '2023-08-05 01:59:12'),
(13, 0, 18, 'Cấu hình mở rộng', 'fa-toggle-on', 'config', NULL, '2022-06-21 04:51:11', '2023-08-05 01:59:12'),
(14, 2, 20, 'Thư viện', 'fa-file', 'media', NULL, '2022-06-21 04:51:54', '2023-08-05 01:59:12'),
(15, 2, 21, 'Ngôn ngữ', 'fa-language', 'languages', NULL, '2022-06-21 05:03:08', '2023-08-05 01:59:12'),
(16, 0, 4, 'Sản phẩm', 'fa-amazon', NULL, NULL, '2022-06-21 06:47:31', '2023-08-05 01:59:09'),
(17, 16, 5, 'Danh mục sản phẩm', 'fa-certificate', 'categories', NULL, '2022-06-21 06:47:57', '2023-08-05 01:59:34'),
(18, 16, 6, 'Sản phẩm', 'fa-adn', 'products', NULL, '2022-06-21 06:48:20', '2023-08-05 01:59:34'),
(19, 0, 17, 'Banner & Slides', 'fa-slideshare', 'slideshows', NULL, '2022-06-21 20:06:00', '2023-08-05 01:59:12'),
(20, 0, 3, 'Trang', 'fa-paragraph', 'pages', NULL, '2022-06-22 19:50:47', '2023-08-02 20:17:30'),
(21, 0, 10, 'Bài viết', 'fa-paper-plane', NULL, NULL, '2022-06-23 19:11:05', '2023-08-05 01:59:12'),
(22, 21, 12, 'Tin tức', 'fa-hacker-news', 'news', NULL, '2022-06-23 19:11:28', '2023-08-05 01:59:12'),
(23, 21, 13, 'Danh mục', 'fa-certificate', 'news-categories', NULL, '2022-06-23 19:13:18', '2023-08-05 01:59:12'),
(30, 0, 14, 'Trình đơn', 'fa-bars', 'menus', NULL, '2022-08-14 03:20:25', '2023-08-05 01:59:12'),
(25, 0, 16, 'Khách hàng', 'fa-user', 'customers', NULL, '2022-07-02 00:30:43', '2023-08-05 01:59:12'),
(26, 0, 15, 'Đơn hàng', 'fa-amazon', 'orders', NULL, '2022-07-02 00:37:37', '2023-08-05 01:59:12'),
(32, 16, 9, 'Tags', 'fa-arrow-circle-o-right', 'products-tag', NULL, '2023-02-12 05:45:57', '2023-08-05 01:59:34'),
(33, 21, 11, 'Tags', 'fa-arrow-circle-o-right', 'news-tag', NULL, '2023-02-15 07:34:09', '2023-08-05 01:59:12'),
(34, 0, 2, 'Liên hệ', 'fa-send-o', 'contacts', '*', '2023-08-02 20:17:22', '2023-08-02 20:17:30'),
(35, 16, 8, 'Đánh giá', 'fa-star', 'product-reviews', '*', '2023-08-04 01:24:15', '2023-08-05 01:59:34'),
(36, 16, 7, 'Hãng & Thương hiệu', 'fa-android', 'product-brands', '*', '2023-08-05 01:58:54', '2023-08-05 01:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL),
(6, 'Admin helpers', 'ext.helpers', '', '/helpers/*', '2022-06-21 04:50:30', '2022-06-21 04:50:30'),
(7, 'Admin Config', 'ext.config', '', '/config*', '2022-06-21 04:51:11', '2022-06-21 04:51:11'),
(8, 'Media manager', 'ext.media-manager', '', '/media*', '2022-06-21 04:51:54', '2022-06-21 04:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2022-06-21 04:47:22', '2022-06-21 04:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(1, 34, NULL, NULL),
(1, 35, NULL, NULL),
(1, 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$yc.VMquc7IJd3izHdC1.0u7pjk4oLBtvtgTTnL9lkwPXLFWJ0vExC', 'Administrator', NULL, 'PzMhEsVEGiLwvTpjZb5gKnpBxHpDg95Gc4glIbur9KNQDgywh2ALeMIXkTSq', '2022-06-21 04:47:22', '2022-07-04 18:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `order_string` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `show_home` int(11) NOT NULL DEFAULT '0',
  `show_menu` int(11) NOT NULL DEFAULT '0',
  `show_feature_product` int(11) DEFAULT '0',
  `show_bestseller` int(11) DEFAULT '0',
  `mega_type` int(11) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `home_banner` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_title` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `order`, `order_string`, `parent_id`, `active`, `show_home`, `show_menu`, `show_feature_product`, `show_bestseller`, `mega_type`, `short_description`, `content`, `images`, `home_banner`, `seo_meta_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(30, 'Computers & Laptop', 'computers-laptop', 1, '1', 0, 1, 1, 1, 1, 1, 2, '<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/logo-icon/vertical-1.png.webp\" style=\"height:12px; width:93px\" /></p>\r\n\r\n<h2 style=\"text-align:center\"><strong><span style=\"font-size:18px\">BEST FOR GAMING</span></strong></h2>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:16px\">Black case edtion</span></h3>', '<p><img alt=\"\" src=\"/storage/danh-muc/Untitled-1.jpg.webp\" style=\"height:202px; width:1412px\" /></p>', 'images/cate-3.jpg.webp', 'images/vertical-2.webp', 'Computers & Laptop', NULL, '2023-02-08 23:34:44', '2023-08-06 05:22:09'),
(31, 'Digital Cameras', 'digital-cameras', 2, '2', 0, 1, 1, 1, 0, 0, 3, '<p><img alt=\"\" src=\"http://smartaudio.local//storage/logo-icon/vertical-4.png\" style=\"height:18px; width:86px\" /></p>\r\n\r\n<h2>CANON POWERSHOT</h2>\r\n\r\n<h3>Black case edtion</h3>', NULL, 'images/cate-7.jpg.webp', 'images/vertical-3.webp', 'Digital Cameras', NULL, '2023-02-09 00:09:22', '2023-08-06 01:19:52'),
(32, 'Audio & Video', 'audio-video', 5, '5', 0, 1, 1, 1, 0, 1, 1, '<h2>HEADPHONE</h2>\r\n\r\n<h3>Sale up to 30% off</h3>', NULL, 'images/cate-2.jpg.webp', 'images/vertical-5.webp', 'Audio & Video', NULL, '2023-02-09 00:09:31', '2023-08-06 01:24:47'),
(33, 'Mobiles & Tablets', 'mobiles-tablets', 3, '3', 0, 1, 1, 1, 1, 0, 4, NULL, NULL, 'images/cate-1.jpg.webp', '', 'Mobiles & Tablets', NULL, '2023-02-11 04:00:16', '2023-08-06 01:36:21'),
(34, 'TV & Home Theater', 'tv-home-theater', 4, '4', 0, 1, 1, 1, 1, 0, NULL, NULL, NULL, 'images/cate-4.jpg.webp', 'images/banner-may-cham-cong-1.jpg', 'TV & Home Theater', NULL, '2023-02-11 04:02:10', '2023-08-04 19:55:44'),
(35, 'Portable Speakers', 'portable-speakers', 6, '6', 0, 1, 1, 1, 0, 0, NULL, NULL, '<p><span class=\"rub-cate-images\"><img class=\"img-responsive\" title=\"banner-camera-hikvision-ben-phai[1].jpg\" src=\"/storage/uploads/JyqtBvXGXQmAV9uVn9dl2xTaZ1VLCHSiMP35WELb.jpg\" alt=\"banner-camera-hikvision-ben-phai\" width=\"290\" height=\"490\"></span></p>', 'images/cate-6.jpg.webp', 'images/banner-camera.jpg', 'Portable Speakers', NULL, '2023-02-11 04:03:26', '2023-08-04 02:55:45'),
(36, 'Home Appliances', 'home-appliances', 7, '7', 0, 1, 1, 1, 0, 0, NULL, NULL, '<p><span class=\"rub-cate-images\"><img class=\"img-responsive\" title=\"banner-am-thanh-toa-ben-phai[1].jpg\" src=\"/storage/uploads/v6xZeaWBQwHZao1wlBABCpzlD8doT5HDDB4ZQTCo.jpg\" alt=\"banner-am-thanh-toa-ben-phai\" width=\"290\" height=\"490\"></span></p>', 'images/7df7ad9293e175d20a732c75bd5419da.webp', '', 'Home Appliances', NULL, '2023-02-11 04:05:16', '2023-08-04 03:00:17'),
(37, 'Music & Video Games', 'music-video-games', 8, '8', 0, 1, 1, 1, 0, 1, NULL, NULL, '<p><span class=\"rub-cate-images\"><img class=\"img-responsive\" title=\"baner-chuong-cua-co-hinh-ben-phai[1].jpg\" src=\"/storage/uploads/UGweZCnLOjKDWVHOoz8cDj54PdZH65dfbCUc1FQl.jpg\" alt=\"baner-chuong-cua-co-hinh-ben-phai\" width=\"290\" height=\"490\"></span></p>', 'images/cate-5.jpg.webp', 'images/chuong-hinh.jpg', 'Music & Video Games', NULL, '2023-02-11 04:11:49', '2023-08-05 00:49:19'),
(106, 'Computers', 'computers', 1, '11', 30, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Computers', NULL, '2023-08-05 20:31:57', '2023-08-06 17:59:32'),
(107, 'Computers & Tablets', 'computers-tablets', 1, '11', 106, 1, 0, 1, 0, 0, NULL, NULL, '<p>Computers &amp; Tablets</p>', NULL, NULL, 'Computers & Tablets', NULL, '2023-08-05 20:32:24', '2023-08-05 22:30:21'),
(108, 'Data Storage', 'data-storage', 1, '11', 106, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Data Storage', NULL, '2023-08-05 23:30:41', '2023-08-05 23:31:17'),
(109, 'Laptop Accessories', 'laptop-accessories', 1, '11', 106, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Laptop Accessories', NULL, '2023-08-05 23:30:51', '2023-08-05 23:31:14'),
(110, 'Monitors', 'monitors', 1, '11', 106, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Monitors', NULL, '2023-08-05 23:31:08', '2023-08-05 23:31:08'),
(111, 'Accessories', 'accessories', 1, '11', 30, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Accessories', NULL, '2023-08-05 23:31:37', '2023-08-06 17:59:39'),
(112, 'Blank Media', 'blank-media', 1, '11', 111, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Blank Media', NULL, '2023-08-05 23:31:51', '2023-08-05 23:31:51'),
(113, 'Blue Light Blocking', 'blue-light-blocking', 1, '11', 111, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Blue Light Blocking', NULL, '2023-08-05 23:32:26', '2023-08-05 23:32:38'),
(114, 'Cable Security', 'cable-security', 1, '11', 111, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Cable Security', NULL, '2023-08-05 23:33:16', '2023-08-05 23:33:16'),
(115, 'Laptop', 'laptop', 1, '11', 30, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Laptop', NULL, '2023-08-05 23:33:41', '2023-08-06 17:59:44'),
(116, 'Samsung Electronics', 'samsung-electronics', 1, '11', 115, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Samsung Electronics', NULL, '2023-08-05 23:34:04', '2023-08-05 23:34:04'),
(117, 'Lenovo', 'lenovo', 1, '11', 115, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Lenovo', NULL, '2023-08-05 23:34:17', '2023-08-05 23:34:17'),
(118, 'Visual Land', 'visual-land', 1, '11', 115, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Visual Land', NULL, '2023-08-05 23:34:55', '2023-08-05 23:34:55'),
(121, 'DSLR Cameras', 'dslr-cameras', 1, '11', 120, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'DSLR Cameras', NULL, '2023-08-06 01:15:36', '2023-08-06 01:16:32'),
(120, 'Digital', '#', 1, '21', 31, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Digital', NULL, '2023-08-06 01:15:00', '2023-08-06 01:15:00'),
(122, 'Instant Cameras', 'instant-cameras', 1, '11', 120, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Instant Cameras', NULL, '2023-08-06 01:15:49', '2023-08-06 01:16:57'),
(123, 'Mirrorless Cameras', 'mirrorless-cameras', 1, '11', 120, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Mirrorless Cameras', NULL, '2023-08-06 01:16:07', '2023-08-06 01:16:59'),
(124, 'Accessories', '#', 1, '21', 31, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Accessories', NULL, '2023-08-06 01:17:27', '2023-08-06 01:17:27'),
(125, 'Accessory Bundles', 'accessory-bundles', 1, '11', 124, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Accessory Bundles', NULL, '2023-08-06 01:17:48', '2023-08-06 01:17:48'),
(126, 'Bags & Cases', 'bags-cases', 1, '11', 124, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Bags & Cases', NULL, '2023-08-06 01:18:01', '2023-08-06 01:18:07'),
(127, 'Video', '#', 1, '21', 31, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Video', NULL, '2023-08-06 01:18:25', '2023-08-06 01:18:25'),
(128, 'Camcorder Bundles', 'camcorder-bundles', 1, '11', 127, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Camcorder Bundles', NULL, '2023-08-06 01:18:38', '2023-08-06 01:18:38'),
(129, 'Camcorder Lenses', 'camcorder-lenses', 1, '11', 127, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Camcorder Lenses', NULL, '2023-08-06 01:18:52', '2023-08-06 01:18:52'),
(130, 'Audio & Video', '#', 1, '51', 32, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Audio & Video', NULL, '2023-08-06 01:25:10', '2023-08-06 01:25:10'),
(131, 'Vehicle Electronics', 'vehicle-electronics', 1, '11', 130, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Vehicle Electronics', NULL, '2023-08-06 01:25:28', '2023-08-06 01:25:28'),
(132, 'Portable Audio & Video', 'portable-audio-video', 1, '11', 130, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Portable Audio & Video', NULL, '2023-08-06 01:25:40', '2023-08-06 01:25:40'),
(133, 'Cell Phone Carrier', '#', 1, '31', 33, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Cell Phone Carrier', NULL, '2023-08-06 01:36:43', '2023-08-06 01:36:43'),
(134, 'AT&T Wireless', 'at-t-wireless', 1, '11', 133, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'AT&T Wireless', NULL, '2023-08-06 01:37:07', '2023-08-06 01:37:07'),
(135, 'Boost Mobile', 'boost-mobile', 1, '11', 133, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Boost Mobile', NULL, '2023-08-06 01:37:27', '2023-08-06 01:37:27'),
(136, 'Features', '#', 1, '31', 33, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Features', NULL, '2023-08-06 01:37:41', '2023-08-06 01:37:41'),
(137, 'Basic Phone', 'basic-phone', 1, '11', 136, 1, 0, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Basic Phone', NULL, '2023-08-06 01:37:53', '2023-08-06 01:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Tuan Nguyen', '0976852147', 'cskh.gtopvn@gmail.com', NULL, 1, '2022-07-02 02:37:01', '2022-07-02 02:37:01'),
(2, 'Nguyễn Quốc Đại', '0936566552', NULL, NULL, 1, '2022-07-02 19:37:04', '2022-07-02 19:37:04'),
(3, 'Ngô quốc Tuấn', '0922227689', NULL, NULL, 1, '2022-07-02 21:40:31', '2022-07-02 21:40:31'),
(4, 'Nguyễn Tuấn Thành', '0912227689', NULL, NULL, 1, '2022-07-02 21:58:32', '2022-07-02 21:58:32'),
(5, 'Tuan Nguyen', '97852147', 'vtuan1989@gmail.com', NULL, 1, '2023-02-17 20:17:40', '2023-02-17 20:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `title`, `slug`, `order`, `active`, `created_at`, `updated_at`) VALUES
(1, 'VNPost', 'vnpost', 0, 1, '2022-07-02 01:47:18', '2022-07-02 01:47:18'),
(2, 'Giao hàng tiết kiệm', 'giao-hang-tiet-kiem', 0, 1, '2022-07-02 01:47:27', '2022-07-02 01:47:27'),
(3, 'Viettel Post', 'viettel-post', 0, 1, '2022-07-02 01:47:36', '2022-07-02 01:47:36'),
(4, 'J&T Express', 'j-t-express', 0, 1, '2022-07-02 01:47:55', '2022-07-02 01:47:55'),
(5, 'FedEx', 'fedex', 0, 1, '2022-07-02 01:48:17', '2022-07-02 01:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `slug`, `order`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Tiếng việt', 'vi', 1, 1, '2022-06-21 06:42:35', '2022-06-21 06:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id`, `name`, `email`, `phone`, `subject`, `reason`, `content`, `note`, `created_at`, `updated_at`) VALUES
(33, '', 'test@gmail.com', '', 'test@gmail.com đăng ký nhận thông tin mới', 'Đăng ký nhận thông tin', '', '', '2023-08-05 03:01:13', '2023-08-05 03:01:13'),
(34, 'TEST - Tuấn Nguyễn', 'vtuan1989@gmail.com', '0976852147', 'test', 'Báo giá sản phẩm', 'test', NULL, '2023-08-07 03:53:51', '2023-08-07 03:53:51'),
(32, '', 'rubytech.net@gmail.com', '', 'rubytech.net@gmail.com đăng ký nhận thông tin mới', 'Đăng ký nhận thông tin', '', '', '2023-08-02 21:00:44', '2023-08-02 21:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `link`, `order`, `position`, `active`, `type`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', '/', 1, 'top-bar', 1, NULL, '0', '2022-08-14 03:36:24', '2023-08-05 17:58:30'),
(2, 'Liên hệ', 'lien-he', 2, 'top-bar', 1, NULL, '0', '2022-08-14 03:36:52', '2023-08-05 18:11:35'),
(13, 'Tuyển dụng', 'tuyen-dung', 3, 'top-bar', 1, NULL, '0', '2023-02-10 18:51:04', '2023-08-05 18:11:46'),
(3, 'Sản phẩm', '/shop', 1, 'main-menu', 1, 2, '0', '2022-08-14 03:37:03', '2023-08-07 03:56:07'),
(4, 'Giải pháp', '/giai-phap', 2, 'main-menu', 1, 1, '0', '2022-08-14 03:37:18', '2023-08-07 04:02:34'),
(5, 'Dịch vụ', '/dich-vu', 3, 'main-menu', 1, 1, '0', '2022-08-14 03:37:29', '2023-08-07 04:26:36'),
(14, 'Tin tức', '/tin-tuc-noi-bo', 4, 'main-menu', 1, 1, '0', '2023-08-05 18:24:26', '2023-08-07 05:22:49'),
(15, 'Bảo hành', '/bao-hanh', 5, 'main-menu', 1, 1, '0', '2023-08-05 18:29:03', '2023-08-08 19:54:26'),
(16, 'Giới thiệu', '/gioi-thieu', 0, 'main-menu', 1, 1, '0', '2023-08-05 18:30:07', '2023-08-08 19:54:21'),
(17, 'Sản phẩm truyền thanh', '#', 1, 'main-menu', 1, NULL, '3', '2023-08-05 18:32:03', '2023-08-05 18:32:03'),
(18, 'Giám sát, định vị', '#', 2, 'main-menu', 1, NULL, '3', '2023-08-05 18:32:30', '2023-08-05 18:32:30'),
(19, 'Giải pháp audio - video call', '/giai-phap-audio-video-call', 1, 'main-menu', 1, 1, '4', '2023-08-05 19:11:06', '2023-08-07 04:16:14'),
(20, 'Tin tức nội bộ', '/tin-tuc-noi-bo', 1, 'main-menu', 1, NULL, '14', '2023-08-07 05:23:18', '2023-08-07 05:23:18'),
(21, 'Hoạt động xã hội', '/hoat-dong-xa-hoi', 1, 'main-menu', 1, NULL, '14', '2023-08-07 05:23:33', '2023-08-07 05:23:33'),
(22, 'Tin báo chí', '/tin-tuc', 1, 'main-menu', 1, NULL, '14', '2023-08-07 05:24:17', '2023-08-07 05:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_04_173148_create_admin_tables', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2017_07_17_040159_create_config_table', 2),
(7, '2022_06_21_115910_create_languages_table', 3),
(8, '2022_06_21_134618_create_categories_table', 4),
(9, '2022_06_21_135313_create_products_table', 5),
(10, '2022_06_22_030526_create_slideshows_table', 6),
(11, '2022_06_23_024736_create_pages_table', 7),
(12, '2022_06_24_020957_create_news_table', 8),
(13, '2022_06_24_022231_create_news_categories_table', 9),
(14, '2022_07_01_021844_create_packings_table', 10),
(15, '2022_07_01_030237_create_packings_products_table', 11),
(16, '2022_07_02_073003_create_customers_table', 12),
(17, '2022_07_02_073634_create_orders_table', 13),
(18, '2022_07_02_074051_create_orders_details_table', 14),
(19, '2022_07_02_084411_create_deliveries_table', 15),
(20, '2022_07_02_104043_create_payment_method_table', 16),
(21, '2022_07_02_144803_create_request_table', 17),
(22, '2022_08_14_070936_create_customer_reviews_table', 18),
(23, '2022_08_14_101908_create_menus_table', 19),
(25, '2023_02_13_114433_create_products_tag_table', 20),
(26, '2023_02_15_143305_create_news_tag_table', 21),
(27, '2023_08_04_082218_create_product_reviews_table', 22),
(28, '2023_08_05_085734_create_product_brands_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `news_cateid` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_title` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `order`, `active`, `images`, `short_description`, `content`, `news_cateid`, `tags`, `seo_meta_title`, `seo_meta_description`, `seo_meta_images`, `created_at`, `updated_at`) VALUES
(1, 'Thông tin tuyển dụng tháng 8 2023', 'thong-tin-tuyen-dung-thang-8-2023', 0, 1, 'images/tuyen-dung.jpg', NULL, '<p>Nội dung b&agrave;i viết tuyển dụng&nbsp;sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Aenean commodo ligula eget dolor. Nulla facilisi. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. non, velit. Etiam rhoncus. Nunc interdum lacus sit amet orci....</p>', '9', NULL, 'Thông tin tuyển dụng tháng 8 2023', NULL, NULL, '2023-08-07 04:38:12', '2023-08-07 04:42:15'),
(2, 'Chia sẻ công nghệ, giải pháp mới về Trí tuệ nhân tạo và Khoa học dữ liệu trong sản xuất công nghiệp và y tế', 'chia-se-cong-nghe-giai-phap-moi-ve-tri-tue-nhan-tao-va-khoa-hoc-du-lieu-trong-san-xuat-cong-nghiep-va-y-te', 0, 1, 'images/hoi-thao-1.jpg', NULL, '<p>Hội thảo diễn ra theo h&igrave;nh thức kết hợp trực tiếp v&agrave; trực tuyến với sự tham gia v&agrave; tr&igrave;nh b&agrave;y chuy&ecirc;n đề của c&aacute;c chuy&ecirc;n gia trong lĩnh vực Tr&iacute; tuệ nh&acirc;n tạo (AI), Khoa học dữ liệu (DS) tại c&aacute;c &ldquo;điểm cầu&rdquo; ở Hoa Kỳ, Bỉ, Ph&aacute;p, Hi Lạp v&agrave; Việt Nam.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; hội thảo quốc tế về AI v&agrave; DS lần thứ 6 được tổ chức bởi Đại học Đ&ocirc;ng &Aacute; phối hợp c&aacute;c viện nghi&ecirc;n cứu, c&aacute;c trường đại học, c&aacute;c nh&agrave; khoa học v&agrave; chuy&ecirc;n gia trong nước v&agrave; quốc tế.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"hoi-thao-1\" src=\"https://amz.com.vn/public/upload/hoi-thao-1.jpg?1663069896375\" title=\"hoi-thao-1\" /></p>\r\n\r\n<p>Theo &ocirc;ng Lương Minh S&acirc;m &ndash; Chủ tịch Hội đồng Trường Đại học Đ&ocirc;ng &Aacute;, với rất nhiều giải ph&aacute;p mới được li&ecirc;n tục nghi&ecirc;n cứu v&agrave; cải tiến, AI v&agrave; DS sẽ c&ograve;n đ&oacute;ng g&oacute;p mạnh mẽ hơn v&agrave;o qu&aacute; tr&igrave;nh chuyển đổi số quốc gia, trong sự ph&aacute;t triển kinh tế x&atilde; hội bối cảnh ảnh hưởng bởi dịch COVID-19, nhất l&agrave; trong c&ocirc;ng t&aacute;c kiểm tra sức khỏe hậu COVID-19 cho người d&acirc;n, trong phục hồi nền sản xuất th&ocirc;ng minh, quản l&yacute; chuỗi cung ứng th&ocirc;ng minh v&agrave; đẩy nhanh qu&aacute; tr&igrave;nh chuyển đổi kỹ thuật số của c&aacute;c doanh nghiệp,...</p>\r\n\r\n<p>&quot;Hội thảo lần n&agrave;y c&ograve;n l&agrave; diễn đ&agrave;n x&uacute;c tiến c&aacute;c hoạt động hợp t&aacute;c, c&aacute;c chương tr&igrave;nh li&ecirc;n kết đ&agrave;o tạo quốc tế v&agrave; c&aacute;c dự &aacute;n khởi nghiệp cho giảng vi&ecirc;n, nh&agrave; nghi&ecirc;n cứu v&agrave; sinh vi&ecirc;n ng&agrave;nh Tr&iacute; tuệ nh&acirc;n tạo v&agrave; Khoa học dữ liệu Đại học Đ&ocirc;ng &Aacute;&quot;. &ocirc;ng Lương Minh S&acirc;m n&oacute;i.</p>\r\n\r\n<p>Tại hội thảo, c&aacute;c chuy&ecirc;n gia đ&atilde; tr&igrave;nh b&agrave;y 12 b&aacute;o c&aacute;o chuy&ecirc;n đề, trao đổi kiến thức khoa học li&ecirc;n ng&agrave;nh, đa ng&agrave;nh, chia sẻ c&ocirc;ng nghệ v&agrave; giải ph&aacute;p mới về Tr&iacute; tuệ nh&acirc;n tạo v&agrave; Khoa học dữ liệu trong hai lĩnh vực chủ yếu l&agrave; sản xuất c&ocirc;ng nghiệp v&agrave; y tế như: Nghi&ecirc;n cứu &ldquo;Học tuần tự minh bạch: C&ocirc;ng cụ mạnh mẽ cho gi&aacute;m s&aacute;t c&aacute;c quy tr&igrave;nh tuần tự&rdquo; của GS. Peihua Qiu &ndash; Giảng vi&ecirc;n cao cấp tại ĐH Florida (Mỹ); nghi&ecirc;n cứu &ldquo;Thiết kế hệ thống theo d&otilde;i sức khỏe điện t&acirc;m đồ với Học li&ecirc;n kết v&agrave; Tr&iacute; tuệ nh&acirc;n tạo c&oacute; thể giải th&iacute;ch được (XAI)&rdquo; của PGS.TSKH Trần Kim Ph&uacute;c - nh&agrave; nghi&ecirc;n cứu Đại học Lille, Ensait &amp; Gemtex, Ph&aacute;p;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"hoi-thao-2\" src=\"https://amz.com.vn/public/upload/hoi-thao-2.jpg?1663069903252\" title=\"hoi-thao-2\" /></p>\r\n\r\n<p>Nghi&ecirc;n cứu &ldquo;Hệ thống đ&aacute;nh gi&aacute; chứng ngưng thở trong l&uacute;c ngủ tại nh&agrave;: Xem x&eacute;t tiếp cận kinh tế x&atilde; hội ở c&aacute;c quốc gia c&oacute; thu nhập thấp v&agrave; trung b&igrave;nh&rdquo; của PGS.TS Mai Anh Tuấn &ndash; Giảng vi&ecirc;n cao cấp tại Trường ĐH C&ocirc;ng nghệ, ĐH Quốc gia H&agrave; Nội; tham luận &ldquo;Đối ph&oacute; với sự kh&ocirc;ng chắc chắn trong chẩn đo&aacute;n v&agrave; quản l&yacute; sức khỏe của c&aacute;c hệ thống kỹ thuật gồm nhiều th&agrave;nh phần&rdquo;&nbsp; của PGS.TS Nguyễn Thị Phương Khanh &ndash; Nh&agrave; nghi&ecirc;n cứu trường Kỹ sư Tarbes (ENIT), Viện B&aacute;ch khoa quốc gia Toulouse, Ph&aacute;p; tham luận &ldquo;C&aacute;c phương ph&aacute;p dự b&aacute;o v&agrave; ph&aacute;t hiện bất thường trong quản l&yacute; chuỗi cung ứng bằng c&aacute;ch sử dụng c&aacute;c kỹ thuật LSTM v&agrave; LSTM autoencoder&rdquo; của TS. Nguyễn Hữu Du &ndash; Viện trưởng Viện IAD ĐH Đ&ocirc;ng &Aacute;;...</p>\r\n\r\n<p>Hội thảo khoa học quốc tế l&agrave; diễn đ&agrave;n thường ni&ecirc;n của những người c&ocirc;ng t&aacute;c nghi&ecirc;n cứu, ứng dụng, giảng dạy v&agrave; quản l&yacute; trong lĩnh vực tr&iacute; tuệ nh&acirc;n tạo, khoa học dữ liệu, c&ocirc;ng nghệ th&ocirc;ng tin trao đổi &yacute; tưởng, kết nối c&aacute;c kết quả nghi&ecirc;n cứu trong c&ugrave;ng chủ đề v&agrave; t&igrave;m kiếm sự hợp t&aacute;c, ph&aacute;t triển đa phương. Qua đ&oacute;, sẵn s&agrave;ng x&uacute;c tiến hợp t&aacute;c nhiều mặt dựa tr&ecirc;n thế mạnh của từng th&agrave;nh vi&ecirc;n trong đ&agrave;o tạo, nghi&ecirc;n cứu khoa học, đặc biệt l&agrave; chia sẻ s&aacute;ng kiến v&agrave; chuyển giao c&ocirc;ng nghệ mang t&iacute;nh ứng dụng cao thuộc c&aacute;c lĩnh vực nghi&ecirc;n cứu.</p>\r\n\r\n<p><strong>C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</strong><br />\r\n<strong>Địa chỉ:</strong>&nbsp;Số 215 Đường Quyết Thắng, Tổ 8 P. Y&ecirc;n Nghĩa, Q. H&agrave; Đ&ocirc;ng, Tp. H&agrave; Nội<br />\r\n<strong>Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br />\r\n<strong>Email:</strong>&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br />\r\n<strong>ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</p>', '10', NULL, 'Chia sẻ công nghệ, giải pháp mới về Trí tuệ nhân tạo và Khoa học dữ liệu trong sản xuất công nghiệp và y tế', NULL, NULL, '2023-08-07 05:20:14', '2023-08-07 05:20:14'),
(3, 'Trí tuệ nhân tạo AI giúp hiệu quả quy trình quản lý chất lượng như thế nào?', 'tri-tue-nhan-tao-ai-giup-hieu-qua-quy-trinh-quan-ly-chat-luong-nhu-the-nao', 0, 1, 'images/ai-1.jpg', NULL, '<h2>Quản l&yacute; chất lượng với tr&iacute; tuệ nh&acirc;n tạo AI</h2>\r\n\r\n<p>Quản l&yacute; chất lượng l&agrave; g&igrave;?</p>\r\n\r\n<p>C&aacute;c nhiệm vụ cơ bản của quản l&yacute; chất lượng (Quality Management &ndash; QM) bao gồm gi&aacute;m s&aacute;t c&aacute;c qu&aacute; tr&igrave;nh sản xuất đang diễn ra v&agrave; kiểm tra sản phẩm tr&ecirc;n cơ sở c&aacute;c mẫu ngẫu nhi&ecirc;n của th&agrave;nh phẩm hoặc sản phẩm trung gian, qua đ&oacute; x&aacute;c định đối tượng n&agrave;o kh&ocirc;ng tương ứng với c&aacute;c ti&ecirc;u chuẩn chất lượng đ&atilde; đặt ra trong kế hoạch chất lượng</p>\r\n\r\n<p>C&oacute; thể thấy, mục ti&ecirc;u của QM trong c&aacute;c c&ocirc;ng ty sản xuất lu&ocirc;n l&agrave; đạt được c&agrave;ng &iacute;t l&atilde;ng ph&iacute; c&agrave;ng tốt để tiết kiệm t&agrave;i nguy&ecirc;n. Điều đ&oacute; kh&ocirc;ng phải l&uacute;c n&agrave;o cũng hiệu quả. Nguy&ecirc;n nh&acirc;n l&agrave; do những sai lệch trong qu&aacute; tr&igrave;nh sản xuất dẫn đến giảm chất lượng thường được nhận biết qu&aacute; muộn. Do đ&oacute;, qu&aacute; tr&igrave;nh quản l&yacute; chất lượng trong nh&agrave; m&aacute;y ng&agrave;y nay thường &aacute;p dụng c&aacute;c giải ph&aacute;p, phần mềm hiện đại, nhằm đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về sản phẩm ng&agrave;y c&agrave;ng cao&nbsp; của thị trường.&nbsp;</p>\r\n\r\n<p>Quản l&yacute; chất lượng th&ocirc;ng minh với tr&iacute; tuệ AI</p>\r\n\r\n<p>Tạp ch&iacute; Forbes từng nhận định, 83% c&aacute;c c&ocirc;ng ty xem tr&iacute; tuệ nh&acirc;n tạo AI l&agrave; ưu ti&ecirc;n chiến lược hoạt động của m&igrave;nh. Với khả năng hoạt động trong rất nhiều lĩnh vực v&agrave; c&oacute; nhiều ứng dụng đặc biệt, c&aacute;c c&ocirc;ng cụ hỗ trợ AI c&oacute; thể tăng năng suất v&agrave; mang lại cho c&aacute;c c&ocirc;ng ty sự linh hoạt để th&iacute;ch ứng với một m&ocirc;i trường lu&ocirc;n thay đổi.&nbsp;</p>\r\n\r\n<p>Nhiều c&ocirc;ng ty đ&atilde; bắt đầu kết hợp c&aacute;c c&ocirc;ng cụ để tự động h&oacute;a đ&aacute;nh gi&aacute; v&agrave; gi&aacute;m s&aacute;t c&aacute;c hoạt động sản xuất, đồng thời thực hiện ph&acirc;n t&iacute;ch t&igrave;nh huống th&ocirc;ng qua tất cả c&aacute;c tương t&aacute;c. Một số c&ocirc;ng cụ sẽ c&aacute; nh&acirc;n h&oacute;a việc đ&agrave;o tạo v&agrave; huấn luyện cũng như cung cấp phản hồi ngay lập tức khi x&aacute;c định lỗi kịp thời v&agrave; nhanh ch&oacute;ng trong thời gian thực.</p>\r\n\r\n<p>Ng&agrave;y n&agrave;y, AI dần trở th&agrave;nh một phần quan trọng của quy tr&igrave;nh quản l&yacute; chất lượng bởi khả năng đ&aacute;p ứng với nhiều mục ti&ecirc;u v&agrave; y&ecirc;u cầu. C&ugrave;ng với đ&oacute;, n&oacute; sẽ th&uacute;c đẩy việc:</p>\r\n\r\n<p>Ra quyết định dựa tr&ecirc;n ph&acirc;n t&iacute;ch</p>\r\n\r\n<p>Sự ch&iacute;nh x&aacute;c</p>\r\n\r\n<p>Tự động h&oacute;a</p>\r\n\r\n<p>Đ&agrave;o tạo v&agrave; huấn luyện th&ocirc;ng minh</p>\r\n\r\n<p>Trong quản l&yacute; chất lượng, AI thường phải c&oacute; Thị gi&aacute;c m&aacute;y t&iacute;nh (Computer Vision), một tập hợp con của tr&iacute; tuệ nh&acirc;n tạo cho ph&eacute;p m&aacute;y m&oacute;c hiểu được thế giới thị gi&aacute;c. Với sự trợ gi&uacute;p của thị gi&aacute;c m&aacute;y t&iacute;nh, một hệ thống AI c&oacute; thể định vị v&agrave; x&aacute;c định ch&iacute;nh x&aacute;c c&aacute;c h&igrave;nh ảnh v&agrave; video để lấy th&ocirc;ng tin c&oacute; &yacute; nghĩa từ thế giới thực.</p>\r\n\r\n<p>Nh&oacute;m thị gi&aacute;c m&aacute;y t&iacute;nh cần thiết lập một bộ quy tắc r&otilde; r&agrave;ng m&ocirc; tả chất lượng c&oacute; &yacute; nghĩa như thế n&agrave;o trong bối cảnh dự &aacute;n cũng như c&aacute;c y&ecirc;u cầu sản xuất. Ngo&agrave;i c&aacute;c y&ecirc;u cầu về chất lượng, bộ quy tắc n&ecirc;n bao gồm c&aacute;c Ti&ecirc;u ch&iacute; ch&uacute; th&iacute;ch &ndash; tập hợp c&aacute;c quy tắc x&aacute;c định đối tượng n&agrave;o cần ch&uacute; th&iacute;ch, c&aacute;ch ch&uacute; th&iacute;ch ch&uacute;ng một c&aacute;ch ch&iacute;nh x&aacute;c v&agrave; mục ti&ecirc;u chất lượng l&agrave; g&igrave;. Bộ quy tắc n&agrave;y ho&agrave;n to&agrave;n c&oacute; thể gi&uacute;p AI tự học v&agrave; tự ho&agrave;n thiện c&aacute;c dữ liệu cho tương lai.</p>\r\n\r\n<p>Việc c&oacute; c&aacute;c nền tảng trực quan nhận biết v&agrave; lựa chọn c&aacute;c tương t&aacute;c để đ&aacute;nh gi&aacute; sẽ tối ưu h&oacute;a c&aacute;c t&aacute;c vụ lặp đi lặp lại với khối lượng c&ocirc;ng việc lớn. Ngo&agrave;i ra, dữ liệu kết quả v&agrave; th&ocirc;ng tin chi tiết sẽ th&uacute;c đẩy qu&aacute; tr&igrave;nh ra quyết định. Đ&acirc;y cũng ch&iacute;nh l&agrave; l&yacute; do m&agrave; c&aacute;c nh&agrave; quản l&yacute; quy tr&igrave;nh chất lượng trong nh&agrave; m&aacute;y đang dần ưa chuộng việc sử dụng sự hỗ trợ từ AI.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"ai-1\" src=\"https://amz.com.vn/public/upload/ai-1.jpg?1663069424392\" title=\"ai-1\" /></p>\r\n\r\n<h2>Tr&iacute; tuệ AI trong quy tr&igrave;nh quản l&yacute; chất lượng c&oacute; khả năng g&igrave;?</h2>\r\n\r\n<p>Việc &aacute;p dụng tr&iacute; tuệ nh&acirc;n tạo AI v&agrave;o trong quy tr&igrave;nh quản l&yacute; chất lượng c&oacute; thể gi&uacute;p c&aacute;c nh&agrave; m&aacute;y:&nbsp;</p>\r\n\r\n<p>Kiểm so&aacute;t chất lượng</p>\r\n\r\n<p>C&aacute;c thuật to&aacute;n m&aacute;y t&iacute;nh v&agrave; thị gi&aacute;c m&aacute;y t&iacute;nh (Computer Vision) c&oacute; thể được sử dụng để tự động h&oacute;a nhiệm vụ ph&aacute;t hiện lỗi sản phẩm cho nh&agrave; m&aacute;y. C&aacute;c c&ocirc;ng nghệ n&agrave;y c&oacute; thể ph&aacute;t hiện c&aacute;c vấn đề chất lượng bằng c&aacute;ch sử dụng camera hoặc c&aacute;c cảm biến để quết cũng như bằng c&aacute;ch truy cập v&agrave; ph&acirc;n t&iacute;ch dữ liệu trong thời gian thực, AI sẽ đề xuất c&aacute;c cải thiện quy tr&igrave;nh hoạt động để xử l&yacute; c&aacute;c t&igrave;nh huống ph&aacute;t sinh lỗi trong sản xuất.</p>\r\n\r\n<p>Đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về tu&acirc;n thủ</p>\r\n\r\n<p>Một trong những th&aacute;ch thức trong thời đại kỹ thuật số thường khiến c&aacute;c nh&agrave; sản xuất đau đầu, đ&oacute; l&agrave; việc đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về tu&acirc;n thủ. Tuy vậy, khi sử dụng AI, bạn c&oacute; thể đ&aacute;p ứng c&aacute;c y&ecirc;u cầu n&agrave;y với khả năng gi&aacute;m s&aacute;t mạnh mẽ trong thời gian thực v&agrave; ph&aacute;t hiện sự bất thường, cũng như c&aacute;c cơ chế phản hồi tự động.&nbsp;</p>\r\n\r\n<p>Ph&acirc;n t&iacute;ch dự đo&aacute;n</p>\r\n\r\n<p>C&aacute;c kỹ thuật AI c&oacute; thể gi&uacute;p c&aacute;c chuy&ecirc;n gia chất lượng tạo ra c&aacute;c dự b&aacute;o ch&iacute;nh x&aacute;c. Bằng việc thu thập c&aacute;c dữ liệu sản xuất, tr&iacute; tuệ nh&acirc;n tạo c&oacute; thể x&aacute;c định c&aacute;c quy tr&igrave;nh n&agrave;o hoạt động chưa hiệu quả, c&aacute;c bộ phận n&agrave;o thường g&acirc;y ra lỗi kĩ thuật, từ đ&oacute; dự b&aacute;o v&agrave; hỗ trợ l&ecirc;n kế hoạch xử l&yacute; trước khi c&aacute;c sai s&oacute;t của sản xuất g&acirc;y ra cho sản phẩm diễn ra.&nbsp;</p>\r\n\r\n<p>Huấn luyện nh&acirc;n vi&ecirc;n</p>\r\n\r\n<p>Việc đ&agrave;o tạo nh&acirc;n vi&ecirc;n hiệu quả cũng quan trọng kh&ocirc;ng k&eacute;m việc đảm bảo chất lượng sản phẩm. Ng&agrave;y nay,&nbsp; việc đ&agrave;o tạo cho nh&acirc;n vi&ecirc;n c&oacute; thể trở n&ecirc;n th&uacute; vị v&agrave; hiệu quả hơn với học m&aacute;y &ndash; Machine Learning. Việc &aacute;p dụng c&aacute;c thuật to&aacute;n học m&aacute;y c&oacute; thể cải thiện nội dung hướng dẫn, c&aacute; nh&acirc;n h&oacute;a việc huấn luyện hiệu suất v&agrave; cung cấp phản hồi trực quan tốt hơn.&nbsp;</p>\r\n\r\n<p>Một số ng&agrave;nh c&ocirc;ng nghiệp đ&atilde; &aacute;p dụng c&ocirc;ng nghệ n&agrave;y. Một v&iacute; dụ l&agrave; Air Method, một c&ocirc;ng ty vận tải y tế đang sử dụng nền tảng AI dựa tr&ecirc;n đ&aacute;m m&acirc;y c&oacute; t&ecirc;n l&agrave; Amplifire để x&aacute;c định cấp độ kỹ năng của học vi&ecirc;n v&agrave; đưa ra c&aacute;c b&agrave;i kiểm tra tương ứng bao gồm c&aacute;c c&acirc;u hỏi trắc nghiệm v&agrave; phỏng vấn. Điều n&agrave;y dẫn đến đ&agrave;o tạo được c&aacute; nh&acirc;n h&oacute;a v&agrave; hiệu quả, g&oacute;p phần n&acirc;ng cao khả năng quản l&yacute; nh&acirc;n sự cho c&ocirc;ng ty.</p>\r\n\r\n<p>Đ&aacute;p ứng chuỗi cung ứng</p>\r\n\r\n<p>Với AI, ch&uacute;ng ta c&oacute; thể c&oacute; một chuỗi cung ứng được tối ưu h&oacute;a v&igrave; c&aacute;c thuật to&aacute;n c&oacute; thể được sử dụng để ph&aacute;t hiện v&agrave; t&igrave;m hiểu c&aacute;c nhu cầu của thị trường đối với sản phẩm theo thời gian v&agrave; từng khu vực địa l&yacute;. Điều n&agrave;y c&oacute; thể gi&uacute;p c&aacute;c c&ocirc;ng ty t&igrave;m ra c&aacute;c phương &aacute;n tốt nhất để tiếp cận kh&aacute;ch h&agrave;ng ở từng khu vực, nơi c&oacute; c&aacute;c nhu cầu về chất lượng v&agrave; mẫu m&atilde; sản phẩm kh&aacute;c nhau.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"ai-2\" src=\"https://amz.com.vn/public/upload/ai-2.png?1663069444622\" title=\"ai-2\" /></p>\r\n\r\n<h2>[CASE STUDY] Hệ thống ph&acirc;n loại / kiểm tra chất lượng bằng AI của VTI Solutions</h2>\r\n\r\n<p>Một nh&agrave; m&aacute;y sản xuất k&iacute;nh v&agrave; c&aacute;c loại&nbsp; đĩa cứng SSD của Nhật Bản tại Việt Nam đang t&igrave;m kiếm một giải ph&aacute;p gi&uacute;p ph&acirc;n loại c&aacute;c lỗi v&agrave; gi&aacute;m s&aacute;t chất lượng tr&ecirc;n sản phẩm của m&igrave;nh. Tr&ecirc;n thị trường về c&aacute;c phần cứng m&aacute;y t&iacute;nh v&agrave; laptop, việc xảy ra một lỗi d&ugrave; chỉ l&agrave; rất nhỏ c&oacute; thể dẫn đến l&agrave;m giảm hiệu năng hoạt động của m&aacute;y t&iacute;nh, tạo n&ecirc;n một trải nghiệm kh&ocirc;ng tốt cho kh&aacute;ch h&agrave;ng v&agrave; g&acirc;y ảnh hưởng xấu đến c&ocirc;ng ty. C&aacute;c giải ph&aacute;p ph&acirc;n loại, bao gồm cả thủ c&ocirc;ng v&agrave; m&aacute;y m&oacute;c, dường như chưa mang lại hiệu quả như k&igrave; vọng.</p>\r\n\r\n<p>VTI Solutions c&oacute; c&acirc;u trả lời cho b&agrave;i to&aacute;n n&agrave;y. Với c&ocirc;ng nghệ AI tr&ecirc;n nền tảng đ&aacute;m m&acirc;y (Cloud computing), VTI đ&atilde; x&acirc;y dựng một hệ thống kiểm tra chất lượng ph&ugrave; hợp cho việc gi&aacute;m s&aacute;t sản phẩm ổ đĩa cứng SSD.&nbsp; Giải ph&aacute;p n&agrave;y c&ograve;n c&oacute; khả năng ph&aacute;t hiện lỗi, ph&acirc;n loại đối tượng v&agrave; đ&aacute;nh gi&aacute; chất lượng cho tất cả c&aacute;c loại h&igrave;nh c&ocirc;ng nghiệp.</p>\r\n\r\n<p>Tr&iacute; tuệ AI c&oacute; 2 nhiệm vụ ch&iacute;nh trong hệ thống chất lượng n&agrave;y:</p>\r\n\r\n<p>AI được sử dụng cho thị gi&aacute;c m&aacute;y t&iacute;nh (Computer Vision) trong việc kiểm tra ti&ecirc;u chuẩn, ph&aacute;t hiện c&aacute;c lỗi của ổ đĩa</p>\r\n\r\n<p>AI được &aacute;p dụng để ph&acirc;n t&iacute;ch v&agrave; dự đo&aacute;n nguy&ecirc;n nh&acirc;n</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh sản xuất, hệ thống sẽ qu&eacute;t c&aacute;c ổ đĩa cần được kiểm tra ở mọi g&oacute;c cạnh để ph&acirc;n t&iacute;ch v&agrave; dự đo&aacute;n. C&aacute;c dữ liệu sau đ&oacute; sẽ được AI lưu trữ v&agrave; xem x&eacute;t c&aacute;c kết quả được kiểm tra c&aacute;c khuyết tật về vật liệu v&agrave; xử l&yacute; c&oacute; thể c&oacute; như vết xước, vết nứt, vị tr&iacute; bị lệch hoặc c&aacute;c ti&ecirc;u ch&iacute; loại trừ kh&aacute;c. T&ugrave;y thuộc v&agrave;o ti&ecirc;u ch&iacute; chất lượng cơ bản, sản phẩm được kiểm tra chất lượng &ndash; hoặc bị loại bỏ trực tiếp.</p>\r\n\r\n<p>Mỗi dữ liệu được ghi lại g&oacute;p phần cải tiến thuật to&aacute;n, quyết định &ldquo;đạt&rdquo; hoặc &ldquo;kh&ocirc;ng đạt&rdquo; tương ứng của tr&iacute; tuệ AI được ghi lại to&agrave;n diện, để cải tiến hoặc li&ecirc;n kết với c&aacute;c dữ liệu kh&aacute;c song song với d&acirc;y chuyền sản xuất được xem x&eacute;t r&otilde; r&agrave;ng, giải ph&aacute;p đầu ti&ecirc;n li&ecirc;n tục được gi&aacute;m s&aacute;t v&agrave; cải tiến trong qu&aacute; tr&igrave;nh vận h&agrave;nh thử nghiệm v&agrave; tối ưu h&oacute;a bởi c&aacute;c chuy&ecirc;n gia của VTI Solutions. Sau khi đạt được độ ch&iacute;nh x&aacute;c hơn 99%, hệ thống kiểm tra chất lượng mới sau đ&oacute; c&oacute; thể được li&ecirc;n kết v&agrave;o qu&aacute; tr&igrave;nh sản xuất v&agrave; gi&aacute;m s&aacute;t ho&agrave;n to&agrave;n trong nh&agrave; m&agrave; kh&ocirc;ng cần th&ecirc;m bất kỳ h&agrave;nh động n&agrave;o của nh&agrave; cung cấp.&nbsp;</p>\r\n\r\n<p>Cuối c&ugrave;ng, với việc sử dụng AI c&ugrave;ng với thị gi&aacute;c m&aacute;y t&iacute;nh, giải ph&aacute;p của VTI Solutions đ&atilde; loại bỏ đ&aacute;ng kể c&aacute;c t&aacute;c vụ v&agrave; sai s&oacute;t được thực hiện bởi con người, n&acirc;ng cao hiệu quả sản xuất ổ đĩa l&ecirc;n đến 1,2 triệu đĩa/ng&agrave;y. Việc n&acirc;ng cao hơn nữa chất lượng sản phẩm đến tay người ti&ecirc;u d&ugrave;ng cuối c&ugrave;ng cũng gi&uacute;p cải thiện h&igrave;nh ảnh của to&agrave;n bộ c&ocirc;ng ty, qua đ&oacute; g&oacute;p phần n&acirc;ng cao năng lực cạnh tranh tr&ecirc;n thị trường.</p>\r\n\r\n<p><strong>C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</strong><br />\r\n<strong>Địa chỉ:</strong>&nbsp;Số 215 Đường Quyết Thắng, Tổ 8 P. Y&ecirc;n Nghĩa, Q. H&agrave; Đ&ocirc;ng, Tp. H&agrave; Nội<br />\r\n<strong>Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br />\r\n<strong>Email:</strong>&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br />\r\n<strong>ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</p>', '10', NULL, 'Trí tuệ nhân tạo AI giúp hiệu quả quy trình quản lý chất lượng như thế nào?', NULL, NULL, '2023-08-07 05:20:42', '2023-08-07 05:20:42'),
(4, '4 giải pháp ứng dụng trí tuệ nhân tạo hỗ trợ đắc lực cho các bác sĩ', '4-giai-phap-ung-dung-tri-tue-nhan-tao-ho-tro-dac-luc-cho-cac-bac-si', 0, 1, 'images/giai-phap-1.jpg', NULL, '<p>Theo c&aacute;c chuy&ecirc;n gia GE, những ảnh hưởng từ đại dịch khiến 2022 tiếp tục l&agrave; một năm vất vả đối với lực lượng y tế tr&ecirc;n to&agrave;n thế giới. Tuy nhi&ecirc;n, một tin vui cho ng&agrave;nh y tế l&agrave; hiện đ&atilde; c&oacute; nhiều c&ocirc;ng nghệ mới đang gi&uacute;p giảm tải cho y b&aacute;c sĩ v&agrave; đội ngũ hỗ trợ. Điển h&igrave;nh như c&ocirc;ng nghệ tr&iacute; tuệ nh&acirc;n tạo (AI) hiện đang thu thập v&agrave; ph&acirc;n t&iacute;ch rất nhiều dữ liệu mang t&iacute;nh thực tiễn hay thậm ch&iacute; c&oacute; thể tự thực hiện c&aacute;c thủ thuật phẫu thuật.</p>\r\n\r\n<h2>Robot thực hiện th&agrave;nh c&ocirc;ng mổ nội soi tr&ecirc;n lợn</h2>\r\n\r\n<p>Một robot sử dụng tr&iacute; tuệ nh&acirc;n tạo đ&atilde; thực hiện th&agrave;nh c&ocirc;ng ca phẫu thuật nội soi tr&ecirc;n lợn m&agrave; hầu như kh&ocirc;ng cần đến sự can thiệp của con người.</p>\r\n\r\n<p>Axel Krieger, Trợ l&yacute; gi&aacute;o sư kỹ thuật cơ kh&iacute; tại trường Kỹ thuật Whiting của Johns Hopkins, cho biết: &ldquo;Phẫu thuật bằng robot tự động sẽ được sử dụng trong c&aacute;c thủ thuật đ&ograve;i hỏi độ ch&iacute;nh x&aacute;c cao, phụ thuộc nhiều v&agrave;o kỹ năng của b&aacute;c sĩ phẫu thuật. Ch&uacute;ng t&ocirc;i hy vọng rằng điều n&agrave;y c&oacute; thể dẫn tới phương ph&aacute;p tiếp cận phẫu thuật c&ocirc;ng bằng để chăm s&oacute;c bệnh nh&acirc;n với kết quả dễ đo&aacute;n v&agrave; nhất qu&aacute;n hơn&rdquo;.</p>\r\n\r\n<p>Nh&oacute;m của Kreiger đ&atilde; cung cấp một thuật to&aacute;n học m&aacute;y cho robot Smart Tissue Autonomous (hay c&ograve;n gọi l&agrave; STAR), cho ph&eacute;p n&oacute; thực hiện thủ thuật tr&ecirc;n m&ocirc; mềm - vốn phức tạp, đ&ograve;i hỏi độ ch&iacute;nh x&aacute;c để kh&acirc;u thật chắc chắn.</p>\r\n\r\n<p>C&ugrave;ng với một ống nội soi 3D, STAR đ&atilde; kh&acirc;u ch&iacute;nh x&aacute;c ruột non của lợn. Krieger cho biết: &ldquo;Ph&aacute;t hiện n&agrave;y cho thấy ch&uacute;ng ta c&oacute; thể tự động h&oacute;a một trong những nhiệm vụ phức tạp v&agrave; tinh vi nhất trong qu&aacute; tr&igrave;nh phẫu thuật: Nối hai đầu ruột non. STAR đ&atilde; thực hiện quy tr&igrave;nh n&agrave;y tr&ecirc;n 4 con lợn v&agrave; tạo ra kết quả tốt&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"giai-phap\" src=\"https://amz.com.vn/public/upload/giai-phap.jpg?1663069077665\" title=\"giai-phap\" /></p>\r\n\r\n<h2>C&ocirc;ng nghệ AI của GE Healthcare gi&uacute;p giảm bớt c&ocirc;ng việc của c&aacute;c b&aacute;c sĩ</h2>\r\n\r\n<p>Giải ph&aacute;p Revolution Ascend with Effortless Workflow v&agrave; AIR Recon DL của GE Healthcare l&agrave; những v&iacute; dụ về c&aacute;c hệ thống AI &ldquo;đa phương thức&rdquo; sở hữu năng lực khai th&aacute;c dữ liệu v&agrave; th&ocirc;ng tin chuy&ecirc;n s&acirc;u v&agrave;o một m&ocirc; h&igrave;nh duy nhất, qua đ&oacute; giảm g&aacute;nh nặng cho đội ngũ b&aacute;c sĩ.</p>\r\n\r\n<p>AIR Recon DL l&agrave; một c&ocirc;ng nghệ t&aacute;i cấu tr&uacute;c h&igrave;nh ảnh học s&acirc;u c&oacute; thể hoạt động tr&ecirc;n tất cả m&ocirc; h&igrave;nh giải phẫu, mang lại chất lượng v&agrave; độ ph&acirc;n giải h&igrave;nh ảnh tuyệt vời ngay cả với thời gian chụp ngắn hơn. C&ograve;n giải ph&aacute;p Revolution Ascend with Effortless Workflow sẽ tối ưu c&ocirc;ng nghệ AI để tự động ho&aacute; gần như mọi bước trong quy tr&igrave;nh chụp CT hiện nay, gi&uacute;p giảm tới 66% số lần nhấp chuột v&agrave; tiết kiệm 21% thời gian cho một lần chụp.</p>\r\n\r\n<p>&ldquo;Bạn sẽ nhận được nhiều tập hợp kiểm chứng đồng thời tại một điểm v&agrave; c&oacute; thể t&iacute;ch hợp AI một c&aacute;ch mượt m&agrave; v&agrave;o quy tr&igrave;nh kh&aacute;m chữa bệnh để tự động ho&aacute; v&agrave; đơn giản h&oacute;a những t&aacute;c vụ tốn thời gian&rdquo;, Gi&aacute;m đốc Kỹ thuật số của GE Healthcare Phadnis cho biết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"giai-phap-3\" src=\"https://amz.com.vn/public/upload/giai-phap-3.jpg?1663069085848\" title=\"giai-phap-3\" /></p>\r\n\r\n<h2>C&ocirc;ng nghệ AI gi&uacute;p người bị liệt c&oacute; thể di chuyển</h2>\r\n\r\n<p>C&aacute;c nh&agrave; nghi&ecirc;n cứu tại Thụy Điển đ&atilde; ph&aacute;t triển một điện cực tr&iacute; tuệ nh&acirc;n tạo gi&uacute;p 3 bệnh nh&acirc;n bị liệt c&oacute; thể đi bộ, bơi v&agrave; đạp xe gần như ngay lập tức.</p>\r\n\r\n<p>Nghi&ecirc;n cứu trước đ&acirc;y cho thấy k&iacute;ch th&iacute;ch điện c&oacute; thể gi&uacute;p người bị liệt cử động lại sau một khoảng thời gian. Nhưng với nghi&ecirc;n cứu n&agrave;y, &ldquo;cả ba bệnh nh&acirc;n đều c&oacute; thể đứng l&ecirc;n, đi bộ, đạp xe, bơi v&agrave; điều khiển c&aacute;c chuyển động của th&acirc;n thể chỉ trong một ng&agrave;y, ngay sau khi phẫu thuật&rdquo;, Gr&eacute;goire Courtine, người đồng s&aacute;ng tạo nghi&ecirc;n cứu cho biết.</p>\r\n\r\n<p>Năm 2018, nh&oacute;m nghi&ecirc;n cứu đ&atilde; chứng minh rằng k&iacute;ch th&iacute;ch điện v&agrave;o c&aacute;c tế b&agrave;o thần kinh tủy sống c&oacute; thể gi&uacute;p bệnh nh&acirc;n liệt nửa người c&oacute; thể đi lại được. Trong nghi&ecirc;n cứu mới nhất n&agrave;y, họ đ&atilde; cấy một thiết bị k&iacute;ch th&iacute;ch trực tiếp l&ecirc;n tủy sống, qua c&aacute;c d&acirc;y thần kinh k&iacute;ch hoạt cơ ch&acirc;n.</p>\r\n\r\n<p>&ldquo;Bước đột ph&aacute; trong nghi&ecirc;n cứu của ch&uacute;ng t&ocirc;i l&agrave; hệ điện cực được sản xuất rộng v&agrave; d&agrave;i hơn v&agrave; được sắp xếp tương ứng ch&iacute;nh x&aacute;c với c&aacute;c d&acirc;y thần kinh cột sống. Điều đ&oacute; cho ph&eacute;p ch&uacute;ng t&ocirc;i kiểm so&aacute;t ch&iacute;nh x&aacute;c c&aacute;c tế b&agrave;o thần kinh điều chỉnh c&aacute;c cơ cụ thể&quot;, &ocirc;ng Jocelyne Bloch, b&aacute;c sĩ giải phẫu thần kinh cho biết.</p>\r\n\r\n<p>C&aacute;c thuật to&aacute;n tr&iacute; tuệ nh&acirc;n tạo điều chỉnh c&aacute;c t&iacute;n hiệu điện cực với c&aacute;c chương tr&igrave;nh hoạt động cụ thể. Việc điều khiển từ xa kh&ocirc;ng d&acirc;y cho ph&eacute;p người d&ugrave;ng chỉ cần nhấn n&uacute;t để điều khiển c&aacute;c chuyển động được lập tr&igrave;nh trước của họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"giai-phap-2\" src=\"https://amz.com.vn/public/upload/giai-phap-2.jpg?1663069093056\" title=\"giai-phap-2\" /></p>\r\n\r\n<h2>Nu&ocirc;i ph&ocirc;i thai bằng tr&iacute; tuệ nh&acirc;n tạo</h2>\r\n\r\n<p>C&aacute;c nh&agrave; nghi&ecirc;n cứu Trung Quốc đ&atilde; ph&aacute;t minh ra tử cung t&iacute;ch hợp tr&iacute; tuệ nh&acirc;n tạo, c&oacute; khả năng nu&ocirc;i ph&ocirc;i thai trong ph&ograve;ng th&iacute; nghiệm. Tử cung nh&acirc;n tạo c&oacute; khả năng tự theo d&otilde;i, chăm s&oacute;c v&agrave; c&oacute; thể gi&uacute;p loại bỏ c&aacute;c mối nguy hiểm trong qu&aacute; tr&igrave;nh mang thai v&agrave; sinh nở, đồng thời c&oacute; triển vọng trong th&uacute;c đẩy sinh sản tại c&aacute;c quốc gia c&oacute; tỷ lệ sinh giảm.</p>\r\n\r\n<p>S&aacute;ng kiến n&agrave;y thực sự l&agrave; một hệ thống cảm biến, gi&uacute;p theo d&otilde;i c&aacute;c ph&ocirc;i trong ống nghiệm khi ch&uacute;ng ph&aacute;t triển th&agrave;nh b&agrave;o thai. Với ba mức độ ph&oacute;ng đại, hệ thống gi&aacute;m s&aacute;t trực tuyến c&oacute; thể ph&aacute;t hiện những thay đổi h&igrave;nh th&aacute;i để theo d&otilde;i sự ph&aacute;t triển.</p>\r\n\r\n<p>Trong th&iacute; nghiệm được c&ocirc;ng bố tr&ecirc;n Tạp ch&iacute; Journal of Biomedical Engineering, hệ thống đ&atilde; theo d&otilde;i c&aacute;c ph&ocirc;i thai chuột trong khối chứa chất lỏng dinh dưỡng để ph&aacute;t triển v&agrave; điều chỉnh m&ocirc;i trường dinh dưỡng khi cần thiết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"giai-phap-1\" src=\"https://amz.com.vn/public/upload/giai-phap-1.jpg?1663069099651\" title=\"giai-phap-1\" /></p>\r\n\r\n<p><strong>C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</strong><br />\r\n<strong>Địa chỉ:</strong>&nbsp;Số 215 Đường Quyết Thắng, Tổ 8 P. Y&ecirc;n Nghĩa, Q. H&agrave; Đ&ocirc;ng, Tp. H&agrave; Nội<br />\r\n<strong>Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br />\r\n<strong>Email:</strong>&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br />\r\n<strong>ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</p>', '10', NULL, '4 giải pháp ứng dụng trí tuệ nhân tạo hỗ trợ đắc lực cho các bác sĩ', NULL, NULL, '2023-08-07 05:21:10', '2023-08-07 05:21:10'),
(5, 'Internet of Things hữu dụng trong đời sống thường ngày', 'internet-of-things-huu-dung-trong-doi-song-thuong-ngay', 0, 1, 'images/giaiphap1.jpg', NULL, '<p>Những c&ocirc;ng nghệ dựa tr&ecirc;n Internet of Things sẽ hỗ trợ đắc lực cho việc vận h&agrave;nh c&aacute;c ng&ocirc;i nh&agrave; th&ocirc;ng minh, mang tới nhiều tiện &iacute;ch cho người d&ugrave;ng.</p>\r\n\r\n<p>Từ năm 1982, Internet of Things - IoT (Internet vạn vật) đ&atilde; được ứng dụng v&agrave;o chiếc m&aacute;y b&aacute;n h&agrave;ng tự động Coca-Cola v&agrave; đến nay đ&atilde; phủ s&oacute;ng mạnh mẽ nhiều thiết bị kh&aacute;c như m&aacute;y rửa b&aacute;t, xe hơi, robot, đ&egrave;n giao th&ocirc;ng... C&aacute;c chuy&ecirc;n gia cho rằng v&agrave;o năm 2020 sẽ c&oacute; 50 thiết bị sử dụng nền tảng chia sẻ dữ liệu IoT để hoạt động, trong đ&oacute; nổi bật l&agrave; c&aacute;c thiết bị điện tử đeo tay v&agrave; nh&agrave; th&ocirc;ng minh.</p>\r\n\r\n<p>Ch&iacute;nh phủ Anh dự đo&aacute;n đến năm 2019 sẽ c&oacute; 69% nh&agrave; ở tại đ&acirc;y được trang bị c&aacute;c thiết bị kết nối v&agrave; đ&atilde; đầu tư hơn 40 triệu bảng cho nghi&ecirc;n cứu ứng dụng Internet of Things. Giải ph&aacute;p kh&ocirc;ng c&oacute; g&igrave; l&agrave; qu&aacute; cao si&ecirc;u, tập trung đưa ra những ứng dụng hữu &iacute;ch trong cuộc sống thường nhật như d&ugrave;ng điện thoại di động để điều khiển hệ thống chiếu s&aacute;ng trong nh&agrave;, bật m&aacute;y pha c&agrave; ph&ecirc;, l&ograve; vi s&oacute;ng...</p>\r\n\r\n<p><img alt=\"internet-of-things-huu-dung-trong-doi-song-thuong-ngay\" src=\"https://i1-vnexpress.vnecdn.net/2016/05/06/xl-TTT253-complete-topbrewer-6-8343-9393-1462524141.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=K1x0Tas0lZ1QZ7o_KPim1Q\" title=\"internet-of-things-huu-dung-trong-doi-song-thuong-ngay\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đơn cử như với một ấm đun nước b&igrave;nh thường, chỉ cần t&iacute;ch hợp bộ mạch rẻ tiền, bộ cảm biến c&ugrave;ng ứng dụng cho điện thoại, c&aacute;c nh&agrave; sản xuất sẽ cung cấp một b&igrave;nh đun nước th&ocirc;ng minh. Nhờ đ&oacute; người d&ugrave;ng kh&ocirc;ng chỉ nấu nước s&ocirc;i ngay cả khi ra khỏi nh&agrave; m&agrave; c&ograve;n kiểm tra được liệu c&ograve;n bao nhi&ecirc;u nước trong b&igrave;nh, nhiệt độ nước hiện tại.</p>\r\n\r\n<p>Hệ thống thiết bị IoT c&ograve;n hữu &iacute;ch cho việc kiểm so&aacute;t hệ thống m&aacute;y lạnh, m&aacute;y sưởi, quạt l&uacute;c gia chủ vắng nh&agrave;. Trong trường hợp xảy ra hỏa hoạn, c&aacute;c cảm biến sẽ thu thập dữ liệu về gia tăng nhiệt độ, kh&oacute;i, tiến h&agrave;nh gửi tin nhắn cảnh b&aacute;o đến điện thoại chủ nh&agrave; v&agrave; tự động tắt gas c&ugrave;ng c&aacute;c thiết bị c&oacute; khả năng g&acirc;y nhiệt.</p>\r\n\r\n<p>Để l&agrave;m được điều n&agrave;y, cần x&acirc;y dựng một &quot;hệ sinh th&aacute;i&quot; c&aacute;c thiết bị c&oacute; khả năng tương th&iacute;ch với nhau. V&iacute; dụ bộ cảm biến nhiệt độ Nest Learning Thermostat hoạt động tốt c&ugrave;ng m&aacute;y b&aacute;o động kh&oacute;i Nest Protect, hay c&aacute;c b&oacute;ng đ&egrave;n th&ocirc;ng minh Lifx đồng bộ được với Nest.</p>\r\n\r\n<p><img alt=\"internet-of-things-huu-dung-trong-doi-song-thuong-ngay-1\" src=\"https://i1-vnexpress.vnecdn.net/2016/05/06/xl-TTT253-complete-Hom-Turbo-v-6639-2697-1462524141.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=SMA3Lz70NbidNokkxhWVlg\" title=\"internet-of-things-huu-dung-trong-doi-song-thuong-ngay-1\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng nằm ngo&agrave;i cuộc chơi IoT, Apple đ&atilde; tạo ra hệ sinh th&aacute;i HomeKit cho ph&eacute;p d&ugrave;ng iPhone để điều khiển c&aacute;c thiết bị nh&agrave; th&ocirc;ng minh. Samsung cũng ph&aacute;t triển nền tảng Arctic hỗ trợ sử dụng điện thoại Galaxy để vận h&agrave;nh đ&egrave;n v&agrave; hệ thống an ninh trong nh&agrave;. Trong khi đ&oacute;, Microsoft, Sony, Philips v&agrave; một số thương hiệu điện tử lớn kh&aacute;c sử dụng hệ thống AllJoyn của Qualcomm.</p>\r\n\r\n<p>C&aacute;c chuy&ecirc;n gia cho rằng với sự phổ biến của điện thoại th&ocirc;ng minh th&igrave; việc ứng dụng IoT sẽ gi&uacute;p cuộc sống ch&uacute;ng ta dễ d&agrave;ng, tiện nghi hơn. Điều n&agrave;y thể hiện r&otilde; qua c&aacute;c thiết bị nh&agrave; bếp, m&agrave; nổi bật l&agrave; tủ lạnh. Trước kia, chẳng ai biết tủ lạnh c&ograve;n g&igrave; khi chưa mở cửa ra. Nhưng hiện tại chỉ cần liếc qua m&agrave;n h&igrave;nh smartphone l&agrave; biết ngay c&ograve;n sản phẩm n&agrave;o, được đặt ở đ&acirc;u nhờ t&iacute;ch hợp camera b&ecirc;n trong kết nối đến ứng dụng di động.</p>\r\n\r\n<p><img alt=\"internet-of-things-huu-dung-trong-doi-song-thuong-ngay-2\" src=\"https://i1-vnexpress.vnecdn.net/2016/05/06/xl-TTT253-complete-Samsung-Ref-6926-4350-1462524141.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_dU0yeq-eKfP-6z_V4cAeg\" title=\"internet-of-things-huu-dung-trong-doi-song-thuong-ngay-2\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tủ lạnh c&ograve;n được trang bị m&agrave;n h&igrave;nh cho ph&eacute;p hiển thị h&igrave;nh ảnh b&ecirc;n trong tủ, đưa ra nhắc nhở những thực phẩm đang thiếu, kết nối Internet, nghe nhạc, hỗ trợ giải tr&iacute; đa dạng.</p>\r\n\r\n<p>C&ograve;n h&atilde;ng AEG cho ra mắt c&ocirc;ng nghệ ProCombi Plus Smart, cho ph&eacute;p gia chủ điều khiển bếp nấu ăn qua ứng dụng tr&ecirc;n iPad, điều chỉnh nhiệt độ hay tắt bếp trong khi đang thảnh thơi ngồi xem những chương tr&igrave;nh TV y&ecirc;u th&iacute;ch tại ph&ograve;ng kh&aacute;ch.</p>\r\n\r\n<p>C&aacute;c thương hiệu như Miele v&agrave; Bosch cũng đang kh&aacute;m ph&aacute; Internet of Things, nghi&ecirc;n cứu ph&aacute;t triển hệ thống m&aacute;y giặt th&ocirc;ng minh hỗ trợ thực hiện c&aacute;c quy tr&igrave;nh giặt giũ qua điện thoại. Khi đ&atilde; ho&agrave;n tất việc giặt hay c&oacute; những sự cố về mất nước, ngưng hoạt động..., m&aacute;y sẽ tự động gửi tin nhắn th&ocirc;ng b&aacute;o đến cho người d&ugrave;ng.</p>\r\n\r\n<p><strong>Minh Tr&iacute;</strong></p>\r\n\r\n<p><strong>C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</strong><br />\r\n<strong>Địa chỉ:</strong>&nbsp;Số 215 Đường Quyết Thắng, Tổ 8 P. Y&ecirc;n Nghĩa, Q. H&agrave; Đ&ocirc;ng, Tp. H&agrave; Nội<br />\r\n<strong>Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br />\r\n<strong>Email:</strong>&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br />\r\n<strong>ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</p>', '10', NULL, 'Internet of Things hữu dụng trong đời sống thường ngày', NULL, NULL, '2023-08-07 05:21:42', '2023-08-07 05:21:42'),
(6, 'Sôi nổi các cuộc thi ứng dụng trí tuệ nhân tạo', 'soi-noi-cac-cuoc-thi-ung-dung-tri-tue-nhan-tao', 0, 1, 'images/798231af0ca3cffd96b2.jpg', NULL, '<p>C&aacute;c cuộc thi nằm trong chuỗi c&aacute;c sự kiện của Ng&agrave;y hội Tr&iacute; tuệ nh&acirc;n tạo quốc gia AI4VN 2022 với chủ đề &quot;AI phục hồi kinh tế, định h&igrave;nh tương lai&quot;. Chương tr&igrave;nh do Bộ Khoa học v&agrave; C&ocirc;ng nghệ chỉ đạo, B&aacute;o VnExpress tổ chức, với sự phối hợp của Bộ Kế hoạch v&agrave; Đầu tư, Aus4innovation v&agrave; C&acirc;u lạc bộ C&aacute;c Khoa-Viện-Trường C&ocirc;ng nghệ th&ocirc;ng tin - Truyền th&ocirc;ng (FISU) nhằm gi&uacute;p tăng cường năng lực hệ thống đổi mới s&aacute;ng tạo của Việt Nam, chuẩn bị cho tương lai c&ocirc;ng nghệ v&agrave; nền kinh tế số.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"798231af0ca3cffd96b2\" src=\"https://amz.com.vn/public/upload/798231af0ca3cffd96b2.jpg?1663070013908\" title=\"798231af0ca3cffd96b2\" /></p>\r\n\r\n<p>Thi AI dự đo&aacute;n chất lượng kh&ocirc;ng kh&iacute;</p>\r\n\r\n<p>Cuộc thi &quot;Air quality forecasting challenge&quot; được tổ chức để t&igrave;m kiếm những giải ph&aacute;p dự đo&aacute;n chất lượng kh&ocirc;ng kh&iacute; dựa tr&ecirc;n tr&iacute; tuệ nh&acirc;n tạo (AI).Cuộc thi do Trung t&acirc;m Nghi&ecirc;n cứu Quốc tế về Tr&iacute; tuệ nh&acirc;n tạo BKAI, Đại học B&aacute;ch khoa H&agrave; Nội, phối hợp c&ugrave;ng Bộ Khoa học v&agrave; C&ocirc;ng nghệ, b&aacute;o VnExpress tổ chức.</p>\r\n\r\n<p>Cuộc thi hướng đến c&aacute;c giải ph&aacute;p AI dự đo&aacute;n chất lượng kh&ocirc;ng kh&iacute; với độ ch&iacute;nh x&aacute;c cao, đồng thời g&oacute;p phần n&acirc;ng cao &yacute; thức của người d&acirc;n đối với m&ocirc;i trường sống xung quanh.&nbsp;</p>\r\n\r\n<p>C&aacute;c th&iacute; sinh đăng k&yacute; tham gia theo h&igrave;nh thức nh&oacute;m với tối đa 5 th&agrave;nh vi&ecirc;n. C&aacute;c đội tham gia cuộc thi sẽ được sử dụng dữ liệu m&ocirc; lớn nằm trong khu&ocirc;n khổ của dự &aacute;n Fi-Mi do tập đo&agrave;n VinIF t&agrave;i trợ. Th&iacute; sinh sẽ được cung cấp 1 tập dữ liệu huấn luyện v&agrave; 2 tập dữ liệu đ&aacute;nh gi&aacute; (Public Test v&agrave; Private Test). Bộ dữ liệu huấn luyện sẽ được cung cấp miễn ph&iacute; trực tuyến.</p>\r\n\r\n<p>Tr&ecirc;n cơ sở dữ liệu v&agrave; đầu b&agrave;i đưa ra, c&aacute;c nh&oacute;m sẽ x&acirc;y dựng thuật to&aacute;n v&agrave; đề xuất giải ph&aacute;p. Ti&ecirc;u ch&iacute; đ&aacute;nh gi&aacute; sẽ dựa tr&ecirc;n hiệu năng của thuật to&aacute;n v&agrave; t&iacute;nh s&aacute;ng tạo trong giải ph&aacute;p đề xuất. Căn cứ tr&ecirc;n kết quả v&agrave; chi tiết giải ph&aacute;p của c&aacute;c đội, Ban gi&aacute;m khảo sẽ đ&aacute;nh gi&aacute; kết quả cuối c&ugrave;ng để quyết định giải thưởng.</p>\r\n\r\n<p>Cuộc thi sẽ diễn ra từ ng&agrave;y 15/7 đến hết ng&agrave;y 31/8 với giai đoạn gồm v&ograve;ng sơ khảo v&agrave; chung kết. Ba đội c&oacute; kết quả xuất sắc sẽ tr&igrave;nh b&agrave;y giải ph&aacute;p trong sự kiện ch&iacute;nh của AI4VN, diễn ra v&agrave;o th&aacute;ng 9.</p>\r\n\r\n<p>T&igrave;m kiếm giải ph&aacute;p ứng dụng AI nhận dạng thuốc</p>\r\n\r\n<p>Cuộc thi &quot;VAIPE: Medicine Pill Image Recognition Challenge&quot; được tổ chức để t&igrave;m kiếm v&agrave; ph&aacute;t triển c&aacute;c thuật to&aacute;n AI nhận dạng ch&iacute;nh x&aacute;c t&ecirc;n c&aacute;c loại thuốc uống từ h&igrave;nh ảnh vi&ecirc;n thuốc.</p>\r\n\r\n<p>Cuộc thi do Trung t&acirc;m Y tế th&ocirc;ng minh VinUni-Illinois thuộc trường ĐH VinUni, Trung t&acirc;m Nghi&ecirc;n cứu Quốc tế về Tr&iacute; tuệ nh&acirc;n tạo BK.AI, Đại học B&aacute;ch khoa H&agrave; Nội, phối hợp c&ugrave;ng Bộ Khoa học v&agrave; C&ocirc;ng nghệ v&agrave; B&aacute;o VnExpress tổ chức.</p>\r\n\r\n<p>Ban tổ chức cho biết, cuộc thi cũng hướng tới việc ph&aacute;t hiện việc uống thuốc ngo&agrave;i đơn, một trong những th&aacute;ch thức y tế cộng đồng hiện nay ở Việt Nam v&agrave; tr&ecirc;n thế giới. Cuộc thi kh&ocirc;ng giới hạn đối tượng tham dự. C&aacute;c th&iacute; sinh đăng k&yacute; tham gia theo h&igrave;nh thức nh&oacute;m với tối đa 5 th&agrave;nh vi&ecirc;n.</p>\r\n\r\n<p>Cuộc thi bắt đầu mở cổng đăng k&yacute; từ ng&agrave;y 20/6 đến 10/7. Từ ng&agrave;y 15/7 đến 31/8 diễn ra v&ograve;ng sơ khảo v&agrave; chung kết.&nbsp;</p>\r\n\r\n<p>Giải b&igrave;nh chọn sản phẩm Tr&iacute; tuệ nh&acirc;n tạo 2022 (AI Awards 2022)</p>\r\n\r\n<p>AI Awards 2022 l&agrave; s&acirc;n chơi cho mọi tổ chức, doanh nghiệp khởi nghiệp, nh&oacute;m nghi&ecirc;n cứu tại c&aacute;c viện, trường c&oacute; giải ph&aacute;p/sản phẩm ph&ugrave; hợp ti&ecirc;u ch&iacute; chương tr&igrave;nh. Trong đ&oacute;, c&aacute;c sản phẩm/giải ph&aacute;p tham gia được giới thiệu trong năm 2021-2022 tại thị trường Việt Nam, hướng tới thay đổi cuộc sống con người từ mức độ cơ bản đến to&agrave;n diện; c&oacute; t&iacute;nh s&aacute;ng tạo độc đ&aacute;o trong việc ứng dụng AI.</p>\r\n\r\n<p>C&aacute;c giải ph&aacute;p, sản phẩm mang lại hiệu quả cho doanh nghiệp, c&ocirc;ng ty triển khai v&agrave; cho người sử dụng, đồng thời c&oacute; t&iacute;nh kh&aacute;c biệt như sản phẩm sử dụng AI ưu việt g&igrave; hơn c&aacute;c sản phẩm tương tự tr&ecirc;n thị trường... c&oacute; thể tham gia chương tr&igrave;nh.</p>\r\n\r\n<p>Cuộc thi sẽ bắt đầu nhận hồ sơ từ ng&agrave;y 24/6, gồm bốn giai đoạn: V&ograve;ng x&eacute;t duyệt sản phẩm dự thi, v&ograve;ng sơ loại, v&ograve;ng chung kết v&agrave; lễ trao giải. Lễ trao giải sẽ diễn ra trong chương tr&igrave;nh AI Summit, tổ chức v&agrave;o th&aacute;ng 9/2022./.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</strong><br />\r\n<strong>Địa chỉ:</strong>&nbsp;Số 215 Đường Quyết Thắng, Tổ 8 P. Y&ecirc;n Nghĩa, Q. H&agrave; Đ&ocirc;ng, Tp. H&agrave; Nội<br />\r\n<strong>Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br />\r\n<strong>Email:</strong>&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br />\r\n<strong>ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</p>', '8', NULL, 'Sôi nổi các cuộc thi ứng dụng trí tuệ nhân tạo', NULL, NULL, '2023-08-07 05:24:53', '2023-08-07 05:24:53'),
(7, 'Trí tuệ nhân tạo là công nghệ được ưu tiên hàng đầu', 'tri-tue-nhan-tao-la-cong-nghe-duoc-uu-tien-hang-dau', 0, 1, 'images/cp.jpg', NULL, '<p>Ng&agrave;y 27/7, dưới sự chỉ đạo của Bộ KH&amp;CN, B&aacute;o VnExpress tổ chức họp b&aacute;o giới thiệu về sự kiện Ng&agrave;y hội Tr&iacute; tuệ nh&acirc;n tạo Việt Nam 2022.</p>\r\n\r\n<p>Theo Ban Tổ chức, Ng&agrave;y hội Tr&iacute; tuệ nh&acirc;n tạo Việt Nam l&agrave; sự kiện thường ni&ecirc;n, được tổ chức lần đầu ti&ecirc;n v&agrave;o năm 2018. Sau 4 năm, ng&agrave;y hội đ&atilde; trở th&agrave;nh một sự kiện khoa học tin cậy, thu h&uacute;t quan t&acirc;m của đ&ocirc;ng đảo c&aacute;c cơ quan ban h&agrave;nh ch&iacute;nh s&aacute;ch, quản l&yacute;, tập đo&agrave;n c&ocirc;ng nghệ, đơn vị nghi&ecirc;n cứu... c&ugrave;ng chung tay th&uacute;c đẩy sự ph&aacute;t triển hệ sinh th&aacute;i tr&iacute; tuệ nh&acirc;n tạo tại Việt Nam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"cp\" src=\"https://amz.com.vn/public/upload/cp.jpg?1663069581179\" title=\"cp\" /></p>\r\n\r\n<p>Năm nay, ng&agrave;y hội c&oacute; chủ đề &quot;AI phục hồi kinh tế, định h&igrave;nh tương lai&quot; dự kiến tổ chức v&agrave;o ng&agrave;y 22/9 tại H&agrave; Nội, với sự tham dự của l&atilde;nh đạo Ch&iacute;nh phủ, đại diện c&aacute;c bộ, ban, ng&agrave;nh, c&aacute;c hiệp hội, viện, trường, start-up, c&aacute;c tập đo&agrave;n, doanh nghiệp trong lĩnh vực c&ocirc;ng nghệ, c&aacute;c chuy&ecirc;n gia v&agrave; nh&agrave; đầu tư trong nước v&agrave; quốc tế.</p>\r\n\r\n<p>Trả lời c&acirc;u hỏi của B&aacute;o Điện tử Ch&iacute;nh phủ về cơ sở ph&aacute;p l&yacute; cho AI, &ocirc;ng L&yacute; Ho&agrave;ng T&ugrave;ng, Ph&oacute; Vụ trưởng Vụ C&ocirc;ng nghệ cao (Bộ KH&amp;CN) cho biết, trong thời gian qua, Ch&iacute;nh phủ đ&atilde; chỉ đạo c&aacute;c bộ, ng&agrave;nh chuẩn bị h&agrave;nh lang ph&aacute;p l&yacute; cũng như c&aacute;c điều kiện cho việc ph&aacute;t triển c&ocirc;ng nghệ AI tại Việt Nam.</p>\r\n\r\n<p>Cuối năm 2020, Thủ tướng Ch&iacute;nh phủ đ&atilde; k&yacute; Quyết định số 2117/QĐ-TTg ban h&agrave;nh danh mục c&ocirc;ng nghệ ưu ti&ecirc;n nghi&ecirc;n cứu, ph&aacute;t triển v&agrave; ứng dụng để chủ động tham gia cuộc C&aacute;ch mạng c&ocirc;ng nghiệp lần thứ tư.&nbsp;</p>\r\n\r\n<p>Ở lĩnh vực c&ocirc;ng nghệ số, danh mục c&ocirc;ng nghệ ưu ti&ecirc;n gồm: Tr&iacute; tuệ nh&acirc;n tạo; Internet vạn vật; c&ocirc;ng nghệ ph&acirc;n t&iacute;ch dữ liệu lớn; c&ocirc;ng nghệ chuỗi khối; điện to&aacute;n đ&aacute;m m&acirc;y&hellip;&nbsp;</p>\r\n\r\n<p>Trong số đ&oacute;, Bộ KH&amp;CN x&aacute;c định AI l&agrave; c&ocirc;ng nghệ được ưu ti&ecirc;n h&agrave;ng đầu. Th&aacute;ng 1/2021, Bộ KH&amp;CN đ&atilde; tham mưu Ch&iacute;nh phủ ban h&agrave;nh Chiến lược quốc gia về nghi&ecirc;n cứu, ph&aacute;t triển v&agrave; ứng dụng Tr&iacute; tuệ nh&acirc;n tạo đến năm 2030. Việc x&acirc;y dựng dữ liệu v&agrave; nguồn nh&acirc;n lực được Ch&iacute;nh phủ giao cho c&aacute;c Bộ: Quốc ph&ograve;ng, C&ocirc;ng an, GD&amp;ĐT, KH&amp;CN, Viện H&agrave;n l&acirc;m KH&amp;CN Việt Nam... sẵn s&agrave;ng đ&aacute;p ứng nhu cầu ph&aacute;t triển thực tế.</p>\r\n\r\n<p>Về phần m&igrave;nh, ngay sau khi Chiến lược được ban h&agrave;nh, Bộ KH&amp;CN đ&atilde; ban h&agrave;nh ngay kế hoạch triển khai ph&aacute;t triển c&ocirc;ng nghệ AI quốc gia. Đến nay việc quảng b&aacute;, truyền th&ocirc;ng về AI được triển khai kh&aacute; rộng r&atilde;i, phần n&agrave;o gi&uacute;p người d&acirc;n hiểu AI l&agrave; g&igrave; v&agrave; đ&oacute;ng g&oacute;p như thế n&agrave;o trong cuộc sống.</p>\r\n\r\n<p>&quot;Trong thời gian tới, Bộ KH&amp;CN sẽ tiếp tục triển khai chiến lược bằng c&aacute;ch tập trung v&agrave;o ph&aacute;t triển nguồn nh&acirc;n lực chất lượng cao về AI ở Việt Nam, cũng như x&acirc;y dựng cơ sở hạ tầng dữ liệu lớn theo chỉ đạo của Ch&iacute;nh phủ&quot;, &ocirc;ng L&yacute; Ho&agrave;ng T&ugrave;ng cho hay.</p>\r\n\r\n<p>&Ocirc;ng L&yacute; Ho&agrave;ng T&ugrave;ng cũng dẫn b&aacute;o c&aacute;o về chỉ số sẵn s&agrave;ng AI của c&aacute;c ch&iacute;nh phủ (Government AI Readiness Index) do Oxford Insights (Vương quốc Anh) kết hợp với Trung t&acirc;m nghi&ecirc;n cứu ph&aacute;t triển quốc tế của Canada (IDRC) thực hiện cho thấy, sau khi Chiến lược được ban h&agrave;nh, năm 2021, Việt Nam xếp hạng 62/160 to&agrave;n cầu (tăng 14 bậc chỉ số so với xếp hạng năm 2020) v&agrave; xếp thứ 6/10 trong ASEAN.&nbsp;</p>\r\n\r\n<p>Tại Ng&agrave;y hội tr&iacute; tuệ nh&acirc;n tạo Việt Nam 2022, những chủ đề n&oacute;ng li&ecirc;n quan tới việc &aacute;p dụng Al trong c&aacute;c lĩnh vực của cuộc sống sẽ được thảo luận nhằm gợi &yacute;, đề xuất giải ph&aacute;p cho doanh nghiệp, cơ quan nghi&ecirc;n cứu, từ đ&oacute; c&aacute;c nh&agrave; quản l&yacute; c&oacute; những định hướng ch&iacute;nh s&aacute;ch ph&ugrave; hợp, g&oacute;p phần h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển một hệ sinh th&aacute;i AI bền vững tại Việt Nam.</p>\r\n\r\n<p>Sự kiện bao gồm 3 hội thảo trước thềm phi&ecirc;n to&agrave;n thể với c&aacute;c chủ đề về giải ph&aacute;p Al trong c&aacute;c lĩnh vực như t&agrave;i ch&iacute;nh - ng&acirc;n h&agrave;ng, nguồn nh&acirc;n lực v&agrave; trong sản xuất.</p>\r\n\r\n<p>Phi&ecirc;n to&agrave;n thể sẽ b&agrave;n thảo một số nội dung nổi bật như ph&aacute;t triển hệ sinh th&aacute;i để AI ứng dụng v&agrave; n&acirc;ng cao chất lượng cuộc sống, giải ph&aacute;p để gi&uacute;p doanh nghiệp bứt ph&aacute; bằng c&ocirc;ng nghệ Al...</p>\r\n\r\n<p>Đặc biệt, hoạt động kh&aacute;c biệt v&agrave; nổi bật của sự kiện Ng&agrave;y hội tr&iacute; tuệ nh&acirc;n tạo Việt Nam 2022 l&agrave; Giải thưởng Sản phẩm ứng dụng Tr&iacute; tuệ nh&acirc;n tạo 2022 (AI Awards 2022) nhằm vinh danh những sản phẩm, giải ph&aacute;p ứng dụng tr&iacute; tuệ nh&acirc;n tạo nổi trội trong doanh nghiệp v&agrave; cuộc sống.</p>\r\n\r\n<p>C&ugrave;ng với đ&oacute; c&ograve;n c&aacute;c cuộc thi kh&aacute;c như: &quot;Quy Nhơn AI Hackathon 2022&quot; t&igrave;m kiếm giải ph&aacute;p ứng dụng AI th&uacute;c đẩy du lịch; &quot;Air quality forecasting challenge&quot; t&igrave;m kiếm những giải ph&aacute;p AI dự đo&aacute;n chất lượng kh&ocirc;ng kh&iacute;; &quot;VAIPE: Medicine Pill Image Recognition Challenge&quot; t&igrave;m kiếm c&aacute;c thuật to&aacute;n AI nhận dạng ch&iacute;nh x&aacute;c t&ecirc;n c&aacute;c loại thuốc uống từ h&igrave;nh ảnh vi&ecirc;n thuốc&hellip;</p>\r\n\r\n<p><strong>C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</strong><br />\r\n<strong>Địa chỉ:</strong>&nbsp;Số 215 Đường Quyết Thắng, Tổ 8 P. Y&ecirc;n Nghĩa, Q. H&agrave; Đ&ocirc;ng, Tp. H&agrave; Nội<br />\r\n<strong>Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br />\r\n<strong>Email:</strong>&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br />\r\n<strong>ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</p>', '8', NULL, 'Trí tuệ nhân tạo là công nghệ được ưu tiên hàng đầu', NULL, NULL, '2023-08-07 05:25:16', '2023-08-07 05:25:16');
INSERT INTO `news` (`id`, `title`, `slug`, `order`, `active`, `images`, `short_description`, `content`, `news_cateid`, `tags`, `seo_meta_title`, `seo_meta_description`, `seo_meta_images`, `created_at`, `updated_at`) VALUES
(8, 'Phòng thí nghiệm sản phẩm IoT khai trương tại Hà Nội', 'phong-thi-nghiem-san-pham-iot-khai-truong-tai-ha-noi', 0, 1, 'images/IoT-1-5239-1467946567.jpg', NULL, '<p>H&ograve;a Lạc IoT Lab ra đời với mục ti&ecirc;u kết nối c&aacute;c tổ chức cung cấp nền tảng, thiết bị với cộng đồng khởi nghiệp v&agrave; x&acirc;y dựng ứng dụng Internet of Things (IoT) tại Việt Nam.</p>\r\n\r\n<p>Ng&agrave;y 7/7 tại Khu C&ocirc;ng nghệ cao H&ograve;a Lạc, Bộ Khoa học C&ocirc;ng nghệ đ&atilde; tổ chức khai trương Ph&ograve;ng th&iacute; nghiệm H&ograve;a Lạc IoT Lab (HIL).&nbsp;</p>\r\n\r\n<p>&quot;HIL hoạt động theo m&ocirc; h&igrave;nh Ph&ograve;ng th&iacute; nghiệm kiểu mới, kh&ocirc;ng sử dụng ng&acirc;n s&aacute;ch nh&agrave; nước, được th&agrave;nh lập v&agrave; hoạt động dựa tr&ecirc;n sự đ&oacute;ng g&oacute;p của cộng đồng. HIL do bốn s&aacute;ng lập vi&ecirc;n l&agrave; Khu C&ocirc;ng nghệ cao H&ograve;a Lạc, c&ocirc;ng ty DTT, Intel v&agrave; Dell Việt Nam th&agrave;nh lập&quot;, &ocirc;ng Phạm Đại Dương, Thứ trưởng Bộ Khoa học C&ocirc;ng nghệ, chia sẻ. &quot;H&ograve;a Lạc IoT Lab thể hiện quyết t&acirc;m của Ch&iacute;nh phủ v&agrave; Bộ Khoa học C&ocirc;ng nghệ trong việc hỗ trợ ph&aacute;t triển cộng đồng khởi nghiệp đổi mới v&agrave; s&aacute;ng tạo&quot;.</p>\r\n\r\n<p>&Ocirc;ng Nghi&ecirc;m Xu&acirc;n Chiến, đại diện Dell Việt Nam, v&agrave; &ocirc;ng Nguyễn Thế Trung, Gi&aacute;m đốc DTT, c&ugrave;ng nhận định IoT l&agrave; hướng đi mới của c&ocirc;ng nghệ th&ocirc;ng tin v&agrave; c&oacute; ứng dụng rất rộng lớn trong mọi ng&agrave;nh nghề. Kết hợp sự b&ugrave;ng nổ của l&agrave;n s&oacute;ng khởi nghiệp v&agrave; cơ hội v&agrave;ng của l&agrave;n s&oacute;ng c&aacute;ch mạng c&ocirc;ng nghiệp lần thứ tư với Internet vạn vật sẽ l&agrave; cơ hội lớn để tạo ra c&aacute;c khởi nghiệp th&agrave;nh c&ocirc;ng, đ&oacute;ng g&oacute;p v&agrave;o giai đoạn mới của ứng dụng khoa học c&ocirc;ng nghệ tại Việt Nam.&nbsp;</p>\r\n\r\n<p>Tại H&ograve;a Lạc IoT Lab trưng b&agrave;y nhiều c&ocirc;ng nghệ IoT như Smart Home, Smart City, IoT trong c&ocirc;ng nghiệp, giao th&ocirc;ng, y tế, gi&aacute;o dục th&ocirc;ng minh. HIL c&ograve;n c&oacute; ph&ograve;ng l&agrave;m việc, nghi&ecirc;n cứu cho c&aacute;c tổ chức, chuy&ecirc;n gia v&agrave; nh&oacute;m khởi nghiệp IoT cũng như c&aacute;c nền tảng ph&aacute;t triển ứng dụng, c&aacute;c kh&oacute;a đ&agrave;o tạo, c&aacute;c sự kiện - hội thảo li&ecirc;n quan đến IoT do th&agrave;nh vi&ecirc;n HIL cung cấp.</p>\r\n\r\n<p>Đại diện HIL cho biết sẽ nhanh ch&oacute;ng mở rộng th&agrave;nh vi&ecirc;n ngay sau khi bước v&agrave;o hoạt động ch&iacute;nh thức.&nbsp;</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-1273-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=I2lVKCVO1CoE812Yq3dwPA\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi\" /></p>\r\n\r\n<p>H&ograve;a Lạc IoT Lab nằm trong t&ograve;a nh&agrave; Trung t&acirc;m ươm tạo&nbsp;doanh nghiệp c&ocirc;ng nghệ cao thuộc Khu C&ocirc;ng nghệ cao H&ograve;a Lạc.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-1\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-1-5239-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HA-LSOE8DMdZc85JRMaXvQ\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-1\" /></p>\r\n\r\n<p>Lễ khai trương Ph&ograve;ng th&iacute; nghiệm diễn ra chiều ng&agrave;y 7/7.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-2\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-2-5212-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=4yVy7sdDjcxe9vAX6ATixQ\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-2\" /></p>\r\n\r\n<p>Tại khu trưng b&agrave;y, nhiều giải ph&aacute;p, ứng dụng IoT được giới thiệu như hệ thống tự động nhận diện v&agrave; thống k&ecirc; biển số xe, gợi &yacute; vị tr&iacute; đỗ v&agrave; hướng dẫn di chuyển...</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-3\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-3-1341-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=wnzpbrK0-6Mwcyh-yTo7mg\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-3\" /></p>\r\n\r\n<p>Hệ thống quản l&yacute; nước thải dựa tr&ecirc;n c&ocirc;ng nghệ IoT.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-4\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-4-4330-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=1U3sn7VFQagdq5NvM2grvg\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-4\" /></p>\r\n\r\n<p>Hệ thống quản l&yacute; v&agrave; kiểm so&aacute;t an ninh.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-5\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-6-4171-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=93W9AUQaAKQfOWIhWrZ7vw\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-5\" /></p>\r\n\r\n<p>Intel v&agrave; Dell l&agrave; hai trong số bốn nh&agrave; s&aacute;ng lập HIL.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-6\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-7-3579-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=PLOB_FhcU7-iAO2dKP70hQ\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-6\" /></p>\r\n\r\n<p>Camera gi&aacute;m s&aacute;t từ xa.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-7\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-8-6632-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=kiEpT80TYgTmphSk8olqoQ\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-7\" /></p>\r\n\r\n<p>Thu h&uacute;t nhất l&agrave; c&aacute;c sản phẩm của nh&oacute;m bạn trẻ Maker H&agrave; Nội.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-8\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-9-8715-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=MDDru4NoRTIxFhvD-EhLEA\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-8\" /></p>\r\n\r\n<p>Maker H&agrave; Nội đ&atilde; trưng b&agrave;y một số sản phẩm in 3D do c&aacute;c b&eacute; từ 8 đến 10 tuổi lập tr&igrave;nh.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-9\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-10-4695-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=VFNpTSdDfZY8cv087MJVDA\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-9\" /></p>\r\n\r\n<p>C&aacute;c m&oacute;n đồ chơi, m&oacute;c ch&igrave;a kh&oacute;a&nbsp;in từ m&aacute;y in&nbsp;3D.</p>\r\n\r\n<p><img alt=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-10\" src=\"https://i1-sohoa.vnecdn.net/2016/07/08/IoT-11-4158-1467946567.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=TIcFuViyc0GIl8yRFjdJTQ\" title=\"phong-thi-nghiem-san-phm-iot-khai-truong-tai-ha-noi-10\" /></p>\r\n\r\n<p>Hay c&aacute;nh tay robot do một th&agrave;nh vi&ecirc;n Maker H&agrave; Nội lắp đặt.</p>\r\n\r\n<p><strong>Ch&acirc;u An</strong>&nbsp;</p>\r\n\r\n<p><strong>C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</strong><br />\r\n<strong>Địa chỉ:</strong>&nbsp;Số 215 Đường Quyết Thắng, Tổ 8 P. Y&ecirc;n Nghĩa, Q. H&agrave; Đ&ocirc;ng, Tp. H&agrave; Nội<br />\r\n<strong>Web:</strong>&nbsp;<a href=\"https://amz.com.vn/\" rel=\"nofollow\" target=\"_blank\">https://amz.com.vn</a><br />\r\n<strong>Email:</strong>&nbsp;kinhdoanh@amz.com.vn; tvduc@amz.com.vn<br />\r\n<strong>ĐT:</strong>&nbsp;024 8586 3288, 0989 136 168</p>', '8', NULL, 'Phòng thí nghiệm sản phẩm IoT khai trương tại Hà Nội', NULL, NULL, '2023-08-07 05:25:48', '2023-08-07 05:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `seo_meta_title` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `title`, `slug`, `order`, `active`, `images`, `parent_id`, `short_description`, `content`, `seo_meta_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(8, 'Tin tức', 'tin-tuc', 0, 1, NULL, 0, NULL, NULL, 'Tin tức', NULL, '2022-08-15 00:22:55', '2022-08-15 00:22:55'),
(9, 'Tuyển dụng', 'tuyen-dung', 0, 1, NULL, 0, NULL, NULL, 'Tuyển dụng', NULL, '2023-02-15 07:19:18', '2023-08-07 04:32:27'),
(10, 'Tin tức nội bộ', 'tin-tuc-noi-bo', 0, 1, NULL, 0, NULL, NULL, 'Tin tức nội bộ', NULL, '2023-02-15 07:19:25', '2023-08-07 05:11:07'),
(11, 'Hoạt động xã hội', 'hoat-dong-xa-hoi', 0, 1, NULL, 0, NULL, NULL, 'Hoạt động xã hội', NULL, '2023-02-15 07:19:34', '2023-08-07 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `seo_meta_title` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliveries_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_sumary` decimal(13,2) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pay` decimal(13,2) NOT NULL,
  `ship_fee` decimal(13,2) DEFAULT NULL,
  `discount` decimal(13,2) DEFAULT NULL,
  `deliveries_id` int(11) DEFAULT NULL,
  `deliveries_code` text COLLATE utf8mb4_unicode_ci,
  `deliveries_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `customer_phone`, `customer_name`, `deliveries_address`, `order_sumary`, `payment_method`, `payment_status`, `order_status`, `total_pay`, `ship_fee`, `discount`, `deliveries_id`, `deliveries_code`, `deliveries_status`, `created_at`, `updated_at`) VALUES
(1, 1, '0976852147', 'Nguyễn Tuấn', 'Hà nội', 18000000.00, '-1', 'cho-thanh-toan', 'cho-xac-nhan', 18000000.00, 0.00, 0.00, NULL, NULL, 'cho-xac-nhan', '2023-08-08 00:01:26', '2023-08-08 00:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 19, 1, '2023-08-08 00:01:26', '2023-08-08 00:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `display_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_meta_title` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `order`, `active`, `short_description`, `content`, `images`, `display_type`, `seo_meta_title`, `seo_meta_description`, `seo_meta_images`, `created_at`, `updated_at`) VALUES
(15, 'Hợp tác kinh doanh', 'hop-tac-kinh-doanh', 1, 1, 'Là một trong những công ty hàng đầu tại Việt Nam trong lĩnh vực nhập khẩu , phân phối, cung cấp, lắp đặt  máy móc chuyên dùng trong hệ thống giặt là công nghiệp, Thăng Long cung cấp hệ thống giặt, sấy, là của các thương hiệu nổi tiếng như: SANYO, YAMAMOTO, ASAHI, NIPPER,INAMOTO,ELECTROLUX, UNIMAC, PRIMUS,IPSO, MILNOR…', NULL, 'images/hop-dong-hop-tac-kinh-doanh.jpg', NULL, 'Hợp tác kinh doanh', NULL, NULL, '2023-02-09 01:27:06', '2023-08-07 04:12:44'),
(25, 'Giải pháp audio - video call', 'giai-phap-audio-video-call', 1, 1, NULL, '<p><img class=\"img-responsive\" title=\"gt.jpg\" src=\"/storage/uploads/z5xjIcLNzMiYRWFjiwYoqPIJp7i9bSJU2KQP3uvG.jpg\" alt=\"\" width=\"100%\"></p>\r\n<p>Giải ph&aacute;p Audio &ndash; Video call độ trễ thấp d&agrave;nh cho nh&agrave; m&aacute;y, c&ocirc;ng sở l&agrave; c&ocirc;ng nghệ cho ph&eacute;p bạn tổ chức cuộc họp với mọi người được đặt ở những nơi kh&aacute;c nhau trong khi nh&igrave;n thấy họ v&agrave; n&oacute;i chuyện với họ trong thời gian thực. N&oacute; kh&aacute;c với cuộc gọi video đơn giản, thường l&agrave; giao tiếp video một-một.</p>\r\n<p>Nếu bạn tổ chức c&aacute;c cuộc họp thường xuy&ecirc;n li&ecirc;n quan đến một số lượng người&nbsp;lớn th&igrave; h&atilde;y sử dụng Giải ph&aacute;p Audio &ndash; Video call độ trễ thấp d&agrave;nh cho nh&agrave; m&aacute;y, c&ocirc;ng sở. Lợi &iacute;ch bao gồm:<br>&nbsp;<br>Giảm chi ph&iacute; đi lại: Chuyến bay, thu&ecirc; xe, kh&aacute;ch sạn<br>Tiết kiệm thời gian: Cuộc họp tức th&igrave;!<br>Tăng năng suất<br>Tăng Cộng t&aacute;c<br>Cải thiện giao tiếp<br>Cho ph&eacute;p c&aacute;c cuộc họp đa điểm tr&ecirc;n c&aacute;c m&uacute;i giờ v&agrave; ranh giới quốc tế<br>C&oacute; sẵn dưới dạng giải ph&aacute;p phần cứng hoặc phần mềm hội nghị truyền h&igrave;nh<br>Giảm lượng kh&iacute; thải carbon của c&ocirc;ng ty bạn</p>', NULL, 'sidebar-right', 'Giải pháp audio - video call', NULL, NULL, '2023-08-07 04:15:56', '2023-08-07 04:24:29'),
(26, 'Dịch vụ', 'dich-vu', 1, 1, NULL, '<div style=\"padding-top: 80px;\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-5\"><img class=\"img-responsive\" title=\"giaiphap1.jpg\" src=\"/storage/uploads/QliuP111tmEiDvgaE4GyjwCL9IOMKTtST7Uiy2dt.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-12 col-sm-7\">\r\n<h3 class=\"title\">Nghi&ecirc;n cứu, sản xuất</h3>\r\n<p>Nghi&ecirc;n cứu sản xuất l&agrave; thế mạnh của c&ocirc;ng ty v&agrave; l&agrave; đơn vị ti&ecirc;n phong trong lĩnh vực IOT.</p>\r\n<p><a class=\"button-white border\" href=\"#\">Chi tiết</a></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div style=\"padding-top: 80px;\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-7\">\r\n<h3 class=\"title\">Ph&aacute;t triển phần mềm</h3>\r\n<p>Ph&aacute;t triển phần mềm l&agrave; một trong những lĩnh vực quan trọng trong thời đại c&ocirc;ng nghệ số. Phần mềm với v&ocirc; v&agrave;n những t&iacute;nh năng th&ocirc;ng minh, mang đến hiệu quả kinh doanh cao nhất.</p>\r\n<p><a class=\"button-white border\" href=\"#\">Chi tiết</a></p>\r\n</div>\r\n<div class=\"col-12 col-sm-5\"><img class=\"img-responsive\" title=\"giaiphap1.jpg\" src=\"/storage/uploads/QliuP111tmEiDvgaE4GyjwCL9IOMKTtST7Uiy2dt.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n</div>', NULL, 'fullpage', 'Dịch vụ', NULL, NULL, '2023-08-07 04:25:13', '2023-08-07 04:26:28'),
(27, 'Bảo hành', 'bao-hanh', 1, 1, NULL, '<p><strong><u>Thời hạn bảo h&agrave;nh thiết bị:</u>&nbsp;12 th&aacute;ng kể từ ng&agrave;y triển khai.</strong></p>\r\n<p><strong><u>Quy định về bảo h&agrave;nh</u></strong><br>-&nbsp;&nbsp;&nbsp;&nbsp; Sản phẩm được bảo h&agrave;nh miễn ph&iacute; nếu sản phẩm đ&oacute; c&ograve;n thời hạn bảo h&agrave;nh được t&iacute;nh kể từ ng&agrave;y giao h&agrave;ng.<br>-&nbsp;&nbsp;&nbsp;&nbsp; Thời hạn bảo h&agrave;nh được ghi tr&ecirc;n Phiếu Bảo H&agrave;nh v&agrave; theo quy định của từng h&atilde;ng sản xuất đối với tất cả c&aacute;c sự cố về mặt kỹ thuật của sản phẩm.<br>-&nbsp;&nbsp;&nbsp;&nbsp; C&oacute; phiếu bảo h&agrave;nh v&agrave; tem bảo h&agrave;nh hợp lệ của c&ocirc;ng ty hoặc của h&atilde;ng sản xuất tr&ecirc;n sản phẩm.<br><strong><u>Những trường hợp kh&ocirc;ng được bảo h&agrave;nh</u></strong><br>-&nbsp;&nbsp;&nbsp;&nbsp; Sản phẩm đ&atilde; qu&aacute; hạn bảo h&agrave;nh ghi tr&ecirc;n phiếu hoặc mất Phiếu Bảo H&agrave;nh.<br>-&nbsp;&nbsp;&nbsp;&nbsp; Tem ni&ecirc;m phong bảo h&agrave;nh bị r&aacute;ch, vỡ, bị d&aacute;n đ&egrave; hoặc sửa đổi, tẩy x&oacute;a.<br>-&nbsp;&nbsp;&nbsp;&nbsp; Phiếu bảo h&agrave;nh kh&ocirc;ng ghi r&otilde; số Serial v&agrave; ng&agrave;y mua sản phẩm.<br>-&nbsp;&nbsp;&nbsp;&nbsp; Sản phẩm c&oacute; dấu hiệu hư hỏng do chuột bọ hoặc c&ocirc;n tr&ugrave;ng x&acirc;m nhập.</p>', NULL, 'sidebar-right', 'Bảo hành', NULL, NULL, '2023-08-07 04:27:20', '2023-08-07 04:27:30'),
(16, 'Hướng dẫn mua hàng', 'huong-dan-mua-hang', 1, 1, 'Để việc thanh toán cũng như việc giao nhận hàng thành công giữa đôi bên, Bạn vui lòng điền đầy đủ thông tin yêu cầu và chọn phương thức thanh toán thích hợp nhất.', NULL, 'images/thingsalwaysbuyonline.jpg', 'sidebar-right', 'Hướng dẫn mua hàng', NULL, NULL, '2023-02-09 01:42:19', '2023-08-07 04:12:35'),
(17, 'Hướng dẫn thanh toán', 'huong-dan-thanh-toan', 1, 1, 'Để việc thanh toán cũng như việc giao nhận hàng thành công giữa đôi bên, Bạn vui lòng điền đầy đủ thông tin yêu cầu và chọn phương thức thanh toán thích hợp nhất.', '<h2>PHƯƠNG THỨC THANH TO&Aacute;N &nbsp;</h2>\r\n<p>Để việc thanh to&aacute;n cũng như việc giao nhận h&agrave;ng th&agrave;nh c&ocirc;ng giữa đ&ocirc;i b&ecirc;n, Bạn vui l&ograve;ng điền đầy đủ th&ocirc;ng tin y&ecirc;u cầu v&agrave; chọn phương thức thanh to&aacute;n th&iacute;ch hợp nhất.</p>\r\n<p>C&aacute;c phương thức thanh to&aacute;n như sau:</p>\r\n<p>1.&nbsp;Thanh to&aacute;n tiền mặt cho người giao h&agrave;ng</p>\r\n<p>2.&nbsp;Chuyển khoản qua ng&acirc;n h&agrave;ng&nbsp;</p>\r\n<p>C&aacute;ch thức thanh to&aacute;n cụ thể như sau:</p>\r\n<h3>1.Thanh to&aacute;n tiền mặt cho người giao h&agrave;ng</h3>\r\n<p>a.Nếu địa điểm giao h&agrave;ng l&agrave; địa điểm thanh to&aacute;n th&igrave; AYZ VIỆT NAM sẽ thu tiền khi giao h&agrave;ng.</p>\r\n<p>b.Nếu địa điểm giao h&agrave;ng kh&aacute;c với địa điểm thanh to&aacute;n, AYZ VIỆT NAM sẽ thu tiền trước khi giao h&agrave;ng. Bạn sẽ được y&ecirc;u cầu cho biết cụ thể thời gian thanh to&aacute;n khi v&agrave;o đặt h&agrave;ng.C&aacute;c bạn c&oacute; thể thanh to&aacute;n bằng tiền mặt tại c&aacute;c văn ph&ograve;ng sau đ&acirc;y:</p>\r\n<p>TỔNG KHO M&Aacute;Y GIẶT SẤY C&Ocirc;NG NGHIỆP THĂNG LONG</p>\r\n<p>ĐỊA CHỈ : KHU Đ&Ocirc; THỊ PH&Uacute; LƯƠNG - ĐƯỜNG VĂN KH&Ecirc; - QUẬN H&Agrave; Đ&Ocirc;NG - H&Agrave; NỘI</p>\r\n<p>Hotline: 0935873868 &nbsp;- &nbsp;0948367009</p>\r\n<h3>2. Chuyển khoản qua ng&acirc;n h&agrave;ng</h3>\r\n<p>Qu&yacute; kh&aacute;ch thanh to&aacute;n qua ng&acirc;n h&agrave;ng, vui l&ograve;ng chuyển tiền đến c&ocirc;ng ty ch&uacute;ng t&ocirc;i theo như t&ecirc;n người nh&acirc;n dưới đ&acirc;y. Khi nhận được giấy b&aacute;o nhận tiền từ ng&acirc;n h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ thực hiện đơn h&agrave;ng theo y&ecirc;u cầu của Qu&yacute; kh&aacute;ch.Th&ocirc;ng tin người nhận như sau:</p>\r\n<p>T&Agrave;I KHOẢN 1 : C&Ocirc;NG TY CỔ PHẦN XUẤT NHẬP KHẨU AYZ VIỆT NAM</p>\r\n<p>STK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 1032 1482 886018</p>\r\n<p>TẠI &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : NG&Acirc;N H&Agrave;NG TECHCOMBANK LINH Đ&Agrave;M &ndash; CHI NH&Aacute;NH THĂNG LONG &ndash; H&Agrave; NỘI&nbsp;</p>\r\n<p></p>\r\n<p>T&Agrave;I KHOẢN 2: C&Ocirc;NG TY CỔ PHẦN XUẤT NHẬP KHẨU AYZ VIỆT NAM</p>\r\n<p>STK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 1500 2010 83880</p>\r\n<p>TẠI &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: NG&Acirc;N H&Agrave;NG N&Ocirc;NG NGHIỆP V&Agrave; PH&Aacute;T TRIỂN N&Ocirc;NG TH&Ocirc;N &ndash; CHI NH&Aacute;NH H&Agrave; NỘI</p>\r\n<p></p>\r\n<p>T&Agrave;I KHOẢN 3 &nbsp;: PHẠM TUẤN DƯƠNG</p>\r\n<p>STK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 1482 2050 15727</p>\r\n<p>TẠI &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: NG&Acirc;N H&Agrave;NG N&Ocirc;NG NGHIỆP H&Ugrave;NG VƯƠNG &ndash; CHI NH&Aacute;NH H&Agrave; NỘI</p>\r\n<p>Sau khi nhận được tiền, AYZ VIỆT NAM &nbsp;sẽ gửi h&agrave;ng tới qu&yacute; vị ngay.Qu&yacute; vị sẽ nhận được h&agrave;ng trong v&ograve;ng từ 1 đến 24h, tuỳ theo địa điểm giao h&agrave;ng, qua dịch vụ chuyển ph&aacute;t nhanh của bưu điện H&agrave; Nội hoặc một trong c&aacute;c nh&agrave; cung cấp dịch vụ chuyển ph&aacute;t nhanh kh&aacute;c (c&oacute; thể tuỳ theo y&ecirc;u cầu của qu&yacute; vị).&nbsp;</p>\r\n<p>&ndash; Về bảo h&agrave;nh, AYZ VIỆT NAM cam kết bảo h&agrave;nh sản phẩm trong &iacute;t nhất hết thời gian bảo h&agrave;nh sản phẩm, đ&uacute;ng như đ&atilde; cam kết.</p>\r\n<p>&ndash; Nếu qu&yacute; vị ở xa, kh&ocirc;ng thuận tiện đưa sản phẩm đế tận địa điểm bảo h&agrave;nh của AYZ VIỆT NAM. AYZ VIỆT NAM sẽ c&oacute; hỗ trợ kỹ thuật qua điện thoại hoặc email cho tới khi qu&yacute; kh&aacute;ch sử dụng tốt được sản phẩm của HO&Agrave;NG AYZ VIỆT NAM b&aacute;n ra.</p>\r\n<p>&ndash; Bản th&acirc;n AYZ VIỆT NAM &nbsp;cũng sẽ cung cấp đầy đủ hướng dẫn sử dụng tới qu&yacute; vị ngay khi giao h&agrave;ng ho&aacute;.</p>\r\n<p>&ndash; Trường hợp bất khả kh&aacute;ng, qu&yacute; vị c&oacute; thể gửi gi&uacute;p hộ sản phẩm cần bảo h&agrave;nh qua đường chuyển ph&aacute;t nhanh. AYZ VIỆT NAM &nbsp;sẽ bảo h&agrave;nh cho qu&yacute; kh&aacute;ch. Trường hợp sản phẩm kh&ocirc;ng thể bảo h&agrave;nh nhanh được, AYZ VIỆT NAM sẽ đổi mới (tất nhi&ecirc;n tuỳ theo từng sản phẩm c&oacute; hỗ trợ của nh&agrave; sản xuất hay kh&ocirc;ng). Ph&iacute; vận chuyển cho việc bảo h&agrave;nh rủi ro l&agrave; do hai b&ecirc;n c&ugrave;ng chịu, mỗi b&ecirc;n chịu một nửa.</p>\r\n<p>&ndash; Trường hợp, qu&yacute; vị c&oacute; thể chi trả được chi ph&iacute; đi lại, AYZ VIỆT NAM c&oacute; thể hỗ trợ bảo h&agrave;nh tại địa chỉ của qu&yacute; vị.</p>\r\n<p>&ndash; Đối với sản phẩm do AYZ VIỆT NAM &nbsp;lắp đặt tận nơi, trong nội th&agrave;nh H&agrave; Nội, AYZ VIỆT NAM chịu tr&aacute;ch nhiệm bảo h&agrave;nh miễn ph&iacute; tận nơi.</p>\r\n<p>Rất mong sự hợp t&aacute;c l&acirc;u d&agrave;i của qu&yacute; vị !</p>\r\n<p>K&iacute;nh ch&uacute;c qu&yacute; kh&aacute;ch h&agrave;ng l&agrave;m ăn ph&aacute;t đạt!</p>\r\n<p>H&atilde;y cho ch&uacute;ng t&ocirc;i biết bạn h&agrave;i l&ograve;ng với dịch vụ của ch&uacute;ng t&ocirc;i. Like v&agrave; comment nh&eacute;!</p>', 'images/Huong-dan-thanh-toan-anh-mo-ta.jpg', NULL, 'Hướng dẫn thanh toán', 'Để việc thanh toán cũng như việc giao nhận hàng thành công giữa đôi bên, Bạn vui lòng điền đầy đủ thông tin yêu cầu và chọn phương thức thanh toán thích hợp nhất.', NULL, '2023-02-09 01:46:10', '2023-02-09 01:46:10'),
(18, 'Phương thức vận chuyển', 'phuong-thuc-van-chuyen', 1, 1, 'Vận chuyển và lắp đặt toàn quốc', '<p>Vận chuyển v&agrave; lắp đặt to&agrave;n quốc&nbsp;</p>', 'images/phuong-thuc-van-chuyenb.jpg', 'sidebar-right', 'Phương thức vận chuyển', 'Vận chuyển và lắp đặt toàn quốc', NULL, '2023-02-09 01:47:25', '2023-08-07 04:12:22'),
(19, 'Chính sách đổi trả hàng', 'chinh-sach-doi-tra-hang', 1, 1, 'Chính sách đổi trả hàng', '<p><strong>Ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng</strong></p>', 'images/chinh-sach-doi-tra.jpg', 'sidebar-right', 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng', NULL, '2023-02-09 01:48:32', '2023-08-07 04:12:19'),
(20, 'Chính sách đại lý', 'chinh-sach-dai-ly', 1, 1, 'HIỆN TẠI CỞ SỞ SẢN XUẤT MÁY GIẶT CÔNG NGHIỆP THĂNG LONG ĐANG CÓ CHIẾN LƯỢC MỞ RỘNG KINH DOANH TẠI TẤT CẢ CÁC TỈNH THÀNH VIỆT NAM', '<p>Ch&iacute;nh s&aacute;ch đại l&yacute;</p>\r\n<p>HIỆN TẠI CỞ SỞ SẢN XUẤT M&Aacute;Y GIẶT C&Ocirc;NG NGHIỆP THĂNG LONG ĐANG C&Oacute; CHIẾN LƯỢC MỞ RỘNG KINH DOANH TẠI TẤT CẢ C&Aacute;C TỈNH TH&Agrave;NH VIỆT NAM</p>\r\n<p>VẬY C&Aacute;C ĐƠN VỊ N&Agrave;O MUỐN MUA BU&Ocirc;N VỚI CHIẾT KHẤU CAO VUI L&Ograve;NG LI&Ecirc;N LẠC TRỰC TIẾP&nbsp;</p>\r\n<p>GẶP A DƯƠNG ( GI&Aacute;M ĐỐC KINH DOANH ) 0935873868</p>\r\n<p><strong>TỔNG KHO M&Aacute;Y GIẶT SẤY C&Ocirc;NG NGHIỆP THĂNG LONG</strong></p>\r\n<p><strong>ĐỊA CHỈ : KHU Đ&Ocirc; THỊ PH&Uacute; LƯƠNG - ĐƯỜNG VĂN KH&Ecirc; - QUẬN H&Agrave; Đ&Ocirc;NG - H&Agrave; NỘI</strong></p>\r\n<p><strong>Hotline:&nbsp;0935873868&nbsp; -&nbsp; 0948367009</strong></p>\r\n<p><strong>Thăng Long</strong>&nbsp;xin k&iacute;nh ch&agrave;o qu&yacute; kh&aacute;ch , c&aacute;m ơn qu&yacute; kh&aacute;ch đ&atilde; quan t&acirc;m đến sản phẩm của ch&uacute;ng t&ocirc;i .&nbsp;</p>\r\n<p>L&agrave; một trong những c&ocirc;ng ty h&agrave;ng đầu tại Việt Nam trong lĩnh vực nhập khẩu ,&nbsp;ph&acirc;n phối, cung cấp, lắp đặt &nbsp;m&aacute;y m&oacute;c chuy&ecirc;n d&ugrave;ng trong hệ thống giặt l&agrave; c&ocirc;ng nghiệp, Thăng Long cung cấp hệ thống&nbsp;giặt,&nbsp;sấy,&nbsp;l&agrave;&nbsp;của c&aacute;c thương hiệu nổi tiếng như:&nbsp;SANYO, YAMAMOTO, ASAHI, NIPPER,INAMOTO,ELECTROLUX, UNIMAC, PRIMUS,IPSO, MILNOR&hellip;</p>\r\n<p>B&ecirc;n cạnh đ&oacute;&nbsp;<strong>Thăng Long</strong>&nbsp;l&agrave; ph&acirc;n phối độc quyền c&aacute;c loại m&aacute;y m&oacute;c, thiết bị ng&agrave;nh giặt l&agrave; của Shanghai Flying Fish Machinery Manufacturing CO., Ltd. Tại Việt Nam</p>\r\n<p><strong>Thăng Long</strong>&nbsp;c&oacute; đội ngũ tư vấn b&aacute;n h&agrave;ng nhiệt t&igrave;nh, sẵn s&agrave;ng đ&aacute;p ứng cao nhất những y&ecirc;u cầu của qu&yacute; kh&aacute;ch h&agrave;ng. Ch&uacute;ng t&ocirc;i&nbsp;c&oacute; đội ngũ kỹ thuật vi&ecirc;n, kỹ sư l&agrave;nh nghề c&oacute; khả năng ho&agrave;n th&agrave;nh những bản thiết kế phức tạp nhất đ&aacute;p ứng nhanh nhất cho kh&aacute;ch h&agrave;ng.</p>\r\n<p><strong>Thăng Long</strong>&nbsp;cung cấp h&oacute;a chất tẩy rửa, tư vấn cho kh&aacute;ch h&agrave;ng qu&aacute; tr&igrave;nh sử l&yacute; đồ vải, ch&uacute;ng t&ocirc;i luỗn hỗ trợ kh&aacute;ch h&agrave;ng bất kỳ l&uacute;c n&agrave;o kh&aacute;ch h&agrave;ng cần</p>\r\n<p><strong>Thăng Long</strong>nhận&nbsp;tư vấn, thiết kế, cung cấp, lắp đặt, thay thế, bảo tr&igrave;, bảo h&agrave;nh to&agrave;n bộ c&aacute;c sản phẩm m&agrave; ch&uacute;ng t&ocirc;i cung cấp cho qu&yacute; kh&aacute;ch h&agrave;ng trong thời gian nhanh nhất.</p>\r\n<p><strong>Thăng Long</strong>&nbsp;mong muốn mang đến cho kh&aacute;ch h&agrave;ng những sản phẩm tốt nhất, dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng, dịch vụ kỹ thuật tốt nhất, chế độ bảo tr&igrave;, bảo h&agrave;nh l&acirc;u d&agrave;i, tận tụy với chi ph&iacute; hợp l&yacute; nhất nhằm tối ưu h&oacute;a khoản đầu tư cho hệ thống giặt l&agrave; của qu&yacute; kh&aacute;ch h&agrave;ng</p>\r\n<p>Sản phẩm&nbsp; m&aacute;y giặt c&ocirc;ng nghiệp ,&nbsp;m&aacute;y sấy c&ocirc;ng nghiệp&nbsp;của ch&uacute;ng t&ocirc;i&nbsp;được sử dụng rộng r&atilde;i trong c&aacute;c&nbsp;bệnh viện, c&aacute;c trung t&acirc;m giặt l&agrave; chuy&ecirc;n nghiệp, nh&agrave; h&agrave;ng, tiệm giặt l&agrave;,&nbsp;kh&aacute;ch sạn, trường học, t&agrave;u biển...</p>\r\n<p>Đến với&nbsp;<strong>Thăng Long</strong>, Qu&yacute; kh&aacute;ch h&agrave;ng sẽ lu&ocirc;n h&agrave;i l&ograve;ng về sản phẩm, dịch vụ, gi&aacute; cả m&agrave; ch&uacute;ng t&ocirc;i cung cấp.</p>\r\n<p><img src=\"/storage/uploads/WN7rBXZzNhOMJUQv7OTc9TKBCoBTvpcaXeH4NeVN.jpg\">&nbsp;</p>\r\n<p>Với ti&ecirc;u ch&iacute; mang đến cho kh&aacute;ch h&agrave;ng sản phẩm v&agrave; dịch vụ tốt nhất, ch&uacute;ng t&ocirc;i đồng thời tư vấn v&agrave; cung cấp cho kh&aacute;ch h&agrave;ng giải ph&aacute;p c&ocirc;ng nghệ giặt l&agrave; nhằm mục đ&iacute;ch:</p>\r\n<p>- Tối ưu ho&aacute; hoạt động của m&aacute;y m&oacute;c v&agrave; thiết bị giặt l&agrave; sao cho đạt hiệu suất cao nhất.</p>\r\n<p>- Tiết kiệm lượng nước ti&ecirc;u thụ cho mỗi mẻ giặt từ 15% đến 40% so với c&aacute;c hệ thống m&aacute;y giặt c&ocirc;ng nghiệp thường. C&oacute; chế độ t&aacute;i sử dụng&nbsp;nước t&ugrave;y&nbsp;theo chương tr&igrave;nh giặt.</p>\r\n<p>- Tiết kiệm năng lượng điện ti&ecirc;u thụ cho mỗi mẻ giặt: từ 20% đến 40% so với c&aacute;c hệ thống m&aacute;y giặt c&ocirc;ng nghiệp th&ocirc;ng thường. Tất cả c&aacute;c m&aacute;y đều sử dụng biến tần điều khiển động cơ tiết kiệm năng lượng. Hệ thống ph&acirc;n t&iacute;ch v&agrave; đo lường tải để lựa chọn chương tr&igrave;nh hoạt động ph&ugrave; hợp nhất.</p>\r\n<p>- Hệ thống xử l&yacute; nước thải th&ocirc;ng minh v&agrave; hiện đại gi&uacute;p đảm bảo nước thải ra m&ocirc;i trường đ&aacute;p ứng c&aacute;c ti&ecirc;u ch&iacute; bảo vệ m&ocirc;i trường, kh&ocirc;ng g&acirc;y hại.</p>\r\n<p>- Sử dụng hệ thống điều khiển th&ocirc;ng minh gi&uacute;p giảm chi ph&iacute; nh&acirc;n c&ocirc;ng vận h&agrave;nh v&agrave; chi ph&iacute; năng lượng, vật tư ti&ecirc;u hao</p>\r\n<p><img src=\"http://maygiatcongnghiepthanglong.com/source/909b2c1a4f51860fdf40.jpg\"></p>\r\n<p>&nbsp;D&acirc;y chuyền xưởng giặt l&agrave; c&ocirc;ng nghiệp</p>\r\n<p>Với phương ch&acirc;m&nbsp;đặt lợi&nbsp;&iacute;ch của kh&aacute;ch h&agrave;ng l&ecirc;n cao nhất , Ch&uacute;ng t&ocirc;i xin :</p>\r\n<p>- Cam kết cung cấp hệ thống giặt l&agrave; theo c&ocirc;ng nghệ ti&ecirc;n tiến nhất.</p>\r\n<p>- Cam kết cung cấp cho kh&aacute;ch h&agrave;ng sản phẩm với thương hiệu h&agrave;ng đầu thế giới.</p>\r\n<p>- Cam kết cung cấp cho kh&aacute;ch h&agrave;ng sản phẩm v&agrave; dịch vụ với chất lượng cao nhất.</p>\r\n<p>- Cam kết cung cấp hệ thống giặt l&agrave; cho kh&aacute;ch h&agrave;ng với gi&aacute; cả hợp l&yacute; nhất.</p>\r\n<p>- Cam kết sẽ đồng h&agrave;nh với qu&yacute; kh&aacute;ch h&agrave;ng trong suốt thời gian v&ograve;ng đời của m&aacute;y m&oacute;c.&nbsp;</p>\r\n<p>&nbsp; &nbsp;Rất h&acirc;n hạnh&nbsp;được phục vụ qu&yacute; kh&aacute;ch !</p>\r\n<p><strong>TỔNG KHO M&Aacute;Y GIẶT SẤY C&Ocirc;NG NGHIỆP THĂNG LONG</strong></p>\r\n<p><strong>ĐỊA CHỈ : KHU Đ&Ocirc; THỊ PH&Uacute; LƯƠNG - ĐƯỜNG VĂN KH&Ecirc; - QUẬN H&Agrave; Đ&Ocirc;NG - H&Agrave; NỘI</strong></p>\r\n<p><strong>Hotline:&nbsp;0935873868&nbsp; -&nbsp; 0948367009</strong></p>', 'images/chinh-sach-dai-ly.jpg', 'sidebar-right', 'Chính sách đại lý', 'HIỆN TẠI CỞ SỞ SẢN XUẤT MÁY GIẶT CÔNG NGHIỆP THĂNG LONG ĐANG CÓ CHIẾN LƯỢC MỞ RỘNG KINH DOANH TẠI TẤT CẢ CÁC TỈNH THÀNH VIỆT NAM', NULL, '2023-02-09 01:49:51', '2023-08-07 04:12:16'),
(21, 'Giới thiệu', 'gioi-thieu', 1, 1, NULL, '<div class=\"container\">\r\n<h2 style=\"margin-top: 10px; margin-bottom: 20px; text-align: center;\"><span style=\"font-size: 36px;\"><span style=\"color: #ea3d01;\">TẠO RA C&Aacute;C SẢN PHẨM CHẤT LƯỢNG</span></span></h2>\r\n<h3 style=\"text-align: center; margin-top: 10px; margin-bottom: 20px;\"><span style=\"color: #000000;\"><span style=\"font-size: 28px;\">C&ocirc;ng ty Cổ Phần AMZ Việt Nam (AMZ., JSC)</span></span></h3>\r\n<p style=\"text-align: center;\">C&ocirc;ng ty AMZ Việt Nam hoạt động chuy&ecirc;n nghiệp trong lĩnh vực ph&acirc;n phối c&aacute;c thiết bị viễn th&ocirc;ng, c&ocirc;ng nghệ th&ocirc;ng tin, điện, ph&aacute;t thanh - truyền h&igrave;nh v&agrave; thiết bị đo lường, kiểm nghiệm.</p>\r\n<p style=\"text-align: center;\"><img style=\"width: 100%;\" src=\"/storage/trang/about-1.jpg.webp\" alt=\"giới thiệu\"></p>\r\n<p>&nbsp;</p>\r\n<p>Thế mạnh của AMZ Việt Nam l&agrave; đội ngũ kĩ thuật c&oacute; nền tảng s&acirc;u về c&ocirc;ng nghệ, ch&uacute;ng t&ocirc;i đ&atilde; trải qua việc sản xuất c&aacute;c sản phẩm đến h&agrave;ng triệu thiết bị, ch&uacute;ng t&ocirc;i chắc chắn rằng bạn sẽ h&agrave;i l&ograve;ng khi t&igrave;m kiếm c&aacute;c giải ph&aacute;p c&ocirc;ng nghệ ở ch&uacute;ng t&ocirc;i, t&ocirc;n chỉ của ch&uacute;ng t&ocirc;i l&agrave; đem đến sản phẩm chất lượng cho kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i kh&ocirc;ng cạnh tranh về gi&aacute;, cũng như kh&ocirc;ng t&igrave;m c&aacute;ch giảm chất lượng sản phẩm của kh&aacute;ch h&agrave;ng. Vậy n&ecirc;n, triết l&yacute;&nbsp;x&acirc;y dựng sản phẩm của AMZ việt nam l&agrave;&nbsp;chất lượng tốt, dịch vụ chất lượng, ph&ugrave; hợp nhu cầu của c&aacute; nh&acirc;n, doanh nghiệp v&agrave; tổ chức.&nbsp;</p>\r\n<p>AMZ Việt Nam hy vọng c&oacute; cơ hội hợp t&aacute;c với c&aacute;c doanh nghiệp để tạo ra c&aacute;c sản phẩm chất lượng, cạnh tranh tr&ecirc;n thị trường, v&agrave; ghi những d&ograve;ng như &ldquo;<strong>Made in VietNam</strong>&rdquo;, &ldquo;<strong>Design in VietNam</strong>&rdquo;, &ldquo;<strong>Design by &lsquo;C&ocirc;ng ty AMZ&rsquo;</strong>&rdquo; l&ecirc;n ch&iacute;nh sản phẩm của người Việt.</p>\r\n</div>\r\n<div class=\"container-fluid bg-gray my-5\" style=\"padding: 85px 15px 85px 15px;\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-4 mb-4\">\r\n<div class=\"about3col\">\r\n<div class=\"d-flex justify-content-start align-items-center mb-3\"><img class=\"img-responsive\" title=\"su-menh.svg\" src=\"/storage/uploads/wRQJf0sUJPkhwhj6NwdlsHTVbidQcCzWdG52pjx9.svg\" alt=\"\" width=\"50\" height=\"50\">\r\n<h3 class=\"ms-2 mb-0 text-uppercase\">Sứ mệnh</h3>\r\n</div>\r\n<p>Ứng dụng c&ocirc;ng nghệ mới về lĩnh vực điện tử viễn th&ocirc;ng, truyền thanh th&ocirc;ng minh IP 4G, truyền thanh kh&ocirc;ng d&acirc;y FM, truyền h&igrave;nh, &acirc;m thanh c&ocirc;ng cộng, &acirc;m thanh th&ocirc;ng b&aacute;o với c&aacute;c c&ocirc;ng nghệ nổi mới nhất như: truyền thanh th&ocirc;ng minh IP ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin-viễn th&ocirc;ng, &acirc;m thanh đa v&ugrave;ng ...</p>\r\n</div>\r\n</div>\r\n<div class=\"col-12 col-sm-4 mb-4\">\r\n<div class=\"about3col\">\r\n<div class=\"d-flex justify-content-start align-items-center mb-3\"><img class=\"img-responsive\" title=\"gia-tri.svg\" src=\"/storage/uploads/NPCCLDyzSHODzb61ep2xLJ0DiiU5ieXT0CLTKfbU.svg\" alt=\"\" width=\"50\" height=\"50\">\r\n<h3 class=\"ms-2 mb-0 text-uppercase\">Gi&aacute; trị</h3>\r\n</div>\r\n<p>Đo&agrave;n kết v&agrave; nhiệt huyết sẽ đi đến th&agrave;nh c&ocirc;ng!</p>\r\n</div>\r\n</div>\r\n<div class=\"col-12 col-sm-4 mb-4\">\r\n<div class=\"about3col\">\r\n<div class=\"d-flex justify-content-start align-items-center mb-3\"><img class=\"img-responsive\" title=\"muc-tieu.svg\" src=\"/storage/uploads/dQ6skoLP6tiC5jVwreRG38ouAjdlaF600AbrgdV5.svg\" alt=\"\" width=\"50\" height=\"50\">\r\n<h3 class=\"ms-2 mb-0 text-uppercase\">Mục ti&ecirc;u</h3>\r\n</div>\r\n<p>Trở th&agrave;nh đơn vị ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin v&agrave; viễn th&ocirc;ng lớn nhất trong nước cũng như Đ&ocirc;ng nam &aacute;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container\">\r\n<h3 class=\"my-4\">Ban gi&aacute;m đốc</h3>\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-4\">\r\n<div class=\"about-image\"><img class=\"img-responsive\" title=\"ourteam-1.jpg.webp\" src=\"/storage/uploads/CIxL1eumHF1fiVk1232h2YAV4DzyWUo6sdYgjL1I.webp\" alt=\"\" width=\"450\" height=\"501\"></div>\r\n<div class=\"mt-2\"><strong>&Ocirc;ng Thẩm Việt Đức</strong></div>\r\n<div>\r\n<p class=\"text-gray\">Tổng gi&aacute;m đốc</p>\r\n<p><em>Chuy&ecirc;n gia cấp cao trong lĩnh vực truyền thanh, chuyển đổi số v&agrave; s&aacute;ng lập c&ocirc;ng ty.</em></p>\r\n</div>\r\n</div>\r\n<div class=\"col-12 col-sm-4\">\r\n<div class=\"about-image\"><img class=\"img-responsive\" title=\"ourteam-2.jpg.webp\" src=\"/storage/uploads/Y9222Ho53wMF10eHMAZSk9MzI1NBiddV5ox8FU7L.webp\" alt=\"\" width=\"450\" height=\"501\"></div>\r\n<div class=\"mt-2\"><strong>B&agrave; Vũ Thanh Thanh</strong></div>\r\n<div>\r\n<p class=\"text-gray\">Gi&aacute;m đốc T&agrave;i ch&iacute;nh</p>\r\n<p><em>Chuy&ecirc;n gia Trong lĩnh vực t&agrave;i ch&iacute;nh</em></p>\r\n</div>\r\n</div>\r\n<div class=\"col-12 col-sm-4\">\r\n<div class=\"about-image\"><img class=\"img-responsive\" title=\"ourteam-3.jpg.webp\" src=\"/storage/uploads/tnsPwz73ZG6cgWvbGegg246h1pC4YtapMQIMOZ51.webp\" alt=\"\" width=\"450\" height=\"501\"></div>\r\n<div class=\"mt-2\"><strong>&Ocirc;ng Nguyễn Huy T&ugrave;ng</strong></div>\r\n<div>\r\n<p class=\"text-gray\">Gi&aacute;m đốc C&ocirc;ng nghệ</p>\r\n<p><em>Chuy&ecirc;n gia cấp cao trong lĩnh vực ph&aacute;t triển phần mềm v&agrave; IoT</em></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 'fullpage', 'Giới thiệu', NULL, NULL, '2023-02-09 01:51:49', '2023-08-08 19:59:34'),
(22, 'Liên hệ', 'lien-he', 1, 1, NULL, '<div class=\"mb-4\">\r\n<h3 style=\"font-size: 24px;\">C&Ocirc;NG TY CỔ PHẦN AMZ VIỆT NAM</h3>\r\n</div>\r\n<div class=\"mb-4\">\r\n<h3 style=\"font-size: 18px;\">TRỤ SỞ CH&Iacute;NH</h3>\r\n<hr>\r\n<p>Số 215 Đường Quyết Thắng, Tổ 8, P. Y&ecirc;n Nghĩa Q. H&agrave; Đ&ocirc;ng, TP. H&agrave; Nội</p>\r\n</div>\r\n<div class=\"mb-4\">\r\n<h3 style=\"font-size: 18px;\">THỜI GIAN L&Agrave;M VIỆC</h3>\r\n<hr>\r\n<p>Thứ 2 &ndash; Thứ 7: 8 AM &ndash; 6 PM</p>\r\n</div>\r\n<div class=\"mb-4\">\r\n<h3 style=\"font-size: 18px;\">TUYỂN DỤNG</h3>\r\n<hr>\r\n<p>Nếu bạn đang quan t&acirc;m tới c&ocirc;ng việc tại C&ocirc;ng ty cổ phần AMZ Việt Nam. Vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua email: <span style=\"background: yellow; color: #000; padding: 2px 5px;\">tuyendung@amz.com.vn</span></p>\r\n</div>', 'images/6601360f05d66f82a1e2757e16264bfb.jpg', 'fullpage', 'Liên hệ', NULL, NULL, '2023-02-09 01:55:37', '2023-08-07 04:12:10'),
(24, 'Giải pháp', 'giai-phap', 1, 1, NULL, '<div style=\"padding-top: 80px;\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-5\"><img class=\"img-responsive\" title=\"giaiphap1.jpg\" src=\"/storage/uploads/QliuP111tmEiDvgaE4GyjwCL9IOMKTtST7Uiy2dt.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-12 col-sm-7\">\r\n<h3 class=\"title\">Giải ph&aacute;p Audio &ndash; Video call độ trễ thấp d&agrave;nh cho nh&agrave; m&aacute;y, c&ocirc;ng sở</h3>\r\n<p>Giải ph&aacute;p Audio &ndash; Video call độ trễ thấp d&agrave;nh cho nh&agrave; m&aacute;y, c&ocirc;ng sở l&agrave; c&ocirc;ng nghệ cho ph&eacute;p bạn tổ chức cuộc họp với mọi người được đặt ở những nơi kh&aacute;c nhau trong khi nh&igrave;n thấy họ v&agrave; n&oacute;i chuyện với họ trong thời gian thực. N&oacute; kh&aacute;c với cuộc gọi video đơn giản, thường l&agrave; giao tiếp video một-một.</p>\r\n<p><a class=\"button-white border\" href=\"#\">Chi tiết</a></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div style=\"padding-top: 80px;\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-7\">\r\n<h3 class=\"title\">Giải ph&aacute;p Audio &ndash; Video call độ trễ thấp d&agrave;nh cho nh&agrave; m&aacute;y, c&ocirc;ng sở</h3>\r\n<p>Giải ph&aacute;p Audio &ndash; Video call độ trễ thấp d&agrave;nh cho nh&agrave; m&aacute;y, c&ocirc;ng sở l&agrave; c&ocirc;ng nghệ cho ph&eacute;p bạn tổ chức cuộc họp với mọi người được đặt ở những nơi kh&aacute;c nhau trong khi nh&igrave;n thấy họ v&agrave; n&oacute;i chuyện với họ trong thời gian thực. N&oacute; kh&aacute;c với cuộc gọi video đơn giản, thường l&agrave; giao tiếp video một-một.</p>\r\n<p><a class=\"button-white border\" href=\"#\">Chi tiết</a></p>\r\n</div>\r\n<div class=\"col-12 col-sm-5\"><img class=\"img-responsive\" title=\"giaiphap1.jpg\" src=\"/storage/uploads/QliuP111tmEiDvgaE4GyjwCL9IOMKTtST7Uiy2dt.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n</div>', NULL, 'fullpage', 'Giải pháp', NULL, NULL, '2023-08-07 04:02:21', '2023-08-07 04:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_code` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `other_image` text COLLATE utf8mb4_unicode_ci,
  `banner` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `cate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `hot` int(11) DEFAULT NULL,
  `deal_today` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT '0',
  `special_product` int(11) DEFAULT '0',
  `base_price` decimal(13,2) NOT NULL,
  `min_price` decimal(13,2) DEFAULT NULL,
  `sale_price` decimal(13,2) NOT NULL,
  `technical` longtext COLLATE utf8mb4_unicode_ci,
  `seo_meta_title` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `order`, `active`, `images`, `other_image`, `banner`, `short_description`, `content`, `cate_id`, `brand_id`, `tags`, `hot`, `deal_today`, `best_seller`, `special_product`, `base_price`, `min_price`, `sale_price`, `technical`, `seo_meta_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Smartphone X Seri 02', 'smartphone-x-seri-02', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 0, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02', NULL, '2023-08-03 23:47:17', '2023-08-08 03:25:38'),
(2, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '35', 3, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:25:34'),
(3, 'Smartphone X Seri 02', 'smartphone-x-seri-021', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 0, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02', NULL, '2023-08-03 23:47:17', '2023-08-08 03:25:30'),
(4, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker1', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '35', 4, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:25:24'),
(5, 'Smartphone X Seri 02', 'smartphone-x-seri-022', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 0, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02', NULL, '2023-08-03 23:47:17', '2023-08-08 03:25:19'),
(6, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker2', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '35', 4, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:25:13'),
(7, 'Smartphone X Seri 02', 'smartphone-x-seri-0213', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 1, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02', NULL, '2023-08-03 23:47:17', '2023-08-08 03:25:08'),
(8, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker13', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '30', 2, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:25:04'),
(9, 'Flat 32 4K UHD 11', 'flat-32-4k-uhd-11', 0, 1, 'images/feature-1-480x480.jpg.webp', NULL, NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '30', 2, '', 1, 0, 0, 0, 12050000.00, NULL, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Flat 32 4K UHD 11', NULL, '2023-08-04 21:00:43', '2023-08-08 03:24:58'),
(10, 'Audio 5v 2a Us Hot', 'audio-5v-2a-us-hot', 0, 1, 'images/audio-5v-2a-us-hot2-480x480.jpg.webp', NULL, NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '30', 2, '', 1, 0, 0, 0, 3650000.00, NULL, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Audio 5v 2a Us Hot', NULL, '2023-08-04 21:01:38', '2023-08-08 03:24:50'),
(11, 'Camera Series Curved', 'camera-series-curved', 1, 1, 'images/camera-series-curved-27-480x480.jpg.webp', NULL, NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '30', 2, '', 1, 0, 0, 0, 6530000.00, NULL, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Camera Series Curved', NULL, '2023-08-04 21:02:54', '2023-08-08 03:24:45'),
(12, '3mm Lens Portable Quick Charging', '3mm-lens-portable-quick-charging', 0, 1, 'images/3-3mm-lens-portable-quick-charging-480x480.jpg.webp', 'images/237259e2a057eee2e858b5b755f1c367.webp,images/audio-5v-2a-us-hot-480x480.png.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '30', 2, '', 1, 0, 0, 0, 680000.00, NULL, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', '3mm Lens Portable Quick Charging', NULL, '2023-08-04 21:03:40', '2023-08-08 03:24:27'),
(13, 'Smartphone X Seri 02', 'smartphone-x-seri-02', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 1, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02', NULL, '2023-08-03 23:47:17', '2023-08-08 03:24:23');
INSERT INTO `products` (`id`, `title`, `slug`, `order`, `active`, `images`, `other_image`, `banner`, `short_description`, `content`, `cate_id`, `brand_id`, `tags`, `hot`, `deal_today`, `best_seller`, `special_product`, `base_price`, `min_price`, `sale_price`, `technical`, `seo_meta_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(14, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '35', 1, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:24:35'),
(15, 'Smartphone X Seri 02', 'smartphone-x-seri-021', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 0, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02', NULL, '2023-08-03 23:47:17', '2023-08-08 03:24:17'),
(16, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker1', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '35', 2, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:24:13'),
(17, 'Smartphone X Seri 02', 'smartphone-x-seri-022', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 1, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02', NULL, '2023-08-03 23:47:17', '2023-08-08 03:24:07'),
(18, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker2', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '35', NULL, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:24:02'),
(19, 'Smartphone X Seri 02e3', 'smartphone-x-seri-02e3', 0, 1, 'images/Smartphone-X-seri-02-480x480.jpg.webp', 'images/Smartphone-X-seri-024-480x480.jpg.webp,images/Smartphone-X-seri-022-480x480.jpg.webp,images/071cd205a711842b5af831a361b8784c.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" style=\"height:571px; width:611px\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Blast past fast.</h2>\r\n\r\n<p style=\"text-align:center\">A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p style=\"text-align:center\">An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" style=\"width:100%\" /></p>', '33', 1, '', 1, 1, 0, 0, 18500000.00, 16460000.00, 18000000.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Smartphone X Seri 02e3', NULL, '2023-08-03 23:47:17', '2023-08-08 03:23:57'),
(20, 'Bluetooth Wireless Speaker', 'bluetooth-wireless-speaker13', 0, 1, 'images/bluetooth-wireless-speaker3-480x480.webp', 'images/bluetooth-wireless-speaker-480x480.webp,images/bluetooth-wireless-speaker2-480x480webp.webp,images/49bfcd80340189e6efcd84ac43486267.webp', NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera\r\nSản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<h2><strong>Loa th&aacute;p Samsung MX-T40/XV &ndash; Khuấy động mọi bữa tiệc</strong></h2>\r\n\r\n<p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều sản phẩm &acirc;m thanh với kết cấu kỳ dị, nhưng d&ugrave; g&igrave;, th&igrave; &acirc;m thanh vẫn l&agrave; chất lượng cần quan t&acirc;m h&agrave;ng đầu. Nếu bạn cần t&igrave;m một chiếc loa sở hữu đầy đủ c&aacute;c yếu tố độc, lạ, hay th&igrave; h&atilde;y chọn loa<strong>&nbsp;Samsung MX-T40</strong>.</p>\r\n\r\n<h3><strong>Cấu tr&uacute;c th&aacute;p, dễ d&agrave;ng kết nối bluetooth</strong></h3>\r\n\r\n<p>Loa&nbsp;sở hữu kết cấu đặc biệt, khiến người ta li&ecirc;n tưởng đến c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c vĩ đại như th&aacute;p Eiffel, Th&aacute;p Burj Khalifa,... V&igrave; thế kh&ocirc;ng chỉ để nghe nhạc m&agrave; sản phẩm c&ograve;n l&agrave; vật trang tr&iacute; nổi bật trong kh&ocirc;ng gian nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-7.jpg\" /></p>\r\n\r\n<p>Thiết kế của loa th&aacute;p Samsung MX T40 độc đ&aacute;o, ấn tượng. B&ecirc;n cạnh đ&oacute;, khả năng gh&eacute;p nối loa c&ugrave;ng 2 thiết bị di động 1 l&uacute;c gi&uacute;p bạn tận hưởng khoảnh khắc vui vẻ b&ecirc;n bạn b&egrave;, người th&acirc;n.</p>\r\n\r\n<h3><strong>C&ocirc;ng suất mạnh mẽ 300W, bass booster b&ugrave;ng nổ kh&ocirc;ng gian</strong></h3>\r\n\r\n<p>C&ocirc;ng suất của loa th&aacute;p&nbsp;<strong>MX-T40</strong>&nbsp;l&ecirc;n đến 300W - lớn gấp nhiều lần so với c&ocirc;ng suất loa th&ocirc;ng thường. Nhờ v&agrave;o kết cấu loa đa hướng, bạn sẽ lan tỏa &acirc;m thanh đến mọi ng&oacute;c ng&aacute;ch.</p>\r\n\r\n<p><img alt=\"Loa tháp Samsung MX-T40\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-3.jpg\" /></p>\r\n\r\n<p>Với t&iacute;nh năng bass booster hỗ trợ tăng cường &acirc;m trầm cho những bản nhạc s&ocirc;i động. Kết hợp c&ugrave;ng đ&egrave;n LED mang đến phong c&aacute;ch chuẩn DJ. &Acirc;m thanh của chiếc loa th&aacute;p Samsung MX-T40/XV t&aacute;i hiện những &acirc;m thanh ch&acirc;n thật nhất.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh độc đ&aacute;o với đ&egrave;n LED phong c&aacute;ch DJ t&iacute;ch hợp</strong></h3>\r\n\r\n<p>Loa Samsung c&oacute; thiết kế được l&agrave;m bằng nhựa kết hợp c&ugrave;ng kim loại cứng c&aacute;p. Nhờ v&agrave;o đ&oacute;, chiếc loa đến từ thương hiệu Samsung được nhiều bạn y&ecirc;u mến với độ bền cao.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-1.jpg\" /></p>\r\n\r\n<p>Điểm nổi bật của chiếc loa nằm ở thiết kế c&acirc;n bằng ở 3 g&oacute;c gi&uacute;p sản phẩm c&oacute; thể đứng vững tr&ecirc;n mọi bề mặt. Thiết kế của loa cũng được đ&aacute;nh gi&aacute; l&agrave; mang đến sự tiện lợi tối ưu cho người d&ugrave;ng với bảng điều khiển được t&iacute;ch hợp ở mặt tr&ecirc;n. Th&ocirc;ng qua bảng điều khiển n&agrave;y, bạn c&oacute; thể t&ugrave;y chỉnh chiếc loa của m&igrave;nh như tăng/ giảm &acirc;m lượng, chuyển b&agrave;i h&aacute;t,...</p>\r\n\r\n<p>Ngo&agrave;i ra, th&acirc;n loa cũng được t&iacute;ch hợp th&ecirc;m đ&egrave;n LED với phong c&aacute;ch DJ bắt mắt nhằm mang đến kh&ocirc;ng kh&iacute; s&ocirc;i động cho những buổi tiệc của bạn. Bạn c&oacute; thể kết nối loa với ứng dụng của Samsung tr&ecirc;n điện thoại của m&igrave;nh để điều chỉnh c&aacute;c chế độ m&agrave;u h&ograve;a hợp với điệu nhạc như Party, Dance, Ambient,...</p>\r\n\r\n<h3><strong>T&iacute;ch hợp đa dạng t&iacute;nh năng ph&aacute;t nhạc hữu &iacute;ch</strong></h3>\r\n\r\n<p>Loa th&aacute;p Samsung MX-T40 được nhiều bạn biết đến bởi t&iacute;nh năng gh&eacute;p nối với nhiều d&ograve;ng loa th&aacute;p Samsung kh&aacute;c nhau. Từ đ&oacute;, bạn c&oacute; thể gi&uacute;p những buổi tiệc của m&igrave;nh th&ecirc;m phần sinh động hơn với những bản h&ograve;a nhạc đến từ nhiều chiếc loa kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Hơn nữa, bạn cũng được thỏa th&iacute;ch tận hưởng c&aacute;c giai điệu nhạc kh&aacute;c nhau nhờ những chế độ ph&aacute;t nhạc đa dạng tr&ecirc;n thiết bị như HipHop, Party, Rock, Reggae,... Đặc biệt hơn, chiếc loa cũng thỏa m&atilde;n đam m&ecirc; ca h&aacute;t của bạn nhờ c&oacute; chế độ karaoke t&iacute;ch hợp. Với t&iacute;nh năng n&agrave;y, bạn sẽ được thể hiện giọng h&aacute;t của m&igrave;nh với những giai điệu s&acirc;u lắng, sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Ghép đôi loa tháp Samsung MX-T40/XV\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-4.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chiếc loa cũng t&iacute;ch hợp th&ecirc;m cổng kết nối USB tiện lợi hỗ trợ người d&ugrave;ng c&oacute; thể gh&eacute;p nối với những thiết bị c&ocirc;ng nghệ kh&aacute;c. Nhờ v&agrave;o t&iacute;nh năng n&agrave;y, bạn c&oacute; thể tận hưởng những bản nhạc m&igrave;nh y&ecirc;u th&iacute;ch ở mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p>Với t&iacute;nh năng kết nối nhờ c&oacute; c&ocirc;ng nghệ Bluetooth, mẫu loa cũng cho ph&eacute;p bạn kết nối với nhiều thiết bị di động c&ugrave;ng l&uacute;c. Th&ocirc;ng qua c&ocirc;ng nghệ kết nối bằng Bluetooth, bạn sẽ c&oacute; th&ecirc;m nhiều niềm vui khi được tận hướng những bản nhạc với bạn b&egrave;, người th&acirc;n của m&igrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Tuổi thọ l&acirc;u d&agrave;i với khả năng kh&aacute;ng nước tối ưu</strong></h3>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c ưu điểm về thiết kế v&agrave; khả năng ph&aacute;t nhạc, nhờ c&oacute; chất liệu bền bỉ d&ograve;ng loa n&agrave;y cũng mang khả năng kh&aacute;ng nước tối ưu. Bạn c&oacute; thể tổ chức những buổi tiệc ngo&agrave;i tr&ecirc;n ở những b&atilde;i biển hay hồ bơi với sản phẩm v&agrave; kh&ocirc;ng phải lo lắng thiết bị sẽ hư hỏng. Nhờ v&agrave;o đ&oacute;, tuổi thọ của loa cũng trở n&ecirc;n v&ocirc; c&ugrave;ng bền bỉ theo thời gian.&nbsp;</p>\r\n\r\n<p><img alt=\"loa tháp Samsung MX-T40/XV - Kháng nước\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Loa/Samsung/loa-thap-samsung-mx-t40-6.jpg\" /></p>\r\n\r\n<h2><strong>Mua loa th&aacute;p Samsung MX-T40 gi&aacute; rẻ, chất lượng tại CellphoneS</strong></h2>\r\n\r\n<p>Để sảng kho&aacute;i b&ugrave;ng nổ trong thế giới &acirc;m thanh sống động c&ugrave;ng với bạn b&egrave;, bạn h&atilde;y nhanh tay sở hữu loa th&aacute;p&nbsp;<strong>Samsung MX-T40 ch&iacute;nh h&atilde;ng</strong>. Sản phẩm hiện đang được b&aacute;n ra tại cửa h&agrave;ng CellphoneS với mức gi&aacute; hợp l&yacute; c&ugrave;ng bảo h&agrave;nh thời gian d&agrave;i.</p>', '32', 3, '', 0, 1, 1, 0, 3850000.00, 0.00, 0.00, '<p>5.0 inch HD Screen<br />\r\nAndroid 4.4 KitKat OS<br />\r\n1.4 GHz Quad Core&trade; Processor<br />\r\n20 MP front Camera<br />\r\nSản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<p>Định vị &ocirc; t&ocirc;, xe m&aacute;y<br />\r\nĐịnh vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải<br />\r\nThiết bị định vị &ocirc; t&ocirc;, xe m&aacute;y l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Bluetooth Wireless Speaker', NULL, '2023-08-04 02:29:34', '2023-08-08 03:23:51'),
(21, 'Flat 32″ 4K UHD 11 d', 'flat-32″-4k-uhd-11-d', 0, 1, 'images/feature-1-480x480.jpg.webp', NULL, NULL, '5.0 inch HD Screen\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP front Camera', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '30', 1, '', 1, 0, 0, 0, 12050000.00, NULL, 0.00, '<p>Sản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<ul>\r\n	<li>Định vị &ocirc; t&ocirc;, xe m&aacute;y</li>\r\n	<li>Định vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải</li>\r\n</ul>\r\n\r\n<p>Thiết bị định vị&nbsp;&ocirc; t&ocirc;, xe m&aacute;y&nbsp;l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Flat 32″ 4K UHD 11 d', NULL, '2023-08-04 21:00:43', '2023-08-08 03:23:43'),
(22, 'Audio 5v 2a Us Hot c', 'audio-5v-2a-us-hot-c', 0, 1, 'images/audio-5v-2a-us-hot2-480x480.jpg.webp', NULL, NULL, 'Sản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '30', 2, '', 1, 0, 0, 0, 3650000.00, NULL, 0.00, '<p>Sản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<ul>\r\n	<li>Định vị &ocirc; t&ocirc;, xe m&aacute;y</li>\r\n	<li>Định vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải</li>\r\n</ul>\r\n\r\n<p>Thiết bị định vị&nbsp;&ocirc; t&ocirc;, xe m&aacute;y&nbsp;l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Audio 5v 2a Us Hot c', NULL, '2023-08-04 21:01:38', '2023-08-08 03:23:37'),
(23, 'Camera Series Curved b', 'camera-series-curved-b', 0, 1, 'images/camera-series-curved-27-480x480.jpg.webp', NULL, NULL, 'Sản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '30', 2, '', 1, 0, 0, 0, 6530000.00, NULL, 0.00, '<p>Sản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<ul>\r\n	<li>Định vị &ocirc; t&ocirc;, xe m&aacute;y</li>\r\n	<li>Định vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải</li>\r\n</ul>\r\n\r\n<p>Thiết bị định vị&nbsp;&ocirc; t&ocirc;, xe m&aacute;y&nbsp;l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'Camera Series Curved b', NULL, '2023-08-04 21:02:54', '2023-08-08 03:23:30'),
(24, '3mm Lens Portable Quick Charginga', '3mm-lens-portable-quick-charginga', 0, 1, 'images/3-3mm-lens-portable-quick-charging-480x480.jpg.webp', 'images/237259e2a057eee2e858b5b755f1c367.webp,images/audio-5v-2a-us-hot-480x480.png.webp', NULL, 'Sản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single1.jpg.webp\" /></p>\r\n\r\n<h2>Blast past fast.</h2>\r\n\r\n<p>A14 Bionic, the fastest chip in a smartphone.</p>\r\n\r\n<p>An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all &mdash; in two perfect sizes.</p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single2.jpg.webp\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://smartaudio.local//storage/san-pham/iphone/img-single4.jpg.webp\" /></p>', '107', 1, '', 1, 0, 1, 0, 680000.00, NULL, 0.00, '<p>Sản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<ul>\r\n	<li>Định vị &ocirc; t&ocirc;, xe m&aacute;y</li>\r\n	<li>Định vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải</li>\r\n</ul>\r\n\r\n<p>Thiết bị định vị&nbsp;&ocirc; t&ocirc;, xe m&aacute;y&nbsp;l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', '3mm Lens Portable Quick Charginga', 'Sản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '2023-08-04 21:03:40', '2023-08-08 03:23:22'),
(25, 'test', 'test', 0, 1, 'images/29d05611f7f0d365230c1f9fc17cc416.webp', NULL, NULL, 'Sản phẩm giám sát, định vị\r\n\r\nĐịnh vị ô tô, xe máy\r\nĐịnh vị và giám sát xe lạnh trong vận tải\r\nThiết bị định vị ô tô, xe máy là loại thiết bị sử dụng nền tảng hệ thống định vị toàn cầu GPS (Global Positioning System) để xác định vị trí chính xác của xe ô tô theo thời gian thực.', '<p>Sản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<ul>\r\n	<li>Định vị &ocirc; t&ocirc;, xe m&aacute;y</li>\r\n	<li>Định vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải</li>\r\n</ul>\r\n\r\n<p>Thiết bị định vị&nbsp;&ocirc; t&ocirc;, xe m&aacute;y&nbsp;l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', '107', NULL, NULL, 1, 1, 1, 0, 11111.00, NULL, 0.00, '<p>Sản phẩm gi&aacute;m s&aacute;t, định vị</p>\r\n\r\n<ul>\r\n	<li>Định vị &ocirc; t&ocirc;, xe m&aacute;y</li>\r\n	<li>Định vị v&agrave; gi&aacute;m s&aacute;t xe lạnh trong vận tải</li>\r\n</ul>\r\n\r\n<p>Thiết bị định vị&nbsp;&ocirc; t&ocirc;, xe m&aacute;y&nbsp;l&agrave; loại thiết bị sử dụng nền tảng hệ thống định vị to&agrave;n cầu GPS (Global Positioning System) để x&aacute;c định vị tr&iacute; ch&iacute;nh x&aacute;c của xe &ocirc; t&ocirc; theo thời gian thực.</p>', 'test', NULL, '2023-08-05 20:38:50', '2023-08-08 03:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `products_tag`
--

CREATE TABLE `products_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `seo_meta_title` text COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `active` int(11) NOT NULL,
  `seo_meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`id`, `title`, `slug`, `logo`, `content`, `active`, `seo_meta_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'samsung', 'images/samsung-logo.jpg', '<p>Samsung</p>', 1, 'Samsung', 'Samsung', '2023-08-05 02:08:29', '2023-08-05 02:08:29'),
(2, 'Dell', 'dell', 'images/dell-logo.jpg', '<p>Dell</p>', 1, 'Dell', 'Dell', '2023-08-05 02:08:42', '2023-08-05 02:08:42'),
(3, 'HP', 'hp', 'images/hp-logo.jpg', '<p>HP</p>', 1, 'HP', 'HP', '2023-08-05 02:08:55', '2023-08-05 02:08:55'),
(4, 'Xiaomi', 'xiaomi', 'images/mi-logo.jpg', '<p>Xiaomi</p>', 1, 'Xiaomi', 'Xiaomi', '2023-08-05 02:09:16', '2023-08-05 02:09:16'),
(5, 'Logitech', 'logitech', 'images/logitech-logo.jpg', '<p>Logitech</p>', 1, 'Logitech', 'Logitech', '2023-08-05 02:09:33', '2023-08-05 02:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_rate` int(11) NOT NULL,
  `product_review_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_reviewer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_reviewer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `product_rate`, `product_review_content`, `product_reviewer_name`, `product_reviewer_email`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'nội dung đánh giá', 'Tuấn Nguyễn', 'rubytech.net@gmail.com', 1, '2023-08-04 01:33:18', '2023-08-08 06:07:17'),
(2, 1, 4, '<p>Sản phẩm tốt</p>', 'Hải hà', 'hh@gmail.com', 1, '2023-08-04 01:58:06', '2023-08-08 06:07:16'),
(3, 6, 5, 'sản phẩm rất tốt', 'tuấn nguyễn', 'vtuan1989@gmail.com', 1, '2023-08-08 05:55:26', '2023-08-08 06:07:15'),
(4, 6, 5, 'alertModal', 'vtuan', 'alertModal', 1, '2023-08-08 05:56:15', '2023-08-08 06:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `title`, `sub_title`, `link`, `location`, `order`, `active`, `images`, `created_at`, `updated_at`) VALUES
(1, 'New arrivals <br/> Smartphone X11', '<div>UP TO 30% OFF <div class=\"button-green\">from <b>110</b> <small>$</small></div></div>', 'http://shop.local/', 'top-slideshow', 1, 1, 'images/slide1.webp', '2022-06-21 20:39:41', '2023-08-04 00:14:00'),
(2, 'Home pod <br/>mini 3', '<div>UP TO 30% OFF <div class=\"button-red\">from <b>110</b> <small>$</small></div></div>', 'http://shop.local/', 'top-slideshow', 1, 1, 'images/slide2.webp', '2022-06-21 20:41:03', '2023-08-04 00:14:10'),
(26, 'X-Game <br/> Controller 18', '<div>UP TO 30% OFF <div class=\"button-pink\">from <b>110</b> <small>$</small></div></div>', '#', 'top-slideshow', 3, 1, 'images/slide3.webp', '2023-08-03 03:50:38', '2023-08-04 00:14:20'),
(27, 'Table & <br/> SMARTPHONE', 'UP TO 30% OFF', '#', 'after-top-slideshow', 1, 1, 'images/banner1.webp', '2023-08-03 22:14:58', '2023-08-03 23:56:37'),
(28, 'Camera &<br>Video', 'UP TO 30% OFF', '#', 'after-top-slideshow', 2, 1, 'images/banner2.webp', '2023-08-03 22:15:52', '2023-08-03 23:56:46'),
(29, 'TELEVISION <br/>&HOME THEATER', 'UP TO 30% OFF', '#', 'after-top-slideshow', 3, 1, 'images/banner3.webp', '2023-08-03 22:16:36', '2023-08-03 23:56:58'),
(30, 'AMAZFIT <br/>POWERBUDS', 'Noise-blocking design', '#', 'left-feature', 1, 1, 'images/img1-5.webp', '2023-08-04 18:04:53', '2023-08-04 18:04:53'),
(31, 'X-BOX <br/>CONTROLER', 'The best products 2020', '#', 'left-feature', 2, 1, 'images/img1-6.webp', '2023-08-04 18:05:27', '2023-08-04 18:05:27'),
(32, 'New gadgets for new year', 'Up to 60% off consumer electronics', '#', 'after-feature-product', 1, 1, 'images/img1-7.jpg', '2023-08-04 19:27:40', '2023-08-04 19:27:40'),
(33, 'TMA-2 headphones', 'new wireless option', '#', 'after-bestseller-product', 1, 1, 'images/img1-8.jpg.webp', '2023-08-05 01:46:16', '2023-08-05 01:46:16'),
(34, 'Mi 10 Smartphone', '30% OFF BUY ONLINE', '#', 'after-bestseller-product', 2, 1, 'images/img1-9.jpg.webp', '2023-08-05 01:46:37', '2023-08-05 01:46:37'),
(35, 'Banner trang sản phẩm', NULL, '#', 'shop-page', 1, 1, 'images/banner-catrgory.jpg.webp', '2023-08-06 18:19:18', '2023-08-06 18:19:32'),
(36, 'Đối tác', NULL, '#', 'partner', 1, 1, 'images/dt1.jpg', '2023-08-07 01:56:46', '2023-08-07 01:56:46'),
(37, 'Đối tác 2', NULL, '#', 'partner', 2, 1, 'images/dt10.jpg', '2023-08-07 01:57:08', '2023-08-07 01:57:08'),
(38, 'Đối tác 3', NULL, '#', 'partner', 3, 1, 'images/dt2.jpg', '2023-08-07 01:57:28', '2023-08-07 01:57:28'),
(39, 'Đối tác 4', NULL, '#', 'partner', 4, 1, 'images/dt3.jpg', '2023-08-07 01:57:44', '2023-08-07 01:57:44'),
(40, 'Đối tác 5', NULL, '#', 'partner', 5, 1, 'images/dt4.jpg', '2023-08-07 01:57:59', '2023-08-07 01:57:59'),
(41, 'Đối tác 6', NULL, '#', 'partner', 6, 1, 'images/dt5.jpg', '2023-08-07 01:58:11', '2023-08-07 01:58:11'),
(42, 'Đối tác 7', NULL, '#', 'partner', 7, 1, 'images/dt6.jpg', '2023-08-07 01:58:24', '2023-08-07 01:58:24'),
(43, 'Đối tác 8', NULL, '#', 'partner', 8, 1, 'images/dt7.jpg', '2023-08-07 01:58:34', '2023-08-07 01:58:34'),
(44, 'Đối tác 9', NULL, '#', 'partner', 9, 1, 'images/dt8.jpg', '2023-08-07 01:58:48', '2023-08-07 01:58:48'),
(45, 'Đối tác 10', NULL, '#', 'partner', 10, 1, 'images/dt9.jpg', '2023-08-07 01:59:00', '2023-08-07 01:59:00'),
(46, 'Banner trang sản phẩm mới', NULL, '#', 'shop-new', 1, 1, 'images/banner-catrgory.jpg.webp', '2023-08-06 18:19:18', '2023-08-06 18:19:32'),
(47, 'Banner trang sản phẩm khuyến mãi', NULL, '#', 'shop-discount', 1, 1, 'images/banner-catrgory.jpg.webp', '2023-08-06 18:19:18', '2023-08-06 18:19:32'),
(48, 'Banner trang sản phẩm bán chạy', NULL, '#', 'shop-bestseller', 1, 1, 'images/banner-catrgory.jpg.webp', '2023-08-06 18:19:18', '2023-08-06 18:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `fullname` text COLLATE utf8mb4_unicode_ci,
  `active` int(11) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `fullname`, `active`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0976852147', 'rubytech.net@gmail.com', NULL, 'Nguyễn Tuấn', 1, '$2y$10$O/hpTiCs6VCUTmPpli7IJeU/.JyFvOl/KuWgHL2ZS7L/HYmBUFkli', NULL, '2023-08-07 23:18:30', '2023-08-08 21:40:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_config`
--
ALTER TABLE `admin_config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_config_name_unique` (`name`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- Indexes for table `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- Indexes for table `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indexes for table `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products_tag`
--
ALTER TABLE `products_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
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
-- AUTO_INCREMENT for table `admin_config`
--
ALTER TABLE `admin_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products_tag`
--
ALTER TABLE `products_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
