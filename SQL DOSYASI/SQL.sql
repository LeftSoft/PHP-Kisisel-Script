-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2020 at 11:47 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fovicon` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_appname` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_fovicon`, `ayar_url`, `ayar_title`, `ayar_appname`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_footer`, `ayar_tel`, `ayar_mail`, `ayar_adres`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_instagram`) VALUES
(0, 'img/24549yen.png', 'img/25475yen.png', 'http://localhost/kisisel/', 'Kişisel', 'CanlıTV', 'Kişisel', 'aa,aaa', '', 'Copyright © 2019 Maksis Otomasyon - Tüm Hakları Saklıdır.', '0553 xxx xx xx', 'ramazankaraca5@gmail.com', 'İstanbul', ' <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.43554951285!2d-118.69191514099776!3d34.020730497983934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20Kaliforniya%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1604010438472!5m2!1str!2str" width="1050" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '', '        ', 'https://facebook.com', 'https://twitter.com', 'www.google.com', 'https://youtube.com', 'https://instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_isim` text NOT NULL,
  `blog_aciklama` text NOT NULL,
  `blog_resim` text NOT NULL,
  `blog_tarih` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_isim`, `blog_aciklama`, `blog_resim`, `blog_tarih`) VALUES
(2, 'Blog İsim1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n', 'img/22141aaa.jpg', '01.12.2019'),
(4, 'Blog İsim 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'img/21337aaa.jpg', '01.12.2019'),
(5, 'LeftSoft', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'img/29360265413029831403image.png', '26.10.2020');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimda`
--

CREATE TABLE `hakkimda` (
  `hakkimda_id` int(11) NOT NULL,
  `hakkimda_ad` text NOT NULL,
  `hakkimda_resim` text NOT NULL,
  `hakkimda_adres` text NOT NULL,
  `hakkimda_aciklama` text NOT NULL,
  `hakkimda_deneyim` text NOT NULL,
  `hakkimda_proje` text NOT NULL,
  `hakkimda_meslek` text NOT NULL,
  `hakkimda_cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hakkimda`
--

INSERT INTO `hakkimda` (`hakkimda_id`, `hakkimda_ad`, `hakkimda_resim`, `hakkimda_adres`, `hakkimda_aciklama`, `hakkimda_deneyim`, `hakkimda_proje`, `hakkimda_meslek`, `hakkimda_cv`) VALUES
(1, 'Ramazan Karaca', 'img/26264image.png', 'İstanbul', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '+3 Yıl Yazılım', '+150 Proje', 'Developer', 'cv/31499Deneme.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hizmetlerim`
--

CREATE TABLE `hizmetlerim` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_baslik` text NOT NULL,
  `hizmet_aciklama` text NOT NULL,
  `hizmet_fa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hizmetlerim`
--

INSERT INTO `hizmetlerim` (`hizmet_id`, `hizmet_baslik`, `hizmet_aciklama`, `hizmet_fa`) VALUES
(5, 'Web Design', 'Lorem Ipsum is simply dummy text of the Lorem has been the industry\'s standard dummy text ever.', 'fas fa-desktop'),
(6, 'Web Development', 'Lorem Ipsum is simply dummy text of the Lorem has been the industry\'s standard dummy text ever.', 'fas fa-cogs');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_isim` text NOT NULL,
  `iletisim_mail` text NOT NULL,
  `iletisim_mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_isim`, `iletisim_mail`, `iletisim_mesaj`) VALUES
(1, 'adsf', 'dsf@f.co', 'dsfdsfds'),
(2, 'sdfsd', 'ramazankaraca5@gmail.com', 'asfdsaf'),
(3, 'dsf', 'ramazankaraca5@gmail.com', 'df'),
(4, 'Ramazan Karaca', 'ramazankaraca5@gmail.com', 'a'),
(5, 'Ramazan', 'ramazankaraca5@gmail.com', 'rrrrr'),
(6, 'Ramazan', 'ramazankaraca5@gmail.com', 'rrrffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffasdasdassadasdsadas');

-- --------------------------------------------------------

--
-- Table structure for table `ilgi`
--

CREATE TABLE `ilgi` (
  `ilgi_id` int(11) NOT NULL,
  `ilgi_ad` text NOT NULL,
  `ilgi_fa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ilgi`
--

INSERT INTO `ilgi` (`ilgi_id`, `ilgi_ad`, `ilgi_fa`) VALUES
(1, 'Müzik', 'fas fa-music'),
(3, 'Seyahat', 'fas fa-route');

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_mail`, `kullanici_password`, `kullanici_ad`) VALUES
(154, 'demo@demo.com', 'demo', 'LeftSoft');

-- --------------------------------------------------------

--
-- Table structure for table `proje`
--

CREATE TABLE `proje` (
  `proje_id` int(11) NOT NULL,
  `proje_name` text NOT NULL,
  `proje_etiket` text NOT NULL,
  `proje_resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proje`
--

INSERT INTO `proje` (`proje_id`, `proje_name`, `proje_etiket`, `proje_resim`) VALUES
(1, 'Proje İsmi', 'Proje1', 'img/20793'),
(2, 'Proje İsmi2', 'Proje2', 'img/portfolio/img-2.jpg'),
(3, 'Proje İsmi3', 'Proje3', 'img/portfolio/img-3.jpg'),
(5, 'Proje İsmi5', 'Proje5', 'img/portfolio/img-5.jpg'),
(6, 'Proje İsmi6', 'Proje6', 'img/portfolio/img-6.jpg'),
(7, 'LeftSoft Deneme', 'Leftsoft', 'img/25366224932986030635image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`hakkimda_id`);

--
-- Indexes for table `hizmetlerim`
--
ALTER TABLE `hizmetlerim`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Indexes for table `ilgi`
--
ALTER TABLE `ilgi`
  ADD PRIMARY KEY (`ilgi_id`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Indexes for table `proje`
--
ALTER TABLE `proje`
  ADD PRIMARY KEY (`proje_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `hakkimda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hizmetlerim`
--
ALTER TABLE `hizmetlerim`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ilgi`
--
ALTER TABLE `ilgi`
  MODIFY `ilgi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `proje`
--
ALTER TABLE `proje`
  MODIFY `proje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
