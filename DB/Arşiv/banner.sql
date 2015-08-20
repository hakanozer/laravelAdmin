-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ağu 2015, 16:59:13
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `laraveladmin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`id`, `ad`, `konum`, `yukseklik`, `genislik`, `yol`, `url`, `tiklanma`, `gosterim`, `durum`, `baslangic_tarih`, `bitis_tarih`) VALUES
(33, 'ishak', 0, 300, 300, '20150820175544_b.jpg', 'http://www.google.com', 0, 0, 127, '2018-02-07 02:02:00', '0000-00-00 00:00:00'),
(34, 'ahmet', 0, 300, 300, '20150820175624_b.jpg', 'http://www.google.com', 0, 0, 127, '2017-03-02 23:02:00', '0000-00-00 00:00:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
