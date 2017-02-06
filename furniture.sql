-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-02-06 15:49:20
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

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
