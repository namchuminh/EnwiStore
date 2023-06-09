-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 03:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyewearstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh`
--

CREATE TABLE `anh` (
  `MaAnh` int(1) NOT NULL,
  `MaSP` varchar(20) NOT NULL,
  `TenAnh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anh`
--

INSERT INTO `anh` (`MaAnh`, `MaSP`, `TenAnh`) VALUES
(1, '0001', 'anna1.1.jpg'),
(2, '0001', 'anna1.2.jpg'),
(3, '0001', 'anna1.3.jpg'),
(4, '0001', 'anna1.4.jpg'),
(5, '0001', 'anna1.5.jpg'),
(6, '0001', 'anna1.6.jpg'),
(7, '0002', 'gk2.1.jpeg'),
(8, '0002', 'gk2.2.jpeg'),
(9, '0002', 'gk2.3.jpeg'),
(10, '0003', 'gk3.1.jpeg'),
(11, '0003', 'gk3.2.jpeg'),
(12, '0003', 'gk3.3.jpeg'),
(13, '0003', 'gk3.4.jpeg'),
(14, '0004', 'gk4.1.jpeg'),
(15, '0004', 'gk4.2.jpeg'),
(16, '0004', 'gk4.3.jpeg'),
(17, '0005', 'gk5.1.jpeg'),
(18, '0005', 'gk5.2.jpeg'),
(19, '0006', 'gk6.1.jpeg'),
(20, '0006', 'gk6.2.jpeg'),
(21, '0006', 'gk6.3.jpeg'),
(22, '0007', 'gk7.1.jpeg'),
(23, '0007', 'gk7.2.jpeg'),
(24, '0008', 'gk8.jpg'),
(25, '0008', 'gkc1.jpg'),
(26, '0008', 'gkc2.jpg'),
(27, '0009', 'gk9.jpg'),
(28, '0009', 'gkc1.jpg'),
(29, '0009', 'gkc2.jpg'),
(30, '0010', 'gk10.jpg'),
(31, '0010', 'gkc1.jpg'),
(32, '0010', 'gkc2.jpg'),
(33, '0011', 'gk11.jpg'),
(34, '0011', 'gkc1.jpg'),
(35, '0011', 'gkc2.jpg'),
(36, '0012', 'gk12.jpg'),
(37, '0012', 'gkc1.jpg'),
(38, '0012', 'gkc2.jpg'),
(39, '0013', 'gk13.jpg'),
(40, '0013', 'gkc1.jpg'),
(41, '0013', 'gkc2.jpg'),
(42, '0014', 'gk14.jpg'),
(43, '0014', 'gk14.1.jpg'),
(44, '0014', 'gkc14.2.jpg'),
(45, '0015', 'gk15.jpg'),
(46, '0015', 'gkc1.jpg'),
(47, '0015', 'gkc2.jpg'),
(48, '0016', 'gk16.jpg'),
(49, '0016', 'gkc1.jpg'),
(50, '0016', 'gkc2.jpg'),
(51, '0017', 'gk17.jpg'),
(52, '0017', 'gkc1.jpg'),
(53, '0017', 'gkc2.jpg'),
(54, '0018', 'gk18.jpg'),
(55, '0018', 'gkc1.jpg'),
(56, '0018', 'gkc2.jpg'),
(57, '0019', 'gk19.jpg'),
(58, '0019', 'gkc1.jpg'),
(59, '0019', 'gkc2.jpg'),
(60, '0020', 'gk20.jpg'),
(61, '0020', 'gkc1.jpg'),
(62, '0020', 'gkc2.jpg'),
(63, '0021', 'Chemi-U2-1.56.jpg'),
(64, '0022', 'Chemi-U1-1.56.jpg'),
(65, '0023', 'Chemi-U2-1.60.jpg'),
(66, '0024', 'Chemi-U2-1.67.jpg'),
(67, '0025', 'Chemi-U2-1.74.jpg'),
(68, '0026', 'Essilor-1.56.jpg'),
(69, '0027', 'Essilor-roc-1.56.jpg'),
(70, '0028', 'Essilor-roc-1.60.jpg'),
(71, '0029', 'Essilor-roc-1.67.jpg'),
(72, '0030', 'Essilor-1.56e.jpg'),
(73, '0031', 'mihan156.jpg'),
(74, '0032', 'mihan160.jpg'),
(75, '0033', 'mihan167.jpg'),
(76, '0033', 'mihan167.jpg'),
(77, '0034', 'mihan174.jpg'),
(78, '0035', 'hoga156.webp'),
(79, '0036', 'hoga161.webp'),
(80, '0037', 'hoga167.webp'),
(81, '0038', 'kodak156.webp'),
(82, '0039', 'kodak160.webp'),
(83, '0040', 'kodak167.webp'),
(84, '0041', 'kr41.jpg'),
(85, '0042', 'kr42.jpg'),
(86, '0043', 'kr43.jpg'),
(87, '0044', 'kr44.jpg'),
(88, '0045', 'kr45.jpg'),
(89, '0046', 'kr46.jpg'),
(90, '0047', 'kr47.jpg'),
(91, '0048', 'kr48.jpg'),
(92, '0049', 'kr49.jpg'),
(93, '0050', 'kr50.jpg'),
(94, '0051', 'kr51.jpg'),
(95, '0052', 'kr52.jpg'),
(96, '0053', 'kr53.jpg'),
(97, '0054', 'kr54.jpg'),
(98, '0055', 'kr55.jpg'),
(99, '0056', 'kr56.jpg'),
(100, '0057', 'kr57.jpg'),
(101, '0058', 'kr58.jpg'),
(102, '0059', 'kr59.jpg'),
(103, '0060', 'kr60.jpg'),
(104, '0061', 'hk61.webp'),
(105, '0062', 'hk62.jpg'),
(106, '0063', 'hk63.jfif'),
(107, '0064', 'hk64.jfif'),
(108, '0065', 'hk65.jfif'),
(109, '0066', 'tote66.jpg'),
(110, '0067', 'tote67.jpg'),
(111, '0068', 'tote68.jpg'),
(112, '0069', 'tote69.jfif'),
(113, '0070', 'tote70.jfif'),
(114, '0071', 'khan-lau-kinh-71.jpeg'),
(115, '0072', 'khan-lau-kinh-72.jpeg'),
(116, '0073', 'khan-lau-kinh-73.jpg'),
(117, '0074', 'd741.jpeg'),
(118, '0075', 'd75.jpeg'),
(119, '0076', 'd76.jpeg'),
(120, '0077', 'd77.jpeg'),
(121, '0078', 'd78.jpeg'),
(122, '0079', 'd79.jpg'),
(123, '0080', 'd80.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` varchar(20) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TinhTrangDH` int(1) NOT NULL,
  `PTTT` int(1) NOT NULL,
  `HoTenKH` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `DiaChiNhanHang` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `TongTien` float NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaKH`, `TinhTrangDH`, `PTTT`, `HoTenKH`, `SDT`, `DiaChiNhanHang`, `Email`, `ThoiGian`, `TongTien`, `GhiChu`) VALUES
('DH000001', 1, 0, 0, 'Nguyễn Trung Quân', '0831244232', '56 Nguyên Xá, Bắc Từ Liêm, Hà Nội, TH, BV, Hà Nội', 'trungquan@gmail.com', '2023-04-24 17:56:26', 530000, 'Nhanh'),
('DH000002', 1, 0, 0, 'Nguyễn Trung Quân', '0831244232', '56 Nguyên Xá, Bắc Từ Liêm, Hà Nội, DEF, ABC, Hà Nội', 'trungquan@gmail.com', '2023-04-24 17:59:25', 3530000, 'aaa'),
('DH000003', 1, 0, 0, 'Nguyễn Trung Quân', '0831244232', '56 Nguyên Xá, Bắc Từ Liêm, Hà Nội, BBBB, AAA, Hà Nội', 'trungquan@gmail.com', '2023-04-24 19:49:29', 2530000, 'ABCD'),
('DH000004', 1, 0, 0, 'Nguyễn Trung Quân', '0831244232', '56 Nguyên Xá, Bắc Từ Liêm, Hà Nội, mua ngay, mua ngay, Hà Nội', 'trungquan@gmail.com', '2023-04-24 19:51:57', 530000, 'mua ngay');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` varchar(20) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `PhiShip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MaGioHang`, `MaKH`, `PhiShip`) VALUES
('GH000001', 1, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `MaTK` int(11) NOT NULL,
  `TenKH` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `TrangThai` int(1) NOT NULL DEFAULT 1,
  `ThoiGian` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `MaTK`, `TenKH`, `Email`, `DiaChi`, `NgaySinh`, `TrangThai`, `ThoiGian`) VALUES
(1, 2, 'Nguyễn Trung Quân', 'trungquan@gmail.com', '56 Nguyên Xá, Bắc Từ Liêm, Hà Nội', '2001-08-20', 1, '2023-04-05'),
(2, 3, 'Nguyễn Anh Tú', 'trungquan@gmail.com', '56 Nguyên Xá, Bắc Từ Liêm, Hà Nội', '2001-12-18', 1, '2023-04-09'),
(3, 4, ' Trịnh Yến', 'trinhyen@gmail.com', '56 Nguyên Xá, Bắc Từ Liêm, Hà Nội', '2001-12-18', 1, '2023-04-14'),
(4, 5, 'Chu Minh Nam', 'nam@gmail.com', 'Hà Nội', '1998-08-08', 1, '2023-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoai` varchar(10) NOT NULL,
  `TenLoai` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`MaLoai`, `TenLoai`) VALUES
('L001', 'Gọng kính'),
('L002', 'Tròng kính'),
('L003', 'Kính râm'),
('L004', 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `mausac`
--

CREATE TABLE `mausac` (
  `MaMau` int(10) NOT NULL,
  `MaSP` varchar(20) NOT NULL,
  `TenMau` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mausac`
--

INSERT INTO `mausac` (`MaMau`, `MaSP`, `TenMau`) VALUES
(1, '0001', 'Pink'),
(2, '0001', 'White'),
(3, '0001', 'Black'),
(4, '0001', 'Gray'),
(5, '0001', 'Blue'),
(6, '0001', 'Whitesmoke'),
(7, '0002', 'Black'),
(8, '0003', 'Black'),
(9, '0004', 'white'),
(10, '0005', 'black'),
(11, '0006', 'black'),
(12, '0007', 'black'),
(13, '0008', 'black'),
(14, '0009', 'black'),
(15, '0010', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` tinyint(1) NOT NULL,
  `QuyenSD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `QuyenSD`) VALUES
(0, 'ADMIN'),
(1, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(20) NOT NULL,
  `MaLoai` varchar(10) NOT NULL,
  `TenSP` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThuongHieu` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `GiaTien` int(11) NOT NULL,
  `ChatLieu` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `XuatXu` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ThongSo` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLoai`, `TenSP`, `SoLuong`, `ThuongHieu`, `GiaTien`, `ChatLieu`, `XuatXu`, `ThongSo`) VALUES
('0001', 'L001', 'Kính nhựa Enwi GK0001', 550, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0002', 'L001', 'Kính nhựa Enwi GK0002', 250, 'Enwi', 480000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0003', 'L001', 'Kính nhựa Enwi GK0003', 300, 'Enwi', 600000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0004', 'L001', 'Kính nhựa Enwi GK0004', 253, 'Enwi', 800000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0005', 'L001', 'Kính nhựa Enwi GK0005', 200, 'Enwi', 300000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0006', 'L001', 'Kính nhựa Enwi GK0006', 200, 'Enwi', 300000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0007', 'L001', 'Kính nhựa Enwi GK0007', 50, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0008', 'L001', 'Kính nhựa Enwi GK0008', 120, 'Enwi', 900000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0009', 'L001', 'Kính nhựa Enwi GK0009', 120, 'Enwi', 550000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0010', 'L001', 'Kính nhựa Enwi GK0010', 120, 'Enwi', 4500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0011', 'L001', 'Kính kim loại Enwi GK0011', 150, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0012', 'L001', 'Kính kim loại Enwi GK0012', 350, 'Enwi', 1000000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0013', 'L001', 'Kính kim loại Enwi GK0013', 110, 'Enwi', 850000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0014', 'L001', 'Kính kim loại Enwi GK0014', 125, 'Enwi', 400000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0015', 'L001', 'Kính kim loại Enwi GK0015', 100, 'Enwi', 450000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0016', 'L001', 'Kính nhựa pha kim loại Enwi GK0016', 108, 'Enwi', 700000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0017', 'L001', 'Kính nhựa pha kim loại Enwi GK0017', 63, 'Enwi', 850000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0018', 'L001', 'Kính nhựa pha kim loại Enwi GK0018', 360, 'Enwi', 900000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0019', 'L001', 'Kính nhựa pha kim loại Enwi GK0019', 190, 'Enwi', 560000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0020', 'L001', 'Kính nhựa pha kim loại Enwi GK0020', 220, 'Enwi', 460000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0021', 'L002', 'Tròng kính đổi màu Hàn Quốc Chemi U2 chiết suất 1.56', 120, 'Chemi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0022', 'L002', 'Tròng kính Hàn Quốc Chemi U1 chiết suất 1.56', 140, 'Chemi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0023', 'L002', 'Tròng kính Hàn Quốc Chemi U2 chiết suất 1.60', 122, 'Chemi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0024', 'L002', 'Tròng kính Hàn Quốc Chemi U2 chiết suất 1.67', 155, 'Chemi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0025', 'L002', 'Tròng kính Hàn Quốc Chemi U2 chiết suất 1.74', 103, 'Chemi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0026', 'L002', 'Tròng kính Pháp Essilor Crizal.Easy chiết suất 1.56', 120, 'Essilor', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0027', 'L002', 'Tròng kính Pháp Essilor Prevencia Crizal.Rock chiết suất 1.56', 122, 'Essilor', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0028', 'L002', 'Tròng kính Pháp Essilor Prevencia Crizal.Rock chiết suất 1.60', 57, 'Essilor', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0029', 'L002', 'Tròng kính Pháp Essilor Prevencia Crizal.Rock chiết suất 1.67', 62, 'Essilor', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0030', 'L002', 'Tròng kính ESSILOR CLASSIC 1.56', 99, 'Essilor', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0031', 'L002', 'Tròng kính râm cận Mihan chiết suất 1.56', 24, 'Mihan', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0032', 'L002', 'Tròng kính râm cận Mihan chiết suất 1.60', 85, 'Mihan', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0033', 'L002', 'Tròng kính râm cận Mihan chiết suất 1.67', 273, 'Mihan', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0034', 'L002', 'Tròng kính râm cận Mihan chiết suất 1.74', 232, 'Mihan', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0035', 'L002', 'Tròng kính đổi mầu Hàn Quốc Hoga chiết suất 1.61', 53, 'Hoga', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0036', 'L002', 'Tròng kính đổi mầu Hàn Quốc Hoga chiết suất 1.61', 63, 'Hoga', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0037', 'L002', 'Tròng kính đổi mầu Hàn Quốc Hoga chiết suất 1.61', 62, 'Hoga', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0038', 'L002', 'Tròng kính Kodak FSV', 626, 'Kodak', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0039', 'L002', 'Tròng kính Kodak FSV1', 42, 'Kodak', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0040', 'L002', 'Tròng kính Kodak FSV2', 80, 'Kodak', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0041', 'L003', 'Kính râm phân cực KR0041', 50, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0042', 'L003', 'Kính râm phân cực KR0042', 150, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0043', 'L003', 'Kính râm phân cực KR0043', 80, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0044', 'L003', 'Kính râm phân cực KR0044', 12, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0045', 'L003', 'Kính râm phân cực KR0045', 110, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0046', 'L003', 'Kính râm Enwi KR0046', 250, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0047', 'L003', 'Kính râm Enwi KR0047', 50, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0048', 'L003', 'Kính râm Enwi KR0048', 80, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0049', 'L003', 'Kính râm Enwi KR0049', 90, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0050', 'L003', 'Kính râm Enwi KR0050', 168, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0051', 'L003', 'Kính râm Enwi KR0051', 162, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0052', 'L003', 'Kính râm Enwi KR0052', 132, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0053', 'L003', 'Kính râm Enwi KR0053', 60, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0054', 'L003', 'Kính râm Enwi KR0054', 70, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0055', 'L003', 'Kính râm Enwi KR0055', 162, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0056', 'L003', 'Kính râm Enwi KR0056', 125, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0057', 'L003', 'Kính râm Enwi KR0057', 34, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0058', 'L003', 'Kính râm Enwi KR0058', 360, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0059', 'L003', 'Kính râm Enwi KR0059', 360, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0060', 'L003', 'Kính râm Enwi KR0060', 360, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0061', 'L004', 'Hộp kính da vintage', 360, 'Enwi', 550000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0062', 'L004', 'Hộp kính nhựa N62', 360, 'Enwi', 580000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0063', 'L004', 'Hộp kính nhựa N63', 87, 'Enwi', 900000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0064', 'L004', 'Hộp kính nhựa N64', 87, 'Enwi', 600000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0065', 'L004', 'Bao da mềm', 87, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0066', 'L004', 'Túi tote cute', 90, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0067', 'L004', 'Túi tote vải canvas', 90, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0068', 'L004', 'Túi tote ulzzang', 90, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0069', 'L004', 'Túi tote họa tiết chữ phong cách', 100, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0070', 'L004', 'Túi tote da mềm', 100, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0071', 'L004', 'Khăn lau kính nano kinger', 100, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0072', 'L004', 'Khăn nano chống mờ Valuk', 300, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0073', 'L004', 'Khăn nano Schoolmate', 300, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0074', 'L004', 'Dây đeo kính D74', 300, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0075', 'L004', 'Dây đeo kính D75', 70, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0076', 'L004', 'Dây đeo kính D76', 70, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0077', 'L004', 'Dây đeo kính D77', 70, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0078', 'L004', 'Dây đeo kính D78', 50, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0079', 'L004', 'Dây đeo kính D79', 50, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm'),
('0080', 'L004', 'Dây đeo kính D80', 50, 'Enwi', 500000, 'Nhựa cứng', 'Trung Quốc', '145mm-153mm-22mm');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_donhang`
--

CREATE TABLE `sanpham_donhang` (
  `MaSP` varchar(20) NOT NULL,
  `MaDH` varchar(20) NOT NULL,
  `MauSac` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `PhiShip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham_donhang`
--

INSERT INTO `sanpham_donhang` (`MaSP`, `MaDH`, `MauSac`, `SoLuong`, `PhiShip`) VALUES
('0073', 'DH000002', 'Trắng', 5, 30000),
('0074', 'DH000004', 'Trắng', 10, 30000),
('0076', 'DH000002', 'Đen', 1, 30000),
('0078', 'DH000002', 'Đen', 1, 30000),
('0079', 'DH000001', 'Trắng', 15, 30000),
('0079', 'DH000003', 'Trắng', 5, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_giohang`
--

CREATE TABLE `sanpham_giohang` (
  `MaGioHang` varchar(20) NOT NULL,
  `MaSP` varchar(20) NOT NULL,
  `MauSac` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `ID` tinyint(1) NOT NULL,
  `HoTenAdmin` varchar(255) DEFAULT NULL,
  `TenTK` varchar(50) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `MatKhau` varchar(200) NOT NULL,
  `avatar` text NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `ID`, `HoTenAdmin`, `TenTK`, `SDT`, `MatKhau`, `avatar`) VALUES
(1, 0, 'Trịnh Bảo Yến', 'admin', '0837535622', '123456789', 'user2.png'),
(2, 1, NULL, 'user1', '0831244232', '12345678', 'user.png'),
(3, 1, NULL, 'trịnh bảo yến', '0837535628', '12345678', 'user.png'),
(4, 1, NULL, 'hoàng tú', '0972516738', '12345678', 'user.png'),
(5, 1, NULL, 'nam', '0999999999', '12345678', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD UNIQUE KEY `MaGioHang` (`MaGioHang`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`MaMau`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Indexes for table `sanpham_donhang`
--
ALTER TABLE `sanpham_donhang`
  ADD PRIMARY KEY (`MaSP`,`MaDH`),
  ADD KEY `MaDH` (`MaDH`);

--
-- Indexes for table `sanpham_giohang`
--
ALTER TABLE `sanpham_giohang`
  ADD PRIMARY KEY (`MaSP`,`MaGioHang`),
  ADD KEY `MaGioHang` (`MaGioHang`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh`
--
ALTER TABLE `anh`
  MODIFY `MaAnh` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `mausac`
--
ALTER TABLE `mausac`
  MODIFY `MaMau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anh`
--
ALTER TABLE `anh`
  ADD CONSTRAINT `anh_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mausac`
--
ALTER TABLE `mausac`
  ADD CONSTRAINT `mausac_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loaisp` (`MaLoai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham_donhang`
--
ALTER TABLE `sanpham_donhang`
  ADD CONSTRAINT `sanpham_donhang_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sanpham_donhang_ibfk_2` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham_giohang`
--
ALTER TABLE `sanpham_giohang`
  ADD CONSTRAINT `sanpham_giohang_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sanpham_giohang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sanpham_giohang_ibfk_3` FOREIGN KEY (`MaGioHang`) REFERENCES `giohang` (`MaGioHang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `role` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
