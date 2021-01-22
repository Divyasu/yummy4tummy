-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2019 at 08:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `citi_merchant_bank`
--

CREATE TABLE `citi_merchant_bank` (
  `id` int(11) NOT NULL,
  `Account_no` varchar(7) NOT NULL,
  `Date` date NOT NULL,
  `Debit_Credit` varchar(10) NOT NULL,
  `Amt` int(8) NOT NULL,
  `Balance` int(8) NOT NULL,
  `Beneficiary Bank` varchar(12) NOT NULL,
  `Beneficiary_ac` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_ac`
--

CREATE TABLE `customer_ac` (
  `id` int(11) NOT NULL,
  `Account_no` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Debit_Credit` varchar(11) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sbi_customer_bank`
--

CREATE TABLE `sbi_customer_bank` (
  `id` int(11) NOT NULL,
  `A/C No.` int(16) NOT NULL,
  `Date` date NOT NULL,
  `Debit/Credit` varchar(8) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Balance` int(10) NOT NULL,
  `Beneficiary Bank` varchar(12) NOT NULL,
  `Beneficiary A/C` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_ac`
--

CREATE TABLE `supplier_ac` (
  `id` int(11) NOT NULL,
  `ac_no` int(6) NOT NULL,
  `Date` date NOT NULL,
  `Debit/Credit` varchar(7) NOT NULL,
  `Amt` int(9) NOT NULL,
  `Balance` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billing_address`
--

CREATE TABLE `tbl_billing_address` (
  `Full_Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(10) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Zip` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_billing_address`
--

INSERT INTO `tbl_billing_address` (`Full_Name`, `Email`, `Address`, `City`, `State`, `Zip`) VALUES
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divya.sundaram@gmail', 'malvani', 'mumbai', 'maharashtr', 400095),
('divya', 'd@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 's@gmail.com', 'mumbai', 'mumbai', 'maharashtr', 400095),
('divya', 'divyas.sundaram@gmai', 'malvani', 'mumbai', 'maharashtr', 400095),
('divya', 'divyas.sundaram@gmai', 'malvani', 'mumbai', 'maharashtr', 400095),
('divya', 'divyas.sundaram@gmai', 'malvani', 'mumbai', 'maharashtr', 400095),
('divya', 'divyas.sundaram@gmai', 'malvani', 'mumbai', 'maharashtr', 400095),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Raju', 'raju@gmail.com', 'malad', 'mumbai', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('Sujeet', 'suj@gmail.com', 'sahara', 'andheri', 'maharashtr', 400095),
('neha', 'neha@gmail.com', 'vashi', 'mumbai', 'maharashtr', 400090),
('neha', 'neha@yahoo.com', 'andheri', 'mumba', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('Shikha', 's@gmail.com', 'hamla', 'mumbai', 'maharashtr', 400095),
('S', 'D', 'D', 'D', 'D', 4),
('S', 'D', 'D', 'D', 'D', 4),
('S', 'D', 'D', 'D', 'D', 4),
('S', 'D', 'D', 'D', 'D', 4),
('S', 'D', 'D', 'D', 'D', 4),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('sameer', 's@gmail.com', 'malvani', 'mumbai', 'maharashtr', 40009),
('Divya S', '', '', '', '', 0),
('Divya S', '', '', '', '', 0),
('Divya S', '', '', '', '', 0),
('Divya S', '', '', '', '', 0),
('Divya S', '', '', '', '', 0),
('Divya S', '', '', '', '', 0),
('Divya S', '', '', '', '', 0),
('Divya S', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Divya', 's', 'a', 'b', 'k', 400),
('Divya', 'S', 'A', 'r', 'm', 4000),
('Divya', 'S', 'A', 'r', 'm', 4000),
('Divya', 'S', 'A', 'r', 'm', 4000),
('Divya', 'S', 'A', 'r', 'm', 4000),
('Divya', 'S', 'A', 'r', 'm', 4000),
('Divya', 'S', 'A', 'r', 'm', 4000),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('Divya', 's', 'a-102', 'MUMBAI', 'maharashtr', 400095),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('D', 'r', 'o', 'mumbai', 'm', 40),
('D', 'r', 'o', 'mumbai', 'm', 40),
('D', 'r', 'o', 'mumbai', 'm', 40),
('D', 'r', 'o', 'mumbai', 'm', 40),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('Divya', 'divyas.sundaram@gmai', 'mumbai', 'mumbai', 'maharashtr', 400095),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Divya', 'div', 'we', '', '', 0),
('Divya', 'div', 'we', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('', '', '', '', '', 0),
('Divya', 'S', 'a', 'm', '89', 9),
('d', 'd', 'd', 'd', 'd', 4),
('Divya', 'd', 'd', 'd', 'd', 40),
('Divya', 's', 'a', 'a', 'a', 98),
('Divya', 'divyas.sundaram@gmai', 'd', 'd', 'd', 78),
('Divya', 's', 'd', 'd', '78', 87),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divya', 'divya', 'divya', 'maha', 40),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'divyas.sundaram@gmai', 'divya', 'mumbai', 'maharashtr', 89),
('Divya', 'd', 'd', 'd', 'd', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `Name_on_Card` varchar(20) NOT NULL,
  `Credit_card_number` int(16) NOT NULL,
  `Exp_Month` int(2) NOT NULL,
  `Exp_Year` int(4) NOT NULL,
  `CVV` int(3) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`Name_on_Card`, `Credit_card_number`, `Exp_Month`, `Exp_Year`, `CVV`, `amount`) VALUES
('Divya Sundaram', 1556, 3, 30, 222, 85),
('Divya Sundaram', 1556, 3, 30, 222, 85),
('Divya Sundaram', 1556, 3, 30, 222, 85),
('Divya Sundaram', 1556, 3, 30, 222, 85),
('Divya Sundaram', 1556, 3, 30, 222, 85),
('Divya Sundaram', 1556, 3, 30, 222, 85),
('Divya Sundaram', 1556, 3, 30, 222, 85),
('Divya Sundaram', 1556, 3, 30, 222, 85),
('', 0, 0, 0, 0, 85),
('', 0, 0, 0, 0, 85),
('', 0, 0, 0, 0, 85),
('', 0, 0, 0, 0, 85),
('', 0, 0, 0, 0, 85),
('ds', 0, 0, 0, 0, 35),
('Divya', 7777, 7, 7, 2000, 40),
('d', 87, 77, 7, 777, 85),
('SDD', 78, 87, 87, 777, 85),
('d', 77, 97, 88, 888, 85),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 7777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('Divya', 777, 7, 7, 777, 40),
('d', 8, 8, 8, 88, 85);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_price` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `product_image`, `product_price`) VALUES
(1, 'Vegetable Noodle Soup', 'images/menu/vegetable_noodle_soup.jpg', 40),
(2, 'Mix Vegetable Soup', 'images/menu/mix_vegetable_soup.jpg', 45),
(3, 'Tomato Soup', 'images/menu/tomato_soup.jpg', 35),
(4, 'Chicken Noodle Soup', 'images/menu/chicken_noodle_soup.jpg', 30),
(5, 'Chicken Hot \'N\' Sour Soup', 'images/menu/chicken_hot_n_sour_soup.jpg', 35),
(6, 'Chicken Sweet Corn Soup', 'images/menu/chicken_sweet_corn_soup.jpg', 30),
(7, 'Idli Sambar', 'images/menu/idli_sambar.jpg', 30),
(8, 'Medu Vada', 'images/menu/medu_vada.png', 35),
(9, 'Masala Dosa', 'images/menu/masala_dosa.jpg', 35),
(10, 'Dahi Vada', 'images/menu/dahi_vada.jpg', 35),
(11, 'Chole Bhatura', 'images/menu/chole_bhatura.jpg', 30),
(12, 'Aloo Puri', 'images/menu/aloo_puri.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'james', 'james', '56'),
(2, 'nehal', 'nehal', '56'),
(3, 'kumar', 'asdfghj', 'asdfghj'),
(4, 'divya', 'divya', 'divyas.sundaram@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citi_merchant_bank`
--
ALTER TABLE `citi_merchant_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ac`
--
ALTER TABLE `customer_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbi_customer_bank`
--
ALTER TABLE `sbi_customer_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_ac`
--
ALTER TABLE `supplier_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citi_merchant_bank`
--
ALTER TABLE `citi_merchant_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_ac`
--
ALTER TABLE `customer_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbi_customer_bank`
--
ALTER TABLE `sbi_customer_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_ac`
--
ALTER TABLE `supplier_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
