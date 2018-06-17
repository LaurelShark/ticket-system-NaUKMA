-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2018 г., 23:09
-- Версия сервера: 5.6.34
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `super_kek_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `a_id` int(11) NOT NULL,
  `a_surname` varchar(100) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_fathname` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`a_id`, `a_surname`, `a_name`, `a_fathname`, `a_email`, `a_password`) VALUES
(1, 'KEK', 'KEK', 'KEK', 'admin@gmail.com', 'zzzz1234');

-- --------------------------------------------------------

--
-- Структура таблицы `occupations`
--

CREATE TABLE `occupations` (
  `o_id` int(11) NOT NULL,
  `o_date` date NOT NULL,
  `o_starttime` time NOT NULL,
  `o_endtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_naming` varchar(100) NOT NULL,
  `room_location` varchar(100) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_features` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_naming`, `room_location`, `room_capacity`, `room_features`) VALUES
(1, 'КМЦ', '4 корпус НаУКМА', 350, 'зал');

-- --------------------------------------------------------

--
-- Структура таблицы `rooms_occupations`
--

CREATE TABLE `rooms_occupations` (
  `ro_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `occupation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `t_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `considered_by` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`t_id`, `room_id`, `user_id`, `date`, `start_time`, `end_time`, `considered_by`, `status`) VALUES
(4, 1, 1, '0000-00-00', '123:41:23', '01:23:41', 1, 'approved'),
(5, 1, 2, '0000-00-00', '123:41:23', '01:23:41', 1, 'rejected'),
(6, 1, 1, '0000-00-00', '838:59:59', '333:33:33', 1, 'processing...');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_surname` varchar(100) NOT NULL,
  `u_e-mail` varchar(100) NOT NULL,
  `u_position` varchar(100) NOT NULL,
  `u_role` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_surname`, `u_e-mail`, `u_position`, `u_role`, `u_password`) VALUES
(1, 'kek', 'kekSurname', 'kek@gmail.com', 'lecturer', 'user', 'zzzz1234'),
(2, 'kek', 'kekSurname', 'kek@gmail.com', 'lecturer', 'user', 'zzzz1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Индексы таблицы `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`o_id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Индексы таблицы `rooms_occupations`
--
ALTER TABLE `rooms_occupations`
  ADD PRIMARY KEY (`ro_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `occupation_id` (`occupation_id`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `considered_by` (`considered_by`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `occupations`
--
ALTER TABLE `occupations`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `rooms_occupations`
--
ALTER TABLE `rooms_occupations`
  MODIFY `ro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rooms_occupations`
--
ALTER TABLE `rooms_occupations`
  ADD CONSTRAINT `rooms_occupations_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_occupations_ibfk_2` FOREIGN KEY (`occupation_id`) REFERENCES `occupations` (`o_id`);

--
-- Ограничения внешнего ключа таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`considered_by`) REFERENCES `admins` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
