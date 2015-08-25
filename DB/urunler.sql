-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ağu 2015, 16:08:40
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
-- Tablo için tablo yapısı `urunler`
--
DROP TABLE `urunler`;

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
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `kategori_id`, `baslik`, `kisa_aciklama`, `aciklama`, `fiyat`, `kampanya`, `piyasa_fiyati`, `durum`, `stok`, `one_cikan`, `indirimli_urun`, `cok_satan`, `kargo_bedava`, `bugun_teslimat`, `tarih`) VALUES
(1, 2, 'Samsung Es 5', 'Felaket guzel bir telefon', '                    MUKEMMEL Otesi bir telefon orneği\r\n        \r\n        ', '1200.00', 0, '1500.00', 0, 10, 1, 1, 1, 1, 1, '2015-08-16 08:31:23'),
(2, 3, 'Fatihin Lambası', 'Muthis Lamba', 'Muthis bir lamba', '12.00', 0, '1500.00', 0, 15, 1, 0, 1, 0, 1, '2015-08-28 08:41:00'),
(3, 1, 'Emrenin Mouseu', 'Mukemmel bir mouse', '          Ele tam oturan ergonomik fanlı mouse\r\n        ', '1500.00', 0, '1600.00', 0, 12, 1, 1, 1, 1, 1, '2015-08-27 08:28:00'),
(5, 2, '123', '4213', 'sdfsd', '9999.99', 1, '2145.00', 0, 21, 0, 1, 1, 0, 0, '2015-08-20 15:41:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
