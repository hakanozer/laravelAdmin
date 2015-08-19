-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Ağu 2015, 15:29:41
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
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesajlar` (
`id` int(11) NOT NULL,
  `gonderen_id` int(11) DEFAULT NULL,
  `alici_id` int(11) DEFAULT NULL,
  `mesaj` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` tinyint(1) DEFAULT '0' COMMENT '0 ise okunmadı, 1 ise okundu',
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `gonderen_id`, `alici_id`, `mesaj`, `durum`, `tarih`) VALUES
(1, 1, 2, 'merhaba', 1, '2015-08-06 07:17:26'),
(2, 2, 1, 'sanada merhaba', 1, '2015-08-06 07:10:26'),
(3, 2, 1, 'nasılsın', 1, '2015-08-06 03:35:51'),
(21, 1, 2, 'nasılsın', 1, '2015-08-07 14:15:34'),
(25, 1, 1, 'reee', 1, '2015-08-07 17:47:10'),
(37, 1, 2, 'ttttttttttttttttttttttttttttttttttttttttttttttttttttttt', 1, '2015-08-13 16:13:15');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
