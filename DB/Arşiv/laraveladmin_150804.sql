-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Ağu 2015, 14:08:53
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
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `kul_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `kul_adi`, `sifre`, `adi`, `soyadi`, `mail`, `durum`, `tarih`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Ali', 'Bilmem', 'ali@mail.com', 0, '2015-07-16 10:12:39');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`id` int(11) NOT NULL,
  `konum` tinyint(2) DEFAULT NULL,
  `yukseklik` int(4) DEFAULT NULL,
  `genislik` int(4) DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tiklanma` int(10) DEFAULT NULL,
  `gosterim` int(10) DEFAULT NULL,
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gal_kategori`
--

CREATE TABLE IF NOT EXISTS `gal_kategori` (
`id` int(11) NOT NULL,
  `ust_kat_id` int(11) DEFAULT NULL COMMENT '0 ise üst kategori',
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gal_resim`
--

CREATE TABLE IF NOT EXISTS `gal_resim` (
`id` int(11) NOT NULL,
  `gal_kat_id` int(11) DEFAULT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE IF NOT EXISTS `icerikler` (
`id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisa_aciklama` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detay` varchar(5000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
`id` int(11) NOT NULL,
  `ust_id` int(11) NOT NULL COMMENT '0 ise ana kategori',
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
`id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL COMMENT '0 ise aktif, 1 ise pasif',
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adi`, `soyadi`, `mail`, `sifre`, `durum`, `tarih`) VALUES
(1, 'ali', 'bilmem', 'ali@ali.com', '12345', 1, '0000-00-00 00:00:00'),
(2, 'selin', 'bil', 'selin@selin.com', '1244', 1, '2015-08-17 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesajlar` (
`id` int(11) NOT NULL,
  `gonderen_id` int(11) DEFAULT NULL,
  `alici_id` int(11) DEFAULT NULL,
  `mesaj` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` tinyint(1) DEFAULT NULL COMMENT '0 ise okunmadı, 1 ise okundu',
  `tarih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE IF NOT EXISTS `resimler` (
`id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `yol` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
`id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kisa_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` decimal(6,2) NOT NULL,
  `kampanya` tinyint(1) NOT NULL COMMENT '0 ise kampanyasız, 1 ise kampanyalı',
  `piyasa_fiyati` decimal(6,2) NOT NULL,
  `durum` tinyint(1) NOT NULL COMMENT '0 ise aktif, 1 ise pasif',
  `stok` smallint(4) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `kategori_id`, `baslik`, `kisa_aciklama`, `aciklama`, `fiyat`, `kampanya`, `piyasa_fiyati`, `durum`, `stok`, `tarih`) VALUES
(1, 0, 'telefon', '', '', '0.00', 0, '0.00', 0, 0, '0000-00-00 00:00:00'),
(2, 0, 'laptop', '', '', '0.00', 0, '0.00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_puan`
--

CREATE TABLE IF NOT EXISTS `urun_puan` (
`id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `puan` tinyint(1) NOT NULL COMMENT '1 ile 5 arasında değer alınacaktır.',
  `ip_no` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
`id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `kul_id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `puan` tinyint(1) NOT NULL,
  `durum` tinyint(1) NOT NULL COMMENT '0 ise aktif, 1 ise pasif',
  `tarih` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `urun_id`, `kul_id`, `baslik`, `icerik`, `puan`, `durum`, `tarih`) VALUES
(7, 2, 2, 'dnm', 'dnmdndm', 3, 0, '2015-08-07 10:17:20'),
(8, 2, 2, 'deneme ', 'deneme2 deneme', 1, 0, '2015-08-04 15:12:00'),
(9, 2, 1, 'deneme ', 'denemedenemedeneme', 3, 0, '2015-08-04 16:25:30'),
(10, 1, 1, 'ürün cok guzel', 'urun cok ıyı', 5, 0, '2015-08-04 16:51:43');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gal_kategori`
--
ALTER TABLE `gal_kategori`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gal_resim`
--
ALTER TABLE `gal_resim`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icerikler`
--
ALTER TABLE `icerikler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_puan`
--
ALTER TABLE `urun_puan`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `gal_kategori`
--
ALTER TABLE `gal_kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `gal_resim`
--
ALTER TABLE `gal_resim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `icerikler`
--
ALTER TABLE `icerikler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `urun_puan`
--
ALTER TABLE `urun_puan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
