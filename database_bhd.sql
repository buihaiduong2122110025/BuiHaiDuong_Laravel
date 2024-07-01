-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 01, 2024 lúc 12:33 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database_bhd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_banner`
--

CREATE TABLE `bhd_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_banner`
--

INSERT INTO `bhd_banner` (`id`, `name`, `image`, `link`, `position`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(18, 'Banner 1', '20240603161538.png', 'banner', 'slidershow', NULL, 1, 10, '2024-06-03 09:15:38', '2024-06-20 11:42:36', 1),
(19, 'Banner 2', '20240603161555.png', 'banner', 'slidershow', NULL, 1, 1, '2024-06-03 09:15:55', '2024-06-16 22:34:59', 1),
(27, 'banner3', 'banner3.webp', 'banner3', 'slidershow', NULL, 10, NULL, '2024-06-20 23:24:33', '2024-06-20 23:24:33', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_brand`
--

CREATE TABLE `bhd_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `description` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_brand`
--

INSERT INTO `bhd_brand` (`id`, `name`, `slug`, `image`, `sort_order`, `description`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(18, 'Japan', 'japan', '20240603111817.jpg', 1, 'nhật bản bản', '2024-06-03 04:18:17', '2024-06-03 04:18:17', 1, NULL, 1),
(19, 'China', 'china', '20240603111836.jpg', 1, 'trung quốcc', '2024-06-03 04:18:36', '2024-06-03 04:18:36', 1, NULL, 1),
(20, 'Việt Nam', 'viet-nam', '20240603111851.png', 1, 'viêt nam number 1', '2024-06-03 04:18:51', '2024-06-16 18:28:14', 1, 1, 1),
(21, 'vm', 'vm', 'zxxzc.jpg', 0, 'czxczxc', '2024-06-03 10:30:06', '2024-06-16 18:28:14', 1, 1, 1),
(22, '1111', '1111', NULL, 0, 'cấc', '2024-06-07 08:44:54', '2024-06-16 18:21:01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_category`
--

CREATE TABLE `bhd_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `description` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_category`
--

INSERT INTO `bhd_category` (`id`, `name`, `slug`, `image`, `parent_id`, `sort_order`, `description`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(38, 'Sofa', 'sofa', '20240603112610.webp', 0, 1, 'ghế sofaafa', '2024-06-03 04:26:10', '2024-06-03 04:26:10', 1, NULL, 1),
(39, 'Chair', 'chair', '20240603112711.webp', 0, 2, 'ghế ghế ghế', '2024-06-03 04:27:11', '2024-06-03 04:27:11', 1, NULL, 1),
(40, 'Table', 'table', '20240603112735.webp', 0, 1, 'bàn bàn bàn', '2024-06-03 04:27:35', '2024-06-03 04:27:36', 1, NULL, 1),
(41, 'Table Coffee', 'table-coffee', '20240603114322.webp', 40, 1, 'bà coffee', '2024-06-03 04:43:22', '2024-06-16 18:21:05', 1, 1, 1),
(51, 'Bed', 'bed', 'bed.webp', 0, 0, 'bed room', '2024-06-17 03:06:49', '2024-06-17 03:20:02', 1, 1, 1),
(52, 'Lamp', 'lamp', 'lamp.webp', 0, 1, 'lampppp', '2024-06-17 03:19:34', '2024-06-17 10:09:07', 1, 1, 1),
(54, 'Table Dining', 'table-dining', '.jpg', 40, 1, 'dsvsdvsvvs', '2024-06-17 09:47:17', '2024-06-18 10:29:00', 1, 10, 1),
(59, 'Bed Room', 'bed-room', 'bed-room.webp', 51, 1, 'sấvasva', '2024-06-17 10:12:57', '2024-06-17 10:12:57', 1, NULL, 1),
(60, 'Bed Master', 'bed-master', 'bed-master.webp', 51, 1, 'scaava', '2024-06-17 10:14:00', '2024-06-17 10:14:00', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_contact`
--

CREATE TABLE `bhd_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `replay_id` int(10) UNSIGNED DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_contact`
--

INSERT INTO `bhd_contact` (`id`, `user_id`, `name`, `email`, `phone`, `title`, `content`, `replay_id`, `created_at`, `updated_at`, `updated_by`, `status`) VALUES
(14, NULL, 'Duong', 'safs@gmail.com', '09723', 'fafd', 'dsfds', 0, '2024-06-23 11:06:20', '2024-06-23 04:06:20', NULL, 1),
(15, 10, 'tran', 'tran@gmail.com', '307520', 'DVDS', 'DSVDS', 0, '2024-06-27 12:28:04', '2024-06-26 22:28:04', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_menu`
--

CREATE TABLE `bhd_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `sort_order` int(10) UNSIGNED DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT 0,
  `type` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL,
  `table_id` int(10) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_menu`
--

INSERT INTO `bhd_menu` (`id`, `name`, `link`, `sort_order`, `parent_id`, `type`, `position`, `table_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(78, 'Home', '/', 2, 0, 'custom', 'mainmenu', 0, '2024-06-17 09:41:36', '2024-06-17 10:30:25', 1, 1, 1),
(79, 'Bed', 'category/bed', 0, 0, 'category', 'mainmenu', 0, '2024-06-17 09:44:57', '2024-06-23 01:23:32', 1, NULL, 1),
(80, 'Table', 'category/table', 0, 0, 'category', 'mainmenu', 0, '2024-06-17 09:44:57', '2024-06-23 01:23:35', 1, NULL, 1),
(81, 'Sofa', 'category/sofa', 0, 0, 'category', 'mainmenu', 0, '2024-06-17 09:44:57', '2024-06-18 09:52:37', 1, NULL, 2),
(85, 'Table Coffee', 'category/table-coffee', 0, 80, 'category', 'mainmenu', 0, '2024-06-17 09:52:34', '2024-06-17 09:52:34', 1, NULL, 1),
(86, 'Buy 1 Free One', 'trang-don', 0, 0, 'page', 'mainmenu', 0, '2024-06-17 10:02:33', '2024-06-18 09:52:28', 1, NULL, 2),
(87, 'Bed Master', 'category/bed-master', 0, 79, 'category', 'mainmenu', 0, '2024-06-17 10:14:22', '2024-06-17 10:14:22', 1, NULL, 1),
(88, 'Bed Room', 'category/bed-room', 0, 79, 'category', 'mainmenu', 0, '2024-06-17 10:14:22', '2024-06-17 10:14:22', 1, NULL, 1),
(89, 'Home', '/', 0, 0, 'custom', 'footermenu', 0, '2024-06-17 10:20:51', '2024-06-17 10:20:55', 1, NULL, 1),
(90, 'Contact', 'contact', 0, 0, 'custom', 'footermenu', 0, '2024-06-17 10:21:28', '2024-06-19 09:56:29', 1, 10, 1),
(91, 'Sale 50%', 'chu-desale-50', 0, 0, 'topic', 'footermenu', 0, '2024-06-17 10:21:53', '2024-06-25 23:00:08', 1, 18, 0),
(92, 'Product', 'product', 2, 0, 'custom', 'mainmenu', 0, '2024-06-17 10:27:39', '2024-06-17 10:27:41', 1, NULL, 1),
(93, 'Service', 'vfimyjd', 0, 0, 'custom', 'footermenu', 0, '2024-06-18 02:24:22', '2024-06-25 23:00:31', 1, NULL, 2),
(95, 'Việt Nam', 'thuong-hieuviet-nam', 0, 0, 'brand', 'mainmenu', 0, '2024-06-18 05:11:10', '2024-06-18 09:52:13', 1, NULL, 2),
(96, 'Contact', 'contact', 0, 0, 'custom', 'mainmenu', 0, '2024-06-18 06:09:25', '2024-06-18 09:52:15', 1, NULL, 2),
(98, 'Contact', 'contact', 0, 0, 'custom', 'mainmenu', 0, '2024-06-19 09:57:04', '2024-06-19 09:57:06', 10, NULL, 1),
(101, 'Table Dining', 'category/table-dining', 0, 80, 'category', 'mainmenu', 54, '2024-06-20 10:51:30', '2024-06-21 02:13:05', 10, 10, 1),
(102, 'China', 'brand/china', 0, 0, 'brand', 'mainmenu', 19, '2024-06-20 11:17:06', '2024-06-23 01:21:48', 10, NULL, 2),
(103, 'Product New Style', 'topic/product-new-style', 0, 0, 'topic', 'mainmenu', 9, '2024-06-23 01:08:08', '2024-06-23 01:08:08', 10, NULL, 2),
(104, 'vxcx', 'xcvx', 0, 0, 'custom', 'mainmenu', 0, '2024-06-23 01:21:03', '2024-06-23 01:21:07', 10, 10, 0),
(105, 'Category', 'category', 0, 0, 'custom', 'mainmenu', 0, '2024-06-23 01:21:28', '2024-06-23 01:30:39', 10, NULL, 2),
(106, 'Brand', 'brand', 0, 0, 'custom', 'mainmenu', 0, '2024-06-23 01:21:36', '2024-06-23 01:23:28', 10, NULL, 2),
(107, 'About Us', 'about', 0, 0, 'custom', 'mainmenu', 0, '2024-06-23 02:34:09', '2024-06-26 00:22:12', 10, NULL, 2),
(108, 'Post', 'post', 0, 0, 'custom', 'mainmenu', 0, '2024-06-25 11:25:29', '2024-06-25 11:25:31', 18, NULL, 1),
(109, 'Tin Tức', 'topic/tin-tuc', 0, 0, 'topic', 'mainmenu', 16, '2024-06-25 12:01:20', '2024-06-25 12:27:34', 18, NULL, 2),
(110, 'Sale Product', 'topic/sale-product', 0, 108, 'topic', 'mainmenu', 19, '2024-06-25 12:27:38', '2024-06-25 12:28:54', 18, 18, 1),
(111, 'Product New Style', 'topic/product-new-style', 0, 108, 'topic', 'mainmenu', 9, '2024-06-25 12:27:38', '2024-06-25 12:28:49', 18, 18, 1),
(120, 'Chính Sách Vận Chuyển', 'page/chinh-sach-van-chuyen', 0, 0, 'page', 'footermenu', 39, '2024-06-26 00:20:30', '2024-06-26 00:20:33', 18, NULL, 1),
(121, 'Chính Sách Mua Hàng', 'page/chinh-sach-mua-hang', 0, 0, 'page', 'footermenu', 38, '2024-06-26 00:20:30', '2024-06-26 00:20:34', 18, NULL, 1),
(122, 'Chính Sách Đổi Trả', 'page/chinh-sach-doi-tra', 0, 0, 'page', 'footermenu', 37, '2024-06-26 00:20:30', '2024-06-26 00:20:35', 18, NULL, 1),
(123, 'Chính Sách Bảo Hành', 'page/chinh-sach-bao-hanh', 0, 0, 'page', 'footermenu', 36, '2024-06-26 00:20:30', '2024-06-26 00:20:36', 18, NULL, 1),
(124, 'About Us', 'page/about-us', 0, 0, 'page', 'mainmenu', 23, '2024-06-26 00:21:37', '2024-06-26 00:22:20', 18, NULL, 1),
(125, 'About Us', 'page/about-us', 0, 0, 'page', 'footermenu', 23, '2024-06-26 00:21:47', '2024-06-26 00:21:49', 18, NULL, 1),
(126, 'Sale Product', 'topic/sale-product', 0, 0, 'topic', 'mainmenu', 19, '2024-06-27 00:16:08', '2024-06-27 00:16:14', 18, NULL, 1),
(127, 'Product New Style', 'topic/product-new-style', 0, 0, 'topic', 'mainmenu', 9, '2024-06-27 00:16:08', '2024-06-27 00:16:11', 18, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_order`
--

CREATE TABLE `bhd_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `delivery_name` varchar(255) NOT NULL,
  `delivery_gender` varchar(255) NOT NULL,
  `delivery_email` varchar(255) NOT NULL,
  `delivery_phone` varchar(255) NOT NULL,
  `delivery_address` varchar(1000) NOT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `type` varchar(50) DEFAULT 'online',
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_order`
--

INSERT INTO `bhd_order` (`id`, `user_id`, `delivery_name`, `delivery_gender`, `delivery_email`, `delivery_phone`, `delivery_address`, `note`, `created_at`, `type`, `updated_at`, `updated_by`, `status`) VALUES
(26, 18, 'DuongHai', '1', 'asdfghjk@gmail.com', '2345678', 'hcm', 'SHip nhanh len dcm', '2024-06-25 03:56:49', 'online', '2024-06-25 03:56:49', NULL, 2),
(27, 18, 'DuongHai', '1', 'asdfghjk@gmail.com', '2345678', 'hcm', 'zxv', '2024-06-25 04:18:45', 'online', '2024-06-25 04:18:45', NULL, 2),
(28, 18, 'DuongHai', '1', 'asdfghjk@gmail.com', '2345678', 'hcm', 'd', '2024-07-01 03:32:35', 'online', '2024-07-01 03:32:35', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_orderdetail`
--

CREATE TABLE `bhd_orderdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `discount` double NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_orderdetail`
--

INSERT INTO `bhd_orderdetail` (`id`, `order_id`, `product_id`, `price`, `qty`, `discount`, `amount`) VALUES
(72, 26, 1011, 40, 2, 0, 80),
(73, 26, 1020, 1, 2, 0, 2),
(74, 27, 1011, 40, 1, 0, 40),
(75, 28, 1018, 135, 1, 0, 135);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_post`
--

CREATE TABLE `bhd_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `detail` text NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` enum('post','page') NOT NULL DEFAULT 'post',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_post`
--

INSERT INTO `bhd_post` (`id`, `topic_id`, `title`, `slug`, `detail`, `description`, `image`, `type`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(17, 8, 'Sale of products is Table', 'sale-of-products-is-table', 'The quick brown fox jumps over the lazy dog. The five boxing wizards jump quickly. Pack my box with five dozen liquor jugs. How vexingly quick daft zebras jump! Amazingly few discotheques provide jukeboxes. Crazy Fredrick bought many very exquisite opal jewels. The jay, pig, fox, zebra, and my wolves quax! Jaded zombies acted quaintly but kept driving their oxen forward. Sphinx of black quartz, judge my vow. We promptly judged antique ivory buckles for the next prize. Crazy Fredrick bought many very exquisite opal jewels. We', 'sale of products is', '20240603161326.jpg', 'post', '2024-06-03 09:13:26', '2024-06-25 13:30:00', 1, 18, 1),
(18, 8, 'Sale 30% of products is Chair', 'sale-30-of-products-is-chair', 'sale of products is', 'sale of products is', '20240603161450.jpg', 'post', '2024-06-03 09:14:50', '2024-06-25 13:30:12', 1, 18, 1),
(22, 9, 'New Product', 'new-product', 'New Product', 'New Product', 'New Product.png', 'post', '2024-06-20 23:32:21', '2024-06-25 13:30:17', 10, 18, 1),
(23, 16, 'About Us', 'about-us', 'Chào mừng bạn đến với D1_FURNITURE, nơi cung cấp những sản phẩm nội thất tinh tế và hiện đại nhất! Chúng tôi tự hào là địa chỉ đáng tin cậy cho các gia đình và doanh nghiệp trong việc trang trí và nâng cấp không gian sống và làm việc. Với bộ sưu tập đa dạng gồm bàn, giường, đèn, sofa và ghế, D1_FURNITURE cam kết mang đến cho khách hàng những sản phẩm tốt nhất về cả chất lượng và thẩm mỹ.', 'Chào mừng bạn đến với D1_FURNITURE, nơi cung cấp những sản phẩm nội thất tinh tế và hiện đại nhất! Chúng tôi tự hào là địa chỉ đáng tin cậy cho các gia đình và doanh nghiệp trong việc trang trí và nâng cấp không gian sống và làm việc. Với bộ sưu tập đa dạng gồm bàn, giường, đèn, sofa và ghế, D1_FURNITURE cam kết mang đến cho khách hàng những sản phẩm tốt nhất về cả chất lượng và thẩm mỹ.\r\n\r\nTại D1_FURNITURE, chúng tôi hiểu rằng mỗi không gian đều mang một cá tính riêng. Do đó, chúng tôi không ngừng tìm kiếm và cung cấp những sản phẩm nội thất phù hợp với mọi phong cách, từ cổ điển đến hiện đại, từ thanh lịch đến tối giản. Mỗi sản phẩm được chúng tôi lựa chọn kỹ lưỡng từ những nhà cung cấp uy tín, đảm bảo tính bền vững và sự tiện nghi tối đa cho người sử dụng.\r\n\r\nChúng tôi đặc biệt chú trọng đến chất lượng và sự đa dạng trong thiết kế. Bộ sưu tập bàn của chúng tôi bao gồm nhiều kiểu dáng và chất liệu khác nhau, từ bàn làm việc thanh lịch đến bàn ăn ấm cúng cho gia đình. Những chiếc giường của chúng tôi không chỉ đảm bảo giấc ngủ ngon mà còn là điểm nhấn cho phòng ngủ của bạn với thiết kế hiện đại và chất liệu cao cấp. Đèn trang trí của chúng tôi giúp tạo nên không gian sống ấm áp và đầy phong cách, trong khi các mẫu sofa và ghế mang đến sự thoải mái và phong cách riêng biệt cho phòng khách và văn phòng.', 'About Us.jpg', 'page', '2024-06-24 01:56:55', '2024-06-25 23:50:09', 18, 18, 1),
(28, 19, 'Sale 10%', 'sale-10', 'Sale 10%Sale 10%Sale 10%', 'Sale 10%Sale 10%Sale 10%', 'sale-10.jpg', 'post', '2024-06-25 12:25:24', '2024-06-25 12:25:24', 18, NULL, 1),
(29, 19, 'Sale 20%', 'sale-20', 'Sale 20%Sale 20%Sale 20%', 'Sale 20%Sale 20%Sale 20%', 'sale-20.jpg', 'post', '2024-06-25 12:25:41', '2024-06-25 12:25:41', 18, NULL, 1),
(30, 19, 'Sale 30%', 'sale-30', 'Sale 30%Sale 30%Sale 30%', 'Sale 30%Sale 30%Sale 30%', 'sale-30.jpg', 'post', '2024-06-25 12:25:58', '2024-06-25 12:25:58', 18, NULL, 1),
(31, 19, 'Sale 40%', 'sale-40', 'Sale 40%Sale 40%Sale 40%', 'Sale 40%Sale 40%Sale 40%', 'sale-40.jpg', 'post', '2024-06-25 12:26:17', '2024-06-25 12:26:17', 18, NULL, 1),
(32, 9, 'New Product 1', 'new-product-1', 'New Product 1New Product 1New Product 1', 'New Product 1New Product 1New Product 1', 'new-product-1.jpg', 'post', '2024-06-25 12:26:37', '2024-06-25 12:26:37', 18, NULL, 1),
(33, 9, 'New Product 2', 'new-product-2', 'New Product 1New Product 1New Product 1', 'New Product 1New Product 1New Product 1', 'new-product-1new-product-1new-product-1.jpg', 'post', '2024-06-25 12:26:49', '2024-06-25 12:27:13', 18, 18, 1),
(34, 9, 'New Product 3', 'new-product-3', 'New Product 3New Product 3New Product 3', 'New Product 3New Product 3New Product 3', 'new-product-3.jpg', 'post', '2024-06-25 12:27:05', '2024-06-25 12:27:05', 18, NULL, 1),
(35, 9, 'New Product 4', 'new-product-4', 'New Product 4New Product 4', 'New Product 4New Product 4', 'new-product-4.jpg', 'post', '2024-06-25 12:27:28', '2024-06-25 12:27:28', 18, NULL, 1),
(36, 17, 'Chính Sách Bảo Hành', 'chinh-sach-bao-hanh', 'Toàn bộ sản phẩm do Nội Thất Thiên Hòa sản xuất và cung cấp đều được bảo hành miễn phí 12 tháng kể từ ngày giao hàng và lắp đặt hoàn thiện cho khách hàng.', 'Toàn bộ sản phẩm do Nội Thất Thiên Hòa sản xuất và cung cấp đều được bảo hành miễn phí 12 tháng kể từ ngày giao hàng và lắp đặt hoàn thiện cho khách hàng.', NULL, 'page', '2024-06-25 23:45:18', '2024-06-25 23:45:18', 18, NULL, 1),
(37, 17, 'Chính Sách Đổi Trả', 'chinh-sach-doi-tra', 'Nội Thất Thiên Hòa có chính sách đổi trả hàng trong vòng 7 ngày tiếp theo kể từ ngày giao nhận hàng. Để đổi trả hàng, quý khách cần Quý khách phải mang sản phẩm đến showroom của Nội Thất Thiên Hòa để đổi trả hàng và phải tự trả chi phí vận chuyển. Hoặc khách hàng có thể yêu cầu dịch vụ vận chuyển tận nhà của Thiên Hòa nhưng phải tự chịu chi phí.\r\n* Điều kiện áp dụng:\r\nSản phẩm còn trong trình trạng mới, chưa sử dụng, không bị hư hỏng, trầy xước.\r\nSản phẩm còn nguyên hóa đơn và phiếu mua hàng.\r\n* Không áp dụng chính sách đổi trả trong các trường hợp:\r\nSản phẩm khuyến mãi, hoặc sản phẩm bán theo set.\r\nSản phẩm được mua bằng phiếu mua hàng (voucher) chỉ được đổi sang sản phẩm khác.', 'Chính Sách Đổi Trả', NULL, 'page', '2024-06-25 23:46:06', '2024-06-25 23:46:06', 18, NULL, 1),
(38, 17, 'Chính Sách Mua Hàng', 'chinh-sach-mua-hang', 'Khách hàng nếu muốn hủy đơn hàng đã đặt thì gần gọi đến số hotline để hủy đơn hàng trong vòng 24h đối khách hàng ở Hà Nội và 48h với các khác hàng ở ngoại tỉnh.\r\nNếu hủy đơn hàng muộn, khách hàng phải thanh toán toàn bộ chi phí giao hàng theo quy định.', 'Chính Sách Mua Hàng', NULL, 'page', '2024-06-25 23:47:29', '2024-06-25 23:47:29', 18, NULL, 1),
(39, 17, 'Chính Sách Vận Chuyển', 'chinh-sach-van-chuyen', 'Nội Thất Thiên Hòa áp dụng giữ hàng cho trong vòng 30 ngày nếu khách hàng thanh toán đầy đủ 100% giá trị sản phẩm. Sau 30 ngày, khách hàng sẽ phải chịu thêm phí lưu kho với chi phí 10% tổng sản phẩm.\r\nNếu sau 60 ngày khách hàng vẫn không nhận hàng thì Nội Thất Thiên Hòa có quyền thu lại hàng hóa và chỉ hoàn lại 50% giá trị sản phẩm.', 'Chính Sách Vận Chuyển', NULL, 'page', '2024-06-25 23:48:14', '2024-06-25 23:48:14', 18, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_product`
--

CREATE TABLE `bhd_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `detail` text NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `price` double NOT NULL,
  `pricesale` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_product`
--

INSERT INTO `bhd_product` (`id`, `category_id`, `brand_id`, `name`, `slug`, `detail`, `description`, `image`, `price`, `pricesale`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1009, 40, 18, 'Amoeba Wild Walnut Side Table', 'amoeba-wild-walnut-side-table', 'Amoeba Wild Walnut Side Table', 'Amoeba Wild Walnut Side Table', '20240603114921.webp', 240, 10, '2024-06-03 04:49:21', '2024-06-17 03:06:21', 1, 1, 1),
(1010, 39, 19, 'Esse Light Oak Counter', 'esse-light-oak-counter', 'Esse Light Oak Counter Stool', 'Esse Light Oak Counter Stool', '20240603115137.webp', 200, 150, '2024-06-03 04:51:37', '2024-06-17 20:38:23', 1, 1, 1),
(1011, 38, 19, 'Gabriola Ivory Bouclé Lounge Sofa', 'gabriola-ivory-boucle-lounge-sofa', 'Gabriola Ivory Bouclé Lounge Chair', 'Gabriola Ivory Bouclé Lounge Chair', '20240603122118.webp', 140, 40, '2024-06-03 05:21:18', '2024-06-17 20:38:15', 1, 1, 1),
(1014, 51, 18, 'Bed Simple Desk', 'bed-simple-desk', '111', '11111', '11111.webp', 300, 170, '2024-06-16 05:54:32', '2024-06-17 03:07:23', 1, 1, 1),
(1015, 52, 20, 'Leap Black Floor Lamp', 'leap-black-floor-lamp', 'Leap Black Floor Lamp', 'Leap Black Floor Lamp', '20240618034055.webp', 459, 200, '2024-06-17 20:40:55', '2024-06-17 20:40:55', 1, NULL, 1),
(1016, 52, 19, 'Heron Black Floor Lamp', 'heron-black-floor-lamp', 'Heron Black Floor Lamp', 'Heron Black Floor Lamp', '20240618034146.webp', 340, 70, '2024-06-17 20:41:46', '2024-06-17 20:41:46', 1, NULL, 1),
(1017, 40, 20, 'Tima Sand Brown Coffee Table', 'tima-sand-brown-coffee-table', 'Tima Sand Brown Coffee Table', 'Tima Sand Brown Coffee Table', '20240618085707.webp', 500, 200, '2024-06-18 01:57:07', '2024-06-18 01:57:07', 1, NULL, 1),
(1018, 60, 19, 'King Sham Set Bed', 'king-sham-set-bed', 'King Sham Set Bed', 'King Sham Set Bed', '20240618091819.webp', 430, 135, '2024-06-18 02:18:19', '2024-06-18 03:12:56', 1, 1, 1),
(1019, 41, 20, 'Lubek Tuscan Brown Coffee Table', 'lubek-tuscan-brown-coffee-table', 'Lubek Tuscan Brown Coffee Table', 'Lubek Tuscan Brown Coffee Table', '20240618172647.webp', 400, 300, '2024-06-18 10:26:47', '2024-06-18 10:26:47', 10, NULL, 1),
(1020, 54, 19, 'Gray Table For 6 Dining', 'gray-table-for-6-dining', 'Gray Table For 6 Dining', 'Gray Table For 6 Dining', '20240618172953.webp', 400, 1, '2024-06-18 10:29:53', '2024-06-18 10:29:53', 10, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_topic`
--

CREATE TABLE `bhd_topic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `description` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_topic`
--

INSERT INTO `bhd_topic` (`id`, `name`, `slug`, `sort_order`, `description`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(8, 'Sale 50%', 'sale-50', 1, 'giảm giá 50%', '2024-06-03 09:11:02', '2024-06-03 09:11:02', 1, NULL, 1),
(9, 'Product New Style', 'product-new-style', 1, 'sản phẩm mới', '2024-06-03 09:11:37', '2024-06-16 06:06:31', 1, 1, 1),
(10, 'sdvs', 'sdvs', 1, 'vdsvds', '2024-06-03 10:26:14', '2024-06-03 10:26:14', 1, NULL, 2),
(11, 'ádd', 'add', 1, 'cxvx', '2024-06-03 10:27:12', '2024-06-03 10:27:13', 1, NULL, 2),
(12, 'sấc', 'sac', 1, 'acsa', '2024-06-03 10:32:08', '2024-06-24 01:41:39', 1, 18, 2),
(13, '1111111111111111', '1111111111111111', 1, 'zxvzvsddsbds', '2024-06-04 03:01:47', '2024-06-24 01:41:41', 1, 18, 2),
(14, 'wewegw', 'wewegw', 1, 'dsfsd', '2024-06-07 08:46:35', '2024-06-16 06:01:25', 1, 1, 0),
(16, 'Tin Tức', 'tin-tuc', 1, 'tin tức', '2024-06-24 01:41:37', '2024-06-24 01:41:37', 18, NULL, 1),
(17, 'Dịch Vụ', 'dich-vu', 1, 'savasvsav', '2024-06-24 01:41:57', '2024-06-24 01:41:57', 18, NULL, 1),
(18, 'Sale', 'sale', 1, 'sale', '2024-06-25 12:14:07', '2024-06-25 12:14:26', 18, 18, 2),
(19, 'Sale Product', 'sale-product', 1, 'ssa', '2024-06-25 12:14:23', '2024-06-25 12:14:23', 18, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhd_user`
--

CREATE TABLE `bhd_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roles` enum('admin','customer') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bhd_user`
--

INSERT INTO `bhd_user` (`id`, `name`, `username`, `password`, `gender`, `phone`, `email`, `roles`, `image`, `address`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(18, 'DuongHai', 'admin', '$2y$12$0Soh4DcaWurHZ0q2FJRUk.Mp7V9RqevdjERUkEFzL731YeamEfHDe', '1', '2345678', 'asdfghjk@gmail.com', 'admin', '20240624040223.png', 'hcm', NULL, '2024-06-23 21:02:23', '2024-06-23 21:07:29', 1, 18, 1),
(19, 'dat', 'dat', '$2y$12$TDniDy1aBB3nMffSBsxRVO/qupupJpPpqOm7UH3nMFAdxTHVEzAT2', '1', '1234567', 'sdfghj`', 'customer', NULL, NULL, NULL, '2024-06-23 21:10:16', '2024-06-23 21:10:16', 1, NULL, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bhd_banner`
--
ALTER TABLE `bhd_banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_brand`
--
ALTER TABLE `bhd_brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_category`
--
ALTER TABLE `bhd_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_contact`
--
ALTER TABLE `bhd_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_menu`
--
ALTER TABLE `bhd_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_order`
--
ALTER TABLE `bhd_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_orderdetail`
--
ALTER TABLE `bhd_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_post`
--
ALTER TABLE `bhd_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_product`
--
ALTER TABLE `bhd_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_topic`
--
ALTER TABLE `bhd_topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bhd_user`
--
ALTER TABLE `bhd_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bhd_banner`
--
ALTER TABLE `bhd_banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `bhd_brand`
--
ALTER TABLE `bhd_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `bhd_category`
--
ALTER TABLE `bhd_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `bhd_contact`
--
ALTER TABLE `bhd_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `bhd_menu`
--
ALTER TABLE `bhd_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT cho bảng `bhd_order`
--
ALTER TABLE `bhd_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `bhd_orderdetail`
--
ALTER TABLE `bhd_orderdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `bhd_post`
--
ALTER TABLE `bhd_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `bhd_product`
--
ALTER TABLE `bhd_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT cho bảng `bhd_topic`
--
ALTER TABLE `bhd_topic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `bhd_user`
--
ALTER TABLE `bhd_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
