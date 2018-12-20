-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2018 at 01:10 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(3, 'CÃ´ng nghá»‡ thÃ´ng tin'),
(4, 'Giáº£i trÃ­'),
(5, 'MÃ¡y tÃ­nh'),
(6, 'Äiá»‡n thoáº¡i'),
(7, 'Há»i Ä‘Ã¡p'),
(8, 'GÃ³p Ã½ xÃ¢y dá»±ng diá»…n Ä‘Ã n'),
(9, 'Há»i xoÃ¡y Ä‘Ã¡p xoay');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_created` datetime NOT NULL,
  `comment_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment_content`, `comment_created`, `comment_modified`) VALUES
(5, 1, 'Thuáº­t toÃ¡n', '2018-12-09 03:27:00', '2018-12-08 19:27:00'),
(5, 1, 'Há»c Java Ä‘i :))', '2018-12-09 03:28:08', '2018-12-08 19:28:08'),
(4, 1, 'Há»c Python', '2018-12-09 03:29:21', '2018-12-08 19:29:21'),
(4, 2, 'Iphone nhÃ©, vá»«a mÆ°á»£t vá»«a Ä‘áº¹p, xem nÃ©t cÄƒng', '2018-12-09 03:41:05', '2018-12-08 19:41:05'),
(4, 2, 'Samsung ráº» bÃ¨o', '2018-12-09 03:42:57', '2018-12-08 19:42:57'),
(5, 1, 'like', '2018-12-09 03:49:20', '2018-12-08 19:49:20'),
(5, 1, 'like', '2018-12-09 03:49:49', '2018-12-08 19:49:49'),
(5, 2, 'LÃ m Æ¡n', '2018-12-09 04:05:42', '2018-12-08 20:05:42'),
(5, 2, 'Giáº£i thÃ­ch tui vá»›i', '2018-12-09 04:06:18', '2018-12-08 20:06:18'),
(5, 1, 'bÃ¬nh thÆ°á»ng', '2018-12-09 04:07:34', '2018-12-08 20:07:34'),
(5, 1, 'sao em', '2018-12-09 04:08:30', '2018-12-08 20:08:30'),
(5, 3, 'cÃ²n phim gÃ¬ hay ná»¯a khÃ´ng ace', '2018-12-09 04:10:01', '2018-12-08 20:10:01'),
(5, 4, 'phÃ¡t triá»ƒn thÃªm Ä‘i', '2018-12-09 14:59:19', '2018-12-09 06:59:19'),
(5, 1, 'ThÆ°á»ng thÃ´i', '2018-12-09 21:55:31', '2018-12-09 13:55:31'),
(5, 2, 'lam sao', '2018-12-09 22:01:15', '2018-12-09 14:01:15'),
(5, 2, 'the nao', '2018-12-09 22:05:20', '2018-12-09 14:05:20'),
(5, 1, 'cáº¥u trÃºc', '2018-12-10 00:48:22', '2018-12-09 16:48:22'),
(5, 3, 'Náº¥c thang lÃªn thiÃªn Ä‘Æ°á»ng', '2018-12-10 00:51:20', '2018-12-09 16:51:20'),
(5, 3, 'Hay quÃ¡', '2018-12-10 00:53:18', '2018-12-09 16:53:18'),
(5, 3, 'aaaa', '2018-12-10 00:56:42', '2018-12-09 16:56:42'),
(5, 3, 'link nÃ¨', '2018-12-10 00:57:46', '2018-12-09 16:57:46'),
(5, 3, 'like', '2018-12-10 00:58:20', '2018-12-09 16:58:20'),
(5, 2, 'iphone 1 like', '2018-12-10 01:05:31', '2018-12-09 17:05:31'),
(5, 4, 'mo hinh', '2018-12-10 16:38:27', '2018-12-10 08:38:27'),
(5, 6, 'nang chu', '2018-12-10 17:15:38', '2018-12-10 09:15:38'),
(5, 4, 'bÃ¬nh thÆ°á»ng', '2018-12-11 19:03:50', '2018-12-11 11:03:50'),
(5, 12, 'eqwe', '2018-12-13 23:36:47', '2018-12-13 15:36:47'),
(5, 2, 'cang ko', '2018-12-13 23:52:39', '2018-12-13 15:52:39'),
(16, 1, 'cáº¥u trÃºc va giáº£i thuáº­t', '2018-12-14 02:43:43', '2018-12-13 18:43:43'),
(5, 13, 'xau gi dau\r\n', '2018-12-14 11:57:35', '2018-12-14 03:57:35'),
(16, 1, 'nÃªn há»c tá»«ng bÆ°á»›c Ä‘á»ƒ náº¯m rÃµ cÃ¡ch hoáº¡t Ä‘á»™ng', '2018-12-14 12:27:47', '2018-12-14 04:27:47'),
(16, 11, 'jaksdf', '2018-12-14 12:48:02', '2018-12-14 04:48:02'),
(16, 15, '123', '2018-12-14 12:51:18', '2018-12-14 04:51:18'),
(16, 15, '12222', '2018-12-14 12:54:11', '2018-12-14 04:54:11'),
(16, 10, '123w', '2018-12-14 12:56:58', '2018-12-14 04:56:58'),
(16, 10, '12331', '2018-12-14 12:58:33', '2018-12-14 04:58:33'),
(16, 10, '12311', '2018-12-14 12:59:09', '2018-12-14 04:59:09'),
(16, 17, 'ydfygd', '2018-12-14 17:01:03', '2018-12-14 09:01:03'),
(5, 17, '123', '2018-12-14 17:34:07', '2018-12-14 09:34:07'),
(5, 17, '12', '2018-12-14 17:35:06', '2018-12-14 09:35:06'),
(5, 17, '1234123', '2018-12-14 17:35:09', '2018-12-14 09:35:09'),
(5, 17, '221', '2018-12-14 17:35:15', '2018-12-14 09:35:15'),
(5, 17, 'anh com chua\r\n', '2018-12-14 17:35:32', '2018-12-14 09:35:32'),
(5, 18, 'com', '2018-12-14 17:43:57', '2018-12-14 09:43:57'),
(5, 18, 'asdfad', '2018-12-14 17:44:01', '2018-12-14 09:44:01'),
(1, 16, '323', '2018-12-14 18:06:10', '2018-12-14 10:06:10'),
(1, 16, '4123', '2018-12-14 18:06:13', '2018-12-14 10:06:13'),
(1, 14, '544\r\n', '2018-12-14 18:31:36', '2018-12-14 10:31:36'),
(5, 20, 'an do nuong', '2018-12-14 21:46:40', '2018-12-14 13:46:40'),
(5, 21, '23', '2018-12-14 22:51:04', '2018-12-14 14:51:04'),
(5, 21, '123', '2018-12-15 00:44:27', '2018-12-14 16:44:27'),
(5, 21, '12', '2018-12-16 00:42:20', '2018-12-15 16:42:20'),
(5, 21, '1', '2018-12-16 16:49:13', '2018-12-16 08:49:13'),
(5, 21, 'ddddddddddddddddddddddddddddd', '2018-12-16 18:07:03', '2018-12-16 10:07:03'),
(5, 21, '123', '2018-12-16 22:26:00', '2018-12-16 14:26:00'),
(5, 21, 'co go dau', '2018-12-16 22:26:08', '2018-12-16 14:26:08'),
(5, 24, 'https://eva.vn/tinh-yeu-gioi-tinh-c3.html', '2018-12-16 22:55:12', '2018-12-16 14:55:12'),
(5, 24, 'asdf', '2018-12-16 23:29:06', '2018-12-16 15:29:06'),
(5, 1, 'adf', '2018-12-17 00:06:52', '2018-12-16 16:06:52'),
(5, 25, 'ná»™i dung hay', '2018-12-17 00:17:56', '2018-12-16 16:17:56'),
(5, 10, 'hjvghg', '2018-12-17 12:47:04', '2018-12-17 04:47:04'),
(5, 14, 'Java lÃ  gÃ¬', '2018-12-19 00:40:04', '2018-12-18 16:40:04'),
(5, 14, 'CÃ³ nÃªn há»c', '2018-12-19 00:42:45', '2018-12-18 16:42:45'),
(5, 14, 'Há»c Ä‘i', '2018-12-19 00:42:55', '2018-12-18 16:42:55'),
(5, 26, 'TÃ´i khÃ´ng biáº¿t', '2018-12-19 00:44:08', '2018-12-18 16:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_created` datetime NOT NULL,
  `post_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `id`, `category_id`, `post_title`, `post_content`, `post_created`, `post_modified`) VALUES
(1, 5, 3, 'Há»c láº­p trÃ¬nh báº¯t Ä‘áº§u tá»« Ä‘Ã¢u?', 'TÆ° duy hay ngÃ´n ngá»¯', '2018-12-09 03:00:11', '2018-12-08 19:00:11'),
(2, 5, 6, 'Samsung hay Iphone', 'Chá»n mÃ¡y nÃ o anh em', '2018-12-09 03:05:53', '2018-12-08 19:05:53'),
(3, 5, 4, 'Phim hÃ n quá»‘c hay', 'NgÃ´i nhÃ  háº¡nh phÃºc', '2018-12-09 04:05:14', '2018-12-08 20:05:14'),
(4, 5, 8, 'Thiáº¿t káº¿ giao diá»‡n', 'Giao diá»‡n nÃ y hÆ¡i xáº¥u, Ä‘áº­p Ä‘i lÃ m láº¡i nhÃ©', '2018-12-09 14:08:07', '2018-12-09 06:08:07'),
(6, 5, 7, 'Thoi tiet hom nay the nao', 'mua', '2018-12-10 17:15:22', '2018-12-10 09:15:22'),
(10, 5, 3, '123', '123', '2018-12-13 22:35:07', '2018-12-13 14:35:07'),
(11, 5, 7, 'kinh', 'hhhh', '2018-12-13 22:40:28', '2018-12-13 14:40:28'),
(12, 5, 6, 'Äiá»‡n thoáº¡i', 'Äiá»‡n thoáº¡i nÃ o ráº» mÃ  ngon hiá»‡n nay', '2018-12-13 23:35:35', '2018-12-13 15:35:35'),
(13, 16, 8, 'giao dien', 'khung con xau', '2018-12-14 01:58:03', '2018-12-13 17:58:03'),
(14, 16, 3, 'hom nay hoc gi', 'java', '2018-12-14 03:47:16', '2018-12-13 19:47:16'),
(15, 16, 7, 'bai gi', 'vo oi', '2018-12-14 12:48:59', '2018-12-14 04:48:59'),
(16, 16, 4, 'sajdhfkjahf', 'askjhfjahfaskkdkasd', '2018-12-14 17:00:41', '2018-12-14 09:00:41'),
(17, 16, 8, 'fsdgsg', 'dsfsdgdfhdf', '2018-12-14 17:00:55', '2018-12-14 09:00:55'),
(18, 5, 8, 'toi nay an gi', 'com hay pho', '2018-12-14 17:36:10', '2018-12-14 09:36:10'),
(20, 5, 7, 'hom nay', 'an gi', '2018-12-14 21:46:28', '2018-12-14 13:46:28'),
(21, 5, 3, 'Java', '111', '2018-12-14 22:34:15', '2018-12-14 14:34:15'),
(24, 5, 3, 'tinh yeu', 'tinh yeu la gi', '2018-12-16 22:32:32', '2018-12-16 14:32:32'),
(25, 5, 4, 'TrÃ¡i Ä‘áº¥t trÃ²n', 'NgÃ y dÃ i xa xoi gáº·p láº¡i nhau rÃ²i thÃ¬ cá»© vui thÃ´i, báº¡n tÃ´i nháº¯c chuyá»‡n xÆ°a, báº¡n tÃ´i Æ¡i Ä‘á»«ng nháº¯c chuyá»‡n xÆ°a, chuyá»‡n xÆ°a tÃ´i Ä‘Ã£ quÃªn rá»“i, quÃªn Ä‘i Ä‘á»ƒ nhá»› chuyá»‡n hÃ´m nay', '2018-12-17 00:13:24', '2018-12-16 16:13:24'),
(26, 5, 5, 'Laptop', 'Laptop nÃ o máº¡nh nháº¥t hiá»‡n nay?', '2018-12-19 00:43:49', '2018-12-18 16:43:49'),
(27, 5, 6, 'Dien thoai tot nhat hien nay', 'Samsung Galaxy', '2018-12-19 19:37:09', '2018-12-19 11:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `access_level` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `access_code` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `password`, `access_level`, `access_code`, `status`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 'tanthuyhoangkd169@gmail.com', '0158885', 'Nam Äá»‹nh', '$2y$10$ACTaDEzDcWcn.D8VrLO2dORFiQFkycsKvk/BTGV1gNqjQrqGYHaHi', 'Admin', 'IfJmLeeHTW15lXVy1ThygItPJ0crpJOR', 1, '2018-12-05 17:22:44', '2018-12-08 18:18:19'),
(2, 'Dung', 'Le Dinh', 'mike@example.com', '0999999999', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', 'Admin', '', 1, '0000-00-00 00:00:00', '2018-12-08 18:21:44'),
(4, 'Quy', 'Pham Van', 'darwin@example.com', '9331868359', 'Nam Định', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Customer', 'ILXFBdMAbHVrJswNDnm231cziO8FZomn', 1, '2014-10-29 17:31:09', '2018-12-08 18:21:33'),
(5, 'Tham', 'Pham Thi Hong', 'aovang5wqe@gmail.com', '256998258', 'Nam Äá»‹nh', '$2y$10$HP3e44C17iXh0Nm6jKKScej8ldOrOyNXsr4R0PtJfG7jQTbp0bAdm', 'Customer', 'ZzyNTiEw6LPmLVR7xO7WQoLTL8ovpaWk', 1, '2018-12-09 02:13:13', '2018-12-08 18:14:03'),
(16, 'Mickey', 'Mouse', 'chinhpham1609@gmail.com', '0158885', '2018_2019', '$2y$10$np4dOtnSiJE9/qDsjUXxxO6mhMFWfW9/Yvrk7uV7EwMTr66gOkHwi', 'Customer', 'oF7Gw6qR5dSzIo9aBrbyRoifT9sbh06o', 1, '2018-12-14 01:52:04', '2018-12-13 17:56:18'),
(20, 'Giang', 'Nguyễn Đức', 'ducgiang@example.com', '9999999', 'San Antonio, Texas, USA', '$2y$10$9OSKHLhiDdBkJTmd3VLnQeNPCtyH1IvZmcHrz4khBMHdxc8PLX5G6', 'Customer', '0X4JwsRmdif8UyyIHSOUjhZz9tva3Czj', 1, '2016-05-26 01:25:59', '2016-05-25 10:25:59'),
(21, 'Duong', 'Lang Dai', 'langdaiduong988@gmail.com', '45498789', 'VÄ©nh PhÃºc', '$2y$10$4uFJKIobnT6.r7zu05gwGewCgksv/TIvLyo5tRaGEvYvHfURPZGqa', 'Customer', '2xJiGeuOIuyjPLl98GZRsvMstNyMfRqs', 0, '2018-12-19 00:01:33', '2018-12-18 16:01:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `id` (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `id` (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
