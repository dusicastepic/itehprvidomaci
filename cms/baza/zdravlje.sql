-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 09:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zdravlje`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(99, 'lala'),
(100, 'bla bla'),
(67, 'dusan sladjaaaaaaaaaa'),
(68, 'duca kuca'),
(79, 'O nama'),
(81, 'Ludlo'),
(71, 'fakjea'),
(82, 'Ludlo'),
(83, 'Kika'),
(88, 'jovanaaa ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_post_id` int(255) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_status` varchar(255) NOT NULL DEFAULT 'neodobren'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `comment_date`, `comment_post_id`, `comment_author`, `comment_email`, `comment_status`) VALUES
(2123, 'djskadaslk', '2017-05-30 00:43:48', 20, 'mama', 'mama@g.com', 'neodobren'),
(2121, 'bumbaar', '2017-05-29 23:16:28', 2, 'bumbaar', 'bumbaar', 'odobren'),
(40, 'extra ste', '2017-04-27 19:54:35', 0, '0', '0', 'odobren'),
(1, 'sadrzaj ja sam super kul riba', '2017-05-29 22:38:07', 2, 'Duca ', 'duca@gmail.com', 'odobren'),
(2127, 'adapsodioa AJMEEEEEEEEEE', '2017-05-31 20:48:13', 17, 'pipipipi', 'jdshsl@gsjkg.pm', 'odobren'),
(2126, 'djshdjaskhdjaksMAMA TATA BABA DEDA', '2017-05-30 00:50:28', 20, 'hjhdask', 'd@gmail.com', 'neodobren'),
(2129, '20 aj sad radi', '2017-06-01 09:03:46', 20, 'Milena', 'milena@hotmail.com', 'odobren'),
(2131, '20 aj sad radi', '2017-06-01 09:04:38', 20, 'Milena', 'milena@hotmail.com', 'neodobren');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_cat_id` int(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL DEFAULT '0',
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_cat_id`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(16, '69', 67, '69', '2017-06-01 09:44:03', 'parrot.jpg', '						69						', '69', 0, '69'),
(12, '1uki0t2', 83, '2tuki10', '2017-05-29 23:07:57', 'selfi.jpeg', '										5														1tuki0																										', '41u0tki', 0, '31uk0ti'),
(17, 'pi', 67, 'pi', '2017-06-01 09:44:12', 'cat.jpeg', '						pipipipipipi															', 'pi', 0, 'pi'),
(20, 'dsa', 67, 'sdasda', '2017-05-29 22:07:56', 'mamacera.jpeg', 'dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			\r\n\r\ndsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			dsadsadsadsdsadsadsa			', 'dsdsadas', 0, 'sadds'),
(19, '13', 71, '13', '2017-06-01 09:43:49', 'Green_arrow_right.svg.png', '						1313						', '13', 0, '13'),
(22, 'adssd', 67, 'sadsd', '2017-06-01 09:11:40', 'hands.png', 'sdasa		', 'saddas', 0, 'draft'),
(23, 'dsa', 67, 'dssd', '2017-06-01 09:12:07', 'Perfect_Square.png', '				dssd		', 'sdsda', 0, 'draft'),
(24, 'dassad', 88, 'adsad', '2017-06-01 09:15:16', 'ismo.png', '		sdasda', 'sdaa', 0, 'draft'),
(25, 'ewwqewq', 68, 'eqwqewqeweqw', '2017-06-01 09:15:21', 'ismo.png', '		ewqeqw', '', 0, 'draft'),
(26, 'ssssss', 71, 'ssssssss', '2017-06-01 09:15:40', 'Desanka Maksimovic@.jpg', '		ss', 'ss', 0, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `uid`, `pass`) VALUES
(68, 'xzz', 'zxzz', '', ''),
(69, '', '', '', ''),
(70, 'da', 'da', 'dsds', '$2y$10$ilovesomecrazystringsuMZX4C7Z4RUrriR2x7VkcMmMd694EulC'),
(71, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

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
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
