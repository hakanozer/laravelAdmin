-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2015 at 03:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laraveladmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `kul_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `kul_adi`, `sifre`, `adi`, `soyadi`, `mail`, `durum`, `tarih`) VALUES
(1, 'hakan', '827ccb0eea8a706c4c34a16891f84e7b', 'Hakan', 'ÖZER', 'ali@mail.com', 0, '2015-08-05 09:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
`id` int(11) NOT NULL,
  `site_baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meta_key` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meta_desc` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `domain_name` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_adres` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_kul_adi` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_sifre` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'enlem',
  `lat` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'boylam',
  `mail_adres` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gsm` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`id` int(11) NOT NULL,
  `konum` tinyint(2) DEFAULT NULL,
  `yukseklik` int(4) DEFAULT NULL,
  `genislik` int(4) DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tiklanma` int(10) DEFAULT NULL,
  `gosterim` int(10) DEFAULT NULL,
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosya_yonetimi`
--

CREATE TABLE IF NOT EXISTS `dosya_yonetimi` (
`id` int(7) unsigned NOT NULL,
  `parent_id` int(7) unsigned NOT NULL,
  `name` varchar(256) NOT NULL,
  `content` longblob NOT NULL,
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL,
  `mime` varchar(256) NOT NULL DEFAULT 'unknown',
  `read` enum('1','0') NOT NULL DEFAULT '1',
  `write` enum('1','0') NOT NULL DEFAULT '1',
  `locked` enum('1','0') NOT NULL DEFAULT '0',
  `hidden` enum('1','0') NOT NULL DEFAULT '0',
  `width` int(5) NOT NULL,
  `height` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosya_yonetimi`
--

INSERT INTO `dosya_yonetimi` (`id`, `parent_id`, `name`, `content`, `size`, `mtime`, `mime`, `read`, `write`, `locked`, `hidden`, `width`, `height`) VALUES
(1, 0, 'DATABASE', '', 0, 0, 'directory', '1', '1', '0', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gal_kategori`
--

CREATE TABLE IF NOT EXISTS `gal_kategori` (
`id` int(11) NOT NULL,
  `ust_kat_id` int(11) DEFAULT NULL COMMENT '0 ise üst kategori',
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gal_resim`
--

CREATE TABLE IF NOT EXISTS `gal_resim` (
`id` int(11) NOT NULL,
  `gal_kat_id` int(11) DEFAULT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icerikler`
--

CREATE TABLE IF NOT EXISTS `icerikler` (
`id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisa_aciklama` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detay` varchar(5000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
`id` int(11) NOT NULL,
  `ust_id` int(11) NOT NULL COMMENT '0 ise ana kategori',
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
`id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL COMMENT '0 ise aktif, 1 ise pasif',
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesajlar` (
`id` int(11) NOT NULL,
  `gonderen_id` int(11) DEFAULT NULL,
  `alici_id` int(11) DEFAULT NULL,
  `mesaj` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` tinyint(1) DEFAULT NULL COMMENT '0 ise okunmadı, 1 ise okundu',
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resimler`
--

CREATE TABLE IF NOT EXISTS `resimler` (
`id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `adi` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisa_aciklama` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
`id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kisa_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` decimal(6,2) NOT NULL,
  `kampanya` tinyint(1) NOT NULL COMMENT '0 ise kampanyasız, 1 ise kampanyalı',
  `piyasa_fiyati` decimal(6,2) NOT NULL,
  `durum` tinyint(1) NOT NULL COMMENT '0 ise aktif, 1 ise pasif',
  `stok` smallint(4) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urun_puan`
--

CREATE TABLE IF NOT EXISTS `urun_puan` (
`id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `puan` tinyint(1) NOT NULL COMMENT '1 ile 5 arasında değer alınacaktır.',
  `ip_no` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
`id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `kul_id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `puan` tinyint(1) NOT NULL,
  `durum` tinyint(1) NOT NULL COMMENT '0 ise aktif, 1 ise pasif',
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `urun_id`, `kul_id`, `baslik`, `icerik`, `puan`, `durum`, `tarih`) VALUES
(1, 1, 1, 'bu ürün çok güzel', 'ürün harika', 5, 1, '2015-07-22 06:25:26'),
(2, 1, 1, 'bu ürün iğrenç', 'çok kötü asla almayın', 1, 0, '2015-07-08 08:18:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayarlar`
--
ALTER TABLE `ayarlar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosya_yonetimi`
--
ALTER TABLE `dosya_yonetimi`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `parent_name` (`parent_id`,`name`), ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `gal_kategori`
--
ALTER TABLE `gal_kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gal_resim`
--
ALTER TABLE `gal_resim`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icerikler`
--
ALTER TABLE `icerikler`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoriler`
--
ALTER TABLE `kategoriler`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesajlar`
--
ALTER TABLE `mesajlar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resimler`
--
ALTER TABLE `resimler`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urun_puan`
--
ALTER TABLE `urun_puan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yorumlar`
--
ALTER TABLE `yorumlar`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ayarlar`
--
ALTER TABLE `ayarlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dosya_yonetimi`
--
ALTER TABLE `dosya_yonetimi`
MODIFY `id` int(7) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gal_kategori`
--
ALTER TABLE `gal_kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gal_resim`
--
ALTER TABLE `gal_resim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `icerikler`
--
ALTER TABLE `icerikler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mesajlar`
--
ALTER TABLE `mesajlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resimler`
--
ALTER TABLE `resimler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urun_puan`
--
ALTER TABLE `urun_puan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
