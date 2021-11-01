-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2021 lúc 05:43 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_website_cnpm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_bill`
--

CREATE TABLE `tb_bill` (
  `bill_id` int(11) NOT NULL,
  `bill_id_user` int(11) DEFAULT NULL,
  `total` varchar(50) NOT NULL,
  `bill_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_bill`
--

INSERT INTO `tb_bill` (`bill_id`, `bill_id_user`, `total`, `bill_date`) VALUES
(4, 2, '5000000', '2021-03-23 12:56:33'),
(5, 3, '1500000', '2021-03-23 12:57:12'),
(6, 3, '2500000', '2021-03-23 12:57:28'),
(7, 5, '2000000', '2021-03-23 12:57:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_depot`
--

CREATE TABLE `tb_depot` (
  `depot_id_sp` int(11) NOT NULL,
  `depot_size` varchar(3) NOT NULL,
  `depot_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_depot`
--

INSERT INTO `tb_depot` (`depot_id_sp`, `depot_size`, `depot_amount`) VALUES
(1, '34', 1500),
(1, '35', 2000),
(1, '36', 2000),
(1, '37', 2000),
(2, '34', 2000),
(2, '35', 2000),
(2, '36', 2000),
(2, '37', 1500),
(3, '34', 2000),
(3, '35', 2000),
(3, '36', 2000),
(3, '37', 1500),
(4, '34', 2000),
(4, '35', 2000),
(4, '36', 2000),
(4, '37', 1000),
(5, '34', 2000),
(5, '35', 2000),
(5, '36', 2000),
(5, '37', 1400),
(6, '34', 2000),
(6, '35', 2000),
(6, '36', 2000),
(6, '37', 2000),
(7, '34', 2000),
(7, '35', 2000),
(7, '36', 2000),
(7, '37', 1000),
(8, '34', 2000),
(8, '35', 2000),
(8, '36', 2000),
(8, '37', 500),
(9, '34', 2000),
(9, '35', 2000),
(9, '36', 2000),
(9, '37', 1200),
(10, '34', 2000),
(10, '35', 2000),
(10, '36', 2000),
(10, '37', 1200),
(11, '34', 2000),
(11, '35', 2000),
(11, '36', 2000),
(11, '37', 1500),
(12, '34', 2000),
(12, '35', 2000),
(12, '36', 2000),
(12, '37', 200),
(13, '34', 2000),
(13, '35', 2000),
(13, '36', 2000),
(13, '37', 1200),
(14, '34', 2000),
(15, '34', 2000),
(15, '35', 2000),
(15, '36', 2000),
(15, '37', 100),
(15, '38', 2000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_detail`
--

CREATE TABLE `tb_detail` (
  `detail_id_bill` int(11) NOT NULL,
  `detail_id_item` int(11) NOT NULL,
  `detail_size` int(11) NOT NULL,
  `detail_amount` int(11) NOT NULL,
  `detail_total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_detail`
--

INSERT INTO `tb_detail` (`detail_id_bill`, `detail_id_item`, `detail_size`, `detail_amount`, `detail_total`) VALUES
(4, 1, 36, 2, '5000000'),
(4, 3, 37, 1, '1500000'),
(4, 1, 36, 1, '2500000'),
(4, 2, 36, 2, '5000000'),
(5, 3, 37, 3, '6200000'),
(6, 15, 34, 1, '1500000'),
(7, 13, 35, 2, '5500000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_item`
--

CREATE TABLE `tb_item` (
  `item_id` int(11) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` varchar(30) NOT NULL,
  `item_linkimg1` varchar(50) NOT NULL,
  `item_linkimg2` varchar(50) NOT NULL,
  `item_linkimg3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_item`
--

INSERT INTO `tb_item` (`item_id`, `item_type`, `item_name`, `item_price`, `item_linkimg1`, `item_linkimg2`, `item_linkimg3`) VALUES
(1, 'Nike', 'Nike Air Force 1 Shadow', '.3000000', '.\\images\\shoes\\jordan35(1).jpg', '.\\images\\shoes\\jordan35(2).jpg', '.\\images\\shoes\\jordan35(3).jpg'),
(2, 'Nike', 'Nike Air Jordan 1 Mid', '.3550000', '.\\images\\shoes\\air jordan 1.jpg', '.\\images\\shoes\\air jordan 2.jpg', '.\\images\\shoes\\air jordan 3.jpg'),
(3, 'Nike', 'Nike Air Force 1 Low White Camo', '.2999000', '.\\images\\shoes\\jordan low 1.jpg', '.\\images\\shoes\\jordan low 2.jpg', '.\\images\\shoes\\jordan low 3.jpg'),
(4, 'Adidas', 'Adidas EQT Bask EDV', '.1800000', '.\\images\\shoes\\adidas EQT 1.jpg', '.\\images\\shoes\\adidas EQT 2.jpg', '.\\images\\shoes\\adidas EQT 3.jpg'),
(5, 'Adidas', 'Adidas Yeezy Boost 350', '.1500000', '.\\images\\shoes\\yeezy 1.jpg', '.\\images\\shoes\\yeezy 2.jpg', '.\\images\\shoes\\yeezy 3.jpg'),
(6, 'Adidas', 'Adidas UltraBoost 20', '.1990000', '.\\images\\shoes\\ultraboost 1.jpg', '.\\images\\shoes\\ultraboost 2.jpg', '.\\images\\shoes\\ultraboost 3.jpg'),
(7, 'Biti\"s', 'Biti\"s Hunter X 2k18', '.850000', '.\\images\\shoes\\hunter x 1.jpg', '.\\images\\shoes\\hunter x 2.jpg', '.\\images\\shoes\\hunter x 3.jpg'),
(8, 'Biti\"s', 'Biti\"s Hunter X 2k19', '.950000', '.\\images\\shoes\\2k19 1.jpg', '.\\images\\shoes\\2k19 2.jpg', '.\\images\\shoes\\2k19 3.jpg'),
(9, 'Biti\"s', 'Biti\"s Hunter Street', '.590000', '.\\images\\shoes\\street 1.jpg', '.\\images\\shoes\\street 2.jpg', '.\\images\\shoes\\street 3.jpg'),
(10, 'Converse', 'Converse Chuck 1970s Black White', '650000', '.\\images\\shoes\\1970 1.jpg', '.\\images\\shoes\\1970 2.jpg', '.\\images\\shoes\\1970 3.jpg'),
(11, 'Converse', 'Converse Chuck Taylor', '1650000', '.\\images\\shoes\\Tyalor 1.jpg', '.\\images\\shoes\\Tyalor 2.jpg', '.\\images\\shoes\\Tyalor 3.jpg'),
(12, 'Converse', 'Converse Classic Black', '2000000', '.\\images\\shoes\\classic 1.jpg', '.\\images\\shoes\\classic 2.jpg', '.\\images\\shoes\\classic 3.jpg'),
(13, 'Nike', 'Nike Air Force 1 Shadow Aura Green ', '4000000', '.\\images\\shoes\\shadow 1.jpg', '.\\images\\shoes\\shadow 2.jpg', '.\\images\\shoes\\shadow 3.jpg'),
(14, 'Adidas', 'Adidas Alpha Bounce', '1550000', '.\\images\\shoes\\alphabounce 1.jpg', '.\\images\\shoes\\alphabounce 2.jpg', '.\\images\\shoes\\alphabounce 3.jpg'),
(15, 'Biti\"s', 'Biti\"s Hunter Core Tet', '4000000', '.\\images\\shoes\\core tet 1.jpg', '.\\images\\shoes\\core tet 2.jpg', '.\\images\\shoes\\core tet 3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_account` varchar(30) NOT NULL,
  `user_password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_phone`, `user_address`, `user_account`, `user_password`) VALUES
(1, 'admin', '0952515603', 'tenten', 'admin', 'admin'),
(2, 'Tam Bui', '0353515603', 'Ninh Binh', 'tamninja', 'tamninja2k'),
(3, 'Thai Son', '0353715633', 'Ha Noi', 'vuthaison', 'thaison2k'),
(4, 'Nguyen Son', '0977123354', 'Vinh Phuc', 'nts7749', 'taobingao'),
(5, 'Cong Tuyen', '0979116117', 'Nam Dinh', 'dct4953', 'taolatuyen');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_id_user` (`bill_id_user`);

--
-- Chỉ mục cho bảng `tb_depot`
--
ALTER TABLE `tb_depot`
  ADD PRIMARY KEY (`depot_id_sp`,`depot_size`);

--
-- Chỉ mục cho bảng `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD KEY `detail_id_bill` (`detail_id_bill`),
  ADD KEY `detail_id_item` (`detail_id_item`);

--
-- Chỉ mục cho bảng `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `khongtrungtengiay` (`item_name`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `1ten1taikhoan` (`user_account`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD CONSTRAINT `tb_bill_ibfk_1` FOREIGN KEY (`bill_id_user`) REFERENCES `tb_user` (`user_id`);

--
-- Các ràng buộc cho bảng `tb_depot`
--
ALTER TABLE `tb_depot`
  ADD CONSTRAINT `tb_depot_ibfk_1` FOREIGN KEY (`depot_id_sp`) REFERENCES `tb_item` (`item_id`);

--
-- Các ràng buộc cho bảng `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD CONSTRAINT `tb_detail_ibfk_1` FOREIGN KEY (`detail_id_bill`) REFERENCES `tb_bill` (`bill_id`),
  ADD CONSTRAINT `tb_detail_ibfk_2` FOREIGN KEY (`detail_id_item`) REFERENCES `tb_item` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
