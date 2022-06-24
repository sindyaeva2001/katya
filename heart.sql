-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2022 г., 22:38
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `heart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `card`
--

CREATE TABLE `card` (
  `id_card` int NOT NULL,
  `kind` varchar(100) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `card`
--

INSERT INTO `card` (`id_card`, `kind`, `name`, `img`) VALUES
(1, 'Грей 2 года', 'Безумно ласковый, контактный и общительный подросток, очень смышлёный и энергичный. Грей очень тянется к человеку.', 'image 3.png'),
(2, 'Герда 2 года', 'Дружит со всеми собаками, ловко уходит от конфликтов и располагает к себе. На прогулках очень тянется к людям и маленьким детишкам.', 'image 4.png'),
(3, 'Джесси 1 год', 'Умная, добрая, рассудительная. Привита. С другими собаками и кошками ладит хорошо. Хорошо гуляет на поводке, знает команды.', 'image 5.png'),
(4, 'Кира 4 года', 'Добрая, ласковая с человеком, любит обнимашки и внимание, доброжелательна с другими собаками. На прогулке активна и любознательна.', 'image 6.png'),
(5, 'Джес 1,5 года', 'Он здоров, привит, стерилизован, хорошо гуляет на поводке.  По характеру- жизнерадостный,   прекрасно ладит с детьми и взрослыми.', 'image 7.png'),
(6, 'Барни 3 года', 'Милый, обаятельный, наидобрейший и очень позитивный парень! Прекрасно ладит с собакам. Барни сообразительный и смышлёный.', 'image 8.png');

-- --------------------------------------------------------

--
-- Структура таблицы `form`
--

CREATE TABLE `form` (
  `id_otz` int NOT NULL,
  `email` varchar(25) NOT NULL,
  `name` varchar(20) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id_card`);

--
-- Индексы таблицы `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_otz`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `card`
--
ALTER TABLE `card`
  MODIFY `id_card` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `form`
--
ALTER TABLE `form`
  MODIFY `id_otz` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
