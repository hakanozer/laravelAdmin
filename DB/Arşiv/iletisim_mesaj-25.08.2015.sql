-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Ağu 2015, 16:26:08
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
-- Tablo için tablo yapısı `iletisim_mesaj`
--

CREATE TABLE IF NOT EXISTS `iletisim_mesaj` (
`id` int(11) NOT NULL,
  `baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `referans_no` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim_mesaj`
--

INSERT INTO `iletisim_mesaj` (`id`, `baslik`, `mail`, `referans_no`, `mesaj`, `tarih`) VALUES
(1, 'Müşteri Servisi', 'sdad', 'adsdsa', '', '2015-08-25 17:14:10'),
(2, 'Müşteri Servisi', 'sdsdsd', 'sdsdsd', '', '2015-08-25 17:14:18'),
(3, 'Webmaster', 'xzcczxc', 'xzcxcz', '', '2015-08-25 17:15:59'),
(4, 'Webmaster', 'cxzxcxcz', 'xzcxczxc', 'cxzczxcxzc xzcxzc', '2015-08-25 17:16:52');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim_mesaj`
--
ALTER TABLE `iletisim_mesaj`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `iletisim_mesaj`
--
ALTER TABLE `iletisim_mesaj`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
