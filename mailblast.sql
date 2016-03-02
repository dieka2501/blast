-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2016 at 11:10 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mailblast`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
CREATE TABLE `mail` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `template_id`, `mail_name`, `mail_header`, `mail_content`, `mail_image`, `mail_twitter`, `mail_email`, `mail_facebook`, `mail_linkedin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 3, 'Template Email Ke Mahakam', '', '', '', '', '', '', '', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 'Template Kemaren Sore', '', '', '', '', '', '', '', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 'Email Dunkin', '', '', '', '', '', '', '', '2016-02-23 10:53:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 4, 'TEMPLATE SIANG', '', '', '', '', '', '', '', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mail_detail`
--

DROP TABLE IF EXISTS `mail_detail`;
CREATE TABLE `mail_detail` (
  `id_mail_detail` int(11) NOT NULL,
  `mail_id` int(11) NOT NULL,
  `key` text NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_detail`
--

INSERT INTO `mail_detail` (`id_mail_detail`, `mail_id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 4, 'header', 'Mahakam', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, 'image', 'image1455866371.png', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 4, 'content', '<p style="font-stretch: normal; font-size: 12px; line-height: 20px; font-family: verdana, sans-serif; color: #545454;"><strong>Intisari-Online.com -&nbsp;</strong>Beberapa orang ada yang takut naik pesawat sehingga mereka memilih alternatif transportasi lain untuk bepergian. Jika Anda salah satunya, inilah&nbsp;<strong>8 tips menghilangkan rasa takut naik pesawat</strong>menurut para ahli:<br /><strong><br />Riset<br /></strong>Pahami bahwa turbulensi terjadi karena adanya arus di udara, layaknya arus di sungai. Pesawat juga bisa mengalami goncangan saat penerbangan, sama dengan mobil ketika menginjak batu. Dengan memahami hal tersebut kita bisa lebih tenang. Ingat juga bahwa pilot pasti sudah dilatih selama beberapa tahun sebelum terbang dan mereka pasti sudah ahli di bidangnya.</p>\r\n<p style="font-stretch: normal; font-size: 12px; line-height: 20px; font-family: verdana, sans-serif; color: #545454;"><strong>Mengakali kecemasan<br /></strong>Lakukan kebalikan dari perasaan khawatir kita. Jika ketakutan kita memerintahkan untuk terus-terusan duduk dan mengencangkan pegangan pada kursi pesawat, maka lakukan sebaliknya: lepaskan tangan, bangun dan berjalan-jalan di lorong pesawat.</p>\r\n<p style="font-stretch: normal; font-size: 12px; line-height: 20px; font-family: verdana, sans-serif; color: #545454;"><strong>Nilai setiap penerbangan<br /></strong>Masing-masing penerbangan memberikan kita pengalaman sehingga penerbangan berikutnya menjadi lebih mudah. Maksimalkan hak itu untuk mencatat tingkat kecemasan kita selama penerbangan.</p>\r\n<p style="font-stretch: normal; font-size: 12px; line-height: 20px; font-family: verdana, sans-serif; color: #545454;"><strong>Cari pertolongan<br /></strong>Kursus menghilangkan rasa takut saat naik pesawat banyak membantu beberapa orang. The British Airways Fly Without Fear mengklaim sudah membantu 4.500 orang menangani rasa takutnya dan keberhasilannya mencapai 98%. Kursus tersebut meliputi teknik relaksasi, konseling individu dan naik pesawat selama 45 menit. Cara efektif lainnya meliputi hipnoterapis atau meminum obat-obatan anti cemas.</p>\r\n<p style="font-stretch: normal; font-size: 12px; line-height: 20px; font-family: verdana, sans-serif; color: #545454;">Itulah&nbsp;<strong>8 tips menghilangkan rasa takut naik pesawat.&nbsp;</strong>Silahkan mencoba!&nbsp;<em>(mirror.co.uk)</em></p>', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 4, 'twitter', 'dieka2501', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 4, 'email', 'dieka.hehe@gmail.com', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 4, 'facebook', 'dieka Hehe Koes', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 4, 'linkedin', 'DIkdik Kusdinar', '2016-02-19 14:19:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 5, 'header', 'Telah dibuka', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 5, 'image', 'image1456146322.png', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 5, 'image_kiri', 'image_kiri1456146322.png', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 5, 'image_kanan', 'image_kanan1456146322.jpg', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 5, 'content', '<p><span style="box-sizing: border-box; font-weight: bold; color: #4b4b4b; font-family: Lucida, helvetica, sans-serif; font-size: 16px; line-height: 24px;">JAKARTA, KOMPAS.com</span><span style="color: #4b4b4b; font-family: Lucida, helvetica, sans-serif; font-size: 16px; line-height: 24px;">&nbsp;- Yusril Ihza Mahendra serius ingin maju sebagai bakal calon gubernur DKI Jakarta. Dia memiliki gagasan untuk yang ingin diwujudkan di Jakarta.</span><br style="box-sizing: border-box; color: #4b4b4b; font-family: Lucida, helvetica, sans-serif; font-size: 16px; line-height: 24px;" /><br style="box-sizing: border-box; color: #4b4b4b; font-family: Lucida, helvetica, sans-serif; font-size: 16px; line-height: 24px;" /><span style="color: #4b4b4b; font-family: Lucida, helvetica, sans-serif; font-size: 16px; line-height: 24px;">Menurut Yusril, ada kontradiksi antara Pemerintah Daerah Ibu Kota Jakarta dengan Pemerintah Pusat. Meski Ibu Kota, tapi pemerintahan di dalamnya tidak bersifat terpusat dengan pemerintah pusat.</span></p>', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 5, 'content_kiri', '<p><span style="color: #292f33; font-family: Arial, sans-serif; font-size: 14px; line-height: 18px; white-space: pre-wrap; background-color: #f5f8fa;">gian orang memiliki ''Alarm Alami'' yang membuat mereka bisa bangun kapan mereka mau. Hal ini karena adanya hormon stres.</span></p>', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 5, 'content_kanan', '<p><span style="color: #292f33; font-family: Arial, sans-serif; font-size: 14px; line-height: 18px; white-space: pre-wrap; background-color: #f5f8fa;">arusnya harga kantong plastik berbayar minimal Rp 5.000 dan penegakan hukum yg buang sampah sembarangan lebih tegas lagi. </span></p>', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 5, 'twitter', 'dieka2501', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 5, 'email', 'dieka.hehe@gmail.com', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 5, 'facebook', 'dieka Hehe Koes', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 5, 'linkedin', 'DIkdik Kusdinar', '2016-02-22 20:05:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 6, 'header', 'MAil Telah Siap ', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 6, 'image', 'image1456199595.jpg', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 6, 'image_kiri', 'image_kiri1456199595.jpg', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 6, 'image_kanan', 'image_kanan1456199595.png', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 6, 'content', '<p>Inoisdoiasd HGdjhsgds KLHshdskd</p>', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 6, 'content_kiri', '<p>kuHH</p>', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 6, 'content_kanan', '<p>HGDjhsgdjhsd</p>', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 6, 'twitter', 'Dieka', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 6, 'email', 'jsh@debindo.com', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 6, 'facebook', 'DIkdik Kusdin', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 6, 'linkedin', 'DIkdik Kusdinar', '2016-02-23 10:53:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 7, 'header', 'TELAH DIBUKA', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 7, 'image', 'image1456201468.png', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 7, 'image_kiri', 'image_kiri1456201444.png', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 7, 'image_kanan', 'image_kanan1456201444.png', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 7, 'content', '<p>GEJGEF ukhefkuhekuf khrufkurhkrf khrkurthk</p>', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 7, 'content_kiri', '<p>jhvkuhu krhtjughurtg</p>', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 7, 'content_kanan', '<p>kurhfukherkerf&nbsp;</p>', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 7, 'twitter', 'dieka2501', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 7, 'email', 'dieka.hehe@gmail.com', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 7, 'facebook', 'dieka Hehe Koes', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 7, 'linkedin', 'DIkdik Kusdinar', '2016-02-23 11:26:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mail_schedule`
--

DROP TABLE IF EXISTS `mail_schedule`;
CREATE TABLE `mail_schedule` (
  `id_schedule` int(11) NOT NULL,
  `mail_id` int(11) NOT NULL,
  `mail_subject` text NOT NULL,
  `send_time` datetime NOT NULL,
  `is_schedule` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_schedule`
--

INSERT INTO `mail_schedule` (`id_schedule`, `mail_id`, `mail_subject`, `send_time`, `is_schedule`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 'Isyana Sarasvati bakalan nyanyi', '2016-02-25 10:14:53', 0, '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, 'Isyana Sarasvati bakalan nyanyi', '2016-02-25 10:15:14', 0, '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 5, '', '2016-02-25 10:19:36', 0, '2016-02-25 10:19:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

DROP TABLE IF EXISTS `receiver`;
CREATE TABLE `receiver` (
  `id_receiver` int(11) NOT NULL,
  `receiver_name` text NOT NULL,
  `receiver_email` text NOT NULL,
  `receiver_status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
CREATE TABLE `receiver_mail` (
  `id` int(11) NOT NULL,
  `mail_id` int(11) NOT NULL,
  `receiver_id` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver_mail`
--

INSERT INTO `receiver_mail` (`id`, `mail_id`, `receiver_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'diek_koes@yahoo.co.id', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'if.10106042x@yahoo.co.id', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'diekawebdev@yahoo.co.id', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'dieka.koes@gmail.com', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'dieka.kuis@gmail.com', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'sahawehsahaweh@gmail.com', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'dikdik@data-driven.asia', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'dikdik@deasnet.com', '2016-02-25 10:14:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 'diek_koes@yahoo.co.id', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'if.10106042x@yahoo.co.id', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 'diekawebdev@yahoo.co.id', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 'dieka.koes@gmail.com', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, 'dieka.kuis@gmail.com', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 'sahawehsahaweh@gmail.com', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 'dikdik@data-driven.asia', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 'dikdik@deasnet.com', '2016-02-25 10:15:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 3, 'dieka.koes@gmail.com', '2016-02-25 10:19:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 3, ' sahawehsahaweh@gmail.com', '2016-02-25 10:19:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 3, ' dikdik@data-driven.asia', '2016-02-25 10:19:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `id_template` int(11) NOT NULL,
  `file` text NOT NULL,
  `form` text NOT NULL COMMENT '"bagian":"element"',
  `template_name` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id_template`, `file`, `form`, `template_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'template_ara', '{"header":{"element":"text","label":"Header","value":""},"image":{"element":"file","label":"Image","value":""},"content":{"element":"textarea","label":"Content","value":""}}', 'Template Ara', '2016-01-25 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'template_ara2', '{"header":{"element":"text","label":"Header","value":""},"image":{"element":"file","label":"Image","value":""},"image_kiri":{"element":"file","label":"Image Kiri","value":""},"image_kanan":{"element":"file","label":"Image Kanan","value":""},"content":{"element":"textarea","label":"Content","value":""},"content_kiri":{"element":"textarea","label":"Content Kiri","value":""},"content_kanan":{"element":"textarea","label":"Content Kanan","value":""}}', 'Template Ara 2', '2016-02-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Indexes for table `mail_detail`
--
ALTER TABLE `mail_detail`
  ADD PRIMARY KEY (`id_mail_detail`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mail_detail`
--
ALTER TABLE `mail_detail`
  MODIFY `id_mail_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `mail_schedule`
--
ALTER TABLE `mail_schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id_receiver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `receiver_mail`
--
ALTER TABLE `receiver_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
