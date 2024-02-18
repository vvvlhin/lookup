-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2024 г., 17:33
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `card_img`
--

CREATE TABLE `card_img` (
  `Code_img` int(11) NOT NULL,
  `Name_img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `card_img`
--

INSERT INTO `card_img` (`Code_img`, `Name_img`) VALUES
(1, 'img/milk_blend.jpg'),
(2, 'img/irlandskiy_krem.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `Code_cart` int(11) NOT NULL,
  `Code_order` int(11) NOT NULL,
  `Code_tovara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `City`
--

CREATE TABLE `City` (
  `Code_city` int(11) NOT NULL,
  `City_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `City`
--

INSERT INTO `City` (`Code_city`, `City_name`) VALUES
(1, 'Москва'),
(2, 'Ростов-на-Дону'),
(3, 'Воронеж');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `Code_clients` int(11) NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `names` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`Code_clients`, `surname`, `names`, `patronymic`, `phone`) VALUES
(1, 'Волошин', 'Валентин', 'Олегович', '+79591918958');

-- --------------------------------------------------------

--
-- Структура таблицы `group_tovar`
--

CREATE TABLE `group_tovar` (
  `Code_group_tovar` int(11) NOT NULL,
  `name_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `group_tovar`
--

INSERT INTO `group_tovar` (`Code_group_tovar`, `name_group`) VALUES
(1, 'Кофе'),
(2, 'Чай');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `Code_orders` int(11) NOT NULL,
  `City` int(11) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `Client` int(11) NOT NULL,
  `Comment` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rate`
--

CREATE TABLE `rate` (
  `Code_rate` int(11) NOT NULL,
  `img_rate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rate`
--

INSERT INTO `rate` (`Code_rate`, `img_rate`) VALUES
(1, 'img/1.png'),
(2, 'img/2.png'),
(3, 'img/3.png'),
(4, 'img/4.png'),
(5, 'img/5.png');

-- --------------------------------------------------------

--
-- Структура таблицы `shipping_method`
--

CREATE TABLE `shipping_method` (
  `Code_method` int(11) NOT NULL,
  `Name_method` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `shipping_method`
--

INSERT INTO `shipping_method` (`Code_method`, `Name_method`) VALUES
(1, 'СДЭК (Постмат)'),
(2, 'СДЭК (Самовывоз)'),
(3, 'СДЭК (Доставка курьером)');

-- --------------------------------------------------------

--
-- Структура таблицы `Tovar`
--

CREATE TABLE `Tovar` (
  `Code_tovar` int(11) NOT NULL,
  `Name_tovar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` int(11) DEFAULT NULL,
  `Groups_tovar` int(11) NOT NULL,
  `Type_obz` int(11) NOT NULL,
  `Kisl` int(11) NOT NULL,
  `gorech` int(11) NOT NULL,
  `polnotel` int(11) NOT NULL,
  `cost250` int(11) NOT NULL,
  `cost500` int(11) NOT NULL,
  `cost1000` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit` tinyint(1) NOT NULL,
  `recommend` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tovar`
--

INSERT INTO `Tovar` (`Code_tovar`, `Name_tovar`, `image`, `Groups_tovar`, `Type_obz`, `Kisl`, `gorech`, `polnotel`, `cost250`, `cost500`, `cost1000`, `description`, `short_description`, `hit`, `recommend`, `new`, `stock`) VALUES
(1, 'Милк Бленд', 1, 1, 1, 2, 4, 3, 490, 940, 1780, 'Описание вкуса\n\nВкус сочный с нотами темных ягод , очень низкой кислотностью и яркой сладостью выпечки.\n\nПроисхождение и особенности :\n\nКупаж разработан специально для приготовления молочных кофейных напитков. Специальная обжарка данного бленда под эспрессо позволяет идеально приготовить капучино , латте , раф, флэт уйт и другие напитки на основе молока и кофе.  Сочетание молока и  сортов Арабики Танзании, Никарагуа и Гондураса придают напитку сбалансированный сладкий вкус с очень густой пенкой.\n\nВид кофе: арабика\nСостав: Танзания, Никарагуа и Гондурас.\nСтепень обжарки: эспрессо', 'Какао, молочный шоколад, карамель', 1, 1, 0, 0),
(2, 'Ирландский крем', 2, 1, 2, 2, 3, 4, 470, 900, 1710, 'Ароматизированный кофе на основе арабики Brazil Santos', 'Ирландский крем', 1, 0, 0, 0),
(3, 'Оскар', 1, 1, 1, 3, 1, 4, 970, 1850, 3510, 'Описание вкуса\r\n\r\nСорт Марагоджип Никарагуа имеет легкую, привлекательную горечь с нотами вина и тропических фруктов. Добавление сорта Колумбия Супремо придает смеси сладость карамели и орехов.  \r\n\r\nПроисхождение и особенности\r\n\r\nОдна из самых популярных смесей, разработанных компанией TO.Coffee. Отличительная особенность смеси — это ее основа, сорт Марагоджип Никарагуа. Этой разновидности Арабики характерны очень крупные бобы, крупнее любых других сортов, поэтому у него даже есть неофициальное название «слоновьи бобы». Это элитные бобы, которых производится не так много из-за специфики выращивания и применения. Благодаря примеси Колумбии Супремо напиток получается терпким, густым, но при этом с пониженным содержанием кофеина.\r\n\r\nВид кофе: арабика\r\nСостав: Марагоджип, Колумбия\r\nСтепень обжарки: эспрессо', 'Специи, чернослив, молочный шоколад', 1, 0, 0, 1),
(4, 'Премиум', 1, 1, 1, 3, 3, 4, 530, 1010, 1920, 'Описание вкуса\r\n\r\nСочетание трех видов зерен в эспрессо образует неповторимый вкусо-ароматический коктейль, который оценят любители бодрящего напитка. Сладкий чистый кофе с ароматом миндаля, какао-бобов, белого винограда, орехов и сухофруктов с гладким телом и нотами темного шоколада – то, что нужно для начала прекрасного дня.\r\n\r\nПроисхождение и особенности\r\n\r\nСорт Колумбия Супремо выращивают в горах на высоте 1200-2000 метров в регионах Уила, Антьокия, Толима, Сантандер и чаще всего собирают ручным способом. Зерна обладают выраженной сладостью карамели, которая накладывается на терпкость какао-бобов и вытекает в легкую кислинку, обозначенную нотками лайма или лимона.\r\nНикарагуанский кофе растет в северной части страны, в высокогорных регионах с вулканической почвой. Зерна отличаются насыщенным и ярким вкусом с небольшой кислинкой и тонким цветочным послевкусием с оттенками шоколада и специй.\r\nБразилия Серрадо — один из базовых сортов под эспрессо. Отличается сбалансированным вкусом без лишней кислотности. Особенность этого кофе заключаается в подготовке. Его изготавливают в зависимости от потребностей клиентов, смешивая зерна разных фермеров.\r\n\r\nСкрин (размер зерна): 17/19\r\nОбжарка: эспрессо', 'Виноград, какао, горький шоколад', 1, 0, 0, 1),
(5, 'Вьетнам Далат', 2, 1, 2, 3, 5, 4, 570, 1080, 2040, 'Описание вкуса\r\n\r\nВкус темного шоколада сочетается с фруктовыми нотками шиповника, апельсина и лимонника. Тело плотное, шоколадное, с приятным послевкусием.\r\n\r\nПроисхождение и особенности\r\n\r\nДалат — достаточно молодой город. Свою историю он ведет со времени колонизации Вьетнама французами. Считается, что первым обратил внимание на чистый прохладный воздух этой местности Александр Йерсен в 1887 году, он же предложил построить здесь курорт. Официальным годом основания поселения считается 1863.\r\n\r\nВ 1907 году здесь была построена первая гостиница, а в 1912 году был основан город Далат, который быстро завоевал популярность у европейцев. К 1920 году формирование города было в целом завершено.\r\n\r\nСейчас Далат — это горный курорт, находящийся в окружении вечнозелёных лесов, многочисленных водопадов, озёр, живописных долин, перевалов и естественных природных парков.\r\n\r\nДоля кофейного производства Вьетнама незначительна: около 5-6 %, или около 50 тысяч тонн.\r\n\r\nВьетнам планировал к 2020 году увеличить объем производимой арабики. Основной район производства и арабики, и робусты — это так называемое Центральное нагорье, или Тай-Нгуен.\r\n\r\nАрабика здесь выращивается на высоте от 1200 до 1500 метров над уровнем моря. Одна треть ее производится в провинции Ламдонг.\r\n\r\nВ Центральном нагорье преобладает тропический климат. Высоко в горах климат меняется: температура ниже, сезон дождей менее продолжительный.\r\n\r\nБольшинство ферм принадлежит частным землевладельцам. В основном во Вьетнаме выращивают две разновидности арабики: бурбон, завезенный сюда французами, и катимор.\r\n\r\nВид кофе: арабика\r\nСпособ обработки: мытый\r\nСкрин зерна: 17–18\r\nОценка: SCA 82\r\nВысота произрастания: 1200–1500 метров над уровнем моря\r\nРостер для обжарки: Giesen W6A', 'Фундук, лимон, тёмный шоколад', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `type_obzharki`
--

CREATE TABLE `type_obzharki` (
  `Code_type` int(11) NOT NULL,
  `Name_type_obz` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_obzharki`
--

INSERT INTO `type_obzharki` (`Code_type`, `Name_type_obz`) VALUES
(1, 'Эспрессо'),
(2, 'Под фильтр');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `card_img`
--
ALTER TABLE `card_img`
  ADD PRIMARY KEY (`Code_img`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Code_cart`);

--
-- Индексы таблицы `City`
--
ALTER TABLE `City`
  ADD PRIMARY KEY (`Code_city`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Code_clients`);

--
-- Индексы таблицы `group_tovar`
--
ALTER TABLE `group_tovar`
  ADD PRIMARY KEY (`Code_group_tovar`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Code_orders`);

--
-- Индексы таблицы `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`Code_rate`);

--
-- Индексы таблицы `shipping_method`
--
ALTER TABLE `shipping_method`
  ADD PRIMARY KEY (`Code_method`);

--
-- Индексы таблицы `Tovar`
--
ALTER TABLE `Tovar`
  ADD PRIMARY KEY (`Code_tovar`),
  ADD KEY `Type_obz` (`Type_obz`),
  ADD KEY `gorech` (`gorech`),
  ADD KEY `Kisl` (`Kisl`),
  ADD KEY `polnotel` (`polnotel`),
  ADD KEY `Groups_tovar` (`Groups_tovar`),
  ADD KEY `image` (`image`);

--
-- Индексы таблицы `type_obzharki`
--
ALTER TABLE `type_obzharki`
  ADD PRIMARY KEY (`Code_type`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `card_img`
--
ALTER TABLE `card_img`
  MODIFY `Code_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `Code_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `City`
--
ALTER TABLE `City`
  MODIFY `Code_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `Code_clients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `group_tovar`
--
ALTER TABLE `group_tovar`
  MODIFY `Code_group_tovar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Code_orders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rate`
--
ALTER TABLE `rate`
  MODIFY `Code_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `shipping_method`
--
ALTER TABLE `shipping_method`
  MODIFY `Code_method` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Tovar`
--
ALTER TABLE `Tovar`
  MODIFY `Code_tovar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `type_obzharki`
--
ALTER TABLE `type_obzharki`
  MODIFY `Code_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Tovar`
--
ALTER TABLE `Tovar`
  ADD CONSTRAINT `tovar_ibfk_1` FOREIGN KEY (`Type_obz`) REFERENCES `type_obzharki` (`Code_type`),
  ADD CONSTRAINT `tovar_ibfk_2` FOREIGN KEY (`gorech`) REFERENCES `rate` (`Code_rate`),
  ADD CONSTRAINT `tovar_ibfk_3` FOREIGN KEY (`Kisl`) REFERENCES `rate` (`Code_rate`),
  ADD CONSTRAINT `tovar_ibfk_4` FOREIGN KEY (`polnotel`) REFERENCES `rate` (`Code_rate`),
  ADD CONSTRAINT `tovar_ibfk_5` FOREIGN KEY (`Groups_tovar`) REFERENCES `group_tovar` (`Code_group_tovar`),
  ADD CONSTRAINT `tovar_ibfk_6` FOREIGN KEY (`image`) REFERENCES `card_img` (`Code_img`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
