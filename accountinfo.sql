-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022 年 06 月 09 日 03:59
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `accountinfo`
--

-- --------------------------------------------------------

--
-- 資料表結構 `logininfo`
--

CREATE TABLE `logininfo` (
  `Uno` int(20) NOT NULL,
  `Uphone` varchar(11) NOT NULL,
  `Upwd` varchar(20) NOT NULL,
  `Umail` varchar(50) NOT NULL,
  `Urole` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `logininfo`
--

INSERT INTO `logininfo` (`Uno`, `Uphone`, `Upwd`, `Umail`, `Urole`) VALUES
(2, '0970768325', '0970768325', '', 'admin'),
(11, '0968380615', '1234', 'black781162356@gmail.com', 'user'),
(17, '0987654321', '1234', 'a1091359@mail.nuk.ed', 'user'),
(19, '0918083198', 'tony20020327', 'tony23046176@gmail.c', 'user'),
(20, '0911111111', '0912345678', 'a1091359@mail.nuk.edu.tw', 'user'),
(21, '0911111111', '123456789', '123@gmail.com', 'user'),
(22, '0987654321', '0987654321', 'a1091359@mail.nuk.edu.tw', 'user'),
(23, '0900000000', '1234', '1234@exam.com', 'user'),
(24, '0911111111', 'a1093323', '123@gmail.com', 'user');

-- --------------------------------------------------------

--
-- 資料表結構 `shopcar`
--

CREATE TABLE `shopcar` (
  `sNo` int(11) NOT NULL,
  `drink` varchar(20) NOT NULL,
  `sweet` varchar(5) NOT NULL,
  `ice` varchar(5) NOT NULL,
  `price` int(4) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `shopcaradmin`
--

CREATE TABLE `shopcaradmin` (
  `shNo` int(11) NOT NULL,
  `alldrink` text NOT NULL,
  `sumprice` int(20) NOT NULL,
  `mixd` text NOT NULL,
  `mixm` text NOT NULL,
  `choose` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `shopcaradmin`
--

INSERT INTO `shopcaradmin` (`shNo`, `alldrink`, `sumprice`, `mixd`, `mixm`, `choose`, `address`) VALUES
(52, '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--

CREATE TABLE `test` (
  `ss` int(11) NOT NULL,
  `mixd` text NOT NULL,
  `mixm` text NOT NULL,
  `drink` text NOT NULL,
  `price` int(11) NOT NULL,
  `choose` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`Uno`);

--
-- 資料表索引 `shopcar`
--
ALTER TABLE `shopcar`
  ADD PRIMARY KEY (`sNo`);

--
-- 資料表索引 `shopcaradmin`
--
ALTER TABLE `shopcaradmin`
  ADD PRIMARY KEY (`shNo`);

--
-- 資料表索引 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ss`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `Uno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shopcar`
--
ALTER TABLE `shopcar`
  MODIFY `sNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shopcaradmin`
--
ALTER TABLE `shopcaradmin`
  MODIFY `shNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `test`
--
ALTER TABLE `test`
  MODIFY `ss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
