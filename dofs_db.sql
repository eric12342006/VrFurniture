-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-02-04 12:16:18
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
  `design_ID` int(20) NOT NULL,
  `furniture_ID` varchar(20) NOT NULL,
  `location` int(11) NOT NULL,
  `rotation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `furniture`
--

CREATE TABLE `furniture` (
  `ID` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `designer` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `furniture`
--

INSERT INTO `furniture` (`ID`, `name`, `price`, `designer`, `category`, `desc`, `color`) VALUES
('bd1', 'Bed', 0, '', '', '', 'white'),
('cab1', 'sek1', 0, '', '', '', 'wood'),
('cab2', 'sek2', 0, '', '', '', 'wood'),
('cab3', 'sek3', 0, '', '', '', ''),
('cab4', 'sek4', 0, '', '', '', ''),
('cab5', 'tumba_fur', 0, '', '', '', ''),
('cab6', 'TV_Shell', 0, '', '', '', 'white'),
('ch1', 'ArmChair', 1000, '', '', '', 'white'),
('ch2', 'Cheir', 0, '', '', '', 'white'),
('ot1', 'Lamp', 0, '', '', '', 'white'),
('sf1', 'Sofa', 0, '', '', '', 'white'),
('sf2', 'bed2', 0, '', '', '', 'purplish re'),
('sf3', 'bed1', 0, '', '', '', 'blue'),
('tb1', 'Coffe_table', 0, '', '', '', 'white'),
('tb2', 'Table', 0, '', '', '', 'white'),
('tb3', 'table-low-1', 0, '', '', '', 'black'),
('tb4', 'glass_table', 0, '', '', '', ''),
('tv1', 'TV', 0, '', '', '', ''),
('tv2', 'tv1', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `home_design`
--

CREATE TABLE `home_design` (
  `id` int(20) NOT NULL,
  `design_name` varchar(30) NOT NULL,
  `designer_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `surname` varchar(30) NOT NULL,
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
  ADD PRIMARY KEY (`design_ID`);

--
-- 資料表索引 `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `home_design`
--
ALTER TABLE `home_design`
  ADD PRIMARY KEY (`id`);

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
