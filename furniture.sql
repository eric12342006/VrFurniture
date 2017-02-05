-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-02-05 16:06:12
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
('tb4', 'glass_table', 0, '', '', '', '');

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
