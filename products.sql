-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 31 2020 г., 00:31
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID` int NOT NULL,
  `PRODUCT_ID` int NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT '1',
  `PRODUCT_NAME` varchar(255) NOT NULL,
  `PRODUCT_PRICE` float NOT NULL,
  `PRODUCT_ARTICLE` text NOT NULL,
  `PRODUCT_QUANTITY` int NOT NULL,
  `DATE_CREATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `PRODUCT_ID`, `STATUS`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_ARTICLE`, `PRODUCT_QUANTITY`, `DATE_CREATE`) VALUES
(1, 22, 1, 'test', 200, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?', 20, '2020-12-29 11:03:17'),
(2, 55, 1, 'test2', 112, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?22', 5, '2020-12-29 11:03:17'),
(3, 22, 1, 'test 3', 333, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?Lorem ipsum dolor sit amet consectetur', 1, '2020-12-29 17:59:31'),
(4, 22, 1, 'test 4', 444, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?44', 11, '2020-12-30 18:55:53'),
(5, 33, 1, 'test 5', 500, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?55', 55, '2020-12-30 18:55:53'),
(6, 3, 1, 'test 6', 666, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?66', 5, '2020-12-30 18:56:45'),
(7, 10, 1, 'test 7', 800, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?77', 5, '2020-12-30 18:56:45'),
(8, 9, 1, 'test 8', 200, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?88', 8, '2020-12-30 18:57:26'),
(9, 20, 1, 'test 9', 900, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti, debitis excepturi, omnis modi odit atque optio ut culpa ratione eveniet quae aspernatur ullam sint sit. Id quia blanditiis maiores?99', 5, '2020-12-30 18:57:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
