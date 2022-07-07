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
-- База данных: `cotolog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtovara` int(11) NOT NULL,
  `iduser` text NOT NULL,
  `Nazvanie` text NOT NULL,
  `razmer` text NOT NULL,
  `price` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `idtovara`, `iduser`, `Nazvanie`, `razmer`, `price`) VALUES
(29, 3, '31', 'Платье', '36', '6789');

-- --------------------------------------------------------

--
-- Структура таблицы `cityd`
--

CREATE TABLE IF NOT EXISTS `cityd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `cityd`
--

INSERT INTO `cityd` (`id`, `city`) VALUES
(1, 'Анапа');

-- --------------------------------------------------------

--
-- Структура таблицы `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'Черный'),
(2, 'Белый'),
(3, 'Красный'),
(4, 'розовый'),
(5, 'желтый'),
(6, 'Синий'),
(7, 'фиолетовый');

-- --------------------------------------------------------

--
-- Структура таблицы `countryd`
--

CREATE TABLE IF NOT EXISTS `countryd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `countryd`
--

INSERT INTO `countryd` (`id`, `country`) VALUES
(1, 'Россия');

-- --------------------------------------------------------

--
-- Структура таблицы `countrys`
--

CREATE TABLE IF NOT EXISTS `countrys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `countrys`
--

INSERT INTO `countrys` (`id`, `country`) VALUES
(1, 'Россия'),
(2, 'Китай'),
(3, 'Сша'),
(4, 'Великобритания'),
(5, 'Австрия'),
(10, 'Канада');

-- --------------------------------------------------------

--
-- Структура таблицы `letters`
--

CREATE TABLE IF NOT EXISTS `letters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `email` text NOT NULL,
  `letter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `letters`
--

INSERT INTO `letters` (`id`, `userid`, `email`, `letter`) VALUES
(1, 25, '@emai.com', 'Я написал свое обращение'),
(2, 25, '@emai.com', 'Я еще раз написал свое обращение,я крайне недоволен'),
(3, 25, '@emai.com', 'Я еще раз написал свое обращение,я крайне недоволен'),
(4, 25, 'sascha.zvigin@mail.ru', 'Я ОЧЕНЬ ОЧЕНЬ НЕДОВОЛЕН');

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `material`) VALUES
(1, 'Синтетика'),
(2, 'Трикотаж'),
(3, 'Хлопчато-бумажная'),
(4, 'Натуральная кожа'),
(5, 'Текстиль'),
(7, 'Хлопок');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `idtovara` int(11) NOT NULL,
  `secondphoto` text NOT NULL,
  `thirdphoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`idtovara`, `secondphoto`, `thirdphoto`) VALUES
(1, 'img/img9.jpg', 'img/img9.jpg'),
(2, 'img/img8.jpg', 'img/img8.jpg'),
(3, 'img/img5.jpg', 'img/img5.jpg'),
(4, 'img/IMG1.jpg', 'img/IMG1.jpg'),
(5, 'img/img3.jpg', 'img/img3.jpg'),
(6, 'img/img2.jpg', 'img/img2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `pol`
--

CREATE TABLE IF NOT EXISTS `pol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pol` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `pol`
--

INSERT INTO `pol` (`id`, `pol`) VALUES
(1, 'М'),
(2, 'Ж');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `Nazvanie` text NOT NULL,
  `country` text NOT NULL,
  `Proizvoditel` text NOT NULL,
  `type` text NOT NULL,
  `color` text NOT NULL,
  `material` text NOT NULL,
  `pol` text NOT NULL,
  `razmer` text NOT NULL,
  `img` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `Nazvanie`, `country`, `Proizvoditel`, `type`, `color`, `material`, `pol`, `razmer`, `img`, `price`) VALUES
(1, 'Толстовка', 'Россия', 'Глория джинс', 'Одежда', 'Черный', 'Трикотаж', 'М', '44', 'img/img9.jpg', '4567'),
(2, 'Туфли мужские', 'Китай', 'Обувь России', 'Обувь', 'Черный', 'Натуральная кожа', 'М', '43', 'img/img8.jpg', '1567'),
(3, 'Платье', 'Сша', 'Глория джинс', 'Одежда', 'Черный', 'Синтетика', 'Ж', '36', 'img/img5.jpg', '6789'),
(4, 'Кроссовки', 'Китай', 'Скороход', 'Обувь', 'Белый', 'Хлопок', 'М', '41', 'img/IMG1.jpg', '7900'),
(5, 'Куртка', 'Китай', 'Вестфалика', 'Одежда', 'Черный', 'Трикотаж', 'М', '42', 'img/img3.jpg', '10000'),
(6, 'Кеды', 'Китай', 'Обувь России', 'Обувь', 'Черный', 'Текстиль', 'М', '43', 'img/img2.jpg', '6890');

-- --------------------------------------------------------

--
-- Структура таблицы `proizvoditel`
--

CREATE TABLE IF NOT EXISTS `proizvoditel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Proizvoditel` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Дамп данных таблицы `proizvoditel`
--

INSERT INTO `proizvoditel` (`id`, `Proizvoditel`) VALUES
(1, 'ОАО"СибирьОдежда"'),
(2, 'АО"АнТкань"'),
(3, 'Глория джинс'),
(4, 'Вестфалика'),
(11, 'Обувь России'),
(34, 'Скороход');

-- --------------------------------------------------------

--
-- Структура таблицы `rr`
--

CREATE TABLE IF NOT EXISTS `rr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `rr`
--

INSERT INTO `rr` (`id`, `rr`) VALUES
(1, '36'),
(2, '37'),
(3, '38'),
(4, '39'),
(5, '40'),
(6, '41'),
(7, '42'),
(8, '43'),
(9, '44'),
(10, '45');

-- --------------------------------------------------------

--
-- Структура таблицы `sentadress`
--

CREATE TABLE IF NOT EXISTS `sentadress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `sentadress`
--

INSERT INTO `sentadress` (`id`, `adress`) VALUES
(3, 'улица Маяковского, 174'),
(4, 'улица Трудящихся, 2'),
(5, ' Красноармейская улица, 10');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'Обувь'),
(2, 'Одежда');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
