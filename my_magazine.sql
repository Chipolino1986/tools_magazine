-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 27 2022 г., 15:32
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_magazine`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sector_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sector_id`) VALUES
(1, 'Садовый инструмент', 1),
(2, 'Электро-инструмент', 1),
(3, 'Аккумуляторный инструмент', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `made` text NOT NULL,
  `brandcountry` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `image_id`, `name`, `price`, `made`, `brandcountry`, `category_id`) VALUES
(1, 0, 'Газонокосилка Gardena', 25000, 'Болгария', 'Германия', 1),
(2, 0, 'Перфоратор Makita', 19000, 'Румыния', 'Япония', 2),
(6, 0, 'Шуруповёрт Metabo', 10300, 'Вьетнам', 'Германия', 3),
(7, 0, 'Бензопила STIHL', 17300, 'Малайзия ', 'Швейцария', 1),
(8, 0, 'Бензотриммер STIHL', 21500, 'Болгария', 'Швейцария', 1),
(9, 0, 'Бензовоздуходувка Champion', 9700, 'Китай', 'Россия', 1),
(10, 0, 'Мойка высокого давления Chempion', 8250, 'Китай', 'Россия', 1),
(11, 0, 'Бензотриммер Huter', 11300, 'Беларусь', 'Германия', 1),
(12, 0, 'Электродрель Bosch', 5270, 'Чехия', 'Германия', 2),
(13, 0, 'Электрорубанок Metabo', 7800, 'Вьетнам', 'Германия', 2),
(14, 0, 'Электролобзик ЗУБР', 3900, 'Китай', 'Россия', 2),
(15, 0, 'Сабельная пила Black&Decker', 5200, 'США', 'США', 2),
(16, 0, 'Монтажный фен Makita', 5300, 'Вьетнам', 'Япония', 2),
(19, 0, 'Аккумуляторный лобзик BOSCH', 14500, 'Польша', 'Германия', 3),
(20, 0, 'Безщёточная пила DeWalt', 11050, 'США', 'США', 3),
(21, 0, 'Аккумуляторная дисковая пила DeWalt', 25200, 'США', 'США', 3),
(22, 0, 'Ленточная аккумуляторная пила Makita', 12000, 'Польша', 'Япония', 3),
(23, 0, 'Аккумуляторная дрель-миксер Makita', 33000, 'Польша', 'Япония', 3),
(45, 0, 'Бензопила Huter', 7190, 'Китай', 'Германия', 1),
(69, 0, 'Бензопила Husqvarna 236', 13700, 'Швеция', 'Швейцария', 1),
(82, 0, 'Шлифмашина Makita BO 5030', 7420, 'Польша', 'Япония', 2),
(83, 0, 'УШМ Makita', 4700, 'Чехия', 'Япония', 2),
(84, 0, 'Циркулярная пила Makita DHS680Z', 32500, 'Малайзия', 'Япония', 3),
(85, 0, 'Перфоратор аккумуляторный MAKITA DHR242RFE', 40520, 'Малайзия', 'Япония', 3),
(86, 0, 'Рубанок Makita M1902', 7460, 'Румыния', 'Япония', 2),
(89, 0, 'Электродрель Metabo SBEV 1300-2 S', 7800, 'Китай', 'Германия', 2),
(90, 0, 'Электролобзик Интерскол МП-100/700Э', 6100, 'Россия', 'Россия', 2),
(91, 0, 'Строительный фен iNGCO HG20082-1', 2700, 'Китай', 'Китай', 2),
(92, 0, 'Фрезер Graphite 59G717', 11300, 'Китай', 'Польша', 2),
(93, 0, 'Газонокосилка Huter GLM-5.0 ST', 19600, 'Китай', 'Германия', 1),
(94, 0, 'Клеевый пистолет Tundra', 1250, 'Китай', 'Китай', 2),
(95, 0, 'Кусторез BOSCH', 23800, 'Китай', 'Германия', 1),
(96, 0, 'Миксер ЗУБР 1400-2', 8300, 'Белоруссия', 'Россия', 2),
(97, 0, 'Отбойный молоток Makita HM1307C', 71700, 'Польша', 'Япония', 2),
(98, 0, 'Шуруповёрт HIKOKI-DS12DA', 5100, 'Китай', 'Япония', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sector`
--

INSERT INTO `sector` (`id`, `name`) VALUES
(1, 'Инструменты');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT для таблицы `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
