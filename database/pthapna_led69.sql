-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2017 at 11:26 AM
-- Server version: 5.5.31
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pthapna_led69`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment_status` tinyint(1) DEFAULT NULL,
  `comment_is_new` tinyint(1) DEFAULT NULL,
  `comment_detail` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment_id`, `post_id`, `comment_status`, `comment_is_new`, `comment_detail`, `created_at`, `updated_at`) VALUES
(1, 0, 12, 1, NULL, 'Thiết kế gian hàng triễn lãm, trung tâm thương mại và showroom', '2017-04-07 03:20:13', '2017-04-07 03:20:13'),
(2, 0, 12, 1, NULL, 'Hãy liên hệ ngay với chúng tôi để được tư vấn và phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức giá cạnh tranh', '2017-04-07 03:54:41', '2017-04-07 03:54:41'),
(7, 1, 12, 1, 0, 'Hãy liên hệ ngay với chúng tôi để được tư vấn và phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức giá cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng cáo sản phẩm và dịch vụ của khách hàng.', '2017-04-07 05:07:47', '2017-04-12 14:54:33'),
(8, 0, 11, 1, NULL, 'Rất mong nhận được sự quan tâm và hợp tác của quý vị!', '2017-04-07 06:48:54', '2017-04-07 07:04:33'),
(9, 0, 11, 1, 0, 'Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng cáo truyền thông, Các ấn phẩm phục vụ sự kiện, Quảng cáo truyền thông: Banner, Poster, standee…...)', '2017-04-07 06:49:05', '2017-04-07 07:10:43'),
(10, 0, 7, 0, 0, 'Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng cáo truyền thông, Các ấn phẩm phục vụ sự kiện, Quảng cáo truyền thông: Banner, Poster, standee…...)', '2017-04-07 07:12:51', '2017-04-13 06:35:05'),
(11, 0, 4, 0, 1, 'alo', '2017-04-07 09:07:50', '2017-04-07 09:07:50'),
(12, 0, 5, 0, 1, 'a', '2017-04-07 09:10:16', '2017-04-07 09:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link_title` text CHARACTER SET utf8,
  `link_url` text CHARACTER SET utf8,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `link_name`, `link_title`, `link_url`, `created_at`, `updated_at`) VALUES
(1, 'Link ảnh trên cùng - Desktop', 'Quảng cáo 69', 'http://www.quangcao69.com/public/images/desktop/header-1.png', '2017-04-14 07:29:08', '2017-04-14 07:29:08'),
(2, 'Link ảnh trên cùng - Mobile', 'Quảng cáo 69', 'http://www.quangcao69.com/public/images/desktop/header-1.png', '2017-04-14 07:29:31', '2017-04-14 07:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `media_file` varchar(255) NOT NULL,
  `media_name` varchar(255) DEFAULT NULL,
  `media_alias` varchar(255) DEFAULT NULL,
  `media_folder` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `user_id`, `post_id`, `term_id`, `media_file`, `media_name`, `media_alias`, `media_folder`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 6, 'led-1491990569.jpeg', 'Led', 'led', NULL, '2017-04-12 09:49:29', '2017-04-12 09:49:29'),
(2, 1, 0, 6, 'fsdfsa-1491997275.png', 'fsdfsa', 'fsdfsa', NULL, '2017-04-12 11:41:15', '2017-04-12 11:41:15'),
(3, 1, 0, 3, 'bat-hiflex-1492006008.jpeg', 'bat hiflex', 'bat-hiflex', NULL, '2017-04-12 14:06:48', '2017-04-12 14:06:48'),
(4, 1, 0, 3, '1-1492006042.jpeg', '1', '1', NULL, '2017-04-12 14:07:22', '2017-04-12 14:07:22'),
(5, 1, 0, 3, '2-1492006063.jpeg', '2', '2', NULL, '2017-04-12 14:07:43', '2017-04-12 14:07:43'),
(6, 1, 0, 1, 'hvtc1-1492009037.jpeg', 'hvtc1', 'hvtc1', NULL, '2017-04-12 14:57:17', '2017-04-12 14:57:17'),
(7, 1, 0, 1, 'hvtc2-1492009069.jpeg', 'hvtc2', 'hvtc2', NULL, '2017-04-12 14:57:49', '2017-04-12 14:57:49'),
(8, 1, 0, 1, 'hvtc-2-1492009123.jpeg', 'hvtc 2', 'hvtc-2', NULL, '2017-04-12 14:58:43', '2017-04-12 14:58:43'),
(9, 1, 0, 1, 'hvtc-3-1492009153.jpeg', 'hvtc 3', 'hvtc-3', NULL, '2017-04-12 14:59:13', '2017-04-12 14:59:13'),
(10, 1, 0, 1, 'domino1-1492009825.jpeg', 'domino1', 'domino1', NULL, '2017-04-12 15:10:25', '2017-04-12 15:10:25'),
(11, 1, 0, 1, 'domino1-1492009849.jpeg', 'domino1', 'domino1', NULL, '2017-04-12 15:10:49', '2017-04-12 15:10:49'),
(12, 1, 0, 1, 'domino1-1492009874.jpeg', 'domino1', 'domino1', NULL, '2017-04-12 15:11:14', '2017-04-12 15:11:14'),
(13, 1, 0, 1, 'domino1-1492009886.jpeg', 'domino1', 'domino1', NULL, '2017-04-12 15:11:26', '2017-04-12 15:11:26'),
(14, 1, 0, 1, 'httpquangcao69compublicimgdomino1-1492009825jpeg-1492009925.jpeg', 'http://quangcao69.com/public/img/domino1-1492009825.jpeg', 'httpquangcao69compublicimgdomino1-1492009825jpeg', NULL, '2017-04-12 15:12:05', '2017-04-12 15:12:05'),
(15, 1, 0, 1, 'aima-1492010335.jpeg', 'aima', 'aima', NULL, '2017-04-12 15:18:55', '2017-04-12 15:18:55'),
(16, 1, 0, 1, 'aima-1492010350.jpeg', 'aima', 'aima', NULL, '2017-04-12 15:19:10', '2017-04-12 15:19:10'),
(17, 1, 0, 1, 'aima-1492010367.jpeg', 'aima', 'aima', NULL, '2017-04-12 15:19:27', '2017-04-12 15:19:27'),
(18, 1, 0, 1, 'aima-1492010385.jpeg', 'aima', 'aima', NULL, '2017-04-12 15:19:45', '2017-04-12 15:19:45'),
(19, 1, 0, 1, 'cong-trinh-quang-ninh-1492010696.jpeg', 'Công trình Quảng Ninh', 'cong-trinh-quang-ninh', NULL, '2017-04-12 15:24:56', '2017-04-12 15:24:56'),
(20, 1, 0, 1, 'cong-trinh-quang-ninh-1492010710.jpeg', 'Công trình Quảng Ninh', 'cong-trinh-quang-ninh', NULL, '2017-04-12 15:25:10', '2017-04-12 15:25:10'),
(21, 1, 0, 1, 'cong-trinh-quang-ninh-1492010734.jpeg', 'Công trình Quảng Ninh', 'cong-trinh-quang-ninh', NULL, '2017-04-12 15:25:34', '2017-04-12 15:25:34'),
(22, 1, 0, 1, 'cong-trinh-quang-ninh-1492010744.jpeg', 'Công trình Quảng Ninh', 'cong-trinh-quang-ninh', NULL, '2017-04-12 15:25:44', '2017-04-12 15:25:44'),
(23, 1, 0, 1, 'cr7-1492011094.jpeg', 'CR7', 'cr7', NULL, '2017-04-12 15:31:34', '2017-04-12 15:31:34'),
(24, 1, 0, 1, 'cr7-1492011104.jpeg', 'CR7', 'cr7', NULL, '2017-04-12 15:31:44', '2017-04-12 15:31:44'),
(25, 1, 0, 1, 'cr7-1492011129.jpeg', 'CR7', 'cr7', NULL, '2017-04-12 15:32:09', '2017-04-12 15:32:09'),
(26, 1, 0, 1, 'cr7-1492011144.jpeg', 'CR7', 'cr7', NULL, '2017-04-12 15:32:24', '2017-04-12 15:32:24'),
(27, 1, 0, 1, 'suzika-tt-1492011340.jpeg', 'Suzika tt', 'suzika-tt', NULL, '2017-04-12 15:35:40', '2017-04-12 15:35:40'),
(28, 1, 0, 1, 'suzika-tt-1492011367.jpeg', 'Suzika tt', 'suzika-tt', NULL, '2017-04-12 15:36:07', '2017-04-12 15:36:07'),
(29, 1, 0, 1, 'suzika-tt-1492011391.jpeg', 'Suzika tt', 'suzika-tt', NULL, '2017-04-12 15:36:31', '2017-04-12 15:36:31'),
(30, 1, 0, 1, 'xe-dien-nhat-linh-1492011678.jpeg', 'Xe Điện Nhật Linh', 'xe-dien-nhat-linh', NULL, '2017-04-12 15:41:18', '2017-04-12 15:41:18'),
(31, 1, 0, 1, 'xe-dien-nhat-linh-81-ton-duc-thang-1492011686.jpeg', 'Xe Điện Nhật Linh 81 Tôn Đức thắng', 'xe-dien-nhat-linh-81-ton-duc-thang', NULL, '2017-04-12 15:41:26', '2017-04-12 15:41:26'),
(32, 1, 0, 1, 'xe-dien-nhat-linh-81-ton-duc-thang-1492011695.jpeg', 'Xe Điện Nhật Linh 81 Tôn Đức thắng', 'xe-dien-nhat-linh-81-ton-duc-thang', NULL, '2017-04-12 15:41:35', '2017-04-12 15:41:35'),
(33, 1, 0, 1, 'xe-dien-nhat-linh-81-ton-duc-thang-1492011708.jpeg', 'Xe Điện Nhật Linh 81 Tôn Đức thắng', 'xe-dien-nhat-linh-81-ton-duc-thang', NULL, '2017-04-12 15:41:48', '2017-04-12 15:41:48'),
(34, 1, 0, 1, 'xe-dien-nhat-linh-81-ton-duc-thang-1492011720.jpeg', 'Xe Điện Nhật Linh 81 Tôn Đức thắng', 'xe-dien-nhat-linh-81-ton-duc-thang', NULL, '2017-04-12 15:42:00', '2017-04-12 15:42:00'),
(35, 1, 0, 1, 'boutique-1492011872.jpeg', 'boutique', 'boutique', NULL, '2017-04-12 15:44:32', '2017-04-12 15:44:32'),
(36, 1, 0, 1, 'boutique-1492011885.jpeg', 'boutique', 'boutique', NULL, '2017-04-12 15:44:45', '2017-04-12 15:44:45'),
(37, 1, 0, 1, 'boutique-1492011904.jpeg', 'boutique', 'boutique', NULL, '2017-04-12 15:45:04', '2017-04-12 15:45:04'),
(38, 1, 0, 1, 'suzika-phung-1492012101.jpeg', 'Suzika Phùng', 'suzika-phung', NULL, '2017-04-12 15:48:21', '2017-04-12 15:48:21'),
(39, 1, 0, 1, 'suzika-phung-1492012118.jpeg', 'Suzika Phùng', 'suzika-phung', NULL, '2017-04-12 15:48:38', '2017-04-12 15:48:38'),
(40, 1, 0, 1, 'suzika-phung-1492012132.jpeg', 'Suzika Phùng', 'suzika-phung', NULL, '2017-04-12 15:48:52', '2017-04-12 15:48:52'),
(41, 1, 0, 1, 'suzika-phung-1492012153.jpeg', 'Suzika Phùng', 'suzika-phung', NULL, '2017-04-12 15:49:13', '2017-04-12 15:49:13'),
(42, 1, 0, 1, 'cr7-2-1492012369.jpeg', 'Cr7 2', 'cr7-2', NULL, '2017-04-12 15:52:49', '2017-04-12 15:52:49'),
(43, 1, 0, 1, 'cr7-2-1492012385.jpeg', 'Cr7 2', 'cr7-2', NULL, '2017-04-12 15:53:05', '2017-04-12 15:53:05'),
(44, 1, 0, 1, 'cr7-2-1492012414.jpeg', 'Cr7 2', 'cr7-2', NULL, '2017-04-12 15:53:34', '2017-04-12 15:53:34'),
(45, 1, 0, 1, 'cr7-2-1492012430.jpeg', 'Cr7 2', 'cr7-2', NULL, '2017-04-12 15:53:50', '2017-04-12 15:53:50'),
(46, 1, 0, 1, 'inoxx-1492013365.jpeg', 'inoxx', 'inoxx', NULL, '2017-04-12 16:09:25', '2017-04-12 16:09:25'),
(47, 1, 0, 1, 'inoxx-1492013379.jpeg', 'inoxx', 'inoxx', NULL, '2017-04-12 16:09:39', '2017-04-12 16:09:39'),
(48, 1, 0, 1, 'inoxx-1492013390.jpeg', 'inoxx', 'inoxx', NULL, '2017-04-12 16:09:50', '2017-04-12 16:09:50'),
(49, 1, 0, 1, 'suzika-thach-that-1492059809.jpeg', 'Suzika thach that', 'suzika-thach-that', NULL, '2017-04-13 05:03:29', '2017-04-13 05:03:29'),
(50, 1, 0, 1, 'suzika-thach-that-1492059831.jpeg', 'Suzika thach that', 'suzika-thach-that', NULL, '2017-04-13 05:03:51', '2017-04-13 05:03:51'),
(51, 1, 0, 1, 'led-1492068760.jpeg', 'led', 'led', NULL, '2017-04-13 07:32:40', '2017-04-13 07:32:40'),
(52, 1, 0, 1, 'led-1492068778.jpeg', 'led', 'led', NULL, '2017-04-13 07:32:58', '2017-04-13 07:32:58'),
(53, 1, 0, 1, 'led-1492068790.jpeg', 'led', 'led', NULL, '2017-04-13 07:33:10', '2017-04-13 07:33:10'),
(54, 1, 0, 1, 'phu-tho-1492092158.jpeg', 'phu tho', 'phu-tho', NULL, '2017-04-13 14:02:38', '2017-04-13 14:02:38'),
(55, 1, 0, 1, 'phu-tho-1492092181.jpeg', 'phu tho', 'phu-tho', NULL, '2017-04-13 14:03:01', '2017-04-13 14:03:01'),
(56, 1, 0, 1, 'phu-thoe-1492092204.jpeg', 'phu thoe', 'phu-thoe', NULL, '2017-04-13 14:03:24', '2017-04-13 14:03:24'),
(57, 1, 0, 1, 'mica-1492093384.png', 'mica', 'mica', NULL, '2017-04-13 14:23:04', '2017-04-13 14:23:04'),
(58, 1, 0, 1, 'mica-1492093397.jpeg', 'mica', 'mica', NULL, '2017-04-13 14:23:17', '2017-04-13 14:23:17'),
(59, 1, 0, 1, 'pho-hue-1492093791.jpeg', 'pho hue', 'pho-hue', NULL, '2017-04-13 14:29:51', '2017-04-13 14:29:51'),
(60, 1, 0, 1, 'pho-hue-1492093814.jpeg', 'pho hue', 'pho-hue', NULL, '2017-04-13 14:30:14', '2017-04-13 14:30:14'),
(61, 1, 0, 1, 'pho-hue-1492093829.jpeg', 'pho hue', 'pho-hue', NULL, '2017-04-13 14:30:29', '2017-04-13 14:30:29'),
(62, 1, 0, 1, 'thai-ha-1492093909.jpeg', 'thai ha', 'thai-ha', NULL, '2017-04-13 14:31:49', '2017-04-13 14:31:49'),
(63, 1, 0, 1, 'thai-ha-1492093924.jpeg', 'thai ha', 'thai-ha', NULL, '2017-04-13 14:32:04', '2017-04-13 14:32:04'),
(64, 1, 0, 1, 'dong-1492094975.jpeg', 'dong', 'dong', NULL, '2017-04-13 14:49:35', '2017-04-13 14:49:35'),
(65, 1, 0, 1, 'inox-1492094987.jpeg', 'inox', 'inox', NULL, '2017-04-13 14:49:47', '2017-04-13 14:49:47'),
(66, 1, 0, 1, 'mica-1492095025.jpeg', 'mica', 'mica', NULL, '2017-04-13 14:50:25', '2017-04-13 14:50:25'),
(67, 1, 0, 1, 'dong-1492095122.jpeg', 'dong', 'dong', NULL, '2017-04-13 14:52:02', '2017-04-13 14:52:02'),
(68, 1, 0, 1, '1-1492139573.jpeg', '1', '1', NULL, '2017-04-14 03:12:53', '2017-04-14 03:12:53'),
(69, 1, 0, 1, '1-1492141143.jpeg', '1', '1', NULL, '2017-04-14 03:39:03', '2017-04-14 03:39:03'),
(70, 1, 0, 1, 'sli-2-1492141165.jpeg', 'sli 2', 'sli-2', NULL, '2017-04-14 03:39:25', '2017-04-14 03:39:25'),
(71, 1, 0, 1, 'sli3-1492141185.jpeg', 'sli3', 'sli3', NULL, '2017-04-14 03:39:45', '2017-04-14 03:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_avatar` varchar(255) DEFAULT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_alias` varchar(255) NOT NULL,
  `post_group` tinyint(4) DEFAULT NULL,
  `post_status` tinyint(1) NOT NULL,
  `post_description` text NOT NULL,
  `post_detail` longtext NOT NULL,
  `post_keyword` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `term_id`, `user_id`, `post_avatar`, `post_name`, `post_alias`, `post_group`, `post_status`, `post_description`, `post_detail`, `post_keyword`, `created_at`, `updated_at`) VALUES
(1, 12, 1, 'bien-quang-cao-cua-hang-1491292969.png', 'Biển quảng cáo 69.com', 'bien-quang-cao-69com', 0, 0, 'Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với diện tích và phong cách của loại hình sản phẩm bạn sẽ kinh doanh. Bạn cần tìm công ty thiết kế quảng cáo & nội thất và nói cho họ biết ý tưởng và phong cách, việc còn lại là của họ, với chuyên môn kỹ thuật họ sẽ nhanh chóng đưa cho bạn mẫu thiết kế phù hợp.', '<p>C&aacute;c bước chuẩn bị để mở cửa h&agrave;ng với GAGVIETNAM:</p>\r\n<p style="padding-left: 30px;"><strong>1.L&ecirc;n &yacute; tưởng v&agrave; lựa chọn phong c&aacute;ch cho cửa h&agrave;ng </strong></p>\r\n<p style="padding-left: 60px;">Việc c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch của cửa h&agrave;ng l&agrave; rất quan trọng, bởi v&igrave; n&oacute; sẽ quyết định nguồn kh&aacute;ch h&agrave;ng m&agrave; bạn hướng tới. Do vậy, c&aacute;c bạn n&ecirc;n h&igrave;nh th&agrave;nh cho m&igrave;nh &yacute; tưởng v&agrave; phong c&aacute;ch ri&ecirc;ng của cửa h&agrave;ng hoặc từ đối tượng kh&aacute;ch h&agrave;ng hướng tới th&igrave; đưa ra được &yacute; tưởng. Sau khi đ&atilde; c&oacute; &yacute; tưởng mở cửa h&agrave;ng theo phong c&aacute;ch n&agrave;o bạn n&ecirc;n ch&uacute; &yacute; đến nguồn vốn hiện tại bạn c&oacute; hay mặt bằng đặt cửa h&agrave;ng bạn c&oacute; thể thu&ecirc;... rồi quyết định &yacute; tưởng v&agrave; phong c&aacute;ch của n&oacute;.</p>\r\n<p style="padding-left: 30px;"><strong>2.Thu&ecirc; mặt bằng </strong></p>\r\n<p style="padding-left: 60px;">Mặt bằng lu&ocirc;n l&agrave; yếu tố ti&ecirc;n quyết cho việc th&agrave;nh c&ocirc;ng của cửa h&agrave;ng. Khi c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch rồi, c&aacute;c bạn n&ecirc;n ch&uacute; &yacute; t&igrave;m địa điểm đặt biển quảng c&aacute;o cho cửa h&agrave;ng sao cho ph&ugrave; hợp. Nếu bạn c&oacute; nh&agrave; để mở cửa h&agrave;ng th&igrave; y&ecirc;n t&acirc;m v&igrave; bạn đ&atilde; chắc thắng tới 60%, nhưng nếu bạn phải đi thu&ecirc; th&igrave; cần ch&uacute; &yacute; l&agrave; thời gian thu&ecirc; phải d&agrave;i để c&oacute; thời gian thu h&uacute;t kh&aacute;ch v&agrave; kiếm đủ tiền để ho&agrave;n vốn đầu tư.</p>\r\n<p style="padding-left: 30px;"><strong>3.Thiết kế nội thất &amp; biển quảng c&aacute;o.</strong></p>\r\n<p style="padding-left: 60px;">Bạn cũng n&ecirc;n d&agrave;nh nhiều thời gian để đưa ra c&aacute;ch thiết kế nội thất cửa h&agrave;ng sao cho ph&ugrave; hợp với diện t&iacute;ch v&agrave; phong c&aacute;ch của loại h&igrave;nh sản phẩm bạn sẽ kinh doanh. Bạn cần t&igrave;m c&ocirc;ng ty thiết kế quảng c&aacute;o &amp; nội thất v&agrave; n&oacute;i cho họ biết &yacute; tưởng v&agrave; phong c&aacute;ch, việc c&ograve;n lại l&agrave; của họ, với chuy&ecirc;n m&ocirc;n kỹ thuật họ sẽ nhanh ch&oacute;ng đưa cho bạn mẫu thiết kế ph&ugrave; hợp. Với c&aacute;c loại h&igrave;nh l&agrave;m biển quảng c&aacute;o cửa h&agrave;ng tương ứng với nội thất v&agrave; c&aacute;ch b&agrave;i tr&iacute; của cửa h&agrave;ng ph&ugrave; hợp với &yacute; tưởng kinh doanh của bạn. Ở GAGVIETNAM ch&uacute;ng t&ocirc;i sẵn c&oacute; c&aacute;c loại h&igrave;nh biển quảng c&aacute;o ấn tượng v&agrave; chuy&ecirc;n biệt để g&oacute;p một phần nhỏ b&eacute; cho một kế hoạch h&igrave;nh th&agrave;nh thương hiệu của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>4.Trang tr&iacute;</strong></p>\r\n<p style="padding-left: 60px;">Để l&agrave;m nổi bật phong c&aacute;ch cũng như nội thất của bạn, tạo một kh&ocirc;ng gian đẹp ph&ugrave; hợp với &yacute; tưởng ban đầu, bạn n&ecirc;n ch&uacute; &yacute; trang tr&iacute; cửa h&agrave;ng sao cho ph&ugrave; hợp. Bạn c&oacute; thể d&ugrave;ng c&aacute;c bức tranh vẽ, giấy d&aacute;n tường, vẽ tranh tường hay d&ugrave;ng những t&aacute;c phẩm nghệ thuật để trang tr&iacute;. Vẽ tranh tường đang l&agrave; một xu hướng mới cho c&aacute;c cửa h&agrave;ng hiện nay. Bạn c&oacute; thể lựa chọn cho m&igrave;nh những market tranh tường kh&aacute;c nhau sao cho ph&ugrave; hợp với &yacute; th&iacute;ch v&agrave; phong c&aacute;ch của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>5.V&agrave; cuối c&ugrave;ng</strong>:</p>\r\n<p style="padding-left: 60px;">H&atilde;y tận hưởng th&agrave;nh quả lao động của bạn với số lượng kh&aacute;ch h&agrave;ng đ&ocirc;ng đảo!. Đừng qu&ecirc;n gọi ch&uacute;ng t&ocirc;i 091787 5995 (Mr Dũng) một nh&acirc;n tố nhỏ b&eacute; nhưng sẽ g&oacute;p một phần nho nhỏ trong th&agrave;nh c&ocirc;ng của bạn. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với kế hoạch v&agrave; &yacute; tưởng kinh doanh của m&igrave;nh.</p>\r\n<p style="padding-left: 60px; text-align: center;">&nbsp;<img src="../../../public/img/led-1491990569.jpeg" /></p>', '', '2017-04-04 03:17:26', '2017-04-12 09:49:43'),
(3, 2, 1, 'sp-bien-quang-cao-hop-den-1492093290.jpeg', 'SP-Biển quảng cáo hộp đèn', 'sp-bien-quang-cao-hop-den', 1, 0, 'Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với diện tích và phong cách của loại hình sản phẩm bạn sẽ kinh doanh. Bạn cần tìm công ty thiết kế quảng cáo & nội thất và nói cho họ biết ý tưởng và phong cách, việc còn lại là của họ, với chuyên môn kỹ thuật họ sẽ nhanh chóng đưa cho bạn mẫu thiết kế phù hợp.', '<p>C&aacute;c bước chuẩn bị để mở cửa h&agrave;ng với&nbsp;<span style="color: #008000;"><strong>Quảng C&aacute;o 69</strong></span></p>\r\n<p style="padding-left: 30px;"><strong>1.L&ecirc;n &yacute; tưởng v&agrave; lựa chọn phong c&aacute;ch cho cửa h&agrave;ng </strong></p>\r\n<p style="padding-left: 60px;">Việc c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch của cửa h&agrave;ng l&agrave; rất quan trọng, bởi v&igrave; n&oacute; sẽ quyết định nguồn kh&aacute;ch h&agrave;ng m&agrave; bạn hướng tới. Do vậy, c&aacute;c bạn n&ecirc;n h&igrave;nh th&agrave;nh cho m&igrave;nh &yacute; tưởng v&agrave; phong c&aacute;ch ri&ecirc;ng của cửa h&agrave;ng hoặc từ đối tượng kh&aacute;ch h&agrave;ng hướng tới th&igrave; đưa ra được &yacute; tưởng. Sau khi đ&atilde; c&oacute; &yacute; tưởng mở cửa h&agrave;ng theo phong c&aacute;ch n&agrave;o bạn n&ecirc;n ch&uacute; &yacute; đến nguồn vốn hiện tại bạn c&oacute; hay mặt bằng đặt cửa h&agrave;ng bạn c&oacute; thể thu&ecirc;... rồi quyết định &yacute; tưởng v&agrave; phong c&aacute;ch của n&oacute;.</p>\r\n<p style="padding-left: 30px;"><strong>2.Thu&ecirc; mặt bằng </strong></p>\r\n<p style="padding-left: 60px;">Mặt bằng lu&ocirc;n l&agrave; yếu tố ti&ecirc;n quyết cho việc th&agrave;nh c&ocirc;ng của cửa h&agrave;ng. Khi c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch rồi, c&aacute;c bạn n&ecirc;n ch&uacute; &yacute; t&igrave;m địa điểm đặt biển quảng c&aacute;o cho cửa h&agrave;ng sao cho ph&ugrave; hợp. Nếu bạn c&oacute; nh&agrave; để mở cửa h&agrave;ng th&igrave; y&ecirc;n t&acirc;m v&igrave; bạn đ&atilde; chắc thắng tới 60%, nhưng nếu bạn phải đi thu&ecirc; th&igrave; cần ch&uacute; &yacute; l&agrave; thời gian thu&ecirc; phải d&agrave;i để c&oacute; thời gian thu h&uacute;t kh&aacute;ch v&agrave; kiếm đủ tiền để ho&agrave;n vốn đầu tư.</p>\r\n<p style="padding-left: 30px;"><strong>3.Thiết kế nội thất &amp; biển quảng c&aacute;o.</strong></p>\r\n<p style="padding-left: 60px;">Bạn cũng n&ecirc;n d&agrave;nh nhiều thời gian để đưa ra c&aacute;ch thiết kế nội thất cửa h&agrave;ng sao cho ph&ugrave; hợp với diện t&iacute;ch v&agrave; phong c&aacute;ch của loại h&igrave;nh sản phẩm bạn sẽ kinh doanh. Bạn cần t&igrave;m c&ocirc;ng ty thiết kế quảng c&aacute;o &amp; nội thất v&agrave; n&oacute;i cho họ biết &yacute; tưởng v&agrave; phong c&aacute;ch, việc c&ograve;n lại l&agrave; của họ, với chuy&ecirc;n m&ocirc;n kỹ thuật họ sẽ nhanh ch&oacute;ng đưa cho bạn mẫu thiết kế ph&ugrave; hợp. Với c&aacute;c loại h&igrave;nh l&agrave;m biển quảng c&aacute;o cửa h&agrave;ng tương ứng với nội thất v&agrave; c&aacute;ch b&agrave;i tr&iacute; của cửa h&agrave;ng ph&ugrave; hợp với &yacute; tưởng kinh doanh của bạn. Ở <span style="color: #008000;"><strong>Quảng C&aacute;o 69</strong></span>&nbsp;ch&uacute;ng t&ocirc;i sẵn c&oacute; c&aacute;c loại h&igrave;nh biển quảng c&aacute;o ấn tượng v&agrave; chuy&ecirc;n biệt để g&oacute;p một phần nhỏ b&eacute; cho một kế hoạch h&igrave;nh th&agrave;nh thương hiệu của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>4.Trang tr&iacute;</strong></p>\r\n<p style="padding-left: 60px;">Để l&agrave;m nổi bật phong c&aacute;ch cũng như nội thất của bạn, tạo một kh&ocirc;ng gian đẹp ph&ugrave; hợp với &yacute; tưởng ban đầu, bạn n&ecirc;n ch&uacute; &yacute; trang tr&iacute; cửa h&agrave;ng sao cho ph&ugrave; hợp. Bạn c&oacute; thể d&ugrave;ng c&aacute;c bức tranh vẽ, giấy d&aacute;n tường, vẽ tranh tường hay d&ugrave;ng những t&aacute;c phẩm nghệ thuật để trang tr&iacute;. Vẽ tranh tường đang l&agrave; một xu hướng mới cho c&aacute;c cửa h&agrave;ng hiện nay. Bạn c&oacute; thể lựa chọn cho m&igrave;nh những market tranh tường kh&aacute;c nhau sao cho ph&ugrave; hợp với &yacute; th&iacute;ch v&agrave; phong c&aacute;ch của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>5.V&agrave; cuối c&ugrave;ng</strong>:</p>\r\n<p style="padding-left: 30px;"><img src="../../../public/img/domino1-1492009886.jpeg" alt="" width="700" height="525" /></p>\r\n<p style="padding-left: 30px;"><img src="../../../public/img/domino1-1492009825.jpeg" alt="" width="700" height="525" /></p>\r\n<p style="padding-left: 60px;"><img src="../../../public/img/httpquangcao69compublicimgdomino1-1492009825jpeg-1492009925.jpeg" alt="" width="700" height="525" /></p>\r\n<p style="padding-left: 60px;">H&atilde;y tận hưởng th&agrave;nh quả lao động của bạn với số lượng kh&aacute;ch h&agrave;ng đ&ocirc;ng đảo!. Đừng qu&ecirc;n gọi ch&uacute;ng t&ocirc;i <span style="color: #008000;"><strong>09 232 99998 - 09 112 88886&nbsp;(Mr Tơn)</strong></span> một nh&acirc;n tố nhỏ b&eacute; nhưng sẽ g&oacute;p một phần nho nhỏ trong th&agrave;nh c&ocirc;ng của bạn. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với kế hoạch v&agrave; &yacute; tưởng kinh doanh của m&igrave;nh.</p>\r\n<p style="padding-left: 60px; text-align: center;">&nbsp;</p>', '', '2017-04-04 07:49:22', '2017-04-13 14:21:30'),
(4, 3, 1, 'sp-bien-quang-cao-bat-hiflex-1492006741.jpeg', 'SP-Biển quảng cáo bạt hiflex', 'sp-bien-quang-cao-bat-hiflex', 1, 0, 'DOANH NGHIỆP Truyền thông và Đầu tư Mũi Tên Vàng, tên giao dịch quangcao69 được thành lập bởi các chuyên viên thiết kế và sản xuất với thâm niên lâu năm trong việc thiết kế và thi công hoàn thiện biển hiệu trên các chất liệu. ', '<div>\r\n<p>DOANH NGHIỆP Truyền th&ocirc;ng v&agrave; Đầu tư Mũi T&ecirc;n V&agrave;ng, t&ecirc;n giao dịch quangcao69 được th&agrave;nh lập bởi c&aacute;c chuy&ecirc;n vi&ecirc;n thiết kế v&agrave; sản xuất với th&acirc;m ni&ecirc;n l&acirc;u năm trong việc thiết kế v&agrave; thi c&ocirc;ng ho&agrave;n thiện biển hiệu tr&ecirc;n c&aacute;c chất liệu. Ch&uacute;ng t&ocirc;i lu&ocirc;n mong muốn gia tăng thương hiệu của kh&aacute;ch h&agrave;ng th&ocirc;ng qua c&aacute;c hệ thống bảng hiệu, bởi thương hiệu l&agrave; t&agrave;i sản v&ocirc; h&igrave;nh nhưng đ&oacute;ng g&oacute;p một phần kh&ocirc;ng hề nhỏ trong việc ph&aacute;t triển thương hiệu v&agrave; tiếp cận kh&aacute;ch h&agrave;ng. Một số lĩnh vực thế mạnh của quangcao69</p>\r\n<p><img src="../../../public/img/2-1492006063.jpeg" alt="" width="700" height="525" /></p>\r\n</div>\r\n<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<ul>\r\n<li>Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)<img src="../../../public/img/1-1492006042.jpeg" alt="" width="700" height="933" /></li>\r\n</ul>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. &nbsp;cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 07:53:03', '2017-04-13 07:24:02'),
(5, 4, 1, 'chu-noi-mica-1492093097.jpeg', 'Chữ Nổi Mica', 'chu-noi-mica', 1, 0, 'DOANH NGHIỆP Truyền thông và Đầu tư Quảng cáo 69, tên giao dịch Quangcao69 được thành lập bởi các chuyên viên thiết kế và sản xuất với thâm niên lâu năm trong việc thiết kế và thi công hoàn thiện biển hiệu trên các chất liệu.', '<div>\r\n<p><img src="../../../public/img/mica-1492093384.png" alt="" width="700" height="407" /><img src="../../../public/img/mica-1492093397.jpeg" alt="" width="700" height="481" /></p>\r\n</div>\r\n<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. Quang cao 69 cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 07:54:17', '2017-04-13 14:24:10'),
(6, 7, 1, 'sp-bien-quang-cao-cong-ty-1491292821.jpeg', 'SP-Biển quảng cáo Công ty', 'sp-bien-quang-cao-cong-ty', 1, 0, ' Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng</p>\r\n</div>\r\n<div>&nbsp;</div>', '', '2017-04-04 08:00:21', '2017-04-04 09:50:37'),
(7, 8, 1, 'sp-bien-quang-cao-cua-hang-1491292884.png', 'SP-Biển quảng cáo cửa hàng', 'sp-bien-quang-cao-cua-hang', 1, 0, 'Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng. Một số lĩnh vực thế mạnh của GAGVIETNAM:', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng</p>\r\n</div>\r\n<div>&nbsp;</div>', '', '2017-04-04 08:01:24', '2017-04-04 08:01:40'),
(8, 10, 1, 'sp-treo-phuon-bang-ron-1492094451.jpeg', 'SP-Treo phướn (băng rôn)', 'sp-treo-phuon-bang-ron', 1, 0, 'Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. quảng c&aacute;o 69 cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 08:02:22', '2017-04-13 14:40:51'),
(9, 12, 1, 'lam-bien-quang-cao-tang-uu-the-canh-tranh-1491293501.png', 'Làm biển quảng cáo tăng ưu thế cạnh tranh', 'lam-bien-quang-cao-tang-uu-the-canh-tranh', 0, 0, 'Công ty làm biển quảng cáo giá rẻ tại Hà Nội, thi công và phát triển hệ thống biển quảng cáo của các nhãn hàng lớn tại Hà Nội.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 08:11:41', '2017-04-04 08:11:41'),
(10, 12, 1, 'lam-bien-quang-cao-dep-tac-dong-den-kinh-doanh-ra-sao-1491293556.png', 'Làm biển quảng cáo đẹp tác động đến kinh doanh ra sao', 'lam-bien-quang-cao-dep-tac-dong-den-kinh-doanh-ra-sao', 0, 0, 'Công ty làm biển quảng cáo giá rẻ tại Hà Nội, thi công và phát triển hệ thống biển quảng cáo của các nhãn hàng lớn tại Hà Nội.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 08:12:36', '2017-04-04 08:12:36'),
(11, 15, 1, 'gioi-thieu-1492064928.png', 'Giới thiệu', 'gioi-thieu', 0, 0, 'DOANH NGHIỆP Truyền thông và Đầu tư Quảng Cáo 69, tên giao dịch Quảng Cáo 69  được thành lập bởi các chuyên viên thiết kế và sản xuất với thâm niên lâu năm trong việc thiết kế và thi công hoàn thiện biển hiệu trên các chất liệu. Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng. Một số lĩnh vực thế mạnh của Quảng Cáo 69', '<div>\r\n<h4><strong>1. L&agrave;m biển quảng c&aacute;o:</strong></h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4><strong>2. Thiết kế</strong></h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4><strong>3. C&aacute;c hoạt động về in ấn</strong></h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. Quảng C&aacute;o 69&nbsp;cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n Trọng</p>\r\n</div>', '', '2017-04-05 09:16:19', '2017-04-13 06:28:48'),
(12, 15, 1, 'lien-he-1492064916.png', 'Liên hệ', 'lien-he', 0, 0, 'Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng. ', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-05 09:18:21', '2017-04-13 06:28:36'),
(14, 13, 1, 'bien-hoc-vien-tai-chinh-1492009348.jpeg', 'Biển Học Viện tài Chính số 8 Phan Huy Chú', 'bien-hoc-vien-tai-chinh-so-8-phan-huy-chu', 0, 0, 'Biển hộp đèn led mica sáng mặt', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src="../../../public/img/hvtc-3-1492009153.jpeg" alt="" width="700" height="700" /></p>\r\n<p><img src="../../../public/img/hvtc2-1492009069.jpeg" alt="" width="700" height="700" /></p>\r\n<p>Tư Vấn Quảng C&aacute;o Miễn Ph&iacute; :</p>\r\n<p>LH: 09 232 99998 - 09 112 88886</p>\r\n<p>Gmail: bienquangcao69@gmail.com</p>\r\n<p>&nbsp;</p>', '', '2017-04-12 15:02:28', '2017-04-12 15:08:11'),
(15, 13, 1, 'coffee-domino-95-vo-chi-cong-1492010086.jpeg', 'Coffee DOMINO : 95 Võ Chí Công', 'coffee-domino-95-vo-chi-cong', 0, 0, 'Biển alu chữ nổi co đèn Led sáng mặt', '<p><img src="../../../public/img/domino1-1492009849.jpeg" alt="" width="698" height="524" /><img src="../../../public/img/domino1-1492009874.jpeg" alt="" width="704" height="528" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="../../../public/img/httpquangcao69compublicimgdomino1-1492009825jpeg-1492009925.jpeg" alt="" width="697" height="523" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '', '2017-04-12 15:14:46', '2017-04-12 15:15:56'),
(16, 13, 1, 'xe-dien-aima-suzika-340-xa-dan-1492010597.jpeg', 'Xe điện aima Suzika 340 xã đàn', 'xe-dien-aima-suzika-340-xa-dan', 0, 0, 'Biển hộp đèn chữ nổi và Led Màn hình', '<p><img src="../../../public/img/aima-1492010335.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/aima-1492010350.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/aima-1492010367.jpeg" alt="" width="628" height="838" /><img src="../../../public/img/aima-1492010385.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-12 15:23:17', '2017-04-12 15:23:17'),
(17, 13, 1, 'cong-trinh-quang-ninh-khung-bat-1492010874.jpeg', 'Công trình Quảng Ninh Khung bạt ', 'cong-trinh-quang-ninh-khung-bat', 0, 0, 'Trang trí dịp tết cuối năm', '<p><img src="../../../public/img/cong-trinh-quang-ninh-1492010696.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/cong-trinh-quang-ninh-1492010710.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/cong-trinh-quang-ninh-1492010734.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/cong-trinh-quang-ninh-1492010744.jpeg" alt="" width="700" height="933" /></p>', '', '2017-04-12 15:27:54', '2017-04-12 15:27:54'),
(18, 13, 1, 'xe-dien-suzika-thach-that-1492011493.jpeg', 'Xe Điện Suzika Thạch Thất', 'xe-dien-suzika-thach-that', 0, 0, 'Ngã 3 hòa lạc Thạch Thất', '<p><img src="../../../public/img/suzika-tt-1492011391.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/suzika-tt-1492011367.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/suzika-tt-1492011340.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-12 15:38:13', '2017-04-12 15:38:13'),
(19, 13, 1, 'xe-dien-nhat-linh-81-ton-duc-thang-1492011821.jpeg', 'Xe Điện Nhật Linh 81 Tôn Đức thắng', 'xe-dien-nhat-linh-81-ton-duc-thang', 0, 0, 'Chữ Mica Nổi Led sáng mặt', '<p><img src="../../../public/img/xe-dien-nhat-linh-81-ton-duc-thang-1492011720.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/xe-dien-nhat-linh-81-ton-duc-thang-1492011708.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/xe-dien-nhat-linh-81-ton-duc-thang-1492011686.jpeg" alt="" width="700" height="935" /><img src="../../../public/img/xe-dien-nhat-linh-1492011678.jpeg" alt="" width="700" height="935" /></p>', '', '2017-04-12 15:43:41', '2017-04-12 15:43:41'),
(20, 13, 1, 'boutique-930-duong-lang-1492012012.jpeg', 'boutique 930 Đường láng', 'boutique-930-duong-lang', 0, 0, 'Chữ Mica uồn Chân - Nắp bóng đèn 6w', '<p><img src="../../../public/img/boutique-1492011885.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/boutique-1492011872.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-12 15:46:52', '2017-04-12 15:46:52'),
(21, 13, 1, 'suzika-163-nguyen-thai-hoc-tt-phung-1492012292.jpeg', 'Suzika 163 Nguyễn Thái Học TT Phùng', 'suzika-163-nguyen-thai-hoc-tt-phung', 0, 0, 'Chữ Mica uốn chân Led Cắm mặt', '<p><img src="../../../public/img/suzika-phung-1492012101.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/suzika-phung-1492012132.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/suzika-phung-1492012118.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/suzika-phung-1492012153.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-12 15:51:32', '2017-04-12 15:51:32'),
(22, 13, 1, 'shop-giay-cr7-co-so-2-thi-tran-son-tay-1492012563.jpeg', 'Shop giầy Cr7 Cở sở 2 Thị trấn Sơn Tây', 'shop-giay-cr7-co-so-2-thi-tran-son-tay', 0, 0, 'Khung Thanh nhôm 2 x 4 mạ màu đen - chữ Alu Gương', '<p><img src="../../../public/img/cr7-2-1492012385.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/cr7-2-1492012369.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/cr7-2-1492012430.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/cr7-2-1492012414.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-12 15:56:03', '2017-04-15 03:29:59'),
(23, 14, 1, 'tuyen-nhan-su-1492090782.jpeg', 'Tuyển Nhân Sự', 'tuyen-nhan-su', 0, 0, 'Tuyển 5 Thợ làm quảng cáo', '<p>Ốp nh&ocirc;m Aluminium c&aacute;c hạng mục, Pano, hộp đ&egrave;n, ph&ograve;ng ban...<br />- Biển led điện tử, led ma trận, led m&agrave;n h&igrave;nh, trang tr&iacute; đ&egrave;n led đường phố...<br />- Biển đồng &amp; inox, nh&atilde;n m&aacute;c ăn m&ograve;n kim loại, biển chức danh để b&agrave;n...<br />- C&oacute; khả năng l&agrave;m việc độc lập v&agrave; l&agrave;m việc theo nh&oacute;m ...<br />- Trung thực, kh&ocirc;ng nghiện ngập ma t&uacute;y, cờ bạc<br />- C&oacute; nhận học vi&ecirc;n &amp; nh&acirc;n vi&ecirc;n chưa biết việc được đ&agrave;o tạo</p>\r\n<p><br />Quyền lợi được hưởng<br />- Bao ở đối với anh em ở xa<br />- Được khen thưởng khi ho&agrave;n th&agrave;nh tốt c&ocirc;ng việc.<br />- Nh&acirc;n vi&ecirc;n xuất sắc sẽ nhanh ch&oacute;ng được tăng lương, thăng chức vụ để thể hiện khả năng.<br />Y&ecirc;u cầu c&ocirc;ng việc: Kh&ocirc;ng cần kinh nghiệm ( c&oacute; kinh nghiệm l&agrave; một lợi thế )<br />Y&ecirc;u cầu hồ sơ<br />- Đơn xin việc.<br />- Sơ yếu l&yacute; lịch.</p>\r\n<p><br />Th&ocirc;ng tin li&ecirc;n hệ<br />Người li&ecirc;n hệ: Mr Tơn <br />Địa chỉ c&ocirc;ng ty: Số 336 Đường Bưởi, Tp H&agrave; Nội<br />Ng&ocirc;n ngữ: Tiếng Việt<br />Email: bienquangcao69@gmail.com<br />Điện thoại di động: <span style="color: #008000;"><strong>09 232 99998 - 09 112 88886</strong></span></p>', '', '2017-04-12 16:02:35', '2017-04-13 13:39:42'),
(31, 7, 1, 'xe-dien-suzika-thach-that-1492092312.jpeg', 'Xe điện Suzika Thạch Thất', 'xe-dien-suzika-thach-that', 1, 0, 'Biên alu, chữ Mica đài loan uốn chân Focmech 5 cm', '<p><img src="../../../public/img/suzika-thach-that-1492059809.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/suzika-thach-that-1492059831.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-13 05:08:42', '2017-04-13 14:05:12'),
(32, 10, 1, 'backdrop-1492066496.jpeg', 'Backdrop ', 'backdrop', 1, 0, 'Căng backdrop xe điện suzika thach thất', '<p><img src="../../../public/img/1-1492006042.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/2-1492006063.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-13 06:54:56', '2017-04-13 06:54:56'),
(33, 11, 1, 'trung-cu-quang-ninh-1492067717.jpeg', 'Trung cư Quảng Ninh', 'trung-cu-quang-ninh', 1, 0, 'Căng bạt Số Lượng lớn tại Quảng ninh', '<p><img src="../../../public/img/cong-trinh-quang-ninh-1492010744.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/cong-trinh-quang-ninh-1492010696.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/cong-trinh-quang-ninh-1492010710.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-13 07:15:17', '2017-04-13 07:15:17'),
(34, 5, 1, 'chu-inox-1492068558.jpeg', 'Chữ Inox', 'chu-inox', 1, 0, 'Chữ inox uốn chân vàng mặt Mica led sáng mặt', '<p><img src="../../../public/img/inoxx-1492013379.jpeg" alt="" width="550" height="450" /><img src="../../../public/img/inoxx-1492013390.jpeg" alt="" width="550" height="373" /></p>', '', '2017-04-13 07:29:18', '2017-04-13 07:29:18'),
(35, 6, 1, 'led-full-1492092600.jpeg', 'led full', 'led-full', 1, 0, 'Led cắm mặt bao gồm Led full..Led 7 màu..đơn sắc', '<p>Led Full m&agrave;u&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src="../../../public/img/led-1492068790.jpeg" alt="" width="700" height="373" /></p>\r\n<p>Led Đơn sắc v&agrave; 7 m&agrave;u&nbsp;</p>\r\n<p><img src="../../../public/img/led-1492068760.jpeg" alt="" width="700" height="655" /><img src="../../../public/img/led-1492068778.jpeg" alt="" width="700" height="756" /></p>', '', '2017-04-13 07:36:12', '2017-04-13 14:10:00'),
(36, 9, 1, 'mat-alu-chu-mica-uon-chan-focmech-5-cm-1492094263.jpeg', 'Mặt Alu Chữ Mica uốn chân Focmech 5 cm', 'mat-alu-chu-mica-uon-chan-focmech-5-cm', 1, 0, '2001 ĐL Hùng Vương - Phú Thọ -Mặt Alu Chữ Mica uốn chân Focmech 5 cm', '<p><img src="../../../public/img/phu-tho-1492092181.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/phu-tho-1492092158.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/phu-tho-1492092158.jpeg" alt="" width="700" height="933" /></p>', '', '2017-04-13 14:04:20', '2017-04-13 14:37:43'),
(37, 13, 1, 'suzika-pho-hue-1492093862.jpeg', 'Suzika Phố huế', 'suzika-pho-hue', 0, 0, 'Xe Điện suzika Phố Huế', '<p><img src="../../../public/img/pho-hue-1492093791.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/pho-hue-1492093829.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-13 14:31:02', '2017-04-15 03:26:07'),
(38, 13, 1, 'cafe-dcodes-57-ngo-thai-ha-1492094012.jpeg', 'Cafe Dcodes 57 Ngõ Thái Hà', 'cafe-dcodes-57-ngo-thai-ha', 0, 0, 'Chữ Mica viền trắng sáng mặt', '<p><img src="../../../public/img/thai-ha-1492093924.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/thai-ha-1492093909.jpeg" alt="" width="700" height="525" /></p>', '', '2017-04-13 14:33:32', '2017-04-15 03:25:57'),
(39, 13, 1, 'xe-dien-suzika-phu-tho-1492094568.jpeg', 'Xe Điện suzika Phú thọ', 'xe-dien-suzika-phu-tho', 1, 0, 'Nền Alu Chữ Mica Uôn chân và bồi foc mech', '<p><img src="../../../public/img/phu-thoe-1492092204.jpeg" alt="" width="700" height="525" /><img src="../../../public/img/phu-tho-1492092158.jpeg" alt="" width="700" height="933" /><img src="../../../public/img/phu-tho-1492092181.jpeg" alt="" width="700" height="933" /></p>', '', '2017-04-13 14:36:32', '2017-04-13 14:42:48'),
(40, 16, 1, 'logo-bien-dong-inox-mica-1492095180.jpeg', 'Logo Biển Đồng - Inox - Mica', 'logo-bien-dong-inox-mica', 1, 0, 'Chất Liệu Đồng ăn mòn - inox vang gương - mica dán decan', '<p><img src="../../../public/img/inox-1492094987.jpeg" alt="" width="500" height="667" /><img src="../../../public/img/dong-1492094975.jpeg" alt="" width="500" height="338" /><img src="../../../public/img/dong-1492095122.jpeg" alt="" width="500" height="369" /><img src="../../../public/img/mica-1492095025.jpeg" alt="" width="500" height="415" /></p>', '', '2017-04-13 14:53:00', '2017-04-15 10:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `post_sp`
--

CREATE TABLE `post_sp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_price` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_sp`
--

INSERT INTO `post_sp` (`id`, `post_id`, `post_price`, `created_at`, `updated_at`) VALUES
(1, 3, 0, '2017-04-04 07:49:22', '2017-04-15 06:11:06'),
(2, 4, 0, '2017-04-04 07:53:03', '2017-04-13 09:55:54'),
(3, 5, 0, '2017-04-04 07:54:17', '2017-04-13 09:53:52'),
(4, 6, 0, '2017-04-04 08:00:21', '2017-04-13 09:55:40'),
(5, 7, 0, '2017-04-04 08:01:24', '2017-04-13 09:55:22'),
(6, 8, 0, '2017-04-04 08:02:22', '2017-04-13 09:55:11'),
(7, 30, 31, '2017-04-13 05:00:17', '2017-04-13 05:00:17'),
(8, 31, 0, '2017-04-13 05:08:42', '2017-04-13 09:54:54'),
(9, 32, 0, '2017-04-13 06:54:56', '2017-04-13 09:54:42'),
(10, 33, 0, '2017-04-13 07:15:17', '2017-04-13 11:50:43'),
(11, 34, 0, '2017-04-13 07:29:18', '2017-04-13 11:50:12'),
(12, 35, 0, '2017-04-13 07:36:12', '2017-04-13 07:36:12'),
(13, 36, 0, '2017-04-13 14:04:20', '2017-04-13 14:04:20'),
(14, 39, 0, '2017-04-13 14:36:32', '2017-04-13 14:36:32'),
(15, 40, 0, '2017-04-13 14:53:00', '2017-04-13 14:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `web_icon` varchar(255) DEFAULT NULL,
  `web_logo` varchar(255) DEFAULT NULL,
  `web_name` varchar(255) DEFAULT NULL,
  `web_description` text,
  `web_keyword` text,
  `web_visitday` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `user_id`, `web_icon`, `web_logo`, `web_name`, `web_description`, `web_keyword`, `web_visitday`, `created_at`, `updated_at`) VALUES
(1, 1, '1492067621.jpeg', '1491272469.png', 'QUANG CAO 69 - DOANH NGHIEP TRUYỀN THÔNG VÀ ĐẦU TƯ', 'QUANG CAO 69 - DOANH NGHIEP TRUYỀN THÔNG VÀ ĐẦU TƯ', 'QUANG CAO 69 - DOANH NGHIEP TRUYỀN THÔNG VÀ ĐẦU TƯ', 297, '2017-04-13 07:13:41', '2017-04-13 07:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_url` varchar(255) DEFAULT NULL,
  `slide_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `slide_url`, `slide_image`, `created_at`, `updated_at`) VALUES
(2, '1', 'http://quangcao69.com/public/img/1-1492139573.jpeg', '2017-04-14 03:13:24', '2017-04-14 03:13:24'),
(3, '2', 'http://quangcao69.com/public/img/sli3-1492141185.jpeg', '2017-04-14 03:40:07', '2017-04-14 03:40:07'),
(4, '3', 'http://quangcao69.com/public/img/1-1492141143.jpeg', '2017-04-14 03:40:27', '2017-04-14 03:40:27'),
(5, '14', 'http://quangcao69.com/public/img/sli-2-1492141165.jpeg', '2017-04-14 03:40:57', '2017-04-14 03:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `term_avatar` varchar(255) DEFAULT NULL,
  `term_name` varchar(255) NOT NULL,
  `term_alias` varchar(255) NOT NULL,
  `term_order` int(11) NOT NULL,
  `term_description` text,
  `term_keyword` text,
  `term_meta` text,
  `term_comment` longtext,
  `term_view` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `user_id`, `term_id`, `term_avatar`, `term_name`, `term_alias`, `term_order`, `term_description`, `term_keyword`, `term_meta`, `term_comment`, `term_view`, `created_at`, `updated_at`) VALUES
(1, 1, 0, NULL, 'Sản phẩm', 'san-pham', 0, '', '', '', NULL, NULL, '2017-04-04 02:22:09', '2017-04-04 02:22:09'),
(2, 1, 1, NULL, 'Biển quảng cáo hộp đèn', 'bien-quang-cao-hop-den', 0, '', '', '', NULL, NULL, '2017-04-04 02:22:34', '2017-04-04 02:22:34'),
(3, 1, 1, NULL, 'Biển bạt hiflex', 'bien-bat-hiflex', 0, '', '', '', NULL, NULL, '2017-04-04 02:22:46', '2017-04-13 09:50:35'),
(4, 1, 1, NULL, ' Chữ nổi Mica', 'chu-noi-mica', 0, '', '', '', NULL, NULL, '2017-04-04 02:25:31', '2017-04-13 09:49:49'),
(5, 1, 1, NULL, 'Chữ Inox - Đồng', 'chu-inox-dong', 0, '', '', '', NULL, NULL, '2017-04-04 02:25:54', '2017-04-13 09:50:56'),
(6, 1, 1, NULL, 'Biển led', 'bien-led', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:11', '2017-04-04 03:11:04'),
(7, 1, 1, NULL, 'Biển Công ty', 'bien-cong-ty', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:20', '2017-04-13 09:50:07'),
(8, 1, 1, NULL, 'Biển cửa hàng', 'bien-cua-hang', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:28', '2017-04-13 09:50:19'),
(9, 1, 1, NULL, 'Biển alu gắn chữ nổi', 'bien-alu-gan-chu-noi', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:36', '2017-04-04 02:26:36'),
(10, 1, 1, NULL, 'Treo phướn (băng rôn)', 'treo-phuon-bang-ron', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:43', '2017-04-04 02:26:43'),
(11, 1, 1, NULL, 'Gian hàng hội chợ, triển lãm', 'gian-hang-hoi-cho-trien-lam', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:50', '2017-04-04 02:26:50'),
(12, 1, 0, NULL, 'Tin tức - Sự kiện', 'tin-tuc-su-kien', 0, '', '', '', NULL, NULL, '2017-04-04 02:27:05', '2017-04-04 03:54:25'),
(13, 1, 0, NULL, 'Công trình mới', 'cong-trinh-moi', 0, '', '', '', NULL, NULL, '2017-04-04 02:27:11', '2017-04-04 02:27:11'),
(14, 1, 12, NULL, 'Tuyển dụng', 'tuyen-dung', 0, 'Tuyển NV làm quảng cáo', '', 'Ốp nhôm Aluminium các hạng mục, Pano, hộp đèn, phòng ban...\r\n- Biển led điện tử, led ma trận, led màn hình, trang trí đèn led đường phố...\r\n- Biển đồng & inox, nhãn mác ăn mòn kim loại, biển chức danh để bàn...\r\n- Có khả năng làm việc độc lập và làm việc theo nhóm ...\r\n- Trung thực, không nghiện ngập ma túy, cờ bạc\r\n- Có nhận học viên & nhân viên chưa biết việc được đào tạo\r\nQuyền lợi được hưởng\r\n- Bao ở đối với anh em ở xa\r\n- Được khen thưởng khi hoàn thành tốt công việc.\r\n- Phụ cấp ăn trưa, xăng xe, điện thoại,...\r\n- Được hưởng BHXH, BH y tế theo luật định.\r\n- Nhân viên xuất sắc sẽ nhanh chóng được tăng lương, thăng chức vụ để thể hiện khả năng.\r\nYêu cầu công việc Có kinh nghiệm từ 2 đến 3 năm là 1 lợi thế, ưu tiên đã làm tại các công ty: ( In phun khổ lớn, quảng cáo, nội thất, nhôm kính, tổ chức sự kiện, ..\r\nYêu cầu hồ sơ\r\n- Đơn xin việc.\r\n- Sơ yếu lý lịch.\r\n- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n- Các bằng cấp có liên quan.\r\nThông tin liên hệ\r\nNgười liên hệ:	Mr Tơn \r\nĐịa chỉ công ty:	Số 336 Đường Bưởi, Tp Hà Nội\r\nỨng tuyển:	Vui lòng bấm "NỘP ĐƠN" ở bên trên để ứng tuyển công việc này\r\nNgôn ngữ:	Tiếng Việt\r\nEmail:	bienquangcao69@gmail.com\r\nĐiện thoại di động:	09 232 99998 - 09 112 88886', NULL, NULL, '2017-04-04 02:27:20', '2017-04-12 16:00:53'),
(15, 1, 0, NULL, 'Về công ty', 've-cong-ty', 0, '', '', '', NULL, NULL, '2017-04-05 09:15:17', '2017-04-05 09:15:17'),
(16, 1, 1, NULL, 'Logo Đồng - Inox - Mica', 'logo-dong-inox-mica', 0, '', '', '', NULL, NULL, '2017-04-13 14:44:56', '2017-04-13 14:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) NOT NULL,
  `user_block` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_avatar`, `user_name`, `user_email`, `user_group`, `user_block`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$NV5054lwMMmQIvHhQD/b..AvZw5EuquQVYLZxVIekVxvtRw7L4PBy', 'pham-van-truong-1487748942.jpeg', 'Lưu Cao Tơn', 'bienquangcao69@gmail.com', 'admin', 0, '2017-04-12 14:04:40', '2017-04-12 14:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `term_id` bigint(20) DEFAULT NULL,
  `visit_sum` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `post_id`, `term_id`, `visit_sum`, `created_at`, `updated_at`) VALUES
(1, NULL, 12, 43, '2017-04-05 08:30:57', '2017-04-14 12:00:58'),
(2, NULL, 6, 28, '2017-04-07 09:13:13', '2017-04-15 05:16:11'),
(3, 1, NULL, 14, '2017-04-07 01:58:10', '2017-04-14 12:01:20'),
(4, NULL, 1, 208, '2017-04-12 04:40:21', '2017-04-15 06:11:51'),
(5, NULL, 2, 114, '2017-04-12 04:51:24', '2017-04-15 06:12:22'),
(6, NULL, 7, 31, '2017-04-12 04:52:34', '2017-04-14 21:14:34'),
(7, NULL, 9, 19, '2017-04-04 08:27:27', '2017-04-15 06:06:12'),
(8, NULL, 13, 98, '2017-04-08 02:36:35', '2017-04-15 06:20:17'),
(9, NULL, 14, 75, '2017-04-07 09:20:10', '2017-04-14 19:37:39'),
(10, NULL, 11, 26, '2017-04-12 04:52:51', '2017-04-14 19:28:23'),
(11, 3, NULL, 41, '2017-04-08 02:36:53', '2017-04-14 19:33:52'),
(12, NULL, 3, 97, '2017-04-12 04:51:32', '2017-04-15 09:14:37'),
(13, NULL, 4, 28, '2017-04-07 07:15:29', '2017-04-15 06:11:55'),
(14, 8, NULL, 19, '2017-04-05 09:28:19', '2017-04-14 19:28:08'),
(15, NULL, 8, 15, '2017-04-05 08:59:45', '2017-04-15 07:59:17'),
(16, 7, NULL, 32, '2017-04-08 02:34:55', '2017-04-15 03:14:22'),
(17, NULL, 5, 33, '2017-04-04 08:27:24', '2017-04-14 19:26:29'),
(18, 4, NULL, 29, '2017-04-07 09:08:11', '2017-04-15 06:12:50'),
(19, 9, NULL, 6, '2017-04-07 06:57:19', '2017-04-14 12:01:19'),
(20, 10, NULL, 27, '2017-04-12 04:39:12', '2017-04-14 12:01:08'),
(21, 5, NULL, 26, '2017-04-07 09:10:16', '2017-04-14 19:27:19'),
(22, 6, NULL, 15, '2017-04-07 09:05:54', '2017-04-14 19:28:37'),
(23, 12, NULL, 93, '2017-04-08 02:34:40', '2017-04-15 03:14:49'),
(24, 11, NULL, 57, '2017-04-12 04:40:21', '2017-04-15 05:03:19'),
(25, NULL, 15, 1, '2017-04-12 10:06:20', '2017-04-12 10:06:20'),
(26, 13, NULL, 5, '2017-04-12 14:19:58', '2017-04-13 07:21:16'),
(27, NULL, 10, 13, '2017-04-12 14:52:10', '2017-04-14 19:27:47'),
(28, 14, NULL, 18, '2017-04-12 15:02:48', '2017-04-14 19:34:29'),
(29, 15, NULL, 7, '2017-04-12 15:14:55', '2017-04-14 19:33:58'),
(30, 16, NULL, 7, '2017-04-12 15:23:24', '2017-04-14 19:34:05'),
(31, 17, NULL, 5, '2017-04-12 15:28:16', '2017-04-14 19:34:09'),
(32, 20, NULL, 7, '2017-04-12 15:47:12', '2017-04-14 19:28:30'),
(33, 23, NULL, 57, '2017-04-12 16:02:46', '2017-04-15 06:24:16'),
(34, 22, NULL, 20, '2017-04-13 02:52:26', '2017-04-14 19:29:21'),
(35, 18, NULL, 6, '2017-04-13 02:57:00', '2017-04-14 19:33:54'),
(36, 19, NULL, 6, '2017-04-13 02:57:13', '2017-04-14 19:34:23'),
(37, 31, NULL, 10, '2017-04-13 05:09:50', '2017-04-15 08:51:49'),
(38, 32, NULL, 7, '2017-04-13 06:56:19', '2017-04-14 16:15:00'),
(39, 33, NULL, 6, '2017-04-13 07:23:56', '2017-04-14 19:28:01'),
(40, 34, NULL, 11, '2017-04-13 07:29:45', '2017-04-15 06:27:51'),
(41, 21, NULL, 5, '2017-04-13 09:24:27', '2017-04-15 05:44:42'),
(42, 35, NULL, 9, '2017-04-13 09:27:36', '2017-04-15 05:16:14'),
(43, 36, NULL, 14, '2017-04-13 14:37:13', '2017-04-15 06:24:28'),
(44, NULL, 16, 8, '2017-04-13 14:45:04', '2017-04-14 19:27:33'),
(45, 40, NULL, 7, '2017-04-13 14:53:20', '2017-04-14 19:28:44'),
(46, 37, NULL, 4, '2017-04-13 23:43:07', '2017-04-14 19:24:57'),
(47, 39, NULL, 10, '2017-04-13 23:43:25', '2017-04-15 06:21:37'),
(48, 38, NULL, 7, '2017-04-13 23:44:03', '2017-04-14 19:29:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_sp`
--
ALTER TABLE `post_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `post_sp`
--
ALTER TABLE `post_sp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
