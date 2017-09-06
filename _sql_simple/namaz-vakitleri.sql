-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Eyl 2017, 17:35:02
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `namaz-vakitleri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce`
--

CREATE TABLE `ilce` (
  `ilce_id` int(11) NOT NULL,
  `ilce_sehir` int(11) NOT NULL,
  `ilce_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehir`
--

CREATE TABLE `sehir` (
  `sehir_id` int(11) NOT NULL,
  `sehir_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vakitler`
--

CREATE TABLE `vakitler` (
  `vakit_id` int(11) NOT NULL,
  `vakit_sehir` int(11) NOT NULL,
  `vakit_ilce` int(11) NOT NULL,
  `vakit_gun` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vakit_imsak` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vakit_gunes` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vakit_ogle` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vakit_ikindi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vakit_aksam` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vakit_yatsi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vakit_kible` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ilce`
--
ALTER TABLE `ilce`
  ADD UNIQUE KEY `ilce_id` (`ilce_id`);

--
-- Tablo için indeksler `sehir`
--
ALTER TABLE `sehir`
  ADD UNIQUE KEY `sehir_id` (`sehir_id`);

--
-- Tablo için indeksler `vakitler`
--
ALTER TABLE `vakitler`
  ADD UNIQUE KEY `vakit_id` (`vakit_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ilce`
--
ALTER TABLE `ilce`
  MODIFY `ilce_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `sehir`
--
ALTER TABLE `sehir`
  MODIFY `sehir_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `vakitler`
--
ALTER TABLE `vakitler`
  MODIFY `vakit_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
