-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 15 2021 г., 17:37
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
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '4', 100000);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1626184812, 1626184812),
('avoidProduct', 2, 'avoid a Product', NULL, NULL, 1626184813, 1626184813),
('banned', 1, NULL, NULL, NULL, 1626184812, 1626184812),
('banUser', 2, 'ban a User', NULL, NULL, 1626184812, 1626184812),
('createBasket', 2, 'create a Basket', NULL, NULL, 1626184813, 1626184813),
('createCategory', 2, 'create a Category', NULL, NULL, 1626184814, 1626184814),
('createOrder', 2, 'create a Order', NULL, NULL, 1626184813, 1626184813),
('createParameter', 2, 'create a Parameter', NULL, NULL, 1626184814, 1626184814),
('createProduct', 2, 'create a Product', NULL, NULL, 1626184812, 1626184812),
('createRbac', 2, 'create a Rbac', NULL, NULL, 1626184814, 1626184814),
('createUser', 2, 'create a User', NULL, NULL, 1626184812, 1626184812),
('deleteProduct', 2, 'delete a Product', NULL, NULL, 1626184812, 1626184812),
('indexBasket', 2, 'index a Basket', NULL, NULL, 1626184813, 1626184813),
('indexCategory', 2, 'index a Category', NULL, NULL, 1626184814, 1626184814),
('indexOrder', 2, 'index a Order', NULL, NULL, 1626184813, 1626184813),
('indexParameter', 2, 'index a Parameter', NULL, NULL, 1626184814, 1626184814),
('indexProduct', 2, 'index a Product', NULL, NULL, 1626184812, 1626184812),
('indexRbac', 2, 'index a Rbac', NULL, NULL, 1626184814, 1626184814),
('indexUser', 2, 'index a User', NULL, NULL, 1626184812, 1626184812),
('moderator', 1, NULL, NULL, NULL, 1626184812, 1626184812),
('operator', 1, NULL, NULL, NULL, 1626184812, 1626184812),
('publishedProduct', 2, 'published a Product', NULL, NULL, 1626184813, 1626184813),
('redactor', 1, NULL, NULL, NULL, 1626184812, 1626184812),
('show_historyBasket', 2, 'show_history a Basket', NULL, NULL, 1626184813, 1626184813),
('show_historyProduct', 2, 'show_history a Product', NULL, NULL, 1626184813, 1626184813),
('storekeeper', 1, NULL, NULL, NULL, 1626184812, 1626184812),
('unbanUser', 2, 'unban a User', NULL, NULL, 1626184812, 1626184812),
('updateBasket', 2, 'update a Basket', NULL, NULL, 1626184813, 1626184813),
('updateCategory', 2, 'update a Category', NULL, NULL, 1626184814, 1626184814),
('updateOrder', 2, 'update a Order', NULL, NULL, 1626184813, 1626184813),
('updateOwnOrder', 2, 'updateOwn a Order', NULL, NULL, 1626184813, 1626184813),
('updateOwnParameter', 2, 'updateOwn a Parameter', NULL, NULL, 1626184814, 1626184814),
('updateProduct', 2, 'update a Product', NULL, NULL, 1626184812, 1626184812),
('updateRbac', 2, 'update a Rbac', NULL, NULL, 1626184814, 1626184814),
('updateStatusOrder', 2, 'updateStatus a Order', NULL, NULL, 1626184813, 1626184813),
('user', 1, NULL, NULL, NULL, 1626184812, 1626184812),
('viewCategory', 2, 'view a Category', NULL, NULL, 1626184814, 1626184814),
('viewOrder', 2, 'view a Order', NULL, NULL, 1626184813, 1626184813),
('viewProduct', 2, 'view a Product', NULL, NULL, 1626184813, 1626184813),
('viewRbac', 2, 'view a Rbac', NULL, NULL, 1626184814, 1626184814),
('viewUser', 2, 'view a User', NULL, NULL, 1626184812, 1626184812),
('voidCategory', 2, 'void a Category', NULL, NULL, 1626184814, 1626184814);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'createBasket'),
('admin', 'createRbac'),
('admin', 'indexRbac'),
('admin', 'indexUser'),
('admin', 'moderator'),
('admin', 'updateRbac'),
('admin', 'viewRbac'),
('admin', 'viewUser'),
('banned', 'banUser'),
('banned', 'unbanUser'),
('moderator', 'operator'),
('moderator', 'redactor'),
('moderator', 'storekeeper'),
('moderator', 'updateOrder'),
('operator', 'createOrder'),
('operator', 'indexBasket'),
('operator', 'indexOrder'),
('operator', 'show_historyBasket'),
('operator', 'updateBasket'),
('operator', 'updateOwnOrder'),
('operator', 'updateStatusOrder'),
('operator', 'user'),
('operator', 'viewOrder'),
('redactor', 'createCategory'),
('redactor', 'createParameter'),
('redactor', 'indexCategory'),
('redactor', 'indexParameter'),
('redactor', 'updateCategory'),
('redactor', 'user'),
('redactor', 'viewCategory'),
('redactor', 'voidCategory'),
('storekeeper', 'avoidProduct'),
('storekeeper', 'createProduct'),
('storekeeper', 'deleteProduct'),
('storekeeper', 'indexProduct'),
('storekeeper', 'publishedProduct'),
('storekeeper', 'show_historyProduct'),
('storekeeper', 'updateProduct'),
('storekeeper', 'user'),
('storekeeper', 'viewProduct'),
('user', 'createUser'),
('user', 'updateOwnParameter');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `baskets`
--

CREATE TABLE `baskets` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `baskets`
--

INSERT INTO `baskets` (`id`, `user`) VALUES
(4, NULL),
(5, NULL),
(6, NULL),
(7, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `baskets_products`
--

CREATE TABLE `baskets_products` (
  `baskets_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `baskets_products`
--

INSERT INTO `baskets_products` (`baskets_id`, `products_id`, `count`) VALUES
(4, 3, 1),
(4, 4, 11),
(4, 5, 6),
(5, 2, 1),
(6, 3, 10),
(6, 4, 6),
(6, 5, 101),
(7, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Первичный', 1),
(2, 'Гарнитура', 1),
(3, 'Цветы', 1),
(4, 'Авто', 1),
(5, 'Одежда', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1614959432),
('m130524_201442_init', 1614959439),
('m140506_102106_rbac_init', 1623930876),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1623930876),
('m180523_151638_rbac_updates_indexes_without_prefix', 1623930876),
('m190124_110200_add_verification_token_column_to_user_table', 1614959439),
('m200409_110543_rbac_update_mssql_trigger', 1623930876),
('m210302_161525_create_products_table', 1614959440),
('m210303_170219_create_parametrs_table', 1614959440),
('m210303_170314_create_junction_table_for_product_and_parametrs_tables', 1614959443),
('m210303_170812_create_categories_table', 1614959443),
('m210304_162707_add_parent_id_column_to_categories_table', 1614959445),
('m210305_084001_add_category_id_column_to_product_table', 1614959446),
('m210305_154026_create_baskets_table', 1614959448),
('m210305_154141_create_junction_table_for_baskets_and_products_tables', 1614959451),
('m210315_065317_add_count_column_to_baskets_products_table', 1615791212);

-- --------------------------------------------------------

--
-- Структура таблицы `parametrs`
--

CREATE TABLE `parametrs` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `parametrs`
--

INSERT INTO `parametrs` (`id`, `name`) VALUES
(1, 'Цвет'),
(2, 'Размер');

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
(5, 'Зеркало компактное Weisen NR621-5', '280.00', 'https://rascheska.ru/upload/resize_cache/iblock/bee/450_450_140cd750bba9870f18aada2478b24840a/bee981cc95620a367dab7a8a12f2e3eb.jpg', 15, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products_parametrs`
--

CREATE TABLE `products_parametrs` (
  `products_id` int(11) NOT NULL,
  `parametrs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products_parametrs`
--

INSERT INTO `products_parametrs` (`products_id`, `parametrs_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(4, 'qwerty', 'STc3CAfReyCtlp2p-ztzRONXdq-4JDT2', '$2y$13$LYwsuAOtxR4yR5qoQTao0O2yz35OhHyV5bHQq9dOZ96VxPS9Lrs4C', NULL, 'ee@ee.ee', 10, 1615549501, 1615549501, '9YmmkBNGw9zH0nhnXYb9ll-iVg1q1J8Q_1615549501'),
(5, 'qwert', '4RjAIbaGDUXOpCuLtwBTVfP25KtmMeh5', '$2y$13$VBWktC2mdr08GL/tZfpJlu746UG70I.zqpapFCv3cPfbgn6b0xmum', NULL, 'ee@ee.ru', 10, 1623316918, 1623316918, 'WfWJCMpduKu1YPxEV-4f5e1X5mE4FgjG_1623316918'),
(6, 'qwertyuiop', 'OBPKYCwWpgzlufi3ZWItOMsM4K0bM19O', '$2y$13$9oyXLuVi4vJ84S7UYkRJsuMTIBvkxDNvkMBQMqoAVrbp/6z/56P7m', NULL, 'ru@ru.ru', 9, 1623317015, 1623317015, '5zbuTtH84Mz8sPyobsVWesURCD1mwXfT_1623317015'),
(7, 'qwer', 'v9zwhb8BFZeOBA5bvXMGKd6fdiJdexXm', 'qwerqwerqwer', NULL, 'e1e@ee.ee', 9, 1623319889, 1623319889, 'h3XtG7bZlXnPjS3JsKuQVVIaUloT9qi0_1623319889');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-baskets-user` (`user`);

--
-- Индексы таблицы `baskets_products`
--
ALTER TABLE `baskets_products`
  ADD PRIMARY KEY (`baskets_id`,`products_id`),
  ADD KEY `idx-baskets_products-baskets_id` (`baskets_id`),
  ADD KEY `idx-baskets_products-products_id` (`products_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-categories-parent_id` (`parent_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `parametrs`
--
ALTER TABLE `parametrs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-product-category_id` (`category_id`);

--
-- Индексы таблицы `products_parametrs`
--
ALTER TABLE `products_parametrs`
  ADD PRIMARY KEY (`products_id`,`parametrs_id`),
  ADD KEY `idx-products_parametrs-products_id` (`products_id`),
  ADD KEY `idx-products_parametrs-parametrs_id` (`parametrs_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `parametrs`
--
ALTER TABLE `parametrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `fk-baskets-user` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `baskets_products`
--
ALTER TABLE `baskets_products`
  ADD CONSTRAINT `fk-baskets_products-baskets_id` FOREIGN KEY (`baskets_id`) REFERENCES `baskets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-baskets_products-products_id` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk-categories-parent_id` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk-products-category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products_parametrs`
--
ALTER TABLE `products_parametrs`
  ADD CONSTRAINT `fk-products_parametr-products_id` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-products_parametrs-parametrs_id` FOREIGN KEY (`parametrs_id`) REFERENCES `parametrs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
