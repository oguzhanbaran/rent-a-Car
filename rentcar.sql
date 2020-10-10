-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Haz 2020, 22:53:16
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rentcar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac`
--

CREATE TABLE `arac` (
  `aracID` int(11) NOT NULL,
  `resimYolu` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracMarka` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracModel` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracYil` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracYakit` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracTur` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracKm` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracRenk` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracTutar` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracSahibi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracKonum` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `arac`
--

INSERT INTO `arac` (`aracID`, `resimYolu`, `aracMarka`, `aracModel`, `aracYil`, `aracYakit`, `aracTur`, `aracKm`, `aracRenk`, `aracTutar`, `aracSahibi`, `aracKonum`) VALUES
(19, 'ARAC/arac_5ef91ff739219.jpg', 'Peugot', '301', '2012', 'Dizel', 'Binek', '20.000', 'Beyaz', '100', 'kayhanbaran', 'Ankara'),
(20, 'ARAC/arac_5ef9203245f4a.jpg', 'BMW', '320', '2015', 'Benzin', 'Binek', '10.000', 'Mavi', '400', 'kayhanbaran', 'Ankara'),
(23, 'ARAC/arac_5ef93a2a52bd9.jpg', 'Citröen', 'C-Elysee', '2013', 'Dizel', 'Binek', '30.000', 'Beyaz', '120', 'kayhanbaran', 'Edirne'),
(24, 'ARAC/arac_5ef93a4a81633.jpg', 'Wolskvagen', 'Passat', '2015', 'Benzin', 'Binek', '5.000', 'Gri', '200', 'kayhanbaran', 'İstanbul'),
(25, 'ARAC/arac_5ef93a66dd065.jpg', 'Wolskvagen', 'Golf', '2014', 'Dizel', 'Binek', '10.000', 'Gri', '100', 'kayhanbaran', 'İzmir'),
(26, 'ARAC/arac_5ef9e2b95099a.jpg', 'Renault', 'Clio', '2018', 'Dizel', 'Binek', '15.000', 'Beyaz', '110', 'oguzhanbaran', 'Konya'),
(27, 'ARAC/arac_5ef9e2d563618.jpg', 'Audi', 'A3', '2006', 'LPG', 'Binek', '210.000', 'Gri', '80', 'oguzhanbaran', 'Konya'),
(28, 'ARAC/arac_5ef9e2f4552e3.jpg', 'Ford', 'Connect', '2019', 'Motorin', 'Ticari', '45.000', 'Gümüş', '130', 'oguzhanbaran', 'Ankara'),
(29, 'ARAC/arac_5ef9e30d861bd.jpg', 'Renault', 'Megane', '2018', 'Dizel', 'Binek', '15.000', 'Gri', '160', 'oguzhanbaran', 'Eskişehir'),
(30, 'ARAC/arac_5ef9e328e9537.jpg', 'Ford', 'Transit', '2005', 'LPG', 'Ticari', '320.000', 'Beyaz', '70', 'oguzhanbaran', 'Konya'),
(31, 'ARAC/arac_5efa3b1dd19d5.jpg', 'Fiat', 'Doblo', '2017', 'Dizel', 'Ticari', '20.000', 'Beyaz', '150', 'kayhanbaran', 'Ankara'),
(33, 'ARAC/arac_5efa47c814de9.jpg', 'Fiat', 'Egea', '2015', 'Dizel ', 'Binek', '10.000', 'Beyaz', '120', 'oguzhanbaran1', 'Balıkesir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `u_id` int(11) NOT NULL,
  `userName` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `userPass` int(30) NOT NULL,
  `tcNo` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `birthDate` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `authority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`u_id`, `userName`, `userPass`, `tcNo`, `birthDate`, `authority`) VALUES
(1, 'oguzhanbaran', 12345, '27658465890', '20.03.1996', 1),
(3, 'kayhanbaran', 12345, '11111111111', '2018-07-22', 2),
(4, 'oguzhanbaran1', 12345, '27658465890', '1996-03-20', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arac`
--
ALTER TABLE `arac`
  ADD PRIMARY KEY (`aracID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`u_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `arac`
--
ALTER TABLE `arac`
  MODIFY `aracID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
