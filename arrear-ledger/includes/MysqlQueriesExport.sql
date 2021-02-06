-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 11:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrearledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cId` int(10) NOT NULL,
  `uId` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contactNumber` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cId`, `uId`, `name`, `contactNumber`, `address`) VALUES
(15, 0, 'Customer 15', '15151551', 'sdgvksdgvl'),
(16, 0, 'cust16', '24234', 'OLc2345234'),
(17, 0, 'Customer17', '171717171', 'Loc1717172721'),
(18, 0, 'cust18', '181818188', 'loc18181818'),
(19, 0, 'cust19', '19191991', 'LOC191991'),
(27, 11, '27', '27272727', 'wfeqfe'),
(28, 11, 'Cust 28', '28282828', 'Loc 2828282'),
(29, 11, 'Cust 29', '29292929', 'Loc 292929'),
(30, 11, 'Cust30', '303030', 'Loc30'),
(31, 11, 'Cust31', '313131', 'Loc 31'),
(32, 11, 'Cust32', '32', 'Loc32'),
(33, 11, 'Customer 33', '333', 'Loc333'),
(34, 20, 'Customer 34', '343434', 'CustHome34'),
(35, 20, 'Customer 35', '353535', 'CustHome35'),
(36, 20, 'Customer 36', '3636363', 'CustHomeLoca3636'),
(37, 20, 'Customer 37', '37373737', 'CustHomeLoca37'),
(38, 20, '38', '38383838', 'CustHOmLoc38'),
(39, 20, 'Customer 39', '39393939', 'Bashabo');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tId` int(10) NOT NULL,
  `cId` int(10) NOT NULL,
  `productQuantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `dateofPurchase` varchar(10) NOT NULL,
  `indue` int(10) NOT NULL,
  `payout` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tId`, `cId`, `productQuantity`, `price`, `dateofPurchase`, `indue`, `payout`) VALUES
(1, 1, 3, 50, '12-12-2002', 10, 40),
(2, 1, 5, 150, '14-12-2020', 20, 130),
(3, 2, 2, 200, '18-12-220', 80, 120),
(4, 3, 12, 1200, '8-12-2020', 70, 20),
(5, 2, 20, 20000, '28-2-2020', 800, 1200),
(6, 6, 3, 20, '8-2-2020', 80, 120),
(7, 4, 5, 500, '1-12-2020', 40, 20),
(8, 3, 4, 200, '18-4-2020', 20, 320),
(9, 1, 3, 100, '1-4-2020', 800, 1200),
(10, 5, 3, 500, '5-12-2020', 60, 10),
(11, 6, 400, 10000, '28-12-2020', 18000, 2000),
(12, 7, 40, 200000, '16-12-2020', 190000, 10000),
(13, 17, 70, 12, '16-12-2020', 2, 10),
(14, 25, 100, 100, '14-12-2020', 12, 88),
(15, 22, 20, 200, '16-12-2020', 50, 150),
(16, 22, 12, 30, '16-12-2020', 10, 20),
(17, 23, 35, 800, '15-12-2020', 400, 400),
(18, 20, 20, 200, '20-12-2020', 12, 8),
(19, 3, 4, 50, '17-12-2020', 20, 30),
(20, 8, 20, 202, '28-12-2020', 201, 1),
(21, 9, 50, 55, '13-11-2020', 5, 50),
(22, 10, 20, 77, '17-12-2020', 0, 77),
(23, 30, 20, 3030, '12-12-2020', 30, 3000),
(24, 25, 40, 333, '16-12-2020', 33, 300),
(25, 26, 44, 500, '16-12-2020', 10, 490),
(26, 26, 38, 44, '16-12-2020', 4, 40),
(27, 26, 38, 500, '12-12-2020', 0, 500),
(28, 27, 55, 600, '14-12-2020', 0, 600),
(29, 28, 22, 222, '12-12-2020', 22, 200),
(30, 29, 20, 99, '20-12-2020', 0, 99),
(31, 29, 88, 800, '28-12-2020', 8, 80),
(32, 30, 30, 30, '28-12-2020', 0, 30),
(33, 31, 400, 22, '28-12-2020', 0, 400),
(34, 33, 500, 200, '23-12-2020', 22, 178),
(35, 33, 88, 200, '20-12-2020', 0, 88),
(36, 34, 10, 150, '12-12-2020', 0, 150),
(37, 34, 30, 500, '13-12-2020', 20, 480),
(38, 35, 200, 120, '14-12-2020', 100, 20),
(39, 36, 54, 300, '16-12-2020', 0, 300),
(40, 36, 68, 68, '12-12--202', 2, 66),
(41, 37, 34, 123, '20-12-2020', 0, 123),
(42, 38, 80, 800, '30-12-2020', 500, 300),
(43, 39, 200, 1200, '18-12-2020', 0, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(10) NOT NULL,
  `usersName` varchar(25) NOT NULL,
  `usersEmail` varchar(25) NOT NULL,
  `usersUid` varchar(25) NOT NULL,
  `usersPwd` varchar(25) NOT NULL,
  `usersContactNumber` varchar(11) NOT NULL,
  `usersShopAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersContactNumber`, `usersShopAddress`) VALUES
(2, 'Test 2', 'test2@gmail.com', 'test2', '$2y$10$iHqNtKjoeFHkg5Am3C', '2222222', 'Loc2222'),
(3, 'User 3', 'user3@gmail.com', 'user3', '$2y$10$40ItMoU.s001/E3xQn', '333333', 'Loc333333'),
(4, 'User 4', 'user4@gmail.com', 'user4', '$2y$10$.LdWK6OysdI7oEXGEB', '444444444', 'Loc444'),
(5, 'User 5', 'user5@gmail.com', 'user5', '$2y$10$DxSYDZFukmwlEJ0VWg', '5555555', 'Loc555555'),
(6, 'User 6', 'user6@gmail.com', 'user6', '$2y$10$0ZOWW7Nc1RTYArRvX.', '6666', 'Loc666'),
(7, 'User7', 'user7@gmail.com', 'user7', '$2y$10$UbRoOGBi.f3Rr5lfQH', '77777', 'Loc7777'),
(8, 'User 8', 'user8@yahoo.com', 'user8', '$2y$10$BNgJ9PYf5PQr97Ukt6', '88888', 'Loc8888'),
(9, 'asd', 'asd@gmail.com', 'asd', '$2y$10$2UVSNiGegn/am4f1E4', 'asd', 'asd'),
(10, 'User 09', 'user9@gmail.com', 'user9', '$2y$10$61ubTQqR8Spur1AuDX', '9999999', 'Loc99999'),
(11, 'zxc', 'zxc@yahoo.com', 'zxc', 'zxc', 'zxc', 'zxc'),
(12, 'test10', 'test10@gmail.com', 'test10', 'test10', '10101010', 'Loc1010101'),
(13, 'User 11', 'user11@gmail.com', 'user11', 'user11', '111111', 'Loc1111'),
(14, 'User 12', 'user12@gmail.com', 'user12', '$2y$10$g6thonHVuYzvYALkVg', '121212121', 'Loc1212'),
(15, 'Cust 15', 'cust15@gmail.com', 'cust15', '$2y$10$MggK9DkPVriBd8azZ8', '151515151', 'Loc1515151'),
(16, 'Shop Keeper 16', 'shopkeeper16@gmail.com', 'user16', '$2y$10$m7nz.ZWbyfEJllCLFc', '1616161616', 'Loc1616161616'),
(17, 'User 17', 'user17@gmail.com', 'user17', '$2y$10$MyOmn5IKq1dcD7MhJV', '17171771717', 'Loc1717171717'),
(18, 'User 18', 'user18@gmail.com', 'user18', '$2y$10$1hJlVPRNJARbrbX.jX', '18181818', 'ShopLoc18'),
(19, 'User 19', 'user19@gmail.com', 'user19', '$2y$10$O0qQsV6PeyOQMo2Kpa', '19191919', 'Loc191919'),
(20, 'Shop Keeper 20', 'shopkeeper20@gmail.com', 'shopkeeper20', '$2y$10$NeHEejGzz00pa9QQXM', '20202020', 'ShopLoc20'),
(21, 'Shop Keeper 21', 'shopkeeper21@gmail.com', 'shopkeeper21', '$2y$10$1d4gjexhicPAqMbPLx', '2121221', 'ShopLoc21'),
(22, 'User 22', 'user22@gmail.com', 'user22', '$2y$10$AKnLgQPdEqrohEy67M', '222222', 'ShopLoc2222');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_cust_pro`
-- (See below for the actual view)
--
CREATE TABLE `view_cust_pro` (
`cId` int(10)
,`uId` int(10)
,`name` varchar(25)
,`indue` decimal(32,0)
,`contactNumber` varchar(11)
,`address` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_cust_with_indue`
-- (See below for the actual view)
--
CREATE TABLE `view_cust_with_indue` (
`cId` int(10)
,`uId` int(10)
,`indue` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dashboard`
-- (See below for the actual view)
--
CREATE TABLE `view_dashboard` (
`noofcust` bigint(21)
,`totalindue` decimal(54,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_total_indue`
-- (See below for the actual view)
--
CREATE TABLE `view_total_indue` (
`cId` int(10)
,`indue` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transhist`
-- (See below for the actual view)
--
CREATE TABLE `view_transhist` (
`cId` int(10)
,`uId` int(10)
,`name` varchar(25)
,`indue` decimal(32,0)
,`contactNumber` varchar(11)
,`address` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_cust_pro`
--
DROP TABLE IF EXISTS `view_cust_pro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_cust_pro`  AS SELECT `view_total_indue`.`cId` AS `cId`, `customers`.`uId` AS `uId`, `customers`.`name` AS `name`, `view_total_indue`.`indue` AS `indue`, `customers`.`contactNumber` AS `contactNumber`, `customers`.`address` AS `address` FROM (`view_total_indue` left join `customers` on(`customers`.`cId` = `view_total_indue`.`cId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_cust_with_indue`
--
DROP TABLE IF EXISTS `view_cust_with_indue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_cust_with_indue`  AS SELECT `view_cust_pro`.`cId` AS `cId`, `view_cust_pro`.`uId` AS `uId`, `view_cust_pro`.`indue` AS `indue` FROM `view_cust_pro` WHERE `view_cust_pro`.`indue` > 0 ;

-- --------------------------------------------------------

--
-- Structure for view `view_dashboard`
--
DROP TABLE IF EXISTS `view_dashboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dashboard`  AS SELECT count(`view_cust_with_indue`.`cId`) AS `noofcust`, sum(`view_cust_with_indue`.`indue`) AS `totalindue` FROM `view_cust_with_indue` ;

-- --------------------------------------------------------

--
-- Structure for view `view_total_indue`
--
DROP TABLE IF EXISTS `view_total_indue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_total_indue`  AS SELECT `transactions`.`cId` AS `cId`, sum(`transactions`.`indue`) AS `indue` FROM `transactions` GROUP BY `transactions`.`cId` ;

-- --------------------------------------------------------

--
-- Structure for view `view_transhist`
--
DROP TABLE IF EXISTS `view_transhist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transhist`  AS SELECT `view_total_indue`.`cId` AS `cId`, `customers`.`uId` AS `uId`, `customers`.`name` AS `name`, `view_total_indue`.`indue` AS `indue`, `customers`.`contactNumber` AS `contactNumber`, `customers`.`address` AS `address` FROM (`view_total_indue` left join `customers` on(`customers`.`cId` = `view_total_indue`.`cId`)) WHERE `view_total_indue`.`indue` > 0 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
