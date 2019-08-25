-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 19 日 05:10
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

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `sid` int(11) NOT NULL COMMENT '會員編號',
  `activated` int(11) NOT NULL COMMENT '登入狀態',
  `email` varchar(255) NOT NULL COMMENT '會員信箱',
  `nickname` varchar(255) NOT NULL COMMENT '使用者名稱',
  `password` varchar(255) NOT NULL COMMENT '密碼',
  `hash` varchar(255) NOT NULL COMMENT '密碼亂數變數',
  `mobile` varchar(255) DEFAULT NULL COMMENT '手機號碼',
  `postName` int(11) NOT NULL COMMENT '郵遞區號',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `created_at` datetime NOT NULL COMMENT '註冊時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`sid`, `activated`, `email`, `nickname`, `password`, `hash`, `mobile`, `postName`, `address`, `created_at`) VALUES
(1, 0, 'fadachai@k55.com', 'fsdf191', 'e0f6c9ceac76766c75c0e1553b6fc8106f66b5c1', '0c0a6cf9270e9c84144a6137af0a86196b23b508', '0952-454-656', 0, '', '2019-08-07 11:40:07'),
(2, 0, 'fff@ggg.com', '小李', '23b58326d585f2d80f09ef505d50f8eec4a9a13d', 'cb46f60dc5287092deab7f177db655be1aba0220', '0966-963-369', 0, '', '2019-08-07 11:42:08'),
(3, 0, 'ggg@sds.com', 'sasashagf', '7b106b61e4c96dd66f6ee044758d69cf39fa07cf', 'fe0be618342e7205401a1454a43a524227070db9', '0968774711', 0, '', '2019-08-07 11:43:27'),
(5, 0, 'gl4u4tp6@ccc.com', '厚片', '8a0789fb1238f3123d08a1ae001eb193ba66aaed', '0e1b7e6bd3203c10cad9d5bb0d2211086ac6df4c', '246955555', 1123, '', '2019-08-12 10:45:49'),
(6, 0, 'gatest003@ggg.com', 'gatest003', '989d943b78b2ceaa8045b182182888e9a00a0e8a', '2b9b91b40e5c50e28ef24dc7440df7baf44f66b9', '0956666333', 0, '', '2019-08-14 16:07:08'),
(7, 0, 'gatest01@ga.com', 'test', '0fe45fb40726d10f98ac71a811b05e7322c71e23', '71ff3514bfa4d215be5960d91674e8ac1817652d', '0985666333', 0, '', '2019-08-17 16:24:19');

-- --------------------------------------------------------

--
-- 資料表結構 `order_list`
--

CREATE TABLE `order_list` (
  `sid` int(11) NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `member_sid` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `total_qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `order_list`
--

INSERT INTO `order_list` (`sid`, `order_number`, `date`, `member_sid`, `phone`, `address`, `invoice`, `total_price`, `total_qty`) VALUES
(30, '15659576626', '2019-08-16', 6, 'sdfsdf', 'sdfsdf', '個人', 'NT2,950', '1'),
(31, '15659580416', '2019-08-16', 6, 'sdfsdfsdf', 'sdfsdf', '個人', 'NT2,750', '1'),
(32, '15661794165', '2019-08-19', 5, '666544467', 'hgghghdfh', '個人', 'NT5,840', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `order_product`
--

CREATE TABLE `order_product` (
  `sid` int(11) NOT NULL,
  `which` varchar(255) NOT NULL,
  `belong` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `order_product`
--

INSERT INTO `order_product` (`sid`, `which`, `belong`, `qty`) VALUES
(29, '2', '15658538395', '1'),
(30, '1', '15658550045', '1'),
(31, '3', '15658550045', '4'),
(32, '4', '15658550045', '1'),
(33, '2', '15658582705', '1'),
(34, '3', '15658582705', '4'),
(35, '39', '15658582705', '1'),
(36, '42', '15658582705', '1'),
(37, '1', '15658643345', '1'),
(38, '2', '15658643345', '1'),
(39, '2', '15658682335', '1'),
(40, '2', '15658684375', '1'),
(41, '2', '15659191665', '1'),
(42, '1', '15659201065', '1'),
(43, '2', '15659201775', '1'),
(44, '3', '15659201775', '1'),
(45, '2', '15659427636', '1'),
(46, '25', '15659427636', '1'),
(47, '41', '15659427636', '1'),
(48, '44', '15659427636', '1'),
(49, '46', '15659427636', '1'),
(50, '60', '15659452646', '1'),
(51, '2', '15659494656', '1'),
(52, '1', '15659555316', '1'),
(53, '2', '15659555316', '1'),
(54, '3', '15659557576', '1'),
(55, '1', '15659576626', '1'),
(56, '2', '15659580416', '1'),
(57, '1', '15661794165', '2');

-- --------------------------------------------------------

--
-- 資料表結構 `products_list`
--

CREATE TABLE `products_list` (
  `sid` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `products_name` varchar(255) NOT NULL,
  `products_img` varchar(255) NOT NULL,
  `products_brief` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `price_val` int(11) NOT NULL,
  `price_number` varchar(255) NOT NULL,
  `products_special` varchar(255) NOT NULL,
  `products_special2` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `products_specification` varchar(255) NOT NULL,
  `img_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `products_list`
--

INSERT INTO `products_list` (`sid`, `brand`, `products`, `products_name`, `products_img`, `products_brief`, `price`, `price_val`, `price_number`, `products_special`, `products_special2`, `type`, `products_specification`, `img_detail`) VALUES
(1, '1', '1', '【CORSAIR海盜船】DARK CORE RGB SE 電競滑鼠', 'corsair_products/DARK CORE RGB SE.png', '● 1ms高速反應速率 \r\n● 2.4G無線/藍牙有線多模式 \r\n● 最高 16,000 DPI \r\n● 側翼可換設計 ', '2,890', 2890, '2', 'corsair_products/DARK CORE RGB SE(1).jpg', '', '1-2', 'rule.jpg', 'corsair_products/DARK CORE RGB SE(1).png,corsair_products/DARK CORE RGB SE(2).png,corsair_products/DARK CORE RGB SE(3).png,corsair_products/DARK CORE RGB SE(4).png,corsair_products/DARK CORE RGB SE.png'),
(2, '1', '1', '【CORSAIR海盜船】GLAIVE RGB PRO 可換模組／電競滑鼠', 'corsair_products/GLAIVE RGB PRO.png', '● 極度舒適的外型設計 ● 模組化更換的母指模塊、三種模式可選。', '2,690', 2690, '2', 'corsair_products/GLAIVE RGB PRO(1).jpg', 'corsair_products/GLAIVE RGB PRO(2).jpg', '1-2', 'rule.jpg', ''),
(3, '1', '1', '【CORSAIR海盜船】RPOON RGB PRO FPS/MOBA電競滑鼠', 'corsair_products/HARPOON RGB.png', '● 極度舒適的外型設計 ● 模組化更換的母指模塊、三種模式可選。', '1,190', 1190, '1', 'corsair_products/HARPOON RGB(1).jpg', '', '1-1', 'rule.jpg', ''),
(4, '1', '1', '【CORSAIR海盜船】IRONCLAW RGB FPS/MOBA 電競滑鼠', 'corsair_products/IRONCLAW RGB.png', '● 極度舒適的外型設計 ● 模組化更換的母指模塊、三種模式可選。', '2,390', 2390, '2', 'corsair_products/IRONCLAW RGB(1).jpg', 'corsair_products/IRONCLAW RGB(2).jpg', '1-2', 'rule.jpg', ''),
(6, '1', '1', '【CORSAIR海盜船】M65 RGB ELITE 電競有線滑鼠', 'corsair_products/M65 PRO RGB.png', '● 極度舒適的外型設計 ● 模組化更換的母指模塊、三種模式可選。', '2,390', 2390, '2', 'corsair_products/M65 PRO RGB(1).jpg', 'corsair_products/M65 PRO RGB(2).jpg', '1-2', 'rule.jpg', ''),
(7, '1', '1', '【CORSAIR海盜船】M65 RGB ELITE 電競滑鼠-白', 'corsair_products/M65 RGB ELITE.png', '● 極度舒適的外型設計 ● 模組化更換的母指模塊、三種模式可選。', '2,390', 2390, '2', 'corsair_products/M65 PRO RGB(1).jpg', 'corsair_products/M65 PRO RGB(2).jpg', '1-2', 'rule.jpg', ''),
(8, '1', '1', '【CORSAIR海盜船】Sabre RGB 電競滑鼠', 'corsair_products/Sabre RGB.png', '● 10000DPI解析度 ● DPI指示燈 ● 1000Hz回報率 ● 8個可程式化按鍵', '1,690', 1690, '1', 'corsair_products/M65 Sabre RGB(1).jpg', '', '1-2', 'rule.jpg', ''),
(9, '1', '1', '【CORSAIR海盜船】Gaming Scimitar RGB電競光學滑鼠', 'corsair_products/SCIMITAR PRO RGB.png', '●12000 DPI光學傳感器 ● 專利Key Slider控制系統 ● RGB燈光，每個位置可獨立設定', '1,990', 1990, '1', 'corsair_products/SCIMITAR PRO RGB(1).jpg', 'corsair_products/SCIMITAR PRO RGB(2).jpg', '1-2', 'rule.jpg', ''),
(10, '1', '3', '【CORSAIR海盜船】GAMING HS50 Stereo Gaming Headset 立體聲電競耳機', 'corsair_products/HS50.png', '● 專為電競精心打造 ● 多平台相容、全方位電競耳機 ● 遊戲時間、全程舒適 ', '1,690', 1690, '1', 'corsair_products/HS50(1).jpg', 'corsair_products/HS50(2).jpg', '3-1', 'rule.jpg', ''),
(11, '1', '3', '【CORSAIR海盜船】GAMING HS60 Stereo Gaming Headset 立體聲/7.1環繞聲道 電競耳機', 'corsair_products/HS60.png', '● 專為電競精心打造 ● 多平台相容、全方位電競耳機 ● 遊戲時間、全程舒適 ', '2,490', 2490, '2', 'corsair_products/HS60(1).jpg', '', '3-1', 'rule.jpg', ''),
(12, '1', '3', '【CORSAIR海盜船】HS70 SURROUND Gaming 無線電競耳麥', 'corsair_products/HS70.png', '● 最長達16小時續航力之電量 ● 耳罩配有記憶海綿可舒適配戴 ● 兼容於Sony PS4，可直接隨插即用 ', '3,390', 3390, '2', 'corsair_products/HS70(1).jpg', '', '3-3', 'rule.jpg', ''),
(15, '1', '3', '【CORSAIR海盜船】VOID PRO RGB 7.1聲道無線電競耳機麥克風-白', 'corsair_products/VOID RGB USB.png', '● 全天候舒適、史詩級音效 ● 無線2.4GHz連接，信號範圍長達12m ● 接收器專用延長基座', '3,990', 3990, '2', 'corsair_products/VOID PRO RGB(1).jpg', '', '3-3', 'rule.jpg', ''),
(16, '1', '3', '【CORSAIR海盜船】HS70 SURROUND Gaming 無線電競耳麥', 'corsair_products/VOID Surround.png', '● 全天候舒適、史詩級音效 ● 無線2.4GHz連接，信號範圍長達12m ● 接收器專用延長基座', '3,390', 3390, '2', 'corsair_products/VOID Surround(1).jpg', '', '3-3', 'rule.jpg', ''),
(17, '1', '2', '【CORSAIR海盜船】Gaming K65 RGB機械電競鍵盤', 'corsair_products/K65.png', '● Cherry MX Speed RGB機械軸 ● FPS和MOBA鍵帽 ● 單鍵1680萬色可自訂背光 ● 內建記憶體 ', '4,390', 4390, '3', 'corsair_products/k65(1).jpg', 'corsair_products/k65(2).jpg', '2-2', 'rule.jpg', ''),
(18, '1', '2', '【CORSAIR海盜船】Gaming K68 機械電競鍵盤', 'corsair_products/K68.png', '● IP32防粗塵，防潑水 ● CHERRY MX紅軸 ● 紅色LED背光 ● 多媒體控制按鍵 ', '3,390', 3390, '2', 'corsair_products/K68(1).jpg', '', '2-1', 'rule.jpg', ''),
(19, '1', '2', '【CORSAIR海盜船】K70 RGB MK.2 機械式電競鍵盤', 'corsair_products/K70 RGB.png', '● IP32防粗塵，防潑水 ● CHERRY MX紅軸 ● 紅色LED背光 ● 多媒體控制按鍵 ', '4,550', 4550, '3', 'corsair_products/K70(1).jpg', 'corsair_products/K70(2).jpg', '2-2', 'rule.jpg', ''),
(20, '1', '2', '【CORSAIR海盜船】K70 LUX機械電競鍵盤-青軸中文紅光', 'corsair_products/K95.png', '● IP32防粗塵，防潑水 ● CHERRY MX紅軸 ● 紅色LED背光 ● 多媒體控制按鍵 ', '4,190', 4190, '3', 'corsair_products/K95(1).jpg', 'corsair_products/K95(2).jpg', '2-1', 'rule.jpg', ''),
(23, '1', '2', '【CORSAIR海盜船】Gaming STRAFE RGB機械電競鍵盤', 'corsair_products/STRAFE.png', '● CHERRY靜音軸 ● 傾斜角度設計格紋遊戲鍵帽 ● 全鍵盤防鬼鍵設計 ', '3,990', 3990, '2', 'corsair_products/STRAFE(1).jpg', 'corsair_products/STRAFE(2).jpg', '2-1', 'rule.jpg', ''),
(24, '2', '1', '【RAZER雷蛇】Basilisk 巴塞利斯蛇', 'razer_products/Basilisk-Base.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '1,990', 1990, '2', 'razer_products/Basilisk-Base(1).jpg', 'razer_products/Basilisk-Base(2).jpg', '1-1', 'rule.jpg', ''),
(25, '2', '1', '【RAZER雷蛇】Basilisk Essential 巴塞利斯蛇標準版', 'razer_products/Basilisk-Essential-Base.png', '● 6,400 DPI 光學感測器 ● 每秒最多220 英寸(IPS) 的移動速度/30 G 加速度 ● 7顆可獨立編程Hyperesponse按鍵 ', '1,190', 1190, '1', 'razer_products/Basilisk-Essential-Base(1).jpg', 'razer_products/Basilisk-Essential-Base(2).jpg', '1-2', 'rule.jpg', ''),
(39, '2', '1', '【RAZER雷蛇】Basilisk 巴塞利斯蛇', 'razer_products/Basilisk-Base.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '1,990', 1990, '2', 'razer_products/Basilisk-Base(1).jpg', 'razer_products/Basilisk-Base(2).jpg', '1-2', 'rule.jpg', ''),
(40, '2', '1', '【RAZER雷蛇】Basilisk Essential 巴塞利斯蛇標準版', 'razer_products/Basilisk-Essential-Base.png', '● 6,400 DPI 光學感測器 ● 每秒最多220 英寸(IPS) 的移動速度/30 G 加速度 ● 7顆可獨立編程Hyperesponse按鍵 ', '1,190', 1190, '1', 'razer_products/Basilisk-Essential-Base(1).jpg', 'razer_products/Basilisk-Essential-Base(2).jpg', '1-3', 'rule.jpg', ''),
(41, '2', '1', '【RAZER雷蛇】DeathAdder Elite 煉獄蝰蛇精英版 電競滑鼠', 'razer_products/Deathadder-Elite-Base.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '1,690', 1690, '1', 'razer_products/Deathadder-Elite-Base(1).jpg', 'razer_products/Deathadder-Elite-Base(2).jpg', '1-3', 'rule.jpg', ''),
(42, '2', '1', '【RAZER雷蛇】DeathAdder Elite 煉獄蝰蛇精英版 電競滑鼠-藍', 'razer_products/Deathadder-LeftHand-Base.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '1,690', 1690, '1', 'razer_products/Deathadder-Elite-Base(1).jpg', 'razer_products/Deathadder-Elite-Base(2).jpg', '1-3', 'rule.jpg', ''),
(44, '2', '1', '【RAZER雷蛇】蝰蛇 Essential版-白', 'razer_products/RZ01-02130200-R3M1.png', '● 簡約且經典的人體工學設計 ● 5顆Hyperesponse按建 ● 6400 DPI 光學感測器 ', '990', 990, '1', 'razer_products/Deathadder-Elite-Base(1).jpg', 'razer_products/Deathadder-Elite-Base(2).jpg', '1-1', 'rule.jpg', ''),
(45, '2', '1', '【RAZER雷蛇】蝰蛇 Essential版-黑', 'razer_products/RZ01-02130300-R3M1.png', '● 簡約且經典的人體工學設計 ● 5顆Hyperesponse按建 ● 6400 DPI 光學感測器 ', '990', 990, '1', 'razer_products/Deathadder-Elite-Base(1).jpg', 'razer_products/Deathadder-Elite-Base(2).jpg', '1-1', 'rule.jpg', ''),
(46, '2', '1', '【RAZER雷蛇】蝰蛇 Essential版-粉', 'razer_products/RZ01-02130400-R3M1.png', '● 簡約且經典的人體工學設計 ● 5顆Hyperesponse按建 ● 6400 DPI 光學感測器 ', '990', 990, '1', 'razer_products/Deathadder-Elite-Base(1).jpg', 'razer_products/Deathadder-Elite-Base(2).jpg', '1-1', 'rule.jpg', ''),
(47, '2', '3', '【RAZER雷蛇】Electra V2 雷霆齒鯨 USB 電競耳機麥克風', 'razer_products/Electra-V2-Base.png', '● 可微調自訂的 40 MM 驅動單體 ● 一體成型鋁製框架 ● 虛擬7.1聲道環繞音效 ', '1,990', 1990, '1', 'razer_products/Electra-V2-Base(1).jpg', 'razer_products/Electra-V2-Base(2).jpg', '3-1', 'rule.jpg', ''),
(48, '2', '3', '【RAZER雷蛇】Nari Essential 影鮫標準版 電競無線耳機麥克風', 'razer_products/Nari-Base.png', '● THX Spatial Audio ● 強化舒適度 ● 零延遲無線性能 ● 16 小時電池續航力 ', '2,690', 2690, '2', 'razer_products/Nari-Base(1).jpg', '', '3-3', 'rule.jpg', ''),
(49, '2', '3', '【RAZER雷蛇】Kraken 北海巨妖 ', 'razer_products/Razer-Kraken-X-Base.png', '● 精心調校的 50 mm 驅動單體 ● 注入冷卻凝膠的耳墊 ● 伸縮式單方向麥克風', '2,490', 2490, '2', 'razer_products/Nari-Base(1).jpg', '', '3-1', 'rule.jpg', ''),
(50, '2', '3', '【RAZER雷蛇】Kraken TE 北海巨妖競技版', 'razer_products/RZ04.png', '● 全天候舒適、史詩級音效 ● 接收器專用延長基座', '3,790', 3790, '2', 'razer_products/Nari-Base(1).jpg', '', '3-3', 'rule.jpg', ''),
(51, '2', '3', '【RAZER雷蛇】Kraken 北海巨妖', 'razer_products/RZ04-02080100-R3M1.png', '● 全天候舒適、史詩級音效 ● 無線2.4GHz連接，信號範圍長達12m ● 接收器專用延長基座', '3,190', 3190, '2', 'razer_products/VOID PRO RGB(1).jpg', '', '3-3', 'rule.jpg', ''),
(52, '2', '3', '【RAZER雷蛇】Thresher 7.1(PS4) 無線戰戟鯊', 'razer_products/Thresher-TE-Base.png', '● 與配戴眼鏡一樣舒適 – 泡棉凹槽可舒緩耳鬢壓力 ● 耳麥控制方式 – 快速調整耳麥與熱戰音量 ● 隔音人造皮革耳墊 – 讓你可全心投入遊戲 ', '5,290', 5290, '3', 'razer_products/Thresher-TE-Base(1).jpg', 'razer_products/Thresher-TE-Base(2).jpg', '3-3', 'rule.jpg', ''),
(53, '2', '3', '【RAZER雷蛇】迪亞海魔 7.1 V2', 'razer_products/Tiamat-71-V2-Base.png', '● 全天候舒適、史詩級音效 ● 接收器專用延長基座', '8,099', 8099, '4', 'razer_products/Thresher-TE-Base(1).jpg', 'razer_products/Thresher-TE-Base(2).jpg', '3-2', 'rule.jpg', ''),
(54, '2', '2', '【RAZER雷蛇】BlackWidow 黑寡婦蜘幻彩版 電競鍵盤', 'razer_products/BlackWidow.png', ' ● 專為遊戲設計的Razer™ 雷蛇綠軸 ● 約8000萬次按鍵敲擊壽命 ● 具有約1680萬種可自定義顏色選項的Razer Chroma™ ', '2,499', 2499, '2', 'razer_products/BlackWidow(1).jpg', '', '2-2', 'rule.jpg', ''),
(55, '2', '2', '【RAZER雷蛇】BlackWidow 黑寡婦蜘-Lite 電競鍵盤', 'razer_products/BlackWidow-Lite-Base.png', ' ● 專為遊戲設計的Razer™ 雷蛇綠軸 ● 約8000萬次按鍵敲擊壽命 ● 具有約1680萬種可自定義顏色選項的Razer Chroma™ ', '2,099', 2099, '2', 'razer_products/BlackWidow(1).jpg', '', '2-1', 'rule.jpg', ''),
(56, '2', '2', '【RAZER雷蛇】BlackWidow 黑寡婦蜘幻彩版 電競鍵盤', 'razer_products/BlackWidow-TE-Chroma-V2.png', '● 專為遊戲設計的Razer™ 雷蛇綠軸 ● 約8000萬次按鍵敲擊壽命 ● 具有約1680萬種可自定義顏色選項的Razer Chroma™ ', '4,190', 4190, '3', 'razer_products/BlackWidow(1).jpg', '', '2-2', 'rule.jpg', ''),
(57, '2', '2', '【RAZER雷蛇】BlackWidow 黑寡婦蜘幻彩版 電競鍵盤', 'razer_products/RZ03-01762100-R3M1.png', ' ● 專為遊戲設計的Razer™ 雷蛇綠軸 ● 約8000萬次按鍵敲擊壽命 ● 具有約1680萬種可自定義顏色選項的Razer Chroma™ ', '4,499', 4499, '3', 'razer_products/BlackWidow(1).jpg', '', '2-3', 'rule.jpg', ''),
(58, '3', '1', '【羅技logitechG】G403 PRODIGY 有線遊戲滑鼠', 'logitechG_products/g403.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '1,790', 1790, '2', 'logitechG_products/g403(1).jpg', '', '1-1', 'rule.jpg', ''),
(59, '3', '1', '【羅技logitechG】G403 Hero 電競滑鼠', 'logitechG_products/g403-prodigy.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '1,790', 1790, '2', 'logitechG_products/g403(1).jpg', '', '1-1', 'rule.jpg', ''),
(60, '3', '1', '【羅技logitechG】G502 LIGHTSPEED 高效能無線電競滑鼠', 'logitechG_products/g502.png', ' ● 超疾速 LIGHTSPEED 無線技術 ● 高效能 Hero 16K 感應器 ● 搭配 PowerPlay 享有無限電力 ', '4,990', 4990, '3', 'logitechG_products/G512(1).jpg', '', '1-3', 'rule.jpg', ''),
(61, '3', '1', '【羅技logitechG】G603 無線遊戲滑鼠', 'logitechG_products/g603.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '2,290', 2290, '2', 'logitechG_products/G603(1).jpg', '', '1-3', 'rule.jpg', ''),
(62, '3', '1', '【羅技logitechG】G703 Lightspeed 無線電競滑鼠', 'logitechG_products/g703.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '3,490', 3490, '2', 'logitechG_products/G603(1).jpg', '', '1-3', 'rule.jpg', ''),
(63, '3', '1', '【羅技logitechG】G903 Lightspeed 專業級無線電競滑鼠', 'logitechG_products/g903.png', '● 簡約且經典的人體工學設計 ● 5顆Hyperesponse按建 ● 6400 DPI 光學感測器 ', '5,490', 5490, '3', 'logitechG_products/G903(1).jpg', 'logitechG_products/G903(2).jpg', '1-3', 'rule.jpg', ''),
(65, '3', '3', '【羅技logitechG】G231 Prodigy 電競耳機麥克風', 'logitechG_products/g231.png', '● 遊戲等級的高品質立體聲音效 ● 運動級效能布質耳罩 ● 輕盈的設計  ', '1,990', 1990, '1', 'logitechG_products/g231(1).jpg', '', '3-1', 'rule.jpg', ''),
(66, '3', '3', '【羅技logitechG】G233 有線 電競耳機麥克風', 'logitechG_products/g233.png', '● PRO-G 先進音訊單體 ● 輕盈舒適 ● 令人驚豔的極致音訊和語音清晰度', '2,190', 2190, '2', 'logitechG_products/G233(1).jpg', '', '3-2', 'rule.jpg', ''),
(67, '3', '3', '【羅技logitechG】G331 立體聲電競耳機麥克風', 'logitechG_products/g331.png', '● THX Spatial Audio ● 強化舒適度 ● 零延遲無線性能 ● 針對舒適性與耐用度而打造 ', '2,490', 2490, '2', 'logitechG_products/G331(1).jpg', '', '3-1', 'rule.jpg', ''),
(68, '3', '3', '【羅技logitechG】G431 7.1電競耳機', 'logitechG_products/g431.png', '● 精心調校的 50 mm 驅動單體 ● 注入冷卻凝膠的耳墊 ● 伸縮式單方向麥克風', '2,990', 2990, '2', 'logitechG_products/G431(1).jpg', '', '3-1', 'rule.jpg', ''),
(69, '3', '3', '【羅技logitechG】G433 有線 電競耳機麥克風', 'logitechG_products/G433.png', '● 全天候舒適、史詩級音效 ● 接收器專用延長基座', '2,990', 2990, '2', 'logitechG_products/G431(1).jpg', '', '3-1', 'rule.jpg', ''),
(70, '3', '3', '【羅技logitechG】G533 無線 電競耳機麥克風', 'logitechG_products/g533.png', '● 全天候舒適、史詩級音效 ● 無線2.4GHz連接，信號範圍長達12m ● 接收器專用延長基座', '3,490', 3490, '2', 'logitechG_products/G533(1).jpg', '', '3-3', 'rule.jpg', ''),
(71, '3', '3', '【羅技logitechG】G633 電競耳機麥克風', 'logitechG_products/g633.png', '● 與配戴眼鏡一樣舒適 – 泡棉凹槽可舒緩耳鬢壓力 ● 耳麥控制方式 – 快速調整耳麥與熱戰音量', '3,990', 3990, '2', 'logitechG_products/G633s(1).jpg', '', '3-2', 'rule.jpg', ''),
(72, '3', '2', '【羅技logitechG】G413 機械式背光遊戲鍵盤', 'logitechG_products/g413.png', '● Romer-G 鍵軸 ● LED紅色背光 ● 鋁鎂合金頂蓋、懸浮按鍵設計', '8,099', 8099, '4', 'logitechG_products/G413(1).jpg', '', '2-1', 'rule.jpg', ''),
(73, '3', '2', '【羅技logitechG】G213 PRODIGY RGB遊戲鍵盤', 'logitechG_products/g213.png', ' ● 專為遊戲設計的Razer™ 雷蛇綠軸 ● 約8000萬次按鍵敲擊壽命 ● 具有約1680萬種可自定義顏色選項的Razer Chroma™ ', '1,199', 1199, '1', 'logitechG_products/G213(1).jpg', '', '2-2', 'rule.jpg', ''),
(74, '3', '2', '【羅技logitechG】G413 機械式背光遊戲鍵盤', 'logitechG_products/g413.png', ' ● 專為遊戲設計的Razer™ 雷蛇綠軸 ● 約8000萬次按鍵敲擊壽命 ● 具有約1680萬種可自定義顏色選項的Razer Chroma™ ', '2,499', 2499, '2', 'logitechG_products/G413(1).jpg', '', '2-1', 'rule.jpg', ''),
(75, '3', '2', '【羅技logitechG】G613 無線機械式遊戲鍵盤', 'logitechG_products/G613.png', '● Romer-G 機械軸 ● 可自訂G功能鍵 ● 無線 / 藍牙連線技術 ', '2,990', 2990, '2', 'logitechG_products/G613(1).jpg', '', '2-3', 'rule.jpg', ''),
(76, '3', '2', '【羅技logitechG】Pro 精簡型機械式遊戲鍵盤', 'logitechG_products/pro-keyboard-gallery.png', ' ● Romer-G鍵軸 ● 精簡尺寸設計 ● 7000萬次耐用點集 ', '4,499', 4499, '3', 'logitechG_products/pro-keyboard-gallery(1).jpg', 'logitechG_products/pro-keyboard-gallery(2).jpg', '2-2', 'rule.jpg', ''),
(77, '4', '1', '【msi微星】Interceptor DS B1電競滑鼠', 'MSI_products/DS B1.png', '● 電競光學感應器 ● DPI即時切換按鈕 ● 人體工學設計 ● 可拆卸的 DPI 切換鍵', '790', 790, '1', 'MSI_products/DS B1(1).jpg', 'MSI_products/DS B1(2)', '1-1', 'rule.jpg', ''),
(78, '4', '1', '【msi微星】DS100 Gaming 電競滑鼠', 'MSI_products/DS100.png', '● 全世界最先進的FPS遊戲滑鼠 ● 貨真價實的16,000 DPI 5G 光學感測器 ● 可自訂滾輪阻力● 可拆卸的 DPI 切換鍵', '1,790', 1790, '2', 'MSI_products/DS100(1).jpg', '', '1-1', 'rule.jpg', ''),
(79, '4', '1', '【msi微星】微星 DS200 砝碼雷射電競滑鼠', 'MSI_products/DS200.png', ' ● 可調配重系統 ● 可調RGB配光 ● 多組可自定義按鍵 ', '1,490', 1490, '2', 'MSI_products/DS200(1).jpg', 'MSI_products/DS200(1).jpg', '1-2', 'rule.jpg', ''),
(80, '4', '1', '【msi微星】DS300職業級雷射砝碼電競滑鼠', 'MSI_products/DS300.png', '● 可調配重系統 ● 可調RGB配光 ● 多組可自定義按鍵 ', '1,790', 1790, '2', 'MSI_products/DS300(1).jpg', 'MSI_products/DS300(2).jpg', '1-2', 'rule.jpg', ''),
(81, '4', '1', '【msi微星】GM50輕量化RGB電競滑鼠', 'MSI_products/GM50.png', '● PMW 3330光學傳感器 ● 專為FPS射擊遊戲設計,重量僅87克 ● 1600萬色RGB 、9種燈光特效模式', '1,990', 1990, '2', 'MSI_products/GM50(1).jpg', 'MSI_products/GM50(2).jpg', '1-2', 'rule.jpg', ''),
(82, '4', '1', '【msi微星】GM60 Gaming 電競滑鼠', 'MSI_products/GM60.png', '● 簡約且經典的人體工學設計 ● 鍍金USB接頭及編織電纜 ● 光學傳感器設計/快速DPI調整  ', '2,990', 2990, '2', 'MSI_products/GM60(1).jpg', 'MSI_products/GM60(2).jpg', '1-2', 'rule.jpg', ''),
(83, '4', '1', '【msi微星】Clutch GM70 GAMING 電競滑鼠', 'MSI_products/GM70.png', '● 簡約且經典的人體工學設計 ● 雙模式使用，有線（3000Hz回報率）/無線（1000Hz回報率）● RGB燈光效果', '3,990', 3990, '2', 'MSI_products/GM70(1).jpg', 'MSI_products/GM70(2).jpg', '1-3', 'rule.jpg', ''),
(84, '4', '3', '【msi微星】蝰蛇 Essential版-黑', 'MSI_products/DS501.png', '● 全指向麥克風  ● 40mm大型喇叭驅動單體 ● 高品質揚聲器 ', '1,590', 1590, '1', 'MSI_products/DS501(1).jpg', 'MSI_products/DS501(2).jpg', '1-1', 'rule.jpg', ''),
(85, '4', '3', '【msi微星】DS502 職業級震動電競耳機', 'MSI_products/DS502.png', '● 震動功能 ● 40mm大型喇叭驅動單體 ● 輕盈的設計  ', '2,990', 1990, '2', 'MSI_products/DS502(1).jpg', 'MSI_products/DS502(1).jpg', '3-1', 'rule.jpg', ''),
(86, '4', '3', '【msi微星】Immerse GH60 Hi-Res職業級電競耳麥', 'MSI_products/GH60.png', '● PRO-G 先進音訊單體 ● 輕盈舒適 ● 令人驚豔的極致音訊和語音清晰度', '2,490', 2490, '2', 'MSI_products/GH60(1).jpg', 'MSI_products/GH60(2).jpg', '3-1', 'rule.jpg', ''),
(87, '4', '3', '【msi微星】MSI Immerse GH70 GAMING 電競耳機', 'MSI_products/GH70.png', '● Hi-Res高品質揚聲器 ● 強化舒適度 ● 先進的擬真7.1多聲道', '3,399', 3399, '2', 'MSI_products/GH70(1).jpg', 'MSI_products/GH70(1).jpg', '3-1', 'rule.jpg', ''),
(88, '4', '2', '【msi微星】DS4100 攔截者電競鍵盤', 'MSI_products/DS4100.png', '● 高壽命薄膜鍵盤 ● 多功能背光調整 ● 超輕薄機身設計 ', '1,290', 1290, '1', 'MSI_products/DS4100(1).jpg', '', '2-1', 'rule.jpg', ''),
(89, '4', '2', '【msi微星】Interceptor DS4200 電競鍵盤', 'MSI_products/DS4200.png', ' ● DS4200 類機械式電競鍵盤 ● 機械般的觸感 ● 背光控制 可設定3種模式效果(關閉/恆亮/呼吸)', '1,990', 1990, '1', 'MSI_products/DS4200(1).jpg', 'MSI_products/DS4200(2).jpg', '2-2', 'rule.jpg', 'MSI_products/DS4200(1).png,MSI_products/DS4200(2).png,MSI_products/DS4200(3).png,MSI_products/DS4200(4).png,MSI_products/DS4200.png'),
(90, '4', '2', '【msi微星】Vigor GK40 RGB防潑水電競鍵盤', 'MSI_products/GK40.png', ' ● 8 種 燈光模式 ● 按鍵採用Plunger switches ● 4 段亮度調整及9段變幻速度調整 ', '1,999', 1999, '1', 'MSI_products/GK40(1).jpg', 'MSI_products/GK40(2).jpg', '2-2', 'rule.jpg', ''),
(91, '4', '2', '【msi微星】Vigor GK60 CL TC 電競鍵盤', 'MSI_products/GK60.png', '● 德國Cherry MX機械青軸,耐用達5,000萬次  ● Gaming Base強固鍵盤設計 ● 純色紅光背光鍵盤 ', '3,290', 3290, '2', 'MSI_products/GK60(1).jpg', '', '2-1', 'rule.jpg', ''),
(92, '4', '2', '【msi微星】Vigor GK70 Cherry MX RGB機械電競鍵盤', 'MSI_products/GK70.png', ' ● 體積小巧的Tenkeyless電競鍵盤 ● Cherry MX RGB紅軸設計 ● 炫彩Mystic Light 燈光軟體配置 ', '4,699', 4699, '3', 'MSI_products/GK70(1)', 'MSI_products/GK70(2)', '2-2', 'rule.jpg', ''),
(93, '4', '2', '【msi微星】Vigor GK80 Cherry MX RGB機械電競鍵盤', 'MSI_products/GK80.png', '● 支援外部裝置RGB燈光特效同步  ● Cherry MX紅軸 ● 鋁合金結構 ', '5,599', 5599, '3', 'MSI_products/GK70(1).jpg', 'MSI_products/GK70(2).jpg', '2-2', 'rule.jpg', ''),
(94, '4', '2', '【msi微星】GK701職業級機械式鍵盤', 'MSI_products/GK701.png', '● CHERRY靜音軸 ● 傾斜角度設計格紋遊戲鍵帽 ● 全鍵盤防鬼鍵設計 ', '3,990', 3990, '2', 'MSI_products/GK701(1).jpg', 'MSI_products/GK701(2).jpg', '2-3', 'rule.jpg', ''),
(95, '4', '2', '【msi微星】GK701 RGB GAMING 電競鍵盤', 'MSI_products/GK701RGB.png', '● CHERRY靜音軸 ● 傾斜角度設計格紋遊戲鍵帽 ● 全鍵盤防鬼鍵設計 ', '3,990', 3990, '2', 'MSI_products/GK701RGB(1).jpg', 'MSI_products/GK701(2).jpg', '2-2', 'rule.jpg', ''),
(96, '4', '3', '【msi微星】MSI Immerse GH70 GAMING 電競耳機', 'MSI_products/GH70.png', '● Hi-Res高品質揚聲器 ● 強化舒適度 ● 先進的擬真7.1多聲道', '3,399', 3399, '2', 'MSI_products/GH70(1).jpg', 'MSI_products/GH70(1).jpg', '3-3', 'rule.jpg', '');

-- --------------------------------------------------------

--
-- 資料表結構 `product_brand`
--

CREATE TABLE `product_brand` (
  `sid` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_brand`
--

INSERT INTO `product_brand` (`sid`, `brand_name`, `brand_img`) VALUES
(1, 'CORSAIR海盜船', 'CorsairLogo.svg'),
(2, 'RAZER雷蛇', 'RazerLogo.svg'),
(3, '羅技logitechG', 'LogLogo.svg'),
(4, 'msi微星', 'MsiLogo.svg');

-- --------------------------------------------------------

--
-- 資料表結構 `product_like`
--

CREATE TABLE `product_like` (
  `sid` int(11) NOT NULL,
  `belong` varchar(255) NOT NULL,
  `which` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_like`
--

INSERT INTO `product_like` (`sid`, `belong`, `which`) VALUES
(107, '5', '2'),
(112, '5', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `product_type`
--

CREATE TABLE `product_type` (
  `sid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_type`
--

INSERT INTO `product_type` (`sid`, `type`) VALUES
(1, '滑鼠'),
(2, '鍵盤'),
(3, '耳機');

-- --------------------------------------------------------

--
-- 資料表結構 `report_problem`
--

CREATE TABLE `report_problem` (
  `sid` int(11) NOT NULL,
  `typeProblem` int(11) NOT NULL,
  `problemDetail` int(11) NOT NULL,
  `statusStatement` varchar(255) NOT NULL,
  `belong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `report_problem`
--

INSERT INTO `report_problem` (`sid`, `typeProblem`, `problemDetail`, `statusStatement`, `belong`) VALUES
(1, 2, 2, '9+9898+', '6'),
(2, 2, 1, '525', '6'),
(3, 1, 2, '4565464', '6'),
(4, 1, 1, 'sfffdfs', '6'),
(5, 2, 2, 'dfgdfdfg', '6'),
(6, 2, 2, '555555555', '6'),
(7, 2, 1, '5577757', '6'),
(8, 2, 2, '787788', '6'),
(9, 1, 1, 'dfgsdfsfdfsg', '6'),
(10, 1, 1, '=====', '6'),
(11, 1, 1, 'rgsdgffdfg', '6'),
(12, 1, 2, 'gsdfgsdfsfg', '6'),
(13, 1, 2, 'rtwrwrwrtre', '6'),
(14, 2, 2, '5486546', '6'),
(15, 1, 1, 'tsdgdgfdfg', '6'),
(16, 2, 2, 'fgfdfdsfdsf', '6'),
(17, 1, 1, 'fgsfdfgfdg', '6'),
(18, 1, 1, 'gzsfgfgsdfg', '7'),
(19, 2, 2, '我忘記密碼了!!!', '7'),
(20, 1, 1, 'dfsdfsdff', '7');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `channel_replay_list`
--
ALTER TABLE `channel_replay_list`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `products_list`
--
ALTER TABLE `products_list`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_like`
--
ALTER TABLE `product_like`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `report_problem`
--
ALTER TABLE `report_problem`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `channel_replay_list`
--
ALTER TABLE `channel_replay_list`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '會員編號', AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_list`
--
ALTER TABLE `order_list`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_product`
--
ALTER TABLE `order_product`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products_list`
--
ALTER TABLE `products_list`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_like`
--
ALTER TABLE `product_like`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_type`
--
ALTER TABLE `product_type`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `report_problem`
--
ALTER TABLE `report_problem`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
