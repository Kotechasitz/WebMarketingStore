-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2019 at 01:39 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account` int(10) NOT NULL,
  `Username` char(20) NOT NULL,
  `Password` char(20) NOT NULL,
  `Firstname` char(20) NOT NULL,
  `Lastname` char(20) NOT NULL,
  `Email` char(20) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account`, `Username`, `Password`, `Firstname`, `Lastname`, `Email`, `Tel`, `Address`) VALUES
(1, 'Admin', '123456', 'Waroot', 'Suwanopard', 'Admin@hotmail.com', '0812345689', '191/1 ดาวอังคาร กรุงเทพ'),
(2, 'Wisarut', '123456', 'Wisarut', 'Chirakarn', 'wisarut@hotmail.com', '0123456789', '513/2 หมู่8 ต.หนองจอก จังหวัดซิดนีย์ ประเทศวากานด้า'),
(10, 'taechaput', 'tong211040', 'taechaput', 'aksorn', 'tong_211040@hotmail.', '0817225588', '195/2 ต.ประปาเเดง อ.วาฮาล่า จ.ไซตามะ ประเทศเเอสการ์ด');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `ProductID` int(20) NOT NULL,
  `Name` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Info` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Category` char(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`ProductID`, `Name`, `Info`, `Category`, `Price`) VALUES
(1, 'Champion Classic Jersey Script Tee', 'เสื้อยืด Champion Classic Jersey Script Tee สีดำ', 'shirt', 500),
(2, 'เสื้อยืดผ้าฝ้าย พิมพ์ลาย Dickies', 'สุดยอดเสื้อยืดผ้าฝ้าย พิมพ์ลาย Dickies', 'shirt', 450),
(3, 'เสื้อยืดวันพีซ ลาย WANTED LUFFY สีกรม', 'เสื้อยืดวันพีซ ลาย WANTED LUFFY สีกรมงานถักพิเศษใส่ไข่สองฟอง', 'Action', 500),
(4, 'กางเกง รุ่น TSCT02769', 'กางเกง รุ่น TSCT02769 ไซส์ M สีกรมท่า ลายทา', 'pants', 350),
(5, ' Levi\'s® 505C', 'กางเกงยีนส์ขาสั้นผู้ชาย Levi\'s® 505C', 'pants', 600),
(6, 'กางเกงสแล็คผู้ชายสีดำ ทรงกระบอกเล็ก', 'กางเกงสแล็คผู้ชายสีดำ ทรงกระบอกเล็ก', 'pants', 600),
(7, 'เสื้อสเวตเตอร์ แขนยาว มีฮู๊ดและซิบหน้า', 'เสื้อสเวตเตอร์ แขนยาว มีฮู๊ดและซิบหน้า ถักละเอียดสำหรับผู้หญิง', 'sweater', 200),
(8, 'เสื้อสเวตเตอร์ถัก Hooded', 'เสื้อสเวตเตอร์ถัก Hoodedแบบถักพิเศษสีน้ำตาลสำหรับผู้หญิง', 'sweater', 650),
(9, 'Gardenia Retro Retro', 'สเเวร์เตอร์สีดำเสื้อคลุมพ่อมดสไตล์ ', 'Comedy', 650),
(10, 'Rastaclat Positive Vibes - Black', 'Rastaclat ถักพิเศษสำหรับรำลึกปี1996ลายดำ', 'Rastaclat', 600),
(11, 'RASTACLAT Galaxy Shoelace Bracelet', 'RASTACLAT เเบบถักพิเศษลายกาเเล็กซี่หลากสี', 'Rastaclat', 500),
(12, 'Rastaclat Miniclat: Yasmeen', 'Rastaclatเเบบถักสีรุ้งเเบบพิเศษใส่ได้ทั้งชายเเละหญิง', 'Rastaclat', 600);

-- --------------------------------------------------------

--
-- Table structure for table `selllist`
--

CREATE TABLE `selllist` (
  `OrderID` int(20) NOT NULL,
  `ProductID` int(20) DEFAULT NULL,
  `Username` char(30) DEFAULT NULL,
  `Account` int(20) DEFAULT NULL,
  `Price` int(20) DEFAULT NULL,
  `Status` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selllist`
--

INSERT INTO `selllist` (`OrderID`, `ProductID`, `Username`, `Account`, `Price`, `Status`) VALUES
(22, 3, 'Wisarut', 2, 30, 'success'),
(25, 1, 'Wisarut', 2, 30, 'success'),
(26, 2, 'taechaput', 10, 450, 'success'),
(27, 2, 'taechaput', 10, 450, 'success'),
(28, 3, 'taechaput', 10, 500, 'success'),
(29, 5, 'taechaput', 10, 600, 'success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account`);

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `selllist`
--
ALTER TABLE `selllist`
  ADD PRIMARY KEY (`OrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `selllist`
--
ALTER TABLE `selllist`
  MODIFY `OrderID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
