-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2016 at 10:01 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mailblast`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2015-12-15 00:00:00', '2015-12-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `mail_name` text NOT NULL,
  `mail_header` text NOT NULL,
  `mail_content` text NOT NULL,
  `mail_image` text NOT NULL,
  `mail_twitter` text NOT NULL,
  `mail_email` text NOT NULL,
  `mail_facebook` text NOT NULL,
  `mail_linkedin` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `template_id`, `mail_name`, `mail_header`, `mail_content`, `mail_image`, `mail_twitter`, `mail_email`, `mail_facebook`, `mail_linkedin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Template Pertama', 'Header Pertama', 'JKsdhhsd kjsahdkjas dkjashdkhasdasd', '1450776013.png', 'dieka2501', 'dieka.koes@gmail.com', 'dieka', 'dikdik.kusdinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'Email Template Dua', 'Header dua', 'Lorem isum del amet, kaheujd jwjfsdk jekjk mncdl iwoi sjhdsld', '1451106073.png', 'dieka2501', 'dieka.koes@gmail.com', 'dikdik.koes', 'dikdik.kusdinar', '2015-12-26 12:01:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Template baru 28', 'Bersatulah Indonesia', 'Lorem isum del amet ajhds ;jasdas', '1451270655.jpg', 'twitte837', 'demaik83@gami.com', '', 'dikdik.kusdinar', '2015-12-28 09:44:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'Template dua terbaru', 'Saksikan lah yang bagus bagus', 'Lorem isum sdeh alamhe&nbsp;<b></b><b>sdsd sdsds&nbsp;</b><b></b><b></b>sdasdasdasd jashdjasd', '1451293278.jpg', 'twitteatu', 'diekik@hsjd.com', 'hejdhus jwhjw ', 'sdjhijn.odlol', '2015-12-28 16:01:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'dssdf', 'sdfsdfsdf', '<p>sdfsdf</p>', '1451454141.png', 'sdfsd', 'dikdik@gmail.com', 'sdf', 'sdf', '2015-12-30 12:42:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

DROP TABLE IF EXISTS `receiver`;
CREATE TABLE IF NOT EXISTS `receiver` (
  `id_receiver` int(11) NOT NULL,
  `receiver_name` text NOT NULL,
  `receiver_email` text NOT NULL,
  `receiver_status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id_receiver`, `receiver_name`, `receiver_email`, `receiver_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dikdik Yahoo diek_koes', 'diek_koes@yahoo.co.id', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Dikdik yahoo if.10106042x', 'if.10106042x@yahoo.co.id', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Dikdik Yahoo diekawebdev', 'diekawebdev@yahoo.co.id', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Dikdik gmail dieka.koes', 'dieka.koes@gmail.com', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Dikdik gmail dieka.kuis', 'dieka.kuis@gmail.com', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Dikdik gmail sahaweh', 'sahawehsahaweh@gmail.com', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Dikdik Data driven asia', 'dikdik@data-driven.asia', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Dikdik Deasnet', 'dikdik@deasnet.com', '1', '2015-12-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_mail`
--

DROP TABLE IF EXISTS `receiver_mail`;
CREATE TABLE IF NOT EXISTS `receiver_mail` (
  `id` int(11) NOT NULL,
  `mail_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `id_template` int(11) NOT NULL,
  `file` text NOT NULL,
  `form` text NOT NULL COMMENT '"bagian":"element"',
  `template_name` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id_template`, `file`, `form`, `template_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Classic_Newsletter_Template', '{"header":[{"element":"text","label":"Header","value":""}],"image":[{"element":"file","label":"Image 1","value":""}],"content":[{"element":"textarea","label":"Content","value":""}],"twitter":[{"element":"text","label":"Twitter","value":""}],"instagram":[{"element":"text","label":"Instagram","value":""}],"facebook":[{"element":"text","label":"Facebook","value":""}],"linkedin":[{"element":"text","label":"LinkedIn","value":""}]}', 'Classic Template', '2015-12-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'template2', '{"header":[{"element":"text","label":"Header","value":""}],"content":[{"element":"textarea","label":"Content","value":""}],"image":[{"element":"file","label":"Image 1","value":""}],"footer":[{"element":"textarea","label":"Footer","value":""}]}', 'Template 2', '2015-12-16 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'template_ara', '', 'Template Ara', '2016-01-25 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id_receiver`);

--
-- Indexes for table `receiver_mail`
--
ALTER TABLE `receiver_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id_template`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id_receiver` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `receiver_mail`
--
ALTER TABLE `receiver_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
