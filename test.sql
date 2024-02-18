-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2024 г., 12:22
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_obz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kislot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorech` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `type_obz`, `kislot`, `gorech`, `poln`, `cost`, `img`) VALUES
(1, '\r\nМилк Бленд', 'Эспрессо', 'img/1.png', 'img/3.png', 'img/3.png', 490, 'img/milk_blend.jpg'),
(2, 'Ирландский крем', 'Под фильтр', 'img/2.png', 'img/3.png', 'img/5.png', 470, 'img/irlandskiy_krem.jpg'),
(3, '\r\nОскар', 'Эспрессо', 'img/1.png', 'img/5.png', 'img/5.png', 970, 'img/milk_blend.jpg'),
(4, 'Премиум', 'Эспрессо', 'img/3.png', 'img/5.png', 'img/5.png', 530, 'img/milk_blend.jpg'),
(5, 'Вьетнам Далат', 'Под фильтр', 'img/2.png', 'img/3.png', 'img/3.png', 570, 'img/irlandskiy_krem.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
