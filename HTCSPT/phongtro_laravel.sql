-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 05:32 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phongtro_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Phòng trọ', '2019-11-07 07:17:59', '2019-11-07 07:20:55'),
(2, 'Chung cư mini', NULL, '2019-11-07 07:17:59'),
(3, 'Nhà nguyên căn', NULL, NULL),
(4, 'Ký túc xá', NULL, '2019-11-07 07:18:35'),
(5, 'Homestay', '2019-11-07 07:19:02', '2019-11-07 07:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ba Đình', NULL, NULL),
(2, 'Hoàn Kiếm', NULL, NULL),
(3, 'Tây Hồ', NULL, NULL),
(4, 'Long Biên', NULL, NULL),
(5, 'Cầu Giấy', NULL, NULL),
(6, 'Đống Đa', NULL, NULL),
(7, 'Hai Bà Trưng', NULL, NULL),
(8, 'Hoàng Mai', NULL, NULL),
(9, 'Thanh Xuân', NULL, NULL),
(10, 'Sóc Sơn', NULL, NULL),
(11, 'Đông Anh', NULL, NULL),
(12, 'Gia Lâm', NULL, NULL),
(13, 'Nam Từ Liêm', NULL, NULL),
(14, 'Bắc Từ Liêm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_uti`
--

CREATE TABLE `list_uti` (
  `id_motelroom` int(10) UNSIGNED NOT NULL,
  `id_uti` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, '2018_03_11_083541_create_table_motel_rooms', 1),
(4, '2018_03_11_085624_create_table_districts', 1),
(5, '2018_03_11_085744_create_table_categories', 1),
(6, '2018_04_22_122641_add_column__status_for_user', 1),
(7, '2018_04_22_152143_add_ondelete_cascade_for_motelroom', 1),
(8, '2018_05_06_030849_add_col_phone_for__motelroom_table', 1),
(9, '2018_05_12_063610_add_column_approve_for_motelroom', 1),
(10, '2018_05_13_064120_add_table_report', 1),
(11, '2018_05_19_033745_add_column_slug_table_motelroom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motelrooms`
--

CREATE TABLE `motelrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form` int(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `district_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `changes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motelrooms`
--

INSERT INTO `motelrooms` (`id`, `title`, `form`, `description`, `price`, `area`, `address`, `images`, `user_id`, `category_id`, `district_id`, `created_at`, `updated_at`, `phone`, `approve`, `status`, `changes`) VALUES
(2, 'Cho thuê phòng phố Tân Mai', 0, 'Mình đang có 1 phòng ở tầng 1 (vệ sinh khép kín) khu vực phố Tân Mai\r\n- phòng đã có đủ giường tủ, chỉ cần chuyển đến và ở\r\n- sạch sẽ thoáng, có luôn nhà vệ sinh trong phòng\r\n- có bình nóng lạnh tắm và bếp nấu ăn\r\n- máy giặt và sân phơi ở tầng 4\r\n- điện nước internet tính giá rẻ, có chỗ để xe trong nhà, giờ giấc tự do, không ở chung chủ. Khu dân cư nhiều người về hưu nên rất yên tĩnh và an ninh', 1500000, 20, 'Phố Tân Mai, Hoàng Mai, Hà Nội', '{\"0\":\"phongtro-UKRmv-phongtro2.jpg\"}', 7, 1, 8, '2019-10-10 05:33:30', '2019-10-10 05:33:30', '01282585079', 1, 1, 0),
(9, 'Tìm phòng khu vực Kiều Mai', 1, 'Cần tìm một bạn nữ ở ghép, tiền phòng và điện nước chia đôi.\r\nYêu cầu thật thà, không tính toán, vui vẻ.\r\nMình đi làm cả ngày nên chỉ về phòng ở buổi tối thôi.', 1500000, 14, '1 Hoàng Hoa Thám, Thanh Khê, Đà Nẵng, Việt Nam', '{\"0\":\"no_img_room.png\"}', 7, 2, 2, '2018-05-19 01:13:40', '2019-10-13 07:41:14', '0934162386', 1, 1, 0),
(10, 'Tìm người ở ghép ', 2, 'Cần tìm một bạn nữ ở ghép, tiền phòng và điện nước chia đôi.\r\nYêu cầu thật thà, không tính toán, vui vẻ.\r\nMình đi làm cả ngày nên chỉ về phòng ở buổi tối thôi.', 1500000, 14, '1 Hoàng Hoa Thám, Thanh Khê, Đà Nẵng, Việt Nam', '{\"0\":\"no_img_room.png\"}', 7, 2, 14, '2018-05-19 01:13:40', '2019-10-14 00:47:03', '0934162386', 1, 1, 0),
(12, 'Cần tìm người ở ghép trong căn hộ chung cư', 0, '<p>Căn hộ 70m2. 2pn. 2wc. Nội thất đầy đủ. Mknhf cho thu&ecirc; lại 1pn. Bạn n&agrave;o c&oacute; nhu cầu lh với m&igrave;nh nh&eacute;. Ok</p>', 2500000, 25, 'Xuân La, Tây Hồ, Hà Nội, Việt Nam', '1.jpg', 5, 2, 14, '2019-10-14 00:05:48', '2019-10-14 00:28:13', '0376521198', 1, 1, 0),
(13, 'Cho thuê VĂN PHÒNG tầng 1', 0, '<p>Hiện tại gia đ&igrave;nh m&igrave;nh cần cho thu&ecirc; Văn ph&ograve;ng hoặc tương tự mặt bằng tầng 1<br />\r\n&Ocirc; t&ocirc; đường v&agrave;o thoải m&aacute;i rộng r&atilde;i nh&eacute;</p>', 6000000, 30, '196 Đường Phú Diễn, Phú Diễn, Từ Liêm, Hà Nội, Việt Nam', '1.jpg', 5, 4, 14, '2019-10-14 00:34:40', '2019-10-14 00:47:05', '0906221460', 1, 1, 0),
(14, 'Căn hộ 1 PN-1PK tại Chính Kinh-Ngã Tư Sơ', 0, '<p>CHO THU&Ecirc; NH&Agrave; TẠI CH&Iacute;NH KINH - NG&Atilde; TƯ SỞ (thiết kế 1 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch)<br />\r\n<br />\r\n🏡 Địa chỉ: ng&otilde; 12 Ch&iacute;nh kinh, gần đường ch&iacute;nh, gần chợ v&agrave; c&aacute;c trường ĐH lớn...<br />\r\n<br />\r\n✅ Nội thất: Giường, tủ, n&oacute;ng lạnh, điều h&ograve;a,tủ lạnh, m&aacute;y giặt, h&uacute;t m&ugrave;i, tủ bếp, kệ bếp, b&agrave;n ghế... khu nấu ăn ri&ecirc;ng, c&oacute; ban c&ocirc;ng<br />\r\n<br />\r\n✅ Giờ giấc tự do, VS kh&eacute;p k&iacute;n, ko chung chủ, nh&agrave; c&oacute; &aacute;nh s&aacute;ng tự nhi&ecirc;n<br />\r\n<br />\r\n✅ Điện: 3.5k; nước 20k/m3; mạng 100k/ph; vệ sinh+th&aacute;ng m&aacute;y 80k/ng; xe 100k/th&aacute;ng<br />\r\n<br />\r\n💰 Gi&aacute;: 6.5tr/th&aacute;ng. Cọc 1 th&aacute;ng, đ&oacute;ng tiền 2 th&aacute;ng<br />\r\n<br />\r\n☎️ Xem nh&agrave; miễn ph&iacute;: 0372.419.321</p>', 6500000, 50, 'Phố Chính Kinh, Thanh Xuân, Hà Nội, Việt Nam', '1.jpg', 5, 3, 9, '2019-10-14 00:36:41', '2019-10-14 00:47:09', '0372419321', 1, 1, 0),
(15, 'Chính chủ cho thuê phòng ngoc 402', 0, '<p>Ph&ograve;ng đẹp, mội thất cao cấp an ninh tốt, giờ giấc tự do gần hồ t&acirc;y , c&ocirc;ng vi&ecirc;n, li&ecirc;n hệ chủ nh&agrave; ph&ograve;ng c&oacute; săn giường tủ n&oacute;ng lạnh , điều ho&agrave;</p>', 2500000, 18, '401 Xuân Đỉnh, Tây Hồ, Hà Nội, Việt Nam', '1.jpg', 5, 1, 3, '2019-10-14 00:38:30', '2019-10-14 00:47:11', '0916554345', 1, 1, 0),
(16, 'Cho thuê phòng ngõ 139 nguyễn ngọc vũ, cầu giấy', 0, '<p>⭐️⭐️Nh&agrave; M&igrave;nh c&ograve;n trống c&aacute;c ph&ograve;ng như ảnh cần cho thu&ecirc;<br />\r\nĐịa chỉ:Ng&otilde; 61 L&ecirc; Văn Lương-Thanh Xu&acirc;n(c&oacute; thể đi v&agrave;o từ ng&otilde; 139 Nguyễn Ngọc Vũ)<br />\r\n🌟Tiện &iacute;ch c&aacute;c ph&ograve;ng: Điều ho&agrave;, N&oacute;ng lạnh,m&aacute;y giặt,Tủ quần &aacute;o mới,giường, r&egrave;m cửa,wifi,camera,<br />\r\n✨✅Nh&agrave; mặt ng&otilde; lớn &ocirc; t&ocirc; v&agrave;o được<br />\r\n✨✅Giờ giấc thoải m&aacute;i,k chung chủ<br />\r\n✨✅Nh&agrave; mới sạch sẽ,S&agrave;n gỗ cao cấp<br />\r\n✨✅C&aacute;c ph&ograve;ng đều tho&aacute;ng m&aacute;t c&oacute; cửa sổ rộng<br />\r\n✨✅Vị Tr&iacute; gần mặt đường L&ecirc; Văn Lương.<br />\r\n✨✅Ph&ograve;ng t3-&gt;t4 b&ecirc;n trong c&oacute; cửa &ocirc; tho&aacute;ng gi&aacute; 2,7-&gt;2,8tr<br />\r\n✨✅Điện 3,8k/1s,Nước 80k/1ng,Mạng 100k/1p<br />\r\n✨✅Để xe t1 free c&oacute; camera.<br />\r\nAi c&oacute; nhu cầu li&ecirc;n hệ:<br />\r\n0969 457 731</p>', 2700000, 13, 'Ngõ 139 Nguyễn Ngọc Vũ, Trung Hoà, Cầu Giấy, Hà Nội, Vietnam', '1.jpg', 5, 1, 5, '2019-10-14 00:41:00', '2019-10-14 00:47:14', '0969 457 731', 1, 1, 0),
(18, 'CHO THUÊ PHÒNG GIÁ RẺ KHU MỄ TRÌ THƯỢNG', 0, '<p>❌❌❌CHO THU&Ecirc; PH&Ograve;NG full nội thất CỰC ĐẸP, CỰC RẺ (điều ho&agrave;, n&oacute;ng lạnh, tủ, giường) KHU VỰC MỄ TR&Igrave; THƯỢNG<br />\r\n<br />\r\n🏡Địa chỉ: ng&otilde; 230/21/15 Mễ Tr&igrave; Thượng<br />\r\n<br />\r\n👉Giờ giấc tự do, VS kh&eacute;p k&iacute;n, ri&ecirc;ng chủ, c&oacute; g&aacute;c x&eacute;p...<br />\r\n<br />\r\n👉Điện 3.5k/số; nước 28k/m3; mạng 100k/ph; vệ sinh 30k/người<br />\r\n<br />\r\n💰Gi&aacute;: 3.1-3.3tr. Cọc 1 th&aacute;ng, đ&oacute;ng tiền 1 th&aacute;ng<br />\r\n<br />\r\n📞Lh: 0372.419.321</p>', 3000000, 25, 'Mễ Trì Thượng, Mễ Trì, Từ Liêm, Hà Nội, Việt Nam', '1.jpg', 5, 1, 13, '2019-10-14 00:43:32', '2019-10-14 00:47:17', '0372419321', 1, 1, 0),
(19, 'Chung cư mini mới tinh 100% tại Yên Hoà Cầu Giấy', 0, '<p>[G&Oacute;C B&Oacute;C PHỐT NH&Agrave; SI&Ecirc;U ĐẸP TẠI Y&Ecirc;N HO&Agrave;]<br />\r\n<br />\r\n🏡Đ/c: Ng&aacute;ch 30, Ng&otilde; 113 Y&ecirc;n Ho&agrave;. Gần chợ, gần trung t&acirc;m, tiện đi lại...<br />\r\n<br />\r\n🏡Nội thất: điều ho&agrave;, n&oacute;ng lạnh, b&agrave;n bếp, bồn rửa,... TẤT CẢ ĐỀU MỚI TINH 100%. C&oacute; g&aacute;c x&eacute;p...<br />\r\n<br />\r\n🏡 kh&ocirc;ng giới hạn giờ giấc, ko chung chủ, cửa sổ tho&aacute;ng m&aacute;t...<br />\r\n<br />\r\n💰Gi&aacute; từ: 3.5tr Cọc 1 th&aacute;ng đ&oacute;ng tiền h&agrave;ng th&aacute;ng<br />\r\n<br />\r\n✅ Điện 4k/số; nước 28k/m3; mạng 100k/ph&ograve;ng; vệ sinh 20k/ng<br />\r\n&nbsp;</p>', 3500000, 25, 'Yên Hòa, Yên Hoà, Cầu Giấy, Hà Nội, Việt Nam', 'phongtro.jpg\r\n', 5, 4, 5, '2019-10-14 00:45:15', '2019-10-14 00:47:18', '0329761721', 1, 1, 0),
(20, 'TÌM NGƯỜI Ở GHÉP CHƯA LẬP GIA ĐÌNH VUI TÍNH', 0, '<p>TIỆN NGHI SỬ DỤNG:<br />\r\n-Camera, kh&oacute;a cửa bảo mật v&acirc;n tay<br />\r\n-Điều h&ograve;a, quạt điện<br />\r\n- M&aacute;y giặt, s&acirc;n phơi rộng r&atilde;i thoải m&aacute;i<br />\r\n- N&oacute;ng lạnh<br />\r\n-Smart tivi<br />\r\n-Tủ lạnh<br />\r\n-Nh&agrave; bếp đầy đủ dụng cụ<br />\r\n-Ga đệm<br />\r\n- Internet miễn ph&iacute;, c&oacute; chỗ để xe m&aacute;y<br />\r\n-C&oacute; người vệ sinh ở khu sinh hoạt chung 1 tuần 1 lần.<br />\r\nGi&aacute; 1.4 triệu cho th&aacute;ng ở đầu ti&ecirc;n, c&aacute;c th&aacute;ng c&ograve;n lại gi&aacute; 1.25 triệu/ người/ th&aacute;ng. Điện nước cuối th&aacute;ng lấy h&oacute;a đơn chia b&igrave;nh qu&acirc;n đầu người<br />\r\nNh&agrave; dạng biệt thự:<br />\r\n- 3 mặt gi&aacute;p đường th&ocirc;ng tho&aacute;ng sạch sẽ, lối v&agrave;o 2 &ocirc; t&ocirc; tr&aacute;nh nhau dễ d&agrave;ng<br />\r\n- Mỗi ph&ograve;ng đều c&oacute; 1 ban c&ocirc;ng, 2 đến 4 cửa sổ &iacute;t xe cộ đi lại n&ecirc;n y&ecirc;n tĩnh, kh&ocirc;ng kh&iacute; trong l&agrave;nh c&oacute; lợi cho sức khỏe<br />\r\n- Ph&ograve;ng kh&aacute;ch l&agrave; nơi sinh hoạt chung diện t&iacute;ch 35m2, ph&ograve;ng bếp sạch sẽ tho&aacute;ng m&aacute;t<br />\r\n- Vị tr&iacute; nh&agrave; trong khu c&aacute;c tướng qu&acirc;n đội về hưu n&ecirc;n an ninh cực kỳ y&ecirc;n t&acirc;m, kh&ocirc;ng c&oacute; rao vặt, kh&ocirc;ng c&oacute; bu&ocirc;n b&aacute;n vỉa h&egrave;<br />\r\nY&ecirc;u cầu:<br />\r\n-Người đến ở c&oacute; lối sống gọn g&agrave;ng, sạch sẽ, sống &yacute; thức với người kh&aacute;c, giờ giấc khoa học. Kh&ocirc;ng: được ph&eacute;p h&uacute;t thuốc, uống rượu, b&agrave;i bạc, chửi tục. H&ocirc;i ch&acirc;n gi&agrave;y thối miễn v&agrave;o<br />\r\nSống t&aacute;ch biệt chủ, chỉ tiếp người c&oacute; nhu cầu thu&ecirc; trực tiếp, miễn trung gian v&agrave; c&oacute; nhu cầu ở trọ l&acirc;u d&agrave;i<br />\r\nC&aacute;ch đại học nội vụ 1.8km, đại học điện lực, 2.8km, hồ t&acirc;y 250m<br />\r\nĐịa chỉ: nh&agrave; số 2, ng&otilde; 172 Lạc Long Qu&acirc;n<br />\r\nCơ sở cho người ở gh&eacute;p mới: biệt thự số 10 ng&otilde; 89 Lạc Long Qu&acirc;n, biệt thự đẹp nhất nh&igrave; ng&otilde;<br />\r\nTrong giờ l&agrave;m việc h&agrave;nh ch&iacute;nh c&aacute;c bạn vui l&ograve;ng nhắn zalo, kh&ocirc;ng điện thoại v&igrave; m&igrave;nh c&ograve;n phải l&agrave;m việc nh&eacute;</p>', 1300000, 20, 'Số 3 Ngõ 89 - Lạc Long Quân, Nghĩa Đô, Cầu Giấy, Hà Nội, Việt Nam', '1.jpg', 5, 2, 5, '2019-10-14 00:46:47', '2019-10-14 00:47:20', '0979697774', 1, 2, 0),
(22, '111', 0, '<p>11111</p>', 111111, 11111, 'Phố Chính Kinh, Thanh Xuân, Hà Nội, Việt Nam', 'phongtro.jpg', 5, 1, 9, '2019-10-21 02:49:06', '2019-11-07 08:24:00', '0376521198', 1, 0, 3),
(23, 'Cho Thuê Phòng Trọ Ở Tu Hoàng', 2, '<p>CHo ở chung</p>', 1000000, 20, 'Gần ĐHCNHN', 'phongtro.jpg', 5, 5, 14, '2019-11-08 21:47:46', '2019-11-08 21:47:46', '0376521198', 0, 1, 0),
(24, 'Cần tìm người ở ghép trong căn hộ chung cư', 2, '<p>aaaaaa&acirc;</p>', 1000000, 20, 'Gần ĐHCNHN', 'phongtro.jpg', 8, 2, 14, '2019-11-09 06:24:36', '2019-11-09 06:24:36', '0376521198', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(2) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`) VALUES
(1, 'Bài đăng sai thông tin vui lòng sửa lại'),
(2, 'Bài đăng hết phòng vui lòng sửa lại'),
(3, 'tài khoản bạn bị khóa vì vi phạm');

-- --------------------------------------------------------

--
-- Table structure for table `noti_user`
--

CREATE TABLE `noti_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_notification` int(2) UNSIGNED NOT NULL,
  `id_report` int(10) UNSIGNED NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noti_user`
--

INSERT INTO `noti_user` (`id_user`, `id_notification`, `id_report`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 7, b'0', '2019-10-28 02:32:06', '2019-10-28 02:32:06');

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_motelroom` int(10) UNSIGNED NOT NULL,
  `status` int(1) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `id_motelroom`, `status`, `role`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Hà Tú', 22, 1, 0, '', '2019-10-27 12:37:24', '2019-10-28 02:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right` int(11) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no-avatar.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `right`, `status`, `phone`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thành Trung', 'admin', 'thanhtrungit.dev@gmail.com', '$2y$10$0U/rTGgDXcZFEz0VCRAX2umuSMpYCIWCfBj8WdPx6wj1eCf20P9ga', 0, 1, NULL, 'avatar-admin-1526708699.jpg', 'tXx6Pb6n3xXoYYLSWid7bIkSW3gKhDewez2Cz9sjdoMuCBnlStDkuP6liqtZ', '2018-05-18 22:44:01', '2019-10-13 10:19:18'),
(2, 'Tất Nhạc', 'tatnhac', 'tatnhac@gmail.com', '$2y$10$w68K356705u4SR1HUmzchOBR1nklo6yDvZ/VzvG0bhQRB9j4QFzwK', 0, 1, NULL, 'no-avatar.jpg', 'j4m9NmrzLAKw6E6MxKE067XbMQegswMBoAjuC5PvnUcAjrF7FpZcPkfrqLbR', '2018-05-19 00:50:52', '2018-05-19 00:50:52'),
(3, 'Văn Phúc', 'vanphuc', 'vanphuc@gmail.com', '$2y$10$Dbd1QmmlWGV.uYqi9KpTVuD2yKMgqs5fbHVNn5jMeOReaqh79T7gq', 0, 0, NULL, 'no-avatar.jpg', 'BxvBGC60U40Wu1TADa2zk3MrPujWPoaymjboNSoCk9jQethQp2TXEXWO9EbG', '2018-05-19 01:02:17', '2018-05-19 01:02:17'),
(4, 'Bảo Ngọc', 'baongoc', 'baongoc@gmail.com', '$2y$10$eMiGI1HA.u0IWJpLT1Wjlec3ojGbDhAmmnITN5Erga6t/GUpzjex.', 1, 0, NULL, 'avatar-baongoc-1526717688.png', 'o9qTtYf2aoyY3imWqUmqLBkNoR7luVz3qoD3JslTmVpQyfapdx6JnZ0r3A9e', '2018-05-19 01:11:11', '2019-10-13 10:03:32'),
(5, 'Tú', 'hatu', 'hatu@gmail.com', 'hatu', 1, 1, NULL, 'no-avatar.jpg', NULL, '2019-09-25 07:51:51', '2019-09-25 07:51:51'),
(6, 'Tú', 'hatu1', 'hatu@gmail.com', '1', 1, 1, NULL, 'no-avatar.jpg', NULL, '2019-09-25 07:51:51', '2019-09-25 07:51:51'),
(7, '12234', NULL, 'hatu1@gmail.com', '$2y$10$8f9cbWgqlhkoidZeUGcRo.WbpOm7J8.s8LHr1.L3JnCOK8gZeRaMO', 0, 1, NULL, 'no-avatar.jpg', NULL, '2019-11-08 19:31:31', '2019-11-08 19:31:31'),
(8, 'Hà Văn Tú', NULL, 'thuetro247@gmail.com', '$2y$10$/XwTdkx4yrcQUBtt9trkquPS7umxY0QIUk6ASrZF3RbScoQnD.3qa', 1, 1, NULL, 'no-avatar.jpg', NULL, '2019-11-08 19:48:46', '2019-11-08 19:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`id`, `name`) VALUES
(1, 'Gác l?ng'),
(2, 'Wifi'),
(3, 'Bình nóng l?nh'),
(4, '?i?u hòa'),
(5, 'K? b?p'),
(6, 'Ban công'),
(7, 'Bãi ?? xe'),
(8, 'Camera an ninh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_uti`
--
ALTER TABLE `list_uti`
  ADD PRIMARY KEY (`id_motelroom`,`id_uti`) USING BTREE,
  ADD KEY `id_uti` (`id_uti`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motelrooms`
--
ALTER TABLE `motelrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motelrooms_user_id_foreign` (`user_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noti_user`
--
ALTER TABLE `noti_user`
  ADD PRIMARY KEY (`id_user`,`id_notification`) USING BTREE,
  ADD KEY `id_report` (`id_report`),
  ADD KEY `id_notification` (`id_notification`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_motelroom` (`id_motelroom`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `motelrooms`
--
ALTER TABLE `motelrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noti_user`
--
ALTER TABLE `noti_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_uti`
--
ALTER TABLE `list_uti`
  ADD CONSTRAINT `list_uti_ibfk_1` FOREIGN KEY (`id_motelroom`) REFERENCES `motelrooms` (`id`),
  ADD CONSTRAINT `list_uti_ibfk_2` FOREIGN KEY (`id_uti`) REFERENCES `utilities` (`id`);

--
-- Constraints for table `motelrooms`
--
ALTER TABLE `motelrooms`
  ADD CONSTRAINT `motelrooms_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `motelrooms_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `motelrooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `noti_user`
--
ALTER TABLE `noti_user`
  ADD CONSTRAINT `noti_user_ibfk_1` FOREIGN KEY (`id_report`) REFERENCES `reports` (`id`),
  ADD CONSTRAINT `noti_user_ibfk_2` FOREIGN KEY (`id_notification`) REFERENCES `notification` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`id_motelroom`) REFERENCES `motelrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
