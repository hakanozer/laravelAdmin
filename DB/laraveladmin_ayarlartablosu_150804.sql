-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Ağu 2015, 18:04:20
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
-- Tablo için tablo yapısı `ayarlar`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_baslik`, `meta_key`, `meta_desc`, `domain_name`, `smtp_adres`, `smtp_kul_adi`, `smtp_sifre`, `long`, `lat`, `mail_adres`, `telefon`, `fax`, `gsm`, `adres`) VALUES
(1, 'Laravel Admin Paneli', 'Laravel,admin,template,panel,wissen', 'Muhtesem bir admin paneli', 'ornekdomain.com', 'smtp.ornekdomain.com', 'ornek', 'ornek123', '29.0069081419158', '41.04389113879316', 'info@ornekdomain.com', '+902129896598', '02129876532', '05369886532', 'Ornek Mah, Ornek Caddesi 6/20');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
