-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ağu 2015, 17:34:45
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
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `adi` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisa_aciklama` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `adi`, `yol`, `baslik`, `kisa_aciklama`, `url`, `tarih`) VALUES
(40, 'Slider - 1', 'slider_lRHzfWsLlf8m.png', 'Slider - 1', 'Slider - 1', 'http://www.mynet.com/', '2015-08-20 17:20:27'),
(41, 'Slider - 2', 'slider_zsjdtTGE9lUm.png', 'Slider - 2', 'Slider - 2', 'http://www.haber7.com/', '2015-08-20 17:20:52'),
(42, 'Slider - 3', 'slider_GzX2MUWwnk3r.png', 'Slider - 3', 'Slider - 3', 'http://www.haberler.com/', '2015-08-20 17:21:15');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
