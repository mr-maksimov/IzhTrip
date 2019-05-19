-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2019 г., 10:16
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `izhtrip`
--

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `create_date` datetime NOT NULL,
  `date_event` datetime NOT NULL,
  `date_event_finish` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `create_date`, `date_event`, `date_event_finish`) VALUES
(1, 'Хакатон', 'Было весело', '2019-05-18 00:00:00', '2019-05-18 11:00:00', '2019-05-19 15:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `landmarks`
--

CREATE TABLE `landmarks` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `landmarks`
--

INSERT INTO `landmarks` (`id`, `title`, `content`, `create_date`) VALUES
(1, 'Нулевой километр', 'Это нулевой километр города Ижевска', '2019-05-18'),
(2, 'Ижик', 'Ижик тут', '2019-05-19'),
(3, 'Монумент Навеки с Россией', 'Монумент Навеки с Россией', '2019-05-19'),
(4, 'Набережная города', 'Набережная города', '2019-05-19'),
(5, 'Музей оружия ', 'Музей оружия ', '2019-05-12'),
(6, 'Ротонда ', 'Ротонда ', '2019-05-19'),
(7, 'Летний сад М. Горького', 'Летний сад М. Горького', '2019-05-19'),
(8, 'Генеральский дом ', 'Генеральский дом ', '2019-05-19'),
(9, 'Михайло-архангельский собор ', 'Михайло-архангельский собор ', '2019-05-19'),
(10, 'Музей М.Т. Калашникова', 'Музей М.Т. Калашникова', '2019-05-19'),
(11, 'Крокодил ', 'Крокодил ', '2019-05-19'),
(12, 'Бульвар гоголя ', 'Бульвар гоголя ', '2019-05-19'),
(13, 'Вечный огонь ', 'Вечный огонь ', '2019-05-19'),
(14, 'Национальный музей УР им. Кузебая Герда', 'Национальный музей УР им. Кузебая Герда', '2019-05-19'),
(15, 'Сквер Шумайлова ', 'Сквер Шумайлова ', '2019-05-19'),
(16, 'Люблю Ижевск, Администрация города', 'Люблю Ижевск, Администрация города', '2019-05-19'),
(17, 'Вишневый сквер', 'Вишневый сквер', '2019-05-19'),
(18, 'Музей искусств ', 'Музей искусств ', '2019-05-19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `landmarks`
--
ALTER TABLE `landmarks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
