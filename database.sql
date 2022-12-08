-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2022 lúc 03:58 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_stt` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_stt`, `username`, `pass`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `email` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `ten_sanpham` varchar(100) NOT NULL,
  `id_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`email`, `rating`, `comment`, `ten_sanpham`, `id_rating`) VALUES
('ryujin@gmail.com', 1, 'tuyệt vời', 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU (Z124000DE)', 1),
('ryujin@gmail.com', 1, 'tuyệt vời', 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU (Z124000DE)', 2),
('ryujin@gmail.com', 5, 'tuyệt vời', 'Loa Bluetooth JBL Charge 5', 3),
('ryujin@gmail.com', 5, 'tuyệt vời', 'Chuột Bluetooth Apple MK2E3 Trắng ', 4),
('caonguyenkyduyen17@gmail.com', 0, 'tuyệt vời', 'Laptop Asus ZenBook UX482EA i5 1135G7/8GB/512GBTouch/Pen/Túi/Stand/Win11 (KA397W) ', 5),
('caonguyenkyduyen17@gmail.com', 5, 'tuyệt vời', 'Laptop Asus ZenBook UX482EA i5 1135G7/8GB/512GBTouch/Pen/Túi/Stand/Win11 (KA397W) ', 6),
('caonguyenkyduyen17@gmail.com', 5, 'tuyệt vời', 'Laptop Asus ZenBook UX482EA i5 1135G7/8GB/512GBTouch/Pen/Túi/Stand/Win11 (KA397W) ', 7),
('caonguyenkyduyen17@gmail.com', 5, 'tuyệt vời', 'Laptop Asus ZenBook UX482EA i5 1135G7/8GB/512GBTouch/Pen/Túi/Stand/Win11 (KA397W) ', 8),
('caonguyenkyduyen17@gmail.com', 5, 'tuyệt vời', 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU (Z124000DE)', 9),
('caonguyenkyduyen17@gmail.com', 5, 'tuyệt vời', 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU (Z124000DE)', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `ten_dangky` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `ten_dangky`, `email`, `matkhau`, `gioitinh`, `diachi`, `dienthoai`) VALUES
(1, 'Shin Ryujin', 'ryujin@gmail.com', '123456', 'Nữ', 'JYP', '0123456'),
(2, 'Shin Yuna', 'yuna@gmail.com', '123456', 'Nữ', 'YG', '0123456'),
(3, 'Jimdada', 'jimdada@gmail.com', '123456', 'Nữ', 'JYP', '0123456'),
(4, 'Cao Nguyễn Kỳ Duyên', 'caonguyenkyduyen17@gmail.com', 'KD17072001', 'Nữ', '102 ấp 2 xã Long Thới huyện Nhà Bè', '0373299750'),
(5, 'Đỗ Thị Hoài Thu', 'dothihoaithu2001@gmail.com', '123456', 'Nữ', 'Nhà bè đà lạt', '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `ten_danhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL,
  `hinhanh_dm` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`ten_danhmuc`, `thutu`, `hinhanh_dm`) VALUES
('Máy tính', 1, '1654155102_6.PNG'),
('Phụ kiện', 4, '1654155076_4.PNG'),
('Thiết bị mạng', 3, '1654867181_z3482789007718_1b91810369d25bee14a4a2d1e666ac49.jpg'),
('Laptop', 2, '1654858513_2.PNG'),
('Thiết bị văn phòng', 5, '1654867195_z3482789007651_1c6cc8c6b211e03ed5bff9dee7bee58e.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_giohang` int(11) NOT NULL,
  `ten_khachhang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_donhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `thoigian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuongthuctt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_giohang`, `ten_khachhang`, `ma_donhang`, `trangthai`, `thoigian`, `phuongthuctt`) VALUES
(33, 'caonguyenkyduyen17@gmail.com', '48488', 1, '2022-06-10 16:43:14', 'Tiền mặt'),
(32, 'ryujin@gmail.com', '65466', 1, '2022-06-10 16:41:08', 'Tiền mặt'),
(31, 'dothihoaithu2001@gmail.com', '86462', 1, '2022-06-03 08:37:38', 'Tiền mặt'),
(30, 'caonguyenkyduyen17@gmail.com', '64635', 1, '2022-06-02 20:34:09', 'Tiền mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhaphattrien`
--

CREATE TABLE `tbl_nhaphattrien` (
  `thutu` int(11) NOT NULL,
  `ten_nhaphattrien` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhaphattrien`
--

INSERT INTO `tbl_nhaphattrien` (`thutu`, `ten_nhaphattrien`) VALUES
(35, 'OKI'),
(34, 'Zadez'),
(33, 'Newmen'),
(32, 'Bitdefender'),
(31, 'Sorotec'),
(30, 'Epson'),
(29, 'MIPOW'),
(28, 'Pisen'),
(27, 'Link Pro'),
(26, 'Kingmaster'),
(25, 'TOTOLINK'),
(22, 'Polymer'),
(21, 'Microsoft'),
(20, 'DareU'),
(19, 'Huawei'),
(10, 'HP'),
(11, 'Dell'),
(12, 'Lenovo'),
(13, 'Acer'),
(14, 'MSI'),
(15, 'SURFACE'),
(16, 'Rezo'),
(17, 'JBL'),
(18, 'Sony'),
(23, 'Mercusys'),
(8, 'Vivo'),
(7, 'Asus'),
(24, 'TP-LINK'),
(5, 'Realme'),
(4, 'Oppo'),
(3, 'Xiaomi'),
(2, 'Samsung'),
(1, 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `thutu` int(11) NOT NULL,
  `ten_sanpham` varchar(250) NOT NULL,
  `ma_sanpham` varchar(100) NOT NULL,
  `gia_sanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `hinh_1` varchar(100) NOT NULL,
  `hinh_2` varchar(100) NOT NULL,
  `hinh_3` varchar(100) NOT NULL,
  `mota` text NOT NULL,
  `thongtin` text NOT NULL,
  `danhmuc` int(11) NOT NULL,
  `nhaphattrien` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`thutu`, `ten_sanpham`, `ma_sanpham`, `gia_sanpham`, `hinhanh`, `hinh_1`, `hinh_2`, `hinh_3`, `mota`, `thongtin`, `danhmuc`, `nhaphattrien`) VALUES
(27, 'Repeater Mercusys MW300RE', '027', '185000', '1654866316_27_1.jpg', '1654866316_27_2.jpg', '1654866316_27_3.jpg', '1654866316_27_1.jpg', 'Chế độ mở rộng sóng tăng cường tín hiệu Wi-Fi  đến những nơi sóng Wi-Fi không thể tới được hoặc khu vực khó đi dây.Ba ăng ten ngoài với công nghệ MIMO giúp MW300RE vượt trội hơn các bộ mở rộng sóng thông thường .Dễ dàng mở rộng vùng phủ sóng Wi-Fi với bước đơn giản hoặc nhấn nút WPS.Kích thước thu nhỏ và thiết kế gắn tường giúp dễ dàng triển khai và di chuyển linh hoạt.Đèn LED nhiều màu giúp bạn tìm được vị trí tốt để cung cấp Wi-Fi mở rộng hiệu quả nhất.', 'Tốc độ: Lên đến 300Mbps\r\n', 3, 23),
(69, 'Loa Bluetooth Sony SRS-XB13', '069', '1290000', '1653970767_17.jpg', '1653970767_18.jpg', '1653970767_19.jpg', '1653970767_20.jpg', '•	Tổng công suất:\r\n5 W\r\n•	Nguồn:\r\nPin\r\n•	Thời gian sử dụng:\r\nDùng khoảng 16 tiếngSạc khoảng 4 - 5 tiếng\r\n•	Kết nối không dây:\r\nBluetooth 4.2\r\n•	Tiện ích:\r\nChống nước, chống bụi IP67Kết nối cùng lúc 2 loa\r\n•	Phím điều khiển:\r\nBật/tắt bluetoothNghe/nhận cuộc gọiNút nguồnPhát/dừng chơi nhạcTăng/giảm âm lượng\r\n•	Thương hiệu của:\r\nNhật Bản\r\n', '', 4, 18),
(70, 'Bàn phím Apple Magic Keyboard với phím số MQ052 ', '070', '3501000', '1653970831_21.jpg', '1653970831_22.jpg', '1653970831_23.jpg', '1653970831_24.jpg', '•	Sản xuất tại: Trung Quốc\r\n•	Thương hiệu của: Mỹ\r\n•	Kích thước:Dài 41.87 cm - Sâu 11.49 cm - Cao 1.09 cm\r\n•	Trọng lượng: 390 g\r\n•	Dung lượng pin: Hãng không công bố\r\n•	Thời gian sử dụng pin: Khoảng 1 tháng\r\n•	Tương thích thiết bị: Máy tính Mac hỗ trợ Bluetooth với macOS 10.12.4 trở lên, iPhone với iOS 10.3 trở lên\r\n•	Bluetooth: Có\r\n•	Cách kết nối: Sạc qua cổng Lightning\r\n', '', 4, 1),
(71, 'Bàn Phím Có Dây DareU EK87', '071', '649000', '1653970919_25.jpg', '1653970919_26.jpg', '1653970919_27.jpg', '1653970919_28.jpg', '•	Tương thích: MacOS/Windows\r\n•	Cách kết nối: Dây cắm USB\r\n•	Đèn LED: Có\r\n•	Số phím: 87 Phím\r\n•	Thương hiệu của: Trung Quốc\r\n', '', 4, 20),
(72, 'Chuột Bluetooth Apple MK2E3 Trắng ', '072', '2490000', '1653970983_30.jpg', '1653970983_31.jpg', '1653970983_32.jpg', '1653970983_33.jpg', '•	Tương thích\r\nMacOS (MacBook, iMac)\r\n•	Độ phân giải mặc định\r\n1500 DPI\r\n•	Cách kết nối\r\nBluetooth\r\n•	Độ dài dây/Khoảng cách kết nối\r\n10 m\r\n•	Đèn LED\r\nKhông có\r\n•	Ứng dụng điều khiển\r\nKhông có\r\n•	Loại pin\r\nPin sạc\r\n•	Thời gian\r\nDùng 2 tháng - Sạc 2 giờ\r\n•	Cổng sạc\r\nLightning\r\n•	Trọng lượng\r\n80 g\r\n•	Thương hiệu của\r\nMỹ\r\n•	Sản xuất tại\r\nTrung Quốc\r\n', '', 3, 1),
(73, 'Chuột Bluetooth Microsoft Ocean Plastic Xám Trắng', '073', '699000', '1653971050_34.jpg', '1653971050_35.jpg', '1653971050_36.jpg', '1653971050_37.jpg', '•	Tương thích\r\nWindows\r\n•	Độ phân giải mặc định\r\n400 - 1800 DPI\r\n•	Cách kết nối\r\nBluetooth\r\n•	Độ dài dây/Khoảng cách kết nối\r\n10 m\r\n•	Đèn LED\r\nKhông có\r\n•	Ứng dụng điều khiển\r\nKhông có\r\n•	Loại pin\r\n1 viên pin AA\r\n•	Trọng lượng\r\n84 g\r\n•	Thương hiệu của\r\nMỹ\r\n•	Sản xuất tại\r\nTrung Quốc\r\n', '', 4, 21),
(74, 'Pin sạc dự phòng Polymer 10.000mAh AVA+ JP208', '074', '299000', '1653971103_38.jpeg', '1653971103_39.jpeg', '1653971103_40.jpeg', '1653971103_41.jpeg', '•	Hiệu suất sạc:\r\n64%\r\n•	Dung lượng pin:\r\n10.000 mAh\r\n•	Thời gian sạc đầy pin:\r\n10 - 11 giờ (dùng Adapter 1A)6 - 7 giờ (dùng Adapter 5V - 2A)\r\n•	Nguồn vào:\r\n5V - 2A\r\n•	Nguồn ra:\r\nUSB: 5V - 2A\r\n•	Lõi pin:\r\nPolymer\r\n•	Công nghệ/Tiện ích:\r\nĐèn LED báo hiệu\r\n•	Kích thước:\r\nDày 1.7 cm - Rộng 6.5 cm - Dài 13.5 cm\r\n•	Trọng lượng:\r\n225 g\r\n•	Thương hiệu của:\r\nThế Giới Di Động\r\n•	Sản xuất tại:\r\nTrung Quốc\r\n', '', 4, 22),
(26, 'Switch Mercusys MS108', '026', '150000', '1654866257_26_1.jpg', '1654866257_26_2.jpg', '1654866257_26_3.jpg', '1654866257_26_1.jpg', 'Kích thước chỉ lớn hơn so với thẻ tín dụng một chút, MS108 có thể được đặt bất cứ nơi đâu trong nhà bạn mà không chiếm quá nhiều không gian. Với thiết kế không quạt dù thiết bị hoạt động trong bao lâu cũng không gây ra cảm giác khó chịu.\r\nVới 8 cổng Ethernet 10/100Mbps, bạn có thể nhanh chóng mở rộng mạng dây. MS108 linh hoạt & tương thích với máy tính, máy in, camera IP, Tivi thông minh, game consoles, và nhiều hơn nữa. Sự lựa chọn hoàn hảo cho gia đình, văn phòng nhỏ và thậm chí là dùng trong các ký túc xá.\r\n', 'Giao tiếp: 8 x cổng 10/100Mbps, hỗ trợ tự động chuyển đổi MDI/MDIX\r\n', 3, 23),
(25, 'Router Wifi Mercusys MW301R', '025', '185000', '1654860016_570x470_Mercusys-MW301R-3.jpg', '1654860016_570x470_mercusys-mw301r-110837.jpg', '1654860016_570x470_mercusys-mw301r-110838.jpg', '1654860016_570x470_mercusys-mw301r-110839.jpg', 'Hai ăng ten 5dBi cho vùng phủ rộng lớn, sở hữu hai ăng ten ngoài độ lợi 5dBi cùng độ nhạy thu cao, MW301R cung cấp cho bạn vùng phủ Wi-Fi rộng lớn hơn, đáp ứng tốt như cầu sử dụng mạng Wi-Fi của bạn.\r\nMW301R cung cấp kết nối tốc độ cao và ổn định cho các thiết bị của bạn. Với tốc độ Wi-Fi lên đến 300Mbps, MW301R thật sự là một lựa chọn lý tưởng cho các ứng dụng xem video HD, chơi game trực tuyến và tải về tập tin dung lượng cao.', 'Giao tiếp: 2 cổng LAN 10/100Mbps 1 cổng WAN 10/100Mbps\r\nNguồn: 5VDC/0.6A', 3, 23),
(66, 'Tai nghe Bluetooth True Wireless OPPO ENCO Air 2 ETE11', '066', '1351000', '1653970380_6.jpg', '1653970380_7.jpg', '1653970380_8.jpg', '1653970380_9.jpg', '•	Thời gian tai nghe:\r\nDùng 4 giờ - Sạc 1.5 giờ\r\n•	Thời gian hộp sạc:\r\nDùng 24 giờ - Sạc 2 giờ\r\n•	Cổng sạc:\r\nType-C\r\n•	Công nghệ âm thanh:\r\ncodecAACcodecSBC\r\n•	Tương thích:\r\nAndroid, iOS, WindowsMacOS\r\n•	Ứng dụng kết nối:\r\nHeyMelody App\r\n•	Tiện ích:\r\nChống nước IPX4Game ModeHỗ trợ chụp ảnhKết nối 1 chạm Fast PairSử dụng độc lập 1 bên tai nghe\r\n•	Hỗ trợ kết nối:\r\nBluetooth 5.2\r\n•	Điều khiển bằng:\r\nCảm ứng chạm\r\n', '', 4, 4),
(67, 'Tai nghe Bluetooth True Wireless Rezo F15', '067', '640000', '1653970652_9.jpg', '1653970652_10.jpg', '1653970652_11.jpg', '1653970652_12.jpg', '•	Thời gian tai nghe:\r\nDùng 4 giờ - Sạc 1.5 giờ\r\n•	Thời gian hộp sạc:\r\nDùng 20 giờ - Sạc 1.5 giờ\r\n•	Cổng sạc:\r\nType-C\r\n•	Tương thích:\r\nAndroid, iOS, WindowsMacOS (Macbook, iMac)\r\n•	Tiện ích:\r\nChống nước IPX5Có mic thoạiSử dụng độc lập 1 bên tai nghe\r\n•	Hỗ trợ kết nối:\r\nBluetooth 5.0\r\n•	Điều khiển bằng:\r\nCảm ứng chạm\r\n', '', 4, 16),
(68, 'Loa Bluetooth JBL Charge 5', '068', '3990000', '1653970706_13.jpg', '1653970706_14.jpg', '1653970706_15.jpg', '1653970706_16.jpg', '•	Tổng công suất:\r\n40 W\r\n•	Nguồn:\r\nPin\r\n•	Thời gian sử dụng:\r\nDùng khoảng 20 tiếngSạc khoảng 4 tiếng\r\n•	Kết nối không dây:\r\nBluetooth 5.1\r\n•	Kết nối khác:\r\nUSB\r\n•	Tiện ích:\r\nChống nước, chống bụi IP67Kết nối cùng lúc 2 loaSạc được cho thiết bị khác (cổng USB)\r\n•	Phím điều khiển:\r\nBật / tắt nguồnBật/tắt bluetoothGhép đôiPhát/dừng chơi nhạcTăng/giảm âm lượng\r\n•	Thương hiệu của:\r\nMỹ\r\n', '', 3, 17),
(62, 'Asus ExpertCenter AIO E5202WHAK i5 11500B/8GB/512GB/Bàn phím&Chuột/Win11 (BA074W)', '062', '19990000', '1653970137_36.jpg', '1653970137_37.jpg', '1653970137_38.jpg', '1653970137_39.jpg', '•	Công nghệ CPU:\r\ni511500B3.30 GHz\r\n•	RAM:\r\n8 GBDDR4 2 khe (1 khe 8GB+ 1 khe trống)3200 MHz2 khe\r\n•	Ổ cứng:\r\n512 GB SSD Hỗ trợ thêm 1 khe cắm HDD SATA (Nâng cấp tối đa 1TB)Hỗ trợ thêm 1 khe cắm SSD M2 PCIe mở rộngChuẩn PCIe/NVMe\r\n•	Màn hình:\r\n21.5 inchFull HD\r\n•	Card màn hình:\r\nIntel UHD\r\n•	Cổng kết nối:\r\n1x USB 3.2 Gen 2 Type-C1x Thunderbolt 42 x USB 2.03 x USB 3.2HDMIJack 3.5 mmLAN (RJ45)\r\n•	Hệ điều hành:\r\nWindows 11 Home SL\r\n•	Kích thước:\r\nDài 490 mm - Rộng 411 mm - Dày 201 mm - Nặng 7.7 kg\r\n', '', 1, 7),
(63, 'HP AIO 22 df1020d i5 1135G7/4GB/512GB/21.5\" FullHD/Bàn phím/Chuột/Win10 (4B6D8PA) ', '063', '19490000', '1653970211_41.jpg', '1653970211_42.jpg', '1653970211_43.jpg', '1653970211_44.jpg', '•	Công nghệ CPU:\r\ni51135G72.40 GHz\r\n•	RAM:\r\n4 GBDDR4 2 khe (1 khe 4GB + 1 khe trống)3200 MHz2 khe\r\n•	Ổ cứng:\r\n512 GB SSD Chuẩn PCIe/NVMe\r\n•	Màn hình:\r\n21.5 inchFull HD\r\n•	Card màn hình:\r\nIntel Iris Xe\r\n•	Cổng kết nối:\r\n2 x SuperSpeed USB Type-A2 x USB 2.0HDMIJack 3.5 mmLAN (RJ45)\r\n•	Hệ điều hành:\r\nWindows 10 Home SL\r\n•	Kích thước:\r\nDài 490.3 mm - Rộng 380.7 mm - Dày 204.5 mm - Nặng 5.7 kg\r\n', '', 1, 10),
(64, 'Lenovo IdeaCentre AIO 3 24ITL6 i5 1135G7/8GB/256GB/23.8\" FullHD/Bàn phím&Chuột/Win10 (F0G0009AVN) ', '064', '19590000', '1653970261_46.jpg', '1653970261_47.jpg', '1653970261_48.jpg', '1653970261_49.jpg', '•	Công nghệ CPU:\r\ni51135G72.40 GHz\r\n•	RAM:\r\n8 GBDDR4 2 khe (1 khe 4GB + 1 khe 4GB)3200 MHz2 khe\r\n•	Ổ cứng:\r\n256 GB SSD Chuẩn PCIe/NVMe\r\n•	Màn hình:\r\n23.8 inchFull HD\r\n•	Card màn hình:\r\nIntel Iris Xe\r\n•	Cổng kết nối:\r\n2 x USB 2.02 x USB 3.2HDMILAN (RJ45)\r\n•	Hệ điều hành:\r\nWindows 10 Home SL\r\n•	Ổ đĩa quang:\r\nDVDRW\r\n•	Kích thước:\r\nDài 541 mm - Rộng 185 mm - Dày 433 mm - Nặng 6.81 kg\r\n', '', 1, 12),
(65, 'Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3 Trắng', '065', '5190000', '1653970322_1.jpg', '1653970322_2.jpg', '1653970322_3.jpg', '1653970322_4.jpg', '•	Pin:\r\nDùng 5 giờ - Sạc 2 giờ\r\n•	Cổng sạc:\r\nLightningSạc không dâySạc MagSafe\r\n•	Công nghệ âm thanh:\r\nActive Noise CancellationAdaptive EQCustom high-excursion Apple driverHigh Dynamic RangeSpatial AudioTransparency Mode\r\n•	Tương thích:\r\nAndroidiOS (iPhone)iPadOS (iPad)MacOS (Macbook, iMac)\r\n•	Tiện ích:\r\nChống nước IPX4Chống ồnCó mic thoại\r\n•	Hỗ trợ kết nối:\r\nBluetooth 5.0\r\n•	Điều khiển bằng:\r\nCảm ứng chạm\r\n', '', 4, 1),
(56, 'Màn hình Asus ProArt PA247CV 23.8 inch Full HD 75Hz 5ms', '056', '6790000', '1653969762_6.jpg', '1653969762_7.jpg', '1653969762_8.jpg', '1653969762_9.jpg', '\r\n•	Loại màn hình:\r\nPhẳng\r\n•	Màn hình:\r\n23.8 inchFull HD (1920 x 1080)75 Hz\r\n•	Công nghệ màn hình:\r\n100% Rec.709100% sRGBAdaptive-SyncLow Blue LightSai lệch màu Delta E< 2\r\n•	Tấm nền:\r\nIPS\r\n•	Số lượng màu:\r\n16.7 triệu màu\r\n•	Độ tương phản:\r\n1000:1\r\n•	Thời gian đáp ứng:\r\n5 ms\r\n•	Góc nhìn:\r\n178°(Dọc) / 178°(Ngang)\r\n•	Tiện ích:\r\nCó loa tích hợpThay đổi được chiều caoXoay màn hình 90 độ\r\n•	Cổng kết nối:\r\n4 x USB 3.2Display Port x 2HDMIJack tai nghe 3.5 mmUSB Type C\r\n', '', 1, 7),
(57, 'Màn hình Asus ProArt PA278CV 27 inch 2K/75Hz/5ms ', '057', '10590000', '1653969821_11.jpg', '1653969821_12.jpg', '1653969821_13.jpg', '1653969821_14.jpg', '•	Loại màn hình:\r\nPhẳng\r\n•	Màn hình:\r\n27 inch2K (2560 x 1440)75 Hz\r\n•	Công nghệ màn hình:\r\n100% Rec.709100% sRGBAdaptive-SyncLow Blue LightSai lệch màu Delta E< 2\r\n•	Tấm nền:\r\nIPS\r\n•	Số lượng màu:\r\n16.7 triệu màu\r\n•	Độ tương phản:\r\n1000:1\r\n•	Thời gian đáp ứng:\r\n5 ms\r\n•	Góc nhìn:\r\n178°(Dọc) / 178°(Ngang)\r\n•	Tiện ích:\r\nCó loa tích hợpThay đổi được chiều caoXoay màn hình 90 độ\r\n•	Cổng kết nối:\r\n4 x USB 3.2Display Port x 2HDMIJack tai nghe 3.5 mmUSB Type C\r\n', '', 1, 7),
(58, 'Màn hình thông minh Samsung Smart Monitor M5 27 inch Full HD - Remote (LS27AM501NEXXV)', '058', '8090000', '1653969880_16.jpg', '1653969880_17.jpg', '1653969880_18.jpg', '1653969880_19.jpg', '•	Loại màn hình:\r\nPhẳng\r\n•	Màn hình:\r\n27 inchFull HD (1920 x 1080)60 Hz\r\n•	Công nghệ màn hình:\r\nAdaptive PictureHDR10Ultrawide Game View\r\n•	Tấm nền:\r\nVA\r\n•	Số lượng màu:\r\n16.7 triệu màu\r\n•	Độ tương phản:\r\n3000:1\r\n•	Thời gian đáp ứng:\r\n8 ms\r\n•	Góc nhìn:\r\n178°(Dọc) / 178°(Ngang)\r\n•	Tiện ích:\r\nBluetooth 4.2Có loa tích hợpHệ điều hành TizenKho ứng dụng Smart TVKết nối không dây DexWi-Fi 5 chuẩn AC\r\n•	Cổng kết nối:\r\n2 x HDMI2 x USB 2.0\r\n', '', 1, 2),
(59, 'Màn hình Samsung Gaming LC27RG50FQEXXV 27 inch Full HD/240Hz/4ms ', '059', '9990000', '1653969939_21.jpg', '1653969939_22.jpg', '1653969939_23.jpg', '1653969939_24.jpg', '•	Loại màn hình:\r\nCong\r\n•	Màn hình:\r\n27 inchFull HD (1920 x 1080)240 Hz\r\n•	Công nghệ màn hình:\r\nCurved Screen 1500REye Saver ModeLCD VANVIDIA G-SYNC\r\n•	Tấm nền:\r\nVA\r\n•	Số lượng màu:\r\n16.7 triệu màu\r\n•	Độ tương phản:\r\n3000:1\r\n•	Thời gian đáp ứng:\r\n4 ms\r\n•	Góc nhìn:\r\n178°(Dọc) / 178°(Ngang)\r\n•	Cổng kết nối:\r\n2 x HDMIDisplay PortJack tai nghe 3.5 mmUSB 3.0\r\n', '', 1, 2),
(60, 'iMac 24 inch 2021 4.5K M1/256GB/8GB/7-core GPU ', '060', '31990000', '1653970005_26.jpg', '1653970005_27.jpg', '1653970005_28.jpg', '1653970005_29.jpg', '•	Công nghệ CPU:\r\nApple M1 8-core\r\n•	RAM:\r\n8 GB\r\n•	Ổ cứng:\r\n256 GB SSD\r\n•	Màn hình:\r\n24 inch4.5K\r\n•	Card màn hình:\r\n7-core GPU\r\n•	Cổng kết nối:\r\n2 x ThunderboltJack 3.5 mm\r\n•	Hệ điều hành:\r\nMac OS\r\n•	Kích thước:\r\nDài 461 mm - Rộng 547 mm - Dày 147 mm - Nặng 4.46 kg\r\n', '', 1, 1),
(61, 'HP 205 Pro G8 AIO R3 5300U/4GB/256GB/23.8inch FHD/Bàn phím&Chuột//Win11 (5R3F1PA)', '061', '13390000', '1653970072_31.jpg', '1653970072_32.jpg', '1653970072_33.jpg', '1653970072_34.jpg', '•	Công nghệ CPU:\r\nRyzen 35300U2.60 GHz\r\n•	RAM:\r\n4 GBDDR4 2 khe (1 khe 4GB + 1 khe trống)3200 MHz2 khe\r\n•	Ổ cứng:\r\n256 GB SSD Hỗ trợ khe cắm HDD SATAChuẩn PCIe/NVMe\r\n•	Màn hình:\r\n23.8 inchFull HD\r\n•	Card màn hình:\r\nAMD Radeon\r\n•	Cổng kết nối:\r\n2 x USB 3.1HDMIJack 3.5 mmLAN (RJ45)USB 2.0\r\n•	Hệ điều hành:\r\nWindows 11 Home SL\r\n•	Kích thước:\r\nDài 540.6 mm - Rộng 419 mm - Dày 183.7 mm - Nặng 5.37 kg\r\n', '', 1, 10),
(35, 'Wi-Fi Di Động 4G LTE TP-Link M7350', '035', '1590000', '1654867022_35_1.jpg', '1654867022_35_2.png', '1654867022_35_3.png', '1654867022_35_1.jpg', 'Giới thiệu thiết bị mạng TPLink 4G M7350- giải pháp kết nối mạng nhỏ gọn\r\nNhắc tới TPLink người dùng chắc hẳn sẽ nghĩ ngay tới các thiết bị hỗ trợ kết nối wifi, mạng LAN, Router với chất lượng tốt và rất đồng đều. Với cải tiến để phù hợp với nhu cầu của người dùng, TPlink đã cho ra đời thiết bị phát mạng 4G có thể cầm tay để phục vị cho mọi công việc đó là sản phẩm Thiết bị mạng TPLink 4G M7350.\r\nThiết bị mạng TPLink 4G M7350 trang bị một thiết kế nhỏ gọn giúp người dùng có thể mang theo, bỏ vào cặp sách thuận tiện cho mội công việc. Giao diện được thiết kế thân thiện với người dùng dễ thao tác kể cả người dùng mới dùng lần đầu. Màn hình hiển thị trực quan của M7350 giúp bạn dễ dàng kiểm soát dữ liệu và tránh vượt qua giới hạn dữ liệu hàng tháng. Màn hình cũng hiển thị nhiều thông tin khác về tuổi thọ pin, cường độ tín hiệu, trạng thái Wi-Fi, người dùng được kết nối và hơn thế nữa.\r\nKhả năng kết nối 4G LTE\r\nHỗ trợ thế hệ mạng 4G LTE mới nhất, M7350 tốc độ tải xuống lên đến 150Mbps và bạn có thể thưởng thức một bộ phim HD mượt mà, tải các tập tin trong chớp mắt và chat video không bị gián đoạn.\r\nChia sẻ kết nối\r\nĐối với TPLink 4G M7350 người dùng đơn giản là lắp sim vào và thao tác, với việc tạo ra một điểm phát wifi với băng tần kép tin cậy người dùng có thể chia sẻ kết nối Wifi này tới 10 thiết bị khác nhau.\r\nThời lượng Pin\r\nVới việc trang bị Pin sạc dung lượng 2000mAh, M7350 có khả năng hoạt động liên tục trong vòng 8 tiếng và 480 tiếng chờ. Để linh hoạt hơn, M7350 có thể sạc qua dây cáp sạc micro USB kết nối với máy tính xách tay, thiết bị sạc di động hoặc sử dụng chính bộ sạc của thiết bị.\r\nQuản lí thiết bị thông minh\r\nVới ứng dụng tpMiFi, bạn dễ dàng truy cập và quản lý M7350 của bạn với bất kì thiết bị kết nối iOS/Android nào. Ứng dụng tpMiFi cho phép bạn thiết lập dung lượng giới hạn, kiểm soát thiết bị nào có thể truy cập Wi-Fi của bạn, gửi tin nhắn và chia sẻ tập tin, hình ảnh, video đến và đi từ thẻ nhớ Micro SD rời.\r\n', 'Giao tiếp: 1 x cổng micro USB cấp nguồn Khe cắm SIM Khe cắm Micro SD Pin: Pin sạc trong 2000mAh Tốc độ: Tốc độ Download: 150Mbps, Tốc độ Upload: 50Mbps Anten: Ăng-ten ngầm\r\n', 3, 24),
(34, 'Router WiFi TOTOLINK A810R', '034', '490000', '1654866922_34_1.jpg', '1654866922_34_2.jpg', '1654866922_34_3.jpg', '1654866922_34_4.jpg', 'Thiết bị định tuyến A810R được trang bị 5 ăng ten đa hướng mạnh mẽ, cung cấp tốc độ lên tới 1200Mbps, giúp mở rộng vùng phủ sóng không dây và đảm bảo chất lượng tín hiệu ổn định. A810R tương thích chuẩn không dây IEEE 802.11ac mới nhất cho phép cả 2 băng tần 2.4Ghz và 5 Ghz hoạt động đồng thời, giúp cho những thiết bị kết nối có thể sử dụng truy cập Internet cùng lúc với chất lượng ổn định nhất. A810R được tích hợp chip CPU tích hợp tăng cường khả năng xử lý dữ liệu cùng công nghệ Beamforming tiên tiến giúp cải thiện việc truyền và nhận tín hiệu đến các thiết bị đầu cuối, đồng thời hạn chế tình trạng nhiễu sóng. Công suất tiêu thụ trung bình cùng thiết kế băng tần kép đảm bảo cho A810R có được phạm vi phủ sóng rộng mà không lo tiêu tốn quá nhiều điện năng, lý tưởng cho ngôi nhà thông minh của bạn. Với chuẩn không dây IEEE 802.11ac, thiết bị A810R hoạt động song song trên cả 2 băng tần 2.4G và 5G cùng lúc, cung cấp tốc độ lên đến 1200Mbps, đáp ứng tất cả các nhu cầu Internet băng thông rộng của bạn như game online, xem video full HD độ phân giải cao, tải file dung lượng lớn … A810R được trang bị 5 ăng ten đa hướng với thiết kế khoa học giúp tăng khả năng kháng nhiễu và nâng cao hiệu suất hoạt động, mang đến cho bạn vùng phủ sóng rộng lớn. Nếu ví mỗi ăng ten trên A810R như một ngón tay và thiết bị như lòng bàn tay, giờ đây ngôi nhà / văn phòng công ty của bạn đã được phủ sóng Wi-Fi hoàn toàn.', 'Tốc độ: 2.4GHz: Lên đến 300Mbps 5GHz: Lên đến 867Mbps Anten: 5 ăng ten liền 5dBi\r\n', 3, 25),
(55, 'Màn hình Asus TUF Gaming VG279QM 27 inch Full HD/280Hz/1ms ', '055', '11190000', '1653969671_1.jpg', '1653969671_2.jpg', '1653969671_3.jpg', '1653969671_4.jpg', '1.\r\n•	Loại màn hình:\r\nPhẳng\r\n•	Màn hình:\r\n27 inchFull HD (1920 x 1080)280 Hz\r\n•	Công nghệ màn hình:\r\nASUS Dynamic Shadow BoostDisplayHDR 400Màn hình chống chói\r\n•	Tấm nền:\r\nIPS\r\n•	Số lượng màu:\r\n16.7 triệu màu\r\n•	Độ tương phản:\r\n1000:1\r\n•	Thời gian đáp ứng:\r\n1 ms\r\n•	Góc nhìn:\r\n178°(Dọc) / 178°(Ngang)\r\n•	Tiện ích:\r\nCó loa tích hợpThay đổi được chiều cao\r\n•	Cổng kết nối:\r\n2 x HDMIDisplay Port\r\n', '', 1, 7),
(33, 'Router Wifi Totolink N200RE-V4', '033', '270000', '1654866869_33_1.jpg', '1654866869_33_2.jpg', '1654866869_33_3.jpg', '1654866869_33_4.jpg', 'Hỗ trợ Wi-Fi chuẩn IEEE 802.11b/g/n, tốc độ đạt đến 300Mbps. 2 Anten độ lợi cao 2 x 5dBi. Tính năng multi SSID, IPTV, QoS. Lập lịch kiểm soát Wi-Fi, Reboot.\r\nHỗ trợ cài đặt dễ dàng trên điện thoại. Tính năng Repeater, WISP, WDS dễ dàng mở rộng sóng từ bất kỳ nguồn phát nào.\r\nNâng cấp chipset so với phiên bản V3, chip phát Wi-Fi công suất cao hơn so với V3.\r\n', 'Giao tiếp: 2 x 100Mbps LAN Ports, 1 x 100Mbps WAN Port Tốc độ: Up to 300Mbps Anten: 2 ăng ten liền 5dBi Nguồn: 9V DC/ 0.5A\r\n', 3, 25),
(32, 'Bộ mở rộng sóng WiFi TOTOLINK EX200', '032', '250000', '1654866752_32_1.jpg', '1654866752_32_2.jpg', '1654866752_32_3.jpg', '1654866752_32_4.jpg', 'TotoLink là thương hiệu nổi bật với nhiều dòng sản phẩm thiết bị mạng đa dạng cùng chất lượng tương đối tốt và nhận được sự tin tưởng lớn từ nhiều nhóm người dùng khác nhau. Tới với sản phẩm lần này, Extender ToToLink EX200, đây là bộ kích sóng Wi Fi chuẩn IEEE 802.11n, giúp đáp ứng các yêu cầu của bạn cho việc mở rộng không gian mạng không dây hiệu quả hơn.\r\nCấu tạo \r\nExtender ToToLink EX200 có thiết kế cắm tường gọn nhẹ cùng kết cấu khá đơn giản. Sản phẩm có bố trí một số khe thoát nhiệt để tản nhiệt hiệu quả hơn để thiết bị không quá nóng khi phải hoạt động liên tục trong thời gian dài. Bạn cũng có dãy đèn tín hiệu để báo cho bạn biết trạng thái hoạt động của thiết bị trong khi toàn bộ cổng kết nối được bố trí ở mặt trên. Thiết bị cũng có cổng mạng RJ45 cho khả năng tự động đo tốc độ liên kết của các thiết bị ngoài (10 / 100 Mbps) và sẽ tự điều chỉnh để hoàn toàn tương thích với môi trường mạng và đạt hiệu suất tối ưu.\r\nĐặc biệt, Extender ToToLink EX200 có nút chức năng WPS (Wi Fi Protected Setup), cung cấp khả năng thiết lập để có kết nối nhanh an toàn. Bên cạnh đó, sản phẩm được trang bị 2 ăng ten với độ lợi tín hiệu 4 dBi, mặc dù không có khả năng tháo rời nhưng vẫn tương đối linh hoạt với chức năng xoay để định hướng sóng Wi Fi tốt hơn. Đây cũng là một nhược điểm của thiết bị khi độ lợi tín hiệu của tín hiệu không đạt được mức 5 dBi thông thường.\r\n', 'Giao tiếp: 1 *10/100BaseTX (Auto MDI/MDIX) RJ45 port Màu sắc: Trắng Tốc độ: 2.4GHz: Lên đến 300Mbps Anten: 2 anten ngoài 4dBi Nguồn: Đầu vào AC 100V~240V\r\n', 3, 25),
(31, 'Router Wifi TP-Link TL-WR844N', '031', '269000', '1654866675_31_1.jpg', '1654866675_31_2.jpg', '1654866675_31_3.jpg', '1654866675_31_4.jpg', 'Router Wifi Tplink TL-WR844N giúp người dùng sử dụng các thiết bị kết nối không dây có kết nối mạng ổn định hơn. Tốc độ không dây có thể lên đến 300Mbps, lướt mạng ổn định, cải thiện tốc độ tốt hơn đây là một giải pháp hoàn hảo cho những hộ gia đình, công ty nhỏ lẻ cần cải thiện lại đường truyền mạng. Để việc sử dụng các thiết bị kết nối làm việc giải trí nhanh hơn. \r\nThiết kế tinh tế\r\nBộ định tuyến Tplink TL-WR844N có vẻ ngoài khá tinh tế, thanh lịch với những đường vân tinh xảo, dễ vệ sinh, bảo quản và tô điểm cho nội thất nhà bạn.\r\nĐộ phủ sóng cao\r\nThiết bị trang bị 2 ăng-ten ngoài với độ lợi 5dBi, độ phủ sóng cao và ổn định cho các kết nối từ nhiều thiết bị khác nhau. Với những căn hộ vừa và nhỏ thì bộ định tuyến này khá phù hợp để cải thiện cho tốc độ mạng.\r\nChức năng kiểm soát an toàn\r\nRouter Wifi Tplink TL-WR844N hỗ trợ chức năng kiểm soát cho phép phụ huynh hoặc người quản trị có thể hạn chế truy cập của nhân viên hoặc các thành viên trong gia đình. Với tính năng chặn các địa chỉ web bạn có thể cài đặt đơn giản các danh sách web cấm hoặc cho phép những web được xem tại nhà. Điều này giúp hạn chế cho trẻ truy cập vào những trang web xấu.\r\nCài đặt và quản lý đơn giản\r\nTplink TL-WR844N có giao diện quản lý trực quan và ứng dụng tiện ích Tether nên giúp người sử dụng cài đặt nhanh hơn. Và ứng dụng Tether sử dụng được trên di động giúp bạn truy cập và quản lý Router mọi lúc mọi nơi cho phép bạn truy cập nhanh nhất có thể.\r\n', 'Giao tiếp: 1× 10/100M WAN Port + 4× 10/100M LAN Ports Màu sắc: Trắng Tốc độ: 2.4 GHz: 300 Mbps (802.11n) Anten: 2x Ăng ten cố định Nguồn: 5 V ⎓ 0,6 A\r\n', 3, 24),
(30, 'Router Wifi TP-LINK TL-WR820N', '030', '239000', '1654866594_30_1.jpg', '1654866594_30_2.jpg', '1654866594_30_3.jpg', '1654866594_30_3.jpg', 'TL-WR820N hoàn toàn tương thích với chuẩn 802.11b/g/n, cung cấp kết nối Wi-Fi tốc độ cao, giờ đây bạn hoàn toàn có thể dễ dàng tận hưởng mạng Wi-Fi 300Mbps cho các ứng dụng gia đình như coi video HD online, chơi game online hoặc tải về các tập tin dung lượng lớn. Tín Hiệu Mạnh – Vùng Phủ Rộng Lớn\r\nSỡ hữu hai ăng ten ngoài 5dBi mạnh mẽ cùng với công nghệ 2x2 MIMO, TL-WR820N dễ dàng mang đến cho bạn kết nối tốc độ cao với vùng phủ rộng lớn.\r\nHỗ trợ IPTV mượt mà\r\nTL-WR820N hỗ trợ IGMP Proxy/ Snooping và Tag VLAN giúp bạn dễ dàng tận hưởng dịch vụ IPTV tốc độ cao mượt mà hơn.\r\nMạng khách\r\nMạng Khách đem lại sự an toàn cho hệ thống mạng gia đình của bạn. Chia sẻ, nhưng luôn bảo mật.\r\nThiết kế cao cấp\r\nKiểu dáng thanh lịch và sang trọng, hoàn toàn phù hợp với thiết kế ngôi nhà của bạn. Mặt tản nhiệt phía trên sẽ giúp thiết bị có thể hoạt động bền bỉ với hiệu suất ổn định trong thời gian dài.\r\nTương thích IPv6\r\nTương thích với giao thức IPv6 – Sẵn sàng cho trải nghiệm trong tương lai.\r\n', 'Giao tiếp: 2 cổng LAN 10/100Mbps 1 cổng WAN 10/100Mbps Tốc độ: 11n: Lên đến 300Mbps(Động) 11g: Lên đến 54Mbps(Động) 11b: Lên đến 11Mbps(Động) Anten: 2 ăng ten 5dBi đẳng hướng cố định\r\n', 3, 24),
(29, 'USB wifi TP-Link TL-WN823N', '029', '199000', '1654866503_29_1.jpg', '1654866503_29_2.png', '1654866503_29_1.jpg', '1654866503_', 'Card mạng USB không dây chuẩn N TL-WN823N được thiết kế để kết nối  máy xách tay hay máy bàn vào  mạng không dây và thế là thưởng thức được 1 sự hoàn hảo không dây tốc độ cao.Thiết kế đầu ngón tay làm cho các bộ chuyển đổi thuận tiện và dễ dàng để mang theo.Hơn nữa, TL-WN823N có tính năng SoftAP Mode, thiết lập bảo mật bằng một nút bấm,dễ dàng để sử dụng cấu hình phần mềm, biến nó thành một sự lựa chọn tuyệt vời để thưởng thức mạng không dây nhanh chóng.Với tốc độ không dây lên tới 300Mbps và công nghệ MIMO tân tiến, TL-WN823N cung cấp cho bạn 1 kết nối không dây nhanh, đáng tin cậy để chơi game trực tuyến và xem video không bị lag. Tốt hơn nữa, TL-WN823N đạt được sự trình diễn tốt nhất với thiết bị N, và còn làm việc 1 cách liền mạch với mạng IEEE chuẩn 802.11b/g.', 'Giao tiếp: USB Màu sắc: Đen\r\n', 3, 24),
(24, 'Laptop Surface Pro 7 i5 1035G4/8GB/128GB/Touch/Win10', '024', '21890000', '1653967114_11.jpg', '1653967114_12.jpg', '1653967114_13.jpg', '1653967114_14.jpg', '•	CPU: i51035G41.1GHz\r\n•	RAM: 8 GBLPDDR4X (On board)3733 MHz\r\n•	Ổ cứng: 128 GB SSD M2 PCIe\r\n•	Màn hình: 12.3\"2K\r\n•	Card màn hình: Card tích hợpIntel Iris Plus\r\n•	Cổng kết nối: 1 x Surface ConnectJack tai nghe 3.5 mmUSB 3.0USB Type-C\r\n•	Đặc biệt: Có màn hình cảm ứng\r\n•	Hệ điều hành: Windows 10 Home SL\r\n•	Thiết kế: Kim loại Magie\r\n•	Kích thước, trọng lượng: Dài 201 mm - Rộng 292 mm - Dày 8.5 mm - Nặng 0.775 kg\r\n\r\n', '•	Thời điểm ra mắt: 2020', 2, 15),
(28, 'USB TP-LINK UB400', '028', '129000', '1654866428_28_1.jpg', '1654866428_28_2.jpg', '1654866428_28_3.jpg', '1654866428_28_4.jpg', 'USB TP-LINK UB400 biến PC hoặc máy tính xách tay không có Bluetooth thành thiết bị được trang bị Bluetooth bằng cách áp dụng Bluetooth 4.0 mới nhất với công nghệ tiết kiệm năng lượng (BLE) và thiết bị tương thích ngược với Bluetooth V3.0/2.1/2.0/1.1. Chỉ cần kết nối các thiết bị Bluetooth của bạn với máy tính và tận hưởng nó một cách dễ dàng. USB TP-LINK UB400 đạt khoảng cách truyền lên tới 10m, bạn có thể thưởng thức âm nhạc không bị gián đoạn qua tai nghe Bluetooth mà không cần phải ở gần ngay xung quanh máy tính của bạn.USB TP-LINK UB400  sở hữu thiết kế nhỏ gọn, đẹp mắt, bạn có thể cắm bộ chuyển đổi nano vào bất kỳ cổng USB nào để sử dụng và bất kể khi nào, dù bạn đang đi du lịch hoặc ở nhà.', 'Giao tiếp: 1 cổng USB 2.0 Tốc độ: Bluetooth 4.0 Anten: 1 ăng ten ngầm\r\n', 3, 24),
(17, 'Laptop Dell Gaming Alienware m15 R6 i7 11800H/32GB/1TB SSD/6GB RTX3060/165Hz/Office H&S/Win11 (P109F001DBL)', '017', '59990000', '1653966372_6.jpg', '1653966372_7.jpg', '1653966372_8.jpg', '1653966372_9.jpg', '•	CPU: i711800H2.30 GHz\r\n•	RAM: 16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz\r\n•	Ổ cứng: 1 TB SSD M.2 PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB)\r\n•	Màn hình: 17\"4K/UHD+ (3840 x 2400)\r\n•	Card màn hình: Card rờiRTX 3050 4GB\r\n•	Cổng kết nối: 4 x Thunderbolt 4Jack tai nghe 3.5 mm\r\n•	Đặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL + Office Home & Student 2021 vĩnh viễn\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 374,.48 - Rộng 248.08 mm - Dày 13.15 mm - Nặng 2.53 kg\r\n', '•	Thời điểm ra mắt: 2021\r\n', 2, 11),
(18, 'Laptop Dell XPS 17 9710 i7 11800H/16GB/1TB SSD/4GB RTX3050/Touch/Cáp/Office H&S/Win11 (XPS7I7001W1)', '018', '72990000', '1653966446_11.jpg', '1653966446_12.jpg', '1653966446_13.jpg', '1653966446_14.jpg', '•	CPU: i711800H2.30 GHz\r\n•	RAM: 16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz\r\n•	Ổ cứng: 1 TB SSD M.2 PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB)\r\n•	Màn hình: 17\"4K/UHD+ (3840 x 2400)\r\n•	Card màn hình: Card rờiRTX 3050 4GB\r\n•	Cổng kết nối: 4 x Thunderbolt 4Jack tai nghe 3.5 mm\r\n•	Đặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL + Office Home & Student 2021 vĩnh viễn\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 374,.48 - Rộng 248.08 mm - Dày 13.15 mm - Nặng 2.53 kg\r\n•	Thời điểm ra mắt: 2021\r\n', '', 2, 11),
(19, 'Laptop MSI Creator Z16P B12UGST i7 12700H/32GB/2TB SSD/8GB RTX3070Ti Max-Q/165Hz/Túi/Chuột/Win11 (050VN)', '019', '78990000', '1653966646_1.jpg', '1653966646_2.jpg', '1653966646_3.jpg', '1653966646_4.jpg', '•	CPU: i712700H2.30 GHz\r\n•	RAM: 32 GBDDR5 2 khe (1 khe 16GB + 1 khe 16GB)5200 MHz\r\n•	Ổ cứng: 2 TB SSD NVMe PCIeHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB)\r\n•	Màn hình: 16\"QHD+ (2560 x 1600)165Hz\r\n•	Card màn hình: Card rờiRTX 3070Ti Max-Q 8GB\r\n•	Cổng kết nối: 1 x USB 3.2Jack tai nghe 3.5 mmThunderbolt 4 USB-CUSB Type-C\r\n•	Đặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 359 mm - Rộng 256 mm - Dày 19 mm - Nặng 2.39 kg\r\n\r\n', '•	Thời điểm ra mắt: 2022', 2, 14),
(20, 'Laptop MSI Gaming GS66 Stealth 11UG i7 11800H/32GB/2TB SSD/8GB RTX3070 Max-Q/360Hz/Balo/Chuột/Win10 (219VN)', '020', '53990000', '1653966701_6.jpg', '1653966701_7.jpg', '1653966701_8.jpg', '1653966701_9.jpg', '•	CPU: i711800H2.30 GHz\r\n•	RAM: 32 GBDDR4 2 khe (1 khe 16GB + 1 khe 16GB)3200 MHz\r\n•	Ổ cứng: 2 TB SSD NVMe PCIeHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB)\r\n•	Màn hình: 15.6\"Full HD (1920 x 1080)360Hz\r\n•	Card màn hình: Card rờiRTX 3070 Max-Q 8GB\r\n•	Cổng kết nối: 3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)Thunderbolt 4 USB-CUSB Type-C\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 10 Home SL\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 358.3 mm - Rộng 248 mm - Dày 19.8 mm - Nặng 2.1 Kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 14),
(21, 'Laptop MSI Gaming Stealth 15M A11UEK i7 11375H/16GB/512GB/6GB RTX3060 Max-Q/144Hz/Balo/Chuột/Win10 (254VN)', '021', '36790000', '1653966755_11.jpg', '1653966755_12.jpg', '1653966755_13.jpg', '1653966755_14.jpg', '•	CPU: i711375H3.3GHz\r\n•	RAM: 16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)\r\n•	Màn hình: 15.6\"Full HD (1920 x 1080)144Hz\r\n•	Card màn hình: Card rờiRTX 3060 Max-Q 6GB\r\n•	Cổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmThunderbolt 4 USB-CUSB Type-C\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 10 Home SL\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 358.3 mm - Rộng 248 mm - Dày 16.15 mm - Nặng 1.7 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 14),
(22, 'Laptop Surface Pro 8 i5 1135G7/8GB/256GB/Touch/120Hz/Win11 (DR1-00003)', '022', '30390000', '1653966847_1.jpg', '1653966847_2.jpg', '1653966847_3.jpg', '1653966847_4.jpg', '•	CPU: i51135G72.4GHz\r\n•	RAM: 8 GBLPDDR4X (On board)4267 MHz\r\n•	Ổ cứng: 256 GB SSD NVMe PCIe\r\n•	Màn hình: 13\"2880 x 1920120Hz\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 1 x Surface Connect2 x Thunderbolt 4 USB-CJack tai nghe 3.5 mm\r\n•	Đặc biệt: Có màn hình cảm ứng\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ kim loại nguyên khối\r\n•	Kích thước, trọng lượng: Dài 287 mm - Rộng 208 mm - Dày 9.3 mm - Nặng 0.891 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 0),
(23, 'Surface Laptop Go i5 1035G1/8GB/256GB/Touch/Win10 (THJ-00001)', '023', '21190000', '1653967049_6.jpg', '1653967049_7.jpg', '1653967049_8.jpg', '1653967049_9.jpg', '•	CPU: i51035G11.00 GHz\r\n•	RAM: 8 GBLPDDR4X (On board)3733 MHz\r\n•	Ổ cứng: 256 GB SSD NVMe PCIeKhông hỗ trợ nâng cấp, không hỗ trợ thêm khe cắm mở rộng nào khác\r\n•	Màn hình: 12.4\"1536 x 1024 (148 PPI)\r\n•	Card màn hình: Card tích hợpIntel UHD\r\n•	Cổng kết nối: 1 x Surface Connect1 x USB AJack tai nghe 3.5 mmUSB Type-C\r\n•	Đặc biệt: Có màn hình cảm ứng\r\n•	Hệ điều hành: Windows 10 Home SL\r\n•	Thiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\n•	Kích thước, trọng lượng: Dài 278.18 mm - Rộng 205.67 mm - Dày 15.69 mm - Nặng 1.11 kg\r\n\r\n', '•	Thời điểm ra mắt: 2020', 2, 15),
(13, 'Laptop Acer Swift X SFX16 51G 516Q i5 11320H/16GB/512GB/4GB RTX3050/Win11 (NX.AYKSV.002)', '013', '26090000', '1653966135_1.jpg', '1653966135_2.jpg', '1653966135_3.jpg', '1653966135_4.jpg', '•	CPU: i511320H3.2GHz\r\n•	RAM: 16 GBLPDDR4X (On board)4266 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)\r\n•	Màn hình: 16.1\"Full HD (1920 x 1080)\r\n•	Card màn hình: Card rờiRTX 3050 4GB\r\n•	Cổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmThunderbolt 4 USB-C\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 367.8 mm - Rộng 236.1 mm - Dày 18.9 mm - Nặng 1.9 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 13),
(14, 'Laptop Acer Aspire A514 54 511G i5 1135G7/8GB/1TB SSD/Win11 (NX.A28SV.009)', '014', '17990000', '1653966184_6.jpg', '1653966184_7.jpg', '1653966184_8.jpg', '1653966184_9.jpg', '•	CPU: i51135G72.4GHz\r\n•	RAM: 8 GBDDR4 (On board 4GB +1 khe 4GB)3200 MHz\r\n•	Ổ cứng: 1 TB SSD M.2 PCIeHỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)\r\n•	Màn hình: 14\"Full HD (1920 x 1080)\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 1 x USB 2.02 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\n•	Kích thước, trọng lượng: Dài 328 mm - Rộng 223 mm - Dày 17.95 mm - Nặng 1.46 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 13),
(15, 'Laptop Acer Aspire 7 Gaming A715 42G R05G R5 5500U/8GB/512GB/4GB GTX1650/144Hz/Win11 (NH.QAYSV.007)', '015', '18290000', '1653966250_11.jpg', '1653966250_12.jpg', '1653966250_13.jpg', '1653966250_14.jpg', '•	CPU: Ryzen 55500U2.1GHz\r\n•	RAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Không hỗ trợ khe cắm HDDKhông hỗ trợ khe cắm SSD M2 mở rộng thêm\r\n•	Màn hình: 15.6\"Full HD (1920 x 1080)144Hz\r\n•	Card màn hình: Card rờiGTX 1650 4GB\r\n•	Cổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB 2.0USB Type-C\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ nhựa\r\n•	Kích thước, trọng lượng: Dài 363.4 mm - Rộng 254.5 mm - Dày 22.9 mm - Nặng 2.1 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 13),
(16, 'Laptop Dell XPS 13 9310 i5 1135G7/8GB/512GB/Cáp/Office H&S/Win11 (70273578)', '016', '37790000', '1653966314_1.jpg', '1653966314_2.jpg', '1653966314_3.jpg', '1653966314_4.jpg', '•	CPU: i51135G72.4GHz\r\n•	RAM: 8 GBLPDDR4X (On board)4267 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)\r\n•	Màn hình: 13.4\"Full HD+ (1920 x 1200)\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 2 x Thunderbolt 4 USB-CJack tai nghe 3.5 mm\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL + Office Home & Student 2021 vĩnh viễn\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 295 mm - Rộng 198 mm - Dày 14.8 mm - Nặng 1.2 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 11),
(11, 'Laptop Lenovo Gaming Legion 5 15ITH6 i7 11800H/16GB/512GB/4GB RTX3050Ti/165Hz/Win11 (82JK00FNVN)', '011', '39990000', '1653965912_6.jpg', '1653965912_7.jpg', '1653965912_8.jpg', '1653965912_9.jpg', '•	CPU: i711800H2.30 GHz\r\n•	RAM: 16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB (2280) / 512GB (2242))Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng\r\n•	Màn hình: 15.6\"Full HD (1920 x 1080)165Hz\r\n•	Card màn hình: Card rờiRTX 3050Ti 4GB\r\n•	Cổng kết nối: 1 x USB 3.2 (Always on)2 x Thunderbolt 4 USB-C3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ nhựa\r\n•	Kích thước, trọng lượng: Dài 362.56 mm - Rộng 260.61 mm - Dày 25.75 mm - Nặng 2.4 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 12),
(12, 'Laptop Lenovo YOGA Slim 7 Carbon 13ITL5 i5 1135G7/16GB/512GB/Win10 (82EV0016VN)', '012', '28990000', '1653965967_11.jpg', '1653965967_12.jpg', '1653965967_13.jpg', '1653965967_14.jpg', '•	CPU: i51135G72.4GHz\r\n•	RAM: 16 GBLPDDR4X (On board)4266 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB (2280) / 512GB (2242))\r\n•	Màn hình: 13.3\"QHD (2560 x 1600)\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 2 x Thunderbolt 4 USB-CJack tai nghe 3.5 mmUSB Type-C\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 10 Home SL\r\n•	Thiết kế: Mặt lưng Carbon - Chiếu nghỉ tay bằng Nhôm Magie\r\n•	Kích thước, trọng lượng: Dài 295.88 mm - Rộng 208.85 mm - Dày 15 mm - Nặng 0.966 kg\r\n\r\n', '•	Thời điểm ra mắt:2020', 2, 12),
(8, 'Laptop HP EliteBook X360 1040 G8 i7 1165G7/16GB/512GB/Touch/Pen/Win10 Pro (3G1H4PA) ', '08', '46090000', '1653965726_6.jpg', '1653965726_7.jpg', '1653965726_8.jpg', '1653965726_9.jpg', '•	CPU: i71165G72.8GHz\r\n•	RAM: 16 GBLPDDR4X (On board)4267 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe\r\n•	Màn hình: 14\"Full HD (1920 x 1080)\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 2 x Thunderbolt 4 USB-C2 x USB 3.1HDMIJack tai nghe 3.5 mm\r\n•	Đặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\n•	Hệ điều hành: Windows 10 Pro\r\n•	Thiết kế: Vỏ kim loại nguyên khối\r\n•	Kích thước, trọng lượng: Dài 303.7 mm - Rộng 193.9 mm - Dày 16.1 mm - Nặng 1.25 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 10),
(9, 'Laptop HP ZBook Firefly 14 G8 i5 1135G7/16GB/512GB/4GB Quadro T500/Win10 Pro (275V5AV)', '09', '38090000', '1653965785_11.jpg', '1653965785_12.jpg', '1653965785_13.jpg', '1653965785_14.jpg', '•	CPU: i51135G72.4GHz\r\n•	RAM: 16 GBDDR4 2 khe (8 GB onboard + 8 GB onboard)3200 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe\r\n•	Màn hình: 14\"Full HD (1920 x 1080)\r\n•	Card màn hình: Card rờiNVIDIA QuadroT500, 4GB\r\n•	Cổng kết nối: 2 x Thunderbolt 4 USB-C2x SuperSpeed USB AHDMIJack tai nghe 3.5 mm\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 10 Pro\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 323 mm - Rộng 214.6 mm - Dày 17.9 mm - Nặng 1.35 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 10),
(10, 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10 (82MA003UVN) ', '010', '35990000', '1653965852_1.jpg', '1653965852_2.jpg', '1653965852_3.jpg', '1653965852_4.jpg', '•	CPU: i71165G72.8GHz\r\n•	RAM: 16 GBDDR4 2 khe (8 GB onboard + 8 GB onboard)3200 MHz\r\n•	Ổ cứng: 1 TB SSD\r\n•	Màn hình: 13\"WQHD (2160x1350)\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 2 x USB Type-CJack tai nghe 3.5 mmThunderbolt 4\r\n•	Đặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\n•	Hệ điều hành: Windows 10 Home SL\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 297.4 mm - Rộng 207.4 mm - Dày 9.19 mm - Nặng 0.799 kg\r\n', '•	Thời điểm ra mắt: 2022\r\n', 2, 12),
(7, 'Laptop HP Gaming VICTUS 16 e0170AX R7 5800H/8GB/512GB/4GB RTX3050Ti/144Hz/Win11 (4R0U7PA)', '07', '25990000', '1653965663_1.jpg', '1653965663_2.jpg', '1653965663_3.jpg', '1653965663_4.jpg', '•	CPU: Ryzen 75800H3.2GHz\r\n•	RAM: 8 GBDDR4 2 khe (1 khe 4GB + 1 khe 4GB)3200 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)\r\n•	Màn hình: 16.1\"Full HD (1920 x 1080)144Hz\r\n•	Card màn hình: Card rờiRTX 3050Ti 4GB\r\n•	Cổng kết nối: 1x USB 3.1 Gen 1 Type-A ( HP Sleep and Charge)1x USB 3.1 Gen 1 Type-C (support Power Delivery, DisplayPort, HP Sleep and Charge)2 x USB 3.1HDMIJack tai nghe 3.5 mmLAN (RJ45)\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ nhựa\r\n•	Kích thước, trọng lượng: Dài 370 mm - Rộng 260 mm - Dày 23.5 mm - Nặng 2.46 kg\r\n\r\n', '•	Thời điểm ra mắt: 2021', 2, 10),
(5, 'Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GB/Cáp/Túi/Win11 (KI839W) ', '05', '22990000', '1653965437_6.jpg', '1653965437_7.jpg', '1653965437_8.jpg', '1653965437_9.jpg', '•	CPU: i51135G72.4GHz\r\n•	RAM: 8 GBLPDDR4X (On board)4266 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe\r\n•	Màn hình: 14\"Full HD (1920 x 1080)\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 1 x USB 3.22 x Thunderbolt 4 USB-CHDMI\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ kim loại nguyên khối\r\n•	Kích thước, trọng lượng: Dài 319 mm - Rộng 208 mm - Dày 13.9 mm - Nặng 1.17 kg\r\n•	Thời điểm ra mắt: 2021\r\n', '', 2, 7),
(6, 'Laptop Asus ZenBook UX482EA i5 1135G7/8GB/512GBTouch/Pen/Túi/Stand/Win11 (KA397W) ', '06', '32990000', '1653965504_11.jpg', '1653965504_12.jpg', '1653965504_13.jpg', '1653965504_14.jpg', '•	CPU: i51135G72.4GHz\r\n•	RAM: 8 GBLPDDR4X (On board)4267 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe\r\n•	Màn hình: 14\"Full HD (1920 x 1080)\r\n•	Card màn hình: Card tích hợpIntel Iris Xe\r\n•	Cổng kết nối: 1 x USB 3.22 x Thunderbolt 4 USB-CHDMIJack tai nghe 3.5 mm\r\n•	Đặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ kim loại\r\n•	Kích thước, trọng lượng: Dài 324 mm - Rộng 222 mm - Dày 17.3 mm - Nặng 1.62 kg\r\n•	Thời điểm ra mắt: 2021\r\n', '', 1, 1),
(1, 'Laptop Apple MacBook Pro 16 M1 Pro 2021 10 core-CPU/16GB/512GB/16 core-GPU', '01', '61490000', '1653964950_1.jpg', '1653964950_2.jpg', '1653964950_3.jpg', '1653964950_4.jpg', '•	CPU: Apple M1 Pro200GB/s memory bandwidth\r\n•	RAM: 16 GB\r\n•	Ổ cứng: 512 GB SSD\r\n•	Màn hình: 16.2\"Liquid Retina XDR display (3456 x 2234)120Hz\r\n•	Card màn hình: Card tích hợp16 core-GPU\r\n•	Cổng kết nối: 3 x Thunderbolt 4 USB-CHDMIJack tai nghe 3.5 mm\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Mac OS\r\n•	Thiết kế: Vỏ kim loại nguyên khối\r\n•	Kích thước, trọng lượng: Dài 355.7 mm - Rộng 248.1 mm - Dày 16.8 mm - Nặng 2.2 kg\r\n•	Thời điểm ra mắt: 10/2021\r\n', '', 2, 1),
(2, 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU (Z124000DE)', '02', '28990000', '1653965237_6.jpg', '1653965237_7.jpg', '1653965237_8.jpg', '1653965237_9.jpg', '•	CPU: Apple M1\r\n•	RAM: 16 GB\r\n•	Ổ cứng: 256 GB SSD\r\n•	Màn hình: 13.3\"Retina (2560 x 1600)\r\n•	Card màn hình: Card tích hợp7 nhân GPU\r\n•	Cổng kết nối: 2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Mac OS\r\n•	Thiết kế: Vỏ kim loại nguyên khối\r\n•	Kích thước, trọng lượng: Dài 304.1 mm - Rộng 212.4 mm - Dày 4.1 mm đến 16.1 mm - Nặng 1.29 kg\r\n•	Thời điểm ra mắt: 2020\r\n', '', 2, 1),
(3, 'Laptop Apple MacBook Air M1 2020 16GB/512GB/8-core GPU', '03', '36490000', '1653965298_11.jpg', '1653965298_12.jpg', '1653965298_13.jpg', '1653965298_14.jpg', '•	CPU: Apple M1\r\n•	RAM: 16 GB\r\n•	Ổ cứng: 512 GB SSD\r\n•	Màn hình: 13.3\"Retina (2560 x 1600)\r\n•	Card màn hình: Card tích hợp8 nhân GPU\r\n•	Cổng kết nối: 2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\n•	Đặc biệt: Có đèn bàn phím\r\n•	Hệ điều hành: Mac OS\r\n•	Thiết kế: Vỏ kim loại nguyên khối\r\n•	Kích thước, trọng lượng: Dài 304.1 mm - Rộng 212.4 mm - Dày 4.1 mm đến 16.1 mm - Nặng 1.29 kg\r\n•	Thời điểm ra mắt: 2020\r\n', '', 2, 1),
(4, 'Laptop Asus Vivobook 15 X1502ZA i5 1240P/8GB/512GB/Win11 (EJ120W) ', '04', '17990000', '1653965367_1.jpg', '1653965367_2.jpg', '1653965367_3.jpg', '1653965367_4.jpg', '•	CPU: i51240P3.3GHz\r\n•	RAM: 8 GBDDR4 2 khe (1 khe 8GB onboard + 1 khe trống)3200 MHz\r\n•	Ổ cứng: 512 GB SSD NVMe PCIe\r\n•	Màn hình: 15.6\"Full HD (1920 x 1080)\r\n•	Card màn hình: Card tích hợpIntel UHD\r\n•	Cổng kết nối: 1 x USB 2.02 x USB 3.2HDMIJack tai nghe 3.5 mmUSB Type-C\r\n•	Hệ điều hành: Windows 11 Home SL\r\n•	Thiết kế: Vỏ nhựa\r\n•	Kích thước, trọng lượng: Dài 359.7 mm - Rộng 232.5 mm - Dày 19.9 mm - Nặng 1.7 kg\r\n•	Thời điểm ra mắt: 2022\r\n', '', 2, 7),
(36, 'Cable UTP Kingmaster KM061 Cat 5e 1m', '036', '25000', '1654867087_36_1.jpg', '1654867087_37_2.jpg', '1654867087_37_3.jpg', '1654867087_37_4.jpg', '\r\nChiều dài cáp:1M, cáp chuẩn Cat 5e với tần số 100 MHz, tiêu chuẩn truyền dẫn T568B, giao diện nhận RJ45.8PIN, tốc độ truyền dẫn đạt Gigabit 10 / 100 Mbps. Bên ngoài che phủ PVC nguyên chất cao cấp.', 'Giao tiếp: RJ45.8PIN Chiều dài dây: 1m Loại Cable: Cat 5e', 3, 26),
(37, 'Cable UTP Kingmaster KM062 Cat 5e 2m', '037', '30000', '1654867282_37_1.jpg', '1654867282_37_2.jpg', '1654867282_37_3.jpg', '1654867282_37_4.jpg', 'Chiều dài cáp:2M, cáp chuẩn Cat 5e với tần số 100 MHz, tiêu chuẩn truyền dẫn T568B, giao diện nhận RJ45.8PIN, tốc độ truyền dẫn đạt Gigabit 10 / 100 Mbps. Bên ngoài che phủ PVC nguyên chất cao cấp.', 'Giao tiếp: RJ45.8PIN Chiều dài dây: 2m Loại Cable: Cat 5e\r\n', 3, 26),
(38, 'Cable mạng Link Pro cat 5e UTP', '038', '420000', '1654867358_38_1.jpg', '1654867358_38_2.jpg', '1654867358_38_1.jpg', '1654867358_', 'Đang cập nhật', 'Chiều dài dây: 100m Loại Cable: cat 5e UTP\r\n', 3, 27),
(39, 'Cable mạng Link Pro cat 5e FTP', '039', '560000', '1654867424_39_1.jpg', '1654867424_39_2.jpg', '1654867424_39_1.jpg', '1654867424_', 'Đang cập nhật', 'Chiều dài dây: 100m Loại Cable: cat 5e FTP\r\n', 3, 27),
(40, 'TP-Link TL-SF1005D', '040', '180000', '1654867486_40_1.jpg', '1654867486_40_2.jpg', '1654867486_40_3.jpg', '1654867486_40_4.jpg', 'Thiết bị TL-SF1005D là một bộ chia tín hiệu nhỏ nhắn với 5 cổng có tốc độ 10/100Mbps mang lại cho người dùng một phương thức dễ dàng trong việc mở rộng hệ thống mạng đi dây. Tất cả 5 cổng này đều hỗ trợ tính năng auto-MDI/MDIX, giúp bạn không còn lo lắng về vấn đề dây cáp lằng nhằng. Nổi bật với chế độ full duplex, thiết bị này có thể xử lý dữ liệu với tốc độ lên đến 200Mbps nhờ vậy mà người dùng sẽ cảm thấy an tâm khi muốn mở rộng hệ thống mạng hiệu suất cao nơi mình đang sử dụng. Bên cạnh đó, với công nghệ sử dụng năng lượng tiên tiến, thiết bị TL-SF1005D có thể giúp bạn tiết kiệm 60% điện năng, qua đó đem đến một giải pháp thân thiện với môi trường cho hệ thống mạng trong nhà hay văn phòng của bạn.\r\n \r\nBộ chia tín hiệu Ethernet tốc độ cao TL-SF1005D được trang bị 5 cổng RJ45 Auto-Negotiation 10/100Mbps. Tất cả các cổng này đều được hỗ trợ chức năng Auto MDI/MDIX , qua đó có thể loại bỏ được vấn đề sử dụng cáp chéo hoặc các cổng Uplink. Nổi bật với thiết kế ngõ chia tín hiệu không bị chặn, thiết bị TL-SF1005D có thể chuyển tiếp và lọc các gói tin với lưu lượng truyền tải có tốc độ tối đa. Với khung Jumbo 10K, việc truyền tải các tập tin lớn sẽ được cải thiện đáng kể. Cuối cùng là tính năng kiểm soát lưu lượng IEEE 802.3x trong chế độ Full Duplex và áp suất đối với chế độ Half Duplex sẽ giúp loại bỏ khả năng tắc nghẽn lưu lượng và làm cho thiết bị TL-SF1005D hoạt động trơn tru hơn.\r\n', 'Giao tiếp: 5 10/100Mbps RJ45 PortsAUTO Negotiation/AUTO MDI/MDIX Tốc độ: 10/100Mbps\r\n', 3, 24),
(41, 'Đèn bàn Pisen Led Chargeable Lamp', '041', '180000', '1654867666_41_1.jpg', '1654867666_41_2.jpg', '1654867666_41_3.jpg', '1654867666_41_4.jpg', 'Đèn Led tích hợp Pin dùng làm việc, học tập. Đặc biệt cường độ sáng rất thích hợp cho trẻ nhỏ học hành Bề mặt sơn phủ UV sáng bóng tinh tế, có thể uốn deo điều chỉnh theo nhiều hướng khác nhau, đặc biệt gập gọn mang theo. Nút nguồn cảm ứng, tăng giảm cường độ ánh sáng. Sạc đầy chiếu sáng liên tục được trong 4-6h Dùng làm việc, học tập , Thám hiểm, Picnic,… Tiêu chuẩn ECO, Safe, Health', 'Công suất: 1.8W Nguồn: DC 5V-1A\r\n', 5, 28),
(42, 'Bộ 3 đầu chải điện MIPOW FDA USA-CI-200', '042', '290000', '1654867724_42_1.jpg', '1654867724_42_2.jpg', '1654867724_42_3.jpg', '1654867724_42_4.jpg', '.Không như những đầu chải khác, đầu chải Bocali nhỏ nhắn, mềm mượt nhưng đầy chắc chắn chỉ đánh gọn một hàm răng nên dễ dàng làm sạch răng từng khe nhỏ nhất. Việc sử dụng Bocali khá dễ dàng, chỉ cần ấn nút dài trên thân bàn chải là có thể tuỳ chỉnh các tính năng khác nhau.Nhiều chế độ khác nhau được thiết kế đặc biệt dành cho răng nhạy cảm, giúp cho răng trắng sáng và massage nướu răng.Đầu bàn chải không bao gồm máy Mipow Bocali.', 'Tính năng: dành cho răng nhạy cảm, giúp cho răng trắng sáng và massage nướu răng\r\n', 5, 29),
(43, 'Bàn chải điện thông minh MIPOW N2 SONIC (FDA USA) -CI-600', '043', '1090000', '1654867780_43_1.jpg', '1654867780_43_2.jpg', '1654867780_43_3.jpg', '1654867780_43_4.jpg', 'Thiết kế thân thiện gọn nhẹ để đi du lịch và cũng đầy sức mạnh để chăm sóc răng của bạn sạch đẹp nhất. N2 có đầy đủ chức năng của một bàn chải điện thông minh bật nhất có thể đánh rung 32K lần chỉ trong 1 phút. N2 sử dụng công nghệ chống nước IPX7 chống nước tối ưu nhất và hỗ trợ sạc đầy pin N2 chỉ trong 60 phút.\r\nHướng dẫn sử dụng\r\nN2 thực hiện được 3 chức năng chính: deep clean (làm sạch chuyên sâu) – đèn xanh dương, White (làm trắng) – đèn xanh lá, Polish (làm bóng) – xanh dạ quang, không có chức năng masage như phiên bản Bocali Sonic. Bấm liên tiếp sẽ đổi chức năng, nếu dừng từ 5 giây trở lên sẽ bấm tắt hoặc bấm 3 lần liên tục để tắt.\r\n', 'Màu sắc: xanh dương nhẹ, xanh lá, Trắng, hồng, hồng đậm, đen Công suất: 0.6W\r\n', 5, 29),
(44, 'Bàn chải đánh răng điện thông minh MIPOW BOCALI (USA)-CI-200', '044', '1390000', '1654868031_44_1.jpg', '1654868031_44_2.jpg', '1654868031_44_3.jpg', '1654868031_44_4.jpg', 'Bocali là dòng bàn chải đánh răng điện, còn là bác sĩ chăm sóc sức khoẻ răng miệng cho mỗi gia đình. Bocali có thể xem là chiết bàn chải đẹp nhất đến thời điểm hiện tại với thiết kế thời thời trang, sành điệu. Chính vì thế các bạn nữ luôn bị thu hút với chiết Bocali toothbrush này. Song song đó, Bocali cũng được người dùng đánh giá khá cao trên thế giới về chất lượng cũng như thiết kế hoàn thiện. Hướng dẫn sử dụng\r\nViệc sử dụng Bocali khá dễ dàng, chỉ cần ấn nút dài trên thân bàn chải là có thể tuỳ chỉnh các tính năng khác nhau. Nhiều chế độ khác nhau được thiết kế đặc biệt dành cho răng nhạy cảm, giúp cho răng trắng sáng và massage nướu răng. Bocali gồm 4 chế độ sau: Clean (làm sạch răng), White (làm trắng răng), Polish (đánh bóng răng), Gentle (massage nướu). Ngoài các tính năng công nghệ cao nêu trên, Bocali còn có chế độ hẹn giờ giúp người dùng theo dõi thời gian chải cho răng, đảm bảo bạn đã chải đều cho răng và công nghệ rung, khi có báo hiệu rung bạn sẽ biết để di chuyển sang vị trí chải khác ,đây còn gọi là công nghệ sóng âm giúp làm sạch răng.\r\n\r\n', 'Chất liệu: Nhựa trám gốm bóng chống trầy xước, chống bẩn Nguồn: – Input: DC5V,6W – Output: DC5V/1000mA\r\n', 5, 29);
INSERT INTO `tbl_sanpham` (`thutu`, `ten_sanpham`, `ma_sanpham`, `gia_sanpham`, `hinhanh`, `hinh_1`, `hinh_2`, `hinh_3`, `mota`, `thongtin`, `danhmuc`, `nhaphattrien`) VALUES
(45, 'Máy Scan HP ScanJet Pro 3000 S4 (6FW07A)', '045', '9090000', '1654868092_45_1.png', '1654868092_45_2.png', '1654868092_45_3.png', '1654868092_45_4.png', 'Máy Scan HP ScanJet Pro 3000 S4 6FW07A tạo các bản quét với tốc độ lên tới 40 ppm / 80 ipm với chức năng quét hai mặt chụp cả hai mặt cùng một lúc. Dễ dàng chuyển quét thành văn bản có thể chỉnh sửa, tệp PDF có thể tìm kiếm và nhiều loại tệp khác, sử dụng OCR tích hợp.Máy Scan HP ScanJet Pro 3000 S4 6FW07A chụp và sắp xếp tài liệu, danh thiếp và các loại tệp khác với phần mềm giàu tính năng. Tạo ra các bản quét rõ ràng, dễ đọc - độ phân giải lên tới 1.200 dpi.\r\n         Giải phóng không gian cho công việc. HP ScanJet Pro này nhỏ và mỏng - một thiết kế hiện đại hoàn hảo cho máy tính để bàn.\r\n', 'Tính năng: Khay ADF hỗ trợ kích thước tài liệu lên tới 21.6 x 309.9 cm, Định lượng giấy: 40 to 210 g/m²; Khay nạp tài liệu tự động: tiêu chuẩn 50 tờ\r\n', 5, 10),
(46, 'Ribbon Epson LQ310', '046', '130000', '1654868160_46_1.jpeg', '1654868160_46_1.jpeg', '1654868160_', '1654868160_', 'Ribbon Ruy Băng mực dùng cho máy in Epson LQ-310 C13S015639 LQ-310 Ribbon Cartridge', 'Tính năng: dùng cho máy in Epson LQ-310 C13S015639 LQ-310 Ribbon Cartridge\r\n', 5, 30),
(47, 'Máy chiếu EPSON EB-X400', '047', '12990000', '1654868219_47_1.jpg', '1654868219_47_2.jpg', '1654868219_47_3.jpg', '1654868219_', 'Máy chiếu EPSON EB-X400 có Cường độ sáng trắng: 3300 Ansi Lumens.Cường độ sáng màu: 3300 Ansi Lumens.Độ phân giải thực: XGA (1,024 x 768).Độ tương phản: 15.000:1.Bóng đèn: 200W UHE, tuổi thọ 10,000 giờ.Kết nối: HDMI, VGA, Video, S-Video, Audio RCA, USB-A, USB-B.Loa âm thanh: 2W. Chiếu lệch góc: +/-30 độ (dọc, ngang).Chức năng tự khởi động (Auto Power On).Tự động dò tìm tín hiệu ngõ vào.Tự động chỉnh vuông hình ảnh.Multi-PC trình chiếu 4 thiết bị cùng lúc.Trình chiếu hình ảnh từ USB.Cổng USB-B (3 trong 1) trình chiếu hình ảnh, âm thanh.Chức năng tạm dừng trình chiếu, tiết kiệm điện năng.   ', 'Độ phân giải: XGA (1,024 x 768) Giao tiếp: HDMI, VGA, Video, S-Video, Audio RCA, USB-A, USB-B Cường độ sáng: -Cường độ sáng trắng: 3300 Ansi Lumens. -Cường độ sáng màu: 3300 Ansi Lumens. Nguồn: 100 - 240 V AC ±10%, 50/60 Hz\r\n', 5, 30),
(48, 'UPS Sorotec BL650', '048', '990000', '1654868271_48_1.jpg', '1654868271_48_2.jpg', '1654868271_48_1.jpg', '1654868271_', 'Đang cập nhật...', 'Màu sắc: Đen Chất liệu: thân máy: vỏ sắt sơn tĩnh điện Cổng kết nối: Ngõ ra : 2 ổ cắm ngõ ra chuẩn Universal Công suất: 650VA/390W\r\n', 5, 31),
(49, 'UPS Sorotec HP317E 500', '049', '1050000', '1654868323_49_1.jpg', '1654868323_49_1.jpg', '1654868323_', '1654868323_', 'Cung cấp giải pháp nguồn điện liên tục, ổn định giúp thiết bị hoạt động không bị gián đoạn, công việc không bị ngưng trệ và tăng tuổi thọ thiết bị sử dụng được lâu hơn. Chức năng ổn định điện áp AVR (Auto Voltage Regular) tự động điều chỉnh điện áp đầu ra ổn định cung cấp nguồn điện an toàn, liên tục. Bạn không phải lo lắng điện áp không ổn định. Phù hợp với thiết bị có tải nhỏ: thu và phát không dây như Router, Modem, Switch, PC, máy chơi game, thiết bị điện tử trong nhà, văn phòng….. Chỉ với công suất 500VA là bạn đã có thể sử dụng thêm 8 giờ cho Modem WiFi khi bị cúp điện, hoặc 20 phút lưu cho 1 máy tính. Nếu bạn cần linh hoạt, chủ động trong công việc. UPS công suất 1000VA sẽ hỗ trợ bạn tốt hơn với thời gian lưu điện 60 phút cho 1 máy tính và 1 Modem phát WiFi. Thiết bị lưu điện này vừa đồng thời cho phép cấp nguồn dự phòng liên tục vừa hoạt động bảo vệ như ổn áp chống sét.\r\nVới chức năng tiết kiệm điện, UPS cung cấp nguồn điện dự phòng lâu hơn cho thiết bị của bạn. Online lâu hơn, giúp bạn kịp hoàn thành báo cáo, gửi mail cho khách hàng, kịp thời hoàn tất các giao dịch trực tuyến không bị gián đoạn. Tất cả UPS được trang bị chức năng tự động ngắt mạch trong trường hợp quá tải giúp bảo vệ cầu chì và thiết bị điện tử không bị hư hại. UPS duy trì hoạt động với mức tiêu thụ điện rất thấp, giảm thiểu điện năng hao phí, giúp tiết kiệm chi phí . Vỏ nhựa chống cháy, an toàn hơn cho người sử dụng. Hơn 90% giá trị sản phẩm được tái chế, thân thiện với môi trường Lắp đặt đơn giản, dễ dàng thao tác khi sử dụng.\r\n', 'Công suất: 500VA/300W\r\n', 5, 31),
(50, 'Phần mềm diệt virus Bitdefender Antivirus Plus', '050', '90000', '1654868371_50_1.jpg', '1654868371_50_1.jpg', '1654868371_', '1654868371_', 'Đang cập nhật', 'Tính năng: Phần mềm diệt virus\r\n', 5, 32),
(51, 'Phần mềm diệt Virus Bitdefender Mobile Security', '051', '110000', '1654868413_51_1.jpg', '1654868413_51_1.jpg', '1654868413_', '1654868413_', 'Phần mềm diệt Virus Bitdefender Mobile Security giúp cho người dùng có thể Truy cập Internet an toàn, bảo mật dữ liệu cá nhân, mạng lưới bảo vệ toàn cầu. Sản phẩm được thiết kế giao diện đơn giản, dễ sử dụng, tiết kiệm pin, không làm chậm thiết bị và kèm theo dịch vụ hỗ trợ kỹ thuật 24/7.', 'Tính năng: Bảo vệ thiết bị của bạn khỏi các mối đe dọa, an toàn trong giao dịch trực tuyến; Dễ dàng sử dụng. Đơn giản để hiểu. Xử lý an ninh với Autopilot; Phục hồi thiết bị của bạn trong trường hợp mất mát hoặc trộm cắp;\r\n', 5, 32),
(52, 'Bút trình chiếu Newmen P012', '052', '320000', '1654868481_52_1.jpg', '1654868481_52_2.jpg', '1654868481_52_3.png', '1654868481_52_4.jpg', 'Di chuyển với phạm vi lên đến 30 mét, bạn có thể bao quát mọi góc của căn phòng. Bộ thu không dây cắm và chạy giúp bạn dễ dàng bắt đầu. Sử dụng công nghệ không dây 2.4GHz với thiết kế ánh sáng laser đỏ độ sáng cao. Page up, Play (Shift + F5), Page Down, Screen Black Thoát Chế độ phát lại (ESC) (Trong khi nhấn vào trang lên và xuống trang cùng nhau trong khoảng 1 giây).Đèn laser -Red có thể được sử dụng liên tục trong 50 giờ mà không cần thay pin. Đèn báo điện áp thấp nhắc nhở thay pin. USB 2.0 kết nối, cộng và phát (Không cần tải xuống phần mềm & cài đặt trình điều khiển)', 'Màu sắc: Black/Silver\r\n', 5, 33),
(53, 'Bút trình chiếu Zadez ZPT-102', '053', '379000', '1654868527_53_1.jpg', '1654868527_53_1.jpg', '1654868527_', '1654868527_', 'Bút trình chiếu Zadez ZPT-102 có kiểu dáng nhỏ gọn, sang trọng, dễ dàng mang theo bên mình. Các góc sản phẩm được bo tròn mềm mại . Bút trình chiếu Zadez ZPT-102 được thích hợp công nghệ không dây 2.4GHz , Thiết kế ánh sáng laser đỏ độ sáng cao, Khoảng cách làm việc: Tối đa đến 20 mét', 'Giao tiếp: Công nghệ không dây 2.4GHz. Đầu thu USB Màu sắc: Xám\r\n', 5, 34),
(54, 'OKI Ribbon ML-1120/1190', '054', '150000', '1654868622_54.jpg', '1654868622_54.jpg', '1654868622_', '1654868622_', 'Ruy băng mực chính hãng dành cho máy in kim Ribbon Oki ML-1120/ 1190 cung cấp những bản in hóa đơn sắc nét, sản lượng đen đậm đều màu, mang tính chuyên nghiệp.', 'OKI Ribbon ML-1120/1190 được thiết kế in 4 triệu ký tự, mang lại hiệu suất tốt giúp tiết kiệm thời gian cũng như chi phí thay mực.\r\n', 5, 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `hovaten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`hovaten`, `email`, `dienthoai`, `diachi`, `note`, `thutu`) VALUES
('Shin Ryujin', 'ryujin@gmail.com', '0373299750', 'JYP Entertain,ent', 'hj', 0),
('Kỳ Duyên', 'caonguyenkyduyen17@gmail.com', '0373299750', '102 ấp 2', 'nhanh', 1),
('Jimdada', 'caonguyenkyduyen17@gmail.com', '0373299750', '819 ấp 6', 'fdsfds', 5),
('Đỗ Thị Hoài Thu', 'dothihoaithu2001@gmail.com', '0123456789', 'Đà lạt', 'giao nhanh', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `ten_sanpham` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_tb` float NOT NULL,
  `solanmua` int(11) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongtingiohang`
--

CREATE TABLE `tbl_thongtingiohang` (
  `id_thongtingiohang` int(11) NOT NULL,
  `ma_donhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongtingiohang`
--

INSERT INTO `tbl_thongtingiohang` (`id_thongtingiohang`, `ma_donhang`, `thutu`, `soluong`) VALUES
(70, '64635', 27, 1),
(6, '86462', 28, 1),
(1, '86462', 29, 1),
(1, '65466', 30, 1),
(1, '48488', 31, 1),
(65, '48488', 32, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_rating`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`thutu`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`thutu`);

--
-- Chỉ mục cho bảng `tbl_thongtingiohang`
--
ALTER TABLE `tbl_thongtingiohang`
  ADD PRIMARY KEY (`thutu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `thutu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `thutu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_thongtingiohang`
--
ALTER TABLE `tbl_thongtingiohang`
  MODIFY `thutu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
