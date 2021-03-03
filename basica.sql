-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2021 г., 13:12
-- Версия сервера: 5.6.43-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basica`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `img`, `title`, `description`) VALUES
(1, 'about-us.jpg', 'Кто мы такие', '<h2>We are a Graphic Design company</h2>\r\n						<h3>Specializing in Wordpress Theme Development</h3>\r\n						<p>\r\n							Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.\r\n						</p>\r\n						<p>\r\n							Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.\r\n						</p>\r\n						<h3>Wide range of services</h3>\r\n						<p>\r\n							Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.\r\n							Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.\r\n						</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `adminmenu`
--

CREATE TABLE `adminmenu` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `adminmenu`
--

INSERT INTO `adminmenu` (`id`, `icon`, `name`, `link`, `sort`) VALUES
(1, 'fa fa-home', 'Дашборд', '/admin/dashboard', 1),
(2, 'ion-settings', 'Настройки', '/admin/settings/', 3),
(3, 'fa fa-users', 'Пользователи', '/admin/users/', 4),
(5, ' fa fa-newspaper-o', 'Новости', '/admin/news/', 5),
(6, 'fa  fa-file-text', 'Блог', '/admin/blog/', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `img`, `title`, `text`, `date`, `author`) VALUES
(6, '2.jpg', 'Тестовая статья 6', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2021-02-10', 'admin'),
(8, '2.jpg', 'Тестовая статья 5', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2021-02-10', 'admin'),
(9, '2.jpg', 'Тестовая статья 6', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2021-02-10', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `tag`) VALUES
(1, 'Категория 1', 'Описание категории 1', 'cat1'),
(2, 'Категория 2', 'Описание категории 2', 'cat2');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `git` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`id`, `img`, `name`, `function`, `facebook`, `git`, `twitter`, `date`) VALUES
(1, '1.jpg', 'Nicolas Freeman', 'Web Developer', 'ff', 'ff', 'ff', NULL),
(2, '2.jpg', 'Sarah Tipton', 'Web Designer', '#', '#', '#', NULL),
(3, '3.jpg', 'Luca Grammont', 'Project Manage', '#', '#', '#', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `sort`) VALUES
(1, 'Главная', '/', 1),
(2, 'Контакты', '/contacts/', 4),
(3, 'Новости', '/news/', 3),
(4, 'О нас', '/about/', 2),
(5, 'Блог', '/blog/', 5),
(6, '<span style=\"color:red;\">Админка</span>', '/admin/dashboard', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `img`, `title`, `text`, `date`, `author`) VALUES
(10, '1.jpg', 'Тестовая новость 1', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2021-02-10', NULL),
(17, '2.jpg', 'Тестовая новость 2', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2021-02-10', NULL),
(18, '3.jpg', 'Тестовая новость 3', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2021-02-10', NULL),
(19, '4.jpg', 'Тестовая новость 4', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2021-02-10', NULL),
(21, '1.jpg', 'Тестовая новость 8', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', '2021-03-02', 'Luca Grammont');

-- --------------------------------------------------------

--
-- Структура таблицы `opt`
--

CREATE TABLE `opt` (
  `id` int(11) NOT NULL,
  `name_company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_facebook` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_twitter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_in` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_rss` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `opt`
--

INSERT INTO `opt` (`id`, `name_company`, `desc_company`, `option_title`, `option_text`, `option_address`, `option_email`, `option_phone`, `social_title`, `social_text`, `social_facebook`, `social_twitter`, `social_in`, `social_rss`) VALUES
(1, 'О нашей компании1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.1', 'Наши контакты1', 'Звоните, пишите1', 'г. Санкт-Петербург1', 'info@site.ru1', '+7 (812) 111-11-111', 'Мы в социальных сетях1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.1', 'https://facebook.com1', 'https://twitter.com1', 'https://linkedin.com1', '/1'),
(2, 'О нашей компании123', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.1', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'О нашей компании123', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.1', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'name_company', 'О нашей компании'),
(2, 'desc_company', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.'),
(3, 'option_title', 'Наши контакты'),
(4, 'option_text', 'Звоните, пишите'),
(5, 'option_address', 'г. Санкт-Петербург'),
(6, 'option_email', 'info@site.ru'),
(7, 'option_phone', '+7 (812) 111-11-11'),
(8, 'social_title', 'Мы в социальных сетях'),
(9, 'social_text', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.'),
(10, 'social_facebook', 'https://facebook.com'),
(11, 'social_twitter', 'https://twitter.com'),
(12, 'social_in', 'https://linkedin.com'),
(13, 'social_rss', '#');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `adminmenu`
--
ALTER TABLE `adminmenu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `opt`
--
ALTER TABLE `opt`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `adminmenu`
--
ALTER TABLE `adminmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `opt`
--
ALTER TABLE `opt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
