-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 23 2022 г., 23:12
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `usersdata`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `otchestvo` text NOT NULL,
  `email` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `otchestvo`, `email`) VALUES
(20, 'gedfgdf', '456546', 'grgrgs', 'tertger', 'gwerger', 'kmtdrhdr'),
(21, 'rtgrsttg', '553523', 'grgrgs', 'tertger', 'gwerger', 'kmtdrhdr'),
(25, 'administrator', '147852369', 'imya', 'familiya', 'otchestvo', 'email'),
(26, 'gergerreg', '534534', 'imya', 'familiya', 'otchestvo', 'email'),
(27, 'Ð ÑƒÑÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº', 'Ð½Ðµ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÐµÑ‚Ñ€ÑƒÑÑ', 'Ð¿Ð¾Ð¼Ð¾Ð³Ð¸Ñ‚Ðµ', 'Ð¿Ð¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°', 'Ð¾Ñ‚Ñ‡ÐµÑÑ‚Ð²Ð¾', 'Ð½Ð° Ñ€ÑƒÑÑÐºÐ¾Ð¼'),
(28, 'Ð ÑƒÑÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº45', '43534', 'Ð¿Ð¾Ð¼Ð¾Ð³Ð¸Ñ‚Ðµ', 'Ð¿Ð¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°', 'Ð¾Ñ‚Ñ‡ÐµÑÑ‚Ð²Ð¾', 'Ð½Ð° Ñ€ÑƒÑÑÐºÐ¾Ð¼'),
(29, 'account', '1234', 'name', 'Surname', 'otchestvo', 'email'),
(30, 'ÐºÐµÑ€ÐºÐµÑ€', '45Ð¿ÐºÑƒÐµÐ¿', 'Ð¿Ñ†ÑƒÐºÐ¿ÑƒÑ†', 'Ð¿ÑƒÐ¿ÑƒÐºÐ¿', 'ÑƒÐ¿Ñ€ÑƒÐ¿', 'email'),
(31, 'login', '78956', 'ÐÐµÐ²Ð°Ð¶Ð½Ð¾', 'Ñ„ÐÐœÐ˜Ð›Ð¬ÐÐÐ¯', 'ÐžÑ‚Ñ‡ÐµÑÑ‚Ð²ÐµÐ½Ð½Ð¾Ðµ', 'hrthrthr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
