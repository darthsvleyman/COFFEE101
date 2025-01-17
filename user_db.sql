-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2025, 19:39:41
-- Sunucu sürümü: 9.1.0
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `user_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userdata`
--

CREATE TABLE `userdata` (
  `id` int NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_tr_0900_as_cs NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_tr_0900_as_cs NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_tr_0900_as_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_tr_0900_as_cs;

--
-- Tablo döküm verisi `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `email`, `password`) VALUES
(1, 'suleymank', 'suleymank@gmail.com', 'sifre123'),
(2, 'yasinz', 'yasinz@gmail.com', 'sifre456'),
(3, 'eget', 'eget@gmail.com', 'sifre789');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_tr_0900_as_cs NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_tr_0900_as_cs NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_tr_0900_as_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_tr_0900_as_cs;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
