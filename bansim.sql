-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 12:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansim`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_chitietdonhang` int(10) NOT NULL,
  `id_donhang` int(10) NOT NULL,
  `id_sim` int(10) NOT NULL,
  `Hoten` varchar(50) NOT NULL,
  `Sdt` int(10) NOT NULL,
  `Diachi` varchar(100) NOT NULL,
  `Sosim` int(10) NOT NULL,
  `Thanhtien` varchar(20) NOT NULL,
  `Ghichu` varchar(100) NOT NULL,
  `pttt` varchar(20) NOT NULL,
  `Capnhat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_chitietdonhang`, `id_donhang`, `id_sim`, `Hoten`, `Sdt`, `Diachi`, `Sosim`, `Thanhtien`, `Ghichu`, `pttt`, `Capnhat`) VALUES
(42, 40, 19, 'Tôi là User1', 383647281, 'TPHCM', 1, '700000', 'Test', 'cod', 0),
(43, 41, 24, 'Tôi là User1', 383647281, 'TPHCM', 1, '700000', 'test2', 'momo atm', 0),
(44, 42, 64, 'Tôi là User1', 383647281, 'TPHCM', 1, '3000000', 'Đóng gói nhiều lớp', 'momo atm', 0),
(45, 42, 26, 'Tôi là User1', 383647281, 'TPHCM', 1, '1100000', 'Đóng gói nhiều lớp', 'momo atm', 0),
(46, 43, 66, 'Tôi là User2', 123456789, '73 Nguyễn Huệ', 1, '6000000', 'Đóng gói nhiều lớp', 'cod', 0),
(47, 44, 51, 'Tôi là User2', 123456789, '73 Nguyễn Huệ', 1, '24900000', 'Ghi chú', 'cod', 0),
(48, 45, 67, 'Tôi là User2', 123456789, '73 Nguyễn Huệ', 1, '135000000', 'Giao hàng sớm giúp mình', 'cod', 0),
(49, 46, 8, 'Tôi là User3', 335656787, 'Hà Nội', 1, '1600000000', 'Cần bảo mật thông tin đơn hàng trên gói hàng', 'cod', 0),
(50, 47, 16, 'Tôi là User3', 335656787, 'Hà Nội', 1, '8000000', 'Ghi chú', 'cod', 0),
(51, 47, 68, 'Tôi là User3', 335656787, 'Hà Nội', 1, '700000', 'Ghi chú', 'cod', 0),
(52, 48, 25, 'Tôi là User4', 293781639, 'Đồng Tháp', 1, '1350000', 'Ghi chú', 'cod', 0),
(53, 49, 41, 'Tôi là User4', 293781639, 'Đồng Tháp', 1, '8900000000', 'Ghi chú', 'cod', 0),
(54, 50, 40, 'Tôi là User5', 326373818, 'Đà Lạt', 1, '7900000000', 'Ghi chú', 'cod', 0),
(55, 51, 49, 'Tôi là User5', 326373818, 'Đà Lạt', 1, '225000000', 'Ghi chú', 'cod', 0),
(56, 52, 15, 'Tôi là User6', 463728191, 'Đà Nẵng', 1, '225000000', 'Ghi chú', 'cod', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_dathang` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `Ngaylaphoadon` datetime NOT NULL,
  `Tongtien` varchar(20) NOT NULL,
  `id_trangthai_dathang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_dathang`, `id_khachhang`, `Ngaylaphoadon`, `Tongtien`, `id_trangthai_dathang`) VALUES
(40, 6, '2024-08-06 16:51:47', '700000', 3),
(41, 6, '2024-08-06 16:54:35', '700000', 4),
(42, 6, '2024-08-06 17:05:46', '4100000', 5),
(43, 7, '2024-08-06 17:14:51', '6000000', 5),
(44, 7, '2024-08-06 17:15:15', '24900000', 6),
(45, 7, '2024-08-06 17:15:53', '135000000', 6),
(46, 8, '2024-08-06 17:32:42', '1600000000', 3),
(47, 8, '2024-08-06 17:33:08', '8700000', 4),
(48, 9, '2024-08-06 17:35:56', '1350000', 3),
(49, 9, '2024-08-06 17:36:21', '8900000000', 5),
(50, 10, '2024-08-06 17:37:58', '7900000000', 4),
(51, 10, '2024-08-06 17:38:12', '225000000', 6),
(52, 11, '2024-08-06 17:39:34', '225000000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `id_huyen` int(10) NOT NULL,
  `id_thanhpho` int(10) NOT NULL,
  `huyen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `huyen`
--

INSERT INTO `huyen` (`id_huyen`, `id_thanhpho`, `huyen`) VALUES
(1, 1, 'Quận Ba Đình'),
(2, 1, 'Quận Hoàn Kiếm'),
(3, 1, 'Quận Tây Hồ'),
(4, 1, 'Quận Long Biên'),
(5, 1, 'Quận Cầu Giấy'),
(6, 1, 'Quận Đống Đa'),
(7, 1, 'Quận Hai Bà Trưng'),
(8, 1, 'Quận Hoàng Mai'),
(9, 1, 'Quận Thanh Xuân'),
(10, 1, 'Huyện Sóc Sơn'),
(11, 1, 'Huyện Đông Anh'),
(12, 1, 'Huyện Gia Lâm'),
(13, 1, 'Quận Nam Từ Liêm'),
(14, 1, 'Huyện Thanh Trì'),
(15, 1, 'Quận Bắc Từ Liêm'),
(16, 1, 'Huyện Mê Linh'),
(17, 1, 'Quận Hà Đông'),
(18, 1, 'Thị xã Sơn Tây'),
(19, 1, 'Huyện Ba Vì'),
(20, 1, 'Huyện Phúc Thọ'),
(21, 1, 'Huyện Đan Phượng'),
(22, 1, 'Huyện Hoài Đức'),
(23, 1, 'Huyện Quốc Oai'),
(24, 1, 'Huyện Thạch Thất'),
(25, 1, 'Huyện Chương Mỹ'),
(26, 1, 'Huyện Thanh Oai'),
(27, 1, 'Huyện Thường Tín'),
(28, 1, 'Huyện Phú Xuyên'),
(29, 1, 'Huyện Ứng Hòa'),
(30, 1, 'Huyện Mỹ Đức'),
(31, 2, 'Thành phố Hà Giang'),
(32, 2, 'Huyện Đồng Văn'),
(33, 2, 'Huyện Mèo Vạc'),
(34, 2, 'Huyện Yên Minh'),
(35, 2, 'Huyện Quản Bạ'),
(36, 2, 'Huyện Vị Xuyên'),
(37, 2, 'Huyện Bắc Mê'),
(38, 2, 'Huyện Hoàng Su Phì'),
(39, 2, 'Huyện Xín Mần'),
(40, 2, 'Huyện Bắc Quang'),
(41, 2, 'Huyện Quang Bình'),
(42, 3, 'Thành phố Cao Bằng'),
(43, 3, 'Huyện Bảo Lâm'),
(44, 3, 'Huyện Bảo Lạc'),
(45, 3, 'Huyện Hà Quảng'),
(46, 3, 'Huyện Trùng Khánh'),
(47, 3, 'Huyện Hạ Lang'),
(48, 3, 'Huyện Quảng Hòa'),
(49, 3, 'Huyện Hoà An'),
(50, 3, 'Huyện Nguyên Bình'),
(51, 3, 'Huyện Thạch An'),
(52, 4, 'Thành Phố Bắc Kạn'),
(53, 4, 'Huyện Pác Nặm'),
(54, 4, 'Huyện Ba Bể'),
(55, 4, 'Huyện Ngân Sơn'),
(56, 4, 'Huyện Bạch Thông'),
(57, 4, 'Huyện Chợ Đồn'),
(58, 4, 'Huyện Chợ Mới'),
(59, 4, 'Huyện Na Rì'),
(60, 5, 'Thành phố Tuyên Quang'),
(61, 5, 'Huyện Lâm Bình'),
(62, 5, 'Huyện Na Hang'),
(63, 5, 'Huyện Chiêm Hóa'),
(64, 5, 'Huyện Hàm Yên'),
(65, 5, 'Huyện Yên Sơn'),
(66, 5, 'Huyện Sơn Dương'),
(67, 6, 'Thành phố Lào Cai'),
(68, 6, 'Huyện Bát Xát'),
(69, 6, 'Huyện Mường Khương'),
(70, 6, 'Huyện Si Ma Cai'),
(71, 6, 'Huyện Bắc Hà'),
(72, 6, 'Huyện Bảo Thắng'),
(73, 6, 'Huyện Bảo Yên'),
(74, 6, 'Thị xã Sa Pa'),
(75, 6, 'Huyện Văn Bàn'),
(76, 7, 'Thành phố Điện Biên Phủ'),
(77, 7, 'Thị Xã Mường Lay'),
(78, 7, 'Huyện Mường Nhé'),
(79, 7, 'Huyện Mường Chà'),
(80, 7, 'Huyện Tủa Chùa'),
(81, 7, 'Huyện Tuần Giáo'),
(82, 7, 'Huyện Điện Biên'),
(83, 7, 'Huyện Điện Biên Đông'),
(84, 7, 'Huyện Mường Ảng'),
(85, 7, 'Huyện Nậm Pồ'),
(86, 8, 'Thành phố Lai Châu'),
(87, 8, 'Huyện Tam Đường'),
(88, 8, 'Huyện Mường Tè'),
(89, 8, 'Huyện Sìn Hồ'),
(90, 8, 'Huyện Phong Thổ'),
(91, 8, 'Huyện Than Uyên'),
(92, 8, 'Huyện Tân Uyên'),
(93, 8, 'Huyện Nậm Nhùn'),
(94, 9, 'Thành phố Sơn La'),
(95, 9, 'Huyện Quỳnh Nhai'),
(96, 9, 'Huyện Thuận Châu'),
(97, 9, 'Huyện Mường La'),
(98, 9, 'Huyện Bắc Yên'),
(99, 9, 'Huyện Phù Yên'),
(100, 9, 'Huyện Mộc Châu'),
(101, 9, 'Huyện Yên Châu'),
(102, 9, 'Huyện Mai Sơn'),
(103, 9, 'Huyện Sông Mã'),
(104, 9, 'Huyện Sốp Cộp'),
(105, 9, 'Huyện Vân Hồ'),
(106, 10, 'Thành phố Yên Bái'),
(107, 10, 'Thị xã Nghĩa Lộ'),
(108, 10, 'Huyện Lục Yên'),
(109, 10, 'Huyện Văn Yên'),
(110, 10, 'Huyện Mù Căng Chải'),
(111, 10, 'Huyện Trấn Yên'),
(112, 10, 'Huyện Trạm Tấu'),
(113, 10, 'Huyện Văn Chấn'),
(114, 10, 'Huyện Yên Bình'),
(115, 11, 'Thành phố Hòa Bình'),
(116, 11, 'Huyện Đà Bắc'),
(117, 11, 'Huyện Lương Sơn'),
(118, 11, 'Huyện Kim Bôi'),
(119, 11, 'Huyện Cao Phong'),
(120, 11, 'Huyện Tân Lạc'),
(121, 11, 'Huyện Mai Châu'),
(122, 11, 'Huyện Lạc Sơn'),
(123, 11, 'Huyện Yên Thủy'),
(124, 11, 'Huyện Lạc Thủy'),
(125, 12, 'Thành phố Thái Nguyên'),
(126, 12, 'Thành phố Sông Công'),
(127, 12, 'Huyện Định Hóa'),
(128, 12, 'Huyện Phú Lương'),
(129, 12, 'Huyện Đồng Hỷ'),
(130, 12, 'Huyện Võ Nhai'),
(131, 12, 'Huyện Đại Từ'),
(132, 12, 'Thị xã Phổ Yên'),
(133, 12, 'Huyện Phú Bình'),
(134, 13, 'Thành phố Lạng Sơn'),
(135, 13, 'Huyện Tràng Định'),
(136, 13, 'Huyện Bình Gia'),
(137, 13, 'Huyện Văn Lãng'),
(138, 13, 'Huyện Cao Lộc'),
(139, 13, 'Huyện Văn Quan'),
(140, 13, 'Huyện Bắc Sơn'),
(141, 13, 'Huyện Hữu Lũng'),
(142, 13, 'Huyện Chi Lăng'),
(143, 13, 'Huyện Lộc Bình'),
(144, 13, 'Huyện Đình Lập'),
(145, 14, 'Thành phố Hạ Long'),
(146, 14, 'Thành phố Móng Cái'),
(147, 14, 'Thành phố Cẩm Phả'),
(148, 14, 'Thành phố Uông Bí'),
(149, 14, 'Huyện Bình Liêu'),
(150, 14, 'Huyện Tiên Yên'),
(151, 14, 'Huyện Đầm Hà'),
(152, 14, 'Huyện Hải Hà'),
(153, 14, 'Huyện Ba Chẽ'),
(154, 14, 'Huyện Vân Đồn'),
(155, 14, 'Thị xã Đông Triều'),
(156, 14, 'Thị xã Quảng Yên'),
(157, 14, 'Huyện Cô Tô'),
(158, 15, 'Thành phố Bắc Giang'),
(159, 15, 'Huyện Yên Thế'),
(160, 15, 'Huyện Tân Yên'),
(161, 15, 'Huyện Lạng Giang'),
(162, 15, 'Huyện Lục Nam'),
(163, 15, 'Huyện Lục Ngạn'),
(164, 15, 'Huyện Sơn Động'),
(165, 15, 'Huyện Yên Dũng'),
(166, 15, 'Huyện Việt Yên'),
(167, 15, 'Huyện Hiệp Hòa'),
(168, 16, 'Thành phố Việt Trì'),
(169, 16, 'Thị xã Phú Thọ'),
(170, 16, 'Huyện Đoan Hùng'),
(171, 16, 'Huyện Hạ Hoà'),
(172, 16, 'Huyện Thanh Ba'),
(173, 16, 'Huyện Phù Ninh'),
(174, 16, 'Huyện Yên Lập'),
(175, 16, 'Huyện Cẩm Khê'),
(176, 16, 'Huyện Tam Nông'),
(177, 16, 'Huyện Lâm Thao'),
(178, 16, 'Huyện Thanh Sơn'),
(179, 16, 'Huyện Thanh Thuỷ'),
(180, 16, 'Huyện Tân Sơn'),
(181, 17, 'Thành phố Vĩnh Yên'),
(182, 17, 'Thành phố Phúc Yên'),
(183, 17, 'Huyện Lập Thạch'),
(184, 17, 'Huyện Tam Dương'),
(185, 17, 'Huyện Tam Đảo'),
(186, 17, 'Huyện Bình Xuyên'),
(187, 17, 'Huyện Yên Lạc'),
(188, 17, 'Huyện Vĩnh Tường'),
(189, 17, 'Huyện Sông Lô'),
(190, 18, 'Thành phố Bắc Ninh'),
(191, 18, 'Huyện Yên Phong'),
(192, 18, 'Huyện Quế Võ'),
(193, 18, 'Huyện Tiên Du'),
(194, 18, 'Thành phố Từ Sơn'),
(195, 18, 'Huyện Thuận Thành'),
(196, 18, 'Huyện Gia Bình'),
(197, 18, 'Huyện Lương Tài'),
(198, 19, 'Thành phố Hải Dương'),
(199, 19, 'Thành phố Chí Linh'),
(200, 19, 'Huyện Nam Sách'),
(201, 19, 'Thị xã Kinh Môn'),
(202, 19, 'Huyện Kim Thành'),
(203, 19, 'Huyện Thanh Hà'),
(204, 19, 'Huyện Cẩm Giàng'),
(205, 19, 'Huyện Bình Giang'),
(206, 19, 'Huyện Gia Lộc'),
(207, 19, 'Huyện Tứ Kỳ'),
(208, 19, 'Huyện Ninh Giang'),
(209, 19, 'Huyện Thanh Miện'),
(210, 20, 'Quận Hồng Bàng'),
(211, 20, 'Quận Ngô Quyền'),
(212, 20, 'Quận Lê Chân'),
(213, 20, 'Quận Hải An'),
(214, 20, 'Quận Kiến An'),
(215, 20, 'Quận Đồ Sơn'),
(216, 20, 'Quận Dương Kinh'),
(217, 20, 'Huyện Thuỷ Nguyên'),
(218, 20, 'Huyện An Dương'),
(219, 20, 'Huyện An Lão'),
(220, 20, 'Huyện Kiến Thuỵ'),
(221, 20, 'Huyện Tiên Lãng'),
(222, 20, 'Huyện Vĩnh Bảo'),
(223, 20, 'Huyện Cát Hải'),
(224, 20, 'Huyện Bạch Long Vĩ'),
(225, 21, 'Thành phố Hưng Yên'),
(226, 21, 'Huyện Văn Lâm'),
(227, 21, 'Huyện Văn Giang'),
(228, 21, 'Huyện Yên Mỹ'),
(229, 21, 'Thị xã Mỹ Hào'),
(230, 21, 'Huyện Ân Thi'),
(231, 21, 'Huyện Khoái Châu'),
(232, 21, 'Huyện Kim Động'),
(233, 21, 'Huyện Tiên Lữ'),
(234, 21, 'Huyện Phù Cừ'),
(235, 22, 'Thành phố Thái Bình'),
(236, 22, 'Huyện Quỳnh Phụ'),
(237, 22, 'Huyện Hưng Hà'),
(238, 22, 'Huyện Đông Hưng'),
(239, 22, 'Huyện Thái Thụy'),
(240, 22, 'Huyện Tiền Hải'),
(241, 22, 'Huyện Kiến Xương'),
(242, 22, 'Huyện Vũ Thư'),
(243, 23, 'Thành phố Phủ Lý'),
(244, 23, 'Thị xã Duy Tiên'),
(245, 23, 'Huyện Kim Bảng'),
(246, 23, 'Huyện Thanh Liêm'),
(247, 23, 'Huyện Bình Lục'),
(248, 23, 'Huyện Lý Nhân'),
(249, 24, 'Thành phố Nam Định'),
(250, 24, 'Huyện Mỹ Lộc'),
(251, 24, 'Huyện Vụ Bản'),
(252, 24, 'Huyện Ý Yên'),
(253, 24, 'Huyện Nghĩa Hưng'),
(254, 24, 'Huyện Nam Trực'),
(255, 24, 'Huyện Trực Ninh'),
(256, 24, 'Huyện Xuân Trường'),
(257, 24, 'Huyện Giao Thủy'),
(258, 24, 'Huyện Hải Hậu'),
(259, 25, 'Thành phố Ninh Bình'),
(260, 25, 'Thành phố Tam Điệp'),
(261, 25, 'Huyện Nho Quan'),
(262, 25, 'Huyện Gia Viễn'),
(263, 25, 'Huyện Hoa Lư'),
(264, 25, 'Huyện Yên Khánh'),
(265, 25, 'Huyện Kim Sơn'),
(266, 25, 'Huyện Yên Mô'),
(267, 26, 'Thành phố Thanh Hóa'),
(268, 26, 'Thị xã Bỉm Sơn'),
(269, 26, 'Thành phố Sầm Sơn'),
(270, 26, 'Huyện Mường Lát'),
(271, 26, 'Huyện Quan Hóa'),
(272, 26, 'Huyện Bá Thước'),
(273, 26, 'Huyện Quan Sơn'),
(274, 26, 'Huyện Lang Chánh'),
(275, 26, 'Huyện Ngọc Lặc'),
(276, 26, 'Huyện Cẩm Thủy'),
(277, 26, 'Huyện Thạch Thành'),
(278, 26, 'Huyện Hà Trung'),
(279, 26, 'Huyện Vĩnh Lộc'),
(280, 26, 'Huyện Yên Định'),
(281, 26, 'Huyện Thọ Xuân'),
(282, 26, 'Huyện Thường Xuân'),
(283, 26, 'Huyện Triệu Sơn'),
(284, 26, 'Huyện Thiệu Hóa'),
(285, 26, 'Huyện Hoằng Hóa'),
(286, 26, 'Huyện Hậu Lộc'),
(287, 26, 'Huyện Nga Sơn'),
(288, 26, 'Huyện Như Xuân'),
(289, 26, 'Huyện Như Thanh'),
(290, 26, 'Huyện Nông Cống'),
(291, 26, 'Huyện Đông Sơn'),
(292, 26, 'Huyện Quảng Xương'),
(293, 26, 'Thị xã Nghi Sơn'),
(294, 27, 'Thành phố Vinh'),
(295, 27, 'Thị xã Cửa Lò'),
(296, 27, 'Thị xã Thái Hoà'),
(297, 27, 'Huyện Quế Phong'),
(298, 27, 'Huyện Quỳ Châu'),
(299, 27, 'Huyện Kỳ Sơn'),
(300, 27, 'Huyện Tương Dương'),
(301, 27, 'Huyện Nghĩa Đàn'),
(302, 27, 'Huyện Quỳ Hợp'),
(303, 27, 'Huyện Quỳnh Lưu'),
(304, 27, 'Huyện Con Cuông'),
(305, 27, 'Huyện Tân Kỳ'),
(306, 27, 'Huyện Anh Sơn'),
(307, 27, 'Huyện Diễn Châu'),
(308, 27, 'Huyện Yên Thành'),
(309, 27, 'Huyện Đô Lương'),
(310, 27, 'Huyện Thanh Chương'),
(311, 27, 'Huyện Nghi Lộc'),
(312, 27, 'Huyện Nam Đàn'),
(313, 27, 'Huyện Hưng Nguyên'),
(314, 27, 'Thị xã Hoàng Mai'),
(315, 28, 'Thành phố Hà Tĩnh'),
(316, 28, 'Thị xã Hồng Lĩnh'),
(317, 28, 'Huyện Hương Sơn'),
(318, 28, 'Huyện Đức Thọ'),
(319, 28, 'Huyện Vũ Quang'),
(320, 28, 'Huyện Nghi Xuân'),
(321, 28, 'Huyện Can Lộc'),
(322, 28, 'Huyện Hương Khê'),
(323, 28, 'Huyện Thạch Hà'),
(324, 28, 'Huyện Cẩm Xuyên'),
(325, 28, 'Huyện Kỳ Anh'),
(326, 28, 'Huyện Lộc Hà'),
(327, 28, 'Thị xã Kỳ Anh'),
(328, 29, 'Thành Phố Đồng Hới'),
(329, 29, 'Huyện Minh Hóa'),
(330, 29, 'Huyện Tuyên Hóa'),
(331, 29, 'Huyện Quảng Trạch'),
(332, 29, 'Huyện Bố Trạch'),
(333, 29, 'Huyện Quảng Ninh'),
(334, 29, 'Huyện Lệ Thủy'),
(335, 29, 'Thị xã Ba Đồn'),
(336, 30, 'Thành phố Đông Hà'),
(337, 30, 'Thị xã Quảng Trị'),
(338, 30, 'Huyện Vĩnh Linh'),
(339, 30, 'Huyện Hướng Hóa'),
(340, 30, 'Huyện Gio Linh'),
(341, 30, 'Huyện Đa Krông'),
(342, 30, 'Huyện Cam Lộ'),
(343, 30, 'Huyện Triệu Phong'),
(344, 30, 'Huyện Hải Lăng'),
(345, 30, 'Huyện Cồn Cỏ'),
(346, 31, 'Thành phố Huế'),
(347, 31, 'Huyện Phong Điền'),
(348, 31, 'Huyện Quảng Điền'),
(349, 31, 'Huyện Phú Vang'),
(350, 31, 'Thị xã Hương Thủy'),
(351, 31, 'Thị xã Hương Trà'),
(352, 31, 'Huyện A Lưới'),
(353, 31, 'Huyện Phú Lộc'),
(354, 31, 'Huyện Nam Đông'),
(355, 32, 'Quận Liên Chiểu'),
(356, 32, 'Quận Thanh Khê'),
(357, 32, 'Quận Hải Châu'),
(358, 32, 'Quận Sơn Trà'),
(359, 32, 'Quận Ngũ Hành Sơn'),
(360, 32, 'Quận Cẩm Lệ'),
(361, 32, 'Huyện Hòa Vang'),
(362, 32, 'Huyện Hoàng Sa'),
(363, 33, 'Thành phố Tam Kỳ'),
(364, 33, 'Thành phố Hội An'),
(365, 33, 'Huyện Tây Giang'),
(366, 33, 'Huyện Đông Giang'),
(367, 33, 'Huyện Đại Lộc'),
(368, 33, 'Thị xã Điện Bàn'),
(369, 33, 'Huyện Duy Xuyên'),
(370, 33, 'Huyện Quế Sơn'),
(371, 33, 'Huyện Nam Giang'),
(372, 33, 'Huyện Phước Sơn'),
(373, 33, 'Huyện Hiệp Đức'),
(374, 33, 'Huyện Thăng Bình'),
(375, 33, 'Huyện Tiên Phước'),
(376, 33, 'Huyện Bắc Trà My'),
(377, 33, 'Huyện Nam Trà My'),
(378, 33, 'Huyện Núi Thành'),
(379, 33, 'Huyện Phú Ninh'),
(380, 33, 'Huyện Nông Sơn'),
(381, 34, 'Thành phố Quảng Ngãi'),
(382, 34, 'Huyện Bình Sơn'),
(383, 34, 'Huyện Trà Bồng'),
(384, 34, 'Huyện Sơn Tịnh'),
(385, 34, 'Huyện Tư Nghĩa'),
(386, 34, 'Huyện Sơn Hà'),
(387, 34, 'Huyện Sơn Tây'),
(388, 34, 'Huyện Minh Long'),
(389, 34, 'Huyện Nghĩa Hành'),
(390, 34, 'Huyện Mộ Đức'),
(391, 34, 'Thị xã Đức Phổ'),
(392, 34, 'Huyện Ba Tơ'),
(393, 34, 'Huyện Lý Sơn'),
(394, 35, 'Thành phố Quy Nhơn'),
(395, 35, 'Huyện An Lão'),
(396, 35, 'Thị xã Hoài Nhơn'),
(397, 35, 'Huyện Hoài Ân'),
(398, 35, 'Huyện Phù Mỹ'),
(399, 35, 'Huyện Vĩnh Thạnh'),
(400, 35, 'Huyện Tây Sơn'),
(401, 35, 'Huyện Phù Cát'),
(402, 35, 'Thị xã An Nhơn'),
(403, 35, 'Huyện Tuy Phước'),
(404, 35, 'Huyện Vân Canh'),
(405, 36, 'Thành phố Tuy Hoà'),
(406, 36, 'Thị xã Sông Cầu'),
(407, 36, 'Huyện Đồng Xuân'),
(408, 36, 'Huyện Tuy An'),
(409, 36, 'Huyện Sơn Hòa'),
(410, 36, 'Huyện Sông Hinh'),
(411, 36, 'Huyện Tây Hoà'),
(412, 36, 'Huyện Phú Hoà'),
(413, 36, 'Thị xã Đông Hòa'),
(414, 37, 'Thành phố Nha Trang'),
(415, 37, 'Thành phố Cam Ranh'),
(416, 37, 'Huyện Cam Lâm'),
(417, 37, 'Huyện Vạn Ninh'),
(418, 37, 'Thị xã Ninh Hòa'),
(419, 37, 'Huyện Khánh Vĩnh'),
(420, 37, 'Huyện Diên Khánh'),
(421, 37, 'Huyện Khánh Sơn'),
(422, 37, 'Huyện Trường Sa'),
(423, 38, 'Thành phố Phan Rang-Tháp Chàm'),
(424, 38, 'Huyện Bác Ái'),
(425, 38, 'Huyện Ninh Sơn'),
(426, 38, 'Huyện Ninh Hải'),
(427, 38, 'Huyện Ninh Phước'),
(428, 38, 'Huyện Thuận Bắc'),
(429, 38, 'Huyện Thuận Nam'),
(430, 39, 'Thành phố Phan Thiết'),
(431, 39, 'Thị xã La Gi'),
(432, 39, 'Huyện Tuy Phong'),
(433, 39, 'Huyện Bắc Bình'),
(434, 39, 'Huyện Hàm Thuận Bắc'),
(435, 39, 'Huyện Hàm Thuận Nam'),
(436, 39, 'Huyện Tánh Linh'),
(437, 39, 'Huyện Đức Linh'),
(438, 39, 'Huyện Hàm Tân'),
(439, 39, 'Huyện Phú Quí'),
(440, 40, 'Thành phố Kon Tum'),
(441, 40, 'Huyện Đắk Glei'),
(442, 40, 'Huyện Ngọc Hồi'),
(443, 40, 'Huyện Đắk Tô'),
(444, 40, 'Huyện Kon Plông'),
(445, 40, 'Huyện Kon Rẫy'),
(446, 40, 'Huyện Đắk Hà'),
(447, 40, 'Huyện Sa Thầy'),
(448, 40, 'Huyện Tu Mơ Rông'),
(449, 40, 'Huyện Ia H\' Drai'),
(450, 41, 'Thành phố Pleiku'),
(451, 41, 'Thị xã An Khê'),
(452, 41, 'Thị xã Ayun Pa'),
(453, 41, 'Huyện KBang'),
(454, 41, 'Huyện Đăk Đoa'),
(455, 41, 'Huyện Chư Păh'),
(456, 41, 'Huyện Ia Grai'),
(457, 41, 'Huyện Mang Yang'),
(458, 41, 'Huyện Kông Chro'),
(459, 41, 'Huyện Đức Cơ'),
(460, 41, 'Huyện Chư Prông'),
(461, 41, 'Huyện Chư Sê'),
(462, 41, 'Huyện Đăk Pơ'),
(463, 41, 'Huyện Ia Pa'),
(464, 41, 'Huyện Krông Pa'),
(465, 41, 'Huyện Phú Thiện'),
(466, 41, 'Huyện Chư Pưh'),
(467, 42, 'Thành phố Buôn Ma Thuột'),
(468, 42, 'Thị Xã Buôn Hồ'),
(469, 42, 'Huyện Ea H\'leo'),
(470, 42, 'Huyện Ea Súp'),
(471, 42, 'Huyện Buôn Đôn'),
(472, 42, 'Huyện Cư M\'gar'),
(473, 42, 'Huyện Krông Búk'),
(474, 42, 'Huyện Krông Năng'),
(475, 42, 'Huyện Ea Kar'),
(476, 42, 'Huyện M\'Đrắk'),
(477, 42, 'Huyện Krông Bông'),
(478, 42, 'Huyện Krông Pắc'),
(479, 42, 'Huyện Krông A Na'),
(480, 42, 'Huyện Lắk'),
(481, 42, 'Huyện Cư Kuin'),
(482, 43, 'Thành phố Gia Nghĩa'),
(483, 43, 'Huyện Đăk Glong'),
(484, 43, 'Huyện Cư Jút'),
(485, 43, 'Huyện Đắk Mil'),
(486, 43, 'Huyện Krông Nô'),
(487, 43, 'Huyện Đắk Song'),
(488, 43, 'Huyện Đắk R\'Lấp'),
(489, 43, 'Huyện Tuy Đức'),
(490, 44, 'Thành phố Đà Lạt'),
(491, 44, 'Thành phố Bảo Lộc'),
(492, 44, 'Huyện Đam Rông'),
(493, 44, 'Huyện Lạc Dương'),
(494, 44, 'Huyện Lâm Hà'),
(495, 44, 'Huyện Đơn Dương'),
(496, 44, 'Huyện Đức Trọng'),
(497, 44, 'Huyện Di Linh'),
(498, 44, 'Huyện Bảo Lâm'),
(499, 44, 'Huyện Đạ Huoai'),
(500, 44, 'Huyện Đạ Tẻh'),
(501, 44, 'Huyện Cát Tiên'),
(502, 45, 'Thị xã Phước Long'),
(503, 45, 'Thành phố Đồng Xoài'),
(504, 45, 'Thị xã Bình Long'),
(505, 45, 'Huyện Bù Gia Mập'),
(506, 45, 'Huyện Lộc Ninh'),
(507, 45, 'Huyện Bù Đốp'),
(508, 45, 'Huyện Hớn Quản'),
(509, 45, 'Huyện Đồng Phú'),
(510, 45, 'Huyện Bù Đăng'),
(511, 45, 'Huyện Chơn Thành'),
(512, 45, 'Huyện Phú Riềng'),
(513, 46, 'Thành phố Tây Ninh'),
(514, 46, 'Huyện Tân Biên'),
(515, 46, 'Huyện Tân Châu'),
(516, 46, 'Huyện Dương Minh Châu'),
(517, 46, 'Huyện Châu Thành'),
(518, 46, 'Thị xã Hòa Thành'),
(519, 46, 'Huyện Gò Dầu'),
(520, 46, 'Huyện Bến Cầu'),
(521, 46, 'Thị xã Trảng Bàng'),
(522, 47, 'Thành phố Thủ Dầu Một'),
(523, 47, 'Huyện Bàu Bàng'),
(524, 47, 'Huyện Dầu Tiếng'),
(525, 47, 'Thị xã Bến Cát'),
(526, 47, 'Huyện Phú Giáo'),
(527, 47, 'Thị xã Tân Uyên'),
(528, 47, 'Thành phố Dĩ An'),
(529, 47, 'Thành phố Thuận An'),
(530, 47, 'Huyện Bắc Tân Uyên'),
(531, 48, 'Thành phố Biên Hòa'),
(532, 48, 'Thành phố Long Khánh'),
(533, 48, 'Huyện Tân Phú'),
(534, 48, 'Huyện Vĩnh Cửu'),
(535, 48, 'Huyện Định Quán'),
(536, 48, 'Huyện Trảng Bom'),
(537, 48, 'Huyện Thống Nhất'),
(538, 48, 'Huyện Cẩm Mỹ'),
(539, 48, 'Huyện Long Thành'),
(540, 48, 'Huyện Xuân Lộc'),
(541, 48, 'Huyện Nhơn Trạch'),
(542, 49, 'Thành phố Vũng Tàu'),
(543, 49, 'Thành phố Bà Rịa'),
(544, 49, 'Huyện Châu Đức'),
(545, 49, 'Huyện Xuyên Mộc'),
(546, 49, 'Huyện Long Điền'),
(547, 49, 'Huyện Đất Đỏ'),
(548, 49, 'Thị xã Phú Mỹ'),
(549, 49, 'Huyện Côn Đảo'),
(550, 50, 'Quận 1'),
(551, 50, 'Quận 12'),
(552, 50, 'Quận Gò Vấp'),
(553, 50, 'Quận Bình Thạnh'),
(554, 50, 'Quận Tân Bình'),
(555, 50, 'Quận Tân Phú'),
(556, 50, 'Quận Phú Nhuận'),
(557, 50, 'Thành phố Thủ Đức'),
(558, 50, 'Quận 3'),
(559, 50, 'Quận 10'),
(560, 50, 'Quận 11'),
(561, 50, 'Quận 4'),
(562, 50, 'Quận 5'),
(563, 50, 'Quận 6'),
(564, 50, 'Quận 8'),
(565, 50, 'Quận Bình Tân'),
(566, 50, 'Quận 7'),
(567, 50, 'Huyện Củ Chi'),
(568, 50, 'Huyện Hóc Môn'),
(569, 50, 'Huyện Bình Chánh'),
(570, 50, 'Huyện Nhà Bè'),
(571, 50, 'Huyện Cần Giờ'),
(572, 51, 'Thành phố Tân An'),
(573, 51, 'Thị xã Kiến Tường'),
(574, 51, 'Huyện Tân Hưng'),
(575, 51, 'Huyện Vĩnh Hưng'),
(576, 51, 'Huyện Mộc Hóa'),
(577, 51, 'Huyện Tân Thạnh'),
(578, 51, 'Huyện Thạnh Hóa'),
(579, 51, 'Huyện Đức Huệ'),
(580, 51, 'Huyện Đức Hòa'),
(581, 51, 'Huyện Bến Lức'),
(582, 51, 'Huyện Thủ Thừa'),
(583, 51, 'Huyện Tân Trụ'),
(584, 51, 'Huyện Cần Đước'),
(585, 51, 'Huyện Cần Giuộc'),
(586, 51, 'Huyện Châu Thành'),
(587, 52, 'Thành phố Mỹ Tho'),
(588, 52, 'Thị xã Gò Công'),
(589, 52, 'Thị xã Cai Lậy'),
(590, 52, 'Huyện Tân Phước'),
(591, 52, 'Huyện Cái Bè'),
(592, 52, 'Huyện Cai Lậy'),
(593, 52, 'Huyện Châu Thành'),
(594, 52, 'Huyện Chợ Gạo'),
(595, 52, 'Huyện Gò Công Tây'),
(596, 52, 'Huyện Gò Công Đông'),
(597, 52, 'Huyện Tân Phú Đông'),
(598, 53, 'Thành phố Bến Tre'),
(599, 53, 'Huyện Châu Thành'),
(600, 53, 'Huyện Chợ Lách'),
(601, 53, 'Huyện Mỏ Cày Nam'),
(602, 53, 'Huyện Giồng Trôm'),
(603, 53, 'Huyện Bình Đại'),
(604, 53, 'Huyện Ba Tri'),
(605, 53, 'Huyện Thạnh Phú'),
(606, 53, 'Huyện Mỏ Cày Bắc'),
(607, 54, 'Thành phố Trà Vinh'),
(608, 54, 'Huyện Càng Long'),
(609, 54, 'Huyện Cầu Kè'),
(610, 54, 'Huyện Tiểu Cần'),
(611, 54, 'Huyện Châu Thành'),
(612, 54, 'Huyện Cầu Ngang'),
(613, 54, 'Huyện Trà Cú'),
(614, 54, 'Huyện Duyên Hải'),
(615, 54, 'Thị xã Duyên Hải'),
(616, 55, 'Thành phố Vĩnh Long'),
(617, 55, 'Huyện Long Hồ'),
(618, 55, 'Huyện Mang Thít'),
(619, 55, 'Huyện  Vũng Liêm'),
(620, 55, 'Huyện Tam Bình'),
(621, 55, 'Thị xã Bình Minh'),
(622, 55, 'Huyện Trà Ôn'),
(623, 55, 'Huyện Bình Tân'),
(624, 56, 'Thành phố Cao Lãnh'),
(625, 56, 'Thành phố Sa Đéc'),
(626, 56, 'Thành phố Hồng Ngự'),
(627, 56, 'Huyện Tân Hồng'),
(628, 56, 'Huyện Hồng Ngự'),
(629, 56, 'Huyện Tam Nông'),
(630, 56, 'Huyện Tháp Mười'),
(631, 56, 'Huyện Cao Lãnh'),
(632, 56, 'Huyện Thanh Bình'),
(633, 56, 'Huyện Lấp Vò'),
(634, 56, 'Huyện Lai Vung'),
(635, 56, 'Huyện Châu Thành'),
(636, 57, 'Thành phố Long Xuyên'),
(637, 57, 'Thành phố Châu Đốc'),
(638, 57, 'Huyện An Phú'),
(639, 57, 'Thị xã Tân Châu'),
(640, 57, 'Huyện Phú Tân'),
(641, 57, 'Huyện Châu Phú'),
(642, 57, 'Huyện Tịnh Biên'),
(643, 57, 'Huyện Tri Tôn'),
(644, 57, 'Huyện Châu Thành'),
(645, 57, 'Huyện Chợ Mới'),
(646, 57, 'Huyện Thoại Sơn'),
(647, 58, 'Thành phố Rạch Giá'),
(648, 58, 'Thành phố Hà Tiên'),
(649, 58, 'Huyện Kiên Lương'),
(650, 58, 'Huyện Hòn Đất'),
(651, 58, 'Huyện Tân Hiệp'),
(652, 58, 'Huyện Châu Thành'),
(653, 58, 'Huyện Giồng Riềng'),
(654, 58, 'Huyện Gò Quao'),
(655, 58, 'Huyện An Biên'),
(656, 58, 'Huyện An Minh'),
(657, 58, 'Huyện Vĩnh Thuận'),
(658, 58, 'Thành phố Phú Quốc'),
(659, 58, 'Huyện Kiên Hải'),
(660, 58, 'Huyện U Minh Thượng'),
(661, 58, 'Huyện Giang Thành'),
(662, 59, 'Quận Ninh Kiều'),
(663, 59, 'Quận Ô Môn'),
(664, 59, 'Quận Bình Thuỷ'),
(665, 59, 'Quận Cái Răng'),
(666, 59, 'Quận Thốt Nốt'),
(667, 59, 'Huyện Vĩnh Thạnh'),
(668, 59, 'Huyện Cờ Đỏ'),
(669, 59, 'Huyện Phong Điền'),
(670, 59, 'Huyện Thới Lai'),
(671, 60, 'Thành phố Vị Thanh'),
(672, 60, 'Thành phố Ngã Bảy'),
(673, 60, 'Huyện Châu Thành A'),
(674, 60, 'Huyện Châu Thành'),
(675, 60, 'Huyện Phụng Hiệp'),
(676, 60, 'Huyện Vị Thuỷ'),
(677, 60, 'Huyện Long Mỹ'),
(678, 60, 'Thị xã Long Mỹ'),
(679, 61, 'Thành phố Sóc Trăng'),
(680, 61, 'Huyện Châu Thành'),
(681, 61, 'Huyện Kế Sách'),
(682, 61, 'Huyện Mỹ Tú'),
(683, 61, 'Huyện Cù Lao Dung'),
(684, 61, 'Huyện Long Phú'),
(685, 61, 'Huyện Mỹ Xuyên'),
(686, 61, 'Thị xã Ngã Năm'),
(687, 61, 'Huyện Thạnh Trị'),
(688, 61, 'Thị xã Vĩnh Châu'),
(689, 61, 'Huyện Trần Đề'),
(690, 62, 'Thành phố Bạc Liêu'),
(691, 62, 'Huyện Hồng Dân'),
(692, 62, 'Huyện Phước Long'),
(693, 62, 'Huyện Vĩnh Lợi'),
(694, 62, 'Thị xã Giá Rai'),
(695, 62, 'Huyện Đông Hải'),
(696, 62, 'Huyện Hoà Bình'),
(697, 63, 'Thành phố Cà Mau'),
(698, 63, 'Huyện U Minh'),
(699, 63, 'Huyện Thới Bình'),
(700, 63, 'Huyện Trần Văn Thời'),
(701, 63, 'Huyện Cái Nước'),
(702, 63, 'Huyện Đầm Dơi'),
(703, 63, 'Huyện Năm Căn'),
(704, 63, 'Huyện Phú Tân'),
(705, 63, 'Huyện Ngọc Hiển');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `Hoten` varchar(150) NOT NULL,
  `Sdt` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Diachi` varchar(100) NOT NULL,
  `Noidung` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lienhe`, `id_user`, `Hoten`, `Sdt`, `email`, `Diachi`, `Noidung`) VALUES
(2, 7, 'User2', 123456789, 'user2@gmail.com', 'Đồng Tháp', 'Đơn hàng của tôi bao giờ đến'),
(3, 8, 'User3', 293781639, 'user3@gmail.com', 'Đà Lạt', 'Tôi cần tư vấn mua sim'),
(4, 9, 'User4', 123456789, 'user4@gmail.com', 'Hà Nội', 'Tôi cần nhiều sim số đẹp hơn'),
(5, 11, 'User7', 383647281, 'user7@gmail.com', 'TPHCM', 'Tại sao tài khoản của tôi lại bị khóa');

-- --------------------------------------------------------

--
-- Table structure for table `loaisim`
--

CREATE TABLE `loaisim` (
  `id_loaisim` int(10) NOT NULL,
  `loaisim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaisim`
--

INSERT INTO `loaisim` (`id_loaisim`, `loaisim`) VALUES
(1, 'Sim lục quý'),
(2, 'Sim ngũ quý'),
(3, 'Sim tứ quý'),
(4, 'Sim thần tài'),
(5, 'Sim năm sinh'),
(6, 'Sim đặc biệt'),
(7, 'Sim tam hoa');

-- --------------------------------------------------------

--
-- Table structure for table `sim`
--

CREATE TABLE `sim` (
  `id_sim` int(10) NOT NULL,
  `sosim` varchar(12) NOT NULL,
  `gia` varchar(20) NOT NULL,
  `id_loaisim` int(10) NOT NULL,
  `id_tinhtrangsim` int(10) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sim`
--

INSERT INTO `sim` (`id_sim`, `sosim`, `gia`, `id_loaisim`, `id_tinhtrangsim`, `soluong`) VALUES
(1, '0906.333333', ' 1.500.000.000', 1, 2, 1),
(2, '0908.111.111', '990.000.000', 1, 2, 1),
(3, '0772.000000', '166.700.000', 1, 2, 1),
(4, '0937.222222', '2.000.000.000', 1, 2, 1),
(5, '0907.777777', '3.300.000.000', 1, 2, 1),
(6, '0905.999999', '7.900.000.000', 1, 2, 1),
(7, '0933.999999', '8.900.000.000', 1, 2, 1),
(8, '09023.99999', '1.600.000.000', 2, 1, 1),
(9, '07789.00000', '58.820.000', 2, 2, 1),
(10, '078.77.00000', '166.700.000', 2, 2, 1),
(11, '07677.00000', '48.000.000', 2, 2, 1),
(12, '07727.44444', '46.000.000', 2, 2, 1),
(13, '07777.99999', '3.500.000.000', 2, 2, 1),
(14, '093.557.8888', '299.000.000', 3, 2, 1),
(15, '077.566.8888', '225.000.000', 3, 1, 0),
(16, '0784.25.4444', '8.000.000', 3, 1, 0),
(17, '0764.03.5555', '24.900.000', 3, 2, 1),
(18, '078.220.8888', '85.000.000', 3, 2, 1),
(19, '0899.75.1939', '700.000', 4, 1, 1),
(20, '0938.250.638', '1.300.000', 4, 2, 1),
(21, '0705.47.3939', '4.500.000', 4, 2, 1),
(22, '090.62.01238', '1.750.000', 4, 2, 1),
(23, '077.424.3939', '4.500.000', 4, 2, 1),
(24, '0908.237.038', '700.000', 4, 1, 0),
(25, '0938.250.638', '1.350.000', 4, 1, 1),
(26, '0793.721102', '1.100.000', 6, 1, 0),
(27, '078.3561102', '1.250.000', 6, 1, 1),
(28, '0937.191102', '2.500.000', 6, 2, 1),
(29, '0904.97.1102', '1.800.000', 6, 2, 1),
(30, '0936.251102', '3.000.000', 6, 2, 1),
(31, '0775.28.3888', '5.800.000', 7, 2, 1),
(32, '0773.259.888', '6.000.000', 7, 2, 1),
(33, '0901.888.777', '135.000.000', 7, 2, 1),
(34, '0708.463.555', '700.000', 7, 2, 1),
(35, '0905.333333', ' 1.500.000.000', 1, 2, 1),
(36, '0908.111.111', '990.000.000', 1, 1, 1),
(37, '0772.000000', '166.700.000', 1, 1, 1),
(38, '0937.222222', '2.000.000.000', 1, 2, 1),
(39, '0905.777777', '3.300.000.000', 1, 2, 1),
(40, '0905.999999', '7.900.000.000', 1, 1, 0),
(41, '0933.999999', '8.900.000.000', 1, 1, 0),
(42, '09023.99999', '1.600.000.000', 2, 2, 1),
(43, '07789.00000', '58.820.000', 2, 1, 1),
(44, '078.77.00000', '166.700.000', 2, 2, 1),
(45, '07677.00000', '48.000.000', 2, 2, 1),
(46, '07726.44444', '46.000.000', 2, 1, 1),
(47, '07777.99999', '3.500.000.000', 2, 2, 1),
(48, '093.557.8888', '299.000.000', 3, 1, 1),
(49, '077.566.8888', '225.000.000', 3, 1, 0),
(50, '0784.25.4444', '8.000.000', 3, 2, 1),
(51, '0764.03.5555', '24.900.000', 3, 1, 0),
(52, '078.220.8888', '85.000.000', 3, 2, 1),
(53, '0899.75.1939', '700.000', 4, 2, 1),
(54, '0938.250.638', '1.300.000', 4, 2, 1),
(55, '0705.47.3939', '4.500.000', 4, 2, 1),
(56, '090.62.01238', '1.750.000', 4, 2, 1),
(57, '077.424.3939', '4.500.000', 4, 1, 1),
(58, '0908.237.038', '700.000', 4, 2, 1),
(59, '0938.250.638', '1.350.000', 4, 2, 1),
(60, '0793.721102', '1.100.000', 6, 1, 1),
(61, '078.3561102', '1.250.000', 6, 2, 1),
(62, '0937.191102', '2.500.000', 6, 2, 1),
(63, '0904.97.1102', '1.800.000', 6, 1, 1),
(64, '0936.251102', '3.000.000', 6, 1, 0),
(65, '0775.28.3888', '5.800.000', 7, 1, 1),
(66, '0773.259.888', '6.000.000', 7, 1, 0),
(67, '0901.888.777', '135.000.000', 7, 1, 0),
(68, '0708.463.555', '700.000', 7, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thanhpho`
--

CREATE TABLE `thanhpho` (
  `id_thanhpho` int(10) NOT NULL,
  `thanhpho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thanhpho`
--

INSERT INTO `thanhpho` (`id_thanhpho`, `thanhpho`) VALUES
(1, ' Hà Nội'),
(2, ' Hà Giang'),
(3, ' Cao Bằng'),
(4, ' Bắc Kạn'),
(5, ' Tuyên Quang'),
(6, ' Lào Cai'),
(7, ' Điện Biên'),
(8, ' Lai Châu'),
(9, ' Sơn La'),
(10, ' Yên Bái'),
(11, ' Hoà Bình'),
(12, ' Thái Nguyên'),
(13, ' Lạng Sơn'),
(14, ' Quảng Ninh'),
(15, ' Bắc Giang'),
(16, ' Phú Thọ'),
(17, ' Vĩnh Phúc'),
(18, ' Bắc Ninh'),
(19, ' Hải Dương'),
(20, ' Hải Phòng'),
(21, ' Hưng Yên'),
(22, ' Thái Bình'),
(23, ' Hà Nam'),
(24, ' Nam Định'),
(25, ' Ninh Bình'),
(26, ' Thanh Hóa'),
(27, ' Nghệ An'),
(28, ' Hà Tĩnh'),
(29, ' Quảng Bình'),
(30, ' Quảng Trị'),
(31, ' Thừa Thiên Huế'),
(32, ' Đà Nẵng'),
(33, ' Quảng Nam'),
(34, ' Quảng Ngãi'),
(35, ' Bình Định'),
(36, ' Phú Yên'),
(37, ' Khánh Hòa'),
(38, ' Ninh Thuận'),
(39, ' Bình Thuận'),
(40, ' Kon Tum'),
(41, ' Gia Lai'),
(42, ' Đắk Lắk'),
(43, ' Đắk Nông'),
(44, ' Lâm Đồng'),
(45, ' Bình Phước'),
(46, ' Tây Ninh'),
(47, ' Bình Dương'),
(48, ' Đồng Nai'),
(49, ' Bà Rịa - Vũng Tàu'),
(50, ' Hồ Chí Minh'),
(51, ' Long An'),
(52, ' Tiền Giang'),
(53, ' Bến Tre'),
(54, ' Trà Vinh'),
(55, ' Vĩnh Long'),
(56, ' Đồng Tháp'),
(57, ' An Giang'),
(58, ' Kiên Giang'),
(59, ' Cần Thơ'),
(60, ' Hậu Giang'),
(61, ' Sóc Trăng'),
(62, ' Bạc Liêu'),
(63, ' Cà Mau');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `Tieude` varchar(1000) NOT NULL,
  `Noidung` varchar(10000) NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `Ngaydang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tintuc`, `id_user`, `Tieude`, `Noidung`, `Anh`, `Ngaydang`) VALUES
(1, 1, 'Ý nghĩa đuôi số 72 trong sim điện thoại', '<p><strong><em>Số 72 c&oacute; thể được hiểu theo nghĩa l&agrave; con số mang sức mạnh thay đổi... nhưng&nbsp;<a href=\"https://simsodep.vn/p/y-nghia-duoi-so-72-trong-sim-dien-thoai\">&yacute; nghĩa số 72</a>&nbsp;trong nhiều quan niệm c&ograve;n hơn thế nữa.</em></strong></p>\r\n\r\n<h2><strong><strong>Quan niệm d&acirc;n gian về &yacute; nghĩa số 72</strong></strong></h2>\r\n\r\n<p>Trong c&aacute;c con số từ 00 đến 99, số 72 l&agrave; con số kh&aacute; đặc biệt. Con số gắn liền với tuổi thơ của nhiều người thế hệ 8x, 9x.</p>\r\n\r\n<p><img alt=\"\" src=\"https://static.thegioisim.com/uploads/ck/8704ef9b-389d-4ead-845f-eb27bb1e9b83-y-nghia-duoi-so-72-trong-sim-dien-thoai.jpg\" /></p>\r\n\r\n<p><em>Quan niệm d&acirc;n gian về &yacute; nghĩa số 72</em></p>\r\n\r\n<p>Nếu bạn đ&atilde; từng được xem bộ phim T&acirc;y Du K&yacute;, số 72 gắn liền với nh&acirc;n vật T&ocirc;n Ngộ Kh&ocirc;ng. Với 72 ph&eacute;p biến h&oacute;a thần th&ocirc;ng quảng đại, Ngộ Kh&ocirc;ng c&ugrave;ng c&aacute;c đồ đệ ph&ograve; t&aacute; Đường Tăng đến được T&acirc;y Phương để t&igrave;m được Ch&acirc;n Kinh, t&igrave;m đến đạo l&yacute;.</p>\r\n\r\n<p>Ngộ Kh&ocirc;ng l&agrave; nh&acirc;n vật tiểu thuyết, tượng trưng cho tr&iacute; tuệ, sự cải h&oacute;a. Bởi thế, &yacute; nghĩa của số 72 c&ograve;n được xem l&agrave; con số của sự thi&ecirc;n biến vạn biến, đại diện cho tr&iacute; tuệ v&agrave; những th&agrave;nh tựu to lớn của con người.</p>\r\n\r\n<p>Trong văn h&oacute;a của nhiều quốc gia, số 7 l&agrave; con số may mắn, mang sức mạnh, năng lượng c&aacute;t l&agrave;nh. Số 2 l&agrave; con số vạn tuế, tượng trưng cho sự m&atilde;i m&atilde;i, sự c&acirc;n bằng, sự gắn kết bền chặt.&nbsp;&Yacute; nghĩa số 72&nbsp;luận theo quan niệm d&acirc;n gian l&agrave; &ldquo;vạn điều may mắn&rdquo;.</p>\r\n\r\n<h2><strong><strong>&Yacute; nghĩa số 72 theo quan niệm phong thủy</strong></strong></h2>\r\n\r\n<p>D&ugrave; l&agrave; theo g&oacute;c nh&igrave;n của d&acirc;n gian hay phong thủy, mọi người đều tin rằng: một khi đ&atilde; sở hữu cho m&igrave;nh một con số đẹp th&igrave; n&oacute; sẽ mang lại cho ch&uacute;ng ta những điều tốt đẹp v&agrave; ngược lại. Vậy, l&agrave;m sao để tối ưu h&oacute;a những gi&aacute; trị tốt đẹp v&agrave; khắc chế những điều xấu xa từ những con số. Ch&uacute;ng ta h&atilde;y c&ugrave;ng t&igrave;m hiểu kỹ hơn về đặc t&iacute;nh của n&oacute; th&ocirc;ng qua đặc t&iacute;nh của n&oacute; theo quan niệm phong thủy.&nbsp;</p>\r\n\r\n<p>Trong 64 quẻ b&oacute;i của Kinh Dịch, 72 thuộc về quẻ Sơn Trạch Tổn, tức l&agrave; suy giảm. Tượng quẻ nghĩa l&agrave; Sơn hạ hữu Trạch, &yacute; chỉ dưới n&uacute;i c&oacute; đầm.&nbsp;</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một quẻ mang điềm trung b&igrave;nh. Trong xấu c&oacute; tốt. Điều n&agrave;y muốn n&oacute;i với người bắt được quẻ n&agrave;y rằng: Khả năng phải chịu những tổn thương l&agrave; điều kh&oacute; tr&aacute;nh khỏi. Tuy vậy, bạn cũng đừng cố học c&aacute;ch chấp nhận n&oacute; như một lẽ đương nhi&ecirc;n, để tr&aacute;nh phải chịu thiệt hại từ những điều kh&ocirc;ng đ&aacute;ng, kh&ocirc;ng phải l&agrave; của bạn.&nbsp;</p>\r\n\r\n<p>Ta c&oacute;, số 72 thuộc h&agrave;nh Kim. Do đ&oacute;, theo tương sinh - tương hỗ, con số n&agrave;y ph&ugrave; hợp với người mang mệnh Thủy v&agrave; mệnh Kim. Bởi v&igrave;, Kim sinh Thủy n&ecirc;n khi mệnh Kim gặp mệnh Thủy sẽ mang rất nhiều may mắn v&agrave; cơ hội đến cho nhau. C&ugrave;ng với đ&oacute; Kim v&agrave; Kim th&igrave; tương hỗ lẫn nhau, người c&ugrave;ng ch&iacute; hướng, c&ugrave;ng suy nghĩ th&igrave; sẽ dễ d&agrave;ng thấu hiểu v&agrave; gi&uacute;p đỡ nhau ph&aacute;t triển.</p>\r\n\r\n<p>Mặt kh&aacute;c, trong mối quan hệ tương khắc, Kim khắc Mộc. Thế n&ecirc;n người mang mệnh Mộc sẽ kh&ocirc;ng nhận được sự gi&uacute;p đỡ từ con số n&agrave;y m&agrave; ngược lại, n&oacute; c&ograve;n c&oacute; thể mang đến nhiều phiền phức cho bạn. Chủ nh&acirc;n mang mệnh Mộc n&ecirc;n tr&aacute;nh việc sử dụng con số n&agrave;y trong những trường hợp như số xe, số nh&agrave;, c&ocirc;ng việc, &hellip; để ph&ograve;ng ngừa rủi ro.&nbsp;</p>\r\n\r\n<h2><strong><strong>&Yacute; nghĩa số 72 trong sim số đẹp</strong></strong></h2>\r\n\r\n<p><img alt=\"\" src=\"https://static.thegioisim.com/uploads/ck/6ae04e53-eb07-4db6-bc8b-3d7d17f593c0-y-nghia-so-72.jpg\" /></p>\r\n\r\n<p><em>&Yacute; nghĩa số 72 trong sim số đẹp</em></p>\r\n\r\n<p>Con số 72 trong lĩnh vực sim số đẹp được đ&aacute;nh gi&aacute; cao bởi gi&aacute; trị to lớn m&agrave; họ đem lại. Số n&agrave;y c&oacute; &yacute; nghĩa đem lại sự may mắn v&agrave; t&agrave;i lộc dồi d&agrave;o cho người sở hữu sim số. Một v&agrave;i đu&ocirc;i sim 72 được đ&aacute;nh gi&aacute; đẹp gồm&nbsp;<strong><a href=\"https://simsodep.vn/loai-sim-so-lap.html\">sim lặp</a></strong>&nbsp;7272,&nbsp;<strong><a href=\"https://simsodep.vn/loai-sim-ganh-dao.html\">sim g&aacute;nh</a></strong>&nbsp;7227,&nbsp;<strong><a href=\"https://simsodep.vn/sim-nam-sinh-1971.html\">sim năm sinh</a></strong>&nbsp;1972.</p>\r\n\r\n<p>Khi kết hợp c&aacute;c con số kh&aacute;c với số 72 cũng sẽ gi&uacute;p bạn sở hữu d&atilde;y sim c&oacute; thế số đẹp, tạo ấn tượng với người kh&aacute;c. Dưới đ&acirc;y l&agrave; những bộ số khi kết hợp với &yacute; nghĩa con số 72 m&agrave; bạn c&oacute; thể tham khảo:</p>\r\n\r\n<ul>\r\n	<li>&Yacute; nghĩa sim số 172: khởi đầu cho một sự may mắn được mang đến bởi qu&yacute; nh&acirc;n - những mối quan hệ trong tương lai của bạn</li>\r\n	<li>&Yacute; nghĩa sim số 272: sim số g&aacute;nh. C&acirc;n bằng giữa ph&aacute;t triển c&ocirc;ng việc v&agrave; hạnh ph&uacute;c gia đ&igrave;nh.</li>\r\n	<li>&Yacute; nghĩa sim số 372: mang đến Ph&uacute;c - Lộc - Thọ d&agrave;i l&acirc;u cho bạn</li>\r\n	<li>&Yacute; nghĩa sim số 472: Gặt h&aacute;i được nhiều th&agrave;nh c&ocirc;ng như mong muốn suốt cả bốn m&ugrave;a.&nbsp;</li>\r\n	<li>&Yacute; nghĩa sim số 572: con số tượng trưng cho ph&uacute;c lộc đầy nh&agrave;.</li>\r\n	<li>&Yacute; nghĩa sim số 672: Mang đến Ph&uacute;c Lộc dồi d&agrave;o.&nbsp;</li>\r\n	<li>&Yacute; nghĩa sim số 772: Gặp được rất nhiều người gi&uacute;p đỡ, trong những l&uacute;c kh&oacute; khăn v&agrave; cả sau n&agrave;y. Đ&oacute; sẽ l&agrave; những mối quan hệ rất bền vững.</li>\r\n	<li>&Yacute; nghĩa sim số 872: Ph&aacute;t lộc, ph&aacute;t t&agrave;i, tiền t&agrave;i b&aacute;t ng&aacute;t.</li>\r\n	<li>&Yacute; nghĩa sim số 972: Vạn sự như &yacute;, hạnh ph&uacute;c d&agrave;i l&acirc;u v&agrave; bền vững m&atilde;i về sau.</li>\r\n</ul>\r\n', '72.jpg', '2024-02-28 05:30:28'),
(2, 1, 'Năm mới xuân sang, rộn ràng học tiếng Anh cùng MobiEnglish', '<p>Khuyến mại</p>\r\n\r\n<p><em>MobiEnglish l&agrave; một nền tảng học tiếng Anh chất lượng cao mang thương hiệu MobiFone, thuộc Hệ sinh th&aacute;i gi&aacute;o dục mobiEdu. C&ugrave;ng t&igrave;m hiểu những g&oacute;i cước hot hit với nhiều quyền lợi hấp dẫn m&agrave; mobiEdu gửi tới c&aacute;c bạn.</em></p>\r\n\r\n<p><strong>Học tiếng anh MobiEnglish chuẩn quốc tế</strong></p>\r\n\r\n<p>MobiEnglish l&agrave; nền tảng học tiếng Anh online chất lượng cao theo chuẩn quốc tế được giảng dạy bởi c&aacute;c gi&aacute;o vi&ecirc;n người nước ngo&agrave;i, gi&uacute;p c&aacute;c bạn học tiếng Anh hiệu quả, tiết kiệm, th&ocirc;ng minh. MobiEnglish l&agrave; một sản phẩm được tạo ra th&ocirc;ng qua sự hợp t&aacute;c s&acirc;u rộng giữa việc triển khai c&aacute;c nội dung gi&aacute;o dục chuẩn quốc tế của Educa Corporation kết hợp c&ugrave;ng hạ tầng v&agrave; c&ocirc;ng nghệ của MobiFone để tạo n&ecirc;n một hệ sinh th&aacute;i tiếng Anh d&agrave;nh cho mọi lứa tuổi. MobiEnglish lấy c&ocirc;ng nghệ c&ugrave;ng với c&aacute;c phương ph&aacute;p dạy học ngoại ngữ ti&ecirc;n tiến nhất tr&ecirc;n thế giới l&agrave;m nền tảng ph&aacute;t triển sản phẩm, tất cả &quot;V&igrave; một Việt Nam giỏi Tiếng Anh&quot;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://api.mobifone.vn/images/notifications/1709007595720_%E1%BA%A2nh%20b%C3%A0i%20vi%E1%BA%BFt_505x324.png\" /></p>\r\n\r\n<p><strong>G&oacute;i học tiếng Anh MobiEnglish hot hit</strong></p>\r\n\r\n<ul>\r\n	<li><strong>G&oacute;i cước 1 th&aacute;ng (tặng 07 ng&agrave;y miễn ph&iacute; khi đăng k&iacute; lần đầu)</strong></li>\r\n</ul>\r\n\r\n<p>Soạn ngay DK ME30 gửi 9285 (50.000đ/th&aacute;ng) v&agrave; bạn sẽ nhận được:</p>\r\n\r\n<p>+ 01 t&agrave;i khoản học tiếng Anh MobiEnglish kh&ocirc;ng giới hạn nội dung tại https://mobienglish.vn trong v&ograve;ng 30 ng&agrave;y</p>\r\n\r\n<p>+ Miễn ph&iacute; 07 ng&agrave;y khi lần đầu đăng k&iacute; g&oacute;i cước</p>\r\n\r\n<ul>\r\n	<li><strong>G&oacute;i cước mạng x&atilde; hội ME100</strong></li>\r\n</ul>\r\n\r\n<p>Soạn ngay DK ME100 gửi 9285 (100.000đ/th&aacute;ng) v&agrave; bạn sẽ nhận được:</p>\r\n\r\n<p>+ 01 t&agrave;i khoản học tiếng Anh MobiEnglish kh&ocirc;ng giới hạn nội dung tại https://mobienglish.vn trong v&ograve;ng 30 ng&agrave;y</p>\r\n\r\n<p>+ 1GB/ng&agrave;y truy cập Internet tốc độ cao</p>\r\n\r\n<p>+ Kh&ocirc;ng giới hạn data khi truy cập Tiktok, Facebook, Youtube</p>\r\n\r\n<ul>\r\n	<li><strong>G&oacute;i cước &ldquo;si&ecirc;u data&rdquo; ME159</strong></li>\r\n</ul>\r\n\r\n<p>Soạn ngay DK ME100 gửi 999 (159.000đ/th&aacute;ng) v&agrave; bạn sẽ nhận được:</p>\r\n\r\n<p>+ 01 t&agrave;i khoản học tiếng Anh MobiEnglish kh&ocirc;ng giới hạn nội dung tại https://mobienglish.vn trong v&ograve;ng 30 ng&agrave;y</p>\r\n\r\n<p>+ 180GB/th&aacute;ng truy cập Internet tốc độ cao (tối đa 6GB/ng&agrave;y)</p>\r\n\r\n<p>+ Kh&ocirc;ng giới hạn data khi truy cập Tiktok, Facebook, Youtube</p>\r\n\r\n<p>Mọi th&ocirc;ng tin chi tiết vui l&ograve;ng li&ecirc;n hệ hotline 9090 (200đ/ph&uacute;t) để được hỗ trợ.</p>\r\n', '180gb.png', '2024-02-28 05:30:28'),
(3, 1, 'Nạp thẻ mọi nơi - Tích điểm trọn đời', '<p>Khuyến mại</p>\r\n\r\n<p><em>T&iacute;ch ngay 1% gi&aacute; trị thẻ nạp trọn đời tất cả thu&ecirc; bao khi đăng k&yacute; th&agrave;nh vi&ecirc;n MyPoint - Ứng dụng t&iacute;ch điểm đổi qu&agrave; của MobiFone</em>.</p>\r\n\r\n<p>Nạp tiền điện thoại qua ứng dụng MyPoint hiện đang l&agrave; xu hướng ti&ecirc;u d&ugrave;ng th&ocirc;ng minh m&agrave; rất nhiều người d&ugrave;ng MobiFone lựa chọn. C&aacute;c kh&aacute;ch h&agrave;ng của MobiFone sử dụng MyPoint kh&ocirc;ng chỉ bởi sự thuận tiện v&agrave; nhanh ch&oacute;ng khi nạp tiền m&agrave; c&ograve;n bởi c&aacute;c ưu đ&atilde;i độc quyền, hấp dẫn kh&ocirc;ng chỉ dịch vụ viễn th&ocirc;ng m&agrave; c&ograve;n về dịch vụ mua sắm online.</p>\r\n\r\n<p><img alt=\"\" src=\"https://api.mobifone.vn/images/notifications/1708682561841_505x324%20(8).png\" /></p>\r\n\r\n<p>Theo đ&oacute;, thu&ecirc; bao MobiFone trả trước/trả sau sẽ được t&iacute;ch điểm 1% cho tất cả c&aacute;c giao dịch nạp tiền điện thoại trọn đời sau khi tải v&agrave; đăng k&yacute; ứng dụng MyPoint bất cứ h&igrave;nh thức n&agrave;o (thẻ c&agrave;o , v&iacute; điện tử, ứng dụng ng&acirc;n h&agrave;ng, MyPoint, My MobiFone,..). Ch&iacute;nh s&aacute;ch được &aacute;p dụng đồng thời với tất cả chương tr&igrave;nh khuyến mại kh&aacute;c của MobiFone.&nbsp;</p>\r\n\r\n<p>Điểm t&iacute;ch lũy sẽ d&ugrave;ng để đổi ưu đ&atilde;i viễn th&ocirc;ng như: thẻ nạp điện thoại, dung lượng Data, phiếu giảm gi&aacute; từ +200 thương hiệu đa ng&agrave;nh h&agrave;ng tr&ecirc;n MyPoint.&nbsp;</p>\r\n\r\n<p>Đặc biệt, kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng mất th&ecirc;m chi ph&iacute; n&agrave;o khi đăng k&yacute; v&agrave; sử dụng MyPoint. Mọi hoạt động t&iacute;ch điểm từ MyPoint đều l&agrave; gi&aacute; trị gia tăng cho kh&aacute;ch h&agrave;ng nhằm tri &acirc;n v&agrave; mang tới trải nghiệm tốt hơn cho người d&ugrave;ng MobiFone.&nbsp;</p>\r\n\r\n<p>Hướng dẫn đăng k&yacute; t&iacute;ch điểm cực đơn giản:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Bước 1: Tải ứng dụng tại CHPlay hoặc Appstore</li>\r\n	<li>Bước 2: Đăng k&yacute; bằng số điện thoại MobiFone v&agrave; nhập OTP x&aacute;c thực được gửi về m&aacute;y.</li>\r\n</ul>\r\n\r\n<p>Đăng k&yacute; MyPoint ngay để được t&iacute;ch điểm cho tất cả giao dịch nạp thẻ, mua sắm online v&agrave; nhận g&oacute;i qu&agrave; tặng trị gi&aacute; 624k d&agrave;nh tặng bạn mới trong th&aacute;ng 2/2024:&nbsp;<a href=\"https://bit.ly/WebsiteMBF\">https://bit.ly/WebsiteMBF</a>.</p>\r\n\r\n<p>Xem chi tiết chương tr&igrave;nh khuyến mại cho bạn mới của MyPoint tại đ&acirc;y:&nbsp;<a href=\"https://app.mypoint.com.vn/sms-7ngay90trieu\">https://app.mypoint.com.vn/sms-7ngay90trieu</a></p>\r\n', '1708682561841_505x324 (8).png', '2024-02-28 05:30:28'),
(4, 1, 'Ý nghĩa 9240 là gì trong sim số đẹp và nhiều phương diện khác nhau', '<p>Rất c&oacute; thể bạn đ&atilde; bắt gặp con số 9240 trong biển số xe, sim điện thoại, căn cước c&ocirc;ng d&acirc;n,... Liệu bạn c&oacute; thắc mắc về &yacute; nghĩa của d&atilde;y số n&agrave;y chưa? N&oacute; đại diện cho điều g&igrave;? C&oacute; mang đến may mắn khi sử dụng kh&ocirc;ng? Xem ngay b&agrave;i viết dưới đ&acirc;y để biết &yacute; nghĩa 9240 l&agrave; g&igrave; v&agrave; những th&ocirc;ng tin li&ecirc;n quan.&nbsp;</p>\r\n\r\n<h2><strong>&Yacute; nghĩa d&atilde;y số 9240 l&agrave; g&igrave; trong sim số đẹp</strong></h2>\r\n\r\n<p>X&eacute;t theo phong thủy sim số đẹp, d&atilde;y số 9240 được đ&aacute;nh gi&aacute; l&agrave; tốt, th&iacute;ch hợp để l&agrave;m ăn, kinh doanh. Đ&oacute; l&agrave; v&igrave; n&oacute; mang &yacute; nghĩa &ldquo;Trường Cửu M&atilde;i - Bốn M&ugrave;a Vi&ecirc;n M&atilde;n&rdquo;, tức những điều tốt đẹp sẽ lu&ocirc;n đến với bạn v&agrave; tồn tại m&atilde;i. Để c&oacute; cơ sở luận giải d&atilde;y số sim 9240, c&ugrave;ng x&eacute;t đến &yacute; nghĩa từng con số cấu th&agrave;nh n&ecirc;n n&oacute; dưới đ&acirc;y:</p>\r\n\r\n<p><img alt=\"9420\" src=\"https://tongkhosim.com/public/photos/1/images/disk/2b9535b9-c891-4f07-93ea-0435a1e0d865.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p><em>Con số 9240 mang &yacute; nghĩa về những điều tốt đẹp sẽ đến trong tương lai</em></p>\r\n\r\n<p><strong>+ &Yacute; nghĩa số 9:</strong>&nbsp;Phi&ecirc;n &acirc;m theo H&aacute;n Việt l&agrave; Cửu, con số lớn nhất trong d&atilde;y số tự nhi&ecirc;n, biểu đạt cho sự trường tồn, vĩnh cửu v&agrave; quyền lực. Số 9 l&agrave; con số may mắn, mang lại nhiều điềm l&agrave;nh v&agrave; thuận lợi nếu sở hữu.&nbsp;</p>\r\n\r\n<p><strong>+ &Yacute; nghĩa số 2:</strong>&nbsp;L&agrave; Nhị gắn liền với &yacute; nghĩa m&atilde;i m&atilde;i, đại diện cho sự trường tồn. N&oacute; cũng tượng trưng cho 1 cặp n&ecirc;n h&agrave;m &yacute; chỉ một cặp song hỷ, l&agrave; hạnh ph&uacute;c l&acirc;u bền.&nbsp;</p>\r\n\r\n<p><strong>+ &Yacute; nghĩa số 4:</strong>&nbsp;Đừng vội kết luận số 4 l&agrave; con số tử m&agrave; x&eacute;t theo h&agrave;m nghĩa kh&aacute;c, số 4 đại cho nhiều gi&aacute; trị lớn lao như 4 m&ugrave;a trong năm, tứ linh.&nbsp;</p>\r\n\r\n<p><strong>+ &Yacute; nghĩa số 0:</strong>&nbsp;Đ&acirc;y l&agrave; con số kh&ocirc;ng c&oacute; điểm đầu v&agrave; điểm cuối. Ch&iacute;nh v&igrave; l&agrave; v&ograve;ng tr&ograve;n kh&eacute;p k&iacute;n n&ecirc;n số 0 thể hiện sự trường tồn m&atilde;i m&atilde;i. C&ugrave;ng với đ&oacute;, nếu c&oacute; &yacute; ch&iacute; ki&ecirc;n định, vững chắc th&igrave; d&ugrave; khởi đầu bằng hai b&agrave;n tay trắng vẫn sẽ gặt h&aacute;i được th&agrave;nh c&ocirc;ng về sau.&nbsp;</p>\r\n\r\n<h2><strong>&Yacute; nghĩa d&atilde;y số 9240 tr&ecirc;n những phương diện kh&aacute;c nhau</strong></h2>\r\n\r\n<p>Ngo&agrave;i trong sim số đẹp th&igrave; theo phong thủy, t&igrave;nh y&ecirc;u, thần số học,... d&atilde;y số 9240 đem lại một &yacute; nghĩa kh&aacute;c nhau như sau:</p>\r\n\r\n<h3><strong>X&eacute;t theo kh&iacute;a cạnh phong thủy</strong></h3>\r\n\r\n<p>Theo c&aacute;c chuy&ecirc;n gia phong thủy, số 9240 l&agrave; d&atilde;y số của điềm l&agrave;nh. Mỗi con số trong d&atilde;y 9240 đại diện cho nhiều cung mệnh kh&aacute;c nhau, như mệnh Hỏa (số 9), mệnh Thổ 9 (số 2), mệnh Mộc (số 4) v&agrave; mệnh Thủy (số 0). Theo ngũ h&agrave;nh tương sinh, Hỏa sinh Thổ, Mộc sinh Hỏa, Thủy sinh Mộc n&ecirc;n những ai thuộc cung mệnh n&agrave;y đều c&oacute; thể sử dụng.&nbsp;</p>\r\n\r\n<h3><strong>Theo phương diện t&igrave;nh y&ecirc;u</strong></h3>\r\n\r\n<p>Theo giới trẻ Trung Hoa, mỗi d&atilde;y số sẽ mang một th&ocirc;ng điệp t&igrave;nh y&ecirc;u kh&aacute;c nhau. Ri&ecirc;ng 9240 l&agrave; &ldquo;cả đời y&ecirc;u em/cả đời b&ecirc;n anh&rdquo;, thể hiện t&igrave;nh cảm ngọt ng&agrave;o, l&atilde;ng mạn v&agrave; sự thủy chung s&acirc;u sắc của những cặp đ&ocirc;i y&ecirc;u nhau. Do vậy, nhiều người d&ugrave;ng sim cặp hoặc mua sim tặng cho nhau để b&agrave;y tỏ t&igrave;nh cảm ngọt ng&agrave;o, nồng ấm d&agrave;nh cho đối phương.&nbsp;</p>\r\n\r\n<p><img alt=\"Sim 9420 Trong Tinh Yeu\" src=\"https://tongkhosim.com/public/photos/1/images/disk/6b61c7d6-38bd-4529-9137-d7a676a74942.jpg\" style=\"height:419px; width:800px\" /></p>\r\n\r\n<p><em>9240 mang đến th&ocirc;ng điệp về t&igrave;nh y&ecirc;u l&atilde;ng mạn</em></p>\r\n\r\n<h3><strong>Theo thần số học</strong></h3>\r\n\r\n<p>D&atilde;y số 9240 ứng với con số chủ đạo l&agrave; số 6 trong thần số học. Con số n&agrave;y mang khả năng s&aacute;ng tạo v&ocirc; tận với c&aacute; t&iacute;nh mạnh mẽ, nh&acirc;n &aacute;i v&agrave; dễ bao dung với người kh&aacute;c. Người ứng với con số 6 c&ograve;n thuộc tu&yacute;p th&iacute;ch cống hiến nhưng th&agrave;nh c&ocirc;ng kh&ocirc;ng dễ c&oacute; được. Nếu c&oacute; đến đ&iacute;ch th&agrave;nh c&ocirc;ng th&igrave; phải trải qua nhiều thử th&aacute;ch, ch&ocirc;ng gai.&nbsp;</p>\r\n\r\n<h2><strong>C&oacute; n&ecirc;n d&ugrave;ng 9240 trong sim số đẹp?</strong></h2>\r\n\r\n<p>Khi d&ugrave;ng số 9240 trong sim số đẹp, bạn đ&atilde; tự tạo cho m&igrave;nh nhiều cơ hội trong c&ocirc;ng việc, t&igrave;nh y&ecirc;u v&agrave; cuộc sống. Đ&oacute; sẽ l&agrave; sự may mắn, thịnh vượng v&agrave; gi&uacute;p bạn c&oacute; được cuộc sống trọn vẹn. Số 9240 cho bạn nhiều điều tốt đẹp một c&aacute;ch l&acirc;u d&agrave;i, bền vững.&nbsp;</p>\r\n\r\n<p>Chưa kể, đu&ocirc;i sim 9240 khi kết hợp với c&aacute;c đầu số cổ, c&aacute;c con số đẹp kh&aacute;c c&oacute; trong sim gi&uacute;p bạn khẳng định đẳng cấp ri&ecirc;ng của ch&iacute;nh m&igrave;nh. N&oacute; thể hiện độ chịu chơi của bạn c&ugrave;ng c&aacute; t&iacute;nh mạnh mẽ, ph&oacute;ng kho&aacute;ng. Ch&iacute;nh điều n&agrave;y tạo dấu ấn s&acirc;u sắc với đối t&aacute;c, n&acirc;ng cao cơ hội th&agrave;nh c&ocirc;ng của bạn l&ecirc;n cao.&nbsp;</p>\r\n\r\n<p><img alt=\"9240\" src=\"https://tongkhosim.com/public/photos/1/images/disk/38674b11-a664-4894-a18c-a16410fdbdf6.jpg\" style=\"height:489px; width:800px\" /></p>\r\n\r\n<p><em>Bạn n&ecirc;n lựa chọn sử dụng sim đu&ocirc;i 9240 để thể hiện đẳng cấp của m&igrave;nh</em></p>\r\n\r\n<p>Với chia sẻ về &yacute; nghĩa 9240 l&agrave; g&igrave; trong sim số đẹp v&agrave; phong thủy, t&igrave;nh y&ecirc;u, thần số học, hy vọng bạn đ&atilde; hiểu chi tiết về d&atilde;y số n&agrave;y. Nếu c&oacute; nhu cầu sở hữu sim số đẹp với mức gi&aacute; tốt nhất tr&ecirc;n thị trường, đừng ngần ngại truy cập website của Tổng Kho Sim hoặc li&ecirc;n hệ trực tiếp với nh&acirc;n vi&ecirc;n của ch&uacute;ng t&ocirc;i nh&eacute;!</p>\r\n', 'anh-9240.jpg', '2024-02-28 05:30:28'),
(5, 1, 'Tìm hiểu 9213 là gì? Ý nghĩa dãy 9213 ở các khía cạnh cuộc sống', '<p>9213 l&agrave; g&igrave;? Đ&acirc;y chắc hẳn l&agrave; c&acirc;u hỏi được nhiều người quan t&acirc;m, nhất l&agrave; những ai đam m&ecirc; phong thủy. C&ugrave;ng t&igrave;m hiểu chi tiết v&agrave; ph&acirc;n t&iacute;ch &yacute; nghĩa của d&atilde;y số n&agrave;y trong sim số đẹp cũng như c&aacute;c mặt kh&aacute;c nhau của cuộc sống qua nội dung chi tiết dưới đ&acirc;y.&nbsp;</p>\r\n\r\n<h2><strong>&Yacute; nghĩa 9213 l&agrave; g&igrave; trong sim số đẹp?</strong></h2>\r\n\r\n<p>Trong sim số đẹp, số 9213 l&agrave; d&atilde;y số tốt, mang nhiều điều may cho chủ nh&acirc;n. L&yacute; do l&agrave; v&igrave; d&atilde;y số n&agrave;y c&oacute; nghĩa l&agrave; &ldquo;Đại Trường Cửu M&atilde;i Nhất Tiền T&agrave;i&rdquo;, nghĩa l&agrave; t&agrave;i lộc, tiền t&agrave;i sẽ lu&ocirc;n đến với người sở hữu sim. Để hiểu r&otilde; hơn tại sao lại c&oacute; &yacute; nghĩa n&agrave;y, c&ugrave;ng ph&acirc;n t&iacute;ch chuy&ecirc;n s&acirc;u từng con số, cụ thể:</p>\r\n\r\n<p><img alt=\"Sim so\" src=\"https://tongkhosim.com/public/photos/1/images/disk/fa910d16-c3fd-4402-9724-ab2e4609588c.jpg\" style=\"height:531px; width:800px\" /></p>\r\n\r\n<p><em>Bạn đ&atilde; hiểu r&otilde; &yacute; nghĩa của sim số 9213 chưa?</em></p>\r\n\r\n<h3><strong>&Yacute; nghĩa số 1 - &ldquo;Nhất&rdquo;&nbsp;</strong></h3>\r\n\r\n<p>Nằm ở vị tr&iacute; đầu ti&ecirc;n trong d&atilde;y số tự nhi&ecirc;n n&ecirc;n số 1 đại diện cho sự dẫn đầu, vị tr&iacute; duy nhất. Đ&acirc;y cũng l&agrave; con số được người giữ vai tr&ograve; l&atilde;nh đạo, thủ lĩnh chọn l&agrave;m con số quyền năng nhằm thể hiện sức mạnh, tr&iacute; tuệ v&agrave; t&agrave;i năng.&nbsp;</p>\r\n\r\n<h3><strong>&Yacute; nghĩa số 2 - &ldquo;M&atilde;i&rdquo;</strong></h3>\r\n\r\n<p>Trong tiếng H&aacute;n Việt, số 2 đọc l&agrave; &ldquo;Nhị&rdquo;, con số mang &yacute; nghĩa của sự c&acirc;n bằng, h&agrave;i h&ograve;a. Kh&ocirc;ng chỉ vậy, n&oacute; c&ograve;n được gọi l&agrave; con số &ldquo;vĩnh hằng&rdquo; để thể hiện t&igrave;nh y&ecirc;u đ&ocirc;i lứa, hạnh ph&uacute;c m&atilde;i m&atilde;i. </p>\r\n\r\n<h3><strong>&Yacute; nghĩa số 3 - &ldquo;T&agrave;i&rdquo;</strong></h3>\r\n\r\n<p>Theo tiếng H&aacute;n, số 3 đọc l&agrave; &ldquo;Tam&rdquo;, chệch nghĩa th&agrave;nh &ldquo;T&agrave;i&rdquo;. Do đ&oacute;, số 3 lu&ocirc;n gắn liền với t&agrave;i lộc, tiền t&agrave;i v&agrave; sự may mắn. Dễ thấy, số 3 c&ograve;n được d&acirc;n gian xem l&agrave; hiện th&acirc;n của &ldquo;Ph&uacute;c - Lộc - Thọ&rdquo; mang đến nhiều b&igrave;nh an v&agrave; lộc cho người sở hữu. Chưa kể, số 3 gắn liền với h&igrave;nh ảnh &ldquo;Kiềng 3 Ch&acirc;n&rdquo;, l&agrave; &yacute; ch&iacute; ki&ecirc;n định v&agrave; vững chắc kh&ocirc;ng thể n&agrave;o lay động.&nbsp;</p>\r\n\r\n<h3><strong>&Yacute; nghĩa số 9 - &ldquo;Vĩnh Cửu&rdquo;</strong></h3>\r\n\r\n<p>L&agrave; con số mang gi&aacute; trị lớn nhất trong d&atilde;y số tự nhi&ecirc;n, số 9 đại diện cho quyền lực, sức mạnh. C&ugrave;ng với đ&oacute;, số 9 đọc theo tiếng H&aacute;n l&agrave; &ldquo;Cửu&rdquo;, gắn liền với sự trường tồn, vĩnh cửu. N&oacute; cũng gắn với sự t&iacute;ch &ldquo;Sơn Tinh Thủy Tinh&rdquo; khi Vua H&ugrave;ng đ&atilde; d&ugrave;ng số 9 để nhắc đến c&aacute;c lễ vật m&agrave; Người cần: Voi ch&iacute;n ng&agrave;, g&agrave; ch&iacute;n cựa, ngựa ch&iacute;n hồng mao&rdquo;.</p>\r\n\r\n<h2><strong>&Yacute; nghĩa của d&atilde;y 9213 ở c&aacute;c kh&iacute;a cạnh kh&aacute;c nhau trong cuộc sống</strong></h2>\r\n\r\n<p>Với mỗi mặt như phong thủy, t&igrave;nh y&ecirc;u, thần số học hay biển số xe, d&atilde;y số 9213 sẽ ứng với &yacute; nghĩa kh&aacute;c nhau. Hiểu được từng gi&aacute; trị sẽ gi&uacute;p bạn ch&oacute; số sử dụng ph&ugrave; hợp.&nbsp;</p>\r\n\r\n<h3><strong>Trong phong thủy</strong></h3>\r\n\r\n<p>D&atilde;y số 9213 c&oacute; gi&aacute; trị trong phong thủy cao, v&igrave; n&oacute; được tạo n&ecirc;n từ những con số mang &yacute; nghĩa tốt. Cụ thể: số 9 - Trường tồn vĩnh cửu, số 1 l&agrave; vị tr&iacute; dẫn đầu, số 2 l&agrave; m&atilde;i m&atilde;i v&agrave; số 3 l&agrave; t&agrave;i lộc. Vậy n&ecirc;n khi sở hữu d&atilde;y số n&agrave;y, bạn sẽ gặt h&aacute;i nhiều may mắn, th&agrave;nh c&ocirc;ng v&agrave; thuận buồm xu&ocirc;i gi&oacute;.&nbsp;</p>\r\n\r\n<p>Theo ngũ h&agrave;nh tương sinh, số 9213 hợp với những người mang cung mệnh Hỏa v&agrave; Thổ. Bởi số 3 v&agrave; 9 ứng với mệnh Hỏa c&ograve;n số 2 l&agrave; mệnh Thổ, Hỏa sinh Thổ n&ecirc;n những người thuộc 2 cung mệnh n&agrave;y sẽ nhận về nhiều may mắn, t&agrave;i lộc.&nbsp;</p>\r\n\r\n<p><img alt=\"Menh Hoa\" src=\"https://tongkhosim.com/public/photos/1/images/disk/c5619f4c-5077-4737-b0cd-bfd5f9a197c7.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p><em>Những người mệnh Hỏa rất hợp với sim số đu&ocirc;i 9213</em></p>\r\n\r\n<h3><strong>Trong biển số xe</strong></h3>\r\n\r\n<p>Đối với biển số xe, d&atilde;y số 9213 cũng thể hiện những điều t&iacute;ch cực. Theo đ&oacute;, n&oacute; mang lại may mắn, b&igrave;nh an cho người chủ sở hữu tr&ecirc;n mọi cung đường nhờ nhận được bề tr&ecirc;n ph&ugrave; trợ, an l&agrave;nh.&nbsp;</p>\r\n\r\n<h3><strong>Trong t&igrave;nh y&ecirc;u</strong></h3>\r\n\r\n<p>Theo giới trẻ Trung Hoa, d&atilde;y số 9213 l&agrave; mật m&atilde; t&igrave;nh y&ecirc;u với nội dung &ldquo;y&ecirc;u em trọn đời/y&ecirc;u anh trọn đời&rdquo;. Đ&acirc;y l&agrave; một lời b&agrave;y tỏ t&igrave;nh cảm thay cho lời muốn n&oacute;i để nhắn gửi đến người m&igrave;nh y&ecirc;u. Ngo&agrave;i ra, bạn cũng c&oacute; thể mua sim số đẹp chứa d&atilde;y số sim n&agrave;y để l&agrave;m qu&agrave; tặng người y&ecirc;u hoặc l&agrave;m sim cặp.&nbsp;</p>\r\n\r\n<p><img alt=\"9213 Nghia La Gi\" src=\"https://tongkhosim.com/public/photos/1/images/disk/fbc863be-5c67-40de-b370-9332ffa51daf.jpg\" style=\"height:514px; width:800px\" /></p>\r\n\r\n<p><em>Trong t&igrave;nh y&ecirc;u 9213 c&oacute; nghĩa l&agrave; y&ecirc;u trọn đời</em></p>\r\n', 'chon-sim-khi-mua-sim-di-dong-1.jpg', '2024-02-28 05:30:28'),
(6, 1, 'Giải mã số 277353 - Những thông điệp ý nghĩa nhất định bạn phải biết', '<p>Bạn đ&atilde; từng nghe về d&atilde;y số 277353 chưa? Đ&acirc;y l&agrave; một chuỗi số đặc biệt, được coi l&agrave; may mắn đem lại nhiều điều tốt đẹp trong cuộc sống, t&igrave;nh y&ecirc;u v&agrave; phong thủy. Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ đưa ra những th&ocirc;ng tin hữu &iacute;ch để gi&uacute;p bạn hiểu r&otilde; hơn về &yacute; nghĩa của d&atilde;y số từ nhiều g&oacute;c độ kh&aacute;c nhau. H&atilde;y c&ugrave;ng t&igrave;m hiểu ngay sau đ&acirc;y nh&eacute;!</p>\r\n\r\n<h2><strong>Giải m&atilde; &yacute; nghĩa c&aacute;c con số trong d&atilde;y số 277353</strong></h2>\r\n\r\n<p>277353 l&agrave; một d&atilde;y số đẹp v&agrave; c&oacute; nhiều &yacute; nghĩa kh&aacute;c nhau. D&atilde;y số n&agrave;y được cấu tạo bởi c&aacute;c con số 2, 7, 3, 5 v&agrave; ch&uacute;ng đều mang một &yacute; nghĩa ri&ecirc;ng biệt. Cụ thể:</p>\r\n\r\n<h3><em>&Yacute; nghĩa số 2</em></h3>\r\n\r\n<p>Số 2 thể hiện sự c&acirc;n bằng v&agrave; h&agrave;i h&ograve;a, tượng trưng cho những gi&aacute; trị tốt đẹp trong cuộc sống. Như một c&acirc;u đối đỏ treo trước cửa nh&agrave; v&agrave;o dịp Tết, con số 2 mang &yacute; nghĩa may mắn v&agrave; thịnh vượng. Ngo&agrave;i ra, con số 2 c&ograve;n c&oacute; &yacute; nghĩa đặc biệt trong t&igrave;nh y&ecirc;u, thể hiện sự vĩnh hằng của mối quan hệ đ&ocirc;i lứa.</p>\r\n\r\n<h3><em>&Yacute; nghĩa số 7</em></h3>\r\n\r\n<p>Mặc d&ugrave; theo &acirc;m H&aacute;n, số 7 c&oacute; nghĩa l&agrave; &quot;Thất&quot; - một từ mang &yacute; nghĩa mất m&aacute;t, kh&ocirc;ng may mắn. Tuy nhi&ecirc;n, trong trường hợp của d&atilde;y số 277353, số 7 lại được coi l&agrave; một con số mang lại điềm l&agrave;nh. L&yacute; do l&agrave; con số 7 được li&ecirc;n kết với h&igrave;nh ảnh đầy t&acirc;m linh khi Đức Phật ch&agrave;o đời v&agrave; Ng&agrave;i đ&atilde; đứng dậy bước đi 7 bước. Tại mỗi bước ch&acirc;n Người đặt xuống đều nở ra 7 đ&oacute;a hoa sen rực rỡ v&agrave; xinh đẹp.</p>\r\n\r\n<h3><em>&Yacute; nghĩa số 3</em></h3>\r\n\r\n<p>Số 3 được xem l&agrave; biểu tượng của t&agrave;i lộc, tr&iacute; tuệ v&agrave; sự ph&uacute;c đức. Con số n&agrave;y c&ograve;n được v&iacute; như một chiếc kiềng ba ch&acirc;n, tượng trưng cho sự vững chắc v&agrave; ổn định. Theo t&iacute;n ngưỡng d&acirc;n gian, số 3 c&ograve;n đại diện cho ba vị thần Ph&uacute;c - Lộc - Thọ, mang đến sự gi&agrave;u c&oacute;, an khang v&agrave; may mắn cho con người</p>\r\n\r\n<h3><em>&Yacute; nghĩa số 5</em></h3>\r\n\r\n<p>Số 5 mang &yacute; nghĩa v&ocirc; c&ugrave;ng đặc biệt v&agrave; đa dạng. Đ&oacute; l&agrave; con số của sự sinh tức, mang đến t&agrave;i lộc, ph&uacute;c lộc. Trong d&atilde;y số tự nhi&ecirc;n 277353, số 5 đứng ở vị tr&iacute; trung t&acirc;m, đại diện cho sự c&acirc;n bằng, ổn định. Đặc biệt c&ograve;n thể hiện h&igrave;nh ảnh 5 ch&ograve;m sao trong bản mệnh Ngũ H&agrave;nh, năm ngũ đức của con người v&agrave; năm ngũ ph&uacute;c. Tất cả đều đại diện cho một loạt c&aacute;c gi&aacute; trị tốt đẹp li&ecirc;n quan đến sự gi&agrave;u c&oacute;, quyền uy, sức khỏe, an khang v&agrave; thịnh vượng.</p>\r\n\r\n<p><img alt=\"Số 277353\" src=\"https://tongkhosim.com/public/photos/1/images/disk/bbcb43f3-3c4d-4f59-95f2-8a52ede707dd.png\" style=\"height:630px; width:1200px\" /><em>&Yacute; nghĩa số 277353</em></p>\r\n\r\n<h2><strong>&Yacute; nghĩa số 277353 l&agrave; g&igrave; ở nhiều g&oacute;c độ kh&aacute;c nhau?</strong></h2>\r\n\r\n<p>Khi gh&eacute;p c&aacute;c số lại th&agrave;nh d&atilde;y số 277353, ta c&oacute; một d&atilde;y số mang &yacute; nghĩa rất đẹp tr&ecirc;n nhiều kh&iacute;a cạnh v&agrave; thu h&uacute;t người sở hữu.</p>\r\n\r\n<h3><strong><em>&Yacute; nghĩa d&atilde;y số 277353 trong phong thủy</em></strong></h3>\r\n\r\n<p>Theo c&aacute;c chuy&ecirc;n gia phong thủy, 277353 được đ&aacute;nh gi&aacute; l&agrave; một d&atilde;y số tốt để sử dụng l&agrave;m sim gi&uacute;p k&iacute;ch hoạt sự may mắn, t&agrave;i lộc. Đặc biệt, th&iacute;ch hợp với người mệnh Thổ c&oacute; số 2 v&agrave; số 5. B&ecirc;n cạnh đ&oacute;, số 33 ứng với người mệnh Mộc c&ograve;n số 77 li&ecirc;n quan người mệnh Kim. Sở hữu sim số 277355 l&agrave; c&aacute;ch gi&uacute;p bạn thu h&uacute;t sự th&agrave;nh c&ocirc;ng, gi&agrave;u sang v&agrave; ph&uacute; qu&yacute;.</p>\r\n\r\n<h3><strong><em>&Yacute; nghĩa 277535 trong đời sống</em></strong></h3>\r\n\r\n<p>Nếu c&oacute; số 277353 đồng h&agrave;nh, bạn sẽ c&oacute; được cuộc sống c&acirc;n bằng v&agrave; ổn định. Bởi con số 7 li&ecirc;n quan đến h&igrave;nh ảnh giải nghĩa kể tr&ecirc;n v&agrave; sử dụng n&oacute;, bạn sẽ được bề tr&ecirc;n ph&ugrave; hộ, che chở từ đ&oacute; c&oacute; được đời sống ấm no, hạnh ph&uacute;c vi&ecirc;n m&atilde;n. Kh&ocirc;ng chỉ vậy, trong t&igrave;nh y&ecirc;u số 277535 mang &yacute; nghĩa nhớ nhung, y&ecirc;u thương thể hiện t&igrave;nh cảm y&ecirc;u thương mặn đồng, chung thủy.</p>\r\n\r\n<h3><strong><em>&Yacute; nghĩa trong thần số học</em></strong></h3>\r\n\r\n<p>Nếu t&iacute;nh theo thần số học, số chủ đạo của d&atilde;y 277353 sẽ l&agrave; 9. Con số n&agrave;y cho biết bạn l&agrave; người c&oacute; t&iacute;nh c&aacute;ch nh&acirc;n &aacute;i, độ lượng v&agrave; c&oacute; tr&aacute;i tim nh&acirc;n hậu. Đặc biệt c&oacute; t&agrave;i năng nghệ thuật v&agrave; s&aacute;ng tạo cao. Bạn c&oacute; thể sở hữu sim số n&agrave;y để khắc phục t&iacute;nh c&aacute;ch cứng nhắc, lạnh l&ugrave;ng hoặc bổ sung những thiếu s&oacute;t khi m&igrave;nh kh&ocirc;ng số 9 trong số chủ đạo.</p>\r\n\r\n<p><img alt=\"Sim So Dep\" src=\"https://tongkhosim.com/public/photos/1/images/disk/2aedfeed-279d-4abe-93bd-80614c6fd867.jpg\" style=\"height:505px; width:800px\" /><em>&Yacute; nghĩa số 277353 tr&ecirc;n nhiều kh&iacute;a cạnh</em></p>\r\n', 'sim-gia-re-ha-noi-9.png', '2024-02-28 05:30:28'),
(7, 1, 'Bật mí ý nghĩa các con số từ 0 đến 9 mà bạn chưa biết', '<h3><strong>1. &Yacute; nghĩa của số 0</strong></h3>\r\n\r\n<p>Số 0 l&agrave; sự thể hiện của mọi sự việc bắt đầu từ điểm xuất ph&aacute;t. Mọi c&aacute;i đều bắt đầu từ số 0. Vậy n&ecirc;n, khi bạn kh&ocirc;ng c&oacute; g&igrave; trong tay th&igrave; cũng đừng nản ch&iacute;, v&igrave; bạn chỉ mới đứng ở vạch xuất ph&aacute;t m&agrave; th&ocirc;i!</p>\r\n\r\n<h3><strong>2. &Yacute; nghĩa của số 1</strong></h3>\r\n\r\n<p>L&agrave; con số của c&aacute;c vị thần th&aacute;nh, của ho&agrave;nh đồ, được hiểu như l&agrave; con trai của c&otilde;i trời. Số 1 c&oacute; &yacute; nghĩa l&agrave; tượng trưng c&aacute;i&nbsp;<strong>đỉnh tối thượng</strong>, đỉnh n&uacute;i cao &ndash; độc nhất kh&ocirc;ng c&ograve;n ai kh&aacute;c nữa. Ch&uacute;ng ta, con người kh&ocirc;ng thể nắm giữ vị tr&iacute; n&agrave;y l&acirc;u d&agrave;i, v&igrave; n&oacute; c&oacute; thể đơn độc v&agrave; hiểm ngh&egrave;o, bởi ch&uacute;ng ta kh&ocirc;ng phải l&agrave; thần th&aacute;nh. Chỉ c&oacute; thần th&aacute;nh mới c&oacute; thể nắm giữ vị tr&iacute; n&agrave;y m&atilde;i m&atilde;i.</p>\r\n\r\n<h3><strong>3. &Yacute; nghĩa của số&nbsp; 2</strong></h3>\r\n\r\n<p>Tượng trưng l&agrave; một cặp, một đ&ocirc;i, một&nbsp;<strong>con số hạnh ph&uacute;c</strong>&nbsp;(song hỷ) v&agrave; điều h&agrave;nh thuận lợi cho những sự kiện như sinh nhật, cưới hỏi, hội h&egrave;. Số hai tượng trưng sự c&acirc;n bằng &acirc;m dương kết hợp tạo th&agrave;nh th&aacute;i lưu hay l&agrave; nguồn gốc của vạn vật. C&aacute;c c&acirc;u đối đỏ may mắn thường được d&aacute;n trước cửa nh&agrave; cổng ch&iacute;nh v&agrave;o dịp đầu năm mới.</p>\r\n\r\n<p><img alt=\"\" src=\"https://simthanhcong.vn/images/webs/demo.appsim.vn/ed9e267f2f237267a5069a1328417b2e_y-nghia-con-so%20(1).jpg\" /></p>\r\n\r\n<h3><strong>4. &Yacute; nghĩa của số 3</strong></h3>\r\n\r\n<p>Được xem l&agrave;&nbsp;<strong>con số vững chắc</strong>, như kiếng ba ch&acirc;n l&agrave; một h&igrave;nh thức vững chắc nhất. Người Trung Quốc&nbsp;c&oacute; c&acirc;u &ldquo;ba với ba l&agrave; m&atilde;i m&atilde;i&rdquo; (bất tận) v&agrave; biểu tượng hy vọng trường thọ. Phong thủy d&ugrave;ng nhiều lĩnh vực số học trong việc b&agrave;i tr&iacute; c&aacute;c đồ vật v&agrave; con số ba l&agrave; con số đặc biệt hữu dụng cho việc tăng th&ecirc;m vẻ vững chắc khi đập mắt v&agrave;o v&agrave; sự h&agrave;i h&ograve;a của một m&ocirc;i trường.</p>\r\n\r\n<h3><strong>5. &Yacute; nghĩa của số 4</strong></h3>\r\n\r\n<p>L&agrave; sự h&igrave;nh th&agrave;nh của hai đ&ocirc;i. Hai cặp chắc hẳn phải tốt l&agrave;nh, thuận lợi nhưng trong c&aacute;ch ph&aacute;t &acirc;m tiếng Trung Hoa&nbsp;n&oacute; giống như chữ &ldquo;tử&rdquo; (chết). V&igrave; thế sự kết hợp n&agrave;y kh&ocirc;ng được tốt đẹp lắm. Thuật phong thủy t&igrave;m c&aacute;ch tr&aacute;nh bất cứ sự b&agrave;i tr&iacute; c&oacute; li&ecirc;n quan đến con số bốn.</p>\r\n\r\n<p><strong>6. &Yacute; nghĩa của số 5</strong></p>\r\n\r\n<p>Tượng trưng cho danh dự, uy quyền, quyền lực. Số năm tượng trưng cho&nbsp;<strong>trường thọ v&agrave; bất diệt</strong>. Số 5 c&oacute; &yacute; nghĩa l&agrave; một con số tuyệt vời d&ugrave;ng trong việc b&agrave;i tr&iacute; phong thủy,&nbsp;nắm giữ sự thịnh vượng v&agrave; hạnh ph&uacute;c cho mỗi gia đ&igrave;nh.</p>\r\n\r\n<h3><strong>7. &Yacute; nghĩa của số 6</strong></h3>\r\n\r\n<p>Số 6 l&agrave; &quot;<strong>Lộc</strong>&quot; gấp đ&ocirc;i của số ba v&agrave; như thế l&agrave; điềm l&agrave;nh, thuận lợi. Ba cộng th&ecirc;m s&aacute;u l&agrave; ch&iacute;n v&agrave; c&ugrave;ng nhau tạo th&agrave;nh nh&oacute;m ba con số may mắn. Một sự b&agrave;i tr&iacute; d&ugrave;ng bất cứ đồ vật c&oacute; 6, 9, 3 m&oacute;n đều tốt cho việc h&ograve;a giải những khu vực xấu hoặc những nơi hướng xấu.</p>\r\n\r\n<h3><strong>8. &Yacute; nghĩa của số 7</strong></h3>\r\n\r\n<p>Số bảy l&agrave; con số c&oacute; sức mạnh kỳ diệu với những nguồn gốc truyền thuyết s&acirc;u sắc. Đ&oacute; l&agrave; 7 sao v&agrave; c&acirc;y gươm 7 sao d&ugrave;ng trong nghi lễ đạo L&atilde;o, tượng trưng cho sức mạnh đẩy l&ugrave;i ma quỷ trong phong thủy, một sự b&agrave;i tr&iacute; 7 m&oacute;n đồ vật được ban cho một sức mạnh kỳ b&iacute; v&agrave; một cảm gi&aacute;c của sự bất khả x&acirc;m phạm.</p>\r\n\r\n<p><img alt=\"\" src=\"https://simthanhcong.vn/images/webs/demo.appsim.vn/375ef611334cca8609d06389d5293da0_conso-1325144.png\" /></p>\r\n\r\n<h3><strong>9. &Yacute; nghĩa của số 8</strong></h3>\r\n\r\n<p>Số 8 ph&aacute;t &acirc;m theo tiếng H&aacute;n l&agrave; &ldquo;b&aacute;t&rdquo; gần với chữ &quot;ph&aacute;t&quot; v&igrave; thế &yacute; nghĩa số 8 l&agrave; mang lại&nbsp;<strong>ph&aacute;t t&agrave;i ph&aacute;t lộc</strong>, l&agrave; sự ph&aacute;t triển. Do đ&oacute;, c&oacute; rất nhiều người th&iacute;ch sử dụng số 8 v&igrave; &yacute; nghĩa số 8 mang lại t&agrave;i lộc cho người d&ugrave;ng. Nếu kết hợp với số 6, &yacute; nghĩa số 8 l&uacute;c n&agrave;y sẽ l&agrave; ph&aacute;t lộc &ndash; 86 v&agrave; lộc ph&aacute;t 68. Đ&acirc;y l&agrave; cặp số c&oacute; &yacute; nghĩa ph&aacute;t t&agrave;i ph&aacute;t lộc cho người d&ugrave;ng v&agrave; được nhiều người, đặc biệt l&agrave; giới doanh nh&acirc;n rất hay d&ugrave;ng.</p>\r\n\r\n<h3><strong>10. &Yacute; nghĩa của số 9</strong></h3>\r\n\r\n<p>V&agrave; cuối c&ugrave;ng l&agrave; con số 9, l&agrave; con số&nbsp;<strong>hạnh ph&uacute;c, an l&agrave;nh, thuận lợi</strong>. Tiếng Hồng K&ocirc;ng, số ch&iacute;n đồng &acirc;m với từ &ldquo;trường thọ v&agrave; may mắn&rdquo;.</p>\r\n\r\n<p>Như vậy, c&aacute;c con số biết n&oacute;i, n&oacute; sẽ gi&uacute;p bạn th&agrave;nh c&ocirc;ng hay l&agrave;m bạn phải suy yếu tr&ecirc;n con đường t&igrave;m kiếm mục ti&ecirc;u, thậm ch&iacute; c&oacute; thể khiến bạn lụi t&agrave;n. Đừng xem nhẹ việc lựa chọn những con số trong bất kỳ c&aacute;c hoạt động thường ng&agrave;y đặc biệt l&agrave; số sim điện thoại.&nbsp;Lựa chọn số n&agrave;o l&agrave; do tuổi, năm sinh hay cung mệnh của bạn c&oacute; hợp với n&oacute; hay kh&ocirc;ng. Do đ&oacute;, bạn h&atilde;y t&igrave;m hiều những giải th&iacute;ch về &yacute; nghĩa của c&aacute;c con số từ&nbsp;<strong>0, 1, 2, 3, 4, 5, 6, 7, 8</strong>&nbsp;đến&nbsp;<strong>9</strong>&nbsp;theo phong thủy sẽ gi&uacute;p &iacute;ch cho bạn trong cuộc sống.</p>\r\n', 'b69300bbc7711c5841f76429f5eff9b6_y-nghia-con-so (1).jpg', '2024-02-28 05:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai_dathang`
--

CREATE TABLE `trangthai_dathang` (
  `id_trangthai_dathang` int(10) NOT NULL,
  `trangthaidathang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthai_dathang`
--

INSERT INTO `trangthai_dathang` (`id_trangthai_dathang`, `trangthaidathang`) VALUES
(1, 'Đã hết hạn'),
(2, 'Đã xác nhận thanh toán'),
(3, ' Đã hủy'),
(4, 'Đã đặt'),
(5, 'Đang chờ được duyệt'),
(6, 'Đã được duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai_sim`
--

CREATE TABLE `trangthai_sim` (
  `id_trangthai_sim` int(10) NOT NULL,
  `trangthaisim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthai_sim`
--

INSERT INTO `trangthai_sim` (`id_trangthai_sim`, `trangthaisim`) VALUES
(1, 'Đã có chủ sở hữu'),
(2, 'Chưa có chủ sở hữu');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai_user`
--

CREATE TABLE `trangthai_user` (
  `id_trangthai_user` int(10) NOT NULL,
  `trangthai_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthai_user`
--

INSERT INTO `trangthai_user` (`id_trangthai_user`, `trangthai_user`) VALUES
(1, 'Đang hoạt động'),
(2, 'Vô hiệu hóa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `id_user_type` int(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Sdt` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Diachi` varchar(100) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `id_trangthai_user` int(10) NOT NULL,
  `Ngaytao` datetime NOT NULL,
  `Capnhatlancuoi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_user_type`, `Fullname`, `Ten`, `Sdt`, `Email`, `Diachi`, `Ngaysinh`, `Pass`, `Anh`, `id_trangthai_user`, `Ngaytao`, `Capnhatlancuoi`) VALUES
(1, 3, 'Admin', 'Admin', 327182929, 'admin123@st.vlute.edu.vn', 'Tỉnh Vĩnh Long', '2002-02-26', 'admin@123', 'chibi.jpg', 1, '2024-02-26 06:54:07', '2024-08-01 08:55:10'),
(6, 2, 'Tôi là User1', 'User1', 383647281, 'user1@gmail.com', 'TPHCM', '2013-02-07', 'user1@123', 'chibi1.jpg', 1, '0000-00-00 00:00:00', '2024-08-06 08:30:46'),
(7, 2, 'Tôi là User2', 'User2', 123456789, 'user2@gmail.com', '73 Nguyễn Huệ', '2024-08-06', 'user2@123', 'chibi2.png', 1, '0000-00-00 00:00:00', '2024-08-06 09:07:37'),
(8, 2, 'Tôi là User3', 'User3', 335656787, 'user3@gmail.com', 'Hà Nội', '2024-08-06', 'user3@123', 'chibi3.png', 1, '0000-00-00 00:00:00', '2024-08-06 09:08:25'),
(9, 2, 'Tôi là User4', 'User4', 293781639, 'user4@gmail.com', 'Đồng Tháp', '2024-08-06', 'user4@123', 'chibi4.png', 1, '0000-00-00 00:00:00', '2024-08-06 09:09:15'),
(10, 2, 'Tôi là User5', 'User5', 326373818, 'user5@gmail.com', 'Đà Lạt', '2024-08-06', 'user5@123', 'chibi5.jpg', 1, '0000-00-00 00:00:00', '2024-08-06 09:37:10'),
(11, 2, 'Tôi là User6', 'User6', 463728191, 'user6@gmail.com', 'Đà Nẵng', '2024-08-06', 'user6@123', 'chibi6.png', 1, '0000-00-00 00:00:00', '2024-08-06 09:11:25'),
(12, 2, 'Tôi là User7 (Test khóa tài khoản)', 'User7', 923645272, 'user7@gmail.com', 'Vĩnh Long', '2024-08-06', 'user7@123', 'chibi7.jpg', 2, '0000-00-00 00:00:00', '2024-08-06 09:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id_user_type` int(10) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id_user_type`, `usertype`) VALUES
(1, 'Nhân viên'),
(2, 'Khách hàng'),
(3, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdonhang`),
  ADD KEY `id_ctdh_dh` (`id_donhang`),
  ADD KEY `fk_ttdh_sim` (`id_sim`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dathang`),
  ADD KEY `fk_donhang_ttdh` (`id_trangthai_dathang`),
  ADD KEY `fk_donhang_user` (`id_khachhang`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`id_huyen`),
  ADD KEY `fk_huyen_thanhpho` (`id_thanhpho`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`),
  ADD KEY `fk_lh_user` (`id_user`);

--
-- Indexes for table `loaisim`
--
ALTER TABLE `loaisim`
  ADD PRIMARY KEY (`id_loaisim`);

--
-- Indexes for table `sim`
--
ALTER TABLE `sim`
  ADD PRIMARY KEY (`id_sim`),
  ADD KEY `fk_sim_ttsim` (`id_tinhtrangsim`),
  ADD KEY `fk_sim_loaisim` (`id_loaisim`);

--
-- Indexes for table `thanhpho`
--
ALTER TABLE `thanhpho`
  ADD PRIMARY KEY (`id_thanhpho`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`),
  ADD KEY `fk_tt_user` (`id_user`);

--
-- Indexes for table `trangthai_dathang`
--
ALTER TABLE `trangthai_dathang`
  ADD PRIMARY KEY (`id_trangthai_dathang`);

--
-- Indexes for table `trangthai_sim`
--
ALTER TABLE `trangthai_sim`
  ADD PRIMARY KEY (`id_trangthai_sim`);

--
-- Indexes for table `trangthai_user`
--
ALTER TABLE `trangthai_user`
  ADD PRIMARY KEY (`id_trangthai_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_usertype` (`id_user_type`),
  ADD KEY `fk_user_trangthaiuser` (`id_trangthai_user`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_chitietdonhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dathang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `huyen`
--
ALTER TABLE `huyen`
  MODIFY `id_huyen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaisim`
--
ALTER TABLE `loaisim`
  MODIFY `id_loaisim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sim`
--
ALTER TABLE `sim`
  MODIFY `id_sim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `thanhpho`
--
ALTER TABLE `thanhpho`
  MODIFY `id_thanhpho` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trangthai_dathang`
--
ALTER TABLE `trangthai_dathang`
  MODIFY `id_trangthai_dathang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trangthai_sim`
--
ALTER TABLE `trangthai_sim`
  MODIFY `id_trangthai_sim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trangthai_user`
--
ALTER TABLE `trangthai_user`
  MODIFY `id_trangthai_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id_user_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_ttdh_sim` FOREIGN KEY (`id_sim`) REFERENCES `sim` (`id_sim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_ctdh_dh` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_dathang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_ttdh` FOREIGN KEY (`id_trangthai_dathang`) REFERENCES `trangthai_dathang` (`id_trangthai_dathang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_donhang_user` FOREIGN KEY (`id_khachhang`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `huyen`
--
ALTER TABLE `huyen`
  ADD CONSTRAINT `fk_huyen_thanhpho` FOREIGN KEY (`id_thanhpho`) REFERENCES `thanhpho` (`id_thanhpho`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `fk_lh_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sim`
--
ALTER TABLE `sim`
  ADD CONSTRAINT `fk_sim_loaisim` FOREIGN KEY (`id_loaisim`) REFERENCES `loaisim` (`id_loaisim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sim_ttsim` FOREIGN KEY (`id_tinhtrangsim`) REFERENCES `trangthai_sim` (`id_trangthai_sim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_tt_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_trangthaiuser` FOREIGN KEY (`id_trangthai_user`) REFERENCES `trangthai_user` (`id_trangthai_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_usertype` FOREIGN KEY (`id_user_type`) REFERENCES `user_type` (`id_user_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
