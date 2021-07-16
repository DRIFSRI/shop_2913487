-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 16 2021 г., 17:56
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_2913487`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(4) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `count`, `category_id`) VALUES
(1, 'Сумка для спорта и путешествий ErichKrause 44734 21 L Hot Wheels Faster', '1249.00', 'https://rascheska.ru/upload/resize_cache/iblock/233/450_450_140cd750bba9870f18aada2478b24840a/2331a70796e75eea7cd44a04c08b2ff0.jpg', 0, NULL),
(2, 'Сумка для спорта и путешествий ErichKrause 44693 21 L California', '1085.00', 'https://rascheska.ru/upload/resize_cache/iblock/fed/450_450_140cd750bba9870f18aada2478b24840a/fed1ddd207d856c4be802d67e3b14898.jpg', 3, NULL),
(3, 'Татуировки переводные Ellis Cosmetic EC TM 60205', '15.00', 'https://rascheska.ru/upload/iblock/4d9/4d90fcad954c7d1d707e0dc31c3e7536.jpg', 11, NULL),
(4, 'Зеркало компактное Weisen S513-3', '250.00', 'https://rascheska.ru/upload/resize_cache/iblock/85f/450_450_140cd750bba9870f18aada2478b24840a/85f669fd7166b5460d65989527e3c8dd.jpg', 11, NULL),
(5, 'Зеркало компактное Weisen NR621-5', '280.00', 'https://rascheska.ru/upload/resize_cache/iblock/bee/450_450_140cd750bba9870f18aada2478b24840a/bee981cc95620a367dab7a8a12f2e3eb.jpg', 15, NULL),
(16, 'Расческа Tangle Teezer Compact Styler Paradise Bird 2261', '1490.00', 'https://rascheska.ru/upload/resize_cache/iblock/6c2/450_450_140cd750bba9870f18aada2478b24840a/6c21d6b032fd3fe89f71460f33c261f1.jpg', 4, 3),
(17, 'Расческа Tangle Teezer Compact Styler Digital Leopard 2257', '1490.00', 'https://rascheska.ru/upload/resize_cache/iblock/119/450_450_140cd750bba9870f18aada2478b24840a/119d8fec5e0d4deadf53a2e8c1b713ef.jpg', 4, 3),
(18, 'Фен-плойка harizma h10219 Glory', '2525.00', 'https://rascheska.ru/upload/resize_cache/iblock/dc2/450_450_140cd750bba9870f18aada2478b24840a/dc2b384b72b0d5a82c1f6ea4d981e2d6.jpg', 3, 5),
(19, 'Фен-плойка harizma Curl&Volume lonic h10213 800 Вт', '2211.00', 'https://rascheska.ru/upload/resize_cache/iblock/741/450_450_140cd750bba9870f18aada2478b24840a/7414ab90e458f57a7a11d01ac5014414.jpg', 4, 3),
(20, 'Пенал квадро mini ErichKrause The Champions 44928, 210 x 50 x 50 мм\r\n', '184.00', 'https://rascheska.ru/upload/resize_cache/iblock/d4f/450_450_140cd750bba9870f18aada2478b24840a/d4f9b08a33c884ff95e4c894f976ea82.jpg', 4, 3),
(21, 'Мешок для обуви ErichKrause 44664, White Horse\r\n', '395.00', 'https://rascheska.ru/upload/resize_cache/iblock/edd/450_450_140cd750bba9870f18aada2478b24840a/edd44d88fcb396322615f9923d71984a.jpg', 4, 3),
(22, 'Фартук-накидка ErichKrause 37028 для детского творчества', '332.00', 'https://rascheska.ru/upload/resize_cache/iblock/081/450_450_140cd750bba9870f18aada2478b24840a/08114bc680a7888ee1530f31ed6fc4e0.jpg', 4, 3),
(23, 'Расческа Tangle Teezer The Wet Detangler Apricot Blaze 2251', '1190.00', 'https://rascheska.ru/upload/resize_cache/iblock/ad0/450_450_140cd750bba9870f18aada2478b24840a/ad0fab9b2d9dd9d1a011831be3c5fda7.jpg', 4, 3),
(24, 'Машинка для стрижки волос harizma Advance h10109L', '3900.00', 'https://rascheska.ru/upload/resize_cache/iblock/89f/450_450_140cd750bba9870f18aada2478b24840a/89fe89248751937da85b7d019c6ce2b8.jpg', 4, 3),
(25, 'Плойка Dewal ILLUSION 03-2717, 45 Вт', '2690.00', 'https://rascheska.ru/upload/resize_cache/iblock/22f/450_450_140cd750bba9870f18aada2478b24840a/22f2272f2b77d1fdc2af4f3fd4c2457b.jpg', 4, 3),
(26, 'Резинка-браслет для волос invisibobble SPRUNCHIE Hola Loia 3223\r\n', '990.00', 'https://rascheska.ru/upload/resize_cache/iblock/648/450_450_140cd750bba9870f18aada2478b24840a/648f8edb354fa0bdbbf09e226b67ddf2.jpg', 4, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-product-category_id` (`category_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk-products-category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
