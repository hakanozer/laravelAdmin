-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ağu 2015, 16:36:19
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
-- Tablo için tablo yapısı `bulten`
--

CREATE TABLE IF NOT EXISTS `bulten` (
`id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `metin` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bulten`
--

INSERT INTO `bulten` (`id`, `baslik`, `metin`, `tarih`) VALUES
(1, 'Emre''nin 101 Günü', 'Emre Çok efendi bir insandı. Çikolatasını çok severdi.', '2015-08-20 17:30:02');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bulten`
--
ALTER TABLE `bulten`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bulten`
--
ALTER TABLE `bulten`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
