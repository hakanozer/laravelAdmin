-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Ağu 2015, 13:40:38
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
  `baslangic_tarih` datetime DEFAULT NULL,
  `bitis_tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`id`, `ad`, `konum`, `yukseklik`, `genislik`, `yol`, `url`, `tiklanma`, `gosterim`, `baslangic_tarih`, `bitis_tarih`) VALUES
(2, 'ahmet', 0, 200, 200, '20150807151847_b.jpg', 'https://www.google.com.tr/', 0, 0, '2015-08-08 01:00:00', '2015-08-14 01:00:00'),
(3, 'ahmet', 0, 200, 200, '20150807151903_b.jpg', 'https://www.google.com.tr/', 0, 0, '2015-08-08 01:00:00', '2015-08-14 01:00:00'),
(31, 'ahmet', 0, 100, 200, 'resimler/20150807190235_b.jpg', 'www.fatihgoktas.net', 0, 0, '2015-08-09 04:07:00', '2015-08-08 07:05:00');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
