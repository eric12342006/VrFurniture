-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-02-06 16:50:30
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dofs_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `designfurniturelist`
--

CREATE TABLE `designfurniturelist` (
  `room_ID` int(20) NOT NULL,
  `furniture_ID` varchar(20) NOT NULL,
  `location_x` float NOT NULL,
  `location_z` float NOT NULL,
  `rotation_y` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `furniture`
--

CREATE TABLE `furniture` (
  `ID` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double DEFAULT '100',
  `designer` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `src` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `furniture`
--

INSERT INTO `furniture` (`ID`, `name`, `price`, `designer`, `category`, `desc`, `color`, `src`) VALUES
('bd1', 'Bed', 1000, '', 'bed', '', 'white', 'img\\Gray Furniture Pack\\bed\\bed'),
('bd2', 'bed2', 100, '', 'bed', '', 'black', ''),
('cab1', 'sek1', 1000, '', 'cabinet', '', 'wood', ''),
('cab2', 'sek2', 1000, '', 'cabinet', '', 'wood', ''),
('cab3', 'sek3', 1000, '', 'cabinet', '', 'wood', ''),
('cab4', 'sek4', 1000, '', 'cabinet', '', 'wood', ''),
('cab5', 'tumba_fur', 1000, '', 'cabinet', '', '', ''),
('cab6', 'TV_Shell', 1000, '', 'cabinet', '', 'white', ''),
('ch1', 'ArmChair', 1000, '', 'chair', '', 'white', ''),
('ch2', 'Cheir', 1000, '', 'chair', '', 'white', ''),
('ch3', 'ch3', 100, '', '', '', '', ''),
('ch4', 'ch2', 100, '', '', '', 'red', ''),
('ch5', '7103', 100, '', '', '', 'black', ''),
('ch6', '7106', 100, '', '', '', '', ''),
('ot1', 'Lamp', 1000, '', 'other', '', 'white', ''),
('sf1', 'Sofa', 1000, '', 'Sofa', '', 'white', ''),
('sf2', 'bed2', 1000, '', 'Sofa', '', 'purplish re', ''),
('sf3', 'bed1', 1000, '', 'Sofa', '', 'blue', ''),
('sf4', 'ModernSofa', 100, '', '', '', 'white', ''),
('tb1', 'Coffe_table', 1000, '', 'Table', '', 'white', ''),
('tb2', 'Table', 1000, '', 'Table', '', 'white', ''),
('tb3', 'table-low-1', 1000, '', 'Table', '', 'black', ''),
('tb4', 'glass_table', 1000, '', 'Table', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `home_design`
--

CREATE TABLE `home_design` (
  `room_ID` int(20) NOT NULL,
  `user_ID` int(10) NOT NULL,
  `room_name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `home_design`
--

INSERT INTO `home_design` (`room_ID`, `user_ID`, `room_name`, `description`) VALUES
(0, 1, 'test001', 'GGGGGGGGGGGGGGGGGGGG'),
(1, 1, 'test002', 'qweqweqweqwe'),
(2, 1, 'test003', 'werwerwer'),
(3, 2, 'test004', 'dsaf'),
(4, 2, 'test005', '352346346356'),
(5, 3, '5bo', 'dfgfgfgfgff'),
(6, 3, 'dont go', 'ddddddddddd'),
(7, 3, 'lover', 'rtret'),
(8, 4, 'myown', 'sdfgsdfg'),
(9, 4, 'shit', 'great'),
(10, 4, 'up', 'wellllllllllllll');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `order_ID` varchar(10) NOT NULL,
  `user_ID` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_amount` double NOT NULL,
  `order_delivery` varchar(100) NOT NULL,
  `temp` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `orderfurniture`
--

CREATE TABLE `orderfurniture` (
  `order_ID` varchar(10) NOT NULL,
  `furniture_ID` int(20) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `user_ID` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `designfurniturelist`
--
ALTER TABLE `designfurniturelist`
  ADD PRIMARY KEY (`room_ID`,`furniture_ID`);

--
-- 資料表索引 `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `home_design`
--
ALTER TABLE `home_design`
  ADD PRIMARY KEY (`room_ID`);

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_ID`);

--
-- 資料表索引 `orderfurniture`
--
ALTER TABLE `orderfurniture`
  ADD PRIMARY KEY (`order_ID`,`furniture_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
