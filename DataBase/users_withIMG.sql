-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 10 2019 г., 00:57
-- Версия сервера: 10.1.40-MariaDB
-- Версия PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SurName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThierdName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHONE` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Subj1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Subj2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Subj3` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Subj1Mark` int(32) DEFAULT NULL,
  `Subj2Mark` int(32) DEFAULT NULL,
  `Subj3Mark` int(32) DEFAULT NULL,
  `img` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`, `Name`, `SurName`, `ThierdName`, `PHONE`, `Subj1`, `Subj2`, `Subj3`, `Subj1Mark`, `Subj2Mark`, `Subj3Mark`, `img`) VALUES
(1, 'Ð¹Ñ†ÑƒÐ¹Ñƒ', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL),
(2, 'qwefdsver', 'f7e0ef389ac6133c88aedbd66b44a4e1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL),
(3, 'adfadf.@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL),
(4, '$email', '$pass', '$name', '$surname', '$thirdname', NULL, '$subject1', '$subject2', '$subject3', 0, 0, 0, NULL),
(5, 'bohdan.stas@nure.ua', '827ccb0eea8a706c4c34a16891f84e7b', 'Ð‘Ð¾Ð³Ð´Ð°Ð½', 'Ð¡Ñ‚Ð°ÑÑŒ', 'Ð›ÐµÐ¾Ð½Ð¸Ð´Ð¾Ð²Ð¸Ñ‡', NULL, 'Ð¤Ð¸Ð·Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 0, 0, 0, NULL),
(6, 'adfadf.@mail.ru', 'c20ad4d76fe97759aa27a0c99bff6710', '123', '1234', 'ddvva', NULL, 'dvs', 'dcsvf', 'svcsc dd', 0, 0, 0, NULL),
(7, 'adfadf.@mail.ru', '191531aacc7fab3ee33f3d25702ebac4', '123', '1234', 'ddvva', NULL, 'dvs', 'dcsvf', 'svcsc dd', 0, 0, 0, NULL),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL, '', '', '', 0, 0, 0, NULL),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL, '', '', '', 0, 0, 0, NULL),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL, '', '', '', 0, 0, 0, NULL),
(11, 'bohdan.stas@nure.ua', '827ccb0eea8a706c4c34a16891f84e7b', 'Ñ‰Ñ–Ð¼Ð¸Ð¾Ð¸', 'Ñ‰Ð¾Ñ‚Ð²Ñ‰Ð¼Ð¾Ð¸', 'Ñ‰Ð¾Ð¸Ñ‰Ð¾Ð¸Ñ‰Ð¸', NULL, 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'Ð¤Ð¸Ð·Ð¸ÐºÐ°', 0, 0, 0, NULL),
(12, 'shyshlo.olha@nure.ua', '827ccb0eea8a706c4c34a16891f84e7b', 'ÐžÐ»Ñ', 'Ð¨Ð¸ÑˆÐ»Ð¾', 'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€Ð¾Ð²Ð½Ð°', NULL, 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(18, 'bohdan.nikitcenko@nure.ua', '827ccb0eea8a706c4c34a16891f84e7b', 'Ð‘Ð¾Ð³Ð´Ð°Ð½', 'ÐÐ¸ÐºÐ¸Ñ‚Ñ‡ÐµÐ½ÐºÐ¾', 'Ð®Ñ€ÑŒÐµÐ²Ð¸Ñ‡', NULL, 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(19, 'adfadf.@mail.ru', '7457dff262381ec6286dd2756c89f728', 'l,l,l,', 'l,l,l,l,', 'l,l,l,', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(20, 'sanya.hyesos@nure.ua', '827ccb0eea8a706c4c34a16891f84e7b', 'Ð“Ð°ÑÐ¿Ñ‹Ð´', 'Ð¡Ñ‹Ð½Ð¾ÐºÐ¹Ð¾Ð±Ð°Ð½Ñ‹Ð¹', 'ÐœÐ°ÐºÑÐ¸Ð¼Ð¾Ð²Ð¸Ñ‡', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'Ð¤Ð¸Ð·Ð¸ÐºÐ°', 0, 0, 0, NULL),
(21, '123@nure.ua', 'b59c67bf196a4758191e42f76670ceba', '1111', '1111', '1111', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(22, 'bohdan.stas@nure.ua', 'b59c67bf196a4758191e42f76670ceba', 'cacac', 'dcscdsdcs', 'dcsdcsdcsd', NULL, 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(23, 'bohdan.stas@nure.ua', 'b59c67bf196a4758191e42f76670ceba', 'Ð‘Ð¾Ð³Ð´Ð°Ð½', 'Ð¡Ñ‚Ð°ÑÑŒ', 'Ð›ÐµÐ¾Ð½Ð¸Ð´Ð¾Ð²Ð¸Ñ‡', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 0, 0, 0, NULL),
(24, 'bohdan.stas@nure.ua', 'b59c67bf196a4758191e42f76670ceba', 'Ð‘Ð¾Ð³Ð´Ð°Ð½', 'Ð¡Ñ‚Ð°ÑÑŒ', 'Ð›ÐµÐ¾Ð½Ð¸Ð´Ð¾Ð²Ð¸Ñ‡', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 0, 0, 0, NULL),
(25, 'bohdan.stas@nure.ua', 'b59c67bf196a4758191e42f76670ceba', 'Ð‘Ð¾Ð³Ð´Ð°Ð½', 'Ð¡Ñ‚Ð°ÑÑŒ', 'Ð›ÐµÐ¾Ð½Ð¸Ð´Ð¾Ð²Ð¸Ñ‡', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 0, 0, 0, NULL),
(26, 'bohdan.stas@nure.ua', 'b59c67bf196a4758191e42f76670ceba', 'Ð‘Ð¾Ð³Ð´Ð°Ð½', 'Ð¡Ñ‚Ð°ÑÑŒ', 'Ð›ÐµÐ¾Ð½Ð¸Ð´Ð¾Ð²Ð¸Ñ‡', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 0, 0, 0, NULL),
(27, 'bohdan.stas@nure.ua', 'b59c67bf196a4758191e42f76670ceba', 'kmkmplm', 'cvcvd', 'xcvsv', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 0, 0, 0, NULL),
(28, 'asdfg.@mail.ru', 'b59c67bf196a4758191e42f76670ceba', 'asdf', 'asdf', 'asdf', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(29, 'shyshlo.olha@nure.ua', 'b59c67bf196a4758191e42f76670ceba', 'kmokm', 'okmnonon', 'onononon', NULL, 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'Ð¤Ð¸Ð·Ð¸ÐºÐ°', 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(30, 'honchar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Ð¯Ñ€Ð¸Ðº', 'Ð“Ð¾Ð½Ñ‡Ð°Ñ€', 'Ð¿Ñ‹Ð²Ð°', NULL, 'Ð£ÐºÑ€Ð°Ð¸Ð½ÑÐºÐ¸Ð¹', 'ÐœÐ°Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸ÐºÐ°', 'ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹', 0, 0, 0, NULL),
(31, 'ddadad', '827ccb0eea8a706c4c34a16891f84e7b', 'dadadad', 'dadad', 'dadadad', 'dadadadad', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'wwww3', '', 'dadad', 'Ð“Ð¾Ð½Ñ‡Ð°Ñ€Ñ…ÑƒÑƒÐ¹', 'dqeqe', 'fwgg', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 100, 100, 100, NULL),
(33, 'ddadad1', '', 'dadad', 'Ð“Ð¾Ð½Ñ‡Ð°Ñ€986', 'Ð¿Ñ‹Ð²Ð°', 'fwgg', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 100, 100, 100, '1.png'),
(34, 'qwerty123', '', 'Bohdan', 'Nikitchenko11', 'Yur', '+38088888888', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 100, 100, 100, '1560120008_i_012 (1).png'),
(35, 'portyuo', '', 'Ð“Ð¾Ð½Ñ‡Ð°Ñ€', 'Ð“Ð¾Ð½Ñ‡Ð°Ñ€986', 'Ð¿Ñ‹Ð²Ð°', 'dadadadad', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° ', 100, 100, 100, '1560120350_ik5uiBQ_iuQ.jpg'),
(36, 'stashuesos', '202cb962ac59075b964b07152d234b70', 'Ñ…ÑƒÐ¹', 'ÑÑ‚Ð°Ñ', 'ÑÐ¾ÑÑƒÑ‰Ð¸Ð¹', '+38088888888', NULL, NULL, NULL, NULL, NULL, NULL, '1560120920_photo.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
