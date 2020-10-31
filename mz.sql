-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 26 2019 г., 11:55
-- Версия сервера: 5.5.39
-- Версия PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `user_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`user_id`, `catalog_id`) VALUES
(1, 30),
(1, 43),
(77777, 1),
(77777, 3),
(77777, 8),
(77777, 16),
(77777, 45),
(77777, 58);

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
`catalog_id` int(11) NOT NULL,
  `catalog_name` varchar(100) NOT NULL,
  `catalog_price` varchar(20) NOT NULL,
  `catalog_photo` varchar(100) NOT NULL,
  `catalog_number` varchar(10) NOT NULL,
  `catalog_specification` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='таблица товара' AUTO_INCREMENT=64 ;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`catalog_id`, `catalog_name`, `catalog_price`, `catalog_photo`, `catalog_number`, `catalog_specification`, `product_id`) VALUES
(1, 'Футболка', '300,00', 'images/mf001.jpeg', '10', 'Размер XL', 6),
(2, 'Футболка', '250,00', 'images/mf002.jpeg', '10', 'Размер L', 6),
(3, 'Футболка', '320,00', 'images/mf003.jpeg', '10', 'Размер XXL', 6),
(4, 'Футболка', '470,00', 'images/mf004.jpeg', '10', 'Размер L', 6),
(5, 'Футболка', '285,00', 'images/mf005.jpeg', '10', 'Размер XL', 6),
(6, 'Футболка', '350,00', 'images/mf006.jpeg', '10', 'Размер L', 6),
(7, 'Футболка', '400,00', 'images/mf007.jpg', '10', 'Размер XXX', 6),
(8, 'Штаны', '1300,00', 'images/msh001.jpeg', '10', 'Размер XL', 7),
(9, 'Штаны', '1220,00', 'images/msh002.jpeg', '10', 'Размер X', 7),
(10, 'Штаны', '1380,00', 'images/msh003.jpeg', '10', 'Размер XL', 7),
(11, 'Штаны', '1850,00', 'images/msh004.jpeg', '10', 'Размер XL', 7),
(12, 'Штаны', '1200,00', 'images/msh005.jpeg', '10', 'Размер XXX', 7),
(13, 'Штаны', '850,00', 'images/msh006.jpeg', '10', 'Размер XL', 7),
(14, 'Штаны', '153000,00', 'images/msh007.jpeg', '10', 'Размер XX', 7),
(15, 'Тапки', '200,00', 'images/mo001.jpeg', '10', 'Размер X', 8),
(16, 'Тапки', '230,00', 'images/mo002.jpeg', '10', 'Размер XL', 8),
(17, 'Тапки', '335,00', 'images/mo003.jpeg', '10', 'Размер X', 8),
(18, 'Тапки', '280,00', 'images/mo004.jpeg', '10', 'Размер XX', 8),
(19, 'Тапки', '199,00', 'images/mo005.jpeg', '10', 'Размер X', 8),
(20, 'Тапки', '300,00', 'images/mo006.jpeg', '10', 'Размер XL', 8),
(21, 'Тапки', '270,00', 'images/mo007.jpeg', '10', 'Размер X', 8),
(22, 'Блузка', '950,00', 'images/gb001.jpeg', '10', 'Размер XL', 9),
(23, 'Блузка', '870,00', 'images/gb002.jpeg', '10', 'Размер X', 9),
(24, 'Блузка', '1250,00', 'images/gb003.jpeg', '10', 'Размер M', 9),
(25, 'Блузка', '999,00', 'images/gb004.jpeg', '10', 'Размер X', 9),
(26, 'Блузка', '820,00', 'images/gb005.jpeg', '10', 'Размер XL', 9),
(27, 'Блузка', '750,00', 'images/gb006.jpeg', '10', 'Размер X', 9),
(28, 'Блузка', '930,00', 'images/gb007.jpeg', '10', 'Размер M', 9),
(29, 'Платье', '2250,00', 'images/gp001.jpeg', '10', 'Размер X', 10),
(30, 'Платье', '1800,00', 'images/gp002.jpeg', '10', 'Размер XL', 10),
(31, 'Платье', '2000,00', 'images/gp003.jpeg', '10', 'Размер X', 10),
(32, 'Платье', '1950,00', 'images/gp004.jpeg', '10', 'Размер M', 10),
(33, 'Платье', '1850,00', 'images/gp005.jpeg', '10', 'Размер XL', 10),
(34, 'Платье', '780,00', 'images/gp006.jpeg', '10', 'Размер X', 10),
(35, 'Платье', '1599,00', 'images/gp007.jpeg', '10', 'Размер M', 10),
(36, 'Туфли', '1750,00', 'images/gt001.jpg', '10', 'Размер 36-40', 11),
(37, 'Туфли', '880,00', 'images/gt002.jpg', '10', 'Размер 36-40', 11),
(38, 'Туфли', '1299,00', 'images/gt003.jpg', '10', 'Размер 36-40', 11),
(39, 'Туфли', '1750,00', 'images/gt004.jpg', '10', 'Размер 36-40', 11),
(40, 'Туфли', '2500,00', 'images/gt005.jpg', '10', 'Размер 36-40', 11),
(41, 'Туфли', '1700,00', 'images/gt006.jpg', '10', 'Размер 36-40', 11),
(42, 'Туфли', '950,00', 'images/gt007.jpg', '10', 'Размер 36-40', 11),
(43, 'Свитер', '750,00', 'images/df001.jpg', '10', 'Размер 36-48', 12),
(44, 'Свитер', '420,00', 'images/df002.jpg', '10', 'Размер 36-48', 12),
(45, 'Свитер', '700,00', 'images/df003.jpg', '10', 'Размер 36-48', 12),
(46, 'Свитер', '680,00', 'images/df004.jpg', '10', 'Размер 36-48', 12),
(47, 'Свитер', '550,00', 'images/df005.jpg', '10', 'Размер 36-48', 12),
(48, 'Свитер', '600,00', 'images/df006.jpg', '10', 'Размер 36-48', 12),
(49, 'Свитер', '499,00', 'images/df007.jpg', '10', 'Размер 36-48', 12),
(50, 'Юбка', '650,00', 'images/du001.jpg', '10', 'Размер 36-48', 13),
(51, 'Юбка', '699,00', 'images/du002.jpg', '10', 'Размер 36-48', 13),
(52, 'Юбка', '550,00', 'images/du003.jpg', '10', 'Размер 36-48', 13),
(53, 'Юбка', '600,00', 'images/du004.jpg', '10', 'Размер 36-48', 13),
(54, 'Юбка', '780,00', 'images/du005.jpg', '10', 'Размер 36-48', 13),
(55, 'Юбка', '420,00', 'images/du006.jpg', '10', 'Размер 36-48', 13),
(56, 'Юбка', '500,00', 'images/du007.jpg', '10', 'Размер 36-48', 13),
(57, 'Кроссовки', '950,00', 'images/dk001.jpg', '10', 'Размер 32-40', 14),
(58, 'Кроссовки', '1800,00', 'images/dk002.jpg', '10', 'Размер 32-40', 14),
(59, 'Кроссовки', '999,00', 'images/dk003.jpg', '10', 'Размер 32-40', 14),
(60, 'Кроссовки', '1950,00', 'images/dk004.jpg', '10', 'Размер 32-40', 14),
(61, 'Кроссовки', '700,00', 'images/dk005.jpg', '10', 'Размер 32-40', 14),
(62, 'Кроссовки', '650,00', 'images/dk006.jpg', '10', 'Размер 32-40', 14),
(63, 'Кроссовки', '1000,00', 'images/dk007.jpg', '10', 'Размер 32-40', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `user_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(11) NOT NULL,
  `type_product` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Виды товара' AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`product_id`, `type_product`) VALUES
(1, 'technics'),
(2, 'clothes'),
(3, 'food'),
(4, 'avto'),
(5, 'shoes'),
(6, 'manteeshirt\r\n'),
(7, 'manpants'),
(8, 'manslipper'),
(9, 'womenblouse'),
(10, 'womendres'),
(11, 'womenshoes'),
(12, 'childrensweater'),
(13, 'childrenskirt'),
(14, 'childrensneakers');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_photo` varchar(255) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_photo`, `user_phone`, `user_email`) VALUES
(1, 'Vicasy', '1111', 'images/photo1.jpg', '', 'vicasy@ukr.net'),
(2, 'George', '2222', 'images/photo2.jpg', '', 'georgehopekek@gmail.com'),
(3, 'Жека', '3333', 'images/photo3.jpg', '', 'qspofb@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
 ADD UNIQUE KEY `user_id` (`user_id`,`catalog_id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
 ADD PRIMARY KEY (`catalog_id`), ADD UNIQUE KEY `catalog_id` (`catalog_id`,`product_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `product_id` (`catalog_id`), ADD UNIQUE KEY `user_id_2` (`user_id`,`catalog_id`), ADD UNIQUE KEY `user_id_3` (`user_id`,`catalog_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
