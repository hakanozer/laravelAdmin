-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2015 at 04:03 PM
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
(1, 'abali', '827ccb0eea8a706c4c34a16891f84e7b', 'Aslan', 'BALİ', 'ali@mail.com', 0, '2015-08-05 09:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `anket`
--

CREATE TABLE IF NOT EXISTS `anket` (
`id` int(11) NOT NULL,
  `anket_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `anket`
--

INSERT INTO `anket` (`id`, `anket_baslik`, `tarih`) VALUES
(1, 'Futbol Takımları', '2015-08-19 21:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `anketdetay`
--

CREATE TABLE IF NOT EXISTS `anketdetay` (
`id` int(11) NOT NULL,
  `anket_id` int(11) NOT NULL,
  `sorunuz` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `anketdetay`
--

INSERT INTO `anketdetay` (`id`, `anket_id`, `sorunuz`) VALUES
(1, 1, 'Hangi futbol takımını destekliyorsunuz?'),
(2, 1, 'Varsa, memleketinizin futbol takımını destekliyor musunuz?'),
(3, 1, 'En sevmediğiniz futbol takımı hangisidir?');

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
  `adres` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `logo` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_baslik`, `meta_key`, `meta_desc`, `domain_name`, `smtp_adres`, `smtp_kul_adi`, `smtp_sifre`, `long`, `lat`, `mail_adres`, `telefon`, `fax`, `gsm`, `adres`, `logo`) VALUES
(1, 'Laravel Admin Paneli', 'Laravel,admin,template,panel,wissen', 'Muhtesem bir admin paneli', 'ornekdomain.com', 'smtp.ornekdomain.com', 'ornek', 'ornek123', '29.0069081419158', '41.04389113879316', 'info@ornekdomain.com', '+902129896598', '02129876532', '05369886532', 'Ornek Mah, Ornek Caddesi 6/20', '72214.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`id` int(11) NOT NULL,
  `ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `konum` tinyint(2) DEFAULT NULL,
  `yukseklik` int(4) DEFAULT NULL,
  `genislik` int(4) DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tiklanma` int(10) DEFAULT NULL,
  `gosterim` int(10) DEFAULT NULL,
  `durum` tinyint(1) NOT NULL COMMENT 'pasif 0 - aktif 1',
  `baslangic_tarih` datetime DEFAULT NULL,
  `bitis_tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `ad`, `konum`, `yukseklik`, `genislik`, `yol`, `url`, `tiklanma`, `gosterim`, `durum`, `baslangic_tarih`, `bitis_tarih`) VALUES
(2, 'ahmet', 0, 200, 200, '20150807151847_b.jpg', 'https://www.google.com.tr/', 0, 0, 0, '2015-08-08 01:00:00', '2015-08-14 01:00:00'),
(3, 'ahmet', 0, 200, 200, '20150807151903_b.jpg', 'https://www.google.com.tr/', 0, 0, 1, '2015-08-08 01:00:00', '2015-08-14 01:00:00'),
(31, 'ahmet', 0, 100, 200, 'resimler/20150807190235_b.jpg', 'www.fatihgoktas.net', 0, 0, 1, '2015-08-09 04:07:00', '2015-08-08 07:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `bulten`
--

CREATE TABLE IF NOT EXISTS `bulten` (
`id` int(11) NOT NULL,
  `metin` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bulten_abone`
--

CREATE TABLE IF NOT EXISTS `bulten_abone` (
`id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `bulten_abone`
--

INSERT INTO `bulten_abone` (`id`, `email`, `tarih`) VALUES
(1, 'aliveli@mail.com', '2015-08-05 11:19:38'),
(2, 'asd@mail.com', '2015-08-19 23:46:34');

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
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `gal_kategori`
--

INSERT INTO `gal_kategori` (`id`, `baslik`) VALUES
(1, 'Elektronik Eşyalar'),
(2, 'Beyaz Eşyalar'),
(15, 'fsdfsdfsffd');

-- --------------------------------------------------------

--
-- Table structure for table `gal_resim`
--

CREATE TABLE IF NOT EXISTS `gal_resim` (
`id` int(11) NOT NULL,
  `gal_kat_id` int(11) DEFAULT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `gal_resim`
--

INSERT INTO `gal_resim` (`id`, `gal_kat_id`, `baslik`, `yol`) VALUES
(35, 1, 'sdfsdfsf', '20150812111256.jpg'),
(36, 1, 'sfsdfsfsfdsf', '20150812111303.jpg'),
(42, 2, 'fadfsdfsd', '20150813001344.jpg'),
(43, 2, 'fasafafaf', '20150813001351.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `haberler`
--

CREATE TABLE IF NOT EXISTS `haberler` (
`id` int(11) NOT NULL,
  `haber_baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `resimYolu` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `haberler`
--

INSERT INTO `haberler` (`id`, `haber_baslik`, `detay`, `resimYolu`, `durum`, `tarih`) VALUES
(1, 'cvbdfgdfd', '<p>cvbcvbcv</p>\r\n', 'deser_wxeqRKwjOFyN.jpg', 1, '2015-08-20 17:08:55');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `icerikler`
--

INSERT INTO `icerikler` (`id`, `baslik`, `kisa_aciklama`, `detay`, `tarih`) VALUES
(1, 'asdas', 'das', '<p>dasda</p>\r\n', '2015-08-20 16:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
`id` int(11) NOT NULL,
  `ust_id` int(11) NOT NULL COMMENT '0 ise ana kategori',
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `ust_id`, `baslik`) VALUES
(58, 0, 'araba'),
(59, 0, 'telefon'),
(60, 0, 'bilgisayar'),
(61, 0, 'beyaz eşya'),
(62, 58, 'ticari'),
(63, 58, 'jeep'),
(64, 58, 'hususi'),
(65, 59, 'iphone'),
(66, 59, 'samsung'),
(67, 59, 'sony'),
(68, 60, 'toshiba'),
(69, 60, 'dell'),
(70, 61, 'bosch'),
(71, 61, 'lg'),
(72, 65, 'iphone6'),
(73, 59, 'iphone5'),
(75, 72, 'iphone6+');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adi`, `soyadi`, `mail`, `sifre`, `durum`, `tarih`) VALUES
(1, 'Anıl', 'Uçar', 'a@a.com', '12345', 1, '2015-08-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `linkler`
--

CREATE TABLE IF NOT EXISTS `linkler` (
`id` int(11) NOT NULL,
  `site_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `site_adresi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `linkler`
--

INSERT INTO `linkler` (`id`, `site_adi`, `site_adresi`) VALUES
(6, 'aaaa', 'rrr44lklkl'),
(7, 'ali', 'www.ali.com');

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
-- Table structure for table `sepet`
--

CREATE TABLE IF NOT EXISTS `sepet` (
`siparis_ref` int(11) NOT NULL,
  `kul_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sepet`
--

INSERT INTO `sepet` (`siparis_ref`, `kul_id`, `urun_id`, `tarih`) VALUES
(1, 1, 1, '2015-08-15 00:00:00'),
(2, 3, 4, '2015-08-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `siparisler`
--

CREATE TABLE IF NOT EXISTS `siparisler` (
`sip_id` int(11) NOT NULL,
  `ref_no` int(11) NOT NULL,
  `musteri` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'onay bekliyor',
  `ekleme_tarihi` datetime NOT NULL,
  `toplam` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `siparisler`
--

INSERT INTO `siparisler` (`sip_id`, `ref_no`, `musteri`, `durum`, `ekleme_tarihi`, `toplam`) VALUES
(1, 1, 'aa', '0', '2015-08-15 00:00:00', 1111),
(2, 2, '3', 'onay bekliyor', '2015-08-22 00:00:00', 22);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sosyalmedya`
--

CREATE TABLE IF NOT EXISTS `sosyalmedya` (
`id` int(11) NOT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `googleplus` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sosyalmedya`
--

INSERT INTO `sosyalmedya` (`id`, `facebook`, `twitter`, `linkedin`, `googleplus`, `instagram`) VALUES
(1, 'fatma', 'sad', 'fcg', 'dfddf', 'ddd');

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
  `kampanya` tinyint(1) NOT NULL COMMENT '0 ise kampanyas?z, 1 ise kampanyal?',
  `piyasa_fiyati` decimal(6,2) NOT NULL,
  `durum` tinyint(1) NOT NULL COMMENT '0 ise aktif, 1 ise pasif',
  `stok` smallint(4) NOT NULL,
  `one_cikan` tinyint(1) NOT NULL,
  `indirimli_urun` tinyint(1) NOT NULL,
  `cok_satan` tinyint(1) NOT NULL,
  `kargo_bedava` tinyint(1) NOT NULL,
  `bugun_teslimat` tinyint(1) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`id`, `kategori_id`, `baslik`, `kisa_aciklama`, `aciklama`, `fiyat`, `kampanya`, `piyasa_fiyati`, `durum`, `stok`, `one_cikan`, `indirimli_urun`, `cok_satan`, `kargo_bedava`, `bugun_teslimat`, `tarih`) VALUES
(1, 2, 'Samsung Es 5', 'Felaket guzel bir telefon', '                    MUKEMMEL Otesi bir telefon orneği\r\n        \r\n        ', '1200.00', 0, '1500.00', 0, 10, 1, 1, 1, 1, 1, '2015-08-16 08:31:23'),
(2, 3, 'Fatihin Lambası', 'Muthis Lamba', 'Muthis bir lamba', '12.00', 0, '1500.00', 0, 15, 1, 0, 1, 0, 1, '2015-08-28 08:41:00'),
(3, 1, 'Emrenin Mouseu', 'Mukemmel bir mouse', '          Ele tam oturan ergonomik fanlı mouse\r\n        ', '1500.00', 0, '1600.00', 0, 12, 1, 1, 1, 1, 1, '2015-08-27 08:28:00'),
(5, 2, '123', '4213', 'sdfsd', '9999.99', 1, '2145.00', 0, 21, 0, 1, 1, 0, 0, '2015-08-20 15:41:00');

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
-- Table structure for table `urun_resimleri`
--

CREATE TABLE IF NOT EXISTS `urun_resimleri` (
`id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adi` varchar(500) COLLATE utf8_bin NOT NULL,
  `klasor` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `urun_resimleri`
--

INSERT INTO `urun_resimleri` (`id`, `urun_id`, `adi`, `klasor`) VALUES
(16, 1, '1_6333615Jellyfish.jpg', '1'),
(18, 1, '1_8005220Hydrangeas.jpg', '1'),
(24, 5, '5_16080288Chrysanthemum.jpg', '5'),
(25, 5, '5_9783258Desert.jpg', '5');

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
-- Indexes for table `anket`
--
ALTER TABLE `anket`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anketdetay`
--
ALTER TABLE `anketdetay`
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
-- Indexes for table `bulten`
--
ALTER TABLE `bulten`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulten_abone`
--
ALTER TABLE `bulten_abone`
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
-- Indexes for table `haberler`
--
ALTER TABLE `haberler`
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
-- Indexes for table `linkler`
--
ALTER TABLE `linkler`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesajlar`
--
ALTER TABLE `mesajlar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepet`
--
ALTER TABLE `sepet`
 ADD PRIMARY KEY (`siparis_ref`);

--
-- Indexes for table `siparisler`
--
ALTER TABLE `siparisler`
 ADD PRIMARY KEY (`sip_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
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
-- Indexes for table `urun_resimleri`
--
ALTER TABLE `urun_resimleri`
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
-- AUTO_INCREMENT for table `anket`
--
ALTER TABLE `anket`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anketdetay`
--
ALTER TABLE `anketdetay`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ayarlar`
--
ALTER TABLE `ayarlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `bulten`
--
ALTER TABLE `bulten`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bulten_abone`
--
ALTER TABLE `bulten_abone`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dosya_yonetimi`
--
ALTER TABLE `dosya_yonetimi`
MODIFY `id` int(7) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gal_kategori`
--
ALTER TABLE `gal_kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `gal_resim`
--
ALTER TABLE `gal_resim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `haberler`
--
ALTER TABLE `haberler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `icerikler`
--
ALTER TABLE `icerikler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `linkler`
--
ALTER TABLE `linkler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mesajlar`
--
ALTER TABLE `mesajlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sepet`
--
ALTER TABLE `sepet`
MODIFY `siparis_ref` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siparisler`
--
ALTER TABLE `siparisler`
MODIFY `sip_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `urun_puan`
--
ALTER TABLE `urun_puan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urun_resimleri`
--
ALTER TABLE `urun_resimleri`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
