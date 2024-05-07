-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 03:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_bh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitietdonhang`
--

CREATE TABLE `tb_chitietdonhang` (
  `id_chitietdonhang` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong_mua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_chitietdonhang`
--

INSERT INTO `tb_chitietdonhang` (`id_chitietdonhang`, `id_donhang`, `id_sanpham`, `soluong_mua`) VALUES
(1, 4, 5, 1),
(2, 5, 7, 1),
(3, 6, 8, 1),
(4, 6, 9, 1),
(5, 7, 6, 1),
(6, 7, 10, 1),
(7, 9, 5, 2),
(8, 10, 5, 2),
(9, 11, 5, 2),
(10, 12, 5, 2),
(11, 13, 5, 2),
(12, 14, 7, 1),
(13, 15, 5, 1),
(14, 15, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id_danhmuc`, `ten_danhmuc`, `thutu`) VALUES
(1, 'Điện thoại ', 1),
(2, 'Laptop', 2),
(4, 'Tablet', 3),
(7, 'Phụ kiện', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `status_donhang` int(11) NOT NULL,
  `ten_khachhang` varchar(200) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `sdt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_donhang`
--

INSERT INTO `tb_donhang` (`id_donhang`, `id_khachhang`, `status_donhang`, `ten_khachhang`, `diachi`, `sdt`) VALUES
(4, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(5, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(6, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(7, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(8, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(9, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(10, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(11, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(12, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(13, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(14, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789'),
(15, 3, 1, 'Trần Đình Thắng', 'Ngách 199 Hồ Tùng Mậu', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tb_khachhang`
--

CREATE TABLE `tb_khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `ten_khachhang` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_khachhang`
--

INSERT INTO `tb_khachhang` (`id_khachhang`, `ten_khachhang`, `email`, `password`, `sdt`, `ngaysinh`, `diachi`) VALUES
(3, 'Trần Đình Thắng', 'tdt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', '2003-12-12', 'Ngách 199 Hồ Tùng Mậu'),
(10, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2000-06-06', '0000-00-00', 'jweuae');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `ten_sanpham` varchar(100) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `hangsx` varchar(250) NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(250) NOT NULL,
  `noidung` tinytext NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id_sanpham`, `masp`, `ten_sanpham`, `id_danhmuc`, `hangsx`, `gia`, `soluong`, `hinhanh`, `noidung`, `tinhtrang`) VALUES
(5, 'ip15prm', 'Iphone 15 Pro Max', 1, 'Apple', 30000000, 7, 'iphone-15-pro-max-blue-thumbnew-600x600.jpg', 'ửgdsgsdfgdg', 1),
(6, 'ip15pl', 'Iphone 15 Plus', 1, 'Apple', 22000000, 10, 'iphone-15-plus-xanh-la-128gb-thumb-600x600.jpg', 'ip15plus', 1),
(7, 'lnvip3', 'Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK00RWVN)', 2, 'Lenovo', 8690000, 11, 'lenovo-ideapad-3-15iau7-i3-82rk00rwvn-thumb-600x600.jpg', 'sehfsjncs', 1),
(8, 'ipd9', 'Máy tính bảng iPad 9 WiFi 64GB ', 4, 'Apple', 7190000, 5, 'iPad-9-wifi-trang-600x600.jpg', 'ipad 9 wifi', 1),
(9, 'PPBD2-1020', 'Pin sạc dự phòng Polymer 10000mAh Type C PD 20W Baseus Bipow Pro', 7, 'Baseus', 465000, 20, 'pin-sac-du-phong-polymer-10000mah-type-c-pd-20w-baseus-bipow-pro-ppbd2-1020-thumb-1-600x600.jpg', 'pin sạc dự phòng', 1),
(10, 'HN014W', 'Laptop Asus TUF Gaming F15 FX506HF i5 11400H/8GB/512GB/4GB RTX2050/144Hz/Win11', 2, 'Asus', 16490000, 5, 'asus-tuf-gaming-f15-fx506hf-i5-hn014w-thumb-600x600.jpg', 'asus tuf', 1),
(11, 'MRXN3SA/A', 'Laptop Apple MacBook Air 13 inch M3 8GB/256GB', 2, 'Apple', 27990000, 10, 'macbook-air-13-inch-m3-2024-050324-020626-600x600.jpg', 'macbook ........', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdonhang`),
  ADD KEY `id_giohang` (`id_donhang`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `FK_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  MODIFY `id_chitietdonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  ADD CONSTRAINT `tb_chitietdonhang_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `tb_donhang` (`id_donhang`),
  ADD CONSTRAINT `tb_chitietdonhang_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `tb_sanpham` (`id_sanpham`);

--
-- Constraints for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD CONSTRAINT `tb_donhang_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tb_khachhang` (`id_khachhang`);

--
-- Constraints for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `FK_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `tb_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
