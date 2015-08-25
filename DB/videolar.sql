-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ağu 2015, 17:02:33
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
-- Tablo için tablo yapısı `videolar`
--

CREATE TABLE IF NOT EXISTS `videolar` (
`id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kisa_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videolar`
--

INSERT INTO `videolar` (`id`, `baslik`, `yol`, `kisa_aciklama`, `detay`, `tarih`) VALUES
(9, 'video', 'C:\\xampp\\htdocs\\laravelAdmin/bower_components/elfinder/files', 'vine', '<p>videolar dosya işlemlerinden y&uuml;klenecektir.</p>\r\n', '2015-08-22 13:10:05');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `videolar`
--
ALTER TABLE `videolar`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `videolar`
--
ALTER TABLE `videolar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
