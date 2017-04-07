-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 10:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vt_bienquangcao69com`
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
(7, 1, 12, 0, NULL, 'Hãy liên hệ ngay với chúng tôi để được tư vấn và phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức giá cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng cáo sản phẩm và dịch vụ của khách hàng.', '2017-04-07 05:07:47', '2017-04-07 05:07:47'),
(8, 0, 11, 1, NULL, 'Rất mong nhận được sự quan tâm và hợp tác của quý vị!', '2017-04-07 06:48:54', '2017-04-07 07:04:33'),
(9, 0, 11, 1, 0, 'Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng cáo truyền thông, Các ấn phẩm phục vụ sự kiện, Quảng cáo truyền thông: Banner, Poster, standee…...)', '2017-04-07 06:49:05', '2017-04-07 07:10:43'),
(10, 0, 7, 0, 1, 'Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng cáo truyền thông, Các ấn phẩm phục vụ sự kiện, Quảng cáo truyền thông: Banner, Poster, standee…...)', '2017-04-07 07:12:51', '2017-04-07 07:12:51');

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
(1, 12, 1, 'bien-quang-cao-cua-hang-1491292969.png', 'Biển quảng cáo 69.com', 'bien-quang-cao-69com', 0, 0, 'Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với diện tích và phong cách của loại hình sản phẩm bạn sẽ kinh doanh. Bạn cần tìm công ty thiết kế quảng cáo & nội thất và nói cho họ biết ý tưởng và phong cách, việc còn lại là của họ, với chuyên môn kỹ thuật họ sẽ nhanh chóng đưa cho bạn mẫu thiết kế phù hợp.', '<p>C&aacute;c bước chuẩn bị để mở cửa h&agrave;ng với GAGVIETNAM:</p>\r\n<p style="padding-left: 30px;"><strong>1.L&ecirc;n &yacute; tưởng v&agrave; lựa chọn phong c&aacute;ch cho cửa h&agrave;ng </strong></p>\r\n<p style="padding-left: 60px;">Việc c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch của cửa h&agrave;ng l&agrave; rất quan trọng, bởi v&igrave; n&oacute; sẽ quyết định nguồn kh&aacute;ch h&agrave;ng m&agrave; bạn hướng tới. Do vậy, c&aacute;c bạn n&ecirc;n h&igrave;nh th&agrave;nh cho m&igrave;nh &yacute; tưởng v&agrave; phong c&aacute;ch ri&ecirc;ng của cửa h&agrave;ng hoặc từ đối tượng kh&aacute;ch h&agrave;ng hướng tới th&igrave; đưa ra được &yacute; tưởng. Sau khi đ&atilde; c&oacute; &yacute; tưởng mở cửa h&agrave;ng theo phong c&aacute;ch n&agrave;o bạn n&ecirc;n ch&uacute; &yacute; đến nguồn vốn hiện tại bạn c&oacute; hay mặt bằng đặt cửa h&agrave;ng bạn c&oacute; thể thu&ecirc;... rồi quyết định &yacute; tưởng v&agrave; phong c&aacute;ch của n&oacute;.</p>\r\n<p style="padding-left: 30px;"><strong>2.Thu&ecirc; mặt bằng </strong></p>\r\n<p style="padding-left: 60px;">Mặt bằng lu&ocirc;n l&agrave; yếu tố ti&ecirc;n quyết cho việc th&agrave;nh c&ocirc;ng của cửa h&agrave;ng. Khi c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch rồi, c&aacute;c bạn n&ecirc;n ch&uacute; &yacute; t&igrave;m địa điểm đặt biển quảng c&aacute;o cho cửa h&agrave;ng sao cho ph&ugrave; hợp. Nếu bạn c&oacute; nh&agrave; để mở cửa h&agrave;ng th&igrave; y&ecirc;n t&acirc;m v&igrave; bạn đ&atilde; chắc thắng tới 60%, nhưng nếu bạn phải đi thu&ecirc; th&igrave; cần ch&uacute; &yacute; l&agrave; thời gian thu&ecirc; phải d&agrave;i để c&oacute; thời gian thu h&uacute;t kh&aacute;ch v&agrave; kiếm đủ tiền để ho&agrave;n vốn đầu tư.</p>\r\n<p style="padding-left: 30px;"><strong>3.Thiết kế nội thất &amp; biển quảng c&aacute;o.</strong></p>\r\n<p style="padding-left: 60px;">Bạn cũng n&ecirc;n d&agrave;nh nhiều thời gian để đưa ra c&aacute;ch thiết kế nội thất cửa h&agrave;ng sao cho ph&ugrave; hợp với diện t&iacute;ch v&agrave; phong c&aacute;ch của loại h&igrave;nh sản phẩm bạn sẽ kinh doanh. Bạn cần t&igrave;m c&ocirc;ng ty thiết kế quảng c&aacute;o &amp; nội thất v&agrave; n&oacute;i cho họ biết &yacute; tưởng v&agrave; phong c&aacute;ch, việc c&ograve;n lại l&agrave; của họ, với chuy&ecirc;n m&ocirc;n kỹ thuật họ sẽ nhanh ch&oacute;ng đưa cho bạn mẫu thiết kế ph&ugrave; hợp. Với c&aacute;c loại h&igrave;nh l&agrave;m biển quảng c&aacute;o cửa h&agrave;ng tương ứng với nội thất v&agrave; c&aacute;ch b&agrave;i tr&iacute; của cửa h&agrave;ng ph&ugrave; hợp với &yacute; tưởng kinh doanh của bạn. Ở GAGVIETNAM ch&uacute;ng t&ocirc;i sẵn c&oacute; c&aacute;c loại h&igrave;nh biển quảng c&aacute;o ấn tượng v&agrave; chuy&ecirc;n biệt để g&oacute;p một phần nhỏ b&eacute; cho một kế hoạch h&igrave;nh th&agrave;nh thương hiệu của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>4.Trang tr&iacute;</strong></p>\r\n<p style="padding-left: 60px;">Để l&agrave;m nổi bật phong c&aacute;ch cũng như nội thất của bạn, tạo một kh&ocirc;ng gian đẹp ph&ugrave; hợp với &yacute; tưởng ban đầu, bạn n&ecirc;n ch&uacute; &yacute; trang tr&iacute; cửa h&agrave;ng sao cho ph&ugrave; hợp. Bạn c&oacute; thể d&ugrave;ng c&aacute;c bức tranh vẽ, giấy d&aacute;n tường, vẽ tranh tường hay d&ugrave;ng những t&aacute;c phẩm nghệ thuật để trang tr&iacute;. Vẽ tranh tường đang l&agrave; một xu hướng mới cho c&aacute;c cửa h&agrave;ng hiện nay. Bạn c&oacute; thể lựa chọn cho m&igrave;nh những market tranh tường kh&aacute;c nhau sao cho ph&ugrave; hợp với &yacute; th&iacute;ch v&agrave; phong c&aacute;ch của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>5.V&agrave; cuối c&ugrave;ng</strong>:</p>\r\n<p style="padding-left: 60px;">H&atilde;y tận hưởng th&agrave;nh quả lao động của bạn với số lượng kh&aacute;ch h&agrave;ng đ&ocirc;ng đảo!. Đừng qu&ecirc;n gọi ch&uacute;ng t&ocirc;i 091787 5995 (Mr Dũng) một nh&acirc;n tố nhỏ b&eacute; nhưng sẽ g&oacute;p một phần nho nhỏ trong th&agrave;nh c&ocirc;ng của bạn. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với kế hoạch v&agrave; &yacute; tưởng kinh doanh của m&igrave;nh.</p>\r\n<p style="padding-left: 60px; text-align: center;">&nbsp;</p>', '', '2017-04-04 03:17:26', '2017-04-04 08:03:26'),
(3, 2, 1, 'san-pham-bien-quang-cao-hop-den-1491292162.jpeg', 'SP-Biển quảng cáo hộp đèn', 'sp-bien-quang-cao-hop-den', 1, 0, 'Bạn cũng nên dành nhiều thời gian để đưa ra cách thiết kế nội thất cửa hàng sao cho phù hợp với diện tích và phong cách của loại hình sản phẩm bạn sẽ kinh doanh. Bạn cần tìm công ty thiết kế quảng cáo & nội thất và nói cho họ biết ý tưởng và phong cách, việc còn lại là của họ, với chuyên môn kỹ thuật họ sẽ nhanh chóng đưa cho bạn mẫu thiết kế phù hợp.', '<p>C&aacute;c bước chuẩn bị để mở cửa h&agrave;ng với GAGVIETNAM:</p>\r\n<p style="padding-left: 30px;"><strong>1.L&ecirc;n &yacute; tưởng v&agrave; lựa chọn phong c&aacute;ch cho cửa h&agrave;ng </strong></p>\r\n<p style="padding-left: 60px;">Việc c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch của cửa h&agrave;ng l&agrave; rất quan trọng, bởi v&igrave; n&oacute; sẽ quyết định nguồn kh&aacute;ch h&agrave;ng m&agrave; bạn hướng tới. Do vậy, c&aacute;c bạn n&ecirc;n h&igrave;nh th&agrave;nh cho m&igrave;nh &yacute; tưởng v&agrave; phong c&aacute;ch ri&ecirc;ng của cửa h&agrave;ng hoặc từ đối tượng kh&aacute;ch h&agrave;ng hướng tới th&igrave; đưa ra được &yacute; tưởng. Sau khi đ&atilde; c&oacute; &yacute; tưởng mở cửa h&agrave;ng theo phong c&aacute;ch n&agrave;o bạn n&ecirc;n ch&uacute; &yacute; đến nguồn vốn hiện tại bạn c&oacute; hay mặt bằng đặt cửa h&agrave;ng bạn c&oacute; thể thu&ecirc;... rồi quyết định &yacute; tưởng v&agrave; phong c&aacute;ch của n&oacute;.</p>\r\n<p style="padding-left: 30px;"><strong>2.Thu&ecirc; mặt bằng </strong></p>\r\n<p style="padding-left: 60px;">Mặt bằng lu&ocirc;n l&agrave; yếu tố ti&ecirc;n quyết cho việc th&agrave;nh c&ocirc;ng của cửa h&agrave;ng. Khi c&oacute; &yacute; tưởng v&agrave; phong c&aacute;ch rồi, c&aacute;c bạn n&ecirc;n ch&uacute; &yacute; t&igrave;m địa điểm đặt biển quảng c&aacute;o cho cửa h&agrave;ng sao cho ph&ugrave; hợp. Nếu bạn c&oacute; nh&agrave; để mở cửa h&agrave;ng th&igrave; y&ecirc;n t&acirc;m v&igrave; bạn đ&atilde; chắc thắng tới 60%, nhưng nếu bạn phải đi thu&ecirc; th&igrave; cần ch&uacute; &yacute; l&agrave; thời gian thu&ecirc; phải d&agrave;i để c&oacute; thời gian thu h&uacute;t kh&aacute;ch v&agrave; kiếm đủ tiền để ho&agrave;n vốn đầu tư.</p>\r\n<p style="padding-left: 30px;"><strong>3.Thiết kế nội thất &amp; biển quảng c&aacute;o.</strong></p>\r\n<p style="padding-left: 60px;">Bạn cũng n&ecirc;n d&agrave;nh nhiều thời gian để đưa ra c&aacute;ch thiết kế nội thất cửa h&agrave;ng sao cho ph&ugrave; hợp với diện t&iacute;ch v&agrave; phong c&aacute;ch của loại h&igrave;nh sản phẩm bạn sẽ kinh doanh. Bạn cần t&igrave;m c&ocirc;ng ty thiết kế quảng c&aacute;o &amp; nội thất v&agrave; n&oacute;i cho họ biết &yacute; tưởng v&agrave; phong c&aacute;ch, việc c&ograve;n lại l&agrave; của họ, với chuy&ecirc;n m&ocirc;n kỹ thuật họ sẽ nhanh ch&oacute;ng đưa cho bạn mẫu thiết kế ph&ugrave; hợp. Với c&aacute;c loại h&igrave;nh l&agrave;m biển quảng c&aacute;o cửa h&agrave;ng tương ứng với nội thất v&agrave; c&aacute;ch b&agrave;i tr&iacute; của cửa h&agrave;ng ph&ugrave; hợp với &yacute; tưởng kinh doanh của bạn. Ở GAGVIETNAM ch&uacute;ng t&ocirc;i sẵn c&oacute; c&aacute;c loại h&igrave;nh biển quảng c&aacute;o ấn tượng v&agrave; chuy&ecirc;n biệt để g&oacute;p một phần nhỏ b&eacute; cho một kế hoạch h&igrave;nh th&agrave;nh thương hiệu của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>4.Trang tr&iacute;</strong></p>\r\n<p style="padding-left: 60px;">Để l&agrave;m nổi bật phong c&aacute;ch cũng như nội thất của bạn, tạo một kh&ocirc;ng gian đẹp ph&ugrave; hợp với &yacute; tưởng ban đầu, bạn n&ecirc;n ch&uacute; &yacute; trang tr&iacute; cửa h&agrave;ng sao cho ph&ugrave; hợp. Bạn c&oacute; thể d&ugrave;ng c&aacute;c bức tranh vẽ, giấy d&aacute;n tường, vẽ tranh tường hay d&ugrave;ng những t&aacute;c phẩm nghệ thuật để trang tr&iacute;. Vẽ tranh tường đang l&agrave; một xu hướng mới cho c&aacute;c cửa h&agrave;ng hiện nay. Bạn c&oacute; thể lựa chọn cho m&igrave;nh những market tranh tường kh&aacute;c nhau sao cho ph&ugrave; hợp với &yacute; th&iacute;ch v&agrave; phong c&aacute;ch của bạn.</p>\r\n<p style="padding-left: 30px;"><strong>5.V&agrave; cuối c&ugrave;ng</strong>:</p>\r\n<p style="padding-left: 60px;">H&atilde;y tận hưởng th&agrave;nh quả lao động của bạn với số lượng kh&aacute;ch h&agrave;ng đ&ocirc;ng đảo!. Đừng qu&ecirc;n gọi ch&uacute;ng t&ocirc;i 091787 5995 (Mr Dũng) một nh&acirc;n tố nhỏ b&eacute; nhưng sẽ g&oacute;p một phần nho nhỏ trong th&agrave;nh c&ocirc;ng của bạn. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với kế hoạch v&agrave; &yacute; tưởng kinh doanh của m&igrave;nh.</p>\r\n<p style="padding-left: 60px; text-align: center;">&nbsp;</p>', '', '2017-04-04 07:49:22', '2017-04-04 08:14:45'),
(4, 3, 1, 'sp-bien-quang-cao-bat-hiflex-1491292383.png', 'SP-Biển quảng cáo bạt hiflex', 'sp-bien-quang-cao-bat-hiflex', 1, 0, 'DOANH NGHIỆP Truyền thông và Đầu tư Mũi Tên Vàng, tên giao dịch GAGVIETNAM được thành lập bởi các chuyên viên thiết kế và sản xuất với thâm niên lâu năm trong việc thiết kế và thi công hoàn thiện biển hiệu trên các chất liệu. ', '<div>\r\n<p>DOANH NGHIỆP Truyền th&ocirc;ng v&agrave; Đầu tư Mũi T&ecirc;n V&agrave;ng, t&ecirc;n giao dịch GAGVIETNAM được th&agrave;nh lập bởi c&aacute;c chuy&ecirc;n vi&ecirc;n thiết kế v&agrave; sản xuất với th&acirc;m ni&ecirc;n l&acirc;u năm trong việc thiết kế v&agrave; thi c&ocirc;ng ho&agrave;n thiện biển hiệu tr&ecirc;n c&aacute;c chất liệu. Ch&uacute;ng t&ocirc;i lu&ocirc;n mong muốn gia tăng thương hiệu của kh&aacute;ch h&agrave;ng th&ocirc;ng qua c&aacute;c hệ thống bảng hiệu, bởi thương hiệu l&agrave; t&agrave;i sản v&ocirc; h&igrave;nh nhưng đ&oacute;ng g&oacute;p một phần kh&ocirc;ng hề nhỏ trong việc ph&aacute;t triển thương hiệu v&agrave; tiếp cận kh&aacute;ch h&agrave;ng. Một số lĩnh vực thế mạnh của GAGVIETNAM:</p>\r\n</div>\r\n<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 07:53:03', '2017-04-04 08:14:38'),
(5, 4, 1, 'sp-bien-quang-cao-chu-noi-dong-1491292457.jpeg', 'SP-Biển quảng cáo chữ nổi đồng', 'sp-bien-quang-cao-chu-noi-dong', 1, 0, 'DOANH NGHIỆP Truyền thông và Đầu tư Mũi Tên Vàng, tên giao dịch GAGVIETNAM được thành lập bởi các chuyên viên thiết kế và sản xuất với thâm niên lâu năm trong việc thiết kế và thi công hoàn thiện biển hiệu trên các chất liệu.', '<div>\r\n<p>DOANH NGHIỆP Truyền th&ocirc;ng v&agrave; Đầu tư Mũi T&ecirc;n V&agrave;ng, t&ecirc;n giao dịch GAGVIETNAM được th&agrave;nh lập bởi c&aacute;c chuy&ecirc;n vi&ecirc;n thiết kế v&agrave; sản xuất với th&acirc;m ni&ecirc;n l&acirc;u năm trong việc thiết kế v&agrave; thi c&ocirc;ng ho&agrave;n thiện biển hiệu tr&ecirc;n c&aacute;c chất liệu. Ch&uacute;ng t&ocirc;i lu&ocirc;n mong muốn gia tăng thương hiệu của kh&aacute;ch h&agrave;ng th&ocirc;ng qua c&aacute;c hệ thống bảng hiệu, bởi thương hiệu l&agrave; t&agrave;i sản v&ocirc; h&igrave;nh nhưng đ&oacute;ng g&oacute;p một phần kh&ocirc;ng hề nhỏ trong việc ph&aacute;t triển thương hiệu v&agrave; tiếp cận kh&aacute;ch h&agrave;ng. Một số lĩnh vực thế mạnh của GAGVIETNAM:</p>\r\n</div>\r\n<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 07:54:17', '2017-04-04 07:54:17'),
(6, 7, 1, 'sp-bien-quang-cao-cong-ty-1491292821.jpeg', 'SP-Biển quảng cáo Công ty', 'sp-bien-quang-cao-cong-ty', 1, 0, ' Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng</p>\r\n</div>\r\n<div>&nbsp;</div>', '', '2017-04-04 08:00:21', '2017-04-04 09:50:37'),
(7, 8, 1, 'sp-bien-quang-cao-cua-hang-1491292884.png', 'SP-Biển quảng cáo cửa hàng', 'sp-bien-quang-cao-cua-hang', 1, 0, 'Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng. Một số lĩnh vực thế mạnh của GAGVIETNAM:', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng</p>\r\n</div>\r\n<div>&nbsp;</div>', '', '2017-04-04 08:01:24', '2017-04-04 08:01:40'),
(8, 10, 1, 'sp-treo-phuon-bang-ron-1491292942.jpeg', 'SP-Treo phướn (băng rôn)', 'sp-treo-phuon-bang-ron', 1, 0, 'Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 08:02:22', '2017-04-04 08:02:22'),
(9, 12, 1, 'lam-bien-quang-cao-tang-uu-the-canh-tranh-1491293501.png', 'Làm biển quảng cáo tăng ưu thế cạnh tranh', 'lam-bien-quang-cao-tang-uu-the-canh-tranh', 0, 0, 'Công ty làm biển quảng cáo giá rẻ tại Hà Nội, thi công và phát triển hệ thống biển quảng cáo của các nhãn hàng lớn tại Hà Nội.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 08:11:41', '2017-04-04 08:11:41'),
(10, 12, 1, 'lam-bien-quang-cao-dep-tac-dong-den-kinh-doanh-ra-sao-1491293556.png', 'Làm biển quảng cáo đẹp tác động đến kinh doanh ra sao', 'lam-bien-quang-cao-dep-tac-dong-den-kinh-doanh-ra-sao', 0, 0, 'Công ty làm biển quảng cáo giá rẻ tại Hà Nội, thi công và phát triển hệ thống biển quảng cáo của các nhãn hàng lớn tại Hà Nội.', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-04 08:12:36', '2017-04-04 08:12:36'),
(11, 15, 1, NULL, 'Giới thiệu', 'gioi-thieu', 0, 0, 'DOANH NGHIỆP Truyền thông và Đầu tư Mũi Tên Vàng, tên giao dịch GAGVIETNAM được thành lập bởi các chuyên viên thiết kế và sản xuất với thâm niên lâu năm trong việc thiết kế và thi công hoàn thiện biển hiệu trên các chất liệu. Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng. Một số lĩnh vực thế mạnh của GAGVIETNAM:', '<div>\r\n<h4><strong>1. L&agrave;m biển quảng c&aacute;o:</strong></h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4><strong>2. Thiết kế</strong></h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4><strong>3. C&aacute;c hoạt động về in ấn</strong></h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>\r\n<div>\r\n<h3><strong><span style="font-size: 18px;">C&Ocirc;NG TY TNHH TRUYỀN TH&Ocirc;NG V&Agrave; ĐẦU TƯ MŨI T&Ecirc;N V&Agrave;NG</span></strong></h3>\r\n<p><strong>Điện thoại hỗ trợ:</strong> 091.787.5995/ 0462.948.759 - Fax: 04.6686 0351</p>\r\n<p><strong>Email hỗ trợ:</strong> sale@muitenvang.vn - dzung.tq@muitenvang.vn</p>\r\n<p><strong>Trụ sở:</strong> 17/435 Hồng H&agrave;, Ph&uacute;c T&acirc;n, Ho&agrave;n Kiếm, H&agrave; Nội</p>\r\n<p><strong>Xưởng SX:</strong> 70/68 Ngọc Thụy, Long Bi&ecirc;n, H&agrave; Nội</p>\r\n</div>', '', '2017-04-05 09:16:19', '2017-04-05 09:16:19'),
(12, 15, 1, NULL, 'Liên hệ', 'lien-he', 0, 0, 'Chúng tôi luôn mong muốn gia tăng thương hiệu của khách hàng thông qua các hệ thống bảng hiệu, bởi thương hiệu là tài sản vô hình nhưng đóng góp một phần không hề nhỏ trong việc phát triển thương hiệu và tiếp cận khách hàng. ', '<div>\r\n<h4>1. L&agrave;m biển quảng c&aacute;o:</h4>\r\n<p>- L&agrave;m biển quảng c&aacute;o bạt hiflex</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o Alu (aluminium - alcorest)</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o hộp đ&egrave;n</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o chữ nổi mica, đồng, Inox...</p>\r\n<p>- Tranh tường khổ lớn, Tranh k&iacute;nh, Tranh điện theo y&ecirc;u cầu.</p>\r\n<p>- Treo phướn tr&ecirc;n địa b&agrave;n H&agrave; Nội</p>\r\n<p>- L&agrave;m biển quảng c&aacute;o led sign</p>\r\n</div>\r\n<div>\r\n<h4>2. Thiết kế</h4>\r\n<p>- Thiết kế gian h&agrave;ng triễn l&atilde;m, trung t&acirc;m thương mại v&agrave; showroom</p>\r\n<p>- Thiết kế đồ họa (nhận diện thương hiệu, đồ họa quảng c&aacute;o truyền th&ocirc;ng, C&aacute;c ấn phẩm phục vụ sự kiện, Quảng c&aacute;o truyền th&ocirc;ng: Banner, Poster, standee&hellip;...)</p>\r\n<p>- Đồ họa động trong truyền h&igrave;nh (Clip quảng c&aacute;o sản phẩm, giới thiệu về c&ocirc;ng ty, bi&ecirc;n tập nội dung clip sự kiện)</p>\r\n</div>\r\n<div>\r\n<h4>3. C&aacute;c hoạt động về in ấn</h4>\r\n<p>- In HIFI khổ lớn tr&ecirc;n c&aacute;c chất liệu: giấy ảnh, giấy PP, PP decan, Decan trong, Decan lưới, Backlit, Lụa &hellip;.. (c&oacute; c&aacute;n keo 2 mặt).</p>\r\n<p>- In Offset: Namecard, tờ thư, phong b&igrave;, kẹp file, t&agrave;i liệu quảng c&aacute;o, tờ rơi, catalog, s&aacute;ch, tạp ch&iacute; &hellip;</p>\r\n<p>- In Name card si&ecirc;u tốc, Thẻ VIP, Voucher, thẻ nhựa (dập chữ nổi), tờ rơi, thư mời&hellip;</p>\r\n</div>\r\n<div>\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn v&agrave; phục vụ tận nơi. GAGVIETNAM cam kết về chất lượng sản phẩm với một mức gi&aacute; cạnh tranh, chắc chắn sẽ đem lại hiệu quả tối đa cho lĩnh vực quảng c&aacute;o sản phẩm v&agrave; dịch vụ của kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n<div>\r\n<p>Rất mong nhận được sự quan t&acirc;m v&agrave; hợp t&aacute;c của qu&yacute; vị!</p>\r\n</div>\r\n<div>\r\n<p>Tr&acirc;n trọng!</p>\r\n</div>', '', '2017-04-05 09:18:21', '2017-04-05 09:18:21');

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
(1, 3, 350000, '2017-04-04 07:49:22', '2017-04-04 07:49:22'),
(2, 4, 450000, '2017-04-04 07:53:03', '2017-04-04 07:53:03'),
(3, 5, 550000, '2017-04-04 07:54:17', '2017-04-04 07:54:17'),
(4, 6, 750000, '2017-04-04 08:00:21', '2017-04-04 08:00:21'),
(5, 7, 850000, '2017-04-04 08:01:24', '2017-04-04 08:01:24'),
(6, 8, 150000, '2017-04-04 08:02:22', '2017-04-04 08:02:22');

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
(1, 1, '1490167595.png', '1491272469.png', 'QUANG CAO 69 - DOANH NGHIEP TRUYỀN THÔNG VÀ ĐẦU TƯ', 'QUANG CAO 69 - DOANH NGHIEP TRUYỀN THÔNG VÀ ĐẦU TƯ', 'QUANG CAO 69 - DOANH NGHIEP TRUYỀN THÔNG VÀ ĐẦU TƯ', 257, '2017-04-07 07:19:36', '2017-04-07 07:19:36');

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
(3, 1, 1, NULL, 'Biển quảng cáo bạt hiflex', 'bien-quang-cao-bat-hiflex', 0, '', '', '', NULL, NULL, '2017-04-04 02:22:46', '2017-04-04 02:22:46'),
(4, 1, 1, NULL, 'Biển quảng cáo chữ nổi đồng', 'bien-quang-cao-chu-noi-dong', 0, '', '', '', NULL, NULL, '2017-04-04 02:25:31', '2017-04-04 02:25:47'),
(5, 1, 1, NULL, 'Inox', 'inox', 0, '', '', '', NULL, NULL, '2017-04-04 02:25:54', '2017-04-04 02:25:54'),
(6, 1, 1, NULL, 'Biển led', 'bien-led', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:11', '2017-04-04 03:11:04'),
(7, 1, 1, NULL, 'Biển quảng cáo Công ty', 'bien-quang-cao-cong-ty', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:20', '2017-04-04 02:26:20'),
(8, 1, 1, NULL, 'Biển quảng cáo cửa hàng', 'bien-quang-cao-cua-hang', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:28', '2017-04-04 02:26:28'),
(9, 1, 1, NULL, 'Biển alu gắn chữ nổi', 'bien-alu-gan-chu-noi', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:36', '2017-04-04 02:26:36'),
(10, 1, 1, NULL, 'Treo phướn (băng rôn)', 'treo-phuon-bang-ron', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:43', '2017-04-04 02:26:43'),
(11, 1, 1, NULL, 'Gian hàng hội chợ, triển lãm', 'gian-hang-hoi-cho-trien-lam', 0, '', '', '', NULL, NULL, '2017-04-04 02:26:50', '2017-04-04 02:26:50'),
(12, 1, 0, NULL, 'Tin tức - Sự kiện', 'tin-tuc-su-kien', 0, '', '', '', NULL, NULL, '2017-04-04 02:27:05', '2017-04-04 03:54:25'),
(13, 1, 0, NULL, 'Công trình mới', 'cong-trinh-moi', 0, '', '', '', NULL, NULL, '2017-04-04 02:27:11', '2017-04-04 02:27:11'),
(14, 1, 0, NULL, 'Tuyển dụng', 'tuyen-dung', 0, '', '', '', NULL, NULL, '2017-04-04 02:27:20', '2017-04-04 02:27:20'),
(15, 1, 0, NULL, 'Về công ty', 've-cong-ty', 0, '', '', '', NULL, NULL, '2017-04-05 09:15:17', '2017-04-05 09:15:17');

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
(1, 'admin', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', 'pham-van-truong-1487748942.jpeg', 'Trường', 'truongbuon@hotmail.com', 'admin', 0, '2017-03-03 08:34:28', '2017-03-03 01:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `term_id` bigint(20) DEFAULT NULL,
  `view_sum` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `post_id`, `term_id`, `view_sum`, `created_at`, `updated_at`) VALUES
(1, NULL, 12, 41, '2017-04-05 08:30:57', '2017-04-05 08:30:57'),
(2, NULL, 6, 16, '2017-04-05 09:26:01', '2017-04-05 09:26:01'),
(3, 1, NULL, 11, '2017-04-07 01:58:10', '2017-04-07 01:58:10'),
(4, NULL, 1, 26, '2017-04-07 01:56:28', '2017-04-07 01:56:28'),
(5, NULL, 2, 35, '2017-04-07 01:57:52', '2017-04-07 01:57:52'),
(6, NULL, 7, 7, '2017-04-04 10:30:53', '2017-04-04 10:30:53'),
(7, NULL, 9, 3, '2017-04-04 08:27:27', '2017-04-04 08:27:27'),
(8, NULL, 13, 16, '2017-04-07 01:56:32', '2017-04-07 01:56:32'),
(9, NULL, 14, 8, '2017-04-07 01:56:37', '2017-04-07 01:56:37'),
(10, NULL, 11, 6, '2017-04-05 06:41:07', '2017-04-05 06:41:07'),
(11, 3, NULL, 10, '2017-04-07 01:56:41', '2017-04-07 01:56:41'),
(12, NULL, 3, 11, '2017-04-05 08:25:24', '2017-04-05 08:25:24'),
(13, NULL, 4, 6, '2017-04-07 07:15:29', '2017-04-07 07:15:29'),
(14, 8, NULL, 8, '2017-04-05 09:28:19', '2017-04-05 09:28:19'),
(15, NULL, 8, 5, '2017-04-05 08:59:45', '2017-04-05 08:59:45'),
(16, 7, NULL, 19, '2017-04-07 07:13:20', '2017-04-07 07:13:20'),
(17, NULL, 5, 1, '2017-04-04 08:27:24', '2017-04-04 08:27:24'),
(18, 4, NULL, 4, '2017-04-05 09:28:40', '2017-04-05 09:28:40'),
(19, 9, NULL, 3, '2017-04-07 06:57:19', '2017-04-07 06:57:19'),
(20, 10, NULL, 24, '2017-04-07 01:58:14', '2017-04-07 01:58:14'),
(21, 5, NULL, 2, '2017-04-04 09:21:30', '2017-04-04 09:21:30'),
(22, 6, NULL, 7, '2017-04-04 09:51:04', '2017-04-04 09:51:04'),
(23, 12, NULL, 65, '2017-04-07 07:19:36', '2017-04-07 07:19:36'),
(24, 11, NULL, 19, '2017-04-07 07:19:04', '2017-04-07 07:19:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
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
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post_sp`
--
ALTER TABLE `post_sp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
