-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 10 日 11:08
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ga_data`
--

-- --------------------------------------------------------

--
-- 資料表結構 `channel_replay_list`
--

CREATE TABLE `channel_replay_list` (
  `sid` int(11) NOT NULL,
  `game` varchar(255) NOT NULL,
  `data-id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `channel_replay_list`
--

INSERT INTO `channel_replay_list` (`sid`, `game`, `data-id`, `src`, `title`) VALUES
(1, 'lol', '-5QGfFzTTa4', 'http://img.youtube.com/vi/-5QGfFzTTa4/mqdefault.jpg', 'LSC 《英雄聯盟》校園聯賽 季後賽八強 高中職組：Day1'),
(2, 'lol', 'lOFDQp4dBa8', 'http://img.youtube.com/vi/lOFDQp4dBa8/mqdefault.jpg', '《LOL》2019 LMS 夏季職業聯賽 W5D3 │GRX vs JT, HKA vs FW'),
(3, 'lol', 'kudvekLumis', 'http://img.youtube.com/vi/kudvekLumis/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W6D2 DG vs FW'),
(4, 'lol', 'SJ-ZwmtYVcQ', 'http://img.youtube.com/vi/SJ-ZwmtYVcQ/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W4D3 ALF vs AHQ'),
(5, 'lol', 'N2dJ-3Z8r7c', 'http://img.youtube.com/vi/N2dJ-3Z8r7c/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W1D1 GRX vs JT'),
(6, 'lol', '9_4WuO3IT1c', 'http://img.youtube.com/vi/9_4WuO3IT1c/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W8D1 HKA vs GRX'),
(7, 'lol', 'UAzwHYA-cSE', 'http://img.youtube.com/vi/UAzwHYA-cSE/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W4D1 GRX vs FW'),
(8, 'lol', 'u0-75Nro9dw', 'http://img.youtube.com/vi/u0-75Nro9dw/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W8D3 MAD vs AHQ'),
(9, 'lol', '0MEneye_YOI', 'http://img.youtube.com/vi/0MEneye_YOI/mqdefault.jpg', '《LOL》2019 LMS 春季季後賽 D1 - JT vs AHQ (BO5)'),
(10, 'lol', 'sC-NlnYlUeM', 'http://img.youtube.com/vi/sC-NlnYlUeM/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W6D2 GRX vs AHQ'),
(11, 'lol', 'cUP_A45OyWs', 'http://img.youtube.com/vi/cUP_A45OyWs/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W4D3 MAD vs JT'),
(12, 'lol', 'uYLqwacCE2g', 'http://img.youtube.com/vi/uYLqwacCE2g/mqdefault.jpg', '《LOL》2019 LMS 春季職業聯賽 W3D2'),
(15, 'pubg', 'smMSlPtMGNQ', 'http://img.youtube.com/vi/smMSlPtMGNQ/mqdefault.jpg', '[PUBG_TW] 2019 PML Phase 1 Week 1 Day 1 - 補賽日'),
(16, 'pubg', 'v5xccWkxOKk', 'http://img.youtube.com/vi/v5xccWkxOKk/mqdefault.jpg', '[PUBG_TW] 2019 PML Phase 1 Week 1 Day 2'),
(17, 'pubg', 'lZvxOmc_G9w', 'http://img.youtube.com/vi/lZvxOmc_G9w/mqdefault.jpg', '[PUBG_TW] 2019 PML Phase 1 Week 1 Day 3'),
(18, 'pubg', 'NvMgHM2G9uQ', 'http://img.youtube.com/vi/NvMgHM2G9uQ/mqdefault.jpg', '[PUBG_TW] 2019 PML Phase 1 Week 1 Day 4'),
(19, 'pubg', 'yHiWxOkwSOQ', 'http://img.youtube.com/vi/yHiWxOkwSOQ/mqdefault.jpg', '[PUBG_TW] 2019 PML Phase 1 Week 1 Day 5'),
(20, 'pubg', 'cw-drysHmK4', 'http://img.youtube.com/vi/cw-drysHmK4/mqdefault.jpg', '2019 PML Phase 2 例行賽 Week 2 Day 1'),
(21, 'pubg', '4xUNW3eHcXg', 'http://img.youtube.com/vi/4xUNW3eHcXg/mqdefault.jpg', '[PUBG_TW] 2019 PML Phase 1 Week 2 Day 2'),
(22, 'pubg', 'zaFo8HVJEOY', 'http://img.youtube.com/vi/zaFo8HVJEOY/mqdefault.jpg', '[PUBG_TW] 2019 PML Phase 1 Week 2 Day 3'),
(23, 'pubg', 'cDMrC-_TjyA', 'http://img.youtube.com/vi/cDMrC-_TjyA/mqdefault.jpg', '2019 PML Phase 2 例行賽 Week 3 Day 1'),
(24, 'pubg', 'z102nTjBOT0', 'http://img.youtube.com/vi/z102nTjBOT0/mqdefault.jpg', '2019 PML Phase 2 例行賽 Week 1 Day 3'),
(25, 'pubg', 'wiOdGiJWhrs', 'http://img.youtube.com/vi/wiOdGiJWhrs/mqdefault.jpg', '2019 PML Phase 2 例行賽 Week 1 Day 2'),
(26, 'pubg', 'qK-QuFTABcw', 'http://img.youtube.com/vi/qK-QuFTABcw/mqdefault.jpg', '2019 PML Phase 2 總決賽 Day 2'),
(27, 'over', '5ZfUGBLi2Q8', 'http://img.youtube.com/vi/5ZfUGBLi2Q8/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽S2 W3D3'),
(28, 'over', 'W92njgRuMPk', 'http://img.youtube.com/vi/W92njgRuMPk/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽S2 W6D3'),
(29, 'over', '-BVThHGETuQ', 'http://img.youtube.com/vi/-BVThHGETuQ/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽S2 W3D2'),
(30, 'over', 'zTONNkhJdAo', 'http://img.youtube.com/vi/zTONNkhJdAo/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽S2 W1D2'),
(31, 'over', 'OcUht6XNg0Y', 'http://img.youtube.com/vi/OcUht6XNg0Y/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽 W2D2'),
(32, 'over', '4FSD_s9S5qg', 'http://img.youtube.com/vi/4FSD_s9S5qg/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽 W10D2'),
(33, 'over', 'Fmij1yss6O8', 'http://img.youtube.com/vi/Fmij1yss6O8/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽 W6D1'),
(34, 'over', 'RWPX0JQhfbk', 'http://img.youtube.com/vi/RWPX0JQhfbk/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽S2 W3D1 '),
(35, 'over', 'OVbP9BujW08', 'http://img.youtube.com/vi/OVbP9BujW08/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽S2 W4D1'),
(36, 'over', 'lGTNEo8c_Y4', 'http://img.youtube.com/vi/lGTNEo8c_Y4/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽 W9D2'),
(37, 'over', '7ZNZBishHqE', 'http://img.youtube.com/vi/7ZNZBishHqE/mqdefault.jpg', '《鬥陣特攻》太平洋職業錦標賽 W4D3'),
(38, 'over', 'V7wi70KN72I', 'http://img.youtube.com/vi/V7wi70KN72I/mqdefault.jpg', 'FW vs ahq | W1D3 | Match 3 | OPC S2');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `channel_replay_list`
--
ALTER TABLE `channel_replay_list`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `channel_replay_list`
--
ALTER TABLE `channel_replay_list`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
