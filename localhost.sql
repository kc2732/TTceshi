-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2016 at 09:31 PM
-- Server version: 5.5.49-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tangyisheng`
--

-- --------------------------------------------------------

--
-- Table structure for table `DataCollection`
--

CREATE TABLE IF NOT EXISTS `DataCollection` (
  `userId` varchar(20) COLLATE gbk_bin DEFAULT NULL,
  `name` varchar(20) COLLATE gbk_bin DEFAULT NULL,
  `gender` int(10) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `phone` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `waist` int(10) DEFAULT NULL,
  `question8` int(10) DEFAULT NULL,
  `question9` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `question10` int(10) DEFAULT NULL,
  `question11` int(10) DEFAULT NULL,
  `question0111` int(10) DEFAULT NULL,
  `question12` int(10) DEFAULT NULL,
  `question0112` int(10) DEFAULT NULL,
  `question13` int(10) DEFAULT NULL,
  `question14` int(10) DEFAULT NULL,
  `question15` int(10) DEFAULT NULL,
  `question151` int(10) DEFAULT NULL,
  `question16` int(10) DEFAULT NULL,
  `question152` int(10) DEFAULT NULL,
  `question17` int(10) DEFAULT NULL,
  `question18` int(10) DEFAULT NULL,
  `question19` int(10) DEFAULT NULL,
  `question191` int(10) DEFAULT NULL,
  `question20` int(10) DEFAULT NULL,
  `question192` int(10) DEFAULT NULL,
  `question21` int(10) DEFAULT NULL,
  `question22` int(10) DEFAULT NULL,
  `question23` int(10) DEFAULT NULL,
  `question231` int(10) DEFAULT NULL,
  `question24` int(10) DEFAULT NULL,
  `question232` int(10) DEFAULT NULL,
  `question25` int(10) DEFAULT NULL,
  `question26` int(10) DEFAULT NULL,
  `question27` int(10) DEFAULT NULL,
  `question271` int(10) DEFAULT NULL,
  `question28` int(10) DEFAULT NULL,
  `question272` int(10) DEFAULT NULL,
  `question29` int(10) DEFAULT NULL,
  `question30` int(10) DEFAULT NULL,
  `question31` int(10) DEFAULT NULL,
  `question311` int(10) DEFAULT NULL,
  `question32` int(10) DEFAULT NULL,
  `question312` int(10) DEFAULT NULL,
  `question33` int(10) DEFAULT NULL,
  `question34` int(10) DEFAULT NULL,
  `question35` int(10) DEFAULT NULL,
  `question351` int(10) DEFAULT NULL,
  `question36` int(10) DEFAULT NULL,
  `question352` int(10) DEFAULT NULL,
  `question37` int(10) DEFAULT NULL,
  `question38` int(10) DEFAULT NULL,
  `question39` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `question40` int(10) DEFAULT NULL,
  `question41` int(10) DEFAULT NULL,
  `question42` int(10) DEFAULT NULL,
  `question43` int(10) DEFAULT NULL,
  `question44` int(10) DEFAULT NULL,
  `question45` int(10) DEFAULT NULL,
  `question46` int(10) DEFAULT NULL,
  `question47` int(10) DEFAULT NULL,
  `question48` int(10) DEFAULT NULL,
  `question49` int(10) DEFAULT NULL,
  `question50` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `question51` int(10) DEFAULT NULL,
  `question52` int(10) DEFAULT NULL,
  `question53` int(10) DEFAULT NULL,
  `question54` int(10) DEFAULT NULL,
  `question55` int(10) DEFAULT NULL,
  `question56` int(10) DEFAULT NULL,
  `question57` int(10) DEFAULT NULL,
  `question58` int(10) DEFAULT NULL,
  `question59` int(10) DEFAULT NULL,
  `question60` int(10) DEFAULT NULL,
  `question601` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `question61` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question62` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question63` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question64` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question65` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question66` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question67` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question68` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question69` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question70` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question71` int(10) DEFAULT NULL,
  `question72` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question73` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question74` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question75` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question76` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question77` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question78` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question79` int(10) DEFAULT NULL,
  `question80` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question81` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question82` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question83` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question84` int(10) DEFAULT NULL,
  `question85` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question86` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question87` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question88` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `question89` int(10) DEFAULT NULL,
  `question90` int(10) DEFAULT NULL,
  `question91` int(10) DEFAULT NULL,
  `question92` int(10) DEFAULT NULL,
  `question93` int(10) DEFAULT NULL,
  `question94` int(10) DEFAULT NULL,
  `question95` int(10) DEFAULT NULL,
  `question96` int(10) DEFAULT NULL,
  `question97` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question98` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question99` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question100` int(10) DEFAULT NULL,
  `question101` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question102` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question103` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question104` int(10) DEFAULT NULL,
  `question105` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question106` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question107` int(10) DEFAULT NULL,
  `question1071` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `question108` int(10) DEFAULT NULL,
  `question109` int(10) DEFAULT NULL,
  `question110` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question111` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question112` int(10) DEFAULT NULL,
  `question113` int(10) DEFAULT NULL,
  `question114` int(10) DEFAULT NULL,
  `question115` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question116` varchar(50) COLLATE gbk_bin DEFAULT NULL,
  `question117` int(10) DEFAULT NULL,
  `question118` int(10) DEFAULT NULL,
  `question119` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `question050` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `ershouyan` int(5) NOT NULL,
  `TNL` int(5) NOT NULL,
  `TNL1` varchar(20) COLLATE gbk_bin NOT NULL,
  `TNL2` varchar(20) COLLATE gbk_bin NOT NULL,
  `TNL3` varchar(20) COLLATE gbk_bin NOT NULL,
  `YDS` int(5) NOT NULL,
  `YDS1` varchar(20) COLLATE gbk_bin NOT NULL,
  `YDS2` varchar(100) COLLATE gbk_bin NOT NULL,
  `YDS3` varchar(100) COLLATE gbk_bin NOT NULL,
  `GZSS` int(5) NOT NULL,
  `ZWSJBB` int(5) NOT NULL,
  `ZZSJBB` int(5) NOT NULL,
  `SWMBB` int(5) NOT NULL,
  `part2` int(5) NOT NULL,
  `part3` int(5) NOT NULL,
  `part4` int(5) NOT NULL,
  `yundongqian` varchar(20) COLLATE gbk_bin NOT NULL,
  `yundonghou` varchar(20) COLLATE gbk_bin NOT NULL,
  `linshuiqian` varchar(20) COLLATE gbk_bin NOT NULL,
  `lingchen2dian` varchar(20) COLLATE gbk_bin NOT NULL,
  `shijiancha` varchar(20) COLLATE gbk_bin NOT NULL,
  `gaotanshuihuahewu` varchar(200) COLLATE gbk_bin NOT NULL,
  `zhongtanshuihuahewu` varchar(200) COLLATE gbk_bin NOT NULL,
  `ditanshuihuahewu` varchar(200) COLLATE gbk_bin NOT NULL,
  `roushiweizhu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk COLLATE=gbk_bin CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `DataCollection`
--

INSERT INTO `DataCollection` (`userId`, `name`, `gender`, `age`, `phone`, `height`, `weight`, `waist`, `question8`, `question9`, `question10`, `question11`, `question0111`, `question12`, `question0112`, `question13`, `question14`, `question15`, `question151`, `question16`, `question152`, `question17`, `question18`, `question19`, `question191`, `question20`, `question192`, `question21`, `question22`, `question23`, `question231`, `question24`, `question232`, `question25`, `question26`, `question27`, `question271`, `question28`, `question272`, `question29`, `question30`, `question31`, `question311`, `question32`, `question312`, `question33`, `question34`, `question35`, `question351`, `question36`, `question352`, `question37`, `question38`, `question39`, `question40`, `question41`, `question42`, `question43`, `question44`, `question45`, `question46`, `question47`, `question48`, `question49`, `question50`, `question51`, `question52`, `question53`, `question54`, `question55`, `question56`, `question57`, `question58`, `question59`, `question60`, `question601`, `question61`, `question62`, `question63`, `question64`, `question65`, `question66`, `question67`, `question68`, `question69`, `question70`, `question71`, `question72`, `question73`, `question74`, `question75`, `question76`, `question77`, `question78`, `question79`, `question80`, `question81`, `question82`, `question83`, `question84`, `question85`, `question86`, `question87`, `question88`, `question89`, `question90`, `question91`, `question92`, `question93`, `question94`, `question95`, `question96`, `question97`, `question98`, `question99`, `question100`, `question101`, `question102`, `question103`, `question104`, `question105`, `question106`, `question107`, `question1071`, `question108`, `question109`, `question110`, `question111`, `question112`, `question113`, `question114`, `question115`, `question116`, `question117`, `question118`, `question119`, `question050`, `ershouyan`, `TNL`, `TNL1`, `TNL2`, `TNL3`, `YDS`, `YDS1`, `YDS2`, `YDS3`, `GZSS`, `ZWSJBB`, `ZZSJBB`, `SWMBB`, `part2`, `part3`, `part4`, `yundongqian`, `yundonghou`, `linshuiqian`, `lingchen2dian`, `shijiancha`, `gaotanshuihuahewu`, `zhongtanshuihuahewu`, `ditanshuihuahewu`, `roushiweizhu`) VALUES
('1', 'sss', 1, 7, 'sss', 111, 112, 222, 2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 2, 0, 0, 2, 2, 2, 2, 2, 2, 2, '2', 2, 2, 0, 2, 2, 2, 2, 2, 2, 2, '', '2', '', '', '', '', '', '2', '', '', '', 0, '餐前30分钟的血糖水平', '餐后两小时的血糖水平', '空腹血糖的血糖水平', '血糖测量地', '血糖测量人', '糖化血红蛋白[A1C]', '测量糖化血红蛋白', 2, '', '', '', '', 2, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, '', '', 0, 1, '', '', '', 2, '', '', '', 1, 2, 2, 1, 0, 0, 0, '', '', '', '', '', '', '', '', 0),
('2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', '', '', 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0),
('3', '陈昆', 1, 24, '111', 175, 70, 86, 1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 2, 2, 0, 2, 2, 2, 2, 2, 2, 2, '2', 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, '', '1', '', '', '', '', '', '1', '', '', '', 0, '餐前30分钟的血糖', '餐后两小时的血糖', '空腹血糖的血', '血糖测量', '血糖测', '糖化血红蛋白', '测量糖化血', 1, '', '', '', '', 1, '', '', '', '您其他已经确', 0, 1, 0, 2, 0, 0, 0, 2, '', '', '', 2, '', '', '', 2, '', '', 0, '', 1, 2, '', '', 0, 0, 2, '', '', 0, 0, '', '', 0, 1, '', '', '', 1, '', '', '', 2, 2, 2, 2, 1, 0, 1, '11', '111', '111', '11', '111', '111', '111', '111', 2),
('4', '陈威岑', 1, 45, '3475717762', 175, 85, 98, 1, '', 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, '', 2, 2, 0, 2, 2, 2, 2, 2, 2, 2, '2', 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, '', '1', '', '', '', '', '', '1', '', '', '', 0, '5.80', '7.3', '6.00', '家中', '自己', '7', '不知道', 2, '', '', '', '', 1, '', '', '', '', 0, 2, 0, 2, 0, 0, 0, 2, '', '', '', 2, '', '', '', 2, '', '', 0, '', 3, 2, '', '', 0, 0, 2, '', '', 0, 0, '', '', 2, 1, '', '', '', 1, '', '', '', 2, 2, 2, 2, 1, 1, 1, '', '', '', '', '50', '', '', '', 2),
('', '', 0, 0, 'chenkun112358', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', '', 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0),
('5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', '', '', 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0),
('6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', '', '', 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE gbk_bin DEFAULT NULL,
  `password` varchar(20) COLLATE gbk_bin DEFAULT NULL,
  `phone` varchar(20) COLLATE gbk_bin DEFAULT NULL,
  `question1` int(5) NOT NULL,
  `question2` int(5) NOT NULL,
  `question3` int(5) NOT NULL,
  `question4` int(5) NOT NULL,
  `question5` int(5) NOT NULL,
  `question6` int(5) NOT NULL,
  `question7` int(5) NOT NULL,
  `question8` int(5) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk COLLATE=gbk_bin CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `status`) VALUES
(4, 'admin', 'admin', '3475717762', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '1123', '1123', '3475717762', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'noright', '1123', '3475717762', 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wen`
--

CREATE TABLE IF NOT EXISTS `wen` (
  `id` int(8) DEFAULT NULL,
  `bookid` int(8) DEFAULT NULL,
  `title` varchar(200) COLLATE gbk_bin DEFAULT NULL,
  `content` longtext COLLATE gbk_bin
) ENGINE=InnoDB DEFAULT CHARSET=gbk COLLATE=gbk_bin CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
