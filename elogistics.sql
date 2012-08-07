-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2012 at 06:35 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elogistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT 'Хэрэглэгчийн нэвтрэх нэр',
  `password` varchar(255) NOT NULL COMMENT 'Хэрэглэгчийн нэвтрэх нууц үг',
  `random_number` smallint(6) NOT NULL COMMENT 'Random тоо',
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `sex` tinyint(4) NOT NULL COMMENT '1=male, 2=female',
  `birth_year` int(11) NOT NULL COMMENT 'Төрсөн он',
  `address` varchar(1024) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'user_status',
  `is_activated` tinyint(11) DEFAULT '0' COMMENT 'Идэвхижүүлсэн эсэх. 0 = Идэвхижүүлээгүй, 1 = Идэвхижүүлсэн',
  `active_url` int(11) NOT NULL COMMENT 'Идэвхижүүлэх хаяг',
  `user_ip` varchar(15) NOT NULL COMMENT 'Хэрэглэгчийн бүртгүүлсэн ip',
  `created_at` datetime NOT NULL COMMENT 'Бүртгүүлсэн огно',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Өөрчилсөн огно',
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0' COMMENT 'Устгагдсан эсэх.   0 = утсгагдаагүй, 1 = устгагдсан',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Бүртгүүлсэн гишүүн болоогүй хэрэглэгчид' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `random_number`, `firstname`, `lastname`, `sex`, `birth_year`, `address`, `status`, `is_activated`, `active_url`, `user_ip`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'moobi', 'bb91b1c98b02ca1a56680cc54ba95b02', 32767, 'Мөнх-Эрдэнэ', 'Бүрэнжаргал', 0, 2012, 'УБ', 1, 0, 0, '127.0.0.1', '2012-08-05 19:02:22', '2012-08-05 17:02:22', 0),
(2, 'asd', '301db58235303a7c762c3219f13d514f', 32767, 'asd', 'asd', 0, 2012, 'asd', 1, 0, 0, '127.0.0.1', '2012-08-05 19:31:41', '2012-08-05 17:31:41', 0),
(3, 'zxc', '4032179adf03ff27f4799d2d3af8c998', 17770, 'zxc', 'zxc', 0, 2012, 'zxc', 1, 0, 0, '127.0.0.1', '2012-08-05 19:52:11', '2012-08-05 17:52:11', 0),
(4, 'qwe', 'fbe657b12dd4ccdcdcef24a6224b8fd9', 32767, 'qwe', 'qwe', 0, 2012, 'qwe', 1, 0, 0, '127.0.0.1', '2012-08-06 20:01:37', '2012-08-06 18:01:38', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
