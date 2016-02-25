-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2016 at 08:43 
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
CREATE DATABASE IF NOT EXISTS `mailblast` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mailblast`;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `template_id`, `mail_name`, `mail_header`, `mail_content`, `mail_image`, `mail_twitter`, `mail_email`, `mail_facebook`, `mail_linkedin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Template Pertama', 'Header Pertama', 'JKsdhhsd kjsahdkjas dkjashdkhasdasd', '1450776013.png', 'dieka2501', 'dieka.koes@gmail.com', 'dieka', 'dikdik.kusdinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'Email Template Dua', 'Header dua', 'Lorem isum del amet, kaheujd jwjfsdk jekjk mncdl iwoi sjhdsld', '1451106073.png', 'dieka2501', 'dieka.koes@gmail.com', 'dikdik.koes', 'dikdik.kusdinar', '2015-12-26 12:01:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Template baru 28', 'Bersatulah Indonesia', 'Lorem isum del amet ajhds ;jasdas', '1451270655.jpg', 'twitte837', 'demaik83@gami.com', '', 'dikdik.kusdinar', '2015-12-28 09:44:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'Template dua terbaru', 'Saksikan lah yang bagus bagus', 'Lorem isum sdeh alamhe&nbsp;<b></b><b>sdsd sdsds&nbsp;</b><b></b><b></b>sdasdasdasd jashdjasd', '1451293278.jpg', 'twitteatu', 'diekik@hsjd.com', 'hejdhus jwhjw ', 'sdjhijn.odlol', '2015-12-28 16:01:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'dssdf', 'sdfsdfsdf', '<p>sdfsdf</p>', '1451454141.png', 'sdfsd', 'dikdik@gmail.com', 'sdf', 'sdf', '2015-12-30 12:42:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 3, 'Email Template Untuk 26 Januari 2016', 'Email Per 26 Januari 2016', '<p><strong style="border: 0px none; font-stretch: inherit; font-size: 16px; line-height: 25px; font-family: Lucida, sans-serif; margin: 0px; padding: 0px; vertical-align: baseline; max-width: 100%;" title="Author: Worldcarfans 1\r\nCaption: Rendering Ford Fiesta RS" data-id="593394" data-aligment="" data-width="780px">akarta, Otomania &ndash;&nbsp;</strong><span style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;">Keputusan Ford Indonesia (FMI) menutup bisnisnya di Indonesia disayangkan banyak pihak, termasuk Kementerian Perindustrian (Kemenperin), Republik Indonesia. Kemenperin menganggap, pengumuman FMI terlalu mendadak.</span><br style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;" /><br style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;" /><span style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;">&ldquo;Sangat disayangkan FMI menutup bisnisnya di sini. Ini bisa mengartikan bahwa Ford akan semakin jauh kemungkinannya untuk membangun fasilitas produksi di sini. Informasi ini juga baru saya terima kemarin, Senin (25/1/2016) via surat elektronik,&rdquo; ujar I Gusti Putu Suryawirawan, Dirjen Industri Logam, Mesin, Alat Transportasi dan Elektronika Kemenperin, saat dihubungi</span><em style="border: 0px none; font-stretch: inherit; font-size: 16px; line-height: 25px; font-family: Lucida, sans-serif; margin: 0px; padding: 0px; vertical-align: baseline;">Otomania</em><span style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;">, Selasa (26/1/2016).</span></p>\r\n<p style="border: 0px none; font-stretch: inherit; font-size: 16px; line-height: 25px; font-family: Lucida, sans-serif; margin: 0px; padding: 5px 0px; vertical-align: baseline;">Putu menambahkan, terkait dengan bisni</p>', '1453779546.png', 'dieka2501', 'dieka.koes@gmail.com', 'Dieka Hehe Koes', 'dikdik.kusdinar', '2016-01-26 10:39:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'Email kedua 26 Januari', 'Berita Heboh banget', '<p><strong style="border: 0px none; font-stretch: inherit; font-size: 16px; line-height: 25px; font-family: Lucida, sans-serif; margin: 0px; padding: 0px; vertical-align: baseline; max-width: 100%;" title="Author: Worldcarfans 1\r\nCaption: Rendering Ford Fiesta RS" data-id="593394" data-aligment="" data-width="780px">Jakarta, Otomania &ndash;&nbsp;</strong><span style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;">Keputusan Ford Indonesia (FMI) menutup bisnisnya di Indonesia disayangkan banyak pihak, termasuk Kementerian Perindustrian (Kemenperin), Republik Indonesia. Kemenperin menganggap, pengumuman FMI terlalu mendadak.</span><br style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;" /><br style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;" /><span style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;">&ldquo;Sangat disayangkan FMI menutup bisnisnya di sini. Ini bisa mengartikan bahwa Ford akan semakin jauh kemungkinannya untuk membangun fasilitas produksi di sini. Informasi ini juga baru saya terima kemarin, Senin (25/1/2016) via surat elektronik,&rdquo; ujar I Gusti Putu Suryawirawan, Dirjen Industri Logam, Mesin, Alat Transportasi dan Elektronika Kemenperin, saat dihubungi</span><em style="border: 0px none; font-stretch: inherit; font-size: 16px; line-height: 25px; font-family: Lucida, sans-serif; margin: 0px; padding: 0px; vertical-align: baseline;">Otomania</em><span style="font-family: Lucida, sans-serif; font-size: 16px; line-height: 25px;">, Selasa (26/1/2016).</span></p>\r\n<p style="border: 0px none; font-stretch: inherit; font-size: 16px; line-height: 25px; font-family: Lucida, sans-serif; margin: 0px; padding: 5px 0px; vertical-align: baseline;">Putu menambahkan, terkait dengan bisnis yang ada di dalam negeri, Pemerintah hanya sebagai pemberi&nbsp;</p>', '1453783041.png', 'dieka2501', 'dieka.koes@gmail.com', 'Dieka Hehe Koes', 'Dikdik Kusdinar', '2016-01-26 11:37:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mail_schedule`
--

DROP TABLE IF EXISTS `mail_schedule`;
CREATE TABLE IF NOT EXISTS `mail_schedule` (
  `id_schedule` int(11) NOT NULL,
  `mail_id` int(11) NOT NULL,
  `mail_subject` text NOT NULL,
  `send_time` datetime NOT NULL,
  `is_schedule` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_schedule`
--

INSERT INTO `mail_schedule` (`id_schedule`, `mail_id`, `mail_subject`, `send_time`, `is_schedule`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, '', '2016-01-28 15:00:00', 0, '2016-01-26 11:30:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 7, 'Coba deh inii mah', '2016-01-26 13:00:00', 0, '2016-01-26 11:45:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Coba yang baru ini mah', '2016-01-26 18:00:00', 0, '2016-01-26 11:47:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, '', '2016-01-28 17:00:00', 0, '2016-01-26 11:53:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 6, 'Cobain dulu atuh', '2015-08-18 12:01:00', 0, '2016-01-26 12:01:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 7, 'Untuk Februari ke 2', '2016-02-12 14:26:49', 0, '2016-02-12 14:26:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'Ini mah untuk bebas ajah', '2016-02-10 14:27:00', 1, '2016-02-12 14:27:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, 'Ini mah coba coba atuh', '2016-02-29 14:30:00', 1, '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `receiver_id` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver_mail`
--

INSERT INTO `receiver_mail` (`id`, `mail_id`, `receiver_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'diekawebdev@yahoo.co.id', '2016-01-26 11:30:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, ' ', '2016-01-26 11:30:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 'dieka.koes@gmail.com', '2016-01-26 11:45:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, ' ', '2016-01-26 11:45:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, 'diekawebdev@yahoo.co.id', '2016-01-26 11:47:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 3, ' ', '2016-01-26 11:47:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 5, 'dieka.koes@gmail.com', '2016-01-26 12:01:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 5, ' dikdik@data-driven.asia', '2016-01-26 12:01:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 6, 'diek_koes@yahoo.co.id', '2016-02-12 14:26:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 6, 'if.10106042x@yahoo.co.id', '2016-02-12 14:26:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 6, 'diekawebdev@yahoo.co.id', '2016-02-12 14:26:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 6, 'dieka.koes@gmail.com', '2016-02-12 14:26:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 6, 'dieka.kuis@gmail.com', '2016-02-12 14:26:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 6, 'sahawehsahaweh@gmail.com', '2016-02-12 14:26:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 6, 'dikdik@data-driven.asia', '2016-02-12 14:26:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 6, 'dikdik@deasnet.com', '2016-02-12 14:26:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 7, 'diek_koes@yahoo.co.id', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 7, 'if.10106042x@yahoo.co.id', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 7, 'diekawebdev@yahoo.co.id', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 7, 'dieka.koes@gmail.com', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 7, 'dieka.kuis@gmail.com', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 7, 'sahawehsahaweh@gmail.com', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 7, 'dikdik@data-driven.asia', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 7, 'dikdik@deasnet.com', '2016-02-12 14:28:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 8, 'diek_koes@yahoo.co.id', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 8, 'if.10106042x@yahoo.co.id', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 8, 'diekawebdev@yahoo.co.id', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 8, 'dieka.koes@gmail.com', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 8, 'dieka.kuis@gmail.com', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 8, 'sahawehsahaweh@gmail.com', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 8, 'dikdik@data-driven.asia', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 8, 'dikdik@deasnet.com', '2016-02-12 14:30:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(3, 'template_ara', '{"header":[{"element":"text","label":"Header","value":""}],"content":[{"element":"textarea","label":"Content","value":""}],"image":[{"element":"file","label":"Image 1","value":""}],"footer":[{"element":"textarea","label":"Footer","value":""}]}', 'Template Ara', '2016-01-25 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Indexes for table `mail_schedule`
--
ALTER TABLE `mail_schedule`
  ADD PRIMARY KEY (`id_schedule`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mail_schedule`
--
ALTER TABLE `mail_schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id_receiver` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `receiver_mail`
--
ALTER TABLE `receiver_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
