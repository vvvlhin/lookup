<?php
include_once("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="main_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="https://shop.to.coffee/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <script src="jquery-3.7.1.js"></script>
    <title>TO.Coffee - интернет-магазин вкусного кофе</title>
</head>

<body>
    <div class="mobile-wrapper">
        <header class="mobile-header">
            <svg id="wrapper-list-hambugrer" width="16" height="12" viewBox="0 0 16 12">
                <path data-name="Rounded Rectangle 81 copy 4" class="cls-1" d="M872,958h-8a1,1,0,0,1-1-1h0a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1h0A1,1,0,0,1,872,958Zm6-5H864a1,1,0,0,1,0-2h14A1,1,0,0,1,878,953Zm0-5H864a1,1,0,0,1,0-2h14A1,1,0,0,1,878,948Z" transform="translate(-863 -946)"></path>
            </svg>
            <div class="logo-container">
                <img id="logo" src="img/logo_small.png" alt="">
            </div>
            <div class="mobile-nav-menu">
                <a href="">
                    <div id="search" class="nav-menu-item"></div>
                </a>
                <a href="">
                    <div id="acc" class="nav-menu-item"></div>
                </a>
                <a href="">
                    <div id="cart" class="nav-menu-item"></div>
                </a>
                <div class="cart_counter" id="mobile-nav-menu-item">
                    0
                </div>
            </div>
        </header>
        <div class="mobile-main-container">
            <span id="bcg_preview">
                <img id="bcg_preview_img" src="img/bcg_preview.jpg" alt="">
            </span>
        </div>
        <div class="mobile-aside">
            <div class="main-container-aside-bar">
                <ul class="aside_bar">
                    <li class="aside-bar-item">
                        <img id="Free_shipping_img" src="img/Free_shipping.png" alt="">
                        <h2 id="Free_shipping_text">Бесплатная доставка</h2>
                        <p id="Free_shipping_text">Уменьшим стоимость доставки товара <br> на 15% от стоимости заказа
                        </p>
                    </li>
                    <li class="aside-bar-item">
                        <img id="payment_img" src="img/payment.png" alt="">
                        <h2 id="Free_shipping_text">Оплата при получении</h2>
                        <p id="Free_shipping_text">Платите только тогда, когда <br> забрали посылку</p>
                    </li>
                    <li class="aside-bar-item">
                        <img id="gift_img" src="img/gift.png" alt="">
                        <h2 id="Free_shipping_text">Чай в подарок</h2>
                        <p id="Free_shipping_text">Фирменная чайная смесь в подарок <br> при заказе от 3 000 ₽</p>
                    </li>
                    <li class="aside-bar-item">
                        <img id="discount_img" src="img/discount.png" alt="">
                        <h2 id="Free_shipping_text">Система скидок</h2>
                        <p id="Free_shipping_text">Действует накопительная система <br> скидок от суммы заказа</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="moblie-main">
            <div class="main-container-main">
                <div class="top_block">
                    <h3>Лучшие предложения</h3>
                    <div class="right_side_top_block">
                        <ul class="top_block_tabs">
                            <a href="">
                                <li id="top_block_tabs_checked">Хит</li>
                            </a>
                            <a href="">
                                <li>Советуем</li>
                            </a>
                            <a href="">
                                <li>Новинка</li>
                            </a>
                            <a href="">
                                <li>Акция</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <?php
                $sql = mysqli_query($connect, "SELECT * FROM `goods`");
                $products = array();
                while ($result = mysqli_fetch_array($sql)) {
                    $products[] = $result;
                }
                ?>
                <ul class="goods_list">
                    <? foreach ($products as $product) : ?>
                        <li class="goods-list-item">
                            <img id="milk_blend_img" src=<?= $product['img'] ?> alt="">
                            <div class="properties">
                                <h3>
                                    <?= $product['name'] ?>
                                </h3>
                                <div class="properties_item">
                                    <div class="properties_title">Тип обжарки</div>
                                    <div class="properties_value">
                                        <?= $product['type_obz'] ?>
                                    </div>
                                </div>
                                <div class="properties_item">
                                    <div class="properties_title">Кислотность</div>
                                    <div class="properties_value">
                                        <img id="properties-value-img" src=<?= $product['kislot'] ?> alt="">
                                    </div>
                                </div>
                                <div class="properties_item">
                                    <div class="properties_title">Горечь</div>
                                    <div class="properties_value">
                                        <img id="properties-value-img" src=<?= $product['gorech'] ?> alt="">
                                    </div>
                                </div>
                                <div class="properties_item">
                                    <div class="properties_title">Полнотелость</div>
                                    <div class="properties_value">
                                        <img id="properties-value-img" src=<?= $product['poln'] ?> alt="">
                                    </div>
                                </div>
                                <div class="cost">
                                    <div class="cost_value">
                                        <?= $product['cost'] ?>₽
                                    </div>
                                </div>
                                <ul class="weight">
                                    <li data-id="<?= $product['id'] ?>" class="border-checked">250 гр</li>
                                    <li data-id="<?= $product['id'] ?>" class="item">500 гр</li>
                                    <li data-id="<?= $product['id'] ?>" class="item">1000 гр</li>
                                </ul>
                                <select id="Combobox">
                                    <option id="Combobox_item" value="">Без помола (В зернах)</option>
                                    <option id="Combobox_item" value="">Для аэропресса</option>
                                    <option id="Combobox_item" value="">Для гейзерной кофеварки</option>
                                    <option id="Combobox_item" value="">Для капельной кофеварки</option>
                                </select>
                                <div class="container">
                                    <div class="counter_block">
                                        <span data-name="minus-btn<?= $product['id'] ?>" onclick="addHandlers()" class="minus">
                                            <h3>-</h3>
                                        </span>
                                        <span class="text">
                                            <h3 class="text-value" data-name="count<?= $product['id'] ?>">0</h3>
                                        </span>
                                        <span data-name="plus-btn<?= $product['id'] ?>" onclick="addHandlers()" class="plus">
                                            <h3>+</h3>
                                        </span>
                                    </div>
                                    <div class="button_block">
                                        <h3 id="button_block_text">В корзину</h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <? endforeach ?>
                </ul>
                <div class="more">
                    <h4 id="more_text">Загрузить еще</h4>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <div class="main-container-header">
            <ul class="wrapper-list">
                <svg id="wrapper-list-hambugrer" width="16" height="12" viewBox="0 0 16 12">
                    <path data-name="Rounded Rectangle 81 copy 4" class="cls-1" d="M872,958h-8a1,1,0,0,1-1-1h0a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1h0A1,1,0,0,1,872,958Zm6-5H864a1,1,0,0,1,0-2h14A1,1,0,0,1,878,953Zm0-5H864a1,1,0,0,1,0-2h14A1,1,0,0,1,878,948Z" transform="translate(-863 -946)"></path>
                </svg>
                <div class="header-logo-container">
                    <img id="logo" src="img/logo_small.png" alt="">
                </div>
                <div class="nav-scrolled">
                    <ul class="nav-bar-scrolled">
                        <li class="nav-bar-item nav-bar-item-coffee">
                            <a href="">
                                Кофе
                                <ul class="sub-menu">
                                    <a href="">
                                        <li id="sub-menu-item">Ароматизированный кофе</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Кофейные смеси</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Моносорта</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Спешалити</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Ферментированный кофе</li>
                                    </a>
                                </ul>
                            </a>
                        </li>
                        <li class="nav-bar-item nav-bar-item-coffee">
                            <a href="">
                                Чай
                                <ul class="sub-menu">
                                    <a href="">
                                        <li id="sub-menu-item">Белый</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Зеленый</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Пуэр</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Травяной</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Улун</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Черный</li>
                                    </a>
                                </ul>
                            </a>
                        </li>
                        <a href="">
                            <li class="nav-bar-item">акции</li>
                        </a>
                        <a href="">
                            <li class="nav-bar-item">как купить</li>
                        </a>
                        <a href="">
                            <li class="nav-bar-item">о компании</li>
                        </a>
                        <a href="">
                            <li class="nav-bar-item">оптовикам</li>
                        </a>
                    </ul>
                </div>
                <div class="nav-menu">
                    <a href="">
                        <div id="search-scroll"></div>
                    </a>
                    <a href="">
                        <div id="acc"></div>
                    </a>
                    <a href="">
                        <div id="stat"></div>
                    </a>
                    <div class="stat_counter" id="nav-menu-item">
                        0
                    </div>
                    <a href="">
                        <div id="cart"></div>
                    </a>
                    <div class="cart_counter" id="nav-menu-item">
                        0
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="main-container">
        <header class="header">
            <h1 id="phone">8 800 302-26-54</h1>
            <div class="logo-container">
                <img id="logo" src="img/logo_small.png" alt="">
            </div>
            <div class="nav-menu">
                <a href="">
                    <div id="search" id="nav-menu-item"></div>
                </a>
                <a href="">
                    <div id="acc" id="nav-menu-item"></div>
                </a>
                <a href="">
                    <div id="stat"></div>
                </a>
                <div class="stat_counter" id="nav-menu-item">
                    0
                </div>
                <a href="">
                    <div id="cart" id="nav-menu-item"></div>
                </a>
                <div class="cart_counter" id="nav-menu-item">
                    0
                </div>
            </div>
        </header>
        <nav>
            <ul class="nav-bar">
                <li class="nav-bar-item nav-bar-item-coffee">
                    <a href="">
                        Кофе
                        <ul class="sub-menu">
                            <a href="">
                                <li id="sub-menu-item">Ароматизированный кофе</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Кофейные смеси</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Моносорта</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Спешалити</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Ферментированный кофе</li>
                            </a>
                        </ul>
                    </a>
                </li>
                <li class="nav-bar-item nav-bar-item-coffee">
                    <a href="">
                        Чай
                        <ul class="sub-menu">
                            <a href="">
                                <li id="sub-menu-item">Белый</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Зеленый</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Пуэр</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Травяной</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Улун</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Черный</li>
                            </a>
                        </ul>
                    </a>
                </li>
                <a href="">
                    <li class="nav-bar-item">акции</li>
                </a>
                <a href="">
                    <li class="nav-bar-item">как купить</li>
                </a>
                <a href="">
                    <li class="nav-bar-item">о компании</li>
                </a>
                <a href="">
                    <li class="nav-bar-item">оптовикам</li>
                </a>
            </ul>
        </nav>
    </div>
    <hr>
    <div class="main-container">
        <span id="bcg_preview">
            <img id="bcg_preview_img" src="img/bcg_preview.jpg" alt="">
        </span>
    </div>
    <aside>
        <div class="main-container-aside-bar">
            <ul class="aside_bar">
                <li class="aside-bar-item">
                    <img id="Free_shipping_img" src="img/Free_shipping.png" alt="">
                    <h2 id="Free_shipping_text">Бесплатная доставка</h2>
                    <p id="Free_shipping_text">Уменьшим стоимость доставки товара <br> на 15% от стоимости заказа
                    </p>
                </li>
                <li class="aside-bar-item">
                    <img id="payment_img" src="img/payment.png" alt="">
                    <h2 id="Free_shipping_text">Оплата при получении</h2>
                    <p id="Free_shipping_text">Платите только тогда, когда <br> забрали посылку</p>
                </li>
                <li class="aside-bar-item">
                    <img id="gift_img" src="img/gift.png" alt="">
                    <h2 id="Free_shipping_text">Чай в подарок</h2>
                    <p id="Free_shipping_text">Фирменная чайная смесь в подарок <br> при заказе от 3 000 ₽</p>
                </li>
                <li class="aside-bar-item">
                    <img id="discount_img" src="img/discount.png" alt="">
                    <h2 id="Free_shipping_text">Система скидок</h2>
                    <p id="Free_shipping_text">Действует накопительная система <br> скидок от суммы заказа</p>
                </li>
            </ul>
        </div>
    </aside>
    <main>
        <div class="main-container-main">
            <div class="top_block">
                <h3>Лучшие предложения</h3>
                <div class="right_side_top_block">
                    <ul class="top_block_tabs">
                        <a href="">
                            <li id="top_block_tabs_checked">Хит</li>
                        </a>
                        <a href="">
                            <li>Советуем</li>
                        </a>
                        <a href="">
                            <li>Новинка</li>
                        </a>
                        <a href="">
                            <li>Акция</li>
                        </a>
                    </ul>
                </div>
            </div>
            <?php
            $sql = mysqli_query($connect, "SELECT * FROM `goods`");
            $products = array();
            while ($result = mysqli_fetch_array($sql)) {
                $products[] = $result;
            }
            ?>
            <div class="lox">
                <ul class="goods_list">
                    <? foreach ($products as $product) : ?>
                        <li class="goods-list-item">
                            <img id="milk_blend_img" src=<?= $product['img'] ?> alt="">
                            <div class="properties">
                                <h3>
                                    <?= $product['name'] ?>
                                </h3>
                                <div class="properties_item">
                                    <div class="properties_title">Тип обжарки</div>
                                    <div class="properties_value">
                                        <?= $product['type_obz'] ?>
                                    </div>
                                </div>
                                <div class="properties_item">
                                    <div class="properties_title">Кислотность</div>
                                    <div class="properties_value">
                                        <img id="properties-value-img" src=<?= $product['kislot'] ?> alt="">
                                    </div>
                                </div>
                                <div class="properties_item">
                                    <div class="properties_title">Горечь</div>
                                    <div class="properties_value">
                                        <img id="properties-value-img" src=<?= $product['gorech'] ?> alt="">
                                    </div>
                                </div>
                                <div class="properties_item">
                                    <div class="properties_title">Полнотелость</div>
                                    <div class="properties_value">
                                        <img id="properties-value-img" src=<?= $product['poln'] ?> alt="">
                                    </div>
                                </div>
                                <div class="cost">
                                    <div class="cost_value">
                                        <?= $product['cost'] ?>₽
                                    </div>
                                </div>
                                <ul class="weight">
                                    <li data-id="<?= $product['id'] ?>" class="border-checked">250 гр</li>
                                    <li data-id="<?= $product['id'] ?>" class="item">500 гр</li>
                                    <li data-id="<?= $product['id'] ?>" class="item">1000 гр</li>
                                </ul>
                                <select id="Combobox">
                                    <option id="Combobox_item" value="">Без помола (В зернах)</option>
                                    <option id="Combobox_item" value="">Для аэропресса</option>
                                    <option id="Combobox_item" value="">Для гейзерной кофеварки</option>
                                    <option id="Combobox_item" value="">Для капельной кофеварки</option>
                                </select>
                                <div class="container">
                                    <div class="counter_block">
                                        <span data-name="minus-btn<?= $product['id'] ?>" onclick="addHandlers()" class="minus">
                                            <h3>-</h3>
                                        </span>
                                        <span class="text">
                                            <h3 class="text-value" data-name="count<?= $product['id'] ?>">0</h3>
                                        </span>
                                        <span data-name="plus-btn<?= $product['id'] ?>" onclick="addHandlers()" class="plus">
                                            <h3>+</h3>
                                        </span>
                                    </div>
                                    <div class="button_block">
                                        <h3 id="button_block_text">В корзину</h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
        </div>
        <div class="more">
            <h4 id="more_text">Загрузить еще</h4>
        </div>
    </main>
    <footer>
        <div class="main-container-footer">
            <ul class="footer-items">
                <li>2024 © интернет-магазин кофе shop.to.coffee</li>
                <li>
                    <ul class="footer-social-items">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 5 11">
                                <path data-name="Shape 51 copy 13" class="cls-1" d="M402.738,141a18.086,18.086,0,0,0,1.136,1.727,0.474,0.474,0,0,1-.144.735l-0.3.257a1,1,0,0,1-.805.279,4.641,4.641,0,0,1-1.491-.232,4.228,4.228,0,0,1-1.9-3.1,9.614,9.614,0,0,1,.025-4.3,4.335,4.335,0,0,1,1.934-3.118,4.707,4.707,0,0,1,1.493-.244,0.974,0.974,0,0,1,.8.272l0.3,0.255a0.481,0.481,0,0,1,.113.739c-0.454.677-.788,1.159-1.132,1.731a0.43,0.43,0,0,1-.557.181l-0.468-.061a0.553,0.553,0,0,0-.7.309,6.205,6.205,0,0,0-.395,2.079,6.128,6.128,0,0,0,.372,2.076,0.541,0.541,0,0,0,.7.3l0.468-.063a0.432,0.432,0,0,1,.555.175h0Z" transform="translate(-399 -133)"></path>
                            </svg>
                            <h3 id="phone-text">8 800 302-26-54</h3>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 11 11">
                                <path data-name="Rectangle 583 copy 16" class="cls-1" d="M367,142h-7a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h7a2,2,0,0,1,2,2v5A2,2,0,0,1,367,142Zm0-2v-3.039L364,139h-1l-3-2.036V140h7Zm-6.634-5,3.145,2.079L366.634,135h-6.268Z" transform="translate(-358 -133)"></path>
                            </svg>
                            <h3 id="phone-text">shop@to.coffee</h3>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 9 12">
                                <path class="cls-1" d="M959.135,82.315l0.015,0.028L955.5,87l-3.679-4.717,0.008-.013a4.658,4.658,0,0,1-.83-2.655,4.5,4.5,0,1,1,9,0A4.658,4.658,0,0,1,959.135,82.315ZM955.5,77a2.5,2.5,0,0,0-2.5,2.5,2.467,2.467,0,0,0,.326,1.212l-0.014.022,2.181,3.336,2.034-3.117c0.033-.046.063-0.094,0.093-0.142l0.066-.1-0.007-.009a2.468,2.468,0,0,0,.32-1.2A2.5,2.5,0,0,0,955.5,77Z" transform="translate(-951 -75)"></path>
                            </svg>
                            <h3 id="phone-text">г. Владимир, ул. Производственная Зона, 4</h3>
                        </li>
                    </ul>
                </li>
            </ul>
    </footer>
    </div>
    <script src="main_page.js"></script>
</body>

</html>