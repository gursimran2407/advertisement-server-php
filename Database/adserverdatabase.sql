-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 11, 2016 at 09:13 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ad_server`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`username`, `password`) VALUES
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `advertiser_register`
--

CREATE TABLE `advertiser_register` (
  `advertiser_id` int(4) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `advertiser_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertiser_register`
--

INSERT INTO `advertiser_register` (`advertiser_id`, `company_name`, `advertiser_name`, `password`, `sitename`, `address`, `contact`, `email`, `country`) VALUES
(12, 'idea', 'Daljit Singh', '4ddf9fc8ce27377a4d0a18f1cd2b43d5', '', 'Ludhiana', '9478925795', 'chkdjhack96@gmail.com', 'India'),
(25, 'Sports', 'Gursimran Singh', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', '53-D, Sarabha Nagar,Ludhiana', '9781055155', 'gursimran81@gmail.com', 'India'),
(26, 'BrunoDIHutti', 'Bruno', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'https://www.udemy.com', 'Model Town, Ludhiana', '9812344522', 'bruno@rocketmail.com', 'India'),
(29, 'Gringots', 'Abhay Yadav', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'http://games.co.in', 'Mahul Nagar, Bangkok', '9782044722', 'abhayyadav@gmail.com', 'Uganda');

-- --------------------------------------------------------

--
-- Table structure for table `click_count`
--

CREATE TABLE `click_count` (
  `click_count` int(10) UNSIGNED NOT NULL,
  `adname` varchar(100) NOT NULL,
  `client_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `click_count`
--

INSERT INTO `click_count` (`click_count`, `adname`, `client_email`) VALUES
(5, 'Custom PC', 'masher@gmail.com'),
(3, 'Laptop', 'masher@gmail.com'),
(6, 'Mouse', 'masher@gmail.com'),
(0, 'Custom PC', 'johny@yahoo.in'),
(0, 'Custom PC', 'johny@yahoo.in'),
(0, 'Laptop', 'johny@yahoo.in'),
(0, 'Laptop', 'johny@yahoo.in'),
(2, 'Car', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(3, 'Laptop', 'masher@gmail.com'),
(3, 'Laptop', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(3, 'Laptop', 'masher@gmail.com'),
(0, 'Mouse', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(0, 'Mouse', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(3, 'Laptop', 'masher@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(3, 'Laptop', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(0, 'Mouse', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(5, 'Custom PC', 'kapil@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(2, 'Indian Army Store', 'masher@gmail.com'),
(2, 'nirma', 'anmolsahdev@gmail.com'),
(0, 'Sugarcane ', 'anmolsahdev@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(3, 'Laptop', 'masher@gmail.com'),
(6, 'nirma', 'masher@gmail.com'),
(0, 'Laptop', 'aman24@yahoo.com'),
(0, 'Sugarcane ', 'aman24@yahoo.com'),
(0, 'Laptop', 'masher@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(0, 'Laptop', 'masher@gmail.com'),
(5, 'Custom PC', 'masher@gmail.com'),
(0, 'Laptop', 'masher@gmail.com'),
(0, 'Laptop', 'masher@gmail.com'),
(0, 'Car', 'masher@gmail.com'),
(0, 'Dubai', 'masher@gmail.com'),
(0, 'Chicago Trip', 'masher@gmail.com'),
(0, 'Custom PC', 'masher@gmail.com'),
(0, 'Dubai', 'masher@gmail.com'),
(0, 'Macbook', 'masher@gmail.com'),
(0, 'Custom PC', 'masher@gmail.com'),
(0, 'Dubai', 'masher@gmail.com'),
(0, 'Macbook', 'masher@gmail.com'),
(0, 'Macbook', 'masher@gmail.com'),
(0, 'Dubai', 'masher@gmail.com'),
(0, 'Macbook', 'masher@gmail.com'),
(0, 'Chicago Trip', 'masher@gmail.com'),
(0, 'Dubai', 'masher@gmail.com'),
(2, 'Chicago Trip', 'gursimran81@hotmail.com'),
(3, 'Macbook', 'gursimran81@hotmail.com'),
(0, 'Dubai', 'gursimran81@hotmail.com'),
(2, 'Chicago Trip', 'gursimran81@hotmail.com'),
(0, 'Macbook', 'gursimran81@hotmail.com'),
(0, 'Dubai', 'gursimran81@hotmail.com'),
(0, 'Car', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'Macbook', 'gursimran81@hotmail.com'),
(0, 'Dubai', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'Macbook', 'gursimran81@hotmail.com'),
(0, 'Dubai', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'Macbook', 'gursimran81@hotmail.com'),
(0, 'Dubai', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com'),
(0, 'HP Laptop', 'gursimran81@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_name`, `email`, `phone`, `password`, `company`, `sitename`, `ip`, `address`, `country`) VALUES
(9, 'Manish', 'masher@gmail.com', '9781055155', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Techmaish', 'www.deviantart.com', '52.85.23.45', '52-D, Model Town', 'India'),
(10, 'Gursimran', 'gursimran81@hotmail.com', '9781055155', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Gursimran', 'www.opel.com', '122.252.140.151', '1284 Eastwood', 'Cayman Islands'),
(29, 'Anmol Sahdev', 'anmolsahdev@gmail.com', '2384098320', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Ganna', 'www.ghari.com', '69.172.201.153', 'Joomla', 'Antigua & Barbuda'),
(30, 'Aman', 'aman24@yahoo.com', '9283489723', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'koka ', 'www.jewellery.com', '54.204.5.183', 'karol bhag, Delhi', 'Iceland'),
(31, 'Aditya Bhardwaj', 'aditya@gmail.com', '2937274445', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'apj', 'www.apj.co.in', '185.53.177.9', 'Farul Chowk, London', 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `category`) VALUES
('abhayyadav@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'advertiser'),
('aditya@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'client'),
('aman24@yahoo.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'client'),
('anmolsahdev@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'client'),
('bruno@rocketmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'advertiser'),
('chk@gmail.com', '4ddf9fc8ce27377a4d0a18f1cd2b43d5', 'client'),
('gursimran81@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'advertiser'),
('gursimran81@hotmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'client'),
('masher@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `new_ad`
--

CREATE TABLE `new_ad` (
  `email` varchar(50) NOT NULL,
  `adname` varchar(50) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `imagepath` varchar(100) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `target_url` varchar(200) NOT NULL,
  `ad_height` varchar(20) NOT NULL,
  `ad_width` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_ad`
--

INSERT INTO `new_ad` (`email`, `adname`, `sitename`, `imagepath`, `startdate`, `enddate`, `amount`, `target_url`, `ad_height`, `ad_width`) VALUES
('gursimran81@gmail.com', 'Chicago Trip', 'https://www.goibibo.com', 'uploads/12-10-2016 09:36:21 pmChicago-Advertising-EXPLORE-Trips.jpg', '13-10-2016', '16-11-2016', '170', 'www.goibibo.com/flights/chicago-to-new-delhi-flights/', '324', '500'),
('gursimran81@gmail.com', 'Custom PC', 'pcbuild.com', 'uploads/09-07-2016 12:59:59 pmUnknown.jpg', '10-07-2016', '24-07-2016', '70', 'www.google.co.in', '225', '225'),
('bruno@rocketmail.com', 'Dubai', 'http://www.visitdubai.com/en-in/', 'uploads/12-10-2016 09:42:05 pmNNDubaiDreams.jpg', '12-10-2016', '19-10-2016', '35', 'www.visitdubai.com/en-in/', '277', '500'),
('gursimran81@gmail.com', 'HP Laptop', 'www.hp.com', 'uploads/10-12-2016 05:57:17 pmhp.jpg', '12-12-2016', '12-12-2017', '1825', 'www.hp.com/sfg', '194', '259'),
('gursimran81@gmail.com', 'Macbook', 'www.apple.com', 'uploads/12-10-2016 09:34:15 pmMACBOOKPRO.jpeg', '12-10-2016', '16-10-2016', '20', 'apple.com', '263', '500'),
('gursimran81@gmail.com', 'nirma', 'www.nirma.com', 'uploads/12-07-2016 11:07:34 pmUntitled-716597618.jpg', '4-08-2016', '4-09-2016', '155', 'www.yahoo.com', '200', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `advertiser_register`
--
ALTER TABLE `advertiser_register`
  ADD PRIMARY KEY (`advertiser_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `new_ad`
--
ALTER TABLE `new_ad`
  ADD PRIMARY KEY (`adname`),
  ADD UNIQUE KEY `adname` (`adname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertiser_register`
--
ALTER TABLE `advertiser_register`
  MODIFY `advertiser_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;