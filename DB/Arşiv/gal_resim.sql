-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Ağu 2015, 15:56:39
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
-- Tablo için tablo yapısı `gal_resim`
--

CREATE TABLE IF NOT EXISTS `gal_resim` (
`id` int(11) NOT NULL,
  `gal_kat_id` int(11) DEFAULT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gal_resim`
--

INSERT INTO `gal_resim` (`id`, `gal_kat_id`, `baslik`, `yol`) VALUES
(35, 1, 'sdfsdfsf', '20150812111256.jpg'),
(36, 1, 'sfsdfsfsfdsf', '20150812111303.jpg'),
(42, 2, 'fadfsdfsd', '20150813001344.jpg'),
(43, 2, 'fasafafaf', '20150813001351.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gal_resim`
--
ALTER TABLE `gal_resim`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gal_resim`
--
ALTER TABLE `gal_resim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
