-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Şub 2020, 08:20:32
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
-- Tablo için tablo yapısı `contract`
--

CREATE TABLE `contract` (
  `c_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `contract`
--

INSERT INTO `contract` (`c_id`, `content`) VALUES
(1, 'Kayıt olan her kullanıcı bu sözleşmeyi kabul etmiş sayılır.'),
(2, 'Alınan kişisel bilgiler, izinli devlet kurumları haricinde 3. şahıslar ile paylaşımı yapılmaz.'),
(3, 'Sitemizde satılan ürünlerin dijital ve kopyalanabilir olması durumuna karşın,\r\nyapacağınız ödeme ve satın alımlardan sonra geri ödeme gibi bir durum söz konusu değildir.'),
(4, 'Hesap güvenliğiniz tamamıyla size aittir, herhangi bir sorun çıkması durumunda iletişim bilgileri haricinde herhangi başka bir adresten iletişime geçilemez.'),
(5, 'Sahte mail adresleri, aşağılayıcı ve yasaklı kullanıcı isimlerine sahip kullanıcılar farkedildikleri anda uzaklaştırılırlar, hesaplarına bloke koyulur.'),
(6, 'Bakiye yükledikten sonra tekrar nakite çevirme ve geri ödemesi yapılamaz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `content` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `date`) VALUES
(1, 'Sitemiz Açıldı', 'Sitemiz açıldı. Sitemizi kullanmak çok basit! Tek yapmanız gereken kayıt olmak ve tüm ayrıcalıklardan faydalanmak. Lütfen kayıt olurken bilgilerinizi eksiksiz ve doğru bir biçimde giriniz. Sorun oluşması durumunda yardımcı olabilmemiz için destek sistemini kullanınız. Ayrıca Discord adreslerimiz üzerinden de destek alabilirsiniz.\r\n\r\n\r\nMegalow Teknoloji.', '2020-01-28'),
(3, 'BasicTeamWars Yayında!', 'Sevgili OyuncuBilgisi takipçileri,\r\nçok beklediğiniz harika özelliklere sahip takım savaşları eklentisi yayında!\r\n\r\nBETA sürümünde eklentiden faydalanmak için market üzerinde satın alabilirsiniz.', '2020-01-29'),
(4, 'asdsad', 'asdsadasd', '2020-01-28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

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
  `name_surname` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `telephone` bigint(11) NOT NULL,
  `username` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `e_mail` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `born_date` date NOT NULL,
  `register_date` date NOT NULL,
  `balance` int(11) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `name_surname`, `telephone`, `username`, `password`, `gender`, `e_mail`, `born_date`, `register_date`, `balance`, `permission`) VALUES
(1, 'Yusuf Serhat Özgen', 5342048114, 'SpeedyG1481', 'e7543b108c9167a92fe8735cdc4c046d', 1, 'ozgen_3032@hotmail.com', '2000-05-09', '2020-01-27', 1500055, 1),
(5, 'asdasd', 2147483647, 'asd46asd46', '27dfcb0f58d594549bffedb6cddbb0d4', 0, 'a546sd65as4d6a', '2000-05-05', '0000-00-00', 0, 0),
(6, 'Yusuf Serhat Özgen', 5342048113, 'SpeedyG148', '5c3aec1119827ba8fb0cea50ce57fd62', 1, 'asd123321', '2000-05-09', '0000-00-00', 0, 0),
(7, 'asdsa', 5342565465, 'sadasdas', '1f8a0049b5f512826e1ac0e707a1adc4', 0, 'asdasdasdasd', '0555-05-05', '2020-01-31', 0, 0);

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
(3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_products`
--

CREATE TABLE `user_products` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

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
-- Tablo için indeksler `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `content` (`content`) USING HASH;

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

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
-- Tablo için indeksler `user_products`
--
ALTER TABLE `user_products`
  ADD PRIMARY KEY (`product_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contract`
--
ALTER TABLE `contract`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

--
-- Tablo kısıtlamaları `user_products`
--
ALTER TABLE `user_products`
  ADD CONSTRAINT `user_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_products_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
