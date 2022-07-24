-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 07:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curier`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `weight` double NOT NULL,
  `invice_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `freight` double NOT NULL,
  `mode` varchar(20) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  `soffice` varchar(30) NOT NULL,
  `current_city` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`cid`, `cons_no`, `ship_name`, `phone`, `s_add`, `rev_name`, `r_phone`, `r_add`, `type`, `weight`, `invice_no`, `qty`, `book_mode`, `freight`, `mode`, `pick_date`, `pick_time`, `status`, `comments`, `book_date`, `soffice`, `current_city`) VALUES
(38, '16URE5MG', 'khisitij', '6465', 'ghaziabad', 'rudra', '65465', 'meerut', 'Documents', 0.5, '78965', 1, 'Paid', 1, 'Air', '2019-02-23', '13:00', 'Delivered', 'wjhewfkj', '2019-02-23', 'Meerut Branch Office', 'Meerut Branch Office'),
(37, '0XFJ4I3N', 'sunil', '9879f87', 'kiet', 'madahv', '565', 'ghaziabad', 'Documents', 4, '654', 5, 'Paid', 1, 'Air', '2019-02-22', '12:59', 'Delivered', 'asd', '2019-02-23', 'Meerut Branch Office', 'Meerut Branch Office'),
(35, 'OUBZXA30', 'Kapil saini', '78976542321', 'meerut', 'Mohan', '789654133', 'ghaziabad', 'Documents', 0.5, '78965', 1, 'Paid', 1, 'Road', '2019-02-22', '3:00', 'Delivered', 'asdf', '2019-02-22', 'Meerut Branch Office', 'Head Office'),
(36, 'F0MRN52Y', 'jai', '123456', 'KIET muradnagar', 'sanan', '844705', 'ghaziabad', 'Parcel', 10, '988754632', 1, 'Paid', 1, 'Road', '2019-02-23', '16:00', 'Delivered', 'kuch bhi......', '2019-02-23', 'Head Office', 'Meerut Branch Office'),
(34, 'AQWKYKIF', 'Shyam', '7607225566', 'DIST- CHANDAULI\r\n232107', 'Vishal', '800457654', 'Ghaziabad', 'Documents', 0.5, '654654', 1, 'Paid', 1, 'Air', '2019-02-21', '3:00', 'Delivered', 'asdf', '2019-02-21', 'Ghaziabad Head office', 'Ghaziabad Head office'),
(32, 'FU1NOYK0', 'raghav', '7607225566', 'modinagar\r\nDIST-ghaziabad', 'sanan', '7412', 'ghaziabad 201206', 'Documents', 0.5, '654654', 1, 'ToPay', 1, 'Road', '2019-02-21', '3:00', 'Delivered', 'asdf', '2019-02-21', 'Ghaziabad Head office', 'Ghaziabad Head office'),
(33, 'PD7528MJ', 'Gopal', '7607225566', 'VILL- DARIYAPUR\r\nPOST- RAMGARH\r\nDIST- CHANDAULI', 'Govind Kumar', '789456123', 'ghaziabad', 'Documents', 0.5, '654654', 1, 'Paid', 1, 'Road', '2019-02-21', '3:00', 'Delivered', 'asdf', '2019-02-21', 'Head Office', 'Ghaziabad Head office'),
(39, 'PRWVVQV7', 'Raju Rana ', '654987321', 'kiet', 'Naman', '98765465', 'ghaziabad', 'Documents', 0.5, '65989', 1, 'ToPay', 1, 'Air', '2019-05-09', '01:59', 'Delivered', 'qwfgh', '2019-05-02', 'Head Office', 'Head Office'),
(40, 'MQ0T0L1R', 'sanan', '999999999', 'ghaziabad', 'raju', '8888888886', 'lucknow', 'Documents', 2, '1234567', 1, 'Paid', 1, 'Air', '', '08:08', 'Placed', 'qwertyuio', '2019-06-03', 'Head Office', 'Head Office');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
