-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 09 Oca 2014, 11:52:01
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `sinema`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `film_detay`
--

CREATE TABLE IF NOT EXISTS `film_detay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `puan` int(3) NOT NULL,
  `sure` int(3) NOT NULL,
  `tur` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `yonetmen` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `oyuncu` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `video` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `durum` text COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `film_detay`
--

INSERT INTO `film_detay` (`id`, `isim`, `puan`, `sure`, `tur`, `yonetmen`, `oyuncu`, `resim`, `video`, `tarih`, `durum`) VALUES
(1, 'Baba (The Godfahter)', 89, 175, 'Dram, Suç', 'Francis Ford Coppola', 'Al Pacino ,  Marlon Brando ,  Diane Keaton ,  Robert Duvall ,  James Caan', 'Baba.jpg', 'Baba.MP4', '19 Ekim 1973', 'vizyonda'),
(2, 'Başlangıç (Inception)', 90, 148, 'Bilim Kurgu ,  Aksiyon', 'Christopher Nolan,  Chon Kye-Young', 'Leonardo DiCaprio ,  Marion Cotillard ,  Joseph Gordon-Levitt ,  Ellen Page ,  Michael Caine', 'Başlangıç.jpg', 'Başlangıç.MP4', '30 Temmuz 2010', 'vizyonda'),
(3, 'Dövüş Kulübü (Fight Club)', 89, 139, 'Dram', 'David Fincher', 'Brad Pitt ,  Edward Norton ,  Helena Bonham Carter ,  Meat Loaf ,  Jared Leto', 'Dövüş Kulübü.jpg', 'Dövüş Kulübü.MP4', '10 Aralık 1999', 'yakinda'),
(4, 'Kara Şövalye (Dark Knight)', 91, 152, 'Aksiyon ,  Dram ,  Suç', 'Christopher Nolan', 'Morgan Freeman ,  Christian Bale ,  Heath Ledger ,  Michael Caine ,  Aaron Eckhart', 'Kara Şövalye.jpg', 'Kara Şövalye.MP4', '25 Temmuz 2008', 'vizyonda'),
(5, 'Matrix', 87, 136, 'Bilim Kurgu ,  Aksiyon ,  Macera', 'Andy-Lana Wachowski', 'Keanu Reeves ,  Hugo Weaving ,  Laurence Fishburne ,  Carrie-Anne Moss ,  Joe Pantoliano', 'Matrix.jpg', 'Matrix.MP4', '03 Eylül 1999', 'yakinda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
