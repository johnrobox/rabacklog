-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2017 at 12:19 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `rabacklog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` tinyint(4) NOT NULL COMMENT '1-male, 2-female',
  `user_token` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '0-block, 1-active',
  `user_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_ip_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_date_created` datetime NOT NULL,
  `user_date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_contact`, `user_gender`, `user_token`, `user_status`, `user_image`, `user_ip_address`, `user_date_created`, `user_date_modified`) VALUES
(0, 'John Robert', 'Jerodiaz', 'johnrobertjerodiaz@gmail.com', '6a167a2bf414612b3f4df72545981313e784cfe3d4fabb8cdb1b7fd51153deb6fe88f0d2dee9f6d8030c9a1b6c07ea2ad7d226b911152398eccfcfdf34058a33nVFhq6tFreaM0CHN+UiUkTc/Xws2iMg+7SSyAXprboc=', '09334416469', 1, '', 1, '', '192.168.0.194', '2017-05-22 11:14:54', '0000-00-00 00:00:00');
