-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Oca 2020, 13:22:45
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `oyuncubilgisi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answer_tickets`
--

CREATE TABLE `answer_tickets` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `content` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `date` date NOT NULL,
  `background` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `date`, `background`) VALUES
(1, 'Sitemiz Açıldı', 'Sitemiz açıldı. Sitemizi kullanmak çok basit! Tek yapmanız gereken kayıt olmak ve tüm ayrıcalıklardan faydalanmak. Lütfen kayıt olurken bilgilerinizi eksiksiz ve doğru bir biçimde giriniz. Sorun oluşması durumunda yardımcı olabilmemiz için destek sistemini kullanınız. Ayrıca Discord adreslerimiz üzerinden de destek alabilirsiniz.\r\n\r\n\r\nMegalow Teknoloji.', '2020-01-28', 'https://images.pexels.com/photos/1939485/pexels-photo-1939485.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
(3, 'BasicTeamWars Yayında!', 'Sevgili OyuncuBilgisi takipçileri,\r\nçok beklediğiniz harika özelliklere sahip takım savaşları eklentisi yayında!\r\n\r\nBETA sürümünde eklentiden faydalanmak için market üzerinde satın alabilirsiniz.', '2020-01-29', 'https://images.pexels.com/photos/235994/pexels-photo-235994.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
(4, 'asdsad', 'asdsadasd', '2020-01-28', 'https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `content` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `e-mail` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `register_date` date NOT NULL,
  `balance` int(11) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `e-mail`, `register_date`, `balance`, `permission`) VALUES
(1, 'SpeedyG1481', 'asd123321', 'ozgen_3032@hotmail.com', '2020-01-27', 15000, 1),
(2, 'Deneme', 'a56s4d6sa5d4', 'asdasdasd', '2020-01-29', 45465465, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_news`
--

CREATE TABLE `user_news` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `user_news`
--

INSERT INTO `user_news` (`news_id`, `user_id`) VALUES
(1, 1),
(3, 1),
(4, 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `answer_tickets`
--
ALTER TABLE `answer_tickets`
  ADD PRIMARY KEY (`ticket_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Tablo için indeksler `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `user_news`
--
ALTER TABLE `user_news`
  ADD PRIMARY KEY (`news_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `answer_tickets`
--
ALTER TABLE `answer_tickets`
  ADD CONSTRAINT `answer_tickets_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`ticket_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_tickets_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `user_news`
--
ALTER TABLE `user_news`
  ADD CONSTRAINT `user_news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_news_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
