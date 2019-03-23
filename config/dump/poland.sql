-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 04:57 PM
-- Server version: 10.1.38-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poland`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `img_src` text NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `login`, `img_src`, `pass`) VALUES
(2, 'administrator', '', '$2y$10$QFb/YJ7IW6MI.YSYq5Zna.KVfqA3ALwHYj4zrJ9Nt9hf29/7PLyG.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_configs`
--

CREATE TABLE `admin_configs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_configs`
--

INSERT INTO `admin_configs` (`id`, `name`, `value`) VALUES
(1, 'islocked', '0');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`) VALUES
(1, 'Suche zabudowy z p?yt g-k11', 1553204283),
(4, 'Suche zabudowy z p?yt g-k333', 1553346821),
(5, 'dsdff', 1553346826);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `value` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `section`, `value`) VALUES
(1, '_csrfToken', ''),
(3, 'contact_email', 'info@somesite.pl'),
(4, 'contact_phone', '+44 0 155 45877'),
(5, 'contact_phone_second', '+44 0 155 45878'),
(7, 'contact_social_fb', 'https://www.facebook.com/groups/281602705719042/'),
(10, 'page_seo_title', 'Poland'),
(11, 'page_seo_desc', 'no data'),
(12, 'page_seo_keys', 'no data');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `qnt` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `category_id`, `name`, `qnt`, `price`, `created`) VALUES
(2, 4, 'Suche zabudowy z plyt g-k333', '122', '22222 ply', 1553348127),
(3, 5, 'test pric 1', 'm3', '12', 1553349961),
(4, 5, 'test 2', 'm2', '1001 pzl', 1553352705);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_configs`
--
ALTER TABLE `admin_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_configs`
--
ALTER TABLE `admin_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
